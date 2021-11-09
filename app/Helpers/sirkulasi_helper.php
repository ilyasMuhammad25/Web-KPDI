<?php
if (!function_exists('get_available_eksemplars')) {
    function get_available_eksemplars()
    {        
		$ref_id = get_ref_id('tersedia','slug','ref_status');
		$eksemplarModel = new \Eksemplar\Models\EksemplarModel();
		$query = $eksemplarModel
			->select('t_eksemplar.*')
			->where('t_eksemplar.ref_status', $ref_id);

		$data = $query->get()->getResult();
		return $data;
    }
}

if (!function_exists('get_due_date')) {
    function get_due_date($days = 0, $from_date = null)
    {        
		if(empty($from_date)){
			$from_date = date('Y-m-d');
		}

		$new_date = date('Y-m-d', strtotime($from_date. ' + '.$days.' days'));
		return $new_date;
    }
}

if (!function_exists('get_late_days')) {
    function get_late_days($loan_date, $return_date = null)
    {        
		$late_days = 0;
		if(empty($return_date)){
			$return_date = date('Y-m-d');
		}

		if(!empty($loan_date) and $return_date > $loan_date){
			$from = strtotime($loan_date);
			$to = strtotime($return_date);
			$datediff = $to - $from;
	
			$late_days = round($datediff / (60 * 60 * 24));
		}

		return $late_days;
    }
}

if (!function_exists('get_loan_days')) {
    function get_loan_days($anggota_id)
    {        
		$max_loan_days = 0;

		$modelAnggota = new \Anggota\Models\AnggotaModel();
		$modelJenisAnggota = new \JenisAnggota\Models\JenisAnggotaModel();
		$anggota = $modelAnggota->find($anggota_id);

		if(!empty($anggota)){
			$jenis_anggota = $modelJenisAnggota->find($anggota->ref_jenisanggota);			
			if(!empty($jenis_anggota)){
				$max_loan_days = $jenis_anggota->max_loan_days;
			}
		}

		return $max_loan_days;
    }
}

if (!function_exists('get_member_type')) {
    function get_member_type($anggota_id)
    {        
		$result = false;

		$modelAnggota = new \Anggota\Models\AnggotaModel();
		$modelJenisAnggota = new \JenisAnggota\Models\JenisAnggotaModel();
		$anggota = $modelAnggota->find($anggota_id);

		if(!empty($anggota)){
			$jenis_anggota = $modelJenisAnggota->find($anggota->ref_jenisanggota);			
			if(!empty($jenis_anggota)){
				$result = $jenis_anggota;
			}
		}

		return $result;
    }
}

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

