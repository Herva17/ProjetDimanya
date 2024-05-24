-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 mai 2024 à 12:43
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
-- Base de données : `dbdimanyaword`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE `actualite` (
  `id` int(11) NOT NULL,
  `Titre` varchar(500) NOT NULL,
  `description` varchar(2550) NOT NULL,
  `Images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `actualite`
--

INSERT INTO `actualite` (`id`, `Titre`, `description`, `Images`) VALUES
(7, 'DIMANYA LA MEILLEURE SOCIETE DE LA VILLE', 'DimanyaWorld Sarl est une société de TIC innovante et dynamique qui offre une large gamme de services et de solutions de télécommunication aux particuliers et aux entreprises. Nous sommes engagés à fournir des services de qualité supérieure, une connectivité fiable et des solutions adaptées aux besoins spécifiques de nos clients. ', 'gal1.jpg'),
(8, 'CONFIGURATION DU RESEAU DANS LA SOCIETE SMKN', 'On n&#039;a pu configure le reseau dans la société SMKN, leurs routeurs vraiment la journée a été surcharge pas comme possible mais on n&#039;a pu fait quelque chose', 'fil.jpg'),
(9, 'L&#039;INSTALLATION D&#039;UNE ENTENNE VERS  LE SITE DE MWESO', 'Le travail n&#039;a pas été facile mais avec nos capacités et compétences on a pu réussir à installer cette entenne malgré que c&#039;était dans le milieu en zone rouge.', 'project1.jpg'),
(10, 'L&#039;INSTALLATION DES CAMERA DE SURVEILLANCE SUR LE RUE DE GOMA', 'Désormais notre ville vient de subir un développement incontournable la société dimanya world vient d&#039;installer des cameras de surveillance sur l&#039;étendue de la ville de Goma c&#039;est une joie pour les habitants de Goma et partout ailleurs', 'PROJECAM.PNG');

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
(24, 'Hervé', 'herveiragi80@gmail.com', ' demande de service ', ' Bonjour on  est émis de savoir les actions de l&#039;entreprise dimanya Word sur ce on aimerais être en contact avec vous');

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
(3, 'josuedkalima@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

CREATE TABLE `temoignage` (
  `id` bigint(20) NOT NULL,
  `photocl1` text NOT NULL,
  `photocl2` text NOT NULL,
  `photocl3` text NOT NULL,
  `temoignagecl1` varchar(500) NOT NULL,
  `temoignagecl2` varchar(500) NOT NULL,
  `temoignagecl3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `temoignage`
--

INSERT INTO `temoignage` (`id`, `photocl1`, `photocl2`, `photocl3`, `temoignagecl1`, `temoignagecl2`, `temoignagecl3`) VALUES
(3, '9685e8a1613f4ac7a3bfb16062649741.jpg', 'IMG-20240318-WA0003.jpg', 'IMG-20240321-WA0011.jpg', 'La société dimanya Word est l&#039;un des société meilleur en RDC et partout dans le monde du faite qu&#039;elle offre des services de qualité à ses clients fidèles et permanent', 'La société dimanya Word est l&#039;un des société meilleur en RDC et partout dans le monde du faite qu&#039;elle offre des services de qualité à ses clients fidèles et permanent', 'La société dimanya Word est l&#039;un des société meilleur en RDC et partout dans le monde du faite qu&#039;elle offre des services de qualité à ses clients fidèles et permanent');

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
(1, 'HERVE', 'Admin@gmail.com', 'ADMIN123');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualite`
--
ALTER TABLE `actualite`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour la table `actualite`
--
ALTER TABLE `actualite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `contenusslider`
--
ALTER TABLE `contenusslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `temoignage`
--
ALTER TABLE `temoignage`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
