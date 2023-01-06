<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderUserController extends Controller
{
    public function index()
    {
        $data = [
            'list_order' => Order::where('user_id', Auth::user()->id)->get()
        ];

        return view('order_user.index', $data);
    }
}
