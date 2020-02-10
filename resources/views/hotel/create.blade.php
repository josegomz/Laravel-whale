@extends('layouts.app')

@section('title', 'Crear hotel')

@section('content')
	<div class="container">
		@include('common.errors ')
		{!! Form::open(['route' => 'hotel.store', 'method' => 'POST', 'files' => true ]) !!}
			<img class="avatar" src="{{URL::asset('img/whale/hotel.png')}}" alt="logo-whale" style="height: 200px;display: block;margin: 10px auto;">

			@include('hotel.form')
		    {!! Form::submit('Guardar',['class' => 'btn btn-primary text-bold']) !!}
		    <a href="/hotel" class="btn btn-secondary text-bold">Cancelar</a>
		{!! Form::close() !!}
	</div>
@endsection