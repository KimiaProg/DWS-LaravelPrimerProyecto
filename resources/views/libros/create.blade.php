@extends('layouts.master')
@section('title','createLibro')
@section('content')
<div class="container">
    <h1>Crea un Libro:</h1>

    <form action="/libros/realizarCreate" method="POST">
        <label>
            ISBN:
            <input class="form-control" type="text" name="ISBN">
            <br>

        </label>
        <label>
            titulo:
            <input class="form-control" type="text" name="titulo">
            <br>

        </label>

        <label>
            autor:
            <input class="form-control" type="text" name="autor">
            <br>

        </label>

        <label>
            idioma:
            <input  class="form-control"type="text" name="idioma">
            <br>
        </label>

        <label>
            publicacion:
            <input class="form-control" type="text" name="publicacion">
            <br>
        </label>

        <label>
            editorial:
            <input class="form-control" type="text" name="editorial">
            <br>

        </label>

        <label>
            <input class="btn btn-success" type="submit" value="Enviar">
            <br>

        </label>

    </form>
</div>
@endsection
