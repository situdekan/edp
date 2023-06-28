-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2023 pada 15.20
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sikampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(10) NOT NULL,
  `tanggal_wo` date NOT NULL,
  `jam_wo` time NOT NULL,
  `nama_inventaris` varchar(20) NOT NULL,
  `no_inventaris` varchar(30) NOT NULL,
  `pembuat` varchar(100) NOT NULL,
  `tanggal_target` date DEFAULT NULL,
  `jam_target` time NOT NULL,
  `tanggal_aktual` date NOT NULL,
  `jam_aktual` time NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `analisa` varchar(1000) NOT NULL,
  `perbaikan` varchar(1000) NOT NULL,
  `diperbaiki_oleh` varchar(20) NOT NULL,
  `verifikasi` varchar(20) NOT NULL DEFAULT 'DITERIMA',
  `diserahkan_oleh` varchar(20) NOT NULL,
  `diterima_oleh` varchar(20) NOT NULL,
  `jumlah` varchar(15) NOT NULL DEFAULT 'yes',
  `departement` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa1`
--

CREATE TABLE `tb_mahasiswa1` (
  `id` int(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `departement` varchar(200) NOT NULL,
  `tanggal_aktual` date NOT NULL,
  `jam_aktual` time NOT NULL,
  `nama_inventaris` varchar(200) NOT NULL,
  `no_inventaris` varchar(200) NOT NULL,
  `cpu` varchar(200) NOT NULL,
  `monitor` varchar(200) NOT NULL,
  `keyboard` varchar(200) NOT NULL,
  `mouse` varchar(200) NOT NULL,
  `ups` varchar(200) NOT NULL,
  `telepon` varchar(200) NOT NULL,
  `printer` varchar(200) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `verifikasi` enum('TIDAK SESUAI','PROSES','DONE') NOT NULL DEFAULT 'DONE',
  `jumlah` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mahasiswa1`
--

