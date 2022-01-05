<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = "buku";
    protected $primaryKey = "kode_buku";
    protected $returnType = "object";

    protected $allowedFields = [
        'kode_buku', 'nama_buku', 'jenis_buku', 'stok', 'no_rak'
    ];
}
