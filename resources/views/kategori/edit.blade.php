@extends('admin_layouts.template')

@section('content')
    <div class="content-wrapper container">
        <div class="card">
            <div class="card-body">
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
                <form method="POST" action="{{ URL::to('admin/kategori/'.$kategori->id) }}">
                    @method('PATCH')
                    @csrf
                    
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control  @error('nama') is-invalid @enderror" placeholder="nama" name="nama" value="{{ $kategori->nama }}" required autocomplete="nama">
                        <div class="form-control-icon">
                            <i class="bi bi-tags-fill"></i>
                        </div>

                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <button class="btn btn-primary shadow-lg mt-5">Simpan</button>
                </form>
            </div>
        </div>

    </div>
@endsection