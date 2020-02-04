@extends('layouts.app')

@section('title', 'Editar usuario')

@section('content')
	<form class="form-group" method="POST" action="/usuario/{{$usuario->slug}}" enctype="multipart/form-data">
		@method('PUT')
		@csrf
		<div class="form-group">
			<img src="/img/usuario/{{$usuario->avatar}}" style="height: 200px;"><br>
			<label>Avatar</label>
			<input type="file" name="avatar" class="form-control">
			<label>nombre</label>
			<input type="text" name="name" value="{{$usuario->name}}" class="form-control">
			<label>username</label>
			<input type="text" name="username" value="{{$usuario->username}}" class="form-control">
			<label>correo</label>
			<input type="text" name="email" value="{{$usuario->email}}" class="form-control">
			<label>contraseña</label>
			<input type="password" name="password" value="{{$usuario->password}}" class="form-control">
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
@endsection