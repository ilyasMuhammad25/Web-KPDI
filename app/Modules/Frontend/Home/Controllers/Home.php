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

		helper(['form', 'url', 'auth', 'app', 'adminigniter']);
		helper('reference');
		helper('katalog');
		helper('anggota');
	}
	public function index()
	{
		$this->data['title'] = 'Home';
		echo view('Home\Views\landing\index', $this->data);
	}

	public function search()
	{
		$this->data['title'] = 'Search';
		echo view('Home\Views\search\index', $this->data);
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
			'username' => 'required|max_length[30]|is_unique[users.username]',
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

		// Save Anggota
		$anggota = [
			'name' => $this->request->getPost('name'),
			'MemberNo' => $this->request->getPost('username'),
		];

		$newAnggotaId = $this->anggotaModel->protect(false)->insert($anggota);

		// Success!
		return redirect()->route('signin')->with('message', lang('Auth.registerSuccess'));
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
				return redirect()->back()->withInput()->with('error', 'Akun Anda belum aktif! <br>Untuk aktivasi Akun hubungi Administrator.');
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
		
		
		$this->data[' MemberNo'] =  get_MemberNo();
		$this->data['title'] = 'Tambah Anggota';
	
		$this->validation->setRule('name', 'Nama', 'required');
		$this->validation->setRule('PlaceOfBirth', 'PlaceOfBirth', 'required');
		if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			
			$slug = url_title($this->request->getPost('name'), '-', TRUE);
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
