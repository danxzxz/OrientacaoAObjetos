<?php
abstract class PontoTuristico {
    protected int $id;
    protected string $nome;
    protected string $cidade;
    protected string $pais;
    protected string $descricao;
    protected float $avaliacao;
    
    public function __construct($nome, $cidade, $pais, $descricao, $avaliacao) {
        $this->nome = $nome;
        $this->cidade = $cidade;
        $this->pais = $pais;
        $this->descricao = $descricao;
        $this->avaliacao = $avaliacao;
    }

    public abstract function getTipo(): string;

    public function getNome(): string {
        return $this->nome;
    }

    public function getCidade(): string {
        return $this->cidade;
    }

    public function getPais(): string {
        return $this->pais;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function getAvaliacao(): float {
        return $this->avaliacao;
    }
}
?>