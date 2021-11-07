<?php

namespace Eksemplar\Controllers;

use \CodeIgniter\Files\File;

class Eksemplar extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $eksemplarModel;
    protected $katalogModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->katalogModel = new \Katalog\Models\KatalogModel();
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
        helper('adminigniter');
        helper('reference');
        helper('thumbnail');
    }
    public function index()
    {
        if (!is_allowed('eksemplar/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

		$quarantine = $this->request->getVar('quarantine');
		$cart = $this->request->getVar('cart');

        $query = $this->eksemplarModel
            ->select('t_eksemplar.*');
            
		if(!empty($quarantine)){
			$query->where('t_eksemplar.is_quarantine', 1);
		}

		if(!empty($cart)){
			$query->where('t_eksemplar.is_cart', 1);
		}

        $eksemplars = $query
        	->find_all('t_eksemplar.created_at','desc');

        $this->data['title'] = 'Eksemplar';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['eksemplars'] = $eksemplars;
        echo view('Eksemplar\Views\list', $this->data);
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
        $this->data['ref_currency'] = get_ref('ref_currency');
        $this->data['ref_rules'] = get_ref('ref_rules');
        $this->data['ref_media'] = get_ref('media');
        $this->data['ref_partner'] = get_ref('ref_partner');
        $this->data['ref_source'] = get_ref('ref_source');
        $this->data['ref_status'] = get_ref('ref_status');
        $this->data['ref_akses'] = get_ref('ref_akses');
        $BarcodeNumber =  BarcodeNumber_helper();
		$NoInduk =NoInduk_helper();
		$RFID =RFID_helper();
        

		$this->validation->setRule('name', 'Judul Utama', 'trim');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
            // $slug = url_title($this->request->getPost('name'), '-', TRUE);
            //  $this->request->getPost = $this->request->getPost();
            $save_data = array();

			$no_barcode_arr = (array) $this->request->getPost('no_barcode');
			$no_induk_arr = $this->request->getPost('no_induk');
			$rfid_arr = $this->request->getPost('rfid');
			$no_panggil_arr = $this->request->getPost('no_panggil');

			foreach ($no_barcode_arr as $index => $no_barcode) {
				$save_data[] = [
					'NomorBarcode' => $no_barcode,
					'NoInduk' => $no_induk_arr[$index],
                    'RFID' => 	$rfid_arr,
					'ref_currency' =>  $this->request->getPost('ref_currency'),
					'Price' =>  $this->request->getPost('Price'),
					'PriceType' =>  $this->request->getPost('PriceType'),
					'TanggalPengadaan' =>  $this->request->getPost('TanggalPengadaan'),
					'CallNumber' =>  $this->request->getPost('CallNumber'),
					'catalog_id' =>  $this->request->getPost('catalog_id'),
					'ref_Branch' =>  $this->request->getPost('ref_branch'),
					'ref_partner' =>  $this->request->getPost('ref_partner'),
					'ref_rules' =>  $this->request->getPost('ref_rules'),
					'ref_akses' =>  $this->request->getPost('ref_akses'),
					'ref_media' =>  $this->request->getPost('ref_media'),
					'ref_source' =>  $this->request->getPost('ref_source'),
					'ref_status' =>  $this->request->getPost('ref_status'),
					'ISOPAC' =>  $this->request->getPost('is_opac'),
					'created_by' => user_id(),

					// 'Branch_id' => 37,
					// 'Location_id' =>  $this->request->getPost['Location_id'],
					// 'Location_Library_id' =>  $this->request->getPost['Location_Library_id'],
					// 'Keterangan_Sumber' => null,
					// 'CreateTerminal' => null,
					// 'IsVerified' => '',
					// 'IsQUARANTINE' => null,
					// 'QUARANTINEDBY' => user_id(),
					// 'QUARANTINEDDATE' => null,
					// 'QUARANTINEDTERMINAL' => null,
					// 'ISREFERENSI' => null,
					// 'EDISISERIAL' => $edisi_serial,
					// 'NoJIlid' =>  $this->request->getPost('NoJIlid'),
					// 'TANGGAL_TERBIT_EDISI_SERIAL' => $tgl_edisi_serial,
					// 'Bahan_Sertaan' =>  $this->request->getPost('Bahan_Sertaan'),
					// 'Keterangan_lain' =>  $this->request->getPost['Keterangan_lain'],

				];
			}

			if(!empty($save_data)){
				$this->eksemplarModel->insertBatch($save_data);
			}

			set_message('toastr_msg', lang('Eksemplar.info.successfully_saved'));
			set_message('toastr_type', 'success');
			return redirect()->to('/eksemplar');
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
        $this->data['ref_currency'] = get_ref('ref_currency');
        $this->data['ref_rules'] = get_ref('ref_rules');
        $this->data['ref_media'] = get_ref('media');
        $this->data['ref_partner'] = get_ref('ref_partner');
        $this->data['ref_source'] = get_ref('ref_source');
        $this->data['ref_status'] = get_ref('ref_status');
        $this->data['ref_akses'] = get_ref('ref_akses');
        // $this->data['ref_status1'] = get_ref('ref_status1');
        $BarcodeNumber =  BarcodeNumber_helper();
		$NoInduk =NoInduk_helper();
		$RFID =RFID_helper();
        $eksemplar = $this->eksemplarModel->find($id);
        $katalog = $this->katalogModel->find($eksemplar->catalog_id);

        $this->data['eksemplar'] = $eksemplar;
        $this->data['katalog'] = $katalog;

		$this->validation->setRule('name', 'Nama', 'trim');
        if ($this->request->getPost()) {
            if ($this->validation->withRequest($this->request)->run()) {
                $slug = url_title($this->request->getPost('name'), '-', TRUE);
                $update_data = [
                    'ref_currency' =>  $this->request->getPost('ref_currency'),
					'Price' =>  $this->request->getPost('Price'),
					'PriceType' =>  $this->request->getPost('PriceType'),
					'TanggalPengadaan' =>  $this->request->getPost('TanggalPengadaan'),
					'callNumber' =>  $this->request->getPost('CallNumber'),
					// 'Branch_id' => 37,
					'catalog_id' =>  $this->request->getPost('catalog_id'),
					'ref_partner' =>  $this->request->getPost('ref_partner'),
					'Location_id' =>  $this->request->getPost['Location_id'],
					'ref_rules' =>  $this->request->getPost('ref_rules'),
					// 'Category_id' =>  $this->request->getPost['Category_id'],
					'ref_media' =>  $this->request->getPost('ref_media'),
					'ref_source' =>  $this->request->getPost('ref_source'),
				
					'ref_status' =>  $this->request->getPost('ref_status'),
					'ref_status1' =>  $this->request->getPost('ref_status1'),
					'Location_Library_id' =>  $this->request->getPost['Location_Library_id'],
					'Keterangan_Sumber' => null,
					// 'CreateTerminal' => null,
					// 'IsVerified' => '',
					// 'IsQUARANTINE' => null,
					'QUARANTINEDBY' => user_id(),
					// 'QUARANTINEDDATE' => null,
					// 'QUARANTINEDTERMINAL' => null,
					// 'ISREFERENSI' => null,
					// 'EDISISERIAL' => $edisi_serial,
					// // 'NoJIlid' =>  $this->request->getPost('NoJIlid'),
					// 'TANGGAL_TERBIT_EDISI_SERIAL' => $tgl_edisi_serial,
					'Bahan_Sertaan' =>  $this->request->getPost('Bahan_Sertaan'),
					'Keterangan_lain' =>  $this->request->getPost['Keterangan_lain'],
					'ISOPAC' =>  $this->request->getPost('is_opac'),
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

    public function cetakLabel(int $id=null){
        if (!is_allowed('anggota/cetakKartu')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }
    
        $this->data['title'] = 'Import Anggota';
        $this->data['kartu'] = array();
        $eksemplar = $this->eksemplarModel->find($id);
        $this->data['eksempalar']=$eksemplar;
		$this->data['barcode']= get_barcode($eksemplar->NomorBarcode);
    
        //  $this->data['title'] = 'Import Anggota';
        //  $kartu = $this->anggotaModel->findAll();
        //  $this->data['kartu'] = $kartu;
        
    
         // instantiate and use the dompdf class
         $dompdf = new \Dompdf\Dompdf();
         $html= view('Eksemplar\Views\cetak-label',$this->data);
         $dompdf->loadHtml($html);
         
         // (Optional) Setup the paper size and orientation
         $dompdf->setPaper('A4', 'landscape');
         
         // Render the HTML as PDF
         $dompdf->render();
         
         // Output the generated PDF to Browser
         $dompdf->stream();
    }

}
