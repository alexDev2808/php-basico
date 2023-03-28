<?php

function obtener_num_secreto() {

    $num_aleatorio = rand(1, 10);

    return $num_aleatorio * 16;

}

// echo obtener_num_secreto();
// echo "\n";

// echo obtener_num_secreto();
// echo "\n";

// echo obtener_num_secreto();
// echo "\n";

function es_estudiante_legend($plazti_rank) {
    if($plazti_rank >= 20000) {
        echo "Eres un estudiante legend\n";
        $plazti_rank += 10;
        echo "$plazti_rank \n";
    }
    else{
        echo "Lo sentimos no eres un estudiante legend \n";
    }
}

// Hecho de esta forma para poder leer datos desde terminal en Fedora Linux 37
echo "Ingresa tus puntos en Platzi: ";
fscanf(STDIN, "%d", $plazti_rank);
// $plazti_rank = 24000;

es_estudiante_legend($plazti_rank);
echo $plazti_rank;



echo "\n";
?>