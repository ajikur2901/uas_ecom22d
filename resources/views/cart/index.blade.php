@extends('layouts.template')

@section('content')
    <div class="content-wrapper container">
        @if (Session::has('error'))
            <div class="alert alert-danger">
                <i class="bi bi-file-excel"></i> {{Session::get('error')}}
            </div>
        @endif
        <div class="row">
            @if (isset($list_cart) && !$list_cart->isEmpty())
                <div class="col-lg-8 col-md-6">
                    @foreach ($list_cart as $cart)
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <img src="" alt="{{$cart->produk->nama}}">
                                    </div>
                                    <div class="col">
                                        <h5>{{$cart->produk->nama}}</h5>
                                    </div>
                                    <div class="col-lg-1">
                                        <h5>{{$cart->jumlah}}</h5>
                                    </div>
                                    <div class="col-lg-3">
                                        <h5>{{number_format($cart->produk->harga * $cart->jumlah,2,',','.')}}</h5>
                                    </div>
                                    <div class="col-lg-1">
                                        <a href="{{ URL::to('')}}" class="">
                                            <span class="bi bi-trash h2 text-danger"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p>Nama</p>
                                    <p class="h5">{{Auth::user()->name}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p>Tujuan</p>
                                    <p class="h5">{{Auth::user()->alamat}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p>Phone</p>
                                    <p class="h5">{{Auth::user()->phone}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p>E-mail</p>
                                    <p class="h5">{{Auth::user()->email}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <h3>Total</h3>
                                    <h5>Rp. {{number_format($total,2,',','.')}}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="{{URL::to('cart/checkout')}}" class="btn btn-primary btn-block btn-lg">
                                        Checkout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-lg-12">
                    <h3>Cart Kosong</h3>
                </div>
            @endif
        </div>
    </div>
@endsection