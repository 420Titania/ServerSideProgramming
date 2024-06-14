-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 14, 2024 at 08:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(16) NOT NULL,
  `user` varchar(32) NOT NULL,
  `pass` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user`, `pass`) VALUES
(1, 'admin', '$2y$10$RbLnR5kEYnkIVTkQgplrO.ISFa4Sxyt8YAdYjT55WaqfTXqAc5dDO');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `img` varchar(256) NOT NULL DEFAULT 'https://untirta.ac.id/wp-content/uploads/2023/09/placeholder-16.png',
  `score` int(32) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`name`, `price`, `type`, `img`, `score`) VALUES
('Latte w/ Optional Coffee', '20000', 'coffee', 'https://i.imgur.com/svrSJcO.png', 64),
('Espresso', '22000', 'coffee', 'https://untirta.ac.id/wp-content/uploads/2023/09/placeholder-16.png', 0),
('Chocolate Lava Cake', '271000', 'food', 'https://i.imgur.com/RQmtqeu.png', 32),
('Sweet Tea', '10000', 'noncoffee', 'https://untirta.ac.id/wp-content/uploads/2023/09/placeholder-16.png', 0),
('Amogus Nugget', '5000', 'food', 'https://i.imgur.com/RufhjCz.png', 128),
('Americano', '15000', 'coffee', 'https://untirta.ac.id/wp-content/uploads/2023/09/placeholder-16.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `phone` varchar(13) NOT NULL,
  `pts` varchar(13) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`phone`, `pts`) VALUES
('80012345678', '100'),
('82129485768', '46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
