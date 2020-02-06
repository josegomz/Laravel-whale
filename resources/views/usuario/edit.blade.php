@extends('layouts.app')

@section('title', 'Editar usuario')

@section('content')
	<div class="container">
		{!! Form::model($usuario, ['route' => ['usuario.update', $usuario], 'method'=>'PUT', 'files' => true]) !!}
			<img src="/img/usuario/{{$usuario->avatar}}" style="height: 300px;display: block;margin: 0 auto;"><br>
			@include('usuario.form')
		    {!! Form::submit('Modificar',['class' => 'btn btn-primary ']) !!}
		    <a href="/usuario" class="btn btn-secondary">Cancelar</a>
		{!! Form::close()!!}
	</div>
@endsection