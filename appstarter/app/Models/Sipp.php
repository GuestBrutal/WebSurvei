<?php

namespace App\Models;

use CodeIgniter\Model;

class Sipp extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pelayanan_publik';
    protected $primaryKey       = 'id_pelayanan';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_responden','pemutahiran','transparan','konsultasi','pengaduan'];
}
