-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 01:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_bidang_kegiatan`
--

INSERT INTO `data_bidang_kegiatan` (`id`, `id_bidang_kegiatan`, `bidang_kegiatan`, `bidang_kerja_id`, `sub_bidang_kerja_id`, `jenis_kegiatan_id`, `sub_kegiatan`, `item_sub_kegiatan`, `pelaksanaan`, `tahun`, `capaian`, `keterangan`, `bukti`) VALUES
(11, 1, 'Pengadaan resources cetak dan elektronik ', 'Bidang Dukungan Teknis', 'Pengadaan Bahan Perpustakaan', '1. Pengembangan koleksi perpustakaan - Menyediakan Sumber Resource Perpustakaan ', '', '', '', 0, 'Belum Terlaksana', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_bidang_kerja`
--

CREATE TABLE `data_bidang_kerja` (
  `id` int(11) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `jenis_kegiatan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_bidang_kerja`
--

INSERT INTO `data_bidang_kerja` (`id`, `bidang`, `jenis_kegiatan_id`) VALUES
(1, 'Bidang Dukungan Teknis', 0),
(2, 'Bidang Pelayanan Pengguna', 0),
(3, 'Bidang Dukungan Teknologi Informasi', 0),
(4, 'Sub Bagian Tata Usaha', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_indikator_kinerja`
--

CREATE TABLE `data_indikator_kinerja` (
  `id` int(11) NOT NULL,
  `indikator` text NOT NULL,
  `satuan_id` int(11) NOT NULL,
  `kesuaian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `data_jenis_kegiatan`
--

CREATE TABLE `data_jenis_kegiatan` (
  `id` int(11) NOT NULL,
  `jenis_kegiatan` varchar(255) NOT NULL,
  `sasaran_kegiatan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_jenis_kegiatan`
--

INSERT INTO `data_jenis_kegiatan` (`id`, `jenis_kegiatan`, `sasaran_kegiatan_id`) VALUES
(1, 'Pengembangan Koleksi Perpustakaan - Menyediakan Sumber Resource Perpustakaan', 0),
(2, 'Pengembangan dan Peningkatan keterampilan serta jumlah SDM', 0),
(3, 'Pengembangan sistem informasi menajemen perpustakaan', 0),
(4, 'pengembangan pelayanan pengguna', 0),
(5, 'Pengembangan Sistem Manajemen Mutu', 0),
(6, 'Peningkatan akses terhadap sumber daya informasi tercetak dan elektronik', 0),
(7, 'Penguatan tata pamong untuk fungsionalisasi jabatan pustakawan', 0),
(8, 'Pengembangan pelayanan pengguna', 0),
(9, 'Peningkatan akses terhadap sumber daya informasi tercetak dan elektronik', 0),
(11, 'Peningkatan keindahan dan kenyamanan lingkungan perpustakaan', 0),
(12, 'Membangun Komitmen untuk mewujudkan visi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_sasaran_kegiatan`
--

CREATE TABLE `data_sasaran_kegiatan` (
  `id` int(11) NOT NULL,
  `sasaran` text NOT NULL,
  `ind_kinerja` text NOT NULL,
  `target` varchar(255) NOT NULL,
  `kesesuaian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_sasaran_kegiatan`
--

INSERT INTO `data_sasaran_kegiatan` (`id`, `sasaran`, `ind_kinerja`, `target`, `kesesuaian`) VALUES
(1, 'Terbangunnya Komitmen yang Kuat Untuk Mewujudkan Visi dan Misi', '(Rencana Strategis) \r\nPersentase Pemahaman Pemangku Kepentingan Terhadap Visi\r\n\"Menjadi suatu\r\nperpustakaan perguruan tinggi yang berada dalam tataran dunia global dan terkemuka\r\ndalam pelayanan terhadap sivitas akademikanya\"', '100%', 'Renstra'),
(2, 'Terbangunnya Komitmen yang Kuat Untuk Mewujudkan Visi', '(Rencana Strategis) \r\nPersentase Implementasi Branding USU', '95%', 'Renstra'),
(3, 'Terciptanya Kampus Hijau yang Aman, Nyaman dan Sehat sebagai Rumah Akademik', '(Rencana Strategis) Indeks Kepuasan Pelayanan ', '95%', 'Renstra'),
(4, 'Terinternalisasinya Karakter Bintang pada Seluruh Sivitas Akademika dan Tenaga Kependidikan', '(Rencana Strategis) Persentase Sivitas Akademika dan Tendik yang Mengimplementasikan Tata Nilai BINTANG', '90%', 'Renstra'),
(5, 'Terciptanya Kampus Hijau yang Aman, Nyaman dan Sehat sebagai Rumah Akademik', '(Program Kerja Rektor) Indeks Literasi Informasi', '95%', 'Renstra'),
(6, 'Terinternalisasinya Karakter Bintang pada seluruh sivitas akademika dan tenaga kependidikan', '(Program Kerja Rektor) Persentase Terlibatnya Sivitas Akademika Dalam Budaya Perlindungan Lingkungan', '85%', 'Renstra'),
(7, 'Terciptanya Sivitas Akademika dan Tenaga Kependidikan yang Mampu Bersaing dalam Tataran global', '(Program Kerja Rektor) Indeks Persentase Pustakawan Bersertifikasi', '60%', 'Renstra');

-- --------------------------------------------------------

--
-- Table structure for table `data_satuan`
--

CREATE TABLE `data_satuan` (
  `id` int(11) NOT NULL,
  `satuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_satuan`
--

INSERT INTO `data_satuan` (`id`, `satuan`) VALUES
(1, '%'),
(3, 'Rupiah');

-- --------------------------------------------------------

--
-- Table structure for table `data_sub_bidang_kegiatan`
--

CREATE TABLE `data_sub_bidang_kegiatan` (
  `id` int(11) NOT NULL,
  `bidang_kegiatan_id` int(11) NOT NULL,
  `sub_kegiatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_sub_bidang_kerja`
--

CREATE TABLE `data_sub_bidang_kerja` (
  `id` int(11) NOT NULL,
  `sub_bidang_kerja` text NOT NULL,
  `bidang_kerja_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `evaluasi`
--

CREATE TABLE `evaluasi` (
  `id` int(11) NOT NULL,
  `indikator_sub_kegiatan_id` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `realisasi_target_volume` double NOT NULL,
  `realisasi_target_rp` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indikator_kinerja_kegiatan`
--

CREATE TABLE `indikator_kinerja_kegiatan` (
  `id` int(11) NOT NULL,
  `sasaran_id` int(11) NOT NULL,
  `indikator_kinerja_id` int(11) NOT NULL,
  `target` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indikator_kinerja_kegiatan_jenis`
--

CREATE TABLE `indikator_kinerja_kegiatan_jenis` (
  `id` int(11) NOT NULL,
  `indikator_kinerja_kegiatan_id` int(11) NOT NULL,
  `jenis_kegiatan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indikator_sub_kegiatan`
--

CREATE TABLE `indikator_sub_kegiatan` (
  `id` int(11) NOT NULL,
  `sub_keg_id` int(11) NOT NULL,
  `indikator` text NOT NULL,
  `triwulan` enum('1','2','3','4') NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `indikator_kinerja_kegiatan_jenis_id` int(11) NOT NULL,
  `kegiatan` text NOT NULL,
  `bidang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id` int(5) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'M. Syufinur', 'sufi', '12345', 'user'),
(2, 'radea', 'radea', 'radea', 'admin'),
(3, 'Evi Yulfimar, S.Sos', 'Evi', 'perpus123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `t_jenis_kegiatan`
--

CREATE TABLE `t_jenis_kegiatan` (
  `id` int(11) NOT NULL,
  `jenis_kegiatan` text NOT NULL,
  `sasaran_kegiatan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_jenis_kegiatan`
--

INSERT INTO `t_jenis_kegiatan` (`id`, `jenis_kegiatan`, `sasaran_kegiatan_id`) VALUES
(1, 'Pengembangan koleksi perpustakaan - Menyediakan Sumber Resource Perpustakaan ', 1),
(2, 'Pengembangan dan peningkatan keterampilan serta jumlah SDM', 1),
(3, 'Pengembangan sistem informasi manajemen perpustakaan', 1),
(4, 'Pengembangan pelayanan pengguna', 1),
(5, 'Pengembangan dan peningkatan keterampilan serta jumlah SDM', 1);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis_kegiatan_id` (`jenis_kegiatan_id`);

--
-- Indexes for table `data_indikator_kinerja`
--
ALTER TABLE `data_indikator_kinerja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `satuan_id` (`satuan_id`);

--
-- Indexes for table `data_jenis_kegiatan`
--
ALTER TABLE `data_jenis_kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sasaran_kegiatan_id` (`sasaran_kegiatan_id`);

--
-- Indexes for table `data_sasaran_kegiatan`
--
ALTER TABLE `data_sasaran_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_satuan`
--
ALTER TABLE `data_satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_sub_bidang_kegiatan`
--
ALTER TABLE `data_sub_bidang_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_sub_bidang_kerja`
--
ALTER TABLE `data_sub_bidang_kerja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bidang_kerja_id` (`bidang_kerja_id`);

--
-- Indexes for table `evaluasi`
--
ALTER TABLE `evaluasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indikator_sub_kegiatan_id` (`indikator_sub_kegiatan_id`);

--
-- Indexes for table `evaluasi_file`
--
ALTER TABLE `evaluasi_file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `evaluasi_id` (`evaluasi_id`);

--
-- Indexes for table `indikator_kinerja_kegiatan`
--
ALTER TABLE `indikator_kinerja_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indikator_kinerja_kegiatan_jenis`
--
ALTER TABLE `indikator_kinerja_kegiatan_jenis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indikator_kinerja_kegiatan_id` (`indikator_kinerja_kegiatan_id`),
  ADD KEY `indikator_kinerja_kegiatan_id_2` (`indikator_kinerja_kegiatan_id`);

--
-- Indexes for table `indikator_sub_kegiatan`
--
ALTER TABLE `indikator_sub_kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `sub_keg_id` (`sub_keg_id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indikator_kinerja_kegiatan_jenis_id` (`indikator_kinerja_kegiatan_jenis_id`),
  ADD KEY `bidang_id` (`bidang_id`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_jenis_kegiatan`
--
ALTER TABLE `t_jenis_kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sasaran_kegiatan_id` (`sasaran_kegiatan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_bidang_kegiatan`
--
ALTER TABLE `data_bidang_kegiatan`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data_bidang_kerja`
--
ALTER TABLE `data_bidang_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_indikator_kinerja`
--
ALTER TABLE `data_indikator_kinerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_jenis_kegiatan`
--
ALTER TABLE `data_jenis_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data_satuan`
--
ALTER TABLE `data_satuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_sub_bidang_kegiatan`
--
ALTER TABLE `data_sub_bidang_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evaluasi`
--
ALTER TABLE `evaluasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evaluasi_file`
--
ALTER TABLE `evaluasi_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indikator_kinerja_kegiatan`
--
ALTER TABLE `indikator_kinerja_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `indikator_kinerja_kegiatan_jenis`
--
ALTER TABLE `indikator_kinerja_kegiatan_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indikator_sub_kegiatan`
--
ALTER TABLE `indikator_sub_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_indikator_kinerja`
--
ALTER TABLE `data_indikator_kinerja`
  ADD CONSTRAINT `data_indikator_kinerja_ibfk_1` FOREIGN KEY (`satuan_id`) REFERENCES `data_satuan` (`id`);

--
-- Constraints for table `data_sub_bidang_kegiatan`
--
ALTER TABLE `data_sub_bidang_kegiatan`
  ADD CONSTRAINT `data_sub_bidang_kegiatan_ibfk_1` FOREIGN KEY (`bidang_kegiatan_id`) REFERENCES `kegiatan` (`id`);

--
-- Constraints for table `data_sub_bidang_kerja`
--
ALTER TABLE `data_sub_bidang_kerja`
  ADD CONSTRAINT `data_sub_bidang_kerja_ibfk_1` FOREIGN KEY (`bidang_kerja_id`) REFERENCES `data_bidang_kerja` (`id`);

--
-- Constraints for table `evaluasi`
--
ALTER TABLE `evaluasi`
  ADD CONSTRAINT `evaluasi_ibfk_1` FOREIGN KEY (`indikator_sub_kegiatan_id`) REFERENCES `indikator_sub_kegiatan` (`id`);

--
-- Constraints for table `evaluasi_file`
--
ALTER TABLE `evaluasi_file`
  ADD CONSTRAINT `evaluasi_file_ibfk_1` FOREIGN KEY (`evaluasi_id`) REFERENCES `evaluasi` (`id`);

--
-- Constraints for table `indikator_kinerja_kegiatan`
--
ALTER TABLE `indikator_kinerja_kegiatan`
  ADD CONSTRAINT `indikator_kinerja_kegiatan_ibfk_1` FOREIGN KEY (`sasaran_id`) REFERENCES `data_sasaran_kegiatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `indikator_kinerja_kegiatan_ibfk_2` FOREIGN KEY (`indikator_kinerja_id`) REFERENCES `data_indikator_kinerja` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `indikator_kinerja_kegiatan_jenis`
--
ALTER TABLE `indikator_kinerja_kegiatan_jenis`
  ADD CONSTRAINT `indikator_kinerja_kegiatan_jenis_ibfk_1` FOREIGN KEY (`indikator_kinerja_kegiatan_id`) REFERENCES `indikator_kinerja_kegiatan` (`id`),
  ADD CONSTRAINT `indikator_kinerja_kegiatan_jenis_ibfk_2` FOREIGN KEY (`jenis_kegiatan_id`) REFERENCES `data_jenis_kegiatan` (`id`);

--
-- Constraints for table `indikator_sub_kegiatan`
--
ALTER TABLE `indikator_sub_kegiatan`
  ADD CONSTRAINT `indikator_sub_kegiatan_ibfk_1` FOREIGN KEY (`sub_keg_id`) REFERENCES `data_sub_bidang_kegiatan` (`id`);

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`indikator_kinerja_kegiatan_jenis_id`) REFERENCES `indikator_kinerja_kegiatan_jenis` (`id`),
  ADD CONSTRAINT `kegiatan_ibfk_2` FOREIGN KEY (`bidang_id`) REFERENCES `data_bidang_kerja` (`id`);

--
-- Constraints for table `t_jenis_kegiatan`
--
ALTER TABLE `t_jenis_kegiatan`
  ADD CONSTRAINT `t_jenis_kegiatan_ibfk_1` FOREIGN KEY (`sasaran_kegiatan_id`) REFERENCES `data_sasaran_kegiatan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
