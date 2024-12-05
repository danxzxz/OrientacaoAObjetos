<?php

require_once "modelo/Caneta.php";

class CanetaVermelha extends Caneta {
    //Método sobrescrevendo metodo da classe pai
    public function escrever(){
        echo "Caneta escrevendo em Vermelho\n";
    }

    public function escreverEspec(){
        $this->escrever();
    }

    public function escreverPai(){
        parent::escrever();
    }
}