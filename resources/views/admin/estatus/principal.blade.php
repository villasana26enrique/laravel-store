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
        @foreach ($estatus as $estat)
          <tr>
            <td>{{$estat->id}}</td>
            <td>{{$estat->nombre}}</td>
            <td class="center-align">
              <div class="col m4 offset-m2">
            	<a class="waves-effect waves-light btn" href="{{route('admin.estatus.edit',$estat->id)}}">Editar</a>
              </div>
              <div class="col m4">
              {!! Form::open(['route'=>['admin.estatus.destroy',$estat->id], 'method'=>'DELETE']) !!}
            	<button class="waves-effect waves-light btn" type="submit">Eliminar</button>
              {!! Form::close()!!}
              </div>
            </td>
          </tr>
        @endforeach
        </tbody>
</table>
<div class="row center-align" style="margin-top: 50px">
<a class="waves-effect waves-light btn" href="{{asset('admin/estatus/create')}}">crear</a>
</div>
@endsection
