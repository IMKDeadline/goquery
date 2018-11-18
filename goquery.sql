-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Nov 15, 2018 at 06:30 PM
=======
-- Generation Time: Nov 18, 2018 at 09:24 AM
>>>>>>> 589606cd8336c6f36a22fec96b60cf6c41bec779
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

<<<<<<< HEAD
=======
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

>>>>>>> 589606cd8336c6f36a22fec96b60cf6c41bec779
-- --------------------------------------------------------

--
-- Table structure for table `detail_soal`
--

CREATE TABLE `detail_soal` (
  `id_detailsoal` int(11) NOT NULL,
  `id_tugas` int(11) NOT NULL,
<<<<<<< HEAD
  `no_soal` varchar(5) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

=======
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
(10, 1, NULL, '2018-11-18 04:07:46'),
(11, 1, NULL, '2018-11-18 06:46:09'),
(12, 1, NULL, '2018-11-18 06:47:08'),
(13, 1, NULL, '2018-11-18 06:47:33'),
(14, 1, NULL, '2018-11-18 06:47:52'),
(15, 1, NULL, '2018-11-18 06:50:54'),
(16, 1, NULL, '2018-11-18 06:53:53'),
(17, 1, NULL, '2018-11-18 06:54:08'),
(18, 1, NULL, '2018-11-18 06:54:50'),
(19, 1, NULL, '2018-11-18 06:55:26'),
(20, 1, NULL, '2018-11-18 06:55:37'),
(21, 1, NULL, '2018-11-18 06:56:33'),
(22, 1, NULL, '2018-11-18 06:56:54'),
(23, 1, NULL, '2018-11-18 06:57:11'),
(24, 1, NULL, '2018-11-18 06:57:18'),
(25, 1, NULL, '2018-11-18 06:57:23'),
(26, 1, NULL, '2018-11-18 06:57:28'),
(27, 1, NULL, '2018-11-18 06:57:49'),
(28, 1, NULL, '2018-11-18 06:57:56'),
(29, 1, NULL, '2018-11-18 06:58:06'),
(30, 1, NULL, '2018-11-18 06:58:35'),
(31, 1, NULL, '2018-11-18 07:02:30'),
(32, 1, NULL, '2018-11-18 07:02:39'),
(33, 1, NULL, '2018-11-18 07:04:09'),
(34, 1, NULL, '2018-11-18 07:08:34'),
(35, 1, NULL, '2018-11-18 07:09:05'),
(36, 1, NULL, '2018-11-18 07:10:01'),
(37, 1, NULL, '2018-11-18 07:10:09');

>>>>>>> 589606cd8336c6f36a22fec96b60cf6c41bec779
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
<<<<<<< HEAD
(7, 'Bang cara join table secara gaib', 'bang-cara-join-table-secara-gaib-7', '2018-11-14', NULL, '<p>Jadi begini guys, saya selaku sebagai ingin menyampaikan apa yang tidak bisa disampaikanasdasd</p>');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `created_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
=======
(7, 'Bang cara join table secara gaib', 'bang-cara-join-table-secara-gaib-7', '2018-11-14', NULL, '<p>Jadi begini guys, saya selaku sebagai ingin menyampaikan apa yang tidak bisa disampaikanasdasd</p>'),
(8, 'Bang cara join table secara gaib', 'bang-cara-join-table-secara-gaib-8', '2018-11-17', NULL, '<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em><br /><br /></p>\r\n<p>&nbsp;</p>\r\n<p style=\"padding-left: 60px;\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</strong><br /><br /></p>'),
(9, 'cara menampilkan 2 table yang menampilkan 1 irisan yang sama', 'cara-menampilkan-2-table-yang-menampilkan-1-irisan-yang-sama-9', '2018-11-18', 'yafimm', '<p>[ASK]</p>\r\n<p>Saya punya 2 table, mahasiswa fk(dosen) dan dosen pk(nid), saya mau nampilin mahasiswa yang dosennya pak anwar, kira kira bagaimana ya?</p>\r\n<p>&nbsp;</p>\r\n<table style=\"height: 127px; width: 29.317%; border-collapse: collapse; border-style: double;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 42px;\">\r\n<td style=\"width: 50%; height: 42px; padding-left: 30px;\"><strong>Dosen</strong></td>\r\n<td style=\"width: 50%; height: 42px; text-align: center;\"><strong>Mahasiswa</strong></td>\r\n</tr>\r\n<tr style=\"height: 42px;\">\r\n<td style=\"width: 50%; height: 42px;\">Dadang</td>\r\n<td style=\"width: 50%; height: 42px;\">Suaeb</td>\r\n</tr>\r\n<tr style=\"height: 43px;\">\r\n<td style=\"width: 50%; height: 43px;\">Dadang</td>\r\n<td style=\"width: 50%; height: 43px;\">Mansyur</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>Berikut hasil yang saya harapkan seperti pada tabel diatas</p>');
>>>>>>> 589606cd8336c6f36a22fec96b60cf6c41bec779

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` int(11) NOT NULL,
<<<<<<< HEAD
  `tanggal` date NOT NULL,
  `jenis_tugas` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

=======
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

>>>>>>> 589606cd8336c6f36a22fec96b60cf6c41bec779
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

--
<<<<<<< HEAD
=======
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `tipe`, `first_name`, `last_name`, `email`, `tanggal_lahir`, `foto`) VALUES
('yafimm', '060f3317da7e887a304888c6fbe1d596', 'member', 'yafi', 'maulana', 'yafi@mm.com', '2018-11-18', ''),
('yafimmm', '060f3317da7e887a304888c6fbe1d596', 'member', 'yafimm', 'maulana', '9e.yafi.maulana@gmail.com', '2018-11-18', '');

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
(20, 10, 1, 1),
(21, 11, 4, 11),
(22, 11, 3, 7),
(23, 11, 2, 4),
(24, 11, 1, 1),
(25, 12, 4, 11),
(26, 12, 3, 7),
(27, 12, 2, 4),
(28, 12, 1, 1),
(29, 13, 4, 11),
(30, 13, 3, 7),
(31, 13, 2, 4),
(32, 13, 1, 1),
(33, 14, 4, 11),
(34, 14, 3, 7),
(35, 14, 2, 4),
(36, 14, 1, 1),
(37, 15, 4, 11),
(38, 15, 3, 7),
(39, 15, 2, 4),
(40, 15, 1, 1),
(41, 16, 4, 11),
(42, 16, 3, 7),
(43, 16, 2, 4),
(44, 16, 1, 1),
(45, 17, 4, 11),
(46, 17, 3, 7),
(47, 17, 2, 4),
(48, 17, 1, 1),
(49, 18, 4, 11),
(50, 18, 3, 7),
(51, 18, 2, 4),
(52, 18, 1, 1),
(53, 19, 4, 11),
(54, 19, 3, 7),
(55, 19, 2, 4),
(56, 19, 1, 1),
(57, 20, 4, 11),
(58, 20, 3, 7),
(59, 20, 2, 4),
(60, 20, 1, 1),
(61, 21, 4, 11),
(62, 21, 3, 7),
(63, 21, 2, 4),
(64, 21, 1, 1),
(65, 22, 4, 11),
(66, 22, 3, 7),
(67, 22, 2, 4),
(68, 22, 1, 1),
(69, 23, 4, 11),
(70, 23, 3, 7),
(71, 23, 2, 4),
(72, 23, 1, 1),
(73, 24, 4, 11),
(74, 24, 3, 7),
(75, 24, 2, 4),
(76, 24, 1, 1),
(77, 25, 4, 11),
(78, 25, 3, 7),
(79, 25, 2, 4),
(80, 25, 1, 1),
(81, 26, 4, 11),
(82, 26, 3, 7),
(83, 26, 2, 4),
(84, 26, 1, 1),
(85, 27, 4, 11),
(86, 27, 3, 7),
(87, 27, 2, 4),
(88, 27, 1, 1),
(89, 28, 4, 11),
(90, 28, 3, 7),
(91, 28, 2, 4),
(92, 28, 1, 1),
(93, 29, 4, 11),
(94, 29, 3, 7),
(95, 29, 2, 4),
(96, 29, 1, 1),
(97, 30, 4, 11),
(98, 30, 3, 7),
(99, 30, 2, 4),
(100, 30, 1, 1),
(101, 31, 4, 11),
(102, 31, 3, 7),
(103, 31, 2, 4),
(104, 31, 1, 1),
(105, 32, 4, 11),
(106, 32, 3, 7),
(107, 32, 2, 4),
(108, 32, 1, 1),
(109, 33, 4, 11),
(110, 33, 3, 7),
(111, 33, 2, 4),
(112, 33, 1, 1),
(113, 34, 4, 11),
(114, 34, 3, 7),
(115, 34, 2, 4),
(116, 34, 1, 1),
(117, 35, 4, 11),
(118, 35, 3, 7),
(119, 35, 2, 4),
(120, 35, 1, 1),
(121, 36, 4, 10),
(122, 36, 3, 8),
(123, 36, 2, 4),
(124, 36, 1, 1),
(125, 37, 4, 11),
(126, 37, 3, 7),
(127, 37, 2, 6),
(128, 37, 1, 1);

