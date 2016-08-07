<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    //Colocar este constructor  en todas las rutas a Autenticar
    public function __construct(){
    	$this->middleware('auth');
    }

    public function mostrar_principal(){
    	return view('admin.index');
    }
}
