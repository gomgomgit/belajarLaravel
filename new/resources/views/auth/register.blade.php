<!DOCTYPE html>
<html>
<head>
	<title>Halaman Register</title>
</head>
<body>

	<a href="/login"> '<<' Login </a>

	<h2>Register</h2>

	<form method="post" action="/register-process">
		@csrf

		<label>
			Email
			<input type="email" name="email">
		</label>
		<br><br>
		<label>
			Name
			<input type="text" name="name">
		</label>
		<br><br>
		<label>
			Password
			<input type="password" name="password">
		</label>
		<br><br>
		<button>Register</button>
	</form>

</body>
</html>
