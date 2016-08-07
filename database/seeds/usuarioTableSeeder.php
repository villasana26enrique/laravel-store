<?php

use Illuminate\Database\Seeder;
use Faker as Faker;

class usuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0;$i<50;$i++){
			DB::table('usuario')->insert([
			'idestatus' => $faker->numberBetween($min = 1,$min = 2),
			'idtipousuario' => $faker->numberBetween($min = 1,$min = 3),
			'idubicacion' => $faker->numberBetween($min = 1,$min = 50),
            'nombre' => $faker->firstName,
            'apellido' => $faker->lastname,
            'email' => $faker->email,
            'telefono' => $faker->phoneNumber,
            'password' => $faker->password
        	]);
		}

        DB::table('usuario')->insert([
            'idestatus' => "1",
            'idtipousuario' => "1",
            'idubicacion' => "1",
            'nombre' => "Enrique",
            'apellido' => "Villasana",
            'email' => "quito311@gmail.com",
            'telefono' => $faker->phoneNumber,
            'password' =>\Hash::make('1234') 
            ]);
	}
}
