-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 25 Mai 2017 à 23:46
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `projet`
--
CREATE DATABASE IF NOT EXISTS `projet` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projet`;

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE IF NOT EXISTS `activite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `prix` float NOT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `activite`
--

INSERT INTO `activite` (`id`, `type`, `ville`, `prix`, `date_debut`, `date_fin`) VALUES
(1, 'daz', 'jhj', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'd', 'ddd', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'hicham', 'mergdhicham@gmail.com', '0000');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  `affiliation` varchar(20) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `pays` varchar(20) NOT NULL,
  `datee` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `type`, `affiliation`, `ville`, `pays`, `datee`) VALUES
(1, 'sss', 1, 'fs', 'tetouan', 'marocco', '0000-00-00 00:00:00'),
(2, 'sss', 1, 'fs', 'tetouan', 'marocco', '0000-00-00 00:00:00'),
(3, 'sss', 2, 'ensa', 'tanger', 'marocco', '0000-00-00 00:00:00'),
(4, 'sss', 1, 'ensa', 'tanger', 'marocco', '0000-00-00 00:00:00'),
(5, 'sss', 2, 'fst', 'tanger', 'marocco', '0000-00-00 00:00:00'),
(6, 'sss', 1, 'fst', 'rabat', 'marocco', '0000-00-00 00:00:00'),
(7, 'sss', 1, 'ensa', 'rabat', 'marocco', '0000-00-00 00:00:00'),
(8, 'sss', 2, 'ensa', 'casa', 'marocco', '0000-00-00 00:00:00'),
(9, 'sss', 1, 'ensa', 'casa', 'marocco', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `attestation`
--

CREATE TABLE IF NOT EXISTS `attestation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dilibration` varchar(20) NOT NULL,
  `id_article` int(11) NOT NULL,
  `date_dilibration` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_article` (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE IF NOT EXISTS `auteur` (
  `cin` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `auteur`
--

INSERT INTO `auteur` (`cin`, `nom`, `prenom`, `role`) VALUES
('1', 'hkdkdk', 'djdkdk', 'cc'),
('10', 'alaoui', 'rachid', 'rtg'),
('2', 'hdhdh', 'gdfddg', 'c dcd'),
('3', 'riyadi', 'najoua', 'gf'),
('4', 'ghazi', 'ahmed', 'ffh'),
('5', 'bennani', 'samir', 'hez'),
('6', 'bakkali', 'oussama', 'a'),
('7', 'allouch', 'latifa', 'a'),
('8', 'faouzi', 'roba', 'hty'),
('9', 'lasmar', 'lina', 'tgt');

-- --------------------------------------------------------

--
-- Structure de la table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) DEFAULT NULL,
  `ville` varchar(20) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `nbr_chambre` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `hotel`
--

INSERT INTO `hotel` (`id`, `nom`, `ville`, `prix`, `nbr_chambre`) VALUES
(2, 'ibis', 'tanger', 150, 5),
(3, 'bible', 'ma', 200, 6);

-- --------------------------------------------------------

--
-- Structure de la table `modele_attestation`
--

CREATE TABLE IF NOT EXISTS `modele_attestation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modele` varchar(20) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `organisation`
--

CREATE TABLE IF NOT EXISTS `organisation` (
  `cin` varchar(20) NOT NULL,
  `id_article` int(11) NOT NULL,
  KEY `id_article` (`id_article`),
  KEY `cin` (`cin`),
  KEY `cin_2` (`cin`),
  KEY `id_article_2` (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `organisation`
--

INSERT INTO `organisation` (`cin`, `id_article`) VALUES
('1', 1),
('1', 2),
('1', 3),
('4', 4),
('5', 5);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL DEFAULT '0',
  `id_article` int(11) NOT NULL,
  `paiement_article` varchar(20) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `paiement_hotel` varchar(20) NOT NULL,
  `id_activite` int(11) NOT NULL,
  `paiement_activite` varchar(20) NOT NULL,
  `dilibration` varchar(20) NOT NULL,
  `cin` varchar(20) NOT NULL,
  `nbr_chambre` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cin` (`cin`),
  KEY `id_article` (`id_article`),
  KEY `id_hotel` (`id_hotel`),
  KEY `id_activite` (`id_activite`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_article`
--

CREATE TABLE IF NOT EXISTS `type_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `type_article`
--

INSERT INTO `type_article` (`id`, `nom`, `prix`) VALUES
(1, 'acadimice', 50),
(2, 'fff', 400);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`type`) REFERENCES `type_article` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `attestation`
--
ALTER TABLE `attestation`
  ADD CONSTRAINT `attestation_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `organisation`
--
ALTER TABLE `organisation`
  ADD CONSTRAINT `organisation_ibfk_2` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `organisation_ibfk_1` FOREIGN KEY (`cin`) REFERENCES `auteur` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_4` FOREIGN KEY (`id_activite`) REFERENCES `activite` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`cin`) REFERENCES `auteur` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_ibfk_2` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_ibfk_3` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
