@extends('layouts.template')

@section('content')
    <div class="content-wrapper container">
        
        @if (isset($list_cart) && !empty($list_cart))
            @foreach ($list_cart as $cart)
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="">
                                <img src="" alt="{{$cart->produk->nama}}">
                            </div>
                            <div class="flex-grow-1">
                                <h2>{{$cart->produk->nama}}</h2>
                            </div>
                            <div class="">
                                <h2>{{$cart->jumlah}}</h2>
                            </div>
                            <div>
                                <a href="{{ URL::to('')}}" class="">
                                    <span class="bi bi-trash h2"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection