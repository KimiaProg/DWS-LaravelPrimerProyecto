<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ListaLibros</h1>
    <?php
    if(isset($libro)){
        echo $libro;
    }
    if(isset($libros)){
        //var_dump($libros);
        foreach ($libros as $libro) {
            echo $libro->titulo . "<br>";
            echo $libro->publicacion;
        }
    }
    ?>
</body>
</html>