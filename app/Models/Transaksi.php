<?php

namespace App\Models;

use CodeIgniter\Model;

class Transaksi extends Model
{
    protected $table      = 'transaksis';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = [
        'tanggal',
        'keterangan',
        'kategori',
        'jumlah',
        'tipe',
        'metode'
    ];

    protected $useTimestamps = true;

    // 🔥 VALIDATION DI MODEL (biar controller bersih)
    protected $validationRules = [
        'tanggal'    => 'required',
        'keterangan' => 'required',
        'jumlah'     => 'required|numeric',
        'tipe'       => 'required|in_list[masuk,keluar]',
    ];

    protected $validationMessages = [
        'tanggal' => [
            'required' => 'Tanggal wajib diisi'
        ],
        'keterangan' => [
            'required' => 'Keterangan wajib diisi'
        ],
        'jumlah' => [
            'required' => 'Jumlah wajib diisi',
            'numeric'  => 'Jumlah harus angka'
        ],
        'tipe' => [
            'required' => 'Tipe wajib dipilih'
        ]
    ];

    // 🔥 HELPER QUERY (buat dashboard nanti)
    public function getMasuk()
    {
        return $this->where('tipe', 'masuk')->findAll();
    }

    public function getKeluar()
    {
        return $this->where('tipe', 'keluar')->findAll();
    }

    public function getTotalMasuk()
    {
        return $this->selectSum('jumlah')->where('tipe', 'masuk')->first()['jumlah'] ?? 0;
    }

    public function getTotalKeluar()
    {
        return $this->selectSum('jumlah')->where('tipe', 'keluar')->first()['jumlah'] ?? 0;
    }
}