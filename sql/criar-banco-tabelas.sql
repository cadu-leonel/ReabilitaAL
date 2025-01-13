create database reabilita_al;

use reabilita_al;

CREATE TABLE tipos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL
);

CREATE TABLE organizacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL
);

CREATE TABLE modelos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL
);

CREATE TABLE municipios (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL
);

CREATE TABLE centros_reabilitacao (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    tipo_id INT NOT NULL,
    organizacao_id INT NOT NULL,
    modelo_id INT NOT NULL,
    municipio_id INT NOT NULL,
    endereco TEXT NOT NULL,
    contato VARCHAR(50), -- Exemplo: Telefone com DDD
    email VARCHAR(255),
    redes_sociais TEXT, -- URLs ou nomes de perfis
    horario TEXT, -- Exemplo: Seg-Sex, 8h às 17h
    historia TEXT, -- Histórico ou descrição do centro
    FOREIGN KEY (tipo_id) REFERENCES tipos(id) ON DELETE RESTRICT,
    FOREIGN KEY (organizacao_id) REFERENCES organizacoes(id) ON DELETE RESTRICT,
    FOREIGN KEY (modelo_id) REFERENCES modelos(id) ON DELETE RESTRICT,
    FOREIGN KEY (municipio_id) REFERENCES municipios(id) ON DELETE RESTRICT
);

CREATE TABLE imagens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    centro_id INT NOT NULL,
    caminho VARCHAR(255) NOT NULL,
    descricao VARCHAR(255),
    FOREIGN KEY (centro_id) REFERENCES centros_reabilitacao(id) ON DELETE CASCADE
);