-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 12 Des 2019 pada 14.53
-- Versi Server: 10.1.43-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kd_barang` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `stok` int(5) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kd_barang`, `nama`, `stok`, `deskripsi`, `gambar`) VALUES
('B-001', 'sepatu', 30, 'sepatu', 'defaut.jpg'),
('B-002', 'GISELLE SANDAL', 10, 'Sandal Perempuan', 'defaut.jpg'),
('B-003', 'DAMELIA SHANNON', 40, 'sepatu peremouan', 'defaut.jpg'),
('B-004', 'naomi sandal', 20, 'sandal perempuan', 'defaut.jpg'),
('B-005', 'DAMELIA ALANA FLAT', 16, 'Sandal wanita', ''),
('B-006', 'QUEEN HELLS ', 60, 'Sandal Wanita', 'default.jpg'),
('B-007', 'ALESSA HEELS', 15, 'Sandal Wanita', 'default.jpg'),
('B-008', 'ANGELIN HEELS', 20, 'Sandal Wanita', 'default.jpg'),
('B-009', 'WEDGES RALINE', 40, 'Sndal Wanita', 'default.jpg'),
('B-010', 'RHEVA', 50, 'Sandal Wanita', 'default.jpg'),
('B-011', 'Docmart', 30, 'Sandal Wanita', 'default.jpg'),
('B-012', 'Clair', 10, 'Saldal Wanita', 'default.jpg'),
('B-013', 'flatPLS', 30, 'Sandal Wanita', 'default.jpg'),
('B-014', 'Flatcheer', 20, 'Saldal Wanita', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `kd_barang_keluar` varchar(8) NOT NULL,
  `kd_barang` varchar(5) NOT NULL,
  `jumlah` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `toko` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`kd_barang_keluar`, `kd_barang`, `jumlah`, `tanggal`, `toko`) VALUES
('BM-004', 'B-013', '30', '2019-12-11', '001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `kd_barang_masuk` varchar(8) NOT NULL,
  `kd_barang` varchar(5) NOT NULL,
  `kd_suplier` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`kd_barang_masuk`, `kd_barang`, `kd_suplier`, `tanggal`, `jumlah`) VALUES
('BM-001', 'B-001', 'S-001', '2019-12-06', 30),
('BM-011', 'B-011', 'S-002', '2019-12-12', 30),
('BM-012', 'B-012', 'S-002', '2019-12-10', 10),
('BM-14', 'B-014', 'S-001', '2019-12-10', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `kd_dokumen` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `suplier`
--

CREATE TABLE `suplier` (
  `kd_suplier` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suplier`
--

INSERT INTO `suplier` (`kd_suplier`, `nama`, `no_tlp`, `email`, `alamat`) VALUES
('S-001', 'rudi sepattu', '09854325321', 'sepatu@gmail.com', 'jombaang'),
('S-002', 'Shoes store', '08211145890', 'Shoes12@gmail.com', 'Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `kd_toko` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`kd_toko`, `nama`, `no_tlp`, `email`, `alamat`) VALUES
('001', 'melstore', '021994321', 'melstore.com', 'Depok Town Squere LT.GS27,Jl Margonda Beji.Depok'),
('002', 'Melstore_JKT', '09854325555', 'Melstore_JKT@gmail.com', 'JL.Turi No.61/03 Lenteng agung Jakarta Selatan');

-- --------------------------------------------------------

--
-- Stand-in structure for view `transaksi_masuk`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `transaksi_masuk` (
`kode_barang_masuk` varchar(8)
,`kode_barang` varchar(5)
,`tanggal` date
,`jumlah` int(11)
,`nama_barang` varchar(30)
,`nama_suplier` varchar(30)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `kd_user` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `password` tinytext NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`kd_user`, `nama`, `email`, `no_tlp`, `password`, `role`) VALUES
('2014141140', 'admin', 'admin', '081222129621', '$2y$10$PqEfdEkoOJ4XNrzgWY5aKutJ0Zq/2TsOsnREA7Q5w1NlmI1DKCFTm', 'admin'),
('2014141141', 'toko', 'toko@toko.com', '0877736823', '$2y$10$tCvz92f.eDxhJQSZHlkMpu8msPedEeHcRJ.g1lvq5SoWLmYFHG2wO', 'admin_toko');

-- --------------------------------------------------------

--
-- Struktur untuk view `transaksi_masuk`
--
DROP TABLE IF EXISTS `transaksi_masuk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `transaksi_masuk`  AS  select `a`.`kd_barang_masuk` AS `kode_barang_masuk`,`a`.`kd_barang` AS `kode_barang`,`a`.`tanggal` AS `tanggal`,`a`.`jumlah` AS `jumlah`,`b`.`nama` AS `nama_barang`,`c`.`nama` AS `nama_suplier` from ((`barang_masuk` `a` join `barang` `b` on((`a`.`kd_barang` = `b`.`kd_barang`))) join `suplier` `c` on((`a`.`kd_suplier` = `c`.`kd_suplier`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`kd_barang_keluar`),
  ADD KEY `kd_barang` (`kd_barang`),
  ADD KEY `kd_barang_2` (`kd_barang`),
  ADD KEY `kd_barang_3` (`kd_barang`),
  ADD KEY `toko` (`toko`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`kd_barang_masuk`),
  ADD KEY `kd_barang_masuk` (`kd_barang_masuk`),
  ADD KEY `kd_suplier` (`kd_suplier`),
  ADD KEY `kd_barang` (`kd_barang`),
  ADD KEY `kd_barang_2` (`kd_barang`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`kd_dokumen`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`kd_suplier`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`kd_toko`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kd_user`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD CONSTRAINT `barang_keluar_ibfk_1` FOREIGN KEY (`toko`) REFERENCES `toko` (`kd_toko`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_keluar_ibfk_2` FOREIGN KEY (`kd_barang`) REFERENCES `barang` (`kd_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD CONSTRAINT `barang_masuk_ibfk_1` FOREIGN KEY (`kd_barang`) REFERENCES `barang` (`kd_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_masuk_ibfk_2` FOREIGN KEY (`kd_suplier`) REFERENCES `suplier` (`kd_suplier`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
