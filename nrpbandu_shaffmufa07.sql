-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 30, 2024 at 06:55 PM
-- Server version: 10.6.17-MariaDB
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nrpbandu_shaffmufa07`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` varchar(10) NOT NULL,
  `USERNAME` varchar(128) DEFAULT NULL,
  `PASSWORD` mediumtext DEFAULT NULL,
  `LAST_LOGIN` varchar(40) DEFAULT NULL,
  `ROLE` varchar(15) DEFAULT NULL,
  `FULLNAME` varchar(128) DEFAULT NULL,
  `JENKEL` char(1) DEFAULT NULL,
  `NO_TELP` varchar(20) DEFAULT NULL,
  `ALAMAT` mediumtext DEFAULT NULL,
  `PHOTO` mediumtext DEFAULT NULL,
  `DTE_CREATED` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `USERNAME`, `PASSWORD`, `LAST_LOGIN`, `ROLE`, `FULLNAME`, `JENKEL`, `NO_TELP`, `ALAMAT`, `PHOTO`, `DTE_CREATED`) VALUES
('AD003', 'ajoh', '9e3538cef068e5780618ab4ef67ed13e', '29-03-2024 22:30:15', 'superadmin', 'AJOH', NULL, NULL, NULL, 'default.png', '2024-03-27'),
('AD004', 'Deni', 'f6f72be5600e91d4c958c4d665ef7c45', '29-03-2024 21:38:09', 'superadmin', 'Deni ramdani', NULL, NULL, NULL, 'default.png', '2024-03-27'),
('AD100', 'administrator', '200ceb26807d6bf99fd6f4f0d1ca54d4', '30-03-2024 11:41:36', 'superadmin', 'Ranran Rahayu', 'L', '081333335871', 'Jl. Griya Hamdan Asri No. 09', '241439015_10219864172050855_2803292428446604244_n.jpg', NULL),
('AD101', 'Cecep', 'e09ffc22549386ca77d1e2564d61f153', '30-03-2024 10:50:11', 'superadmin', 'Cecep s', NULL, NULL, NULL, 'default.png', '2024-03-29'),
('AD102', 'Agung', '4e6f22ae428568be58e3ad806d4dd861', NULL, 'admin', 'Agung', NULL, NULL, NULL, 'default.png', '2024-03-29'),
('AD103', 'Yudistira', '4e6f22ae428568be58e3ad806d4dd861', '30-03-2024 00:13:12', 'admin', 'Yudistira', NULL, NULL, NULL, 'default.png', '2024-03-29'),
('AD104', 'Saepuloh', '4e6f22ae428568be58e3ad806d4dd861', NULL, 'admin', 'Ustad saepuloh', NULL, NULL, NULL, 'default.png', '2024-03-29'),
('AD105', 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', '29-03-2024 23:10:09', 'admin', 'petugas', NULL, NULL, NULL, 'default.png', '2024-03-29'),
('AD106', 'Deden', '4e6f22ae428568be58e3ad806d4dd861', '30-03-2024 10:40:25', 'admin', 'Deden ramdani', NULL, NULL, NULL, 'default.png', '2024-03-30'),
('AD107', 'Pupuy', '4e6f22ae428568be58e3ad806d4dd861', '30-03-2024 10:53:01', 'admin', 'Pupuy', NULL, NULL, NULL, 'default.png', '2024-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `ID_ANGGOTA` varchar(10) NOT NULL,
  `ID_ADMIN` varchar(10) DEFAULT NULL,
  `NIK` varchar(16) DEFAULT NULL,
  `FULL_NAME` varchar(128) DEFAULT NULL,
  `TMP_LAHIR` varchar(90) DEFAULT NULL,
  `TGL_LAHIR` varchar(20) DEFAULT NULL,
  `ALAMAT` mediumtext DEFAULT NULL,
  `ALAMAT_DOMISILI` mediumtext DEFAULT NULL,
  `GENDER` char(1) DEFAULT NULL,
  `TELP` varchar(20) DEFAULT NULL,
  `FOTO` mediumtext DEFAULT 'default.png',
  `D_CREATED` date DEFAULT NULL,
  `BDG_USAHA` varchar(50) DEFAULT NULL,
  `PEKERJAAN` varchar(50) DEFAULT NULL,
  `PENDIDIKAN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`ID_ANGGOTA`, `ID_ADMIN`, `NIK`, `FULL_NAME`, `TMP_LAHIR`, `TGL_LAHIR`, `ALAMAT`, `ALAMAT_DOMISILI`, `GENDER`, `TELP`, `FOTO`, `D_CREATED`, `BDG_USAHA`, `PEKERJAAN`, `PENDIDIKAN`) VALUES
('AGT002', 'AD001', '', 'CECEP SAEPUDIN', 'BANDUNG', '12-03-1988', 'GG SIMPANG NO 17 RT 02', '', 'L', '082216917938', 'default.png', '2024-03-28', '', '', ''),
('AGT003', 'AD001', '-', 'USTAD EPUL', 'BANDUNG', '', 'GG SIMPANG', '', 'L', '', 'default.png', '2024-03-28', '', '', ''),
('AGT004', 'AD001', '-', 'AJOH', '', '', 'GG SIMPANG', '', 'L', '', 'default.png', '2024-03-28', '', '', ''),
('AGT005', 'AD001', '', 'AGUNG', '', '', 'GG SIMPANG', '', 'L', '', 'default.png', '2024-03-28', '', '', ''),
('AGT006', 'AD001', '', 'DENI RAMDANI', '', '', 'GG SIMPANG', '', 'L', '', 'default.png', '2024-03-28', '', '', ''),
('AGT007', 'AD001', '', 'GUNGUN', '', '', 'GG SIMPANG', '', 'L', '', 'default.png', '2024-03-28', '', '', ''),
('AGT008', 'AD001', '', 'DEDEN RIDWAN', '', '', 'GG SIMPANG', '', 'L', '', 'default.png', '2024-03-28', '', '', ''),
('AGT009', 'AD001', '', 'SONGO', '', '', 'GG SIMPANG', '', 'L', '', 'default.png', '2024-03-28', '', '', ''),
('AGT010', 'AD001', '', 'AHMAD SYATIBI', '', '03/28/2024', 'GG SIMPANG', '', 'L', '', 'default.png', '2024-03-28', '', '', ''),
('AGT011', 'AD001', '', 'PUPUY', '', '03/28/2024', 'Gg simpang', '', 'L', '', 'default.png', '2024-03-28', '', '', ''),
('AGT012', 'AD001', '', 'HAFIZ', '', '', '', '', 'L', '1234', 'default.png', '2024-03-29', '', '', ''),
('AGT013', 'AD001', '', 'DAFIN', '', '', '', '', 'L', '123', 'default.png', '2024-03-29', '', '', ''),
('AGT014', 'AD001', '', 'REZA', '', '', '', '', 'L', '12345', 'default.png', '2024-03-29', '', '', ''),
('AGT015', 'AD001', '', 'YUKI', '', '', '', '', 'L', '12345', 'default.png', '2024-03-29', '', '', ''),
('AGT016', 'AD001', '', 'EPUL', '', '', '', '', 'L', '12345', 'default.png', '2024-03-29', '', '', ''),
('AGT017', 'AD001', '', 'YUDISTIRA', '', '', '', '', 'L', '12345', 'default.png', '2024-03-29', '', '', ''),
('AGT018', 'AD001', '', 'HARI UTUT', '', '', '', '', 'L', '12345', 'default.png', '2024-03-29', '', '', ''),
('AGT019', 'AD001', '', 'RIZKI', '', '', '', '', 'L', '12345', 'default.png', '2024-03-29', '', '', ''),
('AGT020', 'AD001', '', 'KIKI PAK OMO', '', '', '', '', 'L', '12345', 'default.png', '2024-03-29', '', '', ''),
('AGT021', 'AD001', '', 'DEDEN SANI', '', '', '', '', 'L', '12345', 'default.png', '2024-03-29', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `ID_BUKU` varchar(10) NOT NULL,
  `ID_ADMIN` varchar(10) DEFAULT NULL,
  `TITLE` varchar(150) DEFAULT NULL,
  `AUTHOR` varchar(128) DEFAULT NULL,
  `PUBLISHER` varchar(128) DEFAULT NULL,
  `YEAR` char(4) DEFAULT NULL,
  `QTY` int(11) DEFAULT NULL,
  `KELUAR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`ID_BUKU`, `ID_ADMIN`, `TITLE`, `AUTHOR`, `PUBLISHER`, `YEAR`, `QTY`, `KELUAR`) VALUES
('BKO004', 'AD003', 'Mikrotik Kung Fu : Kitab 1', 'Rendra Towidjojo', 'PT. Jasakom', '2016', 2, 2),
('BKO006', 'AD001', 'Bisnis Online Revolution', 'Iwan Kenrianto', 'Gramedia', '2015', 2, 1),
('BKO007', 'AD001', '3 Tools Facebook Graph Gratisan', 'Suryadin Laoddang', 'Dosen Jualan', '2015', 1, 2),
('BKO008', 'AD001', 'Mengolah Database Excel', 'Sumonggo Surya', 'Andi Publisher', '2001', 0, 2),
('BKO009', 'AD001', 'Mahir Corel Draw Dalam 4 Hari', 'Yuli Kristanto S', 'Izuka Komp', '2008', 1, 2),
('BKO010', 'AD001', 'The Magic of Photoshop', 'Hendri Hendratama', 'Informatika', '2013', 4, 2),
('BKO011', 'AD001', 'Teknik Profesional Photoshop CS3', 'Rahmat Widiyanto', 'Elex Media Computindo', '2009', 2, 4),
('BKO012', 'AD001', 'Jago SEO', 'Hidayat Rahmad', 'Elex Media Computindo', '2011', 1, 2),
('BKO013', 'AD001', 'Hacking Wireless Network', 'Suryatama Udin', 'Jasakom', '2014', 6, 3),
('BKO014', 'AD001', 'Blender 3D Modelling', 'Hendri Hendratama', 'Informatika', '2015', 0, 2),
('BKO015', 'AD001', 'Aplikasi Berbasis Android', 'Hyua Hendra La', 'Moklet Publisher', '2019', 3, 1),
('BKO016', 'AD001', 'Membangun Aplikasi ASP', 'Hendro SPd', 'Moklet Publisher', '2020', 2, 2),
('BKO017', 'AD001', 'Basis Data Kebun Binatang', 'Ifa Khoirunnisa', 'Moklet Publisher', '2018', 3, 0),
('BKO018', 'AD001', 'Buku Panduan ASUS', 'Herman Dzumavo', 'Samsara', '2008', 2, 1),
('BKO019', 'AD001', 'The Power of Microsoft Edge', 'Steven Reward', 'Duston Magz', '2017', 5, 1),
('BKO020', 'AD001', 'MySQL Dasar dan Implementasi', 'Supratman Efendi', 'Ilmukom', '2014', 3, 2),
('BKO021', 'AD001', 'Nippon Against World', 'Hasirama Tadashi', 'Sung Yang', '2009', 0, 2),
('BKO022', 'AD001', 'Konfigursi Router Cisco', 'Solikin', 'Safari pub', '2019', 2, 1),
('BKO023', 'AD001', 'Fashion Paris', 'Amire Melaine', 'FranceTime', '2018', 1, 1),
('BKO024', 'AD001', 'Unreleashed Journal', 'Timothy Law', 'Askars', '2017', 4, 0),
('BKO025', 'AD010', '1 Unit Komputer Kantor', 'Bpk Undang', 'Toko Centra Computer', '2024', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pinjam`
--

CREATE TABLE `detail_pinjam` (
  `ID_DIPINJAM` int(11) NOT NULL,
  `ID_PINJAM` varchar(10) DEFAULT NULL,
  `ID_BUKU` varchar(10) DEFAULT NULL,
  `TGL_KEMBALI` date DEFAULT NULL,
  `DENDA` int(11) DEFAULT NULL,
  `STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `detail_pinjam`
--

INSERT INTO `detail_pinjam` (`ID_DIPINJAM`, `ID_PINJAM`, `ID_BUKU`, `TGL_KEMBALI`, `DENDA`, `STATUS`) VALUES
(13, 'P170623001', 'BKO005', '2017-06-25', 0, 'Sudah Kembali'),
(14, 'P170623001', 'BKO008', NULL, 0, 'Belum Kembali'),
(15, 'P170623001', 'BKO013', NULL, 0, 'Belum Kembali'),
(16, 'P170623002', 'BKO008', NULL, 0, 'Belum Kembali'),
(17, 'P170624001', 'BKO013', '2017-07-09', 4000, 'Sudah Kembali'),
(18, 'P170624001', 'BKO007', NULL, 0, 'Belum Kembali'),
(19, 'P170624001', 'BKO011', NULL, 0, 'Belum Kembali'),
(20, 'P170624002', 'BKO004', NULL, 0, 'Belum Kembali'),
(21, 'P170624002', 'BKO005', NULL, 0, 'Belum Kembali'),
(22, 'P170624002', 'BKO007', NULL, 0, 'Belum Kembali'),
(23, 'P170624003', 'BKO011', NULL, 0, 'Belum Kembali'),
(24, 'P170624003', 'BKO004', NULL, 0, 'Belum Kembali'),
(25, 'P170624003', 'BKO015', NULL, 0, 'Belum Kembali'),
(26, 'P170624004', 'BKO017', '2017-06-25', 0, 'Sudah Kembali'),
(27, 'P170624005', 'BKO013', NULL, 0, 'Belum Kembali'),
(28, 'P170624005', 'BKO006', NULL, 0, 'Belum Kembali'),
(29, 'P170624006', 'BKO011', '2017-06-25', 0, 'Sudah Kembali'),
(30, 'P170624006', 'BKO018', '2017-07-10', 4500, 'Sudah Kembali'),
(31, 'P170625001', 'BKO019', NULL, 0, 'Belum Kembali'),
(32, 'P170625001', 'BKO020', NULL, 0, 'Belum Kembali'),
(33, 'P170625001', 'BKO021', NULL, 0, 'Belum Kembali'),
(34, 'P170625002', 'BKO010', '2017-07-09', 3500, 'Sudah Kembali'),
(35, 'P170625002', 'BKO016', NULL, 0, 'Belum Kembali'),
(36, 'P170626001', 'BKO012', NULL, 0, 'Belum Kembali'),
(37, 'P170626001', 'BKO009', NULL, 0, 'Belum Kembali'),
(38, 'P170626001', 'BKO014', NULL, 0, 'Belum Kembali'),
(39, 'P170626002', 'BKO014', NULL, 0, 'Belum Kembali'),
(40, 'P170626002', 'BKO010', NULL, 0, 'Belum Kembali'),
(41, 'P170629001', 'BKO013', NULL, 0, 'Belum Kembali'),
(42, 'P170629001', 'BKO009', NULL, 0, 'Belum Kembali'),
(43, 'P170629002', 'BKO010', NULL, 0, 'Belum Kembali'),
(44, 'P170629002', 'BKO016', NULL, 0, 'Belum Kembali'),
(45, 'P170629002', 'BKO012', NULL, 0, 'Belum Kembali'),
(46, 'P170709001', 'BKO020', NULL, 0, 'Belum Kembali'),
(47, 'P170709001', 'BKO011', NULL, 0, 'Belum Kembali'),
(48, 'P170709002', 'BKO022', NULL, 0, 'Belum Kembali'),
(49, 'P170709002', 'BKO021', NULL, 0, 'Belum Kembali'),
(50, 'P240318001', 'BKO005', '2024-03-18', 0, 'Sudah Kembali'),
(51, 'P240318001', 'BKO004', '2024-03-18', 0, 'Sudah Kembali'),
(52, 'P240318001', 'BKO013', '2024-03-18', 0, 'Sudah Kembali'),
(53, 'P240318002', 'BKO018', NULL, 0, 'Belum Kembali'),
(54, 'P240318002', 'BKO023', NULL, 0, 'Belum Kembali'),
(55, 'P240318002', 'BKO011', NULL, 0, 'Belum Kembali');

-- --------------------------------------------------------

--
-- Table structure for table `kas`
--

CREATE TABLE `kas` (
  `ID_KAS` varchar(10) NOT NULL,
  `ID_ANGGOTA` varchar(10) DEFAULT NULL,
  `ID_ADMIN` varchar(10) DEFAULT NULL,
  `TGL_KAS` date DEFAULT NULL,
  `RP_MASUK` int(11) DEFAULT NULL,
  `RP_KELUAR` int(11) DEFAULT NULL,
  `KETERANGAN` varchar(256) NOT NULL DEFAULT '-',
  `STATS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kas`
--

INSERT INTO `kas` (`ID_KAS`, `ID_ANGGOTA`, `ID_ADMIN`, `TGL_KAS`, `RP_MASUK`, `RP_KELUAR`, `KETERANGAN`, `STATS`) VALUES
('K240329001', 'AGT002', 'AD101', '2024-03-16', 20000, NULL, 'Minggu 1', 'Belum Kembali'),
('K240329002', 'AGT002', 'AD101', '2024-03-23', 14000, NULL, 'Minggu 2', 'Belum Kembali'),
('K240329003', 'AGT002', 'AD101', '2024-03-23', 5000, NULL, 'Minggu 2', 'Belum Kembali'),
('K240329004', 'AGT017', 'AD003', '2024-03-16', 10000, NULL, 'Minggu 1', 'Belum Kembali'),
('K240329005', 'AGT017', 'AD003', '2024-03-16', 20000, NULL, 'Minggu 2', 'Belum Kembali'),
('K240329006', 'AGT017', 'AD003', '2024-03-23', 8000, NULL, 'Minggu 2', 'Belum Kembali'),
('K240329007', 'AGT017', 'AD003', '2024-03-23', 17500, NULL, 'Minggu 3', 'Belum Kembali'),
('K240329008', 'AGT017', 'AD003', '2024-03-29', 15500, NULL, 'Minggu 3', 'Belum Kembali'),
('K240330001', 'AGT004', 'AD101', '2024-03-16', 16000, NULL, 'Minggu 1', 'Belum Kembali'),
('K240330002', 'AGT004', 'AD101', '2024-03-23', 16000, NULL, 'Minggu 2', 'Belum Kembali'),
('K240330003', 'AGT005', 'AD101', '2024-03-16', 15000, NULL, 'Minggu 1', 'Belum Kembali'),
('K240330004', 'AGT005', 'AD101', '2024-03-23', 10000, NULL, 'Minggu 2', 'Belum Kembali'),
('K240330005', 'AGT006', 'AD101', '2024-03-16', 15000, NULL, 'Minggu 1', 'Belum Kembali'),
('K240330006', 'AGT006', 'AD101', '2024-03-30', 15000, NULL, 'Minggu 2', 'Belum Kembali'),
('K240330007', 'AGT007', 'AD101', '2024-03-16', 21000, NULL, 'Minggu 1', 'Belum Kembali'),
('K240330008', 'AGT007', 'AD101', '2024-03-23', 18000, NULL, 'Minggu 2', 'Belum Kembali'),
('K240330009', 'AGT008', 'AD101', '2024-03-16', 16000, NULL, 'Minggu 1', 'Belum Kembali'),
('K240330010', 'AGT008', 'AD101', '2024-03-23', 20000, NULL, 'Minggu 2', 'Belum Kembali'),
('K240330011', 'AGT009', 'AD101', '2024-03-16', 10000, NULL, 'Minggu 1', 'Belum Kembali'),
('K240330012', 'AGT009', 'AD101', '2024-03-23', 10000, NULL, 'Minggu 2', 'Belum Kembali'),
('K240330013', 'AGT011', 'AD101', '2024-03-16', 16000, NULL, 'Minggu 1', 'Belum Kembali'),
('K240330014', 'AGT011', 'AD101', '2024-03-23', 16000, NULL, 'Minggu 2', 'Belum Kembali'),
('K240330015', 'AGT010', 'AD101', '2024-03-16', 10000, NULL, 'Minggu 1', 'Belum Kembali'),
('K240330016', 'AGT010', 'AD101', '2024-03-23', 10000, NULL, 'Minggu 2', 'Belum Kembali'),
('K240330017', 'AGT012', 'AD101', '2024-03-16', 10000, NULL, 'Minggu 1', 'Belum Kembali'),
('K240330018', 'AGT013', 'AD101', '2024-03-16', 10000, NULL, 'Minggu 1', 'Belum Kembali'),
('K240330019', 'AGT021', 'AD101', '2024-03-16', 10000, NULL, 'Minggu 1', 'Belum Kembali'),
('K240330020', 'AGT014', 'AD101', '2024-03-16', 10000, NULL, 'Minggu 1', 'Belum Kembali'),
('K240330021', 'AGT015', 'AD101', '2024-03-16', 10000, NULL, 'Minggu 1', 'Belum Kembali'),
('K240330022', 'AGT016', 'AD101', '2024-03-16', 12000, NULL, 'Minggu 1', 'Belum Kembali'),
('K240330023', 'AGT018', 'AD101', '2024-03-16', 5000, NULL, 'Minggu 1', 'Belum Kembali'),
('K240330024', 'AGT019', 'AD101', '2024-03-16', 10000, NULL, 'Minggu 1', 'Belum Kembali'),
('K240330025', 'AGT020', 'AD101', '2024-03-16', 10000, NULL, 'Minggu 1', 'Belum Kembali'),
('K240330026', 'AGT003', 'AD101', '2024-03-16', 25000, NULL, 'Minggu 1', 'Belum Kembali'),
('K240330027', 'AGT003', 'AD101', '2024-03-23', 5000, NULL, 'Minggu 2', 'Belum Kembali'),
('K240330028', 'AGT003', 'AD101', '2024-03-30', 10000, NULL, 'Minggu 3', 'Belum Kembali'),
('K240330029', 'AGT003', 'AD101', '2024-03-30', 5000, NULL, 'Minggu 3', 'Belum Kembali');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `ID_KEGIATAN` varchar(10) NOT NULL,
  `ID_ADMIN` varchar(10) DEFAULT NULL,
  `NM_KEGIATAN` varchar(128) DEFAULT NULL,
  `JNS_KEGIATAN` varchar(50) DEFAULT NULL,
  `DESC_KEGIATAN` varchar(128) DEFAULT NULL,
  `TGL_MULAI` date DEFAULT NULL,
  `TGL_SELESAI` date DEFAULT NULL,
  `FOTO` mediumtext DEFAULT NULL,
  `RP_ANGGARAN` int(11) DEFAULT NULL,
  `STATUS` char(1) DEFAULT NULL,
  `D_CREATED` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `ID_NOTIF` int(11) NOT NULL,
  `ID_ADMIN` varchar(128) NOT NULL,
  `JUDUL` varchar(128) NOT NULL,
  `ISI` varchar(128) NOT NULL,
  `DT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`ID_NOTIF`, `ID_ADMIN`, `JUDUL`, `ISI`, `DT`) VALUES
(14, 'AD001', 'Penguman Pengajian', 'Pengajian rutin mlm Jumat libur sampai akhir rhamadan.', '2024-03-28'),
(16, 'AD001', 'Sok cobaan isi', 'Isi datana sing banyak, lambat teu ?', '2024-03-29'),
(17, 'AD100', 'Cobaan data kas', 'Isian nu kasna cing loba ..', '2024-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `ID_PINJAM` varchar(10) NOT NULL,
  `ID_ANGGOTA` varchar(10) DEFAULT NULL,
  `ID_ADMIN` varchar(10) DEFAULT NULL,
  `TGL_PINJAM` date DEFAULT NULL,
  `JML_BUKU` int(11) NOT NULL,
  `STATS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`ID_PINJAM`, `ID_ANGGOTA`, `ID_ADMIN`, `TGL_PINJAM`, `JML_BUKU`, `STATS`) VALUES
('P170623001', 'AGT002', 'AD004', '2017-06-23', 3, 'Belum Kembali'),
('P170623002', 'AGT003', 'AD005', '2017-06-23', 1, 'Belum Kembali'),
('P170624001', 'AGT007', 'AD005', '2017-06-24', 3, 'Belum Kembali'),
('P170624002', 'AGT008', 'AD005', '2017-06-24', 3, 'Belum Kembali'),
('P170624003', 'AGT004', 'AD005', '2017-06-24', 3, 'Belum Kembali'),
('P170624004', 'AGT001', 'AD004', '2017-06-24', 1, 'Sudah Kembali'),
('P170624005', 'AGT007', 'AD004', '2017-06-24', 2, 'Belum Kembali'),
('P170624006', 'AGT003', 'AD006', '2017-06-24', 2, 'Sudah Kembali'),
('P170625001', 'AGT013', 'AD006', '2017-06-25', 3, 'Belum Kembali'),
('P170625002', 'AGT010', 'AD006', '2017-06-25', 2, 'Belum Kembali'),
('P170626001', 'AGT006', 'AD004', '2017-06-26', 3, 'Belum Kembali'),
('P170626002', 'AGT012', 'AD004', '2017-06-26', 2, 'Belum Kembali'),
('P170629001', 'AGT014', 'AD006', '2017-06-29', 2, 'Belum Kembali'),
('P170629002', 'AGT015', 'AD006', '2017-06-29', 3, 'Belum Kembali'),
('P170709001', 'AGT011', 'AD006', '2017-07-09', 2, 'Belum Kembali'),
('P170709002', 'AGT016', 'AD006', '2017-07-09', 2, 'Belum Kembali'),
('P240318001', 'AGT002', 'AD002', '2024-03-18', 3, 'Sudah Kembali'),
('P240318002', 'AGT001', 'AD002', '2024-03-18', 3, 'Belum Kembali');

-- --------------------------------------------------------

--
-- Table structure for table `perpus`
--

CREATE TABLE `perpus` (
  `ID_PERPUS` int(11) NOT NULL,
  `NAMA_P` varchar(128) DEFAULT NULL,
  `ALAMAT_P` mediumtext DEFAULT NULL,
  `ABOUT` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `perpus`
--

INSERT INTO `perpus` (`ID_PERPUS`, `NAMA_P`, `ALAMAT_P`, `ABOUT`) VALUES
(3, 'Shaff Mufa 07', 'Jl. Gg Simpang Cicadas Bandung', 'Kumpulan orang-orang yang sedang belajar soleh.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`ID_ANGGOTA`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`ID_BUKU`);

--
-- Indexes for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  ADD PRIMARY KEY (`ID_DIPINJAM`);

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`ID_KAS`) USING BTREE;

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`ID_KEGIATAN`) USING BTREE;

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`ID_NOTIF`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`ID_PINJAM`);

--
-- Indexes for table `perpus`
--
ALTER TABLE `perpus`
  ADD PRIMARY KEY (`ID_PERPUS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  MODIFY `ID_DIPINJAM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `notif`
--
ALTER TABLE `notif`
  MODIFY `ID_NOTIF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `perpus`
--
ALTER TABLE `perpus`
  MODIFY `ID_PERPUS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
