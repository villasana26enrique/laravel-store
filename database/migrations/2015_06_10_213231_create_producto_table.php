<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idestatus')->unsigned();
            $table->foreign('idestatus')->references('id')->on('estatus'); //Menol
            $table->integer('idusuario')->unsigned();
            $table->foreign('idusuario')->references('id')->on('usuario'); //Menol
            $table->integer('idcategoria')->unsigned();
            $table->foreign('idcategoria')->references('id')->on('categoria'); //Menol
            $table->integer('idmarca')->unsigned();
            $table->foreign('idmarca')->references('id')->on('marca'); //Menol
            $table->integer('idtipoproducto')->unsigned();
            $table->foreign('idtipoproducto')->references('id')->on('tipo_producto'); //Menol
            $table->string('nombre');
            $table->string('cantidad');
            $table->string('precio');
            $table->string('descripcion');
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
        Schema::drop('producto');
    }
}
