<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaModel extends Model
{
    protected $table      = 'peserta';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['nama', 'nisn', 'gender', 'status', 'sekolah', 'tingkat', 'kontak_wa', 'email', 'username', 'foto_peserta', 'foto_rapor'];
}