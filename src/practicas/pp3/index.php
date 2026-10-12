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
          "clasificacion" => "7 anys",
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
        [
          "nombre" => "En el corazón de la bestia",
          "imagen" => "imgPeliculas/corazon.jpeg",
          "horarios" => ["12:15","20:30","18:30","22:30"],
          "sinopsis" => "Tras sobrevivir a un brutal accidente aéreo, un oficial de Fuerzas Especiales y su perro de combate quedan atrapados en el corazón indomable de Alaska. Frente a una naturaleza implacable, ambos deberán luchar al límite por sobrevivir. Dirigida por David Ayer, EN EL CORAZÓN DE LA BESTIA es un intenso y emocionante thriller de aventuras sobre lealtad, coraje y el vínculo inquebrantable entre un soldado y su compañero más fiel en su mayor desafío.",
          "duracion" => 101,
          "director" => "David Ayer",
          "actores" => ["Brad Pitt", "J.K. Simmons", "Anna Lambe"],
          "clasificacion" => "12 años",
          "genero" => "Acción",
          "trailer" => "https://www.youtube.com/embed/Rh24D89hFMg?si=7_E-11AHgbL_Fb1s",
        ],
        [
          "nombre" => "Escape room 2",
          "imagen" => "imgPeliculas/escape.jpeg",
          "horarios" => ["12:15","20:30","22:20"],
          "sinopsis" => "Cinco años después, Edu, Marina, Viky y Rai vuelven a coincidir misteriosamente en un nuevo local de moda situado en lo alto de la montaña de Montjuïc, donde antiguamente se encontraba el parque de atracciones. No tardarán en darse cuenta de que aquel establecimiento no es lo que parece. Pronto irán a parar a una antigua atracción, un túnel del terror que había quedado sepultado, donde aparece un contador acompañado de un mensaje amenazador que les resulta inquietantemente familiar: tienen 60 minutos para salir o morirán.",
          "duracion" => 88,
          "director" => "Hèctor Claramunt",
          "actores" => ["Joel Joan", "Ivan Massagué", "Paula Vives", "Mònica Pérez"],
          "clasificacion" => "",
          "genero" => "Comèdia",
          "trailer" => "https://www.youtube.com/embed/LKipBN8bSwk?si=TwWYfyDQrLgHAjU7",
        ],
    ];

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
    <main class="">
        <section class="centrar-contenidoCentro max-width-1200px margin-inline-auto">
            <div class="text-left width-100percent border-bottom-title margin-bottom-20px">
                <h1 class="text-left">Cartellera</h1>
            </div>
            <div class="contendorPadre padding-inline-40px">
                <?php foreach($peliculas as $p): ?>
                    <?php 
                        $datos_enlace = $p;
                        unset($datos_enlace['sinopsis'], $datos_enlace['trailer']);

                        $query_string = http_build_query($datos_enlace);

                        ?>
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
                                <a href="detall.php?<?= $query_string ?>" class="botonesImagenes">INFO</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
    <footer></footer>
</body>
</html>