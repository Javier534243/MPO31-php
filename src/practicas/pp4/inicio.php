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
            <input type="text" id="nombre" name="nombre" value="Javier">
        </div>
        <div>
            <label for="telefono"></label>
            <input type="tel" id="telefono" name="telefono" value="23232323">
        </div>
        <div>
            <label for="fotoPerfil"></label>
            <textarea name="fotoPerfil" id="fotoPerfil" name="fotoPerfil" value="https://empresas.blogthinkbig.com/wp-content/uploads/2019/11/Imagen3-245003649.jpg?fit=960%2C720?w=800"></textarea>
        </div> 
        <button type="submit">Enviar</button>
    </form>
</body>
</html>