<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaSMPModel extends Model
{
    protected $table      = 'pesertasmp';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['nama', 'nisn', 'kode_peserta', 'sekolah', 'tingkat', 'username'];
}