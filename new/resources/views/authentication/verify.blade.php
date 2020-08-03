
@extends('layout.app')

@section('title', 'Login')

@section('head-script')
    <style type="text/css">
    </style>
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/main.css') }}">
@endsection

@section('content')
<div class="w-full">
    <div class="mx-auto w-1/2 my-12">
        <div class="border-2 border-black">
            <div class="font-semibold text-2xl border-b-2 border-black p-4">{{ __('Verify Your Email Address') }}</div>

            <div class="p-4">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="text-blue-700">{{ __('click here to request another') }}</button>.
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
