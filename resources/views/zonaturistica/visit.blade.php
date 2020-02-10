@extends('layouts.app')

@section('title', 'Visitar lugar')

@section('content')
	<div class="container">
        @include('common.success')
        <a href="myvisits" class="btn btn-primary">mis visitas</a>
        <div class="row">
        	@foreach($zonaturisticas as $zonaturistica)
            <div class="col-sm">
                <div class="card text-center" style="width:18rem;margin-top:70px;">
                    <img style="heigth: 100px; width: 100px;background-color:#dddddd; margin: 20px;" class="card-img-top mx-auto d-block" src="img/zonaturistica/{{$zonaturistica->image}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$zonaturistica->name}}</h5>
                        <p>{{$zonaturistica->location}}</p>
                        <p>{{$zonaturistica->description}}</p>  
                        <br>
                        {!! Form::open(['route' => ['visit.store','id'=>$zonaturistica->id], 'method' => 'POST']) !!}
                                {!! Form::submit('Visitar lugar',['class' => 'btn btn-primary']) !!}
                            {!! Form::close()!!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection