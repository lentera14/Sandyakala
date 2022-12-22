-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 22, 2022 at 12:29 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20045785_sandyakala`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nameID` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nameID`, `password`, `nama`, `nip`, `alamat`, `telepon`, `email`, `status`) VALUES
(1, 'febia', 'd83a2cb67eb3133cc7a70c23d913e832', 'Febia Nareswara', 'K3521025', 'Sukoharjo', '0812345679', 'febia25@sandyakala.ac.id', 'admin'),
(2, 'memey', '073dce9484f37813c8d6d99710c9834f', 'Meidy Yolandia', 'K3521041', 'Jawa Barat', '0823456791', 'memey41@sandyakala.ac.id', 'admin'),
(3, 'vianti', 'bf82541fd425c0a8f2f80b42924b777a', 'Nanditya Vianti Putri', 'K3521057', 'Surakarta', '0834567912', 'vianti57@sandyakala.ac.id', 'admin'),
(4, 'lentera', '29d9b3082c7349a363915f5f2b12128d', 'Lentera Farahdiba', 'K3521077', 'Klaten', '0845679123', 'lentera77@sandyakala.ac.id', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `batal`
--

CREATE TABLE `batal` (
  `id_batal` int(30) NOT NULL,
  `kode_tiket` varchar(30) NOT NULL,
  `kode_kereta` varchar(30) NOT NULL,
  `tanggal_waktu` datetime NOT NULL,
  `gerbong` varchar(15) NOT NULL,
  `stasiun_berangkat` varchar(255) NOT NULL,
  `stasiun_tujuan` varchar(255) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-laki') NOT NULL,
  `kategori` enum('Dewasa','Anak') NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `bukti_bayar` text NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batal`
--

INSERT INTO `batal` (`id_batal`, `kode_tiket`, `kode_kereta`, `tanggal_waktu`, `gerbong`, `stasiun_berangkat`, `stasiun_tujuan`, `nama_depan`, `nama_belakang`, `NIK`, `jenis_kelamin`, `kategori`, `email`, `telepon`, `bukti_bayar`, `username`) VALUES
(1, 'SDY14122-B101A', 'SDY001', '2022-12-14 07:00:00', 'A', 'Pangkalan Brandan', 'Karang Baru', 'febia', 'nareswara', '23456789', 'Perempuan', 'Anak', 'vebia@gmail.com', 'febia', '', 'huang'),
(2, 'SDY14122-B306A', 'SDY001', '2022-12-14 08:30:00', 'C', 'Boekitkoeboe', 'Balaban', 'Kalasean', 'Malik', '3456781234567', 'Laki-laki', 'Dewasa', 'kalasean@business.ac.id', 'Kalasean', '', 'lily'),
(3, 'SDY14122-B105B', 'SDY001', '2022-12-14 07:00:00', 'A', 'Pangkalan Brandan', 'Balaban', 'Nakamoto', 'Atuy', '2345678765432', 'Laki-laki', 'Dewasa', 'atuygalon@gmail.com', 'Nakamoto', '', 'nakamoto'),
(4, 'SDY14122-B101A', 'SDY001', '2022-12-14 07:00:00', 'A', 'Pangkalan Brandan', 'Karang Baru', 'febia', 'nareswara', '4220265466774567', 'Laki-laki', 'Anak', 'vebia@gmail.com', 'febia', '', 'huang'),
(5, 'SDY14122-B106B', 'SDY001', '2022-12-14 07:00:00', 'A', 'Pangkalan Brandan', 'Balaban', 'Choi', 'Hyunsuk', '234567865432', 'Laki-laki', 'Anak', 'choi@gmail.com', 'Choi', '', 'huang'),
(6, 'SDY14122-B107B', 'SDY001', '2022-12-14 07:00:00', 'A', 'Pangkalan Brandan', 'Boekitkoeboe', 'Yoon', 'Jaehyuk', '98765456789', 'Laki-laki', 'Dewasa', 'jae@gmail.com', 'Yoon', '', 'huang'),
(7, 'SDY14122-B108B', 'SDY001', '2022-12-14 07:00:00', 'A', 'Pangkalan Brandan', 'Boekitkoeboe', 'Kim', 'Jennie', '876543456789', 'Perempuan', 'Dewasa', 'jenn@gmail.co', 'Kim', '', 'huang'),
(8, 'SDY14122-B109B', 'SDY001', '2022-12-14 07:00:00', 'A', 'Pangkalan Brandan', 'Balaban', 'Song', 'Kang', '987654323456789', 'Laki-laki', 'Dewasa', 'skkk@gmail.co', 'Song', '', 'huang'),
(9, 'SDY14122-B110B', 'SDY001', '2022-12-14 07:00:00', 'A', 'Pangkalan Brandan', 'Boekitkoeboe', 'Arexa', 'Yowes', '098765456789', 'Laki-laki', 'Anak', 'yowes@gmail.co', 'Arexa', '', 'huang'),
(10, 'SDY14122-B201A', 'SDY001', '2022-12-14 08:30:00', 'B', 'Boekitkoeboe', 'Karang Baru', 'Yoshida', 'Haru', '987656789', 'Laki-laki', 'Dewasa', 'haruuya@gmail.com', 'Yoshida', '', 'huang'),
(11, 'SDY14122-B202A', 'SDY001', '2022-12-14 08:30:00', 'B', 'Boekitkoeboe', 'Karang Baru', 'Haha ', 'Hihi', '876567898765', 'Laki-laki', 'Dewasa', 'xixi@gmail.com', 'Haha ', '', 'huang'),
(12, 'SDY14122-B203A', 'SDY001', '2022-12-14 08:30:00', 'B', 'Boekitkoeboe', 'Sungailiput', 'Hdehh', 'hhh', '9876567890', 'Perempuan', 'Dewasa', 'sijis@gmail.co', 'Hdehh', '', 'huang'),
(13, 'SDY14122-B204A', 'SDY001', '2022-12-14 08:30:00', 'B', 'Boekitkoeboe', 'Sungailiput', 'Kim', 'Doyoung', '876543234567890', 'Laki-laki', 'Dewasa', 'doyyyie@gmail.com', 'Kim', '', 'huang'),
(14, 'SDY14122-B202B', 'SDY001', '2022-12-14 08:30:00', 'B', 'Boekitkoeboe', 'Karang Baru', 'Kalasean', 'Yaya', '9054798635', 'Laki-laki', 'Dewasa', 'kalasean@gmail.com', 'Kalasean', '', 'kalasean');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_reservasi`
--

CREATE TABLE `daftar_reservasi` (
  `id_reservasi` int(30) NOT NULL,
  `kode_tiket` varchar(30) NOT NULL,
  `kode_kereta` varchar(30) NOT NULL,
  `tanggal_waktu` datetime NOT NULL,
  `gerbong` varchar(15) NOT NULL,
  `stasiun_berangkat` varchar(255) NOT NULL,
  `stasiun_tujuan` varchar(255) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-laki') NOT NULL,
  `kategori` enum('Dewasa','Anak') NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `bukti_bayar` text NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_reservasi`
