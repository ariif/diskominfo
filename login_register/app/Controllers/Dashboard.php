<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\KtpModel;

class Dashboard extends Controller
{
    protected $Model_Ktp;

    public function __construct()
    {
        $this->ktp = new KtpModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Data KTP',
            'ktp' => $this->ktp->get_ktp(),
            'isi' => 'ktp/v_show',
        ];
        echo view('layout/v_wrapper', $data);
    }


    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Departemen',
            'isi' => 'ktp/v_tambah',
        ];

        echo view('layout/v_wrapper', $data);
    }


    public function save()
    {
        $data = [
            'nama_provinsi' => $this->request->getPost('nama_provinsi'),
            'kabupaten_kota' => $this->request->getPost('kabupaten_kota'),
            'nik'   => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'alamat' => $this->request->getPost('alamat'),
            'agama' => $this->request->getPost('agama'),
            'status_perkawinan' => $this->request->getPost('status_perkawinan'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
        ];

        $this->ktp->insert_ktp($data);
        session()->setFlashdata('success', 'Data Berhasil ditambahkan');
        return redirect()->to(base_url('dashboard'));
    }


    

    public function delete($ktp_id)
    {
        $this->ktp->delete_ktp($ktp_id);
        session()->setFlashdata('success', 'Data berhasil di Hapus..!!!');
        return redirect()->to(base_url('dashboard'));
    }

}
