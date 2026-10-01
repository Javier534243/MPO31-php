<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .contenedor {
            display: flex;
            gap: 20px;
        }
        .cuadrado {
            padding: 10px;
            background-color: #aaf;
            border-radius: 10px;
        }
        .error {
            color: red;
        }
        .ok {
            color: green;
        }
    </style>
</head>
<body>
    <?php
    $numero = rand(1,100);
    $contador = 0;
    $activador = false;
    ?>
    <h1>Nombre geneat: <?php echo $numero ?></h1>
    <h2>Divisors de <?php echo $numero ?>:</h2>
    <div class="contenedor">
        <?php for($i = 1; $i <= $numero;$i++): ?>
            <?php if ($numero%$i == 0): ?>
                <div class="cuadrado"><?php echo $i ?></div>
                <?php $contador++ ?>
            <?php if($contador > 2) {
                $activador = true;
            }
            ?>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
    <?php $i-- ?>
    <?php if($activador == true): ?>
        <div class="error"><?php echo $i ?> no és un nombre primer</div>
    <?php else: ?>
        <div class="ok"><?php echo $i ?> és un nombre primer</div>
    <?php endif;?>
</body>
</html>