INSERT INTO `tb_mahasiswa1` (`id`, `nama`, `departement`, `tanggal_aktual`, `jam_aktual`, `nama_inventaris`, `no_inventaris`, `cpu`, `monitor`, `keyboard`, `mouse`, `ups`, `telepon`, `printer`, `deskripsi`, `verifikasi`, `jumlah`) VALUES
(31, 'danu', 'EDP', '2023-06-19', '13:35:46', '', '001', 'SUDAH DIBERSIHKAN', 'SUDAH DIBERSIHKAN', 'SUDAH DIBERSIHKAN', 'SUDAH DIBERSIHKAN', 'SUDAH DIBERSIHKAN', 'SUDAH DIBERSIHKAN', 'SUDAH DIBERSIHKAN', '', '', 'yes'),
(32, 'sanda', 'GBB', '2023-06-19', '16:54:42', '', '001', 'SUDAH DIBERSIHKAN', 'SUDAH DIBERSIHKAN', 'SUDAH DIBERSIHKAN', 'SUDAH DIBERSIHKAN', 'SUDAH DIBERSIHKAN', 'SUDAH DIBERSIHKAN', 'SUDAH DIBERSIHKAN', '', '', 'yes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa2`
--

CREATE TABLE `tb_mahasiswa2` (
  `id` int(20) NOT NULL,
  `no_inventaris` varchar(100) NOT NULL,
  `nama_inventaris` varchar(100) NOT NULL,
  `departement` varchar(100) NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `tgl_beli` date NOT NULL,
  `harga` int(150) NOT NULL,
  `spesifikasi` varchar(2000) NOT NULL,
  `merk` varchar(2000) NOT NULL,
  `tipe` varchar(2000) NOT NULL,
  `serial_number` varchar(2000) NOT NULL,
  `keterangan` varchar(2000) NOT NULL,
  `status` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mahasiswa2`
--

INSERT INTO `tb_mahasiswa2` (`id`, `no_inventaris`, `nama_inventaris`, `departement`, `nama_pengguna`, `tgl_beli`, `harga`, `spesifikasi`, `merk`, `tipe`, `serial_number`, `keterangan`, `status`) VALUES
(10, '001', 'CPU', 'ACC-FIN', 'ERNA MURTI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(11, '002', 'CPU', 'FIN', 'REZI ARSITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(12, '003', 'CPU', 'SIS', 'RAMA OKTARINA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(13, '004', 'CPU', 'ACC', 'ENDA YUNIA SUGMA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(14, '005', 'CPU', 'FIN-ACC', 'MIFTAHUL DIA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(15, '006', 'CPU', 'EDP', 'SYAHDANU', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(16, '007', 'CPU', 'HRD', 'RANI NALTA SARI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(17, '008', 'CPU', 'PE', 'NANDA APRIYANI - DILA EVITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(18, '009', 'CPU', 'GBB', 'SOPY ARIYANI - RENI JUITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(19, '010', 'CPU', 'QCT', 'MEGAWATI - ETI KURNIA - HESTI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(20, '011', 'CPU', 'PRO', 'TIA SEPTI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(21, '012', 'CPU', 'EKS', 'SUBIYONO - RAHMAD PRABOWO - DAYU PURNOMO - EKO PRANATA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(22, '013', 'CPU', 'GPJ', 'SULIS - NUR INDAH - ANDRIYANI - DITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(23, '014', 'CPU', 'GRR', 'SILVIA NINGSIH', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(24, '015', 'CPU', 'GSP', 'DESI SAGITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(25, '016', 'CPU', 'ENG-KND', 'DEVI MARIA SUGMA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(26, '017', 'CPU', 'EDP', 'SERVER LINGGAU', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(27, '018', 'CPU', 'EDP', 'SERVER-ERP', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(28, '019', 'MONITOR', 'ACC-FIN', 'ERNA MURTI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(29, '020', 'MONITOR', 'FIN', 'REZI ARSITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(30, '021', 'MONITOR', 'SIS', 'RAMA OKTARINA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(31, '022', 'MONITOR', 'ACC', 'ENDA YUNIA SUGMA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(32, '023', 'MONITOR', 'EDP', 'SYAHDANU', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(33, '024', 'MONITOR', 'FIN-ACC', 'MIFTAHUL DIA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(34, '025', 'MONITOR', 'HRD', 'RANI NALTA SARI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(35, '026', 'MONITOR', 'PE', 'NANDA APRIYANI - DILA EVITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(36, '027', 'MONITOR', 'GBB', 'SOPY ARIYANI - RENI JUITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(37, '028', 'MONITOR', 'QCT', 'MEGAWATI - ETI KURNIA - HESTI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(38, '029', 'MONITOR', 'PRO', 'TIA SEPTI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(39, '030', 'MONITOR', 'EKS', 'SUBIYONO - RAHMAD PRABOWO - DAYU PURNOMO - EKO PRANATA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(40, '031', 'MONITOR', 'GPJ', 'SULIS - NUR INDAH - ANDRIYANI - DITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(41, '032', 'MONITOR', 'GRR', 'SILVIA NINGSIH', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(42, '033', 'MONITOR', 'GSP', 'DESI SAGITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(43, '034', 'MONITOR', 'ENG-KND', 'DEVI MARIA SUGMA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(44, '035', 'MONITOR', 'EDP', 'CCTV', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(45, '036', 'KEYBOARD', 'ACC-FIN', 'ERNA MURTI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(46, '037', 'KEYBOARD', 'FIN', 'REZI ARSITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(47, '038', 'KEYBOARD', 'SIS', 'RAMA OKTARINA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(48, '039', 'KEYBOARD', 'ACC', 'ENDA YUNIA SUGMA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(49, '040', 'KEYBOARD', 'EDP', 'SYAHDANU', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(50, '041', 'KEYBOARD', 'FIN-ACC', 'MIFTAHUL DIA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(51, '042', 'KEYBOARD', 'HRD', 'RANI NALTA SARI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(52, '043', 'KEYBOARD', 'PE', 'NANDA APRIYANI - DILA EVITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(53, '044', 'KEYBOARD', 'GBB', 'SOPY ARIYANI - RENI JUITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(54, '045', 'KEYBOARD', 'QCT', 'MEGAWATI - ETI KURNIA - HESTI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(55, '046', 'KEYBOARD', 'PRO', 'TIA SEPTI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(56, '047', 'KEYBOARD', 'EKS', 'SUBIYONO - RAHMAD PRABOWO - DAYU PURNOMO - EKO PRANATA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(57, '048', 'KEYBOARD', 'GPJ', 'SULIS - NUR INDAH - ANDRIYANI - DITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(58, '049', 'KEYBOARD', 'GRR', 'SILVIA NINGSIH', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(59, '050', 'KEYBOARD', 'GSP', 'DESI SAGITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(60, '051', 'KEYBOARD', 'ENG-KND', 'DEVI MARIA SUGMA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(62, '052', 'MOUSE', 'ACC-FIN', 'ERNA MURTI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(63, '053', 'MOUSE', 'FIN', 'REZI ARSITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(64, '054', 'MOUSE', 'SIS', 'RAMA OKTARINA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(65, '055', 'MOUSE', 'ACC', 'ENDA YUNIA SUGMA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(66, '056', 'MOUSE', 'EDP', 'SYAHDANU', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(67, '057', 'MOUSE', 'FIN-ACC', 'MIFTAHUL DIA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(68, '058', 'MOUSE', 'HRD', 'RANI NALTA SARI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(69, '059', 'MOUSE', 'PE', 'NANDA APRIYANI - DILA EVITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(70, '60', 'MOUSE', 'GBB', 'SOPY ARIYANI - RENI JUITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(71, '061', 'MOUSE', 'QCT', 'MEGAWATI - ETI KURNIA - HESTI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(72, '062', 'MOUSE', 'PRO', 'TIA SEPTI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(73, '063', 'MOUSE', 'EKS', 'SUBIYONO - RAHMAD PRABOWO - DAYU PURNOMO - EKO PRANATA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(74, '064', 'MOUSE', 'GPJ', 'SULIS - NUR INDAH - ANDRIYANI - DITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(75, '065', 'MOUSE', 'GRR', 'SILVIA NINGSIH', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(76, '066', 'MOUSE', 'GSP', 'DESI SAGITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(77, '067', 'MOUSE', 'ENG-KND', 'DEVI MARIA SUGMA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(78, '068', 'MOUSE', 'EDP', 'CCTV', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(79, '069', 'UPS', 'ACC-FIN', 'ERNA MURTI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(80, '070', 'UPS', 'FIN', 'REZI ARSITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(81, '071', 'UPS', 'SIS', 'RAMA OKTARINA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(82, '072', 'UPS', 'ACC', 'ENDA YUNIA SUGMA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(83, '073', 'UPS', 'EDP', 'SYAHDANU', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(84, '074', 'UPS', 'FIN-ACC', 'MIFTAHUL DIA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(85, '075', 'UPS', 'HRD', 'RANI NALTA SARI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(86, '076', 'UPS', 'PE', 'NANDA APRIYANI - DILA EVITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(87, '077', 'UPS', 'GBB', 'SOPY ARIYANI - RENI JUITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(88, '078', 'UPS', 'QCT', 'MEGAWATI - ETI KURNIA - HESTI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(89, '079', 'UPS', 'PRO', 'TIA SEPTI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(90, '080', 'UPS', 'EKS', 'SUBIYONO - RAHMAD PRABOWO - DAYU PURNOMO - EKO PRANATA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(91, '081', 'UPS', 'GPJ', 'SULIS - NUR INDAH - ANDRIYANI - DITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(92, '082', 'UPS', 'GRR', 'SILVIA NINGSIH', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(93, '083', 'UPS', 'GSP', 'DESI SAGITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(94, '084', 'UPS', 'ENG-KND', 'DEVI MARIA SUGMA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(95, '085', 'UPS', 'EDP', 'SERVER LINGGAU', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(96, '086', 'UPS', 'EDP', 'SERVER-ERP', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(97, '087', 'UPS', 'EDP', 'CCTV', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(98, '088', 'PRINTER', 'ACC', 'ENDA YUNIA SUGMA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(99, '089', 'PRINTER', 'FIN-ACC', 'MIFTAHUL DIA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(100, '090', 'PRINTER', 'HRD', 'RANI NALTA SARI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(101, '091', 'PRINTER', 'GBB', 'SOPY ARIYANI - RENI JUITA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(102, '092', 'PRINTER', 'PRO', 'TIA SEPTI', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(103, '093', 'PRINTER', 'EKS', 'SUBIYONO - RAHMAD PRABOWO - DAYU PURNOMO - EKO PRANATA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(104, '094', 'PRINTER', 'ENG-KND', 'DEVI MARIA SUGMA', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(105, '095', 'CCTV', 'EDP', 'GERBANG SATPAM', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(106, '096', 'CCTV', 'EDP', 'PACKING', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(107, '097', 'CCTV', 'EDP', 'TOILET KARYAWAN', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(108, '098', 'CCTV', 'EDP', 'LOKER KARYAWAN', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(109, '099', 'CCTV', 'EDP', 'SALES', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(110, '100', 'CCTV', 'EDP', 'PEMUATAN 2', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(111, '101', 'CCTV', 'EDP', 'KANTOR BAWAH', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(112, '102', 'CCTV', 'EDP', 'KANTOR GPJ-EKS', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(113, '103', 'CCTV', 'EDP', 'GAS', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(114, '104', 'CCTV', 'EDP', 'KANTOR ATAS', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(115, '105', 'CCTV', 'EDP', 'QCT', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(116, '106', 'CCTV', 'EDP', 'PEMUATAN 1', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(117, '107', 'CCTV', 'EDP', 'R.BABON', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(118, '108', 'CCTV', 'EDP', 'FORMING', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(119, '109', 'CCTV', 'EDP', 'DAPUR', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(120, '110', 'CCTV', 'EDP', 'GERBANG DEPAN', '0000-00-00', 0, '', '', '', '', '', 'AKTIF'),
(121, '111', 'CCTV', 'EDP', 'GBB', '0000-00-00', 0, '', '', '', '', '', 'NON-AKTIF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(5) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `departement` enum('GBB','EDP','ENG','KND') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `nama`, `username`, `password`, `level`, `departement`) VALUES
(2, 'danu', 'danu', '123', 'admin', 'EDP'),
(3, 'sanda', 'sanda', '123', 'user', 'GBB'),
(4, 'WAHYU', 'wahyu', '123', 'user', 'ENG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mahasiswa1`
--
ALTER TABLE `tb_mahasiswa1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mahasiswa2`
--
ALTER TABLE `tb_mahasiswa2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT untuk tabel `tb_mahasiswa1`
--
ALTER TABLE `tb_mahasiswa1`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `tb_mahasiswa2`
--
ALTER TABLE `tb_mahasiswa2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
