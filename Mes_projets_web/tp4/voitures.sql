-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 12 Février 2020 à 13:17
-- Version du serveur :  5.7.22-0ubuntu0.16.04.1
-- Version de PHP :  7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `voitures`
--

-- --------------------------------------------------------

--
-- Structure de la table `cartegrise`
--

CREATE TABLE `cartegrise` (
  `id_pers` mediumint(5) DEFAULT '0',
  `immat` varchar(6) COLLATE utf8_bin NOT NULL,
  `datecarte` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `cartegrise`
--

INSERT INTO `cartegrise` (`id_pers`, `immat`, `datecarte`) VALUES
(1, 'AA10AA', '2018-02-15'),
(1, 'EF02GH', '2018-02-18'),
(2, 'AB01CD', '2018-02-16'),
(3, 'BB10BB', '2018-02-17'),
(4, 'CC10CC', '2018-02-17'),
(5, 'EE02GH', '2018-02-17'),
(11, 'AB12CD', '2018-02-01'),
(12, 'AB12CD', '2018-02-01'),
(13, 'ZZ99ZZ', '2018-02-01');

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

CREATE TABLE `modele` (
  `id_modele` varchar(10) COLLATE utf8_bin NOT NULL,
  `modele` varchar(30) COLLATE utf8_bin NOT NULL,
  `carburant` enum('essence','diesel','gpl','électrique') COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `modele`
--

INSERT INTO `modele` (`id_modele`, `modele`, `carburant`) VALUES
('1234ABC789', 'Chevrolet Corvette C7R', ''),
('178524ER45', 'Citroën Picasso', ''),
('17C92853AZ', 'Citroën C5', 'diesel'),
('33356677PO', 'Peugeot 206', 'électrique'),
('485228FGD7', 'Volkswagen Golf', 'diesel'),
('563339GH56', 'Citroën C3', ''),
('7499RF5679', 'Renault Mégane Scenic', 'diesel'),
('83321TY455', 'Renault Espace', 'diesel'),
('AZER67455T', 'Peugeot 307', ''),
('DSQS455674', 'Renault Adventime', 'diesel'),
('FHT55432GH', 'Renault Twingo', ''),
('ZER627864K', 'Ferrari GT 40', '');

-- --------------------------------------------------------

--
-- Structure de la table `proprietaire`
--

CREATE TABLE `proprietaire` (
  `id_pers` mediumint(8) UNSIGNED NOT NULL,
  `nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(30) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(50) COLLATE utf8_bin NOT NULL,
  `ville` varchar(40) COLLATE utf8_bin NOT NULL,
  `codepostal` mediumint(5) UNSIGNED NOT NULL DEFAULT '49000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `proprietaire`
--

INSERT INTO `proprietaire` (`id_pers`, `nom`, `prenom`, `adresse`, `ville`, `codepostal`) VALUES
(1, 'Fangio', 'Juan Manuel', 'Rue Auvent', 'Les Bons Airs', 65000),
(2, 'Prost', 'Alain', 'La Grande Boucle', 'Saint-Chamond', 42207),
(3, 'Dupont', 'Jean', 'Boucherie Sanzot', 'Moulinsart', 99000),
(4, 'Dupond', 'Jean', 'Boucherie Sanzot', 'Moulinsart', 99000),
(5, 'Angulaire', 'Pierre', 'Le Chemin de la Ronde', 'La Croix', 33000),
(12, 'Loeb', 'Sébastien', 'Place du Rallye-Mans', 'Haguenau', 67180),
(13, 'Lauda', 'Niki', 'Route des Hunaudières', 'Monte Carlo', 98000);

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `immat` varchar(6) COLLATE utf8_bin NOT NULL,
  `id_modele` varchar(10) COLLATE utf8_bin NOT NULL,
  `couleur` enum('claire','moyenne','foncée','') COLLATE utf8_bin NOT NULL DEFAULT 'claire',
  `datevoiture` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `voiture`
--

INSERT INTO `voiture` (`immat`, `id_modele`, `couleur`, `datevoiture`) VALUES
('AA10AA', 'AZER67455T', 'claire', '2018-02-04'),
('AB01CD', '178524ER45', 'claire', '2018-02-01'),
('AB12CD', '1234ABC789', 'claire', '2017-12-31'),
('BB10BB', 'DSQS455674', 'moyenne', '2018-02-05'),
('CC10CC', 'FHT55432GH', 'moyenne', '2018-02-05'),
('DD01CD', '178524ER45', 'claire', '2017-01-01'),
('EE02GH', '17C92853AZ', 'claire', '2017-02-01'),
('FF03KL', '33356677PO', 'moyenne', '2016-07-02'),
('GG04OP', '485228FGD7', 'moyenne', '2015-03-02'),
('HH05ST', '563339GH56', 'foncée', '2016-08-03'),
('II06WX', '7499RF5679', 'foncée', '2016-12-03'),
('IJ03KL', '33356677PO', 'moyenne', '2018-02-02'),
('JJ07AB', '83321TY455', 'claire', '2013-12-04'),
('KK10AA', 'AZER67455T', 'claire', '2011-06-04'),
('LL10BB', 'DSQS455674', 'moyenne', '2015-07-05'),
('MM10CC', 'FHT55432GH', 'moyenne', '2017-01-05'),
('MN04OP', '485228FGD7', 'moyenne', '2018-02-02'),
('QR05ST', '563339GH56', 'foncée', '2018-02-03'),
('UV06WX', '7499RF5679', 'foncée', '2018-02-03'),
('YZ07AB', '83321TY455', 'claire', '2018-02-04'),
('ZZ99ZZ', 'ZER627864K', 'foncée', '2017-12-31');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `proprietaire`
--
ALTER TABLE `proprietaire`
  ADD PRIMARY KEY (`id_pers`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`immat`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `proprietaire`
--
ALTER TABLE `proprietaire`
  MODIFY `id_pers` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
