<?php
require_once("modelo/Mago.php"); 
require_once("modelo/Combatente.php");  
require_once("modelo/Curandeiro.php");  


$p1 = new Poder("RECUPERA ENERGIA", 0);
$p2 = new Poder("RRECUPERA ENERGIA SUPER!", 20);
$p3 = new Poder("GOLPE NORMAL", 0);
$p4 = new Poder("GOLPE ESPECIAL MASTER", 15);



//CURANDEIROS




//COMBATENTES





    $opcao = 0;
    $espacos = array();
    
    do {
        echo "\n\n\n   ------------QUAL MAGO IRÁ LANÇAR SEU PODER?----------\n";
        echo " 1 - Mago Jarry (PODER: Recupera energia)\n";
        echo " 2 - Mago Hugo (PODER: Recupera energia Super  + 20% cura)\n";
        echo " 3 - Mago Lord (PODER: Golpe normal)\n";
        echo " 4 - Mago Junior (PODER: Golpe especial + 15% ataque)\n";
        echo " 0 - SAIR \n";
    
        $opcao = readline("Escolha a opção que deseja: ");
    
        switch ($opcao) {
    
            case 1:
                $curandeiro1 = new Curandeiro();
                $curandeiro1->setNome("Jarry");
                $curandeiro1->setForcaDeCura(78);
                $curandeiro1->setPoder($p1);
                echo $curandeiro1->lancarPoder();
            break;
    
            case 2:
                $curandeiro2 = new Curandeiro();
                $curandeiro2->setNome("Hugo");
                $curandeiro2->setForcaDeCura(88);
                $curandeiro2->setPoder($p2);
                echo $curandeiro2->lancarPoder();
            
            break;
            case 3:
                $combatente1 = new Combatente();
                $combatente1->setNome("Lord");
                $combatente1->setForcaDeAtaque(96);
                $combatente1->setPoder($p3);
                echo $combatente1->lancarPoder();
                break;
            case 4:
                $combatente2 = new Combatente();
                $combatente2->setNome("Junior");
                $combatente2->setForcaDeAtaque(102);
                $combatente2->setPoder($p4);   
                echo $combatente2->lancarPoder();
            
            break;
            case 0:
                echo "Programa encerrado!!\n";
                break;
    
            default:
                echo "Opção inválida\n";            
        }
    } while ($opcao != 0);



