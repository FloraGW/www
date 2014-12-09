-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 09 Décembre 2014 à 10:47
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
  `Nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`noCategorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`noCategorie`, `Nom`) VALUES
(2, 'Problèmes Techniques'),
(5, 'Divers');

-- --------------------------------------------------------

--
-- Structure de la table `fil`
--

CREATE TABLE IF NOT EXISTS `fil` (
  `noFil` int(11) NOT NULL AUTO_INCREMENT,
  `noCategorie` int(11) NOT NULL,
  `Nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`noFil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `fil`
--

INSERT INTO `fil` (`noFil`, `noCategorie`, `Nom`) VALUES
(2, 5, 'Premier test'),
(4, 5, 'YAHOO / GOOGLE');

-- --------------------------------------------------------

--
-- Structure de la table `nouvelle`
--

CREATE TABLE IF NOT EXISTS `nouvelle` (
  `noNouvelle` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Contenu` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `DateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`noNouvelle`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `nouvelle`
--

INSERT INTO `nouvelle` (`noNouvelle`, `Titre`, `Contenu`, `DateCreation`) VALUES
(1, 'Ouverture !', 'C''est la grande ouverture du site officiel du jeu vidéo le plus attendu de l''année : The Rise of Mont-Shäff !!!', '2014-12-07 23:39:10'),
(2, 'Viva la résolution !', 'Chers joueurs, chères joueuses,\r\n\r\nLa conception du jeu va bon train. Nous vous remercions d''être en si grand nombre à suivre le développement de The Rise of Mont-Shäff, le jeu qui va révolutionner le monde.', '2014-12-08 00:50:14'),
(4, 'Iñtërnâtiônàlizætiøn !', 'Iñtërnâtiônàlizætiøn QUE ES ? UNA MODIFICACION DEL PATRA !', '2014-12-08 02:56:39'),
(5, 'La toute première nouvelle entrée par le site', 'TESTONS ET HOURRA !', '2014-12-09 07:23:12');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `noPhoto` int(11) NOT NULL AUTO_INCREMENT,
  `Chemin` varchar(255) NOT NULL,
  PRIMARY KEY (`noPhoto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `photo`
--

INSERT INTO `photo` (`noPhoto`, `Chemin`) VALUES
(1, 'vue/galerie/image/art1.jpg'),
(2, 'vue/galerie/image/2.jpg'),
(3, 'vue/galerie/image/art2.jpg'),
(4, 'vue/galerie/image/art3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `noPost` int(11) NOT NULL AUTO_INCREMENT,
  `noFil` int(11) NOT NULL,
  `noUtilisateur` int(11) NOT NULL,
  `Contenu` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `DateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`noPost`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `post`
--

INSERT INTO `post` (`noPost`, `noFil`, `noUtilisateur`, `Contenu`, `DateCreation`) VALUES
(2, 2, 1, 'Une fois de plus, l''équipe de MicroShäff réussit à surprendre ses usagers en affichant un tout nouveau post !!!', '0000-00-00 00:00:00'),
(3, 4, 1, 'testons', '2014-12-09 00:29:10'),
(4, 4, 1, 'Testons encore !! :D', '2014-12-09 00:29:20'),
(5, 4, 2, 'Dieu&lt;', '2014-12-09 00:29:46'),
(7, 2, 5, 'On essaie deux trois trucs !\r\nHourra !', '2014-12-09 06:22:14'),
(8, 2, 2, 'Dieu est partout', '2014-12-09 06:22:58');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `noUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `MotDePasse` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Role` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`noUtilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`noUtilisateur`, `Nom`, `MotDePasse`, `Role`, `Avatar`) VALUES
(1, 'Sideni', '123456', 'Admin', 'vue/utilisateur/image/sideni.jpg'),
(2, 'Dieu', 'dieu', 'Admin', 'vue/utilisateur/image/Dieu.jpg'),
(3, 'Flora', '1234', 'Admin', 'vue/utilisateur/image/Flora.jpg'),
(5, 'test', 'test', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `noVideo` int(11) NOT NULL AUTO_INCREMENT,
  `Code` varchar(25) NOT NULL,
  PRIMARY KEY (`noVideo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`noVideo`, `Code`) VALUES
(1, 'W7Dcev81AIM'),
(2, 'Av5ZMqj15XE'),
(3, 'CsGYh8AacgY');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
