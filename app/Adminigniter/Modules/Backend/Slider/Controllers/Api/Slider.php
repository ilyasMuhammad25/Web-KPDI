<?php

namespace App\Adminigniter\Modules\Backend\Slider\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\SliderModel;
use CodeIgniter\Files\File;

class Slider extends ResourceController
{
	use ResponseTrait;
	protected $sliderModel;
	protected $validation;
	protected $session;
	protected $modulePath;
	protected $uploadPath;

	function __construct()
	{
		helper(['url', 'text', 'form', 'auth', 'app', 'html']);
		$this->sliderModel = new \App\Adminigniter\Modules\Backend\Slider\Models\SliderModel();
		$this->validation = \Config\Services::validation();
		$this->session = session();
		$this->modulePath = ROOTPATH . 'public/uploads/slider/';
		$this->uploadPath = WRITEPATH . 'uploads/';

		if (!file_exists($this->modulePath)) {
			mkdir($this->modulePath);
		}
	}

	public function index()
	{
		if (!is_allowed('slider/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
			return $this->respond(array('status' => 201, 'error' => lang('App.permission.not.have')));
        }

		$data = $this->sliderModel->findAll();
		return $this->respond($data, 200);
	}

	public function detail($id = null)
	{
		if (!is_allowed('slider/read')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
			return $this->respond(array('status' => 201, 'error' => lang('App.permission.not.have')));
        }

		$data = $this->sliderModel->find($id);
		if ($data) {
			return $this->respond($data);
		} else {
			return $this->failNotFound('No Data Found with id ' . $id);
		}
	}

	public function create()
	{
		if (!is_allowed('slider/create')) {
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

			$newSliderId = $this->sliderModel->insert($save_data);
			if ($newSliderId) {
				$this->session->setFlashdata('toastr_msg', 'Slider berhasil ditambah');
				$this->session->setFlashdata('toastr_type', 'success');
				$response = [
					'status'   => 201,
					'error'    => null,
					'messages' => [
						'success' => 'Slider berhasil ditambah'
					]
				];
				return $this->respondCreated($response);
			} else {
				$response = [
					'status'   => 400,
					'error'    => null,
					'messages' => [
						'error' => 'Slider gagal ditambah'
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
		if (!is_allowed('slider/update')) {
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

			$sliderUpdate = $this->sliderModel->update($id, $update_data);
			if ($sliderUpdate) {
				add_log('Ubah Slider', 'slider', 'edit', 't_slider', $id);
				$this->session->setFlashdata('toastr_msg', 'Slider berhasil diubah');
				$this->session->setFlashdata('toastr_type', 'success');
				$response = [
					'status'   => 201,
					'error'    => null,
					'messages' => [
						'success' => 'Slider berhasil diubah'
					]
				];
				return $this->respond($response);
			} else {
				return $this->fail('<div class="alert alert-danger fade show" role="alert">Slider gagal diubah</div>', 400);
			}
		} else {
			$message = $this->validation->listErrors();
			return $this->fail($message, 400);
		}
	}

	public function delete($id = null)
	{
		if (!is_allowed('slider/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
			return $this->respond(array('status' => 201, 'error' => lang('App.permission.not.have')));
        }

		$data = $this->sliderModel->find($id);
		if ($data) {
			$this->sliderModel->delete($id);
			add_log('Hapus Slider', 'slider', 'delete', 't_slider', $id);
			$response = [
				'status'   => 200,
				'error'    => null,
				'messages' => [
					'success' => 'Slider berhasil dihapus'
				]
			];
			return $this->respondDeleted($response);
		} else {
			return $this->failNotFound('Data tidak ditemukan dengan id ' . $id);
		}
	}
}
