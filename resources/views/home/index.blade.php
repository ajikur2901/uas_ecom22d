@extends('layouts.template')
@section('content')
  <!-- carousel -->
  <div class="content-wrapper container">
    <div class="accordion" id="accordionExample">
  <div class="row">
    <div class="col">
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="{{ asset('images/slide6.jpeg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/slide2.jpeg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/slide3.jpeg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
    </div>
  </div>
  <!-- end carousel -->

<!-- kategori produk -->
<div class="content-wrapper container">
    <div class="accordion" id="accordionExample">
<div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center">Kategori Produk</h2>
    </div>
    <!-- kategori pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('kategori/satu') }}">
          <img src="{{asset('images/slide1.jpeg') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
            <p class="card-text">Kategori Pertama</p>
          </a>
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
    </div>
</div>
  <!-- end kategori produk -->

  <!-- produk Promo-->
  <div class="content-wrapper container">
    <div class="accordion" id="accordionExample">
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center">Promo</h2>
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
                <del>Rp. 15.000,00</del>
                <br />
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
                <del>Rp. 15.000,00</del>
                <br />
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
          <img src="{{asset('images/slide3.jpeg') }}" alt="foto produk" class="card-img-top">
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
                <del>Rp. 15.000,00</del>
                <br />
                Rp. 10.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
  <!-- end produk promo -->

  <div class="content-wrapper container">
    <div class="accordion" id="accordionExample">
  <!-- produk Terbaru-->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center">Terbaru</h2>
    </div>
    <!-- produk pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/satu') }}">
          <img src="{{asset('images/slide1.jpeg') }}" alt="foto produk" class="card-img-top">
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
          <img src="{{asset('images/slide3.jpeg') }}" alt="foto produk" class="card-img-top">
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
          <img src="{{asset('images/slide2.jpeg') }}" alt="foto produk" class="card-img-top">
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
    </div>
  </div>
  <!-- end produk terbaru -->

  <!-- tentang toko -->
  <hr>
  <div class="content-wrapper container">
    <div class="accordion" id="accordionExample">
  <div class="row mb-5">
    <div class="col-12 col-lg-6">
      <h3>Tentang Kami</h3>
      <p class="fs-5" style="text-align: justify">Perusahaan ini menyediakan jasa/peralatan peralatan dengan standar keamanan,
          sehingga peserta rafting saat mengarungi jalur atau lintasan di sungai merasa, fun, aman dan nyaman selama aktivitas.
          Peralatan dan perlengkapan yang digunakan sangat penting untuk meminimalis kecelakaan dan kejadian tak terduga lainnya antara lain :
          <ul type="circle">
            <li>Pelampung (life jacket)</li>
            <li>Pelindung Kepala (helm)</li>
            <li>Dayung (Paddle)</li>
            <li>Tas kedap Air (dry bag)</li>
            <li>dst</li>
          </ul>
          Nikmatilah layanan yang disediakan oleh Jogja Adventure Tour sesuai dengan hobi dan keinginan Anda.
          Bersiaplah untuk mengalami petualangan yang tak akan terlupakan dengan Jogja Adventure Tour</p>
    </div>
    <div class="col-12 col-lg-6">
      <img class="img-fluid mb-2" src="{{asset('images/foto-rafting2.jpg')}}" alt="Avatar">
    </div>
    <p class="text-center">
        <a href="{{URL::to('/tentang')}}" class="btn btn-primary">
          Baca Selengkapnya
        </a>      
      </p>
  </div>
    </div>
  </div>
  <div class="content-wrapper container">
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Kontak Pemilik
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body text-black">
        Hubungi : 085643626150 ( Paulus Endarto )
      </div>
      <div class="accordion-body text-black">
        Email : Paulusendarto@gmial.com
      </div>
      <div class="accordion-body text-black">
        Maps : Jl. Laksda Adisucipto Km. 7%2C5 No. 5 Catur Tunggal Depok Sleman Daerah Istimewa Yogyakarta, Ambarukmo, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281
      </div>
    </div>
  </div>
    </div>
  </div>
  <!-- <div class="row mt-4">
    <div class="col">
      <h5 class="text-center">Toko Online Menggunakan Laravel</h5>
      <p>
      Perusahaan ini menyediakan jasa/peralatan peralatan dengan standar keamanan, sehingga peserta rafting saat mengarungi jalur atau lintasan di sungai merasa, fun, aman dan nyaman selama aktivitas. Peralatan dan perlengkapan yang digunakan sangat penting untuk meminimalis kecelakaan dan kejadian tak terduga
      </p>
      <p class="text-center">
        <a href="" class="btn btn-outline-secondary">
          Baca Selengkapnya
        </a>      
      </p>
    </div>
  </div> -->
  <!-- end tentang toko -->

</div>
@endsection