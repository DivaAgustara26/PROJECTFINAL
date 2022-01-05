<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KembaliSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Diva',
                'alamat' => 'Jl. Menteng',
                'jurusan' => 'Teknik Informatika',
                'buku' => 'Laskar Pelangi',
                'denda' => '25000',
                't_kembali' => '18-01-2022',
            ],
            [
                'nama' => 'Febry',
                'alamat' => 'Jl. Tilung',
                'jurusan' => 'Teknik Informatika',
                'buku' => 'Dasar Komputer',
                'denda' => '20000',
                't_kembali' => '11-03-2022',
            ]
        ];
        $this->db->table('pengembalian')->insertBatch($data);
    }
}
