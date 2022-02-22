<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Crea un editorial:</h1>
    <form action="/editorial/realizarCreate" method="POST">
        <label>
            nombre:
            <input type="text" name="nombre">
            <br>

        </label>
        <label>
            nacionalidad:
            <input type="text" name="nacionalidad">
            <br>

        </label>
        <label>
            <input type="submit" value="Enviar">
            <br>

        </label>
    </form>
</body>

</html>