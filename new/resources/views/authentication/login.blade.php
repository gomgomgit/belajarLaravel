

@extends('layout.app')

@section('title', 'Login')

@section('head-script')
    <style type="text/css">
    </style>
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/main.css') }}">
@endsection

@section('content')
    <div class="mx-auto my-12 w-1/2 ">
        <div class=" text-3xl text-center font-semibold">{{ __('Login') }}</div>

        <form method="POST" action="{{ route('login') }}" class="bg-white shadow-lg hover:shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <div class="my-3">
                <label for="email" class="">
                    <div class="w-1/2 text-gray-700 block font-bold">
                        {{ __('E-Mail Address') }}
                    </div>
                    <div>
                        <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                </label>
            </div>

            <div class="my-3">
                <label for="password" class="">
                    <div class="w-1/2 text-gray-700 block font-bold">
                        {{ __('Password') }}
                    </div>
                    <div>
                        <input id="password" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                </label>
            </div>

            <div class="">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="flex justify-between mt-3">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="text-blue-700 font-bold text-l hover:text-blue-800" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
@endsection
