@extends('layouts.master')
@section('title','crear Editorial')
@section('content')
<div class="container">
    <h1>Crea un editorial:</h1>
    <form action="/editorial/realizarCreate" method="POST">
        <label>
            nombre:
            <input class="form-control" type="text" name="nombre">
            <br>

        </label>
        <label>
            nacionalidad:
            <input class="form-control" type="text" name="nacionalidad">
            <br>

        </label>
        <label>
            <input class="btn btn-success" type="submit" value="Enviar">
            <br>

        </label>
    </form>
</div>
@endsection
