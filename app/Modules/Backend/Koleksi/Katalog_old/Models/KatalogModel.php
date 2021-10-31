<?php

namespace Katalog\Models;

class KatalogModel extends \hamkamannan\adminigniter\Models\BaseModel
{
    protected $table      = 't_katalog';
    protected $primaryKey = 'ID';
    protected $returnType     = 'object';
    protected $useSoftDeletes = false;
    protected $protectFields = false;
    // protected $allowedFields = [
    //     'ID', 'ControlNumber', 'BIBID', 'Title', 'Author',  'PublishLocation', 'Publisher', 'PublishYear', 'Publikasi', 'Subject', 'ISBN', 'CallNumber', 'Note', 'Languages', 'DeweyNo', 'PhysicalDescription', 'Worksheet_id', 'isOPAC', 'isBNI', 'isKIN', 'isRDA', 'CoverURL', 'created_by', 'updated_by', 'deleted_by', 'created_at', 'updated_at', 'deleted_at'
    // ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;
}
