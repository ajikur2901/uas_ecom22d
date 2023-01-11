<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'deskripsi' => 'Dashboard',
            'produk' => Produk::all(),
            'penjualan' => Order::getLastYear()
        ];

        return view('dashboard.index', $data);
    }
}
