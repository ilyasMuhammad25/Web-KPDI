<?php

namespace App\Modules\Cms\Contact\Controllers;

use \CodeIgniter\Files\File;

class Contact extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
	protected $authorize;
    protected $contactModel;
    protected $uploadPath;
    protected $modulePath;
    function __construct()
    {
        $this->contactModel = new \App\Modules\Cms\Contact\Models\ContactModel();
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/contact/';
        
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
    }
	
    public function index()
    {
        if (!is_allowed('contact/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Contact Form';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['contacts'] = $this->contactModel->findAll();
        // echo view('backend/contact/list', $this->data);
        echo view('Contact\Views\list', $this->data);
    }

    public function edit(int $id)
    {
        if (!is_allowed('contact/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
			return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Kontak';
        $contact = $this->contactModel->find($id);
        $this->data['contact'] = $contact;
        $this->validation->setRule('name', 'Nama', 'required');
        $this->validation->setRule('email', 'Alamat Email', 'required');
        $this->validation->setRule('phone', 'No. Telepon', 'required');
        if ($this->request->getPost()) {
            if ($this->validation->withRequest($this->request)->run()) {
                $update_data = [
                    'name' => $this->request->getPost('name'),
                    'email' => $this->request->getPost('email'),
                    'phone' => $this->request->getPost('phone'),
                    'subject' => $this->request->getPost('subject'),
                    'message' => $this->request->getPost('message'),
                ];

                $contactUpdate = $this->contactModel->update($id, $update_data);
                if ($contactUpdate) {
                    add_log('Ubah contact', 'contact', 'edit', 't_contact', $id);
                    set_message('toastr_msg', 'Kontak berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/contact');
                } else {
                    set_message('toastr_msg', 'Kontak gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', $this->auth->errors());
                    return redirect()->to('/contact/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('contact/edit/' . $id);
        echo view('Contact\Views\update', $this->data);
    }

    public function create()
    {
        if (!is_allowed('contact/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah contact';
        $this->validation->setRule('name', 'Nama', 'required');
        $this->validation->setRule('email', 'Alamat Email', 'required');
        $this->validation->setRule('phone', 'No. Telepon', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
            $identifikasi_koleksi_id = $this->request->getPost('identifikasi_koleksi_id');
            $save_data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'phone' => $this->request->getPost('phone'),
                'subject' => $this->request->getPost('subject'),
                'message' => $this->request->getPost('message'),
            ];

            $newcontactId = $this->contactModel->insert($save_data);
            if ($newcontactId) {
                add_log('Tambah Kontak', 'contact', 'create', 't_contact', $newcontactId);
                set_message('toastr_msg', 'Kontak berhasil ditambah');
                set_message('toastr_type', 'success');
                
                return redirect()->to('/contact');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : 'Kontak gagal ditambah');
                echo view('Contact\Views\add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('contact/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Contact\Views\add', $this->data);
        }
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('contact/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/home');
        }
        $contactDelete = $this->contactModel->delete($id);
        if ($contactDelete) {
            add_log('Hapus contact', 'contact', 'delete', 't_contact', $id);
            set_message('toastr_msg', 'Kontak berhasil dihapus');
            set_message('toastr_type', 'success');
            return redirect()->to('/contact');
        } else {
            set_message('toastr_msg', 'Kontak gagal dihapus');
            set_message('toastr_type', 'warning');
            set_message('message', $this->auth->errors());
            return redirect()->to('/contact/delete/' . $id);
        }
    }
}
