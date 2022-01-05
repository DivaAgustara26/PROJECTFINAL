<?php

namespace App\Models;

use CodeIgniter\Model;

class PengembalianModel extends Model
{
    protected $table = "pengembalian";
    protected $primaryKey = "n_mhsiswa";
    protected $returnType = "object";
    protected $allowedFields = [
        'n_mhsiswa', 'alamat', 'jurusan', 'buku', 'denda',
        't_kembali'
    ];
}
