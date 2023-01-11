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
                                <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($list_order) && !empty($list_order))
                                @foreach ($list_order as $order)
                                    <tr>
                                        <td class="text-center">
                                            <a href="{{ URL::to('admin/order/'.$order['id'].'/detail')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Dikirim">
                                                <span class="bi bi-cart-fill text-primary"></span>
                                            </a>
                                            @if ($order->status == "baru")
                                                <a href="{{ URL::to('admin/order/'.$order['id'].'/kirim')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Dikirim">
                                                    <span class="bi bi-send-fill text-primary"></span>
                                                </a>
                                            @endif
                                            @if ($order->status == "dikirim")
                                                <a href="{{ URL::to('admin/order/'.$order['id'].'/selesai')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Selesai">
                                                    <span class="bi bi-check-circle-fill text-success"></span>
                                                </a>
                                            @endif
                                            @if ($order->status == "baru")
                                                <a href="{{ URL::to('admin/order/'.$order['id'].'/cancel')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Dibatalkan">
                                                    <span class="bi bi-trash-fill text-danger"></span>
                                                </a>
                                            @endif
                                        </td>
                                        <td class="text-center">{{$order->user->name}}</td>
                                        <td>{{date('d/m/Y H:i:s',strtotime($order->created_at))}}</td>
                                        <td>{{$order->status}}</td>
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
