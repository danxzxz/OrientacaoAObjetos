<?php
require_once("modelo/Animal.php");
require_once("modelo/Gato.php");
require_once("modelo/Cachorro.php");

echo "Cachorro 1\n";
$c1 = new Cachorro();
$c1->setNome("aa");
$c1->setRaca("aa");
echo $c1->getDados();
$c1->Latir();
echo "\n";

echo "Cachorro 2\n";
$c2 = new Cachorro();
$c2->setNome("bb");
$c2->setRaca("bb");
echo $c2->getDados();
$c2->Latir();
echo "\n";

echo "Gato 1\n";
$g1 = new Gato();
$g1->setNome("lala");
$g1->setRaca("lalala");
echo $g1->getDados();
$g1->Miar();
echo "\n";

echo "Gato 2\n";
$g2 = new Gato();
$g2->setNome("haha");
$g2->setRaca("haha");
echo $g2->getDados();
$g2->Miar();
echo "\n";
