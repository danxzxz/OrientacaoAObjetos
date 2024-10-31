<?php
require_once ("modelo/Veiculo.php");

class Onibus extends Veiculo{
    private $qtdPassageiros;
    private $pesoMax;

    public function getDados()
    {
        $dados = " - Modelo: " . $this->modelo;
        $dados .= "\n - Velocidade maxima: " . $this->velocidadeMax;
        $dados .= "\n - Cor: " . $this->cor;
        $dados .= "\n - Quantidade de passageiros: " . $this->qtdPassageiros;
        $dados .= "\n - Peso max: " . $this->pesoMax;
        return $dados . "\n";
    }

    // public function __toString()
    // {
    //     $dados = " - Modelo: " . $this->modelo;
    //     $dados .= "\n - Velocidade maxima: " . $this->velocidadeMax;
    //     $dados .= "\n - Cor: " . $this->cor;
    //     $dados .= "\n - Quantidade de passageiros: " . $this->qtdPassageiros;
    //     $dados .= "\n - Peso max: " . $this->pesoMax;
    //     return $dados . "\n";
    // }


    /**
     * Get the value of qtdPassageiros
     */
    public function getQtdPassageiros()
    {
        return $this->qtdPassageiros;
    }

    /**
     * Set the value of qtdPassageiros
     */
    public function setQtdPassageiros($qtdPassageiros): self
    {
        $this->qtdPassageiros = $qtdPassageiros;

        return $this;
    }

    /**
     * Get the value of pesoMax
     */
    public function getPesoMax()
    {
        return $this->pesoMax;
    }

    /**
     * Set the value of pesoMax
     */
    public function setPesoMax($pesoMax): self
    {
        $this->pesoMax = $pesoMax;

        return $this;
    }
}