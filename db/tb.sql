-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2017 at 12:41 AM
-- Server version: 10.1.25-MariaDB
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
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` tinyint(2) UNSIGNED NOT NULL,
  `name` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`) VALUES
(1, 'P1 Empathy'),
(2, 'P1 Integrity');

-- --------------------------------------------------------

--
-- Table structure for table `dad`
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

--
-- Dumping data for table `dad`
--

INSERT INTO `dad` (`dad_id`, `dad_name`, `dad_place_birth`, `dad_date_birth`, `dad_job`, `dad_address`, `dad_office`, `dad_phone_number`, `dad_wa`, `dad_bbm`, `dad_email`, `dad_last_education`, `dad_nationality`, `dad_religion`) VALUES
(1, 'Imran Kurniawan', 'Ketapang', '1975-04-20', 'Wiraswasta', 'Jl. Adisucipto No. 269', '', '082254960000', '', '', '', 'D3', 'Indonesia', 'Islam'),
(2, 'Marinus', 'Aek Tarutung', '1970-05-22', '', 'Jl. S.A Saleh Gg. Sawit No.5', '', '0811572060', '', '', '', 'D3', 'Indonesia', 'Katolik'),
(3, 'Resa', 'Pontianak', '1975-12-11', 'Karyawan Swasta', 'Jl. Parit Husin 2, Gg. Lestari No.99', 'Jl. Karna Sosial Gg.Purwosari', '08125794175', '', '', '', 'SLTA', 'Indonesia', 'Islam'),
(4, 'Hong Hendry', 'Teluk Kumpai', '1982-04-11', 'Wira Swasta', 'Jl. Kuala Dua', '', '', '', '5b60418b', '5b60418b', 'S1', 'Indonesia', 'Buddha'),
(5, 'T. Wisero', 'Bandung', '1977-01-01', 'Wirausaha', 'Jl. Parit Husin 2 Komplek Meranti Indah Blok E.8', 'Jl. Parit Husin 2 Komplek Meranti Indah Blok E.8', '08125639007', '', '', '', 'S1', 'Indonesia', 'Islam');

-- --------------------------------------------------------

--
-- Table structure for table `generation`
--

CREATE TABLE `generation` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `generation` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generation`
--

INSERT INTO `generation` (`id`, `generation`) VALUES
(1, '2017/2018');

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `guardian_id` smallint(5) UNSIGNED NOT NULL,
  `guardian_name` char(50) DEFAULT NULL,
  `guardian_place_birth` char(30) DEFAULT NULL,
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

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`guardian_id`, `guardian_name`, `guardian_place_birth`, `guardian_date_birth`, `guardian_job`, `guardian_address`, `guardian_office`, `guardian_phone_number`, `guardian_wa`, `guardian_bbm`, `guardian_email`, `guardian_last_education`, `guardian_nationality`, `guardian_religion`, `guardian_relationship`) VALUES
(1, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(2, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(3, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'Eddy Susanto', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mom`
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

--
-- Dumping data for table `mom`
--

INSERT INTO `mom` (`mom_id`, `mom_name`, `mom_place_birth`, `mom_date_birth`, `mom_job`, `mom_address`, `mom_office`, `mom_phone_number`, `mom_wa`, `mom_bbm`, `mom_email`, `mom_last_education`, `mom_nationality`, `mom_religion`) VALUES
(1, 'Ita Kusmiyati', 'Pontianak', '1975-05-16', 'Ibu Rumah Tanggaa', '', '', '082152050500', '', '', '', 'S1', 'Indonesia', 'Islam'),
(2, 'Juliana Lianto', 'Pontianak', '1971-12-29', 'Swasta', 'Jl. S.A Saleh Gg. Sawit No.5', 'Jl. Hos. Cokroaminoto No.445', '0811565357', '', '', '', 'S1', 'Indonesia', 'Katolik'),
(3, 'Novita Matita', 'Pontianak', '1978-11-04', 'Ibu Rumah Tangga', 'Jl. Parit Husin 2, Gg.Lestari No.99', '', '0813522546', '', '5b9f32c2', '5b9f32c2', 'SLTA', 'Indonesia', 'Islam'),
(4, 'Ellisabeth', 'Pontianak', '1987-03-09', 'Ibu Rumah Tangga', 'Jl. Kuala Dua', '', '08524663768', '', '542bd9ca', '542bd9ca', 'D3', 'Indonesia', 'Buddha'),
(5, 'Helvira', 'Mempawah', '1980-06-25', 'Wirausaha', 'Jl. Parit Husin 2 Komplek Meranti Indah Blok E.8', 'Jl. Parit Husin 2 Komplek Meranti Indah Blok E.8', '08125639414', '', '', '', 'SMA', 'Indonesia', 'Islam');

-- --------------------------------------------------------

--
-- Table structure for table `others`
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
  `agama` char(16) DEFAULT NULL,
  `tanggal_diterima` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `WN`, `asal_sekolah`, `alamat_asal_sekolah`, `kelas_pertama`, `jumlah_saudara`, `anak_ke`, `status`, `bahasa`, `agama`, `tanggal_diterima`) VALUES
