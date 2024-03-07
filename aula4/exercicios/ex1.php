<?php

$vetor = array();
$media = 0;
    
    for ($i=0; $i < 10; $i++) { 

    $num = readline("informe um número [".$i."]: ");
    array_push($vetor, $num);
    $media += $vetor[$i];
}

$media = $media / count($vetor);
    echo "A media aritimética do array é " . $media . "\n";
    