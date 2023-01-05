<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $data = [
            'list_cart' => Cart::where('user_id', Auth::user()->id)->get()
        ];

        return view('cart.index', $data);
    }
}
