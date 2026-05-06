<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransaksi extends Migration
{
     public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'keterangan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'jumlah' => [
                'type' => 'BIGINT',
            ],
            'tipe' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'metode' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true, // contoh: cash, transfer, qris
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('transaksis');
    }

    public function down()
    {
        $this->forge->dropTable('transaksis');
    }
}
