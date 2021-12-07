-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 07 déc. 2021 à 20:25
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `location`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

DROP TABLE IF EXISTS `annonces`;
CREATE TABLE IF NOT EXISTS `annonces` (
  `an_id` int(11) NOT NULL AUTO_INCREMENT,
  `an_type` varchar(30) NOT NULL,
  `an_adresse` varchar(30) NOT NULL,
  `an_surface` varchar(30) NOT NULL,
  `an_pièce` int(11) NOT NULL,
  `wilaya` varchar(30) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `an_statut` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`an_id`),
  KEY `fk5` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`an_id`, `an_type`, `an_adresse`, `an_surface`, `an_pièce`, `wilaya`, `user_id`, `an_statut`) VALUES
(1, 'villa', 'adresse 12345', '300', 5, 'alger', 3, 'approved'),
(2, 'villa', 'adresse 12345', '300', 5, 'alger', 4, 'approved'),
(3, 'villa', 'adresse 12345', '300', 5, 'alger', 5, 'approved'),
(4, 'villa', 'adresse 12345', '300', 5, 'alger', 6, 'approved'),
(5, 'villa', 'adresse 12345', '300', 5, 'alger', 7, 'approved'),
(6, 'villa', 'adresse 12345', '300', 5, 'alger', 8, 'approved'),
(7, 'villa', 'adresse 12345', '300', 5, 'alger', 9, 'approved');

-- --------------------------------------------------------

--
-- Structure de la table `clauses`
--

