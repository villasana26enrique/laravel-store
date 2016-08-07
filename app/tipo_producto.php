<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_producto extends Model
{
    //
    protected $table = "tipo_producto";
    protected $fillable = [
    	'id',
    	'nombre',
    	'idestatus'
    ];
}
