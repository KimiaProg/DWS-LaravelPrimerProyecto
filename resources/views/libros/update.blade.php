@extends('layouts.master')
@section('title','Atualizar Libro')
@section('content')
<div class="container">
    <h1>Actualiza tu libro:</h1>
    <form action="/libros/realizarUpdate" method="POST">

            <input class="form-control" type="hidden" name="ISBN" value="<?php echo $libro->ISBN ?>">


        <label>
            titulo:
            <input class="form-control" type="text" name="titulo" value="<?php echo $libro->titulo ?>">
            <br>

        </label>

        <label>
            autor:
            <input class="form-control" type="text" name="autor" value="<?php echo $libro->autor ?>">
            <br>

        </label>

        <label>
            idioma:
            <input class="form-control" type="text" name="idioma" value="<?php echo $libro->idioma ?>">
            <br>
        </label>

        <label>
            publicacion:
            <input class="form-control" type="text" name="publicacion" value="<?php echo $libro->publicacion ?>">
            <br>
        </label>

        <label>
            editorial:
            <input class="form-control" type="text" name="editorial" value="<?php echo $libro->editorial ?>">
            <br>

        </label>

        <label>
            <input  class="btn btn-success" type="submit" value="Enviar">
            <br>

        </label>
    </form>
</div>
@endsection
