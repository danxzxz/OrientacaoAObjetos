<?php
require_once('modelo/Atacante.php');
require_once('modelo/Defensor.php');
require_once('modelo/MeioCampo.php');
require_once('modelo/Goleiro.php');
require_once('modelo/Jogador.php');
// ARRAYS
$atacante = array();
$goleiro = array();
$defensor = array();
$meiocampo = array();
$carrinho = array();


//FUNÇÕES
function listarCarrinho(array $carrinho) {
    echo "\n\n====JOGADORES NO CARRINHO====\n";

    $i = 1;
    echo "\n";

    foreach ($carrinho as $c) {
      
        if ($c instanceof Atacante) {
            echo $i . "- " . $c->getDadosAtacante(); 
            $i++;
        } elseif ($c instanceof MeioCampo) {
            echo $i . "- " . $c->getDadosMeioCampo(); 
            $i++;
        } elseif ($c instanceof Goleiro) {
            echo $i . "- " . $c->getDadosGoleiro(); 
            $i++;
        } elseif ($c instanceof Defensor) {
            echo $i . "- " . $c->getDadosDefensor(); 
            $i++;
        } else {
            echo "Tipo de jogador desconhecido.\n";
        }
    }

    // Caso o carrinho esteja vazio, mostrar uma mensagem
    if ($i == 1) {
        echo "Carrinho vazio.\n";
    }
}

function listarGoleiro(array $goleiro) {
    echo "\n\n====JOGADORES DISPONÍVEIS====\n";
          
    $i = 1;
    echo "\n-------";
    foreach($goleiro as $j) {
        if($j instanceof Goleiro){
        echo "\n==>" . $i .  $j->getDadosGoleiro(); 
        $i++;
    }
}
}

function listarMeioCampo(array $meiocampo) {
    echo "\n\n====JOGADORES DISPONÍVEIS====\n";
          
    $i = 1;
    echo "\n-------";
    foreach($meiocampo as $j) {
        if($j instanceof MeioCampo){
        echo "\n==>" . $i . $j->getDadosMeioCampo(); 
        $i++;
    }
}
}

function listarAtacante(array $atacante) {
    echo "\n\n====JOGADORES DISPONÍVEIS====\n";
          
    $i = 1;
    echo "\n-------";
    foreach($atacante as $j) {
        if($j instanceof Atacante){
        echo "\n==>" . $i . $j->getDadosAtacante(); 
        $i++;
    }
}
}

function listarDefensor(array $defensor) {
    echo "\n\n====JOGADORES DISPONÍVEIS====\n";
          
    $i = 1;
    echo "\n-------";
    foreach($defensor as $j) {
        if($j instanceof Defensor){
        echo "\n==>" . $i . $j->getDadosDefensor(); 
        $i++;
    }
}
}


//-----JOGADORES

//MEIO CAMPO
$m1 = new MeioCampo("Kevin De Bruyne", 33, "MEI", "Belga", 67, 87, 91, 223000000, "Lançamento em profundidade, Visão de jogo", 92, 94, 97);
array_push($meiocampo, $m1);
$m2 = new MeioCampo("Casemiro", 32, "VOL", "Brasileiro", 63, 75, 89, 128000000, "Desarme, Lançamento", 77, 75, 82);
array_push($meiocampo, $m2);
$m3 = new MeioCampo("Joshua Kimmich", 29, "VOL", "Alemão", 86, 78, 92, 380000000, "Velocidade, Pressão pós-perda", 92, 89, 85);
array_push($meiocampo, $m3);
$m4 = new MeioCampo("Toni Kross", 34, "MC", "Alemão", 67, 89, 95, 430000000, "Lançamento em profundidade, Bola parada, Chute de média e longa distância", 97, 98, 99);
array_push($meiocampo, $m4);
$m5 = new MeioCampo("Jude Bellingham", 21, "MC", "Inglês", 89, 89, 96, 1000000000, "Força, Jogo Aéreo, Lançamento, Chute de fora da área", 90, 92, 93);
array_push($meiocampo, $m5);


