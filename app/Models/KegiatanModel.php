<?php

namespace App\Models;

use CodeIgniter\Model;

class KegiatanModel extends Model
{
    protected $table = 'kegiatan';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'judul',
        'slug',
        'deskripsi',
        'gambar',
        'tanggal_kegiatan',
        'lokasi',
        'status'
    ];

    protected $useTimestamps = true;
}