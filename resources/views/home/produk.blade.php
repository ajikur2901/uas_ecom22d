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
                                <img src="{{asset('images/slide1.jpg') }}" alt="foto kategori" class="card-img-top">
                                </a>
                                <div class="card-body">
                                <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                                    <p class="card-text">Produk Pertama</p>
                                    <h3 class="product-title">Here Product Title</h3>
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
                                <img src="{{asset('images/slide1.jpg') }}" alt="foto kategori" class="card-img-top">
                                </a>
                                <div class="card-body">
                                <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                                    <p class="card-text">Produk Pertama</p>
                                    <h3 class="product-title">Here Product Title</h3>
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
                                <img src="{{asset('images/slide1.jpg') }}" alt="foto kategori" class="card-img-top">
                                </a>
                                <div class="card-body">
                                <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                                    <p class="card-text">Produk Pertama</p>
                                    <h3 class="product-title">Here Product Title</h3>
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
                                <img src="{{asset('images/slide1.jpg') }}" alt="foto kategori" class="card-img-top">
                                </a>
                                <div class="card-body">
                                <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                                    <p class="card-text">Produk Pertama</p>
                                    <h3 class="product-title">Here Product Title</h3>
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
                                <img src="{{asset('images/slide1.jpg') }}" alt="foto kategori" class="card-img-top">
                                </a>
                                <div class="card-body">
                                <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                                    <p class="card-text">Produk Pertama</p>
                                    <h3 class="product-title">Here Product Title</h3>
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
                                <img src="{{asset('images/slide1.jpg') }}" alt="foto kategori" class="card-img-top">
                                </a>
                                <div class="card-body">
                                <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                                    <p class="card-text">Produk Pertama</p>
                                    <h3 class="product-title">Here Product Title</h3>
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
                                <img src="{{asset('images/slide1.jpg') }}" alt="foto kategori" class="card-img-top">
                                </a>
                                <div class="card-body">
                                <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                                    <p class="card-text">Produk Pertama</p>
                                    <h3 class="product-title">Here Product Title</h3>
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
                                <img src="{{asset('images/slide1.jpg') }}" alt="foto kategori" class="card-img-top">
                                </a>
                                <div class="card-body">
                                <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                                    <p class="card-text">Produk Pertama</p>
                                    <h3 class="product-title">Here Product Title</h3>
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
                                <img src="{{asset('images/slide1.jpg') }}" alt="foto kategori" class="card-img-top">
                                </a>
                                <div class="card-body">
                                <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                                    <p class="card-text">Produk Pertama</p>
                                    <h3 class="product-title">Here Product Title</h3>
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