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

    public function listarUno(Libro $libro)
    {
        return view("libros.listarLibros", compact('libro'));
    }

    public function create()
    {
        return view("libros.create");
    }
    

    public function update(Libro $libro)
    {
        return view("libros.update", compact("libro"));
    }

    public function realizarCreate(Request $request)
    {
        $libro = new Libro();
        $libro->ISBN = $request->ISBN;
        $libro->titulo = $request->titulo;
        $libro->idioma = $request->idioma;
        $libro->autor = $request->autor;
        $libro->publicacion = $request->publicacion;
        $libro->editorial = $request->editorial;
        $libro->save();
    }

    public function realizarUpdate(Request $request){
        $isbn = $_POST["ISBN"];
        $libro =Libro::find($isbn);
        $libro->titulo = $request->titulo;
        $libro->idioma = $request->idioma;
        $libro->autor = $request->autor;
        $libro->publicacion = $request->publicacion;
        $libro->editorial = $request->editorial;
        $libro->save();   
     }
}
