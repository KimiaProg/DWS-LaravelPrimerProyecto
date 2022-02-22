<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/libros/realizarCreate" method="POST">
        
        <input type="text" name="ISBN">
        <input type="text" name="titulo">
        <input type="text" name="autor">
        <input type="text" name="idioma">
        <input type="text" name="publicacion">
        <input type="text" name="editorial">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>