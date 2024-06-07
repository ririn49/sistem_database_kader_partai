<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PartaiModel;

class Partai extends BaseController
{
    public function index()
    {
        $partaiModel = new PartaiModel();
        $data['par'] = $partaiModel->findAll();
        return view('partai', $data);
    }


    public function create()
    {
        return view('tambah');
    }

    public function simpan()
    {
        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'no_hp' => $this->request->getPost('no_hp'),
            'no_tps' => $this->request->getPost('no_tps')
        ];
        
        $partaiModel = new PartaiModel();
        $partaiModel->insert($data);

        $session = session();
        $session->setFlashdata('message', 'Data berhasil ditambahkan.');

        return redirect()->to('/partai'); 
    }

    public function edit($nik)
    {
        $partaiModel = new PartaiModel();
        $data['par'] = $partaiModel->find($nik);
        return view('edit', $data);
    }

    public function update($nik)
    {
        $partaiModel = new PartaiModel();
        $partaiModel->update($nik, [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'rt' => $this->request->getPost('rw'),
            'rw' => $this->request->getPost('rw'),
            'no_hp' => $this->request->getPost('no_hp'),
            'no_tps' => $this->request->getPost('no_tps')
        ]);

        $session = session();
        $session->setFlashdata('message', 'Data berhasil diedit.');

        return redirect()->to('/partai');
    }

    // public function delete($id)
    // {
    //     $mahasiswaModel = new MahasiswaModel();
    //     $data['m'] = $mahasiswaModel->where('id', $id)->delete();
    //     $mahasiswaModel->update($id);

    //     $session = session();
    //     $session->setFlashdata('message', 'Data mahasiswa berhasil dihapus.');

    //     return redirect()->to('/mahasiswa');
    // }

    public function delete($nik)
{
    $partaiModel = new PartaiModel();
    $deleted = $partaiModel->delete($nik);

    if ($deleted) {
        $session = session();
        $session->setFlashdata('message', 'Data berhasil dihapus.');
    } else {
        $session = session();
        $session->setFlashdata('message', 'Gagal menghapus data.');
    }

    return redirect()->to('/partai');
}


}
