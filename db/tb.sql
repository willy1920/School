-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 14 Agu 2017 pada 00.37
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `class`
--

CREATE TABLE `class` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dad`
--

CREATE TABLE `dad` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` char(50) NOT NULL,
  `place_birth` char(30) NOT NULL,
  `date_birth` date NOT NULL,
  `job` char(30) NOT NULL,
  `address` char(60) NOT NULL,
  `office` char(60) NOT NULL,
  `phone_number` char(12) NOT NULL,
  `wa` char(12) NOT NULL,
  `bbm` char(10) NOT NULL,
  `email` char(30) NOT NULL,
  `last_education` char(20) NOT NULL,
  `nationality` char(20) NOT NULL,
  `religion` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guardian`
--

CREATE TABLE `guardian` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` char(50) NOT NULL,
  `place_birth` char(30) NOT NULL,
  `date_birth` date NOT NULL,
  `job` char(30) NOT NULL,
  `address` char(60) NOT NULL,
  `office` char(60) NOT NULL,
  `phone_number` char(12) NOT NULL,
  `wa` char(12) NOT NULL,
  `bbm` char(10) NOT NULL,
  `email` char(30) NOT NULL,
  `last_education` char(20) NOT NULL,
  `nationality` char(20) NOT NULL,
  `religion` char(11) NOT NULL,
  `relationship` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mom`
--

CREATE TABLE `mom` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` char(50) NOT NULL,
  `place_birth` char(30) NOT NULL,
  `date_birth` date NOT NULL,
  `job` char(30) NOT NULL,
  `address` char(60) NOT NULL,
  `office` char(60) NOT NULL,
  `phone_number` char(12) NOT NULL,
  `wa` char(12) NOT NULL,
  `bbm` char(10) NOT NULL,
  `email` char(30) NOT NULL,
  `last_education` char(20) NOT NULL,
  `nationality` char(20) NOT NULL,
  `religion` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `others`
--

CREATE TABLE `others` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `WN` char(20) NOT NULL,
  `asal_sekolah` char(30) DEFAULT NULL,
  `alamat_asal_sekolah` char(60) DEFAULT NULL,
  `kelas_pertama` char(5) NOT NULL,
  `jumlah_saudara` tinyint(2) UNSIGNED DEFAULT NULL,
  `anak_ke` tinyint(2) UNSIGNED DEFAULT NULL,
  `bahasa` char(70) DEFAULT NULL,
  `agama` char(10) NOT NULL,
  `tanggal_diterima` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `staf`
--

CREATE TABLE `staf` (
  `id` smallint(4) UNSIGNED NOT NULL,
  `name` char(50) NOT NULL,
  `hire_date` date NOT NULL,
  `end_contract` date NOT NULL,
  `place_birth` char(30) NOT NULL,
  `date_birth` date NOT NULL,
  `email` char(30) DEFAULT NULL,
  `phone_number` char(12) DEFAULT NULL,
  `wa` char(12) DEFAULT NULL,
  `bbm` char(12) DEFAULT NULL,
  `status` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` char(50) NOT NULL,
  `nis` smallint(5) UNSIGNED DEFAULT NULL,
  `nisn` char(10) DEFAULT NULL,
  `sex` char(1) NOT NULL,
  `place_birth` char(30) NOT NULL,
  `date_birth` date NOT NULL,
  `generation` smallint(4) UNSIGNED NOT NULL,
  `class_id` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` smallint(4) UNSIGNED NOT NULL,
  `user` char(30) NOT NULL,
  `pass` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dad`
--
ALTER TABLE `dad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD KEY `id` (`id`);

--
-- Indexes for table `mom`
--
ALTER TABLE `mom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `staf`
--
ALTER TABLE `staf`
  MODIFY `id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dad`
--
ALTER TABLE `dad`
  ADD CONSTRAINT `dad_ibfk_1` FOREIGN KEY (`id`) REFERENCES `students` (`id`);

--
-- Ketidakleluasaan untuk tabel `guardian`
--
ALTER TABLE `guardian`
  ADD CONSTRAINT `guardian_ibfk_1` FOREIGN KEY (`id`) REFERENCES `students` (`id`);

--
-- Ketidakleluasaan untuk tabel `mom`
--
ALTER TABLE `mom`
  ADD CONSTRAINT `mom_ibfk_1` FOREIGN KEY (`id`) REFERENCES `students` (`id`);

--
-- Ketidakleluasaan untuk tabel `others`
--
ALTER TABLE `others`
  ADD CONSTRAINT `others_ibfk_1` FOREIGN KEY (`id`) REFERENCES `students` (`id`);

--
-- Ketidakleluasaan untuk tabel `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id`) REFERENCES `staf` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
