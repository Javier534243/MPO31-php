<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>

.padre{
    background-color:brown;
    display:flex;
    gap: 10px;
    padding:1em;
    flex-wrap:wrap;

}
.hijo{
    background-color:yellow;
    padding:1rem;

}

    </style>

</head>
<body>
    <div class="padre">
    <?php
        for ($i = 50; $i <= 500; $i++) {
            if ($i%2 ==0) {
                echo('<div class="hijo">'.$i.'</div>');
            }
        }
    ?>

</div>

</body>
</html>