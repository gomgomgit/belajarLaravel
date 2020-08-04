@extends('layout.app')

@section('head-script')
	<title>Category</title>

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
	<h3>Tambah Category</h3>
	<form method="post" action="{{ route('storeCategory') }}">
		@csrf
		<table>
			<tr>
				<td>Nama</td>
				<td class="no-border">:</td>
				<td><input type="text" name="name"></td>
			</tr>
		</table>
		<br>
		<input type="submit" value="Submit">
	</form>
@endsection
