<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libro')->insert([
        'nombre'=> 'Estructura de datos',
        'autor'=> 'Luis Joyanes',
        ]);
        DB::table('libro')->insert([
        'nombre'=> 'Programacion orientada a objetos',
        'autor'=> 'Luis Joyanes',
        ]);
    }
}
