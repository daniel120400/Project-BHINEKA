-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 26 Jun 2021 pada 11.25
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhineka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kd_brg` char(6) NOT NULL,
  `nm_brg` varchar(30) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `stok_min` int(11) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kd_brg`, `nm_brg`, `satuan`, `harga`, `harga_beli`, `stok`, `stok_min`, `gambar`, `desc`) VALUES
('A-0001', 'salmon', '1 KG', 300000, 302500, 10, 2, 'salmon.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
('B-0001', 'Ikan Bandeng', '1 KG', 25000, 25000, 100, 2, 'ikan bandeng.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
('B-0002', 'Tuna', '3 KG', 16000, 15000, 120, 5, 'tuna.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` varchar(50) NOT NULL,
  `kode_produk` varchar(200) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `kode_cart` int(100) NOT NULL,
  `nama_produk` varchar(500) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `satuan` int(100) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `id` varchar(200) NOT NULL,
  `kode_checkout` int(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `jumlah` int(200) NOT NULL,
  `satuan` int(200) NOT NULL,
  `harga_total` int(200) NOT NULL,
  `harga_asl` int(200) NOT NULL,
  `negara` varchar(200) NOT NULL,
  `provinsi` varchar(200) NOT NULL,
  `kota_kabupaten` varchar(200) NOT NULL,
  `kelurahan` varchar(200) NOT NULL,
  `alamat_lengkap` varchar(200) NOT NULL,
  `post_code` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `duser`
--

CREATE TABLE `duser` (
  `id` int(8) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(400) NOT NULL,
  `user` varchar(20) CHARACTER SET utf8 NOT NULL,
  `pass` varchar(128) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `duser`
--

INSERT INTO `duser` (`id`, `gambar`, `nama`, `user`, `pass`) VALUES
(1, '', '', 'Daniel Muharom A S', '12102'),
(2, '', '', 'Adelia', '0004'),
(3, '', '', 'albert', 'albert'),
(13, 'cathrynxlim_2.jpg', 'abdul', 'abdul22', 'abdul22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `id` varchar(200) NOT NULL,
  `kode_payment` int(200) NOT NULL,
  `gambar` varchar(400) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `bank` varchar(200) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `no_rek` int(200) NOT NULL,
  `harga_total` int(200) NOT NULL,
  `kurir` varchar(200) NOT NULL,
  `alamat` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`id`, `kode_payment`, `gambar`, `nama_produk`, `jumlah`, `bank`, `nama_lengkap`, `no_rek`, `harga_total`, `kurir`, `alamat`) VALUES
('abdul22', 1, '38435464_2292562510816994_6414436525890600960_n.jpg', 'salmon', 5, 'BRI', 'ABDUL', 8123667, 1512500, 'TIKI', 'SDAFD,SADFSADF,ASDFSDAF,ASDFASDFSA,ASDFSADF,ASDFSADF');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_brg`);

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`kode_cart`);

--
-- Indeks untuk tabel `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`kode_checkout`);

--
-- Indeks untuk tabel `duser`
--
ALTER TABLE `duser`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`kode_payment`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `kode_cart` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `checkout`
--
ALTER TABLE `checkout`
  MODIFY `kode_checkout` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `duser`
--
ALTER TABLE `duser`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `payment`
--
ALTER TABLE `payment`
  MODIFY `kode_payment` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
