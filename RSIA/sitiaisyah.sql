-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 03:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitiaisyah`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `pengumum` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `keterangan`, `pengumum`) VALUES
(1, 'Covid', 'Web Sudah Jadi', 'Alvan'),
(2, 'Covid2', 'Program ruang obat ', 'Andra'),
(3, 'Gawat', 'Covid sudah tidak ada', 'Andre'),
(4, 'Setiap Kamis Absen', 'Akan ada demo', 'Mas Ahmad'),
(5, 'Covid', 'lorem ipsauasihasjnbnjs as jasdhsahidhsid aas doshaoidsahodisahlorem ipsauasihasjnbnjs as jasdhsahidhsid aas doshaoidsahodisahlorem ipsauasihasjnbnjs as jasdhsahidhsid aas doshaoidsahodisahlorem ipsauasihasjnbnjs as jasdhsahidhsid aas doshaoidsahodisahlor', 'Andra'),
(6, 'dawdawd', 'dwdawd', 'andreansayh');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id_daftar` int(11) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `alamat_pasien` varchar(50) NOT NULL,
  `no_pasien` varchar(12) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id_daftar`, `nama_pasien`, `alamat_pasien`, `no_pasien`, `nama_dokter`) VALUES
(1, 'Andre', 'Rumah', '123', 'dr. Abdul Rohim, Sp.A | Spesialis Anak'),
(2, 'alvan', 'Rumah', '123', 'dr. H. Muhammad Nadir Abdul , Sp.OG | Spesialis Ka'),
(4, 'alvansyah', 'Rumah', '12356', 'dr. Abdul Rohim, Sp.A | Spesialis Anak'),
(5, 'budi coba', 'mrutu', '031', 'dr. Abdul Rohim, Sp.A | Spesialis Anak');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `tipedokter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `tipedokter`) VALUES
(1, 'dr. Abdul Rohim, Sp.A', 'Spesialis Anak'),
(2, 'dr. AH.B.Rudyanto, Sp.A', 'Spesialis Anak'),
(3, 'dr. H. Muhammad Nadir Abdul , Sp.OG', 'Spesialis Kandungan'),
(4, 'dr.Didi D.Dewanto, Sp.OG', 'Spesialis Kandungan');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `praktik`
--

CREATE TABLE `praktik` (
  `id_praktik` varchar(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `jam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `praktik`
--

INSERT INTO `praktik` (`id_praktik`, `id_dokter`, `hari`, `jam`) VALUES
('PRAK1', 1, 'Senin & Rabu', '18.00 - Selesai'),
('PRAK2', 2, 'Senin & Sabtu', '07.00 - 09.00'),
('PRAK3', 2, 'Senin, Rabu & Jumat', '17.00 - Selesai'),
('PRAK4', 4, 'Senin, Rabu & Jumat', '19.00 - Selesai'),
('PRAK5', 4, 'Sabtu', '09.00 - Selesai'),
('PRAK6', 3, 'Selasa & Kamis', '19.00 - Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tanyajawab`
--

CREATE TABLE `tanyajawab` (
  `id_tanya` int(11) NOT NULL,
  `Pertanyaan` varchar(255) NOT NULL,
  `Jawaban` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanyajawab`
--

INSERT INTO `tanyajawab` (`id_tanya`, `Pertanyaan`, `Jawaban`) VALUES
(1, 'Bagaimana Cara membuat perjanjian dengan dokter?', 'Halo Pelanggan Klinik Utama Rawat Inap & Bersalin Siti Aisyah Jika Anda ingin membuat janji dengan dokter kami, Dengan telepon petugas klinik Utama Rawat Inap & Bersalin Siti Aisyah.'),
(2, 'Apakah Klinik Utama Rawat Inap & Bersalin Siti Aisyah, Buka 24 Jam ?', 'Halo Pelanggan Klinik Utama Rawat Inap & Bersalin Siti Aisyah untuk UGD Buka 24 Jam. Terima kasih..'),
(3, 'Bagaimana untuk mengetahui jadwal dokter praktek?', 'Halo Pelanggan Klinik Utama Rawat Inap & Bersalin Siti Aisyah, untuk mengetahui jadwal praktek bisa melihat website yang telah dibuat atau menghubungi pihak Klinik Utama Rawat Inap & Bersalin Siti Aisyah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `praktik`
--
ALTER TABLE `praktik`
  ADD PRIMARY KEY (`id_praktik`),
  ADD KEY `fk_to_dokter` (`id_dokter`);

--
-- Indexes for table `tanyajawab`
--
ALTER TABLE `tanyajawab`
  ADD PRIMARY KEY (`id_tanya`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tanyajawab`
--
ALTER TABLE `tanyajawab`
  MODIFY `id_tanya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `praktik`
--
ALTER TABLE `praktik`
  ADD CONSTRAINT `fk_to_dokter` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
