-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 06:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` varchar(350) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `description`, `image`, `price`) VALUES
(1, 'Muffins', 'Muf01', 'Small, soft cakes, often with fruit or nuts.', 'muffins.jpeg', 2.50),
(2, 'Cookies', 'COK01','Sweet, baked treats, crisp or chewy.', 'cookies.png', 5.00),
(3, 'Cake', 'CAK01','Small, soft cakes, often with fruit or nuts.', 'cake.jpeg', 10.00),
(4, 'Bread', 'BRD01','Small, soft cakes, often with fruit or nuts.', 'breads.jpeg', 3.50),
(5, 'Brownies', 'BRW01','Small, soft cakes, often with fruit or nuts.', 'brownies.jpeg', 2.00),
(6, 'Croissants', 'CRO01','Small, soft cakes, often with fruit or nuts.', 'croissants.jpeg', 6.00),
(7, 'Eclairs', 'ECR01','Small, soft cakes, often with fruit or nuts.', 'eclairs.jpeg', 5.00),
(8, 'Fruit Tarts and Pies','Small, soft cakes, often with fruit or nuts.', 'FTP01', 'fruit.jpeg', 10.00),
(9, 'Lamingtons', 'LAM01','Small, soft cakes, often with fruit or nuts.', 'lamingtons.jpeg', 4.00),
(10, 'Macaroons', 'MAC01','Small, soft cakes, often with fruit or nuts.', 'macaroons.jpeg', 10.00),
(11, 'Savoury Pies', 'SAP01','Small, soft cakes, often with fruit or nuts.', 'savoury-pies.jpeg', 5.00),
(12, 'Pie roll', 'PRL01','Small, soft cakes, often with fruit or nuts.', 'roll.jpg', 4.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