--

INSERT INTO `daftar_reservasi` (`id_reservasi`, `kode_tiket`, `kode_kereta`, `tanggal_waktu`, `gerbong`, `stasiun_berangkat`, `stasiun_tujuan`, `nama_depan`, `nama_belakang`, `NIK`, `jenis_kelamin`, `kategori`, `email`, `telepon`, `bukti_bayar`, `username`) VALUES
(7, 'SDY14122-B103A', 'SDY001', '2022-12-14 07:00:00', 'A', 'Pangkalan Brandan', 'Sungailiput', 'Lily', 'Was a Little Girl', '234567', 'Perempuan', 'Dewasa', 'lily@gmail.com', '0876543219', 'Virtual Lab Architecture with Kali Linux.pdf', 'lily'),
(8, 'SDY14122-P209A', 'SDY001', '2022-12-14 14:30:00', 'B', 'Sungailiput', 'Pangkalan Brandan', 'febia', 'nareswara', '2345678901234567', 'Perempuan', 'Anak', 'ayamku@usaha.ac.id', '0898765345676', 'Konsep IKU Group 7 (1).png', 'jisung'),
(9, 'SDY14122-B306B', 'SDY001', '2022-12-14 08:30:00', 'C', 'Boekitkoeboe', 'Balaban', 'Kalasean', 'Malik', '3412567890123456', 'Laki-laki', 'Dewasa', 'bobatea@usaha.ac.id', '0898765345676', '', 'sunny'),
(12, 'SDY14122-B103B', 'SDY001', '2022-12-14 07:00:00', 'A', 'Pangkalan Brandan', 'Sungailiput', 'Kim', 'Jongin', '1234567890', 'Laki-laki', 'Dewasa', 'kai@gmail.com', '0897654321', '( ^ω^ ).jpg', 'eunha'),
(24, 'SDY14122-B403B', 'SDY001', '2022-12-14 10:00:00', 'D', 'Balaban', 'Sungailiput', 'Bento ', 'Kopi', '336793880496', 'Laki-laki', 'Anak', 'bentokopi@gmail.com', '08986365472', 'instagram.png', 'bento'),
(26, 'SDY14122-B205A', 'SDY001', '2022-12-14 08:30:00', 'B', 'Boekitkoeboe', 'Balaban', 'vebia', 'pake v', '676484059807', 'Laki-laki', 'Anak', 'vebbia@gmail.com', '0846466464', 'IMG-20221222-WA0000.jpg', 'nakamoto'),
(27, 'SDY14122-B304B', 'SDY001', '2022-12-14 10:00:00', 'C', 'Balaban', 'Sungailiput', 'Dora', 'Emon', '336793880496', 'Perempuan', 'Dewasa', 'dora@gmail.com', '08764735675', '', 'Dora'),
(28, 'SDY14122-B304B', 'SDY001', '2022-12-14 10:00:00', 'C', 'Balaban', 'Sungailiput', 'Dora', 'Emon', '336793880496', 'Perempuan', 'Dewasa', 'dora@gmail.com', '08764735675', '', 'Dora');

-- --------------------------------------------------------

--
-- Table structure for table `infografis`
--

