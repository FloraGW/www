-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 08 Décembre 2014 à 04:37
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `riseofmontshaff`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `noCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  PRIMARY KEY (`noCategorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`noCategorie`, `Nom`) VALUES
(1, 'Divers'),
(2, 'Problèmes techniques'),
(3, 'Suggestions'),
(4, 'Guides');

-- --------------------------------------------------------

--
-- Structure de la table `fil`
--

CREATE TABLE IF NOT EXISTS `fil` (
  `noFil` int(11) NOT NULL AUTO_INCREMENT,
  `noCategorie` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  PRIMARY KEY (`noFil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `fil`
--

INSERT INTO `fil` (`noFil`, `noCategorie`, `Nom`) VALUES
(1, 1, 'PREMIER FIL');

-- --------------------------------------------------------

--
-- Structure de la table `nouvelle`
--

CREATE TABLE IF NOT EXISTS `nouvelle` (
  `noNouvelle` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(100) NOT NULL,
  `Contenu` text NOT NULL,
  `DateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`noNouvelle`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `noPost` int(11) NOT NULL AUTO_INCREMENT,
  `noFil` int(11) NOT NULL,
  `noUtilisateur` int(11) NOT NULL,
  `Contenu` text NOT NULL,
  `DateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`noPost`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `post`
--

INSERT INTO `post` (`noPost`, `noFil`, `noUtilisateur`, `Contenu`, `DateCreation`) VALUES
(1, 1, 1, 'Premier fil du forum !!!', '2014-12-08 03:14:57');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `noUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(25) NOT NULL,
  `MotDePasse` varchar(25) NOT NULL,
  `Role` varchar(25) NOT NULL,
  `Avatar` varchar(255) NOT NULL,
  PRIMARY KEY (`noUtilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`noUtilisateur`, `Nom`, `MotDePasse`, `Role`, `Avatar`) VALUES
(1, 'Sideni', '123456', 'Dieu', 'vue/utilisateur/image/sideni.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
