@extends('layouts.app')

@section('title', 'Crear usuario')

@section('content')
	<div class="container">
		@include('common.errors ')
		{!! Form::open(['route' => 'usuario.store', 'method' => 'POST', 'files' => true ]) !!}
			<img class="avatar" src="{{URL::asset('img/login/logo.jpg')}}" alt="logo-whale" style="height: 200px;display: block;margin: 10px auto;">

			@include('usuario.form')
		    {!! Form::submit('Guardar',['class' => 'btn btn-primary text-bold']) !!}
		    <a href="/usuario" class="btn btn-secondary text-bold">Cancelar</a>
		{!! Form::close() !!}
	</div>
@endsection