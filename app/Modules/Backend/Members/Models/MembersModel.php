<?php

namespace Members\Models;

class MembersModel extends \hamkamannan\adminigniter\Models\BaseModel
{
    protected $table      = 't_members';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useSoftDeletes = false;
    protected $protectFields = false;
    // protected $allowedFields = [
    //     'id', 'slug', 'name','MemberNo','IdentityNo','PlaceOfBirth','DateOfBirth','Address','AddressNow','Phone','InstitutionName','InstitutionAddress','InstitutionPhone','MotherName','Email','LoanReturnLateCount','PhotoUrl', 'NoHp','Provincy','City','ProvincyNow','CityNow','Kecamatan','KecamatanNow','Kelurahan','KelurahanNow','RT','RTNow','RW','RWNow','Tahunajaran','KeteranganLain','IsLunasBiayaPendaftaran','BiayaPendaftaran','TanggalBebasPustaka', 'category_id', 'description', 'sort',  'active', 'created_by', 'updated_by'
    // ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;
}
