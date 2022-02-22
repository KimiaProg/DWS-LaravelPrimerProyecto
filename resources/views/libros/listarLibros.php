<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($libro)) {
        echo "<h1>Tu libro elegido es:</h1>";
        echo "Titulo: " . $libro->titulo . "<br>";
        echo "Autor: " . $libro->autor . "<br>";
        echo "Idioma: " . $libro->idioma . "<br>";
        echo "Publicación: " . $libro->publicacion . "<br>";
        echo "Editorial: " . $editorial->nombre . "<br>";
    }
    if (isset($libros)) {
       echo ' <h1>Lista de Libros</h1>';
       echo "<table border= 1>";
       echo "<tr><th>ISBN</th><th>Titulo</th><th>Autor</th><th>Idioma</th><th>Publicacion</th><th>Editorial</th></tr>";

        foreach ($libros as $libro) {
            echo "<tr>";
            echo "<td>" . $libro->ISBN . "</td>";
            echo "<td>" . $libro->titulo . "</td>";
            echo "<td>" . $libro->autor . "</td>";
            echo "<td>" . $libro->idioma . "</td>";
            echo "<td>" . $libro->publicacion . "</td>";
            echo "<td><a href='/editorial/".$libro->editorial."'>" . $libro->editorial . "</a></td>";
            echo "</tr>";

        }
        echo "</table>";

    }
    ?>
</body>

</html>