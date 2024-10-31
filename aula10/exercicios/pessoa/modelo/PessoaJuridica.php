<?php
require_once("Pessoa.php");
    class PessoaJuridica extends Pessoa{
        
    private string $nomeFantasia;
    private int $cnpj;


    /**
     * Get the value of nomeFantasia
     */
    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }

    /**
     * Set the value of nomeFantasia
     */
    public function setNomeFantasia(string $nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    /**
     * Get the value of cnpj
     */
    public function getCnpj(): int
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     */
    public function setCnpj(int $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }
}