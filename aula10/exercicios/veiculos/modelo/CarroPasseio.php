<?php
require_once ("modelo/Veiculo.php");

class CarroPasseio extends Veiculo{
    private $qtdPassageiros;

    public function getDados()
    {
        $dados = " - Modelo: " . $this->modelo;
        $dados .= "\n - Velocidade maxima: " . $this->velocidadeMax;
        $dados .= "\n - Cor: " . $this->cor;
        $dados .= "\n - Quantidade de passageiros: " . $this->qtdPassageiros;
        return $dados . "\n";
    }

    // public function __toString()
    // {
    //     $dados = " - Modelo: " . $this->modelo;
    //     $dados .= "\n - Velocidade maxima: " . $this->velocidadeMax;
    //     $dados .= "\n - Cor: " . $this->cor;
    //     $dados .= "\n - Quantidade de passageiros: " . $this->qtdPassageiros;
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
}