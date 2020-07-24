<!DOCTYPE html>
<html>
<head>
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
</head>
<body>
	<h3>Menu</h3>
	<h5><a href="/menu/create">Tambah data</a></h5>
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
			@foreach($menus as $menu)
			<tr>
				<td>{{$menu->name}}</td>
				<td>{{$menu->category}}</td>
				<td>{{$menu->stock}}</td>
				<td>{{$menu->status ? 'Tersedia' : 'Habis'}}</td>
				<td>{{$menu->price}}</td>
				<td>{{$menu->image ? $menu->image : 'Not Available'}}</td>
				<td>
					<a href="/menu/edit/{{$menu->id}}">Edit</a>
					<form method="post" action="/menu/delete/{{$menu->id}}">
						@csrf @method('DELETE')
						<button>Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>