<?php

namespace App\Models;

use CodeIgniter\Model;

class Responden extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'responden';
    protected $primaryKey       = 'id_responden';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['no_hp','tanggal'];
}
