-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 07/12/2016 às 18:18
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
  `Imagem` varchar(255) DEFAULT NULL,
  `Id_Status` int(11) NOT NULL,
  PRIMARY KEY (`Id_Evento`),
  KEY `Id_Status` (`Id_Status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Fazendo dump de dados para tabela `Evento`
--

INSERT INTO `Evento` (`Id_Evento`, `Nome`, `Dt_Inicial_Inscricao`, `Dt_Final_Inscricao`, `Dt_Inicial_Execucao`, `Dt_Final_Execucao`, `Dt_Final_Disponibilidade`, `Dt_Inicio_Disponibilidade`, `Imagem`, `Id_Status`) VALUES
(1, 'SEMANA ACADEMICA', '2016-09-01', '2016-10-15', '2016-11-20', '2016-11-24', '2016-11-25', '2016-11-19', '/uploads/eventos/1481127352-UniversidadesFoto148@mbmw600mh450mcwmch.jpg', 3),
(2, 'SEMANA DE SEGURAN?A FAQI', '2016-10-01', '2016-11-15', '2016-11-20', '2016-11-24', '2016-11-25', '2016-11-19', '/uploads/eventos/1481127367-imagem12.jpg', 1),
(3, 'EMPREENDEDORISMO', '2016-08-01', '2016-08-25', '2016-11-20', '2016-11-24', '2016-11-25', '2016-11-19', '/uploads/eventos/1481127384-imagem3.jpg', 2);

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `Evento`
--
ALTER TABLE `Evento`
  ADD CONSTRAINT `Evento_ibfk_1` FOREIGN KEY (`Id_Status`) REFERENCES `Status` (`Id_Status`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
