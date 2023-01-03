@extends('layouts.auth')

@section('content')
    <div class="auth-logo">
        <a href="index.html"><img src="{{asset('images/logo/logo.svg')}}" alt="Logo"></a>
    </div>
    <h1 class="auth-title">Sign Up</h1>
    <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" class="form-control form-control-xl @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
            <input type="text" class="form-control form-control-xl @error('name') is-invalid @enderror" placeholder="name" name="name" value="{{ old('name') }}" required autocomplete="name">
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
            <input type="text" class="form-control form-control-xl @error('phone') is-invalid @enderror" placeholder="phone" name="phone" value="{{ old('phone') }}" required >
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
            <input type="text" class="form-control form-control-xl @error('alamat') is-invalid @enderror" placeholder="alamat" name="alamat" value="{{ old('alamat') }}">
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
            <input type="password" class="form-control form-control-xl  @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
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
            <input type="password" class="form-control form-control-xl @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password">
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>

            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
    </form>
    <div class="text-center mt-5 text-lg fs-4">
        <p class='text-gray-600'>Already have an account? <a href="{{ URL::to('login')}}" class="font-bold">Log
                in</a>.</p>
    </div>
@endsection