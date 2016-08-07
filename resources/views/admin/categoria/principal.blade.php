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
        @foreach ($categorias as $categoria)
          <tr>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->nombre}}</td>
            <td>
                <div class="col m4 offset-m2">
                  <a class="waves-effect waves-light btn" href="{{route('admin.categoria.edit',$categoria->id)}}">Editar</a>
                </div>
                <div class="col m4">
                  <!--Esto es todo el proceso de suspender, chequear: Controlador, Rutas y vista de Categorias-->
                  <a class="waves-effect waves-light btn" href="categoria/suspender/{{$categoria->id}}">Eliminar</a>
                </div>
            </td>
          </tr>
        @endforeach
        </tbody>
</table>
<div class="row center-align" style="margin-top: 50px">
  <a class="waves-effect waves-light btn" href="{{asset('admin/categoria/create')}}">Crear</a>
</div>
@endsection
