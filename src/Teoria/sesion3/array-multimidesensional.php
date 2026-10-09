<?php


$alumne = [
    [
        "nombre" => 'Albert',
        "edad" => 31,
    ],
    [
        "nombre" => 'Javier',
        "edad" => 40,
    ],
    [
        "nombre" => 'Manuel',
        "edad" => 20,
    ],
];

echo '<pre>';
var_dump($alumne);

echo '</pre>';

print_r($alumne[0]);

foreach ($alumne as $id=>$p): ?>

<div>
    <h1><?= $id ?></h1>
    <p><?= $p['nombre'] ?></p>
    <a href="arrays.php?id=<?= $id+1?>"><?= $p['edad'] ?></a>
    <button><?= $p['edad'] ?></button>
</div>

<?php endforeach; ?>