-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 12:09 AM
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
-- Database: `project-thesis-manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `user-register`
--

CREATE TABLE `user-register` (
  `id` int(200) NOT NULL,
  `user-name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` text NOT NULL,
  `batch` int(25) NOT NULL,
  `section` varchar(25) NOT NULL,
  `session` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `profile-picture` varchar(200) NOT NULL,
  `id-card` varchar(200) NOT NULL,
  `password` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user-register`
--

INSERT INTO `user-register` (`id`, `user-name`, `email`, `phone`, `batch`, `section`, `session`, `semester`, `profile-picture`, `id-card`, `password`) VALUES
(3, 'Ruman Ahmed', 'cse_1912020146@lus.ac.bd', '', 50, '10 D', 'spring', 'spring', 'dev.ruman.png', '3dea934b-0b9c-4f58-9e4a-e74190028df5.jpeg', 123456),
(5, '', '', '', 0, '', '', '', '', '', 0),
(6, '', '', '', 0, '', '', '', '', '', 0),
(7, 'ABC', 'abc@gmail.com', '01708684896', 50, '10 D', 'spring', 'summer', 'dev.ruman.png', '3dea934b-0b9c-4f58-9e4a-e74190028df5.jpeg', 123456),
(8, 'DFD', 'dfd@gmail.com', '01962641044', 155, '451', 'spring', 'spring', 'ruman.webp', '3dea934b-0b9c-4f58-9e4a-e74190028df5.jpeg', 141414),
(9, 'adADad', 'dfd@gmail.com', '01708684896', 50, '10 D', 'spring', 'fall', '3dea934b-0b9c-4f58-9e4a-e74190028df5.jpeg', '3dea934b-0b9c-4f58-9e4a-e74190028df5.jpeg', 141414),
(10, 'asfafasfafee', 'dfd@gmail.com', '01708684896', 50, '10 D', 'spring', 'spring', '3dea934b-0b9c-4f58-9e4a-e74190028df5.jpeg', '3dea934b-0b9c-4f58-9e4a-e74190028df5.jpeg', 141414);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user-register`
--
ALTER TABLE `user-register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user-register`
--
ALTER TABLE `user-register`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
