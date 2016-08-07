<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\estatus;
use Input;
use Validator; //Esto es para poder utilizar el validador
use Redirect; //Esto se coloca para utilizar el redirect

class EstatusController extends Controller
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
        $estatus =  estatus::all();
        return view('admin.estatus.principal',compact('estatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.estatus.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request->all());
        //Esto se hace para validar el ingreso a la base de datos

        $data = $request->all();
        $rules = array(
            "nombre" => 'required|unique:estatus|max: 15|min: 5'
        );
        //Esto se hace para que aplique las validaciones
        $validacion = Validator::make($data,$rules);
        if ($validacion->fails()){
            return redirect()->back()->withErrors($validacion->errors())->withInput($data);
        }
        $estatus = new estatus($data); //Nombre del modelo es el que se coloca aqui
        $estatus->save();
        return Redirect::to('admin/estatus')->with('mensaje','Estatus registrado correctamente');
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
        $edit = estatus::findOrFail($id); //EL nombre del modelo
        //edit = estatus::where('idestatus','=', $id) Esta es la forma de hacer las busquedas en los modelos
        return view ('admin.estatus.form',compact('edit')); //Se envia solo el nombre de la variable

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
       //echo "Estoy modificando";
        $data = $request->all();
        $rules = array(
            "nombre" => 'required|unique:estatus|max: 15|min: 5'
        );
        //Esto se hace para que aplique las validaciones
        $validacion = Validator::make($data,$rules);
        if ($validacion->fails()){
            return redirect()->back()->withErrors($validacion->errors())->withInput($data);
        }
        estatus::find($id)->update($request->all()); //Este es el modelo
        //estatus::find($id)->update(only['nombre de los campos'],['nombre de los campos']);¨Para actualizar campos especificos
        return Redirect::to('admin/estatus')->with('mensaje','Estatus modificado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estatus = estatus::find($id);
        $estatus->delete();
        /** Si se va a suspender o sea, inhabilitar se coloca
        * estatus->update(['idestatus'=> 2]);
        * Se coloca 2 porque es inactivo
        */
        return Redirect::to('admin/estatus')->with('mensaje','El estatus ha sido eliminado');

    }
}
