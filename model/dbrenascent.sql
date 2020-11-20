-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Nov-2020 às 20:37
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbrenascent`
--
CREATE DATABASE IF NOT EXISTS `dbrenascent` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbrenascent`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbautor`
--

CREATE TABLE `tbautor` (
  `idAutor` int(11) NOT NULL,
  `nomeAutor` varchar(100) DEFAULT NULL,
  `paisOrigem` varchar(30) DEFAULT NULL,
  `nascimentoAutor` date DEFAULT NULL,
  `falecimentoAutor` date DEFAULT NULL,
  `dataCadastro` date DEFAULT NULL,
  `idFuncionario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbclassificacao`
--

CREATE TABLE `tbclassificacao` (
  `idClassificacao` int(11) NOT NULL,
  `descricaoClassificacao` varchar(50) DEFAULT NULL,
  `dataCadastro` date DEFAULT NULL,
  `idFuncionario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfotoobra`
--

CREATE TABLE `tbfotoobra` (
  `id` int(11) NOT NULL,
  `nomeFoto` varchar(100) DEFAULT NULL,
  `caminhoFoto` varchar(100) DEFAULT NULL,
  `extensaoFoto` varchar(6) DEFAULT NULL,
  `idFuncionario` int(11) DEFAULT NULL,
  `idObra` int(11) DEFAULT NULL,
  `dataFoto` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfuncionario`
--

CREATE TABLE `tbfuncionario` (
  `idFuncionario` int(11) NOT NULL,
  `cpfFuncionario` char(14) DEFAULT NULL,
  `dtNascimentoFuncionaio` date DEFAULT NULL,
  `emailFuncionario` varchar(100) DEFAULT NULL,
  `senhaFuncionario` varchar(50) DEFAULT NULL,
  `nomeFuncionario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbobra`
--

CREATE TABLE `tbobra` (
  `idObra` int(11) NOT NULL,
  `tituloObra` varchar(50) DEFAULT NULL,
  `descricaoObra` varchar(200) DEFAULT NULL,
  `idAutor` int(11) DEFAULT NULL,
  `dataObra` date DEFAULT NULL,
  `idClassificacao` int(11) DEFAULT NULL,
  `paisObra` varchar(30) DEFAULT NULL,
  `idFuncionario` int(11) DEFAULT NULL,
  `dataCadastro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(100) DEFAULT NULL,
  `emailUsuario` varchar(100) DEFAULT NULL,
  `senhaUsuario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbautor`
--
ALTER TABLE `tbautor`
  ADD PRIMARY KEY (`idAutor`),
  ADD KEY `fkFuncAutor` (`idFuncionario`);

--
-- Índices para tabela `tbclassificacao`
--
ALTER TABLE `tbclassificacao`
  ADD PRIMARY KEY (`idClassificacao`),
  ADD KEY `fkFuncClassificacao` (`idFuncionario`);

--
-- Índices para tabela `tbfotoobra`
--
ALTER TABLE `tbfotoobra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idFuncionario` (`idFuncionario`),
  ADD KEY `idObra` (`idObra`);

--
-- Índices para tabela `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  ADD PRIMARY KEY (`idFuncionario`);

--
-- Índices para tabela `tbobra`
--
ALTER TABLE `tbobra`
  ADD PRIMARY KEY (`idObra`),
  ADD KEY `fkAutor` (`idAutor`),
  ADD KEY `fkClassificacao` (`idClassificacao`),
  ADD KEY `fkFuncionario` (`idFuncionario`);

--
-- Índices para tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbautor`
--
ALTER TABLE `tbautor`
  MODIFY `idAutor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbclassificacao`
--
ALTER TABLE `tbclassificacao`
  MODIFY `idClassificacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbfotoobra`
--
ALTER TABLE `tbfotoobra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbobra`
--
ALTER TABLE `tbobra`
  MODIFY `idObra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbautor`
--
ALTER TABLE `tbautor`
  ADD CONSTRAINT `fkFuncAutor` FOREIGN KEY (`idFuncionario`) REFERENCES `tbfuncionario` (`idFuncionario`);

--
-- Limitadores para a tabela `tbclassificacao`
--
ALTER TABLE `tbclassificacao`
  ADD CONSTRAINT `fkFuncClassificacao` FOREIGN KEY (`idFuncionario`) REFERENCES `tbfuncionario` (`idFuncionario`);

--
-- Limitadores para a tabela `tbfotoobra`
--
ALTER TABLE `tbfotoobra`
  ADD CONSTRAINT `fk_obra` FOREIGN KEY (`idObra`) REFERENCES `tbobra` (`idObra`),
  ADD CONSTRAINT `tbfotoobra_ibfk_1` FOREIGN KEY (`idFuncionario`) REFERENCES `tbfuncionario` (`idFuncionario`),
  ADD CONSTRAINT `tbfotoobra_ibfk_2` FOREIGN KEY (`idObra`) REFERENCES `tbobra` (`idObra`);

--
-- Limitadores para a tabela `tbobra`
--
ALTER TABLE `tbobra`
  ADD CONSTRAINT `fkAutor` FOREIGN KEY (`idAutor`) REFERENCES `tbautor` (`idAutor`),
  ADD CONSTRAINT `fkClassificacao` FOREIGN KEY (`idClassificacao`) REFERENCES `tbclassificacao` (`idClassificacao`),
  ADD CONSTRAINT `fkFuncionario` FOREIGN KEY (`idFuncionario`) REFERENCES `tbfuncionario` (`idFuncionario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
