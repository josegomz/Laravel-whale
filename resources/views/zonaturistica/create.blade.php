@extends('layouts.app')

@section('title', 'Agregar lugar turistico')

@section('content')
	<div class="container">
		@include('common.errors ')
		{!! Form::open(['route' => 'zonaturistica.store', 'method' => 'POST', 'files' => true ]) !!}
			<img class="avatar" src="{{URL::asset('img/whale/zonaturistica.jpg')}}" alt="logo-whale" style="height: 200px;display: block;margin: 10px auto;">

			@include('zonaturistica.form')
		    {!! Form::submit('Guardar',['class' => 'btn btn-primary text-bold']) !!}
		    <a href="/zonaturistica" class="btn btn-secondary text-bold">Cancelar</a>
		{!! Form::close() !!}
	</div>
@endsection