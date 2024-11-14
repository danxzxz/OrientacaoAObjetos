<?php
require_once('modelo/Atacante.php');
require_once('modelo/Defensor.php');
require_once('modelo/MeioCampo.php');
require_once('modelo/Goleiro.php');
require_once('modelo/Jogador.php');


//MEIO CAMPO
$m1 = new MeioCampo("Kevin De Bruyne", 33, "MEI", "Belga", 67, 87, 91, 223000000, "Lançamento em profundidade, Visão de jogo", 92, 94, 97);
$m2 = new MeioCampo("Casemiro", 32, "VOL", "Brasileiro", 63, 75, 89, 128000000, "Desarme, Lançamento", 77, 75, 82);
$m3 = new MeioCampo("Joshua Kimmich", 29, "VOL", "Alemão", 86, 78, 92, 380000000, "Velocidade, Pressão pós-perda", 92, 89, 85);
$m4 = new MeioCampo("Toni Kross", 34, "MC", "Alemão", 67, 89, 95, 430000000, "Lançamento em profundidade, Bola parada, Chute de média e longa distância", 97, 98, 99);
$m5 = new MeioCampo("JUde Bellingham", 21, "MC", "Inglês", 89, 89, 96, 1000000000, "Força, Jogo Aéreo, Lançamento, Chute de fora da área", 90, 92, 93);

//ATACANTE
$a1 = new Atacante("Kylian Mbappé", 25, "ATA", "Francês", 97, 90, 91, 250000000, "Velocidade, Dribles, Chute, Liderança", 92);
$a2 = new Atacante("Erling Haaland", 24, "CA", "Dinamarques", 96, 94, 96, 383000000, "Velocidade, Força, Chute, Jogo Aéreo", 80);
$a3 = new Atacante("Harry Kane", 31, "CA", "Inglês", 78, 95, 91, 352000000, "Jogo Aéreo, Força, Chute, Liderança", 86);
$a4 = new Atacante("Lautaro Martínez", 27, "CA/ATA", "Argentino", 84, 89, 89, 745000000, "Velocidade, Dribles, Chute, Liderança", 87);
$a5 = new Atacante("Vinicius Junior", 24, "PE/ATA", "Brasileiro", 95, 89, 90, 1000000000, "Velocidade, Dribles, Chute, Genialidade absurda", 96);
