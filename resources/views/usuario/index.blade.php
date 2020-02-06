@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
	<div class="container">
		@include('common.success')
		<div class="text-center">
			<h3><b>LISTADO DE USUARIOS</b></h3>			
		</div>
		<a href="/usuario/create" class="btn btn-primary">+ Crear Usuario</a><br><br>
		<table class="table table-hover">
			<thead class="thead-dark">
				<tr>
					<th>Imagen</th>
					<th>Nombre</th>
					<th>Username</th>
					<th>Correo electronico</th>
					<th></th><th></th>
				</tr>
			</thead>
			<tbody class="bg-table">
				@foreach($usuarios as $usuario)
					<tr onclick="location.href='/usuario/{{$usuario->slug}}';">
						<td><img src="img/usuario/{{$usuario->avatar}}" style="height: 150px;"></td>
						<td>{{$usuario->name}}</td>
						<td>{{$usuario->username}}</td>
						<td>{{$usuario->email}}</td>
						<td>
							<a href="/usuario/{{$usuario->slug}}/edit" class="btn btn-warning">Editar</a>
						</td>
						<td>
							{!! Form::open(['route' => ['usuario.destroy', $usuario->slug],'method' => 'DELETE' ]) !!}
		    					{!! Form::submit('Eliminar',['class' => 'btn btn-danger ']) !!}
							{!! Form::close()!!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection