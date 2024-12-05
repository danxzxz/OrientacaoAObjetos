<?php

require_once "modelo/Caneta.php";

class CanetaAzul extends Caneta {
    //Método sobrescrevendo metodo da classe pai
    public function escrever(){
        echo "Caneta escrevendo em Azul\n";
    }
}