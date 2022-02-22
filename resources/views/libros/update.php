<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Actualiza tu libro:</h1>
    <form action="/libros/realizarUpdate" method="POST">

            <input type="hidden" name="ISBN" value="<?php echo $libro->ISBN ?>">


        <label>
            titulo:
            <input type="text" name="titulo" value="<?php echo $libro->titulo ?>">
            <br>

        </label>

        <label>
            autor:
            <input type="text" name="autor" value="<?php echo $libro->autor ?>">
            <br>

        </label>

        <label>
            idioma:
            <input type="text" name="idioma" value="<?php echo $libro->idioma ?>">
            <br>
        </label>

        <label>
            publicacion:
            <input type="text" name="publicacion" value="<?php echo $libro->publicacion ?>">
            <br>
        </label>

        <label>
            editorial:
            <input type="text" name="editorial" value="<?php echo $libro->editorial ?>">
            <br>

        </label>

        <label>
            <input type="submit" value="Enviar">
            <br>

        </label>
    </form>
</body>

</html>