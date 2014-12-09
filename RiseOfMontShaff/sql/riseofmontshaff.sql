-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 09 Décembre 2014 à 22:58
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `fil`
--

INSERT INTO `fil` (`noFil`, `noCategorie`, `Nom`) VALUES
(2, 5, 'Test1'),
(3, 5, 'Test2'),
(4, 5, 'YAHOO'),
(5, 5, 'Test3'),
(6, 5, 'Ça s''en vient !');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `nouvelle`
--

INSERT INTO `nouvelle` (`noNouvelle`, `Titre`, `Contenu`, `DateCreation`) VALUES
(1, 'Ouverture !', 'C''est la grande ouverture du site officiel du jeu vidéo le plus attendu de l''année : The Rise of Mont-Shäff !!!', '2014-12-07 23:39:10'),
(2, 'Viva la résolution !', 'Chers joueurs, chères joueuses,\r\n\r\nLa conception du jeu va bon train. Nous vous remercions d''être en si grand nombre à suivre le développement de The Rise of Mont-Shäff, le jeu qui va révolutionner le monde.', '2014-12-08 00:50:14'),
(3, 'Igloo Igloo Igloo !!!', 'L''Igloo du village, la fameuse mascotte de notre équipe, a besoin d''aller faire ses petits besoins.\r\n\r\nNous devons donc nous absenter, mais ne vous inquiéter point, toute l''équipe de MicroShäff sera de retour dans seulement quelques minutes... Ou plutôt, quelques minutes après notre départ pour le monde extérieur... qui aura lieu... euh... nous ne le savons même pas...\r\n\r\nÀ suivre !', '2014-12-08 00:57:54'),
(4, 'Iñtërnâtiônàlizætiøn', 'Iñtërnâtiônàlizætiøn', '2014-12-08 02:56:39');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `noPhoto` int(11) NOT NULL AUTO_INCREMENT,
  `Chemin` varchar(255) NOT NULL,
  PRIMARY KEY (`noPhoto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `post`
--

INSERT INTO `post` (`noPost`, `noFil`, `noUtilisateur`, `Contenu`, `DateCreation`) VALUES
(2, 2, 1, 'Une fois de plus, l''équipe de MicroShäff réussit à surprendre ses usagers en affichant un tout nouveau post !!!', '0000-00-00 00:00:00'),
(3, 4, 1, 'testons', '2014-12-09 00:29:10'),
(4, 4, 1, 'Testons encore !! :D', '2014-12-09 00:29:20'),
(5, 4, 2, 'Dieu&lt;', '2014-12-09 00:29:46'),
(7, 2, 6, 'Woof woof, woof woof woof, woof woof woof woof !', '2014-12-09 08:44:46'),
(8, 2, 7, 'Maudite face de pain mon Igloo :P', '2014-12-09 08:46:42'),
(9, 2, 2, 'Hé oh on se calme les miches !', '2014-12-09 08:48:38'),
(10, 2, 3, 'Ma gang de tarlas vous autres -.-''', '2014-12-09 08:49:53'),
(11, 6, 3, 'Allez allez, on pousse, on pousse, on respire fort...', '2014-12-09 08:50:35');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`noUtilisateur`, `Nom`, `MotDePasse`, `Role`, `Avatar`) VALUES
(1, 'Sideni', '123456', 'Admin', 'vue/utilisateur/image/sideni.jpg'),
(2, 'Dieu', 'dieu', 'Admin', 'vue/utilisateur/image/Dieu.jpg'),
(3, 'Flora', '1234', 'Admin', 'vue/utilisateur/image/Flora.jpg'),
(5, 'test', 'test', '', ''),
(6, 'Igloo', '123456', '', 'vue/utilisateur/image/Igloo.jpg'),
(7, 'Miche de pain', '123456', '', 'vue/utilisateur/image/defaut.jpg');

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
