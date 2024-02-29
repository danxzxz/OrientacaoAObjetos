<?php

function imprimeVetor($vet){

    foreach($vet as $v){
        echo $v . " | ";
    }
    echo "\n";
}

$superhero = array("spiderman", "superman ", "batman   ","flash    ","hulk      ");
$racasCachorro = array("poodle   ", "pincher  ", "bulldog  ","husky    ","street dog");
$MarcaCarros = array("Honda    ", "Fiat     ", "Chevrolet","Hyundai  ","volkswagen");
$Jogadores = array("Seedorf  ", "Tiquinho ", "Garrincha","Nilton   ","Jefferson ");


imprimeVetor($superhero);
imprimeVetor($racasCachorro);
imprimeVetor($MarcaCarros);
imprimeVetor($Jogadores);