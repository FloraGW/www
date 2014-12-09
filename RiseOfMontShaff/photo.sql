-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 09 Décembre 2014 à 11:27
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
