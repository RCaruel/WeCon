-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 09 mai 2019 à 09:29
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
-- Structure de la table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `log`
--

INSERT INTO `log` (`id`, `message`) VALUES
(29, '2019-05-07 08:56:59 || Pseudo : 0130, mail : 0130@0130.fr, type : Client s\'est bien connecté à son compte'),
(28, '2019-05-07 08:56:38 || Pseudo : Technicien, mail : Technicien@DomIsep.fr, type : Technicien s\'est bien connecté à son compte'),
(27, '2019-05-07 08:56:23 || Pseudo : Entreprise, mail : Entreprise@DomIsep.fr, type : Entreprise s\'est bien connecté à son compte'),
(26, '2019-05-07 08:56:14 || mail : Technicien@DomIsep.fr, mdp : 8832568148dacaf696acbfdc2ec6c6fcbc378cd3 s\'est trompé dans son mot de passe'),
(25, '2019-05-07 08:45:14 || Pseudo : Technicien, mail : Technicien@DomIsep.fr, type : Technicien s\'est bien connecté à son compte'),
(24, '2019-05-06 17:45:39 || Pseudo : Technicien, mail : Technicien@DomIsep.fr, type : Technicien s\'est bien connecté à son compte'),
(23, '2019-05-06 17:43:08 || Pseudo : Technicien, mail : Technicien@DomIsep.fr, type : Technicien s\'est bien connecté à son compte'),
(22, '2019-05-06 17:42:55 || Pseudo : Technicien, mail : Technicien@DomIsep.fr, type : Technicien s\'est bien connecté à son compte'),
(21, '2019-05-06 17:36:50 || Pseudo : Technicien, mail : Technicien@DomIsep.fr, type : Technicien s\'est bien connecté à son compte'),
(20, '2019-05-06 17:36:40 || Pseudo : Entreprise, mail : Entreprise@DomIsep.fr, type : Entreprise s\'est bien connecté à son compte'),
(31, '2019-05-07 09:27:45 || Pseudo : Entreprise, mail : Entreprise@DomIsep.fr, type : Entreprise s\'est bien connecté à son compte'),
(19, '2019-05-06 17:35:46 || Pseudo : 0130, mail : 0130@0130.fr, type : Client s\'est bien connecté à son compte'),
(30, '2019-05-07 09:04:04 || Pseudo : Technicien, mail : Technicien@DomIsep.fr, type : Technicien s\'est bien connecté à son compte'),
(32, '2019-05-07 09:27:57 || Pseudo : Entreprise, mail : Entreprise@DomIsep.fr, type : Entreprise s\'est bien connecté à son compte'),
(33, '2019-05-07 09:51:42 || mail : Entreprise@DomIsep.fr, mdp : 8832568148dacaf696acbfdc2ec6c6fcbc378cd3 s\'est trompé dans son mot de passe'),
(34, '2019-05-07 09:55:33 || Pseudo : Technicien, mail : Technicien@DomIsep.fr, type : Technicien s\'est bien connecté à son compte'),
(35, '2019-05-09 09:19:21 || Pseudo : 0130, mail : 0130@0130.fr, type : Client s\'est bien connecté à son compte');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mail`, `motdepasse`, `TypeCompte`) VALUES
(1, '0130', '0130@0130.fr', 'ec28361885edeb63e1eff30695ce51f8fd212465', 'Client'),
(2, '0131', '0131@0131.fr', '8ee52a4c4f76ec787956843420dec672b6df8ada', 'Technicien'),
(3, '0132', '0132@0132.fr', '9ce742765903ea91161a91a068dd5133befb64fb', 'Entreprise'),
(4, 'Technicien', 'Technicien@DomIsep.fr', '8832568148dacaf696acbfdc2ec6c6fcbc378cd3', 'Technicien'),
(5, 'Entreprise', 'Entreprise@DomIsep.fr', '8832568148dacaf696acbfdc2ec6c6fcbc378cd3', 'Entreprise'),
(6, 'Client', 'Client@WeCon.fr', '64bb7ec46575d7f70fbae6ef41e516ec664cf5ec', 'Client');

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

-- --------------------------------------------------------

--
-- Structure de la table `sousmembres`
--

DROP TABLE IF EXISTS `sousmembres`;
CREATE TABLE IF NOT EXISTS `sousmembres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `id_Compte` int(11) NOT NULL,
  `identifiant` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sousmembres`
--

INSERT INTO `sousmembres` (`id`, `nom`, `prenom`, `mail`, `id_Compte`, `identifiant`) VALUES
(2, 'Caruel', 'Rémi', 'remi.car@ya.fr', 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
