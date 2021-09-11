<?php

namespace Tag\Controllers;

use \CodeIgniter\Files\File;
helper('adminigniter_helper');

class Tag extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $fieldModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->fieldModel = new \Tag\Models\FieldModel();
        $this->fieldDataModel = new \Tag\Models\FieldDataModel();
        $this->fieldIndicator1Model = new \Tag\Models\FieldIndicator1Model();
        $this->fieldIndicator2Model = new \Tag\Models\FieldIndicator2Model();
        
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/tag/';
        
        if (!file_exists($this->uploadPath)) {
            mkdir($this->uploadPath);
        }

        if (!file_exists($this->modulePath)) {
            mkdir($this->modulePath);
        }

        $this->auth = \Myth\Auth\Config\Services::authentication();
        $this->authorize = \Myth\Auth\Config\Services::authorization();
        $this->session = service('session');

        if (! $this->auth->check() )
		{
			$this->session->set('redirect_url', current_url() );
			return redirect()->route('login');
		} 

		helper('tag');
    }
    public function index()
    {
        if (!is_allowed('tag/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->fieldModel
            ->select('m_field.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = m_field.created_by','left')
            ->join('users updated','updated.id = m_field.updated_by','left');
            
        $tags = $query->findAll();

        $this->data['title'] = 'Tag';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['tags'] = $tags;
        echo view('Tag\Views\list', $this->data);
    }

    public function create()
    {
        if (!is_allowed('tag/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah Tag';
        $this->validation->setRule('ref_format', 'Format', 'required');
        $this->validation->setRule('ref_group', 'Group', 'required');
		$this->validation->setRule('tag', 'Tag', 'required');
		$this->validation->setRule('name', 'Nama', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
            $slug = url_title($this->request->getPost('name'), '-', TRUE);
            $created_terminal = getClientIpAddress();         
            
			// Field
            $save_data = [
                'slug' 				=> $slug,
				'tag' 				=> $this->request->getPost('tag'),
				'name' 				=> $this->request->getPost('name'),
                'length' 			=> $this->request->getPost('length'),
                'description' 		=> $this->request->getPost('description'),
                'ref_group' 		=> $this->request->getPost('ref_group'),
                'ref_format' 		=> $this->request->getPost('ref_format'),
				'fixed' 			=> ($this->request->getPost('fixed')!="")?$this->request->getPost('fixed'):0,
				'enabled' 			=> ($this->request->getPost('enabled')!="")?$this->request->getPost('enabled'):0,
				'repeatable' 		=> ($this->request->getPost('repeatable')!="")?$this->request->getPost('repeatable'):0,
				'mandatory' 		=> ($this->request->getPost('mandatory')!="")?$this->request->getPost('mandatory'):0,
				'customable' 		=> ($this->request->getPost('customable')!="")?$this->request->getPost('customable'):0,
				'created_by' 		=> user_id(),
                'created_terminal' 	=> $created_terminal,
            ];
            
            $newTagId = $this->fieldModel->insert($save_data);
            $field_id = $this->fieldModel->getInsertID();
            
			// Field Data
			$index_arr          = $this->request->getPost('index0');
			if(!empty($index_arr)){
				$save_data = array();
				foreach ($index_arr as $index => $value){
					$save_data[] = [
						'field_id'      	=> $field_id,
						'code'   			=> $this->request->getPost('code0')[$value],
						'name'         		=> $this->request->getPost('name0')[$value],
						'delimiter'   		=> $this->request->getPost('delimiter0')[$value],
						'sortno'   			=> $this->request->getPost('sortno0')[$value],
						'isshow'       		=> $this->request->getPost('isshow0')[$value],
						'repeatable'       	=> $this->request->getPost('repeatable0')[$value],
						'created_by'		=> user_id(),
						'created_terminal'	=> $created_terminal,
					];
				}

				if(!empty($save_data)){
					$this->fieldDataModel->insertBatch($save_data);
				}
			}

			// Field Indicator 1
			$index_arr         	= $this->request->getPost('index1');
			if(!empty($index_arr)){
				$save_data = array();
				foreach ($index_arr as $index => $value){
					$save_data[] = [
						'field_id'      	=> $field_id,
						'code'   			=> $this->request->getPost('code1')[$value],
						'name'         		=> $this->request->getPost('name1')[$value],
						'created_by'		=> user_id(),
						'created_terminal'	=> $created_terminal,
					];
				}
				if(!empty($save_data)){
					$this->fieldIndicator1Model->insertBatch($save_data);
				}
			}

			// Field Indicator 2
			$index_arr         	= $this->request->getPost('index2');
			if(!empty($index_arr)){
				$save_data = array();
				foreach ($index_arr as $index => $value){
					$save_data[] = [
						'field_id'      	=> $field_id,
						'code'   			=> $this->request->getPost('code2')[$value],
						'name'         		=> $this->request->getPost('name2')[$value],
						'created_by'		=> user_id(),
						'created_terminal'	=> $created_terminal,
					];
				}
				if(!empty($save_data)){
					$this->fieldIndicator2Model->insertBatch($save_data);
				}
			}

            
            if ($newTagId) {
                add_log('Tambah Tag', 'tag', 'create', 'm_field', $newTagId);
                set_message('toastr_msg', lang('Tag.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/tag');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Tag.info.failed_saved'));
                echo view('Tag\Views\add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('tag/create');
            $this->data['ref_group'] = get_ref('ref_group');
            $this->data['ref_format'] = get_ref('ref_format');
            
            $this->data['created_terminal'] = getClientIpAddress();            
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Tag\Views\add', $this->data);
        }
    }

    public function edit(int $id = null)
    {
        if (!is_allowed('tag/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Tag';
        $this->validation->setRule('ref_format', 'Format', 'required');
        $this->validation->setRule('ref_group', 'Group', 'required');
		$this->validation->setRule('tag', 'Tag', 'required');
		$this->validation->setRule('name', 'Nama', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
            $slug = url_title($this->request->getPost('name'), '-', TRUE);
            $updated_terminal = getClientIpAddress();         
            
			// Field
            $update_data = [
                'slug' 				=> $slug,
				'tag' 				=> $this->request->getPost('tag'),
				'name' 				=> $this->request->getPost('name'),
                'length' 			=> $this->request->getPost('length'),
                'description' 		=> $this->request->getPost('description'),
                'ref_group' 		=> $this->request->getPost('ref_group'),
                'ref_format' 		=> $this->request->getPost('ref_format'),
				'fixed' 			=> ($this->request->getPost('fixed')!="")?$this->request->getPost('fixed'):0,
				'enabled' 			=> ($this->request->getPost('enabled')!="")?$this->request->getPost('enabled'):0,
				'repeatable' 		=> ($this->request->getPost('repeatable')!="")?$this->request->getPost('repeatable'):0,
				'mandatory' 		=> ($this->request->getPost('mandatory')!="")?$this->request->getPost('mandatory'):0,
				'customable' 		=> ($this->request->getPost('customable')!="")?$this->request->getPost('customable'):0,
				'updated_by' 		=> user_id(),
                'updated_terminal' 	=> $updated_terminal,
            ];
            
            $updateTag = $this->fieldModel->update($id, $update_data);
            
			// Field Data
			$index_arr          = $this->request->getPost('index0');
			if(!empty($index_arr)){
				$save_data = array();
				$update_data = array();
				foreach ($index_arr as $index => $value){
					$existing = $this->fieldDataModel->find($value);

					if(!empty($existing)){
						$update_data[] = [
							'id'				=> $value,
							'field_id'      	=> $id,
							'code'   			=> $this->request->getPost('code0')[$value],
							'name'         		=> $this->request->getPost('name0')[$value],
							'delimiter'   		=> $this->request->getPost('delimiter0')[$value],
							'sortno'   			=> $this->request->getPost('sortno0')[$value],
							'isshow'       		=> $this->request->getPost('isshow0')[$value],
							'repeatable'       	=> $this->request->getPost('repeatable0')[$value],
							'updated_by'		=> user_id(),
							'updated_terminal'	=> $updated_terminal,
						];
					} else {
						$save_data[] = [
							'field_id'      	=> $id,
							'code'   			=> $this->request->getPost('code0')[$value],
							'name'         		=> $this->request->getPost('name0')[$value],
							'delimiter'   		=> $this->request->getPost('delimiter0')[$value],
							'sortno'   			=> $this->request->getPost('sortno0')[$value],
							'isshow'       		=> $this->request->getPost('isshow0')[$value],
							'repeatable'       	=> $this->request->getPost('repeatable0')[$value],
							'created_by'		=> user_id(),
							'created_terminal'	=> $updated_terminal,
						];
					}
				}

				if(!empty($save_data)){
					$this->fieldDataModel->insertBatch($save_data);
				}

				if(!empty($update_data)){
					$this->fieldDataModel->updateBatch($update_data, 'id');
				}
			}

			// Field Indicator 1
			$index_arr         	= $this->request->getPost('index1');
			if(!empty($index_arr)){
				$save_data = array();
				$update_data = array();
				foreach ($index_arr as $index => $value){
					$existing = $this->fieldIndicator1Model->find($value);
					if(!empty($existing)){
						$update_data[] = [
							'id'				=> $value,
							'field_id'      	=> $id,
							'code'   			=> $this->request->getPost('code1')[$value],
							'name'         		=> $this->request->getPost('name1')[$value],
							'updated_by'		=> user_id(),
							'updated_terminal'	=> $updated_terminal,
						];
					} else {
						$save_data[] = [
							'field_id'      	=> $id,
							'code'   			=> $this->request->getPost('code1')[$value],
							'name'         		=> $this->request->getPost('name1')[$value],
							'created_by'		=> user_id(),
							'created_terminal'	=> $updated_terminal,
						];
					}
				}
				if(!empty($save_data)){
					$this->fieldIndicator1Model->insertBatch($save_data);
				}
				if(!empty($update_data)){
					$this->fieldIndicator1Model->updateBatch($update_data, 'id');
				}
			}

			// Field Indicator 1
			$index_arr         	= $this->request->getPost('index2');
			if(!empty($index_arr)){
				$save_data = array();
				$update_data = array();
				foreach ($index_arr as $index => $value){
					$existing = $this->fieldIndicator2Model->find($value);
					if(!empty($existing)){
						$update_data[] = [
							'id'				=> $value,
							'field_id'      	=> $id,
							'code'   			=> $this->request->getPost('code2')[$value],
							'name'         		=> $this->request->getPost('name2')[$value],
							'updated_by'		=> user_id(),
							'updated_terminal'	=> $updated_terminal,
						];
					} else {
						$save_data[] = [
							'field_id'      	=> $id,
							'code'   			=> $this->request->getPost('code2')[$value],
							'name'         		=> $this->request->getPost('name2')[$value],
							'created_by'		=> user_id(),
							'created_terminal'	=> $updated_terminal,
						];
					}
				}
				if(!empty($save_data)){
					$this->fieldIndicator2Model->insertBatch($save_data);
				}
				if(!empty($update_data)){
					$this->fieldIndicator2Model->updateBatch($update_data, 'id');
				}
			}

            
            if ($updateTag) {
                add_log('Ubah Tag', 'tag', 'edit', 'm_field', $id);
                set_message('toastr_msg', lang('Tag.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/tag');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Tag.info.failed_saved'));
                echo view('Tag\Views\update', $this->data);
            }
        } else {
			$tag = $this->fieldModel->find($id);
            $this->data['tag'] = $tag;
            $this->data['redirect'] = base_url('tag/edit/'.$id);
                     
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Tag\Views\update', $this->data);
        }
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('tag/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/tag');
        }
        $tagDelete = $this->fieldModel->delete($id);
        $new_m_fieldatas = $this->fieldDataModel->where('field_id', $id)->delete();
        if ($tagDelete) {
            add_log('Hapus Tag', 'tag', 'delete', 'm_field', $id);
            set_message('toastr_msg', lang('Tag.info.successfully_deleted'));
            set_message('toastr_type', 'success');
            return redirect()->to('/tag');
        } else {
            set_message('toastr_msg', lang('Tag.info.failed_deleted'));
            set_message('toastr_type', 'warning');
            set_message('message', lang('Tag.info.failed_deleted'));
            return redirect()->to('/tag/delete/' . $id);
        }
    }

    public function apply_status($id)
    {
        $field = $this->request->getVar('field');
        $value = $this->request->getVar('value');

        $tagUpdate = $this->fieldModel->update($id, array($field => $value));

        if ($tagUpdate) {
            set_message('toastr_msg', ' Tag berhasil diubah');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', ' Tag gagal diubah');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/tag');
    }
}
