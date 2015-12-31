-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2015 at 01:44 PM
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
(4, 'Perjalanan', 'Bon Jovi live Jakarta', '2015-09-10 00:00:00', 140000, 'Jakarta', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.', 'ticket3.jpg', 'sold', 'Lambang', ''),
(5, 'Perjalanan', 'Bromo', '2015-09-12 10:30:00', 140000, 'Malang', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.', 'ticket2.jpg', 'reserved', 'brolin', 'lambang'),
(6, 'Pariwisata', 'ticket bromo', '2015-10-04 07:35:00', 200000, 'Semarang', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.', 'ticket1.jpg', 'deactived', 'brolin', 'post ini melanggar peraturan kami'),
(7, 'Perjalanan', 'Tiket ke Dieg', '2016-03-10 05:25:00', 300000, 'Jakarte', 'Jual ticket ke dieg magelang harga murah. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.', 'ticket4.jpg', 'reserved', 'brolin', 'lambang'),
(8, 'Perjalanan', 'Tiket ke Bromo', '2016-05-04 07:35:00', 200000, 'Semarang', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.', 'ticket2.jpg', 'active', 'Lambang', ''),
(9, 'Perjalanan', 'Tiket ke Dufan Murah', '2016-02-04 07:35:00', 200000, 'Semarang', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.', 'ticket2.jpg', 'sold', 'Brolin', ''),
(10, 'Pariwisata', 'Tiket Pariwisata ke Dieg', '2016-01-15 06:07:13', 320000, 'Magelang', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem', 'ticket3.jpg', 'sold', 'lambang', 'brolin');

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
  `regdate` year(4) NOT NULL,
  `gambar` varchar(20) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `hp`, `kota`, `regdate`, `gambar`) VALUES
('brolin', '827ccb0eea8a706c4c34a16891f84e7b', 'brolin@sellticket.com', '084679987493', 'Bandung', 2013, 'user1.jpg'),
('Kikiy', '123', 'kikiy@gmail.cm', '086787309812', 'Semarang', 2010, ''),
('lambang', '827ccb0eea8a706c4c34a16891f84e7b', 'lambang@sellticket.com', '083245672135', 'Semarang', 2015, 'user.jpg'),
('Rolies', '827ccb0eea8a706c4c34a16891f84e7b', 'rolies@ticketsell.com', '082384625996', 'Pekanbaru', 2015, 'default.jpg'),
('Youngky', '827ccb0eea8a706c4c34a16891f84e7b', 'youngky@ticketsell.com', '082357808721', 'Jakarta', 2015, '');

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
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
