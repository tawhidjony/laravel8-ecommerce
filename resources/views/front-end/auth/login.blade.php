@extends('layouts.frontend.app')

@section('content')
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card shadow">
                <div class="card-body">
                    <!-- Brand -->
                    <div class="login-brand m-3 m-md-0 d-flex justify-content-center align-items-center">
                        <img src="{{asset('assets/frontend/img/ee.png')}}" alt="image" class="w-25">
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h5 class="text-dark my-3 text-center">Sign In</h5>
                        <!-- Email -->
                        <div class="form-group mb-2">
                            <label for="email" class="text-muted">{{ __('E-Mail Address') }}</label>
                            <input type="email" id="email" name="email" class="form-control badge-pill bg-light @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Passeord -->
                        <div class="form-group mb-2">
                            <label for="Password" class="text-muted">{{ __('Password') }}</label>
                            <input type="password" name="password" id="Password" class="form-control badge-pill bg-light @error('password') is-invalid @enderror">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Remember me checkbox -->
                        <div class="custom-control custom-checkbox">
                            <input id="my-input" class="custom-control-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="my-input" class="custom-control-label"> {{ __('Remember Me') }}</label>
                        </div>

                        <button type="submit" class="btn btn-primary badge-pill btn-block mt-2">Sign in</button>
                            <p class="text-center mt-2 mb-0">
                               Don't have account ? <a href="{{route('customer.register')}}">Signup</a>
                            </p>
                        @if (Route::has('password.request'))
                            <p class="text-center">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </p>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
