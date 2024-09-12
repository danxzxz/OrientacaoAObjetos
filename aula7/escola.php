<?php

class Escola
{
    private string $nome;
    private string $qtdAlunos;
    private string $endereco;

    public function __construct($n = "", $qtA = 0, $end = "")
    {
        $this->nome = $n;
        $this->qtdAlunos = $qtA;
        $this->endereco = $end;
    }

    public function __toString(){

        echo "\n\nA escola com mais alunos é: \n";
        $alunos = $this->nome;
        $alunos .= " | " . $this->qtdAlunos;
        $alunos .= " | " . $this->endereco;
        return $alunos . "\n";
}

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
     * Get the value of qtdAlunos
     */
    public function getQtdAlunos(): string
    {
        return $this->qtdAlunos;
    }

    /**
     * Set the value of qtdAlunos
     */
    public function setQtdAlunos(string $qtdAlunos): self
    {
        $this->qtdAlunos = $qtdAlunos;

        return $this;
    }

    /**
     * Get the value of endereco
     */
    public function getEndereco(): string
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco(string $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }
}

$escolas = array();
for ($i = 1; $i < 4; $i++) {
    echo "\n\n";
    array_push($escolas, new Escola(
        readline("Qual o nome da escola $i? "),
        readline("Quantos alunos tem na escola $i? "),
        readline("Qual o endereço da escola $i? ")
    ));
}


foreach ($escolas as $e){
    echo $e->getNome() . " - " . $e->getQtdAlunos() .  " - " . $e->getEndereco() .  "\n";
}



$maisAlunos = $escolas[0];

foreach ($escolas as $lala){
    if ($lala->getQtdAlunos() > $maisAlunos->getQtdAlunos()) {
        $maisAlunos = $lala;
    }

}

echo $maisAlunos;
