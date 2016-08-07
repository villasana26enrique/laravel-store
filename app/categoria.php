<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    //
    protected $table ="categoria";
    protected $fillable=[
    	'id',
    	'nombre',
    	'idestatus'
    ];

     public function cantidadProductos(){
        return $this->hasMany(producto::class,'idcategoria','id');
    }
}
