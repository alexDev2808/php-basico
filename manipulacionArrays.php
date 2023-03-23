<?php

$edades = [10, 22, 45, 62, 80];

// Contar cantidad de elementos (length)
echo count($edades);

// array_push / añadir elementos al final
array_push($edades, 2);

print_r($edades);

// Comprobar si es array

$esto_no_es_un_array = "Array";

// is_array devuelve un valor bool, 1 si se asigna a una variable
var_dump( is_array($esto_no_es_un_array) );

// implode / De array a string (join)

$array_string = implode("-", $edades);
echo $array_string . "\n";

// explode / convertir un string a un arreglo (split)
$lista_frutas = "Fresa, Cereza, Manzana";
$lista_frutas_array = explode(", ", $lista_frutas);

var_dump($lista_frutas_array);



echo "\n";

?>