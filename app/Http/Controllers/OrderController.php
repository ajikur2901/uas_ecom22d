<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $data = [
            'title' => 'Order',
            'deskripsi' => 'Data Order Customer',
            'orders' => Order::all()
        ];

        return view('order.index', $data);
    }
}
