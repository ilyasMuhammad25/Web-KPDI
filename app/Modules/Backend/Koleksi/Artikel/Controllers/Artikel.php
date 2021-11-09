<?php

namespace Artikel\Controllers;

use \CodeIgniter\Files\File;

class Artikel extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $artikelModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->artikelModel = new \Artikel\Models\ArtikelModel();
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/artikel/';
        
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
        if (!is_allowed('artikel/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->artikelModel
            ->select('t_serial_artikel.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_serial_artikel.created_by','left')
            ->join('users updated','updated.id = t_serial_artikel.updated_by','left');
            
        $artikels = $query->findAll();

        $this->data['title'] = 'Artikel';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['artikels'] = $artikels;
        echo view('Artikel\Views\list', $this->data);
    }

    public function create()
    {
        if (!is_allowed('artikel/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }
        $this->validation->setRule('Title', 'Title', 'required');
        $this->data['title'] = 'Tambah Artikel';
        $Title = $this->request->getPost('Title');
		$Content = ucwords($this->request->getPost('Content'));
		$Creator = ucwords($this->request->getPost('Creator'));
		$Contributor = ucwords($this->request->getPost('Contributor'));
        $StartPage = $this->request->getPost('StartPage');
        $Pages = $this->request->getPost('Pages');
        $Subject = $this->request->getPost('Subject');
        $EDISISERAIL = $this->request->getPost('EDISISERIAL');
        $ISOPAC = $this->request->getPost('ISOPAC');
        $Abstract = $this->request->getPost('Abstract');
        $Catalog_id = $this->request->getPost('Catalog_id');
		
		//Data prodi
		$data = [ 
			'Title' => $Title,
			'Content' => $$Content,
			'Creator' => $Creator,
			'Contributor' => $Contributor,
			'StartPage' => $StartPage,
			'Pages' => $Pages,
			'Subject' => $Subject,
			'EDISISERIAL' => $EDISISERIAL,
			'ISOPAC' => $ISOPAC,
			'Abstract' => $Abstract,
			'Catalog_id' => $Catalog_id,
		];

		//Cek Validasi Data prodi, Jika Data Tidak Valid 
		if ($this->form_validation->run($data, 'Artikel') == FALSE) {
			
			$validasi = [
				'error'   => true,
			    'nama_artikel_error' => $this->form_validation->getErrors('nama_artikel')
			];
			echo json_encode($validasi);
		}

		//Data Valid
		else {
			//Simpan Data prodi
			$this->artikelModel->insert($data);

			$validasi = [
				'success'   => true
			];
			echo json_encode($validasi);
		}
    }

    public function createtes()
    {
        if (!is_allowed('artikel/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah Artikel';

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

            $newArtikelId = $this->artikelModel->insert($save_data);

            if ($newArtikelId) {
                add_log('Tambah Artikel', 'artikel', 'create', 't_serial_artikel', $newArtikelId);
                set_message('toastr_msg', lang('Artikel.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/artikel');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Artikel.info.failed_saved'));
                echo view('Artikel\Views\add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('artikel/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Artikel\Views\add', $this->data);
        }
    }

    public function edit(int $id = null)
    {
        if (!is_allowed('artikel/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Artikel';
        $artikel = $this->artikelModel->find($id);
        $this->data['artikel'] = $artikel;

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

                $artikelUpdate = $this->artikelModel->update($id, $update_data);

                if ($artikelUpdate) {
                    add_log('Ubah Artikel', 'artikel', 'edit', 't_serial_artikel', $id);
                    set_message('toastr_msg', 'Artikel berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/artikel');
                } else {
                    set_message('toastr_msg', 'Artikel gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'Artikel gagal diubah');
                    return redirect()->to('/artikel/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('artikel/edit/' . $id);
        echo view('Artikel\Views\update', $this->data);
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('artikel/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/artikel');
        }
        $artikelDelete = $this->artikelModel->delete($id);
        if ($artikelDelete) {
            add_log('Hapus Artikel', 'artikel', 'delete', 't_serial_artikel', $id);
            set_message('toastr_msg', lang('Artikel.info.successfully_deleted'));
            set_message('toastr_type', 'success');
            return redirect()->to('/artikel');
        } else {
            set_message('toastr_msg', lang('Artikel.info.failed_deleted'));
            set_message('toastr_type', 'warning');
            set_message('message', lang('Artikel.info.failed_deleted'));
            return redirect()->to('/artikel/delete/' . $id);
        }
    }

    public function apply_status($id)
    {
        $field = $this->request->getVar('field');
        $value = $this->request->getVar('value');

        $artikelUpdate = $this->artikelModel->update($id, array($field => $value));

        if ($artikelUpdate) {
            set_message('toastr_msg', ' Artikel berhasil diubah');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', ' Artikel gagal diubah');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/artikel');
    }
}