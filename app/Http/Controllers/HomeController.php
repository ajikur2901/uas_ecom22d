<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }

    public function tentang()
    {
        return view('home.tentang');
    }

    public function kontak()
    {
        return view('home.kontak');
    }

    public function produk()
    {
        $data = [
            'produk' => Produk::all()
        ];
        return view('home.produk', $data);
    }

    public function produkdetail($id)
    {
        $data = [
            'produk' => Produk::findOrFail($id)
        ];
        return view('home.produkdetail', $data);
    }

    public function kategori()
    {
        $data = [
            'kategori' => Kategori::all()
        ];
        return view('home.kategori', $data);
    }

    public function kategoridetail($nama)
    {
        $data = [
            'produk' => Produk::where('kategori', $nama)->get(),
            'kategori' => $nama
        ];
        return view('home.kategoridetail', $data);
    }
}
