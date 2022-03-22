-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 22 mars 2022 à 09:25
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetalex`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `id_adresse` int(11) NOT NULL AUTO_INCREMENT,
  `rue` varchar(100) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `code_postale` varchar(50) DEFAULT NULL,
  `numeros_de_rue` varchar(50) DEFAULT NULL,
  `departement` varchar(150) NOT NULL,
  PRIMARY KEY (`id_adresse`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

DROP TABLE IF EXISTS `appartenir`;
CREATE TABLE IF NOT EXISTS `appartenir` (
  `Id_Cheval` int(11) NOT NULL,
  `Id_Proprietaire` int(11) NOT NULL,
  PRIMARY KEY (`Id_Cheval`,`Id_Proprietaire`),
  KEY `Id_Proprietaire` (`Id_Proprietaire`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

DROP TABLE IF EXISTS `avoir`;
CREATE TABLE IF NOT EXISTS `avoir` (
  `Id_probleme` int(11) NOT NULL,
  `Id_Cheval` int(11) NOT NULL,
  PRIMARY KEY (`Id_probleme`,`Id_Cheval`),
  KEY `Id_Cheval` (`Id_Cheval`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cheval`
--

DROP TABLE IF EXISTS `cheval`;
CREATE TABLE IF NOT EXISTS `cheval` (
  `Id_Cheval` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Cheval` varchar(200) NOT NULL,
  `Race` varchar(50) DEFAULT NULL,
  `Taille` varchar(50) DEFAULT NULL,
  `Sexe` varchar(50) DEFAULT NULL,
  `Adresse` varchar(220) NOT NULL,
  PRIMARY KEY (`Id_Cheval`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cheval`
--

INSERT INTO `cheval` (`Id_Cheval`, `Nom_Cheval`, `Race`, `Taille`, `Sexe`, `Adresse`) VALUES
(2, 'Princesse', '1m61', 'pur_sang', 'Sexe', '17 rue de la chaume d\'en bas 18130 Raymond '),
(3, 'Princesse', '1m61', 'pur_sang', 'Sexe', '17 rue de la chaume d\'en bas 18130 Raymond '),
(4, 'Princesse', '1m61', 'pur_sang', 'Sexe', '17 rue de la chaume d\'en bas 18130 Raymond '),
(5, 'Princesse', '1m61', 'pur_sang', 'Sexe', '17 rue de la chaume d\'en bas 18130 Raymond '),
(6, 'Princesse', '1m61', 'pur_sang', 'Sexe', '17 rue de la chaume d\'en bas 18130 Raymond '),
(7, 'Princesse', '1m61', 'pur_sang', 'Sexe', '17 rue de la chaume d\'en bas 18130 Raymond '),
(8, 'Princesse', '1m61', 'pur_sang', 'Sexe', '17 rue de la chaume d\'en bas 18130 Raymond '),
(9, 'Princesse', '1m61', 'pur_sang', 'Sexe', '17 rue de la chaume d\'en bas 18130 Raymond '),
(10, 'Princesse', '1m61', 'pur_sang', 'Sexe', '17 rue de la chaume d\'en bas 18130 Raymond '),
(11, 'Princesse', '1m61', 'pur_sang', 'Sexe', '17 rue de la chaume d\'en bas 18130 Raymond '),
(12, 'Princesse', '1m61', 'pur_sang', 'Sexe', '17 rue de la chaume d\'en bas 18130 Raymond '),
(13, 'Princesse', '1m61', 'pur_sang', 'Sexe', '17 rue de la chaume d\'en bas 18130 Raymond '),
(14, 'Apaches', '1m60', 'poney', 'Sexe', '17 rue de la chaume d\'en bas 18130 Raymond '),
(15, 'Apaches', '1m60', 'poney', 'Sexe', '17 rue de la chaume d\'en bas 18130 Raymond '),
(16, 'Apaches', '1m60', 'poney', 'Sexe', '17 rue de la chaume d\'en bas 18130 Raymond '),
(17, '', '', '', 'Sexe', ''),
(18, '', '', '', 'Sexe', ''),
(19, '', '', '', 'Sexe', ''),
(20, '', '', '', 'Sexe', ''),
(21, 'Apaches', '1m61', 'poney', 'Sexe', '1 rue anatole 18000 Bourges'),
(22, 'Apaches', '1m61', 'poney', 'Sexe', '1 rue anatole 18000 Bourges'),
(23, 'Apaches', '1m61', 'poney', 'Sexe', '1 rue anatole 18000 Bourges'),
(24, 'Apaches', '1m61', 'poney', 'Sexe', '1 rue anatole 18000 Bourges'),
(25, 'Princesse', '1m60', 'pur_sang', 'Sexe', '1 rue anatole 18000 Bourges'),
(26, 'Princesse', '1m60', 'pur_sang', 'Sexe', '1 rue anatole 18000 Bourges'),
(27, 'Princesse', '1m60', 'pur_sang', 'Sexe', '1 rue anatole 18000 Bourges'),
(28, 'Princesse', '1m60', 'pur_sang', 'Sexe', '1 rue anatole 18000 Bourges'),
(29, 'Princesse', '1m60', 'pur_sang', 'Sexe', '1 rue anatole 18000 Bourges'),
(30, 'Princesse', '1m60', 'pur_sang', 'Sexe', '1 rue anatole 18000 Bourges'),
(31, 'Princesse', '1m60', 'pur_sang', 'Sexe', '1 rue anatole 18000 Bourges'),
(32, 'Princesse', '1m60', 'pur_sang', 'Sexe', '1 rue anatole 18000 Bourges'),
(33, 'Princesse', '1m60', 'pur_sang', 'Sexe', '1 rue anatole 18000 Bourges');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `Numerodecommande` int(11) NOT NULL,
  `Adressedefacturation` varchar(50) DEFAULT NULL,
  `Produit` varchar(50) DEFAULT NULL,
  `Service` varchar(50) DEFAULT NULL,
  `facture` varchar(50) DEFAULT NULL,
  `id_facture` int(11) NOT NULL,
  `id_panier` int(11) NOT NULL,
  PRIMARY KEY (`id_commande`),
  UNIQUE KEY `id_panier` (`id_panier`),
  KEY `id_facture` (`id_facture`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `demander`
--

DROP TABLE IF EXISTS `demander`;
CREATE TABLE IF NOT EXISTS `demander` (
  `Id_service` int(11) NOT NULL,
  `Id_Proprietaire` int(11) NOT NULL,
  PRIMARY KEY (`Id_service`,`Id_Proprietaire`),
  KEY `Id_Proprietaire` (`Id_Proprietaire`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `id_facture` int(11) NOT NULL AUTO_INCREMENT,
  `date_facture` datetime DEFAULT NULL,
  `heure_facture` datetime DEFAULT NULL,
  `numeros_facture` int(11) DEFAULT NULL,
  `adresse_facturation` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_facture`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `frais_de_deplacement`
--

DROP TABLE IF EXISTS `frais_de_deplacement`;
CREATE TABLE IF NOT EXISTS `frais_de_deplacement` (
  `id_frais` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_de_km` int(11) DEFAULT NULL,
  `prix_au_km` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_frais`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `habiter`
--

DROP TABLE IF EXISTS `habiter`;
CREATE TABLE IF NOT EXISTS `habiter` (
  `Id_Proprietaire` int(11) NOT NULL,
  `id_adresse` int(11) NOT NULL,
  PRIMARY KEY (`Id_Proprietaire`,`id_adresse`),
  KEY `id_adresse` (`id_adresse`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

DROP TABLE IF EXISTS `localisation`;
CREATE TABLE IF NOT EXISTS `localisation` (
  `Id_localisation` int(11) NOT NULL AUTO_INCREMENT,
  `Ville_` varchar(100) DEFAULT NULL,
  `Code_postale` varchar(100) DEFAULT NULL,
  `Pays` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`Id_localisation`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `louer`
--

DROP TABLE IF EXISTS `louer`;
CREATE TABLE IF NOT EXISTS `louer` (
  `Id_materiel` int(11) NOT NULL,
  `Id_Proprietaire` int(11) NOT NULL,
  PRIMARY KEY (`Id_materiel`,`Id_Proprietaire`),
  KEY `Id_Proprietaire` (`Id_Proprietaire`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

DROP TABLE IF EXISTS `materiel`;
CREATE TABLE IF NOT EXISTS `materiel` (
  `Id_materiel` int(11) NOT NULL AUTO_INCREMENT,
  `type_de_materiel` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_materiel`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id_panier` int(11) NOT NULL AUTO_INCREMENT,
  `creation_panier` varchar(50) DEFAULT NULL,
  `validation_panier` varchar(50) DEFAULT NULL,
  `validation_service` varchar(50) DEFAULT NULL,
  `enregistrement_panier` varchar(50) DEFAULT NULL,
  `Id_Proprietaire` int(11) NOT NULL,
  `placerCommade` varchar(220) NOT NULL,
  `quantité` int(11) NOT NULL,
  PRIMARY KEY (`id_panier`),
  UNIQUE KEY `Id_Proprietaire` (`Id_Proprietaire`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `probleme`
--

DROP TABLE IF EXISTS `probleme`;
CREATE TABLE IF NOT EXISTS `probleme` (
  `Id_probleme` int(11) NOT NULL AUTO_INCREMENT,
  `autre` varchar(50) DEFAULT NULL,
  `Peur` varchar(50) DEFAULT NULL,
  `Refus` varchar(50) DEFAULT NULL,
  `Agressifs` varchar(50) DEFAULT NULL,
  `urgence` varchar(50) DEFAULT NULL,
  `danger_pour_le_cheval` varchar(50) DEFAULT NULL,
  `danger_pour_ses_congenere` varchar(50) DEFAULT NULL,
  `danger_pour_les_humains` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_probleme`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `proprietaire`
--

DROP TABLE IF EXISTS `proprietaire`;
CREATE TABLE IF NOT EXISTS `proprietaire` (
  `Id_Proprietaire` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) DEFAULT NULL,
  `Prenom` varchar(100) DEFAULT NULL,
  `Adresse_mail` varchar(120) DEFAULT NULL,
  `Numero_de_telephone` int(11) DEFAULT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_Proprietaire`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `proprietaire`
--

INSERT INTO `proprietaire` (`Id_Proprietaire`, `Nom`, `Prenom`, `Adresse_mail`, `Numero_de_telephone`, `password`) VALUES
(1, 'Chaboche', 'Alexandra', 'zayaza28.ac@gmail.com', 786523099, '12345'),
(7, 'Chaboche', 'Alexandra', 'zayaza28.ac@gmail.com', 786523099, '12345'),
(8, 'Chaboche', 'Alexandra', 'zayaza28.ac@gmail.com', 786523099, '12345'),
(9, 'Chaboche', 'Alexandra', 'zayaza28.ac@gmail.com', 786523099, '25630'),
(10, 'Chaboche', 'Alexandra', 'zayaza28.ac@gmail.com', 786523099, '12345');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `Id_service` int(11) NOT NULL AUTO_INCREMENT,
  `Date_de_debut` datetime DEFAULT NULL,
  `imgs` text,
  `nom` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `prix` decimal(7,2) NOT NULL,
  `prix-Reel` decimal(7,2) NOT NULL,
  `quantité` int(11) NOT NULL,
  PRIMARY KEY (`Id_service`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`Id_service`, `Date_de_debut`, `imgs`, `nom`, `description`, `prix`, `prix-Reel`, `quantité`) VALUES
(1, '2022-03-04 10:52:20', 'bache.png', 'peur des bâches', '', '150.00', '160.00', 1),
(2, '2022-03-04 11:52:20', 'peur des objets.png', 'peur des objets', '', '120.00', '130.00', 1),
(3, '2022-03-04 13:00:20', 'saut.jpg', 'peur des obstacles', '', '120.00', '140.00', 1),
(4, '2022-03-04 13:15:20', 'maltraitance.jpg', 'Maltraitance', '', '100.00', '120.00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `soigner`
--

DROP TABLE IF EXISTS `soigner`;
CREATE TABLE IF NOT EXISTS `soigner` (
  `Id_service` int(11) NOT NULL,
  `Id_Cheval` int(11) NOT NULL,
  PRIMARY KEY (`Id_service`,`Id_Cheval`),
  KEY `Id_Cheval` (`Id_Cheval`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ornaise', '', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5'),
(2, 'ornaise', 'zayaza28.ac@gmail.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5'),
(3, 'ornaise', 'zayaza28.ac@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(4, 'ornaise', 'zayaza28.ac@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(5, 'ornaise', 'zayaza28.ac@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(6, 'ornaise', 'zayaza28.ac@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(7, 'ornaise', 'zayaza28.ac@gmail.com', 'e7042ac7d09c7bc41c8cfa5749e41858f6980643bc0db1a83cc793d3e24d3f77'),
(8, 'ornaise', 'zayaza28.ac@gmail.com', '35a9e381b1a27567549b5f8a6f783c167ebf809f1c4d6a9e367240484d8ce281'),
(9, 'ornaise', 'zayaza28.ac@gmail.com', '38083c7ee9121e17401883566a148aa5c2e2d55dc53bc4a94a026517dbff3c6b'),
(10, 'ornaise', 'zayaza28.ac@gmail.com', '38083c7ee9121e17401883566a148aa5c2e2d55dc53bc4a94a026517dbff3c6b'),
(11, 'ornaise', 'zayaza28.ac@gmail.com', '38083c7ee9121e17401883566a148aa5c2e2d55dc53bc4a94a026517dbff3c6b'),
(12, 'ornaise', 'zayaza28.ac@gmail.com', '35a9e381b1a27567549b5f8a6f783c167ebf809f1c4d6a9e367240484d8ce281'),
(13, 'dupond', 'duponderic@gmail.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
