<?php
require_once("modelo/Departamento.php");
require_once("modelo/Funcionario.php");


$listaFuncionarios = array();


//obj funcionarios 
for ($i = 0; $i < 5; $i++) {
    echo "\n----FUNCIONARIO " . $i+1 . "----\n";
    $func = new Funcionario();
    $func->setNome(readline("Informe o nome do funcionário: "));
    $func->setCargo(readline("Informe o cargo do funcionário: "));
    $func->setSalario(readline("Informe o salário do funcionário: "));

    $depto = new Departamento();
    $depto->setNome(readline("Informe o departamento do funcionário: "));
    $depto->setNumeroSala(readline("Informe a sala do departamento: "));

    $func->setDepto($depto);

    array_push($listaFuncionarios, $func);
}


echo "\n\n----LISTA DE FUNCIONÁRIOS----";

foreach ($listaFuncionarios as $l)
    echo "\n\nFuncionário: " . $l->getNome() .
        "\nCargo: " . $l->getCargo() .
        "\nSalário: " . $l->getSalario() . 
        "\nDepartamento: ". $l->getDepto()->getNome() . 
        "\nSala: " . $l->getDepto()->getNumeroSala() . "\n";


