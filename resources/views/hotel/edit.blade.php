@extends('layouts.app')

@section('title', 'Editar hotel')

@section('content')
	<div class="container">
		{!! Form::model($hotel, ['route' => ['hotel.update', $hotel], 'method'=>'PUT', 'files' => true]) !!}
			<img src="/img/hotel/{{$hotel->image}}" style="height: 300px;display: block;margin: 0 auto;"><br>
			@include('hotel.form')
		    {!! Form::submit('Modificar',['class' => 'btn btn-primary ']) !!}
		    <a href="/hotel" class="btn btn-secondary">Cancelar</a>
		{!! Form::close()!!}
	</div>
@endsection