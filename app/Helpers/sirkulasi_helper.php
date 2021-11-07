<?php
if (!function_exists('get_loan_item')) {
    function get_loan_item($id)
    {
		$eksemplarLoanItemModel = new \Sirkulasi\Models\EksemplarLoanItemModel();
		$query = $eksemplarLoanItemModel
			->select('t_eksemplar_loan_item.*')
			->select('t_eksemplar.NomorBarcode, t_eksemplar.NoInduk, t_eksemplar.RFID, t_eksemplar.Price ')
			->select('t_anggota.name as member_name, t_anggota.MemberNo as member_no')
			->select('t_catalog.Title, t_catalog.Publisher')

			->join('t_eksemplar','t_eksemplar.id = t_eksemplar_loan_item.eksemplar_id','inner')
			->join('t_anggota','t_anggota.id = t_eksemplar_loan_item.anggota_id','inner')
			->join('t_catalog','t_catalog.id = t_eksemplar.catalog_id','inner')
			->where('t_eksemplar_loan_item.id', $id);

		$data = $query->get()->getRow();
		return $data;
    }
}

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

