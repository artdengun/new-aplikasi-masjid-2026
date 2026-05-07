<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InventarisSeeder extends Seeder
{
    public function run()
    {
        $data = [

            [
                'kode_barang'  => 'INV-001',
                'nama_barang'  => 'Karpet Masjid',
                'kategori'     => 'Perlengkapan Ibadah',
                'jumlah'       => 10,
                'kondisi'      => 'Baik',
                'lokasi'       => 'Ruang Utama',
                'tanggal_beli' => '2026-01-01',
                'harga'        => 5000000,
                'keterangan'   => 'Karpet merah premium'
            ],

            [
                'kode_barang'  => 'INV-002',
                'nama_barang'  => 'Speaker TOA',
                'kategori'     => 'Elektronik',
                'jumlah'       => 2,
                'kondisi'      => 'Baik',
                'lokasi'       => 'Gudang',
                'tanggal_beli' => '2026-02-10',
                'harga'        => 2500000,
                'keterangan'   => 'Speaker outdoor'
            ],

        ];

        $this->db->table('inventaris')->insertBatch($data);
    }
}