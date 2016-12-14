
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 14/12/2016 às 19:55:55
-- Versão do Servidor: 10.0.23-MariaDB
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u716439519_qi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Aluno`
--

CREATE TABLE IF NOT EXISTS `Aluno` (
  `RA` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Telefone` varchar(12) DEFAULT NULL,
  `Senha` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`RA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Aluno`
--

INSERT INTO `Aluno` (`RA`, `Nome`, `Email`, `Telefone`, `Senha`) VALUES
(20160801, 'LARRY PAGE', 'larry@google.com', '5199999991', '123456'),
(20160802, 'ELON MUSK', 'musk@tesla.com', '5199999992', '123456'),
(20160803, 'MICHAEL DELL', 'dell@dell.com', '5199999993', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Equipe`
--

CREATE TABLE IF NOT EXISTS `Equipe` (
  `Id_Equipe` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Telefone` varchar(12) DEFAULT NULL,
  `Senha` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`Id_Equipe`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `Equipe`
--

INSERT INTO `Equipe` (`Id_Equipe`, `Nome`, `Email`, `Telefone`, `Senha`) VALUES
(1, 'QUADRADO', 'QUADRADO@QI.EDU.BR', '5199999999', '123456'),
(2, 'MINUZZI', 'MINUZZI@QI.EDU.BR', '5199999999', '123456'),
(3, 'REUS', 'REUS@QI.EDU.BR', '5199999999', '123456'),
(4, 'VIEGAS', 'VIEGAS@QI.EDU.BR', '5199999999', '123456'),
(5, 'LANGER', 'LANGER@QI.EDU.BR', '5199999999', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Evento`
--

CREATE TABLE IF NOT EXISTS `Evento` (
  `Id_Evento` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `Dt_Inicial_Inscricao` date DEFAULT NULL,
  `Dt_Final_Inscricao` date DEFAULT NULL,
  `Dt_Inicial_Execucao` date DEFAULT NULL,
  `Dt_Final_Execucao` date DEFAULT NULL,
  `Dt_Final_Disponibilidade` date DEFAULT NULL,
  `Dt_Inicio_Disponibilidade` date DEFAULT NULL,
  `Imagem` varchar(255) DEFAULT NULL,
  `Id_Status` int(11) NOT NULL,
  PRIMARY KEY (`Id_Evento`),
  KEY `Id_Status` (`Id_Status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `Evento`
--

INSERT INTO `Evento` (`Id_Evento`, `Nome`, `Dt_Inicial_Inscricao`, `Dt_Final_Inscricao`, `Dt_Inicial_Execucao`, `Dt_Final_Execucao`, `Dt_Final_Disponibilidade`, `Dt_Inicio_Disponibilidade`, `Imagem`, `Id_Status`) VALUES
(1, 'SEMANA ACADEMICA', '2016-12-23', '2016-12-19', '2016-12-26', '2016-12-27', '2016-12-27', '2016-12-19', '/uploads/eventos/1481147990-qi.jpg', 1),
(2, 'SEMANA DE SEGURANCA FAQI', '2016-11-21', '2016-12-19', '2016-12-21', '2016-12-22', '2016-11-22', '2016-11-21', '/uploads/eventos/1481148722-qi.jpg', 1),
(3, 'EMPREENDEDORISMO', '2016-10-10', '2016-12-19', '2016-12-23', '2016-12-24', '2016-11-25', '2016-11-19', '/uploads/eventos/1481148671-qi.jpg', 1),
(4, 'SEGURANCA DE SOFTWARE', '2016-10-10', '2016-12-19', '2016-12-24', '2016-12-25', '2016-12-25', '2016-11-19', '/uploads/eventos/1481148854-qi.jpg', 1),
(5, 'HACKATHON - MARATONA DE PROGRAMACAO JAVA', '2016-10-10', '2016-12-10', '2016-12-27', '2016-12-28', '2016-12-28', '2016-11-25', '/uploads/eventos/1481149024-qi.jpg', 1),
(6, 'SEMANA PHP ', '2016-10-10', '2016-11-10', '2016-12-28', '2016-12-29', '2016-12-29', '2016-11-10', '/uploads/eventos/1481149151-qi.jpg', 1),
(7, 'BIBLIOTECA SOLIDÁRIA', '2016-12-01', '2016-12-15', '2016-12-29', '2016-12-30', '2016-12-30', '2016-12-12', '/uploads/eventos/1481149272-qi.jpg', 1),
(8, 'MARKETING', '2016-11-03', '2016-11-30', '2016-12-19', '2016-12-20', '2016-12-20', '2016-11-30', '/uploads/eventos/1481149410-qi.jpg', 1),
(9, 'GESTAO DE NEGOCIOS', '2016-10-20', '2016-11-18', '2016-12-20', '2016-12-21', '2016-12-21', '2016-11-18', '/uploads/eventos/1481149513-qi.jpg', 1),
(10, 'GESTAO DE PESSOAS', '2016-10-05', '2016-11-07', '2017-01-04', '2017-01-05', '2017-01-05', '2016-11-07', '/uploads/eventos/1481149539-qi.jpg', 1),
(11, 'SEMANA DO MEIO AMBIENTE', '2016-10-03', '2016-11-03', '2016-12-22', '2016-12-23', '2016-12-23', '2016-11-03', '/uploads/eventos/1481149617-qi.jpg', 1),
(13, 'SEMANA DA ROBÓTICA', '2016-10-03', '2016-12-16', '2016-12-16', '2016-12-17', '2016-12-17', '2016-12-12', '/uploads/eventos/1481150162-qi.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Ministra`
--

CREATE TABLE IF NOT EXISTS `Ministra` (
  `Id_Palestrante` int(11) NOT NULL DEFAULT '0',
  `Id_Palestra` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id_Palestrante`,`Id_Palestra`),
  KEY `Id_Palestra` (`Id_Palestra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Ministra`
--

INSERT INTO `Ministra` (`Id_Palestrante`, `Id_Palestra`) VALUES
(5, 1),
(5, 8),
(5, 14),
(5, 20),
(5, 25),
(6, 2),
(6, 9),
(6, 15),
(6, 21),
(7, 3),
(7, 10),
(7, 16),
(7, 21),
(11, 5),
(11, 11),
(11, 17),
(11, 22),
(12, 6),
(12, 12),
(12, 18),
(12, 23),
(13, 7),
(13, 13),
(13, 19),
(13, 24);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Palestra`
--

CREATE TABLE IF NOT EXISTS `Palestra` (
  `Id_Palestra` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(50) DEFAULT NULL,
  `DataHora` datetime DEFAULT NULL,
  `Imagem` varchar(255) DEFAULT NULL,
  `Descricao` text,
  `Conteudo` varchar(100) DEFAULT NULL,
  `Id_Evento` int(11) DEFAULT NULL,
  `Id_Sala` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Palestra`),
  KEY `Id_Evento` (`Id_Evento`),
  KEY `Id_Sala` (`Id_Sala`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Extraindo dados da tabela `Palestra`
--

INSERT INTO `Palestra` (`Id_Palestra`, `Titulo`, `DataHora`, `Imagem`, `Descricao`, `Conteudo`, `Id_Evento`, `Id_Sala`) VALUES
(1, 'A INTERNET DAS COISAS', '2016-12-21 14:00:00', '/uploads/palestras/1481150715-qi.jpg', 'A INTERNET DAS COISAS', '', 2, 3),
(2, 'PRIVACIDADE NA INTERNET 2.0', '2016-12-22 19:00:00', '/uploads/palestras/1481150700-qi.jpg', 'PRIVACIDADE NA INTERNET 2.0', '', 2, 2),
(3, 'CRIANDO STARTUPS RENTAVEIS', '2016-12-23 09:00:00', '/uploads/palestras/1481150659-qi.jpg', 'CRIANDO STARTUPS RENTAVEIS', '', 3, 3),
(5, 'COMO SER EMPREENDEDOR', '2016-12-23 19:00:00', '/uploads/palestras/1481150642-qi.jpg', 'COMO SER EMPREENDEDOR', '', 3, 2),
(6, 'COMO CRIAR UM SOFTWARE COM SEGURANÇA', '2016-12-24 09:00:00', '/uploads/palestras/1481150623-qi.jpg', 'COMO CRIAR UM SOFTWARE COM SEGURANÇA', '', 4, 3),
(7, 'COMO DESCOBRIR SE UM SOFTWARE É SEGURO', '2016-12-23 19:00:00', '/uploads/palestras/1481150579-qi.jpg', 'COMO DESCOBRIR SE UM SOFTWARE É SEGURO', '', 4, 1),
(8, 'PALESTRA MOTIVACIONAL', '2016-12-26 09:00:00', '/uploads/palestras/1481152690-qi.jpg', 'PALESTRA MOTIVACIONAL', '', 1, 3),
(9, 'CRIATIVIDADE E INOVAÇÃO', '2016-12-27 09:00:00', '/uploads/palestras/1481152722-qi.jpg', 'CRIATIVIDADE E INOVAÇÃO', '', 1, 2),
(10, 'COMO PROGRAMAR JAVA SEM ERRO', '2016-12-27 14:00:00', '/uploads/palestras/1481152775-qi.jpg', 'COMO PROGRAMAR JAVA SEM ERRO', '', 5, 3),
(11, 'PROGRAMAÇÃO DE GAMES', '2016-12-27 19:00:00', '/uploads/palestras/1481152906-qi.jpg', 'PROGRAMAÇÃO DE GAMES', '', 5, 2),
(12, 'HTML COMO VOCÊ NUNCA VIU ', '2016-12-28 09:00:00', '/uploads/palestras/1481152944-qi.jpg', 'HTML COMO VOCÊ NUNCA VIU ', '', 6, 3),
(13, 'HTML + BANCO DE DADOS = CONHECIMENTO AVANÇADO', '2016-12-28 19:00:00', '/uploads/palestras/1481152993-qi.jpg', 'HTML + BANCO DE DADOS = CONHECIMENTO AVANÇADO', '', 6, 1),
(14, 'COMO DESENVOLVER UMA RESENHA ', '2016-12-29 07:00:00', '/uploads/palestras/1481153058-qi.jpg', 'COMO DESENVOLVER UMA RESENHA ', '', 7, 2),
(15, 'PORQUÊ LER É UMA TERAPIA? ', '2016-12-29 19:00:00', '/uploads/palestras/1481153149-qi.jpg', 'PORQUÊ LER É UMA TERAPIA? ', '', 7, 3),
(16, 'MARKETING E VENDAS', '2016-12-19 08:00:00', '/uploads/palestras/1481153218-qi.jpg', 'MARKETING E VENDAS', '', 8, 1),
(17, 'MARKETING PESSOAL', '2016-12-19 19:00:00', '/uploads/palestras/1481153244-qi.jpg', 'MARKETING PESSOAL', '', 8, 1),
(18, 'AMBIENTE ORGANIZACIONAL', '2016-12-20 08:00:00', '/uploads/palestras/1481153305-qi.jpg', 'AMBIENTE ORGANIZACIONAL', '', 9, 1),
(19, 'RESULTADO NÃO É MÁGICA  - É INOVAÇÃO', '2016-12-20 19:00:00', '/uploads/palestras/1481153326-qi.jpg', 'RESULTADO NÃO É MÁGICA  - É INOVAÇÃO', '', 9, 3),
(20, 'LIDERANÇA VENCEDORA - COLOCANDO PESSOAS NO CAMINHO', '2017-01-04 08:00:00', '/uploads/palestras/1481153436-qi.jpg', 'LIDERANÇA VENCEDORA - COLOCANDO PESSOAS NO CAMINHO DO RESULTADO', '', 10, 1),
(21, 'EQUIPES DE ALTO DESEMPENHO', '2016-12-21 19:00:00', '/uploads/palestras/1481153534-qi.jpg', 'EQUIPES DE ALTO DESEMPENHO', '', 10, 3),
(22, 'DIFERENTE É SER SUSTENTÁVEL', '2016-12-22 08:00:00', '/uploads/palestras/1481153587-qi.jpg', 'DIFERENTE É SER SUSTENTÁVEL', '', 11, 1),
(23, 'SUSTENTABILIDADE COMO VOCÊ NUNCA VIU', '2016-12-22 19:00:00', '/uploads/palestras/1481153649-qi.jpg', 'SUSTENTABILIDADE COMO VOCÊ NUNCA VIU', '', 11, 3),
(24, 'A ERA DOS ROBÔS', '2016-12-16 19:00:00', '/uploads/palestras/1481153701-qi.jpg', 'A ERA DOS ROBÔS', '', 13, 3),
(25, 'ROBÔS: MÁQUINAS OU INTELIGÊNCIA? ', '2016-12-16 08:00:00', '/uploads/palestras/1481153728-qi.jpg', 'ROBÔ: MÁQUINA OU INTELIGÊNCIA? ', '', 13, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Palestrante`
--

CREATE TABLE IF NOT EXISTS `Palestrante` (
  `Id_Palestrante` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `Minicurriculo` text,
  `Foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Palestrante`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `Palestrante`
--

INSERT INTO `Palestrante` (`Id_Palestrante`, `Nome`, `Minicurriculo`, `Foto`) VALUES
(5, 'MARK ZUCKERBERG', 'Mark Elliot Zuckerberg -  Programador e empresario norte-americano, que ficou conhecido internacionalmente por ser um dos fundadores do Facebook, a maior rede social do mundo.', '/uploads/palestrantes/1481155217-Mark_Zuckerberg_at_the_37th_G8_Summit_in_Deauville_018_v1.jpg'),
(6, 'BILL GATES', 'William Henry Gates III,  conhecido como Bill Gates, é um magnata, filantropo e autor norte-americano, que ficou conhecido por fundar junto com Paul Allen a Microsoft, a maior e mais conhecida empresa', '/uploads/palestrantes/1481250343-billg1_print.jpg'),
(7, 'STEVE JOBS', 'Steven Paul Jobs foi um inventor, empresário e magnata americano no setor da informática. Notabilizou-se como cofundador, presidente e diretor executivo da Apple Inc.', '/uploads/palestrantes/1481250537-SteveJobs.jpg'),
(11, 'MR. ROBOT', 'Elliot Alderson, um engenheiro de software na Allsafe Cybersecurity e um hacker vigilante. Ele tem transtorno de ansiedade social e depressão crônica que faz com que ele viva isolado das outras pessoas', '/uploads/palestrantes/1481154808-rami-malek.jpg'),
(12, 'PAUL ALLEN', 'Paul Gardner Allen é um empresário e filantropo americano. Em parceria com Bill Gates, foi fundador da Microsoft, a maior e mais conhecida empresa de software do mundo.', '/uploads/palestrantes/1481155094-960x0.jpg'),
(13, 'SIR ANDREW', 'Sir Andrew John Wiles é um matemático britânico. Professor na Universidade de Princeton, famoso por ter demonstrado, com a colaboração de Richard Lawrence Taylor, o Último Teorema de Fermat, em 1994.', '/uploads/palestrantes/1481155380-610-600x840.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Palestra_Recurso`
--

CREATE TABLE IF NOT EXISTS `Palestra_Recurso` (
  `Id_Palestra` int(11) NOT NULL DEFAULT '0',
  `Id_Recurso` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id_Palestra`,`Id_Recurso`),
  KEY `Id_Recurso` (`Id_Recurso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Palestra_Recurso`
--

INSERT INTO `Palestra_Recurso` (`Id_Palestra`, `Id_Recurso`) VALUES
(1, 1),
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Participa`
--

CREATE TABLE IF NOT EXISTS `Participa` (
  `RA` int(11) NOT NULL DEFAULT '0',
  `Id_Palestra` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`RA`,`Id_Palestra`),
  KEY `Id_Palestra` (`Id_Palestra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Participa`
--

INSERT INTO `Participa` (`RA`, `Id_Palestra`) VALUES
(20160801, 1),
(20160802, 1),
(20160803, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Recurso`
--

CREATE TABLE IF NOT EXISTS `Recurso` (
  `Id_Recurso` int(11) NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(50) DEFAULT NULL,
  `Quantidade` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Recurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `Recurso`
--

INSERT INTO `Recurso` (`Id_Recurso`, `Descricao`, `Quantidade`) VALUES
(1, 'PROJETOR', 10),
(2, 'NOTEBOOK', 5),
(3, 'FLIP CHART', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Sala`
--

CREATE TABLE IF NOT EXISTS `Sala` (
  `Id_Sala` int(11) NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(50) DEFAULT NULL,
  `Adaptada` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`Id_Sala`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `Sala`
--

INSERT INTO `Sala` (`Id_Sala`, `Descricao`, `Adaptada`) VALUES
(1, 'AUDITORIO POA TERREO', 'SIM'),
(2, ' AUDITORIO POA 2? ANDAR ', 'SIM'),
(3, 'AUDITORIO POA 3? ANDAR', 'NAO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Status`
--

CREATE TABLE IF NOT EXISTS `Status` (
  `Id_Status` int(11) NOT NULL,
  `Descricao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Status`
--

INSERT INTO `Status` (`Id_Status`, `Descricao`) VALUES
(1, 'Aberto'),
(2, 'Em andamento'),
(3, 'Concluido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'administrador@gmail.com', '$2y$10$zjhbV9eDVuP271iZnOLEwOWZYanFXI5Yy3MR.35b/Y./T1IqdSxQS', 'yXm14csAYZQSHi2rLyhtJZfXgjPq1UaJ0ZAFQxOEoCnlTXsTCOl0b3fmPrvi', '2016-12-04 23:55:09', '2016-12-13 00:23:52');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Utiliza`
--

CREATE TABLE IF NOT EXISTS `Utiliza` (
  `Id_Palestra` int(11) NOT NULL DEFAULT '0',
  `Id_Equipe` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id_Palestra`,`Id_Equipe`),
  KEY `Id_Equipe` (`Id_Equipe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Utiliza`
--

INSERT INTO `Utiliza` (`Id_Palestra`, `Id_Equipe`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `Evento`
--
ALTER TABLE `Evento`
  ADD CONSTRAINT `Evento_ibfk_1` FOREIGN KEY (`Id_Status`) REFERENCES `Status` (`Id_Status`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `Ministra`
--
ALTER TABLE `Ministra`
  ADD CONSTRAINT `Ministra_ibfk_1` FOREIGN KEY (`Id_Palestrante`) REFERENCES `Palestrante` (`Id_Palestrante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Ministra_ibfk_2` FOREIGN KEY (`Id_Palestra`) REFERENCES `Palestra` (`Id_Palestra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `Palestra`
--
ALTER TABLE `Palestra`
  ADD CONSTRAINT `Palestra_ibfk_1` FOREIGN KEY (`Id_Evento`) REFERENCES `Evento` (`Id_Evento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Palestra_ibfk_2` FOREIGN KEY (`Id_Sala`) REFERENCES `Sala` (`Id_Sala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `Palestra_Recurso`
--
ALTER TABLE `Palestra_Recurso`
  ADD CONSTRAINT `Palestra_Recurso_ibfk_1` FOREIGN KEY (`Id_Palestra`) REFERENCES `Palestra` (`Id_Palestra`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Palestra_Recurso_ibfk_2` FOREIGN KEY (`Id_Recurso`) REFERENCES `Recurso` (`Id_Recurso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `Participa`
--
ALTER TABLE `Participa`
  ADD CONSTRAINT `Participa_ibfk_1` FOREIGN KEY (`RA`) REFERENCES `Aluno` (`RA`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Participa_ibfk_2` FOREIGN KEY (`Id_Palestra`) REFERENCES `Palestra` (`Id_Palestra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `Utiliza`
--
ALTER TABLE `Utiliza`
  ADD CONSTRAINT `Utiliza_ibfk_1` FOREIGN KEY (`Id_Palestra`) REFERENCES `Palestra` (`Id_Palestra`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Utiliza_ibfk_2` FOREIGN KEY (`Id_Equipe`) REFERENCES `Equipe` (`Id_Equipe`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
