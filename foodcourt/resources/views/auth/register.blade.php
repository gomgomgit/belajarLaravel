@extends('layout.app')

@section('head-script')
	<title>Register</title>

	<style type="text/css">
		body {
			padding: 10px 100px;
		}
		table {
			width: 100%;
			border-collapse: collapse;
			border: 2px solid black;
		}
		th, td {
			padding: 5px;
			border: 2px solid black;
		}
		td.no-border {
			border-left-style: hidden;
		}
	</style>
@endsection

@section('content')
	<h3>Register</h3>
	<form method="post" action="/register-process">
		@csrf
		<table>
			<tr>
				<td>Nama</td>
				<td class="no-border">:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td class="no-border">:</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td class="no-border">:</td>
				<td><input type="password" name="password"></td>
			</tr>
		</table>
		<br>
		<input type="submit" value="Submit">
	</form>
@endsection
