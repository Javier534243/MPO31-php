<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocine</title>
    <link rel="stylesheet" href="styles.css">
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
          "trailer" => '<iframe width="560" height="315" src="https://www.youtube.com/embed/soYBxkggwKQ?si=ZImaOAh1urFjk-yU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>'
        ],
        [
          "nombre" => "Cronos",
          "imagen" => "imgPeliculas/cronos.jpeg",
          "horarios" => ["16:15","22:30"],
          "sinopsis" => "Barcelona, 17 de agosto de 2017. En una calurosa tarde de verano, con las calles llenas de gente, un atentado lo cambia todo para siempre. Mientras el caos se apodera de la ciudad, se activa el dispositivo Cronos: un operativo policial con el objetivo de capturar a los responsables del ataque, no solo por lo que han hecho sino por lo que aún pueden hacer. Durante los días que siguen, las fuerzas de seguridad lideran una operación contrarreloj mientras la población responde unida con tres palabras: No tinc por (No tengo miedo).",
          "duracion" => 118,
          "director" => "Fernando González Molina",
          "actores" => ["Enric Auquer","Diana Gómez","Mónica López","Pablo Derqui"],
          "clasificacion" => 12,
          "genero" => "Thriller drama",
          "trailer" => '<iframe width="560" height="315" src="https://www.youtube.com/embed/XymFT_jUeXY?si=hKyopraPE6UH07ia" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>'
        ],
        [
          "nombre" => "DIGGER",
          "imagen" => "imgPeliculas/digger.jpeg",
          "horarios" => ["19:45","22:15"],
          "sinopsis" => "El hombre más poderoso del mundo se embarca en una misión frenética para demostrar que es el salvador de la humanidad antes de que el desastre que ha desatado lo destruya todo.",
          "duracion" => 128,
          "director" => "Fernando González Molina",
          "actores" => ["Tom Cruise","John Goodman"," Sandra Hüller"],
          "clasificacion" => 16,
          "genero" => "Aventuras",
          "trailer" => '<iframe width="560" height="315" src="https://www.youtube.com/embed/4jNrucYsh4A?si=TEAtKRXMEJ4d9IXS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>'
        ],
    ]

    ?>
</head>
<body>
    <header></header>
    <main>
        <div class="contendorPadre">
            <?php foreach($peliculas as $p): ?>
                <div class="contenedorHijo">
                    <img src="<?= $p["imagen"] ?>" alt="imagen <?= $p["nombre"] ?>">
                    <div class="">
                        <div class="nombrePelicula"><?= $p["nombre"] ?></div>
                        <div><a href="" class="botonVerHorarios">VER HORARIOS</a></div>
                        <div>
                            <div class="colorBlanco">Clasificación: <span class="amarillo"><?= $p['clasificacion'] ?> años</span></div>
                            <div class="colorGris"><?= $p['genero'] ?></div>
                        </div>
                        <div class="alinearBotones">
                            <a href="" class="botonesImagenes">TRAILER</a>
                            <a href="" class="botonesImagenes">INFO</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <footer></footer>
</body>
</html>