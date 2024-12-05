<?php

require_once 'modelo/Produto.php';
require_once 'modelo/Livro.php';
require_once 'modelo/Computador.php';
require_once 'modelo/Balde.php';



$livro = new Livro("Harry Potter", "Volume", "J.K. Rowling");
$computador = new Computador("Computador Dell", "Peça", "I7", "16GB");
$balde = new Balde("Balde de Plástico", "??", "10L");

echo $livro->getDados() . "\n\n";
echo $computador->getDados() . "\n\n";
echo $balde->getDados() . "\n";




























// // Criando objetos de cada tipo de produto
// $livro = new Livro("Harry Potter", "unidade", "J.K. Rowling");
// $computador = new Computador("Computador Dell", "unidade", "Intel i7", "16GB");
// $balde = new Balde("Balde de Plástico", "unidade", "10L");

// // Imprimindo os dados de cada produto
// echo $livro->getDados() . "\n";
// echo $computador->getDados() . "\n";
// echo $balde->getDados() . "\n";