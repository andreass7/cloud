<?php

namespace App\Controllers;

class keluarController extends BaseController
{
    public function index(): string
    {
        return view('content/barangKeluar');
    }
}
