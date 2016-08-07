@extends('admin.index')

@section('tablas')

@include('mensajes.errores')

	@if (isset($edit))

		{!! Form::model($edit, ['route'=>['admin.categoria.update',$edit->id], 'method'=>'patch']) !!}

	@else
		<!--Si el usuario no existe se viene para aca, este es el metodo que trabaja en conjunto con create -->
		{!! Form::open(array('method'=>'POST', 'route'=>'admin.categoria.store'))!!}

	@endif

	
	{!! Form::label('catnombre', 'Categoria:') !!}
	{!! Form::text('nombre', null,array ('class' => 'input-field','placeholder'=>'Nombre de Categoria')) !!}
	{!! Form::label('idcategoria', 'id:') !!}
	{!! Form::text('idestatus', null,array ('class' => 'input-field','placeholder'=>'Numero de estatus')) !!}
	{!! Form::button('Enviar', array('class'=>'waves-effect waves-light btn', 'type'=>'submit')) !!}

{!! Form::close()!!}

@endsection

