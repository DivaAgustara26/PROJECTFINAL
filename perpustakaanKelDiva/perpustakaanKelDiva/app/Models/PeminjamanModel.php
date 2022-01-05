<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table = "peminjaman";
    protected $primaryKey = "n_mhsiswa";
    protected $returnType = "object";

    protected $allowedFields = [
        'n_mhsiswa', 'alamat', 'jurusan', 'buku', 't_pinjam',
        't_kembali'
    ];
}
