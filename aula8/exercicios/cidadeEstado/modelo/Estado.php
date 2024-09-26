<?php

class Estado {

    private string $nome;
    private string $sigla;

    private array $cidades;
    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sigla
     */
    public function getSigla(): string
    {
        return $this->sigla;
    }

    /**
     * Set the value of sigla
     */
    public function setSigla(string $sigla): self
    {
        $this->sigla = $sigla;

        return $this;
    }

    /**
     * Get the value of cidades
     */
    public function getCidades(): array
    {
        return $this->cidades;
    }

    /**
     * Set the value of cidades
     */
    public function setCidades(array $cidades): self
    {
        $this->cidades = $cidades;

        return $this;
    }
}