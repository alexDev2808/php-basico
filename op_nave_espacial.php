<?php

$precios_de_cafes = [12, 56, 67, 43, 74, 32];

usort($precios_de_cafes, function($act, $next) {
    return $next <=> $act;
});

print_r($precios_de_cafes);


?>