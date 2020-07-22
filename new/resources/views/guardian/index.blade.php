<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="1" style="width: 100%">
		<thead>
			<tr>
				<th>Nama</th>
				<th>NIK</th>
				<th>No.Hp</th>
				<th>Gender</th>
				<th>Tanggal Lahir</th>
				<th>Alamat</th>
				<th>Orangtua Kandung</th>
			</tr>
		</thead>
		<tbody>
			@foreach($guardians as $guardian)
				<tr>
					<td>{{$guardian->name}}</td>
					<td>{{$guardian->nik}}</td>
					<td>{{$guardian->phone}}</td>
					<td>{{$guardian->gender == 'l' ? 'Laki-laki' : 'Perempuan'}}</td>
					<td>{{$guardian->birth_date}}</td>
					<td>{{$guardian->address}}</td>
					<td>{!!$guardian->is_parent ? 'v' : 'x'!!}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>