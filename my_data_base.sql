-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 27 sep. 2023 à 19:40
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `my_data_base`
--

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

DROP TABLE IF EXISTS `participants`;
CREATE TABLE IF NOT EXISTS `participants` (
  `IdPart` int NOT NULL AUTO_INCREMENT,
  `NomPart` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `PnomPart` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ContaPart` int NOT NULL,
  `EmailPart` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`IdPart`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `participants`
--

INSERT INTO `participants` (`IdPart`, `NomPart`, `PnomPart`, `ContaPart`, `EmailPart`) VALUES
(1, 'YAPO', 'ADIKO GERARD', 585093267, 'yapadiko324@gmail.com'),
(2, 'KOTOU', 'PRINCE EDMON', 103456798, 'edmonprincE@gmail.com'),
(3, 'brou', 'koffi juien', 708435899, 'broukoffi12@gmail.com'),
(4, 'abbe', 'jean jaures', 167825478, 'Jeanjauresabbe@gmail.com'),
(5, 'kimou', 'damas axcel', 507892421, 'damasaxcel45@gmail.com'),
(6, 'ouattara', 'lacoste ange axel', 152904803, 'lacoste1@gmail.com'),
(7, 'ouattara', 'lacoste ange axel', 152904803, 'lacoste1@gmail.com'),
(8, 'ouattara', 'lacoste ange axel', 152904803, 'lacoste1@gmail.com'),
(9, 'ouattara', 'lacoste ange axel', 152904803, 'lacoste1@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
