	@extends('layout.app')

	@section('title', 'Guardian')

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
	<h3>Data Wali</h3>
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
				<th>Students</th>
				<th>Action</th>
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
					<td>{{$guardian->students()->count()}}</td>
					<td>
						<button>
							<a href="/guardians/edit/{{$guardian->id}}">Edit</a>
						</button>
						<form action="/guardians/delete/{{$guardian->id}}" method="post">
							@csrf @method('DELETE')
							<button>Delete</button>
						</form>
					</td>


				{{-- 	<td>
						<form action="{{ url('/guardians/delete/'.$guardian->id) }}" method="post">
				        <input type="submit" value="X" id="delete_guardian_{{ $guardian->id }}" class="btn btn-xs">
				    </form>
  				</td> --}}


				</tr>
			@endforeach
		</tbody>
	</table>
	<p><a href="/guardians/create">Create</a></p>
	@endsection

