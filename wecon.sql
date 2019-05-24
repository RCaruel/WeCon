-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 24 mai 2019 à 14:53
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

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
  `type` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Valeur` int(11) NOT NULL,
  `jour` date NOT NULL,
  `Id_Piece` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`Id`, `type`, `Nom`, `Valeur`, `jour`, `Id_Piece`) VALUES
(1, 'luminosite', 'Nom', 7, '2019-05-23', 1),
(2, 'luminosite', 'Nom', 1, '2019-05-22', 1),
(3, 'luminosite', 'Nom', 23, '2019-05-21', 1),
(4, 'luminosite', 'Nom', 28, '2019-05-20', 1),
(5, 'luminosite', 'Nom', 22, '2019-05-19', 1),
(6, 'luminosite', 'Nom', 4, '2019-05-18', 1),
(7, 'luminosite', 'Nom', 1, '2019-05-17', 1),
(8, 'temperature', 'Nom', 13, '2019-05-23', 1),
(9, 'temperature', 'Nom', 13, '2019-05-22', 1),
(10, 'temperature', 'Nom', 5, '2019-05-21', 1),
(11, 'temperature', 'Nom', 26, '2019-05-20', 1),
(12, 'temperature', 'Nom', 21, '2019-05-19', 1),
(13, 'temperature', 'Nom', 11, '2019-05-18', 1),
(14, 'temperature', 'Nom', 32, '2019-05-17', 1);

-- --------------------------------------------------------

--
-- Structure de la table `globaldata`
--

DROP TABLE IF EXISTS `globaldata`;
CREATE TABLE IF NOT EXISTS `globaldata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jour` date NOT NULL,
  `nbClients` int(11) NOT NULL,
  `nbVentes` int(11) NOT NULL,
  `nbPannes` int(11) NOT NULL,
  `nbMessages` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `globaldata`
--

INSERT INTO `globaldata` (`id`, `jour`, `nbClients`, `nbVentes`, `nbPannes`, `nbMessages`) VALUES
(1, '2019-05-20', 49, 2, 87, 2),
(4, '2019-05-21', 105, 132, 20, 6),
(5, '2019-05-19', 110, 75, 80, 1),
(6, '2019-05-18', 118, 51, 8, 1),
(7, '2019-05-15', 99, 132, 81, 1),
(8, '2019-05-14', 49, 10, 110, 1),
(9, '2019-05-17', 20, 157, 92, 1),
(10, '2019-05-16', 131, 39, 100, 1),
(11, '2019-05-23', 100, 48, 143, 2);

-- --------------------------------------------------------

--
-- Structure de la table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

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
(35, '2019-05-09 09:19:21 || Pseudo : 0130, mail : 0130@0130.fr, type : Client s\'est bien connecté à son compte'),
(36, '2019-05-09 17:17:10 || mail : jacque@gmail.comn\'existe pas dans la bdd'),
(37, '2019-05-09 17:17:20 || mail : jacque@gmail.comn\'existe pas dans la bdd'),
(38, '2019-05-11 01:26:08 || mail : jacque@gmail.comn\'existe pas dans la bdd'),
(39, '2019-05-11 01:26:37 || Pseudo : jacque, mail : jacque@gmail.com, type : Client s\'est bien connecté à son compte'),
(40, '2019-05-11 01:35:12 || Pseudo : jacque, mail : jacque@gmail.com, type : Entreprise s\'est bien connecté à son compte'),
(41, '2019-05-11 01:44:52 || Pseudo : jacque, mail : jacque@gmail.com, type : Client s\'est bien connecté à son compte'),
(42, '2019-05-11 01:49:17 || Pseudo : jacque, mail : jacque@gmail.com, type : Client s\'est bien connecté à son compte'),
(43, '2019-05-11 02:24:09 || Pseudo : jacque, mail : jacque@gmail.com, type : Client s\'est bien connecté à son compte'),
(44, '2019-05-11 03:13:11 || Pseudo : jacque, mail : jacque@gmail.com, type : Client s\'est bien connecté à son compte'),
(45, '2019-05-11 03:14:52 || Pseudo : jacque, mail : jacque@gmail.com, type : Client s\'est bien connecté à son compte'),
(46, '2019-05-20 15:30:18 || mail : dev@WeCon.frn\'existe pas dans la bdd'),
(47, '2019-05-20 15:30:42 || Création du compte de dev mail : dev@WeCon.fr mot de passe : dev'),
(48, '2019-05-20 15:31:01 || Création du compte de dev mail : dev@WeCon.fr mot de passe : dev'),
(49, '2019-05-20 15:31:14 || Création du compte de dev mail : dev@WeCon.fr mot de passe : dev'),
(50, '2019-05-20 15:31:39 || Pseudo : dev, mail : dev@WeCon.fr, type : Technicien s\'est bien connecté à son compte'),
(51, '2019-05-20 15:37:20 || Pseudo : dev, mail : dev@WeCon.fr, type : Client s\'est bien connecté à son compte'),
(52, '2019-05-20 15:39:59 || Pseudo : dev, mail : dev@WeCon.fr, type : Client s\'est bien connecté à son compte'),
(53, '2019-05-20 15:40:42 || Pseudo : dev, mail : dev@WeCon.fr, type : Client s\'est bien connecté à son compte'),
(54, '2019-05-20 15:40:54 || Pseudo : dev, mail : dev@WeCon.fr, type : Technicien s\'est bien connecté à son compte'),
(55, '2019-05-20 15:55:05 || Pseudo : dev, mail : dev@WeCon.fr, type : Client s\'est bien connecté à son compte'),
(56, '2019-05-20 16:17:05 || Pseudo : dev, mail : dev@WeCon.fr, type : Client s\'est bien connecté à son compte'),
(57, '2019-05-20 16:31:38 || Pseudo : dev, mail : dev@WeCon.fr, type : Client s\'est bien connecté à son compte'),
(58, '2019-05-20 16:33:26 || Pseudo : dev, mail : dev@WeCon.fr, type : Client s\'est bien connecté à son compte'),
(59, '2019-05-20 16:33:35 || Pseudo : dev, mail : dev@WeCon.fr, type : Technicien s\'est bien connecté à son compte'),
(60, '2019-05-20 16:34:51 || Pseudo : dev, mail : dev@WeCon.fr, type : Technicien s\'est bien connecté à son compte'),
(61, '2019-05-20 16:36:01 || Pseudo : dev, mail : dev@WeCon.fr, type : Technicien s\'est bien connecté à son compte'),
(62, '2019-05-20 16:43:26 || Pseudo : dev, mail : dev@WeCon.fr, type : Technicien s\'est bien connecté à son compte'),
(63, '2019-05-20 16:54:56 || Pseudo : dev, mail : dev@WeCon.fr, type : Technicien s\'est bien connecté à son compte'),
(64, '2019-05-20 17:07:27 || Pseudo : dev, mail : dev@WeCon.fr, type : Technicien s\'est bien connecté à son compte'),
(65, '2019-05-20 17:28:01 || Pseudo : dev, mail : dev@WeCon.fr, type : Client s\'est bien connecté à son compte'),
(66, '2019-05-20 17:28:11 || Pseudo : dev, mail : dev@WeCon.fr, type : Entreprise s\'est bien connecté à son compte'),
(67, '2019-05-20 17:28:28 || Pseudo : dev, mail : dev@WeCon.fr, type : Technicien s\'est bien connecté à son compte'),
(68, '2019-05-20 17:28:37 || Pseudo : dev, mail : dev@WeCon.fr, type : Entreprise s\'est bien connecté à son compte'),
(69, '2019-05-20 17:44:46 || Pseudo : dev, mail : dev@WeCon.fr, type : Entreprise s\'est bien connecté à son compte'),
(70, '2019-05-20 17:48:43 || Pseudo : dev, mail : dev@WeCon.fr, type : Technicien s\'est bien connecté à son compte'),
(71, '2019-05-21 09:11:23 || Pseudo : dev, mail : dev@WeCon.fr, type : Entreprise s\'est bien connecté à son compte'),
(72, '2019-05-21 09:23:01 || Pseudo : dev, mail : dev@WeCon.fr, type : Entreprise s\'est bien connecté à son compte'),
(73, '2019-05-21 09:26:57 || Pseudo : dev, mail : dev@WeCon.fr, type : Entreprise s\'est bien connecté à son compte'),
(74, '2019-05-21 09:28:01 || Pseudo : dev, mail : dev@WeCon.fr, type : Entreprise s\'est bien connecté à son compte'),
(75, '2019-05-21 09:39:49 || Pseudo : dev, mail : dev@WeCon.fr, type : Entreprise s\'est bien connecté à son compte'),
(76, '2019-05-21 09:40:10 || Pseudo : dev, mail : dev@WeCon.fr, type : Entreprise s\'est bien connecté à son compte'),
(77, '2019-05-21 09:52:27 || Pseudo : dev, mail : dev@WeCon.fr, type : Client s\'est bien connecté à son compte'),
(78, '2019-05-21 09:52:47 || Pseudo : dev, mail : dev@WeCon.fr, type : Client s\'est bien connecté à son compte'),
(79, '2019-05-21 10:10:45 || Pseudo : dev, mail : dev@WeCon.fr, type : Entreprise s\'est bien connecté à son compte'),
(80, '2019-05-21 10:12:46 || Pseudo : dev, mail : dev@WeCon.fr, type : Client s\'est bien connecté à son compte'),
(81, '2019-05-21 10:19:52 || Pseudo : dev, mail : dev@WeCon.fr, type : Client s\'est bien connecté à son compte'),
(82, '2019-05-23 10:28:21 || Pseudo : Entreprise, mail : Entreprise@DomIsep.fr, type : Entreprise s\'est bien connecté à son compte'),
(83, '2019-05-23 10:53:25 || Pseudo : 0130, mail : 0130@0130.fr, type : Client s\'est bien connecté à son compte'),
(84, '2019-05-23 11:27:55 || Pseudo : dev, mail : dev@WeCon.fr, type : Client s\'est bien connecté à son compte'),
(85, '2019-05-23 11:35:42 || Pseudo : dev, mail : dev@WeCon.fr, type : Client s\'est bien connecté à son compte'),
(86, '2019-05-23 18:23:04 || Pseudo : jacque, mail : jacque@gmail.com, type : Entreprise s\'est bien connecté à son compte'),
(87, '2019-05-23 18:23:15 || Pseudo : jacque, mail : jacque@gmail.com, type : Client s\'est bien connecté à son compte'),
(88, '2019-05-23 18:24:11 || Pseudo : jacque, mail : jacque@gmail.com, type : Entreprise s\'est bien connecté à son compte'),
(89, '2019-05-23 20:02:36 || Pseudo : jacque, mail : jacque@gmail.com, type : Client s\'est bien connecté à son compte'),
(90, '2019-05-23 20:02:45 || Pseudo : jacque, mail : jacque@gmail.com, type : Entreprise s\'est bien connecté à son compte'),
(91, '2019-05-23 20:02:50 || Pseudo : jacque, mail : jacque@gmail.com, type : Technicien s\'est bien connecté à son compte'),
(92, '2019-05-23 20:05:45 || Pseudo : jacque, mail : jacque@gmail.com, type : Client s\'est bien connecté à son compte'),
(93, '2019-05-23 20:08:25 || Pseudo : jacque, mail : jacque@gmail.com, type : Technicien s\'est bien connecté à son compte'),
(94, '2019-05-23 20:11:43 || Pseudo : jacque, mail : jacque@gmail.com, type : Entreprise s\'est bien connecté à son compte'),
(95, '2019-05-23 20:49:02 || Pseudo : jacque, mail : jacque@gmail.com, type : Technicien s\'est bien connecté à son compte');

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

DROP TABLE IF EXISTS `maison`;
CREATE TABLE IF NOT EXISTS `maison` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Carte` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `maison`
--

