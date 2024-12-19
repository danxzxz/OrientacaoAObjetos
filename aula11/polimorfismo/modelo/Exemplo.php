<?php

class Exemplo {

    // public function escreva($v){
    //     echo "Valor: " . $v . "\n";
    // }

    // public function escreva(){
    //     echo "Valor: sem valor\n";
    // }

    public function escreva($v="", $w=""){
        if($v == "" && $w == "")
        echo "Valor: sem valor\n";
        else if($w == "")
        echo "Valor: " . $v . "\n";
        else
        echo "Valores: " . $v . " " . $w ."\n";
    }
}