<?php
require_once ("modelo/Veiculo.php");

class Caminhao extends Veiculo{
    private $qtdCarga;
    private $altura;

    public function getDados()
    {
        $dados = " - Modelo: " . $this->modelo;
        $dados .= "\n - Velocidade maxima: " . $this->velocidadeMax;
        $dados .= "\n - Cor: " . $this->cor;
        $dados .= "\n - Quantidade carga: " . $this->qtdCarga;
        $dados .= "\n - Altura: " . $this->qtdCarga;
        return $dados . "\n";
    }

    // public function __toString()
    // {
    //     $dados = " - Modelo: " . $this->modelo;
    //     $dados .= "\n - Velocidade maxima: " . $this->velocidadeMax;
    //     $dados .= "\n - Cor: " . $this->cor;
    //     $dados .= "\n - Quantidade carga: " . $this->qtdCarga;
    //     $dados .= "\n - Altura: " . $this->qtdCarga;
    //     return $dados . "\n";
    // }


    

    /**
     * Get the value of qtdCarga
     */
    public function getQtdCarga()
    {
        return $this->qtdCarga;
    }

    /**
     * Set the value of qtdCarga
     */
    public function setQtdCarga($qtdCarga): self
    {
        $this->qtdCarga = $qtdCarga;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}