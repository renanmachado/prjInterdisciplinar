-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 04/12/2016 às 22:39
-- Versão do servidor: 5.6.31-0ubuntu0.14.04.2
-- Versão do PHP: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `EVENTOQI`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Aluno`
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
-- Fazendo dump de dados para tabela `Aluno`
--

INSERT INTO `Aluno` (`RA`, `Nome`, `Email`, `Telefone`, `Senha`) VALUES
(20160801, 'LARRY PAGE', 'larry@google.com', '5199999991', '123456'),
(20160802, 'ELON MUSK', 'musk@tesla.com', '5199999992', '123456'),
(20160803, 'MICHAEL DELL', 'dell@dell.com', '5199999993', '123456');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Equipe`
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
-- Fazendo dump de dados para tabela `Equipe`
--

INSERT INTO `Equipe` (`Id_Equipe`, `Nome`, `Email`, `Telefone`, `Senha`) VALUES
(1, 'QUADRADO', 'QUADRADO@QI.EDU.BR', '5199999999', '123456'),
(2, 'MINUZZI', 'MINUZZI@QI.EDU.BR', '5199999999', '123456'),
(3, 'REUS', 'REUS@QI.EDU.BR', '5199999999', '123456'),
(4, 'VIEGAS', 'VIEGAS@QI.EDU.BR', '5199999999', '123456'),
(5, 'LANGER', 'LANGER@QI.EDU.BR', '5199999999', '123456');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Evento`
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
  `Imagem` varchar(50) DEFAULT NULL,
  `Id_Status` int(11) NOT NULL,
  PRIMARY KEY (`Id_Evento`),
  KEY `Id_Status` (`Id_Status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Fazendo dump de dados para tabela `Evento`
--

INSERT INTO `Evento` (`Id_Evento`, `Nome`, `Dt_Inicial_Inscricao`, `Dt_Final_Inscricao`, `Dt_Inicial_Execucao`, `Dt_Final_Execucao`, `Dt_Final_Disponibilidade`, `Dt_Inicio_Disponibilidade`, `Imagem`, `Id_Status`) VALUES
(1, 'SEMANA ACADEMICA', '2016-09-01', '2016-10-15', '2016-11-20', '2016-11-24', '2016-11-25', '2016-11-19', '/uploads/eventos/1480889596-example.png', 3),
(2, 'SEMANA DE SEGURAN?A FAQI', '2016-10-01', '2016-11-15', '2016-11-20', '2016-11-24', '2016-11-25', '2016-11-19', NULL, 1),
(3, 'EMPREENDEDORISMO', '2016-08-01', '2016-08-25', '2016-11-20', '2016-11-24', '2016-11-25', '2016-11-19', NULL, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Ministra`
--

CREATE TABLE IF NOT EXISTS `Ministra` (
  `Id_Palestrante` int(11) NOT NULL DEFAULT '0',
  `Id_Palestra` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id_Palestrante`,`Id_Palestra`),
  KEY `Id_Palestra` (`Id_Palestra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `Ministra`
--

INSERT INTO `Ministra` (`Id_Palestrante`, `Id_Palestra`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Palestra`
--

CREATE TABLE IF NOT EXISTS `Palestra` (
  `Id_Palestra` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(50) DEFAULT NULL,
  `DataHora` datetime DEFAULT NULL,
  `Imagem` varchar(50) DEFAULT NULL,
  `Descricao` text,
  `Conteudo` varchar(100) DEFAULT NULL,
  `Id_Evento` int(11) DEFAULT NULL,
  `Id_Sala` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Palestra`),
  KEY `Id_Evento` (`Id_Evento`),
  KEY `Id_Sala` (`Id_Sala`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Fazendo dump de dados para tabela `Palestra`
--

INSERT INTO `Palestra` (`Id_Palestra`, `Titulo`, `DataHora`, `Imagem`, `Descricao`, `Conteudo`, `Id_Evento`, `Id_Sala`) VALUES
(1, 'A INTERNET DAS COISAS', '2016-12-14 01:00:00', '/uploads/palestras/1480895737-example.png', 'A INTERNET DAS COISAS', 'A INTERNET DAS COISAS bom', 2, 3),
(2, 'PRIVACIDADE NA INTERNET 2.0', '2016-12-14 00:00:00', NULL, 'PRIVACIDADE NA INTERNET 2.0', NULL, 2, 2),
(3, 'CRIANDO STARTUPS RENTAVEIS', '2016-12-30 00:00:00', NULL, 'CRIANDO STARTUPS RENTAVEIS', NULL, 3, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Palestrante`
--

CREATE TABLE IF NOT EXISTS `Palestrante` (
  `Id_Palestrante` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `Minicurriculo` text,
  `Foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Palestrante`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Fazendo dump de dados para tabela `Palestrante`
--

INSERT INTO `Palestrante` (`Id_Palestrante`, `Nome`, `Minicurriculo`, `Foto`) VALUES
(1, 'MARK ZUKERBERG', 'Mark Elliot Zuckerberg ? um programador e empres?rio norte-americano, que ficou conhecido internacionalmente por ser um dos fundadores do Facebook, a maior rede social do mundo.', '/uploads/palestrantes/1480892763-example.png'),
(4, 'Renan', 'Sabe tudo!', '/uploads/palestrantes/1480893086-example.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Palestra_Recurso`
--

CREATE TABLE IF NOT EXISTS `Palestra_Recurso` (
  `Id_Palestra` int(11) NOT NULL DEFAULT '0',
  `Id_Recurso` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id_Palestra`,`Id_Recurso`),
  KEY `Id_Recurso` (`Id_Recurso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `Palestra_Recurso`
--

INSERT INTO `Palestra_Recurso` (`Id_Palestra`, `Id_Recurso`) VALUES
(1, 1),
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Participa`
--

CREATE TABLE IF NOT EXISTS `Participa` (
  `RA` int(11) NOT NULL DEFAULT '0',
  `Id_Palestra` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`RA`,`Id_Palestra`),
  KEY `Id_Palestra` (`Id_Palestra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `Participa`
--

INSERT INTO `Participa` (`RA`, `Id_Palestra`) VALUES
(20160801, 1),
(20160802, 2),
(20160803, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_resets`
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
-- Estrutura para tabela `Recurso`
--

CREATE TABLE IF NOT EXISTS `Recurso` (
  `Id_Recurso` int(11) NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(50) DEFAULT NULL,
  `Quantidade` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Recurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Fazendo dump de dados para tabela `Recurso`
--

INSERT INTO `Recurso` (`Id_Recurso`, `Descricao`, `Quantidade`) VALUES
(1, 'PROJETOR', 10),
(2, 'NOTEBOOK', 5),
(3, 'FLIP CHART', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Sala`
--

CREATE TABLE IF NOT EXISTS `Sala` (
  `Id_Sala` int(11) NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(50) DEFAULT NULL,
  `Adaptada` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`Id_Sala`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Fazendo dump de dados para tabela `Sala`
--

INSERT INTO `Sala` (`Id_Sala`, `Descricao`, `Adaptada`) VALUES
(1, 'AUDITORIO POA TERREO', 'SIM'),
(2, 'AUDITORIO POA 2? ANDAR', 'NAO'),
(3, 'AUDITORIO POA 3? ANDAR', 'NAO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Status`
--

CREATE TABLE IF NOT EXISTS `Status` (
  `Id_Status` int(11) NOT NULL,
  `Descricao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `Status`
--

INSERT INTO `Status` (`Id_Status`, `Descricao`) VALUES
(1, 'Aberto'),
(2, 'Em andamento'),
(3, 'Concluido');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
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
-- Fazendo dump de dados para tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'administrador@gmail.com', '$2y$10$zjhbV9eDVuP271iZnOLEwOWZYanFXI5Yy3MR.35b/Y./T1IqdSxQS', '7Squ7D83drMXqUkinKzXbMCLriHxQKQScJfkIb4zlfQdicotZsJIoqxfFjDq', '2016-12-04 23:55:09', '2016-12-04 23:55:47');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Utiliza`
--

CREATE TABLE IF NOT EXISTS `Utiliza` (
  `Id_Palestra` int(11) NOT NULL DEFAULT '0',
  `Id_Equipe` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id_Palestra`,`Id_Equipe`),
  KEY `Id_Equipe` (`Id_Equipe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `Utiliza`
--

INSERT INTO `Utiliza` (`Id_Palestra`, `Id_Equipe`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4);

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `Evento`
--
ALTER TABLE `Evento`
  ADD CONSTRAINT `Evento_ibfk_1` FOREIGN KEY (`Id_Status`) REFERENCES `Status` (`Id_Status`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `Ministra`
--
ALTER TABLE `Ministra`
  ADD CONSTRAINT `Ministra_ibfk_1` FOREIGN KEY (`Id_Palestrante`) REFERENCES `Palestrante` (`Id_Palestrante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Ministra_ibfk_2` FOREIGN KEY (`Id_Palestra`) REFERENCES `Palestra` (`Id_Palestra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `Palestra`
--
ALTER TABLE `Palestra`
  ADD CONSTRAINT `Palestra_ibfk_1` FOREIGN KEY (`Id_Evento`) REFERENCES `Evento` (`Id_Evento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Palestra_ibfk_2` FOREIGN KEY (`Id_Sala`) REFERENCES `Sala` (`Id_Sala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `Palestra_Recurso`
--
ALTER TABLE `Palestra_Recurso`
  ADD CONSTRAINT `Palestra_Recurso_ibfk_1` FOREIGN KEY (`Id_Palestra`) REFERENCES `Palestra` (`Id_Palestra`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Palestra_Recurso_ibfk_2` FOREIGN KEY (`Id_Recurso`) REFERENCES `Recurso` (`Id_Recurso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `Participa`
--
ALTER TABLE `Participa`
  ADD CONSTRAINT `Participa_ibfk_1` FOREIGN KEY (`RA`) REFERENCES `Aluno` (`RA`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Participa_ibfk_2` FOREIGN KEY (`Id_Palestra`) REFERENCES `Palestra` (`Id_Palestra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `Utiliza`
--
ALTER TABLE `Utiliza`
  ADD CONSTRAINT `Utiliza_ibfk_1` FOREIGN KEY (`Id_Palestra`) REFERENCES `Palestra` (`Id_Palestra`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Utiliza_ibfk_2` FOREIGN KEY (`Id_Equipe`) REFERENCES `Equipe` (`Id_Equipe`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
