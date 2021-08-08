<?php

namespace Eksemplar\Models;

class EksemplarModel extends \hamkamannan\adminigniter\Models\BaseModel
{
    protected $table      = 't_eksemplar';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'id', 'slug', 'name', 'description', 'sort',  'active', 'created_by', 'updated_by'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;
}
