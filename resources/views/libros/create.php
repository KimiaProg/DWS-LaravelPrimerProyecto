<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Crea un Libro:</h1>

    <form action="/libros/realizarCreate" method="POST">
        <label>
            ISBN:
            <input type="text" name="ISBN">
            <br>

        </label>
        <label>
            titulo:
            <input type="text" name="titulo">
            <br>

        </label>

        <label>
            autor:
            <input type="text" name="autor">
            <br>

        </label>

        <label>
            idioma:
            <input type="text" name="idioma">
            <br>
        </label>

        <label>
            publicacion:
            <input type="text" name="publicacion">
            <br>
        </label>

        <label>
            editorial:
            <input type="text" name="editorial">
            <br>

        </label>

        <label>
            <input type="submit" value="Enviar">
            <br>

        </label>

    </form>
</body>

</html>