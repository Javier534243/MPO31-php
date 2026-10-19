<?php

function generarTablaProductos($productos)
{
    echo '<table>';
    foreach ($productos as $producto) {
        echo '<tr class="'.  ($producto['Disponiblidad'] ? '' : 'agotado') .'">';
        echo '<td>' . ($producto['Nombre']) . '</td>';
        echo '<td>' . number_format($producto['Precio']) . '</td>';
        echo '<td>' . ($producto['Disponiblidad'] ? 'En stock' : 'Agotado') . '</td>';
        echo '<td>' . ($producto['Descripcion']) . '</td>';
        echo '<td>' . ($producto['Categoria']) . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}



function muestraInfoContacto($nombre, $telefono, $fotoPerfil)
{
    echo '<div>';
    echo '<p>Nombre: ' .($nombre) . '</p>';
    echo '<p>Telefono: ' . ($telefono) . '</p>';
    echo '<p><img src="' . ($fotoPerfil) . '" alt="imagen"></p>';
    echo '</div>';
}
