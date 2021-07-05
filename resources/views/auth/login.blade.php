@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white"> {{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" class=" d-flex flex-column gap-2">
                            @csrf

                            <div class="form-group">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>


                                <input id="email" type="email"
                                    class="form-control rounded-0 @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="password" class="form-label">{{ __('Password') }}</label>

                                <input id="password" type="password"
                                    class="form-control rounded-0 @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary text-white rounded-0 btn-block w-100">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
