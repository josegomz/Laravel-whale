 @extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
		<h1>listado de usuarios</h1>

		<table class="table table-bordered table-hover">
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
					<tr onclick="location.href='/usuario/{{$usuario->slug}}';">
						<td>{{$usuario->id}}</td>
						<td><img src="img/usuario/{{$usuario->avatar}}" style="height: 100px;"></td>
						<td>{{$usuario->name}}</td>
						<td>{{$usuario->username}}</td>
						<td>{{$usuario->email}}</td>
						<td><a href="/usuario/{{$usuario->slug}}/edit" class="text-warning">Editar</a></td>
						<td><a href="" class="text-danger">Eliminar</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<script type="text/javascript">
			
		</script>
@endsection