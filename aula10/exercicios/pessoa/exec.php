<?php
require_once("modelo/Pessoa.php");
require_once("modelo/PesosaFisica.php");
require_once("modelo/PessoaJuridica.php");


$opcao = 0;

$cadastrar = array();

do {
    print "\n   ------------MENU----------\n";
    print " 1 - Cadastrar pessoa física\n";
    print " 2 - Cadastrar pessoa jurídica\n";
    print " 3 - Listar\n";
    print " 0 - SAIR \n";

    $opcao = readline("Escolha a opção que deseja: ");

    switch ($opcao) {

    case 0:
            print "Encerrando..\n";
            break;

    case 1:

        $p = new PessoaFisica();
        $p->setNome(readline("Informe o nome: "));
        $p->setIdade(readline("Informe a idade : "));
        $p->setCpf(readline("Informe o CPF: "));

            array_push($cadastrar, $p);

        echo "Pessoa Física cadastrada com sucesso!";

        break;
        case 2:

            $p = new PessoaJuridica();
            $p->setNome(readline("Informe o nome: "));
            $p->setNomeFantasia(readline("Informe o nome fantasia: "));
            $p->setCnpj(readline("Informe o CPF: "));
    
                array_push($cadastrar, $p);
    
            echo "Pessoa Jurídica cadastrada com sucesso!";
    
            break;
    
        case 3:

            foreach ($cadastrar as $c) {
                print $c;
            }

            break;

        default:
            print "OPÇÃO INVÁLIDO!!";
            break;
    }
} while ($opcao != 0);