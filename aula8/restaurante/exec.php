<?php

require_once("modelo/Prato.php");
require_once("modelo/Pedido.php");


function listarPedidos($pedidos)
{
    print "---LISTA PEDIDOS ---\n";
    if (count($pedidos) > 0) {
        foreach ($pedidos as $i => $p) {
            echo "\n\n" . ($i + 1) .  "º Pedido\n" . $p;
        }
    } else
        echo "Nenhum pedido cadastrado.\n";
}



function retornaPrato($pratos, $numero)
{
    //Encontra o fabricante no array
    foreach ($pratos as $pra) {
        if ($numero == $pra->getNumero())
            return $pra;
    }

    return null;
}

$pedidos = array();

//$nome, $numero, $valor
$pratos = array(
    new Prato("Camarão a Milanesa", 1, 110),
    new Prato("Pizza Margherita", 2, 80),
    new Prato("Macarrão à Carbonara", 3, 60),
    new Prato("Bife à Parmegiana", 4, 75),
    new Prato("Risoto ao Funghi", 5, 70)
);

do {
    echo "\n\n------MENU------\n";
    echo "1- Cadastrar \n";
    echo "2- Excluir \n";
    echo "3- Listar \n";
    echo "4- Total de vendas \n";
    echo "0- Sair\n";
    $opcao = readline("Informe a opção: ");

    echo "\n";

    switch ($opcao) {
        case 1:
            $p = new Pedido();
            $p->setNomeCliente(readline("Nome do Cliente: "));
            $p->setNomeGarcom(readline("Nome do Garçom: "));


            $prato = null;
            while ($prato == null) {
                echo "\n\nPRATOS: \n";
                foreach ($pratos as $pra)
                    echo $pra . "\n";

                $pratoEscolhido = readline("\nInforme o número do prato: ");
                $prato = retornaPrato($pratos, $pratoEscolhido);
            }

            $p->setPrato($prato);


            array_push($pedidos, $p);
            break;

        case 2:
            print "---LISTA PEDIDOS ---\n\n";
            foreach ($pedidos as $i => $p) {
                echo "\n\n" . ($i + 1) .  "º Pedido\n" . $p;
            }
            if(count($pedidos) > 0) {
            echo "\n\n";
            $indiceRemover = readline("Quem você gostaria de remover? (INFORME O NÚMERO): ");
            $indiceRemover--;

            if ($indiceRemover >= 0 && $indiceRemover < count($pedidos)) {
                array_splice($pedidos, $indiceRemover, 1);
            }
            else
            echo "Índice inválido!\n";
    }
            break;

        case 3:
            listarPedidos($pedidos);
            break;

        case 4:
            $vt = 0;
            foreach($pedidos as $p){
                $vt += $p->getPrato()->getValor();
            }
            echo "Valor total dos Pedidos: R$$vt\n";

        break;

        case 0:
            echo "Programa encerrado!\n";
            break;

        default:
            echo "Opção inválida!\n";
    }
} while ($opcao != 0);
