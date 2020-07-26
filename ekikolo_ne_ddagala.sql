-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 11:39 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekikolo_ne_ddagala`
--

-- --------------------------------------------------------

--
-- Table structure for table `herbs`
--

CREATE TABLE `herbs` (
  `id` int(12) NOT NULL,
  `herb` varchar(50) NOT NULL,
  `prescription` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `herbs`
--

INSERT INTO `herbs` (`id`, `herb`, `prescription`) VALUES
(1, 'Musujja', 'fumba ekigaji, no\'mululuuza bwebiwola onywe Kigaji'),
(2, 'Mutwe Oguluma', 'Kwata ensaano ya rosemary osse mumazzi agookya bwe gawola onywe!'),
(3, 'Njoka', 'muta njpka '),
(4, 'Njara', 'lya emmele'),
(5, 'turytu', 'lya emmele'),
(6, 'pressure', 'teeka ensaano ya katunguluccumu mu mazzi a gookya biwole onywe'),
(7, 'ssanyiga:', 'teeka ensaano ya Rosemaer mu mazzi agookya ,bwe gawola onywe oba okunuuna ensaano yennyini'),
(8, '', ''),
(9, 'Ebiwundu', 'Kamula ssere osiige ku kiwundu');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(60) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(6) NOT NULL,
  `nin` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `radioD` varchar(60) NOT NULL,
  `language` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `password`, `nin`, `address`, `mail`, `phone_number`, `radioD`, `language`) VALUES
(1, 'john', 'f', 'f', 'f', 'f', 'f', 'NO', 'English'),
(2, 'john1', 'c', 'f', 'f', 'f', 'f', 'NO', 'English'),
(3, 'john1g', '', 'f', 'f', 'f', 'f', 'NO', 'English'),
(4, '', '', '', '', '', '', '', ''),
(5, 'de', 'd', 'we', 'a', 'a', 'we', 'NO', 'Luganda'),
(6, 'kayondo', '55', 'uui', ';lsl', 'xhdh', 'hshsh', 'YES', 'Luganda'),
(7, 'kayondo', '22', 'jk', 'kampala', 'rr', '2233', 'NO', 'Luganda'),
(8, 'joseph', '22', 'jk', 'masaka', 'ohdsl', '2233', 'YES', 'Kiswahili'),
(9, 'SSENNYONDO', '66', '78987', 'KAMPALA', 's@gmail.com', '077542234', 'NO', 'English'),
(10, 'Johnk', '12', 'uui', 'fefedfe', 'wwe', '99', 'YES', 'English'),
(11, 'kayondo', '09', 'jk', 'as', 'wwe', '45545', 'YES', 'Luganda'),
(12, 'kayondoJohn', '8239', '23k', 'fefedfe', 'wwe', '2233', 'NO', 'Luganda'),
(13, 'BINA', 'ben10', 'sdfghjk234567', 'kampala', 'bina@g.com', '234567890', 'YES', 'Luganda'),
(14, 'mondo', '', 'asdfghjk', 'fghjkl', 'mondo@gmail.com', '123456789', 'NO', 'Luganda'),
(15, 'peter', '123456', 'qwertyuio', 'zxcvbnm', 'asdf@sdf.sdfg', '0987654321', 'NO', 'Luganda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `herbs`
--
ALTER TABLE `herbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `herbs`
--
ALTER TABLE `herbs`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
