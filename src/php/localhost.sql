-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 12, 2018 at 06:14 AM
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
-- Database: `gaudykles`
--
DROP DATABASE IF EXISTS `gaudykles`;
CREATE DATABASE IF NOT EXISTS `gaudykles` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gaudykles`;

-- --------------------------------------------------------

--
-- Table structure for table `shop_prekes`
--

DROP TABLE IF EXISTS `shop_prekes`;
CREATE TABLE `shop_prekes` (
  `id` int(11) NOT NULL,
  `bs_col` varchar(25) NOT NULL,
  `img_src` varchar(40) NOT NULL,
  `sale` int(1) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_prekes`
--

INSERT INTO `shop_prekes` (`id`, `bs_col`, `img_src`, `sale`, `price`) VALUES
(1, 'col-lg-4', 'img/port-thumb/1.jpg', 1, 19.99),
(2, 'col-lg-4', 'img/port-thumb/2.jpg', 1, 18.99),
(3, 'col-lg-4', 'img/port-thumb/3.jpg', 0, 22.99),
(4, 'col-lg-4', 'img/port-thumb/4.jpg', 0, 25.99),
(5, 'col-lg-4', 'img/port-thumb/5.jpg', 0, 30),
(6, 'col-lg-4', 'img/port-thumb/6.jpg', 1, 28.99),
(7, 'col-lg-8', 'img/port-thumb/7.jpg', 1, 29.99),
(8, 'col-lg-2', 'img/port-thumb/8.jpg', 0, 9.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop_prekes`
--
ALTER TABLE `shop_prekes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop_prekes`
--
ALTER TABLE `shop_prekes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
