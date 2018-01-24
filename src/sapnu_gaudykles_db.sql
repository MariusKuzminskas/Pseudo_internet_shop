-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 24, 2018 at 02:40 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sapnu_gaudykles_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `prekes`
--

DROP TABLE IF EXISTS `prekes`;
CREATE TABLE `prekes` (
  `id` int(6) NOT NULL,
  `pavadinimas` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `ilgis` int(4) NOT NULL,
  `skersmuo` int(4) NOT NULL,
  `medziagos_1` text COLLATE utf8_lithuanian_ci NOT NULL,
  `medziagos_2` text COLLATE utf8_lithuanian_ci NOT NULL,
  `aprasymas_1` text COLLATE utf8_lithuanian_ci NOT NULL,
  `aprasymas_2` text COLLATE utf8_lithuanian_ci NOT NULL,
  `sale` tinyint(1) NOT NULL,
  `kaina` float NOT NULL,
  `kaina_buvusi` float NOT NULL,
  `vyrams` tinyint(1) NOT NULL,
  `moterims` tinyint(1) NOT NULL,
  `vaikams` tinyint(1) NOT NULL,
  `image` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `prekes`
--

INSERT INTO `prekes` (`id`, `pavadinimas`, `ilgis`, `skersmuo`, `medziagos_1`, `medziagos_2`, `aprasymas_1`, `aprasymas_2`, `sale`, `kaina`, `kaina_buvusi`, `vyrams`, `moterims`, `vaikams`, `image`) VALUES
(1, 'Žalia sapnų gaudyklė', 18, 8, 'Karoliukai - stiklas, medinis', 'Plunksnos - dekoratyvinės', 'Dėl individualių užsakymų kreipkitės paštu, per facebook.com/gaudykles, arba skiltyje kontaktai', '', 1, 16, 18, 1, 1, 1, 1),
(2, 'Natūrali sapnų gaudyklė', 25, 9, 'Karoliukai - jaspis, medinis', 'Plunksnos - dekoratyvinės, natūralios', '', '', 1, 17, 20, 1, 1, 1, 2),
(3, 'Maža violetinė sapnų gaudyklė / pakabutis', 14, 5, 'Karoliukai - stiklas, medinis', 'Plunksnos - natūralios', '', '', 1, 5, 10, 0, 1, 1, 3),
(4, 'Raudona sapnų gaudyklė', 50, 21, 'Karoliukai - stiklas, medinis', 'Plunksnos - dekoratyvinės, natūralios', '', '', 0, 20, 20, 0, 1, 1, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prekes`
--
ALTER TABLE `prekes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prekes`
--
ALTER TABLE `prekes`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
