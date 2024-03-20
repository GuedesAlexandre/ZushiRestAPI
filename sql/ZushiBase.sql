-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 20 mars 2024 à 15:32
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `aliments`
--

DROP TABLE IF EXISTS `aliments`;
CREATE TABLE IF NOT EXISTS `aliments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantite` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `aliments`
--

INSERT INTO `aliments` (`id`, `nom`, `quantite`) VALUES
(1, 'California Saumon Avocat', 5),
(2, 'Sushi Saumon', 5),
(3, 'Spring Avocat Cheese', 5),
(4, 'California pacific', 5),
(5, 'Edamame/Salade de chou', 5),
(6, 'Maki Salmon Roll', 5),
(7, 'Spring Saumon Avocat', 5),
(8, 'Maki Cheese Avocat', 5),
(9, 'California Thon Cuit Avocat', 5),
(10, 'Sushi Thon', 5),
(11, 'California Thon Avocat', 5),
(12, 'Sando Chicken Katsu', 5),
(13, 'Sando Salmon Aburi', 5),
(14, 'Maki Salmon', 5),
(15, 'California Crevette', 5),
(16, 'California Chicken Katsu', 5),
(17, 'Spring tataki Saumon', 5),
(18, 'Signature Dragon Roll', 5),
(19, 'California French Touch', 5),
(20, 'California French salmon', 5),
(21, 'California Yellowtail Ponzu', 5),
(22, 'Signature Rock\'n Roll', 5),
(23, 'Sushi Salmon', 5),
(24, 'Sushi Saumon Tsukudani', 5);

-- --------------------------------------------------------

--
-- Structure de la table `boissons`
--

DROP TABLE IF EXISTS `boissons`;
CREATE TABLE IF NOT EXISTS `boissons` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prix` double NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantite` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `boxs`
--

DROP TABLE IF EXISTS `boxs`;
CREATE TABLE IF NOT EXISTS `boxs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `pieces` int NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `boxs`
--

INSERT INTO `boxs` (`id`, `nom`, `prix`, `pieces`, `img`) VALUES
(1, 'Tasty Blend', 12.5, 12, 'tasty-blend.jpg'),
(2, 'Amateur Mix', 15.9, 18, 'amateur-mix.jpg'),
(3, 'Saumon Original', 12.5, 11, 'saumon-original.jpg'),
(4, 'Salmon Lovers', 15.9, 18, 'salmon-lovers.jpg'),
(5, 'Salmon Classic', 15.9, 10, 'salmon-classic.jpg'),
(6, 'Master Mix', 15.9, 12, 'master-mix.jpg'),
(7, 'Sunrise', 15.9, 18, 'sunrise.jpg'),
(8, 'Sando Box Chicken Katsu', 15.9, 13, 'sando-box-chicken-katsu.jpg'),
(9, 'Sando Box Salmon Aburi', 15.9, 13, 'sando-box-salmon-aburi.jpg'),
(10, 'Super Salmon', 19.9, 24, 'super-salmon.jpg'),
(11, 'California Dream', 19.9, 24, 'california-dream.jpg'),
(12, 'Gourmet Mix', 24.5, 22, 'gourmet-mix.jpg'),
(13, 'Fresh Mix', 24.5, 22, 'fresh-mix.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `boxs_aliments`
--

DROP TABLE IF EXISTS `boxs_aliments`;
CREATE TABLE IF NOT EXISTS `boxs_aliments` (
  `boxs_id` int NOT NULL,
  `aliments_id` int NOT NULL,
  PRIMARY KEY (`boxs_id`,`aliments_id`),
  KEY `IDX_1D89CFD151CF8763` (`boxs_id`),
  KEY `IDX_1D89CFD18D80C648` (`aliments_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `boxs_aliments`
--

