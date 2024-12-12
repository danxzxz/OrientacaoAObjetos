<?php

require_once ("Veiculo.php");


  class Onibus extends Veiculo {


    public function __construct($aluguel)
    {
        parent::__construct($aluguel);
        $this->ValorKMrodado = 4.20;
    }

    public function ValorViagem() {

        return $this->aluguel + ($this->ValorKMrodado * $this->KMsrodados);

    }
    public function getTipo(){
        return "Ônibus";
    }
  }