INSERT INTO `maison` (`Id`, `Carte`, `Id_User`) VALUES
(1, 1, 12);

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mail`, `motdepasse`, `TypeCompte`) VALUES
(1, '0130', '0130@0130.fr', 'ec28361885edeb63e1eff30695ce51f8fd212465', 'Client'),
(2, '0131', '0131@0131.fr', '8ee52a4c4f76ec787956843420dec672b6df8ada', 'Technicien'),
(3, '0132', '0132@0132.fr', '9ce742765903ea91161a91a068dd5133befb64fb', 'Entreprise'),
(4, 'Technicien', 'Technicien@DomIsep.fr', '8832568148dacaf696acbfdc2ec6c6fcbc378cd3', 'Technicien'),
(5, 'Entreprise', 'Entreprise@DomIsep.fr', '8832568148dacaf696acbfdc2ec6c6fcbc378cd3', 'Entreprise'),
(6, 'Client', 'Client@WeCon.fr', '64bb7ec46575d7f70fbae6ef41e516ec664cf5ec', 'Client'),
(7, 'jacque', 'jacque@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Client'),
(8, 'jacque', 'jacque@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Technicien'),
(9, 'jacque', 'jacque@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Entreprise'),
(10, 'dev', 'dev@WeCon.fr', '34c6fceca75e456f25e7e99531e2425c6c1de443', 'Technicien'),
(11, 'dev', 'dev@WeCon.fr', '34c6fceca75e456f25e7e99531e2425c6c1de443', 'Entreprise'),
(12, 'dev', 'dev@WeCon.fr', '34c6fceca75e456f25e7e99531e2425c6c1de443', 'Client');

-- --------------------------------------------------------

--
-- Structure de la table `nommembres`
--

DROP TABLE IF EXISTS `nommembres`;
CREATE TABLE IF NOT EXISTS `nommembres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_User` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `nommembres`
--

INSERT INTO `nommembres` (`id`, `id_User`, `nom`, `prenom`) VALUES
(1, 11, 'Tamarin', 'Hicham'),
(2, 12, 'lelouch', 'Giles');

-- --------------------------------------------------------

--
-- Structure de la table `parametres`
--

DROP TABLE IF EXISTS `parametres`;
CREATE TABLE IF NOT EXISTS `parametres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `synchro` varchar(255) NOT NULL,
  `releve` varchar(255) NOT NULL,
  `acces` varchar(255) NOT NULL,
  `historique` varchar(255) NOT NULL,
  `partage` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `parametres`
