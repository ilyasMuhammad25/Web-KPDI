<?php
namespace Anggota\Controllers;
// namespace hamkamannan\adminigniter\Modules\Core\Parameter\Controllers;
use \CodeIgniter\Files\File;
use PHPExcel;
use PHPExcel_IOFactory;
use DataTables\DataTables;
use Config\Services;
use Myth\Auth\Entities\User;
use Myth\Auth\Models\UserModel;
class Anggota extends \hamkamannan\adminigniter\Controllers\BaseController
{
	protected $auth;
	protected $authorize;
	protected $anggotaModel;
	protected $uploadPath;
	protected $lokasiperpustakaanModel;
	protected $anggotahakaksesModel;
	protected $modulePath;
	protected $baseModel;
	function __construct()
	{
		$this->language = \Config\Services::language();
		$this->language->setLocale('id');
		$this->request 		= Services::request();
		$this->anggotaModel = new \Anggota\Models\AnggotaModel();
		$this->lokasiperpustakaanModel = new \LokasiPerpustakaan\Models\LokasiPerpustakaanModel();
		$this->anggotahakaksesModel = new \Anggota\Models\Anggotahakakses();
		$this->baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
		$this->uploadPath = ROOTPATH . 'public/uploads/';
		$this->modulePath = ROOTPATH . 'public/uploads/anggota/';
		if (!file_exists($this->uploadPath)) {
			mkdir($this->uploadPath);
		}
		if (!file_exists($this->modulePath)) {
			mkdir($this->modulePath);
		}
		$this->auth = \Myth\Auth\Config\Services::authentication();
		$this->authorize = \Myth\Auth\Config\Services::authorization();
		$this->session = service('session');
		if (! $this->auth->check() ) {
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
		
	}
	public function online() {
		$this->data['title'] = 'Keanggotaan Online';
		$this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
		return view('Anggota\Views\online\index', $this->data);
	}

	public function extend($member_no = null) {
		if(empty($member_no)){
			$member_no = user()->username;
		}
		$member = get_member($member_no);

		$jenis_anggota = db_get_single('m_jenis_anggota','id = '.$member->ref_jenisanggota);
		$start_date = $member->EndDate;
		$end_date = date('Y-m-d', strtotime($start_date. ' + '.$jenis_anggota->expiry_days.' days'));

		$updateAnggota = $this->anggotaModel->protect(false)->update($member->id, array('EndDate' => $end_date));

		if($updateAnggota){
			set_message('toastr_msg', 'Perpanjangan Masa Berlaku Anggota berhasil');
			set_message('toastr_type', 'success');
		} else {
			set_message('toastr_msg', 'Perpanjangan Masa Berlaku Anggota gagal');
			set_message('toastr_type', 'error');
		}
		return redirect()->back();
	}

	public function index() {
		if (!is_allowed('anggota/access')) {
			set_message('toastr_msg', lang('App.permission.not.have'));
			set_message('toastr_type', 'error');
			return redirect()->to('/dashboard');
		}
		$slug = $this->request->getVar('slug');
		$query = $this->anggotaModel
			->select('t_anggota.*')
			->select('created.username as created_name')
			->select('updated.username as updated_name')
			->join('users created','created.id = t_anggota.created_by','left')
			->join('users updated','updated.id = t_anggota.updated_by','left');
		$anggotas = $query->find_all('created_at','desc');
		$this->data['title'] = 'Anggota';
		$this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
		$this->data['anggotas'] = $anggotas;
		if(!empty($slug)){			
			echo view("Anggota\Views\slug\\$slug", $this->data);
		} else {
			echo view('Anggota\Views\list', $this->data);
		}
	}
	public function keranjang() {
		if (!is_allowed('anggota/access')) {
			set_message('toastr_msg', lang('App.permission.not.have'));
			set_message('toastr_type', 'error');
			return redirect()->to('/dashboard');
		}
		$slug = $this->request->getVar('slug');
		$query = $this->anggotaModel
			->select('t_anggota.*')
			->select('created.username as created_name')
			->select('updated.username as updated_name')
			->join('users created','created.id = t_anggota.created_by','left')
			->join('users updated','updated.id = t_anggota.updated_by','left');
		$anggotakeranjangs = $query
			->where('iskeranjang','0')
			->findAll();
		$this->data['title'] = 'Anggota';
		$this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
		$this->data['anggotakeranjangs'] = $anggotakeranjangs;
		return view('Anggota\Views\list keranjang', $this->data);
	}
	public function index_json() {
		if (!is_allowed('anggota/access')) {
			set_message('toastr_msg', lang('App.permission.not.have'));
			set_message('toastr_type', 'error');
			return redirect()->to('/dashboard');
		}
		$slug = $this->request->getVar('slug');
		$this->data['title'] = 'Anggota';
		$this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
		if(!empty($slug)){			
			echo view("Anggota\Views\slug\\$slug", $this->data);
		} else {
			echo view('Anggota\Views\list_json', $this->data);
		}
	}
	public function json() {
		$data = DataTables::use('v_anggota')
		// ->select('t_anggota.*')
		// ->select('users.username as created_name')
		// ->join('users','users.id = t_anggota.created_by','left')
		// ->select('t_anggota.*') 
		// ->select('users.username as updated_name')
		// ->join('users','users.id = t_anggota.updated_by','left')
		->make(true);
		return $data;
	}
	public function create() {
		if (!is_allowed('anggota/create')) {
			set_message('toastr_msg', lang('App.permission.not.have'));
			set_message('toastr_type', 'error');
			return redirect()->to('/dashboard');
		}
	
		$jenis_anggota = db_get_single('m_jenis_anggota','UPPER(name) = "UMUM"');
		$start_date = date('Y-m-d');
		$end_date = date('Y-m-d', strtotime($start_date. ' + '.$jenis_anggota->expiry_days.' days'));
		
		$this->data['date'] = $start_date;
		$this->data['EndDate'] = $end_date;
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
		$this->data['ref_Statusanggota'] = get_ref('ref_Statusanggota');
			
		$this->data['title'] = 'Tambah Anggota';
		$this->validation->setRule('name', 'Nama', 'required');
		$this->validation->setRule('Email', 'Email', 'required');
		$this->validation->setRule('MemberNo', 'Nomor Anggota', 'required');
		$this->validation->setRule('ref_jenisanggota', 'Jenis Anggota', 'required');
		$this->validation->setRule('Location_loan_id', 'Lokasi Perpustakaan', 'required');
		if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			$slug = url_title($this->request->getPost('name'), '-', TRUE);
			$save_data = [
			'name' => $this->request->getPost('name'),
			'slug' => $slug,
			'MemberNo'=> get_member_no(),
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
			'RegisterDate' => date("Y-m-d H:i:s"),
			'EndDate' => $this->request->getPost('EndDate'),
			'created_by' => user_id(),
			];
			// Logic Upload
			$files = (array) $this->request->getPost('file_image');
			if (count($files)) {
				$listed_file = array();
				foreach ($files as $uuid => $name) {
					if (file_exists($this->uploadPath . $name)) {
						$file = new File($this->uploadPath . $name);
						$newFileName = $file->getRandomName();
						$file->move($this->modulePath, $newFileName);
						$listed_file[] = $newFileName;
					}
				}
				$save_data['file_image'] = implode(',', $listed_file);
			}
			$base64_string = $this->request->getPost('camera_image');
			if(!empty($base64_string)){
				$file = new File($this->uploadPath);
				$newFileName = $file->getRandomName().'.jpg';
				base64_to_jpeg($base64_string, $this->modulePath.$newFileName);
				$save_data['file_image'] =  $newFileName;
			}
			$newAnggotaId = $this->anggotaModel->protect(false)->insert($save_data);
			if($newAnggotaId){
				$Locations=$this->request->getPost('Location_loan_id');
				$save_akses_lokasi_temp = [];
				$save_akses_lokasi = [];
				for ($x = 0; $x < count($Locations); $x++){
					$save_akses_lokasi_temp = [
					't_anggota_id' => $newAnggotaId,
					'Location_loan_id' =>$Locations[$x], 
					];
					array_push($save_akses_lokasi,$save_akses_lokasi_temp);
				}

				if(!empty($save_akses_lokasi)){
					$this->anggotahakaksesModel->insertBatch($save_akses_lokasi);
				}

				add_log('Tambah Anggota', 'anggota', 'create', 't_anggota', $newAnggotaId);
				// set_message('toastr_msg', lang('Anggota.info.successfully_saved'));
				// set_message('toastr_type', 'success');
				return redirect()->to('/anggota');
			} else {
				set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Anggota.info.failed_saved'));
				echo view('Anggota\Views\add', $this->data);
			}
		} else {
			$this->data['redirect'] = base_url('anggota/create');
			set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
			echo view('Anggota\Views\add', $this->data);
		}
	}
	public function camera() {
		if (!is_allowed('anggota/update')) {
			set_message('toastr_msg', lang('App.permission.not.have'));
			set_message('toastr_type', 'error');
			return redirect()->to('/dashboard');
		}
		// $files = (array) $this->request->getPost('file_image');
		$filename = 'pic_'.date('YmdHis') . '.jpeg';
		$url = '';
		if( move_uploaded_file($_FILES['file_image']['tmp_name'],'upload/'.$filename) ){
			$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/upload/' . $filename;
		}
		// Return image url
		echo $url;
	}
	public function profile()
    {
		$member_no = user()->username;
		$anggota =  db_get_single('t_anggota', 'MemberNo=' . $member_no);
        $this->edit($anggota->id, true);
    }


	public function edit(int $id = null, $is_anggota = false) {
		
		// if (!is_allowed('anggota/update')) {
		// 	set_message('toastr_msg', lang('App.permission.not.have'));
		// 	set_message('toastr_type', 'error');
		// 	return redirect()->to('/dashboard');
		// }
	
		$anggota = $this->anggotaModel->find($id);
		// dd($anggota);
		$this->data['title'] = 'Ubah Anggota';
		$this->data['anggota'] = $anggota;
		$this->data['ref_identitas'] = get_ref('ref_identitas');
		$this->data['ref_perkawinan'] = get_ref('ref_perkawinan');
		$this->data['ref_jeniskelamin'] = get_ref('ref_jeniskelamin');
		$this->data['ref_pendidikan'] = get_ref('ref_pendidikan');
		$this->data['ref_pekerjaan'] = get_ref('ref_perkerjaan');
		// $this->data['ref_jenisanggota'] = get_ref('ref_jenisanggota');
		$this->data['ref_agama'] = get_ref('ref_agama');
		$this->data['ref_unitkerja'] = get_ref('ref_unitkerja');
		$this->data['ref_fakultas'] = get_ref('ref_fakultas');
		$this->data['ref_jurusan'] = get_ref('ref_jurusan');
		$this->data['ref_Statusanggota'] = get_ref('ref_Statusanggota');

		$this->validation->setRule('name', 'Nama', 'required');
		$this->validation->setRule('Email', 'Email', 'required');
		$this->validation->setRule('NoHp', 'No. Telepon/HP', 'required');
		$this->validation->setRule('MemberNo', 'Nomor Anggota', 'required');
		$this->validation->setRule('ref_jenisanggota', 'Jenis Anggota', 'required');
		$this->validation->setRule('Location_loan_id', 'Lokasi Perpustakaan', 'required');
		if ($this->request->getPost()) {
			if ($this->validation->withRequest($this->request)->run()) {
				$slug = url_title($this->request->getPost('name'), '-', TRUE);
				$Location_loan_ids = implode(",",$this->request->getPost('Location_loan_id'));
				$update_data = [
					'name' => $this->request->getPost('name'),
					'slug' => $slug,
					'IdentityNo'=> $this->request->getPost('IdentityNo'),
					'PlaceOfBirth'=> $this->request->getPost('PlaceOfBirth'),
					'DateOfBirth'=> $this->request->getPost('DateOfBirth'),
					'RegisterDate'=>$this->request->getPost('RegisterDate'),
					'Phone'=> $this->request->getPost('Phone'),
					'InstitutionName'=> $this->request->getPost('InstitutionName'),
					'InstitutionAddress'=> $this->request->getPost('InstitutionAddress'),
					'InstitutionPhone'=> $this->request->getPost('InstitutionPhone'),
					'MotherName'=> $this->request->getPost('MotherName'),
					'Email'=> $this->request->getPost('Email'),
					'NoHp'=> $this->request->getPost('NoHp'),
					'Address'=> $this->request->getPost('Address'),
					'Provincy'=> $this->request->getPost('Provincy'),
					'City'=> $this->request->getPost('City'),
					'Kecamatan'=> $this->request->getPost('Kecamatan'),
					'Kelurahan'=> $this->request->getPost('Kelurahan'),
					'RT'=> $this->request->getPost('RT'),
					'RW'=> $this->request->getPost('RW'),
					'AddressNow'=> $this->request->getPost('AddressNow'),
					'ProvincyNow'=> $this->request->getPost('ProvincyNow'),
					'CityNow'=> $this->request->getPost('CityNow'),
					'KecamatanNow'=> $this->request->getPost('KecamatanNow'),
					'KelurahanNow'=> $this->request->getPost('KelurahanNow'),
					'RTNow'=> $this->request->getPost('RTNow'),
					'RWNow'=> $this->request->getPost('RWNow'),
					'TahunAjaran'=> $this->request->getPost('TahunAjaran'),
					'category_id' => $this->request->getPost('category_id'),
					'ref_identitas' => $this->request->getPost('ref_identitas'),
					'ref_perkawinan' => $this->request->getPost('ref_perkawinan'),
					'ref_jeniskelamin' 	=> $this->request->getPost('ref_jeniskelamin'),
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
					'EndDate' => $this->request->getPost('EndDate'),
					'BiayaPendaftaran' => $this->request->getPost('BiayaPendaftaran'),
					'Location_loan_ids' => $Location_loan_ids,
					'updated_by' => user_id(),
				];

				// Logic Upload
				$files = (array) $this->request->getPost('file_image');
				if (count($files)) {
					$listed_file = array();
					foreach ($files as $uuid => $name) {
						if (file_exists($this->modulePath . $name)) {
							$listed_file[] = $name;
						} else {
							if (file_exists($this->uploadPath . $name)) {
								$file = new File($this->uploadPath . $name);
								$newFileName = $file->getRandomName();
								$file->move($this->modulePath, $newFileName);
								$listed_file[] = $newFileName;
							}
						}
					}
					$update_data['file_image'] = implode(',', $listed_file);
				}
				$anggotaUpdate = $this->anggotaModel->update($id, $update_data);
				if ($anggotaUpdate) {
					
					if($is_anggota){
						add_log('Ubah Anggota', 'anggota', 'edit', 't_anggota', $id);
						set_message('toastr_msg', 'Profil Anggota berhasil diubah');
						set_message('toastr_type', 'success');

						return redirect()->back();
					} else {
						add_log('Ubah Anggota', 'anggota', 'edit', 't_anggota', $id);
						set_message('toastr_msg', 'Profil Anggota berhasil diubah');
						set_message('toastr_type', 'success');
						return redirect()->to('/anggota');
					}
				} else {
					if($is_anggota){
						set_message('toastr_msg', 'Anggota gagal diubah');
						set_message('toastr_type', 'warning');
						set_message('message', 'Anggota gagal diubah');

						return redirect()->back();
					} else {
						set_message('toastr_msg', 'Anggota gagal diubah');
						set_message('toastr_type', 'warning');
						set_message('message', 'Anggota gagal diubah');

						return redirect()->to('/anggota/edit/' . $id);
					}
				}
			}
		}
		$this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
		$this->data['redirect'] = base_url('anggota/edit/' . $id);
		$this->data['is_anggota'] = $is_anggota;
		echo view('Anggota\Views\update', $this->data);
	}

	public function detail(int $id=null) {
		if (!is_allowed('anggota/detail')) {
			set_message('toastr_msg', lang('App.permission.not.have'));
			set_message('toastr_type', 'error');
			return redirect()->to('/dashboard');
		}
		$anggota = $this->anggotaModel->find($id);
		$this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
		$this->data['redirect'] = base_url('anggota/detail/' . $id);
		$this->data['anggota']=$anggota;
		echo view('Anggota\Views\detail', $this->data);
	}
	public function delete(int $id = 0){
		if (!is_allowed('anggota/delete')) {
			set_message('toastr_msg', lang('App.permission.not.have'));
			set_message('toastr_type', 'error');
			return redirect()->to('/dashboard');
		}
		if (!$id) {
			set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
			set_message('toastr_type', 'error');
			return redirect()->to('/anggota');
		}
		$anggotaDelete = $this->anggotaModel->delete($id);
		if ($anggotaDelete) {
			add_log('Hapus Anggota', 'anggota', 'delete', 't_anggota', $id);
			set_message('toastr_msg', lang('Anggota.info.successfully_deleted'));
			set_message('toastr_type', 'success');
			return redirect()->to('/anggota');
		} else {
			set_message('toastr_msg', lang('Anggota.info.failed_deleted'));
			set_message('toastr_type', 'warning');
			set_message('message', lang('Anggota.info.failed_deleted'));
			return redirect()->to('/anggota/delete/' . $id);
		}
	}
	public function apply_status($id) {
		$field = $this->request->getVar('field');
		$value = $this->request->getVar('value');
		$anggotaUpdate = $this->anggotaModel->update($id, array($field => $value));
		// dd($anggotaUpdate);
		if ($anggotaUpdate) {
			set_message('toastr_msg', ' Anggota berhasil diubah');
			set_message('toastr_type', 'success');
		} else {
			set_message('toastr_msg', ' Anggota gagal diubah');
			set_message('toastr_type', 'warning');
		}
		return redirect()->to('/anggota');
	}
	// Daftar data Pelanggaran
	public function D_pelanggaran() {
		if (!is_allowed('anggota/access')) {
			set_message('toastr_msg', lang('App.permission.not.have'));
			set_message('toastr_type', 'error');
			return redirect()->to('/dashboard');
		}
		$query = $this->anggotaModel
			->select('t_anggota.*')
			->select('created.username as created_name')
			->select('updated.username as updated_name')
			->join('users created','created.id = t_anggota.created_by','left')
			->join('users updated','updated.id = t_anggota.updated_by','left');
		$anggotas = $query->findAll();
		// $Nomember=$this->anggotaModel->MemberNo();
		$this->data['title'] = 'Data-Pelanggaran';
		$this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
		$this->data['anggotas'] = $anggotas;
		// $this->data['MemberNo'] = $this->AnggotaModel->MemberNo();
		// $this->data['MemberNo']
		echo view('Anggota\Views\Data-pelanggaran',$this->data);
	}
	// Daftar data Peminjaman
	public function D_peminjaman() {
		if (!is_allowed('anggota/access')) {
			set_message('toastr_msg', lang('App.permission.not.have'));
			set_message('toastr_type', 'error');
			return redirect()->to('/dashboard');
		}
		$query = $this->anggotaModel
			->select('t_anggota.*')
			->select('created.username as created_name')
			->select('updated.username as updated_name')
			->join('users created','created.id = t_anggota.created_by','left')
			->join('users updated','updated.id = t_anggota.updated_by','left');
		$anggotas = $query->findAll();
		// $Nomember=$this->anggotaModel->MemberNo();
		$this->data['title'] = 'Data-Pelanggaran';
		$this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
		$this->data['anggotas'] = $anggotas;
		// $this->data['MemberNo'] = $this->AnggotaModel->MemberNo();
		// $this->data['MemberNo']
		echo view('Anggota\Views\Data-Peminjaman',$this->data);
	}
	// Daftar data Perpanjangan
	public function D_perpanjangan() {
		if (!is_allowed('anggota/access')) {
			set_message('toastr_msg', lang('App.permission.not.have'));
			set_message('toastr_type', 'error');
			return redirect()->to('/dashboard');
		}
		$query = $this->anggotaModel
			->select('t_anggota.*')
			->select('created.username as created_name')
			->select('updated.username as updated_name')
			->join('users created','created.id = t_anggota.created_by','left')
			->join('users updated','updated.id = t_anggota.updated_by','left');
		$anggotas = $query->findAll();
		// $Nomember=$this->anggotaModel->MemberNo();
		$this->data['title'] = 'Data-Pelanggaran';
		$this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
		$this->data['anggotas'] = $anggotas;
		// $this->data['MemberNo'] = $this->AnggotaModel->MemberNo();
		// $this->data['MemberNo']
		echo view('Anggota\Views\Data-Perpanjangan',$this->data);
	}
	// Daftar data sumbangan
	public function D_sumbangan(int $id = null) {
		if (!is_allowed('anggota/access')) {
			set_message('toastr_msg', lang('App.permission.not.have'));
			set_message('toastr_type', 'error');
			return redirect()->to('/dashboard');
		}
		$query = $this->anggotaModel
			->select('t_anggota.*')
			->select('created.username as created_name')
			->select('updated.username as updated_name')
			->join('users created','created.id = t_anggota.created_by','left')
			->join('users updated','updated.id = t_anggota.updated_by','left');
		$anggotas = $query->findAll();
		$anggota = $this->anggotaModel->find($id);
		$this->data['title'] = 'Data-Pelanggaran';
		$this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
		$this->data['anggotas'] = $anggotas;
		$this->data['anggota'] = $anggota;
		echo view('Anggota\Views\Data-Sumbangan',$this->data);
	}
	// Import Data dari EXCEL
	public function import() {
		if (!is_allowed('anggota/import')) {
			set_message('toastr_msg', lang('App.permission.not.have'));
			set_message('toastr_type', 'error');
			return redirect()->to('/dashboard');
		}
		$this->data['title'] = 'Import Anggota';
		$this->validation->setRule('file_template', 'File Template', 'required');
		if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			// Logic Upload
			$files =  $this->request->getPost('file_template');
			if (count($files)) {
			$listed_file = array();
				foreach ($files as $uuid => $name) {
					if (file_exists($this->uploadPath . $name)) {
						$file = new File($this->uploadPath . $name);
						$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file);
						// dd($spreadsheet);
						$spreadsheet_arr = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
						// dd($spreadsheet_arr);
						$inserts = array();
						foreach($spreadsheet_arr as $row){
							$inserts[] = array(
								'MemberNo'=>$row['A'],
								'name' => $row['B'],
								'PlaceOfBirth'=>$row['C'],
								'DateOfBirth'=>$row['D'],
								'Address'=>$row['E'],
							);
						}
						// dd($inserts);
						$anggotaSaved = $this->anggotaModel->insertBatch($inserts);
						if ($anggotaSaved) {
							add_log('Import Anggota', 'anggota', 'import', 't_anggota');
							set_message('toastr_msg', 'Import Anggota berhasil');
							set_message('toastr_type', 'success');
							return redirect()->to('/anggota');
						} else {
							set_message('toastr_msg', 'Import Anggota gagal');
							set_message('toastr_type', 'warning');
							set_message('message', 'Import Anggota gagal');
							return redirect()->to('/anggota/import');
						}
					}
				}
			}
		} else {
			$this->data['redirect'] = base_url('anggota/import');
			set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
			echo view('Anggota\Views\import',$this->data);
		}
	}
	public function cetakKartu(int $id=null) {
		if (!is_allowed('anggota/cetakKartu')) {
			set_message('toastr_msg', lang('App.permission.not.have'));
			set_message('toastr_type', 'error');
			return redirect()->to('/dashboard');
		}
		$this->data['title'] = 'Import Anggota';
		$this->data['kartu'] = array();
		$anggota = $this->anggotaModel->find($id);
		$this->data['anggota']=$anggota;
		$this->data['barcode']= get_barcode($anggota->MemberNo);
		// 1. composer require mpdf/mpdf
		// $qrCode = new \Mpdf\QrCode\QrCode('Perpusnas RI');
		// $output = new \Mpdf\QrCode\Output\Html();
		// $html_qr = $output->output($qrCode, 100, [255, 255, 255], [10, 10, 10]);
		// 2. composer require mpdf/qrcode
		// 3. composer require picqer/php-barcode-generator
		// $barcode = new \Picqer\Barcode\BarcodeGeneratorHTML();
		// $html_bar = $barcode->getBarcode('081231723897', $barcode::TYPE_CODE_39);
		// echo $html_bar;
		//  $this->data['title'] = 'Import Anggota';
		//  $kartu = $this->anggotaModel->findAll();
		//  $this->data['kartu'] = $kartu;
		// instantiate and use the dompdf class
		$dompdf = new \Dompdf\Dompdf();
		$html= view('Anggota\Views\cetak-kartu',$this->data);
		$dompdf->loadHtml($html);
		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4', 'landscape');
		// Render the HTML as PDF
		$dompdf->render();
		// Output the generated PDF to Browser
		$dompdf->stream();
	}

	public function bebaspustaka(int $id=null) {
		if (!is_allowed('anggota/cetakKartu')) {
			set_message('toastr_msg', lang('App.permission.not.have'));
			set_message('toastr_type', 'error');
			return redirect()->to('/dashboard');
		}
		$this->data['title'] = 'Bebas Pustaka';
		$this->data['kartu'] = array();
		$anggota = $this->anggotaModel->find($id);
		$this->data['anggota']=$anggota;
		$dompdf = new \Dompdf\Dompdf();
		$html= view('Anggota\Views\bebas-pustaka',$this->data);
		$dompdf->loadHtml($html);
		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4', 'portrait');
		// Render the HTML as PDF
		$dompdf->render();
		// Output the generated PDF to Browser
		$dompdf->stream();
	}
}