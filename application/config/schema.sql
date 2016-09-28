-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 28/09/2016 às 19:10
-- Versão do servidor: 10.1.17-MariaDB
-- Versão do PHP: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_kairos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `contas_receber`
--

CREATE TABLE `contas_receber` (
  `id_conta_receber` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `obs` text,
  `dizimo` varchar(3) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `modifield` date DEFAULT NULL,
  `forma_recebimento` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `contas_receber`
--

INSERT INTO `contas_receber` (`id_conta_receber`, `nome`, `valor`, `data`, `obs`, `dizimo`, `created`, `modifield`, `forma_recebimento`) VALUES
(29, 'Economizou', '194.50', '2016-09-28', 'Economizei do mes passado', 'Não', '0000-00-00', '0000-00-00', ''),
(30, 'Salario', '1400.00', '2016-09-28', 'Salario absoluta veio descontado 100 reais que veio a mais mês passado', 'Sim', '0000-00-00', '0000-00-00', ''),
(31, 'Data System', '120.00', '2016-09-28', 'Salario Data system ', 'Sim', '0000-00-00', '0000-00-00', '');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `contas_receber`
--
ALTER TABLE `contas_receber`
  ADD PRIMARY KEY (`id_conta_receber`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `contas_receber`
--
ALTER TABLE `contas_receber`
  MODIFY `id_conta_receber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;