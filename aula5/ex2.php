<?php

//1- Criar a classe Pessoa, com seus atributos e métodos
class Retangulo
{
    //atributos
    public $base;
    public $altura;

    //metodos
    function area()
    {
        $area = $this->base * $this->altura;
        echo "\nA area é de: $area" . "\n";
    }
    function perimetro()
    {
        $perimetro = ($this->base * 2) + ($this->altura * 2);
        echo "Ja o perimetro é de: $perimetro" . "\n";

    }
}
//2- Criar o objeto a classe 

//programa principal
$retangulo1 = new Retangulo();
$retangulo1 ->base =readline("Quanto mede a base do retangulo 1? ");
$retangulo1 ->altura = readline("\nQual a altura do retangulo 1? \n");

$retangulo2 = new Retangulo();
$retangulo2 ->base =readline("\nQuanto mede a base do retangulo 2? ");
$retangulo2 ->altura = readline("\nQual a altura do retangulo 2? \n");

$retangulo3 = new Retangulo();
$retangulo3 ->base =readline("\nQuanto mede a base do retangulo 3? ");
$retangulo3 ->altura = readline("\nQual a altura do retangulo 3?\n ");



$retangulo1->area();
$retangulo1->perimetro();

$retangulo2->area();
$retangulo2->perimetro();

$retangulo3->area();
$retangulo3->perimetro();
