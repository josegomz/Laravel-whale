 @extends('layouts.app')

@section('title', 'Usuario')

@section('content')
		<div class="container">
			<table class="table table-borderless">
				<tr>
					<td colspan="2">
						<img src="/img/usuario/{{$usuario->avatar}}" style="height: 300px;display: block;margin: 0 auto;"><br>
					</td>
				</tr>
				<tr>
					<th>Nombre</th>
					<td>{{$usuario->name}}</td>
				</tr>
				<tr>
					<th>Username</th>
					<td>{{$usuario->username}}</td>
				</tr>
				<tr>
					<th>Correo electronico</th>
					<td>{{$usuario->email}}</td>
				</tr>
			</table>
			<a href="/usuario" class="btn btn-secondary"> Volver</a>
		</div>
@endsection