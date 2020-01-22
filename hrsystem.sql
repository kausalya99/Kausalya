-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 09:14 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `time_in`, `time_out`) VALUES
(19, '09:00:00', '18:00:00'),
(20, '10:00:00', '19:00:00'),
(21, '10:00:00', '22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `login_date` date NOT NULL,
  `login_time` time NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `logout` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `position` varchar(100) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `first_name`, `last_name`, `username`, `password`, `contact`, `email`, `address`, `position`, `role`) VALUES
(1, 'kausalya', 'saundarajan', 'kausalya', '1234', 104617092, 'kslyrn99@hotmail.com', 'Legaxus', 'intern', 0),
(2, 'admin', '1', 'admin1', '0000', 123457, 'admin1@gmail.com', 'Legaxus', 'Owner', 1),
(3, 'emp', '2', 'emp2', '999', 1942748, 'emp2@gmail.com', 'Legaxus', 'Employee', 3),
(4, 'emp', '3', 'emp3', '888', 878913, 'emp3@gmail.com', 'Legaxus', 'Employee', 3),
(5, 'MR', 'x', 'X', '0123', 3282791, 'x1@gmail.com', 'Legaxus', 'Manager', 2),
(6, 'emp', '4', 'emp4', '9999', 12831296, 'emp4@gmail.com', 'Legaxus', 'Employee', 3),
(7, 'emp', '5', 'emp5', '123', 1493487465, 'emp5@gmail.com', 'Legaxus', 'Employee', 3),
(12, 'emp', '10', 'emp10', 'emp10', 2147483647, 'emp10@gmail.com', 'Legaxus', 'Employee', 3),
(13, 'emp', '11', 'emp11', 'emp11', 1493487444, 'emp11@gmail.com', 'Legaxus', 'Employee', 3),
(15, 'intern', '2', 'intern2', 'intern2', 2147483647, 'intern2@gmail.com', 'Legaxus', 'Intern', 0),
(16, 'intern', '3', 'intern3', 'intern3', 123876544, 'intern3@gmail.com', 'Legaxus', 'Intern', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `id` int(11) NOT NULL,
  `login_date` date NOT NULL,
  `login_time` time NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `logout_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`id`, `login_date`, `login_time`, `user_name`, `logout_time`) VALUES
(31, '2020-01-17', '12:25:00', 'admin1', '00:00:00'),
(33, '2020-01-17', '12:27:00', 'kausalya', '04:26:00'),
(36, '2020-01-17', '02:45:00', 'admin1', '00:00:00'),
(37, '2020-01-17', '03:17:00', 'kausalya', '04:26:00'),
(38, '2020-01-17', '04:45:00', 'emp2', '00:00:00'),
(39, '2020-01-17', '04:52:00', 'admin1', '00:00:00'),
(40, '2020-01-17', '05:18:00', 'admin1', '00:00:00'),
(41, '2020-01-17', '05:18:00', 'admin1', '00:00:00'),
(42, '2020-01-20', '11:06:00', 'admin1', '00:00:00'),
(43, '0000-00-00', '11:11:00', 'admin1', '00:00:00'),
(44, '2020-01-20', '11:48:00', 'admin1', '00:00:00'),
(46, '2020-01-20', '11:50:00', 'admin1', '00:00:00'),
(48, '2020-01-20', '11:51:00', 'admin1', '00:00:00'),
(49, '2020-01-20', '11:57:00', 'admin1', '00:00:00'),
(50, '2020-01-20', '12:18:00', 'admin1', '00:00:00'),
(51, '2020-01-20', '12:40:00', 'admin1', '00:00:00'),
(52, '2020-01-20', '12:49:00', 'admin1', '00:00:00'),
(53, '2020-01-20', '01:07:00', 'admin1', '00:00:00'),
(54, '2020-01-20', '01:08:00', 'admin1', '00:00:00'),
(55, '2020-01-20', '02:04:00', 'admin1', '00:00:00'),
(56, '2020-01-20', '02:15:00', 'admin1', '00:00:00'),
(67, '2020-01-20', '05:37:00', 'admin1', '00:00:00'),
(68, '2020-01-21', '10:56:00', 'admin1', '00:00:00'),
(69, '2020-01-21', '11:42:00', 'admin1', '00:00:00'),
(70, '2020-01-21', '11:46:00', 'kausalya', '04:26:00'),
(71, '2020-01-21', '11:52:00', 'admin1', '00:00:00'),
(72, '2020-01-21', '11:54:00', 'admin1', '00:00:00'),
(73, '2020-01-21', '12:19:00', 'admin1', '00:00:00'),
(74, '2020-01-21', '12:30:00', 'admin1', '00:00:00'),
(75, '2020-01-21', '12:31:00', 'admin1', '00:00:00'),
(76, '2020-01-21', '12:34:00', 'admin1', '00:00:00'),
(77, '2020-01-21', '12:43:00', 'admin1', '00:00:00'),
(85, '0000-00-00', '00:00:00', '', '05:59:00'),
(86, '0000-00-00', '00:00:00', '', '05:59:00'),
(87, '0000-00-00', '00:00:00', '', '05:59:00'),
(88, '0000-00-00', '00:00:00', '', '05:59:00'),
(94, '2020-01-21', '04:26:00', 'admin1', '00:00:00'),
(95, '2020-01-21', '06:16:00', 'admin1', '00:00:00'),
(96, '2020-01-21', '06:28:00', 'admin1', '00:00:00'),
(97, '2020-01-21', '06:28:00', 'admin1', '06:28:00'),
(98, '2020-01-22', '10:38:00', 'admin1', '11:13:48'),
(99, '2020-01-22', '11:17:00', 'admin1', '00:00:00'),
(100, '2020-01-22', '01:40:00', 'admin1', '00:00:00'),
(101, '2020-01-22', '02:08:00', 'admin1', '02:09:00'),
(102, '2020-01-22', '02:27:00', 'admin1', '00:00:00'),
(103, '2020-01-22', '02:27:00', 'admin1', '00:00:00'),
(104, '2020-01-22', '02:28:00', 'admin1', '00:00:00'),
(105, '2020-01-22', '02:28:00', 'admin1', '00:00:00'),
(106, '2020-01-22', '02:30:00', 'admin1', '00:00:00'),
(107, '2020-01-22', '02:31:00', 'admin1', '00:00:00'),
(108, '2020-01-22', '02:35:00', 'admin1', '00:00:00'),
(109, '2020-01-22', '03:25:00', 'admin1', '00:00:00'),
(110, '2020-01-22', '03:45:00', 'admin1', '00:00:00'),
(111, '2020-01-22', '03:49:00', 'admin1', '00:00:00'),
(112, '2020-01-22', '03:50:00', 'admin1', '00:00:00'),
(113, '2020-01-22', '03:51:00', 'admin1', '00:00:00'),
(114, '2020-01-22', '03:55:00', 'admin1', '00:00:00'),
(115, '2020-01-22', '03:57:00', 'admin1', '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
