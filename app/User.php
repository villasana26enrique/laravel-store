<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ="usuario";
    protected $fillable = [
        'id',
        'idestatus',
        'idtipousuario',
        'idubicacion',
        'nombre',
        'apellido',
        'telefono',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tipoUsuario(){
        return $this->belongsTo('App\tipo_usuario','idtipousuario','id');
    }

    public function tipoEstatus(){
        return $this->belongsTo('App\estatus','idestatus','id');
    }
}
