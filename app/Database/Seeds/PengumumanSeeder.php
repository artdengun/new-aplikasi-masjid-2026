<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PengumumanSeeder extends Seeder
{
    public function run()
    {
        $data = [

            [
                'judul' => 'Pengumuman Kajian Subuh',
                'slug' => 'pengumuman-kajian-subuh',
                'kategori' => 'Agenda',
                'isi_pengumuman' => 'Kajian subuh akan dilaksanakan ba’da subuh.',
                'tanggal_pengumuman' => '2026-05-25',
                'author' => 'Admin Masjid',
                'status' => 'publish',
            ],

            [
                'judul' => 'Donasi Renovasi Masjid',
                'slug' => 'donasi-renovasi-masjid',
                'kategori' => 'Donasi',
                'isi_pengumuman' => 'Mari ikut berpartisipasi dalam renovasi masjid.',
                'tanggal_pengumuman' => '2026-05-26',
                'author' => 'DKM',
                'status' => 'publish',
            ]

        ];

        $this->db->table('pengumuman')->insertBatch($data);
    }
}