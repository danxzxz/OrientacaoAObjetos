<?php

class Veiculo{

private $capacidade;
private $passagensVendidas;


function __construct($capacidade){
    $this->capacidade = $capacidade;
    $this->passagensVendidas = 0;

}

    public function venderPassagens($quantidade){
        if($this) {
            return true;

            }
        else 
            return false;
        }
        

/**
 * Get the value of capacidade
 */
public function getCapacidade()
{
return $this->capacidade;
}

/**
 * Set the value of capacidade
 */
public function setCapacidade($capacidade): self
{
$this->capacidade = $capacidade;

return $this;
}

/**
 * Get the value of passagensVendidas
 */
public function getPassagensVendidas()
{
return $this->passagensVendidas;
}

/**
 * Set the value of passagensVendidas
 */
public function setPassagensVendidas($passagensVendidas): self
{
$this->passagensVendidas = $passagensVendidas;

return $this;
}
    }

$capacidade = readline("Informe a capacidade do veículo: ");
$onibus = new Veiculo($capacidade);