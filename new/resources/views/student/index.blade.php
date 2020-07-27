	@extends('layout.app')

	@section('title', 'Student')

	@section('head-script')
	<style type="text/css">
		body {
			padding: 20px 100px;
		}
		td, th {
			padding: 5px;
		}
	</style>
	@endsection


	@section('content')
	<h3>Daftar Siswa</h3>
	<a href="/students/create">Tambah Data</a>
	<table border="2" style="width: 100%">
		<thead>
			<tr>
				<th>name</th>
				<th>guardian</th>
				<th>nis</th>
				<th>gender</th>
				<th>birth date</th>
				<th>address</th>
				<th>class</th>
				<th>majors</th>
				<th>height</th>
				<th>weight</th>
				<th>action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($students as $student)
				<tr>
					<td>{{$student->name}}</td>
					<td>{{$student->guardian->name }}</td>
					<td>{{$student->nis}}</td>
					<td>{{$student->gender}}</td>
					<td>{{$student->birth_date}}</td>
					<td>{{$student->address}}</td>
					<td>{{$student->class}}</td>
					<td>{{$student->majors}}</td>
					<td>{{$student->height}}</td>
					<td>{{$student->weight}}</td>
					<td>
						<button>
							<a href="/students/edit/{{$student->id}}">Edit</a>
						</button>
						<form action="/students/delete/{{$student->id}}" method="post">
							@csrf @method('DELETE')
							<button>Delete</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	@endsection
