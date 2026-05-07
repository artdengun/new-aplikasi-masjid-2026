<?php

namespace App\Models;

use CodeIgniter\Model;

class PemeliharaanModel extends Model
{
    protected $table = 'pemeliharaan';

    protected $primaryKey = 'id';

    protected $allowedFields = [

        'kode',
        'nama_item',
        'kategori',
        'jenis',
        'tanggal',
        'biaya',
        'status',
        'penanggung_jawab',
        'lokasi',
        'keterangan',

    ];

    protected $useTimestamps = true;
}