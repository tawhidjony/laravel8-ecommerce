@extends('layouts.frontend.app')

@section('content')
    <div class="row mb-5">
        <div class="col-md-4 mx-auto h-75 d-flex flex-row justify-content-center align-items-center">
            <div class="card shadow">
                <div class="card-body">
                    <div class="login-brand m-3 m-md-0 d-flex justify-content-center align-items-center">
                        <img src="{{asset('assets/frontend/img/ee.png')}}" alt="image" class="w-25">
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h5 class="text-dark my-3 text-center">Sign Up</h5>
                        <!-- username -->
                        <div class="form-group mb-2">
                            <label for="name" class="text-muted">{{ __('User Name') }}</label>
                            <input type="text" id="name" name="name" class="form-control badge-pill bg-light @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Email -->
                        <div class="form-group mb-2">
                            <label for="email" class="text-muted">{{ __('E-Mail Address') }}</label>
                            <input type="email" id="email" name="email" class="form-control badge-pill bg-light @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- password -->
                        <div class="form-group mb-2">
                            <label for="Password" class="text-muted">{{ __('Password') }}</label>
                            <input type="password" name="password" id="Password" class="form-control badge-pill bg-light @error('password') is-invalid @enderror">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- confirm password -->
                        <div class="form-group mb-2">
                            <label for="password-confirm" class="text-muted">{{ __('Confirm Password') }}</label>
                            <input type="password" name="password_confirmation" id="password-confirm" class="form-control badge-pill bg-light">
                        </div>
                        <button type="submit" class="btn btn-primary badge-pill btn-block mt-3">Signup</button>
                        <p class="text-center mt-2 mb-0">
                           Already have account ? <a href="{{route('customer.login')}}">Login</a>
                        </p>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
