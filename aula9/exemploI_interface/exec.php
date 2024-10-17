<?php

require_once("modelo/RadioPortatil.php");
require_once("modelo/RadioRelogio.php");

$tipo = "RP";
$tipo = "RR";

$radio = null;

if ($tipo == "RP") {
    $radio = new RadioPortatil();
    $radio->setCor("preto");
    $radio->setMarca("Livstar");
} else if ($tipo == "RR") {
    $radio = new RadioRelogio();
    $radio->setCorTela("vermelho");
}

$radio->ligarRadio();
$radio->desligarRadio();
if($radio instanceof iRelogio)
    $radio->mostrarHora();
