-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2023 at 01:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `profile` text NOT NULL,
  `s_kelurahan` varchar(225) NOT NULL,
  `s_lpm` varchar(225) NOT NULL,
  `s_linmas` varchar(225) NOT NULL,
  `s_pemuda` varchar(225) NOT NULL,
  `k_rtrw` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `profile`, `s_kelurahan`, `s_lpm`, `s_linmas`, `s_pemuda`, `k_rtrw`) VALUES
(1, 'Menurut cerita para sesepuh dan Tokoh Masyarakat Desa Sukosari Lor pada zaman dahulu Desa Sukosari Lor dibabat oleh 7 (Tujuh) orang bersaudara yang datanggya dari Pulau Madura antara lain JU’ BIDES, JU’ BIDE, JU’ IRENG/JU’ SONGOT, JU’ REDHUH, JU’ SARON, JU’ GHENDING, dan JU’ TOSAREH. Ketujuh orang tersebut mempunyai kegemaran yang sama yakni memelihara bunga, setiap ada kesempatan dan diwaktu luangnya selalu mencari bunga, kata Sukosari terdiri dari dua suku kata yaitu SUKO dan SARI yang artinya Suko berarti Cari dan Sari berarti Bunga (Suka Mencari Bunga) sehingnga tempat yang dibabat dinamakan Sukosari dan konon setiap orang yang datang  ke Sukosari selalu ingin menetap.\r\n\r\nHingga saat ini Sukosari Lor telah memiliki catatan sejarah kepemimpinan dari enam figur yang berbeda dan dengan pengabdian yang luar biasa, Bapak Abdus Salam sebagai Kepala Desa Pertama,      Reksosiswono sebagai Kepala Desa Kedua, H. Salehuddin sebagai Kepala Desa Ketiga, Rahbini sebagai Kepala desa Keempat dan diteruskan oleh Sudarsono sebagai Kepala Desa Kelima, kemudian dilanjutkan Oleh Mahfud sebagai Kepala Desa keenam hingga saat ini yang latar belakang pendidikannya adalah Sekolah Menegah Umum, telah berhasil memimpin Desa Sukosari Lor dengan baik, walaupun taraf ekonomi masyarakatnya masih lemah, oleh sebab kurang terpenuhinya sarana irigasi, serta sarana jalan sebagai sarana transportasi utama penduduk setempat untuk meningkatkan kesejahteraan masyarakat yang mengandalkan tradisi gotong royong.', 'struktur_organisasi_pemerintah_desa.png', 'struktur-lpm-desa.jpg', 'struktur_linmas-1024x1012.png', 'Struktur-Organisasi-Karang-Taruna.jpg', '0767858e0a28d6bf7aeaa45a79265e8e.png');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `nip`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `foto`, `no_hp`, `jabatan`, `pendidikan`) VALUES
(3, 'RIZAL RAMLI', '111', 'SURABAYA', '1999-10-10', 'SURABAYA', 'IMG-20201007-WA0007.jpg', '081111222333', 'Seksi Pelayanan', 'S1');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `tmpt_lhr` varchar(50) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`nik`, `nama`, `no_hp`, `tmpt_lhr`, `tgl_lhr`, `pekerjaan`, `alamat`, `rt`, `rw`) VALUES
('116511', 'Rifki Ilmi', '0882443818', '', '0000-00-00', '', '', 0, 0),
('1262332', 'Ikus', '08646757', '', '0000-00-00', '', '', 0, 0),
('1547', 'Inggih Permono', '0987655456', 'Ujung Kulon', '1987-10-10', 'IUVDGVH', 'Jl. Inttah', 6, 6),
('192618', 'Hengki Wibana', '0972655112', 'Durian Jatuh', '1998-10-10', 'Copet', 'Jl. enten', 1, 12),
('197646', 'Suntel', '0846563783', '', '0000-00-00', '', '', 0, 0),
('3205055101020008', 'Nisrina Khaerunisa', '089535119901', '', '0000-00-00', '', '', 0, 0),
('3514545', 'RAZOR', '089745645', '', '0000-00-00', '', '', 0, 0),
('356686', 'DEWI', '08676767', '', '0000-00-00', '', '', 0, 0),
('467896511479008', 'nisrina', '09876674386432', '', '0000-00-00', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_surat`
--

CREATE TABLE `pengajuan_surat` (
  `id` varchar(255) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birthplace` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `job` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `status_married` varchar(20) NOT NULL,
  `last_education` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `address` varchar(20) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `ktp` int(11) NOT NULL,
  `dtm_submission` datetime(6) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengajuan_surat`
--

INSERT INTO `pengajuan_surat` (`id`, `nik`, `id_user`, `name`, `birthplace`, `birthday`, `job`, `gender`, `status_married`, `last_education`, `religion`, `telp`, `address`, `desa`, `kecamatan`, `ktp`, `dtm_submission`, `status`) VALUES
('23423432', '320431270701000', 17, 'zamzam nurahman', 'bandung', '2023-10-17', 'Mahasiswa', 'laki-laki', 'belum', 'SMA', 'islam', '05438094385453', 'somong', 'Cibeureum', 'Kertasari', 0, '2023-09-05 19:00:36.000000', 0),
('23432523534', '32043127070100041', 17, 'zamzam nurahman', 'bandung', '2023-10-17', 'Mahasiswa', 'laki-laki', 'belum', 'SMA', 'islam', '05438094385453', 'somong', 'Cibeureum', 'Kertasari', 0, '2023-08-15 19:00:36.000000', 1),
('2344543gfgerg', '32043127070100042', 17, 'zamzam nurahman', 'bandung', '2023-10-17', 'Mahasiswa', 'laki-laki', 'belum', 'SMA', 'islam', '05438094385453', 'somong', 'Cibeureum', 'Kertasari', 0, '2023-10-17 19:00:36.000000', 1),
('32423424', '3204312707010004', 17, 'zamzam nurahman', 'bandung', '2023-10-17', 'Mahasiswa', 'laki-laki', 'belum', 'SMA', 'islam', '05438094385453', 'somong', 'Cibeureum', 'Kertasari', 0, '2023-10-17 19:00:36.000000', 2),
('ergdrgrhdtrt', '3204312707010004111', 17, 'zamzam nurahman', 'bandung', '2023-10-17', 'Mahasiswa', 'laki-laki', 'belum', 'SMA', 'islam', '05438094385453', 'somong', 'Cibeureum', 'Kertasari', 0, '2023-08-15 19:00:36.000000', 3),
('rthdrthd4545h', '32043127070100034111', 17, 'zamzam nurahman', 'bandung', '2023-10-17', 'Mahasiswa', 'laki-laki', 'belum', 'SMA', 'islam', '05438094385453', 'somong', 'Cibeureum', 'Kertasari', 0, '2023-08-15 19:00:36.000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `status_file`
--

CREATE TABLE `status_file` (
  `nik` enum('approved','reject','process','') NOT NULL,
  `approved_ktp` enum('approved','reject','process','') NOT NULL,
  `info_ktp` enum('approved','reject','process','') NOT NULL,
  `approved_pernyataan` enum('approved','reject','process','') NOT NULL,
  `info_pernyataan` enum('approved','reject','process','') NOT NULL,
  `approved_suket_desa` enum('approved','reject','process','') NOT NULL,
  `info_suket_desa` enum('approved','reject','process','') NOT NULL,
  `approved_suket_kec` enum('approved','reject','process','') NOT NULL,
  `info_suket_kec` enum('approved','reject','process','') NOT NULL,
  `approved_ijazah` enum('approved','reject','process','') NOT NULL,
  `info_ijazah` enum('approved','reject','process','') NOT NULL,
  `approved_foto` enum('approved','reject','process','') NOT NULL,
  `info_foto` enum('approved','reject','process','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat_keluar` int(11) NOT NULL,
  `nama_surat_keluar` varchar(100) NOT NULL,
  `tanggal_surat_keluar` date NOT NULL,
  `keterangan_surat_keluar` varchar(100) NOT NULL,
  `file_surat_keluar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat_keluar`, `nama_surat_keluar`, `tanggal_surat_keluar`, `keterangan_surat_keluar`, `file_surat_keluar`) VALUES
