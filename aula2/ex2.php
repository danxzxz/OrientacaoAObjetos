<?php

$num = readline("Informe um número: ");

for($i = $num; $i > 1; $i--){
    $num--;
    if($num == 1)
    echo $num;
    else 
    echo $num . ", ";
    
}
echo "\n";