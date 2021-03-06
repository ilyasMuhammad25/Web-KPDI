<?php

namespace Sirkulasi\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\SirkulasiModel;
use CodeIgniter\Files\File;

class Sirkulasi extends ResourceController
{
	use ResponseTrait;
	protected $eksemplarModel;
	protected $eksemplarLoanItemModel;
	protected $validation;
	protected $session;
	protected $modulePath;
	protected $uploadPath;

	function __construct()
	{
		helper(['url', 'text', 'form', 'auth', 'app', 'html']);
		$this->eksemplarModel = new \Eksemplar\Models\EksemplarModel();
		$this->eksemplarLoanItemModel = new \Sirkulasi\Models\EksemplarLoanItemModel();
		$this->validation = \Config\Services::validation();
		$this->session = session();
		$this->modulePath = ROOTPATH . 'public/uploads/sirkulasi/';
		$this->uploadPath = WRITEPATH . 'uploads/';

		if (!file_exists($this->modulePath)) {
			mkdir($this->modulePath);
		}
	}

	public function index()
	{
		if (!is_allowed('sirkulasi/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
			return $this->respond(array('status' => 201, 'error' => lang('App.permission.not.have')));
        }

		$data = $this->eksemplarModel->findAll();
		return $this->respond($data, 200);
	}

	public function detail($id = null)
	{
		if (!is_allowed('sirkulasi/read')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
			return $this->respond(array('status' => 201, 'error' => lang('App.permission.not.have')));
        }

		$data = $this->eksemplarModel->find($id);
		if ($data) {
			return $this->respond($data);
		} else {
			return $this->failNotFound('No Data Found with id ' . $id);
		}
	}

	public function create()
	{
		if (!is_allowed('sirkulasi/create')) {
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

			$newSirkulasiId = $this->eksemplarModel->insert($save_data);
			if ($newSirkulasiId) {
				$this->session->setFlashdata('toastr_msg', lang('Sirkulasi.info.successfully_saved'));
				$this->session->setFlashdata('toastr_type', 'success');
				$response = [
					'status'   => 201,
					'error'    => null,
					'messages' => [
						'success' => lang('Sirkulasi.info.successfully_saved')
					]
				];
				return $this->respondCreated($response);
			} else {
				$response = [
					'status'   => 400,
					'error'    => null,
					'messages' => [
						'error' =>  lang('Sirkulasi.info.failed_saved')
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
		if (!is_allowed('sirkulasi/update')) {
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

			$sirkulasiUpdate = $this->eksemplarModel->update($id, $update_data);
			if ($sirkulasiUpdate) {
				add_log('Ubah Sirkulasi', 'sirkulasi', 'edit', 't_sirkulasi', $id);
				$this->session->setFlashdata('toastr_msg', lang('Sirkulasi.info.successfully_updated'));
				$this->session->setFlashdata('toastr_type', 'success');
				$response = [
					'status'   => 201,
					'error'    => null,
					'messages' => [
						'success' => lang('Sirkulasi.info.successfully_updated')
					]
				];
				return $this->respond($response);
			} else {
				return $this->fail('<div class="alert alert-danger fade show" role="alert">'.lang('Sirkulasi.info.failed_updated').'</div>', 400);
			}
		} else {
			$message = $this->validation->listErrors();
			return $this->fail($message, 400);
		}
	}

	public function delete($id = null)
	{
		if (!is_allowed('sirkulasi/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
			return $this->respond(array('status' => 201, 'error' => lang('App.permission.not.have')));
        }

		$data = $this->eksemplarModel->find($id);
		if ($data) {
			$this->eksemplarModel->delete($id);
			add_log('Hapus Sirkulasi', 'sirkulasi', 'delete', 't_sirkulasi', $id);
			$response = [
				'status'   => 200,
				'error'    => null,
				'messages' => [
					'success' => lang('Sirkulasi.info.successfully_deleted')
				]
			];
			return $this->respondDeleted($response);
		} else {
			return $this->failNotFound(lang('Sirkulasi.info.not_found').' ID:' . $id);
		}
	}

	public function eksemplar($barcode)
	{
		$data = $this->eksemplarModel
			->select('t_eksemplar.barcode_no')
			->select('t_catalog.*')
			->join('t_catalog','t_catalog.id = t_eksemplar.catalog_id','inner')
			->where('barcode_no',$barcode)->get()->getRow();

		if ($data) {
			return $this->respond($data);
		} else {
			return $this->failNotFound('No Data Found with Barcode ' . $barcode);
		}
	}

	public function loan_items($loan_id)
	{
		$data = $this->eksemplarModel
			->select('t_eksemplar.barcode_no')
			->select('t_catalog.*')
			->select('t_eksemplar_loan_item.loan_date, t_eksemplar_loan_item.due_date, t_eksemplar_loan_item.late_days')
			->join('t_catalog','t_catalog.id = t_eksemplar.catalog_id','inner')
			->join('t_eksemplar_loan_item','t_eksemplar_loan_item.eksemplar_id = t_eksemplar.id','inner')
			->where('t_eksemplar_loan_item.eksemplar_loan_id',$loan_id)->get()->getResult();

		if ($data) {
			return $this->respond($data);
		} else {
			return $this->failNotFound('No Data Found with Loan ID ' . $loan_id);
		}
	}
}
