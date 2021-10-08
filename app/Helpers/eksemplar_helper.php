<?php

if (!function_exists('BarcodeNumber_helper')) {
    function BarcodeNumber_helper()
    {
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable('t_eksemplar');
        $kode = $baseModel
        ->select ('RIGHT(NomorBarcode,4) as NomorBarcode', false)
        ->orderBy('NomorBarcode','DESC')
        ->limit(1)->get()->getRowArray();

        if (empty($kode['NomorBarcode'])){
            $no=1;
        }else{
            $no=intval($kode['NomorBarcode']) + 1; }
        $Brcd= "BRCD";
        $batas = str_pad($no, 7, "0", STR_PAD_LEFT);
        $NomorBarcode = $Brcd.$batas;
        return $NomorBarcode;
    }
    
}

if (!function_exists('RFID_helper')) {
    function RFID_helper()
    {
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable('t_eksemplar');
        $kode = $baseModel
        ->select ('RIGHT(RFID,4) as RFID', false)
        ->orderBy('RFID','DESC')
        ->limit(1)->get()->getRowArray();

        if (empty($kode['RFID'])){
            $no=1;
        }else{
            $no=intval($kode['RFID']) + 1; }
        $Brcd= "RFID";
        $batas = str_pad($no, 7, "0", STR_PAD_LEFT);
        $NomorBarcode = $Brcd.$batas;
        return $NomorBarcode;
    }
    
}

if (!function_exists('NoInduk_helper')) {
    function NoInduk_helper()
    {
        $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
        $baseModel->setTable('t_eksemplar');
        $kode = $baseModel
        ->select ('RIGHT(NoInduk,7) as RFID', false)
        ->orderBy('NoInduk','DESC')
        ->limit(1)->get()->getRowArray();

        if (empty($kode['NoInduk'])){
            $no=1;
        }else{
            $no=intval($kode['NoInduk']) + 1; }
        $year= date('Y');
        $batas = str_pad($no, 7, "0", STR_PAD_LEFT);
        $NomorInduk = $year.$batas;
        return $NomorInduk;
    }
    
}
// if (!function_exists('RFID_helper')) {
//     function RFID_helper()
//     {
//         $baseModel = new \hamkamannan\adminigniter\Models\BaseModel();
//         $baseModel->setTable('t_eksemplar');
//         $kode = $baseModel
//         ->select('MAX(RFID) AS MaxRFID')
//         ->Where('RFID LIKE "RFID0%"');
//         //get last control number
//         // $query2 = $conn->query('SELECT MAX(NomorBarcode) AS MaxNomorBarcode FROM collections WHERE NomorBarcode LIKE "BRCD0%"');
//         $row = $kode->getRow()->MaxRFID;
    
//         if ($row >= 0) {
//             $RFIDNumber = (int)preg_replace('/[^0-9]/', '', $row);
//         }
//         $newRFIDNumber =  'BRCD' . str_pad((int)$RFIDNumber + 1, 11, '0', STR_PAD_LEFT);
    
//         return $newRFIDNumber;
//     }
    
// }


?>

