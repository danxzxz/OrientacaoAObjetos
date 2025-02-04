<?php
require_once "dao/PontoTuristicoDAO.php";
require_once("util/Conexao.php");

// $con = Conexao::getCon();
// print_r($con);
$dao = new PontoTuristicoDAO();

do {
    echo "\n-- MENU --\n";
    echo "1. Cadastrar Ponto Turístico\n";
    echo "2. Listar Pontos Turísticos\n";
    echo "3. Buscar por ID\n";
    echo "4. Excluir Ponto\n";
    echo "0. Sair\n";
    
    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            $tipo = readline("Tipo (Praia/Parque/Monumento): ");
            $nome = readline("Nome: ");
            $cidade = readline("Cidade: ");
            $pais = readline("País: ");
            $descricao = readline("Descrição: ");
            $avaliacao = floatval(readline("Avaliação (0-5): "));
            
            if ($tipo === "Praia") {
                $ponto = new Praia($nome, $cidade, $pais, $descricao, $avaliacao);
            } elseif ($tipo === "Parque") {
                $ponto = new Parque($nome, $cidade, $pais, $descricao, $avaliacao);
            } elseif ($tipo === "Monumento") {
                $ponto = new Monumento($nome, $cidade, $pais, $descricao, $avaliacao);
            } else {
                echo "Tipo inválido!\n";
                continue 2;
            }
            
            $dao->inserir($ponto);
            echo "Cadastrado com sucesso!\n";
            break;
        case 2:
            $pontos = $dao->listar();
            foreach ($pontos as $p) {
                echo "ID: {$p['id']} | Nome: {$p['nome']} | Cidade: {$p['cidade']} | País: {$p['pais']} | Tipo: {$p['tipo']} | Avaliação: {$p['avaliacao']}\n";
            }
            break;
        case 3:
            $id = intval(readline("ID: "));
            $p = $dao->buscarPorId($id);
            if ($p) {
                echo "Nome: {$p['nome']}\nCidade: {$p['cidade']}\nPaís: {$p['pais']}\nDescrição: {$p['descricao']}\nAvaliação: {$p['avaliacao']}\nTipo: {$p['tipo']}\n";
            } else {
                echo "Ponto turístico não encontrado!\n";
            }
            break;
        }
    } while ($opcao != 0);
    ?>