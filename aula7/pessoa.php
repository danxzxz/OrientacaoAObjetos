<?php

class Pessoa
{
    private string $nome;
    private string $sobrenome;
    private int $idade;

    public function __toString()
    {
        $pessoa = $this->getNome() . " | " . $this->getSobrenome() . " | " . $this->getIdade() . "y\n";
        return $pessoa . "\n";
    }

    public function getNome(): string
    {
        return $this->nome;
    }


    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function setSobrenome(string $sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }


}

// programa principal
$opcao = 0;

$cadastrar = array();

do {
    print "\n   ------------MENU----------\n";
    print " 1 - Cadastrar \n";
    print " 2 - Listar\n";
    print " 0 - SAIR \n";

    $opcao = readline("Escolha a opção que deseja: ");

    switch ($opcao) {

    case 0:
            print "Encerrando..\n";
            break;

    case 1:

        $p = new Pessoa();
        $p->setNome(readline("Informe o nome: "));
        $p->setSobrenome(readline("Informe o sobrenome : "));
        $p->setIdade(readline("Informe a idade: "));

            array_push($cadastrar, $p);

        echo "Pessoa cadastrada com sucesso!";

        break;

        case 2:

            foreach ($cadastrar as $c) {
                print $c;
            }

            break;

        default:
            print "OPÇÃO INVÁLIDO!!";
            break;
    }
} while ($opcao != 0);
