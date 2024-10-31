<?php
require_once("Pessoa.php");

    class PessoaFisica extends Pessoa{
        
    private int $idade;
    private int $cpf;


    /**
     * Get the value of idade
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of cpf
     */
    public function getCpf(): int
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     */
    public function setCpf(int $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }
}