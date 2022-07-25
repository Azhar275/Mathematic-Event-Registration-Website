<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaSMAModel extends Model
{
    protected $table      = 'pesertasma';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['nama', 'nisn', 'kode_peserta', 'sekolah', 'tingkat', 'username'];
}