--
>>>>>>> 589606cd8336c6f36a22fec96b60cf6c41bec779
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
<<<<<<< HEAD
=======
-- Indexes for table `history_tugas`
--
ALTER TABLE `history_tugas`
  ADD PRIMARY KEY (`id_history_tugas`),
  ADD KEY `fk_tugas1` (`id_tugas`),
  ADD KEY `fk_users` (`username`);

--
>>>>>>> 589606cd8336c6f36a22fec96b60cf6c41bec779
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
<<<<<<< HEAD
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `created_by` (`created_by`);

--
=======
>>>>>>> 589606cd8336c6f36a22fec96b60cf6c41bec779
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
<<<<<<< HEAD
=======
-- Indexes for table `user_jawaban`
--
ALTER TABLE `user_jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `fk_detailsoal1` (`id_detailsoal`),
  ADD KEY `fk_detailjawaban1` (`id_detail_jawaban`),
  ADD KEY `fk_history_tugas` (`id_history_tugas`);

--
>>>>>>> 589606cd8336c6f36a22fec96b60cf6c41bec779
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
<<<<<<< HEAD
  MODIFY `id_detailjawaban` int(11) NOT NULL AUTO_INCREMENT;
=======
  MODIFY `id_detailjawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
>>>>>>> 589606cd8336c6f36a22fec96b60cf6c41bec779

