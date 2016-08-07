<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User; //EStos son los modelos que se utilizan
use App\categoria;
use App\marca;
use App\ubicacion;
use App\producto;

class VistaUsuarioController extends Controller
{
    //
    public function vista_inicio (){
    	//$usuarios = User::all();
		//Para traer un usuario el numero de los parentesis es el id
		//$usuario1 = User::findOrfail(2);
		//dd($usuarios); //Esto es para ver como se estan viniendo los datos
	    //return view('contenedor_inicio',compact('usuarios','usuario1'));
	    $categorias = categoria::paginate(10);
	    $marcas = marca::paginate(10);
	    $ubicaciones = ubicacion::paginate(10);
	    $productos = producto::paginate(6);
	    return view('inicio',compact('categorias','marcas','ubicaciones','productos'));
    }

    public function vista_productos (){
	    return view('productos');
    }

    public function vista_quienesSomos (){
	    return view('quienes_somos');
    }
}


