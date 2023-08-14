-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : sql101.byethost4.com
-- Généré le :  lun. 14 août 2023 à 08:50
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP :  7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `b4_27185664_epee`
--

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

CREATE TABLE `personnage` (
  `id_personnage` int(11) NOT NULL COMMENT 'id du personnage',
  `pseudoUser` varchar(20) NOT NULL COMMENT 'Id du user qui a enregistré le personnage',
  `nom` varchar(20) NOT NULL COMMENT 'Nom du personnage',
  `prenom` varchar(20) NOT NULL COMMENT 'Prénom du personnage, humain ou créature',
  `statut` varchar(200) NOT NULL COMMENT 'Statut du personnage, sorcier, créature, etc.',
  `filiation` varchar(200) NOT NULL COMMENT 'Lien d''un personnage avec un autre connu',
  `pays` varchar(50) NOT NULL COMMENT 'Pays d''origine du personnage',
  `tome` int(2) NOT NULL COMMENT 'Tome d''apparition du personnage',
  `biographie` text NOT NULL COMMENT 'Biographie rapide du personnage'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL COMMENT 'id user',
  `pseudo` varchar(20) NOT NULL COMMENT 'pseudo du user',
  `mdpasse` varchar(255) NOT NULL COMMENT 'mot de passe du user',
  `mail` varchar(255) NOT NULL COMMENT 'mail du user',
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Définit si l''utilisateur est administrateur ou pas'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `personnage`
--
ALTER TABLE `personnage`
  ADD PRIMARY KEY (`id_personnage`),
  ADD KEY `id_user` (`pseudoUser`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `personnage`
--
ALTER TABLE `personnage`
  MODIFY `id_personnage` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id du personnage';

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id user';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
