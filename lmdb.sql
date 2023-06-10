-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 10/06/2023 às 14:43
-- Versão do servidor: 8.0.31
-- Versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lmdb`
--
CREATE DATABASE IF NOT EXISTS `lmdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `lmdb`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `credenciamento`
--

DROP TABLE IF EXISTS `credenciamento`;
CREATE TABLE IF NOT EXISTS `credenciamento` (
  `usuario_id` int NOT NULL,
  `empresa_id` int NOT NULL,
  PRIMARY KEY (`usuario_id`,`empresa_id`),
  KEY `empresa_id` (`empresa_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `empresas`
--

DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cnpj` varchar(14) NOT NULL,
  `status` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `local` varchar(144) NOT NULL,
  `responsavel` varchar(100) NOT NULL,
  `nome_fantasia` varchar(255) DEFAULT NULL,
  `licitacao` varchar(55) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `email` varchar(100) NOT NULL,
  `agente` int NOT NULL,
  `descricao` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `empresas`
--

INSERT INTO `empresas` (`id`, `cnpj`, `status`, `telefone`, `local`, `responsavel`, `nome_fantasia`, `licitacao`, `cep`, `email`, `agente`, `descricao`) VALUES
(30, '12345678901234', 'Em andamento', '16996273479', 'Ribeirao preto', 'Caio Lucena', 'Enoq Bank', '', '', '', 1, NULL),
(31, '', 'Concluido', '(16) 99627-3479', 'Ribeirao preto', 'Teste', 'Caio', '1', '', 'caio.lucena@enoqbank.com', 4, NULL),
(32, '', 'Aguardando', '16999999999', 'Ribeirao preto', 'Caio Henrique', 'Teste de loja', '1', '', 'caio.lucena@enoqbank.com', 1, NULL),
(33, '', 'Em andamento', '(16) 99627-3479', 'Ribeirao preto', 'Teste', 'teste', '2', '', 'caio.lucena@enoqbank.com', 1, NULL),
(34, '', 'Aguardando', '16996273479a', '', 'Teste', 'TEste', '2', '', 'caio.lucena@enoqbank.com', 1, NULL),
(35, '', 'Em andamento', '(16) 99627-3479', 'Ribeirao preto', 'Teste nome', '12', '2', '', 'caio.lucena@enoqbank.com', 4, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`) VALUES
(1, 'caio.lucena', '123'),
(3, 'Não Atribuído ', '0000'),
(4, 'iristenio.campelo', '1234'),
(5, 'rodrigo.rocha', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
