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

        //Editoriales a insertar--------------------------------------------------------------------------
        $editorial = new Editorial();
        $editorial->nombre='Bloomsbury';
        $editorial->nacionalidad='Reino Unido';
        $editorial->save();

        $editorial2 = new Editorial();
        $editorial2->nombre='Scholastic Corporation';
        $editorial2->nacionalidad='EE.UU';
        $editorial2->save();

        $editorial2 = new Editorial();
        $editorial2->nombre='Salamandra';
        $editorial2->nacionalidad='Española';
        $editorial2->save();

        $editorial2 = new Editorial();
        $editorial2->nombre='ABC Atticus';
        $editorial2->nacionalidad='Rusa';
        $editorial2->save();

        $editorial2 = new Editorial();
        $editorial2->nombre='Rosman';
        $editorial2->nacionalidad='Rusa';
        $editorial2->save();
        
        $editorial2 = new Editorial();
        $editorial2->nombre='A-ba-ba-ha-la-ma-ha';
        $editorial2->nacionalidad='Ucraniana';
        $editorial2->save();

        $editorial2 = new Editorial();
        $editorial2->nombre='Raincoast Books';
        $editorial2->nacionalidad='Canadian';
        $editorial2->save();

        $editorial2 = new Editorial();
        $editorial2->nombre='Egmont Bulgaria';
        $editorial2->nacionalidad='Rusa';
        $editorial2->save();

        $editorial2 = new Editorial();
        $editorial2->nombre='Zangak ';
        $editorial2->nacionalidad='Republic of Armenia';
        $editorial2->save();

        //Libros a insertar-----------------------------------------------------------------------------
        $libro = new Libro();
        $libro->ISBN='9780050666319';
        $libro->titulo='Harry Potter y la piedra filosofal';
        $libro->autor='J. K. Rowling';
        $libro->idioma='Inglés';
        $libro->publicacion='1998-09-01';
        $libro->editorial=1;
        $libro->save();

        $libro = new Libro();
        $libro->ISBN='9780195798760';
        $libro->titulo='Harry Potter y la cámara secreta';
        $libro->autor='J. K. Rowling';
        $libro->idioma='Inglés';
        $libro->publicacion='1998-07-02';
        $libro->editorial=2;
        $libro->save();

        $libro = new Libro();
        $libro->ISBN='9780195799156';
        $libro->titulo='Harry Potter y el prisionero de Azkaban';
        $libro->autor='J. K. Rowling';
        $libro->idioma='Inglés';
        $libro->publicacion='1999-09-08';
        $libro->editorial=1;
        $libro->save();

        $libro = new Libro();
        $libro->ISBN='9780195799163';
        $libro->titulo='Harry Potter y el cáliz de fuego';
        $libro->autor='J. K. Rowling';
        $libro->idioma='Inglés';
        $libro->publicacion='2000-09-08';
        $libro->editorial=1;
        $libro->save();

        $libro = new Libro();
        $libro->ISBN='9780320048500';
        $libro->titulo='Harry Potter y la Orden del Fénix';
        $libro->autor='J. K. Rowling';
        $libro->idioma='Inglés';
        $libro->publicacion='2003-09-21';
        $libro->editorial=1;
        $libro->save();

        $libro = new Libro();
        $libro->ISBN='9780329414382';
        $libro->titulo='Harry Potter y el misterio del príncipe';
        $libro->autor='J. K. Rowling';
        $libro->idioma='Inglés';
        $libro->publicacion='2005-09-16';
        $libro->editorial=1;
        $libro->save();

        $libro = new Libro();
        $libro->ISBN='9780605191549';
        $libro->titulo='Harry Potter y las reliquias de la Muerte';
        $libro->autor='J. K. Rowling';
        $libro->idioma='Inglés';
        $libro->publicacion='2007-09-21';
        $libro->editorial=1;
        $libro->save();
    }
}
