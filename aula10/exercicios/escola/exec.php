<?php
require_once ("modelo/Pessoa.php");
require_once ("modelo/Aluno.php");
require_once ("modelo/Professor.php");


$professor = new Professor();
$professor->setNome("Severus Snape");
$professor->setIdade(42);
$professor->setRg("654.323.677");
$professor->setSalario(2500.00);
echo $professor;
echo "\n";


$aluno = new Aluno();
$aluno->setMatricula(261154);
$aluno->setNome("Daniel cu de mel");
$aluno->setIdade(16);
$aluno->setRg(666);
echo $aluno;

