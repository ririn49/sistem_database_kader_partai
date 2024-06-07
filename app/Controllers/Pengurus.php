<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengurusModel;

class Pengurus extends BaseController
{
    public function index()
    {
        $pengurusModel = new PengurusModel();
        $data['pengurus'] = $pengurusModel->findAll();
        return view('pengurus', $data);
        // var_dump($data['pengurus']);
    }



    public function create()
    {
        return view('tambahp');
    }

    public function simpan()
    {
        $data = [
            'jabatan' => $this->request->getPost('jabatan'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'gender' => $this->request->getPost('gender'),
            'email' => $this->request->getPost('email'),
            'no_hp' => $this->request->getPost('no_hp'),
        ];

        $pengurusModel = new PengurusModel();
        $pengurusModel->insert($data);

        $session = session();
        $session->setFlashdata('message', 'Data berhasil ditambahkan.');

        return redirect()->to('/pengurus');
    }

    public function edit($id)
    {
        $pengurusModel = new PengurusModel();
        $data['pengurus'] = $pengurusModel->find($id);
        return view('editp', $data);
    }

    public function update($id)
    {
        $pengurusModel = new PengurusModel();
        $pengurusModel->update($id, [
            'jabatan' => $this->request->getPost('jabatan'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'gender' => $this->request->getPost('gender'),
            'email' => $this->request->getPost('email'),
            'no_hp' => $this->request->getPost('no_hp'),
        ]);

        $session = session();
        $session->setFlashdata('message', 'Data berhasil diedit.');

        return redirect()->to('/pengurus');
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

    public function delete($id)
    {
        $pengurusModel = new pengurusModel();
        $deleted = $pengurusModel->delete($id);

        if ($deleted) {
            $session = session();
            $session->setFlashdata('message', 'Data berhasil dihapus.');
        } else {
            $session = session();
            $session->setFlashdata('message', 'Gagal menghapus data.');
        }

        return redirect()->to('/pengurus');
    }
}
