<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KegiatanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul' => 'Kajian Subuh Bersama Ustadz Ahmad',
                'slug' => 'kajian-subuh-bersama-ustadz-ahmad',
                'deskripsi' => 'Kajian rutin ba’da subuh membahas tafsir Al-Quran.',
                'gambar' => 'default.jpg',
                'tanggal_kegiatan' => '2026-05-20',
                'kategori' => 'Kajian',
                'lokasi' => 'Masjid Al Hikmah',
                'status' => 'publish',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'judul' => 'Santunan Anak Yatim',
                'slug' => 'santunan-anak-yatim',
                'deskripsi' => 'Kegiatan santunan anak yatim dan dhuafa.',
                'gambar' => 'default.jpg',
                'tanggal_kegiatan' => '2026-05-25',
                'kategori' => 'Santunan',
                'lokasi' => 'Aula Masjid',
                'status' => 'publish',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('kegiatan')->insertBatch($data);
    }
}