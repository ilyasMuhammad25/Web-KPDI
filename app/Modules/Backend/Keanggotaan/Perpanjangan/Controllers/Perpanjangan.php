<?php

namespace Perpanjangan\Controllers;

use \CodeIgniter\Files\File;

class Perpanjangan extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    // protected $anggotaModel;
    protected $anggotaModel;
    protected $perpanjanganModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->perpanjanganModel = new \Perpanjangan\Models\PerpanjanganModel();
        $this->anggotaModel = new \Anggota\Models\AnggotaModel();
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
        helper('adminigniter');
		helper('reference');
		helper('anggota');
		helper('tgl_indo');
		helper('url');
		helper('thumbnail');
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
        ->select('t_anggota_id.name as nama')
        ->select('t_anggota_id.MemberNo as MembersNo')
        ->join('users created','created.id = t_perpanjangan.created_by','left')
        ->join('users updated','updated.id = t_perpanjangan.updated_by','left')
        ->join('t_anggota t_anggota_id','t_anggota_id.id = t_perpanjangan.t_anggota_id','left');
        
    $perpanjangans = $query->findAll();
    // $Nomember=$this->anggotaModel->MemberNo();
    $this->data['title'] = 'Daftar perpanjangan';
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

		$this->validation->setRule('t_anggota_id', 't_anggota_id', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
		 $id_anggota= $this->request->getPost('t_anggota_id');
                $save_data = [
                    't_anggota_id' =>  $id_anggota,
                    'biaya' => $this->request->getPost('biaya'),                  
                    'description' => $this->request->getPost('description'),
                    'updated_by' => user_id(),
                ];
            //  dd($save_data);
            $newPerpanjanganId = $this->perpanjanganModel->insert($save_data);
            // dd($newPerpanjanganId);
            if($newPerpanjanganId){
                 $data=[
                    'EndDate' =>$this->request->getPost('EndDate'),
                    'ref_jenisanggota' =>$this->request->getPost('ref_jenisanggota')
                 ];
                // $builder = $this->anggotaModel->where('id', $id);
               $this->anggotaModel->update($id_anggota,$data);
            }

            if ($newPerpanjanganId) {
                add_log('Tambah Perpanjangan', 'perpanjangan', 'create', 't_anggota', $newPerpanjanganId);
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
        $perpanjangan = $this->anggotaModel->find($id);
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

                $perpanjanganUpdate = $this->anggotaModel->update($id, $update_data);

                if ($perpanjanganUpdate) {
                    add_log('Ubah Perpanjangan', 'perpanjangan', 'edit', 't_anggota', $id);
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
        $perpanjanganDelete = $this->anggotaModel->delete($id);
        if ($perpanjanganDelete) {
            add_log('Hapus Perpanjangan', 'perpanjangan', 'delete', 't_anggota', $id);
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

        $perpanjanganUpdate = $this->anggotaModel->update($id, array($field => $value));

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