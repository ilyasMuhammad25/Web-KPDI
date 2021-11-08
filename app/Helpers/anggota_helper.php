<?php
if (!function_exists('get_member')) {
    function get_member($member_no = null)
    {        
		$model = new \Anggota\Models\AnggotaModel();

		$data = $model->where('MemberNo',$member_no)->get()->getRow();
        return $data;
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

if (!function_exists('get_member_no')) {
    function get_member_no($member_id = null)
    {        
		$model = new \Anggota\Models\AnggotaModel();

		$data = $model->find($member_id);
        return $data;
    }
}

if (!function_exists('get_sumbangan')) {
    function get_sumbangan($member_id = null)
    {        
		$model = new \Sumbangan\Models\SumbanganModel();
        $query = $model
            ->select('t_sumbangan.*');

		if(!empty($member_id)){
			$query->where('t_member_id',$member_id);
		}

		$data = $query->get()->getResult();
        return $data;
    }
}

if (!function_exists('get_perpanjangan')) {
    function get_perpanjangan($member_id = null)
    {        
		$model = new \Sumbangan\Models\SumbanganModel();
        $query = $model
            ->select('t_sumbangan.*');

		if(!empty($member_id)){
			$query->where('t_member_id',$member_id);
		}

		$data = $query->get()->getResult();
        return $data;
    }
}

if (!function_exists('get_peminjaman')) {
    function get_peminjaman($member_id = null)
    {        
		$model = new \Sumbangan\Models\SumbanganModel();
        $query = $model
            ->select('t_sumbangan.*');

		if(!empty($member_id)){
			$query->where('t_member_id',$member_id);
		}

		$data = $query->get()->getResult();
        return $data;
    }
}

if (!function_exists('get_pelanggaran')) {
    function get_pelanggaran($member_id = null)
    {        
		$model = new \Sumbangan\Models\SumbanganModel();
        $query = $model
            ->select('t_sumbangan.*');

		if(!empty($member_id)){
			$query->where('t_member_id',$member_id);
		}

		$data = $query->get()->getResult();
        return $data;
    }
}



?>

