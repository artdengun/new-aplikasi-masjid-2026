<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInventarisTable extends Migration
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

            'kode_barang' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],

            'nama_barang' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],

            'kategori' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],

            'jumlah' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],

            'kondisi' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],

            'lokasi' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],

            'tanggal_beli' => [
                'type' => 'DATE',
            ],

            'harga' => [
                'type'       => 'BIGINT',
                'constraint' => 20,
            ],

            'keterangan' => [
                'type' => 'TEXT',
                'null' => true,
            ],

            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',

        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('inventaris');
    }

    public function down()
    {
        $this->forge->dropTable('inventaris');
    }
}