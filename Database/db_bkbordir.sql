-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2023 at 02:46 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bkbordir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `ID_Pelanggan` int(11) NOT NULL,
  `Nama_Pelanggan` varchar(50) NOT NULL,
  `Alamat_Pelanggan` varchar(50) NOT NULL,
  `No_Hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`ID_Pelanggan`, `Nama_Pelanggan`, `Alamat_Pelanggan`, `No_Hp`) VALUES
(1, 'Noneng Sofiah', 'Surakarta', '082323440658'),
(2, 'Awesti Wiharya', 'Jl Raya Padaherang RT 05 RW 08', '083825457426');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `ID_Pembayaran` int(11) NOT NULL,
  `ID_Pemesanan` int(11) NOT NULL,
  `Ongkir` int(30) DEFAULT NULL,
  `Total` int(30) NOT NULL,
  `Status_Pembayaran` varchar(30) NOT NULL,
  `Bukti_Pembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`ID_Pembayaran`, `ID_Pemesanan`, `Ongkir`, `Total`, `Status_Pembayaran`, `Bukti_Pembayaran`) VALUES
(1, 1, 15000, 110000, 'Belum', 'nota.png'),
(2, 2, 5000, 115000, 'Belum', 'nota.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `ID_Pemesanan` int(11) NOT NULL,
  `ID_Pelanggan` int(11) NOT NULL,
  `Jumlah_Bordiran` int(11) NOT NULL,
  `Ukuran_Bordir` varchar(30) NOT NULL,
  `Estimasi_Bordir` varchar(30) NOT NULL,
  `Desain` varchar(30) NOT NULL,
  `Pengambilan_Bahan` varchar(30) NOT NULL,
  `Pengantaran_Barang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`ID_Pemesanan`, `ID_Pelanggan`, `Jumlah_Bordiran`, `Ukuran_Bordir`, `Estimasi_Bordir`, `Desain`, `Pengambilan_Bahan`, `Pengantaran_Barang`) VALUES
(1, 1, 160, '10x5 cm', '3 hari', 'Logo_2.jpeg', 'Diantar', 'Diantar'),
(2, 2, 500, '17x7 cm', '10 hari', 'Logoo.jpeg', 'Diantar', 'Dijemput');

-- --------------------------------------------------------

--
-- Table structure for table `tb_progbordir`
--

CREATE TABLE `tb_progbordir` (
  `ID_Progbordir` int(11) NOT NULL,
  `ID_Pemesanan` int(11) NOT NULL,
  `Status_Bordiran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_progbordir`
--

INSERT INTO `tb_progbordir` (`ID_Progbordir`, `ID_Pemesanan`, `Status_Bordiran`) VALUES
(18, 1, 'Belum'),
(19, 2, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `ID_User` int(11) NOT NULL,
  `Nama_Lengkap` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password_User` varchar(50) NOT NULL,
  `Alamat_User` varchar(50) NOT NULL,
  `NoHp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`ID_User`, `Nama_Lengkap`, `Username`, `Password_User`, `Alamat_User`, `NoHp`) VALUES
(1, 'Sofiah Noneng', 'Noneng_S22', 'sofiah22', 'Grogol Surakarta', '081931640701'),
(2, 'Haris Purnama', 'Haris_P12345', 'haris12345', 'Tasikmalaya', '087845456123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`ID_Pelanggan`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`ID_Pembayaran`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`ID_Pemesanan`);

--
-- Indexes for table `tb_progbordir`
--
ALTER TABLE `tb_progbordir`
  ADD PRIMARY KEY (`ID_Progbordir`),
  ADD KEY `fk_pemesananbordir` (`ID_Pemesanan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `ID_Pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `ID_Pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `ID_Pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_progbordir`
--
ALTER TABLE `tb_progbordir`
  MODIFY `ID_Progbordir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_progbordir`
--
ALTER TABLE `tb_progbordir`
  ADD CONSTRAINT `fk_pemesananbordir` FOREIGN KEY (`ID_Pemesanan`) REFERENCES `tb_pemesanan` (`ID_Pemesanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
