-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Des 2016 pada 03.58
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `consulting`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `ID` char(8) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Poli` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`ID`, `Nama`, `Password`, `Email`, `Poli`) VALUES
('sucipto', 'Cipto Mangokusumo', 'coba', 'cipto@gmail.com', 'Umum'),
('tiara', 'Tiarani Siregar', 'coba', 'tiara@gmail.com', 'Anak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE IF NOT EXISTS `identitas` (
  `ID` char(8) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`ID`, `Nama`, `Password`, `Email`) VALUES
('Andi', 'Andi Andika', 'coba', 'andi@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_dokter`
--

CREATE TABLE IF NOT EXISTS `pesan_dokter` (
  `ID_pesandokter` int(10) NOT NULL,
  `ID_pas` char(8) NOT NULL,
  `nama_dok` char(30) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `tgl_pesan` date NOT NULL,
  `pesan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan_dokter`
--

INSERT INTO `pesan_dokter` (`ID_pesandokter`, `ID_pas`, `nama_dok`, `judul`, `tgl_kunjungan`, `tgl_pesan`, `pesan`) VALUES
(1234567890, 'Andi', 'Tiarani Siregar', 'Re:Obat tidak cocok', '2016-12-20', '2016-12-26', 'Setelah melihat riwayat penyakit anak anda dan daftar obat yang sebelumnya saya berikan, saya simpulkan bahwa anak anda memiliki kecenderungan resistant terhadap zat kimia X. oleh karena itu, harap mengurangi dosis menjadi 1 butir sehari sehabis makan.'),
(1234567891, 'Andi', 'Tiarani Siregar', 'Re : mata sakit', '2016-12-09', '2016-12-27', 'pakai insto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_pasien`
--

CREATE TABLE IF NOT EXISTS `pesan_pasien` (
  `ID_pesan` int(10) NOT NULL,
  `ID_pas` char(8) NOT NULL,
  `nama_dok` char(30) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `tgl_pesan` date NOT NULL,
  `pesan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan_pasien`
--

INSERT INTO `pesan_pasien` (`ID_pesan`, `ID_pas`, `nama_dok`, `judul`, `tgl_kunjungan`, `tgl_pesan`, `pesan`) VALUES
(1234567890, 'andi', 'Tiarani Siregar', 'Obat tidak cocok ', '2016-12-20', '2016-12-26', 'Obat menimbulkan alergi pada kulit anak. Timbul bercak di tangan, berwarna merah, dan gatal. Mohon bantuannya.'),
(1234567891, 'Andi', 'Cipto Mangokusumo', 'Muncul gejala lain ', '2016-12-08', '2016-12-26', 'setelah 1 minggu rutin minum obat muncul gejala tambahan yaitu perut perih dan batuh kering. Terima Kasih'),
(1234567892, 'Andi', 'Tiarani Siregar', 'terima kasih', '2016-12-20', '2016-12-26', 'terimakasih atas sarannya. Kondisi anak saya membaik'),
(1234567893, 'Andi', 'Tiarani Siregar', 'mata', '0000-00-00', '2016-12-27', 'mata merah '),
(1234567894, 'Andi', 'Tiarani Siregar', 'mata sakit', '2016-12-09', '2016-12-27', 'mata sakit gatal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pesan_dokter`
--
ALTER TABLE `pesan_dokter`
 ADD PRIMARY KEY (`ID_pesandokter`);

--
-- Indexes for table `pesan_pasien`
--
ALTER TABLE `pesan_pasien`
 ADD PRIMARY KEY (`ID_pesan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
