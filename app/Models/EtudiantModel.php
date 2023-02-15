<?php

namespace App\Models;

use CodeIgniter\Model;

class EtudiantrModel extends Model
{
    protected $table      = 'etudiant';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nom','postnom', 'prenom', 'genre' , 'date_naissance','lieu_naissance'];

    protected $useTimestamps = true;
    protected $createdField  = 'date_creation';
    protected $updatedField  = 'date_modification';
    protected $deletedField  = 'date_suppression';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    
}
       