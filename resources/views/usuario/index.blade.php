 @extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
		<h1>listado de usuarios</h1>

		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th>Id</th>
					<th>Imagen</th>
					<th>Nombre</th>
					<th>Username</th>
					<th>Correo electronico</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				@foreach($usuarios as $usuario)
					<tr>
						<td>{{$usuario->id}}</td>
						<td><img src="img/usuario/{{$usuario->avatar}}" style="height: 100px;"></td>
						<td>{{$usuario->name}}</td>
						<td>{{$usuario->username}}</td>
						<td>{{$usuario->email}}</td>
						<td><i class="fa fa-plus"></i></td>
						<td><i class="fa fa-trash"></i></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		
@endsection