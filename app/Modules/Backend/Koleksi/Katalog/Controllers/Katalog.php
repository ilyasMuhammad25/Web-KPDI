<?php

namespace Katalog\Controllers;

use \CodeIgniter\Files\File;

class Katalog extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $katalogModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->language = \Config\Services::language();
		$this->language->setLocale('id');
        
        $this->katalogModel = new \Katalog\Models\KatalogModel();
        $this->katalogRuasModel = new \Katalog\Models\KatalogRuasModel();
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/katalog/';
        
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
		helper('katalog');
    }
    public function index()
    {
        if (!is_allowed('katalog/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

		$query = $this->katalogModel
			->select('t_catalog.*');

		$slug = $this->request->getVar('slug');
		if(!empty($slug)){
			$is_rda = strtoupper($slug) == 'RDA';
			$query->where('t_catalog.is_rda',$is_rda);
		}   

		$view = $this->request->getVar('view');
		if(!empty($view)){
			$query->where('t_catalog.'.$view,1);
		}   

		$katalogs = $query
			->find_all('t_catalog.created_at','desc');

        $this->data['title'] = 'Katalog';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['katalogs'] = $katalogs;

		if($view ){
			echo view('Katalog\Views\list_view', $this->data);
		} else {
			echo view('Katalog\Views\list', $this->data);
		}
    }

    public function create()
    {
        if (!is_allowed('katalog/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

		$slug = $this->request->getVar('slug');

        $this->data['title'] = 'Tambah Katalog';

		$this->validation->setRule('title', 'Judul', 'trim');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			$post           		= $this->request->getPost();
			$worksheet_id      		= $post['worksheet'];
			$control_no  			= get_control_number();
			$bibid          		= get_bib_id();
			$title          		= get_imploded_array($post['title'], ';');
			$author         		= get_imploded_array(array_merge([$post['author']['100']], $post['author_additional']['input']), ';');
			$publish_location       = $post['publisher']['a'];
			$publisher           	= $post['publisher']['b'];
			$publish_year         	= $post['publisher']['c'];
			$publication    		= "$publish_location $publisher $publish_year;";
			$subject        		= get_imploded_array($post['subject']['desc'], ';');
			$isbn           		= get_imploded_array($post['isbn'], ';');
			$call_no     			= get_imploded_array($post['call_no'], ';');
			$edition 				= '';
			$description_physical 	= get_imploded_array($post['description_physical'], ';');
			$languages       		= $post['languages'];
			$class_ddc        		= $post['class_ddc'];
			$notes          		= get_imploded_array($post['notes']['input'], ';');
			$is_opac      			= $post['is_opac'];
			$save_data = [
				'worksheet_id'          => $worksheet_id,
				'control_no'         	=> $control_no,
				'bibid'                 => $bibid,
				'title'                 => $title,
				'author'                => $author,
				'publish_location'    	=> $publish_location,
				'publisher'             => $publisher,
				'publish_year'        	=> $publish_year,
				'publication'           => $publication,
				'subject'               => $subject,
				'isbn'                  => $isbn,
				'call_no'            	=> $call_no,
				'edition'            	=> $edition,
				'description_physical'  => $description_physical,
				'languages'             => $languages,
				'class_ddc'             => $class_ddc,
				'notes'             	=> $notes,
				'is_opac'             	=> $is_opac,
				'is_rda'             	=> ($slug == 'rda') ? 1 : 0,
				'created_by'            => user_id(),
			];

			$newKatalogId = $this->katalogModel->insert($save_data);
			if ($newKatalogId) {
				$post['control_no'] = $control_no;
				$post['bibid'] = $bibid;
				$post['005'] = '$a ' . date('YmdHis');

				$save_data_ruas = [];
				$tag008 = [
					'tag'           => '008',
					'indicator1'    => null,
					'indicator2'    => null,
					'catalog_id' 	=> $newKatalogId,
					'value'        	=> '$a ' . str_pad(date('ymd'), 22, '#') . str_pad($post['target_group'], 11, '#') . str_pad($post['paper_form'], 2, '#') . str_pad($post['languages'], 5, '#')
				];
				array_push($save_data_ruas, $tag008);

				foreach ($post as $key => $value) :
					$column = get_ruas($key,$value, $newKatalogId);
					if(!empty($column)){
						array_push($save_data_ruas, $column);
					}
				endforeach;

				if(!empty($save_data_ruas)){
					$this->katalogRuasModel->insertBatch($save_data_ruas);
				}

				add_log('Tambah Katalog', 'Katalog', 'create', 't_catalog', $newKatalogId);
				set_message('toastr_msg', lang('Katalog.info.successfully_saved'));
				set_message('toastr_type', 'success');

				if(!empty($slug)){
					return redirect()->to('/katalog?slug='.$slug);
				} else {
					return redirect()->to('/katalog');
				}
			} 
        } else {
            $this->data['redirect'] = base_url('katalog/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Katalog\Views\add', $this->data);
        }
    }

	public function create_marc()
    {
        if (!is_allowed('katalog/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

		$slug = $this->request->getVar('slug');

        $this->data['title'] = 'Tambah Katalog';

		$this->validation->setRule('title', 'Judul', 'trim');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			$post           		= $this->request->getPost();
			$worksheet_id      		= $post['worksheet'];
			$control_no  			= get_control_number();
			$bibid          		= get_bib_id();
			$title          		= get_imploded_array($post['title'], ';');
			$author         		= get_imploded_array(array_merge([$post['author']['100']], $post['author_additional']['input']), ';');
			$publish_location       = $post['publisher']['a'];
			$publisher           	= $post['publisher']['b'];
			$publish_year         	= $post['publisher']['c'];
			$publication    		= "$publish_location $publisher $publish_year;";
			$subject        		= get_imploded_array($post['subject']['desc'], ';');
			$isbn           		= get_imploded_array($post['isbn'], ';');
			$call_no     			= get_imploded_array($post['call_no'], ';');
			$edition 				= '';
			$description_physical 	= get_imploded_array($post['description_physical'], ';');
			$languages       		= $post['languages'];
			$class_ddc        		= $post['class_ddc'];
			$notes          		= get_imploded_array($post['notes']['input'], ';');
			$is_opac      			= $post['is_opac'];
			$save_data = [
				'worksheet_id'          => $worksheet_id,
				'control_no'         	=> $control_no,
				'bibid'                 => $bibid,
				'title'                 => $title,
				'author'                => $author,
				'publish_location'    	=> $publish_location,
				'publisher'             => $publisher,
				'publish_year'        	=> $publish_year,
				'publication'           => $publication,
				'subject'               => $subject,
				'isbn'                  => $isbn,
				'call_no'            	=> $call_no,
				'edition'            	=> $edition,
				'description_physical'  => $description_physical,
				'languages'             => $languages,
				'class_ddc'             => $class_ddc,
				'notes'             	=> $notes,
				'is_opac'             	=> $is_opac,
				'is_rda'             	=> ($slug == 'rda') ? 1 : 0,
				'created_by'            => user_id(),
			];

			$newKatalogId = $this->katalogModel->insert($save_data);
			if ($newKatalogId) {
				$post['control_no'] = $control_no;
				$post['bibid'] = $bibid;
				$post['005'] = '$a ' . date('YmdHis');

				$save_data_ruas = [];
				$tag008 = [
					'tag'           => '008',
					'indicator1'    => null,
					'indicator2'    => null,
					'catalog_id' 	=> $newKatalogId,
					'value'        	=> '$a ' . str_pad(date('ymd'), 22, '#') . str_pad($post['target_group'], 11, '#') . str_pad($post['paper_form'], 2, '#') . str_pad($post['languages'], 5, '#')
				];
				array_push($save_data_ruas, $tag008);

				foreach ($post as $key => $value) :
					$column = get_ruas($key,$value, $newKatalogId);
					if(!empty($column)){
						array_push($save_data_ruas, $column);
					}
				endforeach;

				if(!empty($save_data_ruas)){
					$this->katalogRuasModel->insertBatch($save_data_ruas);
				}

				add_log('Tambah Katalog', 'Katalog', 'create', 't_catalog', $newKatalogId);
				set_message('toastr_msg', lang('Katalog.info.successfully_saved'));
				set_message('toastr_type', 'success');

				if(!empty($slug)){
					return redirect()->to('/katalog?slug='.$slug);
				} else {
					return redirect()->to('/katalog');
				}
			} 
        } else {
            $this->data['redirect'] = base_url('katalog/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Katalog\Views\add_marc', $this->data);
        }
    }

    public function edit(int $id = null)
    {
        if (!is_allowed('katalog/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $catalog = $this->katalogModel->find($id);
        $this->data['catalog'] = $catalog;
		$slug = ($catalog->is_rda)?'rda':'aacr';

        $this->data['title'] = 'Ubah Katalog';

		$this->validation->setRule('title', 'Judul', 'trim');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			$post           		= $this->request->getPost();
			$worksheet_id      		= $post['worksheet'];
			$control_no  			= get_control_number();
			$bibid          		= get_bib_id();
			$title          		= get_imploded_array($post['title'], ';');
			$author         		= get_imploded_array(array_merge([$post['author']['100']], $post['author_additional']['input']), ';');
			$publish_location       = $post['publisher']['a'];
			$publisher           	= $post['publisher']['b'];
			$publish_year         	= $post['publisher']['c'];
			$publication    		= "$publish_location $publisher $publish_year;";
			$subject        		= get_imploded_array($post['subject']['desc'], ';');
			$isbn           		= get_imploded_array($post['isbn'], ';');
			$call_no     			= get_imploded_array($post['call_no'], ';');
			$edition 				= '';
			$description_physical 	= get_imploded_array($post['description_physical'], ';');
			$languages       		= $post['languages'];
			$class_ddc        		= $post['class_ddc'];
			$notes          		= get_imploded_array($post['notes']['input'], ';');
			$is_opac      			= $post['is_opac'];
			$update_data = [
				'worksheet_id'          => $worksheet_id,
				'control_no'         	=> $control_no,
				'bibid'                 => $bibid,
				'title'                 => $title,
				'author'                => $author,
				'publish_location'    	=> $publish_location,
				'publisher'             => $publisher,
				'publish_year'        	=> $publish_year,
				'publication'           => $publication,
				'subject'               => $subject,
				'isbn'                  => $isbn,
				'call_no'            	=> $call_no,
				'edition'            	=> $edition,
				'description_physical'  => $description_physical,
				'languages'             => $languages,
				'class_ddc'             => $class_ddc,
				'notes'             	=> $notes,
				'is_opac'             	=> $is_opac,
				'updated_by'            => user_id(),
			];

			$updateKatalog = $this->katalogModel->update($id, $update_data);
			if ($updateKatalog) {
				$post['control_no'] = $control_no;
				$post['bibid'] = $bibid;
				$post['005'] = '$a ' . date('YmdHis');

				$update_data_ruas = [];
				$tag008 = [
					'tag'           => '008',
					'indicator1'    => null,
					'indicator2'    => null,
					'catalog_id' 	=> $id,
					'value'        	=> '$a ' . str_pad(date('ymd'), 22, '#') . str_pad($post['target_group'], 11, '#') . str_pad($post['paper_form'], 2, '#') . str_pad($post['languages'], 5, '#')
				];
				array_push($update_data_ruas, $tag008);

				foreach ($post as $key => $value) :
					$column = get_ruas($key,$value, $id);
					if(!empty($column)){
						array_push($update_data_ruas, $column);
					}
				endforeach;

				if(!empty($update_data_ruas)){
					$this->katalogRuasModel->updateBatch($update_data_ruas,'tag');
				}

				add_log('Ubah Katalog', 'Katalog', 'edit', 't_catalog', $id);
				set_message('toastr_msg', lang('Katalog.info.successfully_saved'));
				set_message('toastr_type', 'success');

				return redirect()->to('/katalog?slug='.$slug);
			} 
        } 

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('katalog/edit/' . $id);
        echo view('Katalog\Views\update', $this->data);
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('katalog/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/katalog');
        }
        $KatalogDelete = $this->katalogModel->delete($id);
        if ($KatalogDelete) {
            add_log('Hapus Katalog', 'Katalog', 'delete', 't_catalog', $id);
            set_message('toastr_msg', lang('Katalog.info.successfully_deleted'));
            set_message('toastr_type', 'success');
            return redirect()->to('/katalog');
        } else {
            set_message('toastr_msg', lang('Katalog.info.failed_deleted'));
            set_message('toastr_type', 'warning');
            set_message('message', lang('Katalog.info.failed_deleted'));
            return redirect()->to('/katalog/delete/' . $id);
        }
    }

    public function apply_status($id)
    {
        $field = $this->request->getVar('field');
        $value = $this->request->getVar('value');

        $KatalogUpdate = $this->katalogModel->update($id, array($field => $value));

        if ($KatalogUpdate) {
            set_message('toastr_msg', ' Katalog berhasil diubah');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', ' Katalog gagal diubah');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/katalog');
    }

	public function ajax_create()
    {
        if ($this->request->isAJAX()) :
            $post           		= $this->request->getPost();
            $worksheet      		= $post['worksheet'];
            $controlNumber  		= get_control_number();
            $bibid          		= get_bib_id();
            $title          		= get_imploded_array($post['title'], ';');
            $author         		= get_imploded_array(array_merge([$post['author']['100']], $post['author_additional']['input']), ';');
            $place          		= $post['publisher']['a'];
            $name           		= $post['publisher']['b'];
            $year           		= $post['publisher']['c'];
            $publication    		= "$place $name $year;";
            $subject        		= get_imploded_array($post['subject']['desc'], ';');
            $isbn           		= get_imploded_array($post['isbn'], ';');
            $dewey_no        		= $post['class-ddc'];
            $callNumber     		= get_imploded_array($post['callnumber'], ';');
            $description_physical 	= get_imploded_array($post['description_physical'], ';');
            $languages       		= $post['languages'];
            $description          	= get_imploded_array($post['description']['input'], ';');

            $save_data = [
				'control_no'         	=> $controlNumber,
				'bibid'                 => $bibid,
				'title'                 => $title,
				'author'                => $author,
				'publisher_location'    => $place,
				'publisher'             => $name,
				'publisher_year'        => $year,
				'publication'           => $publication,
				'subject'               => $subject,
				'isbn'                  => $isbn,
				'call_no'            	=> $callNumber,
				'description'           => $description,
				'languages'             => $languages,
				'dewey_no'              => $dewey_no,
				'description_physical'  => $description_physical,
				'worksheet_id'          => $worksheet,
				'created_by'            => user_id(),
            ];

			// jd($save_data);
            $newKatalogId = $this->katalogModel->insert($save_data);
            if ($newKatalogId) {
                $post['control_no'] = $controlNumber;
                $post['bibid'] = $bibid;
                $post['005'] = '$a ' . date('YmdHis');

				$save_data_ruas = [];
				$tag008 = [
					'tag'           => '008',
					'indicator1'    => null,
					'indicator2'    => null,
					'catalog_id' 	=> $newKatalogId,
					'value'        	=> '$a ' . str_pad(date('ymd'), 22, '#') . str_pad($post['target_group'], 11, '#') . str_pad($post['paper_form'], 2, '#') . str_pad($post['languages'], 5, '#')
				];
				array_push($save_data_ruas, $tag008);

				foreach ($post as $key => $value) :
					$column = getRuas($key,$value, $newKatalogId);
					if(!empty($column)){
						array_push($save_data_ruas, $column);
					}
				endforeach;

				// jd($save_data_ruas);
				if(!empty($save_data_ruas)){
					$this->katalogRuasModel->insertBatch($save_data_ruas);
				}

				return json_encode($save_data_ruas);

                // add_log('Tambah Katalog', 'Katalog', 'create', 't_catalog', $newKatalogId);
                // set_message('toastr_msg', lang('Katalog.info.successfully_saved'));
                // set_message('toastr_type', 'success');
                // return redirect()->to('/katalog');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Katalog.info.failed_saved'));
                echo view('Katalog\Views\add', $this->data);
            }
        endif;
    }
}
