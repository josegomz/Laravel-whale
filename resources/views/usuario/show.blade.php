 @extends('layouts.app')

@section('title', 'Usuario')

@section('content')
		<div class="text-center">
			<img src="../img/usuario/{{$usuario->avatar}}" style="height: 300px; margin: 0 auto; ">
			<h5>{{$usuario->name}}</h5>
			<p>{{$usuario->username}}</p>
			<p>{{$usuario->email}}</p>
			<p>{{$usuario->password}}</p>
		</div>
@endsection