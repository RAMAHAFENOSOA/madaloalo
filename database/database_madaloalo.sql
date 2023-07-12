-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 juil. 2023 à 16:18
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `database_madaloalo`
--

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id_personne` int(4) NOT NULL,
  `nom_personne` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mot_de_passe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id_personne`, `nom_personne`, `email`, `mot_de_passe`) VALUES
(28, 'Corinah', 'ctarantsoa@yahoo.fr', '1234'),
(29, 'RAZA', 'test@gmail.com', 'rere'),
(30, 'Corinah', 'ctarantsoa@yahoo.fr', '1237');

-- --------------------------------------------------------

--
-- Structure de la table `provinces`
--

CREATE TABLE `provinces` (
  `id_province` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nom_province` varchar(50) DEFAULT NULL,
  `chef_lieu` varchar(50) DEFAULT NULL,
  `ISO_3166_2` varchar(50) DEFAULT NULL,
  `FIPS_10_4` varchar(50) DEFAULT NULL,
  `population` varchar(50) DEFAULT NULL,
  `superficie` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `provinces`
--

INSERT INTO `provinces` (`id_province`, `id`, `nom_province`, `chef_lieu`, `ISO_3166_2`, `FIPS_10_4`, `population`, `superficie`) VALUES
(1, 0, 'Diego-Suarez', 'Diego-Suarez', 'D', 'MA01', '1188425', '43046'),
(2, 0, 'Majunga', 'Majunga', 'M', 'MA03', '1733917', '150023'),
(3, 0, 'Tuléar', 'Tuléar', 'U', 'MA06', '2229550', '161405'),
(4, 0, 'Tamatave', 'Tamatave', 'A', 'MA04', '2593063', '71911'),
(5, 0, 'Fianarantsoa', 'Fianarantsoa', 'F', 'MA02', '3366291', '102373'),
(6, 0, 'Tananarive', 'Tananarive', 'T', 'MA05', '4580788', '58283');

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `id` int(4) NOT NULL,
  `nom_province` varchar(50) NOT NULL,
  `nom_region` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `code_postal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`id`, `nom_province`, `nom_region`, `description`, `code_postal`) VALUES
(1, 'Tananarive', 'Analamanga', 'La population de la région est estimée à environ 2 650 000 habitants', 'mlo56'),
(2, 'Tananarive', 'Bongolava', 'vdkshfk', 'dfdf'),
(3, 'Tananarive', 'Vakinankaratra', 'vdkshfk', 'dfdf'),
(4, 'Diego-Suarez', 'Diana', '', ''),
(5, 'Diego-Suarez', 'Sava', '', ''),
(6, 'Fianarantsoa', 'Haute Mahatsiatra', '', ''),
(7, 'Fianarantsoa', 'Ihorombe', '', ''),
(8, 'Fianarantsoa', 'Vatovavy Fitovinany ', '', ''),
(9, 'Majunga', 'Melaky', '', ''),
(10, 'Majunga', 'Sofia', '', ''),
(11, 'Majunga', 'Boeny', '', ''),
(12, 'Majunga', 'Betsiboka', '', ''),
(13, 'Tamatave', 'Atsinanana', '', ''),
(14, 'Tamatave', 'Alaotra Mangoro', '', ''),
(15, 'Tamatave', 'Analanjirofo', '', ''),
(16, 'Tuléar', 'Anosy', '', ''),
(17, 'Tuléar', 'Androy', '', ''),
(18, 'Tuléar', 'Menabe', '', ''),
(19, 'Tuléar', 'Atsimo Andrefana', '', ''),
(20, 'Tananarive', 'Itasy', '', ''),
(21, 'Fiarantsoa', 'Amoron\'i Mania', '', ''),
(22, 'Fianarantsoa', 'Atsimo Atsinanana', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id_personne`);

--
-- Index pour la table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id_province`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id_personne` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id_province` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
