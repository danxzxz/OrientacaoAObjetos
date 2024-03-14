<?php

$arrayPrincipal = array();

for ($i=0; $i <= 4; $i++) 
{ 
    $num = readline("Informe os números: \n");
    array_push($arrayPrincipal,$num);
}

$arrayFahr = $arrayPrincipal; 
$arrayFator = $arrayPrincipal; 
$arrayFuncao = $arrayPrincipal; 

function Fahrenheit($array)
{
    for ($i=0; $i < count($array); $i++) 
    { 
        $array[$i] = $array[$i] * 1.8 + 32; 
    }

    return $array;
}

function Fatorial($array)
{                    
    for($i = 0 ; $i < count($array) ;$i++)
    {
        $fatorial = 1;
        $num = $array[$i];
        for ($y=$num; $y > 0; $y--) 
        { 
            $fatorial *= $y;
        }
        $array[$i] = $fatorial;
    }

    return $array;
}


function ResulFuncao($array)
{
    for ($i=0; $i < count($array); $i++) 
    { 
        $array[$i] = (($array[$i]*$array[$i]) + (2*$array[$i]) + 4)/(2*$array[$i]);
    }

    return $array;
}

function impressao($array)
{
    for ($i=0; $i < count($array); $i++) 
    { 
        print $array[$i] .  ",";
    }
}

print "Primeiro vetor: ";
impressao(Fahrenheit($arrayFahr));
print "\n";
print "Segundo vetor: ";
impressao(Fatorial($arrayFator));
print "\n";
print "Terceiro vetor: "; 
impressao(ResulFuncao($arrayFuncao));
print "\n";