-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Out-2017 às 17:00
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autoescola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE `cidades` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`id`, `nome`) VALUES
(1, 'Guanhães');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cpfCnpj` varchar(20) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `endereco` varchar(80) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cidadeId` int(11) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `empresasId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `empresasId` int(11) NOT NULL,
  `nome` varchar(80) COLLATE utf8_bin NOT NULL,
  `endereco` varchar(80) COLLATE utf8_bin NOT NULL,
  `bairro` varchar(40) COLLATE utf8_bin NOT NULL,
  `cidadeId` int(11) NOT NULL,
  `cep` varchar(10) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(20) COLLATE utf8_bin NOT NULL,
  `cnpj` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(80) COLLATE utf8_bin NOT NULL,
  `uf` varchar(2) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`empresasId`, `nome`, `endereco`, `bairro`, `cidadeId`, `cep`, `telefone`, `cnpj`, `email`, `uf`) VALUES
(1, 'CFC Califórnia Guanhães', 'Rua Alcindo Pereira, 38', 'Centro', 1, '39740000', '3334213323', '10527902000134', '', 'MG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itensorcamento`
--

CREATE TABLE `itensorcamento` (
  `itensId` int(11) NOT NULL,
  `orcamentosId` int(11) NOT NULL,
  `produtosId` int(11) NOT NULL,
  `quantidade` decimal(11,2) NOT NULL,
  `valorUnitario` decimal(11,2) NOT NULL,
  `valorDesconto` decimal(11,2) NOT NULL,
  `valorTotalLiquido` decimal(11,2) NOT NULL,
  `valorTotalPrazo` decimal(11,2) NOT NULL,
  `modalidadesId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `modalidades`
--

CREATE TABLE `modalidades` (
  `modalidadesId` int(11) NOT NULL,
  `nome` varchar(20) COLLATE utf8_bin NOT NULL,
  `prazo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamentos`
--

CREATE TABLE `orcamentos` (
  `orcamentosId` int(11) NOT NULL,
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
  `empresasId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_servico`
--

CREATE TABLE `produto_servico` (
  `id` int(11) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `valorAvista` float DEFAULT NULL,
  `valorAprazo` float DEFAULT NULL,
  `produtoAutoEscola` tinyint(1) NOT NULL,
  `empresasId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `titulos`
--

CREATE TABLE `titulos` (
  `titulosId` int(11) NOT NULL,
  `valor` decimal(11,2) NOT NULL,
  `parcelas` int(11) NOT NULL,
  `vencimento` date NOT NULL,
  `orcamentosId` int(11) NOT NULL,
  `produtosId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
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
  `admin` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `nascimento`, `telefone`, `endereco`, `bairro`, `cidadeId`, `cep`, `email`, `empresasId`, `login`, `senha`, `uf`, `admin`) VALUES
(3, 'Administrador1', '12345678989', '2017-10-21', '3334213323\n', 'Rua Alcindo Pereira, 38', 'Centro', 1, '39740000', '', 1, 'admin', '202cb962ac59075b964b07152d234b70', 'MG', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `cidadeId` (`cidadeId`),
  ADD KEY `empresasId` (`empresasId`);

--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`empresasId`),
  ADD KEY `cidadeId` (`cidadeId`);

--
-- Indexes for table `itensorcamento`
--
ALTER TABLE `itensorcamento`
  ADD PRIMARY KEY (`itensId`),
  ADD KEY `modalidadesId` (`modalidadesId`),
  ADD KEY `orcamentosId` (`orcamentosId`),
  ADD KEY `produtosId` (`produtosId`);

--
-- Indexes for table `modalidades`
--
ALTER TABLE `modalidades`
  ADD PRIMARY KEY (`modalidadesId`);

--
-- Indexes for table `orcamentos`
--
ALTER TABLE `orcamentos`
  ADD PRIMARY KEY (`orcamentosId`),
  ADD KEY `clientesId` (`clientesId`),
  ADD KEY `usuariosId` (`usuariosId`),
  ADD KEY `empresasId` (`empresasId`);

--
-- Indexes for table `produto_servico`
--
ALTER TABLE `produto_servico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titulos`
--
ALTER TABLE `titulos`
  ADD PRIMARY KEY (`titulosId`),
  ADD KEY `orcamentosId` (`orcamentosId`),
  ADD KEY `produtosId` (`produtosId`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cidadeId` (`cidadeId`),
  ADD KEY `empresasId` (`empresasId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `empresas`
--
ALTER TABLE `empresas`
  MODIFY `empresasId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `itensorcamento`
--
ALTER TABLE `itensorcamento`
  MODIFY `itensId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `modalidades`
--
ALTER TABLE `modalidades`
  MODIFY `modalidadesId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orcamentos`
--
ALTER TABLE `orcamentos`
  MODIFY `orcamentosId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produto_servico`
--
ALTER TABLE `produto_servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `titulos`
--
ALTER TABLE `titulos`
  MODIFY `titulosId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`cidadeId`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `clientes_ibfk_3` FOREIGN KEY (`empresasId`) REFERENCES `empresas` (`empresasId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `empresas_ibfk_1` FOREIGN KEY (`cidadeId`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `itensorcamento`
--
ALTER TABLE `itensorcamento`
  ADD CONSTRAINT `itensorcamento_ibfk_1` FOREIGN KEY (`orcamentosId`) REFERENCES `orcamentos` (`orcamentosId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `itensorcamento_ibfk_2` FOREIGN KEY (`produtosId`) REFERENCES `produto_servico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `itensorcamento_ibfk_3` FOREIGN KEY (`modalidadesId`) REFERENCES `modalidades` (`modalidadesId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `orcamentos`
--
ALTER TABLE `orcamentos`
  ADD CONSTRAINT `orcamentos_ibfk_1` FOREIGN KEY (`clientesId`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orcamentos_ibfk_2` FOREIGN KEY (`usuariosId`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orcamentos_ibfk_3` FOREIGN KEY (`empresasId`) REFERENCES `empresas` (`empresasId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `titulos`
--
ALTER TABLE `titulos`
  ADD CONSTRAINT `titulos_ibfk_1` FOREIGN KEY (`orcamentosId`) REFERENCES `orcamentos` (`orcamentosId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `titulos_ibfk_2` FOREIGN KEY (`produtosId`) REFERENCES `produto_servico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`empresasId`) REFERENCES `empresas` (`empresasId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`cidadeId`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
