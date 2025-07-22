-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 25, 2022 at 04:56 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `User_id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `Item_quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_item`
--

INSERT INTO `cart_item` (`User_id`, `Product_id`, `Item_quantity`) VALUES
(2, 1, 1),
(2, 3, 1),
(2, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `PaymentType` varchar(255) NOT NULL,
  `Status` enum('Pending','Completed','Incomplete','Returned') NOT NULL,
  `User_id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `ShippingAddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `PaymentType`, `Status`, `User_id`, `Date`, `ShippingAddress`) VALUES
(13, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(14, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(15, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(16, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(17, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(18, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(19, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(20, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(21, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(22, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(23, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(24, '', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(25, '', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(26, '', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(27, '', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(28, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(29, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(30, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(31, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(32, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(33, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(34, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(35, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(36, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(37, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(38, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(39, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(40, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(41, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(42, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(43, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(44, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(45, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(46, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(47, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(48, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(49, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(50, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(51, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(52, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(53, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(54, 'cash', 'Completed', 2, '2022-11-23', 'khalifa city, abu dhabi'),
(55, 'cash', 'Completed', 2, '2022-11-23', 'alkd'),
(56, 'cash', 'Completed', 2, '2022-11-23', 'alkd'),
(57, 'cash', 'Completed', 2, '2022-11-23', 'alkd'),
(58, 'cash', 'Completed', 2, '2022-11-23', 'alkd'),
(59, 'cash', 'Completed', 2, '2022-11-23', 'alkd'),
(60, 'cash', 'Completed', 2, '2022-11-23', 'alkd'),
(61, 'cash', 'Completed', 2, '2022-11-23', 'alkd');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_id` int(11) NOT NULL,
  `Brand` varchar(255) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Image_url` varchar(255) NOT NULL,
  `Category` enum('Men','Women','Kids') DEFAULT NULL,
  `Rating` int(11) NOT NULL,
  `Discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_id`, `Brand`, `Description`, `Price`, `Quantity`, `Image_url`, `Category`, `Rating`, `Discount`) VALUES
(1, 'Nike', 'Men\'s Kyrie Infinity Basketball Shoe', 460, 5, 'images/product1.png', 'Men', 3, 5),
(2, 'Nike', 'Men\'s Jordan', 500, 7, 'images/product2.png', 'Men', 4, 10),
(3, 'Nike', 'Unisex Air Force 1', 660, 5, 'images/product3.png', 'Women', 5, 0),
(4, 'Addidas', 'Tennis shoe ', 360, 14, 'images/product4.png', 'Women', 1, 0),
(5, 'Puma', 'Casual Sneakers', 260, 14, 'images/product5.png', 'Kids', 2, 15),
(6, 'Mango', 'Men\'s black boots', 160, 2, 'images/product6.png', 'Men', 1, 0),
(7, 'Vance', 'black boot collection', 760, 4, 'images/product7.png', 'Women', 3, 0),
(8, 'Nike', 'Men\'s zoom basketball shoes', 860, 3, 'images/product8.png', 'Men', 4, 50),
(9, 'Nike', 'Men\'s Kyrie basketball shoes', 1060, 17, 'images/product9.png', 'Kids', 5, 70),
(10, 'Nike', 'Men\'s Kyrie basketball shoes', 560, 13, 'images/main-nike-pic.png', 'Men', 0, 0),
(12, 'Nike', 'exotic nike shoes', 5000, 10, './images/product10.png', 'Men', 1, 17),
(13, 'Addidas', 'Kids Addidas sneakers', 98, 13, 'images/product11.png', 'Kids', 2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `ID` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Order_id` int(11) NOT NULL,
  `Item_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `ID` int(11) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Gender` enum('M','F') DEFAULT NULL,
  `Address` varchar(255) NOT NULL,
  `PhoneNumber` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`ID`, `LastName`, `FirstName`, `Email`, `Password`, `DateOfBirth`, `Gender`, `Address`, `PhoneNumber`) VALUES
(2, 'Smith', 'John', 'john@gmail.com', 'password', '2000-07-11', 'M', 'khalifa city, abu dhabi', '8676'),
(6, 'Abdulkadir', 'salman', 'salman23@gmail.com', '1234', '2022-11-01', 'M', 'theyab bin eissa', '0');

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

CREATE TABLE `wish_list` (
  `User_id` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wish_list`
--

INSERT INTO `wish_list` (`User_id`, `Product_id`) VALUES
(2, 2),
(2, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`User_id`,`Product_id`),
  ADD KEY `Product_id` (`Product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Order_id` (`Order_id`),
  ADD KEY `Product_id` (`Product_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`User_id`,`Product_id`),
  ADD KEY `Product_id` (`Product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD CONSTRAINT `cart_item_ibfk_2` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`),
  ADD CONSTRAINT `cart_item_ibfk_3` FOREIGN KEY (`User_id`) REFERENCES `Users` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_4` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_ibfk_5` FOREIGN KEY (`User_id`) REFERENCES `users` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD CONSTRAINT `wish_list_ibfk_2` FOREIGN KEY (`Product_id`) REFERENCES `product` (`Product_id`),
  ADD CONSTRAINT `wish_list_ibfk_3` FOREIGN KEY (`User_id`) REFERENCES `Users` (`ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
