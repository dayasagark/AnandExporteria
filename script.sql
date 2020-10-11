-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 11, 2020 at 06:17 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anandimpex`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `tile_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `color`, `quantity`, `created_date`, `image_url`, `description`, `tile_description`) VALUES
(1, 'Rice', 'White', '2', '2020-10-11', 'test1', 'ashdkah', NULL),
(2, 'Rice', 'Brown', '2', '2020-10-11', 'test2', NULL, 'Cavendish\r\nBanana\r\nFarm fresh, matured cavendish..'),
(3, 'Fruit', 'Red', '2', '2020-10-11', 'test3', NULL, 'Cavendish\r\nBanana\r\nFarm fresh, matured cavendish..'),
(4, 'Rice', 'White', '2', '2020-10-11', 'test1', 'asgdhaskh', 'Cavendish\r\nBanana\r\nFarm fresh, matured cavendish..'),
(5, 'Fruit', 'Brown', '2', '2020-10-11', 'test2', NULL, NULL),
(6, 'Rice', 'Red', '2', '2020-10-11', 'test3', NULL, NULL),
(7, 'Fruit', 'Red', '2', '2020-10-11', 'test3', NULL, NULL),
(8, 'Rice', 'Red', '2', '2020-10-11', 'test3', NULL, NULL),
(9, 'Fruit', 'Red', '2', '2020-10-11', 'test3', NULL, NULL),
(10, 'Rice', 'Red', '2', '2020-10-11', 'test3', NULL, 'Cavendish\r\nBanana\r\nFarm fresh, matured cavendish..'),
(11, 'Fruit', 'Red', '2', '2020-10-11', 'test3', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
