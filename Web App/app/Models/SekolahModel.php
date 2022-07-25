<?php

namespace App\Models;

use CodeIgniter\Model;

class SekolahModel extends Model
{
    protected $table      = 'sekolah';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['nama_sekolah', 'tingkat', 'provinsi', 'kabupaten', 'alamat', 'email', 'kontak_pendamping', 'kontak_sekolah'];
}