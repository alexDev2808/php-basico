<?php

// Valores por defecto en los parametros
function suma($a = 1, $b = 1) {
    echo "La suma de $a + $b es: " . $a + $b . "\n";
}

function sumarNums($a, $b) {
    echo "La suma de $a + $b es: " . $a + $b . "\n";
}

function suma_infinita(...$params) {
    
    $suma = 0;

    foreach($params as $numero) {
        $suma += $numero;
    }

    echo "La suma total es: $suma \n";
}

$numeros = [1, 2];
$numeros1 = [15, 23];
$numeros2 = [11, 28];

suma(54, 64);
sumarNums(...$numeros);
sumarNums(...$numeros1);
sumarNums(...$numeros2);


suma_infinita(1,2);
suma_infinita(3,53,63,23,42, 1,4,5,9);

// $arreglo1 = [1, 2, 3];
// $arreglo2 = [4, 5, 6];

// // array_merge()
// // array unpacking
// $resultado = [...$arreglo1, ...$arreglo2];

// print_r($resultado);


echo "\n";

?>