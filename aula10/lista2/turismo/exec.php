<?php
require_once("modelo/Espaco.php");
require_once("modelo/Hotel.php");
require_once("modelo/PontoTuristico.php");
require_once("modelo/Restaurante.php");


function listarEspacos(array $espacos) {
    echo "\n\n====ESPAÇOS CADASTRADOS====\n";
        
    $i = 1;
    echo "\n";
    foreach($espacos as $e) {
        if($e instanceof Hotel){
        echo $i . "- " . $e->getDadosHotel(); 
        $i++;
    }elseif($e instanceof Restaurante){
    echo $i . "- " . $e->getDadosRestaurante(); 
    $i++;}
        elseif($e instanceof PontoTuristico){
        echo $i . "- " . $e->getDadosPontoTuristico(); 
        $i++;
        }
    }
}
$opcao = 0;
$espacos = array();

do {
    echo "\n   ------------MENU----------\n";
    echo " 1 - Cadastrar espaço\n";
    echo " 2 - Excluir\n";
    echo " 3 - Listar\n";
    echo " 0 - SAIR \n";

    $opcao = readline("Escolha a opção que deseja: ");

    switch ($opcao) {

        case 1:
            $opcao2 = 0;
            do {
                echo "\n";
                echo " 1 - Hotel\n";
                echo " 2 - Restaurante\n";
                echo " 3 - Ponto Turístico\n";
            $opcao2 = readline("Qual espaço deseja cadastrar: ");
            echo "\n";
            switch ($opcao2) {
                case 1:
                    $h = new Hotel();
                    $h->setNome(readline("Informe o nome do hotel: "));
                    $h->setEndereco(readline("Informe o endereço do hotel: "));
                    $h->setNumEstrelas(readline("Informe o número de estrelas do hotel: "));
                    $possuiCafe=(readline("Informe se possui café incluso no hotel: (1-Sim | 2-Não) "));
                    if($possuiCafe == 1)
                        $h->setCafeIncluso(true);
                    else
                        $h->setCafeIncluso(false);
        
                    array_push($espacos, $h);
                    break;
                    case 2:
                        $r = new Restaurante();
                        $r->setNome(readline("Informe o nome do restaurante: "));
                        $r->setEndereco(readline("Informe o endereço do restaurante: "));
                        $r->setTipoComida(readline("Informe o tipo de comida do restaurante: "));
            
                        array_push($espacos, $r);
                        break;
                    case 3:
                            $p = new PontoTuristico();
                            $p->setNome(readline("Informe o nome do ponto turístico:"));
                            $p->setEndereco(readline("Informe o endereço do ponto turístico: "));
                            $p->setDuracaoDaVisita(readline("Informe a duração da visita do ponto turístico: "));
                
                            array_push($espacos, $p);
                            break;
             }
        }while ($opcao2 < 0);
        break;

        case 2:
            listarEspacos($espacos);

            $idx = readline("Informe o índice do espaço a ser excluída: ");

            if($idx > 0 && $idx <= count($espacos))
                array_splice($espacos, $idx-1, 1);
            else
                echo "Índice informado é inválido.\n";
            break;


        case 3:
            listarEspacos($espacos);
            break;

        case 0:
            echo "Programa encerrado!!\n";
            break;

        default:
            echo "Opção inválida\n";            
    }
} while ($opcao != 0);