<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(estatusTableSeeder::class);
        $this->call(tipo_usuarioTableSeeder::class);
        $this->call(ubicacionTableSeeder::class);
        $this->call(usuarioTableSeeder::class);
        $this->call(categoriaTableSeeder::class);
        $this->call(marcaTableSeeder::class);
        $this->call(productoTableSeeder::class);
        $this->call(tipo_productoTableSeeder::class);
    }
}
