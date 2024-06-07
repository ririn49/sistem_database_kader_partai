<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PartaiModel;
use App\Models\PengurusModel;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {
        $partaiModel = new PartaiModel();
        $pengurusModel = new PengurusModel();
        $data['par'] = $partaiModel->findAll();
        $data['pengurus'] = $pengurusModel->findAll();
        $data['countPar'] = $partaiModel->countAllResults();
        $data['countPengurus'] = $pengurusModel->countAllResults();

        return view('dashboard',$data);
    }
}
