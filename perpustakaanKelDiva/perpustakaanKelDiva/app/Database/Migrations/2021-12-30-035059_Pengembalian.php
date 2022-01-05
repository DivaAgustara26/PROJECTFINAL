<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengembalian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 30,

            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'jurusan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'buku' => [
                'type' => 'VARCHAR',
                'constraint' => "255",
            ],
            'denda' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            't_kembali' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

        ]);
        $this->forge->addPrimaryKey('nama');
        $this->forge->createTable('pengembalian');
    }
    //--------------------------------------------------------------------
    public function down()
    {
        $this->forge->dropTable('pengembalian');
    }
}
