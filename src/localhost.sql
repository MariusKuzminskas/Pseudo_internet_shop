-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 15, 2018 at 06:17 AM
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
CREATE DATABASE IF NOT EXISTS `gaudykles` DEFAULT CHARACTER SET utf8 COLLATE utf8_lithuanian_ci;
USE `gaudykles`;

-- --------------------------------------------------------

--
-- Table structure for table `apie_foto_ajax`
--

DROP TABLE IF EXISTS `apie_foto_ajax`;
CREATE TABLE `apie_foto_ajax` (
  `id` int(6) NOT NULL,
  `klase` varchar(50) NOT NULL,
  `src` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apie_foto_ajax`
--

INSERT INTO `apie_foto_ajax` (`id`, `klase`, `src`) VALUES
(1, 'col-lg-3', './img/crop/1.jpg'),
(2, 'col-lg-3', './img/crop/2.jpg'),
(3, 'col-lg-3', './img/crop/3.jpg'),
(4, 'col-lg-3', './img/crop/4.jpg'),
(5, 'col-lg-6', './img/crop/5.jpg'),
(6, 'col-lg-6', './img/crop/6.jpg'),
(7, 'col-lg-4', './img/crop/7.jpg'),
(8, 'col-lg-4', './img/crop/8.jpg'),
(9, 'col-lg-4', './img/crop/3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `id` int(6) NOT NULL,
  `subject` varchar(255) CHARACTER SET latin1 NOT NULL,
  `body` mediumtext COLLATE utf8_lithuanian_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `subject`, `body`, `time`) VALUES
(1, 'super tema', 'viena karta as buvau soduose ', '0000-00-00 00:00:00'),
(2, 'kita tema', 'Petriukas norejo eiti i mokykl?. bet ', '0000-00-00 00:00:00'),
(3, 'tema 3', 'ęėįęėįęėįęėįęėį', '0000-00-00 00:00:00'),
(4, 'Ajax', 'Ajax padeda paimti arba paduoti duomenis is DB neperkraunant puslapio.', '0000-00-00 00:00:00'),
(5, 'lorem', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam fugit odit, totam beatae minus ratione quod laudantium quos quibusdam provident animi eveniet repudiandae, repellat earum harum tempora? Accusantium iste doloremque, voluptates est laboriosam eveniet et a hic obcaecati minus harum soluta rem necessitatibus quia, voluptatum sequi quod deserunt eum non ut mollitia pariatur inventore quis quaerat? Maiores, rerum impedit qui porro modi labore distinctio necessitatibus tempore delectus iste, laborum quod blanditiis neque quibusdam eveniet quas ut voluptas, quos eos dolorum corporis veniam velit? Ut expedita maxime nisi quam delectus quidem modi, dolor repellat sit eveniet aliquam recusandae explicabo cum! Harum.\n', '0000-00-00 00:00:00'),
(6, 'lorem', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam fugit odit, totam beatae minus ratione quod laudantium quos quibusdam provident animi eveniet repudiandae, repellat earum harum tempora? Accusantium iste doloremque, voluptates est laboriosam eveniet et a hic obcaecati minus harum soluta rem necessitatibus quia, voluptatum sequi quod deserunt eum non ut mollitia pariatur inventore quis quaerat? Maiores, rerum impedit qui porro modi labore distinctio necessitatibus tempore delectus iste, laborum quod blanditiis neque quibusdam eveniet quas ut voluptas, quos eos dolorum corporis veniam velit? Ut expedita maxime nisi quam delectus quidem modi, dolor repellat sit eveniet aliquam recusandae explicabo cum! Harum.\n', '0000-00-00 00:00:00'),
(7, 'Vienas', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam fugit odit, totam beatae minus ratione quod laudantium quos quibusdam provident animi eveniet repudiandae, repellat earum harum tempora? Accusantium iste doloremque, voluptates est laboriosam eveniet et a hic obcaecati minus harum soluta rem necessitatibus quia, voluptatum sequi quod deserunt eum non ut mollitia pariatur inventore quis quaerat? Maiores, rerum impedit qui porro modi labore distinctio necessitatibus tempore delectus iste, laborum quod blanditiis neque quibusdam eveniet quas ut voluptas, quos eos dolorum corporis veniam velit? Ut expedita maxime nisi quam delectus quidem modi, dolor repellat sit eveniet aliquam recusandae explicabo cum! Harum.\n', '0000-00-00 00:00:00'),
(8, 'Vienas', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam fugit odit, totam beatae minus ratione quod laudantium quos quibusdam provident animi eveniet repudiandae, repellat earum harum tempora? Accusantium iste doloremque, voluptates est laboriosam eveniet et a hic obcaecati minus harum soluta rem necessitatibus quia, voluptatum sequi quod deserunt eum non ut mollitia pariatur inventore quis quaerat? Maiores, rerum impedit qui porro modi labore distinctio necessitatibus tempore delectus iste, laborum quod blanditiis neque quibusdam eveniet quas ut voluptas, quos eos dolorum corporis veniam velit? Ut expedita maxime nisi quam delectus quidem modi, dolor repellat sit eveniet aliquam recusandae explicabo cum! Harum.\n', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `emailai`
--

DROP TABLE IF EXISTS `emailai`;
CREATE TABLE `emailai` (
  `numeris` int(6) NOT NULL,
  `vardas_pavarde` varchar(60) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `telefonas` varchar(20) NOT NULL,
  `el_pastas` varchar(40) NOT NULL,
  `pranesimas` text CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emailai`
--

INSERT INTO `emailai` (`numeris`, `vardas_pavarde`, `telefonas`, `el_pastas`, `pranesimas`) VALUES
(1, 'kliento_vardas', '5656', 'kliento_elpastas', 'kliento_zinute'),
(2, 'norius Norauskas', '56565656565', 'norius@email.com', 'Noreciau isigyti sapnu gaudyklÄ™'),
(3, 'norius Norauskas čęėčęė', '56565656565', 'norius@email.com', 'Noreciau isigyti sapnu gaudyklę 23423423ąąęąčęąįęėįėęėį');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(6) NOT NULL,
  `name` varchar(40) NOT NULL,
  `order_num` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `order_num`) VALUES
