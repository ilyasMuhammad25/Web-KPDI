<?php

namespace Anggota\Models;

class AnggotaModel extends \hamkamannan\adminigniter\Models\BaseModel
{
    protected $table      = 't_anggota';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useSoftDeletes = false;
    // protected $protectFields = false;
    protected $allowedFields = [
        'id', 'slug', 'name','MemberNo','IdentityNo','PlaceOfBirth','DateOfBirth','Address','AddressNow','Phone','InstitutionName','InstitutionAddress','InstitutionPhone','MotherName','Email','LoanReturnLateCount','', 'NoHp','Provincy','City','ProvincyNow','CityNow','Kecamatan','KecamatanNow','Kelurahan','KelurahanNow','RT','RTNow','RW','RWNow','Tahunajaran','KeteranganLain','IsLunasBiayaPendaftaran','BiayaPendaftaran','TanggalBebasPustaka', 'RegisterDate','EndDate' ,'description', 'sort',  'active', 'created_by', 'updated_by'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;

    

    public function MemberNo(){
        $kode = $this->db->table('t_anggota')
        ->select ('RIGHT(MemberNo,4) as MemberNo', false)
        ->orderBy('MemberNo','DESC')
        ->limit(1)->get()->getRowArray();

        if ($kode['MemberNo']==null){
            $no=1;
        }else{
            $no=intval($kode['MemberNo']) + 1;
        }
        $tgl= date('Ymd');
        $batas = str_pad($no, 4, "0", STR_PAD_LEFT);
        $MemberNo = $tgl.$batas;
        return $MemberNo;
    //     
}
}
// $q=$this->db->query("SELECT MAX(RIGHT(MemberNo,4)) AS MemberNo FROM t_anggota WHERE DATE(created_at)=CURDATE()");
    //     $Nomember="";
    //     if($q->CountAll()>0){
    //         foreach($q->result() as $k){
    //             $tmp=((int) $k->MemberNo) + 1;
    //             $Nomember=sprintf("%04s", $tmp);
    //         }
    //     } else{
    //         $Nomember="0001";
    //     }
    //     date_default_timezone_set('Asia/jakarta');
    //     return date('dmy').$Nomember;

    // }