@extends('layouts.backend.authentication')

@section('content')
<div class="auth-layout-wrap bg-primary">
    <div class="auth-content row justify-content-center">
        <div class="card o-hidden col-lg-6">
            <div class="row">
                <div class="col-lg">
                    <div class="p-4">

                        <h1 class="text-24 text-center">Expert Systems </h1>
                        <h1 class="mb-3 text-18 text-center"> Vaname Shrimps</h1>
                        <div class="auth-logo text-center mb-4">
                            <img src="{{ asset('assets/backend') }}/images/logo.png">
                        </div>

                        <h2 class="mb-3 text-18">Sign In</h2>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input class="form-control form-control-rounded @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" autofocus>
                                @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control form-control-rounded @error('password') is-invalid @enderror" name="password" id="password" type="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-rounded btn-primary btn-block mt-2">Sign In</button>
                        </form>
                        <div class="mt-3 text-center">
                            <a class="text-muted" href="/register">
                                <u>Register</u>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
