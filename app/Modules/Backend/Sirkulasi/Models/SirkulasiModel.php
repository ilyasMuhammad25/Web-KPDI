<?php

namespace Sirkulasi\Models;

class SirkulasiModel extends \hamkamannan\adminigniter\Models\BaseModel
{
    protected $table      = 't_eksemplar_loan';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'id', 'slug', 'NomorTransaksi', 't_anggota_id', 'Tanggal_pinjam', 'Tenggal_kembali','Location_library_id', 'sort',  'active', 'created_by', 'updated_by'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;
}
