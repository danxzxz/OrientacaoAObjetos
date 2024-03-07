<?php
//1 - Ler os dados das 4 pessoas
$pessoas = array(); //Matriz

for ($i=1; $i <= 4 ; $i++) { 
    echo "\nPessoa " . $i . "\n";
    $pessoa["nome"] = readline("informe o nome: ");
    $pessoa["idade"] = readline("informe a idade: ");
    $pessoa["CN"] = readline("informe a cidade natal: ");
    $pessoa["prof"] = readline("informe a profissao: ");
}

//1.1 - Adicionar a $pessoa em $pessoas
array_push($pessoas, $pessoa);



//2- Encontrar a pessoa mais velha
$pv = $pessoas[0];
foreach($pessoas as $p){
    if($p["idade"] > $pv["idade"])
    $pv = $p;
}


//3 -Imprimir os dados da pessoa
echo "\nDados da pessoa mais velha: \n";
echo "Nome: " . $pv["nome"] . "\n";
echo "idade: " . $pv["idade"]. "\n";
echo "cidade natal: " . $pv["CN"]. "\n";
echo "profissão: " . $pv["prof"]. "\n";