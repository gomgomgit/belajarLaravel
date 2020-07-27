@extends('layout.app')

@section('title', 'Home')

@section('content')
	<h1>IndieHome</h1>
	<p>{{auth()->check() ? 'Mas Agus Disini' : 'Mana Mas Agus'}}</p>
@endsection