(10, 'Surat Dinas', '2022-06-09', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Menulis_Surat_Resmi.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keterangan`
--

CREATE TABLE `surat_keterangan` (
  `id_surat_keterangan` int(11) NOT NULL,
  `nama_surat_keterangan` varchar(100) NOT NULL,
  `tanggal_surat_keterangan` date NOT NULL,
  `keterangan_surat_keterangan` varchar(100) NOT NULL,
  `file_surat_keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `surat_keterangan`
--

INSERT INTO `surat_keterangan` (`id_surat_keterangan`, `nama_surat_keterangan`, `tanggal_surat_keterangan`, `keterangan_surat_keterangan`, `file_surat_keterangan`) VALUES
(2, 'Surat Persetujuan Pimpinan', '2022-01-09', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lampiran_3_SURAT_Persetujuan_Atasan.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL,
  `nama_surat_masuk` varchar(100) NOT NULL,
  `tanggal_surat_masuk` date NOT NULL,
  `keterangan_surat_masuk` varchar(100) NOT NULL,
  `file_surat_masuk` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat_masuk`, `nama_surat_masuk`, `tanggal_surat_masuk`, `keterangan_surat_masuk`, `file_surat_masuk`) VALUES
(5, 'Surat Pernyataan', '2022-02-09', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Surat_Pernyataan_5_Poin_CPNS_2018.pdf'),
(6, 'Surat Niaga', '2022-05-09', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Surat_Pernyataan_5_Poin_CPNS_20181.pdf'),
(7, 'Surat Dinas Penting', '2022-06-09', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Surat_Pernyataan_5_Poin_CPNS_20182.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `upload_file`
--

CREATE TABLE `upload_file` (
  `nik` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `pernyataan_pribadi` varchar(255) NOT NULL,
  `suket_desa` varchar(255) NOT NULL,
  `suket_kec` varchar(255) NOT NULL,
  `ijazah` varchar(255) NOT NULL,
  `pas_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dtmLastUpdated` datetime(6) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `dtmLastUpdated`, `level`) VALUES
(17, 'zamzamz', '$2y$10$Bz7BdXFwk0tkgH9OC4rvAObr6lAkWB9chxmDMw0lH.PJVeK2hT4ly', 'zamzam@gmail.com', '0000-00-00 00:00:00.000000', 'user'),
(18, 'wahyu', '$2y$10$uObP2glh.S7PGACnE7sgnu5cbas1vl6yLZ.Z3FLm2ieNwraGU/Rv2', 'wahyu@gmail.com', '0000-00-00 00:00:00.000000', 'user'),
(19, 'admin', '$2y$10$Vez595E9SC2JztVeqQx9Fu4gHoKD6n3BMPmy6YcI4wF5B.nzu8HOC', 'admin@gmail.com', '0000-00-00 00:00:00.000000', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indexes for table `surat_keterangan`
--
ALTER TABLE `surat_keterangan`
  ADD PRIMARY KEY (`id_surat_keterangan`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indexes for table `upload_file`
--
ALTER TABLE `upload_file`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `surat_keterangan`
--
ALTER TABLE `surat_keterangan`
  MODIFY `id_surat_keterangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
