<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode_buku' => [
                'type' => 'VARCHAR',
                'constraint' => 11,

            ],
            'nama_buku' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'jenis_buku' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'stok' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'no_rak' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

        ]);
        $this->forge->addPrimaryKey('kode_buku');
        $this->forge->createTable('buku');
    }
    //--------------------------------------------------------------------
    public function down()
    {
        $this->forge->dropTable('buku');
    }
}
