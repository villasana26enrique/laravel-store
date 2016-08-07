@extends('admin.index')

@section('tablas')

@include('mensajes.errores')

	@if (isset($edit))

		{!! Form::model($edit, ['route'=>['admin.tipo_producto.update',$edit->id], 'method'=>'patch']) !!}

	@else
		<!--Si el usuario no existe se viene para aca, este es el metodo que trabaja en conjunto con create -->
		{!! Form::open(array('method'=>'POST', 'route'=>'admin.tipo_producto.store'))!!}

	@endif

	
	{!! Form::label('tpnombre', 'Tipo del Producto:') !!}
	{!! Form::text('nombre', null,array ('class' => 'input-field','placeholder'=>'Tipo de Producto')) !!}
	{!! Form::label('idtp', 'id:') !!}
	{!! Form::text('idestatus', null,array ('class' => 'input-field','placeholder'=>'Numero de estatus')) !!}
	{!! Form::button('Enviar', array('class'=>'waves-effect waves-light btn', 'type'=>'submit')) !!}

{!! Form::close()!!}

@endsection

