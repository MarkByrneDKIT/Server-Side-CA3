-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 03:59 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computer_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(1, 'Work Computers'),
(2, 'Gaming Computers'),
(3, 'All in One Computers'),
(4, 'Raspberry Pis');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

DROP TABLE IF EXISTS `records`;
CREATE TABLE `records` (
  `recordID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `CPU` varchar(20) NOT NULL,
  `date` date DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`recordID`, `categoryID`, `code`, `name`, `CPU`, `date`, `price`, `image`) VALUES
(10, 2, '12341234', 'Budget Gaming Pc', 'Intel Core I3', '2019-05-14', '600.00', 'gaming_pc1.jpg'),
(11, 2, '344635', 'Mid-Tier Gaming Pc', 'Intel Core I5', '2018-07-10', '850.00', 'gaming_pc2.jpg'),
(12, 2, '876456', 'High-Tier Gaming Pc', 'Intel Core I7', '2020-01-08', '1100.00', 'gaming_pc3.jpg'),
(13, 2, '873653673', 'Extreme-Tier Gaming Pc', 'Intel Core I9', '2018-03-14', '2000.00', 'gaming_pc4.jpg'),
(14, 1, '45638754', 'Basic Work Pc', 'Amd Ryzen 3', '2017-02-10', '300.00', 'work_pc1.jpg'),
(15, 1, '1235436', 'Mid-Tier Work Pc ', 'Amd Ryzen 5', '2019-09-09', '500.00', 'work_pc2.jpg'),
(16, 1, '4678332', 'High-Tier Work Pc', 'Amd Ryzen 7', '2019-06-10', '800.00', 'work_pc3.jpg'),
(17, 1, '21378652', 'Extreme-Tier Work Pc', 'Amd Threadripper', '2018-11-21', '1100.00', 'work_pc4.jpg'),
(18, 3, '432754', 'Budget-Tier Aio Pc', 'Intel Pentium', '2020-11-18', '350.00', 'aio_1.jpg'),
(19, 3, '31246543', 'Mid-Tier Aio Pc', 'Intel Core I3', '2020-01-12', '550.00', 'aio_2.jpg'),
(20, 3, '342867589', 'High-tier Aio Pc', 'Intel Core I5', '2017-07-05', '700.00', 'aio_3.jpg'),
(21, 3, '12365421', 'Extreme-tier Aio Pc', 'Intel Core I7', '2021-03-03', '1400.00', 'aio_4.jpg'),
(22, 4, '43265421', 'Budegt Raspberry Pi ', 'Arm Cortex-A72', '2020-07-10', '80.00', 'pi1.jpg'),
(23, 4, '43265845', 'Mid-Tier Raspberry Pi', 'Arm Cortex-B64', '2019-06-21', '120.00', 'pi2.jpg'),
(24, 4, '43265832', 'High-Tier Raspberry Pi', 'Arm Cortex-C45', '2018-08-20', '200.00', 'pi3.jpg'),
(25, 4, '57868321', 'Extreme-Tier Raspberry Pi', 'Arm Cortex-X', '2019-05-27', '300.00', 'pi4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`recordID`),
  ADD UNIQUE KEY `productCode` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `recordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
