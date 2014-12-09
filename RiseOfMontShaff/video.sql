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
