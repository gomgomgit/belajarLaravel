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
</head>
<body>
	<h3>Tambah Menu</h3>
	<form method="post" action="/menu/update/{{$menu->id}}">
		@method('PUT')
		@csrf
		<table>
			<tr>
				<td>Nama</td>
				<td class="no-border">:</td>
				<td><input type="text" name="name" value="{{$menu->name}}"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td class="no-border">:</td>
				<td><input type="text" name="category" value="{{$menu->category}}"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td class="no-border">:</td>
				<td><input type="number" name="stock" value="{{$menu->stock}}"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td class="no-border">:</td>
				<td>
					<input type="radio" name="status" value="1" {{$menu->status?'checked':''}}>Tersedia
					<input type="radio" name="status" value="0" {{$menu->status?'':'checked'}}>Belum Tersedia
				</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td class="no-border">:</td>
				<td><input type="number" name="price" value="{{$menu->price}}"></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td class="no-border">:</td>
				<td><input type="file" name="image" value="{{$menu->image}}"></td>
			</tr>
		</table>
		<br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>