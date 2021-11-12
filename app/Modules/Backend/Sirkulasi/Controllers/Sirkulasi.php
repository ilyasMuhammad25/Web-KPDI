<?php

namespace Sirkulasi\Controllers;

use \CodeIgniter\Files\File;

class Sirkulasi extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $anggotaModel;
    protected $eksemplarModel;
    protected $eksemplarLoanModel;
    protected $eksemplarLoanItemModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->anggotaModel = new \Anggota\Models\AnggotaModel();
		$this->eksemplarModel = new \Eksemplar\Models\EksemplarModel();
        $this->eksemplarLoanModel = new \Sirkulasi\Models\EksemplarLoanModel();
        $this->eksemplarLoanItemModel = new \Sirkulasi\Models\EksemplarLoanItemModel();
        $this->eksemplarLoanItemExtendModel = new \Sirkulasi\Models\EksemplarLoanItemExtendModel();
        $this->eksemplarLoanItemPenaltyModel = new \Sirkulasi\Models\EksemplarLoanItemPenaltyModel();
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/sirkulasi/';
        
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
		helper('anggota');
		helper('tgl_indo');
        helper('url');
        helper('thumbnail');
        helper('sirkulasi');
        helper('eksemplar');
        helper('cart');
    }

	public function index()
    {
        if (!is_allowed('sirkulasi/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $slug = $this->request->getVar('slug') ?? 'loan';

		if($slug == 'loan'){
			$this->index_loan();
		}

		if($slug == 'return'){
			$this->index_return();
		}

		if($slug == 'extend'){
			$this->index_extend();
		}

		if($slug == 'penalty'){
			$this->index_penalty();
		}
    }
	
    public function index_loan()
    {
        $query = $this->eksemplarLoanModel
            ->select('t_eksemplar_loan.*')
            ->select('t_anggota.name as member_name, t_anggota.MemberNo as member_no')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_eksemplar_loan.created_by','left')
            ->join('users updated','updated.id = t_eksemplar_loan.updated_by','left')
            ->join('t_anggota','t_anggota.id = t_eksemplar_loan.anggota_id','left');
            
        $sirkulasis = $query->findAll();

        $this->data['title'] = 'Sirkulasi';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['sirkulasis'] = $sirkulasis;
        echo view('Sirkulasi\Views\list', $this->data);
    }

	public function index_return()
    {
		$query = $this->eksemplarLoanItemModel
			->select('t_eksemplar_loan_item.*')
			->select('t_eksemplar.barcode_no, t_eksemplar.register_no, t_eksemplar.rfid, t_eksemplar.price ')
			->select('t_anggota.name as member_name, t_anggota.MemberNo as member_no')
			->select('t_catalog.title, t_catalog.publisher')

			->join('t_eksemplar','t_eksemplar.id = t_eksemplar_loan_item.eksemplar_id','inner')
			->join('t_anggota','t_anggota.id = t_eksemplar_loan_item.anggota_id','inner')
			->join('t_catalog','t_catalog.id = t_eksemplar.catalog_id','inner');
            
        $sirkulasis = $query->findAll();

        $this->data['title'] = 'Sirkulasi';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['sirkulasis'] = $sirkulasis;
		echo view('Sirkulasi\Views\list', $this->data);
    }

    public function index_extend()
    {
        $query = $this->eksemplarLoanModel
            ->select('t_eksemplar_loan.*')
            ->select('t_anggota.name as member_name, t_anggota.MemberNo as member_no')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_eksemplar_loan.created_by','left')
            ->join('users updated','updated.id = t_eksemplar_loan.updated_by','left')
            ->join('t_anggota','t_anggota.id = t_eksemplar_loan.anggota_id','left');
            
        $sirkulasis = $query->findAll();

        $this->data['title'] = 'Sirkulasi';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['sirkulasis'] = $sirkulasis;
		echo view('Sirkulasi\Views\list', $this->data);
    }

	public function index_penalty()
    {
        $query = $this->eksemplarLoanModel
            ->select('t_eksemplar_loan.*')
            ->select('t_anggota.name as member_name, t_anggota.MemberNo as member_no')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_eksemplar_loan.created_by','left')
            ->join('users updated','updated.id = t_eksemplar_loan.updated_by','left')
            ->join('t_anggota','t_anggota.id = t_eksemplar_loan.anggota_id','left');
            
        $sirkulasis = $query->findAll();

        $this->data['title'] = 'Sirkulasi';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['sirkulasis'] = $sirkulasis;
        echo view('Sirkulasi\Views\list', $this->data);
    }

	public function create()
    {
		$slug = $this->request->getVar('slug') ?? 'loan';

		if($slug == 'loan'){
			$this->create_loan();
		}

		if($slug == 'return'){
			$this->create_return();
		}

		if($slug == 'extend'){
			$this->create_extend();
		}

		if($slug == 'penalty'){
			$this->create_penalty();
		}
	}

	public function create_loan() {
        if (!is_allowed('sirkulasi/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

		$member_no = $this->request->getVar('member_no');

		$query = $this->eksemplarLoanItemModel
			->select('t_eksemplar_loan_item.*')
			->select('t_eksemplar.barcode_no, t_eksemplar.register_no, t_eksemplar.rfid, t_eksemplar.price ')
			->select('t_anggota.name as member_name, t_anggota.MemberNo as member_no')
			->select('t_catalog.title, t_catalog.publication, t_catalog.publisher, t_catalog.publish_location, t_catalog.publish_year')

			->join('t_eksemplar','t_eksemplar.id = t_eksemplar_loan_item.eksemplar_id','inner')
			->join('t_anggota','t_anggota.id = t_eksemplar_loan_item.anggota_id','inner')
			->join('t_catalog','t_catalog.id = t_eksemplar.catalog_id','inner')
			->where('t_eksemplar_loan_item.loan_status','Loan')
			->where('t_anggota.MemberNo', $member_no);
			
		$sirkulasis = $query->findAll();
		$this->data['sirkulasis'] = $sirkulasis;

        $this->data['title'] = 'Entri Peminjaman';
		$this->validation->setRule('member_no', 'Nomor Anggota', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			$member_no = $this->request->getPost('member_no');
			$anggota = $this->anggotaModel->where('MemberNo',$member_no)->get()->getRow();
			$max_loan_days = get_loan_days($anggota->id);
			$due_date = get_due_date($max_loan_days);
			dd($due_date);

            $save_data = [
				'anggota_id' => $anggota->id,
                'created_by' => user_id(),
            ];

            $newEksemplarLoanID = $this->eksemplarLoanModel->protect(false)->insert($save_data);
            if($newEksemplarLoanID){
				$barcode_arr = $this->request->getPost('barcodes');
				if(!empty($barcode_arr)){

					$save_data_eksemplar_loan_item = array();
					$update_data_eksemplar = array();
					foreach ($barcode_arr as $index => $barcode){
						$eksemplar = get_eksemplar($barcode);
						$save_data_eksemplar_loan_item[] = [
							'eksemplar_loan_id' 	=> $newEksemplarLoanID,
							'anggota_id' 			=> $anggota->id,
							'eksemplar_id' 			=> $eksemplar->id,
							'location_library_id' 	=> $eksemplar->location_library_id,
							'created_by'			=> user_id(),
							'loan_date'				=> date('Y-m-d'),
							'due_date'				=> $due_date,
							'loan_status'			=> 'Loan', //Flag di List Peminjaman
						];

						$update_data_eksemplar[] = [
							'id' 					=> $eksemplar->id,
							'availability_id'		=> get_ref_id('dipinjam','slug','ref_status'),
						];
					}

					if(!empty($save_data_eksemplar_loan_item)){
						$this->eksemplarLoanItemModel->insertBatch($save_data_eksemplar_loan_item);
					}

					if(!empty($update_data_eksemplar)){
						$this->eksemplarModel->updateBatch($update_data_eksemplar, 'id');
					}
				}

				add_log('Entri Peminjaman', 'sirkulasi', 'create', 't_sirkulasi', $newEksemplarLoanID);
				set_message('toastr_msg', 'Sirkulasi peminjaman berhasil diproses');
				set_message('toastr_type', 'success');

				return redirect()->back();
			} else {
				set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Sirkulasi.info.failed_saved'));
                echo view('Sirkulasi\Views\peminjaman\add', $this->data);
			}
		} else { 
			set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
			echo view('Sirkulasi\Views\add', $this->data);
		}
    }

	public function create_return() {
        if (!is_allowed('sirkulasi/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

		$member_no = $this->request->getVar('member_no');

		$query = $this->eksemplarLoanItemModel
			->select('t_eksemplar_loan_item.*')
			->select('t_eksemplar.barcode_no, t_eksemplar.register_no, t_eksemplar.rfid, t_eksemplar.price ')
			->select('t_anggota.name as member_name, t_anggota.MemberNo as member_no')
			->select('t_catalog.title, t_catalog.publication, t_catalog.publisher, t_catalog.publish_location, t_catalog.publish_year')

			->join('t_eksemplar','t_eksemplar.id = t_eksemplar_loan_item.eksemplar_id','inner')
			->join('t_anggota','t_anggota.id = t_eksemplar_loan_item.anggota_id','inner')
			->join('t_catalog','t_catalog.id = t_eksemplar.catalog_id','inner')
			->where('t_eksemplar_loan_item.loan_status','Loan')
			->where('t_anggota.MemberNo', $member_no);
			
		$sirkulasis = $query->findAll();
		$this->data['sirkulasis'] = $sirkulasis;
		$this->data['slug'] = 'pengembalian';


        $this->data['title'] = 'Entri Pengembalian';
		$this->validation->setRule('member_no', 'Nomor Anggota', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			$member_no = $this->request->getPost('member_no');
			$anggota = $this->anggotaModel->where('MemberNo',$member_no)->get()->getRow();
			$max_loan_days = get_loan_days($anggota->id);
			$due_date = get_due_date($max_loan_days);

			$id_arr = $this->request->getPost('ids');
			if(!empty($id_arr)){
				$update_data_eksemplar_loan_item = array();
				$update_data_eksemplar = array();
				foreach ($id_arr as $index => $id){
					$eksemplar_loan_item = $this->eksemplarLoanItemModel->find($id);
					$update_data_eksemplar_loan_item[] = [
						'id' 					=> $id,
						'updated_by'			=> user_id(),
						'actual_return_date'	=> date('Y-m-d'), 
						'loan_status'			=> 'Return', //Flag di List Pengembalian
					];

					$update_data_eksemplar[] = [
						'id' 					=> $eksemplar_loan_item->eksemplar_id,
						'availability_id'		=> get_ref_id('tersedia','slug','ref_status'),
					];
				}

				if(!empty($update_data_eksemplar_loan_item)){
					$this->eksemplarLoanItemModel->updateBatch($update_data_eksemplar_loan_item, 'id');
				}

				if(!empty($update_data_eksemplar)){
					$this->eksemplarModel->updateBatch($update_data_eksemplar, 'id');
				}
			}

			set_message('toastr_msg', 'Sirkulasi pengembalian berhasil diproses');
			set_message('toastr_type', 'success');

			cart_destroy();

			return redirect()->back();
		} else { 
			set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
			echo view('Sirkulasi\Views\add', $this->data);
		}
    }

	public function create_extend() {
        if (!is_allowed('sirkulasi/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

		$member_no = $this->request->getVar('member_no');

		$query = $this->eksemplarLoanItemModel
			->select('t_eksemplar_loan_item.*')
			->select('t_eksemplar.barcode_no, t_eksemplar.register_no, t_eksemplar.rfid, t_eksemplar.price ')
			->select('t_anggota.name as member_name, t_anggota.MemberNo as member_no')
			->select('t_catalog.title, t_catalog.publication, t_catalog.publisher, t_catalog.publish_location, t_catalog.publish_year')

			->join('t_eksemplar','t_eksemplar.id = t_eksemplar_loan_item.eksemplar_id','inner')
			->join('t_anggota','t_anggota.id = t_eksemplar_loan_item.anggota_id','inner')
			->join('t_catalog','t_catalog.id = t_eksemplar.catalog_id','inner')
			->where('t_eksemplar_loan_item.loan_status','Loan')
			->where('t_anggota.MemberNo', $member_no);
			
		$sirkulasis = $query->findAll();
		$this->data['sirkulasis'] = $sirkulasis;
		$this->data['slug'] = 'perpanjangan';


        $this->data['title'] = 'Entri Perpanjangan';
		$this->validation->setRule('member_no', 'Nomor Anggota', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			$member_no = $this->request->getPost('member_no');
			$anggota = $this->anggotaModel->where('MemberNo',$member_no)->get()->getRow();
			$max_loan_days = get_loan_days($anggota->id);
			$due_date = get_due_date($max_loan_days);

			$id_arr = $this->request->getPost('ids');
			if(!empty($id_arr)){
				$update_data_eksemplar_loan_item = array();
				$update_data_eksemplar = array();
				foreach ($id_arr as $index => $id){
					$eksemplar_loan_item = $this->eksemplarLoanItemModel->find($id);			
					$update_data_eksemplar_loan_item[] = [
						'id' 					=> $id,
						'updated_by'			=> user_id(),
						'due_date'				=> get_due_date($max_loan_days, $eksemplar_loan_item->due_date),
						'loan_status'			=> 'Loan', 
					];

					$update_data_eksemplar[] = [
						'id' 					=> $eksemplar_loan_item->eksemplar_id,
						'availability_id'		=> get_ref_id('tersedia','slug','ref_status'),
					];

					$save_data_eksemplar_loan_item_extend[] = [
						'eksemplar_loan_item_id'=> $eksemplar_loan_item->id,
						'eksemplar_loan_id'		=> $eksemplar_loan_item->eksemplar_loan_id,
						'eksemplar_id'			=> $eksemplar_loan_item->eksemplar_id,
						'anggota_id'			=> $eksemplar_loan_item->anggota_id,
						'due_date'				=> $eksemplar_loan_item->due_date,
						'due_date_extend'		=> get_due_date($max_loan_days, $eksemplar_loan_item->due_date),
						'created_by'			=> user_id(),
					];
		
					
				}

				if(!empty($update_data_eksemplar_loan_item)){
					$this->eksemplarLoanItemModel->updateBatch($update_data_eksemplar_loan_item, 'id');
				}

				if(!empty($update_data_eksemplar)){
					$this->eksemplarModel->updateBatch($update_data_eksemplar, 'id');
				}

				if(!empty($save_data_eksemplar_loan_item_extend)){
					$this->eksemplarLoanItemExtendModel->insertBatch($save_data_eksemplar_loan_item_extend);
				}
			}

			set_message('toastr_msg', 'Sirkulasi perpanjangan berhasil diproses');
			set_message('toastr_type', 'success');

			cart_destroy();

			return redirect()->back();
		} else { 
			set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
			echo view('Sirkulasi\Views\add', $this->data);
		}
    }

	public function create_penalty() {
        if (!is_allowed('sirkulasi/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

		$member_no = $this->request->getVar('member_no');

		$query = $this->eksemplarLoanItemModel
			->select('t_eksemplar_loan_item.*')
			->select('t_eksemplar.barcode_no, t_eksemplar.register_no, t_eksemplar.rfid, t_eksemplar.price ')
			->select('t_anggota.name as member_name, t_anggota.MemberNo as member_no')
			->select('t_catalog.title, t_catalog.publication, t_catalog.publisher, t_catalog.publish_location, t_catalog.publish_year')

			->join('t_eksemplar','t_eksemplar.id = t_eksemplar_loan_item.eksemplar_id','inner')
			->join('t_anggota','t_anggota.id = t_eksemplar_loan_item.anggota_id','inner')
			->join('t_catalog','t_catalog.id = t_eksemplar.catalog_id','inner')
			->where('t_eksemplar_loan_item.loan_status','Loan')
			->where('t_anggota.MemberNo', $member_no);
			
		$sirkulasis = $query->findAll();
		$this->data['sirkulasis'] = $sirkulasis;
		$this->data['slug'] = 'pelanggaran';


        $this->data['title'] = 'Entri Pelanggaran';
		$this->validation->setRule('member_no', 'Nomor Anggota', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			$member_no = $this->request->getPost('member_no');
			$anggota = $this->anggotaModel->where('MemberNo',$member_no)->get()->getRow();

			$id_arr = $this->request->getPost('ids');
			if(!empty($id_arr)){
				$update_data_eksemplar_loan_item = array();
				$update_data_eksemplar = array();
				foreach ($id_arr as $index => $id){
					$eksemplar_loan_item = $this->eksemplarLoanItemModel->find($id);	
					$member_type = get_member_type($eksemplar_loan_item->anggota_id);	
					$late_days = get_late_days($eksemplar_loan_item->due_date);
					$penalty_charge = $late_days * 1000;

					$update_data_eksemplar_loan_item[] = [
						'id' 					=> $id,
						'updated_by'			=> user_id(),
						'due_date'				=> get_due_date($member_type->max_loan_days, $eksemplar_loan_item->due_date),
						'loan_status'			=> 'Loan', 
					];

					$update_data_eksemplar[] = [
						'id' 					=> $eksemplar_loan_item->eksemplar_id,
						'availability_id'		=> get_ref_id('tersedia','slug','ref_status'),
					];

					$save_data_eksemplar_loan_item_penalty[] = [
						'eksemplar_loan_item_id'=> $eksemplar_loan_item->id,
						'eksemplar_loan_id'		=> $eksemplar_loan_item->eksemplar_loan_id,
						'eksemplar_id'			=> $eksemplar_loan_item->eksemplar_id,
						'anggota_id'			=> $eksemplar_loan_item->anggota_id,
						'jenis_pelanggaran_id'	=> 1, //Telat //ToBeExplore
						'jenis_denda_id'		=> 6, //Bayar Keterlambatan //ToBeExplore
						'jumlah_denda'			=> $penalty_charge,
						'jumlah_suspend'		=> $member_type->suspend_amount,
						'created_by'			=> user_id(),
					];		
				}

				if(!empty($update_data_eksemplar_loan_item)){
					$this->eksemplarLoanItemModel->updateBatch($update_data_eksemplar_loan_item, 'id');
				}

				if(!empty($update_data_eksemplar)){
					$this->eksemplarModel->updateBatch($update_data_eksemplar, 'id');
				}

				if(!empty($save_data_eksemplar_loan_item_penalty)){
					$this->eksemplarLoanItemPenaltyModel->insertBatch($save_data_eksemplar_loan_item_penalty);
				}
			}

			set_message('toastr_msg', 'Sirkulasi pelanggaran berhasil diproses');
			set_message('toastr_type', 'success');

			cart_destroy();

			return redirect()->back();
		} else { 
			set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
			echo view('Sirkulasi\Views\add', $this->data);
		}
    }

	public function process_return($id = null)
    {
		$eksemplar_loan_item = $this->eksemplarLoanItemModel->find($id);
		$update_data_eksemplar_loan_item = [
			'updated_by'			=> user_id(),
			'actual_return_date'	=> date('Y-m-d'),
			'loan_status'			=> 'Return', 
		];

		$sirkulasiUpdate = $this->eksemplarLoanItemModel->update($id, $update_data_eksemplar_loan_item);

		if($sirkulasiUpdate){
			$update_data_eksemplar = [
				'availability_id'	=> get_ref_id('tersedia','slug','ref_status'),
			];

			$this->eksemplarModel->update($eksemplar_loan_item->eksemplar_id, $update_data_eksemplar);
		}

		set_message('toastr_msg', 'Sirkulasi pengembalian berhasil diproses');
		set_message('toastr_type', 'success');
		set_message('message', 'Sirkulasi pengembalian berhasil diproses');

		return redirect()->back();
    }

	public function process_extend($id = null)
    {
		$eksemplar_loan_item = $this->eksemplarLoanItemModel->find($id);
		$max_loan_days = get_loan_days($eksemplar_loan_item->anggota_id);

		$update_data_eksemplar_loan_item = [
			'updated_by'			=> user_id(),
			'due_date'				=> get_due_date($max_loan_days, $eksemplar_loan_item->due_date),
			'loan_status'			=> 'Loan', 
		];

		$sirkulasiUpdate = $this->eksemplarLoanItemModel->update($id, $update_data_eksemplar_loan_item);

		if($sirkulasiUpdate){
			$update_data_eksemplar = [
				'availability_id'		=> get_ref_id('tersedia','slug','ref_status'),
			];

			$this->eksemplarModel->update($eksemplar_loan_item->eksemplar_id, $update_data_eksemplar);

			$save_data_eksemplar_loan_item_extend = [
				'eksemplar_loan_item_id'=> $eksemplar_loan_item->id,
				'eksemplar_loan_id'		=> $eksemplar_loan_item->eksemplar_loan_id,
				'eksemplar_id'			=> $eksemplar_loan_item->eksemplar_id,
				'anggota_id'			=> $eksemplar_loan_item->anggota_id,
				'due_date'				=> $eksemplar_loan_item->due_date,
				'due_date_extend'		=> get_due_date($max_loan_days, $eksemplar_loan_item->due_date),
				'created_by'			=> user_id(),
			];

			$sirkulasiNewID = $this->eksemplarLoanItemExtendModel->insert($save_data_eksemplar_loan_item_extend);
		}

		set_message('toastr_msg', 'Sirkulasi perpanjangan berhasil diproses');
		set_message('toastr_type', 'success');
		set_message('message', 'Sirkulasi perpanjangan berhasil diproses');

		return redirect()->back();
    }

	public function process_penalty($id = null)
    {
		$eksemplar_loan_item = $this->eksemplarLoanItemModel->find($id);
		$member_type = get_member_type($eksemplar_loan_item->anggota_id);

		$late_days = get_late_days($eksemplar_loan_item->due_date);
		$penalty_charge = $late_days * 1000;


		$update_data_eksemplar_loan_item = [
			'updated_by'			=> user_id(),
			'due_date'				=> get_due_date($member_type->max_loan_days, $eksemplar_loan_item->due_date),
			'loan_status'			=> 'Return', 
		];

		$sirkulasiUpdate = $this->eksemplarLoanItemModel->update($id, $update_data_eksemplar_loan_item);

		if($sirkulasiUpdate){
			$update_data_eksemplar = [
				'availability_id'		=> get_ref_id('tersedia','slug','ref_status'),
			];

			$this->eksemplarModel->update($eksemplar_loan_item->eksemplar_id, $update_data_eksemplar);

			$save_data_eksemplar_loan_item_penalty = [
				'eksemplar_loan_item_id'=> $eksemplar_loan_item->id,
				'eksemplar_loan_id'		=> $eksemplar_loan_item->eksemplar_loan_id,
				'eksemplar_id'			=> $eksemplar_loan_item->eksemplar_id,
				'anggota_id'			=> $eksemplar_loan_item->anggota_id,
				'jenis_pelanggaran_id'	=> 1, //Telat //ToBeExplore
				'jenis_denda_id'		=> 6, //Bayar Keterlambatan //ToBeExplore
				'jumlah_denda'			=> $penalty_charge,
				'jumlah_suspend'		=> $member_type->suspend_amount,
				'created_by'			=> user_id(),
			];

			$sirkulasiNewID = $this->eksemplarLoanItemPenaltyModel->insert($save_data_eksemplar_loan_item_penalty);
		}

		set_message('toastr_msg', 'Sirkulasi pelanggaran berhasil diproses');
		set_message('toastr_type', 'success');
		set_message('message', 'Sirkulasi pelanggaran berhasil diproses');

		return redirect()->back();
    }

	public function cart_insert($id = null)
    {
		$slug = $this->request->getVar('slug');
		$member_no = $this->request->getVar('member_no');
		$name = $slug.'_'.$member_no;
		$arr_id = $this->request->getVar('id');

		if (!empty($id)) {
			if($id > 0){
				cart_insert($name, $id);
			}
		} elseif (count($arr_id) > 0) {
			foreach ($arr_id as $id) {
				cart_insert($name, $id);
			}
		}

		set_message('toastr_msg', 'Koleksi berhasil ditambahkan ke Keranjang');
		set_message('toastr_type', 'success');
		set_message('message', 'Koleksi berhasil ditambahkan ke Keranjang');

		return redirect()->back();
    }

	public function cart_remove($id = null)
    {
		$arr_id = $this->request->getVar('id');
		if (!empty($id)) {
			cart_remove($id);
		} elseif (count($arr_id) > 0) {
			foreach ($arr_id as $id) {
				cart_remove($id);
			}
		}

		set_message('toastr_msg', 'Koleksi berhasil dihapus dari Keranjang');
		set_message('toastr_type', 'success');
		set_message('message', 'Koleksi berhasil dihapus dari Keranjang');

		return redirect()->back();
    }

	public function cart_destroy()
    {
		cart_destroy();

		set_message('toastr_msg', 'Keranjang berhasil dikosongkan');
		set_message('toastr_type', 'success');
		set_message('message', 'Keranjang berhasil dikosongkan');

		return redirect()->back();
    }
	
    public function edit(int $id = null) {
        if (!is_allowed('sirkulasi/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Sirkulasi';
        $sirkulasi = $this->eksemplarLoanModel->find($id);
        $this->data['sirkulasi'] = $sirkulasi;

		$this->validation->setRule('name', 'Nama', 'required');
        if ($this->request->getPost()) {
            if ($this->validation->withRequest($this->request)->run()) {
                $slug = url_title($this->request->getPost('name'), '-', TRUE);
                $update_data = [
                    'name' => $this->request->getPost('name'),
                    'slug' => $slug,
                    'noanggota' => $this->request->getPost('noanggota'),
                    'nobarcode' => $this->request->getPost('nobarcode'),
                    'sort' => $this->request->getPost('sort'),
                    'description' => $this->request->getPost('description'),
                    'updated_by' => user_id(),
                ];

                $sirkulasiUpdate = $this->eksemplarLoanModel->update($id, $update_data);

                if ($sirkulasiUpdate) {
                    add_log('Ubah Sirkulasi', 'sirkulasi', 'edit', 't_sirkulasi', $id);
                    set_message('toastr_msg', 'Sirkulasi berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/sirkulasi');
                } else {
                    set_message('toastr_msg', 'Sirkulasi gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'Sirkulasi gagal diubah');
                    return redirect()->to('/sirkulasi/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('sirkulasi/edit/' . $id);
        echo view('Sirkulasi\Views\updatepeminjaman', $this->data);
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('sirkulasi/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/sirkulasi');
        }
        $sirkulasiDelete = $this->eksemplarLoanModel->delete($id);
        if ($sirkulasiDelete) {
            add_log('Hapus Sirkulasi', 'sirkulasi', 'delete', 't_sirkulasi', $id);
            set_message('toastr_msg', lang('Sirkulasi.info.successfully_deleted'));
            set_message('toastr_type', 'success');
            return redirect()->to('/sirkulasi');
        } else {
            set_message('toastr_msg', lang('Sirkulasi.info.failed_deleted'));
            set_message('toastr_type', 'warning');
            set_message('message', lang('Sirkulasi.info.failed_deleted'));
            return redirect()->to('/sirkulasi/delete/' . $id);
        }
    }

    public function apply_status($id)
    {
        $field = $this->request->getVar('field');
        $value = $this->request->getVar('value');

        $sirkulasiUpdate = $this->eksemplarLoanModel->update($id, array($field => $value));

        if ($sirkulasiUpdate) {
            set_message('toastr_msg', ' Sirkulasi berhasil diubah');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', ' Sirkulasi gagal diubah');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/sirkulasi');
    }
}
