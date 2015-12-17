-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2015 at 07:39 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `se`
--

-- --------------------------------------------------------

--
-- Table structure for table `sellpost`
--

CREATE TABLE `sellpost` (
  `number` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `harga` double NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellpost`
--

INSERT INTO `sellpost` (`number`, `tipe`, `judul`, `tanggal`, `harga`, `alamat`, `deskripsi`, `gambar`, `status`) VALUES
(1, 'Economy', 'Bon Jovi', 'Review', 200000, 'Jl Imam Bonjol , Ciputat, Jakarta', 'Tiket Nonton Bon Jovi live in Jakarta', '', 'active'),
(2, 'Government', 'Tiket ke gilgit baltistan', 'Complain', 400000, '', '', '', 'deactived'),
(3, 'Pariwisata', 'Tiket ke mount k2', 'Update', 4000000, 'Semarang', 'ini tiket untuk berangkat ke k2 harga murah terjangkau', '', 'reserved');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `kota` varchar(32) NOT NULL,
  `regdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `hp`, `kota`, `regdate`) VALUES
('Bedjo', '202cb962ac59075b964b07152d234b70', 'bedjo@mal.cm', '0288', 'Surabaya', '2015-12-13 12:33:31'),
('Brolin', '202cb962ac59075b964b07152d234b70', 'broiin@gmial.com', '123', 'Sema', '2015-12-13 12:15:05'),
('Kikiy', '123', 'kikiy@gmail.cm', '0867', 'Semarang', '2015-12-13 12:15:05'),
('Lambang', '12345', 'lambang@mail.com', '083', 'Makassar', '2015-12-13 12:15:05');

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
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
