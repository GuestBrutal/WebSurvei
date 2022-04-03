<?php

namespace App\Models;

use CodeIgniter\Model;

class Kebijakan extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kebijakan_pelayanan';
    protected $primaryKey       = 'id_kebijakan';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_responden','persyaratan','prosedur','tarif','waktu','antrian','perlibatan','publikasi','skm','tarifb'];
}