//ATACANTE
$a1 = new Atacante("Kylian Mbappé", 25, "ATA", "Francês", 97, 90, 91, 250000000, "Velocidade, Dribles, Chute, Liderança", 92);
array_push($atacante, $a1);
$a2 = new Atacante("Erling Haaland", 24, "CA", "Dinamarques", 96, 94, 96, 383000000, "Velocidade, Força, Chute, Jogo Aéreo", 80);
array_push($atacante, $a2);
$a3 = new Atacante("Harry Kane", 31, "CA", "Inglês", 78, 95, 91, 352000000, "Jogo Aéreo, Força, Chute, Liderança", 86);
array_push($atacante, $a3);
$a4 = new Atacante("Lautaro Martínez", 27, "CA/ATA", "Argentino", 84, 89, 89, 745000000, "Velocidade, Dribles, Chute, Liderança", 87);
array_push($atacante, $a4);
$a5 = new Atacante("Vinicius Junior", 24, "PE/ATA", "Brasileiro", 95, 89, 90, 1000000000, "Velocidade, Dribles, Chute, Genialidade absurda", 96);
array_push($atacante, $a5);


//DEFENSOR 
$d1 = new Defensor("Rúben Dias", 27, "ZAG", "Português", 67, 40, 89, 100000000, "Força física, Jogo aéreo, Desarme, Visão de jogo, Quebra de linha", 89, 88, 90);
array_push($defensor, $d1);
$d2 = new Defensor("Virgil van Dijk", 33, "ZAG", "Holândes", 89, 78, 61, 230000000, "Disciplina, Liderança, Força, Jogo aéreo, Posicionamento, Grande senso de cobertura", 89, 89, 92);
array_push($defensor, $d2);
$d3 = new Defensor("Éder Militão", 26, "ZAG", "Brasileiro", 85, 86, 52, 500000000, "Jogo Aéreo, Força, Velocidade, Liderança", 86, 82, 86);
array_push($defensor, $d3);
$d4 = new Defensor("Alexander-Arnold", 26, "LD", "Inglês", 86, 80, 74, 80000000, "Velocidade, Dribles, Presença na área, Cruzamento", 80, 77, 71);
array_push($defensor, $d4);
$d5 = new Defensor("Theo Hernández", 27, "LE", "Francês", 87, 90, 86, 75000000, "Velocidade, Chute, Cruzamento, Arrancada, Visão de Jogo", 81, 89, 80);
array_push($defensor, $d5);


