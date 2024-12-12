<?php

require_once ("Veiculo.php");


  class Van extends Veiculo {

    public function ValorViagem() {

        return $this->aluguel + ($this->ValorKMrodado * $this->KMsrodados);

    }
    
  }