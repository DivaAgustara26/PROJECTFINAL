<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    protected $buku;
    function __construct()
    {
        $this->buku = new BukuModel();
    }
    public function index()
    {
        $data['pageTitle'] = 'Daftar Buku';
        $data['buku'] = $this->buku->findAll();
        return view('dashboard/buku', $data);
    }
    public function create()
    {
        $data['pageTitle'] = 'Input Data Buku';

        return view('dashboard/buku_create', $data);
    }
    public function store()
    {

        if (!$this->validate([
            'kode_buku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nama_buku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_buku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'stok' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_rak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }


        $this->buku->insert([
            'kode_buku' => $this->request->getVar('kode_buku'),
            'nama_buku' => $this->request->getVar('nama_buku'),
            'jenis_buku' => $this->request->getVar('jenis_buku'),
            'stok' => $this->request->getVar('stok'),
            'no_rak' => $this->request->getVar('no_rak'),

        ]);
        session()->setFlashdata('message', 'Tambah Data buku Berhasil');
        return redirect()->to('/buku');
    }
    function edit($kode_buku)
    {
        $dataBuku = $this->buku->find($kode_buku);
        if (empty($dataBuku)) {
            throw new
                \CodeIgniter\Exceptions\PageNotFoundException('Data Buku Tidak ditemukan !');
        }
        $data['pageTitle'] = 'Edit Data Buku';
        $data['buku'] = $dataBuku;
        return view('dashboard/buku_edit', $data);
    }
    public function update($kode_buku)
    {
        if (!$this->validate([

            'kode_buku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_buku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'stok' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_rak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }
        $this->buku->update($kode_buku, [
            'kode_buku' => $this->request->getVar('kode_buku'),
            'nama_buku' => $this->request->getVar('nama_buku'),
            'jenis_buku' => $this->request->getVar('jenis_buku'),
            'stok' => $this->request->getVar('stok'),
            'no_rak' => $this->request->getVar('no_rak'),
        ]);
        session()->setFlashdata('message', 'Update Data Buku Berhasil');
        return redirect()->to('/buku');
    }
    function delete($kode_buku)
    {
        $dataBuku = $this->buku->find($kode_buku);
        if (empty($dataBuku)) {
            throw new
                \CodeIgniter\Exceptions\PageNotFoundException('Data Buku Tidak ditemukan !');
        }
        $this->buku->delete($kode_buku);
        session()->setFlashdata('message', 'Delete Data Buku Berhasil');
        return redirect()->to('/buku');
    }
}
