<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;


class LibroController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function listar()
    {
        $libros= Libro::all();
        return view("libros.listarLibros", compact('libros'));
    }

    public function listarUno($libro)
    {
        return view("libros.listarLibros", compact('libro'));
    }
    public function update()
    {
        return view("libros.update");
    }

    public function create()
    {
        return view("libros.create");
    }
}
