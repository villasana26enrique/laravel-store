<?php

use Illuminate\Database\Seeder;

class tipo_productoTableSeeder extends Seeder
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
        for ($i=0;$i<10;$i++){
			DB::table('tipo_producto')->insert([
			'idestatus' => $faker->numberBetween($min = 1,$min = 2),
            'nombre' => $faker->sentence($nbWords = 1, $variableNbWords = true)
        	]);
		}
    }
}
