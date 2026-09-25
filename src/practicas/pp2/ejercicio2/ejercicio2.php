<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .padre {
            display: flex;
            flex-wrap:wrap;
            border: 2px solid #000;
            flex-direction: column;
            width: fit-content;
            padding: 2rem;
        }

        .hijo {
            padding: 1rem;
        }
    </style>
</head>
<body>
    <?php
        for ($i = 1; $i <= 11; $i++) {
            echo ('<div class="padre"><h2>Tabla del '.$i.'</h2>');
            for ($j = 0; $j <= 10; $j++) {
                echo ('<div class="hijo">'.$i.' * '.$j.' = '.($i*$j).'</div>');
            }
            echo ('</div>');
        }
    ?>
</body>
</html>