--

INSERT INTO `parametres` (`id`, `iduser`, `synchro`, `releve`, `acces`, `historique`, `partage`) VALUES
(1, 7, 'oui', 'oui', 'non', 'non', 'non'),
(4, 9, 'non', 'non', 'non', 'non', 'non'),
(5, 12, 'non', 'non', 'non', 'non', 'non');

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

DROP TABLE IF EXISTS `piece`;
CREATE TABLE IF NOT EXISTS `piece` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Temperature` int(11) NOT NULL,
  `Distance` int(11) NOT NULL,
  `Id_Maison` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`Id`, `Temperature`, `Distance`, `Id_Maison`) VALUES
(1, 1, 1, 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rapport`
--

INSERT INTO `rapport` (`Id`, `Nom`, `Prenom`, `mail`, `Message`, `Id_Personne`) VALUES
(9, 'Caruel', 'Rémi', 'remi.caruel@yahoo.fr', 'kkk\r\nk\r\nk\r\nk\r\nk\r\n', 0),
(10, 'Caruel', 'Rémi', 'remi.caruel@yahoo.fr', 'gg\r\ng\r\ng\r\ng\r\ng\r\ng', 0),
(27, 'Paul', 'Pogba', 'prune@gmail.com', 'Je voudrais savoir', 0),
(12, 'Caruel', 'Rémi', 'remi.caruel@yahoo.fr', 'ezezrzekrpezkr7\r\nerzop\r\nrkorkez\r\npokrz\r\n', 0),
(13, 'Caruel', 'Rémi', 'remi.caruel@yahoo.fr', 'eknflzf', 0),
(14, 'Caruel', 'Rémi', 'remi.caruel@yahoo.fr', 'eknflzf', 0),
(15, 'ca', 'zfzez', 'rezoerz@ezznoez', 'ezarez\r\n', 0),
(16, 'fezfkfznefj', 'enkrngerng', 'remi.car@ya.fr', 'rezrezr', 0),
(17, 'Caruel', 'erg', 'dev@WeCon.fr', 'fezfze', 0),
(18, 'Caruel', 'Rémi', '0130@0130.fr', 'lnvrkelv,lerknglvekrg', 0),
(19, 'Caruel', 'Rémi', '0130@0130.fr', 'fezfezf,elzkf,', 0),
(20, 'Caruel', 'Rémi', '0130@0130.fr', 'fezjnfzeoijfnoziekfnze', 0),
(21, 'Caruel', 'Rémi', '0130@0130.fr', 'fzefzef', 0),
(22, 'Caruel', 'Rémi', '0130@0130.fr', 'fezfezfze', 0),
(23, 'Caruel', 'Rémi', '0130@0130.fr', 'Bonjour', 0);

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
