<?php

namespace Home\Controllers;

use DataTables\DataTables;

class Home extends \hamkamannan\adminigniter\Controllers\BaseController
{

	protected $anggotaModel;
	function __construct()
    {
		$this->anggotaModel = new \Anggota\Models\AnggotaModel();
		helper(['form', 'url', 'auth', 'app', 'adminigniter']);
		helper('adminigniter');
		helper('reference');
		helper('katalog');
		helper('reference');
		helper('anggota');
		helper('tgl_indo');
        helper('url');
        helper('thumbnail');
	}
	public function index()
	{
		$this->data['title'] = 'Home';
		echo view('Home\Views\home\index', $this->data);
	}
	public function search()
	{
		$this->data['title'] = 'Search';
		echo view('Home\Views\search\index', $this->data);
	}
	public function anggota()
	{
		
		$this->data['ref_identitas'] = get_ref('ref_identitas');
		$this->data['ref_perkawinan'] = get_ref('ref_perkawinan');
		$this->data['ref_jeniskelamin'] = get_ref('ref_jeniskelamin');
		$this->data['ref_pendidikan'] = get_ref('ref_pendidikan');
		$this->data['ref_pekerjaan'] = get_ref('ref_perkerjaan');
		$this->data['ref_jenisanggota'] = get_ref('ref_jenisanggota');
		$this->data['ref_agama'] = get_ref('ref_agama');
		$this->data['ref_unitkerja'] = get_ref('ref_unitkerja');
		$this->data['ref_fakultas'] = get_ref('ref_fakultas');
		$this->data['ref_jurusan'] = get_ref('ref_jurusan');
		$this->data['ref_Statusanggota'] = get_ref('statanggota');
		
		
		$this->data[' MemberNo'] =  get_MemberNo();
	   
		// $this->data['categoriesperkawinan'] = $categoriesperkawinan;
	
			$this->data['title'] = 'Tambah Anggota';
	
			$this->validation->setRule('name', 'Nama', 'required');
			$this->validation->setRule('PlaceOfBirth', 'PlaceOfBirth', 'required');
			if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
				
				
	
	
				$slug = url_title($this->request->getPost('name'), '-', TRUE);
			   
				// $tanggal_lahir 	= $this->request->getPost('DateOfBirth');
			  
				$save_data = [
					'name' => $this->request->getPost('name'),
					'slug' => $slug,
					'MemberNo'=> get_MemberNo(),
	
					// 'MemberNo'=> $this->anggotaModel->MemberNo(),
					'IdentityNo'=> $this->request->getPost('IdentityNo'),
					'PlaceOfBirth'=> $this->request->getPost('PlaceOfBirth'),
					'DateOfBirth'=>  $this->request->getPost('DateOfBirth'),
					'Address'=> $this->request->getPost('Address'),
					'AddressNow'=> $this->request->getPost('AddressNow'),
					'Phone'=> $this->request->getPost('Phone'),
					'InstitutionName'=> $this->request->getPost('InstitutionName'),
					'InstitutionAddress'=> $this->request->getPost('InstitutionAddress'),
					'InstitutionPhone'=> $this->request->getPost('InstitutionPhone'),
					'MotherName'=> $this->request->getPost('MotherName'),
					'Email'=> $this->request->getPost('Email'),
					'NoHp'=> $this->request->getPost('NoHp'),
					'Provincy'=> $this->request->getPost('Provincy'),
					'ProvincyNow'=> $this->request->getPost('ProvincyNow'),
					'City'=> $this->request->getPost('City'),
					'CityNow'=> $this->request->getPost('CityNow'),
					'Kecamatan'=> $this->request->getPost('Kecamatan'),
					'KecamatanNow'=> $this->request->getPost('KecamatanNow'),
					'Kelurahan'=> $this->request->getPost('Kelurahan'),
					'KelurahanNow'=> $this->request->getPost('KelurahanNow'),
					'RT'=> $this->request->getPost('RT'),
					'RTNow'=> $this->request->getPost('RTNow'),
					'RWNow'=> $this->request->getPost('RWNow'),
					'RW'=> $this->request->getPost('RW'),
					'TahunAjaran'=> $this->request->getPost('TahunAjaran'),
					'category_id' => $this->request->getPost('category_id'),
					'ref_identitas' => $this->request->getPost('ref_identitas'),
					'ref_perkawinan' => $this->request->getPost('ref_perkawinan'),
					'ref_jeniskelamin' 	=> $this->request->getPost('ref_jeniskeamin'),
					'ref_pendidikan' 	=> $this->request->getPost('ref_pekerjaan'),
					'ref_pekerjaan' 	=> $this->request->getPost('ref_pekerjaan'),
					'ref_jenisanggota' 	=> $this->request->getPost('ref_jenisanggota'),
					'ref_agama' 	=> $this->request->getPost('ref_agama'),
					'ref_unitkerja' 	=> $this->request->getPost('ref_unitkerja'),
					'ref_fakultas' 	=> $this->request->getPost('ref_fakultas'),
					'ref_jurusan' 	=> $this->request->getPost('ref_jurusan'),
					'ref_Statusanggota'=>$this->request->getPost('ref_Statusanggota'),
					'sort' => $this->request->getPost('sort'),
					'description' => $this->request->getPost('description'),
					'RegisterDate' => $this->request->getPost('RegisterDate'),
					'created_by' => user_id(),
				];
	
			// 	 // Logic Upload
			// 	 $files = (array) $this->request->getPost('file_image');
			// 	 if (count($files)) {
			// 		 $listed_file = array();
			// 		 foreach ($files as $uuid => $name) {
			// 			 if (file_exists($this->uploadPath . $name)) {
			// 				 $file = new File($this->uploadPath . $name);
			// 				 $newFileName = $file->getRandomName();
			// 				 $file->move($this->modulePath, $newFileName);
			// 				 $listed_file[] = $newFileName;
			// 			 }
			// 		 }
			// 		 $save_data['file_image'] = implode(',', $listed_file);
			// 	 }
	
			//  $base64_string = $this->request->getPost('camera_image');
			// 	 if(!empty($base64_string)){
			// 		$file = new File($this->uploadPath);
			// 		$newFileName = $file->getRandomName().'.jpg';
			// 		base64_to_jpeg($base64_string, $this->modulePath.$newFileName);
			// 		$save_data['file_image'] =  $newFileName;
				   
			// 	 }
				
				$newAnggotaId = $this->anggotaModel->protect(false)->insert($save_data);
				
				if ($newAnggotaId) {
					add_log('Tambah Anggota', 'anggota', 'create', 't_anggota', $newAnggotaId);
					set_message('toastr_msg', lang('Anggota.info.successfully_saved'));
					set_message('toastr_type', 'success');
					return redirect()->to('home/anggota');
				} else {
					set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Anggota.info.failed_saved'));
					echo view('Home\Views\anggota\index', $this->data);
				}
			} else {
				$this->data['redirect'] = base_url('home/anggota');
				set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
				//echo view('Anggota\Views\add', $this->data);
				echo view('Home\Views\anggota\index', $this->data);
			}	
		// $this->data['title'] = 'Keanggotaan Online';
	
	}

	public function detail($id = null)
	{
		$this->data['title'] = 'Search';
		echo view('Home\Views\search\detail', $this->data);
	}

	public function ip() {
		$ip = get_ip_address();
		echo $ip;

		$ip_info = get_ip_info($ip);
		dd($ip_info);
	}

	public function json()
	{
		$data = DataTables::use('c_parameters')
			->make(true);

		return $data;

		// return DataTables::use('c_users')
		// 	->join('c_groups', 'c_users.id = c_groups.id', 'INNER JOIN')
		// 	->where(['c_users.active' => '1'])
		// 	// ->hideColumns(['password'])
		// 	->rawColumns(['address'])
		// 	->select('c_users.username, c_users.first_name, c_users.last_name, c_users.phone, c_users.email, c_users.address, c_groups.name as group_name')
		// 	// ->addColumn('action', function($data) {
		// 	// 	return '<a href="/edit/'.$data->id.'">edit</a>';
		// 	// })
		// 	->make(true); //true = json, false = object
	}

	public function datatables()
	{
		$this->data['title'] = 'DataTables';
		echo view('Home\Views\datatables', $this->data);
	}
	
	public function param($name)
	{
		echo get_parameter($name);
	}
}
