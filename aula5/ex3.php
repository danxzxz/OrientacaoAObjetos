<?php

//1- Criar a classe Pessoa, com seus atributos e métodos
class Retangulo
{
    //atributos
    public $base;
    public $altura;
//constructor
    function __construct($a, $b){
        $this->altura = $a;
        $this->base = $b;
}
    //metodos
    function area()
    {
        return $this->base * $this->altura;
    }
    function perimetro()
    {
        return ($this->base * 2) + ($this->altura * 2);

    }
}
//2- Criar o objeto a classe 
for($i=0; $i<3; $i++){
    $altura = readline("Informe a altura: ");
    $abse = readline("Informe a base: ");

    $ret = new Retangulo($altura, $base);
    echo "Área do retangulo: " . $ret->area() . "\n";
    echo "Perímetro do retangulo: " . $ret->perimetro() . "\n";
}




