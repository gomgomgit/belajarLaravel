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
	<form method="post" action="/menus/store">
		@csrf
		<table>
			<tr>
				<td>Nama</td>
				<td class="no-border">:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td class="no-border">:</td>
				<td><input type="text" name="category"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td class="no-border">:</td>
				<td><input type="number" name="stock"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td class="no-border">:</td>
				<td><input type="radio" name="status" value="1">Tersedia <input type="radio" name="status" value="0">Belum Tersedia</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td class="no-border">:</td>
				<td><input type="number" name="price"></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td class="no-border">:</td>
				<td><input type="file" name="image"></td>
			</tr>
		</table>
		<br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>