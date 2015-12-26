-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2015 at 04:18 AM
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
  `judul` varchar(160) NOT NULL,
  `tanggal` datetime NOT NULL,
  `harga` double NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `gambar` varchar(60) NOT NULL,
  `status` varchar(10) NOT NULL,
  `user` varchar(12) NOT NULL,
  `keterangan` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellpost`
--

INSERT INTO `sellpost` (`number`, `tipe`, `judul`, `tanggal`, `harga`, `alamat`, `deskripsi`, `gambar`, `status`, `user`, `keterangan`) VALUES
(4, 'Perjalanan', 'Bon Jovi live Jakarta', '2015-09-10 00:00:00', 140000, 'Jakarta', 'savnakjsv kha svaivdais vaiscias ciasbcias caisbcias vaisbcias c aisdbcisab', 'ticket2.jpg', 'sold', 'Lambang', ''),
(5, 'Perjalanan', 'Bromo', '2015-09-12 10:30:00', 140000, 'Malang', 'savnakjsv kha svaivdais vaiscias ciasbcias caisbcias vaisbcias c aisdbcisab', 'ticket2.jpg', 'reserved', 'brolin', 'lambang'),
(6, 'Perjalanan', 'ticket bromo', '2015-10-04 07:35:00', 200000, 'Semarang', ' sgerb r sf sf s df sdv g', 'ticket2.jpg', 'deactived', 'brolin', 'post ini melanggar peraturan kami'),
(7, 'Pariwisata', 'Tiket ke Dieg', '2016-03-10 05:25:00', 300000, 'Magelang', 'Jual ticket ke dieg magelang harga murah. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 'ticket1.jpg', 'active', 'brolin', ''),
(8, 'Perjalanan', 'Tiket ke Bromo', '2015-10-04 07:35:00', 200000, 'Semarang', ' sgerb r sf sf s df sdv g', 'ticket2.jpg', 'active', 'Lambang', '');

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
  `regdate` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `hp`, `kota`, `regdate`) VALUES
('Bedjo', '202cb962ac59075b964b07152d234b70', 'bedjo@mal.cm', '0288', 'Surabaya', 2012),
('brolin', '827ccb0eea8a706c4c34a16891f84e7b', 'brolin@sellticket.com', '0812345567', 'Semarang', 2013),
('Kikiy', '123', 'kikiy@gmail.cm', '0867', 'Semarang', 2010),
('Lambang', '827ccb0eea8a706c4c34a16891f84e7b', 'lambang@sellticket.com', '08283457688', 'Makassar', 2015),
('Youngky', '827ccb0eea8a706c4c34a16891f84e7b', 'youngky@ticketsell.com', '082357808721', 'Jakarta', 2015);

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
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
