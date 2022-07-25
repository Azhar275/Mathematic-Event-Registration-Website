<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaSDModel extends Model
{
    protected $table      = 'pesertasd';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['nama', 'nisn', 'kode_peserta', 'sekolah', 'tingkat', 'username'];
}