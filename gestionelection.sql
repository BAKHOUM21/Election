-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 11 août 2021 à 14:36
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionelection`
--

-- --------------------------------------------------------

--
-- Structure de la table `bureau`
--

DROP TABLE IF EXISTS `bureau`;
CREATE TABLE IF NOT EXISTS `bureau` (
  `id` int NOT NULL,
  `bureau_name` varchar(155) NOT NULL,
  `s_id` int NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `s_id` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bureau`
--

INSERT INTO `bureau` (`id`, `bureau_name`, `s_id`, `time_stamp`) VALUES
(1, '1', 1, '2021-08-10 16:43:35'),
(2, '2', 2, '2021-08-10 16:43:35');

-- --------------------------------------------------------

--
-- Structure de la table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` int NOT NULL AUTO_INCREMENT,
  `city_name` varchar(155) NOT NULL,
  `s_id` int NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `city`
--

INSERT INTO `city` (`id`, `city_name`, `s_id`, `time_stamp`) VALUES
(1, 'GUEULE TAPEE FASS COLOBANE	', 1, '2019-12-05 16:31:42'),
(2, 'FANN POINT E AMITIE', 1, '2019-12-05 16:31:42'),
(3, 'Parcelles Assainies', 2, '2019-12-05 16:32:49'),
(4, 'DIEUPPEUL DERKLE', 5, '2019-12-05 16:32:49'),
(5, 'BISCUITERIE', 5, '2019-12-05 17:03:01'),
(6, 'GOREE', 1, '2021-08-10 15:16:03'),
(7, 'MEDINA', 1, '2021-08-10 15:16:03'),
(8, 'Grand YOFF', 2, '2021-08-10 15:17:09'),
(9, 'PATTE D OIE', 2, '2021-08-10 15:17:09'),
(10, 'HANN BEL AIR', 5, '2021-08-10 15:21:22'),
(11, 'SICAP LIBERTE', 5, '2021-08-10 15:21:22'),
(12, 'YOFF', 6, '2021-08-10 15:24:46'),
(13, 'NGOR', 6, '2021-08-10 15:24:46'),
(14, 'OUAKAM', 6, '2021-08-10 15:24:46'),
(15, 'MERMOZ SACRE COEUR', 6, '2021-08-10 15:24:46'),
(16, 'DALIFORT', 7, '2021-08-10 15:29:36'),
(17, 'DJIDA THIAROYE KAO', 7, '2021-08-10 15:29:36'),
(18, 'DJIDA THIAROYE KAO', 7, '2021-08-10 15:29:36'),
(19, 'GUINAW RAIL SUD', 7, '2021-08-10 15:29:36'),
(20, 'GUINAW RAIL NORD', 7, '2021-08-10 15:29:36'),
(21, 'Pikine EST', 7, '2021-08-10 15:29:36'),
(22, 'Pikine NORD', 7, '2021-08-10 15:29:36'),
(23, 'Pikine OUEST', 7, '2021-08-10 15:29:36'),
(24, 'MALIKA	\r\n		\r\n', 8, '2021-08-10 15:32:29'),
(25, 'YEUMBEUL SUD', 8, '2021-08-10 15:32:29'),
(26, 'YEUMBEUL NORD', 8, '2021-08-10 15:32:29');

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `id` int NOT NULL AUTO_INCREMENT,
  `country_name` varchar(155) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `country`
--

INSERT INTO `country` (`id`, `country_name`, `time_stamp`) VALUES
(1, 'Dakar', '2019-12-05 16:29:16'),
(2, 'Pikine', '2019-12-05 16:29:16'),
(3, 'Guediawaye', '2019-12-05 16:29:44'),
(4, 'Rufisque', '2019-12-05 16:29:44');

-- --------------------------------------------------------

--
-- Structure de la table `ele`
--

DROP TABLE IF EXISTS `ele`;
CREATE TABLE IF NOT EXISTS `ele` (
  `id_electeur` int NOT NULL AUTO_INCREMENT,
  `num_electeur` int NOT NULL,
  `cni_election` int NOT NULL,
  `nomelecteur` varchar(50) NOT NULL,
  `prenomelecteur` varchar(50) NOT NULL,
  `nompere` varchar(50) NOT NULL,
  `nommere` varchar(50) NOT NULL,
  `datenaissance` date NOT NULL,
  `lieudenaissance` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `commune` varchar(50) NOT NULL,
  `bureau` int NOT NULL,
  PRIMARY KEY (`id_electeur`)
) ENGINE=InnoDB AUTO_INCREMENT=568 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `ele`
--

INSERT INTO `ele` (`id_electeur`, `num_electeur`, `cni_election`, `nomelecteur`, `prenomelecteur`, `nompere`, `nommere`, `datenaissance`, `lieudenaissance`, `mdp`, `departement`, `arrondissement`, `commune`, `bureau`) VALUES
(567, 890, 3245, 'DIOUF', 'LAMINE', 'MBAYE', 'FALL', '2021-08-01', 'FASS', 'EZRTYUIO', 'Dakar', 'Grand Dakar', 'Medina', 1);

-- --------------------------------------------------------

--
-- Structure de la table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `id` int NOT NULL AUTO_INCREMENT,
  `state_name` varchar(155) NOT NULL,
  `c_id` int NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `state`
--

INSERT INTO `state` (`id`, `state_name`, `c_id`, `time_stamp`) VALUES
(1, 'Dakar Plateau', 1, '2019-12-05 16:30:15'),
(2, 'Parcelles Assainies', 1, '2019-12-05 16:30:15'),
(5, 'Grand Dakar', 1, '2019-12-05 17:02:22'),
(6, 'Almadies', 1, '2019-12-05 17:02:22'),
(7, 'Pikine Dagoudane', 2, '2021-08-10 14:51:59'),
(8, 'Niayes', 2, '2021-08-10 14:51:59'),
(9, 'Thiaroye', 2, '2021-08-10 14:55:01'),
(10, 'GOLF SUD', 3, '2021-08-10 14:57:43'),
(11, 'MEDINA GOUNASS', 3, '2021-08-10 14:58:09'),
(12, 'NDIAREME', 3, '2021-08-10 14:58:59'),
(13, 'SAM NOTAIRE', 3, '2021-08-10 14:58:59'),
(14, 'Rufisque', 4, '2021-08-10 15:07:05'),
(15, 'Sangalkam', 4, '2021-08-10 15:07:05');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bureau`
--
ALTER TABLE `bureau`
  ADD CONSTRAINT `bureau_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `city` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
