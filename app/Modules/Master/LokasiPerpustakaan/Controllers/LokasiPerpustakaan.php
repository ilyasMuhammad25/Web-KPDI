<?php

namespace LokasiPerpustakaan\Controllers;

use \CodeIgniter\Files\File;

class LokasiPerpustakaan extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $lokasiperpustakaanModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->lokasiperpustakaanModel = new \LokasiPerpustakaan\Models\LokasiPerpustakaanModel();
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/lokasiperpustakaan/';
        
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
        if (!is_allowed('lokasiperpustakaan/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->lokasiperpustakaanModel
            ->select('m_lokasiperpustakaan.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = m_lokasiperpustakaan.created_by','left')
            ->join('users updated','updated.id = m_lokasiperpustakaan.updated_by','left');
            
        $lokasiperpustakaans = $query->findAll();

        $this->data['title'] = 'LokasiPerpustakaan';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['lokasiperpustakaans'] = $lokasiperpustakaans;
        echo view('LokasiPerpustakaan\Views\list', $this->data);
    }

    public function create()
    {
        if (!is_allowed('lokasiperpustakaan/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah Lokasi Perpustakaan';

		$this->validation->setRule('name', 'Nama', 'required');
        $this->validation->setRule('kode', 'Kode', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
            $slug = url_title($this->request->getPost('name'), '-', TRUE);
            $save_data = [
				'name' => $this->request->getPost('name'),
                'kode' => $this->request->getPost('kode'),
                'alamat' => $this->request->getPost('alamat'),
                'slug' => $slug,
				'sort' => $this->request->getPost('sort'),
				'description' => $this->request->getPost('description'),
                'created_by' => user_id(),
            ];

            $newLokasiPerpustakaanId = $this->lokasiperpustakaanModel->insert($save_data);

            if ($newLokasiPerpustakaanId) {
                add_log('Tambah LokasiPerpustakaan', 'lokasiperpustakaan', 'create', 'm_lokasiperpustakaan', $newLokasiPerpustakaanId);
                set_message('toastr_msg', lang('LokasiPerpustakaan.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/lokasiperpustakaan');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('LokasiPerpustakaan.info.failed_saved'));
                echo view('LokasiPerpustakaan\Views\add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('lokasiperpustakaan/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('LokasiPerpustakaan\Views\add', $this->data);
        }
    }

    public function edit(int $id = null)
    {
        if (!is_allowed('lokasiperpustakaan/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Lokasi Perpustakaan';
        $lokasiperpustakaan = $this->lokasiperpustakaanModel->find($id);
        $this->data['lokasiperpustakaan'] = $lokasiperpustakaan;

		$this->validation->setRule('name', 'Nama', 'required');
        if ($this->request->getPost()) {
            if ($this->validation->withRequest($this->request)->run()) {
                $slug = url_title($this->request->getPost('name'), '-', TRUE);
                $update_data = [
                    'name' => $this->request->getPost('name'),
                    'kode' => $this->request->getPost('kode'),
                    'alamat' => $this->request->getPost('alamat'),
                    'slug' => $slug,
                    'sort' => $this->request->getPost('sort'),
                    'description' => $this->request->getPost('description'),
                    'updated_by' => user_id(),
                ];

                $lokasiperpustakaanUpdate = $this->lokasiperpustakaanModel->update($id, $update_data);

                if ($lokasiperpustakaanUpdate) {
                    add_log('Ubah LokasiPerpustakaan', 'lokasiperpustakaan', 'edit', 'm_lokasiperpustakaan', $id);
                    set_message('toastr_msg', 'LokasiPerpustakaan berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/lokasiperpustakaan');
                } else {
                    set_message('toastr_msg', 'LokasiPerpustakaan gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'LokasiPerpustakaan gagal diubah');
                    return redirect()->to('/lokasiperpustakaan/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('lokasiperpustakaan/edit/' . $id);
        echo view('LokasiPerpustakaan\Views\update', $this->data);
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('lokasiperpustakaan/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/lokasiperpustakaan');
        }
        $lokasiperpustakaanDelete = $this->lokasiperpustakaanModel->delete($id);
        if ($lokasiperpustakaanDelete) {
            add_log('Hapus LokasiPerpustakaan', 'lokasiperpustakaan', 'delete', 'm_lokasiperpustakaan', $id);
            set_message('toastr_msg', lang('LokasiPerpustakaan.info.successfully_deleted'));
            set_message('toastr_type', 'success');
            return redirect()->to('/lokasiperpustakaan');
        } else {
            set_message('toastr_msg', lang('LokasiPerpustakaan.info.failed_deleted'));
            set_message('toastr_type', 'warning');
            set_message('message', lang('LokasiPerpustakaan.info.failed_deleted'));
            return redirect()->to('/lokasiperpustakaan/delete/' . $id);
        }
    }

    public function apply_status($id)
    {
        $field = $this->request->getVar('field');
        $value = $this->request->getVar('value');

        $lokasiperpustakaanUpdate = $this->lokasiperpustakaanModel->update($id, array($field => $value));

        if ($lokasiperpustakaanUpdate) {
            set_message('toastr_msg', ' LokasiPerpustakaan berhasil diubah');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', ' LokasiPerpustakaan gagal diubah');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/lokasiperpustakaan');
    }
}
