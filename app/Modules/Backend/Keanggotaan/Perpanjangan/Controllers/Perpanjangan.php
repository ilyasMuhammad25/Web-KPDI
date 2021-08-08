<?php

namespace Perpanjangan\Controllers;

use \CodeIgniter\Files\File;

class Perpanjangan extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $perpanjanganModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->perpanjanganModel = new \Perpanjangan\Models\PerpanjanganModel();
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/perpanjangan/';
        
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
        if (!is_allowed('perpanjangan/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->perpanjanganModel
            ->select('t_perpanjangan.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_perpanjangan.created_by','left')
            ->join('users updated','updated.id = t_perpanjangan.updated_by','left');
            
        $perpanjangans = $query->findAll();

        $this->data['title'] = 'Perpanjangan';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['perpanjangans'] = $perpanjangans;
        echo view('Perpanjangan\Views\list', $this->data);
    }

    public function create()
    {
        if (!is_allowed('perpanjangan/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah Perpanjangan';

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

            $newPerpanjanganId = $this->perpanjanganModel->insert($save_data);

            if ($newPerpanjanganId) {
                add_log('Tambah Perpanjangan', 'perpanjangan', 'create', 't_perpanjangan', $newPerpanjanganId);
                set_message('toastr_msg', lang('Perpanjangan.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/perpanjangan');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Perpanjangan.info.failed_saved'));
                echo view('Perpanjangan\Views\add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('perpanjangan/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Perpanjangan\Views\add', $this->data);
        }
    }

    public function edit(int $id = null)
    {
        if (!is_allowed('perpanjangan/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Perpanjangan';
        $perpanjangan = $this->perpanjanganModel->find($id);
        $this->data['perpanjangan'] = $perpanjangan;

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

                $perpanjanganUpdate = $this->perpanjanganModel->update($id, $update_data);

                if ($perpanjanganUpdate) {
                    add_log('Ubah Perpanjangan', 'perpanjangan', 'edit', 't_perpanjangan', $id);
                    set_message('toastr_msg', 'Perpanjangan berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/perpanjangan');
                } else {
                    set_message('toastr_msg', 'Perpanjangan gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'Perpanjangan gagal diubah');
                    return redirect()->to('/perpanjangan/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('perpanjangan/edit/' . $id);
        echo view('Perpanjangan\Views\update', $this->data);
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('perpanjangan/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/perpanjangan');
        }
        $perpanjanganDelete = $this->perpanjanganModel->delete($id);
        if ($perpanjanganDelete) {
            add_log('Hapus Perpanjangan', 'perpanjangan', 'delete', 't_perpanjangan', $id);
            set_message('toastr_msg', lang('Perpanjangan.info.successfully_deleted'));
            set_message('toastr_type', 'success');
            return redirect()->to('/perpanjangan');
        } else {
            set_message('toastr_msg', lang('Perpanjangan.info.failed_deleted'));
            set_message('toastr_type', 'warning');
            set_message('message', lang('Perpanjangan.info.failed_deleted'));
            return redirect()->to('/perpanjangan/delete/' . $id);
        }
    }

    public function apply_status($id)
    {
        $field = $this->request->getVar('field');
        $value = $this->request->getVar('value');

        $perpanjanganUpdate = $this->perpanjanganModel->update($id, array($field => $value));

        if ($perpanjanganUpdate) {
            set_message('toastr_msg', ' Perpanjangan berhasil diubah');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', ' Perpanjangan gagal diubah');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/perpanjangan');
    }
}
