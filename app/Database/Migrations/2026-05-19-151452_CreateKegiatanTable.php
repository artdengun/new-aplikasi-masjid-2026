<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKegiatanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'judul' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],

            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],

            'deskripsi' => [
                'type' => 'TEXT',
            ],

            'gambar' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],

            'kategori' => [
                'type'       => 'ENUM',
                'constraint' => [
                    'Kajian',
                    'Sholat',
                    'Pengajian',
                    'Santunan',
                    'Ramadhan',
                    'Tabligh Akbar',
                    'Kajian Subuh',
                    'Kajian Ba\'da Maghrib'
                ],
                'default' => 'Kajian',
            ],

            'tanggal_kegiatan' => [
                'type' => 'DATE',
            ],

            'jam_kegiatan' => [
                'type' => 'TIME',
            ],

            'pembicara' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],

            'lokasi' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'peserta' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],

             'penanggung_jawab' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['Akan Datang', 'Berlangsung', 'Selesai'],
                'default'    => 'Akan Datang',
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

        ]);

        $this->forge->addKey('id', true);

        $this->forge->addUniqueKey('slug');

        $this->forge->createTable('kegiatan');
    }

    public function down()
    {
        $this->forge->dropTable('kegiatan');
    }
}