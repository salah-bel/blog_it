-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 16 juin 2025 à 08:26
-- Version du serveur : 8.0.32
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog_it`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `published_at` datetime DEFAULT NULL,
  `reading_time` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `cover`, `author`, `category`, `published_at`, `reading_time`) VALUES
(1, 'L\'intelligence artificielle : où en est-on en 2025 ?', 'L’IA continue de transformer des secteurs comme la santé, la finance ou encore l’industrie...', 'https://example.com/images/ai-2025.jpg', 'Claire Martin', 'Tech', '2025-06-15 10:00:00', 7),
(2, 'Les data centers écoresponsables : utopie ou réalité ?', 'Face à la consommation énergétique massive des data centers, des solutions vertes émergent...', 'https://example.com/images/green-datacenter.jpg', 'Lucas Perrin', 'Écologie', '2025-06-14 09:30:00', 5),
(3, 'Le cloud computing au service des entreprises durables', 'Le cloud évolue vers plus de modularité, mais aussi d’efficacité énergétique...', 'https://example.com/images/cloud-green.jpg', 'Sophie Legrand', 'Tech', '2025-06-13 14:00:00', 6),
(4, 'Quand l’open source contribue à la transition écologique', 'Des projets open source visent à rendre les technologies plus responsables et accessibles...', 'https://example.com/images/open-source-eco.jpg', 'Nicolas Dubois', 'Écologie', '2025-06-12 16:00:00', 4),
(5, 'La cybersécurité en 2025 : nouvelles menaces, nouvelles réponses', 'Entre IA malveillante et ransomwares, la sécurité IT doit évoluer rapidement...', 'https://example.com/images/cybersecurite-2025.jpg', 'Camille Durand', 'IT', '2025-06-11 11:45:00', 8),
(6, 'L’économie circulaire dans le monde des objets connectés', 'Repenser la durée de vie des objets connectés est une urgence écologique et éthique...', 'https://example.com/images/iot-eco.jpg', 'Julien Moreau', 'Écologie', '2025-06-10 13:15:00', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
