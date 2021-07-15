-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 10:21 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `master_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(10) UNSIGNED NOT NULL,
  `ad_name` varchar(100) NOT NULL,
  `ad_username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`, `ad_username`, `password`) VALUES
(4, 'navod', 'navod', 'it20654658'),
(5, 'dilshan', 'dilshan', 'it20651824'),
(6, 'paramee', 'paramee', 'it20660284');

-- --------------------------------------------------------

--
-- Table structure for table `available_cities`
--

CREATE TABLE `available_cities` (
  `id` int(20) NOT NULL,
  `cities` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `available_cities`
--

INSERT INTO `available_cities` (`id`, `cities`) VALUES
(1, 'Malabe');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `con_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `user_name`, `email`, `contact_number`, `address`, `password`, `con_password`) VALUES
(1, 'Dilshan', 'Sudharaka', 'dil', 'dil@gmail.com', 757713501, 'malabe', '123', '123'),
(13, 'Kavindu', 'Chethani', 'Chethani', 'che@gmail.com', 776586746, 'Pinnaduwa', '456', '456'),
(14, 'Dilshan', 'Jayawardhana', 'dilshan', 'dil@gmail.com', 757713501, '369, kasbawa, baththaramulla', '789', '789'),
(15, 'oshan', 'pasindu', 'pasindu', 'pasindu@ggmail.com', 1235, 'malabe', '456', '456');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_member`
--

CREATE TABLE `delivery_member` (
  `dm_id` int(11) NOT NULL,
  `dm_name` varchar(100) NOT NULL,
  `dm_address` varchar(100) NOT NULL,
  `dm_NIC` varchar(20) NOT NULL,
  `dm_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_member`
--

INSERT INTO `delivery_member` (`dm_id`, `dm_name`, `dm_address`, `dm_NIC`, `dm_number`) VALUES
(1, 'W.P.K Karunadasa', '789, thalawathugoda, Malabe', '590370312V', 776586746),
(2, 'KADS Jayawardhana', '397, thalangama, Malabe', '985678941V', 757713501);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `restaurant` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`f_id`, `f_name`, `restaurant`, `price`) VALUES
(1, 'Rice and Curry', 'The Food Factory', 500),
(2, 'Kottu', 'Mihiri Restaurant', 400),
(3, 'Fried Rice', 'Mihiri Restaurant', 400),
(4, 'Sandwiches', 'Restaurant FoodStuff', 600),
(5, 'Pizza', 'Mihiri Restaurant', 800),
(6, 'Burgers', 'Mihiri Restaurant', 400);

-- --------------------------------------------------------

--
-- Table structure for table `food_item`
--

CREATE TABLE `food_item` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `restaurant_name` varchar(50) NOT NULL,
  `food_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_item`
--

INSERT INTO `food_item` (`f_id`, `f_name`, `restaurant_name`, `food_price`) VALUES
(1, 'Rice and Curry', 'MIHIRI Restaurant', 400),
(2, 'Rice and Curry', 'Restaurant Homey meal', 500),
(3, 'Koththu', 'Restaurant Homey meal', 400);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `restaurant_name` varchar(50) NOT NULL,
  `food_price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `note` varchar(250) NOT NULL,
  `delivery_charge` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `food_name`, `restaurant_name`, `food_price`, `quantity`, `note`, `delivery_charge`) VALUES
(1, 'Rice and Curry', 'Restaurant FoodStuff', 600, 4, '', 0),
(2, 'Pizza', 'Restaurant FoodStuff', 1200, 2, '', 0),
(3, 'Burgers', 'Restaurant FoodStuff', 600, 5, '', 0),
(4, 'Sandwiches', 'Restaurant FoodStuff', 600, 6, '', 0),
(5, 'Kottu', 'The Food Factory', 500, 5, '', 0),
(6, 'Burgers', 'Restaurant FoodStuff', 600, 8, '', 0),
(7, 'Pizza', 'Mihiri Restaurant', 800, 6, '', 0),
(8, 'Burgers', 'Restaurant FoodStuff', 600, 9, '', 0),
(9, 'Rice and Curry', 'Restaurant FoodStuff', 600, 4, '', 0),
(10, 'Burgers', 'Mihiri Restaurant', 400, 1, '', 0),
(11, 'Fried Rice', 'The Food Factory', 500, 2, '', 0),
(12, 'Fried Rice', 'Mihiri Restaurant', 400, 5, '', 0),
(13, 'Kottu', 'Mihiri Restaurant', 400, 2, '', 0),
(14, 'Kottu', 'Mihiri Restaurant', 400, 2, '', 0),
(15, 'Rice and Curry', 'The Food Factory', 500, 5, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `res_id` int(11) NOT NULL,
  `res_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `con_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`res_id`, `res_name`, `address`, `con_number`) VALUES
(1, 'Mihiri Restaurant', '569, thalawathugoda, malabe', 757713501),
(2, 'The Food Factory', '789, melroad, rajigiriya', 776586746),
(3, 'Restaurant Food Stuff', '258, Thalangama, Koasswatta', 779470722),
(4, 'Restaurant Homey Meals', '789, Kahanthota, Kaduwela', 768987653);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `available_cities`
--
ALTER TABLE `available_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `first_name` (`first_name`),
  ADD KEY `last_name` (`last_name`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `email` (`email`),
  ADD KEY `contact_number` (`contact_number`),
  ADD KEY `address` (`address`);

--
-- Indexes for table `delivery_member`
--
ALTER TABLE `delivery_member`
  ADD PRIMARY KEY (`dm_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `food_item`
--
ALTER TABLE `food_item`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`res_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `available_cities`
--
ALTER TABLE `available_cities`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `delivery_member`
--
ALTER TABLE `delivery_member`
  MODIFY `dm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food_item`
--
ALTER TABLE `food_item`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
