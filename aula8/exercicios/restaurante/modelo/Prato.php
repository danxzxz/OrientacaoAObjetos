<?php



class Prato
{
    private string $nome;
    private int $numero;
    private int $valor;

    public function __toString() {
        return $this->numero . " - " . $this->nome . " - R$" . $this->valor;
    }


    public function __construct($nome, $numero, $valor)
    {
        $this->nome = $nome;
        $this->numero = $numero;
        $this->valor = $valor;
    }

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
     * Get the value of numero
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor(): int
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor(int $valor): self
    {
        $this->valor = $valor;

        return $this;
    }


}
