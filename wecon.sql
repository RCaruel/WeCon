-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 16 avr. 2019 à 15:01
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wecon`
--

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

DROP TABLE IF EXISTS `capteur`;
CREATE TABLE IF NOT EXISTS `capteur` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Valeur` int(11) NOT NULL,
  `Id_Piece` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `globaldata`
--

DROP TABLE IF EXISTS `globaldata`;
CREATE TABLE IF NOT EXISTS `globaldata` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NombreClient` int(11) NOT NULL,
  `NombreMessages` int(11) NOT NULL,
  `NombrePannes` int(11) NOT NULL,
  `NombreVentes` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

DROP TABLE IF EXISTS `maison`;
CREATE TABLE IF NOT EXISTS `maison` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Carte` int(11) NOT NULL,
  `Id_Maison` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` text NOT NULL,
  `TypeCompte` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mail`, `motdepasse`, `TypeCompte`) VALUES
(1, '0130', '0130@0130.fr', 'ec28361885edeb63e1eff30695ce51f8fd212465', 'Client'),
(2, '0131', '0131@0131.fr', '8ee52a4c4f76ec787956843420dec672b6df8ada', 'Technicien'),
(3, '0132', '0132@0132.fr', '9ce742765903ea91161a91a068dd5133befb64fb', 'Entreprise'),
(4, 'Technicien', 'Technicien@DomIsep.fr', '8832568148dacaf696acbfdc2ec6c6fcbc378cd3', 'Technicien'),
(5, 'Entreprise', 'Entreprise@DomIsep.fr', '8832568148dacaf696acbfdc2ec6c6fcbc378cd3', 'Entreprise');

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

DROP TABLE IF EXISTS `piece`;
CREATE TABLE IF NOT EXISTS `piece` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Temperature` int(11) NOT NULL,
  `Distantce` int(11) NOT NULL,
  `Id_Maison` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
--

DROP TABLE IF EXISTS `rapport`;
CREATE TABLE IF NOT EXISTS `rapport` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `mail` text NOT NULL,
  `Message` text NOT NULL,
  `Id_Personne` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
