<?php
require_once("modelo/Time.php"); 
require_once("modelo/Jogador.php"); 


//1 - Criar objeto time

$time = new Time();
$time->setNome("Botafogo");
$time->setCidade("Rio de Janeiro");


//2 - Criar objeto jogador
$almada = new Jogador();
$almada->setNome("Luiz Henrique");
$almada->setNumero(7);
$almada->setTime($time);

$tiquinho = new Jogador();
$tiquinho->setNome("Tiquinho Soares");
$tiquinho->setNumero(9);
$tiquinho->setTime($time);

// print_r($almada);


//3 - Imprimir o time do jogador Thiago Almada
// echo $almada->getTime() ->getNome() . "\n";
// $t = $almada->getTime();
// echo $t->getCidade(). "\n";



$jogadores = array();
array_push($jogadores, $almada); 
array_push($jogadores, $tiquinho); 
$time->setJogadores($jogadores);
print_r($jogadores);