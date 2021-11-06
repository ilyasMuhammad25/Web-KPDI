<?php

namespace JenisAnggota\Controllers;

use \CodeIgniter\Files\File;

class JenisAnggota extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $jenisanggotaModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->jenisanggotaModel = new \JenisAnggota\Models\JenisAnggotaModel();
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/jenisanggota/';
        
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
        if (!is_allowed('jenisanggota/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->jenisanggotaModel
            ->select('m_jenis_anggota.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = m_jenis_anggota.created_by','left')
            ->join('users updated','updated.id = m_jenis_anggota.updated_by','left');
            
        $jenisanggotas = $query->findAll();

        $this->data['title'] = 'JenisAnggota';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['jenisanggotas'] = $jenisanggotas;
        echo view('JenisAnggota\Views\list', $this->data);
    }

    public function create()
    {
        if (!is_allowed('jenisanggota/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah JenisAnggota';

		$this->validation->setRule('name', 'Nama', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
            $slug = url_title($this->request->getPost('name'), '-', TRUE);
            $save_data = [
				'name' => $this->request->getPost('name'),
                'slug' => $slug,
				'sort' => $this->request->getPost('sort'),
				'description' => $this->request->getPost('description'),
                'created_by' => user_id(),
            ];

            $newJenisAnggotaId = $this->jenisanggotaModel->insert($save_data);

            if ($newJenisAnggotaId) {
                add_log('Tambah JenisAnggota', 'jenisanggota', 'create', 't_jenisanggota', $newJenisAnggotaId);
                set_message('toastr_msg', lang('JenisAnggota.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/jenisanggota');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('JenisAnggota.info.failed_saved'));
                echo view('JenisAnggota\Views\add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('jenisanggota/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('JenisAnggota\Views\add', $this->data);
        }
    }

    public function edit(int $id = null)
    {
        if (!is_allowed('jenisanggota/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah JenisAnggota';
        $jenisanggota = $this->jenisanggotaModel->find($id);
        $this->data['jenisanggota'] = $jenisanggota;

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

                $jenisanggotaUpdate = $this->jenisanggotaModel->update($id, $update_data);

                if ($jenisanggotaUpdate) {
                    add_log('Ubah JenisAnggota', 'jenisanggota', 'edit', 't_jenisanggota', $id);
                    set_message('toastr_msg', 'JenisAnggota berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/jenisanggota');
                } else {
                    set_message('toastr_msg', 'JenisAnggota gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'JenisAnggota gagal diubah');
                    return redirect()->to('/jenisanggota/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('jenisanggota/edit/' . $id);
        echo view('JenisAnggota\Views\update', $this->data);
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('jenisanggota/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/jenisanggota');
        }
        $jenisanggotaDelete = $this->jenisanggotaModel->delete($id);
        if ($jenisanggotaDelete) {
            add_log('Hapus JenisAnggota', 'jenisanggota', 'delete', 't_jenisanggota', $id);
            set_message('toastr_msg', lang('JenisAnggota.info.successfully_deleted'));
            set_message('toastr_type', 'success');
            return redirect()->to('/jenisanggota');
        } else {
            set_message('toastr_msg', lang('JenisAnggota.info.failed_deleted'));
            set_message('toastr_type', 'warning');
            set_message('message', lang('JenisAnggota.info.failed_deleted'));
            return redirect()->to('/jenisanggota/delete/' . $id);
        }
    }

    public function apply_status($id)
    {
        $field = $this->request->getVar('field');
        $value = $this->request->getVar('value');

        $jenisanggotaUpdate = $this->jenisanggotaModel->update($id, array($field => $value));

        if ($jenisanggotaUpdate) {
            set_message('toastr_msg', ' JenisAnggota berhasil diubah');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', ' JenisAnggota gagal diubah');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/jenisanggota');
    }
}
