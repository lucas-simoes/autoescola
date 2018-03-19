-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 05/03/2018 às 23:50
-- Versão do servidor: 10.1.31-MariaDB
-- Versão do PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u105903125_main`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(10) NOT NULL,
  `empresasId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `empresasId`) VALUES
(5, 'A', 2),
(7, 'B', 1),
(8, 'D', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cidades`
--

CREATE TABLE `cidades` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `cidades`
--

INSERT INTO `cidades` (`id`, `nome`) VALUES
(1, 'GUANHÃES'),
(2, 'SÃO JOÃO EVANGELISTA'),
(3, 'PEÇANHA'),
(4, 'SÃO JOSÉ DO JACURI');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
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
  `empresasId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpfCnpj`, `nascimento`, `telefone`, `endereco`, `bairro`, `uf`, `cidadeId`, `cep`, `email`, `nacionalidade`, `estadoCivil`, `profissao`, `identidade`, `empresasId`) VALUES
(7, 'DANIELLY LEAL PASCOAL', '111.111.111-11', '2018-03-03', '33999999999', 'ENDEREÇO 1', 'CENTRO', 'MG', 1, '39740000', '', 'BRASILEIRO', 'Solteiro(a)', 'PROFESSOR', '18123456 SSP', 1),
(8, 'JOYCE', '', '0000-00-00', '', '', '', '', NULL, '', '', '', 'Solteiro(a)', '', '', 1),
(9, 'JOYCE', '', '0000-00-00', '', '', '', '', NULL, '', '', '', 'Solteiro(a)', '', '', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `contratos`
--

CREATE TABLE `contratos` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) COLLATE utf8_bin NOT NULL,
  `texto` text COLLATE utf8_bin NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Fazendo dump de dados para tabela `contratos`
--

INSERT INTO `contratos` (`id`, `nome`, `texto`, `categoria`) VALUES
(5, 'CONTRATO A ', '<p style=\"margin-left:0cm; margin-right:0cm; text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>CONTRATO DE PRESTA&Ccedil;&Atilde;O DE SERVI&Ccedil;OS </u></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>Contratado</strong>:#CFC#, empresa registrada no CNPJ, sob o n&ordm;. <em><u>#CNPJ CFC#</u></em>, com nome fantasia &ldquo;AUTO ESCOLA CALIF&Oacute;RNIA&rdquo;, com endere&ccedil;o a #ENDERECO CFC#.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">_____________________________________________________________________________</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>Contratante:</strong> <em><u>#CLIENTE#</u></em>, portador (a) do CPF#CPF#, e da Carteira de Identidade <em><u>#IDENTIDADE#</u></em>, residente e domiciliado (a) &agrave; <em><u>#ENDERECO CLIENTE#</u></em>.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>CL&Aacute;USULA 1&ordf; &ndash; DO OBJETO DO CONTRATO.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><em><u>Par&aacute;grafo &Uacute;nico: &Eacute; objeto do presente contrato a presta&ccedil;&atilde;o de servi&ccedil;o de: curso, te&oacute;rico-t&eacute;cnico, dire&ccedil;&atilde;o veicular, taxas de expediente, emiss&atilde;o de boletim resumo e marca&ccedil;&otilde;es de exames junto ao DETRAN-MG</u></em></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>CL&Aacute;USULA 2&ordf;. DAS OBRIGA&Ccedil;&Otilde;ES DO (A) CONTRATANTE.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo Primeiro</u>: O (A), contratante dever&aacute; fornecer &agrave; contratada c&oacute;pia xerogr&aacute;fica de seus documentos pessoais: CPF e RG ou CTPS (com foto) e comprovante de endere&ccedil;o atualizado para abertura do processo de habilita&ccedil;&atilde;o junto ao DETRAN-MG.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo Segundo</u>: cumprir a carga hor&aacute;ria prevista nas resolu&ccedil;&otilde;es do CONTRAN.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo Terceiro:</u> a contratada fica dispensada de enviar ao DETRAN-MG informa&ccedil;&otilde;es sobre curso n&atilde;o conclu&iacute;do pelo (a) contratante.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo Quarto</u>: cumprir os hor&aacute;rios de in&iacute;cio das aulas te&oacute;ricas, n&atilde;o cabendo &agrave; contratada prolongar aulas para repor o tempo relativo ao atraso por parte do (a) contratante.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>CL&Aacute;USULA 3&ordf;. DAS OBRIGA&Ccedil;&Otilde;ES CONTRATADAS</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo Primeiro:</u> a contratada dever&aacute; fornecer ao/a contratante os recibos de pagamento, bem como uma c&oacute;pia do presente contrato.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo Segundo</u>: a contratada se compromete a ministrar o curso dentro das normas estabelecidas pelo C&oacute;digo de Tr&acirc;nsito Brasileiro e pelas resolu&ccedil;&otilde;es do CONTRAN.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo Terceiro</u>: a contratada empresa devidamente credenciada junto ao DETRAN/MG, sob o n&ordm;.1871/01, disp&otilde;e de estrutura f&iacute;sica, ve&iacute;culos e equipamentos de aprendizagem rigorosamente adequados &agrave;s exig&ecirc;ncias legais, especialmente &agrave; disposi&ccedil;&otilde;es contidas nas resolu&ccedil;&otilde;es do CONTRAN, al&eacute;m de corpo docente igualmente qualificado e atendendo &agrave;s referidas exig&ecirc;ncias legais.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>CL&Aacute;USULA 4&ordf;. DOS VALORES E DAS FORMAS DE PAGAMENTO.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo Primeiro</u>: para os iniciantes, <em><u>categoria &ldquo;A&rdquo;</u></em>, o valor ser&aacute; de <em><u>#VALOR CONTRATO#.</u></em></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo Segundo</u>: as modalidades de pagamento a prazo, somente ser&atilde;o efetivadas mediante (boleto banc&aacute;rio e/ ou cart&atilde;o de cr&eacute;dito).</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>CL&Aacute;USULA 5&ordf;. DO PRAZO DO CONTRATO</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo &Uacute;nico</u>: O contrato ter&aacute; o prazo de um ano, ou seja, 12(doze) meses, ou at&eacute; a aprova&ccedil;&atilde;o do no exame de dire&ccedil;&atilde;o, sempre respeitando os 12 (doze) meses da data da validade do processo de habilita&ccedil;&atilde;o, que ter&aacute; inicio na emiss&atilde;o da taxa de inscri&ccedil;&atilde;o.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>CL&Aacute;USULA 6&ordf;. DO ALVO P&Uacute;BLICO</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo &Uacute;nico: </u>este contrato, <em><u>atinge somente os iniciantes, de categorias &ldquo;A&rdquo; e &ldquo;B&rdquo;.</u></em></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>Cl&aacute;usula 7&ordf;. DOS CUSTOS ADICIONAIS.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo &Uacute;nico:</u> o referido contrato n&atilde;o sofre nenhum custo adicional.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>CL&Aacute;USULA 8&ordf;. DA FREQUENCIA &Agrave;S AULAS DE LEGISLA&Ccedil;&Atilde;O E DIRE&Ccedil;&Atilde;O, DO INSTRUTOR(A) E DOS VE&Iacute;CULOS, DO N&Uacute;MERO ILIMITADO DE AULAS.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo Primeiro</u>: as aulas de <strong>legisla&ccedil;&atilde;o</strong>, ser&aacute; ilimitada at&eacute; aprova&ccedil;&atilde;o no exame, mas LIMITANDO-SE em n&uacute;mero de <strong><em><u>02 (duas) ao dia</u></em></strong>, podendo o candidato assistir no hor&aacute;rio que conveniente lhe for, respeitando sempre os hor&aacute;rios de funcionamento do CFC, bem como das aulas j&aacute; agendadas em seu quadro de hor&aacute;rios.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo Segundo</u>:as aulas de <strong>dire&ccedil;&atilde;o</strong>, ser&aacute; ilimitada at&eacute; aprova&ccedil;&atilde;o no exame, mas LIMITANDO-SE, em n&uacute;mero de <strong><em><u>01 (uma) ao dia</u></em></strong><em><u>,</u></em> respeitando o agendamento pr&eacute;vio, que ser&aacute; repassado ao aluno pela CFC.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo Terceiro</u>: n&atilde;o poder&aacute; o aluno escolher o instrutor de sua prefer&ecirc;ncia, a aula se dar&aacute; com aquele instrutor dispon&iacute;vel na data e hora agendada.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo Quarto</u>:quanto aos ve&iacute;culos, os mesmo poder&atilde;o sofrer altera&ccedil;&atilde;o no decorrer das aulas, em caso de manuten&ccedil;&atilde;o e substitui&ccedil;&atilde;o, n&atilde;o ficando portanto, nenhum ve&iacute;culo de uso exclusivo do aluno, ainda que seja de prefer&ecirc;ncia do mesmo, valendo-se para as aulas, bem como no exame de dire&ccedil;&atilde;o.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo Quinto</u>: as aulas s&atilde;o regidas de acordo com o C&oacute;digo de Tr&acirc;nsito Brasileiro, resolu&ccedil;&otilde;es e portarias do DETRAN/CIRETRAN.&nbsp; </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>CL&Aacute;USULA 8&ordf;. DA MARCA&Ccedil;&Atilde;O DOS EXAMES &ndash; LEGISLA&Ccedil;&Atilde;O/DIRE&Ccedil;&Atilde;O</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo Primeiro</u>: os exames, ser&atilde;o agendados de acordo com a disponibilidade de vagas, liberadas/autorizadas, pelo DETRAN/CIRETRAN, por se tratar as mesmas, LIMITADA.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo Segundo</u>: S&oacute; ser&aacute; marcado o exame, quando o candidato estiver apto, bem como, com o aval do instrutor e diretor, e aprovado nos pr&eacute;-exames, realizados pela CFC, tudo conforme a Lei. 12.302 de 02/08/2010, n&atilde;o podendo o candidato pedir a marca&ccedil;&atilde;o quando bem entender, e sim respeitando sempre sua aptid&atilde;o ap&oacute;s an&aacute;lise do instrutor.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>CL&Aacute;USULA 9&ordf;. DAS TAXAS</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo Primeiro</u>: n&atilde;o ser&aacute; inclusa a taxa de inscri&ccedil;&atilde;o bem como a taxa da cl&iacute;nica m&eacute;dica, devendo estas ser arcadas exclusivamente pelo contratante, ou seja, (aptid&atilde;o f&iacute;sica e mental, m&eacute;dico e psicot&eacute;cnico).</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo Segundo</u>: quanto as demais taxas, de marca&ccedil;&otilde;es de exame de legisla&ccedil;&atilde;o, dire&ccedil;&atilde;o, e Licen&ccedil;a de Aprendizagem Dire&ccedil;&atilde;o Veicular, est&atilde;o inclusa no valor pago neste contrato.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>CL&Aacute;USULA 10&ordf;. DA DESISTENCIA DO CONTRATO.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo Primeiro</u>: se o candidato desistir, o mesmo perder&aacute; todo o valor j&aacute; pago, bem como ser&aacute; cobrado uma multa de 20% sobre o valor do contrato firmado/assinado.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><u>Par&aacute;grafo Segundo</u>: a contratada sob nenhuma hip&oacute;tese far&aacute; devolu&ccedil;&atilde;o das taxas expediente ao/a contratante, devendo apresenta-las paga ao contratante.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong>CL&Aacute;USULA 11&ordf;. DO FORO.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Para dirimir quaisquer controv&eacute;rsias oriundas do presente contrato, as partes elegem o foro da comarca de Guanh&atilde;es/MG.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em><u>Guanh&atilde;es/MG ______/_________/_______.</u></em></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Contratado: _____________________________________________</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#CFC#</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Contratante:_____________________________</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CPF -#CPF#</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Testemunhas:</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">______________________________________</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">______________________________________</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>\r\n', 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `empresas`
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
  `uf` varchar(2) COLLATE utf8_bin NOT NULL,
  `celular` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `telefone1` varchar(20) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Fazendo dump de dados para tabela `empresas`
--

INSERT INTO `empresas` (`empresasId`, `nome`, `endereco`, `bairro`, `cidadeId`, `cep`, `telefone`, `cnpj`, `email`, `uf`, `celular`, `telefone1`) VALUES
(1, 'CFC CALIFÓRNIA GUANHÃES', 'RUA ALCINDO PEREIRA,  38 ', 'CENTRO', 1, '39.740-000', '3334213323', '10527902000134', 'cfccaliforniagh@yahoo.com.br', 'MG', '33988284323', '3334213163'),
(2, 'CFC CALIFÓRNIA SÃO JOÃO EVANGELISTA', 'RUA BENEDITO VALADARES, 349', 'CENTRO', 2, '39.705-000', '3334121136', '10527902000568', 'cfccaliforniagh@yahoo.com.br', 'MG', NULL, NULL),
(6, 'CFC CALIFÓRNIA PEÇANHA', 'PRAÇA GETÚLIO VARGAS, 280', 'CENTRO', 3, '39.700-000', '3334111592', '10527902000304', 'cfccaliforniagh@yahoo.com.br', 'MG', NULL, NULL),
(7, 'CFC CALIFÓRNIA SÃO JOSÉ DO JACURI', 'RUA DR. SIMÃO DA CUNHA, 167', 'CENTRO', 4, '39.707-000', '3334331259', '10527902000649', 'cfccaliforniagh@yahoo.com.br', 'MG', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `itenscategoria`
--

CREATE TABLE `itenscategoria` (
  `itensId` int(11) NOT NULL,
  `categoriasId` int(11) NOT NULL,
  `produtosId` int(11) NOT NULL,
  `quantidade` decimal(11,2) NOT NULL,
  `valorUnitario` decimal(11,2) NOT NULL,
  `valorDesconto` decimal(11,2) NOT NULL,
  `valorTotalLiquido` decimal(11,2) NOT NULL,
  `valorTotalPrazo` decimal(11,2) NOT NULL,
  `modalidadesId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Fazendo dump de dados para tabela `itenscategoria`
--

INSERT INTO `itenscategoria` (`itensId`, `categoriasId`, `produtosId`, `quantidade`, `valorUnitario`, `valorDesconto`, `valorTotalLiquido`, `valorTotalPrazo`, `modalidadesId`) VALUES
(6, 5, 2, '10.00', '150.23', '0.00', '1502.30', '1502.30', 2),
(8, 5, 3, '2.00', '60.00', '0.00', '120.00', '120.00', 2),
(9, 7, 1, '1.00', '100.00', '0.00', '100.00', '253.30', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `itensorcamento`
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

--
-- Fazendo dump de dados para tabela `itensorcamento`
--

INSERT INTO `itensorcamento` (`itensId`, `orcamentosId`, `produtosId`, `quantidade`, `valorUnitario`, `valorDesconto`, `valorTotalLiquido`, `valorTotalPrazo`, `modalidadesId`) VALUES
(24, 25, 1, '10.00', '55.00', '0.00', '550.00', '550.00', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `modalidades`
--

CREATE TABLE `modalidades` (
  `modalidadesId` int(11) NOT NULL,
  `nome` varchar(20) COLLATE utf8_bin NOT NULL,
  `prazo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Fazendo dump de dados para tabela `modalidades`
--

INSERT INTO `modalidades` (`modalidadesId`, `nome`, `prazo`) VALUES
(1, 'CARTÃO', 1),
(2, 'À VISTA', 0),
(3, 'BOLETO', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `orcamentos`
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
  `empresasId` int(11) NOT NULL,
  `categoriaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Fazendo dump de dados para tabela `orcamentos`
--

INSERT INTO `orcamentos` (`orcamentosId`, `data`, `clientesId`, `valorBruto`, `valorDesconto`, `valorLiquido`, `status`, `usuariosId`, `validade`, `valorPrazo`, `inclusao`, `empresasId`, `categoriaid`) VALUES
(25, '2018-03-03', 7, '550.00', '0.00', '550.00', 2, 3, '2018-04-02', '550.00', '2018-03-03 00:00:00', 1, 5),
(26, '2018-03-03', 9, '0.00', '0.00', '0.00', 2, 3, '2018-04-02', '0.00', '2018-03-03 00:00:00', 1, 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_servico`
--

CREATE TABLE `produto_servico` (
  `id` int(11) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `valorAvista` float DEFAULT NULL,
  `valorAprazo` float DEFAULT NULL,
  `produtoAutoEscola` tinyint(1) NOT NULL,
  `empresasId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `produto_servico`
--

INSERT INTO `produto_servico` (`id`, `descricao`, `valorAvista`, `valorAprazo`, `produtoAutoEscola`, `empresasId`) VALUES
(1, 'AULA DE DIREÇÃO CATEGORIA B', 55, 60, 1, 1),
(2, 'CURSO DE LEGISLAÇÃO', 300, 350, 1, 1),
(3, 'Teste serviço', 60, 80, 0, 2),
(6, 'TAXA INSCRIÇÃO/ADIÇÃO/MUDANÇA DE CAT', 65.03, 0, 0, 1),
(7, 'EXAME MÉDICO', 169.28, 0, 0, 1),
(8, 'EXAME PSICOTÉCNICO', 169.28, 0, 0, 1),
(9, 'EXAME TOXICOLÓGICO', 230, 0, 0, 1),
(10, 'MARCAÇÃO DE LEGISLAÇÃO', 150, 0, 0, 1),
(11, 'LADV', 110, 0, 0, 1),
(12, 'AULAS SIMULADOR', 60, 0, 0, 1),
(13, 'AULAS DE DIREÇÃO CATEGORIA A', 45, 50, 1, 1),
(14, 'AULAS DE DIREÇÃO CATEGORIA D', 70, 80, 1, 1),
(15, 'AULAS DE DIREÇÃO CATEGORIA E', 85, 95, 1, 1),
(16, 'ALUGUEL MOTO PISTA', 230, 0, 1, 1),
(17, 'MARCAÇÃO DE DIREÇÃO CATEGORIA A/B', 250, 0, 0, 1),
(18, 'MARCAÇÃO DE DIREÇÃO CATEGORIA D/E', 350, 0, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `titulos`
--

CREATE TABLE `titulos` (
  `titulosId` int(11) NOT NULL,
  `valor` decimal(11,2) NOT NULL,
  `parcelas` int(11) NOT NULL,
  `vencimento` date NOT NULL,
  `itensorcamentoId` int(11) NOT NULL,
  `produtosId` int(11) NOT NULL,
  `valorParcela` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Fazendo dump de dados para tabela `titulos`
--

INSERT INTO `titulos` (`titulosId`, `valor`, `parcelas`, `vencimento`, `itensorcamentoId`, `produtosId`, `valorParcela`) VALUES
(14, '550.00', 1, '0000-00-00', 24, 1, '550.00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
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
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `nascimento`, `telefone`, `endereco`, `bairro`, `cidadeId`, `cep`, `email`, `empresasId`, `login`, `senha`, `uf`, `admin`) VALUES
(3, 'Administrador1', '12345678989', '2017-10-21', '33988273723', 'Rua Sete, 110 ', 'Bela Vista', 1, '39740000', 'contato@solucoesquefacilitam.com.br', 1, 'admin', '202cb962ac59075b964b07152d234b70', 'MG', 1),
(5, 'DANIELLY LEAL PASCOAL', '07189557652', '1986-02-23', '33988294593', 'RUA DOZE DE OUTUBRO, 256', 'SANTA TEREZA', 1, '39740000', '', 1, 'DANYLEAL', '9e0dd08fb366a55e53f7f497fa19ebb8', 'MG', 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `cidadeId` (`cidadeId`),
  ADD KEY `empresasId` (`empresasId`);

--
-- Índices de tabela `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria` (`categoria`);

--
-- Índices de tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`empresasId`),
  ADD KEY `cidadeId` (`cidadeId`);

--
-- Índices de tabela `itenscategoria`
--
ALTER TABLE `itenscategoria`
  ADD PRIMARY KEY (`itensId`),
  ADD KEY `modalidadesId` (`modalidadesId`),
  ADD KEY `categoriasId` (`categoriasId`),
  ADD KEY `produtosId` (`produtosId`);

--
-- Índices de tabela `itensorcamento`
--
ALTER TABLE `itensorcamento`
  ADD PRIMARY KEY (`itensId`),
  ADD KEY `modalidadesId` (`modalidadesId`),
  ADD KEY `orcamentosId` (`orcamentosId`),
  ADD KEY `produtosId` (`produtosId`);

--
-- Índices de tabela `modalidades`
--
ALTER TABLE `modalidades`
  ADD PRIMARY KEY (`modalidadesId`);

--
-- Índices de tabela `orcamentos`
--
ALTER TABLE `orcamentos`
  ADD PRIMARY KEY (`orcamentosId`),
  ADD KEY `clientesId` (`clientesId`),
  ADD KEY `usuariosId` (`usuariosId`),
  ADD KEY `empresasId` (`empresasId`),
  ADD KEY `categoriaid` (`categoriaid`);

--
-- Índices de tabela `produto_servico`
--
ALTER TABLE `produto_servico`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `titulos`
--
ALTER TABLE `titulos`
  ADD PRIMARY KEY (`titulosId`),
  ADD KEY `orcamentosId` (`itensorcamentoId`),
  ADD KEY `produtosId` (`produtosId`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cidadeId` (`cidadeId`),
  ADD KEY `empresasId` (`empresasId`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `contratos`
--
ALTER TABLE `contratos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `empresasId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `itenscategoria`
--
ALTER TABLE `itenscategoria`
  MODIFY `itensId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `itensorcamento`
--
ALTER TABLE `itensorcamento`
  MODIFY `itensId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `modalidades`
--
ALTER TABLE `modalidades`
  MODIFY `modalidadesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `orcamentos`
--
ALTER TABLE `orcamentos`
  MODIFY `orcamentosId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `produto_servico`
--
ALTER TABLE `produto_servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `titulos`
--
ALTER TABLE `titulos`
  MODIFY `titulosId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`cidadeId`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `clientes_ibfk_3` FOREIGN KEY (`empresasId`) REFERENCES `empresas` (`empresasId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `contratos`
--
ALTER TABLE `contratos`
  ADD CONSTRAINT `fk_Categoria` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id`);

--
-- Restrições para tabelas `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `empresas_ibfk_1` FOREIGN KEY (`cidadeId`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `itenscategoria`
--
ALTER TABLE `itenscategoria`
  ADD CONSTRAINT `itenscategoria_ibfk_1` FOREIGN KEY (`categoriasId`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `itenscategoria_ibfk_2` FOREIGN KEY (`produtosId`) REFERENCES `produto_servico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `itenscategoria_ibfk_3` FOREIGN KEY (`modalidadesId`) REFERENCES `modalidades` (`modalidadesId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `itensorcamento`
--
ALTER TABLE `itensorcamento`
  ADD CONSTRAINT `itensorcamento_ibfk_1` FOREIGN KEY (`orcamentosId`) REFERENCES `orcamentos` (`orcamentosId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `itensorcamento_ibfk_2` FOREIGN KEY (`produtosId`) REFERENCES `produto_servico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `itensorcamento_ibfk_3` FOREIGN KEY (`modalidadesId`) REFERENCES `modalidades` (`modalidadesId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `orcamentos`
--
ALTER TABLE `orcamentos`
  ADD CONSTRAINT `orcamentos_ibfk_1` FOREIGN KEY (`clientesId`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orcamentos_ibfk_2` FOREIGN KEY (`usuariosId`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orcamentos_ibfk_3` FOREIGN KEY (`empresasId`) REFERENCES `empresas` (`empresasId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orcamentos_ibfk_4` FOREIGN KEY (`categoriaid`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `titulos`
--
ALTER TABLE `titulos`
  ADD CONSTRAINT `titulos_ibfk_2` FOREIGN KEY (`produtosId`) REFERENCES `produto_servico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `titulos_ibfk_3` FOREIGN KEY (`itensorcamentoId`) REFERENCES `itensorcamento` (`itensId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`empresasId`) REFERENCES `empresas` (`empresasId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`cidadeId`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
