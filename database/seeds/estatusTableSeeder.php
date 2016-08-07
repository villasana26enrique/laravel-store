<?php

use Illuminate\Database\Seeder;

class estatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Aqui se llena la base de datos de forma manual con los seeder
        DB::table('estatus')->insert([
            'nombre' => 'Activo'
        ]);
        DB::table('estatus')->insert([
            'nombre' => 'Inactivo'
        ]);
    }
}
