-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2024 at 01:32 PM
-- Server version: 10.6.17-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yantrabg_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `yh_featured`
--

CREATE TABLE `yh_featured` (
  `featured_id` int(11) NOT NULL,
  `category_sid` enum('1','2','3','4','5','6') NOT NULL DEFAULT '1',
  `featured` varchar(256) NOT NULL,
  `total_thumbs` enum('3','6','9','12','15','18','21') NOT NULL DEFAULT '15',
  `active` enum('YES','NO') NOT NULL,
  `date` varchar(32) NOT NULL,
  `details` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `yh_featured`
--

INSERT INTO `yh_featured` (`featured_id`, `category_sid`, `featured`, `total_thumbs`, `active`, `date`, `details`) VALUES
(1, '1', '5248054|5238008|5190038|50001262|5190042|5390064|5227047|50001255|5249034|5422008|5093001|5195053|5175007|5249035|5197021|5194023|5390050|5190041', '18', 'YES', '2024-04-08', 'Sales | .com'),
(2, '2', '5040046|5000366|5000041|5000041', '3', 'YES', '2023-09-15', 'Rentals | .com'),
(3, '3', '5248054|5422008|5190038|5238008|5197020|5190042|5194023|5230017|5249035|5190041|50001262|5195053|5227047|50001255|5249034|5089012|5425037|5390064', '18', 'YES', '2024-04-08', 'Sales | .co.uk'),
(4, '4', '5040046|5000366|5000041|5000041', '3', 'YES', '2023-09-15', 'Rentals | .co.uk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yh_featured`
--
ALTER TABLE `yh_featured`
  ADD PRIMARY KEY (`featured_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `yh_featured`
--
ALTER TABLE `yh_featured`
  MODIFY `featured_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
