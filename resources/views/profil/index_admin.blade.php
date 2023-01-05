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
                <form method="POST" action="{{ URL::to('admin/profil/update/'.$user->id) }}">
                    @method('PATCH') 
                    @csrf
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control  @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control  @error('name') is-invalid @enderror" placeholder="name" name="name" value="{{ $user->name }}" required autocomplete="name">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control  @error('phone') is-invalid @enderror" placeholder="phone" name="phone" value="{{ $user->phone }}" required >
                        <div class="form-control-icon">
                            <i class="bi bi-phone"></i>
                        </div>

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control  @error('alamat') is-invalid @enderror" placeholder="alamat" name="alamat" value="{{ $user->alamat }}">
                        <div class="form-control-icon">
                            <i class="bi bi-map"></i>
                        </div>

                        @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control   @error('password') is-invalid @enderror" placeholder="Password" name="password" autocomplete="new-password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control  @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>

                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-lg shadow-lg mt-5">Simpan</button>
                </form>
            </div>
        </div>

    </div>
@endsection