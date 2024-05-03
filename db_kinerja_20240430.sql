-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 30, 2024 at 02:44 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kinerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_bidang_kegiatan`
--

CREATE TABLE `data_bidang_kegiatan` (
  `id` int(1) NOT NULL,
  `id_bidang_kegiatan` int(11) NOT NULL,
  `bidang_kegiatan` text NOT NULL,
  `bidang_kerja_id` text NOT NULL,
  `sub_bidang_kerja_id` text NOT NULL,
  `jenis_kegiatan_id` text NOT NULL,
  `sub_kegiatan` text NOT NULL,
  `item_sub_kegiatan` text NOT NULL,
  `pelaksanaan` text NOT NULL,
  `tahun` int(4) NOT NULL,
  `capaian` text NOT NULL,
  `keterangan` text NOT NULL,
  `bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_bidang_kegiatan`
--

INSERT INTO `data_bidang_kegiatan` (`id`, `id_bidang_kegiatan`, `bidang_kegiatan`, `bidang_kerja_id`, `sub_bidang_kerja_id`, `jenis_kegiatan_id`, `sub_kegiatan`, `item_sub_kegiatan`, `pelaksanaan`, `tahun`, `capaian`, `keterangan`, `bukti`) VALUES
(22, 1, 'Pengadaan resources cetak dan elektronik ', 'Bidang Dukungan Teknis', 'Pengadaan Bahan Perpustakaan', '1. Pengembangan koleksi perpustakaan - Menyediakan Sumber Resource Perpustakaan ', '', '', '', 0, '', '', ''),
(23, 1, 'Pengadaan resources cetak dan elektronik ', 'Bidang Dukungan Teknis', 'Pengadaan Bahan Perpustakaan', '1. Pengembangan koleksi perpustakaan - Menyediakan Sumber Resource Perpustakaan ', 'Kegiatan Perpanjangan Melanggan Database ', '- ClinicalKey Flex (Apr)\r\n- WILEY Social Science Humanities (Apr)\r\n- IEEE (Apr)', 'Triwulan 2', 2023, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_bidang_kerja`
--

