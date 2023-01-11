<div class="row">
    @if (!empty($produk_promo))
        @foreach ($produk_promo as $item)
            <!-- Single Product -->
            <div class="col-md-3 col-sm-6">
                <div class="card mb-4 shadow-sm">
                    <a href="{{URL::to('/produk/'.$item->id)}}">
                        <img src="{{ $item->foto ? asset('images/'.$item->foto) : asset('images/default-img.png') }}" alt="{{$item->nama}}" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('kategori/'.$item->kategori) }}" class="text-decoration-none">
                            <p class="card-text">{{$item->kategori}}</p>
                        </a>
                        <a href="{{ URL::to('produk/'.$item->id) }}" class="text-decoration-none">
                            <h3 class="product-title">{{$item->nama}}</h3>
                            <h4 class="product-price text-end text-decoration-line-through text-danger">Rp. {{number_format($item->harga + ($item->harga * 10/9),2,',','.')}}</h4>
                            <h4 class="product-price text-end">Rp. {{number_format($item->harga,2,',','.')}}</h4>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>