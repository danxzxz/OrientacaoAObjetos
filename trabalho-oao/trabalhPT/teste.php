<?php
require_once 'util/Conexao.php';

try {
    $con = Conexao::getCon();
    echo "Conexão bem-sucedida!";
} catch (Exception $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}