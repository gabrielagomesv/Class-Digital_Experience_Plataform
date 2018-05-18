-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Maio-2018 às 15:53
-- Versão do servidor: 5.7.20-log
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `cat_id` int(10) NOT NULL,
  `cat_nome` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`cat_id`, `cat_nome`) VALUES
(1, 'Design'),
(2, 'Desenvolvimento'),
(3, 'Empreendedorismo'),
(4, 'Redes'),
(5, 'IoT'),
(6, 'bla'),
(12, 'fdgdfgd'),
(13, 'fdgdfgd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `post_id` int(5) NOT NULL,
  `post_titulo` varchar(255) NOT NULL,
  `post_autor` varchar(100) NOT NULL,
  `post_imagem` text NOT NULL,
  `post_data` date NOT NULL,
  `post_conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`post_id`, `post_titulo`, `post_autor`, `post_imagem`, `post_data`, `post_conteudo`) VALUES
(1, 'Aula11 - PHP', 'Gabriela Gomes Vieira', 'cms_post_image1.jpg', '2018-04-20', 'Adipisicing ut commodo anim aliqua. Consequat incididunt dolore adipisicing elit nostrud pariatur ullamco mollit pariatur do occaecat ullamco eiusmod nisi. Id do occaecat est reprehenderit Lorem aute ad pariatur nisi labore.'),
(2, 'Culinária', 'Maria Braga', 'louro.jpg', '2018-04-20', 'Sint Lorem ad commodo proident amet tempor pariatur consequat. Eu veniam velit nostrud pariatur nulla deserunt. Deserunt excepteur proident voluptate pariatur nostrud ipsum consectetur amet cupidatat excepteur non. Cupidatat laboris incididunt anim minim id magna laborum reprehenderit nisi ipsum mollit cupidatat.\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_password` varchar(45) NOT NULL,
  `user_role` varchar(180) NOT NULL,
  `user_nome` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`user_id`, `username`, `user_password`, `user_role`, `user_nome`) VALUES
(1, 'teste', 'teste', 'teste', 'teste');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
