<nav id="nav">
	<div>
		{{ auth()->check() ? auth()->user()->name : '' }}
		||--
		<a href="/">Home</a>
		||
		<a href="/menus">Menu</a>
		||
		<a href="/categories">Category</a>
	</div>
	<div>
		<a href="/login">Login</a>
		||
		<a href="/register">Register</a>
	</div>
</nav>
