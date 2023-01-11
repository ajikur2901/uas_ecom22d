@extends('layouts.template')

@section('content')
    <div class="content-wrapper container">
        @if (isset($list_order) && !$list_order->isEmpty())
            @foreach ($list_order as $order)
                <div class="card">
                    <div class="card-body">
                        <h5>Tanggal Pemesanan : {{$order->created_at}}</h5>
                        <h5>Status Pesanan : {{$order->status}}</h5>
                        <h5>Total Pembayaran : {{number_format($order->total,2,',','.')}}</h5>
                        @if (!empty($order->orderDetail))
                        <table class="table" aria-describedby="">
                            <thead class="text-center">
                                <th>No.</th>
                                <th>Nama Produk</th>
                                <th>Jumlah</th>
                                <th>Harga Satuan</th>
                                <th>Harga Total</th>
                            </thead>
                            <tbody>
                                @foreach ($order->orderDetail as $key => $detail)
                                    <tr>
                                        <td class="text-center">{{$key+1}}</td>
                                        <td>{{$detail->produk->nama}}</td>
                                        <td class="text-center">
                                            {{$detail->jumlah}}
                                        </td>
                                        <td class="text-end">
                                            {{number_format($detail->harga_satuan,2,',','.')}}
                                        </td>
                                        <td class="text-end">
                                            {{number_format($detail->jumlah * $detail->harga_satuan,2,',','.')}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            @endforeach
        @else 
            <h3 class="text-center">Belum Ada Order</h3>
        @endif
    </div>
@endsection