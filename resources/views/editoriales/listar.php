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
    if (isset($editorial)) {
        echo "<h1>Tu editorial elegido es:</h1>";
        echo "Nombre: " . $editorial->nombre . "<br>";
        echo "Nacionalidad: " . $editorial->nacionalidad . "<br>";
    }
    if (isset($editoriales)) {
       echo ' <h1>Lista de Editoriales</h1>';
       echo "<table border= 1>";
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
</body>

</html>