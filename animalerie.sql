-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 22 oct. 2021 à 00:06
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `animalerie`
--

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

CREATE TABLE `animaux` (
  `id_animaux` int(11) NOT NULL,
  `nom_animaux` varchar(255) NOT NULL,
  `race_animaux` varchar(255) NOT NULL,
  `poids_animaux` float NOT NULL,
  `age_animaux` varchar(255) NOT NULL,
  `fourrure_animaux` varchar(255) NOT NULL,
  `prix_animaux` int(11) NOT NULL,
  `categorie_animaux` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`id_animaux`, `nom_animaux`, `race_animaux`, `poids_animaux`, `age_animaux`, `fourrure_animaux`, `prix_animaux`, `categorie_animaux`) VALUES
(1, 'FIOKO', 'CANICHE', 20, '1', '', 250000, 2);

-- --------------------------------------------------------

--
-- Structure de la table `categorie_animale`
--

CREATE TABLE `categorie_animale` (
  `id_categorie_a` int(11) NOT NULL,
  `libelle_categorie_a` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie_animale`
--

INSERT INTO `categorie_animale` (`id_categorie_a`, `libelle_categorie_a`) VALUES
(1, 'BERGER ALLEMAND'),
(2, 'CANICHE'),
(3, 'CHIWAWA'),
(4, 'CHIEN'),
(5, 'CHAT'),
(6, 'PERROQUET');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_produit`
--

CREATE TABLE `categorie_produit` (
  `id_categorie_p` int(11) NOT NULL,
  `libelle_categorie_p` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie_produit`
--

INSERT INTO `categorie_produit` (`id_categorie_p`, `libelle_categorie_p`) VALUES
(1, 'croquette'),
(3, 'brosse');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom_client` varchar(255) NOT NULL,
  `adresse_client` varchar(255) NOT NULL,
  `tel_client` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `oiseaux`
--

CREATE TABLE `oiseaux` (
  `id_oiseaux` int(11) NOT NULL,
  `nom_oiseaux` varchar(255) NOT NULL,
  `prix_oiseaux` int(11) NOT NULL,
  `bruit_oiseaux` varchar(255) NOT NULL,
  `categorie_oiseaux` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `oiseaux`
--

INSERT INTO `oiseaux` (`id_oiseaux`, `nom_oiseaux`, `prix_oiseaux`, `bruit_oiseaux`, `categorie_oiseaux`) VALUES
(1, 'LEO', 100000, 'PARLE', 6);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `libelle_produit` varchar(255) NOT NULL,
  `prix_produit` int(11) NOT NULL,
  `qtt_stock_produit` int(11) NOT NULL,
  `categorie_p` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` text NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `login`, `pass`, `mail`) VALUES
(4, 'Jntokpa', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'jntokpa@gmail.com'),
(5, 'jo', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'jo@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD PRIMARY KEY (`id_animaux`),
  ADD KEY `id_categorie` (`categorie_animaux`);

--
-- Index pour la table `categorie_animale`
--
ALTER TABLE `categorie_animale`
  ADD PRIMARY KEY (`id_categorie_a`);

--
-- Index pour la table `categorie_produit`
--
ALTER TABLE `categorie_produit`
  ADD PRIMARY KEY (`id_categorie_p`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `oiseaux`
--
ALTER TABLE `oiseaux`
  ADD PRIMARY KEY (`id_oiseaux`),
  ADD KEY `id_categorie` (`categorie_oiseaux`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `id_categorie_p` (`categorie_p`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animaux`
--
ALTER TABLE `animaux`
  MODIFY `id_animaux` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `categorie_animale`
--
ALTER TABLE `categorie_animale`
  MODIFY `id_categorie_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `categorie_produit`
--
ALTER TABLE `categorie_produit`
  MODIFY `id_categorie_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `oiseaux`
--
ALTER TABLE `oiseaux`
  MODIFY `id_oiseaux` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD CONSTRAINT `animaux_ibfk_1` FOREIGN KEY (`categorie_animaux`) REFERENCES `categorie_animale` (`id_categorie_a`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`categorie_p`) REFERENCES `categorie_produit` (`id_categorie_p`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
