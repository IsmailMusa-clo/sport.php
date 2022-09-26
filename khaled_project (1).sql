-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2022 at 12:39 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khaled_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `couchs`
--

CREATE TABLE `couchs` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_sport` varchar(50) NOT NULL,
  `c_telgram` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `couchs`
--

INSERT INTO `couchs` (`c_id`, `c_name`, `c_sport`, `c_telgram`, `password`) VALUES
(1, 'mohammed', 'بلياردو', 'https://t.me/KhhKh_bot', 'BL1234'),
(2, 'jamal Tamer', 'تنس', 'https://t.me/OpOpk_bot', 'TN1234'),
(4, 'samer', 'كرة قدم', 'https://t.me/JhJhk_bot', 'fo1234'),
(5, 'feras', 'سباحة', 'https://t.me/Hubohub_bot', 'sw1234'),
(6, 'ramsi', 'كرة السلة', 'https://t.me/Bhahg_bot', 'ba1234');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `sport_name` varchar(50) NOT NULL,
  `sport_telgram` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `sport_name`, `sport_telgram`, `date`) VALUES
(1, 'كرة قدم', 'https://t.me/JhJhk_bot', '2022-09-26 22:13:25'),
(2, 'تنس', 'https://t.me/OpOpk_bot', '2022-09-26 21:35:57'),
(3, 'بلياردو', 'https://t.me/KhhKh_bot', '2022-09-26 21:36:47'),
(4, 'كرة السلة', 'https://t.me/Bhahg_bot', '2022-09-26 21:36:47'),
(5, 'سباحة', 'https://t.me/Hubohub_bot', '2022-09-26 21:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_phone` varchar(10) NOT NULL,
  `sport_type` varchar(50) NOT NULL,
  `user_password` varchar(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_phone`, `sport_type`, `user_password`, `date`) VALUES
(21, 'إسماعيل نوفل', '0592638553', 'كرة قدم', '123456789', '2022-09-26 21:17:45'),
(22, '2046112001', '0595209040', 'بلياردو', '123456789', '2022-09-26 21:18:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `couchs`
--
ALTER TABLE `couchs`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `couchs`
--
ALTER TABLE `couchs`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
