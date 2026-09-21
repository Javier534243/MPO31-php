<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="margin-0px font-family">
    <header class="flex aling-items-center justify-content-space-between background-color color-white padding-inline-40px gap-20px">
        <img src="imagenes/logo-fpllefia.png" alt="Logo fpllefia" class="logo">
        <?php 
        echo("<h1>Módulo 7 - Práctica 1. Mi primera apicación en PHP</h1>")
        ?>
    </header>
    <main class="flex justify-content-center aling-items-start padding-inline-40px height-100percent height-min-height-70vh padding-block-60px ">
        <div class="flex flex-direction-column aling-items-center gap-20px font-size-2rem width-50percent">
            <img src="https://i.blogs.es/f7234d/imagen/500_333.webp" class="border-radius-50percent imagen">
            <?php 
                function miNombre() {
                    $nom = "Javier";
                    return $nom;
                }
                echo(miNombre());
            ?>
        </div>
        <div class="width-50percent line-height width-700px">
            <p>Me llamo Javier López Chacón, estoy haciendo una web o app no se ni que és que no quiero pero tengo que hacer. No me gusta la programacion, ni el diseño web ni mucho menos el php pero aun asi voy a buscar informacion del php para poder terminar la practica porque me pide el anunciado que use la funcion phpInfo() y que llame a la funcion miNombre() que ahora mismo no se ni que és pero supongo que dentro de unos minutos lo sabre. No sé porque estoy haciendo esto si tampoco quiero trabajar de esto, pero igualmente me voy a buscar la vida como dice el anunciado.</p>
        </div>
    </main>
    <footer class="background-color color-white padding-inline-40px flex justify-content-center aling-items-center gap-20px flex-direction-column">
        <div>
            <?php 
            function obtenerFechaHoy() {
                $fechaActual = date('d-m-Y');
                return $fechaActual;
            }
            $nombre = "Javier ";
            $fecha = "21/09/2026";
            echo(miNombre());

            ?>
        </div>
        <div>
            <?=obtenerFechaHoy()?>
        </div>
        
    </footer>
</body>
</html>