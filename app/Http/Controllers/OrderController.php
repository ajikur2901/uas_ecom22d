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
            'list_order' => Order::all()
        ];

        return view('order.index', $data);
    }
}
