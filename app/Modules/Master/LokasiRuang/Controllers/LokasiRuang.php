<?php

namespace LokasiRuang\Controllers;

use \CodeIgniter\Files\File;

class LokasiRuang extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $lokasiruangModel;
    protected $lokasiperpustakaanModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->lokasiruangModel = new \LokasiRuang\Models\LokasiRuangModel();
        $this->lokasiperpustakaanModel = new \LokasiPerpustakaan\Models\LokasiPerpustakaanModel();
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/lokasiruang/';
        
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
        if (!is_allowed('lokasiruang/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->lokasiruangModel
            ->select('t_lokasiruang.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_lokasiruang.created_by','left')
            ->join('users updated','updated.id = t_lokasiruang.updated_by','left');
            
        $lokasiruangs = $query->findAll();

        $this->data['title'] = 'LokasiRuang';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['lokasiruangs'] = $lokasiruangs;
        echo view('LokasiRuang\Views\list', $this->data);
    }

    public function create()
    {
        if (!is_allowed('lokasiruang/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }
        $lokasiperpustkaans=  $this->lokasiperpustakaanModel->findAll();
        $this->data['lokasiperpustakaans']=$lokasiperpustkaans;

        $this->data['title'] = 'Tambah LokasiRuang';

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

            $newLokasiRuangId = $this->lokasiruangModel->insert($save_data);

            if ($newLokasiRuangId) {
                add_log('Tambah LokasiRuang', 'lokasiruang', 'create', 't_lokasiruang', $newLokasiRuangId);
                set_message('toastr_msg', lang('LokasiRuang.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/lokasiruang');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('LokasiRuang.info.failed_saved'));
                echo view('LokasiRuang\Views\add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('lokasiruang/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('LokasiRuang\Views\add', $this->data);
        }
    }

    public function edit(int $id = null)
    {
        if (!is_allowed('lokasiruang/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah LokasiRuang';
        $lokasiruang = $this->lokasiruangModel->find($id);
        $this->data['lokasiruang'] = $lokasiruang;

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

                $lokasiruangUpdate = $this->lokasiruangModel->update($id, $update_data);

                if ($lokasiruangUpdate) {
                    add_log('Ubah LokasiRuang', 'lokasiruang', 'edit', 't_lokasiruang', $id);
                    set_message('toastr_msg', 'LokasiRuang berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/lokasiruang');
                } else {
                    set_message('toastr_msg', 'LokasiRuang gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'LokasiRuang gagal diubah');
                    return redirect()->to('/lokasiruang/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('lokasiruang/edit/' . $id);
        echo view('LokasiRuang\Views\update', $this->data);
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('lokasiruang/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/lokasiruang');
        }
        $lokasiruangDelete = $this->lokasiruangModel->delete($id);
        if ($lokasiruangDelete) {
            add_log('Hapus LokasiRuang', 'lokasiruang', 'delete', 't_lokasiruang', $id);
            set_message('toastr_msg', lang('LokasiRuang.info.successfully_deleted'));
            set_message('toastr_type', 'success');
            return redirect()->to('/lokasiruang');
        } else {
            set_message('toastr_msg', lang('LokasiRuang.info.failed_deleted'));
            set_message('toastr_type', 'warning');
            set_message('message', lang('LokasiRuang.info.failed_deleted'));
            return redirect()->to('/lokasiruang/delete/' . $id);
        }
    }

    public function apply_status($id)
    {
        $field = $this->request->getVar('field');
        $value = $this->request->getVar('value');

        $lokasiruangUpdate = $this->lokasiruangModel->update($id, array($field => $value));

        if ($lokasiruangUpdate) {
            set_message('toastr_msg', ' LokasiRuang berhasil diubah');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', ' LokasiRuang gagal diubah');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/lokasiruang');
    }
}
