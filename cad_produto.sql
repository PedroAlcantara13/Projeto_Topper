-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Set-2018 às 21:49
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto-loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_produto`
--

CREATE TABLE `cad_produto` (
  `id` int(15) NOT NULL,
  `produto` varchar(40) NOT NULL,
  `preco` int(45) NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `arquivo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cad_produto`
--

INSERT INTO `cad_produto` (`id`, `produto`, `preco`, `categoria`, `arquivo`) VALUES
(1, 'Seila', 45, 'Kids', 'teste.jpg'),
(12, 'Moleton', 45, 'Men', 'teste.jpg'),
(14, 'Camisa', 90, 'Kids', 'teste.jpg'),
(15, 'teste', 212, 'Women', 'teste.jpg'),
(16, 'testeDnv', 12, 'Men', 'teste.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cad_produto`
--
ALTER TABLE `cad_produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cad_produto`
--
ALTER TABLE `cad_produto`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
