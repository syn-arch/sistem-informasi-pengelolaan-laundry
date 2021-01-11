-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 07:46 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silandry`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `qty` double NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `keterangan` text,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `id_transaksi`, `id_paket`, `qty`, `jumlah_harga`, `keterangan`, `status`) VALUES
(57, 1, 1, 4, 20000, NULL, 'selesai'),
(58, 2, 4, 2, 18000, NULL, 'selesai'),
(59, 2, 3, 4, 40000, NULL, 'selesai'),
(60, 2, 1, 10, 50000, NULL, 'selesai'),
(61, 3, 1, 4, 20000, NULL, 'selesai'),
(62, 3, 3, 2, 20000, NULL, 'selesai'),
(63, 3, 4, 1, 9000, NULL, 'selesai'),
(64, 4, 3, 1, 10000, NULL, 'selesai'),
(65, 4, 4, 4, 36000, NULL, 'selesai'),
(66, 4, 1, 5, 25000, NULL, 'selesai'),
(67, 5, 1, 9, 45000, NULL, 'selesai'),
(68, 6, 1, 4, 20000, NULL, 'selesai'),
(69, 6, 3, 4, 40000, NULL, 'selesai'),
(70, 6, 4, 6, 54000, NULL, 'selesai'),
(71, 6, 3, 2, 20000, NULL, 'selesai'),
(72, 6, 4, 4, 36000, NULL, 'selesai'),
(73, 7, 3, 4, 40000, NULL, 'selesai'),
(74, 8, 1, 6, 30000, NULL, 'selesai'),
(75, 9, 3, 1, 10000, NULL, 'selesai'),
(76, 10, 3, 2, 20000, NULL, 'selesai'),
(77, 11, 4, 99, 891000, NULL, 'selesai'),
(78, 12, 1, 3, 15000, NULL, 'selesai'),
(79, 13, 3, 5, 50000, NULL, 'selesai'),
(80, 14, 3, 6, 60000, NULL, 'selesai'),
(81, 14, 3, 4, 40000, NULL, 'selesai'),
(82, 15, 1, 4, 20000, NULL, 'selesai'),
(83, 15, 3, 4, 40000, NULL, 'selesai'),
(84, 16, 3, 5, 50000, NULL, 'selesai'),
(85, 16, 1, 10, 50000, NULL, 'selesai'),
(86, 17, 1, 5, 25000, NULL, 'selesai'),
(87, 17, 3, 12, 120000, NULL, 'selesai'),
(88, 18, 4, 3, 27000, NULL, 'selesai'),
(89, 19, 1, 10, 50000, NULL, 'selesai'),
(90, 19, 4, 2, 18000, NULL, 'selesai'),
(91, 20, 1, 1, 5000, NULL, 'selesai'),
(92, 20, 4, 2, 18000, NULL, 'selesai'),
(93, 21, 1, 1, 5000, NULL, 'selesai'),
(94, 22, 3, 4, 40000, NULL, 'selesai'),
(95, 22, 4, 1, 9000, NULL, 'selesai'),
(96, 23, 3, 80, 800000, NULL, 'selesai'),
(97, 24, 1, 5, 25000, NULL, 'selesai'),
(98, 25, 3, 4, 40000, NULL, 'selesai'),
(99, 26, 1, 3, 15000, NULL, 'selesai'),
(100, 26, 4, 3, 27000, NULL, 'selesai'),
(101, 27, 1, 3, 15000, NULL, 'selesai'),
(102, 27, 4, 3, 27000, NULL, 'selesai'),
(103, 28, 1, 4, 20000, NULL, 'selesai'),
(104, 29, 1, 4, 20000, NULL, 'selesai'),
(105, 29, 4, 1, 9000, NULL, 'selesai'),
(106, 30, 1, 2, 10000, NULL, 'selesai'),
(107, 30, 4, 2, 18000, NULL, 'selesai'),
(108, 32, 3, 5, 50000, NULL, 'selesai'),
(109, 35, 1, 1, 5000, NULL, 'selesai'),
(110, 36, 3, 4, 40000, NULL, 'selesai'),
(111, 37, 1, 5, 25000, NULL, 'selesai'),
(112, 37, 4, 1, 9000, NULL, 'selesai'),
(113, 38, 1, 5, 25000, NULL, 'selesai'),
(114, 39, 3, 3, 30000, NULL, 'selesai'),
(115, 40, 3, 1, 10000, NULL, 'selesai'),
(116, 41, 3, 4, 40000, NULL, 'selesai'),
(117, 42, 1, 3, 15000, NULL, 'selesai'),
(118, 42, 3, 2, 20000, NULL, 'selesai'),
(119, 43, 3, 5, 50000, NULL, 'selesai'),
(120, 44, 3, 4, 40000, NULL, 'selesai'),
(121, 46, 4, 4, 36000, NULL, 'selesai'),
(122, 47, 3, 5, 50000, NULL, 'selesai'),
(123, 48, 1, 5, 25000, NULL, 'selesai'),
(124, 49, 1, 10, 50000, NULL, 'selesai'),
(125, 49, 4, 4, 36000, NULL, 'selesai'),
(126, 50, 3, 99, 990000, NULL, 'selesai'),
(127, 51, 1, 55, 275000, NULL, 'selesai'),
(128, 52, 4, 2, 18000, NULL, 'selesai'),
(129, 53, 1, 5, 25000, NULL, 'selesai'),
(130, 53, 3, 4, 40000, NULL, 'selesai'),
(131, 53, 4, 1, 9000, NULL, 'selesai'),
(132, 54, 1, 4, 20000, NULL, 'selesai'),
(133, 55, 1, 5, 25000, NULL, 'selesai'),
(134, 55, 3, 1, 10000, NULL, 'selesai'),
(135, 56, 1, 1, 5000, NULL, 'selesai'),
(136, 56, 1, 1, 5000, NULL, 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama_member` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama_member`, `alamat`, `jk`, `telepon`, `tgl_daftar`) VALUES
(1, 'Adiatna', 'bahagia', 'L', '083822623170', '2020-02-23 14:12:29'),
(2, 'Anika', 'Kp. Lebakmuncang', 'P', '083822623170', '2020-03-02 04:57:42'),
(3, 'Santi Sri Putri', 'Kp. CIseupan', 'P', '083822623170', '2020-03-04 03:37:51'),
(4, 'Abdurrahman Shah', 'Kp. Bojonggadog', 'L', '083822623170', '2020-03-05 06:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `outlet`
--

CREATE TABLE `outlet` (
  `id` int(11) NOT NULL,
  `nama_outlet` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outlet`