--
-- AUTO_INCREMENT for table `detail_soal`
--
ALTER TABLE `detail_soal`
<<<<<<< HEAD
  MODIFY `id_detailsoal` int(11) NOT NULL AUTO_INCREMENT;
=======
  MODIFY `id_detailsoal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `history_tugas`
--
ALTER TABLE `history_tugas`
  MODIFY `id_history_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
>>>>>>> 589606cd8336c6f36a22fec96b60cf6c41bec779

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `materi_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
<<<<<<< HEAD
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT;
=======
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_jawaban`
--
ALTER TABLE `user_jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
>>>>>>> 589606cd8336c6f36a22fec96b60cf6c41bec779

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
<<<<<<< HEAD
=======
-- Constraints for table `history_tugas`
--
ALTER TABLE `history_tugas`
  ADD CONSTRAINT `fk_tugas1` FOREIGN KEY (`id_tugas`) REFERENCES `tugas` (`id_tugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_users` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
>>>>>>> 589606cd8336c6f36a22fec96b60cf6c41bec779
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
<<<<<<< HEAD
-- Constraints for table `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `soal_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`username`) ON DELETE CASCADE;

--
=======
>>>>>>> 589606cd8336c6f36a22fec96b60cf6c41bec779
-- Constraints for table `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`created_by`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
<<<<<<< HEAD
=======

--
-- Constraints for table `user_jawaban`
--
ALTER TABLE `user_jawaban`
  ADD CONSTRAINT `fk_detailjawaban1` FOREIGN KEY (`id_detail_jawaban`) REFERENCES `detail_jawaban` (`id_detailjawaban`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detailsoal1` FOREIGN KEY (`id_detailsoal`) REFERENCES `detail_soal` (`id_detailsoal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_history_tugas` FOREIGN KEY (`id_history_tugas`) REFERENCES `history_tugas` (`id_history_tugas`) ON DELETE CASCADE ON UPDATE CASCADE;
>>>>>>> 589606cd8336c6f36a22fec96b60cf6c41bec779
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
