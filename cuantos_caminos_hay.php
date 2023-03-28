<?php

$prev = 0;
$temp = 1;
$cantidad_veces = [0, 1];
$suma = 0;

$num_tienda = 4;

// $num_tienda = (int) readline("De que tienda quieres saber la cantidad de caminos disponibles?: ");


for($i = 1; $i < $num_tienda; $i++) {
    $suma = $prev + $temp;
    $prev = $temp;
    $temp = $suma;

    array_push($cantidad_veces, $suma);
}

// echo "hay $suma formas de llegar\n";
echo "Para la tienda $num_tienda hay " . $cantidad_veces[$num_tienda] . " formas distintas de llegar\n";




?>