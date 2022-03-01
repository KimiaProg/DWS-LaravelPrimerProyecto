@extends('layouts.master')
@section('title','Listar Editorial')
@section('content')
<div class="container">
    <?php
    if (isset($editorial)) {
        echo "<h1>Tu editorial elegido es:</h1>";
        echo "Nombre: " . $editorial->nombre . "<br>";
        echo "Nacionalidad: " . $editorial->nacionalidad . "<br>";
    }
    if (isset($editoriales)) {
       echo ' <h1>Lista de Editoriales</h1>';
       echo "<table class='table table-success table-striped'>";
       echo "<tr><th>Nombre</th><th>Nacionalidad</th></tr>";

        foreach ($editoriales as $editorial) {
            echo "<tr>";
            echo "<td>" . $editorial->nombre . "</td>";
            echo "<td>" . $editorial->nacionalidad . "</td>";
            echo "</tr>";

        }
        echo "</table>";

    }
    ?>
</div>
@endsection

