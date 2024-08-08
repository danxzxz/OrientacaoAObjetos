<?php

class Pessoa{

    //Atributos
    private $nome;
    private $end;
    private $cidade;
    private $UF;
    private $altura;

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
     * Get the value of end
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set the value of end
     */
    public function setEnd($end): self
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get the value of cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     */
    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of UF
     */
    public function getUF()
    {
        return $this->UF;
    }

    /**
     * Set the value of UF
     */
    public function setUF($UF): self
    {
        $this->UF = $UF;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }

    public function getApresentacao()
    {
       echo "Olá mundo, sou o " . $this->getNome() . 
       ", resido no endereço " . $this->getEnd() . 
       ", ". $this->getCidade() . 
       "-" . $this->getUF() . 
       " e possuo uma altura de " . $this->getAltura() .  "\n";
    }

}

$p = new Pessoa();
$p->setNome("daniel");
$p->setEnd("lalala");
$p->setCidade("foz");
$p->setUF("PR");
$p->setAltura("180");

$p->getApresentacao();