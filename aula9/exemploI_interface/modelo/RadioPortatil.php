<?php
require_once "iRadio.php";


class RadioPortatil implements IRadio{

    //atributos
    private $cor;
    private $marca;


    //metodos
    
    public function ligarRadio(){
        echo "radio portatil ligado!\n";
    }

    public function desligarRadio(){
        echo "radio portatil desligado!\n";

    }

    /**
     * Get the value of cor
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     */
    public function setCor($cor): self
    {
        $this->cor = $cor;

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
}