@extends('layout.app')

@section('head-script')
	<title>Menu</title>

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
	<h3>Menu</h3>
	<h5><a href="/menus/create">Tambah data</a></h5>
	<table border="3">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Kategori</th>
				<th>Stok</th>
				<th>Status</th>
				<th>Harga</th>
				<th>Gambar</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($datas as $data)
			<tr>
				<td>{{$data->name}}</td>
				<td>{{$data->category->name}}</td>
				<td>{{$data->stock}}</td>
				<td>{{$data->status ? 'Tersedia' : 'Habis'}}</td>
				<td>{{$data->price}}</td>
				<td>{{$data->image ? $data->image : 'Not Available'}}</td>
				<td>
					<a href="/menus/edit/{{$data->id}}">Edit</a>
					<form method="post" action="/menus/delete/{{$data->id}}">
						@csrf @method('DELETE')
						<button>Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection
