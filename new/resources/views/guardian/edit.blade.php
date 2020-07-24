<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {
			padding: 20px 100px;
		}
	</style>
</head>
<body>

	<h3>Create</h3>
	<form method="post" action="/guardians/update/{{$guardian->id}}">
		@csrf
		@method('PUT')
		<table border="1" style="width: 100%">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="name" value="{{ $guardian->name }}"></td>
			</tr>
			<tr>
				<td>NIK</td>
				<td><input type="number" name="nik" value="{{ $guardian->nik }}"></td>
			</tr>
			<tr>
				<td>No. Hp</td>
				<td><input type="number" name="phone" value="{{ $guardian->phone }}"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="l" {{ $guardian->gender =='l'?'checked':''}}>Laki-laki
					<input type="radio" name="gender" value="p" {{ $guardian->gender =='p'?'checked':''}}>Perempuan
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="birth_date" value="{{$guardian->birth_date}}"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="address">{{$guardian->address}}</textarea></td>
			</tr>
			<tr>
				<td>Orangtua Kandung</td>
				<td>
					<input type="radio" name="is_parent" value="1" {{$guardian->is_parent?'checked':''}}>Yes
					<input type="radio" name="is_parent" value="0" {{$guardian->is_parent?'':'checked'}}>No
				</td>
			</tr>
		</table>
		<input type="submit" value="Update">
	</form>

</body>
</html>