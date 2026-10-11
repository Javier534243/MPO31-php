<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocine</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/b51cd60f76.js" crossorigin="anonymous"></script>
    <?php
    
    $peliculas = [
        [
          "nombre" => "Coyote vs Acme",
          "imagen" => "imgPeliculas/coyote.jpeg",
          "horarios" => ["20:00"],
          "sinopsis" => "Harto de que los productos Acme le fallen una y otra vez en su incansable persecución del Correcaminos, el Coyote decide contratar a un abogado de poca monta para demandar a la Corporación Acme.",
          "duracion" => 102,
          "director" => "Dave Green",
          "actores" => [],
          "clasificacion" => 7,
          "genero" => "comèdia",
          "trailer" => "https://www.youtube.com/embed/soYBxkggwKQ?si=ZImaOAh1urFjk-yU"
        ],
        [
          "nombre" => "Cronos",
          "imagen" => "imgPeliculas/cronos.jpeg",
          "horarios" => ["16:15","22:30"],
          "sinopsis" => "Barcelona, 17 de agosto de 2017. En una calurosa tarde de verano, con las calles llenas de gente, un atentado lo cambia todo para siempre. Mientras el caos se apodera de la ciudad, se activa el dispositivo Cronos: un operativo policial con el objetivo de capturar a los responsables del ataque, no solo por lo que han hecho sino por lo que aún pueden hacer. Durante los días que siguen, las fuerzas de seguridad lideran una operación contrarreloj mientras la población responde unida con tres palabras: No tinc por (No tengo miedo).",
          "duracion" => 118,
          "director" => "Fernando González Molina",
          "actores" => ["Enric Auquer","Diana Gómez","Mónica López","Pablo Derqui"],
          "clasificacion" => "12 anys",
          "genero" => "Thriller drama",
          "trailer" => "https://www.youtube.com/embed/XymFT_jUeXY?si=hKyopraPE6UH07ia"
        ],
        [
          "nombre" => "DIGGER",
          "imagen" => "imgPeliculas/digger.jpeg",
          "horarios" => ["19:45","22:15"],
          "sinopsis" => "El hombre más poderoso del mundo se embarca en una misión frenética para demostrar que es el salvador de la humanidad antes de que el desastre que ha desatado lo destruya todo.",
          "duracion" => 128,
          "director" => "Fernando González Molina",
          "actores" => ["Tom Cruise","John Goodman"," Sandra Hüller"],
          "clasificacion" => "16 anys",
          "genero" => "Aventuras",
          "trailer" => "https://www.youtube.com/embed/4jNrucYsh4A?si=TEAtKRXMEJ4d9IXS"
        ],
        [
          "nombre" => "Doraemon: aventuras en el mundo del arte",
          "imagen" => "imgPeliculas/doraemon.jpeg",
          "horarios" => ["12:00","16:40"],
          "sinopsis" => "Doraemon, Nobita y sus amigos entran dentro de una pintura que los transporta a Artelia, un mundo ilustrado inspirado en la Europa medieval. Junto a Claire y sus amigos Milo y Chai, se embarcan en una gran aventura para recuperar una misteriosa piedra azul.",
          "duracion" => 104,
          "director" => "Yukiyo Teramoto",
          "actores" => ["Tom Cruise","John Goodman"," Sandra Hüller"],
          "clasificacion" => "Apta",
          "genero" => "Animación",
          "trailer" => "https://www.youtube.com/embed/DgmGALXIsgA?si=9zt76dHaYYjWYZsC"
        ],
        [
          "nombre" => "El arbol muy muy lejano",
          "imagen" => "imgPeliculas/arbol.jpeg",
          "horarios" => ["16:00"],
          "sinopsis" => "Una familia moderna encabezada por Tim (Andrew Garfield) y Polly (Claire Foy) se ve obligada a mudarse a la campiña inglesa. Sus hijos descubren, con la ayuda de Seditas (Nicola Coughlan), un árbol mágico capaz de transportarlos a mundos desconocidos. A través de sus aventuras, la familia aprende a reconectar y a valorarse mutuamente de nuevo.",
          "duracion" => 110,
          "director" => "Ben Gregor",
          "actores" => ["Andrew Garfield,","Nonso Anozie"," Claire Foy","Rebecca Ferguson"],
          "clasificacion" => "Apta",
          "genero" => "Aventuras",
          "trailer" => "https://www.youtube.com/embed/zLCISSEt8dw?si=Y9iozh_4UGwFMnGs"
        ],
        [
          "nombre" => "El precio de la red",
          "imagen" => "imgPeliculas/red.jpeg",
          "horarios" => ["12:00","16:00","18:15","20:30", "22:40"],
          "sinopsis" => "La nueva película se centra en los acontecimientos que tienen lugar casi dos décadas después de que el genio programador y un grupo de pioneros de la tecnología inventaran lo que acabaría convirtiéndose en la mayor plataforma de redes sociales del mundo. Cuenta la historia real de cómo Frances Haugen (Madison), una joven ingeniera de Facebook, consigue la ayuda de Jeff Horwitz (White), un reportero del Wall Street Journal, para emprender un peligroso viaje que acaba destapando los secretos más ocultos de la red social.",
          "duracion" => 112,
          "director" => "Aaron Sorkin",
          "actores" => ["Jeremy Allen White", "Jeremy Strong", "Mikey Madison", "Wunmi Mosaku"],
          "clasificacion" => "12 años",
          "genero" => "Thriller",
          "trailer" => "https://www.youtube.com/embed/cNbAPdz04UE?si=nlysbrrKAu5mBvAi"
        ],
    ]

    ?>
</head>
<body>
    <nav>
        <div>
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
                        <a class="texto-nav" href="#">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a class="texto-nav" href="#">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a class="texto-nav" href="#">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a class="texto-nav" href="#">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div>
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
    <header></header>
    <main>
        <div>
            <h1>Cartellera</h1>
        </div>
        <div class="contendorPadre">
            <?php foreach($peliculas as $p): ?>
                <div class="contenedorHijo">
                    <img class="estilo-imagen" src="<?= $p["imagen"] ?>" alt="imagen <?= $p["nombre"] ?>">
                    <div class="">
                        <div class="nombrePelicula"><?= $p["nombre"] ?></div>
                        <div><a href="" class="botonVerHorarios">VER HORARIOS</a></div>
                        <div>
                            <div class="colorBlanco">Clasificación: <span class="amarillo"><?= $p['clasificacion'] ?></span></div>
                            <div class="colorGris"><?= $p['genero'] ?></div>
                        </div>
                        <div class="alinearBotones">
                            <a href="" class="botonesImagenes">TRAILER</a>
                            <a href="detall.php?nombre=<?= $p["nombre"] ?>&imagen=<?= $p["imagen"] ?>&sinopsis=<?= $p["sinopsis"] ?>&duracion=<?= $p["duracion"] ?>&director=<?= $p["director"] ?>&clasificacion=<?= $p["clasificacion"] ?>&genero=<?= $p["genero"] ?>&trailer=<?= urlencode($p["trailer"])?>" class="botonesImagenes">INFO</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <footer></footer>
</body>
</html>