<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tipo_producto;
use Input;
use Validator; //Esto es para poder utilizar el validador
use Redirect; //Esto se coloca para utilizar el redirect

class Tipo_productoController extends Controller
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
        $tps =  tipo_producto::all();
        return view('admin.tipo_producto.principal',compact('tps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tipo_producto.form');
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
            "nombre" => 'required|unique:tipo_producto|max: 15|min: 5', //Ese categoria es nombre de la tabla, para que sea unico en esa tabla
            "idestatus" =>'required' // Y esos nombres que se ponen al lado izquierdo son los id del formulario
        );
        //Esto se hace para que aplique las validaciones
        $validacion = Validator::make($data,$rules);
        if ($validacion->fails()){
            return redirect()->back()->withErrors($validacion->errors())->withInput($data);
        }
        $tps = new tipo_producto($data); //Nombre del modelo es el que se coloca aqui
        $tps->save();
        return Redirect::to('admin/tipo_producto')->with('mensaje','El tipo del producto se ha registrado satisfactoriamente');
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
        $edit = tipo_producto::findOrFail($id); //EL nombre del modelo
        //edit = estatus::where('idestatus','=', $id) Esta es la forma de hacer las busquedas en los modelos
        return view ('admin.tipo_producto.form',compact('edit')); //Se envia solo el nombre de la variable
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
            "nombre" => 'required|unique:tipo_producto|max: 15|min: 5', //Ese categoria es nombre de la tabla, para que sea unico en esa tabla
            "idestatus" =>'required' // Y esos nombres que se ponen al lado izquierdo son los id del formulario
        );
        //Esto se hace para que aplique las validaciones
        $validacion = Validator::make($data,$rules);
        if ($validacion->fails()){
            return redirect()->back()->withErrors($validacion->errors())->withInput($data);
        }
        tipo_producto::find($id)->update($request->all());
        return Redirect::to('admin/tipo_producto')->with('mensaje','El tipo de producto se ha actualizado de forma exitosa');
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
        $tp = tipo_producto::find($id);
        $tp->delete();
        /** Si se va a suspender o sea, inhabilitar se coloca
        * estatus->update(['idestatus'=> 2]);
        * Se coloca 2 porque es inactivo
        */
        return Redirect::to('admin/tipo_producto')->with('mensaje','El tipo del producto ha sido eliminada');
    }
}
