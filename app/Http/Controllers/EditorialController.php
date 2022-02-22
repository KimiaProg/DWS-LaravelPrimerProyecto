<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editorial;


class EditorialController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function listar()
    {
        $editoriales = Editorial::all();
        return view("editoriales.listar", compact('editoriales'));
    }

    public function listarUno(Editorial $editorial)
    {
        return view("editoriales.listar", compact('editorial'));
    }
    public function create()
    {
        return view("editoriales.create");
    }

    public function realizarCreate(Request $request)
    {
        $editorial = new Editorial();
        $editorial->nombre = $request->nombre;
        $editorial->nacionalidad = $request->nacionalidad;
        $editorial->save();
    }
}
