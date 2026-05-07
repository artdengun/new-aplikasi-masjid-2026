<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePemeliharaan extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'kode' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],

            'nama_item' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],

            'kategori' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],

            'jenis' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],

            'tanggal' => [
                'type' => 'DATE',
            ],

            'biaya' => [
                'type'       => 'BIGINT',
                'constraint' => 20,
            ],

            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],

            'penanggung_jawab' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],

            'lokasi' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],

            'keterangan' => [
                'type' => 'TEXT',
                'null' => true,
            ],

            'created_at datetime default current_timestamp',

            'updated_at datetime default current_timestamp on update current_timestamp',

        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('pemeliharaan');
    }

    public function down()
    {
        $this->forge->dropTable('pemeliharaan');
    }
}