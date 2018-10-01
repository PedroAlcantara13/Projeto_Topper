-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Out-2018 às 19:42
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
  `arquivo` varchar(250) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `quantidade` int(40) NOT NULL,
  `arquivo2` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cad_produto`
--

INSERT INTO `cad_produto` (`id`, `produto`, `preco`, `categoria`, `arquivo`, `descricao`, `quantidade`, `arquivo2`) VALUES
(41, 'Camisa - SÃ£o Paulo Celeste', 45, 'Men', '0.08093700 1537881706.jpg', 'Camisa Oficial dos Bambis.', 24, '0.08270600 1537881706.jpg'),
(42, 'Camisa - Corinthians SÃ£o Jorge', 200, 'Men', '0.48614000 1537883321.jpg', 'Camisa Oficial dos Gambas', 22, '0.48822500 1537883321.jpg'),
(43, 'CalÃ§a - Leggin ', 90, 'Women', '0.88830500 1537883384.jpg', 'CalÃ§a Leggin Malha que estica', 12, '0.89146800 1537883384.jpg'),
(44, 'Camisa - Botafogo Branca', 250, 'Men', '0.55417200 1537883475.jpg', 'Camisa Oficial dos Lixos.Sem o Patrocine-o do Felipe Netto', 10, '0.55560000 1537883475.jpg'),
(45, 'TÃªnis Infantil', 70, 'Women', '0.57277600 1537885264.jpg', 'tÃªnis infantil', 13, '0.57436500 1537885264.jpg'),
(46, 'Camisa - SÃ£o Paulo Listrada', 250, 'Men', '0.42893100 1537885408.jpg', 'Camisa Oficial do SÃ¢o Paulo.', 8, '0.43302100 1537885408.jpg'),
(47, 'Camisa - Real Madrid ', 120, 'Men', '0.16649100 1538411738.jpg', 'Camisa de Aquecimento do Real Madrid', 20, '0.16891800 1538411738.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `assunto` varchar(500) NOT NULL,
  `tel` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacao`
--

CREATE TABLE `notificacao` (
  `id` int(11) NOT NULL,
  `id_contato` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `notificacao`
--

INSERT INTO `notificacao` (`id`, `id_contato`, `status`) VALUES
(1, 3, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_admin`
--

CREATE TABLE `users_admin` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `url_img` varchar(36) NOT NULL,
  `nivel` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users_admin`
--

INSERT INTO `users_admin` (`id`, `nome`, `usuario`, `senha`, `email`, `url_img`, `nivel`) VALUES
(2, 'Pedro Alcantara', 'pedro', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'alcantarap37@gmail.com', 'user.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cad_produto`
--
ALTER TABLE `cad_produto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notificacao`
--
ALTER TABLE `notificacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_admin`
--
ALTER TABLE `users_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cad_produto`
--
ALTER TABLE `cad_produto`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notificacao`
--
ALTER TABLE `notificacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_admin`
--
ALTER TABLE `users_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
