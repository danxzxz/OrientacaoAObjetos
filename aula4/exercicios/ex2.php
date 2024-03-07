<?php

$vet = array();
$vet2 = array();

    for ($i=0; $i < 5; $i++) { 
        $p = readline("informe uma palavra: ");
        array_push($vet, $p);
    }
foreach ($vet as $vet2) {
    echo $vet2 . ", ";
}
echo "\n";