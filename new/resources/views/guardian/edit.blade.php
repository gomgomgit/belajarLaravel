
	@extends('layout.app')

	@section('title', 'Guardian')

	@section('head-script')
	<style type="text/css">
		body {
			padding: 20px 100px;
		}
	</style>
	@endsection

	@section('content')
	<h3>Create</h3>

	@if($errors->any())
		<hr>
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
		<hr>
	@endif

	<form method="post" action="/guardians/update/{{$guardian->id}}">
		@csrf
		@method('PUT')
		<table border="1" style="width: 100%">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="name" value="{{ old('name', $guardian->name ) }}"></td>
			</tr>
			<tr>
				<td>NIK</td>
				<td><input type="number" name="nik" value="{{ old('nik', $guardian->nik ) }}"></td>
			</tr>
			<tr>
				<td>No. Hp</td>
				<td><input type="number" name="phone" value="{{ old('phone', $guardian->phone ) }}"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="l" {{ old('gender', $guardian->gender =='l'?'checked':'' ) }}>Laki-laki
					<input type="radio" name="gender" value="p" {{ old('gender', $guardian->gender =='p'?'checked':'') }}>Perempuan
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="birth_date" value="{{ old('birth_date', $guardian->birth_date ) }}"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="address">{{ old('address', $guardian->address ) }}</textarea></td>
			</tr>
			<tr>
				<td>Orangtua Kandung</td>
				<td>
					<input type="radio" name="is_parent" value="1" {{ old('is_parent',  $guardian->is_parent == '1' ? 'checked' : '' ) }}>Yes
					<input type="radio" name="is_parent" value="0" {{ old('is_parent', $guardian->is_parent == '0' ? 'checked' : '' ) }}>No
				</td>
			</tr>
		</table>
		<input type="submit" value="Update">
	</form>
	@endsection
