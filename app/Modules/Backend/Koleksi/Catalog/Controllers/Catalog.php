<?php

namespace Catalog\Controllers;

use \CodeIgniter\Files\File;

class Catalog extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $catalogModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->catalogModel = new \Catalog\Models\CatalogModel();
        $this->catalogRuasModel = new \Catalog\Models\CatalogRuasModel();
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/catalog/';
        
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
		helper('catalog');
    }
    public function index()
    {
        if (!is_allowed('catalog/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->catalogModel
            ->select('t_catalog.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_catalog.created_by','left')
            ->join('users updated','updated.id = t_catalog.updated_by','left');
            
		$slug = $this->request->getVar('slug');
		if(!empty($slug)){
			$isRDA = (int) strtoupper($slug) == 'RDA';
			$query->where('t_catalog.isRDA',$isRDA);
		}   

        $catalogs = $query->findAll();

        $this->data['title'] = 'Catalog';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['catalogs'] = $catalogs;
        echo view('Catalog\Views\list', $this->data);
    }

    public function create()
    {
        if (!is_allowed('catalog/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah Catalog';

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
			$newCatalogId = $this->catalogModel->insert($save_data);
			if ($newCatalogId) {
				$post['ControlNumber'] = $controlNumber;
				$post['BIBID'] = $bibid;
				$post['005'] = '$a ' . date('YmdHis');

				$save_data_ruas = [];
				$tag008 = [
					'tag'           => '008',
					'indicator1'    => null,
					'indicator2'    => null,
					'catalog_id' 	=> $newCatalogId,
					'value'        	=> '$a ' . str_pad(date('ymd'), 22, '#') . str_pad($post['target-group'], 11, '#') . str_pad($post['paper-form'], 2, '#') . str_pad($post['opt-language'], 5, '#')
				];
				array_push($save_data_ruas, $tag008);

				foreach ($post as $key => $value) :
					$column = getRuas($key,$value, $newCatalogId);
					if(!empty($column)){
						array_push($save_data_ruas, $column);
					}
				endforeach;

				// jd($save_data_ruas);
				if(!empty($save_data_ruas)){
					$this->catalogRuasModel->insertBatch($save_data_ruas);
				}

				add_log('Tambah Catalog', 'Catalog', 'create', 't_catalog', $newCatalogId);
				set_message('toastr_msg', lang('Catalog.info.successfully_saved'));
				set_message('toastr_type', 'success');

				$response = [
					'status'   => 200,
					'error'    => null,
					'messages' => [
						'success' =>  lang('Catalog.info.successfully_saved')
					]
				];
				return json_encode($response);
			} 
        } else {
            $this->data['redirect'] = base_url('catalog/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Catalog\Views\add', $this->data);
        }
    }

    public function edit(int $id = null)
    {
        if (!is_allowed('catalog/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Catalog';
        $Catalog = $this->catalogModel->find($id);
        $this->data['Catalog'] = $Catalog;

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

                $CatalogUpdate = $this->catalogModel->update($id, $update_data);

                if ($CatalogUpdate) {
                    add_log('Ubah Catalog', 'Catalog', 'edit', 't_catalog', $id);
                    set_message('toastr_msg', 'Catalog berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/Catalog');
                } else {
                    set_message('toastr_msg', 'Catalog gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'Catalog gagal diubah');
                    return redirect()->to('/catalog/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('catalog/edit/' . $id);
        echo view('Catalog\Views\update', $this->data);
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('catalog/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/Catalog');
        }
        $CatalogDelete = $this->catalogModel->delete($id);
        if ($CatalogDelete) {
            add_log('Hapus Catalog', 'Catalog', 'delete', 't_catalog', $id);
            set_message('toastr_msg', lang('Catalog.info.successfully_deleted'));
            set_message('toastr_type', 'success');
            return redirect()->to('/Catalog');
        } else {
            set_message('toastr_msg', lang('Catalog.info.failed_deleted'));
            set_message('toastr_type', 'warning');
            set_message('message', lang('Catalog.info.failed_deleted'));
            return redirect()->to('/catalog/delete/' . $id);
        }
    }

    public function apply_status($id)
    {
        $field = $this->request->getVar('field');
        $value = $this->request->getVar('value');

        $CatalogUpdate = $this->catalogModel->update($id, array($field => $value));

        if ($CatalogUpdate) {
            set_message('toastr_msg', ' Catalog berhasil diubah');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', ' Catalog gagal diubah');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/Catalog');
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
            $newCatalogId = $this->catalogModel->insert($save_data);
            if ($newCatalogId) {
                $post['ControlNumber'] = $controlNumber;
                $post['BIBID'] = $bibid;
                $post['005'] = '$a ' . date('YmdHis');

				$save_data_ruas = [];
				$tag008 = [
					'tag'           => '008',
					'indicator1'    => null,
					'indicator2'    => null,
					'Catalog_id' 	=> $newCatalogId,
					'value'        	=> '$a ' . str_pad(date('ymd'), 22, '#') . str_pad($post['target-group'], 11, '#') . str_pad($post['paper-form'], 2, '#') . str_pad($post['opt-language'], 5, '#')
				];
				array_push($save_data_ruas, $tag008);

				foreach ($post as $key => $value) :
					$column = getRuas($key,$value, $newCatalogId);
					if(!empty($column)){
						array_push($save_data_ruas, $column);
					}
				endforeach;

				// jd($save_data_ruas);
				if(!empty($save_data_ruas)){
					$this->catalogRuasModel->insertBatch($save_data_ruas);
				}

				return json_encode($save_data_ruas);

                // add_log('Tambah Catalog', 'Catalog', 'create', 't_catalog', $newCatalogId);
                // set_message('toastr_msg', lang('Catalog.info.successfully_saved'));
                // set_message('toastr_type', 'success');
                // return redirect()->to('/Catalog');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Catalog.info.failed_saved'));
                echo view('Catalog\Views\add', $this->data);
            }
        endif;
    }
}
