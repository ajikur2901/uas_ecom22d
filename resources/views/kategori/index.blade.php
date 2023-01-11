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
                            <li class="breadcrumb-item"><a href="{{URL::to('admin/kategori')}}">kategori</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            @if ($message = Session::get('error'))
                <div class="alert alert-warning">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <a href="{{ URL::to('admin/kategori/create')}}" class="btn btn-primary">
                        <span class="bi bi-plus"></span> Tambah
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th class="text-center" style="max-width: 50px">Action</th>
                                <th class="text-center" style="max-width: 250px;">Foto</th>
                                <th class="text-center">Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($list_kategori) && !empty($list_kategori))
                                @foreach ($list_kategori as $kategori)
                                    <tr>
                                        <td class="text-center">
                                            <a href="{{ URL::to('admin/kategori/'.$kategori['id'].'/edit')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Edit Data">
                                                <span class="bi bi-pencil-fill"></span>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" onclick="event.preventDefault(); document.getElementById('del-{{ $kategori['id']}}').submit();" data-bs-placement="bottom" data-bs-original-title="Hapus Data">
                                                <span class="bi bi-trash-fill text-danger"></span>
                                            </a>
                                            <form action="{{ URL::to('admin/kategori/'.$kategori['id'])}}" method="post" id="del-{{ $kategori['id']}}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                        <td>
                                            @if (!empty($kategori['foto']))
                                            <img src="{{asset('images/'.$kategori->foto)}}" alt="{{$kategori['nama']}}" class="img-fluid" style="max-width: 200px">
                                            @endif
                                        </td>
                                        <td>{{$kategori['nama']}}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    

@endsection
