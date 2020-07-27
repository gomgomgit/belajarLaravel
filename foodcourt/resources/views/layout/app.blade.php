<!DOCTYPE html>
<html>
<head>
	@yield('head-script')
	<style type="text/css">
		#nav {
			display: flex;
			justify-content: space-between;
		}
	</style>
</head>
<body>

	@include('layout.navbar')
	<hr>

	@yield('content')
</body>
</html>
