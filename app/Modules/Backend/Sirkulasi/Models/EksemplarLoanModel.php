<?php

namespace Sirkulasi\Models;

class EksemplarLoanModel extends \hamkamannan\adminigniter\Models\BaseModel
{
    protected $table      = 't_eksemplar_loan';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $useSoftDeletes = false;
    protected $protectFields = false;
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;
}
