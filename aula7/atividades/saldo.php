<?php

class Receita
{

    private string $descricao;
    private float $valor;


    public function __toString()
    {
        $receita = "DESCRIÇÃO: " . $this->getDescricao() . " | VALOR:" . $this->getValor() . "\n";
        return $receita . "\n";
    }
    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

class Despesa
{

    private string $descricao;
    private float $valor;

    public function __toString()
    {
        $despesa = "DESCRIÇÃO: " . $this->getDescricao() . " | VALOR:" . $this->getValor() . "\n";
        return $despesa . "\n";
    }
    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}


$opcao = 0;

$receita = array();
$despesa = array();

do {
    print "\n   ------------MENU----------\n";
    print " 1 - Adicionar receita \n";
    print " 2 - Adicionar despesa \n";
    print " 3 - Listar receita\n";
    print " 4 - Listar despesa \n";
    print " 5 - Saldo \n";
    print " 0 - SAIR \n";

    $opcao = readline("Escolha a opção que deseja: ");

    switch ($opcao) {

        case 0:
            print "Encerrando..\n";
            break;

        case 1:

            $rec = new Receita();
            $rec->setDescricao(readline("Informe a descrição da receita: "));
            $rec->setValor(readline("Informe o valor da receita: "));

            array_push($receita, $rec);

            echo "Receita cadastrada com sucesso!";

            break;
        case 2:

            $desp = new Despesa();
            $desp->setDescricao(readline("Informe a descrição da despesa: "));
            $desp->setValor(readline("Informe o valor da despesa: "));

            array_push($despesa, $desp);

            echo "Despesa cadastrada com sucesso!";

            break;
        case 3:
            echo "\n----RECEITAS----\n";
            foreach ($receita as $r) {
                print $r;
            }

            break;


        case 4:
            echo "\n----DESPESAS----\n";
            foreach ($despesa as $d) {
                print $d;
            }

            break;

        case 5:
            $totalDespesas = 0;
            $totalReceitas = 0;
            $saldo = 0;

            echo "\n---SALDO---\n";
            foreach ($despesa as $despesa) {
               $totalDespesas += $despesa ->getValor();
            }

            foreach ($receita as $receita) {
                $totalReceitas += $receita ->getValor();
            }

            $saldo = $totalReceitas - $totalDespesas;

            echo "Saldo: R$ " . $saldo . "\n";
            echo "Total de receitas: R$ " . $totalReceitas . "\n";
            echo "Total de despesas: R$ " . $totalDespesas . "\n";


            break;

        default:
            print "OPÇÃO INVÁLIDO!!";
            break;
    }
} while ($opcao != 0);
