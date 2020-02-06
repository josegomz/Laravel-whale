<div class="form-group">
	{!! Form::label('avatar', 'Avatar',['class' => 'text-bold']) !!}
	{!! Form::file('avatar', ['class' =>'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::label('name', 'Nombre',['class' => 'text-bold']) !!}
	{!! Form::text('name', null, ['class' =>'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::label('username', 'Username',['class' => 'text-bold']) !!}
	{!! Form::text('username', null, ['class' =>'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Correo electronico',['class' => 'text-bold']) !!}
	{!! Form::text('email', null, ['class' =>'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::label('password', 'Contraseña',['class' => 'text-bold']) !!}
	{!! Form::password('password', ['class' =>'form-control'])!!}
</div>