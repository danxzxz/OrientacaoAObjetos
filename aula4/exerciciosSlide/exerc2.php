<?php

$pessoa1 = array("nome" => "Manuel de Medeiros", "endereco" => "Rua das Acácias", "cidade" => "Foz do Iguacu", "UF" => "PR");

$pessoa2 = array("nome" => "Juliana de Amaral ", "endereco" => "Rua dos Pinheiros", "cidade" => "FLorianopolis", "UF" => "SC");

$pessoa3 = array("nome" => "Rodrigo Baidek    ", "endereco" => "Rua Dom Pedro I", "cidade" => "Petropolis", "UF" => "RJ");

$pessoa4 = array("nome" => "Fabiola da Silva  ", "endereco" => "Rua Chile", "cidade" => "Guarulhos", "UF" => "SP");


$pessoas = array ($pessoa1, $pessoa2, $pessoa3, $pessoa4);

foreach ($pessoas as $p ){
    /* echo $p["nome"] . "|" . $p ["endereco"] . "|" . $p ["cidade"] . "|" . $p ["UF"] . "\n";*/
    foreach ($p as $dado) {
        echo $dado . "|";
    }
    echo "\n";
}