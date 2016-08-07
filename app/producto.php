<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    //
    protected $table ="producto";
    protected $fillable = [
        'id',
    	'idestatus',
    	'idusuario',
    	'idcategoria',
    	'idmarca',
    	'idtipoproducto',
    	'nombre',
    	'cantidad',
    	'precio',
    	'descripcion'
    ];
}
