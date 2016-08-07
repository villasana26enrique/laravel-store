<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\marca;
use Input;
use Validator; //Esto es para poder utilizar el validador
use Redirect; //Esto se coloca para utilizar el redirect

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $marcas =  marca::all();
        return view('admin.marca.principal',compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.marca.form');
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
            "nombre" => 'required|unique:marca|max: 15|min: 5', //Ese categoria es nombre de la tabla, para que sea unico en esa tabla
            "idestatus" =>'required' // Y esos nombres que se ponen al lado izquierdo son los id del formulario
        );
        //Esto se hace para que aplique las validaciones
        $validacion = Validator::make($data,$rules);
        if ($validacion->fails()){
            return redirect()->back()->withErrors($validacion->errors())->withInput($data);
        }
        $marcas = new marca($data); //Nombre del modelo es el que se coloca aqui
        $marcas->save();
        return Redirect::to('admin/marca')->with('mensaje','Marca registrada de forma exitosa');
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
        $edit = marca::findOrFail($id); //EL nombre del modelo
        //edit = estatus::where('idestatus','=', $id) Esta es la forma de hacer las busquedas en los modelos
        return view ('admin.marca.form',compact('edit')); //Se envia solo el nombre de la variable
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
            "nombre" => 'required|unique:marca|max: 15|min: 5', //Ese categoria es nombre de la tabla, para que sea unico en esa tabla
            "idestatus" =>'required' // Y esos nombres que se ponen al lado izquierdo son los id del formulario
        );
        //Esto se hace para que aplique las validaciones
        $validacion = Validator::make($data,$rules);
        if ($validacion->fails()){
            return redirect()->back()->withErrors($validacion->errors())->withInput($data);
        }
        marca::find($id)->update($request->all());
        return Redirect::to('admin/marca')->with('mensaje','La Marca se ha actualizado de forma exitosa');
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
        $marca = marca::find($id);
        $marca->delete();
        /** Si se va a suspender o sea, inhabilitar se coloca
        * estatus->update(['idestatus'=> 2]);
        * Se coloca 2 porque es inactivo
        */
        return Redirect::to('admin/marca')->with('mensaje','La Marca ha sido eliminada');
    }
}
