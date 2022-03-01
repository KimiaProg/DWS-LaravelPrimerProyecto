@extends('layouts.master')
@section('title','Listar Libros')
@section('content')
<div class="container">
    <?php
    if (isset($libro)) {
        echo "<h1>Tu libro elegido es:</h1>";
        ?>
       <a href="/createPDFLibro/<?php echo $libro->ISBN?>" class="btn btn-success">Generar PDF</a><br>
       <?php
        echo "Titulo: " . $libro->titulo . "<br>";
        echo "Autor: " . $libro->autor . "<br>";
        echo "Idioma: " . $libro->idioma . "<br>";
        echo "Publicación: " . $libro->publicacion . "<br>";
        echo "Editorial: " . $editorial->nombre . "<br>";
    }
    if (isset($libros)) {
       echo ' <h1>Lista de Libros</h1>';
       ?>
       <a href="/createPDFLibro" class="btn btn-success">Generar PDF</a>
       <?php
       echo "<table class='table table-success table-striped'>";
       echo "<tr><th>ISBN</th><th>Titulo</th><th>Autor</th><th>Idioma</th><th>Publicacion</th><th>Editorial</th></tr>";

        foreach ($libros as $libro) {
            echo "<tr>";
            echo "<td>" . $libro->ISBN . "</td>";
            echo "<td>" . $libro->titulo . "</td>";
            echo "<td>" . $libro->autor . "</td>";
            echo "<td>" . $libro->idioma . "</td>";
            echo "<td>" . $libro->publicacion . "</td>";
            echo "<td><a href='/editorial/".$libro->editorial."'>" . $libro->editorial . "</a></td>";
            echo "<td><a href='/libros/".$libro->ISBN."'>" . 'Detalles' . "</a></td>";
            echo "<td><a href='/libros/update/".$libro->ISBN."'>" . 'Actualizar' . "</a></td>";
            echo "</tr>";

        }
        echo "</table>";

    }
    ?>
</div>
@endsection