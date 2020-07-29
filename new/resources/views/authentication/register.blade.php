@extends('layout.app')

@section('title', 'Register')

@section('head-script')
    <style type="text/css">
    </style>
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/main.css') }}">
@endsection

@section('content')
    <div class="mx-auto my-12 w-1/2 ">
        <div class="col-md-8">
            <div class="text-3xl text-center font-semibold">{{ __('Register') }}</div>

            <form method="POST" action="{{ route('register') }}" class="bg-white shadow-lg hover:shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf

                <div class="my-3">
                    <label for="name" class="text-gray-700 block font-bold">{{ __('Name') }}</label>

                        <input id="name" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="my-3">
                    <label for="email" class="text-gray-700 block font-bold">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="my-3">
                    <label for="password" class="text-gray-700 block font-bold">{{ __('Password') }}</label>


                        <input id="password" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="my-3">
                    <label for="password-confirm" class="text-gray-700 block font-bold">{{ __('Confirm Password') }}</label>


                        <input id="password-confirm" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="my-3 mb-0">

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            {{ __('Register') }}
                        </button>
                </div>
            </form>
        </div>
    </div>
@endsection
