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
-- Structure de la table `nouvelle`
--

CREATE TABLE IF NOT EXISTS `nouvelle` (
  `noNouvelle` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(100) NOT NULL,
  `Contenu` text NOT NULL,
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
