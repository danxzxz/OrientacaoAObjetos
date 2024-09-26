<?php
require_once("modelo/Departamento.php");
require_once("modelo/Funcionario.php");

$listaFabricantes = array(

    new Fabricante("Volkswagem", "VW"),
    new Fabricante("Chevrolet", "GM"),
    new Fabricante("Fiat", "F"),
    new Fabricante("Renault", "RN")
)

$opcao = 0;

$cadastrar = array();

do {
    echo "\n   ------------MENU----------\n";
    echo " 1 - Cadastrar carro\n";
    echo " 2 - Excluir carro\n";
    echo " 3 - Listar carros \n";
    echo " 0 - SAIR\n";

    $opcao = readline("Escolha a opção que deseja: ");

    switch ($opcao) {

        case 0:
            print "Encerrando..\n";
            break;

        case 1:

            $c = new Carro();
            $c->setModelo(readline("Informe o modelo do carro: "));
            $c->setAnoFabricacao(readline("Informe o ano de fabricação: "));
            foreach ($listaFabricantes as $l) {
                
            }

            array_push($cadastrar, $c);

            echo "Carro cadastrada com sucesso!";

            break;

        case 2:
            foreach ($cadastrar as $c) {
                echo $c;
           
            }

            break;


        case 3:

            foreach ($cadastrar as $c) {
                echo $c;
            }

            break;

        default:
            print "OPÇÃO INVÁLIDA!!";
            break;
    }
} while ($opcao != 0);
