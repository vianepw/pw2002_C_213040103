-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 04:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `kesehatan`
--

CREATE TABLE `kesehatan` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `jenis_gejala` varchar(255) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `kelas_ruangan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kesehatan`
--

INSERT INTO `kesehatan` (`id`, `nama_pasien`, `jenis_gejala`, `nama_dokter`, `kelas_ruangan`, `gambar`) VALUES
(6, 'Viane Pindhi Wardiyane', 'Patah Tulang', 'dr. Toto Martono S.Ked', 'Poliklinik OrthopaediKelas Umum', 'aku item.jpeg'),
(7, 'Vachirawit', 'Asma', 'dr. Asep R S.Ked', 'Poliklinik Penyakit Dalam\r\nKlinik Paru dan Asma\r\n', 'bright1.jpg'),
(8, 'Hendery Aheng', 'Gizi', 'dr. Ayman Alatas S.Ked', 'Konsultasi Gizi\r\nKelas Umum ', 'hendery1.jpg'),
(10, 'Fajar Alfian', 'Cedera Kepala', 'dr. Gina Karin S.Ked', 'Poliklinik Saraf\r\nKelas VIP ', 'ajay1.jpg'),
(11, 'Lee Jeno', 'Cedera Kepala', 'dr. Gina Karin S.Ked', 'Poliklinik Saraf\r\nKelas VIP', 'jeno1.jpg'),
(12, 'Jung Jaehyun', 'Covid-19', 'Dr. Deni Pardeni S.Ked', 'VIP kelas B', 'jaehyun1.jpg'),
(13, 'Kambe Daisuke', 'Rabun Jauh', 'dr. Shendy Nur Latifah Sp.M', 'Poliklinik SarafKelas Umum', 'daisuke1.jpg'),
(14, 'Mark Lee', 'Konseling Kejiwaan', 'dr. Nabila Putri Aisyah Insirawati S.Psi', 'Poliklinik Kedokteran Jiwa\r\nRuang Konseling Kejiwaan', 'mark1.jpg'),
(15, 'Park Jihyo', 'Kosnul Kandungan', 'dr. Kanistha Nur Arzanti S.Keb', 'Poliklinik Kebidanan dan Kandungan \r\nRuang USG kebidanan', 'jihyo1.jpg'),
(16, 'Kim Min Jeong', 'Sembelit', 'dr. Edward Cullen Sp.A', 'Poliklinik Anak\r\nRuang Kesehatan Anak Umum', 'winter1.jpg'),
(17, 'Toji Fushiguro', 'Demam Berdarah', 'dr. Keisha Alhaliza S.Ked', 'Poliklinik Khusus Lansia\r\nKelas C VVIP', 'toji1.jpg'),
(18, 'Lalisa Manoban', 'Covid-19', 'Dr. Deni Pardeni S.Ked', 'VIP kelas B', 'lisa1.jpg'),
(24, 'Dew Jirawat', 'Patah Tulang', 'dr. Toto Martono S.Ked', 'Poliklinik Orthopaedi Kelas Umum', '62a1e3d72429bdew1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(9, 'zxc', '$2y$10$QyH7P/YoiadMEPIQ3MWf0ulUzh2ngWPweQZrSW2UXR0owywDSAXNC', 'user'),
(10, 'admin', '$2y$10$kUDfD9wbpPlAyLILUliJDeySXo9s0doah.kIvva1.r74eWy9T4E2y', 'admin'),
(11, 'vianepw', '$2y$10$h/.MpEwjVv4NFfnYVQ.yP.fyZKk.PvED6vKfUGzcxPL1rdfG21v.C', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kesehatan`
--
ALTER TABLE `kesehatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