--

INSERT INTO `outlet` (`id`, `nama_outlet`, `alamat`, `telepon`) VALUES
(1, 'LAUNDERY ABADI 1', 'Jl. Kembang No.32', '083822623170'),
(2, 'LAUNDERY ABADI 2', 'Jl. Bahagia', '083822623170');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `jenis` enum('Kiloan','Selimut','Bed Cover','Kaos','Lain-lain') NOT NULL,
  `nama_paket` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `id_outlet`, `jenis`, `nama_paket`, `harga`) VALUES
(1, 1, 'Kiloan', 'Paket Kiloan', 5000),
(3, 1, 'Selimut', 'Paket Selimut Tetangga', 10000),
(4, 1, 'Kiloan', 'Paket Selimut Keluarga', 9000);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `kode_invoice` varchar(30) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `batas_waktu` date NOT NULL,
  `tgl_bayar` datetime DEFAULT NULL,
  `biaya_tambahan` int(11) DEFAULT NULL,
  `diskon` double DEFAULT NULL,
  `pajak` int(11) DEFAULT NULL,
  `total_bayar` int(11) NOT NULL,
  `status` enum('Baru','Proses','Selesai','Diambil') NOT NULL,
  `dibayar` enum('Dibayar','Belum Dibayar') NOT NULL,
  `tunai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_user`, `id_outlet`, `id_member`, `kode_invoice`, `tgl`, `batas_waktu`, `tgl_bayar`, `biaya_tambahan`, `diskon`, `pajak`, `total_bayar`, `status`, `dibayar`, `tunai`) VALUES
