<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Generate PDF From View</title>
</head>
<body>

   <?php

    if (isset($libro)) {
        echo "<h1>Tu libro:</h1>";
        echo "ISBN: " . $libro->ISBN . "<br>";
        echo "Titulo: " . $libro->titulo . "<br>";
        echo "Autor: " . $libro->autor . "<br>";
        echo "Idioma: " . $libro->idioma . "<br>";
        echo "Publicación: " . $libro->publicacion . "<br>";
        echo "Editorial: " . $libro->editorial . "<br>";
    }
    if (isset($libros)) {
       echo ' <h1>Lista de Libros</h1>';
        echo "<table border=1>";
       echo "<tr><th>ISBN</th><th>Titulo</th></tr>";

        foreach ($libros as $libro) {
            echo "<tr>";
            echo "<td>" . $libro->ISBN . "</td>";
            echo "<td>" . $libro->titulo . "</td>";
            echo "</tr>";
        }
        echo "</table>";

    }
   ?>
</body>
</html>

