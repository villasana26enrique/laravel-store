<?php

use Illuminate\Database\Seeder;

class tipo_usuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Aqui se crea manualmente el seeder
        //Aqui se llena la base de datos de forma manual con los seeder
        DB::table('tipo_usuario')->insert([
            'nombre' => 'Administrador'
        ]);
        DB::table('tipo_usuario')->insert([
            'nombre' => 'Cliente'
        ]);
        DB::table('tipo_usuario')->insert([
            'nombre' => 'Operador'
        ]);
    }
}
