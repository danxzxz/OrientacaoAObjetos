<?php
require_once "IConsumidorEnergia.php";

class Residencial implements IConsumidorEnergia{

    private $consumo;

    public function getValorFatura(){

    }

    /**
     * Get the value of consumo
     */
    public function getConsumo()
    {
        return $this->consumo;
    }

    /**
     * Set the value of consumo
     */
    public function setConsumo($consumo): self
    {
        $this->consumo = $consumo;

        return $this;
    }
}