<?php

$tiendita_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocha" => 24
);


$tiendita_tes = array(
    "Manzanilla" => 18,
    "Verde" => 35,
    "Negro" => 24.5,
    "Tila" => 26
);


foreach($tiendita_cafes as $cafe => $price) {
    echo "El cafe $cafe cuesta: $price \n";
}


echo "\n";

// Break y continue

foreach($tiendita_tes as $te => $price) {
    
    if($te == "Verde") {
        echo "Encotramos a el te Verde!!! \n";
        break;
    }
    echo "Actualmente encontre el te $te \n";

    echo "\n";
};

echo "\n";

foreach($tiendita_tes as $te => $price) {
    
    if($te == "Negro")
        continue;
    
    echo "El te $te es muy rico \n";
};




?>