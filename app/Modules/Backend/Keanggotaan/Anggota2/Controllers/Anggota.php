<?php

namespace Anggota\Controllers;

use \CodeIgniter\Files\File;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Anggota extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $anggotaModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->anggotaModel = new \Anggota\Models\AnggotaModel();
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/anggota/';
        
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
        if (!is_allowed('anggota/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->anggotaModel
            ->select('t_anggota.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_anggota.created_by','left')
            ->join('users updated','updated.id = t_anggota.updated_by','left');
            
        $anggotas = $query->findAll();

        $this->data['title'] = 'Anggota';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['anggotas'] = $anggotas;
        echo view('Anggota\Views\list', $this->data);
    }

    public function create()
    {
        if (!is_allowed('anggota/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah Anggota';

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

            $newAnggotaId = $this->anggotaModel->insert($save_data);

            if ($newAnggotaId) {
                add_log('Tambah Anggota', 'anggota', 'create', 't_anggota', $newAnggotaId);
                set_message('toastr_msg', lang('Anggota.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/anggota');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Anggota.info.failed_saved'));
                echo view('Anggota\Views\add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('anggota/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Anggota\Views\add', $this->data);
        }
    }

    public function edit(int $id = null)
    {
        if (!is_allowed('anggota/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Anggota';
        $anggota = $this->anggotaModel->find($id);
        $this->data['anggota'] = $anggota;

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

                $anggotaUpdate = $this->anggotaModel->update($id, $update_data);

                if ($anggotaUpdate) {
                    add_log('Ubah Anggota', 'anggota', 'edit', 't_anggota', $id);
                    set_message('toastr_msg', 'Anggota berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/anggota');
                } else {
                    set_message('toastr_msg', 'Anggota gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'Anggota gagal diubah');
                    return redirect()->to('/anggota/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('anggota/edit/' . $id);
        echo view('Anggota\Views\update', $this->data);
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('anggota/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/anggota');
        }
        $anggotaDelete = $this->anggotaModel->delete($id);
        if ($anggotaDelete) {
            add_log('Hapus Anggota', 'anggota', 'delete', 't_anggota', $id);
            set_message('toastr_msg', lang('Anggota.info.successfully_deleted'));
            set_message('toastr_type', 'success');
            return redirect()->to('/anggota');
        } else {
            set_message('toastr_msg', lang('Anggota.info.failed_deleted'));
            set_message('toastr_type', 'warning');
            set_message('message', lang('Anggota.info.failed_deleted'));
            return redirect()->to('/anggota/delete/' . $id);
        }
    }

    public function apply_status($id)
    {
        $field = $this->request->getVar('field');
        $value = $this->request->getVar('value');

        $anggotaUpdate = $this->anggotaModel->update($id, array($field => $value));

        if ($anggotaUpdate) {
            set_message('toastr_msg', ' Anggota berhasil diubah');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', ' Anggota gagal diubah');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/anggota');
    }

    public function import()
    {
        if (!is_allowed('anggota/import')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Import Anggota';

		$this->validation->setRule('file_template', 'File Template', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
            
            // Logic Upload
            $files = (array) $this->request->getPost('file_template');
            if (count($files)) {
                $listed_file = array();
                foreach ($files as $uuid => $name) {
                    if (file_exists($this->uploadPath . $name)) {
                        $file = new File($this->uploadPath . $name);
                        
                        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file);
                        // dd($spreadsheet);

                        $spreadsheet_arr = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
                        $inserts = array();
                        foreach($spreadsheet_arr as $row){
                            $inserts[] = array(
                                'name' => $row['A'],
                                // 'nomor' => $row['B'],
                                // 'bla' => $row['C'],
                                // 'bla' => $row['D'],
                            );
                        }

                        dd($inserts);

                        // $this->db->table('t_anggota')->insertBatch($inserts);

                    }
                }
            }

        } else {
            $this->data['redirect'] = base_url('anggota/import');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Anggota\Views\import', $this->data);
        }
    }
}
