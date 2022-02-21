<?php

namespace Database\Seeders;

use App\Models\Editorial;
use App\Models\Libro;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $editorial = new Editorial();
        $editorial->nombre='Bloomsbury';
        $editorial->nacionalidad='Reino Unido';
        $editorial->save();

        $editorial2 = new Editorial();
        $editorial2->nombre='Kazu Kibuishi';
        $editorial2->nacionalidad='Reino Unido';
        $editorial2->save();

        $editorial2 = new Editorial();
        $editorial2->nombre='Kazu Kibuishi';
        $editorial2->nacionalidad='Reino Unido';
        $editorial2->save();

        $editorial2 = new Editorial();
        $editorial2->nombre='Kazu Kibuishi';
        $editorial2->nacionalidad='Reino Unido';
        $editorial2->save();

        $editorial2 = new Editorial();
        $editorial2->nombre='Kazu Kibuishi';
        $editorial2->nacionalidad='Reino Unido';
        $editorial2->save();

        $editorial2 = new Editorial();
        $editorial2->nombre='Kazu Kibuishi';
        $editorial2->nacionalidad='Reino Unido';
        $editorial2->save();
        
        $editorial2 = new Editorial();
        $editorial2->nombre='Kazu Kibuishi';
        $editorial2->nacionalidad='Reino Unido';
        $editorial2->save();


        $libro = new Libro();
        $libro->ISBN='123';
        $libro->titulo='Reino Unido';
        $libro->autor='Reino Unido';
        $libro->idioma='Reino Unido';
        $libro->publicacion='2020-01-01';
        $libro->editorial=1;
        $libro->save();
    }
}
