-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2017 at 12:00 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_digistore`
--

-- --------------------------------------------------------

--
-- Table structure for table `meja_store`
--

CREATE TABLE `meja_store` (
  `id_meja` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_store` int(11) NOT NULL,
  `qr_code` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meja_store`
--

INSERT INTO `meja_store` (`id_meja`, `id_user`, `id_store`, `qr_code`) VALUES
(1, 4, 1, 'meja1/sawunggaling/1'),
(2, 4, 1, 'meja2/sawunggaling/1'),
(3, 4, 1, 'meja3/sawunggaling/1'),
(4, 4, 1, 'meja4/sawunggaling/1'),
(5, 4, 1, 'meja5/sawunggaling/1'),
(6, 4, 1, 'meja6/sawunggaling/1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meja_store`
--
ALTER TABLE `meja_store`
  ADD PRIMARY KEY (`id_meja`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_store` (`id_store`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meja_store`
--
ALTER TABLE `meja_store`
  MODIFY `id_meja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
