-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 01:36 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_amr`
--

-- --------------------------------------------------------

--
-- Table structure for table `ct`
--

CREATE TABLE `ct` (
  `id_ct` int(11) NOT NULL,
  `id_pelanggan` varchar(14) NOT NULL,
  `jenis` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meter`
--

CREATE TABLE `meter` (
  `id_meter` varchar(14) NOT NULL,
  `id_pelanggan` varchar(14) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `tahun_buat` char(4) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meter`
--

INSERT INTO `meter` (`id_meter`, `id_pelanggan`, `merk`, `tahun_buat`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
('09876543212345', '12345678901234', 'sssss', '2014', 3.12312312, 3.435445, '2019-01-19 07:44:56', '2019-01-19 07:44:56');

-- --------------------------------------------------------

--
-- Table structure for table `modem`
--

CREATE TABLE `modem` (
  `imei` varchar(16) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `id_pelanggan` varchar(14) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(14) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tarif` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `daya` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `tarif`, `email`, `daya`, `created_at`, `updated_at`) VALUES
('12345678901234', 'Azhary', 'KM7', 20000, 'arliansyah_azhary@yahoo.com', 90, '2019-01-19 07:44:56', '2019-01-19 07:44:56');

-- --------------------------------------------------------

--
-- Table structure for table `pembatas_arus`
--

CREATE TABLE `pembatas_arus` (
  `id_pembatas_arus` int(11) NOT NULL,
  `id_pelanggan` varchar(14) NOT NULL,
  `merk` varchar(15) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `arus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` char(32) NOT NULL,
  `id_role` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `id_role`, `created_at`, `updated_at`) VALUES
(3, 'azhry', '985fabf8f96dc1c4c306341031569937', 1, '2019-01-21 10:01:35', '2019-01-21 10:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna_rayon`
--

CREATE TABLE `pengguna_rayon` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_rayon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rayon`
--

CREATE TABLE `rayon` (
  `id_rayon` int(11) NOT NULL,
  `rayon` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` tinyint(4) NOT NULL,
  `role` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '', '2019-01-21 09:51:58', '2019-01-21 09:51:58'),
(2, 'Transaksi Energi', '', '2019-01-21 09:51:58', '2019-01-21 09:51:58'),
(3, 'Rayon', '', '2019-01-21 09:52:12', '2019-01-21 09:52:12');

-- --------------------------------------------------------

--
-- Table structure for table `sim_card`
--

CREATE TABLE `sim_card` (
  `no_sim_card` varchar(13) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `id_pelanggan` varchar(14) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ct`
--
ALTER TABLE `ct`
  ADD PRIMARY KEY (`id_ct`);

--
-- Indexes for table `meter`
--
ALTER TABLE `meter`
  ADD PRIMARY KEY (`id_meter`);

--
-- Indexes for table `modem`
--
ALTER TABLE `modem`
  ADD PRIMARY KEY (`imei`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembatas_arus`
--
ALTER TABLE `pembatas_arus`
  ADD PRIMARY KEY (`id_pembatas_arus`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `pengguna_rayon`
--
ALTER TABLE `pengguna_rayon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rayon`
--
ALTER TABLE `rayon`
  ADD PRIMARY KEY (`id_rayon`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `sim_card`
--
ALTER TABLE `sim_card`
  ADD PRIMARY KEY (`no_sim_card`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ct`
--
ALTER TABLE `ct`
  MODIFY `id_ct` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembatas_arus`
--
ALTER TABLE `pembatas_arus`
  MODIFY `id_pembatas_arus` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengguna_rayon`
--
ALTER TABLE `pengguna_rayon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rayon`
--
ALTER TABLE `rayon`
  MODIFY `id_rayon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
