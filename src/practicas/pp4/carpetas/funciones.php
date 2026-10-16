<?php

include 'productos.php';

generarTablaProductos($productos): ?> 
    <table>
        <?php foreach($productos as $p): ?>
            <tr>
                <td>
                    <?= $p['nombre'] ?>
                </td>
                <td>
                    <?= number_format($p['precio']) ?>
                </td>
                <td>
                    <?= $p['disponiblidad'] ? "En stock" : "Agotado" ?>
                </td>
            </tr>
        <? endforeach; ?>
    </table>



<?php
include '../inicio.php';
muestraInfoContacto($nombre, $telefono, $foto): ?>
    <div>
        <p>Nombre: <?= $nombre ?></p>
        <p>Telefono: <?= $telefono ?></p>
        <p><img src="<?= $fotoPerfil ?>" alt="imagen"></p>
    </div>