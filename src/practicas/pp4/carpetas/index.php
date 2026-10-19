<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
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
        $fotoPerfil = $_POST['fotoPerfil'];
    } else {
        $fotoPerfil = "No se sabe";
    }
    
    ?>
</head>
<body>
    <?= include 'header.php'?>
    <main>
        <?= include 'productos.php' ?>
        <?= include 'funciones.php' ?>
        <?= generarTablaProductos($productos), muestraInfoContacto($nombre, $telefono, $fotoPerfil) ?>
    </main>
    <?= include 'footer.php' ?>
    
</body>
</html>