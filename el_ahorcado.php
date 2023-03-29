<?php

function clear() {
    if(PHP_OS === "WINNT"){
        system("cls");
    }else{
        system("clear");
    }
}

// $dibujo = [
//     ["\n\n|----------|\n\n|          |\n\n|\n\n|\n\n|\n\n|\n\n|____"],
//     ["\n\n|----------|\n\n|          |\n\n|\n\n|\n\n|\n\n|\n\n|____"],
// ];

$animales_salvajes = ["Leon", "Lobo", "Oso", "Tigre", "Leopardo", "Jaguar", "Rinoceronte", "Coyote", "Caiman", "Cobra", "Aguila", "Orca"];


define("MAX_ATTEMPS", 6);

echo "\n\n\t\t\tBienvenido al juego del Ahorcado!!!  🙂 💀  \n\n\n";

$elegir_palabra = $animales_salvajes[ rand(0, count($animales_salvajes) - 1) ];
$elegir_palabra = strtolower($elegir_palabra);
$longitud_palabra = strlen($elegir_palabra);
$descubrir_letras = str_pad("", $longitud_palabra, "_");

$intentos = 0;

do {


    echo "Palabra de $longitud_palabra letras 👇\n\n";
    echo "$descubrir_letras \n";

    // Pedimos al usuario que escriba
    $jugador_letra = "";

    echo "Escribe una letra: ";
    fscanf(STDIN, "%c", $jugador_letra);

    $jugador_letra = strtolower($jugador_letra);


    if (str_contains($elegir_palabra, $jugador_letra)) {
        
        // Verificar todas las veces que aparece la letra en la palabra
        $offset = 0;
        while (($letter_position = strpos($elegir_palabra, $jugador_letra, $offset)) !== false) {
            $descubrir_letras[$letter_position] = $jugador_letra;
            $offset = $letter_position + 1;
        }

        

    }else {
        clear();
        $intentos++;
        echo "Letra incorrecta! ❌. Te quedan " . (MAX_ATTEMPS - $intentos) . " intentos";
        sleep(2);
    }

    clear();

} while($intentos < MAX_ATTEMPS && $descubrir_letras != $elegir_palabra);

clear();

if($intentos < MAX_ATTEMPS) 
    echo "Felicidades!. Has Ganado! 🏆 \n";
else
    echo "Suerte para la proxima 🤧 \n";

echo "La palabra es: $elegir_palabra \n";
echo "Tu descubriste: $descubrir_letras \n";

echo "\n";

?>