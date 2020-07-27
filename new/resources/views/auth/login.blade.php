<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>

	<a href="/register"> '<<' Register </a>

	<h2>Login</h2>

	<form method="post" action="/login-process">
		@csrf

		<label>
			Email
			<input type="email" name="email">
		</label>
		<br><br>
		<label>
			Password
			<input type="password" name="password">
		</label>
		<br><br>
		<button>Login</button>
	</form>

</body>
</html>
