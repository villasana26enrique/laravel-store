<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\estatus;
use App\tipo_usuario;
use App\ubicacion;

class RegistroController extends Controller
{
    //Trae estatus de la BD
    public function nombreEstatus (){
    	$estatus = estatus::all();
    	$tipoUsuarios = tipo_usuario::all();
    	$ubicaciones = ubicacion::all();
	    return view('ingreso.registro',compact('estatus','tipoUsuarios','ubicaciones'));
    }
}
