<div class="form-group">
	{!! Form::label('image', 'Imagen',['class' => 'text-bold']) !!}
	{!! Form::file('image', ['class' =>'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::label('name', 'Nombre',['class' => 'text-bold']) !!}
	{!! Form::text('name', null, ['class' =>'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::label('services', 'Servicios',['class' => 'text-bold']) !!}
	{!! Form::text('services', null, ['class' =>'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::label('location', 'Ubicación',['class' => 'text-bold']) !!}
	{!! Form::text('location', null, ['class' =>'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::label('price', 'Precio',['class' => 'text-bold']) !!}
	{!! Form::text('price', null,['class' =>'form-control'])!!}
</div>