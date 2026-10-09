<?php
#no podemos mostrarr un array con un echo tal cual. Podemos recorrer sus valores con foreach

echo 'hola';

$array = [1,2,'santiago',true,false];


#manera 1 de printear un array o lista -------- print_r()
echo '<pre>';
print_r ($array);
echo '</pre>';
#manera2 de printear un array o lista
echo '<pre>';
var_dump($array);
echo '</pre>';


?>