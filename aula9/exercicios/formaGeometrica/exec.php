<?php
require_once("modelo/Circulo.php");
require_once("modelo/Quadrado.php");
require_once("modelo/Retangulo.php");

do {
    echo "\n\n------FORMAS------\n";
    echo "1- circulo \n";
    echo "2- quadrado \n";
    echo "3- retangulo \n";
    echo "0- Sair\n";
    $opcao = readline("Informe a forma que deseja: ");

    echo "\n";

    switch ($opcao) {
        case 1:

            $c = new Circulo();
            $c->setRaio(readline("Qual o raio do círculo? "));
            echo $c->getDesenho() . "\n";
            echo "A área do circulo é " . $c->getArea();
            break;

        case 2:
            $q = new Quadrado();
            $q->setLado(readline("Qual o lado do quadrado? "));
            echo $q->getDesenho() . "\n";
            echo "A área do quadrado é: " . $q->getArea();
            break;

        case 3:
            $r = new Retangulo();
            $r->setBase(readline("Qual a base do retangulo? "));
            $r->setAltura(readline("Qual a altura do retangulo? "));
            echo $r->getDesenho() . "\n";
            echo "A área do retangulo é: " . $r->getArea();
            break;

        case 0:
            echo "Programa encerrado!\n";
            break;

        default:
            echo "Opção inválida!\n";
    }
} while ($opcao != 0);
