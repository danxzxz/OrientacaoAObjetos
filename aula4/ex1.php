<?php

$VetorInicial = array();
    
    for ($i=0; $i < 5; $i++) { 

    $num = readline("informe um número : ");
    array_push($VetorInicial, $num);
}
$vet1 = $VetorInicial; 
$vet2 = $VetorInicial; 
$vet3 = $VetorInicial; 

function F($vet)
{
    for ($i=0; $i < 5; $i++) 
    { 
        $vet[$i] = $vet[$i] * 1.8 + 32; 
    }

    return $vet;
}











function imprimeVetor($vet){

    foreach($vet as $v){
        echo $v . " , ";
    }
    echo "\n";
}
