<?php

abstract class Veiculo {

    protected $aluguel;
    protected $ValorKMrodado;
    protected $KMsrodados;


        public function __construct($aluguel) {
        $this->aluguel = $aluguel;


    }
    abstract public function ValorViagem();

    abstract public function getTipo();




    

    /**
     * Get the value of aluguel
     */
    public function getAluguel()
    {
        return $this->aluguel;
    }

    /**
     * Set the value of aluguel
     */
    public function setAluguel($aluguel): self
    {
        $this->aluguel = $aluguel;

        return $this;
    }

    /**
     * Get the value of ValorKMrodado
     */
    public function getValorKMrodado()
    {
        return $this->ValorKMrodado;
    }

    /**
     * Set the value of ValorKMrodado
     */
    public function setValorKMrodado($ValorKMrodado): self
    {
        $this->ValorKMrodado = $ValorKMrodado;

        return $this;
    }

    /**
     * Get the value of KMsrodados
     */
    public function getKMsrodados()
    {
        return $this->KMsrodados;
    }

    /**
     * Set the value of KMsrodados
     */
    public function setKMsrodados($KMsrodados): self
    {
        $this->KMsrodados = $KMsrodados;

        return $this;
    }

 }