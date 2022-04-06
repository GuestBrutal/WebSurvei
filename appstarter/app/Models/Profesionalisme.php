<?php

namespace App\Models;

use CodeIgniter\Model;

class Profesionalisme extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'profesionalisme_sdm';
    protected $primaryKey       = 'id_profesionalisme';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_responden','waktu','kesigapan','sikap','parkir','tunggu','toilet','khusus','penunjang'];
