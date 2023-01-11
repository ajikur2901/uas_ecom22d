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