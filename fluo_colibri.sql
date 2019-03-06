-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 06 mars 2019 à 08:13
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `fluo_colibri`
--

-- --------------------------------------------------------

--
-- Structure de la table `fluo_location_choice`
--

CREATE TABLE `fluo_location_choice` (
  `id_location_choice` int(11) NOT NULL,
  `location_choice_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fluo_location_choice`
--

INSERT INTO `fluo_location_choice` (`id_location_choice`, `location_choice_name`) VALUES
(1, 'Sandouville Mairie'),
(2, 'Sandouville Vachat'),
(3, 'Sandouville Car Rouge'),
(4, 'Sandouville Le Bas'),
(5, 'St Romain de Colbosc'),
(6, 'Le Havre'),
(7, 'Collège André Siegfrield'),
(8, 'Lycée Lillebonne'),
(9, 'Lycée Bolbec');

-- --------------------------------------------------------

--
-- Structure de la table `fluo_transports`
--

CREATE TABLE `fluo_transports` (
  `id_transports` int(11) NOT NULL,
  `place` tinyint(4) DEFAULT NULL,
  `date` date NOT NULL,
  `hour` time NOT NULL,
  `id_types` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_location_choice_start` int(11) NOT NULL,
  `id_location_choice_end` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fluo_transports`
--

INSERT INTO `fluo_transports` (`id_transports`, `place`, `date`, `hour`, `id_types`, `id_users`, `id_location_choice_start`, `id_location_choice_end`) VALUES
(75, NULL, '2019-04-15', '15:30:00', 3, 3, 1, 6);

-- --------------------------------------------------------

--
-- Structure de la table `fluo_types`
--

CREATE TABLE `fluo_types` (
  `id_types` int(11) NOT NULL,
  `typesName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fluo_types`
--

INSERT INTO `fluo_types` (`id_types`, `typesName`) VALUES
(1, 'Covoiturage'),
(2, 'Courses'),
(3, 'Trajet scolaire');

-- --------------------------------------------------------

--
-- Structure de la table `fluo_users`
--

CREATE TABLE `fluo_users` (
  `id_users` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(150) DEFAULT NULL,
  `tel` varchar(15) NOT NULL,
  `certified` tinyint(4) NOT NULL,
  `id_user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fluo_users`
--

INSERT INTO `fluo_users` (`id_users`, `firstName`, `lastName`, `email`, `password`, `address`, `tel`, `certified`, `id_user_type`) VALUES
(3, 'Angela', 'Mallet  Camilotti', 'angelamallet@gmail.com', '$2y$10$NFHSdlrywCiz9hqJ/NEfIuaf79v94.TEWdMuWPM377vKNGBVt4rD.', '102 rue de l\'église', '0664240303', 1, 1),
(5, 'Sébastien', 'Mallet', 'sebastienmallet@gmail.com', '$2y$10$zjmOGrBi3DUFsrUGZDE4reE0FQOpNHy7SVds9J1vY9.zFNZKGvQMO', '102 rue de l\'église', '0654675647', 1, 1),
(7, 'Martine', 'Camilotti', 'martine@camilotti.com', '$2y$10$eDhw5LCTc7dScAYZGL7Qn.BRMqQOHYcKGGwjyCmOS99O5Wx.XNBCC', 'Paris 4', '0678565876', 1, 1),
(8, 'Yassine', 'Benhamoud', 'yassine@yassine.fr', '$2y$10$O1dMiv.V3BRD8lrPONIHuuc1gjsY79zT/Q2xkhIOQxeqPnlzUBMfu', '', '0652594973', 0, 1),
(54, 'Robin', 'Halberda', 'robin.halberda@orange.fr', '$2y$10$HHKi.dF25sCqNs1X0z3vJOBkbysiuWPSbSksj6SI54tF0nHg8FXdO', 'Le Havre', '0676022629', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `fluo_user_type`
--

CREATE TABLE `fluo_user_type` (
  `id_user_type` int(11) NOT NULL,
  `user_type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fluo_user_type`
--

INSERT INTO `fluo_user_type` (`id_user_type`, `user_type`) VALUES
(1, 'admin'),
(2, 'particulier'),
(3, 'modérateur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `fluo_location_choice`
--
ALTER TABLE `fluo_location_choice`
  ADD PRIMARY KEY (`id_location_choice`);

--
-- Index pour la table `fluo_transports`
--
ALTER TABLE `fluo_transports`
  ADD PRIMARY KEY (`id_transports`),
  ADD KEY `fluo_transports_fluo_types_FK` (`id_types`),
  ADD KEY `fluo_transports_fluo_users0_FK` (`id_users`),
  ADD KEY `fluo_transports_fluo_location_choice1_FK` (`id_location_choice_start`),
  ADD KEY `fluo_transports_fluo_location_choice2_FK` (`id_location_choice_end`);

--
-- Index pour la table `fluo_types`
--
ALTER TABLE `fluo_types`
  ADD PRIMARY KEY (`id_types`);

--
-- Index pour la table `fluo_users`
--
ALTER TABLE `fluo_users`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `fluo_users_fluo_user_type_FK` (`id_user_type`);

--
-- Index pour la table `fluo_user_type`
--
ALTER TABLE `fluo_user_type`
  ADD PRIMARY KEY (`id_user_type`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fluo_location_choice`
--
ALTER TABLE `fluo_location_choice`
  MODIFY `id_location_choice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `fluo_transports`
--
ALTER TABLE `fluo_transports`
  MODIFY `id_transports` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `fluo_types`
--
ALTER TABLE `fluo_types`
  MODIFY `id_types` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `fluo_users`
--
ALTER TABLE `fluo_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `fluo_user_type`
--
ALTER TABLE `fluo_user_type`
  MODIFY `id_user_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `fluo_transports`
--
ALTER TABLE `fluo_transports`
  ADD CONSTRAINT `fluo_transports_fluo_location_choice1_FK` FOREIGN KEY (`id_location_choice_start`) REFERENCES `fluo_location_choice` (`id_location_choice`),
  ADD CONSTRAINT `fluo_transports_fluo_location_choice2_FK` FOREIGN KEY (`id_location_choice_end`) REFERENCES `fluo_location_choice` (`id_location_choice`),
  ADD CONSTRAINT `fluo_transports_fluo_types_FK` FOREIGN KEY (`id_types`) REFERENCES `fluo_types` (`id_types`),
  ADD CONSTRAINT `fluo_transports_fluo_users0_FK` FOREIGN KEY (`id_users`) REFERENCES `fluo_users` (`id_users`);

--
-- Contraintes pour la table `fluo_users`
--
ALTER TABLE `fluo_users`
  ADD CONSTRAINT `fluo_users_fluo_user_type_FK` FOREIGN KEY (`id_user_type`) REFERENCES `fluo_user_type` (`id_user_type`);