<?php
if (!function_exists('get_eksemplar')) {
    function get_eksemplar($barcode_no)
    {
        $eksemplarModel = new \Eksemplar\Models\EksemplarModel();
		$data = $eksemplarModel->where('barcode_no',$barcode_no)->get()->getRow();

        return $data;
    }
}

if (!function_exists('get_barcode_no')) {
    function get_barcode_no()
    {
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable('t_eksemplar');
        $kode = $baseModel
        ->select ('RIGHT(barcode_no,4) as barcode_no', false)
        ->orderBy('barcode_no','DESC')
        ->limit(1)->get()->getRowArray();

        if (empty($kode['barcode_no'])){
            $no=1;
        }else{
            $no=intval($kode['barcode_no']) + 1; }
        $batas = str_pad($no, 7, "0", STR_PAD_LEFT);
        $barcode_no = $batas;
        return $barcode_no;
    }
    
}

if (!function_exists('get_rfid')) {
    function get_rfid()
    {
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable('t_eksemplar');
        $kode = $baseModel
        ->select ('RIGHT(rfid,4) as rfid', false)
        ->orderBy('rfid','DESC')
        ->limit(1)->get()->getRowArray();

        if (empty($kode['rfid'])){
            $no=1;
        }else{
            $no=intval($kode['rfid']) + 1; }
        $batas = str_pad($no, 7, "0", STR_PAD_LEFT);
        $barcode_no = $batas;
        return $barcode_no;
    }
    
}

if (!function_exists('get_register_no')) {
    function get_register_no()
    {
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable('t_eksemplar');
        $kode = $baseModel
        ->select ('RIGHT(register_no,7) as register_no', false)
        ->orderBy('register_no','DESC')
        ->limit(1)->get()->getRowArray();

        if (empty($kode['register_no'])){
            $no=1;
        }else{
            $no=intval($kode['register_no']) + 1; }
        $year= date('Y');
        $batas = str_pad($no, 7, "0", STR_PAD_LEFT);
        $NomorInduk = $year.$batas;
        return $NomorInduk;
    }
    
}


?>

