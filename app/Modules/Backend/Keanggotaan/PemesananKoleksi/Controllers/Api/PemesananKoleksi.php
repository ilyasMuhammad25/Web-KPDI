<?php

namespace PemesananKoleksi\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\PemesananKoleksiModel;
use CodeIgniter\Files\File;

class PemesananKoleksi extends ResourceController
{
	use ResponseTrait;
	protected $pemesanankoleksiModel;
	protected $validation;
	protected $session;
	protected $modulePath;
	protected $uploadPath;

	function __construct()
	{
		helper(['url', 'text', 'form', 'auth', 'app', 'html']);
		$this->pemesanankoleksiModel = new PemesananKoleksi\Models\PemesananKoleksiModel();
		$this->validation = \Config\Services::validation();
		$this->session = session();
		$this->modulePath = ROOTPATH . 'public/uploads/pemesanankoleksi/';
		$this->uploadPath = WRITEPATH . 'uploads/';

		if (!file_exists($this->modulePath)) {
			mkdir($this->modulePath);
		}
	}

	public function index()
	{
		if (!is_allowed('pemesanankoleksi/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
			return $this->respond(array('status' => 201, 'error' => lang('App.permission.not.have')));
        }

		$data = $this->pemesanankoleksiModel->findAll();
		return $this->respond($data, 200);
	}

	public function detail($id = null)
	{
		if (!is_allowed('pemesanankoleksi/read')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
			return $this->respond(array('status' => 201, 'error' => lang('App.permission.not.have')));
        }

		$data = $this->pemesanankoleksiModel->find($id);
		if ($data) {
			return $this->respond($data);
		} else {
			return $this->failNotFound('No Data Found with id ' . $id);
		}
	}

	public function create()
	{
		if (!is_allowed('pemesanankoleksi/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
			return $this->respond(array('status' => 201, 'error' => lang('App.permission.not.have')));
        }

		$this->validation->setRule('name', 'Nama', 'required');
		if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			$slug = url_title($this->request->getPost('name'), '-', TRUE);
			$save_data = array(
				'name' => $this->request->getPost('name'),
				'slug' => $slug,
				'sort' => $this->request->getPost('sort'),
				'description' => $this->request->getPost('description'),
			);

			$newPemesananKoleksiId = $this->pemesanankoleksiModel->insert($save_data);
			if ($newPemesananKoleksiId) {
				$this->session->setFlashdata('toastr_msg', lang('PemesananKoleksi.info.successfully_saved'));
				$this->session->setFlashdata('toastr_type', 'success');
				$response = [
					'status'   => 201,
					'error'    => null,
					'messages' => [
						'success' => lang('PemesananKoleksi.info.successfully_saved')
					]
				];
				return $this->respondCreated($response);
			} else {
				$response = [
					'status'   => 400,
					'error'    => null,
					'messages' => [
						'error' =>  lang('PemesananKoleksi.info.failed_saved')
					]
				];
				return $this->fail($response);
			}
		} else {
			$message = $this->validation->listErrors();
			return $this->fail($message, 400);
		}
	}

	public function edit($id = null)
	{
		if (!is_allowed('pemesanankoleksi/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
			return $this->respond(array('status' => 201, 'error' => lang('App.permission.not.have')));
        }

		$this->validation->setRule('name', 'Nama', 'required');
		if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			$slug = url_title($this->request->getPost('name'), '-', TRUE);
			$update_data = array(
				'name' => $this->request->getPost('name'),
				'slug' => $slug,
				'sort' => $this->request->getPost('sort'),
				'description' => $this->request->getPost('description'),
			);

			$pemesanankoleksiUpdate = $this->pemesanankoleksiModel->update($id, $update_data);
			if ($pemesanankoleksiUpdate) {
				add_log('Ubah PemesananKoleksi', 'pemesanankoleksi', 'edit', 't_pemesanankoleksi', $id);
				$this->session->setFlashdata('toastr_msg', lang('PemesananKoleksi.info.successfully_updated'));
				$this->session->setFlashdata('toastr_type', 'success');
				$response = [
					'status'   => 201,
					'error'    => null,
					'messages' => [
						'success' => lang('PemesananKoleksi.info.successfully_updated')
					]
				];
				return $this->respond($response);
			} else {
				return $this->fail('<div class="alert alert-danger fade show" role="alert">'.lang('PemesananKoleksi.info.failed_updated').'</div>', 400);
			}
		} else {
			$message = $this->validation->listErrors();
			return $this->fail($message, 400);
		}
	}

	public function delete($id = null)
	{
		if (!is_allowed('pemesanankoleksi/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
			return $this->respond(array('status' => 201, 'error' => lang('App.permission.not.have')));
        }

		$data = $this->pemesanankoleksiModel->find($id);
		if ($data) {
			$this->pemesanankoleksiModel->delete($id);
			add_log('Hapus PemesananKoleksi', 'pemesanankoleksi', 'delete', 't_pemesanankoleksi', $id);
			$response = [
				'status'   => 200,
				'error'    => null,
				'messages' => [
					'success' => lang('PemesananKoleksi.info.successfully_deleted')
				]
			];
			return $this->respondDeleted($response);
		} else {
			return $this->failNotFound(lang('PemesananKoleksi.info.not_found').' ID:' . $id);
		}
	}
}
