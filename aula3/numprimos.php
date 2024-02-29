<?php

// Função para verificar se um número é primo
function isPrimo($numero) {
    if ($numero < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

// Loop para solicitar números até que seja fornecido um número menor que 2
while (true) {
    echo "Digite um número (ou um número menor que 2 para sair): ";
    $input = readline();

    // Verifica se o input é um número válido
    if (!is_numeric($input)) {
        echo "Por favor, insira um número válido.\n";
        continue;
    }

    $numero = intval($input);

    // Verifica se o número é primo usando a função isPrimo
    if ($numero < 2) {
        echo "Programa encerrado. Número fornecido é menor que 2.\n";
        break;
    } elseif (isPrimo($numero)) {
        echo "$numero é um número primo.\n";
    } else {
        echo "$numero não é um número primo.\n";
    }
}
