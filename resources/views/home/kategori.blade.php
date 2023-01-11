@extends('layouts.template')

@section('content')
<section class="section-products">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
                <div class="header">
                    <h2>Daftar Kategori</h3>
                    <h4>================================</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @if (!empty($kategori))
                @foreach ($kategori as $item)
                    <!-- Single Product -->
                    <div class="col-md-3">
                        <div class="card mb-4 shadow-sm">
                            <a href="{{URL::to('/kategori/'.$item->nama)}}">
                                <img src="{{ $item->foto ? asset('images/slide1.jpeg') : asset('images/default-img.png') }}" alt="{{$item->nama}}" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <a href="{{ URL::to('kategori/'.$item->nama) }}" class="text-decoration-none">
                                    <h3 class="product-title">{{$item->nama}}</h3>
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