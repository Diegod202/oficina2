-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 07/12/2023 às 22:59
-- Versão do servidor: 10.4.22-MariaDB
-- Versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `oficina`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `email`, `telefone`, `rua`) VALUES
(1, 'samira', 'samirafranca@email.com', '(88) 1567-4321', 'Rua dos gatos, 123'),
(2, 'ana', 'anasales@email.com', '(11) 1234-5678', 'rua dora aventureira'),
(3, 'diego', 'diegooliveira@email.com', '(11) 5555-9999', 'rua dos carros'),
(4, 'tales', 'talesramos@email.com', '(11) 2222-8888', 'rua das florestas'),
(5, 'erica', 'ericafranca@email.com', '(11) 9876-5432', 'avenida dos carros'),
(6, 'emanuele', 'emanuelefranca@email.com', '(11) 7777-3333', 'rua dos motores'),
(7, 'joao', 'joaosilva@email.com', '(11) 6286-5432', 'travessa das rodas'),
(8, 'arthur', 'arthurfranca@email.com', '(11) 9876-9537', 'rua dos papagaio '),
(9, 'emyliano', 'emylianocarvalho@email.com', '(11) 2829-0174', 'rua das calops'),
(10, 'pryncy', 'pryncyserafim@ifce', '(11) 0475-3652', 'rua dos ramos ');

-- --------------------------------------------------------

--
-- Estrutura para tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `id_veiculo` int(11) NOT NULL,
  `ano` varchar(50) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `placa` varchar(10) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `veiculos`
--

INSERT INTO `veiculos` (`id_veiculo`, `ano`, `modelo`, `marca`, `placa`, `id_cliente`) VALUES
(1, '2019', 'altima', 'nissan', 'ABC-1234', 1),
(2, '2016', 'Uno', 'Fiat', 'DEF5678', 2),
(3, '2022', 'silvia s15', 'nissan', 'GHI9012', 3),
(4, '2018', 'HB20', 'hyundai', 'JKL3456', 4),
(5, '2021', 'Corolla', 'Toyota', 'MNO7890', 5),
(6, '2017', 'Renegade', 'Jeep', 'PQR1234', 6),
(7, '2023', '320 i', 'BMW', 'STU5678', 7),
(8, '2016', 'challenger ', 'Dodge', 'VWX9012', 8),
(9, '2020', 'Chevelle', 'Chevrolet', 'YZA3456', 9),
(10, '2019', 'chevette', 'Chevrolet', 'BCD7890', 10);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`id_veiculo`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id_veiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `veiculos`
--
ALTER TABLE `veiculos`
  ADD CONSTRAINT `veiculos_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
