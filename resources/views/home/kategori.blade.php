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
                                <img src="{{ $item->foto ? asset('images/'.$item->foto) : asset('images/default-img.png') }}" alt="{{$item->nama}}" class="card-img-top">
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
    </div>
    <!-- kategori kedua -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('kategori/dua') }}">
          <img src="{{asset('images/slide2.jpeg') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/dua') }}" class="text-decoration-none">
            <p class="card-text">Kategori Kedua</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori ketiga -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('kategori/tiga') }}">
          <img src="{{asset('images/slide3.jpeg') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/tiga') }}" class="text-decoration-none">
            <p class="card-text">Kategori Ketiga</p>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- end kategori produk -->
  <!-- produk Terbaru-->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center">Terbaru</h2>
    </div>
    <!-- produk pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/satu') }}">
          <img src="{{asset('images/slide4.jpeg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/satu') }}" class="text-decoration-none">
            <p class="card-text">
              Produk Pertama
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                Rp. 10.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- produk kedua -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/dua') }}">
          <img src="{{asset('images/slide5.jpeg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
            <p class="card-text">
              Produk Kedua
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
              Rp. 10.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- produk ketiga -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/tiga') }}">
          <img src="{{asset('images/slide6.jpeg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/tiga') }}" class="text-decoration-none">
            <p class="card-text">
              Produk Ketiga
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
              Rp. 10.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end produk terbaru -->
</div>
@endsection
