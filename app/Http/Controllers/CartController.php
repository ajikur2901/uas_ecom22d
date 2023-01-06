<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $data = [
            'list_cart' => Cart::where('user_id', Auth::user()->id)->get(),
            'total' => Cart::getTotalPrice(Auth::user()->id)
        ];

        return view('cart.index', $data);
    }

    public function checkout()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        $total = Cart::getTotalPrice(Auth::user()->id);

        if (!empty($carts)) {
            $data = [
                'status' => 'baru',
                'user_id' => Auth::user()->id,
                'total' => $total
            ];
            DB::beginTransaction();
            try {
                $order = Order::create($data);
                if ($order->exists) {
                    foreach ($carts as $cart) {
                        $detail = [
                            'order_id' => $order->id,
                            'produk_id' => $cart->produk->id,
                            'jumlah' => $cart->jumlah,
                            'harga_satuan' => $cart->produk->harga,
                        ];
                        $orderDetail = OrderDetail::create($detail);
                        if ($orderDetail->exists) {
                            $cart->delete();
                        }
                    }
                }

                DB::commit();
                return redirect('order');
            } catch (\Exception $e) {
                return back()->with('error', 'Opps, Smething Wrong ' . $e->getMessage());
            }
        } else {
            return back()->with('error', 'Cart kosong');
        }
    }

    public function delete($id)
    {
        return back();
    }
}
