@extends('admin.index')

@section('tablas')

@include('mensajes.errores')

	@if (isset($edit))

		{!! Form::model($edit, ['route'=>['admin.estatus.update',$edit->id], 'method'=>'patch']) !!}

	@else

		{!! Form::open(array('method'=>'POST', 'route'=>'admin.estatus.store'))!!}

	@endif

	{!! Form::label('lnombre', 'Nombre:') !!}
	{!! Form::text('nombre', null,array ('class' => 'input-field','placeholder'=>'Nombre')) !!}
	{!! Form::button('Enviar', array('class'=>'waves-effect waves-light btn', 'type'=>'submit')) !!}

{!! Form::close()!!}

@endsection

