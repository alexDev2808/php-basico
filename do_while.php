<?php

// El do while se ejecuta por lo menos una vez y se vuelve a ejecutar mientras while sea true

$usernames = ["Pepito", "Alexis", "Mr.Michi"];

do {
    $username = readline("Por favor ingresa tu nuevo nombre de usuario: ");

    echo "\n";

}while(in_array($username, $usernames)); //Ejecuta el codigo de arriba mientras $username este en $usernames



?>