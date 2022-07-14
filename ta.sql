-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 09:56 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `ta_tbl`
--

CREATE TABLE `ta_tbl` (
  `id` int(50) NOT NULL,
  `th_angkatan` int(10) NOT NULL,
  `konsentrasi` varchar(50) NOT NULL,
  `nim` int(8) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pembimbing` varchar(50) NOT NULL,
  `waktu` date NOT NULL,
  `dokumen` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ta_tbl`
--

INSERT INTO `ta_tbl` (`id`, `th_angkatan`, `konsentrasi`, `nim`, `judul`, `pembimbing`, `waktu`, `dokumen`, `status`) VALUES
(0, 2019, 'Teknik Informatika', 20014460, 'Perancangan Aplikasi Berbasis Web A', 'Galih', '2022-01-04', '1c3fe877-39e5-eb11-80c0-000c2994a48d_DT064_20210716144136.pdf', 'Aktif'),
(11, 2020, 'Web Development', 20014460, 'Perancangan Aplikasi Dokter', 'Doni', '2021-12-24', '', 'Tidak aktif'),
(20, 2020, '', 20014463, 'Perancangan Aplikasi Mobile Game A', 'Harto', '2022-01-14', '', 'Tidak aktif'),
(21, 2020, 'Web Development', 20014463, 'Perancangan Aplikasi Mobile', 'Doni', '2022-01-14', 'b1dccb7c346936d8ef15ec57e5b2c1d2.pdf', 'Aktif'),
(22, 2019, 'Web Development', 20014463, 'Perancangan Aplikasi Mobile', 'Doni', '2022-01-27', 'bd92e098c2e58e77c0f412f0717fc021.pdf', 'Aktif'),
(23, 2020, 'Web Development', 20014462, 'Perancangan Aplikasi Mobile', 'Harto', '2022-01-13', '59cb9fc89bff2e08812fd39c0a6e3082.pdf', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ta_tbl`
--
ALTER TABLE `ta_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ta_tbl`
--
ALTER TABLE `ta_tbl`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
