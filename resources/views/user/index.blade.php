@extends('admin_layouts.template')

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
                            <li class="breadcrumb-item"><a href="{{URL::to('admin/user')}}">user</a></li>
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
                    <a href="{{ URL::to('admin/user/create')}}" class="btn btn-primary">
                        <span class="bi bi-plus"></span> Tambah
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th class="text-center">Action</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Role</th>
                                <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($list_user) && !empty($list_user))
                                @foreach ($list_user as $user)
                                    <tr>
                                        <td class="text-center">
                                            <a href="{{ URL::to('admin/user/'.$user['id'].'/edit')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Edit Data">
                                                <span class="bi bi-pencil-fill"></span>
                                            </a>
                                            <a href="#" data-bs-toggle="tooltip" onclick="event.preventDefault(); document.getElementById('del-{{ $user['id']}}').submit();" data-bs-placement="bottom" data-bs-original-title="Hapus Data">
                                                <span class="bi bi-trash-fill text-danger"></span>
                                            </a>
                                            <form action="{{ URL::to('admin/user/'.$user['id'])}}" method="post" id="del-{{ $user['id']}}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                        <td>{{$user['name']}}</td>
                                        <td>{{$user['email']}}</td>
                                        <td>{{$user['phone']}}</td>
                                        <td>{{$user['alamat']}}</td>
                                        <td>{{$user['role']}}</td>
                                        <td>{{$user['status']}}</td>
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
