-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2015 at 04:00 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `se`
--

-- --------------------------------------------------------

--
-- Table structure for table `sellpost`
--

CREATE TABLE IF NOT EXISTS `sellpost` (
  `number` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `harga` double NOT NULL,
  `kota` varchar(30) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellpost`
--

INSERT INTO `sellpost` (`number`, `tipe`, `judul`, `tanggal`, `harga`, `kota`, `deskripsi`, `gambar`) VALUES
(1, 'Economy', '200000', 'Review', 200000, '', '', ''),
(2, 'Government', 'Tiket ke gilgit baltistan', 'Complain', 400000, '', '', ''),
(3, 'Pariwisata', 'Tiket ke mount k2', 'Update', 4000000, 'Semarang', 'ini tiket untuk berangkat ke k2 harga murah terjangkau', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `kota` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `hp`, `kota`) VALUES
('Brolin', '202cb962ac59075b964b07152d234b70', 'broiin@gmial.com', '123', 'Sema'),
('Kikiy', '123', 'kikiy@gmail.cm', '0867', 'Semarang'),
('Lambang', '12345', 'lambang@mail.com', '083', 'Makassar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sellpost`
--
ALTER TABLE `sellpost`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sellpost`
--
ALTER TABLE `sellpost`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
