<?php

namespace Katalog\Controllers;

use \CodeIgniter\Files\File;

class Katalog extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $katalogModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->katalogModel = new \Katalog\Models\KatalogModel();
        $this->katalogRuasModel = new \Katalog\Models\KatalogRuasModel();
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/katalog/';
        
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

		helper('adminigniter');
		helper('reference');
		helper('katalog');
    }
    public function index()
    {
        if (!is_allowed('katalog/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->katalogModel
            ->select('t_catalog.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_catalog.created_by','left')
            ->join('users updated','updated.id = t_catalog.updated_by','left');
            
        $katalogs = $query->findAll();

        $this->data['title'] = 'Katalog';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['katalogs'] = $katalogs;
        echo view('Katalog\Views\list', $this->data);
    }

    public function create()
    {
        if (!is_allowed('katalog/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah Katalog';

		$this->validation->setRule('name', 'Nama', 'trim');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			$post           = $this->request->getPost();
			$worksheet      = $post['worksheet'];
			$controlNumber  = ControlNumber();
			$bibid          = BIBID();
			$title          = ArrImplode($post['title'], ';');
			$author         = ArrImplode(array_merge([$post['author']['100']], $post['additional-author']['input']), ';');
			$place          = $post['publisher']['a'];
			$name           = $post['publisher']['b'];
			$year           = $post['publisher']['c'];
			$publication    = "$place $name $year;";
			$subject        = ArrImplode($post['subject']['desc'], ';');
			$isbn           = ArrImplode($post['issn'], ';');
			$deweyNo        = $post['class-ddc'];
			$callNumber     = ArrImplode($post['callnumber'], ';');
			$physicalDescription = ArrImplode($post['physical-description'], ';');
			$language       = $post['opt-language'];
			$notes          = ArrImplode($post['notes']['input'], ';');
			$save_data = [
				'ControlNumber'         => $controlNumber,
				'BIBID'                 => $bibid,
				'Title'                 => $title,
				'Author'                => $author,
				'PublishLocation'       => $place,
				'Publisher'             => $name,
				'PublishYear'           => $year,
				'Publikasi'             => $publication,
				'Subject'               => $subject,
				'ISBN'                  => $isbn,
				'CallNumber'            => $callNumber,
				'Note'                  => $notes,
				'Languages'             => $language,
				'DeweyNo'               => $deweyNo,
				'PhysicalDescription'   => $physicalDescription,
				'Worksheet_id'          => $worksheet,
				'created_by'            => user_id(),
			];

			// jd($save_data);
			$newKatalogRDAId = $this->katalogModel->insert($save_data);
			if ($newKatalogRDAId) {
				$post['ControlNumber'] = $controlNumber;
				$post['BIBID'] = $bibid;
				$post['005'] = '$a ' . date('YmdHis');

				$save_data_ruas = [];
				$tag008 = [
					'tag'           => '008',
					'indicator1'    => null,
					'indicator2'    => null,
					'catalog_id' 	=> $newKatalogRDAId,
					'value'        	=> '$a ' . str_pad(date('ymd'), 22, '#') . str_pad($post['target-group'], 11, '#') . str_pad($post['paper-form'], 2, '#') . str_pad($post['opt-language'], 5, '#')
				];
				array_push($save_data_ruas, $tag008);

				foreach ($post as $key => $value) :
					$column = getRuas($key,$value, $newKatalogRDAId);
					if(!empty($column)){
						array_push($save_data_ruas, $column);
					}
				endforeach;

				// jd($save_data_ruas);
				if(!empty($save_data_ruas)){
					$this->katalogRuasModel->insertBatch($save_data_ruas);
				}

				add_log('Tambah Katalog', 'katalog', 'create', 't_catalog', $newKatalogRDAId);
				set_message('toastr_msg', lang('Katalog.info.successfully_saved'));
				set_message('toastr_type', 'success');

				$response = [
					'status'   => 200,
					'error'    => null,
					'messages' => [
						'success' =>  lang('Katalog.info.successfully_saved')
					]
				];
				return json_encode($response);
			} 
        } else {
            $this->data['redirect'] = base_url('katalog/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Katalog\Views\add', $this->data);
        }
    }

    public function edit(int $id = null)
    {
        if (!is_allowed('katalog/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Katalog';
        $katalog = $this->katalogModel->find($id);
        $this->data['katalog'] = $katalog;

		$this->validation->setRule('name', 'Nama', 'required');
        if ($this->request->getPost()) {
            if ($this->validation->withRequest($this->request)->run()) {
                $slug = url_title($this->request->getPost('name'), '-', TRUE);
                $update_data = [
                    'name' => $this->request->getPost('name'),
                    'slug' => $slug,
                    'sort' => $this->request->getPost('sort'),
                    'description' => $this->request->getPost('description'),
                    'updated_by' => user_id(),
                ];

                $katalogUpdate = $this->katalogModel->update($id, $update_data);

                if ($katalogUpdate) {
                    add_log('Ubah Katalog', 'katalog', 'edit', 't_catalog', $id);
                    set_message('toastr_msg', 'Katalog berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/katalog');
                } else {
                    set_message('toastr_msg', 'Katalog gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'Katalog gagal diubah');
                    return redirect()->to('/katalog/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('katalog/edit/' . $id);
        echo view('Katalog\Views\update', $this->data);
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('katalog/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/katalog');
        }
        $katalogDelete = $this->katalogModel->delete($id);
        if ($katalogDelete) {
            add_log('Hapus Katalog', 'katalog', 'delete', 't_catalog', $id);
            set_message('toastr_msg', lang('Katalog.info.successfully_deleted'));
            set_message('toastr_type', 'success');
            return redirect()->to('/katalog');
        } else {
            set_message('toastr_msg', lang('Katalog.info.failed_deleted'));
            set_message('toastr_type', 'warning');
            set_message('message', lang('Katalog.info.failed_deleted'));
            return redirect()->to('/katalog/delete/' . $id);
        }
    }

    public function apply_status($id)
    {
        $field = $this->request->getVar('field');
        $value = $this->request->getVar('value');

        $katalogUpdate = $this->katalogModel->update($id, array($field => $value));

        if ($katalogUpdate) {
            set_message('toastr_msg', ' Katalog berhasil diubah');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', ' Katalog gagal diubah');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/katalog');
    }

	public function ajax_create()
    {
        if ($this->request->isAJAX()) :
            $post           = $this->request->getPost();
            $worksheet      = $post['worksheet'];
            $controlNumber  = ControlNumber();
            $bibid          = BIBID();
            $title          = ArrImplode($post['title'], ';');
            $author         = ArrImplode(array_merge([$post['author']['100']], $post['additional-author']['input']), ';');
            $place          = $post['publisher']['a'];
            $name           = $post['publisher']['b'];
            $year           = $post['publisher']['c'];
            $publication    = "$place $name $year;";
            $subject        = ArrImplode($post['subject']['desc'], ';');
            $isbn           = ArrImplode($post['issn'], ';');
            $deweyNo        = $post['class-ddc'];
            $callNumber     = ArrImplode($post['callnumber'], ';');
            $physicalDescription = ArrImplode($post['physical-description'], ';');
            $language       = $post['opt-language'];
            $notes          = ArrImplode($post['notes']['input'], ';');
            $save_data = [
				'ControlNumber'         => $controlNumber,
				'BIBID'                 => $bibid,
				'Title'                 => $title,
				'Author'                => $author,
				'PublishLocation'       => $place,
				'Publisher'             => $name,
				'PublishYear'           => $year,
				'Publikasi'             => $publication,
				'Subject'               => $subject,
				'ISBN'                  => $isbn,
				'CallNumber'            => $callNumber,
				'Note'                  => $notes,
				'Languages'             => $language,
				'DeweyNo'               => $deweyNo,
				'PhysicalDescription'   => $physicalDescription,
				'Worksheet_id'          => $worksheet,
				'created_by'            => user_id(),
            ];

			// jd($save_data);
            $newKatalogRDAId = $this->katalogModel->insert($save_data);
            if ($newKatalogRDAId) {
                $post['ControlNumber'] = $controlNumber;
                $post['BIBID'] = $bibid;
                $post['005'] = '$a ' . date('YmdHis');

				$save_data_ruas = [];
				$tag008 = [
					'tag'           => '008',
					'indicator1'    => null,
					'indicator2'    => null,
					'catalog_id' 	=> $newKatalogRDAId,
					'value'        	=> '$a ' . str_pad(date('ymd'), 22, '#') . str_pad($post['target-group'], 11, '#') . str_pad($post['paper-form'], 2, '#') . str_pad($post['opt-language'], 5, '#')
				];
				array_push($save_data_ruas, $tag008);

				foreach ($post as $key => $value) :
					$column = getRuas($key,$value, $newKatalogRDAId);
					if(!empty($column)){
						array_push($save_data_ruas, $column);
					}
				endforeach;

				// jd($save_data_ruas);
				if(!empty($save_data_ruas)){
					$this->katalogRuasModel->insertBatch($save_data_ruas);
				}

				return json_encode($save_data_ruas);

                // add_log('Tambah Katalog', 'katalog', 'create', 't_catalog', $newKatalogRDAId);
                // set_message('toastr_msg', lang('Katalog.info.successfully_saved'));
                // set_message('toastr_type', 'success');
                // return redirect()->to('/katalog');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Katalog.info.failed_saved'));
                echo view('Katalog\Views\add', $this->data);
            }
        endif;
    }
}
