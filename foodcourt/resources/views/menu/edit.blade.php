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
	<h3>Tambah Menu</h3>
	<form method="post" action="/menus/update/{{$data->id}}">
		@method('PUT')
		@csrf
		<table>
			<tr>
				<td>Nama</td>
				<td class="no-border">:</td>
				<td><input type="text" name="name" value="{{$data->name}}"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td class="no-border">:</td>
				<td>
					<select name="category_id">
						@foreach($categories as $category)
							<option value="{{$category->id}}">{{$category->name}}</option>
						@endforeach
					</select>
				</td>
			</tr>
			<tr>
				<td>Stok</td>
				<td class="no-border">:</td>
				<td><input type="number" name="stock" value="{{$data->stock}}"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td class="no-border">:</td>
				<td>
					<input type="radio" name="status" value="1" {{$data->status?'checked':''}}>Tersedia
					<input type="radio" name="status" value="0" {{$data->status?'':'checked'}}>Belum Tersedia
				</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td class="no-border">:</td>
				<td><input type="number" name="price" value="{{$data->price}}"></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td class="no-border">:</td>
				<td><input type="file" name="image" value="{{$data->image}}"></td>
			</tr>
		</table>
		<br>
		<input type="submit" value="Submit">
	</form>
@endsection
