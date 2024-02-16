<?php


$num = 1;
$dif = 2;

while ($num < 20) {
    if($num == 19)
    echo  $num;
    else 
    echo $num . ", ";

    $num = $num + $dif;
}
echo "\n";