CREATE TABLE `data_bidang_kerja` (
  `id` int(11) NOT NULL,
  `bidang_kerja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_bidang_kerja`
--

INSERT INTO `data_bidang_kerja` (`id`, `bidang_kerja`) VALUES
(1, 'Bidang Dukungan Teknis'),
(2, 'Bidang Pelayanan Pengguna'),
(3, 'Bidang Dukungan Teknologi Informasi'),
(4, 'Sub Bagian Tata Usaha'),
(5, 'Semua Bidang Kerja');

-- --------------------------------------------------------

--
-- Table structure for table `data_indikator_kinerja`
--

CREATE TABLE `data_indikator_kinerja` (
  `id` int(11) NOT NULL,
  `indikator` text NOT NULL,
  `satuan_id` int(11) NOT NULL,
  `kesuaian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_indikator_kinerja`
--

INSERT INTO `data_indikator_kinerja` (`id`, `indikator`, `satuan_id`, `kesuaian`) VALUES
(2, '(Rencana Strategis) Persentase Pemahaman Pemangku Kepentingan Terhadap Visi \"Menjadi suatu Perpustakaan Perguruan Tinggi yang berada dalam tataran dunia global dan terkemka dalam pelayanan terhadap civitas akademika', 1, 'Sesuai dengan Renstra'),
(3, '(Rencana Strategis) Persentase Impelementasi Branding USU', 1, 'Sesuai dengan Renstra'),
(4, '(Rencana Strategis) Indeks Kepuasan Pelayanan', 1, 'Sesuai dengan Renstra'),
(5, '(Rencana Strategis) Persentase Sivitas Akademika dan Tendik yang Mengimpelentasikan Tata Nilai BINTANG', 1, 'Sesuai dengan Renstra'),
(6, '(Program Kerja Rektor) Indeks Literasi Informasi', 1, 'Sesuai dengan Renstra'),
(7, '(Program Kerja Rektor) Persentase terlibatnya Sivitas Akademika dalam Budaya Perlindungan Lingkungan', 1, 'Sesuai dengan Renstra'),
(8, '(Program Kerja Rektor) Indeks Persentase Pustakawan Bersertifikasi', 1, 'Sesuai dengan Renstra');

-- --------------------------------------------------------

--
-- Table structure for table `data_satuan`
--

CREATE TABLE `data_satuan` (
  `id` int(11) NOT NULL,
  `satuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_satuan`
--

INSERT INTO `data_satuan` (`id`, `satuan`) VALUES
(1, '%'),
(3, 'Rupiah');

-- --------------------------------------------------------

--
-- Table structure for table `data_sub_bidang_kerja`
--

CREATE TABLE `data_sub_bidang_kerja` (
  `id` int(11) NOT NULL,
  `sub_bidang_kerja` text NOT NULL,
  `bidang_kerja_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_sub_bidang_kerja`
--

INSERT INTO `data_sub_bidang_kerja` (`id`, `sub_bidang_kerja`, `bidang_kerja_id`) VALUES
(1, 'Pengadaan Bahan Perpustakaan', 1),
(2, 'Pengatalogan', 1),
(3, 'Preservasi dan Konservasi', 1),
(4, 'Manajemen Koleksi dan Dukungan Akreditasi', 1),
(5, 'Pelayanan Sirkulasi', 2),
(6, 'Referensi dan Literasi Informasi', 2),
(7, 'Penataan Bahan Perpustakaan Cetak', 2),
(8, 'Pelayanan Perpustakaan Cabang', 2),
(9, 'Infrastruktur Teknologi Informasi', 3),
(10, 'Repositori Universitas', 3),
(11, 'Publikasi Web & Sumber Daya Elektronik', 3),
(12, 'Urusan Keuangan', 4),
(13, 'Urusan Kepegawaian dan Kearsipan', 4),
(14, 'Urusan Sarana dan Prasarana', 4);

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi_file`
--

CREATE TABLE `evaluasi_file` (
  `id` int(11) NOT NULL,
  `evaluasi_id` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `mime_type` varchar(255) NOT NULL,
  `nama_file_asli` varchar(255) NOT NULL,
  `upload_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kegiatan`
--

CREATE TABLE `jenis_kegiatan` (
  `id` int(11) NOT NULL,
  `jenis_kegiatan` varchar(255) NOT NULL,
  `sub_bidang_kegiatan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_kegiatan`
--

INSERT INTO `jenis_kegiatan` (`id`, `jenis_kegiatan`, `sub_bidang_kegiatan_id`) VALUES
(13, 'Kegiatan Perpanjangan Melanggan Database ', 0),
(14, 'Kegiatan Pengadaan Baru Database ', 0),
(15, 'Kegiatan Pengadaan e-book perpetual ', 0),
(16, 'Pengadaan Buku Cetak', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pelaksanaan_kegiatan`
--

CREATE TABLE `pelaksanaan_kegiatan` (
  `id` int(11) NOT NULL,
  `jen_kegiatan_id` varchar(255) NOT NULL,
  `item_kegiatan` varchar(255) NOT NULL,
  `pelaksanaan` varchar(255) NOT NULL,
  `tahun` int(4) NOT NULL,
  `bobot` int(3) NOT NULL,
  `status` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelaksanaan_kegiatan`
--

INSERT INTO `pelaksanaan_kegiatan` (`id`, `jen_kegiatan_id`, `item_kegiatan`, `pelaksanaan`, `tahun`, `bobot`, `status`, `keterangan`, `bukti`) VALUES
(5, '13', 'ClinicalKey Flex (April)<br> Wiley Social Science Humanities (April)<br> IEEE (April)', 'Triwulan 2', 2023, 28, 'Sudah Terlaksana', 'Terlaksana 100% - Sesuai RKA', ''),
(6, '13', 'ProQuest (September)<br> EBSCO (Juli)<br> WESTLAW (Juli)<br> Emerald (Juli)<br> CNKI (juli)<br> ScienceDirect (Juli)', 'Triwulan 3', 2023, 72, 'Belum Terlaksana', '', 'uploads/tes1.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `sasaran_kegiatan`
--

CREATE TABLE `sasaran_kegiatan` (
  `id` int(11) NOT NULL,
  `sasaran` text NOT NULL,
  `ind_kinerja` text NOT NULL,
  `target` int(3) NOT NULL,
  `kesesuaian` varchar(255) NOT NULL,
  `tahun` year(4) NOT NULL,
  `created` datetime DEFAULT NULL,
  `edited` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sasaran_kegiatan`
--

INSERT INTO `sasaran_kegiatan` (`id`, `sasaran`, `ind_kinerja`, `target`, `kesesuaian`, `tahun`, `created`, `edited`) VALUES
(1, 'Terbangunnya Komitmen yang Kuat Untuk Mewujudkan Visi dan Misi', '(Rencana Strategis) Persentase Pemahaman Pemangku Kepentingan Terhadap Visi', 100, 'Renstra', 2023, NULL, '2024-04-30 01:23:20'),
(2, 'Terbangunnya Komitmen yang Kuat Untuk Mewujudkan Visi', '(Rencana Strategis) Persentase Implementasi Branding USU', 95, 'Renstra', 2023, NULL, '2024-04-30 00:28:40'),
(3, 'Terciptanya Kampus Hijau yang Aman, Nyaman dan Sehat sebagai Rumah Cinta', '(Rencana Strategis) Indeks Kepuasan Pelayanan ', 95, 'Renstra', 2023, NULL, '2024-04-30 00:28:43'),
(4, 'Terinternalisasinya Karakter Bintang pada Seluruh Sivitas Akademika dan Tenaga Kependidikan', '(Rencana Strategis) Persentase Sivitas Akademika dan Tendik yang Mengimplementasikan Tata Nilai BINTANG', 90, 'Renstra', 2023, NULL, '2024-04-30 00:28:17'),
(5, 'Terciptanya Kampus Hijau yang Aman, Nyaman dan Sehat sebagai Rumah Akademik', '(Program Kerja Rektor) Indeks Literasi Informasi', 95, 'Renstra', 2023, NULL, '2024-04-30 00:28:49'),
(7, 'Terbangunnya Komitmen yang Kuat Untuk Mewujudkan Visi dan Misi', '(Rencana Strategis) Persentase Pemahaman Pemangku Kepentingan Terhadap VisiMenjadi suatu perpustakaan perguruan tinggi yang berada dalam tataran dunia global dan terkemukadalam pelayanan terhadap sivitas akademikanya', 100, 'Renstra', 2024, '2024-04-30 00:36:10', '2024-04-30 00:38:13'),
(8, 'Terbangunnya Komitmen yang Kuat Untuk Mewujudkan Visi', '(Rencana Strategis) Persentase Implementasi Branding USU', 95, 'Renstra', 2024, '2024-04-30 00:52:42', '2024-04-30 00:56:45'),
(9, 'Terciptanya Kampus Hijau yang Aman, Nyaman dan Sehat sebagai Rumah Akademik', '(Rencana Strategis) \r\nIndeks Kepuasan Pelayanan ', 95, 'Renstra', 2024, '2024-04-30 00:58:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_bid_kegiatan`
--

CREATE TABLE `sub_bid_kegiatan` (
  `id` int(11) NOT NULL,
  `sub_bid_kegiatan` text NOT NULL,
  `tahun` year(4) NOT NULL,
  `sasaran_kegiatan_id` int(11) NOT NULL,
  `bidang_kerja_id` text NOT NULL,
  `sub_bidang_kerja_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_bid_kegiatan`
--

INSERT INTO `sub_bid_kegiatan` (`id`, `sub_bid_kegiatan`, `tahun`, `sasaran_kegiatan_id`, `bidang_kerja_id`, `sub_bidang_kerja_id`) VALUES
(1, 'Pengembangan koleksi perpustakaan - Menyediakan Sumber Resource Perpustakaan ', 2023, 1, '1', '1'),
(2, 'Pengembangan dan peningkatan keterampilan serta jumlah SDM', 2023, 1, '4', '0'),
(3, 'Pengembangan sistem informasi manajemen perpustakaan', 2023, 1, '3', '9'),
(4, 'Pengembangan pelayanan pengguna', 2023, 1, '1,2', '0'),
(5, 'Pengembangan Sistem Manajemen Mutu', 2023, 1, '5', '0'),
(10, 'Pengembangan Koleksi -Pengadaan resources cetak dan elektronik', 2024, 1, '1,2', '1,2');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id` int(5) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` enum('user','admin') NOT NULL,
  `jabatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id`, `nama`, `username`, `password`, `level`, `jabatan`) VALUES
(1, 'M. Syufinur', 'sufi', '12345', 'user', ''),
(2, 'radea', 'radea', 'radea', 'admin', ''),
(3, 'Evi Yulfimar, S.Sos', 'Evi', 'perpus123', 'user', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_bidang_kegiatan`
--
ALTER TABLE `data_bidang_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_bidang_kerja`
--
ALTER TABLE `data_bidang_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_indikator_kinerja`
--
ALTER TABLE `data_indikator_kinerja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `satuan_id` (`satuan_id`);

--
-- Indexes for table `data_satuan`
--
ALTER TABLE `data_satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_sub_bidang_kerja`
--
ALTER TABLE `data_sub_bidang_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluasi_file`
--
ALTER TABLE `evaluasi_file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `evaluasi_id` (`evaluasi_id`);

--
-- Indexes for table `jenis_kegiatan`
--
ALTER TABLE `jenis_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelaksanaan_kegiatan`
--
ALTER TABLE `pelaksanaan_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sasaran_kegiatan`
--
ALTER TABLE `sasaran_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_bid_kegiatan`
--
ALTER TABLE `sub_bid_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_bidang_kegiatan`
--
ALTER TABLE `data_bidang_kegiatan`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `data_bidang_kerja`
--
ALTER TABLE `data_bidang_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_indikator_kinerja`
--
ALTER TABLE `data_indikator_kinerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_satuan`
--
ALTER TABLE `data_satuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `evaluasi_file`
--
ALTER TABLE `evaluasi_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_kegiatan`
--
ALTER TABLE `jenis_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pelaksanaan_kegiatan`
--
ALTER TABLE `pelaksanaan_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sasaran_kegiatan`
--
ALTER TABLE `sasaran_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sub_bid_kegiatan`
--
ALTER TABLE `sub_bid_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
