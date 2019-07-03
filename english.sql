-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 03, 2019 at 08:04 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `english`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `latar` varchar(9999) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `latar`) VALUES
(1, '<p>Pada era Revolusi Industri 4.0&nbsp;sekarang, selain pengetahuan dan keahlian dibidang pengelolaan teknologi informasi, Bahasa Inggris tetap menjadi kebutuhan pokok yang harus dimiliki oleh generasi penerus. Bahasa Inggris juga sudah masuk kurikulum pada pendidikan dasar tingkat 1 meski hanya sebatas pengenalan. Apabila orang tua wali murid menghendaki agar anaknya lebih mahir maka bisa diikutkan kursus privat. Pada kursus privat tersebut, salah satu yang dilatih adalah kemampuan berbicara (speaking) dalam bahasa Inggris. Secara konvensional, proses berlatih speaking memerlukan pendamping yang sudah ahli. Pada tingkat dasar, seseorang yang berlatih speaking akan mengucapkan kata dalam bahasa Inggris. Kemudian pendamping akan menilai apakah seseorang tersebut sudah mengucapkannya secara benar atau belum. Ketika tidak sedang menjalani kursus atau menemukan kata-kata baru, akan mengalami kesulitan untuk melakukan penilaian dari latihan atau pembelajaran yang dilakukan secara mandiri. Berdasarkan hal tersebut diatas, tim berinisiatif untuk membuat suatu sistem berupa perangkat lunak yang dapat membantu belajar speaking secara mandiri. Seseorang yang menggunakan perangkat lunak tersebut bisa belajar speaking layaknya didampingi pembimbing. Sistem akan menampilkan kata dalam bahasa Inggris secara terstruktur. Kemudian pengguna mengucapkan kata tersebut dan perangkat lunak akan menilai apakah kata yang diucapkan sudah benar atau belum.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kata`
--

CREATE TABLE `kata` (
  `id` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `kata` varchar(9999) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kata`
--

INSERT INTO `kata` (`id`, `lvl`, `kata`) VALUES
(1, 2, 'Insert'),
(2, 4, 'Cheatsheet'),
(3, 1, 'Forgot'),
(4, 2, 'Deathless'),
(6, 2, 'Hello World'),
(7, 3, 'Try More Harder');

-- --------------------------------------------------------

--
-- Table structure for table `kritik`
--

CREATE TABLE `kritik` (
  `id` int(11) NOT NULL,
  `dari` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` int(11) NOT NULL,
  `isi` varchar(9999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `tgl` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kritik`
--

INSERT INTO `kritik` (`id`, `dari`, `email`, `tipe`, `isi`, `status`, `tgl`) VALUES
(1, 'aw', 'aw@email.com', 1, 'Ngebug mas di halaman anu', 1, '29 Jul 2019'),
(2, 'damn', 'damned@gmail.com', 2, 'Saran saya servernya ganti yg cepet ya', 2, '30 Jul 2019'),
(3, 'tumirah', 'bakulgegok@bendungan.com', 1, 'Gegok 2000 an mas. Reneo', 3, '1 Jun 2019'),
(4, 'Leon', 'leonprasetya1@gmail.com', 2, 'Index nya warnanya jelek', 1, '30 Jun 2019'),
(5, 'Leon', 'leonprasetya1@gmail.com', 1, 'Lebih baik anu nya di anu', 1, '30 Jun 2019');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `tgl` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` int(11) NOT NULL,
  `body` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `tgl`, `admin`, `body`) VALUES
(1, '29 Jun 2019', 1, 'Perubahan Latar Belakang'),
(2, '03 Jul 2019', 1, 'Tambah Admin : adm0n'),
(3, '03 Jul 2019', 1, 'Tambah Kata : Try Harder, Level : Medium'),
(4, '03 Jul 2019', 1, 'Edit Kata : Try Harder ke Try More Harder, Level : Hard');

-- --------------------------------------------------------

--
-- Table structure for table `log_user`
--

CREATE TABLE `log_user` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kata` int(11) NOT NULL,
  `input` varchar(9999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `dif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_user`
--

INSERT INTO `log_user` (`id`, `id_user`, `tgl`, `id_kata`, `input`, `nilai`, `dif`) VALUES
(1, 2, '29 Jul 2019', 1, 'Insert', 100, 1),
(2, 2, '29 Jul 2019', 1, 'Inset', 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ftname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lsname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_temp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `email`, `ftname`, `lsname`, `temp`, `exp_temp`, `last_login`) VALUES
(1, 'admin', 'admin', 1, NULL, NULL, NULL, NULL, NULL, '03-07-2019 07:43:27'),
(2, 'user', 'user', 2, 'user@user.ac.id', 'User', 'Name', NULL, NULL, ''),
(3, 'adm0n', 'adm0n', 1, '-', NULL, NULL, NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kata`
--
ALTER TABLE `kata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin` (`admin`);

--
-- Indexes for table `log_user`
--
ALTER TABLE `log_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kata`
--
ALTER TABLE `kata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log_user`
--
ALTER TABLE `log_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_1` FOREIGN KEY (`admin`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `log_user`
--
ALTER TABLE `log_user`
  ADD CONSTRAINT `log_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
