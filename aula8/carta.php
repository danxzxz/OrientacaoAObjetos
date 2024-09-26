<?php
// Definição da classe Carta
class Carta {
    private $numero;
    private $nome;

    public function __construct($numero, $nome) {
        $this->numero = $numero;
        $this->nome = $nome;
    }

    public function __toString() {
        return $this->numero . " de " . $this->nome;
    }

    

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

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
}


$baralho = [
    new Carta("Ás", "Espadas"),
    new Carta("2", "Ouros"),
    new Carta("3", "Copas"),
    new Carta("4", "Paus"),
    new Carta("5", "Espadas"),
    new Carta("6", "Ouros"),
    new Carta("7", "Copas")
];

//sorteio 
$indiceSorteado = array_rand($baralho);
$cartaSorteada = $baralho[$indiceSorteado];

//mostrar as cartas
echo "As cartas disponíveis são:\n";
foreach ($baralho as $indice => $carta) {
    echo $numCarta  . ": " . $carta . "\n";
}

do {
    $escolha = readline("Escolha o número da carta (1 a 7): ") ;

    if ($escolha < 0 || $escolha >= 7) {
        echo "Escolha inválida, tente novamente.\n";
    } else if ($baralho[$escolha] == $cartaSorteada) {
        echo "Parabéns! Você acertou a carta: " . $cartaSorteada . "\n";
        break;
    } else {
        echo "Errou! Tente novamente.\n";
    }
} while (true);
