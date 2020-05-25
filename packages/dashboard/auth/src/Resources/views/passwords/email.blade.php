@extends('auth::layouts.master')
@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

    <form action="{{ route('password.email') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                   id="email">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            @error('email')
            <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
        <div class="row">
            <!-- /.col -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">{{ __('Send Password Reset Link') }}</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <p class="mb-1">
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ url('/') }}">
                {{ __('Login') }}
            </a>
        @endif
    </p>
@endsection