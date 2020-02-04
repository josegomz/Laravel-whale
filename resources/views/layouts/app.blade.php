<html>
<head>
	<title>Whale -  @yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/fontawesome.css')}}">
	<script type="text/javascript" src="{{ URL::asset('js/jquery-3.3.1.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.js')}}"></script>

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark	bg-primary">
		<a href="/" class="navbar-brand">Whale</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expand="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<div class="navbar-nav">
				<a class="nav-item nav-link active" href="/">Home</a>
				<a class="nav-item nav-link" href="#">Usuarios</a>
			</div>
		</div>
	</nav>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>