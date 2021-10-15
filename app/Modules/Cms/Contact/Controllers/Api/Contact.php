<?php

namespace App\Modules\Cms\Contact\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\CityModel;
use App\Models\ContactModel;
use CodeIgniter\Files\File;

class Contact extends ResourceController
{
    use ResponseTrait;
    protected $contactModel;
    protected $validation;
    protected $session;
    protected $modulePath;
    protected $uploadPath;

    function __construct()
    {
        $this->contactModel = new \App\Modules\Cms\Contact\Models\ContactModel();
        $this->validation = \Config\Services::validation();
        $this->session = session();
        $this->modulePath = ROOTPATH . 'public/uploads/contact/';
        $this->uploadPath = WRITEPATH . 'uploads/';

        if (!file_exists($this->modulePath)) {
            mkdir($this->modulePath);
        }
    }
    public function index()
    {
        $data = $this->contactModel->findAll();
        return $this->respond($data, 200);
    }
    public function detail($id = null)
    {
        $data = $this->contactModel->find($id);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No Data Found with id ' . $id);
        }
    }
    public function create()
    {
        $this->validation->setRule('name', 'Nama Lengkap', 'required');
        $this->validation->setRule('email', 'Alamat Email', 'required');
        $this->validation->setRule('phone', 'No Telepon', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
            $save_data = array(
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'phone' => $this->request->getPost('phone'),
                'subject' => $this->request->getPost('subject'),
                'message' => $this->request->getPost('message'),
            );

            $newContactId = $this->contactModel->insert($save_data);
            if ($newContactId) {
                $this->session->setFlashdata('toastr_msg', 'Pesan berhasil dikirim');
                $this->session->setFlashdata('toastr_type', 'success');
                $response = [
                    'status'   => 201,
                    'error'    => null,
                    'messages' => [
                        'success' => 'Pesan berhasil dikirim'
                    ]
                ];
                return $this->respondCreated($response);
            } else {
                $response = [
                    'status'   => 400,
                    'error'    => null,
                    'messages' => [
                        'error' => 'Pesan gagal dikirim'
                    ]
                ];
                return $this->fail($response);
            }
        } else {
            $message = $this->validation->listErrors();
            return $this->fail($message, 400);
        }
    }
    public function delete($id = null)
    {
        $data = $this->ContactModel->find($id);
        if ($data) {
            $this->ContactModel->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Pesan berhasil dihapus'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan dengan id ' . $id);
        }
    }
}
