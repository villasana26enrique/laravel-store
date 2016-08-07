<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class marca extends Model
{
    //
    protected $table ="marca";
    protected $fillable=[
    	'id',
    	'nombre',
    	'idestatus'
    ];

    public function cantidadProductos(){
        return $this->hasMany(producto::class,'idmarca','id');
    }
}
