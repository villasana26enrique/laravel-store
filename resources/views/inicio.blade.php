@extends('index')

@section('contenedor')
<div>
        <div class="row">
          <div class="col m4 s12">
            <!--<?php //include("index/panelcategoria.php"); ?>
            <?php //include("index/panelmarcas.php"); ?>
            <?php //include("index/panelubicacion.php"); ?>-->
            @include('prueba_menu')
          </div>

          <div class="col m8" id="contenedor_slider">
            <!--<?php /*include("index/slider.php"); ?>-->
            <?php 
             if (isset($_GET['idp'])){
               include("index/detalles.php"); 
             }else{
              include("index/panelcentral.php"); 
             }*/
            ?>-->
            @include('slider') 
            @include('panel_central')    
          </div> <!-- Final de la columna del Slider y paneles-->
    </div> <!-- Final de la fila del Slider y paneles -->
</div>
    
  
  @endsection