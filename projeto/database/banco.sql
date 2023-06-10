-- Criação do banco de dados
CREATE DATABASE lmdb;

-- Utilização do banco de dados
USE lmdb;

-- Criação da tabela "Usuarios"
CREATE TABLE Usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  usuario VARCHAR(50) NOT NULL,
  senha VARCHAR(50) NOT NULL
);

-- Criação da tabela "Empresas"
CREATE TABLE Empresas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  cnpj VARCHAR(14) NOT NULL,
  status VARCHAR(50) NOT NULL,
  telefone VARCHAR(20) NOT NULL,
  responsavel VARCHAR(100) NOT NULL,
  licitacao BOOLEAN NOT NULL,
  cep VARCHAR(8) NOT NULL,
  email VARCHAR(100) NOT NULL
);

-- Criação da tabela "Credenciamento"
CREATE TABLE Credenciamento (
  usuario_id INT,
  empresa_id INT,
  FOREIGN KEY (usuario_id) REFERENCES Usuarios(id),
  FOREIGN KEY (empresa_id) REFERENCES Empresas(id),
  PRIMARY KEY (usuario_id, empresa_id)
);
