-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 29 mai 2022 à 16:23
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sql11478598`
--

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE `rdv` (
  `date` varchar(10) NOT NULL,
  `heure` varchar(20) NOT NULL,
  `type` varchar(150) NOT NULL,
  `problem` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rdv`
--

INSERT INTO `rdv` (`date`, `heure`, `type`, `problem`, `token`) VALUES
('2022-05-04', '15:22', 'Consultation initiale', 'sqdsqw', '099f5404cad2f33c6271267f2ba24bc4c0d0ac9598849879288b0a078c67fbe4d7af8c2e220b225c395859368da6e420266c');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `verified` tinyint(2) NOT NULL,
  `token` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `sexe` varchar(2) NOT NULL,
  `age` varchar(3) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `oldPatient` varchar(5) NOT NULL,
  `usertype` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`username`, `email`, `verified`, `token`, `password`, `sexe`, `age`, `phone`, `oldPatient`, `usertype`) VALUES
('youssef moyr', 'mourabitiyoussef@gmail.com', 1, '099f5404cad2f33c6271267f2ba24bc4c0d0ac9598849879288b0a078c67fbe4d7af8c2e220b225c395859368da6e420266c', '$2y$10$dKSPsxvs5mFb3Bj15dB26egb/wi.vkmkYfCIyKGw7flKuFOdZ0czu', 'Ho', '158', '544521', 'Non', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
