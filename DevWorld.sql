-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 15-Jun-2022 às 23:47
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
CREATE DATABASE IF NOT EXISTS `dev world` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dev world`;

DELIMITER $$
--
-- Funções
--
DROP FUNCTION IF EXISTS `averageRate`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `averageRate` (`par_contentId` INT) RETURNS FLOAT BEGIN
	RETURN
    (
    	SELECT AVG(Assessments.rate) AS Average_Rate 
        FROM Assessments 
  		WHERE  Assessments.content_id = par_contentId
    );
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `assessments`
--

DROP TABLE IF EXISTS `assessments`;
CREATE TABLE IF NOT EXISTS `assessments` (
  `user_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `rate` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`,`content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `description` longtext NOT NULL,
  `email_user` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email_user` (`email_user`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `content`
--

INSERT INTO `content` (`id`, `title`, `description`, `email_user`, `category`) VALUES
(3, 'HTML 5', '<p>Um desenvolvedor front-end precisava dominar só o HTML, o CSS e JavaScript para ter uma boa colocação no mercado. Claramente, outras coisas eram incluídas nesse \"só\", como por exemplo: responsividade, semântica do HTML, acessibilidade, performance entre outras. Mas tudo girava em torno das três tecnologias principais.\r\n</p><p>A web mudou. Entraram outras habilidades como versionamento de arquivos, automatização de tarefas, pré processadores, bibliotecas, frameworks, NodeJS e gerenciador de pacotes, para citar alguns. Mas a base de tudo ainda gira em torno das três tecnologias principais.</p><p>Isso quer dizer que não importa a época ou a tecnologia, a base sempre vai ser a mesma. Então antes de pular para o tão famoso framework, temos que aprender a base dele para realmente entender o que está por trás dos panos. Sei que encontrar material de qualidade e com uma linguagem simples para quem está começando não é uma tarefa muito fácil. Com essa premissa em mente, criei esse e-book onde irei ensinar alguns fundamentos básicos do front-end</p>', 'edu@edu.com', 'HTML'),
(11, 'CSS', '<p>\r\n                        CSS é a sigla para o termo em inglês Cascading Style Sheets que, traduzido para o português,\r\n                        significa Folha de Estilo em Cascatas. O CSS é fácil de aprender e entender e é facilmente\r\n                        utilizado com as linguagens de marcação HTML ou XHTML.\r\n                    </p>\r\n                    <p>\r\n                        CSS é chamado de linguagem Cascading Style Sheet e é usado para estilizar elementos escritos em\r\n                        uma linguagem de marcação como HTML. O CSS separa o conteúdo da representação visual do site.\r\n                        Pense na decoração da sua página. Utilizando o CSS é possível alterar a cor do texto e do fundo,\r\n                        fonte e espaçamento entre parágrafos. Também pode criar tabelas, usar variações de layouts,\r\n                        ajustar imagens para suas respectivas telas e assim por diante.\r\n                    </p>\r\n                    <p>\r\n                        CSS foi desenvolvido pelo W3C (World Wide Web Consortium) em 1996, por uma razão bem simples. O\r\n                        HTML não foi projetado para ter tags que ajudariam a formatar a página. Você deveria apenas\r\n                        escrever a marcação para o site.\r\n                    </p>\r\n                    <p>\r\n                        Tags como <font> foram introduzidas na versão 3.2 do HTML e causaram muitos problemas para os\r\n                            desenvolvedores. Como os sites tinham diferentes fontes, cores e estilos, era um processo\r\n                            longo, doloroso e caro para reescrever o código. Assim, o CSS foi criado pelo W3C para\r\n                            resolver este problema.\r\n                    </p>\r\n                    <p>A relação entre HTML e CSS é bem forte. Como o HTML é uma linguagem de marcação (o alicerce de um\r\n                        site) e o CSS é focado no estilo (toda a estética de um site), eles andam juntos.</p>\r\n                    <p>\r\n                        CSS não é tecnicamente uma necessidade, mas provavelmente você não gostaria de olhar para um\r\n                        site que usa apenas HTML, pois isso pareceria completamente abandonado.\r\n                    </p>', 'edu@edu.com', 'CSS');

--
-- Acionadores `content`
--
DROP TRIGGER IF EXISTS `AddCoin`;
DELIMITER $$
CREATE TRIGGER `AddCoin` AFTER INSERT ON `content` FOR EACH ROW UPDATE user 
LEFT JOIN Content ON Content.email_user = User.email
SET coins = coins + 1
WHERE User.email = New.email_user
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
('edu@edu.com', 'Eduardo', 'Silva', '@acbdefg', 7),
('teste@teste2', 'teste', 'testee', 'teste123', 0),
('jonas@lopes.com', 'Jonas', 'Lopes', 'asbb1231', 0);

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `vw_rank_user`
-- (Veja abaixo para a view atual)
--
DROP VIEW IF EXISTS `vw_rank_user`;
CREATE TABLE IF NOT EXISTS `vw_rank_user` (
`email` varchar(45)
,`coins` int(11)
);

-- --------------------------------------------------------

--
-- Estrutura para vista `vw_rank_user`
--
DROP TABLE IF EXISTS `vw_rank_user`;

DROP VIEW IF EXISTS `vw_rank_user`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_rank_user`  AS SELECT `user`.`email` AS `email`, `user`.`coins` AS `coins` FROM (`user` left join `content` on((`content`.`email_user` = `user`.`email`))) WHERE (`user`.`coins` >= 0) GROUP BY `user`.`email` ORDER BY `user`.`coins` DESC LIMIT 0, 5 ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
