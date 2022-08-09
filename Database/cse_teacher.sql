-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 12:08 AM
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
-- Table structure for table `cse_teacher`
--

CREATE TABLE `cse_teacher` (
  `id` int(100) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `teacher_title` varchar(100) NOT NULL,
  `teacher_eamil` varchar(50) NOT NULL,
  `teacher_cell` varchar(100) NOT NULL,
  `education_bg` varchar(200) NOT NULL,
  `conduct_course` varchar(200) NOT NULL,
  `teacher_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse_teacher`
--

INSERT INTO `cse_teacher` (`id`, `teacher_name`, `teacher_title`, `teacher_eamil`, `teacher_cell`, `education_bg`, `conduct_course`, `teacher_photo`) VALUES
(1, 'Md. Ebrahim Hossain', 'Assistant Professor', 'ebrahim.cse@lus.ac.bd', '01733688612', '', '', 'upload/profile2.png'),
(2, 'Md. Ebrahim Hossain', 'Assistant Professor', 'ebrahim.cse@lus.ac.bd', '01733688612', 'M.Sc. in Information Technology, Jahangirnagar University, Savar, Dhaka.\r\nB.Sc. in Information Technology, Jahangirnagar University, Savar, Dhaka.', 'Computer Network \r\nData Communication \r\nDigital Signal Processing \r\nComputer Security and Cryptography\r\nDistribute System \r\nSystem Analysis and Design \r\nComputer Graphics and Image Processing \r\nOperat', 'upload/profile.png'),
(3, 'Md. Ebrahim Hossain', 'Assistant Professor', 'ebrahim.cse@lus.ac.bd', '01733688612', '', '', 'upload/profile.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cse_teacher`
--
ALTER TABLE `cse_teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cse_teacher`
--
ALTER TABLE `cse_teacher`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
