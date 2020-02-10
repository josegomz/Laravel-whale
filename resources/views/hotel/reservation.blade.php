@extends('layouts.app')

@section('title', 'Hacer reservación')

@section('content')
	<div class="container">
        @include('common.success')
        <a href="#" class="btn btn-primary">mis reservaciones</a>
        <div class="row">
        	@foreach($hotels as $hotel)
            <div class="col-sm">
                <div class="card text-center" style="width:18rem;margin-top:70px;">
                    <img style="heigth: 100px; width: 100px;background-color:#dddddd; margin: 20px;" class="card-img-top mx-auto d-block" src="img/hotel/{{$hotel->image}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$hotel->name}}</h5>
                        <p>{{$hotel->services}}</p>
                        <p>{{$hotel->location}}</p>
                        <p>{{$hotel->price}}</p>  
                        <br>
                        {!! Form::open(['route' => ['reservation.store','id'=>$hotel->id], 'method' => 'POST']) !!}
                                {!! Form::submit('Hacer reservacion',['class' => 'btn btn-primary']) !!}
                            {!! Form::close()!!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection