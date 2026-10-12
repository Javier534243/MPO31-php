<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/b51cd60f76.js" crossorigin="anonymous"></script>
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
            $horarios = explode(',',$_GET["horarios"]);
        }
    ?>
</head>
<body>
    <nav class="padding-inline-40px">
        <div class="alinearIzquierda">
            <div>
                <div>
                    <label for="idioma"><i class="fa-solid fa-globe"></i></label>
                    <select name="idiomas" id="idioma">
                        <option value="español">ES</option>
                    </select>
                </div>
            </div>
            <div>
                <ul class="alinear-contenedor quitarPunto">
                    <li>
                        <a class="texto-nav linkIconos" href="#">
                            <i class="fa-brands fa-facebook iconos"></i>
                        </a>
                    </li>
                    <li>
                        <a class="texto-nav linkIconos" href="#">
                            <i class="fa-brands fa-instagram iconos"></i>
                        </a>
                    </li>
                    <li>
                        <a class="texto-nav linkIconos" href="#">
                            <i class="fa-brands fa-x-twitter iconos"></i>
                        </a>
                    </li>
                    <li>
                        <a class="texto-nav linkIconos" href="#">
                            <i class="fa-brands fa-tiktok iconos"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="alinearNavegador">
            <div>
                <img src="imgPeliculas/logoPagina.png" alt="logo de pagina">
            </div>
            <div>
                <ul class="alinear-contenedor quitarPunto texto-nav">
                    <li>
                        <a class="texto-nav" href="#">CARTELERA</a>
                    </li>
                    <li>
                        <a class="texto-nav" href="#">BAR</a>
                    </li>
                    <li>
                        <a class="texto-nav" href="#">FIDELITY</a>
                    </li>
                    <li>
                        <a class="texto-nav" href="#">SERVICIOS</a>
                    </li>
                    <li>
                        <a class="texto-nav" href="#">OTROS CINES</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="">
        <img class="width-100percent" src="imgPeliculas/headerImagen.jpg" alt="header imagen">
    </header>
    <main>
        <section class="centrar-contenidoCentro max-width-1200px margin-inline-auto">
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
                    <div>
                        <div></div>
                        <div>
                            horarios: <?php foreach($horarios as $hora): ?>
                                    <?= $hora ?>
                                <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </main>
    <footer></footer>
</body>
</html>