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
    }

	public function index()
    {
        if (!is_allowed('sirkulasi/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $slug = $this->request->getVar('slug') ?? 'peminjaman';

		if($slug == 'peminjaman'){
			$this->index_peminjaman();
		}

		if($slug == 'pengembalian'){
			$this->index_peminjaman();
		}

		if($slug == 'perpanjangan'){
			$this->index_peminjaman();
		}

		if($slug == 'pelanggaran'){
			$this->index_peminjaman();
		}
    }
	
    public function index_peminjaman()
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
        echo view('Sirkulasi\Views\peminjaman/list', $this->data);
    }

	public function create()
    {
		$slug = $this->request->getVar('slug') ?? 'peminjaman';

		if($slug == 'peminjaman'){
			$this->create_peminjaman();
		}

		if($slug == 'pengembalian'){
			$this->create_pengembalian();
		}

		if($slug == 'perpanjangan'){
			$this->create_perpanjangan();
		}

		if($slug == 'pelanggaran'){
			$this->create_pelanggaran();
		}
	}

	public function create_peminjaman() {
        if (!is_allowed('sirkulasi/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Entri Peminjaman';
		$this->validation->setRule('member_no', 'Nomor Anggota', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			$member_no = $this->request->getPost('member_no');
			$anggota = $this->anggotaModel->where('MemberNo',$member_no)->get()->getRow();

            $save_data = [
				'anggota_id' => $anggota->id,
                'created_by' => user_id(),
            ];

            $newEksemplarLoanID = $this->eksemplarLoanModel->protect(false)->insert($save_data);
            if($newEksemplarLoanID){
				$barcode_arr = $this->request->getPost('barcodes');
				if(!empty($barcode_arr)){
					$save_data_item = array();
					foreach ($barcode_arr as $index => $barcode){
						$save_data_item[] = [
							'eksemplar_loan_id' 	=> $newEksemplarLoanID,
							'anggota_id' 			=> $anggota->id,
							'eksemplar_id' 			=> get_eksemplar($barcode)->id,
							'location_library_id' 	=> get_eksemplar($barcode)->Location_library_id,
							'created_by'			=> user_id(),
							// 'created_terminal'		=> '127.0.0.1',
						];
					}

					if(!empty($save_data_item)){
						$this->eksemplarLoanItemModel->insertBatch($save_data_item);
					}
				}

				add_log('Entri Peminjaman', 'sirkulasi', 'create', 't_sirkulasi', $newEksemplarLoanID);
				set_message('toastr_msg', lang('Sirkulasi.info.successfully_saved'));
				set_message('toastr_type', 'success');
				return redirect()->to('/sirkulasi?slug=peminjaman');
			} else {
				set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Sirkulasi.info.failed_saved'));
                echo view('Sirkulasi\Views\peminjaman\add', $this->data);
			}
		} else { 
			$this->data['redirect'] = base_url('sirkulasi/create');
			set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
			echo view('Sirkulasi\Views\peminjaman\add', $this->data);
		}
    }

    public function edit(int $id = null)
    {
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

    public function createpengembalian()
    {
        if (!is_allowed('sirkulasi/createpengembalian')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah Sirkulasi';

		$this->validation->setRule('name', 'Nama', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
            $slug = url_title($this->request->getPost('name'), '-', TRUE);
            $save_data = [
				'name' => $this->request->getPost('name'),
                'slug' => $slug,
                'noanggota' => $this->request->getPost('noanggota'),
                'nobarcode' => $this->request->getPost('nobarcode'),
				'sort' => $this->request->getPost('sort'),
				'description' => $this->request->getPost('description'),
                'created_by' => user_id(),
            ];

            $newSirkulasiId = $this->eksemplarLoanModel->insert($save_data);
         

            if ($newSirkulasiId) {
                add_log('Tambah Sirkulasi', 'sirkulasi', 'create', 't_sirkulasi', $newSirkulasiId);
                set_message('toastr_msg', lang('Sirkulasi.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/sirkulasi/pengembalian/add');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Sirkulasi.info.failed_saved'));
                echo view('Sirkulasi\Views\pengembalian/add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('sirkulasi/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Sirkulasi\Views\pengembalian/add', $this->data);
        }
    }

    public function editpengembalian(int $id = null)
    {
        if (!is_allowed('sirkulasi/editpengembalian')) {
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
        echo view('Sirkulasi\Views\updatepengembalian', $this->data);
    }

    public function listpeminjaman()
    {
        if (!is_allowed('sirkulasi/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->eksemplarLoanModel
            ->select('t_sirkulasi.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_sirkulasi.created_by','left')
            ->join('users updated','updated.id = t_sirkulasi.updated_by','left');
            
        $sirkulasis = $query->findAll();

        $this->data['title'] = 'Sirkulasi';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['sirkulasis'] = $sirkulasis;
        echo view('Sirkulasi\Views\listpeminjaman', $this->data);
    }

    public function listpengembalian()
    {
        if (!is_allowed('sirkulasi/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->eksemplarLoanModel
            ->select('t_sirkulasi.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_sirkulasi.created_by','left')
            ->join('users updated','updated.id = t_sirkulasi.updated_by','left');
            
        $sirkulasis = $query->findAll();

        $this->data['title'] = 'Sirkulasi';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['sirkulasis'] = $sirkulasis;
        echo view('Sirkulasi\Views\listpengembalian', $this->data);
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

    public function perpanjangan()
    {
        if (!is_allowed('sirkulasi/createpengembalian')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah Sirkulasi';

		$this->validation->setRule('name', 'Nama', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
            $slug = url_title($this->request->getPost('name'), '-', TRUE);
            $save_data = [
				'name' => $this->request->getPost('name'),
                'slug' => $slug,
                'noanggota' => $this->request->getPost('noanggota'),
                'nobarcode' => $this->request->getPost('nobarcode'),
				'sort' => $this->request->getPost('sort'),
				'description' => $this->request->getPost('description'),
                'created_by' => user_id(),
            ];

            $newSirkulasiId = $this->eksemplarLoanModel->insert($save_data);

            if ($newSirkulasiId) {
                add_log('Tambah Sirkulasi', 'sirkulasi', 'create', 't_sirkulasi', $newSirkulasiId);
                set_message('toastr_msg', lang('Sirkulasi.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/sirkulasi/pengembalian/add');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Sirkulasi.info.failed_saved'));
                echo view('Sirkulasi\Views\perpanjangan/add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('sirkulasi/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Sirkulasi\Views\perpanjangan/add', $this->data);
        }
    }
}
