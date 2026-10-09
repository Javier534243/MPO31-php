<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .contenedorPrincipal {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            max-width: 1400px;
            margin: 0 auto;
            justify-content: center;
        }
        .frio {
            background-color: #4af;
        }
        .templado {
            background-color: #d3d368;
        }
        .calor {
            background-color: #f42;
        }
        .oscuro {
            color: #333;
        }
        .claro {
            color: #fff;
        }
        .grande {
            font-size: 2rem;
        }
        .cuadrado {
            text-aling: center;
            padding: 20px 50px;
            width: 300px;
        }
        .centrar {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 class="centrar">Classificación de temperaturas</h1>
    <div class="contenedorPrincipal">
        <?php 
        $promedio = 0;
        ?>
        <?php for($i = 0; $i <= 10;$i++): ?>
            <?php $temperatura = rand(-10,40);
                $promedio += $temperatura;
            ?>
            <?php if ($temperatura < 10): ?>
                <div class="frio cuadrado">
                    <div class="claro grande centrar"><?php echo $temperatura ?>ºC</div>
                    <p class="claro centrar">Fred</p>
                </div>
            <?php elseif($temperatura >= 10 && $temperatura <= 25): ?>
                <div class="templado cuadrado">
                    <div class="oscuro grande centrar"><?php echo $temperatura ?>ºC</div>
                    <p class="oscuro centrar">Temperatura suau</p>
                </div>
            <?php else: ?>
                <div class="calor cuadrado">
                    <div class="claro grande centrar"><?php echo $temperatura ?>ºC</div>
                    <p class="claro centrar">Calor</p>
                </div>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
    <?php 
    $promedio = $promedio/10;
    ?>
    <div class="centrar">Mitjana de les temperatures: <?php echo $promedio ?>ºC</div>
</body>
</html>