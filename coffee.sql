-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 06:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `menu_type` varchar(50) DEFAULT NULL,
  `image_url` varchar(255) NOT NULL,
  `order_count` int(11) DEFAULT 0,
  `description` varchar(255) DEFAULT NULL,
  `available` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `name`, `price`, `menu_type`, `image_url`, `order_count`, `description`, `available`, `created_at`, `updated_at`) VALUES
(1, 'Amogus Nugget', 5000, 'food', 'https://cdn.discordapp.com/attachments/560104983010476032/1241955272810041344/image.png?ex=664c147b&is=664ac2fb&hm=ef17d50620175b3b9fd40b3d4d09d5eafa5686783abc6cf2a968d5550fe96e43&', 69, 'Among Us.', 1, '2024-05-20 03:27:23', '2024-05-20 03:27:23'),
(2, 'Latte /w Optional Coffee', 20000, 'coffee', 'https://cdn.discordapp.com/attachments/560104983010476032/1241958377773469808/image.png?ex=664c175f&is=664ac5df&hm=fff80c43a0c05206eb5a503cca968371e7e36a934bb0564f13bf14c2d1b832ee&', 20, 'Fresh Latte served right out of the pot. Coffee is optional.', 1, '2024-05-20 03:40:45', '2024-05-20 03:41:12'),
(3, 'Chocolate Lava Cake', 271000, 'food', 'https://cdn.discordapp.com/attachments/560104983010476032/1241958463127556136/image.png?ex=664c1774&is=664ac5f4&hm=94ddf921125dd8d8584b4a21e056b2a48f871f372bff3bac403e994f5e467724&', 0, 'A French dessert that consists of a chocolate cake with a liquid chocolate core. It is named for that molten center, and it is also known as mi-cuit au chocolat, chocolat coulant, chocolate lava cake, or simply lava cake.', 1, '2024-05-20 03:45:04', '2024-05-20 03:45:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
