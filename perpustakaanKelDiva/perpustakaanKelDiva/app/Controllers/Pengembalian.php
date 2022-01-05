<?php

namespace App\Controllers;

use App\Models\PengembalianModel;

class Pengembalian extends BaseController
{
    protected $pengembalian;
    function __construct()
    {
        $this->pengembalian = new PengembalianModel();
    }
    public function index()
    {
        $data['pageTitle'] = 'Daftar Pengembalian';
        $data['pengembalian'] = $this->pengembalian->findAll();
        return view('dashboard/pengembalian', $data);
    }
}
