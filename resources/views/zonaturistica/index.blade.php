@extends('layouts.app')

@section('title', 'Lugares turisticos')

@section('content')
	<div class="container">
		@include('common.success')
		<div class="text-center">
			<h3><b>LISTADO DE LUGARES TURISTICOS</b></h3>			
		</div>
		<a href="/zonaturistica/create" class="btn btn-primary">+ Agregar</a><br><br>
		<table class="table table-hover">
			<thead class="bg-primary text-white">
				<tr>
					<th>Imagen</th>
					<th>Nombre</th>
					<th>Ubicación</th>
					<th>Descripción</th>
					<th></th><th></th>
				</tr>
			</thead>
			<tbody class="bg-white">
				@foreach($zonaturisticas as $zonaturistica)
					<tr onclick="location.href='/zonaturistica/{{$zonaturistica->id}}';">
						<td><img src="img/zonaturistica/{{$zonaturistica->image}}" style="height: 150px;"></td>
						<td>{{$zonaturistica->name}}</td>
						<td>{{$zonaturistica->location}}</td>
						<td>{{$zonaturistica->description}}</td>
						<td>
							<a href="/zonaturistica/{{$zonaturistica->id}}/edit" class="btn btn-warning">Editar</a>
						</td>
						<td>
							{!! Form::open(['route' => ['zonaturistica.destroy', $zonaturistica->id],'method' => 'DELETE' ]) !!}
		    					{!! Form::submit('Eliminar',['class' => 'btn btn-danger ']) !!}
							{!! Form::close()!!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection