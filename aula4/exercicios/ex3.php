<?php

//Vetor A
$vetA = array();
    echo "informe os elementos de A\n\n";
    for ($i=0; $i < 5; $i++) { 
        $num = readline("informe um número: ");
        array_push($vetA, $num);

    }
    //vetor B
    $vetB = array();
    echo "\ninforme os elementos de B\n\n";
    for ($i=0; $i < 5; $i++) { 
        $num = readline("informe um número: ");
        array_push($vetB, $num);
    }

//vetor C - intersecção

$vetC = array();

foreach ($vetA as $a) {
    foreach ($vetB as $b) {
        if($a == $b)
        array_push($vetC, $a);
        break;
    }
}

    echo "\nVetor C: ";
foreach ($vetC as $c) {
    echo $c . ", " ;  
}
echo "\n";


//vetor D
$vetD = array();
    foreach ($vetA as $a) {
        array_push($vetD, $a);
    }
    foreach ($vetB as $a) {
        array_push($vetD, $a);
    }
    echo "\nVetor D: ";
foreach ($vetD as $d) {
    echo $d . ", " ;  
}
echo "\n";
