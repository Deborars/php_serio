-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Out-2023 às 15:23
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `moviestar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `movies`
--

CREATE TABLE `movies` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `trailer` varchar(150) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `length` varchar(50) DEFAULT NULL,
  `users_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `image`, `trailer`, `category`, `length`, `users_id`) VALUES
(2, 'Hunger Games 2', 'The Hunger Games is an annual event in which one boy and one girl aged 12–18 from each of the twelve districts surrounding the Capitol are selected by lottery to compete in a televised battle royale to the death.\r\n\r\nEm português:\r\nOs Jogos Vorazes são um evento anual em que um menino e uma menina entre 12 - 18 anos cada um dos 12 distritos ao redor da Capital são selecionados por sorteio e competem em uma batalha televisionada até a morte. ', '7950473c6171c285906ac44795db8804abdf067c5694b35b02dd18dcc852a8aa416de0120e1d08c7654dcf2526f958f07f5d384c1571af751001a1a2.jpg', 'https://www.youtube.com/embed/mfmrPu43DF8?si=Tyut_3Cop4sMiN-3', 'Ação', '1h', 11),
(3, 'teste', 'teste', '', 'trailer', 'Ação', '1h', 10),
(4, 'O Senhor dos Aneis', 'O Senhor dos Anéis é uma trilogia cinematográfica dirigida por Peter Jackson com base na obra-prima homónima de J. R. R. Tolkien.', '8dc3422459f992e479d5bbe02c5478a2c6f19df25ec380e17c21c829b41ec9c01db07e12ada42bec2aad85490e063ed1e3071b9bdde576eee61d4b5d.jpg', 'https://www.youtube.com/embed/0i86oM1nHjM?si=OJIu6BuuS6ie3h7e', 'Ação', '3h', 11),
(5, 'Love Hard', 'A romantic comedy about the lies we tell for love. An unlucky-in-love LA girl (Nina Dobrev) falls for a rugged East Coast guy (Darren Barnet) on a dating app and decides to surprise him for the holidays—only to discover that she’s been catfished by his childhood friend (Jimmy O. Yang). Directed by Hernán Jiménez.', '045b2015c3791876d163be60c0b0a8d7b3663db233eda5cf71b6b84474a1f7612af666716d24b459823172c5eebb4f983d96a2179941d504f9d4f4f1.jpg', 'https://www.youtube.com/embed/3boMRfx6cjE?si=CUsnbFsrxi-8AxiL', 'Comédia', '1h46', 11),
(6, 'Teste 2', 'teste teste', '3b80dcf671f34f58e5ba9729c94a1f598b5b6a5e223fba1f6470b45e228ba3d69fb2132f86d9119bb416e13ca58f28597238863dc2945245c846f1e1.jpg', 'sem link', 'Ação', '1h12', 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) UNSIGNED NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `users_id` int(11) UNSIGNED DEFAULT NULL,
  `movies_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `reviews`
--

INSERT INTO `reviews` (`id`, `rating`, `review`, `users_id`, `movies_id`) VALUES
(1, 10, 'filme bom', 11, 3),
(2, 9, 'filme excelente', 11, 3),
(3, 10, 'nota 10000', 11, 3),
(4, 8, 'Achei bacana o visual, mas não curti muito o roteiro.', 12, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `token` varchar(200) DEFAULT NULL,
  `bio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `image`, `token`, `bio`) VALUES
(8, 'Debora', 'Silva', 'rsilva.debora@gmail.com', '$2y$10$UwuJvlSD3GriJLVjh0fTO.dXLdQS1DT7ydGNcSs7A9kdrkeoLKhY6', '0a2e7623aa69c3b4f53f1de30dd7e6fd1ac892574d16b16d02e111c131f2bb44076671e7e29894f2e48998313f8a69616a68a91870264f2cd90af87b.jpg', 'a73a75ceb9cc9aee95f579657288c9145d636c6a5aef9c5f52accef17f9ec91edc002ded6bb43f2fa8d721c04b76a924c99a', NULL),
(9, 'Debora', 'Silvaa', 'debbrosa@hotmail.com', '$2y$10$UwuJvlSD3GriJLVjh0fTO.dXLdQS1DT7ydGNcSs7A9kdrkeoLKhY6', '0a2e7623aa69c3b4f53f1de30dd7e6fd1ac892574d16b16d02e111c131f2bb44076671e7e29894f2e48998313f8a69616a68a91870264f2cd90af87b.jpg', 'a5b09114888755cac002cb05b613c76318ab8561bff985a6f0d44c414b7a1d865eb810095256db44d8ccb77767d3bf9e434b', 'sou uma prog'),
(10, 'Debora', 'Silva', 'teste@teste.com', '$2y$10$bbM96vEieFxj5nKT4cWHouocG8aXp/fvHhlCQd56lIv3z5py8FjV6', '607c24f6ed029a39fa545d6f07d56a5f23e5db94566f035049289cf056c7b3c36e5e2a54b9b7854ed7a462e9c5c74d630ba1e546e698afdb38da3688.jpg', '055dddc80b09449ba8bdd9711ecc698f8c299fe33fd41e8678ee73656e63838d25f7896b4eef859173116d0e4e58914b9ad1', ''),
(11, 'Debora ', 'Silva', 'deboraro.61@gmail.com', '$2y$10$UwuJvlSD3GriJLVjh0fTO.dXLdQS1DT7ydGNcSs7A9kdrkeoLKhY6', NULL, 'a767d484d8b2bdb0db709b4cc35f811543860533bec157a09f65a8a08d2274f59c42bb3c58aec4d567d57477c58bd7912c14', NULL),
(12, 'Heitor', 'Teste', 'heitor@teste.com', '$2y$10$S7SpAIcl0.gLVzwLBllRB.PbxD2dlEGE2nLqog/V61X6f2tKiKhyu', '92549fb8b93d29531abb92c2672ca5bef6cfbd8f372ac4bd7e497d49c441dd7f64bf99e0fb868ede60d9427056fe09e1e2537483a0ccdb552fccfe71.jpg', '07206c97fd605f6ed8b966a90af443df95f85bcd0846a03c31cb2e9e48a93ad128dff471da41d2e17916ff5bbcdee656231b', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Índices para tabela `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movies_id` (`movies_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`movies_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
