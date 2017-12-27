-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2017 at 04:38 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fast`
--

-- --------------------------------------------------------

--
-- Table structure for table `sistem`
--

CREATE TABLE `sistem` (
  `No` int(11) NOT NULL,
  `resi` varchar(13) NOT NULL,
  `service` enum('Reguler','Express') NOT NULL,
  `tujuan` varchar(25) NOT NULL,
  `consignee` varchar(25) NOT NULL,
  `date_receiver` date NOT NULL,
  `receiver` varchar(25) NOT NULL,
  `status` enum('OnProses','Sucsess') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sistem`
--

INSERT INTO `sistem` (`No`, `resi`, `service`, `tujuan`, `consignee`, `date_receiver`, `receiver`, `status`) VALUES
(1, '12NF111ALIF', 'Express', 'Bogor', 'Muhammad Khalifah', '2020-04-17', 'AliF', 'Sucsess'),
(2, '12312312312', 'Express', 'Jakarta', 'msmsmsm', '2024-03-28', 'sass', 'Sucsess'),
(3, '99009900990', 'Express', 'Medan', 'Raka Prasetyo', '2017-12-10', 'Diah Rahmadhani', 'OnProses'),
(4, '12121212121', 'Express', 'Jakarta', 'Diah jelek', '2030-06-14', 'assyifa', 'Sucsess'),
(5, '21334354545', 'Reguler', 'Bekasi', 'sas', '2028-09-16', 'asas', 'OnProses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sistem`
--
ALTER TABLE `sistem`
  ADD PRIMARY KEY (`No`),
  ADD UNIQUE KEY `resi` (`resi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sistem`
--
ALTER TABLE `sistem`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
