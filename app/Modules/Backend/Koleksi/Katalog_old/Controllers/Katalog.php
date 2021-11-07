<?php

namespace Katalog\Controllers;

use CodeIgniter\Debug\Toolbar\Collectors\Views;
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

        if (!$this->auth->check()) {
            $this->session->set('redirect_url', current_url());
            return redirect()->route('login');
        }

        helper(['form', 'url', 'auth', 'app', 'adminigniter', 'katalog']);
    }
    public function index()
    {
        if (!is_allowed('katalog/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->katalogModel
            ->select('t_catalog.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created', 'created.id = t_catalog.created_by', 'left')
            ->join('users updated', 'updated.id = t_catalog.updated_by', 'left');

        $katalogs = $query->findAll();

        // $this->data['title'] = 'Katalog ' . strtoupper($slug);
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['katalogs'] = $katalogs;
        echo view('Katalog\Views\list', $this->data);
    }

    public function create()
    {
        if (!is_allowed('katalog/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah Katalog';
        $this->validation->setRule('name', 'Nama', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
            $slug = url_title($this->request->getPost('name'), '-', TRUE);

            // variable
            $date = date("Y-m-d H:i:s");
            $ControlNumber = ControlNumber();
            $BIBID = BIBID();
            $Title = Implode($this->request->getPost('title'), ' ');
            $Author = Implode(array_merge(array(MultiArray($this->request->getPost('Author'), '; ')), array(MultiArray($this->request->getPost('pengarang_tambahan'), '; '))), '; ');
            $Edition = Implode($this->request->getPost('Edition'), ' ');
            $PublishLocation = ImplodePenerbit($this->request->getPost('penerbit'), 'a');
            $Publisher = ImplodePenerbit($this->request->getPost('penerbit'), 'b');
            $PublishYear = ImplodePenerbit($this->request->getPost('penerbit'), 'c');
            $Publikasi = ImplodePenerbit($this->request->getPost('penerbit'));
            $Subject = MultiArray($this->request->getPost('Subject'), ';');
            $PhysicalDescription = Implode($this->request->getPost('PhysicalDescription'), ' ');
            $ISBN = Implode($this->request->getPost('ISBN'), ' ; ');
            $CallNumber = Implode(array_merge(array($post['CallNumber']), isset($post['repeat-CallNumber']) ? $post['repeat-CallNumber'] : array()), ' ; ');
            $Note = MultiArray($this->request->getPost('Radio-Note'), ';');
            $Languages = Implode($this->request->getPost('Languages')['lang'], ' ');
            $DeweyNo = Implode($this->request->getPost('DeweyNo'), ' ');
            $IsOPAC = Implode($this->request->getPost('IsOPAC'), ' ');
            $IsRDA = 0;
            $CoverURL = Implode($this->request->getPost('CoverURL'), ' ');
            $Worksheet_id = ($this->request->getPost('material-type'));

            $save_data = [
                'ControlNumber' => $ControlNumber,
                'BIBID' => $BIBID,
                'Title' => $Title,
                'Author' => $Author,
                'Edition' => $Edition,
                'Publisher' => $Publisher,
                'PublishLocation' => $PublishLocation,
                'PublishYear' => $PublishYear,
                'Publikasi' => $Publikasi,
                'Subject' => $Subject,
                'PhysicalDescription' => $PhysicalDescription,
                'ISBN' => $ISBN,
                'CallNumber' => $CallNumber,
                'Note' => $Note,
                'Languages' => $Languages,
                'DeweyNo' => $DeweyNo,
                'IsOPAC' => $IsOPAC,
                'IsRDA' => $IsRDA,
                'CoverURL' => $CoverURL,
                'Worksheet_id' => $Worksheet_id,
                'created_by' => user_id(),
                'created_at' => $date,
                'updated_by' => user_id(),
                'updated_at' => $date,
            ];
            // $this->data['save_data']=$save_data;
            $newKatalogId = $this->katalogModel->insert($save_data);
            $this->data['save_data']= $save_data ;

            if ($newKatalogId) {
                add_log('Tambah Katalog', 'katalog', 'create', 't_catalog', $newKatalogId);
                set_message('toastr_msg', lang('Katalog.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/katalog');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Katalog.info.failed_saved'));
                echo view('Katalog\Views\partial\simple', $sthis->data);
            }
        } else {
            $this->data['redirect'] = base_url('katalog/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));


            echo view('Katalog\Views\partial\simple', $this->data);
        }
    }

    public function edit(int $id = null)
    {
        if (!is_allowed('katalog/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Katalog';
        $katalog = $this->katalogModel->find($id);
        $this->data['katalog'] = $katalog;

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

                $katalogUpdate = $this->katalogModel->update($id, $update_data);

                if ($katalogUpdate) {
                    add_log('Ubah Katalog', 'katalog', 'edit', 't_catalog', $id);
                    set_message('toastr_msg', 'Katalog berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/katalog');
                } else {
                    set_message('toastr_msg', 'Katalog gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'Katalog gagal diubah');
                    return redirect()->to('/katalog/edit/' . $id);
                }
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
        $katalogDelete = $this->katalogModel->delete($id);
        if ($katalogDelete) {
            add_log('Hapus Katalog', 'katalog', 'delete', 't_catalog', $id);
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

        $katalogUpdate = $this->katalogModel->update($id, array($field => $value));

        if ($katalogUpdate) {
            set_message('toastr_msg', ' Katalog berhasil diubah');
            set_message('toastr_type', 'success');
        } else {
            set_message('toastr_msg', ' Katalog gagal diubah');
            set_message('toastr_type', 'warning');
        }
        return redirect()->to('/katalog');
    }

    /**
     * Customize for RDA
     */
    public function rda_index()
    {
        if (!is_allowed('katalog/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->katalogModel
            ->select('t_catalog.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created', 'created.id = t_catalog.created_by', 'left')
            ->join('users updated', 'updated.id = t_catalog.updated_by', 'left');

        $katalogs = $query->findAll();

        $this->data['title'] = 'Katalog RDA';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['katalogs'] = $katalogs;
        echo view('Katalog\Views\rda\list', $this->data);
    }

    public function rda_create()
    {
        if (!is_allowed('katalog/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah Katalog';

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

            $newKatalogId = $this->katalogModel->insert($save_data);

            if ($newKatalogId) {
                add_log('Tambah Katalog', 'katalog', 'create', 't_catalog', $newKatalogId);
                set_message('toastr_msg', lang('Katalog.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/katalog');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Katalog.info.failed_saved'));
                echo view('Katalog\Views\rda\add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('katalog/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));
            echo view('Katalog\Views\rda\add', $this->data);
        }
    }

    public function rda_edit(int $id = null)
    {
        if (!is_allowed('katalog/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Katalog';
        $katalog = $this->katalogModel->find($id);
        $this->data['katalog'] = $katalog;

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

                $katalogUpdate = $this->katalogModel->update($id, $update_data);

                if ($katalogUpdate) {
                    add_log('Ubah Katalog', 'katalog', 'edit', 't_catalog', $id);
                    set_message('toastr_msg', 'Katalog berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/katalog');
                } else {
                    set_message('toastr_msg', 'Katalog gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'Katalog gagal diubah');
                    return redirect()->to('/katalog/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('katalog/edit/' . $id);
        echo view('Katalog\Views\rda\update', $this->data);
    }

    /**
     * Customize for AACR
     */
    public function aacr_index()
    {
        if (!is_allowed('katalog/access')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $query = $this->katalogModel
            ->select('t_catalog.*')
            ->select('created.username as created_name')
            ->select('updated.username as updated_name')
            ->join('users created', 'created.id = t_catalog.created_by', 'left')
            ->join('users updated', 'updated.id = t_catalog.updated_by', 'left');

        $katalogs = $query->findAll();

        $this->data['title'] = 'Katalog AACR';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['katalogs'] = $katalogs;
        echo view('Katalog\Views\aacr\list', $this->data);
    }

    public function aacr_create()
    {
        if (!is_allowed('katalog/create')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Tambah Katalog';


        $this->validation->setRule('name', 'Nama', 'required');
        if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
            $slug = url_title($this->request->getPost('name'), '-', TRUE);
            $save_data = [
                'Worksheet_id' => $this->request->getPost('matrial-type'),
                'Title' => ArrImplode($this->request->getPost('title'), ' '),
                'sort' => $this->request->getPost('sort'),
                'description' => $this->request->getPost('description'),
                'created_by' => user_id(),
            ];

            $newKatalogId = $this->katalogModel->insert($save_data);

            if ($newKatalogId) {
                add_log('Tambah Katalog', 'katalog', 'create', 't_catalog', $newKatalogId);
                set_message('toastr_msg', lang('Katalog.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/katalog');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Katalog.info.failed_saved'));
                echo view('Katalog\Views\aacr\add', $this->data);
            }
        } else {
            $this->data['redirect'] = base_url('katalog/create');
            set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message'));

            $worksheets = getData(['table' => 'worksheets'])->getResultArray();
            $this->data['worksheets'] = $worksheets;

            $languages = getData([
                'table' => 'refferenceitems',
                'where' => [['field' => 'Refference_id', 'value' => '5']]
            ])->getResultArray();
            $this->data['languages'] = $languages;

            $papers = getData([
                'table' => 'refferenceitems',
                'where' => [['field' => 'Refference_id', 'value' => '17']]
            ])->getResultArray();
            $this->data['papers'] = $papers;

            $targets = getData([
                'table' => 'refferenceitems',
                'where' => [['field' => 'Refference_id', 'value' => '2']]
            ])->getResultArray();
            $this->data['targets'] = $targets;

            echo view('Katalog\Views\aacr\add', $this->data);
        }
    }

    public function aacr_create_action()
    {
        if ($this->request->isAJAX()) :
            $post           = $this->request->getPost();
            $worksheet      = $post['worksheet'];
            $controlNumber  = ControlNumber();
            $bibid          = BIBID();
            $title          = ArrImplode($post['title'], ' ');
            $author         = ArrImplode(array_merge([$post['author']['100']], $post['additional-author']['input']), '; ');
            $place          = $post['publisher']['a'];
            $name           = $post['publisher']['b'];
            $year           = $post['publisher']['c'];
            $publication    = "$place $name $year;";
            $subject        = ArrImplode($post['subject']['desc'], ';');
            $isbn           = ArrImplode($post['issn'], '; ');
            $deweyNo        = $post['class-ddc'];
            $callNumber     = ArrImplode($post['callnumber'], ' ');
            $physicalDescription = ArrImplode($post['physical-description'], ';');
            $language       = $post['opt-language'];
            $notes          = ArrImplode($post['notes']['input'], '; ');
            $data =
                [
                    'ControlNumber'         => $controlNumber,
                    'BIBID'                 => $bibid,
                    'Title'                 => $title,
                    'Author'                => $author,
                    'PublishLocation'       => $place,
                    'Publisher'             => $name,
                    'PublishYear'           => $year,
                    'Publikasi'             => $publication,
                    'Subject'               => $subject,
                    'ISBN'                  => $isbn,
                    'CallNumber'            => $callNumber,
                    'Note'                  => $notes,
                    'Languages'             => $language,
                    'DeweyNo'               => $deweyNo,
                    'PhysicalDescription'   => $physicalDescription,
                    'Worksheet_id'          => $worksheet,
                    'created_by'            => user_id(),
                ];
            $save = $this->katalogModel->insert($data);
            if ($save) {
                $post['id'] = $save;
                $post['ControlNumber'] = $controlNumber;
                $post['BIBID'] = $bibid;
                $post['005'] = '$a ' . date('YmdHis');
                // echo json_encode($post);
                // die;
                $this->catalog_ruas($post);

                add_log('Tambah Katalog', 'katalog', 'create', 't_catalog', $save);
                set_message('toastr_msg', lang('Katalog.info.successfully_saved'));
                set_message('toastr_type', 'success');
                return redirect()->to('/katalog');
            } else {
                set_message('message', $this->validation->getErrors() ? $this->validation->listErrors() : lang('Katalog.info.failed_saved'));
                echo view('Katalog\Views\rda\add', $this->data);
            }
        endif;
    }

    public function catalog_ruas($data)
    {

        // echo json_encode($data);
        // die;
        $array = [];

        // rincian
        $tag008 = [
            'Tag'           => '008',
            'Indicator1'    => null,
            'Indicator2'    => null,
            'CatalogId'     => $data['id'],
            'Value'        => '$a ' . str_pad(date('ymd'), 22, '#') . str_pad($data['target-group'], 11, '#') . str_pad($data['paper-form'], 2, '#') . str_pad($data['opt-language'], 5, '#')
        ];
        array_push($array, $tag008);
        // 

        foreach ($data as $key => $value) :
            switch ($key) {
                case 'ControlNumber':
                    $column = [
                        'Tag'           => '001',
                        'Indicator1'    => null,
                        'Indicator2'    => null,
                        'CatalogId'     => $data['id'],
                        'Value'        => "\$a $value"
                    ];
                    array_push($array, $column);
                    break;
                case 'BIBID':
                    $column = [
                        'Tag'           => '035',
                        'Indicator1'    => '#',
                        'Indicator2'    => '#',
                        'CatalogId'     => $data['id'],
                        'Value'        => "\$a $value"
                    ];
                    array_push($array, $column);
                    break;
                case '005':
                    $column = [
                        'Tag'           => $key,
                        'Indicator1'    => null,
                        'Indicator2'    => null,
                        'CatalogId'     => $data['id'],
                        'Value'        => "$value"
                    ];
                    array_push($array, $column);
                    break;
                case 'issn':
                    foreach ($value as $issn) :
                        $column = [
                            'Tag'           => '022',
                            'Indicator1'    => '0',
                            'Indicator2'    => '#',
                            'CatalogId'     => $data['id'],
                            'Value'        => "\$a $issn"
                        ];
                        array_push($array, $column);
                    endforeach;
                    break;
                case 'class-ddc':
                    $column = [
                        'Tag'           => '082',
                        'Indicator1'    => null,
                        'Indicator2'    => null,
                        'CatalogId'     => $data['id'],
                        'Value'        => "\$a $value"
                    ];
                    array_push($array, $column);
                    break;
                case 'callnumber':
                    foreach ($value as $callno) :
                        $column = [
                            'Tag'           => '084',
                            'Indicator1'    => '0',
                            'Indicator2'    => '#',
                            'CatalogId'     => $data['id'],
                            'Value'        => "\$a $callno"
                        ];
                        array_push($array, $column);
                    endforeach;
                    break;
                case 'author':
                    $column = [
                        'Tag'           => '100',
                        'Indicator1'    => '0',
                        'Indicator2'    => '#',
                        'CatalogId'     => $data['id'],
                        'Value'        => '$a ' . $value['100']
                    ];
                    array_push($array, $column);
                    break;
                case 'additional-author':
                    foreach ($value['input'] as $additionalAuthor) :
                        $column = [
                            'Tag'           => '700',
                            'Indicator1'    => '#',
                            'Indicator2'    => '#',
                            'CatalogId'     => $data['id'],
                            'Value'        => "\$a $additionalAuthor"
                        ];
                        array_push($array, $column);
                    endforeach;
                    break;
                case 'title':
                    $currentValue = '';
                    foreach ($value as $i => $title) :
                        $currentValue .= "\$$i $title ";
                    endforeach;
                    $column = [
                        'Tag'           => '245',
                        'Indicator1'    => '#',
                        'Indicator2'    => '#',
                        'CatalogId'     => $data['id'],
                        'Value'        => $currentValue
                    ];
                    array_push($array, $column);
                    break;
                case 'previous-title':
                    foreach ($value as $prev) :
                        $column = [
                            'Tag'           => '247',
                            'Indicator1'    => '#',
                            'Indicator2'    => '#',
                            'CatalogId'     => $data['id'],
                            'Value'        => "\$a $prev"
                        ];
                        array_push($array, $column);
                    endforeach;
                    break;
                case 'publisher':
                    $currentValue = '';
                    foreach ($value as $i => $pub) :
                        $currentValue .= "\$$i $pub ";
                    endforeach;
                    $column = [
                        'Tag'           => '260',
                        'Indicator1'    => '#',
                        'Indicator2'    => '#',
                        'CatalogId'     => $data['id'],
                        'Value'        => rtrim($currentValue)
                    ];
                    array_push($array, $column);
                    break;
                case 'physical-description':
                    $currentValue = '';
                    foreach ($value as $i => $phy) :
                        $currentValue .= "\$$i $phy ";
                    endforeach;
                    $column = [
                        'Tag'           => '300',
                        'Indicator1'    => '#',
                        'Indicator2'    => '#',
                        'CatalogId'     => $data['id'],
                        'Value'        => rtrim($currentValue)
                    ];
                    array_push($array, $column);
                    break;

                case 'frequency':
                    foreach ($value as $i => $freq) :
                        $column = [
                            'Tag'           => $i == 'current' ? '310' : '321',
                            'Indicator1'    => '#',
                            'Indicator2'    => '#',
                            'CatalogId'     => $data['id'],
                            'Value'        => "\$a $freq"
                        ];
                        array_push($array, $column);
                    endforeach;
                    break;

                case 'notes':
                    foreach ($value['input'] as $i => $note) :
                        $column = [
                            'Tag'           => '520',
                            'Indicator1'    => '#',
                            'Indicator2'    => '#',
                            'CatalogId'     => $data['id'],
                            'Value'        => "\$a $note"
                        ];
                        array_push($array, $column);
                    endforeach;
                    break;

                case 'subject':
                    foreach ($value['desc'] as $i => $subject) :
                        $column = [
                            'Tag'           => '600',
                            'Indicator1'    => '#',
                            'Indicator2'    => '#',
                            'CatalogId'     => $data['id'],
                            'Value'        => "\$a $subject"
                        ];
                        array_push($array, $column);
                    endforeach;
                    break;

                case 'location':
                    foreach ($value as $i => $location) :
                        $column = [
                            'Tag'           => '856',
                            'Indicator1'    => '#',
                            'Indicator2'    => '#',
                            'CatalogId'     => $data['id'],
                            'Value'        => "\$a $location"
                        ];
                        array_push($array, $column);
                    endforeach;
                    break;

                default:
                    'do nothing';
                    break;
            }
        endforeach;

        // echo json_encode($array);
        // die;

        insertData($array, 'catalog_ruas');
    }

    public function showPartial()
    {
        $languages = getData([
            'table' => 'refferenceitems',
            'where' => [['field' => 'Refference_id', 'value' => '5']]
        ])->getResultArray();

        $papers = getData([
            'table' => 'refferenceitems',
            'where' => [['field' => 'Refference_id', 'value' => '17']]
        ])->getResultArray();

        $targets = getData([
            'table' => 'refferenceitems',
            'where' => [['field' => 'Refference_id', 'value' => '2']]
        ])->getResultArray();

        if ($this->request->isAJAX()) {
            $post               = ($this->request->getPost());
            $data = $post['data'][0];
            $data['languages']  = $languages;
            $data['papers'] = $papers;
            $data['targets'] = $targets;
            // dd($data);
            $html = $post['mode'] == 'marc' ? view("Katalog\Views\partial\simple", $data) : view("Katalog\Views\partial\marc", $data);
            echo ($html);
        }
    }

    public function aacr_edit(int $id = null)
    {
        if (!is_allowed('katalog/update')) {
            set_message('toastr_msg', lang('App.permission.not.have'));
            set_message('toastr_type', 'error');
            return redirect()->to('/dashboard');
        }

        $this->data['title'] = 'Ubah Katalog';
        $katalog = $this->katalogModel->find($id);
        $this->data['katalog'] = $katalog;

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

                $katalogUpdate = $this->katalogModel->update($id, $update_data);

                if ($katalogUpdate) {
                    add_log('Ubah Katalog', 'katalog', 'edit', 't_catalog', $id);
                    set_message('toastr_msg', 'Katalog berhasil diubah');
                    set_message('toastr_type', 'success');
                    return redirect()->to('/katalog');
                } else {
                    set_message('toastr_msg', 'Katalog gagal diubah');
                    set_message('toastr_type', 'warning');
                    set_message('message', 'Katalog gagal diubah');
                    return redirect()->to('/katalog/edit/' . $id);
                }
            }
        }

        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors() : $this->session->getFlashdata('message');
        $this->data['redirect'] = base_url('katalog/edit/' . $id);
        echo view('Katalog\Views\aacr\update', $this->data);
    }
}
