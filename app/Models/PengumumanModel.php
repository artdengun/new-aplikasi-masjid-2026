<?php

namespace App\Models;

use CodeIgniter\Model;

class PengumumanModel extends Model
{
    protected $table            = 'pengumuman';

    protected $primaryKey       = 'id';

    protected $returnType       = 'array';

    protected $useTimestamps    = true;

    protected $allowedFields = [
        'judul',
        'slug',
        'kategori',
        'isi_pengumuman',
        'gambar',
        'tanggal_pengumuman',
        'author',
        'status'
    ];
}