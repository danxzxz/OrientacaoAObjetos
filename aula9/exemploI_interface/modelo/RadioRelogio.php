<?php
require_once("iRadio.php");
require_once("iRelogio.php");

class RadioRelogio implements iRadio, iRelogio{

    private $corTela;

    public function ligarRadio(){
        echo "radio relogio ligado!\n";
    }

    public function desligarRadio(){
        echo "radio relogio desligado!\n";

    }
    public function mostrarHora()
    {
        echo date("H:m:s d/m/y") . "\n";
    }

    
    /**
     * Get the value of corTela
     */
    public function getCorTela()
    {
        return $this->corTela;
    }

    /**
     * Set the value of corTela
     */
    public function setCorTela($corTela): self
    {
        $this->corTela = $corTela;

        return $this;
    }
}