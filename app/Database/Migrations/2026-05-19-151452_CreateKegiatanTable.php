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

            'tanggal_kegiatan' => [
                'type' => 'DATE',
            ],
             'kategori' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'lokasi' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'jam_kegiatan' => [
                'type' => 'TIME',
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

        $this->forge->createTable('kegiatan');
    }

    public function down()
    {
        $this->forge->dropTable('kegiatan');
    }
}