<?php

require_once ("modelo/Carro.php");
require_once ("modelo/MicroOnibus.php");
require_once ("modelo/Onibus.php");
require_once ("modelo/Van.php");
require_once ("modelo/Veiculo.php");





$opcao = 0;

do {
    echo "\n   ------------QUAL VEICULO DESEJA ALUGAR?----------\n";
    echo " 1 - CARRO        (aluguel: R$250,00 | valor por KM: 1.50)\n";
    echo " 2 - VAN          (aluguel: R$350,00 | valor por KM: 2.10)\n";
    echo " 3 - MICRO ONIBUS (aluguel: R$450,00 | valor por KM: 2.75)\n";
    echo " 4 - ÔNIBUS       (aluguel: R$550,00 | valor por KM: 4.20)\n";
    echo " 0 - SAIR \n";

    $opcao = readline("Escolha a opção que deseja: ");

    switch ($opcao) {

        case 1:
            $veiculo = new Carro("Carro", 250, 1.50);
            $veiculo->setKMsrodados(readline("Quantos KM foram rodados? "));

        break;

        case 2:
            $veiculo = new Van("Van", 350, 2.10);
            $veiculo->setKMsrodados(readline("Quantos KM foram rodados?"));
        break;

        case 3:
            $veiculo = new MicroOnibus("Micro Ônibus", 450, 2.75);
            $veiculo->setKMsrodados(readline("Quantos KM foram rodados?"));

        break;

        case 4:
            $veiculo = new Onibus("Ônibus",550, 4.20);
            $veiculo->setKMsrodados(readline("Quantos KM serão rodados?"));
        break;

        case 0:
            echo "\nPrograma encerrado!!\n";
            break;
        default:
            echo "\nOpção inválida\n";
            break;            
    }  
    if ($opcao == 0){
        break;
    }
    else {
        echo "\nO veículo ". $veiculo->getTipo() .", foi alugado por R$ ". $veiculo->getAluguel()  .", rodou ". $veiculo->getKMsrodados() ." quilômetros com custo total de R$ ". $veiculo->ValorViagem() . "\n\n";
    }

} while ($opcao != 0);

