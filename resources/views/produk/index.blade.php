@extends('admin_layouts.template')

@section('custom_css')
    <link rel="stylesheet" href="{{asset('extensions/simple-datatables/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/simple-datatables.css')}}">
@endsection

@section('custom_js')
    <script src="{{asset('extensions/simple-datatables/umd/simple-datatables.js')}}"></script>
    <script src="{{asset('js/pages/simple-datatables.js')}}"></script>
@endsection

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>{{$title}}</h3>
                    <p class="text-subtitle text-muted">{{$deskripsi}}</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{URL::to('admin')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{URL::to('admin/produk')}}">produk</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    <i class="bi bi-file-excel"></i> {{Session::get('error')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <a href="{{ URL::to('admin/produk/create')}}" class="btn btn-primary">
                        <span class="bi bi-plus"></span> Tambah
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Gambar</th>
                                <th class="text-center">Kode</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Stok</th>
                                <th class="text-center">Action</th>
                                <th></th>   
                            </tr>
                        </thead>
                        <tbody>
                  <tr>
                  <td>1</td>
                  <td>
                    <img src="{{ asset('images/slide1.jpg') }}" alt="produk 1" width='150px'>
                    <div class="row mt-2">
                      <div class="col">
                        <input type="file" name="gambar" id="gambar">
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-sm btn-primary">Upload</button>
                      </div>
                    </div>
                  </td>
                  <td>Assalam-1</td>
                  <td>Baju Mahal</td>
                  <td>12 Produk</td>
                  <td>
                    <a href="{{ route('produk.show', 2) }}" class="btn btn-sm btn-primary mr-2 mb-2">
                      Detail
                    </a>
                    <a href="{{ route('produk.edit', 2) }}" class="btn btn-sm btn-primary mr-2 mb-2">
                      Edit
                    </a>
                    <button class="btn btn-sm btn-danger mb-2">
                      Hapus
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <img src="{{ asset('images/slide1.jpg') }}" alt="produk 1" width='150px'>
                    <div class="row mt-2">
                      <div class="col">
                        <input type="file" name="gambar" id="gambar">
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-sm btn-primary">Upload</button>
                      </div>
                    </div>
                  </td>
                  <td>Assalam-2</td>
                  <td>Baju bagus</td>
                  <td>20 Produk</td>
                  <td>
                    <a href="{{ route('produk.show', 2) }}" class="btn btn-sm btn-primary mr-2 mb-2">
                      Detail
                    </a>
                    <a href="{{ route('produk.edit', 2) }}" class="btn btn-sm btn-primary mr-2 mb-2">
                      Edit
                    </a>
                    <button class="btn btn-sm btn-danger mb-2">
                      Hapus
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <img src="{{ asset('images/slide1.jpg') }}" alt="produk 1" width='150px'>
                    <div class="row mt-2">
                      <div class="col">
                        <input type="file" name="gambar" id="gambar">
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-sm btn-primary">Upload</button>
                      </div>
                    </div>
                  </td>
                  <td>Assalam-3</td>
                  <td>Baju Bekas</td>
                  <td>20 Produk</td>
                  <td>
                    <a href="{{ route('produk.show', 2) }}" class="btn btn-sm btn-primary mr-2 mb-2">
                      Detail
                    </a>
                    <a href="{{ route('produk.edit', 2) }}" class="btn btn-sm btn-primary mr-2 mb-2">
                      Edit
                    </a>
                    <button class="btn btn-sm btn-danger mb-2">
                      Hapus
                    </button>
                  </td>
                </tr>
                            <!-- @if (isset($list_produk) && !empty($list_produk))
                                @foreach ($list_produk as $produk)
                                    <tr>
                                        <td class="text-center">
                                            <a href="{{ URL::to('admin/produk/'.$produk['id'].'/edit')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Edit Data">
                                                <span class="bi bi-pencil-fill"></span>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" onclick="event.preventDefault(); document.getElementById('del-{{ $produk['id']}}').submit();" data-bs-placement="bottom" data-bs-original-title="Hapus Data">
                                                <span class="bi bi-trash-fill text-danger"></span>
                                            </a>
                                            <form action="{{ URL::to('admin/produk/'.$produk['id'])}}" method="post" id="del-{{ $produk['id']}}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                        <td>
                                            @if (!empty($produk['foto']))
                                                <img src="{{$produk['foto']}}" alt="{{$produk['nama']}}">
                                            @endif
                                        </td>
                                        <td>{{$produk['nama']}}</td>
                                        <td>{{$produk['kategori']}}</td>
                                        <td class="text-end">{{number_format($produk['jumlah'],2,',','.')}}</td>
                                        <td class="text-end">{{number_format($produk['harga'],2,',','.') }}</td>
                                    </tr>
                                @endforeach
                            @endif -->
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    

@endsection
