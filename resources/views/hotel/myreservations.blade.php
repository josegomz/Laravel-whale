@extends('layouts.app')

@section('title', 'Mis reservaciones')

@section('content')
	<div class="container">
        <a href="/reservation" class="btn btn-primary">Volver</a>
        <br><br>
        <table class="table table-borderles">
            <thead class="thead-dark bg primary">
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th>Descripción</th>
            </thead>
            <tbody class="bg-white">
                @foreach($list as $item)
                    <tr>
                        <td><img src="/img/hotel/{{$item->image}}" style="width: 200px;"></td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->location}}</td>
                        <td>{{$item->services}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection