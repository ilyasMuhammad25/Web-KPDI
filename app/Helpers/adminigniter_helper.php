<?php
/**
 * ---------------
 * Common Helper
 * ---------------
 */
if (!function_exists('get_references')) {
    function get_references($controller)
    {        
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable('c_references');
        $references = $baseModel
            ->select('c_references.*')
            ->join('c_menus', 'c_menus.id = c_references.menu_id', 'inner')
            ->where('c_menus.controller', $controller)
            ->find_all('c_references.sort', 'asc');

        return $references;
    }
}

if (!function_exists('get_references_slug')) {
    function get_references_slug($slug)
    {        
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable('c_references');
        $references = $baseModel
            ->select('c_references.*')
            ->join('c_menus', 'c_menus.id = c_references.menu_id', 'inner')
            ->where('c_menus.slug', $slug)
            ->find_all('c_references.sort', 'asc');

        return $references;
    }
}

if (!function_exists('get_references_dropdown')) {
    function get_references_dropdown($controller, $selected_id = 0)
    {        
        $html = '<select class="form-control" name="ref_type_id" tabindex="-1" aria-hidden="true">';
        $references = get_references($controller);
        foreach($references as $row){
            $selected = ($row->id == $selected_id) ? 'selected': '';
            $html .= '<option value="'.$row->id.'" '.$selected.'>'.$row->name.'</option>';
        }
        $html .= '</select>';
            
        return $html;
    }
}

if (!function_exists('get_flash')) {
    function get_flash($name)
    {
        $session = \Config\Services::session(); 
        return $session->getFlashdata($name);
    }
}

if (!function_exists('show_flash')) {
    function show_flash($message = 'message', $type="danger")
    {
        $response = '';
        if (!empty(get_flash($message))) {
            $response = '
                <div class="alert alert-'.$type.' alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>' . get_flash($message) . '</strong>
                </div>';
        }
        return $response;
    }
}

if (!function_exists('get_object_array')) {
    function get_object_array($objects, $field)
    {       
        $result = [];
        foreach($objects as $row){
            $result[] = strtoupper($row->$field);
        }

        return $result;
    }
}

if (!function_exists('is_display2')) {
    function is_display2($table_name = 't_banner', $field_name = 'name')
    {
        $result = false;
        $default = 'name';
        $columns_str = str_replace(' ','',get_parameter($table_name.'_columns',$default));
        $columns_arr = explode(',',$columns_str);
        if(in_array($field_name, $columns_arr)){
            $result = true;
        }

        return $result;
    }
}
if (!function_exists('get_MemberNo')) {
    function get_MemberNo()
    {
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable('t_anggota');
        $kode = $baseModel
        ->select ('RIGHT(MemberNo,4) as MemberNo', false)
        ->orderBy('MemberNo','DESC')
        ->limit(1)->get()->getRowArray();

        if (empty($kode['MemberNo'])){
            $no=1;
        }else{
            $no=intval($kode['MemberNo']) + 1; }
        $tgl= date('Ymd');
        $batas = str_pad($no, 4, "0", STR_PAD_LEFT);
        $MemberNo = $tgl.$batas;
        return $MemberNo;
    }
    
}

// db helper
if (!function_exists('db_get_single')) {
    function db_get_single($table_name = null, $where = false)
    {
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable($table_name);
        return $baseModel->get_single($where);
    }
}

if (!function_exists('db_get_all')) {
    function db_get_all($table_name = null, $where = null, $by = "id", $order = 'desc')
    {
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable($table_name);
        return $baseModel->get_all($where, $by, $order);
    }
}

if (!function_exists('db_count_all')) {
    function db_count_all($table_name = null)
    {
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable($table_name);
        return $baseModel->count_all();
    }
}

if (!function_exists('db_count')) {
    function db_count($table_name = null, $where = null)
    {
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable($table_name);
        return $baseModel->count($where);
    }

    // Fungsi untuk mengubah format tanggal mejadi format tanggal Indonesia
function tgl_indonesia($tgl){ 
    $tanggal = substr($tgl,8,2);
    $nama_bulan = array("Januari", "Februari", "Maret", "April", "Mei", 
            "Juni", "Juli", "Agustus", "September", 
            "Oktober", "November", "Desember");
    $bulan = $nama_bulan[substr($tgl,5,2) - 1];
    $tahun = substr($tgl,0,4);
    return $tanggal.' '.$bulan.' '.$tahun;       
}

function ubah_tgl1($tanggal) { 
    $pisah   = explode('/',$tanggal);
    $larik   = array($pisah[2],$pisah[0],$pisah[1]);
    $satukan = implode('-',$larik);
    return $satukan;
 }
 
 // Fungsi untuk mengubah susunan format tanggal dari database ke form
 function ubah_tgl2($tanggal) { 
    $pisah   = explode('-',$tanggal);
    $larik   = array($pisah[1],$pisah[2],$pisah[0]);
    $satukan = implode('/',$larik);
    return $satukan;
 }
}
