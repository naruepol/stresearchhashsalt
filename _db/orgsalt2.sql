-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 04:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orgsalt`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `user_id` varchar(4) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `encrypt_passwd` varchar(255) NOT NULL,
  `security_type` char(2) NOT NULL,
  `user_salt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`user_id`, `user_name`, `user_email`, `encrypt_passwd`, `security_type`, `user_salt`) VALUES
('1111', 'user1', 'user1@scienceresearch.com', '$2y$10$qQZUcmaLxfrwI8EILmUGA.o443th1pPRlPaHyvPYTe4yPVqppDg5K', '1', '79623406'),
('2222', 'user2', 'user2@scienceresearch.com', '$2y$10$5H2B.x3HS1QYcihMrZVZJON6OYGsn0FtjFauZYCqHgmvyLrJ68v.W', '1', '0735a4f2'),
('3333', 'user3', 'user3@scienceresearch.com', '$2y$10$45d6x1uJTWgazqOgvBHlp.HXz0B5ZeQ1BEXnizjmq5Bs666eIkxUy', '1', '3fd529a3'),
('4444', 'user4', 'user4@scienceresearch.com', 'c6bcdbca094a9329db181e446c147a2a', '2', 'a29c7277'),
('5555', 'user5', 'user5@scienceresearch.com', '$2y$10$7Sj98KSBME55BkSnUjATIOA/oS6bX9m0wnTn.FClchFnniUHwFkWy', '1', '0075957f'),
('6666', 'user6', 'user6@scienceresearch.com', '$2y$10$/q1HFWEZNw.qynzsYnhuV.8ytTIZwT5.E.Z8r1Y3LjP48LtY1Gji6', '1', '10e1b1de');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
