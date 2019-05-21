-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 21 mai 2019 à 08:03
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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

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
(10, '2019-05-16', 131, 39, 100, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
