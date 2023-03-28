<?php

function frases_celebres() {

    $frase_celebre = "";
    $frase_aleatoria = rand(1, 5);

    switch($frase_aleatoria) {
        case 1:
            $frase_celebre = "“La vida es la constante sorpresa de saber que existo.” R. Tagore";
            break;
        case 2:
            $frase_celebre = "“La vida es una obra teatral que no importa cuánto haya durado, sino lo bien que haya sido representada.” Séneca";
            break;
        case 3:
            $frase_celebre = "“La vida es simple, pero insistimos en hacerla complicada.” Confucio";
            break;
        case 4:
            $frase_celebre = "“No lastimes a los demás con lo que te causa dolor a ti mismo.” Buda";
            break;
        case 5:
            $frase_celebre = "“Recuerda que la felicidad no depende en quién eres o qué tienes; depende únicamente en lo que piensas.” Dale Carnegie";
            break;

    }

    return $frase_celebre;
}


$frase_del_dia = frases_celebres();
echo "La frase del dia: $frase_del_dia \n";


?>