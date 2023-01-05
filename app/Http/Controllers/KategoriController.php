<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Kategori',
            'deskripsi' => 'Kategori Produk',
            'list_kategori' => Kategori::all()
        ];

        return view('kategori.index', $data);
    }
}
