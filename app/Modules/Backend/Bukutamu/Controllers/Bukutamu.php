<?php

namespace Bukutamu\Controllers;

use \CodeIgniter\Files\File;

class Bukutamu extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $bukutamuModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->bukutamuModel = new \Bukutamu\Models\BukutamuModel();
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/bukutamu/';
        
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
        if (!is_allowed('bukutamu/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->bukutamuModel
            ->select('t_bukutamu.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_bukutamu.created_by','left')
            ->join('users updated','updated.id = t_bukutamu.updated_by','left');
            
        $bukutamus = $query->findAll();

        $this->data['title'] = 'Bukutamu';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['bukutamus'] = $bukutamus;
        echo view('Bukutamu\Views\list', $this->data);
    }

    public function create()
    {
        if (!is_allowed('bukutamu/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah Bukutamu';

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

            $newBukutamuId = $this->bukutamuModel->insert($save_data);

            if ($newBukutamuId) {
                add_log('Tambah Bukutamu', 'bukutamu', 'create', 't_bukutamu', $newBukutamuId);
                set_message('toastr_msg', lang('Bukutamu.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/bukutamu');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Bukutamu.info.failed_saved'));
                echo view('Bukutamu\Views\add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('bukutamu/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Bukutamu\Views\add', $this->data);
        }
    }

    public function edit(int $id = null)
    {
        if (!is_allowed('bukutamu/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Bukutamu';
        $bukutamu = $this->bukutamuModel->find($id);
        $this->data['bukutamu'] = $bukutamu;

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

                $bukutamuUpdate = $this->bukutamuModel->update($id, $update_data);

                if ($bukutamuUpdate) {
                    add_log('Ubah Bukutamu', 'bukutamu', 'edit', 't_bukutamu', $id);
                    set_message('toastr_msg', 'Bukutamu berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/bukutamu');
                } else {
                    set_message('toastr_msg', 'Bukutamu gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'Bukutamu gagal diubah');
                    return redirect()->to('/bukutamu/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('bukutamu/edit/' . $id);
        echo view('Bukutamu\Views\update', $this->data);
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('bukutamu/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/bukutamu');
        }
        $bukutamuDelete = $this->bukutamuModel->delete($id);
        if ($bukutamuDelete) {
            add_log('Hapus Bukutamu', 'bukutamu', 'delete', 't_bukutamu', $id);
            set_message('toastr_msg', lang('Bukutamu.info.successfully_deleted'));
            set_message('toastr_type', 'success');
            return redirect()->to('/bukutamu');
        } else {
            set_message('toastr_msg', lang('Bukutamu.info.failed_deleted'));
            set_message('toastr_type', 'warning');
            set_message('message', lang('Bukutamu.info.failed_deleted'));
            return redirect()->to('/bukutamu/delete/' . $id);
        }
    }

    public function apply_status($id)
    {
        $field = $this->request->getVar('field');
        $value = $this->request->getVar('value');

        $bukutamuUpdate = $this->bukutamuModel->update($id, array($field => $value));

        if ($bukutamuUpdate) {
            set_message('toastr_msg', ' Bukutamu berhasil diubah');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', ' Bukutamu gagal diubah');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/bukutamu');
    }
}
