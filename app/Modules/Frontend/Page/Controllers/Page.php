<?php

namespace App\Modules\Frontend\Page\Controllers;

class Page extends \hamkamannan\adminigniter\Controllers\BaseController
{
	protected $auth;
    protected $authorize;
    protected $beritaModel;
    protected $uploadPath;
	// protected $beritaModel;
    protected $modulePath;
	function __construct()
    {
		$this->language = \Config\Services::language();
		$this->language->setLocale('id');
		$this->beritaModel = new \Berita\Models\BeritaModel();
		$this->beritaModel = new \berita\Models\beritaModel($this->request);
        
        // $this->beritaModel = new \App\Modules\Backend\Berita\Models\BeritaModel();
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/berita/';
		helper('adminigniter','array');
	}
	public function index()
	{
		$this->detail();
	}

	
	
	
	
	public function sejarah_singkat()
	{
		$this->data['page'] = 'Page\Views\section\about\sejarahsingkat';
		$this->data['title'] = 'Sejarah Singkat | Sejarah_singkat ';
		echo view('Page\Views\index', $this->data);
	}

	

	public function tugas_pokok()
	{
		$this->data['page'] = 'Page\Views\section\about\tugaspokok';
		$this->data['title'] = 'Tugas Pokok | tugas_pokok ';
		echo view('Page\Views\index', $this->data);
	}

	public function visi_misi()
	{
		$this->data['page'] = 'Page\Views\section\about\visimisi';
		$this->data['title'] = 'Visi Misi | visi_misi ';
		echo view('Page\Views\index', $this->data);
	}

	public function struktur_organisasi()
	{
		$this->data['page'] = 'Page\Views\section\about\strukturorganisasi';
		$this->data['title'] = 'Visi Misi | visi_misi ';
		echo view('Page\Views\index', $this->data);
	}

	public function sisinfrastik()
	{
		$this->data['page'] = 'Page\Views\section\SDM\sisinfrastik';
		$this->data['title'] = 'Visi Misi | visi_misi ';
		echo view('Page\Views\index', $this->data);
	}
	public function detail()
	{
		$this->data['page'] = APPPATH.'Modules/Frontend/Page/Views/detail';
		$this->data['slug'] =  $this->request->getVar('slug');
		$this->data['category'] =  ucfirst($this->request->uri->getSegment(1));
		$this->data['title'] = 'Detail';
		echo view(APPPATH.'Modules/Frontend/Page/Views/index', $this->data);
	}

	public function beritas()
	{
		$keyword = $this->request->getVar('keyword');

		$beritaModel = new \Berita\Models\BeritaModel();
		$query = $beritaModel
		// ->where('active',1)
		->select('t_berita.*')
		->select('created.username as created_name')
		->select('updated.username as updated_name')
		->join('users created','created.id = t_berita.created_by','left')
		->join('users updated','updated.id = t_berita.updated_by','left');
		$this->data['count_beritas'] = $query->countAllResults(false);

		if(!empty($keyword)){
			$query->groupStart();
			$query->like('t_berita.title', $keyword);
			$query->orLike('t_berita.content', $keyword);
		
			$query->groupEnd();
			$this->data['count_beritas'] = $query->countAllResults(false);
		} 

		$beritas = $query
			->select('t_berita.*')
			->orderBy('created_at', 'desc')
			->paginate(6, 'beritas');
		$pager = $query->pager;

		$this->data['beritas'] = $beritas;
		$this->data['pager'] = $pager;
		$this->data['action'] = base_url('berita');
		$this->data['keyword'] = $keyword;

		$this->data['page'] = 'Page\Views\section\berita\index';
		$this->data['title'] = 'Berita';
		echo view('Page\Views\index', $this->data);
	}

	public function beritaDetail($idberita, $slug)
	{
		$this->data['title']  = "Pusdatin | Berita Detail";
		// $data ['page']   = "publikasi";
		// $data ['profilKampus']   = $this->M_profil->findAll();
		// $data ['fakultasKampus']   = $this->M_fakultas->findAll();
		$beritas = $this->beritaModel
        ->select('t_berita.*')
        ->where('active','1')
		->limit(6)
        ->find_all('created_at', 'desc');
		$this->data['beritas'] = $beritas;

		$query = $this->beritaModel
		->select('t_berita.*')
		->select('created.username as created_name')
		->select('updated.username as updated_name')
		->join('users created','created.id = t_berita.created_by','left')
		->join('users updated','updated.id = t_berita.updated_by','left');
		
		
		//Cek detail berita berdasarkan ID berita
		$cekDetailBerita = 	$query->find($idberita);
		
		// //Jika Berita ada
		if ($cekDetailBerita) {

			//Detail berita
		$beritaDetail = $cekDetailBerita;
		
		$this->data['beritaDetail'] = $beritaDetail;
		$this->data['query'] = $query;
		$this->data['page'] = 'Page\Views\section\berita\detail';
		return view('Page\Views\index', $this->data);
		
		}
		// Berita tidak ada
		else {
			return view('v_home/error', $data);
		}
	
		
	}



}
