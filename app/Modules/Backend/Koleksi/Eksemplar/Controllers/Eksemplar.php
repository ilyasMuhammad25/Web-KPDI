<?php

namespace Eksemplar\Controllers;

use \CodeIgniter\Files\File;

class Eksemplar extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $eksemplarModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->eksemplarModel = new \Eksemplar\Models\EksemplarModel();
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/eksemplar/';
        
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

        helper(['form', 'url', 'auth', 'app', 'adminigniter','eksemplar_helper']);
    }
    public function index()
    {
        if (!is_allowed('eksemplar/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->eksemplarModel
            ->select('t_eksemplar.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_eksemplar.created_by','left')
            ->join('users updated','updated.id = t_eksemplar.updated_by','left');
            
        $eksemplars = $query->findAll();

        $this->data['title'] = 'Eksemplar';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['eksemplars'] = $eksemplars;
        echo view('Eksemplar\Views\list', $this->data);
    }

    public function karantina_index()
    {
        if (!is_allowed('eksemplar/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->eksemplarModel
            ->select('t_eksemplar.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_eksemplar.created_by','left')
            ->join('users updated','updated.id = t_eksemplar.updated_by','left');
            
        $eksemplars = $query->findAll();

        $this->data['title'] = 'Eksemplar - Karantina';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['eksemplars'] = $eksemplars;
        echo view('Eksemplar\Views\karantina\list', $this->data);
    }

    public function keranjang_index()
    {
        if (!is_allowed('eksemplar/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->eksemplarModel
            ->select('t_eksemplar.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created','created.id = t_eksemplar.created_by','left')
            ->join('users updated','updated.id = t_eksemplar.updated_by','left');
            
        $eksemplars = $query->findAll();

        $this->data['title'] = 'Eksemplar - Keranjang';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['eksemplars'] = $eksemplars;
        echo view('Eksemplar\Views\keranjang\list', $this->data);
    }

    public function create()
    {
        if (!is_allowed('eksemplar/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }
        $this->data['title'] = 'Tambah Eksemplar';
        // $this->data[' BarcodeNumber '] = (int)preg_replace('/[^0-9]/', '', BarcodeNumber_helper());
        $this->data['ref_currency'] = get_references('ref_currency');
        $this->data['ref_rules'] = get_references('ref_rules');
        $this->data['ref_media'] = get_references('media');
        $this->data['ref_partner'] = get_references('partner');
        $this->data['ref_source'] = get_references('source');
        $this->data['ref_status'] = get_references('ref_status');
        $BarcodeNumber =  BarcodeNumber_helper();
		$NoInduk =NoInduk_helper();
		$RFID =RFID_helper();
        

		$this->validation->setRule('NomorBarcode', 'NomorBarcode', 'unique');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
            $slug = url_title($this->request->getPost('name'), '-', TRUE);
            $post = $this->request->getPost();
            for ($i = 0; $i < (int)$post['jml_eksemplar']; $i++) {
            $save_data = [
                'NomorBarcode' =>$BarcodeNumber + $i, 11, '0', STR_PAD_LEFT,
				'NoInduk' => $NoInduk + $i, 5, '0', STR_PAD_LEFT,
				'ref_currency' => $post['ref_currency'],
				'RFID' => $RFID + $i, 11, '0', STR_PAD_LEFT,
				'Price' => $post['Price'],
				'PriceType' => $post['PriceType'],
				'TanggalPengadaan' => $post['TanggalPengadaan'],
				'CallNumber' => $post['CallNumber'],
				'Branch_id' => 37,
				'Catalog_id' => $post['Catalog_id'],
				'ref_partner' => $post['ref_partner'],
				'Location_id' => $post['Location_id'],
				'ref_rules' => $post['ref_rules'],
				'Category_id' => $post['Category_id'],
				'ref_media' => $post['ref_media'],
				'ref_source' => $post['ref_source'],
				'ref_status' => $post['ref_status'],
				'Location_Library_id' => $post['Location_Library_id'],
				'Keterangan_Sumber' => null,
				'CreateTerminal' => null,
				'IsVerified' => '',
				'IsQUARANTINE' => null,
				'QUARANTINEDBY' => null,
				'QUARANTINEDDATE' => null,
				'QUARANTINEDTERMINAL' => null,
				'ISREFERENSI' => null,
				'EDISISERIAL' => $edisi_serial,
				// 'NOJILID' => $post['NOJILID'],
				'TANGGAL_TERBIT_EDISI_SERIAL' => $tgl_edisi_serial,
				'Bahan_Sertaan' => $post['Bahan_Sertaan'],
				'KETERANGAN_LAIN' => $post['KETERANGAN_LAIN'],
				'ISOPAC' => $post['IsOPAC'],
                'created_by' => user_id(),
            ];

            $newEksemplarId = $this->eksemplarModel->insert($save_data);
        }
            if ($newEksemplarId) {
                add_log('Tambah Eksemplar', 'eksemplar', 'create', 't_eksemplar', $newEksemplarId);
                set_message('toastr_msg', lang('Eksemplar.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/eksemplar');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Eksemplar.info.failed_saved'));
                echo view('Eksemplar\Views\add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('eksemplar/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Eksemplar\Views\add', $this->data);
        }
    }

    public function edit(int $id = null)
    {
        if (!is_allowed('eksemplar/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Eksemplar';
        $eksemplar = $this->eksemplarModel->find($id);
        $this->data['eksemplar'] = $eksemplar;

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

                $eksemplarUpdate = $this->eksemplarModel->update($id, $update_data);

                if ($eksemplarUpdate) {
                    add_log('Ubah Eksemplar', 'eksemplar', 'edit', 't_eksemplar', $id);
                    set_message('toastr_msg', 'Eksemplar berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/eksemplar');
                } else {
                    set_message('toastr_msg', 'Eksemplar gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'Eksemplar gagal diubah');
                    return redirect()->to('/eksemplar/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('eksemplar/edit/' . $id);
        echo view('Eksemplar\Views\update', $this->data);
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('eksemplar/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/eksemplar');
        }
        $eksemplarDelete = $this->eksemplarModel->delete($id);
        if ($eksemplarDelete) {
            add_log('Hapus Eksemplar', 'eksemplar', 'delete', 't_eksemplar', $id);
            set_message('toastr_msg', lang('Eksemplar.info.successfully_deleted'));
            set_message('toastr_type', 'success');
            return redirect()->to('/eksemplar');
        } else {
            set_message('toastr_msg', lang('Eksemplar.info.failed_deleted'));
            set_message('toastr_type', 'warning');
            set_message('message', lang('Eksemplar.info.failed_deleted'));
            return redirect()->to('/eksemplar/delete/' . $id);
        }
    }

    public function apply_status($id)
    {
        $field = $this->request->getVar('field');
        $value = $this->request->getVar('value');

        $eksemplarUpdate = $this->eksemplarModel->update($id, array($field => $value));

        if ($eksemplarUpdate) {
            set_message('toastr_msg', ' Eksemplar berhasil diubah');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', ' Eksemplar gagal diubah');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/eksemplar');
    }


}
