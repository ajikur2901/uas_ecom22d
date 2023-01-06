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
                            <li class="breadcrumb-item"><a href="{{URL::to('admin/order')}}">Order</a></li>
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
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th class="text-center">Action</th>
                                <th class="text-center">User</th>
                                <th class="text-center">Tanggal Order</th>
                                <th class="text-center">Total Pembayaran</th>
                                <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($list_order) && !empty($list_order))
                                @foreach ($list_order as $order)
                                    <tr>
                                        <td class="text-center">
                                            <a href="{{ URL::to('admin/order/'.$order['id'].'/edit')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Edit Data">
                                                <span class="bi bi-pencil-fill"></span>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" onclick="event.preventDefault(); document.getElementById('del-{{ $mahasiswa['id']}}').submit();" data-bs-placement="bottom" data-bs-original-title="Hapus Data">
                                                <span class="bi bi-trash-fill text-danger"></span>
                                            </a>
                                            <form action="{{ URL::to('admin/order/'.$order['id'])}}" method="post" id="del-{{ $mahasiswa['id']}}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                        <td class="text-center">{{$order['nim']}}</td>
                                        <td>{{$order['nama']}}</td>
                                        <td>{{$order['tmp_lahir']}}</td>
                                        <td>{{date('d/m/Y',strtotime($order['tgl_lahir']))}}</td>
                                        <td>{{$order['alamat']}}</td>
                                        <td>{{$order['prodi']}}</td>
                                        <td>{{$order['catatan']}}</td>
                                        <td>{{date('d/m/Y H:i:s',strtotime($order['created_at']))}}</td>
                                        <td>{{date('d/m/Y H:i:s',strtotime($order['updated_at']))}}</td>
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