CREATE TABLE `infografis` (
  `id_penjualan` int(15) NOT NULL,
  `bulan` varchar(255) NOT NULL,
  `jumlah_penjualan` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infografis`
--

INSERT INTO `infografis` (`id_penjualan`, `bulan`, `jumlah_penjualan`) VALUES
(1, 'Januari', 3554),
(2, 'Februari', 2790),
(3, 'Maret', 2489),
(4, 'April', 2659),
(5, 'Mei', 3948),
(6, 'Juni', 4031),
(7, 'Juli', 4597),
(8, 'Agustus', 3464),
(9, 'September', 2854),
(10, 'Oktober', 2974),
(11, 'November', 2647),
(12, 'Desember', 4654);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kereta`
--

CREATE TABLE `jadwal_kereta` (
  `id_jadwal` int(30) NOT NULL,
  `kode_tiket` varchar(30) NOT NULL,
  `kode_kereta` varchar(30) NOT NULL,
  `stasiun_berangkat` varchar(255) NOT NULL,
  `stasiun_tujuan` varchar(255) NOT NULL,
  `gerbong` varchar(15) NOT NULL,
  `tanggal_waktu` datetime NOT NULL,
  `tanggal_update` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_kereta`
--

INSERT INTO `jadwal_kereta` (`id_jadwal`, `kode_tiket`, `kode_kereta`, `stasiun_berangkat`, `stasiun_tujuan`, `gerbong`, `tanggal_waktu`, `tanggal_update`) VALUES
(1, 'SDY14122-B101A', 'SDY001', 'Pangkalan Brandan', 'Karang Baru', 'A', '2022-12-14 07:00:00', NULL),
(2, 'SDY14122-B102A', 'SDY001', 'Pangkalan Brandan', 'Karang Baru', 'A', '2022-12-14 07:00:00', NULL),
(4, 'SDY14122-B104A', 'SDY001', 'Pangkalan Brandan', 'Sungailiput', 'A', '2022-12-14 07:00:00', NULL),
(5, 'SDY14122-B105A', 'SDY001', 'Pangkalan Brandan', 'Balaban', 'A', '2022-12-14 07:00:00', NULL),
(6, 'SDY14122-B106A', 'SDY001', 'Pangkalan Brandan', 'Balaban', 'A', '2022-12-14 07:00:00', NULL),
(7, 'SDY14122-B107A', 'SDY001', 'Pangkalan Brandan', 'Boekitkoeboe', 'A', '2022-12-14 07:00:00', NULL),
(8, 'SDY14122-B108A', 'SDY001', 'Pangkalan Brandan', 'Boekitkoeboe', 'A', '2022-12-14 07:00:00', NULL),
(9, 'SDY14122-B109A', 'SDY001', 'Pangkalan Brandan', 'Karang Baru', 'A', '2022-12-14 07:00:00', NULL),
(10, 'SDY14122-B110A', 'SDY001', 'Pangkalan Brandan', 'Sungailiput', 'A', '2022-12-14 07:00:00', NULL),
(11, 'SDY14122-B101B', 'SDY001', 'Pangkalan Brandan', 'Karang Baru', 'A', '2022-12-14 07:00:00', NULL),
(12, 'SDY14122-B102B', 'SDY001', 'Pangkalan Brandan', 'Karang Baru', 'A', '2022-12-14 07:00:00', NULL),
(14, 'SDY14122-B104B', 'SDY001', 'Pangkalan Brandan', 'Sungailiput', 'A', '2022-12-14 07:00:00', NULL),
(15, 'SDY14122-B105B', 'SDY001', 'Pangkalan Brandan', 'Balaban', 'A', '2022-12-14 07:00:00', NULL),
(16, 'SDY14122-B106B', 'SDY001', 'Pangkalan Brandan', 'Balaban', 'A', '2022-12-14 07:00:00', NULL),
(17, 'SDY14122-B107B', 'SDY001', 'Pangkalan Brandan', 'Boekitkoeboe', 'A', '2022-12-14 07:00:00', NULL),
(18, 'SDY14122-B108B', 'SDY001', 'Pangkalan Brandan', 'Boekitkoeboe', 'A', '2022-12-14 07:00:00', NULL),
(19, 'SDY14122-B109B', 'SDY001', 'Pangkalan Brandan', 'Balaban', 'A', '2022-12-14 07:00:00', NULL),
(20, 'SDY14122-B110B', 'SDY001', 'Pangkalan Brandan', 'Boekitkoeboe', 'A', '2022-12-14 07:00:00', NULL),
(21, 'SDY14122-B201A', 'SDY001', 'Boekitkoeboe', 'Karang Baru', 'B', '2022-12-14 08:30:00', NULL),
(22, 'SDY14122-B202A', 'SDY001', 'Boekitkoeboe', 'Karang Baru', 'B', '2022-12-14 08:30:00', NULL),
(24, 'SDY14122-B204A', 'SDY001', 'Boekitkoeboe', 'Sungailiput', 'B', '2022-12-14 08:30:00', NULL),
(26, 'SDY14122-B206A', 'SDY001', 'Boekitkoeboe', 'Balaban', 'B', '2022-12-14 08:30:00', NULL),
(28, 'SDY14122-B208A', 'SDY001', 'Pangkalan Brandan', 'Boekitkoeboe', 'B', '2022-12-14 07:00:00', NULL),
(29, 'SDY14122-B209A', 'SDY001', 'Boekitkoeboe', 'Karang Baru', 'B', '2022-12-14 08:30:00', NULL),
(30, 'SDY14122-B210A', 'SDY001', 'Boekitkoeboe', 'Sungailiput', 'B', '2022-12-14 08:30:00', NULL),
(31, 'SDY14122-B201B', 'SDY001', 'Boekitkoeboe', 'Karang Baru', 'B', '2022-12-14 08:30:00', NULL),
(33, 'SDY14122-B203B', 'SDY001', 'Boekitkoeboen', 'Sungailiput', 'B', '2022-12-14 08:30:00', NULL),
(34, 'SDY14122-B204B', 'SDY001', 'Boekitkoeboe', 'Sungailiput', 'B', '2022-12-14 08:30:00', NULL),
(35, 'SDY14122-B205B', 'SDY001', 'Boekitkoeboe', 'Balaban', 'B', '2022-12-14 08:30:00', NULL),
(36, 'SDY14122-B206B', 'SDY001', 'Boekitkoeboe', 'Balaban', 'B', '2022-12-14 08:30:00', NULL),
(37, 'SDY14122-B207B', 'SDY001', 'Pangkalan Brandan', 'Boekitkoeboe', 'B', '2022-12-14 07:00:00', NULL),
(38, 'SDY14122-B208B', 'SDY001', 'Pangkalan Brandan', 'Boekitkoeboe', 'B', '2022-12-14 07:00:00', NULL),
(39, 'SDY14122-B209B', 'SDY001', 'Boekitkoeboe', 'Balaban', 'B', '2022-12-14 08:30:00', NULL),
(40, 'SDY14122-B210B', 'SDY001', 'Pangkalan Brandan', 'Boekitkoeboe', 'B', '2022-12-14 07:00:00', NULL),
(41, 'SDY14122-B301A', 'SDY001', 'Balaban', 'Karang Baru', 'C', '2022-12-14 10:00:00', NULL),
(42, 'SDY14122-B302A', 'SDY001', 'Balaban', 'Karang Baru', 'C', '2022-12-14 10:00:00', NULL),
(43, 'SDY14122-B303A', 'SDY001', 'Balaban', 'Sungailiput', 'C', '2022-12-14 10:00:00', NULL),
(44, 'SDY14122-B304A', 'SDY001', 'Balaban', 'Sungailiput', 'C', '2022-12-14 10:00:00', NULL),
(45, 'SDY14122-B305A', 'SDY001', 'Pangkalan Brandan', 'Balaban', 'C', '2022-12-14 07:00:00', NULL),
(47, 'SDY14122-B307A', 'SDY001', 'Pangkalan Brandan', 'Boekitkoeboe', 'C', '2022-12-14 07:00:00', NULL),
(48, 'SDY14122-B308A', 'SDY001', 'Pangkalan Brandan', 'Boekitkoeboe', 'C', '2022-12-14 07:00:00', NULL),
(49, 'SDY14122-B309A', 'SDY001', 'Balaban', 'Karang Baru', 'C', '2022-12-14 10:00:00', NULL),
(50, 'SDY14122-B310A', 'SDY001', 'Balaban', 'Sungailiput', 'C', '2022-12-14 10:00:00', NULL),
(51, 'SDY14122-B301B', 'SDY001', 'Balaban', 'Karang Baru', 'C', '2022-12-14 10:00:00', NULL),
(52, 'SDY14122-B302B', 'SDY001', 'Balaban', 'Karang Baru', 'C', '2022-12-14 10:00:00', NULL),
(53, 'SDY14122-B303B', 'SDY001', 'Balaban', 'Sungailiput', 'C', '2022-12-14 10:00:00', NULL),
(55, 'SDY14122-B305B', 'SDY001', 'Pangkalan Brandan', 'Balaban', 'C', '2022-12-14 07:00:00', NULL),
(57, 'SDY14122-B307B', 'SDY001', 'Pangkalan Brandan', 'Boekitkoeboe', 'C', '2022-12-14 07:00:00', NULL),
(58, 'SDY14122-B308B', 'SDY001', 'Pangkalan Brandan', 'Boekitkoeboe', 'C', '2022-12-14 07:00:00', NULL),
(59, 'SDY14122-B309B', 'SDY001', 'Boekitkoeboe', 'Balaban', 'C', '2022-12-14 08:30:00', NULL),
(60, 'SDY14122-B310B', 'SDY001', 'Pangkalan Brandan', 'Boekitkoeboe', 'C', '2022-12-14 07:00:00', NULL),
(61, 'SDY14122-B401A', 'SDY001', 'Sungailiput', 'Karang Baru', 'D', '2022-12-14 11:30:00', NULL),
(62, 'SDY14122-B402A', 'SDY001', 'Sungailiput', 'Karang Baru', 'D', '2022-12-14 11:30:00', NULL),
(63, 'SDY14122-B403A', 'SDY001', 'Pangkalan Brandan', 'Sungailiput', 'D', '2022-12-14 07:00:00', NULL),
(64, 'SDY14122-B404A', 'SDY001', 'Boekitkoeboe', 'Sungailiput', 'D', '2022-12-14 08:30:00', NULL),
(65, 'SDY14122-B405A', 'SDY001', 'Pangkalan Brandan', 'Balaban', 'D', '2022-12-14 07:00:00', NULL),
(66, 'SDY14122-B406A', 'SDY001', 'Boekitkoeboe', 'Balaban', 'D', '2022-12-14 08:30:00', NULL),
(67, 'SDY14122-B407A', 'SDY001', 'Pangkalan Brandan', 'Boekitkoeboe', 'D', '2022-12-14 07:00:00', NULL),
(68, 'SDY14122-B408A', 'SDY001', 'Pangkalan Brandan', 'Boekitkoeboe', 'D', '2022-12-14 07:00:00', NULL),
(69, 'SDY14122-B409A', 'SDY001', 'Sungailiput', 'Karang Baru', 'D', '2022-12-14 11:30:00', NULL),
(70, 'SDY14122-B410A', 'SDY001', 'Balaban', 'Sungailiput', 'D', '2022-12-14 10:00:00', NULL),
(71, 'SDY14122-B401B', 'SDY001', 'Sungailiput', 'Karang Baru', 'D', '2022-12-14 11:30:00', NULL),
(72, 'SDY14122-B402B', 'SDY001', 'Sungailiput', 'Karang Baru', 'D', '2022-12-14 11:30:00', NULL),
(74, 'SDY14122-B404B', 'SDY001', 'Pangkalan Brandan', 'Sungailiput', 'D', '2022-12-14 07:00:00', NULL),
(75, 'SDY14122-B405B', 'SDY001', 'Boekitkoeboe', 'Balaban', 'D', '2022-12-14 08:30:00', NULL),
(76, 'SDY14122-B406B', 'SDY001', 'Boekitkoeboe', 'Balaban', 'D', '2022-12-14 08:30:00', NULL),
(77, 'SDY14122-B407B', 'SDY001', 'Pangkalan Brandan', 'Boekitkoeboe', 'D', '2022-12-14 07:00:00', NULL),
(78, 'SDY14122-B408B', 'SDY001', 'Pangkalan Brandan', 'Boekitkoeboe', 'D', '2022-12-14 07:00:00', NULL),
(79, 'SDY14122-B409B', 'SDY001', 'Pangkalan Brandan', 'Balaban', 'D', '2022-12-14 07:00:00', NULL),
(80, 'SDY14122-B410B', 'SDY001', 'Pangkalan Brandan', 'Boekitkoeboe', 'D', '2022-12-14 07:00:00', NULL),
(81, 'SDY14122-P101A', 'SDY001', 'Karang Baru', 'Pangkalan Brandan', 'A', '2022-12-14 13:00:00', NULL),
(82, 'SDY14122-P102A', 'SDY001', 'Karang Baru', 'Pangkalan Brandan', 'A', '2022-12-14 13:00:00', NULL),
(83, 'SDY14122-P103A', 'SDY001', 'Karang Baru', 'Boekitkoeboe', 'A', '2022-12-14 13:00:00', NULL),
(84, 'SDY14122-P104A', 'SDY001', 'Karang Baru', 'Boekitkoeboe', 'A', '2022-12-14 13:00:00', NULL),
(85, 'SDY14122-P105A', 'SDY001', 'Karang Baru', 'Balaban', 'A', '2022-12-14 13:00:00', NULL),
(86, 'SDY14122-P106A', 'SDY001', 'Karang Baru', 'Balaban', 'A', '2022-12-14 13:00:00', NULL),
(87, 'SDY14122-P107A', 'SDY001', 'Karang Baru', 'Sungailiput', 'A', '2022-12-14 13:00:00', NULL),
(88, 'SDY14122-P108A', 'SDY001', 'Karang Baru', 'Sungailiput', 'A', '2022-12-14 13:00:00', NULL),
(89, 'SDY14122-P109A', 'SDY001', 'Karang Baru', 'Pangkalan Brandan', 'A', '2022-12-14 13:00:00', NULL),
(90, 'SDY14122-P110A', 'SDY001', 'Karang Baru', 'Boekitkoeboe', 'A', '2022-12-14 13:00:00', NULL),
(91, 'SDY14122-P101B', 'SDY001', 'Karang Baru', 'Pangkalan Brandan', 'A', '2022-12-14 13:00:00', NULL),
(92, 'SDY14122-P102B', 'SDY001', 'Karang Baru', 'Pangkalan Brandan', 'A', '2022-12-14 13:00:00', NULL),
(93, 'SDY14122-P103B', 'SDY001', 'Karang Baru', 'Boekitkoeboe', 'A', '2022-12-14 13:00:00', NULL),
(94, 'SDY14122-P104B', 'SDY001', 'Karang Baru', 'Boekitkoeboe', 'A', '2022-12-14 13:00:00', NULL),
(95, 'SDY14122-P105B', 'SDY001', 'Karang Baru', 'Balaban', 'A', '2022-12-14 13:00:00', NULL),
(96, 'SDY14122-P106B', 'SDY001', 'Karang Baru', 'Balaban', 'A', '2022-12-14 13:00:00', NULL),
(97, 'SDY14122-P107B', 'SDY001', 'Karang Baru', 'Sungailiput', 'A', '2022-12-14 13:00:00', NULL),
(98, 'SDY14122-P108B', 'SDY001', 'Karang Baru', 'Sungailiput', 'A', '2022-12-14 13:00:00', NULL),
(99, 'SDY14122-P109B', 'SDY001', 'Karang Baru', 'Balaban', 'A', '2022-12-14 13:00:00', NULL),
(100, 'SDY14122-PB110B', 'SDY001', 'Karang Baru', 'Sungailiput', 'A', '2022-12-14 13:00:00', NULL),
(101, 'SDY14122-P201A', 'SDY001', 'Sungailiput', 'Pangkalan Brandan', 'B', '2022-12-14 14:30:00', NULL),
(102, 'SDY14122-P202A', 'SDY001', 'Sungailiput', 'Pangkalan Brandan', 'B', '2022-12-14 14:30:00', NULL),
(103, 'SDY14122-P203A', 'SDY001', 'Sungailiput', 'Boekitkoeboe', 'B', '2022-12-14 14:30:00', NULL),
(104, 'SDY14122-P204A', 'SDY001', 'Sungailiput', 'Boekitkoeboe', 'B', '2022-12-14 14:30:00', NULL),
(105, 'SDY14122-P205A', 'SDY001', 'Sungailiput', 'Balaban', 'B', '2022-12-14 14:30:00', NULL),
(106, 'SDY14122-P206A', 'SDY001', 'Sungailiput', 'Balaban', 'B', '2022-12-14 14:30:00', NULL),
(107, 'SDY14122-P207A', 'SDY001', 'Karang Baru', 'Sungailiput', 'B', '2022-12-14 13:00:00', NULL),
(108, 'SDY14122-P208A', 'SDY001', 'Karang Baru', 'Sungailiput', 'B', '2022-12-14 13:00:00', NULL),
(110, 'SDY14122-P210A', 'SDY001', 'Sungailiput', 'Boekitkoeboe', 'B', '2022-12-14 14:30:00', NULL),
(111, 'SDY14122-P201B', 'SDY001', 'Sungailiput', 'Pangkalan Brandan', 'B', '2022-12-14 14:30:00', NULL),
(112, 'SDY14122-P202B', 'SDY001', 'Sungailiput', 'Pangkalan Brandan', 'B', '2022-12-14 14:30:00', NULL),
(113, 'SDY14122-P203B', 'SDY001', 'Sungailiput', 'Boekitkoeboe', 'B', '2022-12-14 14:30:00', NULL),
(114, 'SDY14122-P204B', 'SDY001', 'Sungailiput', 'Boekitkoeboe', 'B', '2022-12-14 14:30:00', NULL),
(115, 'SDY14122-P205B', 'SDY001', 'Sungailiput', 'Balaban', 'B', '2022-12-14 14:30:00', NULL),
(116, 'SDY14122-P206B', 'SDY001', 'Sungailiput', 'Balaban', 'B', '2022-12-14 14:30:00', NULL),
(117, 'SDY14122-P207B', 'SDY001', 'Karang Baru', 'Sungailiput', 'B', '2022-12-14 13:00:00', NULL),
(118, 'SDY14122-P208B', 'SDY001', 'Karang Baru', 'Sungailiput', 'B', '2022-12-14 13:00:00', NULL),
(119, 'SDY14122-P209B', 'SDY001', 'Sungailiput', 'Balaban', 'B', '2022-12-14 14:30:00', NULL),
(120, 'SDY14122-P210B', 'SDY001', 'Karang Baru', 'Sungailiput', 'B', '2022-12-14 13:00:00', NULL),
(121, 'SDY14122-P301A', 'SDY001', 'Balaban', 'Pangkalan Brandan', 'C', '2022-12-14 16:00:00', NULL),
(122, 'SDY14122-P302A', 'SDY001', 'Balaban', 'Pangkalan Brandan', 'C', '2022-12-14 16:00:00', NULL),
(123, 'SDY14122-P303A', 'SDY001', 'Balaban', 'Boekitkoeboe', 'C', '2022-12-14 16:00:00', NULL),
(124, 'SDY14122-P304A', 'SDY001', 'Balaban', 'Boekitkoeboe', 'C', '2022-12-14 16:00:00', NULL),
(125, 'SDY14122-P305A', 'SDY001', 'Karang Baru', 'Balaban', 'C', '2022-12-14 13:00:00', NULL),
(126, 'SDY14122-P306A', 'SDY001', 'Sungailiput', 'Balaban', 'C', '2022-12-14 14:30:00', NULL),
(127, 'SDY14122-P307A', 'SDY001', 'Karang Baru', 'Sungailiput', 'C', '2022-12-14 13:00:00', NULL),
(128, 'SDY14122-P308A', 'SDY001', 'Karang Baru', 'Sungailiput', 'C', '2022-12-14 13:00:00', NULL),
(129, 'SDY14122-P309A', 'SDY001', 'Balaban', 'Pangkalan Brandan', 'C', '2022-12-14 16:00:00', NULL),
(130, 'SDY14122-P310A', 'SDY001', 'Balaban', 'Boekitkoeboe', 'C', '2022-12-14 16:00:00', NULL),
(131, 'SDY14122-P301B', 'SDY001', 'Balaban', 'Pangkalan Brandan', 'C', '2022-12-14 16:00:00', NULL),
(132, 'SDY14122-P302B', 'SDY001', 'Balaban', 'Pangkalan Brandan', 'C', '2022-12-14 16:00:00', NULL),
(133, 'SDY14122-P303B', 'SDY001', 'Balaban', 'Boekitkoeboe', 'C', '2022-12-14 16:00:00', NULL),
(134, 'SDY14122-P304B', 'SDY001', 'Balaban', 'Boekitkoeboe', 'C', '2022-12-14 16:00:00', NULL),
(135, 'SDY14122-P305B', 'SDY001', 'Karang Baru', 'Balaban', 'C', '2022-12-14 13:00:00', NULL),
(136, 'SDY14122-P306B', 'SDY001', 'Sungailiput', 'Balaban', 'C', '2022-12-14 14:30:00', NULL),
(137, 'SDY14122-P307B', 'SDY001', 'Karang Baru', 'Sungailiput', 'C', '2022-12-14 13:00:00', NULL),
(138, 'SDY14122-P308B', 'SDY001', 'Karang Baru', 'Sungailiput', 'C', '2022-12-14 13:00:00', NULL),
(139, 'SDY14122-P309B', 'SDY001', 'Sungailiput', 'Balaban', 'C', '2022-12-14 14:30:00', NULL),
(140, 'SDY14122-P310B', 'SDY001', 'Karang Baru', 'Sungailiput', 'C', '2022-12-14 13:00:00', NULL),
(141, 'SDY14122-P401A', 'SDY001', 'Boekitkoeboe', 'Pangkalan Brandan', 'D', '2022-12-14 17:30:00', NULL),
(142, 'SDY14122-P402A', 'SDY001', 'Boekitkoeboe', 'Pangkalan Brandan', 'D', '2022-12-14 17:30:00', NULL),
(143, 'SDY14122-P403A', 'SDY001', 'Karang Baru', 'Boekitkoeboe', 'D', '2022-12-14 13:00:00', NULL),
(144, 'SDY14122-P404A', 'SDY001', 'Sungailiput', 'Boekitkoeboe', 'D', '2022-12-14 14:30:00', NULL),
(145, 'SDY14122-P405A', 'SDY001', 'Karang Baru', 'Balaban', 'D', '2022-12-14 13:00:00', NULL),
(146, 'SDY14122-P406A', 'SDY001', 'Sungailiput', 'Balaban', 'D', '2022-12-14 14:30:00', NULL),
(147, 'SDY14122-P407A', 'SDY001', 'Karang Baru', 'Sungailiput', 'D', '2022-12-14 13:00:00', NULL),
(148, 'SDY14122-P408A', 'SDY001', 'Karang Baru', 'Sungailiput', 'D', '2022-12-14 13:00:00', NULL),
(149, 'SDY14122-P409A', 'SDY001', 'Boekitkoeboe', 'Pangkalan Brandan', 'D', '2022-12-14 17:30:00', NULL),
(150, 'SDY14122-P410A', 'SDY001', 'Sungailiput', 'Boekitkoeboe', 'D', '2022-12-14 14:30:00', NULL),
(151, 'SDY14122-P401B', 'SDY001', 'Boekitkoeboe', 'Pangkalan Brandan', 'D', '2022-12-14 17:30:00', NULL),
(152, 'SDY14122-P402B', 'SDY001', 'Boekitkoeboe', 'Pangkalan Brandan', 'D', '2022-12-14 17:30:00', NULL),
(153, 'SDY14122-P403B', 'SDY001', 'Karang Baru', 'Boekitkoeboe', 'D', '2022-12-14 13:00:00', NULL),
(154, 'SDY14122-P404B', 'SDY001', 'Karang Baru', 'Boekitkoeboe', 'D', '2022-12-14 13:00:00', NULL),
(155, 'SDY14122-P405B', 'SDY001', 'Karang Baru', 'Balaban', 'D', '2022-12-14 13:00:00', NULL),
(156, 'SDY14122-P406B', 'SDY001', 'Sungailiput', 'Balaban', 'D', '2022-12-14 14:30:00', NULL),
(157, 'SDY14122-P407B', 'SDY001', 'Karang Baru', 'Sungailiput', 'D', '2022-12-14 13:00:00', NULL),
(158, 'SDY14122-P408B', 'SDY001', 'Karang Baru', 'Sungailiput', 'D', '2022-12-14 13:00:00', NULL),
(159, 'SDY14122-P409B', 'SDY001', 'Sungailiput', 'Balaban', 'D', '2022-12-14 14:30:00', NULL),
(160, 'SDY14122-P410B', 'SDY001', 'Karang Baru', 'Sungailiput', 'D', '2022-12-14 13:00:00', NULL),
(167, 'SDY14122-B306A', 'SDY001', 'Boekitkoeboe', 'Balaban', 'C', '2022-12-14 08:30:00', '0000-00-00 00:00:00'),
(168, 'SDY14122-B203A', 'SDY001', 'Boekitkoeboe', 'Sungailiput', 'B', '2022-12-14 08:30:00', NULL),
(169, 'SDY14122-B204A', 'SDY001', 'Boekitkoeboe', 'Sungailiput', 'B', '2022-12-14 08:30:00', NULL),
(170, 'SDY14122-B202B', 'SDY001', 'Boekitkoeboe', 'Karang Baru', 'B', '2022-12-14 08:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `req_batal`
--

CREATE TABLE `req_batal` (
  `id_req` int(30) NOT NULL,
  `kode_tiket` varchar(30) NOT NULL,
  `kode_kereta` varchar(30) NOT NULL,
  `tanggal_waktu` datetime NOT NULL,
  `gerbong` varchar(15) NOT NULL,
  `stasiun_berangkat` varchar(255) NOT NULL,
  `stasiun_tujuan` varchar(255) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-laki') NOT NULL,
  `kategori` enum('Dewasa','Anak') NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `bukti_bayar` text NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `req_batal`
--

INSERT INTO `req_batal` (`id_req`, `kode_tiket`, `kode_kereta`, `tanggal_waktu`, `gerbong`, `stasiun_berangkat`, `stasiun_tujuan`, `nama_depan`, `nama_belakang`, `NIK`, `jenis_kelamin`, `kategori`, `email`, `telepon`, `bukti_bayar`, `username`) VALUES
(25, 'SDY14122-B304B', 'SDY001', '2022-12-14 10:00:00', 'C', 'Balaban', 'Sungailiput', 'Dora', 'Emon', '336793880496', 'Perempuan', 'Dewasa', 'dora@gmail.com', 'Dora', '', 'Dora');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ulangPass` varchar(255) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis` enum('pria','wanita') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `ulangPass`, `nik`, `nama`, `tempat`, `tanggal`, `alamat`, `telepon`, `email`, `jenis`) VALUES
(1, 'nakamoto', 'bf40f2d7d2c0025db2f12414b4ceb1ef', 'bf40f2d7d2c0025db2f12414b4ceb1ef', '2210134520203331', 'Nakamoto Yuta', 'Yogayakarta', '2022-12-16', 'Jl. Pemuda No. 09 Yogyakarta', '0812345679', 'nakamoto@business.ac.id', 'pria'),
(2, 'jisung', '1c776e44a2ca17adc89acf79c940a3c6', '1c776e44a2ca17adc89acf79c940a3c6', '4220265466774567', 'Park Jisung', 'Makasar', '2022-12-01', 'Jl. Kemerdekaan No.26 Bawen Yogyakarta', '0821345679', 'parkjie@business.ac.id', 'pria'),
(3, 'lily', '6462a477b87145dcb14ecb5b75eb6a03', '6462a477b87145dcb14ecb5b75eb6a03', '1112343567898012', 'Lily Angelyn', 'Surabaya', '2000-06-14', 'Jl. Pelita No.453 Surabaya', '0876543219', 'angelyn@business.ac.id', 'wanita'),
(4, 'sunny', '0c8382849f2ac7ea06bc0a4607d14142', '0c8382849f2ac7ea06bc0a4607d14142', '2345678901234567', 'Sunny Lee', 'Bogor', '1999-11-18', 'Jl. Pemuda No.77 Bogor', '0845671239', 'leesun@business.ac.id', 'wanita'),
(5, 'huang', '76672ce4db59515114f8ee434e9a3dc6', '76672ce4db59515114f8ee434e9a3dc6', '7710123277075857', 'Huang Renjun', 'Jakarta', '1995-03-14', 'Jl. Patimura No.07 Jakarta', '0876574321', 'huang@business.ac.id', 'pria'),
(6, 'eunha', '4f0e684720d663d575b110db12ff9afd', '4f0e684720d663d575b110db12ff9afd', '3412567890123456', 'Jung Eunha', 'Bandung', '1999-10-21', 'Jl. Pelita Bangsa No.45 Bandung', '0897654321', 'eunha@business.ac.id', 'wanita'),
(7, 'kalasean', 'bc5f8ac41cb3a938cee466683c6145b1', 'bc5f8ac41cb3a938cee466683c6145b1', '12345678901234', 'Kalasean Malik', 'Bogor', '2000-03-14', 'Jl. Permata Indah No.66', '0987654321234', 'kalasean@business.ac.id', 'pria'),
(8, 'lalala', '4b857e3405904aa67981382683a6905d', '4b857e3405904aa67981382683a6905d', '0987612345', 'Lala Yeye', 'Amsterdam', '2020-10-22', 'Jln. Kapten Yusuf', '081122334455', 'lalala@gmail.com', 'wanita'),
(9, 'bento', '1c8959cec2358a8719ea77fda6220de4', '1c8959cec2358a8719ea77fda6220de4', '336793880496', 'Bento Kopi', 'Surakarta', '2019-12-22', 'Jl.UMS', '08897653324', 'bentokopi@gmail.com', 'pria'),
(10, 'Dora', 'aea4d74aa1e3306b88c30bfa69fa1f77', 'aea4d74aa1e3306b88c30bfa69fa1f77', '097548468363', 'Doraemon', 'Surakarta', '2022-12-22', 'Jl.UMS', '0647845737', 'dora@gmail.com', 'wanita');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `batal`
--
ALTER TABLE `batal`
  ADD PRIMARY KEY (`id_batal`);

--
-- Indexes for table `daftar_reservasi`
--
ALTER TABLE `daftar_reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indexes for table `infografis`
--
ALTER TABLE `infografis`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `jadwal_kereta`
--
ALTER TABLE `jadwal_kereta`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `req_batal`
--
ALTER TABLE `req_batal`
  ADD PRIMARY KEY (`id_req`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `batal`
--
ALTER TABLE `batal`
  MODIFY `id_batal` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `daftar_reservasi`
--
ALTER TABLE `daftar_reservasi`
  MODIFY `id_reservasi` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `infografis`
--
ALTER TABLE `infografis`
  MODIFY `id_penjualan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jadwal_kereta`
--
ALTER TABLE `jadwal_kereta`
  MODIFY `id_jadwal` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `req_batal`
--
ALTER TABLE `req_batal`
  MODIFY `id_req` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
