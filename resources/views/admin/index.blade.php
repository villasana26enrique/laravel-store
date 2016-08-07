
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

      <style type="text/css">
      	header, body, footer {
	      padding-left: 240px;
	    }

	    @media only screen and (max-width : 992px) {
	      header, body, footer {
	        padding-left: 0;
	      }
	    }
      </style>
  </head>
  <body id='admin'>
    @include('admin.menu')
    <div class="row">
      <div class="col m8 offset-m2">
        <div class="card-panel white" style="border-radius: 20px">
            <!--Header-->
            <div class="card-content center-align">
                <h4 class="card-title">Bienvenido</h4>
            </div>
            <div class="row">
             @yield('tablas')
            </div>        
        </div>
      </div>      
    </div>  
        

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
          $('.tooltipped').tooltip({delay: 50});
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
          $('.alerta').fadeOut(5000);
        });
    </script>
  </body>
</html>
