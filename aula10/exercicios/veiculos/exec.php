<?php
require_once ("modelo/Caminhao.php");
require_once ("modelo/CarroPasseio.php");
require_once ("modelo/Onibus.php");
require_once ("modelo/Veiculo.php");

$caminhao = new Caminhao();
$caminhao->setModelo(readline("Qual o modelo do Caminhao? "));
$caminhao->setVelocidadeMax(readline("Qual a velocidade máxima do Caminhao? "));
$caminhao->setCor(readline("Qual a cor do Caminhao? "));
$caminhao->setQtdCarga(readline("Qual a quantidade de carga do Caminhao? "));
$caminhao->setAltura(readline("Qual a altura do Caminhao? "));
echo $caminhao->getDados();
echo "\n\n";



$carro = new CarroPasseio();
$carro->setModelo(readline("Qual o modelo do carro? "));
$carro->setVelocidadeMax(readline("Qual a velocidade máxima do carro? "));
$carro->setCor(readline("Qual a cor do carro? "));
$carro->setQtdPassageiros(readline("Qual a quantidade de passageiros do carro? "));
echo $carro->getDados();
echo "\n\n";



$onibus = new Onibus();
$onibus->setModelo(readline("Qual o modelo do onibus? "));
$onibus->setVelocidadeMax(readline("Qual a velocidade máxima do caronibusro? "));
$onibus->setCor(readline("Qual a cor do onibus? "));
$onibus->setQtdPassageiros(readline("Qual a quantidade de passageiros do onibus? "));
$onibus->setPesoMax(readline("Qual o peso max do onibus? "));
// echo $onibus->getDados();
echo "\n\n";


// echo "CAMINHÃO\n";
// echo $caminhao;
// echo "\n\n";

// echo "CARRO\n";
// echo $carro;
// echo "\n\n";

// echo "ONIBUS\n";
// echo $onibus;
echo "CAMINHÃO\n";
echo $caminhao->getDados();
echo "CARRO\n";
echo $carro->getDados();
echo "ONIBUS\n";
echo $onibus->getDados();