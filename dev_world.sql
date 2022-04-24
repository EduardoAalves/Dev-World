-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 24-Abr-2022 às 23:50
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dev world`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(300) NOT NULL,
  `id_content` int(11) NOT NULL,
  `email_user` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_content` (`id_content`),
  KEY `email_user` (`email_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `description` varchar(1300) NOT NULL,
  `rating` int(11) NOT NULL,
  `email_user` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email_user` (`email_user`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `content`
--

INSERT INTO `content` (`id`, `title`, `description`, `rating`, `email_user`) VALUES
(3, 'HTML 5', '<p>Um desenvolvedor front-end precisava dominar só o HTML, o CSS e JavaScript para ter uma boa colocação no mercado. Claramente, outras coisas eram incluídas nesse \"só\", como por exemplo: responsividade, semântica do HTML, acessibilidade, performance entre outras. Mas tudo girava em torno das três tecnologias principais.\r\n</p><p>A web mudou. Entraram outras habilidades como versionamento de arquivos, automatização de tarefas, pré processadores, bibliotecas, frameworks, NodeJS e gerenciador de pacotes, para citar alguns. Mas a base de tudo ainda gira em torno das três tecnologias principais.</p><p>Isso quer dizer que não importa a época ou a tecnologia, a base sempre vai ser a mesma. Então antes de pular para o tão famoso framework, temos que aprender a base dele para realmente entender o que está por trás dos panos. Sei que encontrar material de qualidade e com uma linguagem simples para quem está começando não é uma tarefa muito fácil. Com essa premissa em mente, criei esse e-book onde irei ensinar alguns fundamentos básicos do front-end</p>', 0, 'edu@edu.com');

--
-- Acionadores `content`
--
DROP TRIGGER IF EXISTS `AddCoin`;
DELIMITER $$
CREATE TRIGGER `AddCoin` AFTER INSERT ON `content` FOR EACH ROW UPDATE user 
LEFT JOIN Content ON Content.email_user = User.email
SET coins = coins + 1
WHERE User.email = Content.email_user
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `coins` int(11) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`email`, `name`, `last_name`, `password`, `coins`) VALUES
('edu@edu.com', 'Eduardo', 'Silva', '@acbdefg', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
