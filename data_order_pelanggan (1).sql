-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 05:24 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_order_pelanggan`
--

CREATE TABLE `data_order_pelanggan` (
  `No_Ktp` varchar(20) NOT NULL,
  `Nama_Pelanggan` varchar(100) NOT NULL,
  `Alamat_Pelanggan` varchar(50) NOT NULL,
  `No_Telp_Pelanggan` varchar(13) NOT NULL,
  `Tanggal_pinjam` date NOT NULL,
  `Tujuan` varchar(50) NOT NULL,
  `Durasi_Pinjam` varchar(6) NOT NULL,
  `Jenis_Mobil` varchar(20) NOT NULL,
  `Alamat_Penjemputan` varchar(50) NOT NULL,
  `Waktu_Jemput` varchar(10) NOT NULL,
  `Jenis_Pembayaran` varchar(5) NOT NULL,
  `Jumlah_Pembayaran` char(10) NOT NULL,
  `Fasilitas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_order_pelanggan`
--

INSERT INTO `data_order_pelanggan` (`No_Ktp`, `Nama_Pelanggan`, `Alamat_Pelanggan`, `No_Telp_Pelanggan`, `Tanggal_pinjam`, `Tujuan`, `Durasi_Pinjam`, `Jenis_Mobil`, `Alamat_Penjemputan`, `Waktu_Jemput`, `Jenis_Pembayaran`, `Jumlah_Pembayaran`, `Fasilitas`) VALUES
('1245356477', 'Santi', 'Surabaya', '123456789', '0000-00-00', 'Solo', '3 Har', 'Jazz', 'Juanda', '12:02', 'L', '300000', 'Fasilitas'),
('124535649', 'udin', 'bandung', '021345678', '0000-00-00', 'JKT', '6 Hari', 'Honda', 'Gubeng', '00:45', 'P', '500000', 'Fasilitas'),
('32312415', 'Ilvi', 'Jl. Bhaskara', '12134354045', '0000-00-00', 'Jakarta', '5 Hari', 'Mobilio', 'Stasiun', '00:56', 'L', '400000', 'Fasilitas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_order_pelanggan`
--
ALTER TABLE `data_order_pelanggan`
  ADD PRIMARY KEY (`No_Ktp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
