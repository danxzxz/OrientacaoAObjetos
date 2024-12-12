<?php

require_once ("Veiculo.php");


  class Van extends Veiculo {

    public function __construct($aluguel)
    {
        parent::__construct($aluguel);
        $this->ValorKMrodado = 2.10;
    }
    
    public function ValorViagem() {

        return $this->aluguel + ($this->ValorKMrodado * $this->KMsrodados);

    }
    public function getTipo(){
        return "Van";
    }
  }