(1, 12, 1, 1, '2020-0001', '2020-01-21 17:00:00', '2020-03-03', '2020-03-03 04:04:56', NULL, NULL, NULL, 20000, 'Diambil', 'Dibayar', 20000),
(2, 12, 1, 1, '2020-0002', '2020-01-15 17:00:00', '2020-03-06', '2020-03-03 04:02:58', NULL, NULL, NULL, 108000, 'Selesai', 'Dibayar', 110000),
(3, 12, 1, 2, '2020-0003', '2020-02-17 17:00:00', '2020-03-03', '2020-03-03 07:42:40', 2000, NULL, NULL, 51000, 'Diambil', 'Dibayar', 55000),
(4, 12, 1, 1, '2020-0004', '2020-02-19 17:00:00', '2020-03-03', '2020-03-03 12:22:00', NULL, NULL, NULL, 71000, 'Selesai', 'Dibayar', 80000),
(5, 12, 1, 2, '2020-0005', '2020-02-19 17:00:00', '2020-03-16', '2020-03-03 12:18:35', NULL, NULL, NULL, 45000, 'Selesai', 'Belum Dibayar', 50000),
(6, 12, 1, 1, '2020-0006', '2020-03-02 17:00:00', '2020-03-18', '2020-03-03 12:21:05', NULL, NULL, NULL, 170000, 'Proses', 'Dibayar', 200000),
(7, 12, 1, 1, '2020-0007', '2020-03-03 17:00:00', '2020-03-03', '2020-03-03 12:24:32', NULL, NULL, NULL, 40000, 'Proses', 'Dibayar', 50000),
(8, 12, 1, 2, '2020-0008', '2020-03-02 17:00:00', '2020-03-03', '2020-03-03 13:28:37', NULL, NULL, NULL, 30000, 'Diambil', 'Dibayar', 50000),
(9, 12, 1, 2, '2020-0009', '2020-03-02 17:00:00', '2020-03-13', '2020-03-03 12:52:57', NULL, NULL, NULL, 10000, 'Proses', 'Dibayar', 50000),
(10, 12, 1, 1, '2020-0010', '2020-03-02 17:00:00', '2020-03-19', '2020-03-03 12:26:01', NULL, NULL, NULL, 20000, 'Selesai', 'Dibayar', 50000),
(11, 12, 1, 1, '2020-0011', '2020-03-02 17:00:00', '2020-03-25', '2020-03-03 12:26:45', NULL, NULL, NULL, 891000, 'Diambil', 'Dibayar', 990000),
(12, 12, 1, 1, '2020-0012', '2020-03-02 17:00:00', '2020-03-12', '2020-03-03 12:31:50', NULL, NULL, NULL, 15000, 'Diambil', 'Dibayar', 20000),
(13, 12, 1, 1, '2020-0013', '2020-03-02 17:00:00', '2020-03-26', '2020-03-03 12:33:11', NULL, NULL, NULL, 50000, 'Selesai', 'Dibayar', 100000),
(14, 12, 1, 1, '2020-0014', '2020-03-03 17:00:00', '2020-03-04', '2020-03-04 14:16:06', NULL, NULL, NULL, 100000, 'Diambil', 'Dibayar', 100000),
(15, 12, 1, 1, '2020-0015', '2020-03-07 17:00:00', '2020-03-04', NULL, NULL, NULL, NULL, 60000, 'Proses', 'Belum Dibayar', NULL),
(16, 12, 1, 3, '2020-0016', '2020-03-05 17:00:00', '2020-03-04', NULL, NULL, NULL, NULL, 100000, 'Diambil', 'Belum Dibayar', NULL),
(17, 12, 1, 1, '2020-0017', '2020-03-03 17:00:00', '2020-03-17', '2020-03-04 12:30:18', NULL, NULL, NULL, 145000, 'Baru', 'Dibayar', 150000),
(18, 12, 1, 3, '2020-0018', '2020-03-03 17:00:00', '2020-03-13', '2020-03-04 16:29:05', NULL, NULL, NULL, 27000, 'Diambil', 'Dibayar', 30000),
(19, 12, 1, 1, '2020-0019', '2020-03-04 17:00:00', '2020-03-04', '2020-03-04 17:18:51', NULL, NULL, NULL, 68000, 'Diambil', 'Dibayar', 70000),
(20, 12, 1, 1, '2020-0020', '2020-03-03 17:00:00', '2020-03-19', NULL, NULL, NULL, NULL, 23000, 'Baru', 'Belum Dibayar', NULL),
(21, 12, 1, 1, '2020-0021', '2020-03-04 17:00:00', '2020-03-10', '2020-03-04 17:17:50', NULL, NULL, NULL, 5000, 'Selesai', 'Dibayar', 5000),
(22, 12, 1, 1, '2020-0022', '2020-03-05 17:00:00', '2020-03-11', '2020-03-04 23:37:26', NULL, NULL, NULL, 49000, 'Selesai', 'Dibayar', 50000),
(23, 12, 1, 4, '2020-0023', '2020-03-05 17:00:00', '2020-03-09', '2020-03-05 08:38:24', NULL, NULL, NULL, 800000, 'Selesai', 'Dibayar', 1000000),
(24, 12, 1, 1, '2020-0024', '2020-03-05 17:00:00', '2020-03-10', '2020-03-05 14:31:53', NULL, NULL, NULL, 25000, 'Proses', 'Dibayar', 25000),
(25, 12, 1, 1, '2020-0025', '2020-03-05 17:00:00', '2020-03-09', '2020-03-06 01:48:15', 5000, 0, 10000, 35000, 'Proses', 'Dibayar', 50000),
(26, 12, 1, 4, '2020-0026', '2020-03-05 17:00:00', '2020-03-27', NULL, NULL, NULL, NULL, 42000, 'Baru', 'Belum Dibayar', NULL),
(27, 12, 1, 1, '2020-0027', '2020-03-06 17:00:00', '2020-03-10', NULL, NULL, NULL, NULL, 42000, 'Baru', 'Belum Dibayar', NULL),
(28, 12, 1, 4, '2020-0028', '2020-03-07 17:00:00', '2020-03-10', '2020-03-08 08:43:52', NULL, NULL, NULL, 20000, 'Baru', 'Dibayar', 20000),
(29, 13, 1, 4, '2020-0029', '2020-03-07 17:00:00', '2020-03-10', '2020-03-08 12:12:17', NULL, NULL, NULL, 29000, 'Baru', 'Dibayar', 35000),
(30, 13, 1, 1, '2020-0030', '2020-03-07 17:00:00', '2020-03-18', '2020-03-08 12:22:20', NULL, NULL, NULL, 28000, 'Baru', 'Dibayar', 30000),
(31, 13, 1, 1, '2020-0031', '2020-03-07 17:00:00', '2020-03-18', '2020-03-08 12:22:38', NULL, NULL, NULL, 28000, 'Baru', 'Dibayar', 30000),
(32, 13, 1, 1, '2020-0032', '2020-03-07 17:00:00', '2020-03-17', NULL, NULL, NULL, NULL, 50000, 'Selesai', 'Belum Dibayar', NULL),
(33, 13, 1, 1, '2020-0033', '2020-03-07 17:00:00', '2020-03-17', NULL, NULL, NULL, NULL, 50000, 'Proses', 'Belum Dibayar', NULL),
(34, 13, 1, 1, '2020-0034', '2020-03-14 17:00:00', '2020-03-17', '2020-03-15 13:08:49', NULL, NULL, NULL, 50000, 'Diambil', 'Dibayar', 50000),
(35, 13, 1, 1, '2020-0035', '2020-03-07 17:00:00', '2020-03-09', NULL, NULL, NULL, NULL, 5000, 'Selesai', 'Belum Dibayar', NULL),
(36, 13, 1, 1, '2020-0036', '2020-03-07 17:00:00', '2020-03-11', '2020-03-08 15:08:16', NULL, NULL, NULL, 40000, 'Proses', 'Dibayar', 50000),
(37, 12, 1, 1, '2020-0037', '2020-03-14 17:00:00', '2020-03-10', '2020-03-08 15:08:06', NULL, NULL, NULL, 34000, 'Diambil', 'Dibayar', 45000),
(38, 12, 1, 2, '2020-0038', '2020-03-14 17:00:00', '2020-03-10', '2020-03-08 15:03:30', NULL, NULL, NULL, 25000, 'Selesai', 'Dibayar', 50000),
(39, 12, 1, 1, '2020-0039', '2020-03-07 17:00:00', '2020-03-10', '2020-03-08 15:05:39', NULL, NULL, NULL, 30000, 'Proses', 'Dibayar', 50000),
(40, 12, 1, 1, '2020-0040', '2020-03-14 17:00:00', '2020-03-10', '2020-03-10 09:31:21', NULL, NULL, NULL, 10000, 'Selesai', 'Dibayar', 10000),
(41, 12, 1, 1, '2020-0041', '2020-03-14 17:00:00', '2020-03-17', '2020-03-15 12:53:45', NULL, NULL, NULL, 40000, 'Diambil', 'Dibayar', 50000),
(42, 12, 1, 3, '2020-0042', '2020-03-15 13:45:26', '2020-03-17', '2020-03-15 12:54:27', NULL, NULL, NULL, 35000, 'Diambil', 'Dibayar', 50000),
(43, 12, 1, 4, '2020-0043', '2020-03-15 13:45:22', '2020-03-17', '2020-03-15 13:08:32', NULL, NULL, NULL, 0, 'Selesai', 'Dibayar', 5000),
(44, 12, 1, 1, '2020-0044', '2020-03-23 03:21:46', '2020-03-25', '2020-03-23 03:19:58', NULL, NULL, NULL, 40000, 'Proses', 'Dibayar', 50000),
(45, 12, 1, 1, '2020-0045', '2020-03-24 04:39:03', '2020-03-25', '2020-03-23 03:20:07', NULL, NULL, NULL, 40000, 'Selesai', 'Dibayar', 50000),
(46, 12, 1, 1, '2020-0046', '2020-03-24 04:39:13', '2020-03-28', '2020-03-23 03:20:37', NULL, NULL, NULL, 36000, 'Diambil', 'Dibayar', 40000),
(47, 12, 1, 1, '2020-0047', '2020-03-24 04:39:11', '2020-03-24', '2020-03-23 03:32:06', NULL, NULL, NULL, 50000, 'Selesai', 'Dibayar', 50000),
(48, 12, 1, 1, '2020-0048', '2020-03-24 04:39:07', '2020-03-25', '2020-03-23 04:33:53', NULL, NULL, NULL, 25000, 'Proses', 'Dibayar', 25000),
(49, 12, 1, 1, '2020-0049', '2020-03-24 04:39:05', '2020-03-25', '2020-03-23 23:41:43', NULL, NULL, NULL, 86000, 'Proses', 'Dibayar', 100000),
(50, 12, 1, 2, '2020-0050', '2020-04-15 05:39:50', '2020-03-28', '2020-04-15 12:39:50', NULL, NULL, NULL, 990000, 'Proses', 'Dibayar', 1000000),
(51, 12, 1, 1, '2020-0051', '2020-03-24 04:37:03', '2020-03-24', '2020-03-24 07:07:29', NULL, NULL, NULL, 275000, 'Baru', 'Dibayar', 300000),
(52, 12, 1, 1, '2020-0052', '2020-04-15 05:39:23', '2020-03-13', '2020-03-24 11:32:27', NULL, NULL, NULL, 18000, 'Diambil', 'Dibayar', 20000),
(53, 12, 1, 1, '2020-0053', '2020-03-24 04:44:01', '2020-03-24', '2020-03-24 11:35:40', 1000, 50, NULL, 37500, 'Diambil', 'Dibayar', 45000),
(54, 12, 1, 1, '2020-0054', '2020-03-25 03:36:20', '2020-03-26', '2020-03-25 10:36:02', NULL, NULL, NULL, 20000, 'Proses', 'Dibayar', 50000),
(55, 12, 1, 1, '2020-0055', '2020-04-15 05:37:47', '2020-04-17', '2020-04-15 12:37:47', NULL, NULL, NULL, 35000, 'Baru', 'Dibayar', 40000),
(56, 12, 1, 1, '2020-0056', '2020-04-15 17:29:03', '2020-04-17', '2020-04-16 00:26:58', NULL, NULL, NULL, 10000, 'Proses', 'Dibayar', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('Admin','Kasir','Owner') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_outlet`, `name`, `email`, `alamat`, `telepon`, `level`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 1, 'Administrator', 'admin@admin.com', 'Jl. Dupanduan', '083822623170', 'Admin', '$2y$10$.JRO0uoCw8jLtpGDIS8e8uW71I7SgLI9nY6HOpPMLawatx6aaHSf6', NULL, NULL, '2020-02-25 04:57:26', '2020-03-08 02:40:18'),
(13, 1, 'Cashier Man', 'cashier@mail.com', 'Jl. Kenanga', '083822623170', 'Kasir', '$2y$10$.JRO0uoCw8jLtpGDIS8e8uW71I7SgLI9nY6HOpPMLawatx6aaHSf6', NULL, NULL, '2020-03-04 23:41:11', '2020-03-04 23:41:11'),
(14, 1, 'I\'am Owner', 'owner@mail.com', 'Jl. Back Office', '083822623170', 'Owner', '$2y$10$ODSnd33PlhOgumOtVXpTvO97hyTBCNQGAmQcnJzJF8zskFa6l8Dcm', NULL, NULL, '2020-03-04 23:42:41', '2020-03-04 23:42:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_6` (`id_paket`),
  ADD KEY `fk_7` (`id_transaksi`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_4` (`id_outlet`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_1` (`id_member`),
  ADD KEY `fk_2` (`id_outlet`),
  ADD KEY `fk_3` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `outlet`
--
ALTER TABLE `outlet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_outlet`) REFERENCES `outlet` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `outlet` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
