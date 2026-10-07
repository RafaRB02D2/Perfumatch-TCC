-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/10/2026 às 21:39
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `perfumatch`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `nome_perfume` varchar(255) DEFAULT NULL,
  `nota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `avaliacoes`
--


-- --------------------------------------------------------

--
-- Estrutura para tabela `colecao`
--

CREATE TABLE `colecao` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `perfume_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `favoritos`
--

CREATE TABLE `favoritos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `perfume` varchar(255) NOT NULL,
  `data` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `favoritos`
--


-- --------------------------------------------------------

--
-- Estrutura para tabela `formularios_salvos`
--

CREATE TABLE `formularios_salvos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `familia` varchar(50) NOT NULL,
  `genero` varchar(20) NOT NULL DEFAULT 'Unissex',
  `ocasiao` varchar(50) NOT NULL,
  `intensidade` varchar(50) NOT NULL,
  `perfumes_ids` text NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `formularios_salvos`
--


-- --------------------------------------------------------

--
-- Estrutura para tabela `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `perfumes`
--

CREATE TABLE `perfumes` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `marca` varchar(120) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `genero` varchar(20) NOT NULL DEFAULT 'Unissex',
  `imagem` varchar(200) DEFAULT NULL,
  `ocasiao` varchar(255) DEFAULT NULL,
  `preco` varchar(50) DEFAULT NULL,
  `familia` varchar(100) DEFAULT NULL,
  `notas` text DEFAULT NULL,
  `notas_img` varchar(255) DEFAULT NULL,
  `fixacao` varchar(50) DEFAULT NULL,
  `projecao` varchar(50) DEFAULT NULL,
  `clima` varchar(50) DEFAULT NULL,
  `pele` varchar(50) DEFAULT NULL,
  `topo` text DEFAULT NULL,
  `coracao` text DEFAULT NULL,
  `base` text DEFAULT NULL,
  `sensacao` text DEFAULT NULL,
  `inspiracao` text DEFAULT NULL,
  `exibir` tinyint(4) DEFAULT 0,
  `intensidade` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `perfumes`
--

INSERT INTO `perfumes` (`id`, `nome`, `marca`, `tipo`, `genero`, `imagem`, `ocasiao`, `preco`, `familia`, `notas`, `notas_img`, `fixacao`, `projecao`, `clima`, `pele`, `topo`, `coracao`, `base`, `sensacao`, `inspiracao`, `exibir`, `intensidade`) VALUES
(5, '9PM Night Out ', 'Afnan', 'arabe', 'masculino', '9pmnightout.jfif', 'encontro  balada', '410', 'amadeirado,doce', NULL, NULL, NULL, NULL, 'frio', 'todas', NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(6, '9AM Dive', 'Afnan', 'arabe', 'masculino', '9amdive.jfif', 'escola', '290', ' frutado,aquatico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(7, 'Afnan Rare Carbon', 'Afnan', 'arabe', 'masculino', 'Afnan Rare Carbon.jfif', 'encontro', '310', ' amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(8, 'Afnan Supremacy Not Only Intense', 'Afnan', 'arabe', 'masculino', 'Afnan Supremacy Not Only Intense.jpg', 'trabalho', '420', 'frutado,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(9, 'Afnan 9PM', 'Afnan', 'arabe', 'masculino', 'afnan9pm.jfif', 'balada', '270', 'frutado, doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(10, 'Afnan 9PM Rebel', 'Afnan', 'arabe', 'masculino', 'afnan9pmrebel.jfif', 'encontro', '350', 'frutado, doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(11, 'Afnan Modest Une', 'Afnan', 'arabe', 'masculino', 'afnanmodestune.jfif', 'encontro', '290', 'amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(12, 'Afnan Supremacy Silver ', 'Afnan', 'arabe', 'masculino', 'afnansilver.jfif', 'trabalho', '310', 'frutado,amadeirado,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(13, 'Afnan Supremacy In Oud', 'Afnan', 'arabe', 'masculino', 'afnansupremacyioud.jfif', 'reuniao', '460', ' doce,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(14, 'Al Haramain Amber Oud Gold Edition', 'Al Haramain', 'arabe', 'masculino', 'Al Haramain Amber Oud Gold Edition.jfif', 'reuniao', '490', 'doce,citricos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(15, 'Al Haramain Amber Oud Rouge', 'Al Haramain', 'arabe', 'Unissex', 'Al Haramain Amber Oud Rouge.jfif', 'encontro', '560', 'amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(16, 'Al Haramain Amber Oud Tobacco Edition', 'Al Haramain', 'arabe', 'masculino', 'Al Haramain Amber Oud Tobacco Edition.jfif', 'reuniao', '530', 'doce,frutado, amadeirado ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(17, 'Attar Al Wesal Al Wataniah ', 'Al Wataniah', 'arabe', 'masculino', 'Al Wataniah Attar Al Weasel.jfif', 'balada,encontro', '190', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(18, 'Ard Al Zaafaran Dirham', 'Al Zaafaran', 'arabe', 'masculino', 'Al Zaafaran Dirham.jfif', 'academia', '160', 'citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(19, 'Al Haramain Amber Oud Carbon Edition', 'Al Haramain', 'arabe', 'masculino', 'alharamain amberoud carbonedition.jfif', 'trabalho', '490', 'amadeirado,aquatico,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(20, 'Lattafa Al Qiam Silver', 'Lattafa', 'arabe', 'masculino', 'AlQiamSilver.jfif', 'escola', '300', 'citrico,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(21, 'Al Haramain Amber Oud Blue Edition', 'Al Haramain', 'arabe', 'masculino', 'amberoudbleu.jfif', 'reuniao', '490', 'amadeirado, citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(22, 'Arabian Oud Kalemat Black', 'Arabian Oud', 'arabe', 'masculino', 'Arabian Oud Kalemat Black.jfif', 'reuniao', '720', 'amadeirado, doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(23, 'Arabian Oud Kalemat', 'Arabian Oud', 'arabe', 'masculino', 'Arabian Oud Kalemat.jfif', 'reuniao', '620', 'doce, amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(24, 'Ard Al Zaafaran Al Dirgham', 'Ard Al Zaafaran', 'arabe', 'masculino', 'Ard Al Zaafaran Al Dirgham.jfif', 'academia', '210', 'citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(25, 'Armaf Club de Nuit Untold', 'Armaf', 'arabe', 'masculino', 'Armaf Club de Nuit Untold.jfif', 'encontro', '420', 'amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(26, 'Armaf Odyssey Homme White Edition', 'Armaf', 'arabe', 'masculino', 'Armaf Odyssey Homme White Edition.jfif', 'encontro, reunião, trabalho', '250', 'amadeirado, citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(27, 'Armaf Odyssey Homme', 'Armaf', 'arabe', 'masculino', 'Armaf Odyssey Homme.jfif', 'encontro', '250', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(28, 'asad zanzibar limited edition', 'Lattafa', 'arabe', 'masculino', 'Asad Zanzibar Limited Edition.webp', 'trabalho,escola', '290', 'aquatico, amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(35, 'Lattafa Asad', 'Lattafa', 'arabe', 'masculino', 'asad.jfif', 'encontro,balada,reuniao', '240', 'amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(36, 'Ajmal Blu', 'Ajmal', 'arabe', 'masculino', 'Blu.jfif', 'escola,academia', '260', 'aquatico,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(37, 'Armaf Club de Nuit Intense Man', 'Armaf', 'arabe', 'masculino', 'clubthenuit.jfif', 'encontro,escola,trabalho,reuniao', '310', 'citrico,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(38, 'Armaf Club de Nuit Milestone', 'Armaf', 'arabe', 'masculino', 'clubthenuitmilestone.jfif', 'escola,trabalho,academia', '310', 'amadeirado,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(39, 'Armaf Club de Nuit Sillage', 'Amaf', 'arabe', 'masculino', 'clubthenuitsilage.jfif', 'escola,trabalho,academia', '310', 'citrico, amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(40, 'Armaf Club de Nuit Urban Man', 'Armaf', 'arabe', 'masculino', 'clubthenuiturban.jfif', 'trabalho,reuniao', '310', 'citrico,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(41, 'Swiss Arabian Edge', 'Swiss Arabian', 'arabe', 'masculino', 'edge.jfif', 'escola,academia', '250', 'amadeirado,citrico ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(42, 'Rasasi Egra', 'Rasasi', 'arabe', 'masculino', 'egra.jfif', 'escola', '270', 'amadeirado,aquatico,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(43, 'Paris Corner Emir Cedrat Essence', 'Paris Corner', 'arabe', 'masculino', 'Emir Cedrat Essence.jfif', 'escola,academia', '270', 'citrico,frutado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(44, 'Emper Legend', 'Emper', 'arabe', 'masculino', 'Emper Legend.jfif', 'balada', '170', 'citrico,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(45, 'Ajmal Evoke Silver', 'Ajmal', 'arabe', 'masculino', 'EvokeSilver.jfif', 'escola,academia', '320', 'amadeirado,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(46, 'Lattafa Fakhar platin', 'Lattafa', 'arabe', 'masculino', 'fakhar platin.jfif', 'encontro,trabalho,academia', '320', 'fresco,amadeirado,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(47, 'Fragrance World After Effect', 'French Avenue', 'arabe', 'masculino', 'Fragrance World After Effect.jfif', 'encontro,balada', '310', 'amadeirado,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(48, 'Fragrance World Cocktail Intense', 'Fragrance World', 'arabe', 'masculino', 'Fragrance World Cocktail Intense.jfif', 'encontro', '250', 'amadeirado,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(49, 'Fragrance World Imperium', 'Fragrance World', 'arabe', 'masculino', 'Fragrance World Imperium.jfif', 'escola,academia', '260', 'citrico,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(50, 'Fragrance World Jack of Clubs', 'Fragrance World', 'arabe', 'masculino', 'Fragrance World Jack of Clubs.webp', 'trabalho', '280', 'amadeirado,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(51, 'Fragrance World Suits', 'Fragrance World', 'arabe', 'masculino', 'Fragrance World Suits.jfif', 'trabalho,reuniao', '290', 'amadeirado,aquatico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(52, 'French Avenue Vulcan Feu', 'French Avenue', 'arabe', 'Unissex', 'French Avenue Vulcan Feu.jfif', 'encontro,escola,trabalho,balada', '330', 'frutado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(53, 'Rasasi Hawas', 'Rasasi ', 'arabe', 'masculino', 'hawas.jfif', 'escola,academia', '380', 'frutado,citrico,aquatico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(54, 'Rasasi Hawas Ice ', 'Rasasi', 'arabe', 'masculino', 'hawasice.jfif', 'escola,trabalho,academia', '440', 'frutado,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(55, 'Armaf Hunter', 'Armaf', 'arabe', 'masculino', 'hunter.jfif', 'escola,academia', '230', 'citrico,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(56, 'Al Haramain L Aventure', 'Al Haramain', 'arabe', 'masculino', 'laaventure.jfif', 'escola,academia', '320', 'citrico,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(57, 'Lattafa Al Nashama', 'Lattafa', 'arabe', 'masculino', 'Lattafa Al Nashama.jfif', 'trabalho', '320', 'frutado,doce,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(58, 'Lattafa Ameer Al Oudh Intense', 'Lattafa', 'arabe', 'masculino', 'Lattafa Ameer Al Oudh Intense.jfif', 'encontro,reuniao', '270', 'amadeirado,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(59, 'Lattafa Ana Abiyedh Rouge', 'Lattafa', 'arabe', 'Unissex', 'Lattafa Ana Abiyedh Rouge.jfif', 'encontro', '230', 'frutado,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(60, 'Lattafa Ana Abiyedh', 'Lattafa', 'arabe', 'masculino', 'Lattafa Ana Abiyedh.jfif', 'encontro', '200', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(61, 'Lattafa Asad Bourbon', 'Lattafa', 'arabe', 'masculino', 'Lattafa Asad Bourbon.jfif', 'encontro,balada', '280', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(62, 'Lattafa Asad Elixir', 'Lattaffa', 'arabe', 'masculino', 'Lattafa Asad Elixir.jfif', 'encontro,trabalho,balada,reuniao', '300', 'amadeirado,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(63, 'Lattafa Bade e Al Oud Amethyst', 'Lattafa', 'arabe', 'Unissex', 'Lattafa Bade’e Al Oud Amethyst.jfif', 'encontro', '250', 'amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(64, 'Lattafa Bade’e Al Oud Sublime', 'Lattafa', 'arabe', 'Unissex', 'Lattafa Bade’e Al Oud Sublime.jfif', 'encontro,balada', '260', 'frutado,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(65, 'Lattafa Ejaazi', 'Lattafa', 'arabe', 'masculino', 'Lattafa Ejaazi.jfif', 'trabalho', '180', 'amadeirado,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(66, 'Lattafa Khamrah Qahwa', 'Lattafa', 'arabe', 'masculino', 'Lattafa Khamrah Qahwa.jfif', 'encontro,balada,reuniao', '300', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(67, 'Lattafa Khamrah ', 'Lattafa', 'arabe', 'masculino', 'Lattafa Khamrah.jfif', 'encontro,balada,reuniao', '270', 'doce,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(69, 'Lattafa Liam Blue Shine', 'Lattafa', 'arabe', 'masculino', 'Lattafa Liam Blue Shine.jfif', 'trabalho,escola', '260', 'aquatico,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(70, 'Lattafa Oud for Glory', 'Lattafa', 'arabe', 'masculino', 'Lattafa Oud for Glory.jfif', 'encontro,trabalho,balada', '260', 'amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(71, 'Lattafa Oud Mood', 'Lattafa', 'arabe', 'masculino', 'Lattafa Oud Mood.jfif', 'reuniao', '200', 'amadeirado,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(72, 'Lataffa Pisa', 'Lattafa', 'arabe', 'masculino', 'Lattafa Pisa.jfif', 'escola,academia', '250', 'citrico,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(73, 'Lattafa Qaed Al Fursan Unlimited', 'Lattafa', 'arabe', 'masculino', 'Lattafa Qaed Al Fursan Unlimited.jfif', 'encontro', '210', 'doce,tropical', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(74, 'French Avenue Liquid Brun', 'French Avenue ', 'arabe', 'masculino', 'Liquid Brun.jfif', 'encontro,balada', '360', 'doce,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(75, 'Maison Alhambra Alpine', 'Maison Alhambra', 'arabe', 'masculino', 'Maison Alhambra Alpine.jfif', 'trabalho', '220', 'citrico,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(76, 'Maison Alhambra Baroque Rouge', 'Maison Alhambra', 'arabe', 'Unissex', 'Maison Alhambra Baroque Rouge.jfif', 'encontro,balada', '220', 'amadeirado,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(77, 'Maison Alhambra Infini Rose', 'Maison Alhambra', 'arabe', 'feminino', 'Maison Alhambra Infini Rose.jfif', 'encontro', '240', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(78, 'Maison Alhambra Lovely Cherie', 'Maison Alhambra', 'arabe', 'Unissex', 'Maison Alhambra Lovely Cherie.jfif', 'encontro', '225', 'frutado,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(79, 'Maison Alharbra Salvo Elixir', 'Maison Alharbra', 'arabe', 'masculino', 'Maison Alhambra Salvo Elixir.jfif', 'encontro,balada,reuniao', '215', 'amadeirado,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(80, 'Maison Alhambra The Tux', 'Maison Alhambra', 'arabe', 'masculino', 'Maison Alhambra The Tux.jfif', 'trabalho', '212', 'doce,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(81, 'Maison Alhambra Tobacco Touch', 'Maison Alhambra', 'arabe', 'masculino', 'Maison Alhambra Tobacco Touch.jfif', 'trabalho,reuniao', '230', 'amadeirado,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(82, 'Maison Alhambra Woody Oud', 'Maison Alhambra', 'arabe', 'masculino', 'Maison Alhambra Woody Oud.webp', 'trabalho,reuniao', '220', 'amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(84, 'Lattafa Najdia', 'Lattafa', 'arabe', 'masculino', 'najdia.jfif', 'escola,academia', '190', 'citrico,aquatico,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(85, 'Lattafa Najdia Tribute', 'Lattafa', 'arabe', 'masculino', 'najdiatribute.jfif', 'escola,trabalho', '210', 'amadeirado,aquatico,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(86, 'Paris Corner Emir Fire Your Desire', 'Paris Corner', 'arabe', 'masculino', 'Paris Corner Emir Fire Your Desire.jfif', 'balada', '290', 'amadeirado,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(87, 'Paris Corner Emir Rich Santal', 'Paris Corner', 'arabe', 'masculino', 'Paris Corner Emir Rich Santal.jfif', 'reuniao', '290', 'amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(88, 'Paris Corner Emir Voux Elegante', 'Paris Corner', 'arabe', 'masculino', 'Paris Corner Emir Voux Elegante.webp', 'encontro,reuniao', '310', 'doce,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(89, 'Paris Corner Voux Tourquise', 'Paris Corner', 'arabe', 'Unissex', 'Paris Corner Emir Voux Turquoise.jfif', 'encontro,balada,reuniao', '310', 'frutado,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(90, 'Paris Corner Emir Voux Zingy', 'Paris Corner', 'arabe', 'masculino', 'Paris Corner Emir Voux Zingy.jpg', 'escola,trabalho,reuniao', '290', 'citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(91, 'Paris Corner North Stag Expressions', 'Paris Corner', 'arabe', 'masculino', 'Paris Corner North Stag Expressions.jfif', 'trabalho', '480', 'citrico,doce,frutado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(92, 'Lattafa Qaed Al Fursan', 'Lattafa ', 'arabe', 'masculino', 'qaedalfursan.jfif', 'encontro,escola,trabalho', '180', 'frutado,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(93, 'Lattafa Ra’ed Luxe', 'Lattafa', 'arabe', 'masculino', 'Raed Luxe.jfif', 'escola,trabalho', '200', 'frutado,amadeirado,aquatico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(94, 'Rasasi Hawas Black', 'Rasasi ', 'arabe', 'masculino', 'Rasasi Hawas Black.jfif', 'encontro,escola,trabalho,reuniao', '250', 'amadeirado,citrico,terroso,fresco,frutado,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(95, 'Rasasi Hawas Elixir', 'Rasasi', 'arabe', 'masculino', 'Rasasi Hawas Elixir.jfif', 'encontro,balada', '230', 'abaunilhado,verde,doce,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(96, 'Rasasi La Yuqawam', 'Rasasi', 'arabe', 'masculino', 'Rasasi La Yuqawam.jfif', 'trabalho,reuniao', '230', 'frutado,animalico,amadeirado,picante', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(97, 'Rasasi Shuhrah', 'Rasasi', 'arabe', 'masculino', 'Rasasi Shuhrah.jfif', 'encontro,balada,reuniao', '200', 'floral,amadeirado,fresco,verde,animalico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(98, 'Shaghaf Men', 'Shaghaf', 'arabe', 'masculino', 'Shaghaf Men.jfif', 'escola', '260', 'cítrico,doce,picante,amadeirado,aquatico,verde', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(99, 'French Avenue Spectre Ghost', 'French Avenue', 'arabe', 'masculino', 'Spectre Ghost.jfif', 'encontro,reuniao', '270', 'abaunilhado,fresco,picante,amadeirado,citrico,fresco,frutado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(100, 'Afnan Supremacy in Heaven', 'Afnan', 'arabe', 'masculino', 'supremacyinheaven.jfif', 'escola,trabalho', '250', 'citrico,amadeirado,frutado,verde,fresco,floral,picante', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(101, 'Lattafa Suqraat', 'Lattafa', 'arabe', 'masculino', 'Suqraat.webp', 'escola,academia', '250', 'citrico,amadeirado,aquatico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(102, 'Swiss Arabian Layali', 'Swiss Arabian', 'arabe', 'femino', 'Swiss Arabian Layali.jfif', 'encontro', '220', 'frutado,floral,doce,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(103, 'Swiss Arabian Oud Maknoon', 'Swiss Arabian', 'arabe', 'masculino', 'Swiss Arabian Oud Maknoon.jfif', 'reuniao', '1400', 'amadeirado,fresco,floral,picante,animalico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(104, 'Swiss Arabian Shaghaf Oud Aswad', 'Swiss Arabian', 'arabe', 'masculino', 'Swiss Arabian Shaghaf Oud Aswad.jfif', 'trabalho', '280', 'amadeirado,floral,picante,fresco,animalico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(105, 'Swiss Arabian Shaghaf Oud Azraq', 'Swiss Arabian', 'arabe', 'masculino', 'Swiss Arabian Shaghaf Oud Azraq.jfif', 'balada', '350', 'doce,amadeirado,picante,abaunilhado,animalico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(106, 'Swiss Arabian Shaghaf Oud', 'Swiss Arabian', 'arabe', 'masculino ', 'Swiss Arabian Shaghaf Oud.jfif', 'encontro,balada,reuniao', '350', 'doce,amadeirado,abaunilhado,floral,picante,metalico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(107, 'Afnan Turathi Blue', 'Afnan', 'arabe', 'masculino', 'turathiblue.jfif', 'escola,academia', '280', 'citrico,amadeirado,fresco,picante', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(108, 'Armaf Ventana', 'Armaf', 'arabe', 'masculino', 'Ventana.jfif', 'escola,academia', '220', 'citrico,amadeirado,fresco,verde,terroso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(109, '1 Million Elixir', 'Rabanne', 'importado', 'Masculino', '1 Million Elixir.jfif', 'encontro,balada,reuniao', '690', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(110, '1 Million Parfum ', 'Rabanne', 'importado', 'Masculino', '1 Million Parfum.jfif', 'reuniao', '655', 'amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(111, 'Acqua di Gio EDT ', 'Giorgio Armani', 'importado', 'Masculino', 'Acqua di Giò EDT.webp', 'escola,trabalho,academia', '565', 'citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(112, 'Acqua di Gio Profondo ', 'Giorgio Armani', 'importado', 'Masculino', 'Acqua di Giò Profondo.jfif', 'escola,trabalho,academia,reuniao', '665', 'aquatico,citrico,fresco,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(113, 'Acqua di Gio Homme Intense', 'Giorgio Armani ', 'importado', 'Masculino', 'adgedpintense.jfif', 'trabalho,reuniao', '800', 'aquatico,frutado,amadeirado,citrico,fresco,verde,picante', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(114, 'Armani Code Absolu ', 'Giorgio Armani', 'importado', 'Masculino', 'Armani Code Absolu.jfif', 'reuniao', '800', 'abaunilhado,doce,fresco,animalico,citrico,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(115, 'Armani Code EDT ', 'Giorgio Armani', 'importado', 'Masculino', 'Armani Code EDT.webp', 'trabalho,reuniao', '570', 'abaunilhado,amadeirado,citrico,doce,fresco,picante', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(116, 'Armani Code Profumo ', 'Giorgio Armani', 'importado', 'Masculino', 'Armani Code Profumo.jfif', 'reuniao', '840', 'abaunilhado,picante,animalico,fresco,doce,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(117, 'Azzaro Chrome', 'Azzaro', 'importado', 'Masculino', 'Azzaro Chrome.jfif', 'escola,trabalho,academia', '385', 'citrico,amadeirado,fresco,floral,doce,frutado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(118, 'Azzaro Wanted', 'Azzaro', 'importado', 'Masculino', 'Azzaro Wanted.jfif', 'trabalho', '550', 'fresco,citrico,amadeirado,picante,frutado,verde,abaunilhado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(119, 'Bad Boy Cobalt ', 'Carolina Herrera', 'importado', 'Masculino', 'Bad Boy Cobalt.jfif', 'encontro,balada', '650', 'amadeirado,frutado,fresco,terroso,doce,picante,verde,floral', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(120, 'Bad Boy Le Parfum', 'Carolina Herrera', 'importado', 'Masculino', 'Bad Boy Le Parfum.jfif', 'encontro', '650', 'fresco,verde,citrico,amadeirado,animalico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(121, 'Bleu de Chanel EDP', 'Chanel', 'importado', 'Masculino', 'Bleu de Chanel EDP.jpg', 'trabalho,reuniao', '1100', 'citrico,amadeirado,fresco,picante ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(122, 'Bleu de Chanel EDT ', 'Chanel', 'importado', 'Masculino', 'Bleu de Chanel EDT.jpg', 'escola,trabalho,reuniao', '980', 'citrico,amadeirado,picante,verde,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(123, 'Bleu de Chanel Parfum', 'Chanel', 'importado', 'Masculino', 'Bleu de Chanel Parfum.jfif', 'trabalho,reuniao', '1270', 'amadeirado,citrico,fresco,picante,verde', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(124, 'Boss Bottled Elixir', 'Hugo Boss', 'importado', 'Masculino', 'Boss Bottled Elixir.jfif', 'encontro,trabalho,balada,reuniao', '680', 'amadeirado,picante,terroso,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(125, 'Boss Bottled ', 'Hugo Boss', 'importado', 'Masculino', 'Boss Bottled.jfif', 'escola,trabalho', '480', 'amadeirado,frutado,abaunilhado,picante,citrico,fresco,verde', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(126, 'Burberry Hero EDP', 'Burberry', 'importado', 'Masculino', 'Burberry Hero EDP.jfif', 'trabalho,reuniao', '650', 'amadeirado,fresco,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(127, 'Burberry Hero EDT', 'Burberry', 'importado', 'Masculino', 'Burberry Hero EDT.jfif', 'escola,trabalho', '550', 'amadeiradfo,fresco,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(128, 'Bvlgari Man in Black ', 'Bvgari', 'importado', 'Masculino', 'Bvlgari Man in Black.jfif', 'trabalho,reuniao', '755', 'picante,amadeirado,doce,abaunilhado,animalico,floral', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(129, 'Bvlgari Man Wood Neroli ', 'Bvlgari', 'importado', 'Masculino', 'Bvlgari Man Wood Neroli.jfif', 'escola,trabalho', '655', 'citrico,floral,amadeirado,fresco,animalico,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(130, 'Chanel Allure Homme Sport', 'Chanel', 'importado', 'Masculino', 'Chanel Allure Homme Sport.jfif', 'escola,trabalho,academia,reuniao', '1000', 'citrico,abaunilhado,aquatico,doce,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(131, 'Coach for Men', 'Coach', 'importado', 'Masculino', 'Coach for Men.jfif', 'escola', '450', 'citrico,fresco,frutado,amadeirado,doce,picante,animalico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(132, 'Dior Homme 2020 ', 'Dior', 'importado', 'Masculino', 'Dior Homme 2020.webp', 'trabalho', '670', 'amadeirado,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(133, 'Dior Homme Intense ', 'Dior', 'importado', 'Masculino', 'Dior Homme Intense.jfif', 'encontro,reuniao', '770', 'floral,amadeirado,terroso,frutado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(134, 'Dior Homme Sport', 'Dior', 'importado', 'Masculino', 'Dior Homme Sport 2021.jpg', 'escola,trabalho,academia', '670', 'citrico,amdeirado,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(135, 'Dior Sauvage EDP ', 'Dior', 'importado', 'Masculino', 'Dior Sauvage EDP.jfif', 'encontro,trabalho,balada,reuniao', '820', 'fresco,citrico,verde,floral,picante', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(136, 'Dior Sauvage EDT', 'Dior', 'importado', 'Masculino', 'Dior Sauvage EDT.jfif', 'encontro,escola,trabalho,reuniao', '700', 'fresco,citrico,amadeirado,verde,picante', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(137, 'Dior Sauvage Elixir', 'Dior', 'importado', 'Masculino', 'Dior Sauvage Elixir.jfif', 'encontro,balada,reuniao', '950', 'picante,fresco,amadeirado,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(138, 'Versace Eros EDP', 'Versace', 'importado', 'Masculino', 'Eros EDP.webp', 'encontro,balada', '565', 'citrico,verde,abaunilhado,amadeirado,doce,fresco,frutado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(139, 'Versace Eros Flame', 'Versace', 'importado', 'Masculino', 'Eros Flame.jfif', 'encontro', '565', 'citrico,fresco,abaunilhado,picante,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(140, 'Gentleman EDP', 'Givenchy', 'importado', 'Masculino', 'Gentleman EDP.webp', 'encontro,reuniao', '665', 'picante,abaunilhado,floral,fresco,doce,terroso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(141, 'Givenchy Gentleman Boisee ', 'Givenchy', 'importado', 'Masculino', 'Givenchy Gentleman Boisee.jfif', 'trabalho,reuniao', '575', 'amadeirado,picante,floral,fresco,doce,terroso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(142, 'Givenchy Gentleman EDT Intense', 'Givenchy', 'importado', 'Masculino', 'Givenchy Gentleman EDT Intense.jfif', 'trabalho,reuniao', '575', 'amadeirado,floral,fresco,picante,abunilhado,doce,terroso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(143, 'Givenchy Gentleman Reserve Privée', 'Givenchy', 'importado', 'Masculino', 'Givenchy Gentleman Reserve Privée.jfif', 'encontro,reuniao', '665', 'amadeirado,floral,picante,terroso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(144, 'Gucci Guilty Elixir', 'Gucci', 'importado', 'Masculino', 'Gucci Guilty Elixir.jfif', 'encontro', '780', 'abaunilhado,floral,picante,fresco,citrico,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(145, 'Gucci Guilty Parfum ', 'Gucci', 'importado', 'Masculino', 'Gucci Guilty Parfum.png', 'encontro,reuniao', '780', 'amadeirado,fresco,citrico,floral', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(146, 'Hugo Man', 'Hugo Boss', 'importado', 'Masculino', 'Hugo Man.jfif', 'escola,trabalho', '300', 'amadeirado,fresco,verde,frutado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(147, 'Invictus Victory Elixir', 'Rabanne', 'importado', 'Masculino', 'Invictus Victory Elixir.jfif', 'encontro,balada', '680', 'abaunilhado,picante,doce,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(148, 'Invictus Victory ', 'Rabanne', 'importado', 'Masculino', 'Invictus Victory.avif', 'encontro', '610', 'abaunilhado,doce,picante,fresco,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(149, 'Le Male Le Parfum ', 'Jean Paul Gaultier', 'importado', 'Masculino', 'Le Male Le Parfum.png', 'encontro,reuniao', '655', 'picante,abaunilhado,floral,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(150, 'L’Eau d’Issey Pour Homme', 'Issey Miyake', 'importado', 'Masculino', 'L’Eau d’Issey Pour Homme.jpg', 'escola,trabalho,academia,reuniao', '485', 'citrico,fresco,amadeirado,floral,verde', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(151, 'Lacoste Blanc', 'Lacoste', 'importado', 'Masculino', 'Lacoste Blanc.jfif', 'escola,academia', '410', 'amadeirado,citrico,floral,fresco,doce,animalico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(152, 'Le Beau Le Parfum', 'Jean Paul Gaultier', 'importado', 'Masculino', 'Le Beau Le Parfum.jfif', 'encontro,trabalho,reuniao', '665', 'doce,amadeirado,abaunilhado,tropical,frutado,floral', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(153, 'Le Male Elixir', 'Jean Paul Gaultier ', 'importado', 'Masculino', 'Le Male Elixir.png', 'balada,encontro', '685', 'abaunilhado,doce,verde,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(154, 'Le Male Elixir Absolu', 'Jean Paul Gaultier', 'importado', 'Masculino', 'Le Male Elixir Absolu.jfif', 'encontro,balada', '695', 'picante,frutado,doce,abaunilhado,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(155, 'Le Beau Narcisse', 'Jean Paul Gaultier', 'importado', 'Masculino', 'lebeaunarcisse.jpg', 'encontro,trabalho,reuniao', '680', 'citrico,abaunilhado,doce,floral,frutado,tropical,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(156, 'Le Male In Blue ', 'Jean Paul Gaultier', 'importado', 'Masculino', 'lemaleinblue.webp', 'encontro,escola,trabalho,reuniao', '695', 'picante,doce,floral,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(157, 'Light Blue Eau Intense ', 'Dolce & Gabbana', 'importado', 'Masculino', 'Light Blue Eau Intense.jfif', 'escola,trabalho,academia', '530', 'citrico,aquatico,fresco,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(158, 'Montblanc Legend Spirit', 'Montblanc', 'importado', 'Masculino', 'Montblanc Legend Spirit.jfif', 'escola,trabalho,academia', '440', 'citrico,aquatico,fresco,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(159, 'Montblanc Legend ', 'Montblanc', 'importado', 'Masculino', 'Montblanc Legend.jfif', 'escola,trabalho', '440', 'frutado,doce,fresco,citrico,amadeirado,abaunilhado,', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(160, 'Narciso Rodriguez Bleu Noir ', 'Narciso Rodriguez', 'importado', 'Masculino', 'Narciso Rodriguez Bleu Noir.jfif', 'trabalho', '600', 'amadeirado,picante,fresco,terroso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(161, 'Nautica Voyage', 'Nautica', 'importado', 'Masculino', 'Nautica Voyage.jfif', 'escola,trabalho,academia', '100', 'verde,frutado,floral,fresco,aquatico,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(162, 'Phantom In Red', 'Rabanne', 'importado', 'Masculino', 'phantominred.jfif', 'encontro,balada', '615', 'picante,amadeirado,frutado,verde,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(163, 'Prada L’Homme Intense', 'Prada', 'importado', 'Masculino', 'Prada L’Homme Intense.jfif', 'escola,trabalho,reuniao', '800', 'floral,amadeirado,terroso,abaunilhado,picante', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(164, 'Prada L’Homme', 'Prada', 'importado', 'Masculino', 'Prada L’Homme.jfif', 'escola,trabalho', '685', 'floral,amadeirado,fresco,picante,terroso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(165, 'Prada Luna Rossa Black', 'Prada', 'importado', 'Masculino', 'Prada Luna Rossa Black.jfif', 'trabalho,reuniao', '720', 'amadeirado,abaunilhado,doce,picante', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(166, 'Prada Luna Rossa Ocean', 'Prada', 'importado', 'Masculino', 'Prada Luna Rossa Ocean.jfif', 'escola,trabalho', '620', 'citrico,fresco,floral,amadeirado,terroso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(167, 'Prada Luna Rossa ', 'Prada', 'importado', 'Masculino', 'Prada Luna Rossa.webp', 'escola,trabalho', '620', 'verda,fresco,citrico,floral', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(168, 'Valentino Purple Melancholia', 'Valentino', 'importado', 'Masculino', 'purplemelancholia.jpg', 'encontro,trabalho', '820', 'tropical,picante,doce,frutado,abaunilhado,amadeirdo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(169, 'Ralph Lauren Polo Blue ', 'Ralph Lauren', 'importado', 'Masculino', 'Ralph Lauren Polo Blue.jfif', 'escola,trabalho,academia,reuniao', '530', 'aquatico,fresco,verde,citrico,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(170, 'Ralph Lauren Polo Deep Blue', 'Ralph Lauren', 'importado', 'Masculino', 'Ralph Lauren Polo Deep Blue.jfif', 'escola,trabalho,reuniao', '530', 'fresco,amadeirado,citrico,aquatico,tropical,frutado,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(171, 'Scandal Elixir', 'Jean Paul Gaultier', 'importado', 'Masculino', 'scandalelixir.jfif', 'encontro,balada', '665', 'frutado,abaunilhado,picante,doce,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(172, 'Viktor & Rolf Spicebomb Extreme', 'Viktor & Rolf ', 'importado', 'Masculino', 'Spicebomb Extreme.jfif', 'encontro,balada', '710', 'abaunilhado,picante,doce,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(173, 'Stronger With You Absolutely', 'Giorgio Armani', 'importado', 'Masculino', 'Stronger With You Absolutely.jfif', 'encontro,reuniao', '695', 'abaunilhado,amadeirado,picante,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(174, 'Stronger With You Intensely ', 'Giorgio Armani', 'importado', 'Masculino', 'Stronger With You Intensely.jfif', 'encontro,balada', '655', 'abaunilhado,doce,picante', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(175, 'Stronger With You Spices', 'Giorgio Armani', 'importado', 'Masculino', 'swuspices.webp', 'encontro,reuniao', '740', 'picante,abaunilhado,fresco,doce,frutado,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(176, 'Stronger With You Powerfully', 'Giorgio Armani', 'importado', 'Masculino', 'swyporwerfully.jfif', 'encontro,balada,reuniao', '720', 'picante,frutado,abaunilhado,doce,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(177, 'Terre d’Hermès EDT', 'Hermès', 'importado', 'Masculino', 'Terre d’Hermès EDT.jfif', 'escola,trabalho,academia,reuniao', '665', 'citrico,amadeirado,fresco,terroso,picante', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(178, 'The Most Wanted Parfum ', 'Azzaro', 'importado', 'Masculino', 'The Most Wanted Parfum.jfif', 'encontro,balada,reuniao', '615', 'abaunilhado,amadeirado,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(179, 'Dolce & Gabbana The One EDP', 'Dolce & Gabbana', 'importado', 'Masculino', 'The One EDP.jfif', 'encontro,reuniao', '575', 'fresco,citrico,picante,doce,amadeirado,floral', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(180, 'Ultra Male', 'Jean Paul Gaultier', 'importado', 'Masculino', 'Ultra Male.jfif', 'encontro,balada', '600', 'abaunilhado,frutado,doce,picante,fresco,verde', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(182, 'Valentino Uomo Born in Roma ', 'Valentino', 'importado', 'Masculino', 'Valentino Uomo Intense.webp', 'encontro,reuniao', '715', 'metalico,amadeirado,aquatico,verde,fresco,picante', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(183, 'Valentino Uomo', 'Valentino', 'importado', 'Masculino', 'Valentino Uomo.webp', 'trabalho,reuniao', '715', 'floral,citrico,picante,fresco,terroso,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(184, 'Versace Dylan Blue', 'Versace', 'importado', 'Masculino', 'Versace Dylan Blue.jfif', 'escola,trabalho,academia', '485', 'citrico,fresco,aquatico,picante,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(185, 'Versace Pour Homme', 'Versace', 'importado', 'Masculino', 'Versace Pour Homme.jfif', 'escola,academia', '485', 'citrico,fresco,floral,verde', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(186, 'YSL Y EDP', 'Yves Saint Laurent', 'importado', 'Masculino', 'Y EDP.jfif', 'escola,trabalho,reuniao', '725', 'fresco,amadeirado,frutado,citrico,verde,picante', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(187, 'YSL Y EDT', 'Yves Saint Laurent', 'importado', 'Masculino', 'Y EDT.jfif', 'escola,trabalho,academia', '725', 'fresco,citrico,amadeirado,verde,abaunilhado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(188, 'Y Le Parfum', 'Yves Saint Laurent', 'importado', 'Masculino', 'Y Le Parfum.jfif', 'escola,trabalho,reuniao', '795', 'fresco,frutado,verde,amadeirado,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(189, 'Y Iced Cologne', 'Yves Saint Laurent', 'importado', 'Masculino', 'yicedcologne.webp', 'escola,trabalho,academia', '620', 'verde,fresco,amadeirado,picante', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(192, 'Xerjoff Alexandria II ', NULL, 'nicho', 'Masculino', 'Alexandria II.jfif', 'encontro,reuniao', '2500', 'amadeirado', 'amadeirado ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(193, 'Ani ', 'nishane', 'nicho', 'Masculino', 'Ani.jfif', 'encontro,reuniao', '1700', 'doce,amadeirado,especiado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(194, 'Aqua Universalis ', NULL, 'nicho', 'Masculino', 'Aqua Universalis.jfif', 'escola,trabalho,academia', '1500', 'citrico,aquatico,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(195, 'Arabians Tonka ', 'montale', 'nicho', 'Masculino', 'Arabians Tonka.jfif', 'encontro,balada,reunião', '2000', 'doce,especiado,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(196, 'Creed Aventus', 'creed', 'nicho', 'Masculino', 'Aventus.jfif', 'trabalho,reuniao', '1500', 'citrico,frutado,especiado,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(197, 'Bal d’Afrique', 'byredo', 'nicho', 'Masculino', 'Bal d Afrique.jfif', 'escola,trabalho,academia', '2000', 'citrico,doce,frutado,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(198, 'Bergamote 22', 'le labo', 'nicho', 'Masculino', 'Bergamote 22.jfif', 'escola,trabalho,academia', '700', 'citrico,amadeirado,floral', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(199, 'Black Afgano', 'nasomatto', 'nicho', 'Masculino', 'Black Afgano.jfif', 'encontro,balada', '2000', 'amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(200, 'Carlisle ', 'parfums the marly', 'nicho', 'Masculino', 'Carlisle.jfif', 'balada,reuniao', '2000', 'doce,frutado,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(201, 'Colonia Essenza', 'acqua di parma', 'nicho', 'Masculino', 'Colonia Essenza.jfif', 'escola,trabalho', '1300', 'citrico,floral,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(202, 'Delina Exclusif ', 'parfums the marly', 'nicho', 'feminino', 'Delina Exclusif.jfif', 'encontro', '1700', 'floral,frutado,doce,tropical,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(203, 'Elysium', 'roja', 'nicho', 'Masculino', 'Elysium.jfif', 'trabalho', '1500', 'citrico,amadeirado,frutado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(204, 'Erba Pura', 'xerjoff', 'nicho', 'Unissex', 'Erba Pura.jfif', 'encontro,balada', '1500', 'citrico,frutado,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(205, 'Grand Soir ', NULL, 'nicho', 'Masculino', 'Grand Soir.jfif', 'encontro,balada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(206, 'Green Irish Tweed', NULL, 'nicho', 'Masculino', 'Green Irish Tweed.jfif', 'escola,trabalho', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(207, 'Greenley ', NULL, 'nicho', 'Masculino', 'Greenley.jfif', 'escola,trabalho', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(208, 'Grey Vetiver ', NULL, 'nicho', 'Masculino', 'Grey Vetiver.jfif', 'trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(209, 'Gris Charnel', NULL, 'nicho', 'Masculino', 'Gris Charnel.jfif', 'trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(210, 'Gyan Le Gemme', NULL, 'nicho', 'Masculino', 'Gyan.jfif', 'trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(211, 'Hacivat ', NULL, 'nicho', 'Masculino', 'Hacivat.jfif', 'encontro,escola,trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(212, 'Haltane', NULL, 'nicho', 'Masculino', 'Haltane.jfif', 'trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(213, 'Herod', NULL, 'nicho', 'Masculino', 'Herod.jfif', 'encontro,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(214, 'Hibiscus Mahajád ', NULL, 'nicho', 'Masculino', 'Hibiscus Mahajad.jfif', 'encontro,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(215, 'Hundred Silent Ways ', NULL, 'nicho', 'Unissex', 'Hundred Silent Ways.jfif', 'encontro,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(216, 'Imagination', NULL, 'nicho', 'Masculino', 'Imagination.jfif', 'escola,trabalho,academia,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(217, 'Interlude Man', NULL, 'nicho', 'Masculino', 'Interlude Man.jfif', 'balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(218, 'Kalan ', NULL, 'nicho', 'Masculino', 'Kalan.jfif', 'encontro,balada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(219, 'Layton Exclusif ', NULL, 'nicho', 'Masculino', 'Layton Exclusif.jfif', 'encontro,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(220, 'Layton ', NULL, 'nicho', 'Masculino', 'Layton.jfif', 'encontro,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(221, 'Lost Cherry ', NULL, 'nicho', 'Masculino', 'Lost Cherry.jfif', 'encontro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(222, 'Masculin Pluriel', NULL, 'nicho', 'Masculino', 'Masculin Pluriel.jfif', 'trabalho', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(223, 'Megamare ', NULL, 'nicho', 'Masculino', 'Megamare.jfif', 'escola,trabalho,academia,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(224, 'Millésime Impérial', NULL, 'nicho', 'Masculino', 'Millésime Impérial.jfif', 'escola,trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(225, 'Musc Ravageur ', NULL, 'nicho', 'Masculino', 'Musc Ravageur.jfif', 'encontro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(226, 'Naxos', NULL, 'nicho', 'Masculino', 'Naxos.jfif', 'encontro,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(227, 'Noir Extreme Parfum', NULL, 'nicho', 'Masculino', 'Noir Extreme Parfum.jfif', 'encontro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(228, 'Oajan', NULL, 'nicho', 'Masculino', 'Oajan.jfif', 'encontro,trabalho', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(229, 'Ombre Nomade', NULL, 'nicho', 'Masculino', 'Ombre Nomade.jfif', 'reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(230, 'Onekh', NULL, 'nicho', 'Masculino', 'Onekh.jfif', 'reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(231, 'Oud for Greatness', NULL, 'nicho', 'Masculino', 'Oud for Greatness.jfif', 'encontro,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(232, 'Oud Wood ', NULL, 'nicho', 'Masculino', 'Oud Wood.jfif', 'trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(233, 'Percival', NULL, 'nicho', 'Masculino', 'Percival.jfif', 'escola,trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(234, 'Philosykos ', NULL, 'nicho', 'Masculino', 'Philosykos.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(235, 'Red Tobacco', NULL, 'nicho', 'Masculino', 'Red Tobacco.jfif', 'balada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(236, 'Reflection 45 ', NULL, 'nicho', 'Masculino', 'Reflection 45.jfif', 'reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(237, 'Reflection Man', NULL, 'nicho', 'Masculino', 'Reflection Man.jfif', 'escola,trabalho', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(238, 'Renaissance', NULL, 'nicho', 'Masculino', 'Renaissance.jfif', 'escola,trabalho,academia,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(239, 'Sedley', NULL, 'nicho', 'Masculino', 'Sedley.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL);
INSERT INTO `perfumes` (`id`, `nome`, `marca`, `tipo`, `genero`, `imagem`, `ocasiao`, `preco`, `familia`, `notas`, `notas_img`, `fixacao`, `projecao`, `clima`, `pele`, `topo`, `coracao`, `base`, `sensacao`, `inspiracao`, `exibir`, `intensidade`) VALUES
(240, 'Sel Marin ', NULL, 'nicho', 'Masculino', 'Sel Marin.jfif', 'escola,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(241, 'Side Effect', NULL, 'nicho', 'Unissex', 'Side Effect.jfif', 'encontro,balada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(242, 'Silver Mountain Water', NULL, 'nicho', 'Masculino', 'Silver Mountain Water.jfif', 'escola,trabalho,academia,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(243, 'Terroni', NULL, 'nicho', 'Masculino', 'Terroni.jfif', 'balada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(244, 'Tobacco Vanille', NULL, 'nicho', 'Masculino', 'Tobacco Vanille.jfif', 'encontro,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(245, 'Torino 21', NULL, 'nicho', 'Masculino', 'Torino21.jfif', 'escola,trabalho,academia,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(246, 'Tygar Le Gemme', NULL, 'nicho', 'Masculino', 'Tygar.jfif', 'escola,trabalho,academia,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(247, 'Wulong Cha', NULL, 'nicho', 'Masculino', 'Wulong Cha.jfif', 'escola,trabalho,academia,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(248, 'Aqua Di Otto', NULL, 'nacional', 'Masculino', 'Aqua Di Otto.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(249, 'Arbo', NULL, 'nacional', 'Masculino', 'Arbo.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(250, 'Biografia', NULL, 'nacional', 'Masculino', 'Biografia.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(251, 'Blue De Lab8', NULL, 'nacional', 'Masculino', 'Blue De Lab8.jfif', 'trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(252, 'Boemia', NULL, 'nacional', 'Masculino', 'Boemia.jfif', 'trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(253, 'Bomb Black', NULL, 'nacional', 'Masculino', 'Bomb Black.jfif', 'encontro,balada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(254, 'Bossa', NULL, 'nacional', 'Masculino', 'Bossa.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(255, 'Citrus Brasilis', NULL, 'nacional', 'Masculino', 'Citrus Brasilis.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(256, 'Citrus Craving', NULL, 'nacional', 'Masculino', 'Citrus Craving.jfif', 'escola,trabalho,academia,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(257, 'Club 6 Cassino', NULL, 'nacional', 'Masculino', 'Club 6 Cassino.jfif', 'encontro,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(258, 'Club 6 Voyage', NULL, 'nacional', 'Masculino', 'Club 6 Voyage.jfif', 'encontro,balada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(259, 'Club 6 ', NULL, 'nacional', 'Masculino', 'Club 6.webp', 'escola,trabalho', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(260, 'Club Blue', NULL, 'nacional', 'Masculino', 'Club Blue.jfif', 'trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(261, 'Coffee Man Duo', NULL, 'nacional', 'Masculino', 'Coffee Man Duo.jfif', 'encontro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(262, 'Coffee Man Fusion', NULL, 'nacional', 'Masculino', 'Coffee Man Fusion.jfif', 'encontro,balada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(263, 'Coffee Man Seduction', NULL, 'nacional', 'Masculino', 'Coffee Man Seduction.jfif', 'encontro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(264, 'Dom8', NULL, 'nacional', 'Masculino', 'Dom8.jfif', 'encontro,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(265, 'Domus', NULL, 'nacional', 'Masculino', 'Domus.jfif', 'encontro,balada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(266, 'Dream On Infinite', NULL, 'nacional', 'Masculino', 'Dream on infinite.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(267, 'Eau De Miako', NULL, 'nacional', 'Masculino', 'Eau De Miako.jfif', 'escola,trabalho', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(268, 'Effervescent Summer ', NULL, 'nacional', 'Masculino', 'Effervescent Summer.jfif', 'escola,trabalho', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(269, 'Effervescent ', NULL, 'nacional', 'Masculino', 'Effervescent.jfif', 'escola,trabalho,academia,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(270, 'Empire Gold', NULL, 'nacional', 'Masculino', 'Empire Gold.jfif', 'encontro,trabalho,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(271, 'Empire Intense ', NULL, 'nacional', 'Masculino', 'Empire Intense.jfif', 'encontro,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(272, 'Empire ', NULL, 'nacional', 'Masculino', 'Empire.jfif', 'reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(273, 'Essencial Exclusivo', NULL, 'nacional', 'Masculino', 'Essencial Exclusivo.jfif', 'encontro,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(274, 'Essencial Mirra', NULL, 'nacional', 'Masculino', 'Essencial Mirra.jfif', 'encontro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(275, 'Essencial Oud Pimenta', NULL, 'nacional', 'Masculino', 'Essencial Oud Pimenta.jfif', 'encontro,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(276, 'Essencial Oud Vanilla', NULL, 'nacional', 'Masculino', 'Essencial Oud Vanilla.jfif', 'encontro,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(277, 'Essencial Oud', NULL, 'nacional', 'Masculino', 'Essencial Oud.jfif', 'balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(278, 'Essencial Supreme', NULL, 'nacional', 'Masculino', 'Essencial Supreme.jfif', 'reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(279, 'Essencial Unico', NULL, 'nacional', 'Masculino', 'Essencial Unico.jfif', 'encontro,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(280, 'Essencial ', NULL, 'nacional', 'Masculino', 'Essencial.jfif', 'trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(281, 'Everest', NULL, 'nacional', 'Masculino', 'Everest.jfif', 'escola,trabalho,academia,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(282, 'Fava Tonka', NULL, 'nacional', 'Masculino', 'Fava Tonka.jfif', 'encontro,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(283, 'Feelin’ for Him', NULL, 'nacional', 'Masculino', 'Feelin for Him.jfif', 'escola,trabalho', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(284, 'Fire Snake', NULL, 'nacional', 'Masculino', 'Fire Snake.jfif', 'encontro,escola,trabalho,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(285, 'Gin Tonic', NULL, 'nacional', 'Masculino', 'Gin Tonic.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(286, 'Grand Tygar', NULL, 'nacional', 'Masculino', 'Grand Tygar.jfif', 'escola,trabalho,academia,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(287, 'H Aqua', NULL, 'nacional', 'Masculino', 'H Acqua.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(288, 'Heaven', NULL, 'nacional', 'Masculino', 'Heaven.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(289, 'Homem Cor.agio', NULL, 'nacional', 'Masculino', 'Homem Cor.agio.jfif', 'encontro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(290, 'Homem Essence ', NULL, 'nacional', 'Masculino', 'Homem Essence.jfif', 'encontro,escola,trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(291, 'Homem Sagaz', NULL, 'nacional', 'Masculino', 'Homem Sagaz.jfif', 'encontro,balada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(292, 'Homem Tato', NULL, 'nacional', 'Masculino', 'Homem Tato.jfif', 'encontro,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(293, 'Impression In Black ', NULL, 'nacional', 'Masculino', 'Impression In Black.jfif', 'escola,trabalho', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(294, 'Impression ', NULL, 'nacional', 'Masculino', 'Impression.jfif', 'encontro,trabalho', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(295, 'Italian Soul', NULL, 'nacional', 'Masculino', 'Italian Soul.jfif', 'escola,trabalho,academia,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(296, 'Jobs', NULL, 'nacional', 'Masculino', 'Jobs.jfif', 'encontro,trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(297, 'Kaiak Aero', NULL, 'nacional', 'Masculino', 'Kaiak Aero.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(298, 'Kaiak Clássico', NULL, 'nacional', 'Masculino', 'Kaiak Clássico.jfif', 'escola,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(299, 'Kaiak Oceano', NULL, 'nacional', 'Masculino', 'Kaiak Oceano.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(300, 'Kaiak Urbe ', NULL, 'nacional', 'Masculino', 'Kaiak Urbe.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(301, 'Limâo Siciliano', NULL, 'nacional', 'Masculino', 'Limão Siciliano.jfif', 'escola,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(302, 'Malbec Black Legend', NULL, 'nacional', 'Masculino', 'Malbec Black Legend.jfif', 'encontro,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(303, 'Malbec Black ', NULL, 'nacional', 'Masculino', 'Malbec Black.jfif', 'encontro,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(304, 'Malbec Bleu', NULL, 'nacional', 'Masculino', 'Malbec Bleu.jfif', 'escola,trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(305, 'Malbec Gold', NULL, 'nacional', 'Masculino', 'Malbec Gold.jfif', 'encontro,balada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(306, 'Malbec Icon', NULL, 'nacional', 'Masculino', 'Malbec Icon.jfif', 'trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(307, 'Malbec Noir', NULL, 'nacional', 'Masculino', 'Malbec Noir.jfif', 'encontro,trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(308, 'Malbec X', NULL, 'nacional', 'Masculino', 'Malbec X.jfif', 'encontro,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(309, 'Malbec ', NULL, 'nacional', 'Masculino', 'Malbec.jfif', 'encontro,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(310, 'Mead', NULL, 'nacional', 'Masculino', 'Mead.jfif', 'encontro,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(311, 'Patchouli', NULL, 'nacional', 'Masculino', 'Patchouli.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(312, 'Quasar Blue', NULL, 'nacional', 'Masculino', 'Quasar Blue.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(313, 'Quasar Ice', NULL, 'nacional', 'Masculino', 'Quasar Ice.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(314, 'Real King Absolu', NULL, 'nacional', 'Masculino', 'Real King Absolu.jfif', 'escola,trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(315, 'Real King', NULL, 'nacional', 'Masculino', 'Real King.jfif', 'escola,trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(316, 'Savana', NULL, 'nacional', 'Masculino', 'Savana.jfif', 'encontro,escola,trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(317, 'The Blend Bourbon', NULL, 'nacional', 'Masculino', 'The Blend Bourbon.jfif', 'encontro,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(318, 'The Blend Cardamom', NULL, 'nacional', 'Masculino', 'The Blend Cardamom.jfif', 'encontro,trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(319, 'The Wave Fluy', NULL, 'nacional', 'Masculino', 'The Wave Fluy.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(320, 'Tonka', NULL, 'nacional', 'Masculino', 'Tonka.jfif', 'encontro,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(321, 'Uzon', NULL, 'nacional', 'Masculino', 'Uzon.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(322, 'Vetiver Phebo', NULL, 'nacional', 'Masculino', 'Vetiver Phebo.jfif', 'escola,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(323, 'Vetiver ', NULL, 'nacional', 'Masculino', 'Vetiver.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(324, 'Vision', NULL, 'nacional', 'Masculino', 'Vision.jfif', 'escola,trabalho,academia,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(325, 'Windstorm', NULL, 'nacional', 'Masculino', 'Windstorm.jfif', 'escola,trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(326, 'Zaad Go', NULL, 'nacional', 'Masculino', 'Zaad Go.jfif', 'escola,trabalho', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(327, 'Zaad ', NULL, 'nacional', 'Masculino', 'Zaad.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(328, 'Born In Roma Intense ', 'Valentino', 'importado', 'Masculino', 'borninromaintense.jfif', 'encontro,reuniao', '780', 'abaunilhado,amadeirado,fresco,terroso,doce,verde', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(329, 'terre d\'hermes intense', 'Hermès', 'importado', 'Masculino', 'terreintense.jfif', 'trabalho,reuniao', '730', 'fresco,picante,amadeirado,citrico,doce,metalico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(330, 'terre d\'hermès parfum', 'Hermès', 'importado', 'Masculino', 'terreparfum.jfif', 'escola,trabalho,reuniao', '730', 'citrico,amadeirado,terroso,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(331, 'Valentino Uomo Intense Valentino ', 'Valentino', 'importado', 'Masculino', 'uomointense.jfif', 'encontro,reuniao', '780', 'abaunilhado,floral,terroso,amadeirado,fresco,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(332, 'Invictus EDT', 'Rabanne', 'importado', 'Masculino', 'Invictus EDT.jfif', 'escola,trabalho,academia', '565', 'citrico,aquatico,fresco,amadeirado,floral,animalico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(333, 'Phantom Parfum', 'Rabanne', 'importado', 'Masculino', 'Phantom parfum.jfif', 'encontro,balada,reuniao', '660', 'abaunilhado,picante,citrico,amadeirado,fresco,doce,verde', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(334, 'Phantom EDT', 'Rabanne', 'importado', 'Masculino', 'Phantom EDT.jfif', 'encontro,trabalho,reuniao', '565', 'citrico,abaunilhado,terroso,amadeirado,frutado,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(335, 'Polo 67', 'Ralph Lauren', 'importado', 'Masculino', 'polo67.jfif', 'encontro,escola,trabalho,reuniao', '615', 'citrico,amadeirado,tropical,frutado,fresco,doce,terroso,verde', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(336, 'Polo Black', 'Ralph Lauren', 'importado', 'Masculino', 'poloblack.jfif', 'encontro,trabalho', '560', 'tropical,frutado,amadeirado,doce,citrico,picante', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(337, 'Polo Green', 'Ralph Lauren', 'importado', 'Masculino', 'pologreen.jfif', 'encontro,trabalho,reuniao', '560', 'amadeirado,fresco,terroso,verde,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(338, 'Polo Red', 'Ralph Lauren', 'importado', 'Masculino', 'polored.jfif', 'escola,trabalho,academia', '530', 'citrico,frutado,picante,amadeirado,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(339, 'Chrome Extreme', 'Azzaro', 'importado', 'Masculino', 'chrome extreme.jfif', 'escola,trabalho,academia', '385', 'aquatico,citrico,amadeirado,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(340, 'The Most Wanted Intense', 'Azzaro', 'importado', 'Masculino', 'the most wanted intense.webp', 'encontro,reuniao', '585', 'citrico,fresco,terroso,amadeirado,verde,floral', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(341, 'Bvgari In Black Parfum', 'Bvlgari', 'importado', 'Masculino', 'bvgari.jfif', 'encontro,reuniao', '755', 'picante,amadeirado,abaunilhado,animalico,floral', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(342, '212 Heroes', 'Carolina Herrera', 'importado', 'Masculino', '212heroes.jfif', 'escola,trabalho,academia', '565', 'fresco,frutado,verde,doce,aquatico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(343, '212 Men', 'Carolina Herrera', 'importado', 'Masculino', '212men.jfif', 'escola,trabalho,academia', '565', 'citrico,verde,fresco,amadeirado,picante,verde', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(344, '212 Vip Black', 'Carolina Herrera', 'importado', 'Masculino', '212vipblack.jfif', 'encontro,balada', '600', 'abaunilhado,picante,doce,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(345, 'CH Men', 'Carolina Herrera', 'importado', 'Masculino', 'chmen.jfif', 'escola,trabalho,reuniao', '565', 'abaunilhado,doce,amadeirado,verde,animalico,fresco,citrico,aquatico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(346, 'Coach Blue', 'Coach', 'importado', 'Masculino', 'coach.jfif', 'escola,trabalho,academia', '445', 'citrico,amadeirado,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(347, 'Light Blue Eau Intense Pour Homme', 'Dolce & Gabbana', 'importado', 'Masculino', 'lightblueintense.webp', 'escola,trabalho,academia', '530', 'citrico,aquatico,fresco,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(348, 'Acqua di Gio Elixir', 'Giorgio Armani', 'importado', 'Masculino', 'aquaelixir.jfif', 'escola,trabalho,reuniao', '745', 'aquatico,citrico,amadeirado,fresco,animalico,terroso,verde', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(349, 'Acqua di Gio Profumo', 'Giorgio Armani', 'importado', 'Masculino', 'aquaprofumo.jfif', 'escola,trabalho,reuniao', '800', 'aquatico,fresco,amadeirado,picante,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(350, 'Armani Code Parfum', 'Giorgio Armani', 'importado', 'Masculino', 'armanicodeparfum.webp', 'encontro,reuniao', '655', 'floral,amadeirado,citrico,abaunilhado,terroso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(351, 'Power Of You', 'Giorgio Armani', 'importado', 'Unissex', 'powerofyou.jfif', 'encontro,balada,reuniao', '800', 'tropical,abaunilhado,doce,frutado,fresco,floral', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(352, 'Stronger With You EDT', 'Giorgio Armani', 'importado', 'Masculino', 'swy.jfif', 'encontro,balada,reuniao', '655', 'abaunilhado,doce,verde,picante', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(353, 'Stronger With You Sandalowood', 'Giorgio Armani', 'importado', 'Masculino', 'swysandalowood.jfif', 'encontro,trabalho,reuniao', '840', 'amadeirado,picante,abaunilhado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(354, 'Givenchy Gentleman EDP', 'Givenchy', 'importado', 'Masculino', 'gentlemanedp.webp', 'encontro,reuniao', '655', 'picante,abaunilhado,floral,fresco,doce,terroso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(355, 'Boss Botled Beyond', 'Hugo Boss', 'importado', 'Masculino', 'bossbottledbeyond.jfif', 'encontro,reuniao', NULL, 'fresco,amadeirado,fresco,animalico,citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(356, 'Boss Bottled Night', 'Hugo Boss', 'importado', 'Masculino', 'bossbottlednight.jfif', 'trabalho,reuniao', NULL, 'amadeirado,floral,animalico,fresco', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'medio'),
(357, 'Versace Eros Energy', 'Versace', 'importado', 'Masculino', 'versaceenegy.jfif', 'escola,trabalho,academia', NULL, 'citrico,fresco,amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(358, 'Versace Eros Parfum', 'Versace', 'importado', 'Masculino', 'erosparfum.webp', 'encontro,balada', NULL, 'fresco,verde,abaunilhado,citrico,frutado,picante,doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte '),
(359, 'Acqua di Gio EDP', NULL, 'importado', 'Masculino', 'aquaedp.jfif', 'escola,trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(360, 'Black XS', NULL, 'importado', 'Masculino', 'blackxs.jfif', 'encontro,escola,trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(361, 'CK One', NULL, 'importado', 'Masculino', 'ckone.jfif', 'academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(362, 'CK One Essence', NULL, 'importado', 'Masculino', 'ckoneessence.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(363, 'Classic Blue', NULL, 'importado', 'Masculino', 'classicblue.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(364, 'Dior Homme Cologne', NULL, 'importado', 'Masculino', 'diorhommecologne.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(365, 'issey miayake Intense', NULL, 'importado', 'Masculino', 'isseymiakeintense.jfif', 'escola,trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(366, 'Kouros ', NULL, 'importado', 'Masculino', 'kouros.jfif', 'encontro,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(367, 'Allure Homme Sport Cologne', NULL, 'importado', 'Masculino', 'allurecologne.jfif', 'escola,trabalho,academia,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(370, 'Malbec Signature', NULL, 'nacional', 'Masculino', 'malbec signature.jfif', 'encontro,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(371, 'Malbec Magnetic', NULL, 'nacional', 'Masculino', 'malbec magnetic.jfif', 'encontro,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(372, 'Quasar Brave', NULL, 'nacional', 'Masculino', 'quasar brave.jfif', 'escola,trabalho,academia,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(373, 'The Blend', NULL, 'nacional', 'Masculino', 'the blend.jfif', 'encontro,trabalho,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(374, 'The Blend Saffron', NULL, 'nacional', 'Masculino', 'the blend saffron.jfif', 'encontro,trabalho,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(375, 'Zaad Santal', NULL, 'nacional', 'Masculino', 'zaad santal.jfif', 'encontro,balada,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(376, 'Zaad Expedition', NULL, 'nacional', 'Masculino', 'zaad expedition.jfif', 'escola,trabalho,reuniao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(377, 'Zaad Artic', NULL, 'nacional', 'Masculino', 'zaad artic.jfif', 'escola,trabalho,academia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(378, 'Neroli Portofino', 'Tom ford', 'nicho', 'Masculino', 'neroli portofino.jfif', 'escola,trabalho,academia,reuniao,dia', '1500', 'citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'leve'),
(379, 'Ombre Leather', 'Tom ford', 'nicho', 'Masculino', 'ombre_leather.jfif', 'encontro,balada,reuniao', '1500', 'amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte'),
(381, 'baccarat rouge 540', 'Maison Francis Kurkdjian', 'nicho', 'Unissex', 'baccarat_rouge_540.jfif', 'encontro,balada', '1500', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte'),
(383, 'Oud Satin Mood', 'Maison Francis Kurkdjian', 'nicho', 'Masculino', 'oud_satin_mood.jfif', 'encontro,balada,reuniao', '2000', 'amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte'),
(384, 'Outlands', 'amouage', 'nicho', 'Masculino', 'outlands.jfif', 'encontro,trabalho,reuniao', '2500', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(385, 'Gypsy Water', 'byredo', 'nicho', 'Masculino', 'gypsy_water.jfif', 'trabalho,reuniao,dia', '2000', 'amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(386, 'Mojave Ghost', 'byredo', 'nicho', 'Masculino', 'mojave_ghost.jfif', 'escola,trabalho,academia,reuniao', '2000', 'floral', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(388, 'Yara', 'lattafa', 'arabe', 'Feminino', 'yara.jfif', 'encontro,escola,trabalho,dia', '200', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(389, 'Yara Moi', 'lattafa', 'arabe', 'Feminino', 'yara_moi.jfif', 'encontro,escola,trabalho,dia', '250', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(390, 'Yara Tous', 'lattafa', 'arabe', 'Feminino', 'yara_tous.jfif', 'encontro,trabalho,balada,dia', '250', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(391, 'Yara Elixir', 'lattafa', 'arabe', 'Feminino', 'yara_elixir.jfif', 'encontro,escola,trabalho,reuniao,dia', '300', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(392, 'Yara Candy', 'lattafa', 'arabe', 'Feminino', 'yara_candy.jfif', 'encontro,balada,reuniao', '250', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte'),
(393, 'Fakhar Rose', 'lattafa', 'arabe', 'Feminino', 'fakhar_rose.jfif', 'encontro,trabalho,reuniao', '150', 'floral', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(395, 'Ana Abiyedh Poudrée', 'lattafa', 'arabe', 'Feminino', 'ana_abiyedh_poudrée.jfif', 'encontro,trabalho,dia', '250', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(396, '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(397, 'Ajwad', 'lattafa', 'arabe', 'Feminino', 'ajwad.jfif', 'escola,trabalho,dia', '180', 'floral', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(400, 'Mayar', 'lattafa', 'arabe', 'Feminino', 'mayar.jfif', 'escola,trabalho,academia,reuniao,dia', '200', 'frutado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(401, 'Mayar Natural Intense', 'lattafa', 'arabe', 'Feminino', 'mayar_natural_intense.jfif', 'escola,trabalho,academia,dia', '250', 'frutado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(402, 'Haya', 'lattafa', 'arabe', 'Feminino', 'haya.jfif', 'encontro,escola,trabalho,academia,reuniao,dia', '250', 'frutado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(403, 'Eclaire', 'lattafa', 'arabe', 'Feminino', 'eclaire.jfif', 'encontro,balada,reuniao', '250', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte'),
(404, 'Musamam White Intense', 'lattafa', 'arabe', 'Unissex', 'musamam_white_intense.jfif', 'escola,trabalho,reuniao,dia', '250', 'amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(405, 'Ishq Al Shuyukh Gold', 'lattafa', 'arabe', 'Unissex', 'ishq_al_shuyukh_gold.jfif', 'encontro,trabalho,reuniao', '250', 'amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(406, 'Nebras', 'lattafa', 'arabe', 'Feminino', 'nebras.jfif', 'encontro,balada,reuniao', '250', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte'),
(407, 'Teriaq', 'lattafa', 'arabe', 'Unissex', 'teriaq.jfif', 'encontro,trabalho,reuniao', '250', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(408, 'Sabah Al Ward', 'Al Wataniah', 'arabe', 'Feminino', 'sabah_al_ward.jfif', 'encontro,escola,trabalho,reuniao', '200', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(409, 'Durrat Al Aroos', 'Al Wataniah', 'arabe', 'Feminino', 'durrat_al_aroos.jfif', 'encontro,escola,trabalho,reuniao', '200', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(410, 'Rose Mystery', 'Al Wataniah', 'arabe', 'Feminino', 'rose_mystery.jfif', 'escola,trabalho,academia,dia', '250', 'floral', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(411, 'Kayaan Classic', 'Al Wataniah', 'arabe', 'Unissex', 'kayaan_classic.jfif', 'encontro,trabalho,reuniao', '250', 'amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(413, 'Ghala', 'Al Wataniah', 'arabe', 'Unissex', 'ghala.jfif', 'encontro,trabalho,reuniao', '250', 'amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(414, 'Modest Deux', 'Afnan', 'arabe', 'Feminino', 'modest_deux.jfif', 'encontro,balada,noite', '250', 'doce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte'),
(415, 'Mystique Bouquet', 'Afnan', 'arabe', 'Feminino', 'mystique_bouquet.jfif', 'escola,trabalho,academia,dia', '250', 'frutado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(416, 'Souvenir Floral Bouquet', 'Afnan', 'arabe', 'Feminino', 'souvenir_floral_bouquet.jfif', 'escola,trabalho,academia,reuniao,dia', '250', 'citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(417, 'Rare Passion', 'Afnan', 'arabe', 'Feminino', 'rare_passion.jfif', 'escola,trabalho,academia,reuniao,dia', '250', 'floral', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(418, 'La Fleur Bouquet', 'Afnan', 'arabe', 'Feminino', 'la_fleur_bouquet.jfif', 'escola,trabalho,academia,reuniao,dia', '250', 'floral', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(419, '9AM Pour Femme', 'Afnan', 'arabe', 'Feminino', '9am_pour_femme.jfif', 'escola,trabalho,academia,dia', '250', 'citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(420, ' Turathi Brown', 'Afnan', 'arabe', 'Unissex', 'Turathi_brown.jfif', 'encontro,escola,trabalho,reuniao', '250', 'amadeirado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(421, 'Ornament Pour Femme', 'Afnan', 'arabe', 'Feminino', 'ornament_pour_femme.jfif', 'encontro,trabalho,reuniao', '250', 'frutado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'forte'),
(422, 'Club de Nuit Woman', 'armaf', 'arabe', 'Feminino', 'club_de_nuit_woman.jfif', 'escola,trabalho,academia,reuniao,dia', '250', 'citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(423, 'Club de Nuit Woman Intense', 'armaf', 'arabe', 'Feminino', 'club_de_nuit_woman_intense.jfif', 'encontro,balada,reuniao', '300', 'floral', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(424, 'Le Parfait Pour Femme', 'armaf', 'arabe', 'Feminino', 'le_parfait_pour_femme.jfif', 'escola,trabalho,academia,reuniao,dia', '300', 'floral', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media'),
(425, 'Kenzie', 'Al Wataniah', 'arabe', 'Unissex', 'kenzie.jfif', 'escola,trabalho,academia,reuniao,dia', '300', 'citrico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'media');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  `reset_token` varchar(64) DEFAULT NULL,
  `reset_expiracao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--


-- --------------------------------------------------------

--
-- Estrutura para tabela `votos`
--

CREATE TABLE `votos` (
  `id` int(11) NOT NULL,
  `nome_perfume` varchar(255) DEFAULT NULL,
  `nota` int(11) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `votos`
--


--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `colecao`
--
ALTER TABLE `colecao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `perfume_id` (`perfume_id`);

--
-- Índices de tabela `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `formularios_salvos`
--
ALTER TABLE `formularios_salvos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Índices de tabela `perfumes`
--
ALTER TABLE `perfumes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `votos`
--
ALTER TABLE `votos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=390;

--
-- AUTO_INCREMENT de tabela `colecao`
--
ALTER TABLE `colecao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `formularios_salvos`
--
ALTER TABLE `formularios_salvos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `perfumes`
--
ALTER TABLE `perfumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=426;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `votos`
--
ALTER TABLE `votos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `colecao`
--
ALTER TABLE `colecao`
  ADD CONSTRAINT `colecao_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `colecao_ibfk_2` FOREIGN KEY (`perfume_id`) REFERENCES `perfumes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
