<?php
require_once("modelo/Pessoa.php");
class Aluno extends Pessoa
{
    private $matricula;

    public function __toString()
    {
        $dados = " - Nome: " . $this->nome;
        $dados .= "\n - RG: " . $this->rg;
        $dados .= "\n - Idade: " . $this->idade;
        $dados .= "\n - Matríc: " . $this->matricula;
        return $dados . "\n";
    }


    /**
     * Get the value of matricula
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     */
    public function setMatricula($matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }
}
