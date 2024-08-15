<?php

class Carro{

    //Atributos

    private $modelo;
    private $marca;
    private $anoFabricacao;
    private $velMax;
    
     public function __toString()
     {
    // $carro = $this->modelo;
    $carro = "-" . $this->marca;
    $carro .= " fabricado em " . $this->anoFabricacao;
    $carro .= ", com velocidade máxima de " . $this->velMax . "km/h";
    return $carro . "\n";

     }


    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of anoFabricacao
     */
    public function getAnoFabricacao()
    {
        return $this->anoFabricacao;
    }

    /**
     * Set the value of anoFabricacao
     */
    public function setAnoFabricacao($anoFabricacao): self
    {
        $this->anoFabricacao = $anoFabricacao;

        return $this;
    }

    /**
     * Get the value of velMax
     */
    public function getVelMax()
    {
        return $this->velMax;
    }

    /**
     * Set the value of velMax
     */
    public function setVelMax($velMax): self
    {
        $this->velMax = $velMax;

        return $this;
    }
}//fim classe carro


$c1 = new Carro();
$c1 -> setModelo(readline("Qual o modelo do carro? "));
$c1 -> setMarca(readline("Qual a marca do carro? "));
$c1 -> setAnoFabricacao(readline("Qual o ano de fabricação do carro? "));
$c1 -> setVelMax(readline("Qual a velocidade máxima do carro? "));
echo "\n\n";


$c2 = new Carro();
$c2 -> setModelo(readline("Qual o modelo do carro? "));
$c2 -> setMarca(readline("Qual a marca do carro? "));
$c2 -> setAnoFabricacao(readline("Qual o ano de fabricação do carro? "));
$c2 -> setVelMax(readline("Qual a velocidade máxima do carro? "));
echo "\n\n";


$c3 = new Carro();
$c3 -> setModelo(readline("Qual o modelo do carro? "));
$c3 -> setMarca(readline("Qual a marca do carro? "));
$c3 -> setAnoFabricacao(readline("Qual o ano de fabricação do carro? "));
$c3 -> setVelMax(readline("Qual a velocidade máxima do carro? "));
echo "\n\n";


$carroMaisVeloz = $c1;

if($c2->getVelMax() > $carroMaisVeloz->getVelMax())
    $carroMaisVeloz = $c2;

if($c3->getVelMax() > $carroMaisVeloz->getVelMax())
$carroMaisVeloz = $c3;



$carroMaisLento = $c1;

if($c2->getVelMax() < $carroMaisLento->getVelMax())
    $carroMaisLento = $c2;

if($c3->getVelMax() < $carroMaisLento->getVelMax())
$carroMaisLento = $c3;

echo "O carro mais rapido é: " . $carroMaisVeloz->getModelo();
echo $carroMaisVeloz;
echo "\n";
echo "O carro mais lento é: " . $carroMaisLento->getModelo();
echo $carroMaisLento;

