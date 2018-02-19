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
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(10) NOT NULL,
  `empresasId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `empresasId`) VALUES
(5, 'A', 2),
(7, 'B', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE IF NOT EXISTS `cidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`id`, `nome`) VALUES
(1, 'Guanhães'),
(2, 'São João Evangelista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `cpfCnpj` varchar(20) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `endereco` varchar(80) DEFAULT NULL,
  `bairro` varchar(40) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cidadeId` int(11) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nacionalidade` varchar(40) DEFAULT NULL,
  `estadoCivil` varchar(40) DEFAULT NULL,
  `profissao` varchar(40) DEFAULT NULL,
  `identidade` varchar(40) DEFAULT NULL,
  `empresasId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `cidadeId` (`cidadeId`),
  KEY `empresasId` (`empresasId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpfCnpj`, `nascimento`, `telefone`, `endereco`, `bairro`, `uf`, `cidadeId`, `cep`, `email`, `nacionalidade`, `estadoCivil`, `profissao`, `identidade`, `empresasId`) VALUES
(1, 'João Victor Silva', '09518888620', '1988-01-08', '33988273723', 'Rua 7, 110', 'Bela Vista', 'MG', 1, '39740000', 'jvictorsilva@outlook.com', NULL, NULL, NULL, NULL, 1),
(2, 'Natalia Caetano', '12345678920', '1989-09-18', '33988444214', 'Rua 7, 110', 'Bela Vista', 'MG', 2, '39740100', 'natalia@natalia.com', NULL, NULL, NULL, NULL, 2),
(3, 'teste clientes', '095.485.485-55', '2017-10-26', '16519616516', 'fdafasdfafs', 'asdfa', 'MG', 1, '63165165', '', NULL, NULL, NULL, NULL, 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`empresasId`, `nome`, `endereco`, `bairro`, `cidadeId`, `cep`, `telefone`, `cnpj`, `email`, `uf`) VALUES
(1, 'CFC Califórnia Guanhães', 'Rua Alcindo Pereira', 'Centro', 2, '39740000', '3334214506', '12345678912345', 'teste@teste.com', 'MG'),
(2, 'CFC Califórnia SJE', 'TGADFASFA', 'ASDFASFA', 1, '39740000', '33988273723', '98749541654984', 'TESTE@TESTE.COM', 'MG'),
(3, 'CFC Califórnia Sabinopolis', 'Rua Alcindo Pereira', 'Centro', 2, '39740000', '(33) 3421-4506', '12345678901234', 'teste@teste.com', 'MG'),
(4, 'CFC Califórnia Virginopolis', 'TGADFASFA', 'ASDFASFA', 1, '39740000', '33988273723', '65165165168519', 'TESTE@TESTE.COM', 'MG'),
(5, 'CFC Califórnia Serro', 'Rua Alcindo Pereira', 'Centro', 2, '39740000', '(33) 3421-4506', '12345678901234', 'teste@teste.com', 'MG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itenscategoria`
--

CREATE TABLE IF NOT EXISTS `itenscategoria` (
  `itensId` int(11) NOT NULL AUTO_INCREMENT,
  `categoriasId` int(11) NOT NULL,
  `produtosId` int(11) NOT NULL,
  `quantidade` decimal(11,2) NOT NULL,
  `valorUnitario` decimal(11,2) NOT NULL,
  `valorDesconto` decimal(11,2) NOT NULL,
  `valorTotalLiquido` decimal(11,2) NOT NULL,
  `valorTotalPrazo` decimal(11,2) NOT NULL,
  `modalidadesId` int(11) NOT NULL,
  PRIMARY KEY (`itensId`),
  KEY `modalidadesId` (`modalidadesId`),
  KEY `categoriasId` (`categoriasId`),
  KEY `produtosId` (`produtosId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `itenscategoria`
--

INSERT INTO `itenscategoria` (`itensId`, `categoriasId`, `produtosId`, `quantidade`, `valorUnitario`, `valorDesconto`, `valorTotalLiquido`, `valorTotalPrazo`, `modalidadesId`) VALUES
(6, 5, 2, '10.00', '150.23', '0.00', '1502.30', '1502.30', 2),
(8, 5, 3, '2.00', '60.00', '0.00', '120.00', '120.00', 2),
(9, 7, 1, '1.00', '100.00', '0.00', '100.00', '253.30', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `itensorcamento`
--

INSERT INTO `itensorcamento` (`itensId`, `orcamentosId`, `produtosId`, `quantidade`, `valorUnitario`, `valorDesconto`, `valorTotalLiquido`, `valorTotalPrazo`, `modalidadesId`) VALUES
(1, 2, 1, '120.00', '100.00', '0.00', '12000.00', '12000.00', 2),
(2, 2, 2, '1.00', '150.23', '0.00', '150.23', '150.23', 1),
(3, 5, 3, '2.00', '60.00', '0.00', '160.00', '160.00', 2),
(4, 6, 2, '1.00', '150.23', '0.00', '150.23', '250.23', 2),
(5, 7, 1, '1.00', '100.00', '0.00', '100.00', '253.30', 2),
(18, 18, 2, '10.00', '150.23', '0.00', '1502.30', '1502.30', 2),
(19, 18, 3, '2.00', '60.00', '0.00', '120.00', '120.00', 2),
(20, 18, 3, '1.00', '60.00', '0.00', '60.00', '60.00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `modalidades`
--

CREATE TABLE IF NOT EXISTS `modalidades` (
  `modalidadesId` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) COLLATE utf8_bin NOT NULL,
  `prazo` tinyint(1) NOT NULL,
  PRIMARY KEY (`modalidadesId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `modalidades`
--

INSERT INTO `modalidades` (`modalidadesId`, `nome`, `prazo`) VALUES
(1, 'Cartão', 1),
(2, 'A vista', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `orcamentos`
--

INSERT INTO `orcamentos` (`orcamentosId`, `data`, `clientesId`, `valorBruto`, `valorDesconto`, `valorLiquido`, `status`, `usuariosId`, `validade`, `valorPrazo`, `inclusao`, `empresasId`) VALUES
(1, '2017-10-25', 1, '0.00', '0.00', '0.00', 1, 3, '2017-11-24', '0.00', '2017-10-25 02:00:00', 1),
(2, '2017-11-06', 1, '0.00', '0.00', '0.00', 1, 3, '2017-12-06', '0.00', '2017-11-06 02:00:00', 1),
(3, '2017-11-20', 1, '0.00', '0.00', '0.00', 1, 3, '2017-12-20', '0.00', '2017-11-20 02:00:00', 1),
(4, '2017-11-20', 1, '0.00', '0.00', '0.00', 1, 3, '2017-12-20', '0.00', '2017-11-20 02:00:00', 1),
(5, '2017-11-20', 1, '0.00', '0.00', '0.00', 1, 3, '2017-12-20', '0.00', '2017-11-20 02:00:00', 1),
(6, '2017-11-20', 2, '0.00', '0.00', '0.00', 1, 4, '2017-12-20', '0.00', '2017-11-20 02:00:00', 1),
(7, '2017-11-20', 3, '0.00', '0.00', '0.00', 1, 4, '2017-12-20', '0.00', '2017-11-20 02:00:00', 2),
(8, '2017-11-20', 2, '0.00', '0.00', '0.00', 1, 3, '2017-12-20', '0.00', '2017-11-20 02:00:00', 1),
(18, '2017-12-09', 1, '1682.30', '0.00', '1682.30', 1, 3, '2018-01-08', '1682.30', '2017-12-09 02:00:00', 1);

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
  `empresasId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `produto_servico`
--

INSERT INTO `produto_servico` (`id`, `descricao`, `valorAvista`, `valorAprazo`, `produtoAutoEscola`, `empresasId`) VALUES
(1, 'Aula de Direção', 100, 253.3, 1, 1),
(2, 'Aula de Legislação', 150.23, 250.23, 1, 2),
(3, 'Teste serviço', 60, 80, 0, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `titulos`
--

CREATE TABLE IF NOT EXISTS `titulos` (
  `titulosId` int(11) NOT NULL AUTO_INCREMENT,
  `valor` decimal(11,2) NOT NULL,
  `parcelas` int(11) NOT NULL,
  `vencimento` date NOT NULL,
  `itensorcamentoId` int(11) NOT NULL,
  `produtosId` int(11) NOT NULL,
  `valorParcela` decimal(11,2) NOT NULL,
  PRIMARY KEY (`titulosId`),
  KEY `orcamentosId` (`itensorcamentoId`),
  KEY `produtosId` (`produtosId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `titulos`
--

INSERT INTO `titulos` (`titulosId`, `valor`, `parcelas`, `vencimento`, `itensorcamentoId`, `produtosId`, `valorParcela`) VALUES
(8, '1502.30', 1, '2017-12-09', 18, 2, '1502.30'),
(9, '120.00', 1, '2017-12-09', 19, 3, '120.00'),
(10, '60.00', 1, '2017-12-09', 20, 3, '60.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `endereco` varchar(80) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `cidadeId` int(11) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `empresasId` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(120) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cidadeId` (`cidadeId`),
  KEY `empresasId` (`empresasId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `nascimento`, `telefone`, `endereco`, `bairro`, `cidadeId`, `cep`, `email`, `empresasId`, `login`, `senha`, `uf`, `admin`) VALUES
(3, 'Administrador1', '12345678989', '2017-10-21', '33988273723', 'Rua Sete, 110 ', 'Bela Vista', 1, '39740000', 'contato@solucoesquefacilitam.com.br', 1, 'admin', '202cb962ac59075b964b07152d234b70', 'MG', 1),
(4, 'João Victor Silva', '09218888620', '1988-01-08', '33988273723', 'Rua Sete, 110 ', 'Bela Vista', 2, '39740000', 'jvictorsilva@outlook.com', 2, 'jvictor', '202cb962ac59075b964b07152d234b70', 'MG', 0);

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
-- Restrições para a tabela `itenscategoria`
--
ALTER TABLE `itenscategoria`
  ADD CONSTRAINT `itenscategoria_ibfk_1` FOREIGN KEY (`categoriasId`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `itenscategoria_ibfk_2` FOREIGN KEY (`produtosId`) REFERENCES `produto_servico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `itenscategoria_ibfk_3` FOREIGN KEY (`modalidadesId`) REFERENCES `modalidades` (`modalidadesId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `titulos_ibfk_2` FOREIGN KEY (`produtosId`) REFERENCES `produto_servico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `titulos_ibfk_3` FOREIGN KEY (`itensorcamentoId`) REFERENCES `itensorcamento` (`itensId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`empresasId`) REFERENCES `empresas` (`empresasId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`cidadeId`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
