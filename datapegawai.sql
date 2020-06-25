-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jun 2020 pada 06.59
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawais`
--

CREATE TABLE `pegawais` (
  `idPegawai` int(11) NOT NULL,
  `namaPegawai` varchar(255) NOT NULL,
  `gaji` int(11) NOT NULL,
  `usia` int(11) NOT NULL,
  `foto` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawais`
--

INSERT INTO `pegawais` (`idPegawai`, `namaPegawai`, `gaji`, `usia`, `foto`, `created_at`, `updated_at`) VALUES
(75, 'Tiger Nixon', 320800, 61, '', '2020-06-24 21:56:49', '2020-06-24 21:56:49'),
(76, 'Garrett Winters', 170750, 63, '', '2020-06-24 21:56:50', '2020-06-24 21:56:50'),
(77, 'Ashton Cox', 86000, 66, '', '2020-06-24 21:56:50', '2020-06-24 21:56:50'),
(78, 'Cedric Kelly', 433060, 22, '', '2020-06-24 21:56:50', '2020-06-24 21:56:50'),
(79, 'Airi Satou', 162700, 33, '', '2020-06-24 21:56:50', '2020-06-24 21:56:50'),
(80, 'Brielle Williamson', 372000, 61, '', '2020-06-24 21:56:50', '2020-06-24 21:56:50'),
(81, 'Herrod Chandler', 137500, 59, '', '2020-06-24 21:56:50', '2020-06-24 21:56:50'),
(82, 'Rhona Davidson', 327900, 55, '', '2020-06-24 21:56:51', '2020-06-24 21:56:51'),
(83, 'Colleen Hurst', 205500, 39, '', '2020-06-24 21:56:51', '2020-06-24 21:56:51'),
(84, 'Sonya Frost', 103600, 23, '', '2020-06-24 21:56:51', '2020-06-24 21:56:51'),
(85, 'Jena Gaines', 90560, 30, '', '2020-06-24 21:56:52', '2020-06-24 21:56:52'),
(86, 'Quinn Flynn', 342000, 22, '', '2020-06-24 21:56:52', '2020-06-24 21:56:52'),
(87, 'Charde Marshall', 470600, 36, '', '2020-06-24 21:56:52', '2020-06-24 21:56:52'),
(88, 'Haley Kennedy', 313500, 43, '', '2020-06-24 21:56:53', '2020-06-24 21:56:53'),
(89, 'Tatyana Fitzpatrick', 385750, 19, '', '2020-06-24 21:56:53', '2020-06-24 21:56:53'),
(90, 'Michael Silva', 198500, 66, '', '2020-06-24 21:56:53', '2020-06-24 21:56:53'),
(91, 'Paul Byrd', 725000, 64, '', '2020-06-24 21:56:53', '2020-06-24 21:56:53'),
(92, 'Gloria Little', 237500, 59, '', '2020-06-24 21:56:54', '2020-06-24 21:56:54'),
(93, 'Bradley Greer', 132000, 41, '', '2020-06-24 21:56:54', '2020-06-24 21:56:54'),
(94, 'Dai Rios', 217500, 35, '', '2020-06-24 21:56:54', '2020-06-24 21:56:54'),
(95, 'Jenette Caldwell', 345000, 30, '', '2020-06-24 21:56:54', '2020-06-24 21:56:54'),
(96, 'Yuri Berry', 675000, 40, '', '2020-06-24 21:56:54', '2020-06-24 21:56:54'),
(97, 'Caesar Vance', 106450, 21, '', '2020-06-24 21:56:54', '2020-06-24 21:56:54'),
(98, 'Doris Wilder', 85600, 23, '', '2020-06-24 21:56:54', '2020-06-24 21:56:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`idPegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `idPegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
