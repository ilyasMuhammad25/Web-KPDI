<?php

namespace KeranjangAnggota\Controllers;

use \CodeIgniter\Files\File;

class KeranjangAnggota extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $keranjanganggotaModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->keranjanganggotaModel = new \KeranjangAnggota\Models\KeranjangAnggotaModel();
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/keranjanganggota/';
        
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
        if (!is_allowed('keranjanganggota/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->keranjanganggotaModel
            ->select('t_keranjanganggota.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_keranjanganggota.created_by','left')
            ->join('users updated','updated.id = t_keranjanganggota.updated_by','left');
            
        $keranjanganggotas = $query->findAll();

        $this->data['title'] = 'KeranjangAnggota';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['keranjanganggotas'] = $keranjanganggotas;
        echo view('KeranjangAnggota\Views\list', $this->data);
    }

    public function create()
    {
        if (!is_allowed('keranjanganggota/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah KeranjangAnggota';

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

            $newKeranjangAnggotaId = $this->keranjanganggotaModel->insert($save_data);

            if ($newKeranjangAnggotaId) {
                add_log('Tambah KeranjangAnggota', 'keranjanganggota', 'create', 't_keranjanganggota', $newKeranjangAnggotaId);
                set_message('toastr_msg', lang('KeranjangAnggota.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/keranjanganggota');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('KeranjangAnggota.info.failed_saved'));
                echo view('KeranjangAnggota\Views\add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('keranjanganggota/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('KeranjangAnggota\Views\add', $this->data);
        }
    }

    public function edit(int $id = null)
    {
        if (!is_allowed('keranjanganggota/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah KeranjangAnggota';
        $keranjanganggota = $this->keranjanganggotaModel->find($id);
        $this->data['keranjanganggota'] = $keranjanganggota;

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

                $keranjanganggotaUpdate = $this->keranjanganggotaModel->update($id, $update_data);

                if ($keranjanganggotaUpdate) {
                    add_log('Ubah KeranjangAnggota', 'keranjanganggota', 'edit', 't_keranjanganggota', $id);
                    set_message('toastr_msg', 'KeranjangAnggota berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/keranjanganggota');
                } else {
                    set_message('toastr_msg', 'KeranjangAnggota gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'KeranjangAnggota gagal diubah');
                    return redirect()->to('/keranjanganggota/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('keranjanganggota/edit/' . $id);
        echo view('KeranjangAnggota\Views\update', $this->data);
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('keranjanganggota/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/keranjanganggota');
        }
        $keranjanganggotaDelete = $this->keranjanganggotaModel->delete($id);
        if ($keranjanganggotaDelete) {
            add_log('Hapus KeranjangAnggota', 'keranjanganggota', 'delete', 't_keranjanganggota', $id);
            set_message('toastr_msg', lang('KeranjangAnggota.info.successfully_deleted'));
            set_message('toastr_type', 'success');
            return redirect()->to('/keranjanganggota');
        } else {
            set_message('toastr_msg', lang('KeranjangAnggota.info.failed_deleted'));
            set_message('toastr_type', 'warning');
            set_message('message', lang('KeranjangAnggota.info.failed_deleted'));
            return redirect()->to('/keranjanganggota/delete/' . $id);
        }
    }

    public function apply_status($id)
    {
        $field = $this->request->getVar('field');
        $value = $this->request->getVar('value');

        $keranjanganggotaUpdate = $this->keranjanganggotaModel->update($id, array($field => $value));

        if ($keranjanganggotaUpdate) {
            set_message('toastr_msg', ' KeranjangAnggota berhasil diubah');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', ' KeranjangAnggota gagal diubah');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/keranjanganggota');
    }
}
