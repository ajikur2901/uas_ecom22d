<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Produk',
            'deskripsi' => 'List Produk',
            'list_produk' => Produk::all(),
        ];

        return view('produk.index', $data);
    }
}
