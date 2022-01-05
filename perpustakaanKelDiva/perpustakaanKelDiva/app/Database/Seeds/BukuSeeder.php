<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class BukuSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_buku' => '1001',
                'nama_buku' => 'Laskar Pelangi',
                'jenis_buku' => 'Novel',
                'stok' => '20',
                'no_rak' => 'A1',
            ]
        ];
        $this->db->table('buku')->insertBatch($data);
    }
}
