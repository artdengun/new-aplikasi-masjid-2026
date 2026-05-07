<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PemeliharaanSeeder extends Seeder
{
    public function run()
    {
        $data = [

            [
                'kode' => 'PM-001',
                'nama_item' => 'Speaker TOA',
                'kategori' => 'Audio',
                'jenis' => 'Perbaikan',
                'tanggal' => '2026-05-01',
                'biaya' => 750000,
                'status' => 'Selesai',
                'penanggung_jawab' => 'Pak Ahmad',
                'lokasi' => 'Ruang Utama',
                'keterangan' => 'Perbaikan suara pecah',
            ],

            [
                'kode' => 'PM-002',
                'nama_item' => 'AC Utama',
                'kategori' => 'Elektronik',
                'jenis' => 'Pemeliharaan',
                'tanggal' => '2026-05-03',
                'biaya' => 350000,
                'status' => 'Diproses',
                'penanggung_jawab' => 'Pak Budi',
                'lokasi' => 'Lantai 1',
                'keterangan' => 'Cuci AC rutin',
            ],

        ];

        $this->db->table('pemeliharaan')->insertBatch($data);
    }
}