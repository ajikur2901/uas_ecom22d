<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
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

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Order',
            'deskripsi' => 'Data Detail Order Customer',
            'order' => Order::findOrFail($id),
            'detail' => OrderDetail::where('order_id', $id)->get()
        ];

        return view('order.detail', $data);
    }

    public function kirim($id)
    {
        $order = Order::findOrFail($id);

        $order->status = 'dikirim';

        $order->save();

        return back();
    }

    public function selesai($id)
    {
        $order = Order::findOrFail($id);

        $order->status = 'selesai';

        $order->save();

        return back();
    }

    public function cancel($id)
    {
        $order = Order::findOrFail($id);

        $order->status = 'dibatalkan';

        $order->save();

        return back();
    }
}
