<?php
require_once 'modelo/Funcionario.php';
require_once 'modelo/Gerente.php';
require_once 'modelo/Desenvolvedor.php';
require_once 'modelo/Estagiario.php';


while (true) {
    echo "\nSelecione o cargo do funcionário:\n";
    echo "1 - Gerente\n";
    echo "2 - Desenvolvedor\n";
    echo "3 - Estagiário\n";
    echo "0 - Sair\n";

    $opcao = (readline("Escolha uma opção: "));

    $nome = readline("Digite o nome do funcionário: ");
    $funcionario = null;

    switch ($opcao) {
        case 1:
            $funcionario = new Gerente($nome);
            break;
        case 2:
            $funcionario = new Desenvolvedor($nome);
            break;
        case 3:
            $funcionario = new Estagiario($nome);
            break;
        case 0:
            echo "Programa encerrado.\n";
            break;
        default:
            echo "Opção inválida. Tente novamente.\n";
            break;
    }

    if ($funcionario) {
        $salario = $funcionario->calcularSalario();
        $cargo = $funcionario->getCargo();
        echo "\nO funcionário  ". $funcionario->getNome(). ",tem o cargo de " .$cargo. " e possui salário de R$ " . number_format($salario, 2, ',', '.') . ".\n";
    }
}