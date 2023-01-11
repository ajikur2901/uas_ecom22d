@extends('admin_layouts.template')

@section('custom_css')
    <link rel="stylesheet" href="{{asset('extensions/simple-datatables/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/simple-datatables.css')}}">
@endsection

@section('custom_js')
    <script src="{{asset('extensions/simple-datatables/umd/simple-datatables.js')}}"></script>
    <script src="{{asset('js/pages/simple-datatables.js')}}"></script>
@endsection

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>{{$title}}</h3>
                    <p class="text-subtitle text-muted">{{$deskripsi}}</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{URL::to('admin')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{URL::to('admin/order')}}">Order</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <a href="{{ URL::to('admin/order')}}" class="btn btn-danger">
                        <span class="bi bi-arrow-left-circle"></span> Back
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th class="text-center">Nama Produk</th>
                                <th class="text-center">Jumlah</th>
                                <th class="text-center">Harga Satuan</th>
                                <th class="text-center">Harga Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($detail) && !empty($detail))
                                @foreach ($detail as $cart)
                                    
                                        <td class="text-center">{{$cart->produk->nama}}</td>
                                        <td class="text-center">{{number_format($cart->jumlah,2,'.',',')}}</td>
                                        <td class="text-end">{{number_format($cart->harga_satuan,2,'.',',')}}</td>
                                        <td class="text-end">{{number_format($cart->jumlah * $cart->harga_satuan,2,'.',',')}}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
