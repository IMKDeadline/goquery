-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 05:13 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goquery`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(10) NOT NULL,
  `id_post` int(10) NOT NULL,
  `created_by` varchar(30) DEFAULT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `id_post`, `created_by`, `isi`, `tanggal`) VALUES
(1, 7, NULL, '<p>Lawak was here, Dont go alone dude</p>', '2018-11-15'),
(2, 7, NULL, '<p>Lawak was here</p>', '2018-11-15'),
(3, 2, NULL, '<p>Coba SS errornya ada dimana gan asd</p>', '2018-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `detail_jawaban`
--

CREATE TABLE `detail_jawaban` (
  `id_detailjawaban` int(11) NOT NULL,
  `id_detailsoal` int(11) NOT NULL,
  `jawaban` text NOT NULL,
  `hasil` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_jawaban`
--

INSERT INTO `detail_jawaban` (`id_detailjawaban`, `id_detailsoal`, `jawaban`, `hasil`) VALUES
(1, 1, 'Soto Quah Lamongan', 0),
(2, 1, 'Structured Quarry Languange', 0),
(3, 1, 'Structured Query Languange', 1),
(4, 2, 'Menggunakan join table untuk menggabungkan 2 tabel tersebut', 1),
(5, 2, 'Menggunakan ilmu gaib untuk melakukannya', 0),
(6, 2, 'Belajar lebih giat lagi', 0),
(7, 3, 'drop table mahasiswa', 1),
(8, 3, 'delete table mahasiswa', 0),
(9, 3, 'backspace table mahasiswa', 0),
(10, 4, 'select * karyawan where id = 4;', 1),
(11, 4, '* select where karyawan has id = 4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `detail_soal`
--

CREATE TABLE `detail_soal` (
  `id_detailsoal` int(11) NOT NULL,
  `id_tugas` int(11) NOT NULL,
  `no_soal` varchar(5) DEFAULT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_soal`
--

INSERT INTO `detail_soal` (`id_detailsoal`, `id_tugas`, `no_soal`, `pertanyaan`) VALUES
(1, 1, '4', 'SQL merupakan singkatan dari ..'),
(2, 1, '3', 'diberikan 2 buah tabel, dan dari kedua tabel tersebut akan diambil tabelnya yang saling beririsan, bagaimana caranya?'),
(3, 1, '2', 'Berikut perintah drop table yang benar adalah..'),
(4, 1, '1', 'Berikut untuk mengambil data karyawan dengan id = 4 ?');

-- --------------------------------------------------------

--
-- Table structure for table `history_tugas`
--

CREATE TABLE `history_tugas` (
  `id_history_tugas` int(11) NOT NULL,
  `id_tugas` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_tugas`
--

INSERT INTO `history_tugas` (`id_history_tugas`, `id_tugas`, `username`, `tanggal`) VALUES
(6, 1, NULL, '2018-11-18 03:44:47'),
(7, 1, NULL, '2018-11-18 03:55:16'),
(8, 1, NULL, '2018-11-18 04:06:30'),
(9, 1, NULL, '2018-11-18 04:07:34'),
(10, 1, NULL, '2018-11-18 04:07:46');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `materi_id` int(5) NOT NULL,
  `isi` text NOT NULL,
  `created_by` varchar(30) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `slug` text NOT NULL,
  `tanggal` date NOT NULL,
  `created_by` varchar(30) DEFAULT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `judul`, `slug`, `tanggal`, `created_by`, `isi`) VALUES
(2, 'Cara menghafal query dengan mudah', 'cara-menghafal-query-dengan-mudah-2', '2018-11-13', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n'),
(7, 'Bang cara join table secara gaib', 'bang-cara-join-table-secara-gaib-7', '2018-11-14', NULL, '<p>Jadi begini guys, saya selaku sebagai ingin menyampaikan apa yang tidak bisa disampaikanasdasd</p>'),
(8, 'Bang cara join table secara gaib', 'bang-cara-join-table-secara-gaib-8', '2018-11-17', NULL, '<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em><br /><br /></p>\r\n<p>&nbsp;</p>\r\n<p style=\"padding-left: 60px;\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</strong><br /><br /></p>');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `slug` text NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_tugas` varchar(50) NOT NULL,
  `created_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id_tugas`, `judul`, `slug`, `tanggal`, `jenis_tugas`, `created_by`) VALUES
(1, 'Latihan Query 1', 'latihan-query-1', '2018-11-18', 'exercise', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tipe` varchar(25) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_jawaban`
--

CREATE TABLE `user_jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_history_tugas` int(11) NOT NULL,
  `id_detailsoal` int(11) DEFAULT NULL,
  `id_detail_jawaban` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_jawaban`
--

INSERT INTO `user_jawaban` (`id_jawaban`, `id_history_tugas`, `id_detailsoal`, `id_detail_jawaban`) VALUES
(1, 6, 4, 10),
(2, 6, 3, 7),
(3, 6, 2, 4),
(4, 6, 1, 1),
(5, 7, 4, 10),
(6, 7, 3, 7),
(7, 7, 2, 4),
(8, 7, 1, 1),
(9, 8, 4, 10),
(10, 8, 3, 7),
(11, 8, 2, 4),
(12, 8, 1, 1),
(13, 9, 4, 10),
(14, 9, 3, 7),
(15, 9, 2, 4),
(16, 9, 1, 1),
(17, 10, 4, 10),
(18, 10, 3, 7),
(19, 10, 2, 4),
(20, 10, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `comment_fk1` (`id_post`),
  ADD KEY `comment_fk2` (`created_by`);

--
-- Indexes for table `detail_jawaban`
--
ALTER TABLE `detail_jawaban`
  ADD PRIMARY KEY (`id_detailjawaban`),
  ADD KEY `fk_detailsoal` (`id_detailsoal`);

--
-- Indexes for table `detail_soal`
--
ALTER TABLE `detail_soal`
  ADD PRIMARY KEY (`id_detailsoal`),
  ADD KEY `fk_tugas` (`id_tugas`);

--
-- Indexes for table `history_tugas`
--
ALTER TABLE `history_tugas`
  ADD PRIMARY KEY (`id_history_tugas`),
  ADD KEY `fk_tugas1` (`id_tugas`),
  ADD KEY `fk_users` (`username`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`materi_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`),
  ADD KEY `fk_user` (`created_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user_jawaban`
--
ALTER TABLE `user_jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `fk_detailsoal1` (`id_detailsoal`),
  ADD KEY `fk_detailjawaban1` (`id_detail_jawaban`),
  ADD KEY `fk_history_tugas` (`id_history_tugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detail_jawaban`
--
ALTER TABLE `detail_jawaban`
  MODIFY `id_detailjawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `detail_soal`
--
ALTER TABLE `detail_soal`
  MODIFY `id_detailsoal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `history_tugas`
--
ALTER TABLE `history_tugas`
  MODIFY `id_history_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `materi_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_jawaban`
--
ALTER TABLE `user_jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_fk1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_fk2` FOREIGN KEY (`created_by`) REFERENCES `users` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `detail_jawaban`
--
ALTER TABLE `detail_jawaban`
  ADD CONSTRAINT `fk_detailsoal` FOREIGN KEY (`id_detailsoal`) REFERENCES `detail_soal` (`id_detailsoal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_soal`
--
ALTER TABLE `detail_soal`
  ADD CONSTRAINT `fk_tugas` FOREIGN KEY (`id_tugas`) REFERENCES `tugas` (`id_tugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `history_tugas`
--
ALTER TABLE `history_tugas`
  ADD CONSTRAINT `fk_tugas1` FOREIGN KEY (`id_tugas`) REFERENCES `tugas` (`id_tugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_users` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`created_by`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_jawaban`
--
ALTER TABLE `user_jawaban`
  ADD CONSTRAINT `fk_detailjawaban1` FOREIGN KEY (`id_detail_jawaban`) REFERENCES `detail_jawaban` (`id_detailjawaban`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detailsoal1` FOREIGN KEY (`id_detailsoal`) REFERENCES `detail_soal` (`id_detailsoal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_history_tugas` FOREIGN KEY (`id_history_tugas`) REFERENCES `history_tugas` (`id_history_tugas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
