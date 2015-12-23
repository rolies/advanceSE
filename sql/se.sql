-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2015 at 07:00 PM
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
  `judul` varchar(160) NOT NULL,
  `tanggal` datetime NOT NULL,
  `harga` double NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` varchar(60) NOT NULL,
  `status` varchar(10) NOT NULL,
  `user` varchar(12) NOT NULL,
  `keterangan` varchar(160) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellpost`
--

INSERT INTO `sellpost` (`number`, `tipe`, `judul`, `tanggal`, `harga`, `alamat`, `deskripsi`, `gambar`, `status`, `user`, `keterangan`) VALUES
(4, 'Perjalanan', 'Bon Jovi live Jakarta', '2015-09-10 00:00:00', 140000, 'Jakarta', 'savnakjsv kha svaivdais vaiscias ciasbcias caisbcias vaisbcias c aisdbcisab', 'ticket2.jpg', 'sold', 'Lambang', ''),
(5, 'Perjalanan', 'Bromo', '2015-09-12 10:30:00', 140000, 'Malang', 'savnakjsv kha svaivdais vaiscias ciasbcias caisbcias vaisbcias c aisdbcisab', 'ticket2.jpg', 'sold', 'brolin', ''),
(6, 'Perjalanan', 'Tiket ke Bromo', '2015-10-04 07:35:00', 200000, 'Semarang', ' sgerb r sf sf s df sdv g', 'ticket2.jpg', 'deactived', 'brolin', 'post ini melanggar peraturan kami'),
(7, 'Pariwisata', 'Tiket ke Dieg', '2016-03-10 05:25:00', 300000, 'Magelang', 'Jual ticket ke dieg magelang harga murah', 'ticket1.jpg', 'active', 'brolin', ''),
(8, 'Perjalanan', 'Tiket ke Bromo', '2015-10-04 07:35:00', 200000, 'Semarang', ' sgerb r sf sf s df sdv g', 'ticket2.jpg', 'active', 'Lambang', 'post ini melanggar peraturan kami');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
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
('Brolin', '827ccb0eea8a706c4c34a16891f84e7b', 'brolin@sellticket.com', '0812345567', 'Semarang', '2015-12-23 22:41:54'),
('Kikiy', '123', 'kikiy@gmail.cm', '0867', 'Semarang', '2015-12-13 12:15:05'),
('Lambang', '827ccb0eea8a706c4c34a16891f84e7b', 'lambang@sellticket.com', '08283457688', 'Makassar', '2015-12-23 23:35:56');

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
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
