<!DOCTYPE html>
<html>
<head>
	<title>Whale - Login</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/login.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/animate.css')}}">
</head>
<body>
	<div class="login-box bounceIn">
		<img class="avatar" src="{{URL::asset('img/login/logo.jpg')}}" alt="logo-whale">
		<form method="POST" action="/usuario">
			<label for="username"><span>*</span>Username</label>
			<input type="text" name="username" placeholder="Ingrese su usuario">
			<label for="password"><span>*</span>Contraseña</label>
			<input type="password" name="password" placeholder="Ingrese su contraseña">

			<input type="submit" name="" value="Ingresar">

			<a href="#">Olvidé mi contraseña</a><br>
			<a href="/usuario/create">No tienes cuenta, registrarse</a>
		</form>
	</div>
</body>
</html>