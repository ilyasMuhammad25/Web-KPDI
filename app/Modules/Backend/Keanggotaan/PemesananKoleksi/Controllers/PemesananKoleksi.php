<?php

namespace PemesananKoleksi\Controllers;

use \CodeIgniter\Files\File;

class PemesananKoleksi extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $pemesanankoleksiModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->pemesanankoleksiModel = new \PemesananKoleksi\Models\PemesananKoleksiModel();
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/pemesanankoleksi/';
        
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
        if (!is_allowed('pemesanankoleksi/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->pemesanankoleksiModel
            ->select('t_pemesanankoleksi.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_pemesanankoleksi.created_by','left')
            ->join('users updated','updated.id = t_pemesanankoleksi.updated_by','left');
            
        $pemesanankoleksis = $query->findAll();

        $this->data['title'] = 'PemesananKoleksi';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['pemesanankoleksis'] = $pemesanankoleksis;
        echo view('PemesananKoleksi\Views\list', $this->data);
    }

    public function create()
    {
        if (!is_allowed('pemesanankoleksi/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah PemesananKoleksi';

		$this->validation->setRule('title', 'Judul', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
            $slug = url_title($this->request->getPost('title'), '-', TRUE);
            $save_data = [
				'title' => $this->request->getPost('title'),
                'author' => $this->request->getPost('author'),
                'publisher' => $this->request->getPost('publisher'),
                'publishyear' => $this->request->getPost('publishyear'),
                'isbn' => $this->request->getPost('isbn'),
                'slug' => $slug,
				'description' => $this->request->getPost('description'),
                'created_by' => user_id(),
            ];

            $newPemesananKoleksiId = $this->pemesanankoleksiModel->insert($save_data);

            if ($newPemesananKoleksiId) {
                add_log('Tambah PemesananKoleksi', 'pemesanankoleksi', 'create', 't_pemesanankoleksi', $newPemesananKoleksiId);
                set_message('toastr_msg', lang('PemesananKoleksi.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/pemesanankoleksi');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('PemesananKoleksi.info.failed_saved'));
                echo view('PemesananKoleksi\Views\add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('pemesanankoleksi/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('PemesananKoleksi\Views\add', $this->data);
        }
    }

    public function edit(int $id = null)
    {
        if (!is_allowed('pemesanankoleksi/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah PemesananKoleksi';
        $pemesanankoleksi = $this->pemesanankoleksiModel->find($id);
        $this->data['pemesanankoleksi'] = $pemesanankoleksi;

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

                $pemesanankoleksiUpdate = $this->pemesanankoleksiModel->update($id, $update_data);

                if ($pemesanankoleksiUpdate) {
                    add_log('Ubah PemesananKoleksi', 'pemesanankoleksi', 'edit', 't_pemesanankoleksi', $id);
                    set_message('toastr_msg', 'PemesananKoleksi berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/pemesanankoleksi');
                } else {
                    set_message('toastr_msg', 'PemesananKoleksi gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'PemesananKoleksi gagal diubah');
                    return redirect()->to('/pemesanankoleksi/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('pemesanankoleksi/edit/' . $id);
        echo view('PemesananKoleksi\Views\update', $this->data);
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('pemesanankoleksi/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/pemesanankoleksi');
        }
        $pemesanankoleksiDelete = $this->pemesanankoleksiModel->delete($id);
        if ($pemesanankoleksiDelete) {
            add_log('Hapus PemesananKoleksi', 'pemesanankoleksi', 'delete', 't_pemesanankoleksi', $id);
            set_message('toastr_msg', lang('PemesananKoleksi.info.successfully_deleted'));
            set_message('toastr_type', 'success');
            return redirect()->to('/pemesanankoleksi');
        } else {
            set_message('toastr_msg', lang('PemesananKoleksi.info.failed_deleted'));
            set_message('toastr_type', 'warning');
            set_message('message', lang('PemesananKoleksi.info.failed_deleted'));
            return redirect()->to('/pemesanankoleksi/delete/' . $id);
        }
    }

    public function apply_status($id)
    {
        $field = $this->request->getVar('field');
        $value = $this->request->getVar('value');

        $pemesanankoleksiUpdate = $this->pemesanankoleksiModel->update($id, array($field => $value));

        if ($pemesanankoleksiUpdate) {
            set_message('toastr_msg', ' PemesananKoleksi berhasil diubah');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', ' PemesananKoleksi gagal diubah');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/pemesanankoleksi');
    }
}
