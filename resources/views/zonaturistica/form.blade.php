<div class="form-group">
	{!! Form::label('image', 'Imagen',['class' => 'text-bold']) !!}
	{!! Form::file('image', ['class' =>'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::label('name', 'Nombre',['class' => 'text-bold']) !!}
	{!! Form::text('name', null, ['class' =>'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::label('location', 'Ubicación',['class' => 'text-bold']) !!}
	{!! Form::text('location', null, ['class' =>'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::label('description', 'Descripción',['class' => 'text-bold']) !!}
	{!! Form::textarea('description', null,['class' =>'form-control'])!!}
</div>