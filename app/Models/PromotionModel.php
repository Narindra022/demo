<?php

namespace App\Models;

use CodeIgniter\Model;

class PromotionModel extends Model
{
    protected $table      = 'promotion';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['intitule'];

    protected $useTimestamps = true;
    protected $createdField  = 'date_creation';
    protected $updatedField  = 'date_modification';
    protected $deletedField  = 'date_suppression';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}