<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoFotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_foto', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('idproducto')->unsigned();
            $table->foreign('idproducto')->references('id')->on('producto'); //Menol
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
        Schema::drop('producto_foto');
    }
}
