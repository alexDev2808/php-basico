<?php

// Escuela de michis

$escuela_michis = array(
    array(
        "nombre" => "Bichita",
        "ocupacion" => "Tomar el sol",
        "color" => "Cafe con leche",
        "comidas" => array(
            "favoritas" => array(
                "Carne", 
                "Croquetas Chapete",
                "Yogurth",
                "Pescado",
                "Sopa",
                "Arroz"
            ),
            "no_favoritas" => array(
                "Croquetas Baratas",
                "Frijoles",
                "Pan"
            ),
        ),
    ),
    array(
        "nombre" => "Lapizita",
        "ocupacion" => "Huir",
        "color" => "Blanca",
        "comidas" => array(
            "favoritas" => array(
                "Carne", 
                "Croquetas Chapete",
                "Pescado",
            ),
            "no_favoritas" => array(
                "Croquetas Baratas",
                "Frijoles",
                "Pan"
            ),
        ),
    ),
    array(
        "nombre" => "Berlin",
        "ocupacion" => "Dormir",
        "color" => "Blanco",
        "comidas" => array(
            "favoritas" => array(
                "Carne", 
                "Croquetas Chapete",
                "Yogurth",
                "Pescado",
            ),
            "no_favoritas" => array(
                "Croquetas Baratas",
                "Frijoles",
                "Pan"
            ),
        ),
    ),
);

$michi1 = $escuela_michis[0];

echo "El nombre del michi 1 es: ". $michi1["nombre"] . "\n";


?>