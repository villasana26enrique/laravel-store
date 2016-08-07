<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Input;
use Validator; //Esto es para poder utilizar el validador
use Redirect; //Esto se coloca para utilizar el redirect

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        $usuarios = User::all();
        return view('admin.user.principal',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.user.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $rules = array(
            "nombre" => 'required|max: 15|min: 5', //Ese categoria es nombre de la tabla, para que sea unico en esa tabla
            "apellido" =>'required|max:15|min: 5',
            "telefono" =>'required',
            "email" =>'required|max:30|unique:usuario|',
            "password" =>'required', // Y esos nombres que se ponen al lado izquierdo son los id del formulario
            "idestatus" =>'required',
            "idtipousuario" =>'required',
            "idubicacion" =>'required'
        );
        //Esto se hace para que aplique las validaciones
        $validacion = Validator::make($data,$rules);
        if ($validacion->fails()){
            return redirect()->back()->withErrors($validacion->errors())->withInput($data);
        }
        $usuario = new User($data); //Nombre del modelo es el que se coloca aqui
        $usuario->save();
        return Redirect::to('admin/user')->with('mensaje','Usuario registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $edit = User::findOrFail($id); //EL nombre del modelo
        //edit = estatus::where('idestatus','=', $id) Esta es la forma de hacer las busquedas en los modelos
        return view ('admin.user.form',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->all();
        $rules = array(
            "nombre" => 'required|max: 15|min: 5', //Ese categoria es nombre de la tabla, para que sea unico en esa tabla
            "apellido" =>'required|max:15|min: 5',
            "telefono" =>'required',
            "email" =>'required|max:30',
            "password" =>'required', // Y esos nombres que se ponen al lado izquierdo son los id del formulario
            "idestatus" =>'required',
            "idtipousuario" =>'required',
            "idubicacion" =>'required'

        );
        //Esto se hace para que aplique las validaciones
        $validacion = Validator::make($data,$rules);
        if ($validacion->fails()){
            return redirect()->back()->withErrors($validacion->errors())->withInput($data);
        }
        User::find($id)->update($request->all());
        return Redirect::to('admin/user')->with('mensaje','Usuario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuario = User::find($id);
        $usuario->delete();
        /** Si se va a suspender o sea, inhabilitar se coloca
        * estatus->update(['idestatus'=> 2]);
        * Se coloca 2 porque es inactivo
        */
        return Redirect::to('admin/user')->with('mensaje','El usuario ha sido eliminado');
    }
}
