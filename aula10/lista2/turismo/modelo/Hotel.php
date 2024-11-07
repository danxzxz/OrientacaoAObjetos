<?php
require_once("modelo/Espaco.php");

class Hotel extends Espaco{

    private $numEstrelas;
    private bool $cafeIncluso;

    public function getDadosHotel()
    {
        $dados = "\nHOTEL \n - Nome: " . $this->nome;
        $dados .= "\n - Endereço: " . $this->endereco;
        $dados .= "\n - Número de Estrelas: " . $this->numEstrelas;
        $dados .= "\n - Café Incluso " . ($this->cafeIncluso ? "Sim" : "Não");
        return $dados . "\n";
    }
    
    
    /**
     * Get the value of numEstrelas
     */
    public function getNumEstrelas()
    {
        return $this->numEstrelas;
    }

    /**
     * Set the value of numEstrelas
     */
    public function setNumEstrelas($numEstrelas): self
    {
        $this->numEstrelas = $numEstrelas;

        return $this;
    }

    /**
     * Get the value of cafeIncluso
     */
    public function getCafeIncluso()
    {
        return $this->cafeIncluso;
    }

    /**
     * Set the value of cafeIncluso
     */
    public function setCafeIncluso($cafeIncluso): self
    {
        $this->cafeIncluso = $cafeIncluso;

        return $this;
    }
}