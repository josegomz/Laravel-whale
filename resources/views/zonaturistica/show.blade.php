 @extends('layouts.app')

@section('title', 'Lugar turistico')

@section('content')
		<div class="container">
			<table class="table table-borderless">
				<tr>
					<td colspan="2">
						<img src="/img/zonaturistica/{{$zonaturistica->image}}" style="height: 300px;display: block;margin: 0 auto;"><br>
					</td>
				</tr>
				<tr>
					<th>Nombre</th>
					<td>{{$zonaturistica->name}}</td>
				</tr>
				<tr>
					<th>Ubicacón</th>
					<td>{{$zonaturistica->location}}</td>
				</tr>
				<tr>
					<th>Descripción</th>
					<td>{{$zonaturistica->description}}</td>
				</tr>
			</table>
			<a href="/hotel" class="btn btn-secondary"> Volver</a>
		</div>
@endsection