<?php

function obtener_num_secreto() {

    $num_aleatorio = rand(1, 10);

    return $num_aleatorio * 16;

}

echo obtener_num_secreto();
echo "\n";

echo obtener_num_secreto();
echo "\n";

echo obtener_num_secreto();
echo "\n";

?>