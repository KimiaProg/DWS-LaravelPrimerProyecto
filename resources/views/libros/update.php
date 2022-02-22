<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/libros/realizarUpdate" method="POST">
        <input type="text" name="ISBN" value="<?php echo $libro->ISBN?>">
        <input type="text" name="titulo" value="<?php echo $libro->titulo?>">
        <input type="text" name="autor" value="<?php echo $libro->autor?>">
        <input type="text" name="idioma" value="<?php echo $libro->idioma?>">
        <input type="text" name="publicacion" value="<?php echo $libro->publicacion?>">
        <input type="text" name="editorial" value="<?php echo $libro->editorial?>">
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>