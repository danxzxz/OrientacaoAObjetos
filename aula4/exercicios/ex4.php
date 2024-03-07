<?php

$vetor = array();
$menor = 0;


    for ($i=0; $i < 10; $i++) { 

    $num = readline("informe um número [".$i."]: ");
    array_push($vetor, $num);
    
    foreach ($vetor as $a ) {
        if($num <= $menor)
        $menor = $num;
  
    }
}
echo "O maior número do vetor é: ". $maior. "\nE o menor número do vetor é: ". $menor;


//testar
/*$pv = $pessoas[0];
foreach($pessoas as $p){
    if($p["idade"] > $pv["idade"])
    $pv = $p;
}
//testar