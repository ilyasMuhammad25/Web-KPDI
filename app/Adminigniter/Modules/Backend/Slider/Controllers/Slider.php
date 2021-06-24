<?php

namespace App\Adminigniter\Modules\Backend\Slider\Controllers;

use \CodeIgniter\Files\File;

class Slider extends \hamkamannan\adminigniter\Controllers\BaseController
{
    protected $auth;
    protected $authorize;
    protected $sliderModel;
    protected $uploadPath;
    protected $modulePath;
    
    function __construct()
    {
        $this->sliderModel = new \App\Adminigniter\Modules\Backend\Slider\Models\SliderModel();
        $this->uploadPath = ROOTPATH . 'public/uploads/';
        $this->modulePath = ROOTPATH . 'public/uploads/slider/';
        
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
        if (!is_allowed('slider/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $sliders = $this->sliderModel
            ->select('t_slider.*')
            ->findAll();

        $this->data['title'] = 'Slider';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['sliders'] = $sliders;
        // echo view('backend/slider/list', $this->data);
        echo view(APPPATH.'Adminigniter/Modules/Backend/Slider/Views/list', $this->data);
    }

    public function edit(int $id = null)
    {
        if (!is_allowed('slider/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Slider';
        $slider = $this->sliderModel->find($id);
        $this->data['slider'] = $slider;

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

                $sliderUpdate = $this->sliderModel->update($id, $update_data);

                if ($sliderUpdate) {
                    add_log('Ubah Slider', 'slider', 'edit', 't_slider', $id);
                    set_message('toastr_msg', 'Slider berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/slider');
                } else {
                    set_message('toastr_msg', 'Slider gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'Slider gagal diubah');
                    return redirect()->to('/slider/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('slider/edit/' . $id);
        echo view(APPPATH.'Adminigniter/Modules/Backend/Slider/Views/update', $this->data);
    }

    public function create()
    {
        if (!is_allowed('slider/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah Slider';

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

            $newSliderId = $this->sliderModel->insert($save_data);

            if ($newSliderId) {
                add_log('Tambah Slider', 'slider', 'create', 't_slider', $newSliderId);
                set_message('toastr_msg', 'Slider berhasil ditambah');
                set_message('toastr_type', 'success');
                return redirect()->to('/slider');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : 'Slider gagal ditambah');
                echo view(APPPATH.'Adminigniter/Modules/Backend/Slider/Views/add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('slider/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view(APPPATH.'Adminigniter/Modules/Backend/Slider/Views/add', $this->data);
        }
    }

    public function delete(int $id = 0)
    {
        if (!is_allowed('slider/delete')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        if (!$id) {
            set_message('toastr_msg', 'Sorry you have to provide parameter (id)');
            set_message('toastr_type', 'error');
            return redirect()->to('/slider');
        }
        $sliderDelete = $this->sliderModel->delete($id);
        if ($sliderDelete) {
            add_log('Hapus Slider', 'slider', 'delete', 't_slider', $id);
            set_message('toastr_msg', 'Slider berhasil dihapus');
            set_message('toastr_type', 'success');
            return redirect()->to('/slider');
        } else {
            set_message('toastr_msg', 'Slider gagal dihapus');
            set_message('toastr_type', 'warning');
            set_message('message', 'Slider gagal dihapus');
            return redirect()->to('/slider/delete/' . $id);
        }
    }

    public function enable($id = null)
    {
        if (!is_allowed('slider/enable')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $sliderUpdate = $this->sliderModel->update($id, array('active' => 1));

        if ($sliderUpdate) {
            set_message('toastr_msg', 'Slider berhasil diaktifkan');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', 'Slider gagal diaktifkan');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/slider');
    }

    public function disable($id = null )
    {
        if (!is_allowed('slider/disable')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $sliderUpdate = $this->sliderModel->update($id, array('active' => 0));

        if ($sliderUpdate) {
            set_message('toastr_msg', 'Slider berhasil dinonaktifkan');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', 'Slider gagal dinonaktifkan');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/slider');
    }
}
