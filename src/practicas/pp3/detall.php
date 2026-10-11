<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
    <link rel="stylesheet" href="styles.css">
    <?php
        if (isset($_GET["nombre"])) {
            $nombre = $_GET["nombre"];
            $imagen = $_GET["imagen"];
            $sinopsis = $_GET["sinopsis"];
            $duracion = $_GET["duracion"];
            $director = $_GET["director"];
            $clasificacion = $_GET["clasificacion"];
            $genero = $_GET["genero"];
            $trailer = $_GET["trailer"];
        }
    ?>
</head>
<body>
    <header></header>
    <main>
        <div>
            <h1><?= $nombre ?></h1>
            <div class="alinear-contenedor">
                <div>
                    <div><img class="estilo-imagen" src="<?= $imagen ?>" alt="<?= $nombre ?>"></div>
                    <button class="boton-trailer">Trailer</button>
                    <div class="hidden"><iframe width="560" height="315" src="<?= $trailer ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
                </div>
                <div>
                    <p><?= $sinopsis ?></p>
                    <ul>
                        <li>
                            Duración: <?= $duracion ?> m
                        </li>
                        <li>
                            Director: <?= $director ?>
                        </li>
                        <li>
                            Clasificacion: <?= $clasificacion ?>
                        </li>
                        <li>
                            Genero: <?= $genero ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
</body>
</html>