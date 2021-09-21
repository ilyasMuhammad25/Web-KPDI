<?php

namespace Sumbangan\Controllers;

use \CodeIgniter\Files\File;

class Sumbangan extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $sumbanganModel;
    protected $AnggotaModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->sumbanganModel = new \Sumbangan\Models\SumbanganModel();
        $this->anggotaModel = new \Anggota\Models\AnggotaModel();
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/sumbangan/';
        helper(['form', 'url', 'auth', 'app', 'adminigniter']);
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
    }
    public function index()
    {
        if (!is_allowed('sumbangan/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->sumbanganModel
            ->select('t_sumbangan.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->select('t_member_id.name as nama')
            ->select('t_member_id.MemberNo as MembersNo')
            ->join('users created','created.id = t_sumbangan.created_by','left')
            ->join('users updated','updated.id = t_sumbangan.updated_by','left')
            ->join('t_anggota t_member_id','t_member_id.id = t_sumbangan.t_member_id','left');
            // ->join('t_anggota t_member_id','t_member_id.id = t_sumbangan.t_member_id','left');
            
        $sumbangans = $query->findAll();

        $this->data['title'] = 'Sumbangan';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['sumbangans'] = $sumbangans;
        echo view('Sumbangan\Views\list', $this->data);
    }

    public function create()
    {
        if (!is_allowed('sumbangan/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable('t_anggota');
        $anggota = $baseModel
            ->select('t_anggota.*')
            ->find_all('name', 'asc');
        $this->data['title'] = 'Tambah Sumbangan';
        $this->data['anggota'] = $anggota;
        
     

		$this->validation->setRule('t_member_id','t_member_id', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
           
            $save_data = [
				// 'name' => $this->request->getPost('name'),
                // 'slug' => $slug,
				'sort' => $this->request->getPost('sort'),
				't_member_id' => $this->request->getPost('t_member_id'),
				'jumlah' => $this->request->getPost('jumlah'),
				'description' => $this->request->getPost('description'),
                'created_by' => user_id(),
            ];

            $newSumbanganId = $this->sumbanganModel->insert($save_data);

            if ($newSumbanganId) {
                add_log('Tambah Sumbangan', 'sumbangan', 'create', 't_sumbangan', $newSumbanganId);
                set_message('toastr_msg', lang('Sumbangan.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/sumbangan');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Sumbangan.info.failed_saved'));
                echo view('Sumbangan\Views\add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('sumbangan/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Sumbangan\Views\add', $this->data);
        }
    }

    public function edit(int $id = null)
    {
        if (!is_allowed('sumbangan/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Sumbangan';
        $sumbangan = $this->sumbanganModel->find($id);
        $this->data['sumbangan'] = $sumbangan;

		$this->validation->setRule('name', 'Nama', 'required');
        if ($this->request->getPost()) {
            if ($this->validation->withRequest($this->request)->run()) {
                $slug = url_title($this->request->getPost('name'), '-', TRUE);
                $update_data = [
                    'name' => $this->request->getPost('name'),
                    'slug' => $slug,
                    'sort' => $this->request->getPost('sort'),
                    'description' => $this->request->getPost('description'),
                    'updated_by' => user_id(),
                ];

                $sumbanganUpdate = $this->sumbanganModel->update($id, $update_data);

                if ($sumbanganUpdate) {
                    add_log('Ubah Sumbangan', 'sumbangan', 'edit', 't_sumbangan', $id);
                    set_message('toastr_msg', 'Sumbangan berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/sumbangan');
                } else {
                    set_message('toastr_msg', 'Sumbangan gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'Sumbangan gagal diubah');
                    return redirect()->to('/sumbangan/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('sumbangan/edit/' . $id);
        echo view('Sumbangan\Views\update', $this->data);
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('sumbangan/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/sumbangan');
        }
        $sumbanganDelete = $this->sumbanganModel->delete($id);
        if ($sumbanganDelete) {
            add_log('Hapus Sumbangan', 'sumbangan', 'delete', 't_sumbangan', $id);
            set_message('toastr_msg', lang('Sumbangan.info.successfully_deleted'));
            set_message('toastr_type', 'success');
            return redirect()->to('/sumbangan');
        } else {
            set_message('toastr_msg', lang('Sumbangan.info.failed_deleted'));
            set_message('toastr_type', 'warning');
            set_message('message', lang('Sumbangan.info.failed_deleted'));
            return redirect()->to('/sumbangan/delete/' . $id);
        }
    }

    public function apply_status($id)
    {
        $field = $this->request->getVar('field');
        $value = $this->request->getVar('value');

        $sumbanganUpdate = $this->sumbanganModel->update($id, array($field => $value));

        if ($sumbanganUpdate) {
            set_message('toastr_msg', ' Sumbangan berhasil diubah');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', ' Sumbangan gagal diubah');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/sumbangan');
    }
}
