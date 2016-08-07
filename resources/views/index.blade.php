<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Boinc</title>
    <!--Import Google Icon Font-->
      <link href="{{asset('http://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
       <link type="text/css" rel="stylesheet" href="{{asset('css/estilos.css')}}">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>

        <header class="row">
          <div class="col m4">
            <img src="img/boinc_logo.png" class="responsive-img" alt="logo">
          </div>
          <div>
            <div class="col m4 offset-m4" id="caja_botones">
              <a class="btn waves-effect" href="{{asset('auth/login')}}">Entrar</a>
              <a class="btn waves-effect" href="{{asset('/registro')}}">Registrarse</a>
            </div>                
          </div>

        </header>

        <nav>
          <div class="nav-wrapper teal lighten-1">
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="left hide-on-med-and-down">
                <li><a href="{{asset('/')}}">Inicio</a></li>
                <li><a href="{{asset('quienes_somos')}}">¿Quienes somos?</a></li>
                <li><a href="{{asset('productos')}}">Productos</a></li>
                <li><a href="#">Contactenos</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                {!! Form::open(array('method'=>'POST', 'route'=>'admin.ubicacion.store'))!!}
                <li class="right input-field search  col m3">
                  <div class="search-wrapper card" style="margin: 0px; color: white; background-color: #00897b; margin-right: 11.250px">
                    <!--<input id="search" type="text" class="validate fixed">-->
                    {!! Form::text('search', null,array ('class' => 'input-field validate tooltipped','placeholder'=>'Busqueda', 'data-position'=>'left','data-tooltip'=>'Busque aqui el producto de su preferencia','data-delay'=>'50')) !!}
                    <label for='search'><i class="material-icons">search</i></label>
                    <div class="search-results" style="display: block;"></div>
                  </div>
                </li>
                {!! Form::close()!!}
            </ul>
            
            <ul class="side-nav" id="mobile-demo">
                <li><a href="{{asset('/')}}">Inicio</a></li>
                <li><a href="{{asset('quienes_somos')}}">¿Quienes somos?</a></li>
                <li><a href="{{asset('productos')}}">Productos</a></li>
                <li><a href="#">Contactenos</a></li>
            </ul>
        </div>
        </nav>

    @yield('contenedor')

    <footer class="container">
        <!--<?php //include("index/panelfooter.php"); ?>-->
    </footer>

    <script type="text/javascript" src="{{asset('https://code.jquery.com/jquery-2.1.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    <script type="text/javascript">
      $(".button-collapse").sideNav();
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.slider').slider({height: 475});
      });
    </script>
  </body>
</html>