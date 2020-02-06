@extends('layouts.app')

@section('title', 'Crear usuario')

@section('content')
	<div class="container">
		@if($errors->any())
			<di class="alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</di>
		@endif

		{!! Form::open(['route' => 'usuario.store', 'method' => 'POST', 'files' => true ]) !!}
			@include('usuario.form')
		    {!! Form::submit('Guardar',['class' => 'btn btn-primary ']) !!}
		    <a href="/usuario" class="btn btn-danger">Cancelar</a>
		{!! Form::close() !!}
	</div>
@endsection