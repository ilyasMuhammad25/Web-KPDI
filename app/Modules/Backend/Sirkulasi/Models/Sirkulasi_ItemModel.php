<?php

namespace Sirkulasi\Models;

class Sirkulasi_itemModel extends \hamkamannan\adminigniter\Models\BaseModel
{
    protected $table      = 't_eksemplarloan_item';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useSoftDeletes = false;
    protected $protectField = false;
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;
}
