<?php

namespace App\Models;

use CodeIgniter\Model;

class Inventaris extends Model
{
    protected $table            = 'inventaris';
    protected $primaryKey       = 'id';

    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields = [
        'kode_barang',
        'nama_barang',
        'kategori',
        'jumlah',
        'kondisi',
        'lokasi',
        'tanggal_beli',
        'harga',
        'keterangan'
    ];

    protected $useTimestamps = true;

    protected $validationRules = [

        'kode_barang' => 'required',
        'nama_barang' => 'required',
        'kategori'    => 'required',
        'jumlah'      => 'required|numeric',
        'kondisi'     => 'required',
        'lokasi'      => 'required',
        'tanggal_beli'=> 'required',
        'harga'       => 'required|numeric',
    ];

    protected $validationMessages = [
        'nama_barang' => [
            'required' => 'Nama barang wajib diisi'
        ]
    ];
}