-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 24 Janvier 2016 à 16:07
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `cammandes`
--

CREATE TABLE IF NOT EXISTS `cammandes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `utilisateur_id` int(11) DEFAULT NULL,
  `valider` tinyint(1) NOT NULL,
  `date` datetime NOT NULL,
  `reference` int(11) NOT NULL,
  `produits` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  KEY `IDX_205E3A1EFB88E14F` (`utilisateur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `cammandes`
--

INSERT INTO `cammandes` (`id`, `utilisateur_id`, `valider`, `date`, `reference`, `produits`) VALUES
(7, 36, 1, '2015-12-23 20:24:16', 1, 'a:3:{i:0;a:1:{i:1;s:1:"2";}i:1;a:1:{i:2;s:1:"1";}i:4;a:1:{i:4;s:1:"5";}}'),
(8, 39, 1, '2015-12-23 20:24:16', 2, 'a:3:{i:0;a:1:{i:1;s:1:"2";}i:1;a:1:{i:2;s:1:"1";}i:4;a:1:{i:4;s:1:"5";}}');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) NOT NULL,
  `nom` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_497DD6343DA5256D` (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `image_id`, `nom`) VALUES
(38, 122, 'Legumes'),
(39, 123, 'Fruits');

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=127 ;

--
-- Contenu de la table `media`
--

INSERT INTO `media` (`id`, `path`, `alt`) VALUES
(122, 'http://www.lakaz-piment.com/piment.jpg', 'Legumes'),
(123, 'http://www.lakaz-piment.com/piment.jpg', 'Fruits'),
(124, 'http://www.lakaz-piment.com/piment.jpg', 'Poivron vert'),
(125, 'http://www.lakaz-piment.com/piment.jpg', 'Piment'),
(126, 'http://www.lakaz-piment.com/piment.jpg', 'Tomate');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) NOT NULL,
  `tva_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `nom` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_BE2DDF8C3DA5256D` (`image_id`),
  KEY `IDX_BE2DDF8C4D79775F` (`tva_id`),
  KEY `IDX_BE2DDF8CBCF5E72D` (`categorie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id`, `image_id`, `tva_id`, `categorie_id`, `nom`, `description`, `prix`, `disponible`) VALUES
(34, 124, 32, 38, 'Poivron rouge', 'Le poivron rouge est un groupe de cultivars..', 1.99, 1),
(35, 125, 32, 38, 'Piment', 'Piment est g', 3.99, 1),
(36, 126, 32, 39, 'Tomate', 'La tomate est est une esp', 0.99, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tva`
--

CREATE TABLE IF NOT EXISTS `tva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `multiplicate` double NOT NULL,
  `nom` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `valeur` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Contenu de la table `tva`
--

INSERT INTO `tva` (`id`, `multiplicate`, `nom`, `valeur`) VALUES
(31, 0.982, 'TVA 1.75%', 1.75),
(32, 0.833, 'TVA 20%', 20);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_497B315E92FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_497B315EA0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=41 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(36, 'Houda', 'houda', 'boucenna.nourelhouda@gmail.com', 'boucenna.nourelhouda@gmail.com', 1, '8g5g2youg6scss4o08oo0cw4gssggc0', 'qnmAdg1taOTg7fwa2aJmbSqHlxJgLuBC0RW/nWncpyMf9OQF9WjuYlqzmJ8Q37CAyTE5hBN0+/PXJsXgglc93g==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(37, 'Bochra', 'bochra', 'boucenna.bochra@gmail.com', 'boucenna.bochra@gmail.com', 1, 'qmfhcom5b1cgkw8goccco8sgc00co08', 'BsCrmqOlMl/4ZfnKRl5WPigaGP/+z/9iih9RrcM6+JL3T6oxDTHs3TcPCg8wasM063KAVT6e6cE1xTHhbsi1AQ==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(38, 'Hanine', 'hanine', 'boucenna.hanine@gmail.com', 'boucenna.hanine@gmail.com', 1, '9dos1nxv2q04ock4wg0kkw4840coowc', 'ptS7OPHoFlXu48O1GucxNv1mt/T9t6SF7Ej73aKYPEftr4XDqF6SpbDNUowAALlLTJbsfofvaKl7Z8cwNye46w==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(39, 'Jamal', 'jamal', 'boucenna.jamal@gmail.com', 'boucenna.jamal@gmail.com', 1, 'a2tg2i2643cw0ck88wcc4sogok8ggk4', 'jKgTrqDzPjE+y8gQxT12il58S/dYT+H1/ELdDQVWBEjCI6BjcOPM7hdA6z5jW4LscjGZQqE7LtOuD88Toyx1jQ==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(40, 'houdhoud', 'houdhoud', 'boucenna.h@gmail.com', 'boucenna.h@gmail.com', 1, '5ji28qr93y80kokogwgwg4kkks0c04c', 'V7hNixr9UNfR+UmGVmVfgsHE+JEDvETZPy2G1s0XoK9Sfj2K3Zc3rJXrsLT7sg6iiPDx0mKotqx5ANUDO8KSHg==', '2016-01-17 18:48:36', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateursadresses`
--

CREATE TABLE IF NOT EXISTS `utilisateursadresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `utilisateur_id` int(11) DEFAULT NULL,
  `nom` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cp` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `pays` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `complement` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_95A7AD7AFB88E14F` (`utilisateur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Contenu de la table `utilisateursadresses`
--

INSERT INTO `utilisateursadresses` (`id`, `utilisateur_id`, `nom`, `prenom`, `telephone`, `adresse`, `cp`, `pays`, `ville`, `complement`) VALUES
(20, 36, 'boucenna', 'houda', '000000', '251,rue jeanne darc', '54000', 'france', 'Nancy', 'bertrand cit'),
(21, 37, 'boucenna', 'bochra', '000000', '117,rue jzaaf rabah', '21000', 'alg', 'azzaba', 'skikda'),
(22, 38, 'boucenna', 'hanine', '000000', '251,rue jeanne darc', '54000', 'france', 'Nancy', 'bertrand'),
(23, 39, 'boucenna', 'jamal', '000000', '117,rue zaaf rabah', '21000', 'alg', 'azzaba', 'skikda');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `cammandes`
--
ALTER TABLE `cammandes`
  ADD CONSTRAINT `FK_205E3A1EFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`);

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `FK_497DD6343DA5256D` FOREIGN KEY (`image_id`) REFERENCES `media` (`id`);

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `FK_BE2DDF8C3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `media` (`id`),
  ADD CONSTRAINT `FK_BE2DDF8C4D79775F` FOREIGN KEY (`tva_id`) REFERENCES `tva` (`id`),
  ADD CONSTRAINT `FK_BE2DDF8CBCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `utilisateursadresses`
--
ALTER TABLE `utilisateursadresses`
  ADD CONSTRAINT `FK_95A7AD7AFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
