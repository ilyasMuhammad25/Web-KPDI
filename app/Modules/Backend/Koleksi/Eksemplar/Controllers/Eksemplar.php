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
		helper('katalog');
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
            ->select('t_eksemplar.*')
			->select('t_catalog.title,t_catalog.publication, t_catalog.worksheet_id')
			->join('t_catalog','t_catalog.id = t_eksemplar.catalog_id','inner');
            
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
        
		$this->validation->setRule('catalog_id', 'Judul Utama', 'required');
		$this->validation->setRule('generate_no', 'Jumlah Eksemplar', 'required');
		$this->validation->setRule('call_no', 'Nomor Panggil', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
            $save_data = array();

			$barcode_no_arr = $this->request->getPost('barcode_no');
			$register_no_arr = $this->request->getPost('register_no');
			$rfid_arr = $this->request->getPost('rfid');
			$call_no_arr = $this->request->getPost('call_no');

			foreach ($barcode_no_arr as $index => $barcode_no) {
				$save_data[] = [
					'catalog_id' 			=> $this->request->getPost('catalog_id'),
					'serial_edition' 		=> $this->request->getPost('serial_edition'),
					'serial_edition_date' 	=> $this->request->getPost('serial_edition_date'),
					'bahan_sertaan' 		=> $this->request->getPost('bahan_sertaan'),
					'other_info' 			=> $this->request->getPost('other_info'),
					'barcode_no' 			=> $barcode_no,
					'register_no' 			=> $register_no_arr[$index],
					'rfid' 					=> $rfid_arr[$index],
					'call_no' 				=> $call_no_arr[$index],
					'source_type_id' 		=> $this->request->getPost('source_type_id'),
					'source_name_id' 		=> $this->request->getPost('source_name_id'),
					'media_type_id' 		=> $this->request->getPost('media_type_id'),
					'access_id' 			=> $this->request->getPost('access_id'),
					'location_library_id' 	=> $this->request->getPost('location_library_id'),
					'location_room_id' 		=> $this->request->getPost('location_room_id'),
					'currency' 				=> $this->request->getPost('currency'),
					'price' 				=> $this->request->getPost('price'),
					'price_type' 			=> $this->request->getPost('price_type'),
					'availability_id' 		=> $this->request->getPost('availability_id'),
					'procurement_date' 		=> $this->request->getPost('procurement_date'),
					'is_opac' 				=> $this->request->getPost('is_opac'),
					'description' 			=> $this->request->getPost('description'),
					'created_by' 			=> user_id(),
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

        $eksemplar = $this->eksemplarModel->find($id);
        $catalog = $this->katalogModel->find($eksemplar->catalog_id);

        $this->data['title'] = 'Ubah Eksemplar';
        $this->data['eksemplar'] = $eksemplar;
        $this->data['catalog'] = $catalog;

		$this->validation->setRule('catalog_id', 'Judul Utama', 'trim');
		$this->validation->setRule('barcode_no', 'Barcode', 'trim');
		$this->validation->setRule('register_no', 'Nomor induk', 'trim');
		$this->validation->setRule('rfid', 'RFID', 'trim');
		$this->validation->setRule('call_no', 'Nomor Panggil', 'trim');
        if ($this->request->getPost()) {
            if ($this->validation->withRequest($this->request)->run()) {
				$update_data = [
					'catalog_id' 			=> $this->request->getPost('catalog_id'),
					'serial_edition' 		=> $this->request->getPost('serial_edition'),
					'serial_edition_date' 	=> $this->request->getPost('serial_edition_date'),
					'bahan_sertaan' 		=> $this->request->getPost('bahan_sertaan'),
					'other_info' 			=> $this->request->getPost('other_info'),
					'barcode_no' 			=> $this->request->getPost('barcode_no'),
					'register_no' 			=> $this->request->getPost('register_no'),
					'rfid' 					=> $this->request->getPost('rfid'),
					'call_no' 				=> $this->request->getPost('call_no'),
					'source_type_id' 		=> $this->request->getPost('source_type_id'),
					'source_name_id' 		=> $this->request->getPost('source_name_id'),
					'media_type_id' 		=> $this->request->getPost('media_type_id'),
					'access_id' 			=> $this->request->getPost('access_id'),
					'location_library_id' 	=> $this->request->getPost('location_library_id'),
					'location_room_id' 		=> $this->request->getPost('location_room_id'),
					'currency' 				=> $this->request->getPost('currency'),
					'price' 				=> $this->request->getPost('price'),
					'price_type' 			=> $this->request->getPost('price_type'),
					'availability_id' 		=> $this->request->getPost('availability_id'),
					'procurement_date' 		=> $this->request->getPost('procurement_date'),
					'is_opac' 				=> $this->request->getPost('is_opac'),
					'description' 			=> $this->request->getPost('description'),
					'updated_by' 			=> user_id(),
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
		$this->data['barcode']= get_barcode($eksemplar->barcode_no);
    
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
