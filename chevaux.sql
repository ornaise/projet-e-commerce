-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 02 Décembre 2021 à 09:58
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chevaux`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

CREATE TABLE `appartenir` (
  `Id_Cheval` int(11) NOT NULL,
  `Id_Propriètaire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

CREATE TABLE `avoir` (
  `Id_service` int(11) NOT NULL,
  `Id_problème` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cheval`
--

CREATE TABLE `cheval` (
  `Id_Cheval` int(11) NOT NULL,
  `Poids` varchar(50) DEFAULT NULL,
  `Race` varchar(50) DEFAULT NULL,
  `Taille` varchar(50) DEFAULT NULL,
  `Age` varchar(50) DEFAULT NULL,
  `Santé` varchar(50) DEFAULT NULL,
  `Hongre` varchar(50) DEFAULT NULL,
  `Jument` varchar(50) DEFAULT NULL,
  `Entier` varchar(50) DEFAULT NULL,
  `Poulain` varchar(50) DEFAULT NULL,
  `Foal` varchar(50) DEFAULT NULL,
  `Yearling` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `Numérodecommande` int(11) NOT NULL,
  `Adressedefacturation_` varchar(50) DEFAULT NULL,
  `Produit` varchar(50) DEFAULT NULL,
  `Service` varchar(50) DEFAULT NULL,
  `facture` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `demander`
--

CREATE TABLE `demander` (
  `Id_service` int(11) NOT NULL,
  `Id_matériel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `faire`
--

CREATE TABLE `faire` (
  `Id_Propriètaire` int(11) NOT NULL,
  `Numérodecommande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `génèrer`
--

CREATE TABLE `génèrer` (
  `Numérodecommande` int(11) NOT NULL,
  `id_panier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

CREATE TABLE `localisation` (
  `Id_localisation` int(11) NOT NULL,
  `Ville_` varchar(50) DEFAULT NULL,
  `Code_postale` varchar(50) DEFAULT NULL,
  `Pays` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `matériel`
--

CREATE TABLE `matériel` (
  `Id_matériel` int(11) NOT NULL,
  `Longe` varchar(50) DEFAULT NULL,
  `Licols` varchar(50) DEFAULT NULL,
  `selle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id_panier` int(11) NOT NULL,
  `création_panier` varchar(50) DEFAULT NULL,
  `validation_panier` varchar(50) DEFAULT NULL,
  `validation_produit` varchar(50) DEFAULT NULL,
  `enregistrement_panier` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `problème`
--

CREATE TABLE `problème` (
  `Id_problème` int(11) NOT NULL,
  `Peur` varchar(50) DEFAULT NULL,
  `Refus` varchar(50) DEFAULT NULL,
  `Agressifs` varchar(50) DEFAULT NULL,
  `Id_Cheval` int(11) DEFAULT NULL,
  `Id_urgence` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `propriètaire`
--

CREATE TABLE `propriètaire` (
  `Id_Propriètaire` int(11) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prénom` varchar(50) DEFAULT NULL,
  `Adresse_mail` varchar(50) DEFAULT NULL,
  `Adresse_du_gardiennage` varchar(50) DEFAULT NULL,
  `Numéro_de_téléphone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `Id_service` int(11) NOT NULL,
  `détection_du_problème` varchar(50) DEFAULT NULL,
  `Date_de_début` datetime DEFAULT NULL,
  `date_de_fin_` datetime DEFAULT NULL,
  `Déplacement` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `urgence`
--

CREATE TABLE `urgence` (
  `Id_urgence` int(11) NOT NULL,
  `dangerpourlecheval_` varchar(50) DEFAULT NULL,
  `Dangerpourlesautreschevaux_` varchar(50) DEFAULT NULL,
  `dangerpourleshumains_` varchar(50) DEFAULT NULL,
  `Id_localisation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vouloir`
--

CREATE TABLE `vouloir` (
  `Id_matériel` int(11) NOT NULL,
  `Id_Propriètaire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD PRIMARY KEY (`Id_Cheval`,`Id_Propriètaire`),
  ADD KEY `Id_Propriètaire` (`Id_Propriètaire`);

--
-- Index pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD PRIMARY KEY (`Id_service`,`Id_problème`),
  ADD KEY `Id_problème` (`Id_problème`);

--
-- Index pour la table `cheval`
--
ALTER TABLE `cheval`
  ADD PRIMARY KEY (`Id_Cheval`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`Numérodecommande`);

--
-- Index pour la table `demander`
--
ALTER TABLE `demander`
  ADD PRIMARY KEY (`Id_service`,`Id_matériel`),
  ADD KEY `Id_matériel` (`Id_matériel`);

--
-- Index pour la table `faire`
--
ALTER TABLE `faire`
  ADD PRIMARY KEY (`Id_Propriètaire`,`Numérodecommande`),
  ADD KEY `Numérodecommande` (`Numérodecommande`);

--
-- Index pour la table `génèrer`
--
ALTER TABLE `génèrer`
  ADD PRIMARY KEY (`Numérodecommande`,`id_panier`),
  ADD KEY `id_panier` (`id_panier`);

--
-- Index pour la table `localisation`
--
ALTER TABLE `localisation`
  ADD PRIMARY KEY (`Id_localisation`);

--
-- Index pour la table `matériel`
--
ALTER TABLE `matériel`
  ADD PRIMARY KEY (`Id_matériel`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_panier`);

--
-- Index pour la table `problème`
--
ALTER TABLE `problème`
  ADD PRIMARY KEY (`Id_problème`),
  ADD UNIQUE KEY `Id_urgence` (`Id_urgence`),
  ADD KEY `Id_Cheval` (`Id_Cheval`);

--
-- Index pour la table `propriètaire`
--
ALTER TABLE `propriètaire`
  ADD PRIMARY KEY (`Id_Propriètaire`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`Id_service`);

--
-- Index pour la table `urgence`
--
ALTER TABLE `urgence`
  ADD PRIMARY KEY (`Id_urgence`),
  ADD UNIQUE KEY `Id_localisation` (`Id_localisation`);

--
-- Index pour la table `vouloir`
--
ALTER TABLE `vouloir`
  ADD PRIMARY KEY (`Id_matériel`,`Id_Propriètaire`),
  ADD KEY `Id_Propriètaire` (`Id_Propriètaire`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD CONSTRAINT `appartenir_ibfk_1` FOREIGN KEY (`Id_Cheval`) REFERENCES `cheval` (`Id_Cheval`),
  ADD CONSTRAINT `appartenir_ibfk_2` FOREIGN KEY (`Id_Propriètaire`) REFERENCES `propriètaire` (`Id_Propriètaire`);

--
-- Contraintes pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD CONSTRAINT `avoir_ibfk_1` FOREIGN KEY (`Id_service`) REFERENCES `service` (`Id_service`),
  ADD CONSTRAINT `avoir_ibfk_2` FOREIGN KEY (`Id_problème`) REFERENCES `problème` (`Id_problème`);

--
-- Contraintes pour la table `demander`
--
ALTER TABLE `demander`
  ADD CONSTRAINT `demander_ibfk_1` FOREIGN KEY (`Id_service`) REFERENCES `service` (`Id_service`),
  ADD CONSTRAINT `demander_ibfk_2` FOREIGN KEY (`Id_matériel`) REFERENCES `matériel` (`Id_matériel`);

--
-- Contraintes pour la table `faire`
--
ALTER TABLE `faire`
  ADD CONSTRAINT `faire_ibfk_1` FOREIGN KEY (`Id_Propriètaire`) REFERENCES `propriètaire` (`Id_Propriètaire`),
  ADD CONSTRAINT `faire_ibfk_2` FOREIGN KEY (`Numérodecommande`) REFERENCES `commande` (`Numérodecommande`);

--
-- Contraintes pour la table `génèrer`
--
ALTER TABLE `génèrer`
  ADD CONSTRAINT `génèrer_ibfk_1` FOREIGN KEY (`Numérodecommande`) REFERENCES `commande` (`Numérodecommande`),
  ADD CONSTRAINT `génèrer_ibfk_2` FOREIGN KEY (`id_panier`) REFERENCES `panier` (`id_panier`);

--
-- Contraintes pour la table `problème`
--
ALTER TABLE `problème`
  ADD CONSTRAINT `problème_ibfk_1` FOREIGN KEY (`Id_Cheval`) REFERENCES `cheval` (`Id_Cheval`),
  ADD CONSTRAINT `problème_ibfk_2` FOREIGN KEY (`Id_urgence`) REFERENCES `urgence` (`Id_urgence`);

--
-- Contraintes pour la table `urgence`
--
ALTER TABLE `urgence`
  ADD CONSTRAINT `urgence_ibfk_1` FOREIGN KEY (`Id_localisation`) REFERENCES `localisation` (`Id_localisation`);

--
-- Contraintes pour la table `vouloir`
--
ALTER TABLE `vouloir`
  ADD CONSTRAINT `vouloir_ibfk_1` FOREIGN KEY (`Id_matériel`) REFERENCES `matériel` (`Id_matériel`),
  ADD CONSTRAINT `vouloir_ibfk_2` FOREIGN KEY (`Id_Propriètaire`) REFERENCES `propriètaire` (`Id_Propriètaire`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
