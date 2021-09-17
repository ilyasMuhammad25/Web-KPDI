<?php

namespace Anggota\Controllers;

use \CodeIgniter\Files\File;
use PHPExcel;
use PHPExcel_IOFactory;

class Anggota extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $anggotaModel;
    protected $uploadPath;
    protected $modulePath;
    protected $baseModel;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->anggotaModel = new \Anggota\Models\AnggotaModel();
        // $this->anggotaModel = new \Anggota\Models\AnggotaModel();
        

        // $this->anggotaModel1 = new \Anggota\Models\AnggotaModel->MemberNo();
        
        $this->baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
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
        helper('adminigniter');
		helper('anggota');
		helper('tgl_indo');
    }

    public function index()
    {
        if (!is_allowed('anggota/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

		$slug = $this->request->getVar('slug');

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
       
		if(!empty($slug)){			
			echo view("Anggota\Views\slug\\$slug", $this->data);
		} else {
			echo view('Anggota\Views\list', $this->data);
		}
    }

  
    public function create()
    {
        if (!is_allowed('anggota/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }
    
    $this->data['ref_identitas'] = get_references('ref_identitas');
    $this->data['ref_perkawinan'] = get_references('ref_perkawinan');
    $this->data['ref_jeniskelamin'] = get_references('ref_jeniskelamin');
    $this->data['ref_pendidikan'] = get_references('ref_pendidikan');
    $this->data['ref_pekerjaan'] = get_references('ref_perkerjaan');
    $this->data['ref_jenisanggota'] = get_references('ref_jenisanggota');
    $this->data['ref_agama'] = get_references('ref_agama');
    $this->data['ref_unitkerja'] = get_references('ref_unitkerja');
    $this->data['ref_fakultas'] = get_references('ref_fakultas');
    $this->data['ref_jurusan'] = get_references('ref_jurusan');
    $this->data['ref_Statusanggota'] = get_references('statanggota');
    
    
    // $this->data[' MemberNo'] =  get_MemberNo();
   
    // $this->data['categoriesperkawinan'] = $categoriesperkawinan;

        $this->data['title'] = 'Tambah Anggota';

		$this->validation->setRule('name', 'Nama', 'required');
        $this->validation->setRule('PlaceOfBirth', 'PlaceOfBirth', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
            $slug = url_title($this->request->getPost('name'), '-', TRUE);
           
            // $tanggal_lahir 	= $this->request->getPost('DateOfBirth');
          
            $save_data = [
				'name' => $this->request->getPost('name'),
                'slug' => $slug,
                'MemberNo'=> get_MemberNo(),
                // 'MemberNo'=> $this->anggotaModel->MemberNo(),
                'IdentityNo'=> $this->request->getPost('IdentityNo'),
                'PlaceOfBirth'=> $this->request->getPost('PlaceOfBirth'),
                'DateOfBirth'=>  $this->request->getPost('DateOfBirth'),
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
                'ref_identitas' => $this->request->getPost('ref_identitas'),
                'ref_perkawinan' => $this->request->getPost('ref_perkawinan'),
                'ref_jeniskelamin' 	=> $this->request->getPost('ref_jeniskeamin'),
                'ref_pendidikan' 	=> $this->request->getPost('ref_pekerjaan'),
                'ref_pekerjaan' 	=> $this->request->getPost('ref_pekerjaan'),
                'ref_jenisanggota' 	=> $this->request->getPost('ref_jenisanggota'),
                'ref_agama' 	=> $this->request->getPost('ref_agama'),
                'ref_unitkerja' 	=> $this->request->getPost('ref_unitkerja'),
                'ref_fakultas' 	=> $this->request->getPost('ref_fakultas'),
                'ref_jurusan' 	=> $this->request->getPost('ref_jurusan'),
                'ref_Statusanggota'=>$this->request->getPost('ref_Statusanggota'),
				'sort' => $this->request->getPost('sort'),
				'description' => $this->request->getPost('description'),
				'RegisterDate' => $this->request->getPost('RegisterDate'),
                'created_by' => user_id(),
            ];

             // Logic Upload
             $files = (array) $this->request->getPost('file_image');
             if (count($files)) {
                 $listed_file = array();
                 foreach ($files as $uuid => $name) {
                     if (file_exists($this->uploadPath . $name)) {
                         $file = new File($this->uploadPath . $name);
                         $newFileName = $file->getRandomName();
                         $file->move($this->modulePath, $newFileName);
                         $listed_file[] = $newFileName;
                     }
                 }
                 $save_data['file_image'] = implode(',', $listed_file);
             }
            $newAnggotaId = $this->anggotaModel->protect(false)->insert($save_data);
            // $newAnggotaId = $this->anggotaModel->insert($save_data);

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

		$anggota = $this->anggotaModel->find($id);

        $this->data['title'] = 'Ubah Anggota';

        $this->data['anggota'] = $anggota;
		$this->data['ref_identitas'] = get_references('ref_identitas');
		$this->data['ref_perkawinan'] = get_references('ref_perkawinan');
		$this->data['ref_jeniskelamin'] = get_references('ref_jeniskelamin');
		$this->data['ref_pendidikan'] = get_references('ref_pendidikan');
		$this->data['ref_pekerjaan'] = get_references('ref_perkerjaan');
		$this->data['ref_jenisanggota'] = get_references('ref_jenisanggota');
		$this->data['ref_agama'] = get_references('ref_agama');
		$this->data['ref_unitkerja'] = get_references('ref_unitkerja');
		$this->data['ref_fakultas'] = get_references('ref_fakultas');
		$this->data['ref_jurusan'] = get_references('ref_jurusan');
		$this->data['ref_Statusanggota'] = get_references('statanggota');

		$this->validation->setRule('name', 'Nama', 'required');
		$this->validation->setRule('PlaceOfBirth', 'PlaceOfBirth', 'required');
        if ($this->request->getPost()) {
            if ($this->validation->withRequest($this->request)->run()) {
                $slug = url_title($this->request->getPost('name'), '-', TRUE);
                $update_data = [
                    'name' => $this->request->getPost('name'),
                    'slug' => $slug,
                    'IdentityNo'=> $this->request->getPost('IdentityNo'),
                    'PlaceOfBirth'=> $this->request->getPost('PlaceOfBirth'),
                    'DateOfBirth'=> $this->request->getPost('DateOfBirth'),
                    'RegisterDate'=>$this->request->getPost('RegisterDate'),
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
                    'ref_identitas' => $this->request->getPost('ref_identitas'),
                    'ref_perkawinan' => $this->request->getPost('ref_perkawinan'),
                    'ref_jeniskelamin' 	=> $this->request->getPost('ref_jeniskelamin'),
                    'ref_pendidikan' 	=> $this->request->getPost('ref_pekerjaan'),
                    'ref_pekerjaan' 	=> $this->request->getPost('ref_pekerjaan'),
                    'ref_jenisanggota' 	=> $this->request->getPost('ref_jenisanggota'),
                    'ref_agama' 	=> $this->request->getPost('ref_agama'),
                    'ref_unitkerja' 	=> $this->request->getPost('ref_unitkerja'),
                    'ref_fakultas' 	=> $this->request->getPost('ref_fakultas'),
                    'ref_jurusan' 	=> $this->request->getPost('ref_jurusan'),
                    'ref_Statusanggota'=>$this->request->getPost('ref_Statusanggota'),
                    'sort' => $this->request->getPost('sort'),
                    'description' => $this->request->getPost('description'),
                    'RegisterDate' => $this->request->getPost('RegisterDate'),
                    'updated_by' => user_id(),
                ];
                  // Logic Upload
                $files = (array) $this->request->getPost('file_image');
                if (count($files)) {
                    $listed_file = array();
                    foreach ($files as $uuid => $name) {
                        if (file_exists($this->modulePath . $name)) {
                            $listed_file[] = $name;
                        } else {
                            if (file_exists($this->uploadPath . $name)) {
                                $file = new File($this->uploadPath . $name);
                                $newFileName = $file->getRandomName();
                                $file->move($this->modulePath, $newFileName);
                                $listed_file[] = $newFileName;
                            }
                        }
                    }
                    $update_data['file_image'] = implode(',', $listed_file);
                }
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

    public function detail(int $id=null){
        if (!is_allowed('anggota/detail')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
                return redirect()->to('/dashboard');
        }
        $anggota = $this->anggotaModel->find($id);

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('anggota/detail/' . $id);
        $this->data['anggota']=$anggota;
        echo view('Anggota\Views\detail', $this->data);
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
// Daftar data Pelanggaran
    public function D_pelanggaran()
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
        // $Nomember=$this->anggotaModel->MemberNo();
        $this->data['title'] = 'Data-Pelanggaran';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['anggotas'] = $anggotas;
       
        // $this->data['MemberNo'] = $this->AnggotaModel->MemberNo();
        // $this->data['MemberNo']
        echo view('Anggota\Views\Data-pelanggaran',$this->data);
    }
// Daftar data Peminjaman
public function D_peminjaman()
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
    // $Nomember=$this->anggotaModel->MemberNo();
    $this->data['title'] = 'Data-Pelanggaran';
    $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
    $this->data['anggotas'] = $anggotas;
   
    // $this->data['MemberNo'] = $this->AnggotaModel->MemberNo();
    // $this->data['MemberNo']
    echo view('Anggota\Views\Data-Peminjaman',$this->data);
}

// Daftar data Perpanjangan
public function D_perpanjangan()
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
    // $Nomember=$this->anggotaModel->MemberNo();
    $this->data['title'] = 'Data-Pelanggaran';
    $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
    $this->data['anggotas'] = $anggotas;
   
    // $this->data['MemberNo'] = $this->AnggotaModel->MemberNo();
    // $this->data['MemberNo']
    echo view('Anggota\Views\Data-Perpanjangan',$this->data);
}


// Daftar data sumbangan
public function D_sumbangan(int $id = null)
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
    $anggota = $this->anggotaModel->find($id);

    $this->data['title'] = 'Data-Pelanggaran';
    $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
    $this->data['anggotas'] = $anggotas;
    $this->data['anggota'] = $anggota;
   
    echo view('Anggota\Views\Data-Sumbangan',$this->data);
}

// Import Data dari EXCEL

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
        $files =  $this->request->getPost('file_template');
        if (count($files)) {
            $listed_file = array();
            foreach ($files as $uuid => $name) {
                if (file_exists($this->uploadPath . $name)) {
                    $file = new File($this->uploadPath . $name);
                    
                    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file);
                    // dd($spreadsheet);

                    $spreadsheet_arr = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
                    // dd($spreadsheet_arr);
                    $inserts = array();
                    foreach($spreadsheet_arr as $row){
                        $inserts[] = array(
                            'MemberNo'=>$row['A'],
                            'name' => $row['B'],
                            'PlaceOfBirth'=>$row['C'],
                            'DateOfBirth'=>$row['D'],
                            'Address'=>$row['E'],
                        );
                    }
                    // dd($inserts);
                    $anggotaSaved = $this->anggotaModel->insertBatch($inserts);
					if ($anggotaSaved) {
						add_log('Import Anggota', 'anggota', 'import', 't_anggota');
						set_message('toastr_msg', 'Import Anggota berhasil');
						set_message('toastr_type', 'success');
						return redirect()->to('/anggota');
					} else {
						set_message('toastr_msg', 'Import Anggota gagal');
						set_message('toastr_type', 'warning');
						set_message('message', 'Import Anggota gagal');
						return redirect()->to('/anggota/import');
					}

                }
            }
        }

    } else {
        $this->data['redirect'] = base_url('anggota/import');
        set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
        echo view('Anggota\Views\import',$this->data);
    }
}

public function cetakKartu(){
    if (!is_allowed('anggota/cetakKartu')) {
        set_message('toastr_msg', lang('App.permission.not.have'));
        set_message('toastr_type', 'error');
        return redirect()->to('/dashboard');
    }

	$this->data['title'] = 'Import Anggota';
	$this->data['kartu'] = array();

	// 1. composer require mpdf/mpdf

	// $qrCode = new \Mpdf\QrCode\QrCode('Perpusnas RI');
	// $output = new \Mpdf\QrCode\Output\Html();
	// $html_qr = $output->output($qrCode, 100, [255, 255, 255], [10, 10, 10]);

	// 2. composer require mpdf/qrcode

	// 3. composer require picqer/php-barcode-generator

	// $barcode = new \Picqer\Barcode\BarcodeGeneratorHTML();
	// $html_bar = $barcode->getBarcode('081231723897', $barcode::TYPE_CODE_39);
	// echo $html_bar;


    //  $this->data['title'] = 'Import Anggota';
    //  $kartu = $this->anggotaModel->findAll();
    //  $this->data['kartu'] = $kartu;
    

     // instantiate and use the dompdf class
     $dompdf = new \Dompdf\Dompdf();
     $html= view('Anggota\Views\cetak-kartu',$this->data);
     $dompdf->loadHtml($html);
     
     // (Optional) Setup the paper size and orientation
     $dompdf->setPaper('A4', 'landscape');
     
     // Render the HTML as PDF
     $dompdf->render();
     
     // Output the generated PDF to Browser
     $dompdf->stream();
}
}


