<?php

if (!function_exists('NomorTransaksi_helper')) {
    function NomorTransaksi_helper()
    {
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable('t_eksemplar_loan');
        $kode = $baseModel
        ->select ('RIGHT(NomorTransaksi,4) as NomorTransaksi', false)
        ->orderBy('NomorTransaksi','DESC')
        ->limit(1)->get()->getRowArray();

        if (empty($kode['NomorTransaksi'])){
            $no=1;
        }else{
            $no=intval($kode['NomorTransaksi']) + 1; }
        $batas = str_pad($no, 7, "0", STR_PAD_LEFT);
        $NomorTransaksi = $batas;
        return $NomorTransaksi;
    }
    
}

?>

