	@extends('layout.app')

	@section('head-script')
	<style type="text/css">
		body {
			padding: 20px 100px;
		}
	</style>
	@endsection

	@section('content')

	<h3>Create</h3>
	<form method="post" action="/guardians/store">
		@csrf
		<table border="1" style="width: 100%">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>NIK</td>
				<td><input type="number" name="nik"></td>
			</tr>
			<tr>
				<td>No. Hp</td>
				<td><input type="number" name="phone"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="radio" name="gender" value="l">Laki-laki  <input type="radio" name="gender" value="p">Perempuan</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="birth_date"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="address"></textarea></td>
			</tr>
			<tr>
				<td>Orangtua Kandung</td>
				<td><input type="radio" name="is_parent" value="1">Yes <input type="radio" name="is_parent" value="1">No </td>
			</tr>
		</table>
		<input type="submit" value="Store">
	</form>
	@endsection