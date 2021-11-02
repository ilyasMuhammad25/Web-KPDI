<?php

namespace Sirkulasi\Models;

class Sirkulasi_itemModel extends \hamkamannan\adminigniter\Models\BaseModel
{
    protected $table      = 't_eksemplarloan_item';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'id', 't_EksemplarLoan_id', 't_eksemplar_id', 'Location_library_id', 'description', 'sort',  'active', 'created_by', 'updated_by'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;
}
