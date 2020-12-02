-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 01:47 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kulitjamur_cf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) DEFAULT NULL,
  `Username` varchar(50) NOT NULL,
  `Nama_Lengkap` varchar(70) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_hasil`
--

CREATE TABLE `analisa_hasil` (
  `Id_hasil` varchar(50) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Tanggal` date NOT NULL,
  `Penyakit` varchar(500) NOT NULL,
  `Gejala` varchar(500) NOT NULL,
  `Hasil_id` varchar(50) NOT NULL,
  `Hasil_nilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `basis_pengetahuan`
--

CREATE TABLE `basis_pengetahuan` (
  `Kode_pengetahuan` varchar(50) NOT NULL,
  `Kode_penyakit` varchar(50) NOT NULL,
  `Kode_gejala` varchar(50) NOT NULL,
  `MB` varchar(50) NOT NULL,
  `MD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `Kode_gejala` varchar(50) NOT NULL,
  `Nama_gejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `id` int(11) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `kondisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_pasien`
--

CREATE TABLE `login_pasien` (
  `Nama` varchar(100) NOT NULL,
  `Tempat_lahir` varchar(100) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Umur` varchar(20) NOT NULL,
  `Jenis_kelamin` varchar(20) NOT NULL,
  `Wali` varchar(100) NOT NULL,
  `No_hp` varchar(20) NOT NULL,
  `Pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `Kode_penyakit` varchar(15) NOT NULL,
  `Nama_penyakit` varchar(100) NOT NULL,
  `Detail_penyakit` text NOT NULL,
  `Saran_penyakit` text NOT NULL,
  `Gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_keterangan`
--

CREATE TABLE `post_keterangan` (
  `Kode_post` varchar(50) NOT NULL,
  `Nama_post` varchar(100) NOT NULL,
  `Detail_post` text NOT NULL,
  `Saran_post` text NOT NULL,
  `Gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `analisa_hasil`
--
ALTER TABLE `analisa_hasil`
  ADD PRIMARY KEY (`Id_hasil`,`Penyakit`,`Gejala`),
  ADD KEY `Gejala` (`Gejala`),
  ADD KEY `Penyakit` (`Penyakit`);

--
-- Indexes for table `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  ADD PRIMARY KEY (`Kode_pengetahuan`,`Kode_penyakit`,`Kode_gejala`),
  ADD KEY `Kode_gejala` (`Kode_gejala`),
  ADD KEY `Kode_penyakit` (`Kode_penyakit`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`Kode_gejala`);

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_pasien`
--
ALTER TABLE `login_pasien`
  ADD PRIMARY KEY (`Nama`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`Kode_penyakit`);

--
-- Indexes for table `post_keterangan`
--
ALTER TABLE `post_keterangan`
  ADD PRIMARY KEY (`Kode_post`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `analisa_hasil`
--
ALTER TABLE `analisa_hasil`
  ADD CONSTRAINT `analisa_hasil_ibfk_1` FOREIGN KEY (`Gejala`) REFERENCES `gejala` (`Kode_gejala`),
  ADD CONSTRAINT `analisa_hasil_ibfk_2` FOREIGN KEY (`Penyakit`) REFERENCES `penyakit` (`Kode_penyakit`);

--
-- Constraints for table `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  ADD CONSTRAINT `basis_pengetahuan_ibfk_1` FOREIGN KEY (`Kode_gejala`) REFERENCES `gejala` (`Kode_gejala`),
  ADD CONSTRAINT `basis_pengetahuan_ibfk_2` FOREIGN KEY (`Kode_penyakit`) REFERENCES `penyakit` (`Kode_penyakit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
