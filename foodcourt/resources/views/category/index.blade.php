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
		}
		th, td {
			padding: 3px;
		}
	</style>
@endsection

@section('content')
	<h3>Category</h3>
	{{-- <h5><a href="/categories/create">Tambah data</a></h5> --}}
	<h5><a href="{{ route('createCategory') }}">Tambah data</a></h5>
	<table border="3">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($datas as $data)
			<tr>
				<td>{{$data->name}}</td>
				<td>
					{{-- <a href="/categories/edit/{{$data->id}}">Edit</a> --}}
					<a href="{{ route('editCategory', ['id' => $data->id ]) }}">Edit</a>
					<form method="post" action="{{ route('deleteCategory', ['id' => $data->id ]) }}">
						@csrf @method('DELETE')
						<button>Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection
