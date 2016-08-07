@extends('admin.index')

@section('tablas')

@include('mensajes.errores')

	@if (isset($edit))

		{!! Form::model($edit, ['route'=>['admin.user.update',$edit->id], 'method'=>'patch']) !!}

	@else
		<!--Si el usuario no existe se viene para aca, este es el metodo que trabaja en conjunto con create -->
		{!! Form::open(array('method'=>'POST', 'route'=>'admin.user.store'))!!}

	@endif

	
	{!! Form::label('usunombre', 'Nombre:') !!}
	{!! Form::text('nombre', null,array ('class' => 'input-field','placeholder'=>'Nombre del Usuario')) !!}
	{!! Form::label('usuapellido', 'Apellido:') !!}
	{!! Form::text('apellido', null,array ('class' => 'input-field','placeholder'=>'Apellidos')) !!}
	{!! Form::label('usutlf', 'Telefono:') !!}
	{!! Form::text('telefono', null,array ('class' => 'input-field','placeholder'=>'Telefono del Usuario')) !!}
	{!! Form::label('usuemail', 'Correo electrónico:') !!}
	{!! Form::text('email', null,array ('class' => 'input-field','placeholder'=>'Correo electronico')) !!}
	{!! Form::label('usuclave', 'Contraseña:') !!}
	{!! Form::text('password', null,array ('class' => 'input-field','placeholder'=>'Contraseña')) !!}
	{!! Form::label('usudidestatus', 'id:') !!}
	{!! Form::text('idestatus', null,array ('class' => 'input-field','placeholder'=>'Numero de estatus')) !!}
	{!! Form::label('usutipousu', 'id:') !!}
	{!! Form::text('idtipousuario', null,array ('class' => 'input-field','placeholder'=>'Tipo de Usuario')) !!}
	{!! Form::label('usuidubicacion', 'id:') !!}
	{!! Form::text('idubicacion', null,array ('class' => 'input-field','placeholder'=>'Ubicacion del usuario')) !!}
	{!! Form::button('Enviar', array('class'=>'waves-effect waves-light btn', 'type'=>'submit')) !!}

{!! Form::close()!!}

@endsection

