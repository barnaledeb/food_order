-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 06:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food-order`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_category`
--

CREATE TABLE `table_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_category`
--

INSERT INTO `table_category` (`id`, `name`) VALUES
(3, 'vegiterian'),
(4, 'non veg'),
(5, 'thai'),
(7, 'breakfast'),
(9, 'beverages');

-- --------------------------------------------------------

--
-- Table structure for table `table_food`
--

CREATE TABLE `table_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_food`
--

INSERT INTO `table_food` (`id`, `name`, `quantity`, `price`) VALUES
(3, 'eggroll', '1 piece', '60.00'),
(4, 'chowmin', '1 plate', '80.00'),
(5, 'biryani', '1 plate', '100.00'),
(7, 'chiken', '1 bowl', '70.00'),
(9, 'icecream', '1 bar', '150.00');

-- --------------------------------------------------------

--
-- Table structure for table `table_order`
--

CREATE TABLE `table_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `orders` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_order`
--

INSERT INTO `table_order` (`id`, `user_name`, `orders`, `total_price`, `address`, `payment_type`) VALUES
(1, 'Priya Maity', 'Momo(1 plate)', '60', 'Singur,Hooghly,712409', 'COD'),
(2, 'Barnale Deb', 'ice creame(1 bar)', '150', 'chanditala', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id`, `name`, `email`, `contact`, `address`) VALUES
(2, 'Barnale', 'tulideb912@gmail.com', '98765432', 'Beledanga, chanditala, Hooghly'),
(3, 'priya', 'priya@gmail.com', '23456789', 'singur'),
(4, 'Arpan Adhikary', 'gdh@jyf.dh', '23456789', 'chandital'),
(5, 'soumali', 'soumali@gmail.com', '23456789', 'belur'),
(7, 'amooooon', 'amon@gmailcom', '734726236', 'hoogly'),
(9, 'khushi', 'khushi@gmail.com', '98765432', 'chinsura'),
(10, 'buju', 'buju@gmail.com', '8946832752', 'rishra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_category`
--
ALTER TABLE `table_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_food`
--
ALTER TABLE `table_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_order`
--
ALTER TABLE `table_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_category`
--
ALTER TABLE `table_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `table_food`
--
ALTER TABLE `table_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `table_order`
--
ALTER TABLE `table_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
