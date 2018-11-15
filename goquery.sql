-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2018 at 06:28 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `detail_soal`
--

CREATE TABLE `detail_soal` (
  `id_detailsoal` int(11) NOT NULL,
  `id_tugas` int(11) NOT NULL,
  `no_soal` varchar(5) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_tugas` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`),
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
  MODIFY `id_detailjawaban` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_soal`
--
ALTER TABLE `detail_soal`
  MODIFY `id_detailsoal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `materi_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
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
-- Constraints for table `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `soal_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`created_by`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
