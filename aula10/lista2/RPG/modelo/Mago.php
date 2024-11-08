<?php

class Mago{

    protected $nome;
    protected Poder $poder;
    
    
    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of poder
     */
    public function getPoder(): Poder
    {
        return $this->poder;
    }

    /**
     * Set the value of poder
     */
    public function setPoder(Poder $poder): self
    {
        $this->poder = $poder;

        return $this;
    }
}