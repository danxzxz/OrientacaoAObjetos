CREATE DATABASE agencia_viagens;
USE agencia_viagens;


CREATE TABLE pontos_turisticos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    pais VARCHAR(100) NOT NULL,
    descricao TEXT NOT NULL,
    avaliacao FLOAT NOT NULL CHECK (avaliacao >= 0 AND avaliacao <= 5),
    tipo VARCHAR(50) NOT NULL /* Tipo do ponto turístico */
);
