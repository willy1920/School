-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 25 Agu 2017 pada 03.12
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

--
-- Dumping data untuk tabel `class`
--

INSERT INTO `class` (`id`, `name`) VALUES
(1, 'P1 Curiosity');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dad`
--

CREATE TABLE `dad` (
  `dad_id` smallint(5) UNSIGNED NOT NULL,
  `dad_name` char(50) DEFAULT NULL,
  `dad_place_birth` char(30) DEFAULT NULL,
  `dad_date_birth` date DEFAULT NULL,
  `dad_job` char(30) DEFAULT NULL,
  `dad_address` char(60) DEFAULT NULL,
  `dad_office` char(60) DEFAULT NULL,
  `dad_phone_number` char(12) DEFAULT NULL,
  `dad_wa` char(12) DEFAULT NULL,
  `dad_bbm` char(10) DEFAULT NULL,
  `dad_email` char(30) DEFAULT NULL,
  `dad_last_education` char(20) DEFAULT NULL,
  `dad_nationality` char(20) DEFAULT NULL,
  `dad_religion` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `generation`
--

CREATE TABLE `generation` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `generation` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guardian`
--

CREATE TABLE `guardian` (
  `guardian_id` smallint(5) UNSIGNED NOT NULL,
  `mom_name` char(50) DEFAULT NULL,
  `mom_place_birth` char(30) DEFAULT NULL,
  `guardian_date_birth` date DEFAULT NULL,
  `guardian_job` char(30) DEFAULT NULL,
  `guardian_address` char(60) DEFAULT NULL,
  `guardian_office` char(60) DEFAULT NULL,
  `guardian_phone_number` char(12) DEFAULT NULL,
  `guardian_wa` char(12) DEFAULT NULL,
  `guardian_bbm` char(10) DEFAULT NULL,
  `guardian_email` char(30) DEFAULT NULL,
  `guardian_last_education` char(20) DEFAULT NULL,
  `guardian_nationality` char(20) DEFAULT NULL,
  `guardian_religion` char(10) DEFAULT NULL,
  `guardian_relationship` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mom`
--

CREATE TABLE `mom` (
  `mom_id` smallint(5) UNSIGNED NOT NULL,
  `mom_name` char(50) DEFAULT NULL,
  `mom_place_birth` char(30) DEFAULT NULL,
  `mom_date_birth` date DEFAULT NULL,
  `mom_job` char(30) DEFAULT NULL,
  `mom_address` char(60) DEFAULT NULL,
  `mom_office` char(60) DEFAULT NULL,
  `mom_phone_number` char(12) DEFAULT NULL,
  `mom_wa` char(12) DEFAULT NULL,
  `mom_bbm` char(10) DEFAULT NULL,
  `mom_email` char(30) DEFAULT NULL,
  `mom_last_education` char(20) DEFAULT NULL,
  `mom_nationality` char(20) DEFAULT NULL,
  `mom_religion` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `others`
--

CREATE TABLE `others` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `WN` char(20) DEFAULT NULL,
  `asal_sekolah` char(30) DEFAULT NULL,
  `alamat_asal_sekolah` char(60) DEFAULT NULL,
  `kelas_pertama` char(5) DEFAULT NULL,
  `jumlah_saudara` tinyint(2) UNSIGNED DEFAULT NULL,
  `anak_ke` tinyint(2) UNSIGNED DEFAULT NULL,
  `status` char(20) DEFAULT NULL,
  `bahasa` char(70) DEFAULT NULL,
  `agama` char(10) DEFAULT NULL,
  `tanggal_diterima` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `others`
--

INSERT INTO `others` (`id`, `WN`, `asal_sekolah`, `alamat_asal_sekolah`, `kelas_pertama`, `jumlah_saudara`, `anak_ke`, `status`, `bahasa`, `agama`, `tanggal_diterima`) VALUES
(3, 'Indonesia', 'Tk Tunas Bangsa', 'Jl. Arteri Km2', '1', 3, 1, NULL, 'Indonesia', 'Kristen', '2017-05-07'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Indonesia', 'Gembala Baik', 'Jl. Tanjungpura', '1', 3, 1, NULL, 'Indonesia', 'Kristen', '2017-05-12');

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

--
-- Dumping data untuk tabel `staf`
--

INSERT INTO `staf` (`id`, `name`, `hire_date`, `end_contract`, `place_birth`, `date_birth`, `email`, `phone_number`, `wa`, `bbm`, `status`) VALUES
(3, 'Willy', '2017-08-02', '2017-08-31', 'Singkawang', '1996-10-05', 'willychai05@gmail.com', '08985935425', '08985935425', NULL, 'ICT'),
(4, 'rina', '2017-08-08', '2017-08-31', 'asdf', '2017-08-24', NULL, NULL, NULL, NULL, 'TU');

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
  `generation` tinyint(3) UNSIGNED DEFAULT NULL,
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `user`, `pass`) VALUES
(3, 'willychai05@gmail.com', '23f3094a2cd4633873918960bef54ab6cd7f3340'),
(4, 'rina', '70e21878d268fa8f82817f9278f8bae0fb108950');

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
  ADD PRIMARY KEY (`dad_id`);

--
-- Indexes for table `generation`
--
ALTER TABLE `generation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`guardian_id`);

--
-- Indexes for table `mom`
--
ALTER TABLE `mom`
  ADD PRIMARY KEY (`mom_id`);

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
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `generation`
--
ALTER TABLE `generation`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `staf`
--
ALTER TABLE `staf`
  MODIFY `id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dad`
--
ALTER TABLE `dad`
  ADD CONSTRAINT `dad_ibfk_1` FOREIGN KEY (`dad_id`) REFERENCES `students` (`id`);

--
-- Ketidakleluasaan untuk tabel `guardian`
--
ALTER TABLE `guardian`
  ADD CONSTRAINT `guardian_ibfk_1` FOREIGN KEY (`guardian_id`) REFERENCES `students` (`id`);

--
-- Ketidakleluasaan untuk tabel `mom`
--
ALTER TABLE `mom`
  ADD CONSTRAINT `mom_ibfk_1` FOREIGN KEY (`mom_id`) REFERENCES `students` (`id`);

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
