-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Out-2023 às 04:17
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_artpalette`
--
CREATE DATABASE IF NOT EXISTS `db_artpalette` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_artpalette`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_addpaleta`
--

CREATE TABLE `tb_addpaleta` (
  `cd_addpaleta` int(11) NOT NULL,
  `nm_paleta` varchar(45) NOT NULL,
  `cd_usuario` int(11) NOT NULL,
  `primaria` char(7) NOT NULL,
  `secundaria` char(7) NOT NULL,
  `terciaria` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curtida`
--

CREATE TABLE `tb_curtida` (
  `cd_usuario` int(11) NOT NULL,
  `cd_paleta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_paleta`
--

CREATE TABLE `tb_paleta` (
  `cd_paleta` int(11) NOT NULL,
  `nm_paleta` varchar(45) NOT NULL,
  `primaria` char(7) NOT NULL,
  `secundaria` char(7) NOT NULL,
  `terciaria` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `cd_usuario` int(11) NOT NULL,
  `nm_usuario` varchar(50) NOT NULL,
  `email_usuario` varchar(255) NOT NULL,
  `senha_usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_addpaleta`
--
ALTER TABLE `tb_addpaleta`
  ADD PRIMARY KEY (`cd_addpaleta`);

--
-- Índices para tabela `tb_paleta`
--
ALTER TABLE `tb_paleta`
  ADD PRIMARY KEY (`cd_paleta`);

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`cd_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_addpaleta`
--
ALTER TABLE `tb_addpaleta`
  MODIFY `cd_addpaleta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_paleta`
--
ALTER TABLE `tb_paleta`
  MODIFY `cd_paleta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `cd_usuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
