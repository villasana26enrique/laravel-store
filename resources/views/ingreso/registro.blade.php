@extends('ingreso.index')
@section('contenedor')
	<div class="row">
        <div class="col s12 m6 offset-m3">
          <div class="card blue-grey darken-1 z-depth-4">
          {!! Form::open(array('method'=>'POST', 'route'=>'admin.user.store'))!!}
            <div class="card-content white-text">
              <div class="row center-align">
                <h2 class="card-title">Registro</h2>
              </div>
              <div class="row">
                <div class="col m6">
                  {!! Form::label('usunombre', 'Nombre:') !!}
                  {!! Form::text('nombre', null,array ('class' => 'input-field','placeholder'=>'Nombre', 'for' => 'usunombre')) !!}
                </div>
                <div class="col m6">
                  {!! Form::label('usuapellido', 'Apellido:') !!}
                  {!! Form::text('apellido', null,array ('class' => 'input-field','placeholder'=>'Apellidos')) !!}
                </div>
              </div>
              <div class="row">
                <div class="col m6">
                  {!! Form::label('usutlf', 'Telefono:') !!}
                  {!! Form::text('telefono', null,array ('class' => 'input-field','placeholder'=>'Numero telefonico')) !!}
                </div>
                <div class="col m6">
                  {!! Form::label('usuemail', 'Correo electrónico:') !!}
                  {!! Form::text('email', null,array ('class' => 'input-field','placeholder'=>'Correo electronico')) !!}
                </div>
              </div>
              <div class="row">
                <div class="col m6">
                  {!! Form::label('usuclave', 'Contraseña:') !!}
                  {!! Form::text('password', null,array ('class' => 'input-field','placeholder'=>'Contraseña')) !!}
                </div>
                <div class="col m6">
                  {!! Form::label('usucclave', 'Confirmar contraseña:') !!}
                  {!! Form::text('password', null,array ('class' => 'input-field','placeholder'=>'Confirmar ontraseña')) !!}
                </div>
              </div>
              <div class="row">
                <div class="col m6">
                  <select class="browser-default" style="color: black">
                    <option value="" disabled selected>Estatus</option>
                    @foreach($estatus as $estatu)
                    <option value="{{$estatus->has('id')}}">{{$estatu->nombre}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col m6">
                  <select class="browser-default" style="color: black">
                    <option value="" disabled selected>Registrarse Como:</option>
                    @foreach($tipoUsuarios as $tipoUsuario)
                    <option value="{{$tipoUsuarios->has('id')}}">{{$tipoUsuario->nombre}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="row">
                <select class="browser-default" style="color: black">
                    <option value="" disabled selected>Localidad:</option>
                    @foreach($ubicaciones as $ubicacion)
                    <option value="{{$ubicaciones->has('id')}}">{{$ubicacion->nombre}}</option>
                    @endforeach
                  </select>
              </div>
            </div>
            <div class="card-action center-align">
              {!! Form::button('Registrar', array('class'=>'waves-effect waves-light btn', 'type'=>'submit')) !!}
              {!! Form::button('Salir', array('class'=>'waves-effect waves-light btn', 'type'=>'submit')) !!}
            </div>
              {!! Form::close()!!}
          </div>
        </div>
      </div>
@endsection