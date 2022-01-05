<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PinjamSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Diva',
                'alamat' => 'Jl. Menteng',
                'jurusan' => 'Teknik Informatika',
                'buku' => 'Laskar Pelangi',
                't_pinjam' => '03-01-2022',
                't_kembali' => '18-01-2022',
            ],
            [
                'nama' => 'Febry',
                'alamat' => 'Jl. Tilung',
                'jurusan' => 'Teknik Informatika',
                'buku' => 'Dasar Komputer',
                't_pinjam' => '02-01-2022',
                't_kembali' => '11-03-2022',
            ],
            [
                'nama' => 'Ferry',
                'alamat' => 'Jl. Garuda',
                'jurusan' => 'Sistem Informatika',
                'buku' => 'Naruto',
                't_pinjam' => '02-01-2022',
                't_kembali' => '11-03-2022',
            ]
        ];
        $this->db->table('peminjaman')->insertBatch($data);
    }
}
