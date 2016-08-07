<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tipo_usuario;
use Input;
use Validator; //Esto es para poder utilizar el validador
use Redirect; //Esto se coloca para utilizar el redirect

class Tipo_usuarioController extends Controller
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
        $tus =  tipo_usuario::all();
        return view('admin.tipo_usuario.principal',compact('tus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tipo_usuario.form');
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
            "nombre" => 'required|unique:tipo_usuario|max: 15|min: 5' //Ese categoria es nombre de la tabla, para que sea unico en esa tabla
        );
        //Esto se hace para que aplique las validaciones
        $validacion = Validator::make($data,$rules);
        if ($validacion->fails()){
            return redirect()->back()->withErrors($validacion->errors())->withInput($data);
        }
        $tu = new tipo_usuario($data); //Nombre del modelo es el que se coloca aqui
        $tu->save();
        return Redirect::to('admin/tipo_usuario')->with('mensaje','Tipo de Usuario registrado de forma exitosa');
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
        //echo "Estoy editando";
        $edit = tipo_usuario::findOrFail($id); //EL nombre del modelo
        //edit = estatus::where('idestatus','=', $id) Esta es la forma de hacer las busquedas en los modelos
        return view ('admin.tipo_usuario.form',compact('edit')); //Se envia solo el nombre de la variable
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
        //Actualizando la informacion
        $data = $request->all();
        $rules = array(
            "nombre" => 'required|unique:tipo_usuario|max: 15|min: 5'
        );
        //Esto se hace para que aplique las validaciones
        $validacion = Validator::make($data,$rules);
        if ($validacion->fails()){
            return redirect()->back()->withErrors($validacion->errors())->withInput($data);
        }
        tipo_usuario::find($id)->update($request->all());
        return Redirect::to('admin/tipo_usuario')->with('mensaje','El tipo de usuario se ha actualizado de forma exitosa');
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
        $tu = tipo_usuario::find($id);
        $tu->delete();
        /** Si se va a suspender o sea, inhabilitar se coloca
        * estatus->update(['idestatus'=> 2]);
        * Se coloca 2 porque es inactivo
        */
        return Redirect::to('admin/tipo_usuario')->with('mensaje','El tipo de usuario ha sido eliminado');
    }
}
