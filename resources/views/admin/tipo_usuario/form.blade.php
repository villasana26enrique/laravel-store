@extends('admin.index')

@section('tablas')

@include('mensajes.errores')

	@if (isset($edit))

		{!! Form::model($edit, ['route'=>['admin.tipo_usuario.update',$edit->id], 'method'=>'patch']) !!}

	@else
		<!--Si el usuario no existe se viene para aca, este es el metodo que trabaja en conjunto con create -->
		{!! Form::open(array('method'=>'POST', 'route'=>'admin.tipo_usuario.store'))!!}

	@endif

	
	{!! Form::label('tunombre', 'Nombre del Tipo de Usuario:') !!}
	{!! Form::text('nombre', null,array ('class' => 'input-field','placeholder'=>'Nombre del tipo de Usuario')) !!}
	{!! Form::button('Enviar', array('class'=>'waves-effect waves-light btn', 'type'=>'submit')) !!}

{!! Form::close()!!}

@endsection

