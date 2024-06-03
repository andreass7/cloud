<?php

namespace App\Controllers;

use App\Models\computingModel;

class masukController extends BaseController
{
    public function index(): string
    {
        $uplod = new computingModel();
        $all_data = $uplod->findAll();
        return view('content/barangMasuk', ['all_data' => $all_data]);
    }
    public function create()
    {
        $uplod = new computingModel();
        $uplod->insert($this->request->getPost());
        return redirect()->to(base_url('barangMasuk'));
    }
}
