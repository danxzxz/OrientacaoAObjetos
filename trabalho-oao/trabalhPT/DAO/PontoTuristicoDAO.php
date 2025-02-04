<?php
require_once "modelo/PontoTuristico.php";
require_once "modelo/Praia.php";
require_once "modelo/Parque.php";
require_once "modelo/Monumento.php";
require_once "util/Conexao.php";

class PontoTuristicoDAO {
    public function inserir(PontoTuristico $ponto) {
        $sql = "INSERT INTO pontos_turisticos (nome, cidade, pais, descricao, avaliacao, tipo) VALUES (?, ?, ?, ?, ?, ?)";
        $stm = Conexao::getCon()->prepare($sql);
        $stm->execute([$ponto->getNome(), $ponto->getCidade(), $ponto->getPais(), $ponto->getDescricao(), $ponto->getAvaliacao(), $ponto->getTipo()]);
    }
    
    public function listar() {
        $sql = "SELECT * FROM pontos_turisticos";
        return Conexao::getCon()->query($sql)->fetchAll();
    }
    
    public function buscarPorId(int $id) {
        $sql = "SELECT * FROM pontos_turisticos WHERE id = ?";
        $stm = Conexao::getCon()->prepare($sql);
        $stm->execute([$id]);
        return $stm->fetch();
    }
    
    public function excluir(int $id) {
        $sql = "DELETE FROM pontos_turisticos WHERE id = ?";
        $stm = Conexao::getCon()->prepare($sql);
        $stm->execute([$id]);
    }
}
?>
