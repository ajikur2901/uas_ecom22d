<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Produk',
            'deskripsi' => 'List Produk'
        ];

        return view('produk.index', $data);
    }
}
