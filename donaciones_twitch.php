<?php

$donaciones_disponibles = readline("Escribe la cantidad de donaciones acumuladas: ");

if($donaciones_disponibles >= 100) 
    echo "Tu retiro esta en proceso...";
else
    echo "Aun no llegas a la cantidad minima establecida, no puedes retirar";


echo "\n";

?>