@extends('layouts.app')

@section('title', 'Editar lugar turistico')

@section('content')
	<div class="container">
		{!! Form::model($zonaturistica, ['route' => ['zonaturistica.update', $zonaturistica], 'method'=>'PUT', 'files' => true]) !!}
			<img src="/img/zonaturistica/{{$zonaturistica->image}}" style="height: 300px;display: block;margin: 0 auto;"><br>
			@include('zonaturistica.form')
		    {!! Form::submit('Modificar',['class' => 'btn btn-primary ']) !!}
		    <a href="/zonaturistica" class="btn btn-secondary">Cancelar</a>
		{!! Form::close()!!}
	</div>
@endsection