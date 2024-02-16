<?php

    $nome = readline("Informe seu nome: ");
    $peso = readline("\ninforme seu peso(em kg): ");
    $alt = readline("\ninforme sua altura(em Metros): ");

    $imc = $peso / ($alt * $alt);

    echo ("Nome: $nome\n" . "Peso: $peso\n" . "Altura: $alt\n" . "IMC: $imc\n");