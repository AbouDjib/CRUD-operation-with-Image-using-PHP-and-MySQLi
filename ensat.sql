-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 20 fév. 2022 à 12:31
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ensat`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `comptes` (
  `ID` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `passwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `comptes` (`ID`, `user`, `passwd`) VALUES
(1, 'Abou', '12345'),
(13, 'kamechnoue', '123456');

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE `eleves` (
  `ID_eleve` int(11) NOT NULL,
  `CNE` varchar(10) NOT NULL,
  `Nom` varchar(15) NOT NULL,
  `Prenom` varchar(15) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Ville` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `etat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `eleves`
--

INSERT INTO `eleves` (`ID_eleve`, `CNE`, `Nom`, `Prenom`, `Adresse`, `Ville`, `email`, `Photo`, `etat`) VALUES
(1, '139022035', 'ABASSI', 'Yasser', 'ENSAT BP1818', 'Tanger', 'yasser.abassi@etu.uae.ac.ma', './photos/ABASSI.png', 0),
(2, '142034631', 'ALAMI-OUAHABI', 'Louay', 'ENSAT BP1818', 'Tanger', 'louay.alamiouahabi@etu.uae.ac.ma', './photos/ALAMI.png\r\n', 0),
(6, '185054115', 'AMAATI', 'Zakariae', 'ENSAT BP1818', 'Tanger', 'zakariae.amaati@etu.uae.ac.ma', './photos/AMAATI.png', 0),
(7, '142034632', 'AMAMI', 'Yassir', 'ENSAT BP1818', 'Tanger', 'yassir.amami@etu.uae.ac.ma', './photos/AMAMI.png', 0),
(8, '349022035', 'ASSADI', 'Mouad', 'ENSAT BP1818', 'Tanger', 'mouad.assadi@etu.uae.ac.ma', './photos/ASSADI.png', 0),
(9, '172034631', 'ATYQ', 'Amine', 'ENSAT BP1818', 'Tanger', 'amine.atyq@etu.uae.ac.ma', './photos/ATYQ.png', 0),
(10, '185054116', 'BELAFKI', 'Yassine', 'ENSAT BP1818', 'Tanger', 'yassine.belafki@etu.uae.ac.ma', './photos/BELAFKI.png', 0),
(11, '195054115', 'BELKENTAOUI', 'Omar', 'ENSAT BP1818', 'Tanger', 'omar.belkentaoui@etu.uae.ac.ma', './photos/BELKENTAOUI.png', 0),
(14, '1052568560', 'BENAFITOU', 'Asmae', 'ENSAT BP1818', 'Tanger', 'asmae.benafitou@etu.uae.ac.ma', './photos/BENAFITOU.png', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `compte`
--
ALTER TABLE `comptes`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `eleves`
--
ALTER TABLE `eleves`
  ADD PRIMARY KEY (`ID_eleve`,`CNE`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `comptes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `eleves`
--
ALTER TABLE `eleves`
  MODIFY `ID_eleve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

