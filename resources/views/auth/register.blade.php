@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" class="d-flex gap-2 flex-column">
                            @csrf

                            <div class="form-group">
                                <label for="name" class="form-label">{{ __('Name') }}</label>


                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>


                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="password" class="form-label">{{ __('Password') }}</label>


                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-block w-100 btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
