<!DOCTYPE html>
<html>
<head>
	<title>
		@yield('title')
	</title>
	@yield('head-script')
</head>
<body>

	@include('layout.navbar')

	<hr>

	@yield('content')
</body>
</html>