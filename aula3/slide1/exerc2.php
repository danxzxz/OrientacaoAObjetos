<?php

function area($r){
    $area = 3.14 * $r * $r;
    return $area;
}

function circunf($r){
    return 2 * 3.14 * $r;
}

//Programa principal
for ($i=0; $i < 3; $i++) { 

    $raio = readline("informe o raio do circulo (cm): ");
    $area = area($raio);
    $circunf= circunf($raio);
    
    printf("Um circulo de raio %dcm, tem area de %dcm e circunferencia de %dcm.\n\n" , $raio, $area, $circunf);
}
