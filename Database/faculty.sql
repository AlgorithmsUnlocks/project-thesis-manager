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
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(100) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `dean_name` varchar(200) NOT NULL,
  `dean_title` varchar(100) NOT NULL,
  `dean_tel` varchar(100) NOT NULL,
  `dean_cell` varchar(100) NOT NULL,
  `dean_email` varchar(50) NOT NULL,
  `dean_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `faculty_name`, `dean_name`, `dean_title`, `dean_tel`, `dean_cell`, `dean_email`, `dean_photo`) VALUES
(1, 'Faculty of Modern Science ', 'Prof. Syeda Zarina Hossain                                    ', 'Dean, Faculty of Modern Science                                    ', '01313084499                                  ', '+88-01764543535                                    ', 'dean_ms@lus.ac.bd', 'upload/syeda-zarin-hossain-246x300.jpg'),
(2, 'Faculty of Business Administration', 'Prof. Dr. Bashir Ahmed Bhuiyan', 'Dean, Faculty of Business Administration', '+88-01871333355', '+88-01871333355', 'dean_bua@lus.ac.bd', 'upload/Bashir-Ahmed-Bhuiyan-241x300.jpg'),
(3, 'Faculty of Arts and Modern Language', 'Dr. Md. Rezaul Karim', 'Dean (In-Charge), Faculty of Arts and Modern Language', '+88-01711467396', '+88-01711467396', 'dean_aml@lus.ac.bd', 'upload/Reza.26.02.21-4-266x300.jpg'),
(4, 'Faculty of Social Science   ', 'Prof. Dr. Maimul Ahsan Khan   ', 'Dean, Faculty of Social Science   ', '01313084499   ', '01711436267   ', 'dean_ss@lus.ac.bd', 'upload/Md.-Maimul-Ahsan-Khan-Dean-242x300.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
