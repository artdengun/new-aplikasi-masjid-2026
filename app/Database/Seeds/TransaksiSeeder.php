<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'tanggal' => '2026-05-01',
                'keterangan' => 'Infaq Jumat',
                'kategori' => 'Infaq',
                'jumlah' => 500000,
                'tipe' => 'masuk',
                'metode' => 'cash',
            ],
            [
                'tanggal' => '2026-05-02',
                'keterangan' => 'Perbaikan AC',
                'kategori' => 'Perawatan',
                'jumlah' => 300000,
                'tipe' => 'keluar',
                'metode' => 'transfer',
            ],
            [
                'tanggal' => '2026-05-03',
                'keterangan' => 'Donasi QRIS',
                'kategori' => 'Sedekah',
                'jumlah' => 700000,
                'tipe' => 'masuk',
                'metode' => 'qris',
            ],
        ];

        $this->db->table('transaksis')->insertBatch($data);
    }
}