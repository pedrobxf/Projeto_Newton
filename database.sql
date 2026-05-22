CREATE DATABASE sistema_chamados;

CREATE TABLE usuarios (
id SERIAL PRIMARY KEY,
nome VARCHAR(100),
email VARCHAR(100) UNIQUE,
telefone VARCHAR(20),
cpf VARCHAR(14) UNIQUE,
senha TEXT
);

CREATE TABLE chamados (
id SERIAL PRIMARY KEY,
titulo VARCHAR(255),
descricao TEXT,
departamento VARCHAR(50),
responsavel VARCHAR(100),
regiao VARCHAR(20),
status VARCHAR(20) DEFAULT 'Em aberto',
data_hora TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
usuario_id INT REFERENCES usuarios(id)
);