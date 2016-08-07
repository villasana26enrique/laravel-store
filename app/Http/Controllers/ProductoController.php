<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\producto;
use Input;
use Validator; //Esto es para poder utilizar el validador
use Redirect; //Esto se coloca para utilizar el redirect

class ProductoController extends Controller
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
        //Para el paginador con las tablas 
        $productos = producto::paginate(10);
        return view('admin.producto.principal',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.producto.form');
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
            "nombre" => 'required|unique:producto|max: 15|min: 5', //Ese categoria es nombre de la tabla, para que sea unico en esa tabla
            "cantidad" =>'required',
            "precio" =>'required',
            "descripcion" =>'required|max:80',
            "idestatus" =>'required', // Y esos nombres que se ponen al lado izquierdo son los id del formulario
            "idusuario" =>'required',
            "idcategoria" =>'required',
            "idmarca" =>'required',
            "idtipoproducto" =>'required'

        );
        //Esto se hace para que aplique las validaciones
        $validacion = Validator::make($data,$rules);
        if ($validacion->fails()){
            return redirect()->back()->withErrors($validacion->errors())->withInput($data);
        }
        $producto = new producto($data); //Nombre del modelo es el que se coloca aqui
        $producto->save();
        return Redirect::to('admin/producto')->with('mensaje','Producto registrado correctamente');
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
        $edit = producto::findOrFail($id); //EL nombre del modelo
        //edit = estatus::where('idestatus','=', $id) Esta es la forma de hacer las busquedas en los modelos
        return view ('admin.producto.form',compact('edit'));
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
             "nombre" => 'required|unique:producto|max: 15|min: 5', //Ese categoria es nombre de la tabla, para que sea unico en esa tabla
            "cantidad" =>'required',
            "precio" =>'required',
            "descripcion" =>'required|max:30',
            "idestatus" =>'required', // Y esos nombres que se ponen al lado izquierdo son los id del formulario
            "idusuario" =>'required',
            "idcategoria" =>'required',
            "idmarca" =>'required',
            "idtipoproducto" =>'required'
        );
        //Esto se hace para que aplique las validaciones
        $validacion = Validator::make($data,$rules);
        if ($validacion->fails()){
            return redirect()->back()->withErrors($validacion->errors())->withInput($data);
        }
        producto::find($id)->update($request->all());
        return Redirect::to('admin/producto')->with('mensaje','Producto actualizado correctamente');
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
        $producto = producto::find($id);
        $producto->delete();
        /** Si se va a suspender o sea, inhabilitar se coloca
        * estatus->update(['idestatus'=> 2]);
        * Se coloca 2 porque es inactivo
        */
        return Redirect::to('admin/producto')->with('mensaje','El producto ha sido eliminado');
    }
}
