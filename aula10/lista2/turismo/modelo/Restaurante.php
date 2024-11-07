<?php
require_once("modelo/Espaco.php");

class Restaurante extends Espaco{

    private $tipoComida;

    public function getDadosRestaurante()
    {
        $dados = "\nRESTAURANTE\n - Nome: " . $this->nome;
        $dados .= "\n - Endereço: " . $this->endereco;
        $dados .= "\n - Tipo de comida: " . $this->tipoComida;
        return $dados . "\n";
    }
        

    /**
     * Get the value of tipoComida
     */
    public function getTipoComida()
    {
        return $this->tipoComida;
    }

    /**
     * Set the value of tipoComida
     */
    public function setTipoComida($tipoComida): self
    {
        $this->tipoComida = $tipoComida;

        return $this;
    }
}