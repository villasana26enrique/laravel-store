<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ubicacion extends Model
{
    //
    protected $table ="ubicacion";
    protected $fillable = [
    	'id',
    	'nombre',
    	'idestatus'
    ];

}
