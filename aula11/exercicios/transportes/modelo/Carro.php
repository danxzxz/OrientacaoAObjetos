<?php

require_once ("Veiculo.php");


  class Carro extends Veiculo {

    public function __construct($aluguel, $valor)
    {
        parent::__construct($aluguel);
        $this->ValorKMrodado = 1.50;
    }

    public function getTipo(){
        return "Carro";
    }

    public function ValorViagem() {

        return $this->aluguel + ($this->ValorKMrodado * $this->KMsrodados);

    }
    
  }