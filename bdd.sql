-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 20 mai 2019 à 15:38
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  bdr
--

-- --------------------------------------------------------

--
-- Structure de la table questionsrep
--

CREATE TABLE questionsrep (
  id int(11) NOT NULL,
  question text NOT NULL,
  reponse text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table questionsrep
--

INSERT INTO questionsrep (id, question, reponse) VALUES
(1, 'Que se passe-t-il en cas de coupure de courant ?', 'Une batterie de secours prendra le relais pour 3-4 cycles d’ouverture/fermeture.'),
(2, 'Quelle crémaillère dois-je choisir ? Droite ou gauche ?', 'Cela dépend de votre installation initiale, généralement il faut alterner entre une crémaillère droite puis une gauche.'),
(3, 'Quelle est la différence entre une crémaillère droite et une crémaillère gauche ?', 'Quand on regarde le portail du côté où les crémaillères sont fixées, il y a 2 pattes de fixation rapprochées, si elles sont à droite, c’est une crémaillère droite, vis-versa pour la gauche.'),
(4, 'Peut-on avoir plusieurs platines de rue ?', 'Les produits proposés par WeCon ne permettent pas d’avoir plusieurs platines de rue.'),
(5, 'Peut-on avoir plusieurs moniteurs ?', 'Certains visiophones peuvent être équipés de 2 moniteurs maximum.'),
(6, 'Mon installation est sur 4 fils, puis-je installer un visiophone 2 fils ?', 'Oui, prenez uniquement 2 fils sur les 4. La différence entre un 4 fils et un 2 fils, c’est l’envoi d’informations entre la platine de rue et le moniteur qui est optimisé.'),
(7, 'Je veux contrôler différents éléments de ma maison quand je suis hors de chez moi (exemple : je veux que mes volets/lumières s’actionnent automatiquement). Quel type de produit dois-je installer ?', 'Les produits proposés par WeCon qui répondent parfaitement à ces besoins sont les box domotiques.'),
(8, 'Que puis-je piloter avec une box domotique ?', 'Vous pouvez contrôler l’éclairage, les motorisations de volet, l’ouverture de votre portail,\r\n			le chauffage électrique, des prises télécommandées, une alarme (généralement intégrée).\r\n		De plus, vous pouvez aussi recevoir différentes informations à l’aide de détecteurs de pluie, de gaz, de mouvement ou d’ouverture.\r\n		\r\n		Vous pouvez également calculer la consommation électrique ainsi qu’avoir tous les retours d’état (si une lumière est restée allumée, un volet est fermé, etc.).\r\n		\r\n		Toutes ces informations sont envoyées et disponibles sur votre smartphone pour assurer votre tranquillité lors de vos déplacements.\r\n		\r\n		Vous pouvez programmer la box pour qu’elle contrôle certains éléments, notamment l’ouverture/fermeture des volets de la maison le matin et le soir.'),
(9, 'Qu’est-ce un chauffage électrique dit « rayonnant » ?', 'C’est un chauffage qui dispose d’une plaque chauffée par une résistance. Il ne chauffe pas seulement l’air mais les personnes et les meubles ; ce qui donne une impression de chaleur. Idéal dans les pièces telles qu’une chambre, le bureau, la cuisine, la salle de bain. L’inconvénient majeur de ce type de chauffage, est qu’il n’a pas d’inertie lorsque l’appareil se coupe.'),
(10, 'Qu’est-ce un chauffage électrique dit « fluide » ?', 'C’est un chauffage qui dispose d’une résistance électrique qui chauffe un fluide dans le radiateur. Cela permet d’absorber et de restituer rapidement la chaleur produite. Ce type de radiateur a une meilleure inertie qu’un radiateur dit « rayonnant ». Idéal dans les pièces comme le séjour ou une chambre d’enfant.'),
(11, 'Qu’est-ce un chauffage électrique dit « inertie sèche » ?', 'C’est un chauffage qui dispose d’une résistance électrique qui chauffe un fluide dans le radiateur. Cela permet d’absorber et de restituer rapidement la chaleur produite. Ce type de radiateur a une meilleure inertie qu’un radiateur dit « rayonnant ». Idéal dans les pièces comme le séjour ou une chambre d’enfant.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table questionsrep
--
ALTER TABLE questionsrep
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table questionsrep
--
ALTER TABLE questionsrep
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;