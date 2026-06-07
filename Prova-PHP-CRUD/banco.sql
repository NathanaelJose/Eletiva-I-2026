USE oficina;

-- 1. Remove as tabelas antigas na ordem certa para o MySQL não travar nas relações
DROP TABLE IF EXISTS peca;
DROP TABLE IF EXISTS ordem_servico;
DROP TABLE IF EXISTS categoria;
DROP TABLE IF EXISTS usuario;

-- 2. Cria a tabela de usuários (necessária para o login do seu sistema)
CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    senha VARCHAR(255)
);

-- 3. Cria a tabela de categorias JÁ COM A COLUNA TIPO inclusa de fábrica
CREATE TABLE categoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(100) NOT NULL,
    tipo VARCHAR(20) DEFAULT 'Peça'
);

-- 4. Cria a tabela de ordens de serviço corrigida (com 'descricao' aceitando TEXT)
CREATE TABLE ordem_servico (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente VARCHAR(100) NOT NULL,
    veiculo VARCHAR(50) NOT NULL,
    descricao TEXT NOT NULL,
    status VARCHAR(20) DEFAULT 'Pendente',
    data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 5. Cria a tabela de peças (conforme a sua última estrutura sem a categoria_id)
CREATE TABLE peca (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    codigo_peca VARCHAR(50),
    quantidade INT DEFAULT 0,
    preco DECIMAL(10, 2) NOT NULL
);