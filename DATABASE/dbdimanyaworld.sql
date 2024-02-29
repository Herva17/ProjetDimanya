-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 29 fév. 2024 à 07:18
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbdimanyaworld`
--

-- --------------------------------------------------------

--
-- Structure de la table `contenusslider`
--

CREATE TABLE `contenusslider` (
  `id` int(11) NOT NULL,
  `Experience` varchar(255) NOT NULL,
  `TitreSlider1` text NOT NULL,
  `TitreSlider2` text NOT NULL,
  `membres` varchar(5) NOT NULL,
  `Nprojets` varchar(5) NOT NULL,
  `clientsS` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contenusslider`
--

INSERT INTO `contenusslider` (`id`, `Experience`, `TitreSlider1`, `TitreSlider2`, `membres`, `Nprojets`, `clientsS`) VALUES
(1, '15', 'Société  de solutions de télécommunication unique dans l&#039;est', 'La meilleure solution de télécommunication fiable en RDC', '20', '90', '130');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(5) NOT NULL,
  `Nom` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Objet` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `Nom`, `Email`, `Objet`, `Message`) VALUES
(5, 'SHABANI', ' shabanifrancois@gmail.com', 'Demande de service', 'Bonjour  dimanya world nous sommes tellement ravis des services que vous vendez nous voulons être des bénéficiaires'),
(6, 'Emmanuel', ' kabanangiemmanuel@gmail.com', 'Demande de renseignement', 'bonjour dimanya world je suis Emmanuel kabanangi j aimeriais avoir plus des precision sur votre adresse');

-- --------------------------------------------------------

--
-- Structure de la table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `newletter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `newsletters`
--

INSERT INTO `newsletters` (`id`, `newletter`) VALUES
(2, 'josuedkalima@gmail.com'),
(3, 'josuedkalima@gmail.com'),
(4, 'iragiherve10@gmail.com'),
(5, 'iragiherve10@gmail.com'),
(20, '');

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

CREATE TABLE `temoignage` (
  `id` int(11) NOT NULL,
  `photocl1` text NOT NULL,
  `photocl2` text NOT NULL,
  `photocl3` text NOT NULL,
  `temoignagecl1` text NOT NULL,
  `temoignagecl2` text NOT NULL,
  `temoignagecl3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `temoignage`
--

INSERT INTO `temoignage` (`id`, `photocl1`, `photocl2`, `photocl3`, `temoignagecl1`, `temoignagecl2`, `temoignagecl3`) VALUES
(18, 'Al1.jpg', 'Al3.jpg', 'Annotation 2023-04-03 200301.jpg', 'JJJKLLLLLLLOLLLLKLKLKL', 'HHHHGHJHHJGJHGHJGJHGHJG', 'JJKHHJJJKGYTYTY');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `NomUtilisateur` varchar(25) NOT NULL,
  `AdresseMail` text NOT NULL,
  `MotDePasse` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `NomUtilisateur`, `AdresseMail`, `MotDePasse`) VALUES
(1, 'HERVE', 'Admin@gmail.com', 'ADMIN123'),
(14, 'ALEX', 'davidntumba82@gmail.com', 'ALEX123');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contenusslider`
--
ALTER TABLE `contenusslider`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `temoignage`
--
ALTER TABLE `temoignage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contenusslider`
--
ALTER TABLE `contenusslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `temoignage`
--
ALTER TABLE `temoignage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