INSERT INTO `boxs_aliments` (`boxs_id`, `aliments_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(2, 1),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(3, 1),
(3, 2),
(3, 5),
(4, 1),
(4, 2),
(4, 5),
(4, 7),
(5, 2),
(5, 5),
(6, 1),
(6, 2),
(6, 5),
(6, 10),
(6, 11),
(7, 1),
(7, 5),
(7, 6),
(7, 9),
(8, 1),
(8, 5),
(8, 6),
(8, 9),
(8, 12),
(9, 1),
(9, 5),
(9, 9),
(9, 13),
(10, 1),
(10, 5),
(10, 6),
(10, 7),
(10, 14),
(11, 1),
(11, 5),
(11, 9),
(11, 15),
(11, 16),
(12, 5),
(12, 18),
(12, 19),
(12, 20),
(12, 21),
(12, 22),
(13, 4),
(13, 5),
(13, 6),
(13, 23),
(13, 24);

-- --------------------------------------------------------

--
-- Structure de la table `boxs_commandes`
--

DROP TABLE IF EXISTS `boxs_commandes`;
CREATE TABLE IF NOT EXISTS `boxs_commandes` (
  `boxs_id` int NOT NULL,
  `commandes_id` int NOT NULL,
  PRIMARY KEY (`boxs_id`,`commandes_id`),
  KEY `IDX_4BCF1F9751CF8763` (`boxs_id`),
  KEY `IDX_4BCF1F978BF5C2E6` (`commandes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `boxs_saveurs`
--

DROP TABLE IF EXISTS `boxs_saveurs`;
CREATE TABLE IF NOT EXISTS `boxs_saveurs` (
  `boxs_id` int NOT NULL,
  `saveurs_id` int NOT NULL,
  PRIMARY KEY (`boxs_id`,`saveurs_id`),
  KEY `IDX_3E5B184E51CF8763` (`boxs_id`),
  KEY `IDX_3E5B184E3E2A04D2` (`saveurs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `boxs_saveurs`
--

INSERT INTO `boxs_saveurs` (`boxs_id`, `saveurs_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(4, 4),
(5, 1),
(6, 1),
(6, 2),
(6, 5),
(7, 1),
(7, 2),
(7, 3),
(7, 5),
(8, 1),
(8, 2),
(8, 3),
(8, 6),
(9, 1),
(9, 2),
(9, 5),
(10, 1),
(10, 2),
(10, 5),
(11, 1),
(11, 2),
(11, 5),
(11, 6),
(11, 7),
(11, 8),
(12, 1),
(12, 2),
(12, 4),
(12, 6),
(12, 8),
(12, 9),
(13, 1),
(13, 2),
(13, 3),
(13, 5),
(13, 8);

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `prix_total` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commandes_boissons`
--

DROP TABLE IF EXISTS `commandes_boissons`;
CREATE TABLE IF NOT EXISTS `commandes_boissons` (
  `commandes_id` int NOT NULL,
  `boissons_id` int NOT NULL,
  PRIMARY KEY (`commandes_id`,`boissons_id`),
  KEY `IDX_784599928BF5C2E6` (`commandes_id`),
  KEY `IDX_784599927366CD21` (`boissons_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20240216162716', '2024-03-20 15:10:48', 4),
('DoctrineMigrations\\Version20240227140917', '2024-03-20 15:15:47', 4),
('DoctrineMigrations\\Version20240227161355', '2024-03-20 15:15:47', 1),
('DoctrineMigrations\\Version20240227161519', '2024-03-20 15:15:47', 0);

-- --------------------------------------------------------

--
-- Structure de la table `saveurs`
--

DROP TABLE IF EXISTS `saveurs`;
CREATE TABLE IF NOT EXISTS `saveurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantite` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `saveurs`
--

INSERT INTO `saveurs` (`id`, `nom`, `quantite`) VALUES
(1, 'saumon', 1),
(2, 'avocat', 8),
(3, 'cheese', 9),
(4, 'coriandre', 4),
(5, 'thon', 4),
(6, 'viande', 5),
(7, 'crevette', 6),
(8, 'spicy', 2),
(9, 'seriole lalandi', 6);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `boxs_aliments`
--
ALTER TABLE `boxs_aliments`
  ADD CONSTRAINT `FK_1D89CFD151CF8763` FOREIGN KEY (`boxs_id`) REFERENCES `boxs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_1D89CFD18D80C648` FOREIGN KEY (`aliments_id`) REFERENCES `aliments` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `boxs_commandes`
--
ALTER TABLE `boxs_commandes`
  ADD CONSTRAINT `FK_4BCF1F9751CF8763` FOREIGN KEY (`boxs_id`) REFERENCES `boxs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_4BCF1F978BF5C2E6` FOREIGN KEY (`commandes_id`) REFERENCES `commandes` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `boxs_saveurs`
--
ALTER TABLE `boxs_saveurs`
  ADD CONSTRAINT `FK_3E5B184E3E2A04D2` FOREIGN KEY (`saveurs_id`) REFERENCES `saveurs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_3E5B184E51CF8763` FOREIGN KEY (`boxs_id`) REFERENCES `boxs` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commandes_boissons`
--
ALTER TABLE `commandes_boissons`
  ADD CONSTRAINT `FK_784599927366CD21` FOREIGN KEY (`boissons_id`) REFERENCES `boissons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_784599928BF5C2E6` FOREIGN KEY (`commandes_id`) REFERENCES `commandes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;