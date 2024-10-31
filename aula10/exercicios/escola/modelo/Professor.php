<?php
require_once ("modelo/Pessoa.php");
class Professor extends Pessoa
{
    private $salario;


    public function __toString()
    {
        $dados = " - Nome: " . $this->nome;
        $dados .= "\n - RG: " . $this->rg;
        $dados .= "\n - Idade: " . $this->idade;
        $dados .= "\n - Salário: " . $this->salario;
        return $dados . "\n";
    }
    /**
     * Get the value of salario
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     */
    public function setSalario($salario): self
    {
        $this->salario = $salario;

        return $this;
    }
}
