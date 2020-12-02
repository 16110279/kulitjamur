-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 02:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 5.6.40

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
  `Id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Nama_Lengkap` varchar(70) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Username`, `Nama_Lengkap`, `Password`) VALUES
(12, 'yesi123', 'Yesi', 'f014b94c35268c600ab2');

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
-- Table structure for table `data_penyakit`
--

CREATE TABLE `data_penyakit` (
  `id` int(11) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `detail_penyakit` longtext NOT NULL,
  `saran_penyakit` longtext NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_penyakit`
--

INSERT INTO `data_penyakit` (`id`, `nama_penyakit`, `detail_penyakit`, `saran_penyakit`, `gambar`) VALUES
(21, 'Tinea Capitis', 'penyakit yang disebabkan oleh infeksi jamur dermatofit pada kulit kepala dan batang rambut.	   ', 'Menggunakan sampo yang mengandung selenium sulphide povidone-iodine, atau ketoconazole. Pengobatan dengan sampo dilakukan 2 kali dalam seminggu, selama 1 bulan. Selanjutnya pasien dianjurkan untuk menemui dokter kembali.	\r\n   ', '0dbd5d1d063de6c4ac7b43353787236b.jpg'),
(24, 'Otomycosis', 'Otomikosis adalah infeksi pada telinga yang disebabkan oleh jamur. Infeksi ini bisa menyerang salah satu atau kedua telinga.	', 'Pemberian obat antijamur dalam bentuk tetes telinga akan diberikan untuk memberantas jamur dan menyembuhkan infeksi. Contohnya, econazole, miconazole, dan amfoterisin B. Obat-obat ini bisa berbentuk obat topikal (oles) maupun obat tetes telinga.	\r\n', '5aefd6ec14eefac5fe49e73a9c93622c.jpg'),
(26, 'Tinea versicolor', 'Tinea versicolor atau biasa disebut juga panu. Panu merupakan infeksi akibat jamur Malassezia yang ditemukan pada permukaan kulit.	  ', 'Pemberian Krim dan lotion yang mengandung selenium sulfide, ketoconazole, atau pyrithione zinc yaitu Gel terbinafine, Krim ciclopirox, Larutan natrium tiosulfat. Dengan selang waktu antara 3 hari atau sekitar 2 minggu, tergantung tingkat keparahan panu.	\r\n  ', '04fdaeaa70c83bb85e70cd9bc51d6151.jpg');

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
  ADD PRIMARY KEY (`Id`);

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
-- Indexes for table `data_penyakit`
--
ALTER TABLE `data_penyakit`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data_penyakit`
--
ALTER TABLE `data_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
