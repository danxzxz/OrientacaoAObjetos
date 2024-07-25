<?php

class Animais{

    //atributos
    public $especie;
    public $numeroPatas;
    public $tipoPele;
    public $tipoSom;
    public $tipoMovimento;

    //metodos
    function emitirSom(){

        echo $this->tipoSom . "\n";
    }

    function movimentar(){

        echo printf("%s movimenta-se %s\n". $this->especie . $this->tipoMovimento);
    }
}

$animal1 = new Animais();
$animal1->especie = "Vaca";
$animal1->$numeroPatas = 4;
$animal1->$tipoPele = "pelos";
$animal1->tipoSom = "Muuu Muuu";
$animal1->tipoMovimento = "Pelo chão";

$animal1->emitirSom();
$animal1->movimentar();

echo "\n";

$animal2 = new Animais();
$animal2->especie = "Galo";
$animal2->$numeroPatas = 2;
$animal2->$tipoPele = "penas";
$animal2->tipoSom = "Cocoricó";
$animal2->tipoMovimento = "Pelo chão";

$animal2->emitirSom();
$animal2->movimentar();

echo "\n";
