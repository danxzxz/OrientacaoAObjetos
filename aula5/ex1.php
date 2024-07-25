<?php

//1- Criar a classe Pessoa, com seus atributos e métodos
class Pessoa
{
    //atributos
    public $nome;
    public $endereco;
    public $cidade;
    public $uf;
    public $altura;

    //metodos
    function falarOla()
    {
        echo "\nOlá Mundo, sou o ". $this->nome;
    }
    function falarEndereco()
    {
        echo "\nMoro em ". $this->endereco .", " . $this->cidade . "/" . $this->uf;
    }
    function falarAltura()
    {
        echo "\nTenho " . $this->altura . " metros\n"; 
    }
}
//2- Criar o objeto a classe 

//programa principal
$pessoa1 = new Pessoa();

$pessoa1 ->nome =readline("Qual seu nome? ");
$pessoa1 ->endereco = readline("\nQual seu endereço? ");
$pessoa1 ->cidade = readline("\nQual sua cidade? ");
$pessoa1 ->uf = readline("\nQual sua UF? ");
$pessoa1 ->altura = readline("\nQual sua altura? ");

$pessoa1->falarOla();
$pessoa1->falarEndereco();
$pessoa1->falarAltura();

