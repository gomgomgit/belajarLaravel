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
			padding: 5px;
		}
	</style>
</head>
<body>
	<h3>Menu</h3>
	<table border="2">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Kategori</th>
				<th>Stok</th>
				<th>Status</th>
				<th>Harga</th>
				<th>Gambar</th>
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
				<td>{{$menu->image ? '$menu->image' : 'Not Available'}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>