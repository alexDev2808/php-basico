<?php

$numero = 2;

echo "Tabla del 2 \n";

for($i = 1; $i <= 10; $i++) {
    echo "$numero * $i : " . ($numero * $i) . "\n";
}

for($a = 1, $b = 0; $b <= 10; $a++, $b += 2) {
    echo "a = $a b= $b" . "\n";
}

?>