(0, 'Nieko', 1),
(1, 'pagrindinis1', 1),
(2, 'pagrindinis', 2),
(3, 'parduotuve', 3),
(4, 'Apie mane', 4),
(5, 'Kontaktai', 5);

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
(0, 'col-lg-4', 'bele', 0, 9.99),
(1, 'col-lg-4', 'img/port-thumb/1.jpg', 1, 19.99),
(2, 'col-lg-4', 'img/port-thumb/2.jpg', 1, 18.99),
(3, 'col-lg-4', 'img/port-thumb/3.jpg', 0, 22.99),
(4, 'col-lg-4', 'img/port-thumb/4.jpg', 0, 25.99),
(5, 'col-lg-4', 'img/port-thumb/5.jpg', 0, 30),
(6, 'col-lg-4', 'img/port-thumb/6.jpg', 1, 28.99),
(7, 'col-lg-4', 'img/port-thumb/7.jpg', 1, 29.99),
(8, 'col-lg-4', 'img/port-thumb/8.jpg', 0, 9.99),
(9, 'col-lg-4', 'img/port-thumb/9.jpg', 0, 8.99),
(10, 'col-lg-6', 'img/port-thumb/10.jpg', 1, 30.99),
(11, 'col-lg-6', 'img/port-thumb/11.jpg', 1, 16.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apie_foto_ajax`
--
ALTER TABLE `apie_foto_ajax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emailai`
--
ALTER TABLE `emailai`
  ADD PRIMARY KEY (`numeris`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_prekes`
--
ALTER TABLE `shop_prekes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apie_foto_ajax`
--
ALTER TABLE `apie_foto_ajax`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `emailai`
--
ALTER TABLE `emailai`
  MODIFY `numeris` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `shop_prekes`
--
ALTER TABLE `shop_prekes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
