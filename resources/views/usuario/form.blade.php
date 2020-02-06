<div class="form-group">
	{!! Form::label('avatar', 'Avatar') !!}
	{!! Form::file('avatar', ['class' =>'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::label('name', 'Nombre') !!}
	{!! Form::text('name', null, ['class' =>'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::label('username', 'Username') !!}
	{!! Form::text('username', null, ['class' =>'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Correo electronico') !!}
	{!! Form::text('email', null, ['class' =>'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::label('name', 'Contraseña') !!}
	{!! Form::password('password', ['class' =>'form-control'])!!}
</div>