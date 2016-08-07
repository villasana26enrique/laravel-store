<?php

use Illuminate\Database\Seeder;

class ubicacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 $faker = Faker\Factory::create();
        //
        //Aqui se llena la base de datos de forma manual con los seeder
    	for ($i=0;$i<50;$i++){
	        DB::table('ubicacion')->insert([
		        	'idestatus' => $faker->numberBetween($min = 1,$min = 2),
		            'nombre' => $faker->state
	        ]);
    	}
    }
}
