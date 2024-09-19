<?php
require_once("modelo/Estado.php");
require_once("modelo/Cidade.php");


//1 - Criar objeto estado

$sc = new Estado();
$sc->setNome("Santa Catarina");
$sc->setSigla("SC");

$pr = new Estado();
$pr->setNome("Paraná");
$pr->setSigla("PR");


//2 - Criar objeto cidade
$floripa = new Cidade();
$floripa->setNome("Florianópolis");
$floripa->setQtdHabitantes(537211);
$floripa->setAltitude(3);
$floripa->setEstado($sc);

$blumenau = new Cidade();
$blumenau->setNome("Blumenau");
$blumenau->setQtdHabitantes(361855);
$blumenau->setAltitude(21);
$blumenau->setEstado($sc);

$foz = new Cidade();
$foz->setNome("foz do iguaçu");
$foz->setQtdHabitantes(258248);
$foz->setAltitude(192);
$foz->setEstado($pr);

$cascavel = new Cidade();
$cascavel->setNome("Cascavel");
$cascavel->setQtdHabitantes(348051);
$cascavel->setAltitude(781);
$cascavel->setEstado($pr);


$cidades = array();
array_push($cidades, $floripa);
array_push($cidades, $blumenau);
array_push($cidades, $foz);
array_push($cidades, $cascavel);

foreach ($cidades as $c)
    echo " A cidade de " .  $c->getNome()
        . ", localizada no estado " .  $c->getEstado()->getNome()
        . " - " . $c->getEstado()->getSigla()
        . ", possui " . $c->getQtdHabitantes()
        . " habitantes e uma altitude de " . $c->getAltitude() . " metros.\n\n";
