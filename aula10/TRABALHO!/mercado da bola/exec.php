<?php
require_once('modelo/Atacante.php');
require_once('modelo/Defensor.php');
require_once('modelo/MeioCampo.php');
require_once('modelo/Goleiro.php');
require_once('modelo/Jogador.php');
$jogadores = array();


//MEIO CAMPO
$m1 = new MeioCampo("Kevin De Bruyne", 33, "MEI", "Belga", 67, 87, 91, 223000000, "Lançamento em profundidade, Visão de jogo", 92, 94, 97);
array_push($jogadores, $m1);
$m2 = new MeioCampo("Casemiro", 32, "VOL", "Brasileiro", 63, 75, 89, 128000000, "Desarme, Lançamento", 77, 75, 82);
array_push($jogadores, $m2);
$m3 = new MeioCampo("Joshua Kimmich", 29, "VOL", "Alemão", 86, 78, 92, 380000000, "Velocidade, Pressão pós-perda", 92, 89, 85);
array_push($jogadores, $m3);
$m4 = new MeioCampo("Toni Kross", 34, "MC", "Alemão", 67, 89, 95, 430000000, "Lançamento em profundidade, Bola parada, Chute de média e longa distância", 97, 98, 99);
array_push($jogadores, $m4);
$m5 = new MeioCampo("JUde Bellingham", 21, "MC", "Inglês", 89, 89, 96, 1000000000, "Força, Jogo Aéreo, Lançamento, Chute de fora da área", 90, 92, 93);
array_push($jogadores, $m5);


//ATACANTE
$a1 = new Atacante("Kylian Mbappé", 25, "ATA", "Francês", 97, 90, 91, 250000000, "Velocidade, Dribles, Chute, Liderança", 92);
array_push($jogadores, $a1);
$a2 = new Atacante("Erling Haaland", 24, "CA", "Dinamarques", 96, 94, 96, 383000000, "Velocidade, Força, Chute, Jogo Aéreo", 80);
array_push($jogadores, $a2);
$a3 = new Atacante("Harry Kane", 31, "CA", "Inglês", 78, 95, 91, 352000000, "Jogo Aéreo, Força, Chute, Liderança", 86);
array_push($jogadores, $a3);
$a4 = new Atacante("Lautaro Martínez", 27, "CA/ATA", "Argentino", 84, 89, 89, 745000000, "Velocidade, Dribles, Chute, Liderança", 87);
array_push($jogadores, $a4);
$a5 = new Atacante("Vinicius Junior", 24, "PE/ATA", "Brasileiro", 95, 89, 90, 1000000000, "Velocidade, Dribles, Chute, Genialidade absurda", 96);
array_push($jogadores, $a5);
//DEFENSOR idade pos nacionalidade overall velocidade chute multa qualidade Desarme Fisico JogoAereo
 
$d1 = new Defensor("Rúben Dias", 27, "ZAG", "Português", 89, 67, 40, 100000000, "Força física, Jogo aéreo, Desarme, Visão de jogo, Quebra de linha", 89, 88, 90);
array_push($jogadores, $d1);
$d2 = new Defensor("Virgil van Dijk", 33, "ZAG", "Holândes", 89, 78, 61, 230000000, "Disciplina, Liderança, Força, Jogo aéreo, Posicionamento, Grande senso de cobertura", 89, 89, 92);
array_push($jogadores, $d2);
$d3 = new Defensor("Éder Militão", 26, "ZAG", "Brasileiro", 85, 86, 52, 500000000, "Jogo Aéreo, Força, Velocidade, Liderança", 86, 82, 86);
array_push($jogadores, $d3);
$d4 = new Defensor("Alexander-Arnold", 26, "LD", "Inglês", 86, 80, 74, 80000000, "Velocidade, Dribles, Presença na área, Cruzamento", 80, 77, 71);
array_push($jogadores, $d4);
$d5 = new Defensor("Theo Hernández", 27, "LE", "Francês", 87, 90, 76, 75000000, "Velocidade, Chute, Cruzamento, Arrancada, Visão de Jogo", 81, 89, 80);
array_push($jogadores, $d5);


//GOLEIRO

$g1 = new Goleiro("Alisson", 32, "GK", "Brasileiro", 89, 85, 85, 90000000, "", 90);
array_push($jogadores, $g1);
$g2 = new Goleiro("Courtois", 32, "GK", "Belga", 88, 85, 78, 100000000, "", 88);
array_push($jogadores, $g2);
$g3 = new Goleiro("Emiliano Martínez", 32, "GK", "Argentino", 87, 83, 83, 60000000, "", 87);
array_push($jogadores, $g3);







$opcao = 0;

$comprar = array();

do {
    print "\n   ------------MERCADO DA BOLA----------\n";
    print " 1 - 💸COMPRAR JOGADOR💸\n";
    print " 2 - 🖊️CADASTRAR JOGADOR🖊️\n";
    print " 3 - 🛒CARRINHO🛒\n";
    print " 0 - SAIR \n";

    $opcao = readline("Escolha a opção que deseja: ");

    switch ($opcao) {

    case 0:
            print "Encerrando..\n";
            break;

    case 1:

        $p = new PessoaFisica();
        $p->setNome(readline("Informe o nome: "));
        $p->setIdade(readline("Informe a idade : "));
        $p->setCpf(readline("Informe o CPF: "));

            array_push($cadastrar, $p);

        echo "Pessoa Física cadastrada com sucesso!";

        break;
        case 2:

            $p = new PessoaJuridica();
            $p->setNome(readline("Informe o nome: "));
            $p->setNomeFantasia(readline("Informe o nome fantasia: "));
            $p->setCnpj(readline("Informe o CPF: "));
    
                array_push($cadastrar, $p);
    
            echo "Pessoa Jurídica cadastrada com sucesso!";
    
            break;
    
        case 3:

            foreach ($cadastrar as $c) {
                print $c;
            }

            break;

        default:
            print "OPÇÃO INVÁLIDO!!";
            break;
    }
} while ($opcao != 0);
