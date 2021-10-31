<?php

namespace LokasiRuang\Models;

class LokasiRuangModel extends \hamkamannan\adminigniter\Models\BaseModel
{
    protected $table      = 'm_lokasiruang';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'id', 'slug', 'name','file_image','code','Lokasi_perpustakaan_id','description', 'sort',  'active', 'created_by', 'updated_by'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;
}
