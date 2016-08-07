@extends('admin.index')

@section('tablas')

@include('mensajes.mensajes')


<table class="bordered striped">
        <thead>
          <tr>
              <th data-field="id">id</th>
              <th data-field="name">Nombre</th>
              <th data-field="Actividad" class="center-align">Actividad</th>
          </tr>
        </thead>

        <tbody>
        @foreach ($tus as $tu)
          <tr>
            <td>{{$tu->id}}</td>
            <td>{{$tu->nombre}}</td>
            <td>
              <div class="col m4 offset-m2">
            	<a class="waves-effect waves-light btn" href="{{route('admin.tipo_usuario.edit',$tu->id)}}">Editar</a>
              </div>
              <div class="col m4">
              {!! Form::open(['route'=>['admin.tipo_usuario.destroy',$tu->id], 'method'=>'DELETE']) !!}
            	 <button class="waves-effect waves-light btn" type="submit">Eliminar</button>
              {!! Form::close()!!}
              </div>
            </td>
          </tr>
        @endforeach
        </tbody>
</table>
<div class="row center-align" style="margin-top: 50px">
<a class="waves-effect waves-light btn" href="{{asset('admin/tipo_usuario/create')}}">crear</a>
</div>
@endsection
