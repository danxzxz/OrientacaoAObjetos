<?php

require_once ("modelo/Soma.php");
require_once ("modelo/Multiplicacao.php");
require_once ("modelo/Divisao.php");
require_once ("modelo/Resto.php");
require_once ("modelo/Subtracao.php");

while (true) {
    $numA = readline("Digite o primeiro número da operação(ou 0 para sair): ");

    $numB = readline("Digite o segundo número da operação(ou 0 para sair): ");

    if ($numA == 0 && $numB == 0) {
        echo "Encerrando o programa.\n";
        break;
    }


$opcao = 0;


    echo "\n\n   ------------ESCOLHA A OPERAÇÃO----------\n";
    echo " 1 - Soma\n";
    echo " 2 - Subtração\n";
    echo " 3 - Multiplicação\n";
    echo " 4 - Divisão\n";
    echo " 5 - Resto\n";

    $opcao = readline("Escolha a opção que deseja: ");

    switch ($opcao) {

        case 1:
            $calculadora = new Soma($numA, $numB);
            break;
    
        case 2:
            $calculadora = new Subtracao($numA, $numB);
            break;

        case 3:
            $calculadora = new Multiplicacao($numA, $numB);
            break;

        case 4:
            $calculadora = new Divisao($numA, $numB);
            break;

        case 5:
            $calculadora = new Resto($numA, $numB);
            break;

            default:
            echo "Operação inválida. Tente novamente.\n";
            continue 2;
    }

    $resultado = $calculadora->calcular();
    echo "\nO resultado da operação é: $resultado\n\n";
    } 



