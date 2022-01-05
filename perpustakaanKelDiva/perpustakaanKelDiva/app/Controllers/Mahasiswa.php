<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswa;
    function __construct()
    {
        $this->mahasiswa = new MahasiswaModel();
    }
    public function index()

    {
        $data['pageTitle'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa->findAll();
        return view('dashboard/mahasiswa', $data);
    }

    public function create()
    {
        $data['pageTitle'] = 'Input Data Mahasiswa';

        return view('dashboard/mahasiswa_create', $data);
    }
    public function store()
    {

        if (!$this->validate([
            'nim' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jurusan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],
            'alamat' => [

                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ],
                'foto' => [
                    'rules' =>
                    'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_siz
                    e[foto,1024]',
                    'errors' => [
                        'uploaded' => 'Harus Ada File yang diupload',
                        'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                        'max_size' => 'Ukuran File Maksimal 1 MB'
                    ]
                ],
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }


        $this->mahasiswa->insert([
            'nim' => $this->request->getVar('nim'),
            'nama' => $this->request->getVar('nama'),
            'jurusan' => $this->request->getVar('jurusan'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'no_telp' => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),


        ]);
        session()->setFlashdata('message', 'Tambah Data Mahasiswa Berhasil');
        return redirect()->to('/mahasiswa');
    }
    function edit($nim)
    {
        $dataMahasiswa = $this->mahasiswa->find($nim);
        if (empty($dataMahasiswa)) {
            throw new
                \CodeIgniter\Exceptions\PageNotFoundException('Data Mahasiswa Tidak ditemukan !');
        }
        $data['pageTitle'] = 'Edit Data Mahasiswa';
        $data['mahasiswa'] = $dataMahasiswa;
        return view('dashboard/mahasiswa_edit', $data);
    }
    public function update($nim)
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jurusan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]

            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }
        $this->mahasiswa->update($nim, [
            'nama' => $this->request->getVar('nama'),
            'jurusan' => $this->request->getVar('jurusan'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'no_telp' => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat')
        ]);
        session()->setFlashdata('message', 'Update Data Mahasiswa Berhasil');
        return redirect()->to('/mahasiswa');
    }
    function delete($nim)
    {
        $dataMahasiswa = $this->mahasiswa->find($nim);
        if (empty($dataMahasiswa)) {
            throw new
                \CodeIgniter\Exceptions\PageNotFoundException('Data Mahasiswa Tidak ditemukan !');
        }
        $this->mahasiswa->delete($nim);
        session()->setFlashdata('message', 'Delete Data Mahasiswa Berhasil');
        return redirect()->to('/mahasiswa');
    }
    public function view($nim)
    {
        $dataMahasiswa = $this->mahasiswa->find($nim);
        if (empty($dataMahasiswa)) {
            throw new
                \CodeIgniter\Exceptions\PageNotFoundException('Data Mahasiswa Tidak ditemukan !');
        }
        $data['pageTitle'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $dataMahasiswa;
        return view('dashboard/mahasiswa_view', $data);
    }
}
