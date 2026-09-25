<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $edat = 5;

    echo 'hola';
    #condicional simple if else
    if ($edat >= 18) {
        echo ('Ets major de edat');
    } else {
        echo 'Ets menor';
    }

    #sintaxis alternativa
    <?php if ($edat >= 18):?>
    <p>ERES MAYOR DE EDAD</p>
    <?php else:?>
        <p>Eres menor de edad</p>
        <?php endif;?>
    
    <?php
        $bola = 28;
        if ($bola==0):?>
            <p>Ha caido en 0</p>
        <?php elseif($bola%2==0):?>
            <p>Nombre par</p>
        <?php else:?>
            <p>Nombre impar</p>
        <?php endif;?>

    <!-- <div>Caixa 1</div>
    <div>Caixa 2</div>
    <div>Caixa 3</div>
    <div>Caixa 4</div>
    <div>Caixa 5</div> -->

    <?php
    $limite = 80;
    ?>

    <?php for ($i = 1; $i <= 5; $i++): ?>
    <div>Caixa <?= $i ?></div>
    <?php endfor; ?>

    <?php
    $lista = [0,1,2,3,4,5,6];
    foreach($lista is $elemento){
        echo $elemento;
    }

    

    ?>
    
</body>
</html>