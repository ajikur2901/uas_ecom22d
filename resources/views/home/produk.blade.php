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
						<!-- Single Product -->
						<div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="{{URL::to('/produkdetail')}}">
                                <img src="{{asset('images/slide1.jpeg') }}" alt="foto kategori" class="card-img-top">
                                </a>
                                <div class="card-body">
                                <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                                    <p class="card-text">Kategori Pertama</p>
                                    <h3 class="product-title">Alat Dayung</h3>
                                    <h4 class="product-old-price">$79.99</h4>
                                    <h4 class="product-price">$49.99</h4>
                                </a>
                                </div>
                            </div>
                        </div>
						<!-- Single Product -->
						<div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="{{ URL::to('kategori/satu') }}">
                                <img src="{{asset('images/slide2.jpeg') }}" alt="foto kategori" class="card-img-top">
                                </a>
                                <div class="card-body">
                                <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                                    <p class="card-text">Kategori Kedua</p>
                                    <h3 class="product-title">Perahu Karet</h3>
                                    <h4 class="product-old-price">$79.99</h4>
                                    <h4 class="product-price">$49.99</h4>
                                </a>
                                </div>
                            </div>
                        </div>
						<!-- Single Product -->
						<div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="{{ URL::to('kategori/satu') }}">
                                <img src="{{asset('images/slide3.jpeg') }}" alt="foto kategori" class="card-img-top">
                                </a>
                                <div class="card-body">
                                <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                                    <p class="card-text">Kategori Ketiga</p>
                                    <h3 class="product-title">Helm Protector</h3>
                                    <h4 class="product-old-price">$79.99</h4>
                                    <h4 class="product-price">$49.99</h4>
                                </a>
                                </div>
                            </div>
                        </div>
						<!-- Single Product -->
						<div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="{{ URL::to('kategori/satu') }}">
                                <img src="{{asset('images/slide4.jpeg') }}" alt="foto kategori" class="card-img-top">
                                </a>
                                <div class="card-body">
                                <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                                    <p class="card-text">Kategori Keempat</p>
                                    <h3 class="product-title">Safety Vest Quard</h3>
                                    <h4 class="product-old-price">$79.99</h4>
                                    <h4 class="product-price">$49.99</h4>
                                </a>
                                </div>
                            </div>
                        </div>
						<!-- Single Product -->
						<div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="{{ URL::to('kategori/satu') }}">
                                <img src="{{asset('images/slide1.jpeg') }}" alt="foto kategori" class="card-img-top">
                                </a>
                                <div class="card-body">
                                <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                                    <p class="card-text">Kategori Kelima</p>
                                    <h3 class="product-title">Alat Dayung</h3>
                                    <h4 class="product-old-price">$79.99</h4>
                                    <h4 class="product-price">$49.99</h4>
                                </a>
                                </div>
                            </div>
                        </div>
						<!-- Single Product -->
						<div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="{{ URL::to('kategori/satu') }}">
                                <img src="{{asset('images/slide2.jpeg') }}" alt="foto kategori" class="card-img-top">
                                </a>
                                <div class="card-body">
                                <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                                    <p class="card-text">Kategori Keenam</p>
                                    <h3 class="product-title">Perahu Karet</h3>
                                    <h4 class="product-old-price">$79.99</h4>
                                    <h4 class="product-price">$49.99</h4>
                                </a>
                                </div>
                            </div>
                        </div>
						<!-- Single Product -->
						<div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="{{ URL::to('kategori/satu') }}">
                                <img src="{{asset('images/slide3.jpeg') }}" alt="foto kategori" class="card-img-top">
                                </a>
                                <div class="card-body">
                                <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                                    <p class="card-text">Kategori Ketujuh</p>
                                    <h3 class="product-title">Helm Protector</h3>
                                    <h4 class="product-old-price">$79.99</h4>
                                    <h4 class="product-price">$49.99</h4>
                                </a>
                                </div>
                            </div>
                        </div>
						<!-- Single Product -->
						<div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="{{ URL::to('kategori/satu') }}">
                                <img src="{{asset('images/slide4.jpeg') }}" alt="foto kategori" class="card-img-top">
                                </a>
                                <div class="card-body">
                                <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                                    <p class="card-text">Kategori Kedelapan</p>
                                    <h3 class="product-title">Safety Vest Quard</h3>
                                    <h4 class="product-old-price">$79.99</h4>
                                    <h4 class="product-price">$49.99</h4>
                                </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product -->
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="{{ URL::to('kategori/satu') }}">
                                <img src="{{asset('images/slide5.jpeg') }}" alt="foto kategori" class="card-img-top">
                                </a>
                                <div class="card-body">
                                <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                                    <p class="card-text">Kategori Kesembilan</p>
                                    <h3 class="product-title">Sepatu Karet</h3>
                                    <h4 class="product-old-price">$79.99</h4>
                                    <h4 class="product-price">$49.99</h4>
                                </a>
                                </div>
                            </div>
                        </div>
				</div>
		</div>
</section>
@endsection