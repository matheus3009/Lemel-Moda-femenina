-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/06/2024 às 22:19
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lemel`
--
CREATE DATABASE IF NOT EXISTS `lemel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `lemel`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `imagem` varchar(45) NOT NULL,
  `preco` varchar(45) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `titulo`, `descricao`, `imagem`, `preco`, `usuario_id`) VALUES
(1, 'camisa', 'branca', 'unnamed.png', '12', 2),
(2, 'camisa', 'branca', 'unnamed.png', '12', 2),
(3, 'causa', 'rosa', 'IMG-20240508-WA0007.jpg', '21', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` enum('admin','funcionario','cliente') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `tipo`) VALUES
(2, 'jiu', 'jiubertomonteiros@gmsil.com', '$2y$10$ZSHWPSfZ9Wq3228OqA5RBeaEVDhgVzM9XiMBZR', 'admin'),
(3, 'Kafka', 'kaiju@8', '$2y$10$hSpzLfUiSAPGvWv1jkzPxeISl97fgBgVD78mxk', 'admin'),
(4, 'Dabi', 'todoroki@a', '$2y$10$hP8qZNHZNNyHBrgAYkV5A.pltLus61ES1nehCM', 'funcionario'),
(5, 'gandal', 'cinzento@a', '$2y$10$sdKnohB4yamxEBHwRWWmaOuegZMRV3w.zbttq0', 'cliente'),
(8, 'Tiago Teste', 'tiago@msn.com', '$2y$10$nAL3NS8za8O/FHEmGExxZeJ892utsRgzOQROcOJILR78px5NqEKh.', ''),
(9, 'Kafka', 'kaiju@8', '$2y$10$pxIORl28L5Amf/YKBBXX7eS7j2ygT4a3tT7nIr7.jD3CYDFXTxjiS', ''),
(10, 'João', 'joao@gmail.com', '$2y$10$.0bMM9aH7c5I7P.kHl7YY.16dYmMhN7g3FQ8dzaCzYSGRNPkv9fB6', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_produtos_usuarios` (`usuario_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `FK_produtos_usuarios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
