<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idestatus')->unsigned();
            $table->foreign('idestatus')->references('id')->on('estatus'); //Menol
            $table->integer('idtipousuario')->unsigned();
            $table->foreign('idtipousuario')->references('id')->on('tipo_usuario'); //Menol
            $table->integer('idubicacion')->unsigned();
            $table->foreign('idubicacion')->references('id')->on('ubicacion'); //Menol
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuario');
    }

}
