 @extends('layouts.app')

@section('title', 'Hotel')

@section('content')
		<div class="container">
			<table class="table table-borderless">
				<tr>
					<td colspan="2">
						<img src="/img/hotel/{{$hotel->image}}" style="height: 300px;display: block;margin: 0 auto;"><br>
					</td>
				</tr>
				<tr>
					<th>Nombre</th>
					<td>{{$hotel->name}}</td>
				</tr>
				<tr>
					<th>Servicios</th>
					<td>{{$hotel->services}}</td>
				</tr>
				<tr>
					<th>Ubicacón</th>
					<td>{{$hotel->location}}</td>
				</tr>
				<tr>
					<th>Precio</th>
					<td>{{$hotel->price}}</td>
				</tr>
			</table>
			<a href="/hotel" class="btn btn-secondary"> Volver</a>
		</div>
@endsection