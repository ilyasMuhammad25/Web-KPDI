<?php

namespace Home\Controllers;

use DataTables\DataTables;
use Myth\Auth\Entities\User;
use Myth\Auth\Models\UserModel;

class Home extends \hamkamannan\adminigniter\Controllers\BaseController
{
	protected $config;
	protected $auth;
    protected $authorize;
	protected $anggotaModel;
	function __construct()
    {
		$this->anggotaModel = new \Anggota\Models\AnggotaModel();

		$this->auth = \Myth\Auth\Config\Services::authentication();
        $this->authorize = \Myth\Auth\Config\Services::authorization();
        $this->session = service('session');
		$this->config = config('Auth');

		helper(['form', 'url', 'auth', 'app']);
		helper('adminigniter');
		helper('reference');
		helper('katalog');
		helper('anggota');
		helper('katalog');
	}
	public function index()
	{
		$this->data['title'] = 'Home';
		echo view('Home\Views\landing\index', $this->data);
	}

	public function search()
	{
		$this->data['title'] = 'Search';

		$catalog_id = $this->request->getVar('catalog_id');
		if(!empty($catalog_id)){
			echo view('Home\Views\search\detail', $this->data);
		} else {
			echo view('Home\Views\search\index', $this->data);
		}
	}

	public function signup()
	{
		$this->data['title'] = 'Daftar';

		// check if already logged in.
		if ($this->auth->check())
		{
			return redirect()->back();
		}
		
		echo view('Home\Views\signup', $this->data);
	}

	public function attemptSignup()
	{
		$users = model(UserModel::class);

		// Validate basics first since some password rules rely on these fields
		$rules = [
			'email'    => 'required|valid_email|is_unique[users.email]',
		];

		if (! $this->validate($rules))
		{
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		}

		// Validate passwords since they can only be validated properly here
		$rules = [
			'password'     => 'required', //attemptSignup
			'pass_confirm' => 'required|matches[password]',
		];

		if (! $this->validate($rules))
		{
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		}

		// Save the user
		$allowedPostFields = array_merge(['password'], $this->config->validFields, $this->config->personalFields);
		$user = new User($this->request->getPost($allowedPostFields));

		$this->config->requireActivation === null ? $user->activate() : $user->generateActivateHash();

		// Ensure default group gets assigned if set
		if (! empty($this->config->defaultUserGroup)) {
			$users = $users->withGroup($this->config->defaultUserGroup);
		}

		if (! $users->save($user))
		{
			return redirect()->back()->withInput()->with('errors', $users->errors());
		} 

		$name = $this->request->getPost('name');
		$username = $this->request->getPost('username');
		$email = $this->request->getPost('email');
		$jenis_anggota = db_get_single('m_jenis_anggota','UPPER(name) = "UMUM"');
		$start_date = date('Y-m-d');
		$end_date = date('Y-m-d', strtotime($start_date. ' + '.$jenis_anggota->expiry_days.' days'));

		$save_anggota = [
			'name' => $name,
			'MemberNo' => $username,
			'Email' => $email,
			'ref_jenisanggota' => $jenis_anggota->id,
			'RegisterDate' => $start_date,
			'EndDate' => $end_date,
		];

		// Config Register Form
		$conf_phone= get_ref_data('phone','slug','conf-daftar-online');
		$conf_address = get_ref_data('address','slug','conf-daftar-online');
		$display_phone = strpos($conf_phone->description, 'display_1') !== false;
		$display_address = strpos($conf_address->description, 'display_1') !== false;

		if($display_phone){
			$phone = $this->request->getPost('phone');
			$save_anggota['NoHP'] = $phone;
		}

		if($display_address){
			$address = $this->request->getPost('address');
			$save_anggota['Address'] = $address;
		}

		$newAnggotaId = $this->anggotaModel->protect(false)->insert($save_anggota);

		if($newAnggotaId){
			$mailer = new \App\Libraries\Mailer();
			$mailer->send_via_google($email,'Inlislite - Pendaftaran Online', $save_anggota);
			return redirect()->route('signin')->with('message', 'Selamat, Nomor Anggota <b>'.$username.'</b> berhasil dibuat dengan status <b>Belum Aktif</b>! <br>Untuk aktivasi Akun hubungi Administrator.');
		} else {
			return redirect()->back()->withInput()->with('errors', 'Oups, terjadi kesalahan pada sistem! <br>Silakan coba beberapa saat lagi dan hubungi Administrator.');
		}
	}

	public function signin()
	{
		$this->data['title'] = 'Masuk';
		
		echo view('Home\Views\signin', $this->data);
	}

	public function attemptSignin()
	{
		$rules = [
			'login'	=> 'required',
			'password' => 'required',
		];
		if ($this->config->validFields == ['email'])
		{
			$rules['login'] .= '|valid_email';
		}

		if (! $this->validate($rules))
		{
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		}

		$login = $this->request->getPost('login');
		$password = $this->request->getPost('password');
		$remember = (bool)$this->request->getPost('remember');

		// Determine credential type
		$type = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

		// Try to log them in...
		if (! $this->auth->attempt([$type => $login, 'password' => $password], $remember))
		{
			if (strpos($this->auth->error(), 'activated') !== false) {
				return redirect()->back()->withInput()->with('error', 'Nomor Anggota <b>'.$login.'</b>, status <b>Belum Aktif</b>! <br>Untuk aktivasi Akun hubungi Administrator.');
				// return redirect()->back()->withInput()->with('error', 'Nomor Anggota Anda sudah tidak aktif! <br>Untuk aktivasi/perpanjangan Nomor Anggota hubungi Administrator.');
			} else {
				return redirect()->back()->withInput()->with('error', $this->auth->error() ?? lang('Auth.badAttempt'));
			}
		}

		// Is the user being forced to reset their password?
		if ($this->auth->user()->force_pass_reset === true)
		{
			return redirect()->to(route_to('reset-password') .'?token='. $this->auth->user()->reset_hash)->withCookies();
		}

		$redirectURL = session('redirect_url') ?? site_url('/');
		unset($_SESSION['redirect_url']);

		return redirect()->to($redirectURL)->withCookies()->with('message', lang('Auth.loginSuccess'));
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
		
		
		$this->data[' MemberNo'] =  get_member_no();
		$this->data['title'] = 'Tambah Anggota';
	
		$this->validation->setRule('name', 'Nama', 'required');
		$this->validation->setRule('PlaceOfBirth', 'PlaceOfBirth', 'required');
		if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			
			$slug = url_title($this->request->getPost('name'), '-', TRUE);
			$save_data = [
				'name' => $this->request->getPost('name'),
				'slug' => $slug,
				'MemberNo'=> get_member_no(),

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
			echo view('Home\Views\anggota\index', $this->data);
		}	
	}

	public function page()
	{
		$this->data['title'] = 'Inlislite';
		
		$slug = $this->request->getVar('slug');
		echo view('Home\Views\page\detail', $this->data);
	}
}
