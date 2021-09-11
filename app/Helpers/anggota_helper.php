<?php
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
		$model = new \Anggota\Models\SumbanganModel();
        $query = $model
            ->select('t_sumbangan.*');

		if(!empty($member_id)){
			$query->where('member_id',$member_id);
		}

		$data = $query->get()->getResult();
        return $data;
    }
}

if (!function_exists('get_peminjaman')) {
    function get_peminjaman($member_id = null)
    {        
		$model = new \Anggota\Models\SumbanganModel();
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
		$model = new \Anggota\Models\SumbanganModel();
        $query = $model
            ->select('t_sumbangan.*');

		if(!empty($member_id)){
			$query->where('member_id',$member_id);
		}

		$data = $query->get()->getResult();
        return $data;
    }
}

?>

