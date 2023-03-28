<?php

    date_default_timezone_set('America/Mexico_City');

    function obtener_hora() {
        return "Son las " . date("h:i a") . "\n";
    }

    echo "Hola! Me podrias decir que hora es?? \n";
    echo "Claro! " . obtener_hora();
    echo "\n";

?>