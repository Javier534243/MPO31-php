<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .par {
            background-color: red;
        }

        .impar {
            background-color: blue;
        }
    </style>
</head>
<body>
    <?php
    
    $valor = rand(0,100);

    if ($valor%2 == 0) {
        echo '<div class="par">'.$valor.'</div>';
    } else {
        echo '<div class="impar">'.$valor.'</div>';
    }

    ?>
</body>
</html>