//GOLEIRO
$g1 = new Goleiro("Alisson", 32, "GK", "Brasileiro", 89, 85, 85, 90000000, "", 90);
array_push($goleiro, $g1);
$g2 = new Goleiro("Courtois", 32, "GK", "Belga", 88, 85, 78, 100000000, "", 88);
array_push($goleiro, $g2);
$g3 = new Goleiro("Emiliano Martínez", 32, "GK", "Argentino", 87, 83, 83, 60000000, "", 87);
array_push($goleiro, $g3);







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
            //     echo "\n\n";
            //     $orcamento = readline("Qual o seu orçamento?")

            //     if ($orcamento > $this->multa) {

            //     }

                $opcao2 = 0;
                do {
                    echo "\n";
                    echo " 1 - Atacante\n";
                    echo " 2 - Meio Campo\n";
                    echo " 3 - Defensor\n";
                    echo " 4 - Goleiro\n";

                $opcao2 = readline("Qual posição deseja: ");
                echo "\n";
                switch ($opcao2) {
                    case 1:
                        listarAtacante($atacante);
                        echo "========================\nCaso não tenha interesse em nenhum jogador -  PRESS 0\n========================\n";
                        $idx = readline("Informe o atacante que você deseja comprar: ");
                        if($idx > 0 && $idx <= count($atacante)) {
                            $c = $atacante[$idx - 1]; // Get the selected player
                            array_push($carrinho, $c);
                            array_splice($atacante, $idx - 1, 1);
                        echo "\nA proposta de compra foi enviada ao empresário do jogador com sucesso!\nAguarde respostas.";
                    } elseif ($idx == 0) {
                        break;
                     }else
                     echo "Índice inválido.\n";
                        break;
                        case 2:
                            listarMeioCampo($meiocampo);
                            echo "========================\nCaso não tenha interesse em nenhum jogador -  PRESS 0\n========================\n";
                            $idx = readline("Informe o meio-campo que você deseja comprar: ");
                            if($idx > 0 && $idx <= count($meiocampo)) {
                                $c = $meiocampo[$idx - 1]; // Get the selected player
                                array_push($carrinho, $c);
                                array_splice($meiocampo, $idx - 1, 1); // Remove from available list
                                echo "\nA proposta de compra foi enviada ao empresário do jogador com sucesso!\nAguarde respostas.";
                            }
                            elseif ($idx == 0) {
                                break;
                             }else
                             echo "Índice inválido.\n";
                            break;
                        
                        case 3:
                            listarDefensor($defensor);
                            echo "========================\nCaso não tenha interesse em nenhum jogador -  PRESS 0\n========================\n";
                            $idx = readline("Informe o defensor que você deseja comprar: ");
                            if($idx > 0 && $idx <= count($defensor)) {
                                $c = $defensor[$idx - 1]; // Get the selected player
                                array_push($carrinho, $c);
                                array_splice($defensor, $idx - 1, 1); // Remove from available list
                                echo "\nA proposta de compra foi enviada ao empresário do jogador com sucesso!\nAguarde respostas.";
                            } elseif ($idx == 0) {
                               break;
                            }else
                            echo "Índice inválido.\n";
                            break;
                        case 4:
                            listarGoleiro($goleiro);
                            echo "========================\nCaso não tenha interesse em nenhum jogador -  PRESS 0\n========================\n";
                            $idx = readline("Informe o goleiro que você deseja comprar: ");
                            if($idx > 0 && $idx <= count($goleiro)) {
                                $c = $goleiro[$idx - 1]; // Get the selected player
                                array_push($carrinho, $c);
                                array_splice($goleiro, $idx - 1, 1); // Remove from available list
                                echo "\nA proposta de compra foi enviada ao empresário do jogador com sucesso!\nAguarde respostas.";
                            } elseif ($idx == 0) {
                                break;
                             }else
                             echo "Índice inválido.\n";
                            break;
                        
                 }
            }while ($opcao2 < 0);
            
            break;
    
        case 2:
            $opcao3 = 0;
                do {
                    echo "\n";
                    echo " 1 - Atacante\n";
                    echo " 2 - Meio Campo\n";
                    echo " 3 - Defensor\n";
                    echo " 4 - Goleiro\n";

                $opcao3 = readline("O jogador que deseja cadastrar é de qual posição de origem? ");
                echo "\n";
                switch ($opcao3) {
                    case 1:
                        //atacante
                        $nome = readline("Informe o nome do jogador: ");
                        $idade = readline("Informe a idade do jogador: ");
                        $posicao = readline("Informe a posição do jogador: ");
                        $nacionalidade = readline("Informe a nacionalidade do jogador: ");
                        $nivelVelocidade = readline("Informe o nível de velocidade do jogador: ");
                        $nivelChute = readline("Informe o nível de chute do jogador: ");
                        $overall = readline("Informe o Overall do jogador: ");
                        $multa = readline("Informe a multa do jogador: ");
                        $principalQualidade = readline("Informe as principais qualidades do jogador: ");
                        $nivelDrible = readline("Informe o nível do drible do jogador: ");
                        
                        $ata = new Atacante($nome, $idade, $posicao, $nacionalidade, $nivelVelocidade, $nivelChute, $overall, $multa, $principalQualidade, $nivelDrible);
                            array_push($atacante, $ata);
                
                        echo "========================\nJOGADOR CADASTRADO COM SUCESSO\n========================\n";

                        break;
                        case 2:
                            //meio campo
                            $nome = readline("Informe o nome do jogador: ");
                            $idade = readline("Informe a idade do jogador: ");
                            $posicao = readline("Informe a posição do jogador: ");
                            $nacionalidade = readline("Informe a nacionalidade do jogador: ");
                            $nivelVelocidade = readline("Informe o nível de velocidade do jogador: ");
                            $nivelChute = readline("Informe o nível de chute do jogador: ");
                            $overall = readline("Informe o Overall do jogador: ");
                            $multa = readline("Informe a multa do jogador: ");
                            $principalQualidade = readline("Informe as principais qualidades do jogador: ");
                            $nivelLancamento = readline("Informe o nível do lançamento do jogador: ");
                            $nivelVisaoDeJogo = readline("Informe o nível da visão de jogo do jogador: ");
                            $nivelPasse = readline("Informe o nível do passe do jogador: ");
                            
                            $mc = new MeioCampo($nome, $idade, $posicao, $nacionalidade, $nivelVelocidade, $nivelChute, $overall, $multa, $principalQualidade, $nivelLancamento, $nivelVisaoDeJogo, $nivelPasse);

                                array_push($meiocampo, $mc);
                    
                                echo "========================\nJOGADOR CADASTRADO COM SUCESSO\n========================\n";

                            break;
                        
                        case 3:
                           //defensor
                        $nome = readline("Informe o nome do jogador: ");
                        $idade = readline("Informe a idade do jogador: ");
                        $posicao = readline("Informe a posição do jogador: ");
                        $nacionalidade = readline("Informe a nacionalidade do jogador: ");
                        $nivelVelocidade = readline("Informe o nível de velocidade do jogador: ");
                        $nivelChute = readline("Informe o nível de chute do jogador: ");
                        $overall = readline("Informe o Overall do jogador: ");
                        $multa = readline("Informe a multa do jogador: ");
                        $principalQualidade = readline("Informe as principais qualidades do jogador: ");
                        $nivelDesarme = readline("Informe o nível de desarme do jogador: ");
                        $nivelFisico = readline("Informe o nível do físico do jogador: ");
                        $nivelJogoAereo = readline("Informe o nível do jogo aéreo do jogador: ");

                        $def = new Defensor($nome, $idade, $posicao, $nacionalidade, $nivelVelocidade, $nivelChute, $overall, $multa, $principalQualidade, $nivelDesarme, $nivelFisico, $nivelJogoAereo);
                               array_push($defensor, $def);
                   
                               echo "========================\nJOGADOR CADASTRADO COM SUCESSO\n========================\n";
   
                            break;
                        
                        case 4:
                            $nome = readline("Informe o nome do jogador: ");
                            $idade = readline("Informe a idade do jogador: ");
                            $posicao = readline("Informe a posição do jogador: ");
                            $nacionalidade = readline("Informe a nacionalidade do jogador: ");
                            $nivelVelocidade = readline("Informe o nível de velocidade do jogador: ");
                            $nivelChute = readline("Informe o nível de chute do jogador: ");
                            $overall = readline("Informe o Overall do jogador: ");
                            $multa = readline("Informe a multa do jogador: ");
                            $principalQualidade = readline("Informe as principais qualidades do jogador: ");
                            $nivelDefesa = readline("Informe o nível de defesa do jogador: ");
                            
                            $gol = new Goleiro($nome, $idade, $posicao, $nacionalidade, $nivelVelocidade, $nivelChute, $overall, $multa, $principalQualidade, $nivelDefesa);
                            
                                array_push($goleiro, $gol);
                    
                                echo "========================\nJOGADOR CADASTRADO COM SUCESSO\n========================\n";
    
                            break;
                        
                 }
            }while ($opcao3 < 0);
            
            break;
           
    
        case 3:

            listarCarrinho($carrinho);
            break;

        default:
            print "OPÇÃO INVÁLIDO!!";
            break;
    }
} while ($opcao != 0);
