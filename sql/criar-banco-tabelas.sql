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

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL, -- Senha deve ser armazenada com hash
    descricao TEXT, -- Breve descrição do usuário (bio, perfil)
    foto VARCHAR(255), -- Caminho para a foto do usuário (URL ou local)
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de categorias
CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL UNIQUE, -- Nome da categoria (ex.: Tecnologia, Lifestyle)
    descricao TEXT, -- Descrição da categoria
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de postagens
CREATE TABLE postagens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor_id INT NOT NULL, -- Relaciona com a tabela de usuários
    categoria_id INT NOT NULL, -- Relaciona com a tabela de categorias
    imagem VARCHAR(255), -- Caminho da imagem (opcional)
    texto TEXT NOT NULL,
    data_publicacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (autor_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    FOREIGN KEY (categoria_id) REFERENCES categorias(id) ON DELETE RESTRICT
);

-- Tabela de comentários
CREATE TABLE comentarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    postagem_id INT NOT NULL, -- Relaciona com a postagem
    autor_comentario VARCHAR(100) NOT NULL, -- Autor do comentário (nome)
    texto TEXT NOT NULL,
    data_comentario TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (postagem_id) REFERENCES postagens(id) ON DELETE CASCADE
);