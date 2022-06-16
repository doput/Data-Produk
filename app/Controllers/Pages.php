<?php

namespace App\Controllers;

use App\Models\Model_Produk;
use CodeIgniter\Model;

class Pages extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }

    public function produk()
    {
        $produk = new Model_Produk();

        $data = [
            'judul' => 'Data Produk',
            'produk' => $produk->getAllData()
        ];
        return view('pages/produk');
    }
}
