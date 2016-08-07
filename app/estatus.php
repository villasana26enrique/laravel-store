<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estatus extends Model
{
    //
    protected $table ="estatus";
    protected $fillable=[
    	'id',
    	'nombre'
    ];
}
