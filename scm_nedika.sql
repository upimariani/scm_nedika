-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Okt 2023 pada 14.16
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scm_nedika`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id_bb` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `nama_bb` varchar(125) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga_bb` varchar(15) NOT NULL,
  `stok_supplier` int(11) NOT NULL,
  `satuan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bahan_baku`
--

INSERT INTO `bahan_baku` (`id_bb`, `id_supplier`, `nama_bb`, `deskripsi`, `harga_bb`, `stok_supplier`, `satuan`) VALUES
(1, 2, 'Kardus', 'deskripsi kardus', '50000', 1998, 'pack'),
(2, 4, 'Sedotan', 'deskripsi sedotan', '10000', 2000, 'pack'),
(3, 3, 'Solatip', 'deskripsi solatip', '5000', 2000, 'pcs'),
(4, 1, 'Air', 'Deskripsi Air...', '12000', 100, 'liter'),
(5, 5, 'Cup', 'Deskripsi Cup', '8000', 25, 'pcs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bb_keluar`
--

CREATE TABLE `bb_keluar` (
  `id_bb_keluar` int(11) NOT NULL,
  `id_po_dbb` int(11) NOT NULL,
  `tgl_keluar` varchar(20) NOT NULL,
  `qty_keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bb_keluar`
--

INSERT INTO `bb_keluar` (`id_bb_keluar`, `id_po_dbb`, `tgl_keluar`, `qty_keluar`) VALUES
(1, 1, '2023-09-12', 2),
(2, 1, '2023-09-12', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `po_bb`
--

CREATE TABLE `po_bb` (
  `id_po_bb` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `tgl_transaksi` varchar(15) NOT NULL,
  `total_bayar` varchar(15) NOT NULL,
  `stat_bayar` int(11) NOT NULL,
  `bukti_bayar` text NOT NULL,
  `status_order` int(11) NOT NULL,
  `alamat_pengiriman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `po_bb`
--

INSERT INTO `po_bb` (`id_po_bb`, `id_user`, `id_supplier`, `tgl_transaksi`, `total_bayar`, `stat_bayar`, `bukti_bayar`, `status_order`, `alamat_pengiriman`) VALUES
(1, 1, 1, '2023-01-01', '44150000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 1, 'Kuningan'),
(2, 1, 1, '2023-01-02', '10690000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(3, 1, 1, '2023-01-03', '8400000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(4, 1, 1, '2023-02-04', '655000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(5, 1, 1, '2023-02-05', '8540000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(6, 1, 1, '2023-02-06', '5680000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(7, 1, 1, '2023-02-07', '1490000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(8, 1, 1, '2023-03-08', '5995000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(9, 1, 1, '2023-03-09', '4395000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(10, 1, 1, '2023-03-10', '47550000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(11, 1, 1, '2023-03-11', '2130000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(12, 1, 1, '2023-04-12', '4100000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(13, 1, 1, '2023-04-13', '2065000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(14, 1, 1, '2023-04-14', '51500000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(15, 1, 1, '2023-04-15', '11800000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(16, 1, 1, '2023-05-16', '36000000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(17, 1, 1, '2023-05-17', '4450000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(18, 1, 1, '2023-05-18', '8340000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(19, 1, 1, '2023-05-19', '11490000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(20, 1, 1, '2023-05-20', '42050000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(21, 1, 1, '2023-05-21', '7030000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(22, 1, 1, '2023-05-22', '3750000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(23, 1, 1, '2023-06-23', '11200000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(24, 1, 1, '2023-06-24', '895000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(25, 1, 1, '2023-06-25', '1890000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(26, 1, 1, '2023-06-26', '2760000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(27, 1, 1, '2023-06-27', '9050000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(28, 1, 1, '2023-06-28', '5950000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(29, 1, 1, '2023-06-29', '52350000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(30, 1, 1, '2023-06-30', '1665000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(31, 1, 1, '2023-07-01', '2460000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(32, 1, 1, '2023-07-02', '53200000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(33, 1, 1, '2023-07-03', '4970000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(34, 1, 1, '2023-07-04', '1685000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(35, 1, 1, '2023-07-05', '4440000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(36, 1, 1, '2023-07-06', '1530000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(37, 1, 1, '2023-07-07', '8100000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(38, 1, 1, '2023-07-08', '33500000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(39, 1, 1, '2023-07-09', '815000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(40, 1, 1, '2023-07-10', '5155000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(41, 1, 1, '2023-07-11', '56150000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(42, 1, 1, '2023-07-12', '23450000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(43, 1, 1, '2023-07-13', '16400000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(44, 1, 1, '2023-07-14', '2390000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(45, 1, 1, '2023-07-15', '16000000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(46, 1, 1, '2023-07-16', '770000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(47, 1, 1, '2023-07-17', '11530000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(48, 1, 1, '2023-07-18', '4020000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(49, 1, 1, '2023-07-19', '21200000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(50, 1, 1, '2023-07-20', '4450000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(51, 1, 1, '2023-07-21', '16900000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(52, 1, 1, '2023-07-22', '36000000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(53, 1, 1, '2023-07-23', '54100000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(54, 1, 1, '2023-07-24', '59200000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(55, 1, 1, '2023-07-25', '1060000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(56, 1, 1, '2023-07-26', '1130000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(57, 1, 1, '2023-07-27', '2840000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(58, 1, 1, '2023-07-28', '7430000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(59, 1, 1, '2023-07-29', '5205000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(60, 1, 1, '2023-07-30', '2355000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(61, 1, 1, '2023-07-31', '9040000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(62, 1, 1, '2023-08-01', '8540000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(63, 1, 1, '2023-08-02', '2680000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(64, 1, 1, '2023-08-03', '4605000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(65, 1, 1, '2023-08-04', '4010000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(66, 1, 1, '2023-08-05', '1020000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(67, 1, 1, '2023-08-06', '11430000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan'),
(68, 1, 1, '2023-08-07', '1380000', 1, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg', 4, 'Kuningan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `po_dbb`
--

CREATE TABLE `po_dbb` (
  `id_po_dbb` int(11) NOT NULL,
  `id_po_bb` int(11) NOT NULL,
  `id_bb` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `po_dbb`
--

INSERT INTO `po_dbb` (`id_po_dbb`, `id_po_bb`, `id_bb`, `qty`) VALUES
(1, 1, 1, 883),
(2, 2, 2, 1069),
(3, 3, 1, 168),
(4, 4, 3, 131),
(5, 5, 2, 854),
(6, 6, 2, 568),
(7, 7, 2, 149),
(8, 8, 3, 1199),
(9, 9, 3, 879),
(10, 10, 1, 951),
(11, 11, 2, 213),
(12, 12, 2, 410),
(13, 13, 3, 413),
(14, 14, 1, 1030),
(15, 15, 2, 1180),
(16, 16, 1, 720),
(17, 17, 2, 445),
(18, 18, 2, 834),
(19, 19, 2, 1149),
(20, 20, 1, 841),
(21, 21, 2, 703),
(22, 22, 3, 750),
(23, 23, 1, 224),
(24, 24, 3, 179),
(25, 25, 3, 378),
(26, 26, 3, 552),
(27, 27, 2, 905),
(28, 28, 1, 119),
(29, 29, 1, 1047),
(30, 30, 3, 333),
(31, 31, 3, 492),
(32, 32, 1, 1064),
(33, 33, 3, 994),
(34, 34, 3, 337),
(35, 35, 2, 444),
(36, 36, 3, 306),
(37, 37, 2, 810),
(38, 38, 1, 670),
(39, 39, 3, 163),
(40, 40, 3, 1031),
(41, 41, 1, 1123),
(42, 42, 1, 469),
(43, 43, 1, 328),
(44, 44, 2, 239),
(45, 45, 1, 320),
(46, 46, 3, 154),
(47, 47, 2, 1153),
(48, 48, 3, 804),
(49, 49, 1, 424),
(50, 50, 3, 890),
(51, 51, 1, 338),
(52, 52, 1, 720),
(53, 53, 1, 1082),
(54, 54, 1, 1184),
(55, 55, 3, 212),
(56, 56, 2, 113),
(57, 57, 3, 568),
(58, 58, 2, 743),
(59, 59, 3, 1041),
(60, 60, 3, 471),
(61, 61, 2, 904),
(62, 62, 2, 854),
(63, 63, 3, 536),
(64, 64, 3, 921),
(65, 65, 3, 802),
(66, 66, 3, 204),
(67, 67, 2, 1143),
(68, 68, 3, 276);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat`, `no_hp`, `username`, `password`) VALUES
(1, 'Supplier 1', 'Kuningan, Jawa Barat', '089876676765', 'supplier1', 'supplier1'),
(2, 'Supplier 2', 'Kuningan, Jawa Barat', '089987656651', 'Supplier2', 'Supplier2'),
(3, 'Supplier 3', 'Kuningan, Jawa Barat', '087887123211', 'supplier3', 'supplier3'),
(4, 'Supplier 4', 'Kuningan, Jawa Barat', '089987123221', 'supplier4', 'supplier4'),
(5, 'Supplier 5', 'Kuningan, Jawa Barat', '089976512321', 'supplier5', 'supplier5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `alamat_user` text NOT NULL,
  `no_hp_user` varchar(15) NOT NULL,
  `username_user` varchar(125) NOT NULL,
  `password_user` varchar(125) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat_user`, `no_hp_user`, `username_user`, `password_user`, `level_user`) VALUES
(1, 'Admin', 'Kuningan, Jawa Barat', '089987656543', 'admin', 'admin', 1),
(2, 'Gudang', 'Kuningan, Jawa Barat', '089987677654', 'gudang', 'gudang', 2),
(3, 'Owner', 'Kuningan, Jawa Barat', '089987645312', 'owner', 'owner', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id_bb`);

--
-- Indeks untuk tabel `bb_keluar`
--
ALTER TABLE `bb_keluar`
  ADD PRIMARY KEY (`id_bb_keluar`);

--
-- Indeks untuk tabel `po_bb`
--
ALTER TABLE `po_bb`
  ADD PRIMARY KEY (`id_po_bb`);

--
-- Indeks untuk tabel `po_dbb`
--
ALTER TABLE `po_dbb`
  ADD PRIMARY KEY (`id_po_dbb`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahan_baku`
--
ALTER TABLE `bahan_baku`
  MODIFY `id_bb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `bb_keluar`
--
ALTER TABLE `bb_keluar`
  MODIFY `id_bb_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `po_bb`
--
ALTER TABLE `po_bb`
  MODIFY `id_po_bb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `po_dbb`
--
ALTER TABLE `po_dbb`
  MODIFY `id_po_dbb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
