-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 01:07 PM
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
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username_admin` varchar(10) NOT NULL,
  `email_admin` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_mobil`
--

CREATE TABLE `admin_mobil` (
  `mobil_no` int(10) NOT NULL,
  `nama_mobil` varchar(50) NOT NULL,
  `harga_mobil` int(10) NOT NULL,
  `plat_nomor` int(7) NOT NULL,
  `penumpang` int(6) NOT NULL,
  `gambar_mobil` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('124535649', 'udin', 'bandung', '021345678', '0000-00-00', 'JKT', '6 Hari', 'Honda', 'Gubeng', '00:45', 'P', '500000', 'Fasilitas');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` varchar(10) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali_mobil` date NOT NULL,
  `jumlah_bayar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `jenis_mobil` varchar(10) NOT NULL,
  `nopol` int(10) NOT NULL,
  `merk_mobil` varchar(10) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `tahun` int(4) NOT NULL,
  `kode_mobil` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pgw` char(10) NOT NULL,
  `nama_pgw` varchar(50) NOT NULL,
  `telp_pgw` varchar(15) NOT NULL,
  `alamat_pgw` varchar(100) NOT NULL,
  `sandi_pgw` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` char(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat_pelanggann` varchar(75) NOT NULL,
  `sandi` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjadwalan`
--

CREATE TABLE `penjadwalan` (
  `tujuan` varchar(15) NOT NULL,
  `alamat_penjemputan` varchar(100) NOT NULL,
  `lama_penjemputan` varchar(10) NOT NULL,
  `kodemobil` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjemputan`
--

CREATE TABLE `penjemputan` (
  `Nama_pelanggan` varchar(50) NOT NULL,
  `Alamat_pelanggan` varchar(100) NOT NULL,
  `Nik_Pelanggan` varchar(15) NOT NULL,
  `Telp_pelanggan` varchar(15) NOT NULL,
  `Fasilitas` varchar(100) NOT NULL,
  `Alamat_jemput` varchar(100) NOT NULL,
  `Waktu_jemput` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `nomor_mobil` int(5) NOT NULL,
  `nama_pelanggan` int(50) NOT NULL,
  `tanggal_pinjam` varchar(10) NOT NULL,
  `tanggal_kembali` varchar(10) NOT NULL,
  `nama_mobil` varchar(50) NOT NULL,
  `lama_pinjam` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `durasi_pinjam` varchar(10) NOT NULL,
  `tujuan_pergi` varchar(50) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `mobil_jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`durasi_pinjam`, `tujuan_pergi`, `tgl_pinjam`, `mobil_jenis`) VALUES
('4 Hari', 'surabaya', '2018-02-03', 'Luxury cars'),
('2 Hari', 'surabaya', '2018-12-05', 'Sedan cars');

-- --------------------------------------------------------

--
-- Table structure for table `supir`
--

CREATE TABLE `supir` (
  `nik_supir` varchar(15) NOT NULL,
  `nama_supir` varchar(50) NOT NULL,
  `email_supir` varchar(20) NOT NULL,
  `no_telp_supir` varchar(15) NOT NULL,
  `alamat_supir` varchar(50) NOT NULL,
  `sandi_supir` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_sewa` int(10) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `jumlah_mobil` varchar(3) NOT NULL,
  `harga_mobil_hari` varchar(9) NOT NULL,
  `total` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`username_admin`);

--
-- Indexes for table `admin_mobil`
--
ALTER TABLE `admin_mobil`
  ADD PRIMARY KEY (`plat_nomor`);

--
-- Indexes for table `data_order_pelanggan`
--
ALTER TABLE `data_order_pelanggan`
  ADD PRIMARY KEY (`No_Ktp`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`nopol`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pgw`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `penjadwalan`
--
ALTER TABLE `penjadwalan`
  ADD PRIMARY KEY (`kodemobil`);

--
-- Indexes for table `penjemputan`
--
ALTER TABLE `penjemputan`
  ADD PRIMARY KEY (`Nik_Pelanggan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`nomor_mobil`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`mobil_jenis`);

--
-- Indexes for table `supir`
--
ALTER TABLE `supir`
  ADD PRIMARY KEY (`nik_supir`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_sewa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_mobil`
--
ALTER TABLE `admin_mobil`
  MODIFY `plat_nomor` int(7) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
