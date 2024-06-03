<?php

namespace App\Controllers;

use App\Models\computingModel;

class produkController extends BaseController
{
    public function index(): string
    {
        $uplod = new computingModel();
        $all_data = $uplod->orderBy('id', 'desc')->findAll();
        return view('content/stok', ['all_data' => $all_data]);
    }
    public function edit($id)
    {
        $uplod = new computingModel();
        $data = $uplod->find($id);
        return view('content/barangMasuk', ['data' => $data]);
    }
    public function update($id)
    {
        $uplod = new computingModel();
        $uplod->update($id, [
            'nama_brg' => $this->request->getPost('nama_brg'),
            'jenis_brg' => $this->request->getPost('jenis_brg'),
            'tgl_masuk' => $this->request->getPost('tgl_masuk'),

        ]);
        return redirect()->to(base_url('/'));
    }
    public function delete($id)
    {
        $uplod = new computingModel();
        $uplod->delete($id);
        return redirect()->to(base_url('/'));
    }
}
