-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Fev-2018 às 11:28
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(10) NOT NULL,
  `empresasId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `cidades` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpfCnpj`, `nascimento`, `telefone`, `endereco`, `bairro`, `uf`, `cidadeId`, `cep`, `email`, `nacionalidade`, `estadoCivil`, `profissao`, `identidade`, `empresasId`) VALUES
(1, 'João Victor Silva', '09518888620', '1988-01-08', '33988273723', 'Rua 7, 110', 'Bela Vista', 'MG', 1, '39740000', 'jvictorsilva@outlook.com', NULL, NULL, NULL, NULL, 1),
(2, 'Natalia Caetano', '12345678920', '1989-09-18', '33988444214', 'Rua 7, 110', 'Bela Vista', 'MG', 2, '39740100', 'natalia@natalia.com', NULL, NULL, NULL, NULL, 2),
(3, 'teste clientes', '095.485.485-55', '2017-10-26', '16519616516', 'fdafasdfafs', 'asdfa', 'MG', 1, '63165165', '', NULL, NULL, NULL, NULL, 2),
(4, 'Gustavo Ricardo Danilo Araújo', '774.757.112-77', '1995-12-01', '33999999999', 'Alameda Guadalupe', 'Ponta Negra', 'MG', 1, '39740000', 'ggustavoricardodaniloaraujo@centrooleo.com.br', 'BRASILEIRO', 'Solteiro(a)', 'PADEIRO', '241204021', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratos`
--

CREATE TABLE `contratos` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) COLLATE utf8_bin NOT NULL,
  `texto` text COLLATE utf8_bin NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `contratos`
--

INSERT INTO `contratos` (`id`, `nome`, `texto`, `categoria`) VALUES
(1, 'Contrato categoria A', '<p style=\"margin-left:0cm; margin-right:0cm; text-align:center\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong><u>CONTRATO DE PRESTA&Ccedil;&Atilde;O DE SERVI&Ccedil;OS </u></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong>Contratado</strong>: CENTRO DE FORMA&Ccedil;&Atilde;O DE CONDUTORES GUANH&Atilde;ES LTDA, empresa registrada no CNPJ, sob o n&ordm;. <em><u>10.527.902/0001-34</u></em>, com nome fantasia &ldquo;AUTO ESCOLA CALIF&Oacute;RNIA&rdquo;, com endere&ccedil;o a Rua <em><u>Alcindo Pereira</u></em>, n&ordm;. 38, Bairro <em><u>&ndash; Centro, Guanh&atilde;es/MG</u></em> &ndash; CEP <em><u>39.740-000</u></em>. </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">_____________________________________________________________________________</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong>Contratante:</strong> <em><u>EDILENE PEREIRA DE JESUS</u></em>, <em><u>brasileiro (a</u></em>), <em><u>divorciada (a)</u></em>, <em><u>repositora</u></em>, portador (a) do CPF <em><u>065.691.086-03</u></em>, e da Carteira de Identidade <em><u>583.056.866 SP</u></em>, residente e domiciliado (a) &agrave; <em><u>Rua Albertina Braga</u></em>, n&ordm; 174, Bairro <em><u>Nova Uni&atilde;o</u></em>, na cidade <em><u>Guanh&atilde;es/MG</u></em>.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong>CL&Aacute;USULA 1&ordf; &ndash; DO OBJETO DO CONTRATO.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><em><u>Par&aacute;grafo &Uacute;nico: &Eacute; objeto do presente contrato a presta&ccedil;&atilde;o de servi&ccedil;o de: curso, te&oacute;rico-t&eacute;cnico, dire&ccedil;&atilde;o veicular, taxas de expediente, emiss&atilde;o de boletim resumo e marca&ccedil;&otilde;es de exames junto ao DETRAN-MG</u></em></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong>CL&Aacute;USULA 2&ordf;. DAS OBRIGA&Ccedil;&Otilde;ES DO (A) CONTRATANTE.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo Primeiro</u>: O (A), contratante dever&aacute; fornecer &agrave; contratada c&oacute;pia xerogr&aacute;fica de seus documentos pessoais: CPF e RG ou CTPS (com foto) e comprovante de endere&ccedil;o atualizado para abertura do processo de habilita&ccedil;&atilde;o junto ao DETRAN-MG.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo Segundo</u>: cumprir a carga hor&aacute;ria prevista nas resolu&ccedil;&otilde;es do CONTRAN.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo Terceiro:</u> a contratada fica dispensada de enviar ao DETRAN-MG informa&ccedil;&otilde;es sobre curso n&atilde;o conclu&iacute;do pelo (a) contratante.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo Quarto</u>: cumprir os hor&aacute;rios de in&iacute;cio das aulas te&oacute;ricas, n&atilde;o cabendo &agrave; contratada prolongar aulas para repor o tempo relativo ao atraso por parte do (a) contratante.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong>CL&Aacute;USULA 3&ordf;. DAS OBRIGA&Ccedil;&Otilde;ES CONTRATADAS</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo Primeiro:</u> a contratada dever&aacute; fornecer ao/a contratante os recibos de pagamento, bem como uma c&oacute;pia do presente contrato.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo Segundo</u>: a contratada se compromete a ministrar o curso dentro das normas estabelecidas pelo C&oacute;digo de Tr&acirc;nsito Brasileiro e pelas resolu&ccedil;&otilde;es do CONTRAN.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo Terceiro</u>: a contratada empresa devidamente credenciada junto ao DETRAN/MG, sob o n&ordm;.1871/01, disp&otilde;e de estrutura f&iacute;sica, ve&iacute;culos e equipamentos de aprendizagem rigorosamente adequados &agrave;s exig&ecirc;ncias legais, especialmente &agrave; disposi&ccedil;&otilde;es contidas nas resolu&ccedil;&otilde;es do CONTRAN, al&eacute;m de corpo docente igualmente qualificado e atendendo &agrave;s referidas exig&ecirc;ncias legais.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong>CL&Aacute;USULA 4&ordf;. DOS VALORES E DAS FORMAS DE PAGAMENTO.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo Primeiro</u>: para os iniciantes, <em><u>categoria &ldquo;A&rdquo;</u></em>, o valor ser&aacute; de <em><u>R$ 2.096,40,00 (Dois mil, noventa e seis reais e quarenta centavos)</u></em>, podendo ser pago a vista e /ou poder&aacute; ser dividido em at&eacute; <em><u>06 (seis) parcelas iguais de R$ 349,40 (trezentos e quarenta e nove reais e quarenta centavos ), sem juros; e/ ou, no valor de R$ 2,313,60 (Dois mil, trezentos e treze reais e sessenta centavos), em at&eacute; 12 (doze) parcelas.</u></em></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo Segundo</u>: as modalidades de pagamento a prazo, somente ser&atilde;o efetivadas mediante (boleto banc&aacute;rio e/ ou cart&atilde;o de cr&eacute;dito).</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong>CL&Aacute;USULA 5&ordf;. DO PRAZO DO CONTRATO</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo &Uacute;nico</u>: O contrato ter&aacute; o prazo de um ano, ou seja, 12(doze) meses, ou at&eacute; a aprova&ccedil;&atilde;o do no exame de dire&ccedil;&atilde;o, sempre respeitando os 12 (doze) meses da data da validade do processo de habilita&ccedil;&atilde;o, que ter&aacute; inicio na emiss&atilde;o da taxa de inscri&ccedil;&atilde;o.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong>CL&Aacute;USULA 6&ordf;. DO ALVO P&Uacute;BLICO</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo &Uacute;nico: </u>este contrato, <em><u>atinge somente os iniciantes, de categorias &ldquo;A&rdquo; e &ldquo;B&rdquo;.</u></em></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong>Cl&aacute;usula 7&ordf;. DOS CUSTOS ADICIONAIS.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo &Uacute;nico:</u> o referido contrato n&atilde;o sofre nenhum custo adicional.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong>CL&Aacute;USULA 8&ordf;. DA FREQUENCIA &Agrave;S AULAS DE LEGISLA&Ccedil;&Atilde;O E DIRE&Ccedil;&Atilde;O, DO INSTRUTOR(A) E DOS VE&Iacute;CULOS, DO N&Uacute;MERO ILIMITADO DE AULAS.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo Primeiro</u>: as aulas de <strong>legisla&ccedil;&atilde;o</strong>, ser&aacute; ilimitada at&eacute; aprova&ccedil;&atilde;o no exame, mas LIMITANDO-SE em n&uacute;mero de <strong><em><u>02 (duas) ao dia</u></em></strong>, podendo o candidato assistir no hor&aacute;rio que conveniente lhe for, respeitando sempre os hor&aacute;rios de funcionamento do CFC, bem como das aulas j&aacute; agendadas em seu quadro de hor&aacute;rios.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo Segundo</u>:as aulas de <strong>dire&ccedil;&atilde;o</strong>, ser&aacute; ilimitada at&eacute; aprova&ccedil;&atilde;o no exame, mas LIMITANDO-SE, em n&uacute;mero de <strong><em><u>01 (uma) ao dia</u></em></strong><em><u>,</u></em> respeitando o agendamento pr&eacute;vio, que ser&aacute; repassado ao aluno pela CFC.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo Terceiro</u>: n&atilde;o poder&aacute; o aluno escolher o instrutor de sua prefer&ecirc;ncia, a aula se dar&aacute; com aquele instrutor dispon&iacute;vel na data e hora agendada.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo Quarto</u>:quanto aos ve&iacute;culos, os mesmo poder&atilde;o sofrer altera&ccedil;&atilde;o no decorrer das aulas, em caso de manuten&ccedil;&atilde;o e substitui&ccedil;&atilde;o, n&atilde;o ficando portanto, nenhum ve&iacute;culo de uso exclusivo do aluno, ainda que seja de prefer&ecirc;ncia do mesmo, valendo-se para as aulas, bem como no exame de dire&ccedil;&atilde;o.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo Quinto</u>: as aulas s&atilde;o regidas de acordo com o C&oacute;digo de Tr&acirc;nsito Brasileiro, resolu&ccedil;&otilde;es e portarias do DETRAN/CIRETRAN.&nbsp; </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong>CL&Aacute;USULA 8&ordf;. DA MARCA&Ccedil;&Atilde;O DOS EXAMES &ndash; LEGISLA&Ccedil;&Atilde;O/DIRE&Ccedil;&Atilde;O</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo Primeiro</u>: os exames, ser&atilde;o agendados de acordo com a disponibilidade de vagas, liberadas/autorizadas, pelo DETRAN/CIRETRAN, por se tratar as mesmas, LIMITADA.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo Segundo</u>: S&oacute; ser&aacute; marcado o exame, quando o candidato estiver apto, bem como, com o aval do instrutor e diretor, e aprovado nos pr&eacute;-exames, realizados pela CFC, tudo conforme a Lei. 12.302 de 02/08/2010, n&atilde;o podendo o candidato pedir a marca&ccedil;&atilde;o quando bem entender, e sim respeitando sempre sua aptid&atilde;o ap&oacute;s an&aacute;lise do instrutor.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong>CL&Aacute;USULA 9&ordf;. DAS TAXAS</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo Primeiro</u>: n&atilde;o ser&aacute; inclusa a taxa de inscri&ccedil;&atilde;o bem como a taxa da cl&iacute;nica m&eacute;dica, devendo estas ser arcadas exclusivamente pelo contratante, ou seja, (aptid&atilde;o f&iacute;sica e mental, m&eacute;dico e psicot&eacute;cnico).</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo Segundo</u>: quanto as demais taxas, de marca&ccedil;&otilde;es de exame de legisla&ccedil;&atilde;o, dire&ccedil;&atilde;o, e Licen&ccedil;a de Aprendizagem Dire&ccedil;&atilde;o Veicular, est&atilde;o inclusa no valor pago neste contrato. </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong>CL&Aacute;USULA 10&ordf;. DA DESISTENCIA DO CONTRATO.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo Primeiro</u>: se o candidato desistir, o mesmo perder&aacute; todo o valor j&aacute; pago, bem como ser&aacute; cobrado uma multa de 20% sobre o valor do contrato firmado/assinado.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><u>Par&aacute;grafo Segundo</u>: a contratada sob nenhuma hip&oacute;tese far&aacute; devolu&ccedil;&atilde;o das taxas expediente ao/a contratante, devendo apresenta-las paga ao contratante.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><strong>CL&Aacute;USULA 11&ordf;. DO FORO.</strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Para dirimir quaisquer controv&eacute;rsias oriundas do presente contrato, as partes elegem o foro da comarca de Guanh&atilde;es/MG.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em><u>Guanh&atilde;es/MG ______/_________/_______.</u></em></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Contratado: _____________________________________________</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CENTRO DE FORMA&Ccedil;&Atilde;O DE CONDUTORES GUANH&Atilde;ES LTDA</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Contratante:_____________________________</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CPF - <em><u>evit&aacute;vel</u></em></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Testemunhas:</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">______________________________________</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">______________________________________</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>\r\n', 5),
(2, 'teste', '<p>teste</p>\r\n', 5),
(3, 'Contrato categoria b', '<p>teste</p>\r\n', 7),
(4, 'CATEGORIA A ', '<p>CONTRATO</p>\r\n', 5);

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
(1, 'CFC Califórnia Guanhães', 'Rua Alcindo Pereira', 'Centro', 2, '39740000', '3334214506', '12345678912345', 'teste@teste.com', 'MG'),
(2, 'CFC Califórnia SJE', 'TGADFASFA', 'ASDFASFA', 1, '39740000', '33988273723', '98749541654984', 'TESTE@TESTE.COM', 'MG'),
(3, 'CFC Califórnia Sabinopolis', 'Rua Alcindo Pereira', 'Centro', 2, '39740000', '(33) 3421-4506', '12345678901234', 'teste@teste.com', 'MG'),
(4, 'CFC Califórnia Virginopolis', 'TGADFASFA', 'ASDFASFA', 1, '39740000', '33988273723', '65165165168519', 'TESTE@TESTE.COM', 'MG'),
(5, 'CFC Califórnia Serro', 'Rua Alcindo Pereira', 'Centro', 2, '39740000', '(33) 3421-4506', '12345678901234', 'teste@teste.com', 'MG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itenscategoria`
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

CREATE TABLE `modalidades` (
  `modalidadesId` int(11) NOT NULL,
  `nome` varchar(20) COLLATE utf8_bin NOT NULL,
  `prazo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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

CREATE TABLE `produto_servico` (
  `id` int(11) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `valorAvista` float DEFAULT NULL,
  `valorAprazo` float DEFAULT NULL,
  `produtoAutoEscola` tinyint(1) NOT NULL,
  `empresasId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(3, 'Administrador1', '12345678989', '2017-10-21', '33988273723', 'Rua Sete, 110 ', 'Bela Vista', 1, '39740000', 'contato@solucoesquefacilitam.com.br', 1, 'admin', '202cb962ac59075b964b07152d234b70', 'MG', 1),
(4, 'João Victor Silva', '09218888620', '1988-01-08', '33988273723', 'Rua Sete, 110 ', 'Bela Vista', 2, '39740000', 'jvictorsilva@outlook.com', 2, 'jvictor', '202cb962ac59075b964b07152d234b70', 'MG', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria` (`categoria`);

--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`empresasId`),
  ADD KEY `cidadeId` (`cidadeId`);

--
-- Indexes for table `itenscategoria`
--
ALTER TABLE `itenscategoria`
  ADD PRIMARY KEY (`itensId`),
  ADD KEY `modalidadesId` (`modalidadesId`),
  ADD KEY `categoriasId` (`categoriasId`),
  ADD KEY `produtosId` (`produtosId`);

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
  ADD KEY `orcamentosId` (`itensorcamentoId`),
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
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contratos`
--
ALTER TABLE `contratos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `empresas`
--
ALTER TABLE `empresas`
  MODIFY `empresasId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `itenscategoria`
--
ALTER TABLE `itenscategoria`
  MODIFY `itensId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `itensorcamento`
--
ALTER TABLE `itensorcamento`
  MODIFY `itensId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `modalidades`
--
ALTER TABLE `modalidades`
  MODIFY `modalidadesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orcamentos`
--
ALTER TABLE `orcamentos`
  MODIFY `orcamentosId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `produto_servico`
--
ALTER TABLE `produto_servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `titulos`
--
ALTER TABLE `titulos`
  MODIFY `titulosId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- Limitadores para a tabela `contratos`
--
ALTER TABLE `contratos`
  ADD CONSTRAINT `fk_Categoria` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id`);

--
-- Limitadores para a tabela `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `empresas_ibfk_1` FOREIGN KEY (`cidadeId`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `itenscategoria`
--
ALTER TABLE `itenscategoria`
  ADD CONSTRAINT `itenscategoria_ibfk_1` FOREIGN KEY (`categoriasId`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `itenscategoria_ibfk_2` FOREIGN KEY (`produtosId`) REFERENCES `produto_servico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `itenscategoria_ibfk_3` FOREIGN KEY (`modalidadesId`) REFERENCES `modalidades` (`modalidadesId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `titulos_ibfk_2` FOREIGN KEY (`produtosId`) REFERENCES `produto_servico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `titulos_ibfk_3` FOREIGN KEY (`itensorcamentoId`) REFERENCES `itensorcamento` (`itensId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`empresasId`) REFERENCES `empresas` (`empresasId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`cidadeId`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
