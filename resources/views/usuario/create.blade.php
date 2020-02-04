@extends('layouts.app')

@section('title', 'Crear usuario')

@section('content')
	<form class="form-group" method="POST" action="/usuario" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label>avatar</label>
			<input type="file" name="avatar" class="form-control">
			<label>nombre</label>
			<input type="text" name="name" class="form-control">
			<label>username</label>
			<input type="text" name="username" class="form-control">
			<label>correo</label>
			<input type="text" name="email" class="form-control">
			<label>contraseña</label>
			<input type="password" name="password" class="form-control">
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
@endsection