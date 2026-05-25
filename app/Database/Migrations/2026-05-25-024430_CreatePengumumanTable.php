<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePengumumanTable extends Migration
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

            'kategori' => [
                'type'       => 'ENUM',
                'constraint' => [
                    'Informasi',
                    'Donasi',
                    'Agenda',
                    'Renovasi',
                    'Idul Fitri',
                    'Idul Adha',
                    'Ramadhan'
                ],
            ],

            'isi_pengumuman' => [
                'type' => 'TEXT',
            ],

            'gambar' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],

            'tanggal_pengumuman' => [
                'type' => 'DATE',
            ],

            'author' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],

            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['publish', 'draft'],
                'default'    => 'publish',
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

        $this->forge->createTable('pengumuman');
    }

    public function down()
    {
        $this->forge->dropTable('pengumuman');
    }
}