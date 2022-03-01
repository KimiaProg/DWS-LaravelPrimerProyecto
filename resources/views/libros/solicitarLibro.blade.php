@extends('layouts.master')
@section('title','solcitud Libro')
@section('content')
<div class="container">
    <h1>¿Qué libro quieres solicitar?</h1>

    <form action="/libros/enviarCorreo" method="POST">
        @csrf
        <label>
            Nombre y apellido:
            <input class="form-control" type="text" name="nomApe">
            <br>

        </label>
        <label>
            Correo electrónico:
            <input class="form-control" type="text" name="correo">
            <br>

        </label>

        <label>
            Titulo del libro:
            <input class="form-control" type="text" name="titulo">
            <br>

        </label>

        <label>
            <input class="btn btn-success" type="submit" value="Enviar">
            <br>

        </label>

    </form>
</div>
@endsection
