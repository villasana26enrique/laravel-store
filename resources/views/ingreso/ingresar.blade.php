@extends('ingreso.index')

@section('contenedor')

	<div class="row">
        <div class="col s12 m6 offset-m3">
          <div class="card blue-grey darken-1  z-depth-4">
          {!! Form::open(array('method'=>'POST', 'route'=>'admin.user.store'))!!}
            <div class="card-content white-text">
              <div class="row center-align">
                <span class="card-title center-align">Ingreso</span>
              </div>
              <div class="row">
              		{!! Form::text('email', null,array ('class' => 'input-field','placeholder'=>'Correo electronico')) !!}
              </div>
              <div class="row">
              		{!! Form::text('password', null,array ('class' => 'input-field','placeholder'=>'Contraseña')) !!}
              </div>
            </div>
            <div class="card-action center-align">
              {!! Form::button('Ingresar', array('class'=>'waves-effect waves-light btn', 'type'=>'submit')) !!}
              {!! Form::button('Salir', array('class'=>'waves-effect waves-light btn', 'type'=>'submit')) !!}
            </div>
              {!! Form::close()!!}
          </div>
        </div>
      </div>

@endsection