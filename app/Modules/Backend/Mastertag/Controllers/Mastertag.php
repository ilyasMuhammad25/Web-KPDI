<?php

namespace Mastertag\Controllers;

use \CodeIgniter\Files\File;
helper('adminigniter_helper');

class Mastertag extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $mastertagModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->mastertagModel = new \Mastertag\Models\MastertagModel();
        $this->fielddatasModel = new \Mastertag\Models\FielddatasModel();
        $this->fieldindicator1s = new \Mastertag\Models\Fieldindicator1s();
        $this->fieldindicator2s = new \Mastertag\Models\Fieldindicator2s();
        
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/mastertag/';
        
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
    }
    public function index()
    {
        if (!is_allowed('mastertag/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->mastertagModel
            ->select('m_fields.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = m_fields.created_by','left')
            ->join('users updated','updated.id = m_fields.updated_by','left');
            
        $mastertags = $query->findAll();

        $this->data['title'] = 'Mastertag';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['mastertags'] = $mastertags;
        echo view('Mastertag\Views\list', $this->data);
    }

    public function create()
    {
        if (!is_allowed('mastertag/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah Mastertag';
		//$this->validation->setRule('name', 'Nama', 'required');
		$this->validation->setRule('length', 'Length', 'integer');
		//$this->validation->setRule('sortno', 'Sort No', 'integer');
		$this->validation->setRule('name', 'Nama', 'required');
		$this->validation->setRule('length', 'Length', 'required');
        $this->validation->setRule('ref_format', 'Format', 'required');
        $this->validation->setRule('ref_group', 'Group', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
            $slug = url_title($this->request->getPost('name'), '-', TRUE);
            $created_terminal = getClientIpAddress();         
            //tambah data m_fields
            $save_data = [
				'tag' => $this->request->getPost('tag'),
				'name' => $this->request->getPost('name'),
                'length' => $this->request->getPost('length'),
                'description' => $this->request->getPost('description'),
                'ref_group' => $this->request->getPost('ref_group'),
                'ref_format' => $this->request->getPost('ref_format'),
                'slug' => $slug,
				'fixed' => ($this->request->getPost('fixed')!="")?$this->request->getPost('fixed'):0,
				'enabled' => ($this->request->getPost('enabled')!="")?$this->request->getPost('enabled'):0,
				'repeatable' => ($this->request->getPost('repeatable')!="")?$this->request->getPost('repeatable'):0,
				'mandatory' => ($this->request->getPost('mandatory')!="")?$this->request->getPost('mandatory'):0,
				'customable' => ($this->request->getPost('customable')!="")?$this->request->getPost('customable'):0,
				'created_by' => user_id(),
                'created_terminal' => $created_terminal,
            ];
            
            $newMastertagId = $this->mastertagModel->insert($save_data);
            $field_id = $this->mastertagModel->getInsertID();
            
            //tambah data FielddatasModel
            for ($x = 0; $x < count($this->request->getPost('code')); $x++) {
                $save_data = [
                    'field_id'  => $field_id,
                    'code'      => @($this->request->getPost('code')[$x]!="")?$this->request->getPost('code')[$x]:"",
                    'name'      => @($this->request->getPost('fielddatas_name')[$x]!="")?$this->request->getPost('fielddatas_name')[$x]:"",
                    'delimiter' => @($this->request->getPost('delimiter')[$x]!="")?$this->request->getPost('delimiter')[$x]:"",
                    'sortno'    => @($this->request->getPost('sortno')[$x]!="")?$this->request->getPost('sortno')[$x]:null,
                    'isshow'    => @($this->request->getPost('isshow')[$x]!="")?$this->request->getPost('isshow')[$x]:0,
                    'repeatable'=> @($this->request->getPost('fielddatas_repeatable')[$x]!="")?$this->request->getPost('fielddatas_repeatable')[$x]:0,
                    'created_by'=> user_id(),
                    'created_terminal' => @$created_terminal,
                ];

               $new_m_fieldatas = $this->fielddatasModel->insert($save_data);
            }

            //tambah data m_fieldindicator1s
            for ($x = 0; $x < count($this->request->getPost('code1s')); $x++) {
                $save_data = [
                    'field_id'  => $field_id,
                    'code'      => @($this->request->getPost('code1s')[$x]!="")?$this->request->getPost('code1s')[$x]:"",
                    'name'      => @($this->request->getPost('name1s')[$x]!="")?$this->request->getPost('name1s')[$x]:"",
                    'created_by'=> user_id(),
                    'created_terminal' => @$created_terminal,
                ];
               $new_m_fieldindicator1s = $this->fieldindicator1s->insert($save_data);
            }

            //tambah data m_fieldindicator2s
            for ($x = 0; $x < count($this->request->getPost('code2s')); $x++) {
                $save_data = [
                    'field_id'  => $field_id,
                    'code'      => @($this->request->getPost('code2s')[$x]!="")?$this->request->getPost('code2s')[$x]:"",
                    'name'      => @($this->request->getPost('name2s')[$x]!="")?$this->request->getPost('name2s')[$x]:"",
                    'created_by'=> user_id(),
                    'created_terminal' => @$created_terminal,
                ];
               $new_m_fieldindicator2s = $this->fieldindicator2s->insert($save_data);
            }


            if ($newMastertagId) {
                add_log('Tambah Mastertag', 'mastertag', 'create', 'm_fields', $newMastertagId);
                set_message('toastr_msg', lang('Mastertag.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/mastertag');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Mastertag.info.failed_saved'));
                echo view('Mastertag\Views\add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('mastertag/create');
            $this->data['ref_group'] = get_ref('ref_group');
            $this->data['ref_format'] = get_ref('ref_format');
            
            $this->data['created_terminal'] = getClientIpAddress();            
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Mastertag\Views\add', $this->data);
        }
    }

    public function edit(int $id = null)
    {
        if (!is_allowed('mastertag/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Mastertag';
        $mastertag = $this->mastertagModel->find($id);
        $fielddatas = $this->fielddatasModel->where('field_id',$id)->findAll();
        $this->data['mastertag'] = $mastertag;
        $this->data['fielddatas'] = $fielddatas;
        

		$this->validation->setRule('name', 'Nama', 'required');
        $this->validation->setRule('ref_format', 'Format', 'required');
        $this->validation->setRule('ref_group', 'Group', 'required');
        if ($this->request->getPost()) {
            if ($this->validation->withRequest($this->request)->run()) {
                $slug = url_title($this->request->getPost('name'), '-', TRUE);
                $updated_terminal = getClientIpAddress();         
                $update_data = [
                    'tag' => $this->request->getPost('tag'),
                    'ref_group' => $this->request->getPost('ref_group'),
                    'ref_format' => $this->request->getPost('ref_format'),
                    'name' => $this->request->getPost('name'),
                    'length' => $this->request->getPost('length'),
                    'description' => $this->request->getPost('description'),
                    'slug' => $slug,
                    'fixed' => ($this->request->getPost('fixed')!="")?$this->request->getPost('fixed'):0,
                    'enabled' => ($this->request->getPost('enabled')!="")?$this->request->getPost('enabled'):0,
                    'repeatable' => ($this->request->getPost('repeatable')!="")?$this->request->getPost('repeatable'):0,
                    'mandatory' => ($this->request->getPost('mandatory')!="")?$this->request->getPost('mandatory'):0,
                    'customable' => ($this->request->getPost('customable')!="")?$this->request->getPost('customable'):0,
                    'updated_by' => user_id(),
                    'updated_terminal' => $updated_terminal,
    
                ];

                $mastertagUpdate = $this->mastertagModel->update($id, $update_data);
                //sub ruas tag dihapus semua baru dimasukkan data baru
                $new_m_fieldatas = $this->fielddatasModel->where('field_id', $id)->delete();
                //tambah data FielddatasModel
                $created_terminal = getClientIpAddress();         
                for ($x = 0; $x < count($this->request->getPost('code')); $x++) {
                    $save_data = [
                        'field_id'  => $id,
                        'code'      => @($this->request->getPost('code')[$x]!="")?$this->request->getPost('code')[$x]:"",
                        'name'      => @($this->request->getPost('fielddatas_name')[$x]!="")?$this->request->getPost('fielddatas_name')[$x]:"",
                        'delimiter' => @($this->request->getPost('delimiter')[$x]!="")?$this->request->getPost('delimiter')[$x]:"",
                        'sortno'    => @($this->request->getPost('sortno')[$x]!="")?$this->request->getPost('sortno')[$x]:null,
                        'isshow'    => @($this->request->getPost('isshow')[$x]!="")?$this->request->getPost('isshow')[$x]:0,
                        'repeatable'=> @($this->request->getPost('fielddatas_repeatable')[$x]!="")?$this->request->getPost('fielddatas_repeatable')[$x]:0,
                        'created_by'=> user_id(),
                        'created_terminal' => @$created_terminal,
                    ];
                    $new_m_fieldatas = $this->fielddatasModel->insert($save_data);  
                }

                        

                

                if ($mastertagUpdate) {
                    add_log('Ubah Mastertag', 'mastertag', 'edit', 'm_fields', $id);
                    set_message('toastr_msg', 'Mastertag berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/mastertag');
                } else {
                    set_message('toastr_msg', 'Mastertag gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'Mastertag gagal diubah');
                    return redirect()->to('/mastertag/edit/' . $id);
                }
            }
        }
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('mastertag/edit/' . $id);
        $this->data['ref_group'] = get_ref('ref_group');
        $this->data['ref_format'] = get_ref('ref_format');
        echo view('Mastertag\Views\update', $this->data);
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('mastertag/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/mastertag');
        }
        $mastertagDelete = $this->mastertagModel->delete($id);
        $new_m_fieldatas = $this->fielddatasModel->where('field_id', $id)->delete();
        if ($mastertagDelete) {
            add_log('Hapus Mastertag', 'mastertag', 'delete', 'm_fields', $id);
            set_message('toastr_msg', lang('Mastertag.info.successfully_deleted'));
            set_message('toastr_type', 'success');
            return redirect()->to('/mastertag');
        } else {
            set_message('toastr_msg', lang('Mastertag.info.failed_deleted'));
            set_message('toastr_type', 'warning');
            set_message('message', lang('Mastertag.info.failed_deleted'));
            return redirect()->to('/mastertag/delete/' . $id);
        }
    }

    public function apply_status($id)
    {
        $field = $this->request->getVar('field');
        $value = $this->request->getVar('value');

        $mastertagUpdate = $this->mastertagModel->update($id, array($field => $value));

        if ($mastertagUpdate) {
            set_message('toastr_msg', ' Mastertag berhasil diubah');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', ' Mastertag gagal diubah');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/mastertag');
    }
}
