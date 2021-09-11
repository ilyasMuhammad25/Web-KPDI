<?php

namespace Members\Controllers;

use \CodeIgniter\Files\File;

class Members extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $membersModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->membersModel = new \Members\Models\MembersModel();
        // $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/members/';
        
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
        if (!is_allowed('members/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->membersModel
            ->select('t_members.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_members.created_by','left')
            ->join('users updated','updated.id = t_members.updated_by','left');
            
        $memberss = $query->findAll();

        $this->data['title'] = 'Members';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['memberss'] = $memberss;
        echo view('Members\Views\list', $this->data);
    }

    public function create()
    {
        if (!is_allowed('members/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah Members';

		$this->validation->setRule('name', 'Nama', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
            $slug = url_title($this->request->getPost('name'), '-', TRUE);
            $save_data = [
				'name' => $this->request->getPost('name'),
                'slug' => $slug,
                'IdentityNo'=> $this->request->getPost('IdentityNo'),
                'PlaceOfBirth'=> $this->request->getPost('PlaceOfBirth'),
                'DateOfBirth'=> $this->request->getPost('DateOfBirth'),
                'Address'=> $this->request->getPost('Address'),
                'AddressNow'=> $this->request->getPost('AddressNow'),
                'Phone'=> $this->request->getPost('Phone'),
                'InstitutionName'=> $this->request->getPost('InstitutionName'),
                'InstitutionAddress'=> $this->request->getPost('InstitutionAddress'),
                'InstitutionPhone'=> $this->request->getPost('InstitutionPhone'),
                'MotherName'=> $this->request->getPost('MotherName'),
                'Email'=> $this->request->getPost('Email'),
                'NoHp'=> $this->request->getPost('NoHp'),
                'Provincy'=> $this->request->getPost('Provincy'),
                'ProvincyNow'=> $this->request->getPost('ProvincyNow'),
                'City'=> $this->request->getPost('City'),
                'CityNow'=> $this->request->getPost('CityNow'),
                'Kecamatan'=> $this->request->getPost('Kecamatan'),
                'KecamatanNow'=> $this->request->getPost('KecamatanNow'),
                'Kelurahan'=> $this->request->getPost('Kelurahan'),
                'KelurahanNow'=> $this->request->getPost('KelurahanNow'),
                'RT'=> $this->request->getPost('RT'),
                'RTNow'=> $this->request->getPost('RTNow'),
                'RWNow'=> $this->request->getPost('RWNow'),
                'RW'=> $this->request->getPost('RW'),
                'TahunAjaran'=> $this->request->getPost('TahunAjaran'),
                'category_id' => $this->request->getPost('category_id'),
				'sort' => $this->request->getPost('sort'),
				'description' => $this->request->getPost('description'),
                'created_by' => user_id(),
            ];

            $newMembersId = $this->membersModel->protect(false)->insert($save_data);
            // $newMembersId = $this->membersModel->insert($save_data);

            if ($newMembersId) {
                add_log('Tambah Members', 'members', 'create', 't_members', $newMembersId);
                set_message('toastr_msg', lang('Members.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/members');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Members.info.failed_saved'));
                echo view('Members\Views\add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('members/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Members\Views\add', $this->data);
        }
    }

     public function categories(){
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable('c_references');
        $categories = $baseModel
            ->select('c_references.*')
            ->join('c_menus','c_menus.id = c_references.menu_id', 'inner')
            ->where('c_menus.name','Jenis Identitas')
            ->find_all('c_references.sort', 'asc');
            
            $categoriesperkawinan = $baseModel
            ->select('c_references.*')
            ->join('c_menus','c_menus.id = c_references.menu_id', 'inner')
            ->where('c_menus.name','Status Perkawinan')
            ->find_all('name', 'asc');
     }
    public function edit(int $id = null)
    {
        if (!is_allowed('members/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Members';
        $members = $this->membersModel->find($id);
        $this->data['members'] = $members;

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

                $membersUpdate = $this->membersModel->update($id, $update_data);

                if ($membersUpdate) {
                    add_log('Ubah Members', 'members', 'edit', 't_members', $id);
                    set_message('toastr_msg', 'Members berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/members');
                } else {
                    set_message('toastr_msg', 'Members gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'Members gagal diubah');
                    return redirect()->to('/members/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('members/edit/' . $id);
        echo view('Members\Views\update', $this->data);
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('members/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/members');
        }
        $membersDelete = $this->membersModel->delete($id);
        if ($membersDelete) {
            add_log('Hapus Members', 'members', 'delete', 't_members', $id);
            set_message('toastr_msg', lang('Members.info.successfully_deleted'));
            set_message('toastr_type', 'success');
            return redirect()->to('/members');
        } else {
            set_message('toastr_msg', lang('Members.info.failed_deleted'));
            set_message('toastr_type', 'warning');
            set_message('message', lang('Members.info.failed_deleted'));
            return redirect()->to('/members/delete/' . $id);
        }
    }

    public function apply_status($id)
    {
        $field = $this->request->getVar('field');
        $value = $this->request->getVar('value');

        $membersUpdate = $this->membersModel->update($id, array($field => $value));

        if ($membersUpdate) {
            set_message('toastr_msg', ' Members berhasil diubah');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', ' Members gagal diubah');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/members');
    }
}
