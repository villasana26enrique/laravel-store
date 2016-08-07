<!DOCTYPE html>
<html>
<head>
	<title>Boinc</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!--Import Google Icon Font-->
      <link href="{{asset('http://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
       <link type="text/css" rel="stylesheet" href="{{asset('css/estilos.css')}}">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

       @yield('contenedor')
       
	<script type="text/javascript" src="{{asset('https://code.jquery.com/jquery-2.1.1.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('select').material_select();
    });
  </script>
</body>
</html>