<?php

class Aluno{

    //Atributos
    private $nome;
    private $nota1;
    private $nota2;

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
     * Get the value of nota1
     */
    public function getNota1()
    {
        return $this->nota1;
    }

    /**
     * Set the value of nota1
     */
    public function setNota1($nota1): self
    {
        $this->nota1 = $nota1;

        return $this;
    }

    /**
     * Get the value of nota2
     */
    public function getNota2()
    {
        return $this->nota2;
    }

    /**
     * Set the value of nota2
     */
    public function setNota2($nota2): self
    {
        $this->nota2 = $nota2;

        return $this;
    }

    public function getMedia()
    {
        return ($this->nota1 + $this->nota2) /2;
    }

    public function getBoletim(){

        echo "A média do aluno " . $this->getNome() . " é: " . $this->getMedia() . "\n";
    }
}


for ($i=0; $i < 3; $i++) { 
$m = new Aluno();
$m->setNome(readline("Qual o nome do aluno? "));
$m->setNota1(readline("Qual a primeira nota? "));
$m->setNota2(readline("Qual a segunda nota? "));

$m->getBoletim();
echo "\n";
}

