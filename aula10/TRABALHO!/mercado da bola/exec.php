<?php
require_once('modelo/Atacante.php');
require_once('modelo/Defensor.php');
require_once('modelo/MeioCampo.php');
require_once('modelo/Goleiro.php');
require_once('modelo/Jogador.php');
$atacante = array();
$goleiro = array();
$defensor = array();
$meiocampo = array();

$carrinho = array();
function listarCarrinho(array $carrinho) {
    echo "\n\n====CARRINHO====\n";
        
    $i = 1;
    echo "\n";
    foreach($carrinho as $c) {
        if($c instanceof Atacante){
        echo $i . "- " . $c->getDadosAtacante(); 
        $i++;
    }elseif($c instanceof MeioCampo){
    echo $i . "- " . $c->getDadosMeioCampo(); 
    $i++;}
        elseif($c instanceof Goleiro){
        echo $i . "- " . $c->getDadosGoleiro(); 
        $i++;
        }
    elseif($c instanceof Defensor){
        echo $i . "- " . $c->getDadosDefensor(); 
        $i++;
        }
}
}
function listarGoleiro(array $goleiro) {
    echo "\n\n====JOGADORES DISPONÍVEIS====\n";
          
    $i = 1;
    echo "\n-------";
    foreach($goleiro as $j) {
        if($j instanceof Goleiro){
        echo $i . "- " . $j->getDadosGoleiro(); 
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
        echo $i . "- " . $j->getDadosMeioCampo(); 
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
        echo $i . "- " . $j->getDadosAtacante(); 
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
        echo $i . "- " . $j->getDadosDefensor(); 
        $i++;
    }
}
}
//MEIO CAMPO
$m1 = new MeioCampo("Kevin De Bruyne", 33, "MEI", "Belga", 67, 87, 91, 223000000, "Lançamento em profundidade, Visão de jogo", 92, 94, 97);
array_push($meiocampo, $m1);
$m2 = new MeioCampo("Casemiro", 32, "VOL", "Brasileiro", 63, 75, 89, 128000000, "Desarme, Lançamento", 77, 75, 82);
array_push($meiocampo, $m2);
$m3 = new MeioCampo("Joshua Kimmich", 29, "VOL", "Alemão", 86, 78, 92, 380000000, "Velocidade, Pressão pós-perda", 92, 89, 85);
array_push($meiocampo, $m3);
$m4 = new MeioCampo("Toni Kross", 34, "MC", "Alemão", 67, 89, 95, 430000000, "Lançamento em profundidade, Bola parada, Chute de média e longa distância", 97, 98, 99);
array_push($meiocampo, $m4);
$m5 = new MeioCampo("JUde Bellingham", 21, "MC", "Inglês", 89, 89, 96, 1000000000, "Força, Jogo Aéreo, Lançamento, Chute de fora da área", 90, 92, 93);
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
//DEFENSOR idade pos nacionalidade overall velocidade chute multa qualidade Desarme Fisico JogoAereo
 
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
                        echo "\n";
                        $idx = readline("Informe o atacante que você deseja comprar: ");
                       
                        if($idx > 0 && $idx <= count($atacante))
                            array_splice($atacante, $idx-1, 1);
                        echo "\nA proposta de compra foi enviada ao empresário do jogador com sucesso!\nAguarde respostas.";
                        break;
                        case 2:
                            listarMeioCampo($meiocampo);
                            echo "\n";
                            $idx = readline("Informe o atacante que você deseja comprar: ");
    
                            if($idx > 0 && $idx <= count($meiocampo))
                                array_splice($meiocampo, $idx-1, 1);
                            else
                                echo "Índice informado é inválido.\n";
                            break;
                        
                        case 3:
                            listarDefensor($defensor);
                            echo "\n";
                            $idx = readline("Informe o atacante que você deseja comprar: ");
    
                            if($idx > 0 && $idx <= count($defensor))
                                array_splice($defensor, $idx-1, 1);
                            else
                                echo "Índice informado é inválido.\n";
                            break;
                        
                        case 4:
                            listarGoleiro($goleiro);
                            echo "\n";
                            $idx = readline("Informe o atacante que você deseja comprar: ");
                            array_push($carrinho, $g);
                            if($idx > 0 && $idx <= count($goleiro))
                                array_splice($goleiro, $idx-1, 1);
                            else
                                echo "Índice informado é inválido.\n";
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
                        $ata = new Atacante($ata);
                        $ata->setNome(readline("Informe o nome do jogador: "));
                        $ata->setIdade(readline("Informe a idade do jogador: "));
                        $ata->setPosicao(readline("Informe as Posições que o jogador joga: "));
                        $ata->setNacionalidade(readline("Informe a nacionalidade do jogador: "));
                        $ata->setNivelVelocidade(readline("Informe o nível de velocidade do jogador: "));
                        $ata->setNivelChute(readline("Informe o nível do chute do jogador: "));
                        $ata->setOverall(readline("Informe o Overall do jogador: "));                        
                        $ata->setMulta(readline("Informe a multa do jogador: "));
                        $ata->setPrincipalQualidade(readline("Informe as principais qualidades do jogador: "));
                        $ata->setNivelDrible(readline("Informe o nível do drible do jogador: "));

                            array_push($atacante, $ata);
                
                        echo "\n\nJogador cadastrado com sucesso!";

                        break;
                        case 2:
                            //meio campo
                            $mc = new MeioCampo($n, $i, $p, $nac, $nv, $nc, $o, $m, $pq, $np, $nl, $nvj);
                            $mc->setNome(readline("Informe o nome do jogador: "));
                            $mc->setIdade(readline("Informe a idade do jogador: "));
                            $mc->setPosicao(readline("Informe as Posições que o jogador joga: "));
                            $mc->setNacionalidade(readline("Informe a nacionalidade do jogador: "));
                            $mc->setOverall(readline("Informe o Overall do jogador: "));                        
                            $mc->setNivelVelocidade(readline("Informe o nível de velocidade do jogador: "));
                            $mc->setNivelChute(readline("Informe o nível do chute do jogador: "));
                            $mc->setNivelLancamento(readline("Informe o nível do lançamento do jogador: "));
                            $mc->setNivelVisaoDeJogo(readline("Informe o nível da visão de jogo do jogador: "));
                            $mc->setNivelPasse(readline("Informe o nível do passe do jogador: "));
                            $mc->setMulta(readline("Informe a multa do jogador: "));
                            $mc->setPrincipalQualidade(readline("Informe as principais qualidades do jogador: "));
                                array_push($meiocampo, $mc);
                    
                            echo "Jogador cadastrado com sucesso!";

                            break;
                        
                        case 3:
                           //defensor
                           $def = new Defensor();
                           $def->setNome(readline("Informe o nome do jogador: "));
                           $def->setIdade(readline("Informe a idade do jogador: "));
                           $def->setPosicao(readline("Informe as Posições que o jogador joga: "));
                           $def->setNacionalidade(readline("Informe a nacionalidade do jogador: "));
                           $def->setOverall(readline("Informe o Overall do jogador: "));                        
                           $def->setNivelVelocidade(readline("Informe o nível de velocidade do jogador: "));
                           $def->setNivelChute(readline("Informe o nível do chute do jogador: "));
                           $def->setNivelDesarme(readline("Informe o nível de desarme do jogador: "));
                           $def->setNivelFisico(readline("Informe o nível do físico do jogador: "));
                           $def->setNivelJogoAereo(readline("Informe o nível do jogo aéreo do jogador: "));
                           $def->setMulta(readline("Informe a multa do jogador: "));
                           $def->setPrincipalQualidade(readline("Informe as principais qualidades do jogador: "));
                               array_push($defensor, $def);
                   
                           echo "Jogador cadastrado com sucesso!";
   
                            break;
                        
                        case 4:
                            $gol = new Goleiro();
                            $gol->setNome(readline("Informe o nome do jogador: "));
                            $gol->setIdade(readline("Informe a idade do jogador: "));
                            $gol->setPosicao(readline("Informe as Posições que o jogador joga: "));
                            $gol->setNacionalidade(readline("Informe a nacionalidade do jogador: "));
                            $gol->setOverall(readline("Informe o Overall do jogador: "));                        
                            $gol->setNivelVelocidade(readline("Informe o nível de velocidade do jogador: "));
                            $gol->setNivelChute(readline("Informe o nível do chute do jogador: "));
                            $gol->setNivelDefesa(readline("Informe o nível de defesa do jogador: "));
                                array_push($goleiro, $gol);
                    
                            echo "Jogador cadastrado com sucesso!";
    
                            break;
                        
                 }
            }while ($opcao3 < 0);
            

           
    
        case 3:

            // listarCarrinho($carrinho);
            break;

        default:
            print "OPÇÃO INVÁLIDO!!";
            break;
    }
} while ($opcao != 0);