-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 09:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud_tbl`
--

CREATE TABLE `stud_tbl` (
  `sr` int(11) NOT NULL,
  `FName` varchar(20) NOT NULL,
  `LName` varchar(20) NOT NULL,
  `Roll_No` int(10) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `EMail` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `Password` varchar(50) NOT NULL,
  `CPassword` varchar(50) NOT NULL,
  `Branch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_tbl`
--

INSERT INTO `stud_tbl` (`sr`, `FName`, `LName`, `Roll_No`, `Gender`, `EMail`, `DOB`, `Password`, `CPassword`, `Branch`) VALUES
(6, 'Sandesh', 'Shinde', 206066, 'Male', 'sandeshshinde7047@gmail.com', '2004-08-30', '206066', '206066', 'IT'),
(7, 'Amey', 'Jadhav', 206024, 'Male', 'ameyjadhav57@gmail.com', '2004-07-05', '206024', '206024', 'IT'),
(17, 'Vardhak', 'Kore', 206032, 'Male', 'vardhak@gmail.com', '2022-11-22', '1234', '1234', 'IT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud_tbl`
--
ALTER TABLE `stud_tbl`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stud_tbl`
--
ALTER TABLE `stud_tbl`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
