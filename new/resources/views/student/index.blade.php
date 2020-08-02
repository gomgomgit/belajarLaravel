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
	<link rel="stylesheet" type="text/css" href="{{ mix('/css/main.css') }}">
	@endsection


	@section('content')
	<h3 class="text-3xl font-bold my-5">Daftar Siswa</h3>
	<a href="/students/create" class="text-white bg-blue-600 px-3 py-2 font-bold my-3 rounded">+ Tambah Data</a>
	<table class="w-full my-4">
		<thead>
			<tr>
				<th class="border border-gray-400">name</th>
				<th class="border border-gray-400">guardian</th>
				<th class="border border-gray-400">nis</th>
				<th class="border border-gray-400">gender</th>
				<th class="border border-gray-400">birth date</th>
				<th class="border border-gray-400">address</th>
				<th class="border border-gray-400">class</th>
				<th class="border border-gray-400">majors</th>
				<th class="border border-gray-400">height</th>
				<th class="border border-gray-400">weight</th>
				<th class="border border-gray-400">action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($students as $student)
				<tr>
					<td class="border border-gray-400">{{$student->name}}</td>
					<td class="border border-gray-400">{{$student->guardian->name}}</td>
					<td class="border border-gray-400">{{$student->nis}}</td>
					<td class="border border-gray-400">{{$student->gender}}</td>
					<td class="border border-gray-400">{{$student->birth_date}}</td>
					<td class="border border-gray-400">{{$student->address}}</td>
					<td class="border border-gray-400">{{$student->class}}</td>
					<td class="border border-gray-400">{{$student->majors}}</td>
					<td class="border border-gray-400">{{$student->height}}</td>
					<td class="border border-gray-400">{{$student->weight}}</td>
					<td class="border border-gray-400">
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
