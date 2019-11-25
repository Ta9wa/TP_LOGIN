-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 25 nov. 2019 à 23:15
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `login`
--

-- --------------------------------------------------------

--
-- Structure de la table `sign_up`
--

DROP TABLE IF EXISTS `sign_up`;
CREATE TABLE IF NOT EXISTS `sign_up` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sign_up`
--

INSERT INTO `sign_up` (`name`, `email`, `password`) VALUES
('bbbb', 'bbbb@cfd.fff', 'ffffffff'),
('chrif', 'lmdldklds@dkk.com', 'takwa123'),
('chrif', 'lmdldklds@dkk.com', 'takwa123'),
('chrif', 'lmdldklds@dkk.com', 'takwa123'),
('takwa', 'takwa.mekni11@gmail.com', '123456'),
('takwa', 'takwa.mekni11@gmail.com', '123456'),
('asma', 'asma@gmail.com', 'asma123'),
('aaa', 'aaa@bb.cc', 'azerty'),
('aaa', 'aaa@bb.cc', 'azerty'),
('helloooo', 'he@gmail.com', 'hello123'),
('ghofran', 'ghofran@gmail.com', 'ghofran'),
('ghofran', 'ghofran@gmail.com', 'ghofran'),
('tassnim', 'tassnimmekni123@gmail.com', 'tassnim'),
('tassnim', 'tassnimmekni123@gmail.com', 'tassnim'),
('blabalabla', 'bla@blo.bli', 'takwa123'),
('blabalabla', 'bla@blo.bli', '$2y$10$fRlxgEn./TEmXJY6JW4ANOHI/b9JhTpIVIZ1/RA2CTjuQyym/GHli'),
('si chrif', 'mouhamed@chrif.com', '$2y$10$qkEiWi4iX1O7It/rHOdZn.b5T.vQygh.QuX2B/8/XON6zpgQ7TAHm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
