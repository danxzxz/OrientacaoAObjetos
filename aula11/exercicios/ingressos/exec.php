<?php

require_once "modelo/Ingresso.php";
require_once "modelo/IngressoVIP.php";
require_once "modelo/IngressoCamarote.php";

$ingresso = new Ingresso(50.0);
echo "valor do ingresso: R$ " . $ingresso->getValorTotal() . "\n";

$ingressoVIP = new IngressoVIP(50.0, 30.0);
echo "valor do ingresso VIP: R$ " . $ingressoVIP->getValorTotal() . "\n";

$ingressoCamarote = new IngressoCamarote(50.0, 30.0, 20.0);
echo "valor do ingresso camarote: R$ " . $ingressoCamarote->getValorTotal() . "\n";
