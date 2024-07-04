<?php
$turmas = array(); //Matriz
//ler turmas
for ($i=1; $i <= 4 ; $i++) { 
    $turma = array();
    
    $turma["curso"] = readline("\nInforme o curso da turma " . $i . ": " );
    $turma["ano"] = readline("\nInforme o ano da turma " . $i . ": ");
    $turma["qtd"] = readline("\nInforme a quantidade de alunos da turma " . $i . ": ");

    array_push($turmas, $turma);
    echo "\n";
}
//print_r($turmas);

$totalAlunos = 0;
foreach($turmas as $t){

    $totalAlunos = $totalAlunos + $t["qtd"];
}

echo "\nTotal de alunos: " . $totalAlunos . "\n";