DROP TABLE IF EXISTS `clauses`;
CREATE TABLE IF NOT EXISTS `clauses` (
  `clause_id` int(11) NOT NULL AUTO_INCREMENT,
  `caluse_nom` varchar(30) NOT NULL,
  `clause_montant` varchar(30) NOT NULL,
  `contrat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`clause_id`),
  KEY `fk4` (`contrat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commodites`
--

DROP TABLE IF EXISTS `commodites`;
CREATE TABLE IF NOT EXISTS `commodites` (
  `como_id` int(11) NOT NULL AUTO_INCREMENT,
  `Como_type` varchar(10) NOT NULL,
  `Como_nom` varchar(30) NOT NULL,
  `distance` varchar(30) NOT NULL,
  `an_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`como_id`),
  KEY `fk12` (`an_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commodites`
--

INSERT INTO `commodites` (`como_id`, `Como_type`, `Como_nom`, `distance`, `an_id`) VALUES
(1, 'hopital', 'mustapha', '500', 1),
(2, 'hopital', 'mustapha', '600', 2),
(3, 'hopital', 'mustapha', '700', 3),
(4, 'hopital', 'mustapha', '800', 4),
(5, 'hopital', 'mustapha', '900', 5),
(6, 'hopital', 'mustapha', '200', 6),
(7, 'hopital', 'mustapha', '100', 7),
(8, 'hopital', 'mustapha', '300', 8),
(9, 'hopital', 'mustapha', '400', 9);

-- --------------------------------------------------------

--
-- Structure de la table `contrats`
--

DROP TABLE IF EXISTS `contrats`;
CREATE TABLE IF NOT EXISTS `contrats` (
  `contrat_id` int(11) NOT NULL AUTO_INCREMENT,
  `Contrat_type` varchar(30) NOT NULL,
  `Date_deb` date NOT NULL,
  `Date_fin` date NOT NULL,
  `informations` varchar(30) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `an_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`contrat_id`),
  KEY `fk2` (`user_id`),
  KEY `fk3` (`an_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contrats`
--

INSERT INTO `contrats` (`contrat_id`, `Contrat_type`, `Date_deb`, `Date_fin`, `informations`, `user_id`, `an_id`) VALUES
(1, 'exclusivité', '2020-12-12', '2025-12-12', 'contract classé', 3, 1),
(2, 'exclusivité', '2020-12-12', '2025-12-12', 'contract classé', 4, 2),
(3, 'exclusivité', '2020-12-12', '2025-12-12', 'contract classé', 5, 3),
(4, 'exclusivité', '2020-12-12', '2025-12-12', 'contract classé', 6, 4),
(5, 'exclusivité', '2020-12-12', '2025-12-12', 'contract classé', 7, 5),
(6, 'exclusivité', '2020-12-12', '2025-12-12', 'contract classé', 8, 6),
(7, 'exclusivité', '2020-12-12', '2025-12-12', 'contract classé', 9, 7);

-- --------------------------------------------------------

--
-- Structure de la table `equipements`
--

DROP TABLE IF EXISTS `equipements`;
CREATE TABLE IF NOT EXISTS `equipements` (
  `equip_id` int(11) NOT NULL AUTO_INCREMENT,
  `equip_type` varchar(30) NOT NULL,
  `equip_nom` varchar(30) NOT NULL,
  `an_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`equip_id`),
  KEY `fk13` (`an_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `equipements`
--

INSERT INTO `equipements` (`equip_id`, `equip_type`, `equip_nom`, `an_id`) VALUES
(1, 'electromenager', 'robot', 1),
(2, 'electromenager', 'robot', 2),
(3, 'electromenager', 'robot', 3),
(4, 'electromenager', 'robot', 4),
(5, 'electromenager', 'robot', 5),
(6, 'electromenager', 'robot', 6),
(7, 'electromenager', 'robot', 7),
(8, 'electromenager', 'robot', 8),
(9, 'electromenager', 'robot', 9);

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

DROP TABLE IF EXISTS `medias`;
CREATE TABLE IF NOT EXISTS `medias` (
  `media_id` int(11) NOT NULL AUTO_INCREMENT,
  `Media_type` varchar(30) NOT NULL,
  `Media_nom` varchar(30) NOT NULL,
  `Media_dir` varchar(50) NOT NULL,
  `Media_descrip` varchar(300) NOT NULL,
  `an_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`media_id`),
  KEY `fk14` (`an_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `medias`
--

INSERT INTO `medias` (`media_id`, `Media_type`, `Media_nom`, `Media_dir`, `Media_descrip`, `an_id`) VALUES
(1, 'photo', 'photo.jpg', '/dev/images/', 'description', 1),
(2, 'photo', 'photo.jpg', '/dev/images/', 'description', 2),
(3, 'photo', 'photo.jpg', '/dev/images/', 'description', 3),
(4, 'photo', 'photo.jpg', '/dev/images/', 'description', 4),
(5, 'photo', 'photo.jpg', '/dev/images/', 'description', 5),
(6, 'photo', 'photo.jpg', '/dev/images/', 'description', 6),
(7, 'photo', 'photo.jpg', '/dev/images/', 'description', 7),
(8, 'photo', 'photo.jpg', '/dev/images/', 'description', 8),
(9, 'photo', 'photo.jpg', '/dev/images/', 'description', 9);

-- --------------------------------------------------------

--
-- Structure de la table `prix`
--

DROP TABLE IF EXISTS `prix`;
CREATE TABLE IF NOT EXISTS `prix` (
  `prix` decimal(19,4) NOT NULL,
  `id_periode` int(11) DEFAULT NULL,
  `an_id` int(11) DEFAULT NULL,
  KEY `fk10` (`id_periode`),
  KEY `fk11` (`an_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `prix`
--

INSERT INTO `prix` (`prix`, `id_periode`, `an_id`) VALUES
('5000.0000', 1, 1),
('5000.0000', 1, 2),
('5000.0000', 1, 3),
('5000.0000', 1, 4),
('5000.0000', 1, 5),
('5000.0000', 1, 6),
('5000.0000', 1, 7),
('5000.0000', 1, 8),
('5000.0000', 1, 9);

-- --------------------------------------------------------

--
-- Structure de la table `ptarifaires`
--

DROP TABLE IF EXISTS `ptarifaires`;
CREATE TABLE IF NOT EXISTS `ptarifaires` (
  `id_periode` int(11) NOT NULL AUTO_INCREMENT,
  `couleurs` varchar(30) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  PRIMARY KEY (`id_periode`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ptarifaires`
--

INSERT INTO `ptarifaires` (`id_periode`, `couleurs`, `date_debut`, `date_fin`) VALUES
(1, 'haute saison', '2021-12-08', '2022-03-08'),
(2, 'basse saison', '2022-03-08', '2022-05-08'),
(3, 'moyenne saison', '2022-05-08', '2022-06-08'),
(4, 'normal saison', '2022-06-08', '2022-07-08'),
(5, 'forte saison', '2022-07-08', '2022-08-08');

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

DROP TABLE IF EXISTS `rdv`;
CREATE TABLE IF NOT EXISTS `rdv` (
  `rdv_id` int(11) NOT NULL AUTO_INCREMENT,
  `rdv_date_prevu` date NOT NULL,
  `rdv_date_demander` date NOT NULL,
  `rdv_heure` time NOT NULL,
  `statut` varchar(30) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `an_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`rdv_id`),
  KEY `fk8` (`user_id`),
  KEY `fk9` (`an_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `reserv_id` int(11) NOT NULL AUTO_INCREMENT,
  `reserv_type` varchar(30) NOT NULL,
  `versement` varchar(30) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `an_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`reserv_id`),
  KEY `fk6` (`user_id`),
  KEY `fk7` (`an_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `telephones`
--

DROP TABLE IF EXISTS `telephones`;
CREATE TABLE IF NOT EXISTS `telephones` (
  `telephone_id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(30) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`telephone_id`),
  KEY `fk1` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `telephones`
--

INSERT INTO `telephones` (`telephone_id`, `numero`, `user_id`) VALUES
(1, '+213 123 456 789', 1),
(2, '+213 123 456 789', 2),
(3, '+213 123 456 789', 3),
(4, '+213 123 456 789', 4),
(5, '+213 123 456 789', 5),
(6, '+213 123 456 789', 6),
(7, '+213 123 456 789', 7),
(8, '+213 123 456 789', 8),
(9, '+213 123 456 789', 9);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `nom`, `prenom`, `email`, `adresse`, `password`, `role`) VALUES
(1, 'zakaria', 'boucetta', 'zakaria-boucetta@mail.com', 'adresse', '123456789azerty', 'directeur'),
(2, 'oussama', 'bendada', 'oussama-bendada@mail.com', 'adresse', '123456789azerty', 'agent'),
(3, 'manel', 'talamali', 'manel-talamali@mail.com', 'adresse', '123456789azerty', 'client'),
(4, 'amina', 'derf', 'amina-derf@mail.com', 'adresse', '123456789azerty', 'client'),
(5, 'rym', 'tigiwart', 'rym-tigiwart@mail.com', 'adresse', '123456789azerty', 'client'),
(6, 'feriel', 'bensalem', 'feriel-bensalem@mail.com', 'adresse', '123456789azerty', 'client'),
(7, 'mohamed', 'bouarouj', 'mohamed-bouarouj@mail.com', 'adresse', '123456789azerty', 'client'),
(8, 'toufik', 'slimani', 'toufik-slimani@mail.com', 'adresse', '123456789azerty', 'client'),
(9, 'houria', 'hakem', 'houria-hakem@mail.com', 'adresse', '123456789azerty', 'client');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
