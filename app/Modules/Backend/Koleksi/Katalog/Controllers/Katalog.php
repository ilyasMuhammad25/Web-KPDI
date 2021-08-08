<?php

namespace Katalog\Controllers;

use \CodeIgniter\Files\File;

class Katalog extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $katalogModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->katalogModel = new \Katalog\Models\KatalogModel();
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/katalog/';
        
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
        
        helper(['form', 'url', 'auth', 'app', 'adminigniter']);
    }
    public function index()
    {
        if (!is_allowed('katalog/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->katalogModel
            ->select('t_katalog.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_katalog.created_by','left')
            ->join('users updated','updated.id = t_katalog.updated_by','left');
            
        $katalogs = $query->findAll();

        $this->data['title'] = 'Katalog '.strtoupper($slug);
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['katalogs'] = $katalogs;
        echo view('Katalog\Views\list', $this->data);
    }

    public function create()
    {
        if (!is_allowed('katalog/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah Katalog';

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

            $newKatalogId = $this->katalogModel->insert($save_data);

            if ($newKatalogId) {
                add_log('Tambah Katalog', 'katalog', 'create', 't_katalog', $newKatalogId);
                set_message('toastr_msg', lang('Katalog.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/katalog');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Katalog.info.failed_saved'));
                echo view('Katalog\Views\add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('katalog/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Katalog\Views\add', $this->data);
        }
    }

    public function edit(int $id = null)
    {
        if (!is_allowed('katalog/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Katalog';
        $katalog = $this->katalogModel->find($id);
        $this->data['katalog'] = $katalog;

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

                $katalogUpdate = $this->katalogModel->update($id, $update_data);

                if ($katalogUpdate) {
                    add_log('Ubah Katalog', 'katalog', 'edit', 't_katalog', $id);
                    set_message('toastr_msg', 'Katalog berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/katalog');
                } else {
                    set_message('toastr_msg', 'Katalog gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'Katalog gagal diubah');
                    return redirect()->to('/katalog/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('katalog/edit/' . $id);
        echo view('Katalog\Views\update', $this->data);
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('katalog/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/katalog');
        }
        $katalogDelete = $this->katalogModel->delete($id);
        if ($katalogDelete) {
            add_log('Hapus Katalog', 'katalog', 'delete', 't_katalog', $id);
            set_message('toastr_msg', lang('Katalog.info.successfully_deleted'));
            set_message('toastr_type', 'success');
            return redirect()->to('/katalog');
        } else {
            set_message('toastr_msg', lang('Katalog.info.failed_deleted'));
            set_message('toastr_type', 'warning');
            set_message('message', lang('Katalog.info.failed_deleted'));
            return redirect()->to('/katalog/delete/' . $id);
        }
    }

    public function apply_status($id)
    {
        $field = $this->request->getVar('field');
        $value = $this->request->getVar('value');

        $katalogUpdate = $this->katalogModel->update($id, array($field => $value));

        if ($katalogUpdate) {
            set_message('toastr_msg', ' Katalog berhasil diubah');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', ' Katalog gagal diubah');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/katalog');
    }

    /**
     * Customize for RDA
     */
    public function rda_index()
    {
        if (!is_allowed('katalog/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->katalogModel
            ->select('t_katalog.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_katalog.created_by','left')
            ->join('users updated','updated.id = t_katalog.updated_by','left');
            
        $katalogs = $query->findAll();

        $this->data['title'] = 'Katalog RDA';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['katalogs'] = $katalogs;
        echo view('Katalog\Views\rda\list', $this->data);
    }

    public function rda_create()
    {
        if (!is_allowed('katalog/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah Katalog';

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

            $newKatalogId = $this->katalogModel->insert($save_data);

            if ($newKatalogId) {
                add_log('Tambah Katalog', 'katalog', 'create', 't_katalog', $newKatalogId);
                set_message('toastr_msg', lang('Katalog.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/katalog');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Katalog.info.failed_saved'));
                echo view('Katalog\Views\rda\add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('katalog/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Katalog\Views\rda\add', $this->data);
        }
    }

    public function rda_edit(int $id = null)
    {
        if (!is_allowed('katalog/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Katalog';
        $katalog = $this->katalogModel->find($id);
        $this->data['katalog'] = $katalog;

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

                $katalogUpdate = $this->katalogModel->update($id, $update_data);

                if ($katalogUpdate) {
                    add_log('Ubah Katalog', 'katalog', 'edit', 't_katalog', $id);
                    set_message('toastr_msg', 'Katalog berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/katalog');
                } else {
                    set_message('toastr_msg', 'Katalog gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'Katalog gagal diubah');
                    return redirect()->to('/katalog/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('katalog/edit/' . $id);
        echo view('Katalog\Views\rda\update', $this->data);
    }

    /**
     * Customize for AACR
     */
    public function aacr_index()
    {
        if (!is_allowed('katalog/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->katalogModel
            ->select('t_katalog.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_katalog.created_by','left')
            ->join('users updated','updated.id = t_katalog.updated_by','left');
            
        $katalogs = $query->findAll();

        $this->data['title'] = 'Katalog AACR';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['katalogs'] = $katalogs;
        echo view('Katalog\Views\aacr\list', $this->data);
    }

    public function aacr_create()
    {
        if (!is_allowed('katalog/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah Katalog';

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

            $newKatalogId = $this->katalogModel->insert($save_data);

            if ($newKatalogId) {
                add_log('Tambah Katalog', 'katalog', 'create', 't_katalog', $newKatalogId);
                set_message('toastr_msg', lang('Katalog.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/katalog');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Katalog.info.failed_saved'));
                echo view('Katalog\Views\aacr\add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('katalog/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Katalog\Views\aacr\add', $this->data);
        }
    }

    public function aacr_edit(int $id = null)
    {
        if (!is_allowed('katalog/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Katalog';
        $katalog = $this->katalogModel->find($id);
        $this->data['katalog'] = $katalog;

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

                $katalogUpdate = $this->katalogModel->update($id, $update_data);

                if ($katalogUpdate) {
                    add_log('Ubah Katalog', 'katalog', 'edit', 't_katalog', $id);
                    set_message('toastr_msg', 'Katalog berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/katalog');
                } else {
                    set_message('toastr_msg', 'Katalog gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'Katalog gagal diubah');
                    return redirect()->to('/katalog/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('katalog/edit/' . $id);
        echo view('Katalog\Views\aacr\update', $this->data);
    }
}
