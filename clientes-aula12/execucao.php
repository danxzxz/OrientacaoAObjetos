<?php

require_once ("modelo/ClientePF.php");
require_once ("modelo/ClientePJ.php");
//texte de conexao
// require_once ("util/Conexao.php");

// $con = Conexao::getCon();
// print_r($con);

echo "\n--CADASTRO DE CLIENTES--\n";
echo "1- Cadastrar cliente PF\n";
echo "2- Cadastrar cliente PJ\n";
echo "3- Listar Clientes\n";
echo "4- Buscar Clientes\n";
echo "5- Excluir Clientes\n";
echo "0- Sair\n";

$opcao = readline("Informe a opcão que deseja: ");
switch ($opcao) {
    case 1:
        $cliente = new ClientePF();
        $cliente->setNome(readline("Informe o nome: "));
        $cliente->setNomeSocial(readline("Informe o nome social: "));
        $cliente->setCpf(readline("Informe o CPF: "));
        $cliente->setEmail(readline("Informe o email: "));

        break;

    case 2:
        $cliente = new ClientePJ();
        $cliente->setNomeSocial(readline("Informe o nome social: "));
        $cliente->setRazaoSocial(readline("Informe a razao social: "));
        $cliente->setCnpj(readline("Informe o CNPJ: "));
        $cliente->setEmail(readline("Informe o email: "));

        break;

    case 3:
        foreach ($cliente as $c) {
            print $c;
        }
        break;

    case 4:
        break;

    case 5:
        break;

    case 0:
        echo "Programa encerrado!";
        break;
    default: 
    echo "Opção inválida!";
}
while ($opcao != 0);