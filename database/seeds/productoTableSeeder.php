<?php

use Illuminate\Database\Seeder;

class productoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
         for ($i=0;$i<50;$i++){
			DB::table('producto')->insert([
			'idestatus' => $faker->numberBetween($min = 1,$min = 2),
			'idusuario' => $faker->numberBetween($min = 1,$min = 50),
			'idcategoria' => $faker->numberBetween($min = 1,$min = 10),
			'idmarca' => $faker->numberBetween($min = 1,$min = 10),
			'idtipoproducto' => $faker->numberBetween($min = 1,$min = 10),
            'nombre' => $faker->sentence($nbWords = 1, $variableNbWords = true),
            'precio' => $faker->numberBetween($min = 20000,$min = 300000),
            'cantidad' => $faker->numberBetween($min = 1,$min = 50),
            'descripcion' => $faker->sentence($nbWords = 20, $variableNbWords = true)
        	]);
		}
    }
}
