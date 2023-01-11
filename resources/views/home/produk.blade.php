@extends('layouts.template')

@section('content')
<section class="section-products">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
                <div class="header">
                    <h2>Daftar Produk Dan Popular Produk</h3>
                    <h4>================================</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @if (!empty($produk))
                @foreach ($produk as $item)
                    <!-- Single Product -->
                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm">
                            <a href="{{URL::to('/produk/'.$item->id)}}">
                                <img src="{{ $item->foto ? asset('images/slide1.jpeg') : asset('images/default-img.png') }}" alt="{{$item->nama}}" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <a href="{{ URL::to('kategori/'.$item->kategori) }}" class="text-decoration-none">
                                    <p class="card-text">{{$item->kategori}}</p>
                                </a>
                                <a href="{{ URL::to('produk/'.$item->id) }}" class="text-decoration-none">
                                    <h3 class="product-title">{{$item->nama}}</h3>
                                    <h4 class="product-price">Rp. {{number_format($item->harga,2,',','.')}}</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
@endsection