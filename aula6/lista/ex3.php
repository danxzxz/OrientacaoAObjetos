<?php

class Veiculo{

    private $capacidade;
    private $passageiros;


    function __construct(){
        $this->capacidade;

    }

    /**
     * Get the value of capacidade
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    /**
     * Get the value of passageiros
     */
    public function getPassageiros()
    {
        return $this->passageiros;
    }

    /**
     * Set the value of passageiros
     */
    public function setPassageiros($passageiros): self
    {
        $this->passageiros = $passageiros;

        return $this;
    }

    public function venderPassagens($qtdPassagens){
        if ($this->passageiros + $qtdPassagens <= $this->capacidade) {
            $this->passageiros = $this->passageiros + $qtdPassagens;
            return true;
         } else {
            return false;
    }
}
}

$v = new Veiculo();
$v -> setCapacidade(readline("Qual a capacidade do veículo? "));


while (true) {
    $qtdPassagens = readline("Quantas passagens deseja comprar? (caso nao queira comprar mais passagens, digite 0) ");

        if ($qtdPassagens == 0) {
            echo "Obrigado e volte sempre!\n\n";
            break;
        }
    
    if($v->venderPassagens($qtdPassagens)){
    echo "Sua compra foi realizada, revise o horário de partida do veículo e ótima viagem!!\n";
    }
    else{
        echo "Infelizmente não é possível adquirir esta quantidade de passagens\nConfira no nosso site os próximos veículos e volte sempre!!\n";
        break;
    }
}



