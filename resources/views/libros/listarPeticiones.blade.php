@extends('layouts.master')
@section('title','Listar Peticiones')
@section('content')
<div class="container">
    <?php
       echo ' <h1>Lista de Peticiones</h1>';
       echo "<table class='table table-success table-striped'>";
       echo "<tr><th>NombreApellido</th><th>tituloLibro</th><th>correoElectronico</th></tr>";

        foreach ($peticiones as $peticion) {
            echo "<tr>";
            echo "<td>" . $peticion->nombreApellido . "</td>";
            echo "<td>" . $peticion->tituloLibro . "</td>";
            echo "<td>" . $peticion->correoElectronico . "</td>";
            echo "</tr>";

        }
        echo "</table>";

    
    ?>
</div>
@endsection