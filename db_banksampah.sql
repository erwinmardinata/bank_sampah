-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Okt 2015 pada 15.56
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_banksampah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nasabah`
--

CREATE TABLE IF NOT EXISTS `tbl_nasabah` (
`id_nasabah` int(11) NOT NULL,
  `no_rekening` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `rt_rw_kelas` varchar(50) NOT NULL,
  `kelurahan_sekolah` varchar(50) NOT NULL,
  `kelompok` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `tanggal_daftar` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_nasabah`
--

INSERT INTO `tbl_nasabah` (`id_nasabah`, `no_rekening`, `nama`, `rt_rw_kelas`, `kelurahan_sekolah`, `kelompok`, `jenis`, `tanggal_daftar`) VALUES
(1, '00001BSN01', 'Erwin Mardinata', 'RT 002 / RW 001 / Kelas 5', 'Sebewe / SDN Sebewe', '-', '-', '2015-09-24'),
(2, '00002BSN01', 'Kiki Putrawan', 'RT 002 / RW 001 / Kelas 5', 'Sebewe / SDN Sebewe', '-', '-', '2015-09-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tabungannasabah`
--

CREATE TABLE IF NOT EXISTS `tbl_tabungannasabah` (
`id` int(11) NOT NULL,
  `no_rekening` char(10) NOT NULL,
  `debit` int(11) NOT NULL DEFAULT '0',
  `kredit` int(11) NOT NULL DEFAULT '0',
  `saldo` int(20) NOT NULL DEFAULT '0',
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tabungannasabah`
--

INSERT INTO `tbl_tabungannasabah` (`id`, `no_rekening`, `debit`, `kredit`, `saldo`, `tanggal`) VALUES
(1, '00001BSN01', 0, 0, 0, '2015-09-24'),
(2, '00002BSN01', 0, 0, 0, '2015-09-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_nasabah`
--
ALTER TABLE `tbl_nasabah`
 ADD PRIMARY KEY (`id_nasabah`,`no_rekening`);

--
-- Indexes for table `tbl_tabungannasabah`
--
ALTER TABLE `tbl_tabungannasabah`
 ADD PRIMARY KEY (`id`), ADD KEY `id_nasabah` (`no_rekening`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_nasabah`
--
ALTER TABLE `tbl_nasabah`
MODIFY `id_nasabah` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_tabungannasabah`
--
ALTER TABLE `tbl_tabungannasabah`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
