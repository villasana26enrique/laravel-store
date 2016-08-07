@extends('admin.index')

@section('tablas')

@include('mensajes.errores')

	@if (isset($edit))

		{!! Form::model($edit, ['route'=>['admin.producto.update',$edit->id], 'method'=>'patch']) !!}

	@else
		<!--Si el usuario no existe se viene para aca, este es el metodo que trabaja en conjunto con create -->
		{!! Form::open(array('method'=>'POST', 'route'=>'admin.producto.store'))!!}

	@endif

	
	{!! Form::label('prodnombre', 'Nombre:') !!}
	{!! Form::text('nombre', null,array ('class' => 'input-field','placeholder'=>'Nombre de Categoria')) !!}
	{!! Form::label('prodcantidad', 'Cantidad:') !!}
	{!! Form::text('cantidad', null,array ('class' => 'input-field','placeholder'=>'Cantidad de equipos')) !!}
	{!! Form::label('prodprecio', 'Precio:') !!}
	{!! Form::text('precio', null,array ('class' => 'input-field','placeholder'=>'Precio del producto')) !!}
	{!! Form::label('proddescripcion', 'Descripcion:') !!}
	{!! Form::text('descripcion', null,array ('class' => 'input-field','placeholder'=>'Descripción del producto')) !!}
	{!! Form::label('prodidestatus', 'id:') !!}
	{!! Form::text('idestatus', null,array ('class' => 'input-field','placeholder'=>'Numero de estatus')) !!}
	{!! Form::label('prodidusuario', 'id:') !!}
	{!! Form::text('idusuario', null,array ('class' => 'input-field','placeholder'=>'Tipo de Usuario')) !!}
	{!! Form::label('prodidcategoria', 'id:') !!}
	{!! Form::text('idcategoria', null,array ('class' => 'input-field','placeholder'=>'Tipo de categoria')) !!}
	{!! Form::label('prodidmarca', 'id:') !!}
	{!! Form::text('idmarca', null,array ('class' => 'input-field','placeholder'=>'Seleccionar marca')) !!}
	{!! Form::label('prodidtipoprod', 'id:') !!}
	{!! Form::text('idtipoproducto', null,array ('class' => 'input-field','placeholder'=>'Tipo de producto')) !!}
	{!! Form::button('Enviar', array('class'=>'waves-effect waves-light btn', 'type'=>'submit')) !!}

{!! Form::close()!!}

@endsection

