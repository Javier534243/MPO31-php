<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inicio formulario</h1>
    <form action="carpetas/index.php" method="post">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div>
            <label for="telefono"></label>
            <input type="tel" id="telefono" name="telefono">
        </div>
        <div>
            <label for="fotoPerfil"></label>
            <textarea name="fotoPerfil" id="fotoPerfil" name="fotoPerfil"></textarea>
        </div> 
        <button type="submit">Enviar</button>
    </form>
</body>
</html>