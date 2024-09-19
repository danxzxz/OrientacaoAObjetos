<?php
require_once("modelo/Turma.php");
require_once("modelo/Alunos.php");


//1 - Criar objeto time

$turma = new Turma();
$turma->setNome("terceiro");
$turma->setCurso("tds");
$listaAlunos = array();


//2 - Criar objeto jogador
$aluno1 = new Alunos();
$aluno1->setNome("Henrique");
$aluno1->setIdade(17);
array_push($listaAlunos, $aluno1);

$aluno2 = new Alunos();
$aluno2->setNome("João");
$aluno2->setIdade(18);
array_push($listaAlunos, $aluno2);


$aluno3 = new Alunos();
$aluno3->setNome("Pedro");
$aluno3->setIdade(16);
array_push($listaAlunos, $aluno3);  


$aluno4 = new Alunos();
$aluno4->setNome("Daniel");
$aluno4->setIdade(17);
array_push($listaAlunos, $aluno4);


$aluno5 = new Alunos();
$aluno5->setNome("Maria");
$aluno5->setIdade(17);
array_push($listaAlunos, $aluno5);


$turma->setAlunosTurma($listaAlunos);

echo "----LISTA DE ALUNOS----";

foreach ($listaAlunos as $a)
    echo "\nAluno: " . $a->getNome() .
        "\nIdade: " . $a->getIdade() . "\n";
