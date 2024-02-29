<?php
    function impopar($num){
        
        /*if($num % 2 == 0)
            return true;
        else
            return false;*/
        return($num % 2 == 0);
        
    }
$num = 1;
while($num != 0){

    $num = readline ("informe um número: ");
    $isPar = impopar($num);
    if($isPar)
        echo "O numero é par.\n";
    else {
        echo "O numero é impar.\n";
    }

}