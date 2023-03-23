<?php


$nuevasEdades = array(
    "Carlos" => 18,
    "Alexis" => 22,
    "Ruby" => 23,
    "Martha" => 23,
);

$cafes = array(
    "Capuccino" => 50,
    "Latte" => 42,
    "Americano" => 60,
);

$personas = array(
    "Carlos" => array(
        "edad" => 20,
        "apellido" => "Santana"
    ),
    "Alexis" => array(
        "edad" => 22,
        "apellido" => "Tenorio"
    ),
);

$descuento = 25;

echo "La edad de Martha es: " . $nuevasEdades["Martha"] . "\n";

// Template literals
echo "El precio del cafe Americano es: {$cafes["Americano"]}, pero con descuento pagas solamente: " . $cafes["Americano"] - $descuento . "\n";

echo "El apellido de Alexis es: {$personas["Alexis"]["apellido"]} y tiene {$personas["Alexis"]["edad"]} años. \n";

echo "\n"

?>