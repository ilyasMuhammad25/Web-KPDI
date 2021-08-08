<?php

namespace Mastertag\Models;

class FielddatasModel extends \hamkamannan\adminigniter\Models\BaseModel
{
    protected $table      = 'm_fielddatas';
    //protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useSoftDeletes = false;
    protected $protectFields = false;
    /*protected $allowedFields = [
        'id', 'slug', 'name', 'description', 'repeatable',  'active', 'created_by', 'updated_by'
    ];*/
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;
}
