-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3000
-- Generation Time: Jan 17, 2024 at 03:30 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suratapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dakel`
--

CREATE TABLE `tb_dakel` (
  `id_dakel` int NOT NULL,
  `id_kk` bigint NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dakel`
--

INSERT INTO `tb_dakel` (`id_dakel`, `id_kk`, `nama`, `jenis_kelamin`, `tgl_lahir`, `nama_ayah`, `nama_ibu`) VALUES
(7, 7, 'Indah Mujianti', 'perempuan', '2023-06-01', 'H. Syarifuddin', 'Syamsiah'),
(8, 10, 'Berlian Kristina Palipangan', 'perempuan', '2016-02-17', 'Robby Palipangan', 'Rachel Novianty');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dakem`
--

CREATE TABLE `tb_dakem` (
  `id_dakem` int NOT NULL,
  `nik` bigint NOT NULL,
  `tgl_kematian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dakem`
--

INSERT INTO `tb_dakem` (`id_dakem`, `nik`, `tgl_kematian`) VALUES
(5, 7371076503730009, '2023-06-21'),
(6, 730901050200003, '2023-06-02'),
(7, 7371114311756001, '2017-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dapen`
--

CREATE TABLE `tb_dapen` (
  `nik` bigint NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status_kawin` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kewarganegaraan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kode_pos` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dapen`
--

INSERT INTO `tb_dapen` (`nik`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `pendidikan`, `pekerjaan`, `status_kawin`, `kewarganegaraan`, `kode_pos`) VALUES
(730901050200003, 'A. Kautsar Syahban', 'laki-laki', 'Maros', '2000-02-09', 'islam', 'S1', 'WIRASWASTA', 'menikah', 'WNI', 0),
(5206085405880001, 'TITI KUSMIATI ', 'laki-laki', 'SIRU', '1994-06-13', 'islam', 'S1', 'PNS', 'belum menikah', 'WNI', 0),
(7371010005800006, 'Hasanuddin Dg. Sijaya', 'laki-laki', 'Ujung Pandang', '1990-05-05', 'islam', 'S1', 'PNS', 'menikah', 'WNI', 0),
(7371073003730009, 'H. Syarifuddin', 'laki-laki', 'Pangkep', '1973-03-30', 'islam', 'SMA', 'Nelayan', 'menikah', 'WNI', 0),
(7371073903200062, 'Rahman Abdullah', 'laki-laki', 'Barru', '1999-06-08', 'islam', 'S1', 'PNS', 'menikah', 'WNI', 0),
(7371075609020009, 'Divayana Mathar', 'perempuan', 'Makassar', '2002-09-16', 'islam', 'SMK', 'Pelajar/Mahasiswa', 'belum menikah', 'WNI', 0),
(7371076503730009, 'Syamsiah', 'perempuan', 'Maros', '1976-05-20', 'islam', 'D3', 'GURU ', 'menikah', 'WNI', 0),
(7371112509680002, 'Robby Palipangan, S.E., M.Si', 'laki-laki', 'Palopo', '1966-09-25', 'protestan', 'S2', 'WIRASWASTA', 'menikah', 'WNI', 0),
(7371114311756001, 'Rachel Noviyanti', 'perempuan', 'Jakarta', '1975-11-03', 'protestan', 'D3', 'IRT', 'menikah', 'WNI', 0),
(7371114810020003, 'Byanca Kinan Palipangan', 'perempuan', 'Bekasi', '2002-10-08', 'protestan', 'SMK', 'Pelajar/Mahasiswa', 'belum menikah', 'WNI', 0),
(7371130708110002, 'Bhenedict Keivran Palipangan', 'laki-laki', 'Makassar', '2011-08-07', 'protestan', 'SD', 'Pelajar/Mahasiswa', 'belum menikah', 'WNI', 0),
(7371134305020011, 'Annisa Rezdky Andini AB.', 'perempuan', 'Makassar', '2002-05-03', 'islam', 'SMK', 'Pelajar/Mahasiswa', 'belum menikah', 'WNI', 90223),
(7371136794090002, 'Belinda Kiara Palipangan', 'perempuan', 'Makassar', '2009-04-27', 'islam', 'SMP', 'Pelajar/Mahasiswa', 'belum menikah', 'WNI', 0),
(73710100512630003, 'Naharuddin Dg. Katti', 'laki-laki', 'Takalar', '1963-12-05', 'islam', 'SMA', 'Petani', 'menikah', 'WNI', 0),
(73710110005920005, 'Muh Akbar', 'laki-laki', 'Makassar', '1992-05-10', 'islam', 'S1', 'WIRASWASTA', 'belum menikah', 'WNI', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kk`
--

CREATE TABLE `tb_kk` (
  `id_kk` bigint NOT NULL,
  `no_kk` bigint NOT NULL,
  `nik` bigint NOT NULL,
  `shdk` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kk`
--

INSERT INTO `tb_kk` (`id_kk`, `no_kk`, `nik`, `shdk`) VALUES
(7, 730809110808002, 7371073003730009, 'Kepala Keluarga'),
(8, 7371111608030188, 7371075609020009, 'Anak'),
(9, 5315031911150001, 5206085405880001, 'Anak'),
(10, 7371111608030188, 7371112509680002, 'Kepala Keluarga'),
(11, 7371111608030188, 7371114311756001, 'Istri');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mutasi`
--

CREATE TABLE `tb_mutasi` (
  `id_mutasi` int NOT NULL,
  `nik` bigint NOT NULL,
  `tgl_mutasi` date NOT NULL,
  `mutasi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_mutasi`
--

INSERT INTO `tb_mutasi` (`id_mutasi`, `nik`, `tgl_mutasi`, `mutasi`) VALUES
(5, 7371076503730009, '2023-06-17', 'KELUAR'),
(6, 73710110005920005, '2019-05-22', 'MASUK');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suratktp`
--

CREATE TABLE `tb_suratktp` (
  `no_surat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nik` bigint NOT NULL,
  `tgl_surat` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_suratktp`
--

INSERT INTO `tb_suratktp` (`no_surat`, `nik`, `tgl_surat`, `status`) VALUES
('1', 730901050200003, '2023-06-22', 'dalam proses'),
('2', 7371073903200062, '2023-04-19', 'dalam proses'),
('3', 5206085405880001, '2023-06-22', 'dalam proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suratlahir`
--

CREATE TABLE `tb_suratlahir` (
  `no_surat` int NOT NULL,
  `id_kk` bigint NOT NULL,
  `tgl_surat` date NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_suratlahir`
--

INSERT INTO `tb_suratlahir` (`no_surat`, `id_kk`, `tgl_surat`, `status`) VALUES
(1, 7, '2023-05-16', 'dalam proses'),
(11, 7, '2023-06-22', 'dalam proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suratmati`
--

CREATE TABLE `tb_suratmati` (
  `no_surat` int NOT NULL,
  `nik` bigint NOT NULL,
  `tgl_surat` date NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_suratmati`
--

INSERT INTO `tb_suratmati` (`no_surat`, `nik`, `tgl_surat`, `status`) VALUES
(1, 7371114311756001, '2023-06-22', 'selesai'),
(2, 7371076503730009, '2023-06-22', 'dalam proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suratmutasi`
--

CREATE TABLE `tb_suratmutasi` (
  `no_surat` int NOT NULL,
  `nik` bigint NOT NULL,
  `tgl_surat` date NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_suratmutasi`
--

INSERT INTO `tb_suratmutasi` (`no_surat`, `nik`, `tgl_surat`, `status`) VALUES
(470, 7371076503730009, '2023-06-22', 'dalam proses');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'admin', '$2y$12$IHMJ6Z7PdNpraMoq4iHgHOGcJscftpnUYB4lZHQEDyNe/nUracQxe', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dakel`
--
ALTER TABLE `tb_dakel`
  ADD PRIMARY KEY (`id_dakel`),
  ADD KEY `id_kk` (`id_kk`);

--
-- Indexes for table `tb_dakem`
--
ALTER TABLE `tb_dakem`
  ADD PRIMARY KEY (`id_dakem`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_dapen`
--
ALTER TABLE `tb_dapen`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tb_kk`
--
ALTER TABLE `tb_kk`
  ADD PRIMARY KEY (`id_kk`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_mutasi`
--
ALTER TABLE `tb_mutasi`
  ADD PRIMARY KEY (`id_mutasi`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_suratktp`
--
ALTER TABLE `tb_suratktp`
  ADD PRIMARY KEY (`no_surat`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_suratlahir`
--
ALTER TABLE `tb_suratlahir`
  ADD PRIMARY KEY (`no_surat`),
  ADD KEY `id_kk` (`id_kk`);

--
-- Indexes for table `tb_suratmati`
--
ALTER TABLE `tb_suratmati`
  ADD PRIMARY KEY (`no_surat`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_suratmutasi`
--
ALTER TABLE `tb_suratmutasi`
  ADD PRIMARY KEY (`no_surat`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dakel`
--
ALTER TABLE `tb_dakel`
  MODIFY `id_dakel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_dakem`
--
ALTER TABLE `tb_dakem`
  MODIFY `id_dakem` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_kk`
--
ALTER TABLE `tb_kk`
  MODIFY `id_kk` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_mutasi`
--
ALTER TABLE `tb_mutasi`
  MODIFY `id_mutasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_dakel`
--
ALTER TABLE `tb_dakel`
  ADD CONSTRAINT `tb_dakel_ibfk_1` FOREIGN KEY (`id_kk`) REFERENCES `tb_kk` (`id_kk`);

--
-- Constraints for table `tb_dakem`
--
ALTER TABLE `tb_dakem`
  ADD CONSTRAINT `tb_dakem_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_dapen` (`nik`);

--
-- Constraints for table `tb_kk`
--
ALTER TABLE `tb_kk`
  ADD CONSTRAINT `tb_kk_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_dapen` (`nik`);

--
-- Constraints for table `tb_mutasi`
--
ALTER TABLE `tb_mutasi`
  ADD CONSTRAINT `tb_mutasi_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_dapen` (`nik`);

--
-- Constraints for table `tb_suratktp`
--
ALTER TABLE `tb_suratktp`
  ADD CONSTRAINT `tb_suratktp_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_dapen` (`nik`);

--
-- Constraints for table `tb_suratlahir`
--
ALTER TABLE `tb_suratlahir`
  ADD CONSTRAINT `tb_suratlahir_ibfk_1` FOREIGN KEY (`id_kk`) REFERENCES `tb_kk` (`id_kk`);

--
-- Constraints for table `tb_suratmati`
--
ALTER TABLE `tb_suratmati`
  ADD CONSTRAINT `tb_suratmati_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_dapen` (`nik`);

--
-- Constraints for table `tb_suratmutasi`
--
ALTER TABLE `tb_suratmutasi`
  ADD CONSTRAINT `tb_suratmutasi_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_dapen` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
