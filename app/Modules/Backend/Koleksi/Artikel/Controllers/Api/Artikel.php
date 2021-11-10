<?php

namespace Artikel\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ArtikelModel;
use CodeIgniter\Files\File;

class Artikel extends ResourceController
{
	use ResponseTrait;
	protected $artikelModel;
	protected $validation;
	protected $session;
	protected $modulePath;
	protected $uploadPath;

	function __construct()
	{
		helper(['url', 'text', 'form', 'auth', 'app', 'html']);
		helper('thumbnail');
		$this->artikelModel = new \Artikel\Models\ArtikelModel();
		$this->validation = \Config\Services::validation();
		$this->session = session();
		$this->modulePath = ROOTPATH . 'public/uploads/artikel/';
		$this->uploadPath = WRITEPATH . 'uploads/';

		if (!file_exists($this->modulePath)) {
			mkdir($this->modulePath);
		}
	}

	public function index()
	{
		if (!is_allowed('artikel/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
			return $this->respond(array('status' => 201, 'error' => lang('App.permission.not.have')));
        }

		$data = $this->artikelModel->findAll();
		return $this->respond($data, 200);
	}

	public function detail($id = null)
	{
		if (!is_allowed('artikel/read')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
			return $this->respond(array('status' => 201, 'error' => lang('App.permission.not.have')));
        }

		$data = $this->artikelModel->find($id);
		if ($data) {
			return $this->respond($data);
		} else {
			return $this->failNotFound('No Data Found with id ' . $id);
		}
	}

	

	public function create()
	{
	
		// dd($hallo);
		if (!is_allowed('artikel/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
			return $this->respond(array('status' => 201, 'error' => lang('App.permission.not.have')));
        }
		// dd('tes');
         
		$this->validation->setRule('Title', 'Title', 'required');
		if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			// $slug = url_title($this->request->getPost('name'), '-', TRUE);
			// dd('tes');
			$save_data = array(
				'Title' => $this->request->getPost('Title'),
				'Content' => $this->request->getPost('Content'),
				'Creator' => $this->request->getPost('Creator'),
				'Contributor' => $this->request->getPost('Contributor'),
				'StartPage' => $this->request->getPost('StartPage'),
				'Pages' => $this->request->getPost('Pages'),
				'Subject' => $this->request->getPost('Subject'),
				'EDISISERIAL' => $this->request->getPost('EDISISERIAL'),
				'ISOPAC' => $this->request->getPost('ISOPAC'),
				'Abstract' => $this->request->getPost('Abstract'),
				'Catalog_id' => $this->request->getPost('Catalog_id')
			);
			// print_r($save_data);
			// die();

			$newArtikelId = $this->artikelModel->insert($save_data);
			if ($newArtikelId) {
				$this->session->setFlashdata('toastr_msg', lang('Artikel.info.successfully_saved'));
				$this->session->setFlashdata('toastr_type', 'success');
				$response = [
					'status'   => 201,
					'error'    => null,
					'messages' => [
						'success' => lang('Artikel.info.successfully_saved')
					]
				];
				return $this->respondCreated($response);
			} else {
				$response = [
					'status'   => 400,
					'error'    => null,
					'messages' => [
						'error' =>  lang('Artikel.info.failed_saved')
					]
				];
				return $this->fail($response);
			}
		} else {
			$message = $this->validation->listErrors();
			return $this->fail($message, 400);
		}
	}
	public function ajaxedit($idartikel)
	{
		$data = $this->artikelModel->find($idartikel);
		// dd($data);
		echo json_encode($data);
	}
	public function edit($id = null)
	{
		
		if (!is_allowed('artikel/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
			return $this->respond(array('status' => 201, 'error' => lang('App.permission.not.have')));
        }
		$idartikel = $this->request->getPost('idartikel');
		$this->validation->setRule('Title', 'Title', 'required');
		if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			// $slug = url_title($this->request->getPost('name'), '-', TRUE);
			$update_data = array(
				'Title' => $this->request->getPost('Title'),
				'Content' => $this->request->getPost('Content'),
				'Creator' => $this->request->getPost('Creator'),
				'Contributor' => $this->request->getPost('Contributor'),
				'StartPage' => $this->request->getPost('StartPage'),
				'Pages' => $this->request->getPost('Pages'),
				'Subject' => $this->request->getPost('Subject'),
				'EDISISERIAL' => $this->request->getPost('EDISISERIAL'),
				'ISOPAC' => $this->request->getPost('ISOPAC'),
				'Abstract' => $this->request->getPost('Abstract'),
				'Catalog_id' => $this->request->getPost('Catalog_id')
			);
			// dd($update_data);

			$artikelUpdate = $this->artikelModel->update($id,$update_data);
			
			if ($artikelUpdate) {
				add_log('Ubah Artikel', 'artikel', 'edit', 't_artikel', $id);
				$this->session->setFlashdata('toastr_msg', lang('Artikel.info.successfully_updated'));
				$this->session->setFlashdata('toastr_type', 'success');
				$response = [
					'status'   => 201,
					'error'    => null,
					'messages' => [
						'success' => lang('Artikel.info.successfully_updated')
					]
				];
				return $this->respond($response);
			} else {
				return $this->fail('<div class="alert alert-danger fade show" role="alert">'.lang('Artikel.info.failed_updated').'</div>', 400);
			}
		} else {
			$message = $this->validation->listErrors();
			return $this->fail($message, 400);
		}
	}

	public function delete($id = null)
	{
		if (!is_allowed('artikel/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
			return $this->respond(array('status' => 201, 'error' => lang('App.permission.not.have')));
        }

		$data = $this->artikelModel->find($id);
		if ($data) {
			$this->artikelModel->delete($id);
			add_log('Hapus Artikel', 'artikel', 'delete', 't_artikel', $id);
			$response = [
				'status'   => 200,
				'error'    => null,
				'messages' => [
					'success' => lang('Artikel.info.successfully_deleted')
				]
			];
			return $this->respondDeleted($response);
		} else {
			return $this->failNotFound(lang('Artikel.info.not_found').' ID:' . $id);
		}
	}

	
	public function upload_file()
	{
        $upload_id = $this->request->getPost('upload_id');
        $upload_field = $this->request->getPost('upload_field');
        $upload_title = $this->request->getPost('upload_title');

        $update_data = [];
        $files = (array) $this->request->getPost('file_pendukung');
        if (count($files)) {
            $listed_file = array();
            foreach ($files as $uuid => $name) {
                if (file_exists($this->uploadPath . $name)) {
                    $file = new File($this->uploadPath . $name);
                    $newFileName = $file->getRandomName();
                    $file->move($this->modulePath, $newFileName);
                    $listed_file[] = $newFileName;

					if($upload_field == 'file_image'){
						create_thumbnail($this->modulePath, $newFileName, 'thumb_', 250);
					}
                }
            }
            $update_data[$upload_field] = implode(',', $listed_file);
        }
		$artikel = $this->artikelModel->find($upload_id);
        $artikelUpdate = $this->artikelModel->update($upload_id,$update_data);
        if ($artikelUpdate) {
			unlink_file($this->modulePath, $artikel->file_image);
			unlink_file($this->modulePath, 'thumb_'.$artikel->file_image);

            $this->session->setFlashdata('toastr_msg', 'Upload file berhasil');
            $this->session->setFlashdata('toastr_type', 'success');
            $response = [
                'status'   => 201,
                'error'    => null,
                'messages' => [
                    'success' => 'Upload file berhasil'
                ]
            ];
            return $this->respondCreated($response);
        } else {
            $response = [
                'status'   => 400,
                'error'    => null,
                'messages' => [
                    'error' => 'Upload file gagal'
                ]
            ];
            return $this->fail($response);
        }
	}
}