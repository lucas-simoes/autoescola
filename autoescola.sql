-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `autoescola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE IF NOT EXISTS `cidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `cpfCnpj` int(14) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `fixo` int(11) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `endereco` varchar(80) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(80) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidadeId` int(11) NOT NULL,
  `cep` int(8) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `empresasId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `cidadeId` (`cidadeId`),
  KEY `empresasId` (`empresasId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `empresasId` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) COLLATE utf8_bin NOT NULL,
  `endereco` varchar(80) COLLATE utf8_bin NOT NULL,
  `bairro` varchar(40) COLLATE utf8_bin NOT NULL,
  `cidadeId` int(11) NOT NULL,
  `cep` varchar(10) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(20) COLLATE utf8_bin NOT NULL,
  `cnpj` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(80) COLLATE utf8_bin NOT NULL,
  `uf` varchar(2) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`empresasId`),
  KEY `cidadeId` (`cidadeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itensorcamento`
--

CREATE TABLE IF NOT EXISTS `itensorcamento` (
  `itensId` int(11) NOT NULL AUTO_INCREMENT,
  `orcamentosId` int(11) NOT NULL,
  `produtosId` int(11) NOT NULL,
  `quantidade` decimal(11,2) NOT NULL,
  `valorUnitario` decimal(11,2) NOT NULL,
  `valorDesconto` decimal(11,2) NOT NULL,
  `valorTotalLiquido` decimal(11,2) NOT NULL,
  `valorTotalPrazo` decimal(11,2) NOT NULL,
  `modalidadesId` int(11) NOT NULL,
  PRIMARY KEY (`itensId`),
  KEY `modalidadesId` (`modalidadesId`),
  KEY `orcamentosId` (`orcamentosId`),
  KEY `produtosId` (`produtosId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `modalidades`
--

CREATE TABLE IF NOT EXISTS `modalidades` (
  `modalidadesId` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) COLLATE utf8_bin NOT NULL,
  `prazo` tinyint(1) NOT NULL,
  PRIMARY KEY (`modalidadesId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamentos`
--

CREATE TABLE IF NOT EXISTS `orcamentos` (
  `orcamentosId` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `clientesId` int(11) NOT NULL,
  `valorBruto` decimal(11,2) NOT NULL,
  `valorDesconto` decimal(11,2) NOT NULL,
  `valorLiquido` decimal(11,2) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1 - Em Aberto; 2 - Fechado; 3 -Perdido',
  `usuariosId` int(11) NOT NULL,
  `validade` date NOT NULL,
  `valorPrazo` decimal(11,2) NOT NULL,
  `inclusao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `empresasId` int(11) NOT NULL,
  PRIMARY KEY (`orcamentosId`),
  KEY `clientesId` (`clientesId`),
  KEY `usuariosId` (`usuariosId`),
  KEY `empresasId` (`empresasId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_servico`
--

CREATE TABLE IF NOT EXISTS `produto_servico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(150) NOT NULL,
  `valorAvista` float DEFAULT NULL,
  `valorAprazo` float DEFAULT NULL,
  `produtoAutoEscola` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `titulos`
--

CREATE TABLE IF NOT EXISTS `titulos` (
  `titulosId` int(11) NOT NULL AUTO_INCREMENT,
  `valor` decimal(11,2) NOT NULL,
  `parcelas` int(11) NOT NULL,
  `vencimento` date NOT NULL,
  `orcamentosId` int(11) NOT NULL,
  `produtosId` int(11) NOT NULL,
  PRIMARY KEY (`titulosId`),
  KEY `orcamentosId` (`orcamentosId`),
  KEY `produtosId` (`produtosId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `cpf` int(11) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `fixo` int(11) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `endereco` varchar(80) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(2) NOT NULL,
  `cidadeId` int(11) NOT NULL,
  `cep` int(8) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `empresasId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cidadeId` (`cidadeId`),
  KEY `empresasId` (`empresasId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`cidadeId`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `clientes_ibfk_3` FOREIGN KEY (`empresasId`) REFERENCES `empresas` (`empresasId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `empresas_ibfk_1` FOREIGN KEY (`cidadeId`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `itensorcamento`
--
ALTER TABLE `itensorcamento`
  ADD CONSTRAINT `itensorcamento_ibfk_1` FOREIGN KEY (`orcamentosId`) REFERENCES `orcamentos` (`orcamentosId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `itensorcamento_ibfk_2` FOREIGN KEY (`produtosId`) REFERENCES `produto_servico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `itensorcamento_ibfk_3` FOREIGN KEY (`modalidadesId`) REFERENCES `modalidades` (`modalidadesId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `orcamentos`
--
ALTER TABLE `orcamentos`
  ADD CONSTRAINT `orcamentos_ibfk_1` FOREIGN KEY (`clientesId`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orcamentos_ibfk_2` FOREIGN KEY (`usuariosId`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orcamentos_ibfk_3` FOREIGN KEY (`empresasId`) REFERENCES `empresas` (`empresasId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `titulos`
--
ALTER TABLE `titulos`
  ADD CONSTRAINT `titulos_ibfk_1` FOREIGN KEY (`orcamentosId`) REFERENCES `orcamentos` (`orcamentosId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `titulos_ibfk_2` FOREIGN KEY (`produtosId`) REFERENCES `produto_servico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`empresasId`) REFERENCES `empresas` (`empresasId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`cidadeId`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