(1, 'Indonesia', '', '', '1', 1, 2, NULL, 'Indonesia', 'Islam', '2017-07-17'),
(2, 'Indonesia', 'Tunas Bangsa', '', '1', 1, 2, NULL, 'Indonesia', 'Katolik', '2017-07-17'),
(3, 'Indonesia', 'Gifted Kids Montessori School', 'Jl. Budi Karya', '1', 2, 3, NULL, 'Indonesia', 'Islam', '2017-07-17'),
(4, 'Indonesia', 'ABC123', '', '1', 3, 1, NULL, 'Indonesia', 'Buddha', '2017-07-17'),
(5, 'Indonesia', 'Tunas Bangsa', '', '1', 2, 2, NULL, 'Indonesia', 'Islam', '2017-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `staf`
--

CREATE TABLE `staf` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` char(50) NOT NULL,
  `staf_hire_date` date NOT NULL,
  `staf_end_contract` date NOT NULL,
  `staf_place_birth` char(50) NOT NULL,
  `staf_date_birth` date NOT NULL,
  `staf_status` tinyint(2) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staf`
--

INSERT INTO `staf` (`id`, `name`, `staf_hire_date`, `staf_end_contract`, `staf_place_birth`, `staf_date_birth`, `staf_status`) VALUES
(2, 'Willy', '2017-08-01', '2017-08-31', 'Singkawang', '2017-08-03', 1),
(5, 'abc', '2017-09-09', '2017-09-10', 'aa', '2017-09-08', 6),
(6, 'xyz', '2017-09-03', '2017-09-07', 'xyz', '2017-09-03', 4),
(7, 'rina', '2017-09-11', '2017-09-30', 'Pontianak', '2017-09-30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `staf_contact`
--

CREATE TABLE `staf_contact` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `staf_email` char(50) DEFAULT NULL,
  `staf_phone_number` char(12) DEFAULT NULL,
  `staf_bbm` char(10) DEFAULT NULL,
  `staf_wa` char(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staf_contact`
--

INSERT INTO `staf_contact` (`id`, `staf_email`, `staf_phone_number`, `staf_bbm`, `staf_wa`) VALUES
(2, 'willychai05@gmail.com', '08985935425', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staf_status`
--

CREATE TABLE `staf_status` (
  `id` tinyint(2) UNSIGNED NOT NULL,
  `staf_status` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staf_status`
--

INSERT INTO `staf_status` (`id`, `staf_status`) VALUES
(1, 'ICT'),
(2, 'TU'),
(3, 'root'),
(4, 'PYP'),
(5, 'Art'),
(6, 'Guru'),
(7, 'Music'),
(8, 'Religion'),
(9, 'Olahraga');

-- --------------------------------------------------------

--
-- Table structure for table `students`
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

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `nis`, `nisn`, `sex`, `place_birth`, `date_birth`, `generation`, `class_id`) VALUES
(1, 'Brigitha Ratu Almira Kusmiyati', 65535, '', 'F', 'Pontianak', '2012-01-04', 1, 1),
(2, 'Claudya Zendrato', 65535, '', 'F', 'Pontianak', '2012-01-07', 1, 1),
(3, 'Edelweis Adninda', 65535, '', 'F', 'Pontianak', '2010-08-04', 1, 1),
(4, 'Evelyn Jasmine Wong', 65535, '', 'F', 'Pontianak', '2012-08-12', 1, 2),
(5, 'Arista Ariella Wiseso', 65535, '', 'F', 'Pontianak', '2011-01-24', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user` char(30) NOT NULL,
  `pass` char(100) NOT NULL,
  `staf_id` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user`, `pass`, `staf_id`) VALUES
('rina', '70e21878d268fa8f82817f9278f8bae0fb108950', 7),
('willy', '990c37a323daf1549bdd24197927625080ee16b8', 2);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `staf_status` (`staf_status`);

--
-- Indexes for table `staf_contact`
--
ALTER TABLE `staf_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staf_status`
--
ALTER TABLE `staf_status`
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
  ADD PRIMARY KEY (`user`),
  ADD KEY `staf_id` (`staf_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `generation`
--
ALTER TABLE `generation`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `staf`
--
ALTER TABLE `staf`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `staf_status`
--
ALTER TABLE `staf_status`
  MODIFY `id` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dad`
--
ALTER TABLE `dad`
  ADD CONSTRAINT `dad_ibfk_1` FOREIGN KEY (`dad_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `guardian`
--
ALTER TABLE `guardian`
  ADD CONSTRAINT `guardian_ibfk_1` FOREIGN KEY (`guardian_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `mom`
--
ALTER TABLE `mom`
  ADD CONSTRAINT `mom_ibfk_1` FOREIGN KEY (`mom_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `others`
--
ALTER TABLE `others`
  ADD CONSTRAINT `others_ibfk_1` FOREIGN KEY (`id`) REFERENCES `students` (`id`);

--
-- Constraints for table `staf`
--
ALTER TABLE `staf`
  ADD CONSTRAINT `staf_ibfk_1` FOREIGN KEY (`staf_status`) REFERENCES `staf_status` (`id`);

--
-- Constraints for table `staf_contact`
--
ALTER TABLE `staf_contact`
  ADD CONSTRAINT `staf_contact_ibfk_1` FOREIGN KEY (`id`) REFERENCES `staf` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`staf_id`) REFERENCES `staf` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
