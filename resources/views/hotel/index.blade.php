@extends('layouts.app')

@section('title', 'Hoteles')

@section('content')
	<div class="container">
		@include('common.success')
		<div class="text-center">
			<h3><b>LISTADO DE HOTELES</b></h3>			
		</div>
		<a href="/hotel/create" class="btn btn-primary">+ Crear Hotel</a><br><br>
		<table class="table table-hover">
			<thead class="bg-primary text-white">
				<tr>
					<th>Imagen</th>
					<th>Nombre</th>
					<th>Servicios</th>
					<th>Ubicación</th>
					<th>Precio</th>
					<th></th><th></th>
				</tr>
			</thead>
			<tbody class="bg-table bg-white">
				@foreach($hotels as $hotel)
					<tr onclick="location.href='/hotel/{{$hotel->id}}';">
						<td><img src="img/hotel/{{$hotel->image}}" style="height: 150px;"></td>
						<td>{{$hotel->name}}</td>
						<td>{{$hotel->services}}</td>
						<td>{{$hotel->location}}</td>
						<td>{{$hotel->price}}</td>
						<td>
							<a href="/hotel/{{$hotel->id}}/edit" class="btn btn-warning">Editar</a>
						</td>
						<td>
							{!! Form::open(['route' => ['hotel.destroy', $hotel->id],'method' => 'DELETE' ]) !!}
		    					{!! Form::submit('Eliminar',['class' => 'btn btn-danger ']) !!}
							{!! Form::close()!!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection