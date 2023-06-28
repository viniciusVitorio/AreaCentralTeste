-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jun-2023 às 06:50
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tabler`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprodutos`
--

CREATE TABLE `tbprodutos` (
  `PROID` int(11) NOT NULL,
  `PRODESCRICAO` varchar(255) DEFAULT NULL,
  `PROVALORUNI` decimal(10,2) DEFAULT NULL,
  `PROESTOQUE` int(11) DEFAULT NULL,
  `PRODATAVENDA` date DEFAULT NULL,
  `PROTOTVENDA` decimal(10,2) DEFAULT 0.00,
  `PROEXCLUIDO` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbprodutos`
--

INSERT INTO `tbprodutos` (`PROID`, `PRODESCRICAO`, `PROVALORUNI`, `PROESTOQUE`, `PRODATAVENDA`, `PROTOTVENDA`, `PROEXCLUIDO`) VALUES
(1, 'Batata', '1.50', 1963, '2027-06-23', '75.00', 1),
(2, 'Cenoura', '2.00', 1480, '2027-06-23', '200.00', 0),
(3, 'Maçã', '3.00', 2988, '2028-06-23', '32.00', 0),
(12, 'Arroz', '10.00', 0, '2028-06-23', '200.00', 0),
(14, 'Coca Cola 2l', '8.00', 198, '2028-06-23', '10.00', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbvendas`
--

CREATE TABLE `tbvendas` (
  `VENID` int(11) NOT NULL,
  `VENDATA` date DEFAULT NULL,
  `PROID` int(11) DEFAULT NULL,
  `VENQUANTIDADE` int(11) DEFAULT NULL,
  `VENVALOR` decimal(10,2) DEFAULT NULL,
  `VENVALORTOTAL` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbvendas`
--

INSERT INTO `tbvendas` (`VENID`, `VENDATA`, `PROID`, `VENQUANTIDADE`, `VENVALOR`, `VENVALORTOTAL`) VALUES
(1, NULL, 1, 1, '1.00', '1.00'),
(2, NULL, 3, 21, '2.00', '42.00'),
(3, NULL, 1, 21, '21.00', '441.00'),
(4, NULL, 1, 21, '12.00', '252.00'),
(5, NULL, 1, 20, '5.00', '100.00'),
(6, NULL, 1, 21, '1.00', '21.00'),
(7, NULL, 1, 12, '2.00', '24.00'),
(8, NULL, 1, 12, '2.00', '24.00'),
(9, NULL, 1, 12, '2.00', '24.00'),
(10, NULL, 1, 12, '2.00', '24.00'),
(11, NULL, 1, 12, '2.00', '24.00'),
(12, NULL, 1, 12, '2.00', '24.00'),
(13, NULL, 1, 12, '2.00', '24.00'),
(14, NULL, 1, 12, '2.00', '24.00'),
(15, NULL, 1, 12, '2.00', '24.00'),
(16, NULL, 2, 20, '10.00', '200.00'),
(17, NULL, 1, 1, '3.00', '3.00'),
(18, NULL, 14, 2, '5.00', '10.00'),
(19, NULL, 12, 20, '10.00', '200.00'),
(20, NULL, 3, 10, '3.00', '30.00'),
(21, NULL, 3, 2, '1.00', '2.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  ADD PRIMARY KEY (`PROID`);

--
-- Índices para tabela `tbvendas`
--
ALTER TABLE `tbvendas`
  ADD PRIMARY KEY (`VENID`),
  ADD KEY `PROID` (`PROID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  MODIFY `PROID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tbvendas`
--
ALTER TABLE `tbvendas`
  MODIFY `VENID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbvendas`
--
ALTER TABLE `tbvendas`
  ADD CONSTRAINT `tbvendas_ibfk_1` FOREIGN KEY (`PROID`) REFERENCES `tbprodutos` (`PROID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
