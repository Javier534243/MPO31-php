<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 

    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
    }else {
        $nombre = "No se sabe";
    }
    if (isset($_POST['telefono'])) {
        $telefono = $_POST['telefono'];
    } else {
        $telefono = "No se sabe";
    }
    if (isset($_POST['fotoPerfil'])) {
        $fotoPerfil = $_POST['fotoPerfil']
    } else {
        $fotoPerfil = "No se sabe"
    }
    
    ?>
</head>
<body>
    <h1>Resultados</h1>
    
</body>
</html>