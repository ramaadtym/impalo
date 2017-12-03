-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2017 at 08:00 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_impal`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `kode_kelas` varchar(10) NOT NULL,
  `kode_matkul` varchar(10) NOT NULL,
  `kode_tutor` varchar(10) NOT NULL,
  `status_pertemuan` varchar(10) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `waktu_mulai` varchar(10) NOT NULL,
  `waktu_selesai` varchar(10) NOT NULL,
  `catatan` text NOT NULL,
  `time_submit` datetime NOT NULL,
  `time_acc` datetime DEFAULT NULL,
  `status_acc` varchar(20) NOT NULL DEFAULT 'Pending',
  `admin_acc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `kode_kelas`, `kode_matkul`, `kode_tutor`, `status_pertemuan`, `tanggal`, `tempat`, `waktu_mulai`, `waktu_selesai`, `catatan`, `time_submit`, `time_acc`, `status_acc`, `admin_acc`) VALUES
(19, 'STD1', 'STD', 'ADR', 'Tetap', 'Jumat 07 April 2017', 'Perpustakaan', '16:00', '18:00', 'Lupa', '2017-04-11 17:55:34', NULL, 'Sudah Diverifikasi', 'RAMA ADITYA MAULANA'),
(20, 'STD5', 'STD', 'ADR', 'Pengganti', 'Kamis 27 April 2017', 'Gedung F lantai 1', '17:00', '19:00', 'Lupa', '2017-04-11 20:58:12', NULL, 'Sudah Diverifikasi', 'RAMA ADITYA MAULANA'),
(21, 'STD5', 'STD', 'ADR', 'Tetap', 'Sabtu 01 April 2017', 'Perpustakaan', '08:30', '10:30', 'Lupa', '2017-04-11 21:05:42', NULL, 'Sudah Diverifikasi', 'RAMA ADITYA MAULANA'),
(23, 'STD1', 'STD', 'ADR', 'Tetap', 'Jumat 21 April 2017', 'Gedung F lantai 2', '16:00', '18:00', 'Tepat waktu', '2017-05-12 09:26:08', NULL, 'Sudah Diverifikasi', 'RAMA ADITYA MAULANA'),
(24, 'STD5', 'STD', 'ADR', 'Responsi', 'Jumat 05 Mei 2017', 'Gedung F lantai 1', '14:00', '21:00', 'Saya telat 10 menit', '2017-05-12 09:27:21', NULL, 'Sudah Diverifikasi', 'RAMA ADITYA MAULANA'),
(29, 'STD4', 'STD', 'PAT', 'Pengganti', 'Minggu 03 Desember 2017', 'Gedung D Lantai 9', '06:44', '06:44', 'Saya ganteng', '0000-00-00 00:00:00', NULL, 'Sudah Diverifikasi', 'RAMA ADITYA MAULANA');

-- --------------------------------------------------------

--
-- Table structure for table `detail_kelas`
--

CREATE TABLE `detail_kelas` (
  `kode_kelas` varchar(10) NOT NULL,
  `nim` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_kelas`
--

INSERT INTO `detail_kelas` (`kode_kelas`, `nim`) VALUES
('STD1', '1301164378'),
('STD1', '1301164155'),
('STD1', '1301164082'),
('STD5', '1301160094'),
('STD5', '1301164604'),
('STD5', '1301164006'),
('STD4', '1301150004'),
('STD4', '1301154200'),
('STD4', '1301160380'),
('STD4', '1301164131'),
('STD6', '1301164191'),
('STD6', '1301164526'),
('KAL1', '1301164131'),
('KAL2', '1101164009'),
('KAL2', '1101164038'),
('KAL2', '1101164196'),
('KAL2', '1101164461'),
('KAL3', '1301164015'),
('KAL3', '1301164115'),
('KAL3', '1301164223'),
('KAL3', '1301164529'),
('KAL3', '1301164582'),
('KAL4', '1102160060'),
('KAL4', '1102164030'),
('KAL4', '1102164093'),
('KAL4', '1102164235'),
('KAL4', '1102164261'),
('KAL5', '1301160094'),
('KAL5', '1301164006'),
('KAL6', '1301164191'),
('KAL6', '1301164526'),
('FIS1', '1102160060'),
('FIS1', '1102164030'),
('FIS1', '1102164093'),
('FIS1', '1102164235'),
('FIS1', '1102164261'),
('FIS2', '1301164131'),
('STD5', '1301164070'),
('STD1', '1301160434'),
('STD5', '1301164410'),
('KAL5', '1301164410'),
('IPAT123', '1301164155'),
('IPAT123', '1301160094'),
('IPAT123', '1301164376'),
('KAL123', '1102164093'),
('KAL123', '1102160060'),
('KAL123', '1301164006');

-- --------------------------------------------------------

--
-- Table structure for table `detil_user`
--

CREATE TABLE `detil_user` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `id_line` varchar(255) NOT NULL,
  `telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detil_user`
--

INSERT INTO `detil_user` (`nim`, `nama`, `jeniskelamin`, `tgl_lahir`, `fakultas`, `jurusan`, `kelas`, `id_line`, `telepon`) VALUES
('1301154374', 'FAKHRI FAUZAN', 'Laki-laki', 'Jumat 06 Juni 1997', 'PASCASARJANA', 'S2 TEKNIK INFORMATIKA', 'IF-39-10', 'fakhrifauzan', '08567018044'),
('1301154487', 'ADYSTI ADRIANNE', 'Perempuan', 'Sabtu 14 Juni 1997', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-39-11', 'adystiiadrn', '081314899705'),
('1301154318', 'FERO RESYANTO GANTENG', 'Laki-laki', 'Minggu 19 Maret 2017', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-39-10', 'feresyan', '098765432112'),
('1301154500', 'AUFA FARADHILA', 'Perempuan', 'Sabtu 12 April 1997', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF 39-10', 'aufaradhila', '082218356927'),
('1301164131', 'BADRUS SHOOLEKH', 'Laki-laki', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-04', 'Badrus.sholeh2', '082245050113'),
('1102164235', 'NABILA DIAN CAHYANTI PUTRI', 'Perempuan', '', 'TEKNIK ELEKTRO', 'S1 TEKNIK ELEKTRO', 'EL-40-02', 'Nabiladian28', '085396081998'),
('1102164093', 'GUSTI NADIRA MEDYANA', 'Perempuan', '', 'TEKNIK ELEKTRO', 'S1 TEKNIK ELEKTRO', 'EL-40-02', 'Nadiramedyana', '082153219070'),
('1301164155', 'ARIANI FITRIA KUSUMANINGTYAS', 'Perempuan', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-04', 'arianifitriaa', '082216649109'),
('1301160094', 'ERICA NURSANTI DEWI', 'Perempuan', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-04', 'erica_nd', '082216645752'),
('1102160060', 'SHINDY NABILA SALSABILA', 'Perempuan', '', 'TEKNIK ELEKTRO', 'S1 TEKNIK ELEKTRO', 'EL-40-02', 'Shindsalsbl', '085701583795'),
('1102164261', 'ANGGY ENDRO ARIQO', 'Perempuan', '', 'TEKNIK ELEKTRO', 'S1 TEKNIK ELEKTRO', 'EL-40-02', 'Ariqoanggy25', '081299028131'),
('1301164133', 'ABDUL AZIZ', 'Laki-laki', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-06', 'ajaay16', '082174418616'),
('1301164376', 'CRISANADENTA WINTANG KENCANA', 'Perempuan', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-04', 'Crisankencana', '082234739352'),
('1301164006', 'FATHKA NUANSA PUTRI', 'Perempuan', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-04', 'nuansapp', '081548614715'),
('1301164604', 'DEVY ANUGRAH RAHMADANI', 'Perempuan', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-04', 'devyara_dee', '085328282345'),
('1102164030', 'ANINDYA FAIRUZ HASNA', 'Perempuan', '', 'TEKNIK ELEKTRO', 'S1 TEKNIK ELEKTRO', 'EL-40-02', 'Anindyafh', '085218600600'),
('1301164526', 'HARITS PUSPITASARI', 'Perempuan', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF 40-04', 'hariitsp', '082210408199'),
('1301164223', 'TIA ARISKA P', 'Perempuan', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-12', 'txaap', '08113616998'),
('1301164115', 'MONICA PUTRI', 'Perempuan', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-12', 'mi_light98', '089682805930'),
('1301150004', 'RIVALDI RACHMADWITYA', 'Laki-laki', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-39-04', 'rivaldi3o', '082218355373'),
('1301154200', 'M ILHAM SEPTADHIO HAMZAH', 'Laki-laki', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-39-04', 'Ilhamshz', '081367712695'),
('1301154495', 'ARINTA RASYIDASARI', 'Perempuan', 'Rabu 22 Januari 1997', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-39-05', 'tarintarasyida', '082218356855'),
('1301164191', 'MUTIARA RAMADHANI WIJAYA', 'Perempuan', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-04', 'mutiarawijayaa', '082115111661'),
('1301164119', 'KOMANG MARTHA SUTEJA', 'Laki-laki', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-04', 'martha_suteja', '087762022700'),
('1301160447', 'PUNGKI NURHUDHA', 'Laki-laki', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-04', 'pungki182627', '082216646096'),
('1301160380', 'KUSUMASTUTI CAHYANINGRUM', 'Perempuan', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-INT', 'syugasyub', '085600932550'),
('1301164546', 'RISKA CHAIRUNISA', 'Perempuan', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-04', 'grabtheapp', '082213108098'),
('1301164378', 'MUHAMMAD NAUFAL DIVIAN MULIAWAN', 'Laki-laki', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-06', 'naufaldm', '085724201945'),
('1301164082', 'ARBIE NABILLASALSA BURKON', 'Perempuan', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-04', 'arbienabillasalsa', '082219231091'),
('1101164461', 'TALENTALIA BUDI EKASANTI', 'Perempuan', '', 'TEKNIK ELEKTRO', 'S1 TEKNIK TELEKOMUNIKASI', 'TT-40-05', 'talen09', '081229897003'),
('1101164009', 'ARIFIA PUTRI', 'Perempuan', '', 'TEKNIK ELEKTRO', 'S1 TEKNIK TELEKOMUNIKASI', 'TT-40-05', 'arifiaputri', '085642631464'),
('1101164196', 'DEVITA RAHMA APRILIANI', 'Perempuan', '', 'TEKNIK ELEKTRO', 'S1 TEKNIK TELEKOMUNIKASI', 'TT-40-05', 'devitar21', '081214858845'),
('1101164038', 'FARAH HANA KUSUMAPUTRI', 'Perempuan', '', 'TEKNIK ELEKTRO', 'S1 TEKNIK TELEKOMUNIKASI', 'TT-40-05', 'farahhana14', '082217798517'),
('1301164264', 'SEPTYAN INDRA BAYU', 'Laki-laki', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-04', 'septyanbayu21', '085691840720'),
('1301164493', 'FADILLAH RIZKY RAMADHAN', 'Laki-laki', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-04', 'Fadillahengkong27', '082216648547'),
('1301154362', 'MUHAMMAD KHATAMI', 'Laki-laki', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-39-12', 'mkhatami', '082219160614'),
('1301164015', 'MANGARAJA PINAYUNGAN T P DALIMUNTHE', 'Laki-laki', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-12', 'tgrpd', '082216643717'),
('1301164582', 'CAHYONO ROMADLONI A', 'Laki-laki', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-06', 'alivian', '082188245344'),
('1301154365', 'MOH ABDUL HARIS ANGIO', 'Laki-laki', 'Selasa 29 Juli 1997', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-39-01', '1301154365', '082218358812'),
('1301168430', 'RAHMI MAULIDINA NISITA', 'Perempuan', 'Sabtu 03 September 1994', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA (LANJUTAN)', 'IF-39-EXT', '085323232394', '085323232394'),
('1301164529', 'TEDDY ANDRIANTO', 'Laki-laki', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-06', 'teddy.andrianto', '085222286863'),
('1301154454', 'DHEVI LARASATI', 'Perempuan', 'Sabtu 14 Juni 1997', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-39-06', 'dhevilarasati', '085876451700'),
('1301144406', 'REZA AMELIA', 'Perempuan', 'Minggu 15 Juni 1997', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-38-06', '08973513877', '08973513877'),
('1301154360', 'ARIEF BUDHIMAN', 'Laki-laki', 'Jumat 04 Juli 1997', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-39-10', 'ariefbudhima', '082218343490'),
('1301154667', 'MUHAMMAD TURMUDZI', 'Laki-laki', 'Rabu 10 September 1997', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-39-01', 'm_turmudzi', '082240865821'),
('1301154164', 'SEPTIAN DWI INDRADI', 'Laki-laki', 'Senin 22 September 1997', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-39-10', 'septiandrd', '082217363440'),
('1301154528', 'ILMA CHAEROH', 'Perempuan', 'Rabu 29 Januari 1997', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-39-10', 'ilmmaali', '082214119167'),
('1301154458', 'RIDEA VALENTINI SIWABESSY', 'Perempuan', 'Minggu 14 Februari 1999', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-39-10', 'ridea_s', '081375597406'),
('1301154160', 'FAISHAL RACHMAN', 'Laki-laki', 'Selasa 04 April 2017', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-39-06', 'fr1997', '1234567890'),
('1101164116', 'NURUL QASHRI MAHARDIKA', 'Perempuan', '', 'TEKNIK ELEKTRO', 'S1 TEKNIK TELEKOMUNIKASI', 'TT-40-11', 'nurulqashri', '082167973794'),
('1301164397', 'UMAR JAMIL', 'Laki-laki', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF 40-06', 'jamilumar', '1234567890'),
('1301164316', 'FIRDAUS BASYUNI', 'Laki-laki', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-06', 'firdausbasyuni', '085860160314'),
('1301164021', 'RIYAN KUNCORO', 'Laki-laki', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-06', 'riyankuncorojati', '1234567890'),
('1301164070', 'SALWA SALSABILA M', 'Perempuan', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-04', 'Salwa_salsa', '082216647613'),
('1301164410', 'SHINTA SURYA SYAWIRIL UMMAH', 'Perempuan', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-40-04', '-', '1234567890'),
('1301150034', 'RAMA ADITYA MAULANA', 'Laki-laki', 'Senin 12 Februari 1996', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-39-06', 'ramaadtym', '085711424734'),
('1301160434', 'AZIZ SABIRIN', 'Laki-laki', '', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF 40-06', 'azizsabirin', '081321596455'),
('1301150444', 'FADILA ZAIN', 'Perempuan', 'Jumat 04 Juli 1997', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF-39-10', 'efadilazain', '087785612290'),
('1234567890', 'TEST', 'Laki-laki', 'Sabtu 08 April 2017', 'PASCASARJANA', 'S1 TEKNIK FISIKA', 'SAD', 'sadsad3', '21313'),
('1301150020', 'YUSUF SOLIHIN', 'Laki-laki', 'Sabtu 06 Mei 2017', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF 39 06', 'yusufslhn_dummy', '085711424734'),
('1301150010', 'DUMMY', 'Laki-laki', 'Kamis 06 Mei 1993', 'INFORMATIKA', 'S1 TEKNIK INFORMATIKA', 'IF 39 06', 'dummy_123', '085711424734'),
('3123123123', '123123', 'Perempuan', 'Minggu 03 Desember 2017', 'ILMU TERAPAN', 'S1 SISTEM  KOMPUTER', '', '123', '3123123'),
('1313131231', '312312312312312312', 'Perempuan', 'Minggu 03 Desember 2017', 'TEKNIK ELEKTRO', 'S1 TEKNIK INFORMATIKA', '', '3123123123', '1231231231231'),
('1234567554', 'Ipat Admin', 'Laki-laki', 'Minggu 03 Desember 2017', 'ILMU TERAPAN', 'S1 SISTEM  KOMPUTER', '', 'banyak', '0832819396989'),
('1234567878', 'Dummy Tutor', 'Laki-laki', 'Minggu 03 Desember 2017', 'ILMU TERAPAN', 'S1 SISTEM KOMPUTER (LANJUTAN)', '', 'DWP', '0812308120381'),
('1301154646', 'kucing', 'Laki-laki', 'Minggu 03 Desember 2017', 'ILMU TERAPAN', 'S1 TEKNIK TELEKOMUNIKASI (LANJUTAN)', '', '1301154646', '1301154646');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` varchar(10) NOT NULL,
  `kode_matkul` varchar(10) NOT NULL,
  `kode_tutor` varchar(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(15) NOT NULL,
  `group_line` varchar(255) NOT NULL,
  `tahun` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `kode_matkul`, `kode_tutor`, `hari`, `jam`, `group_line`, `tahun`) VALUES
('FIS1', 'FIS', 'IEF', 'RABU', '18.30 - 20.30', '-', '1617/2'),
('FIS2', 'FIS', 'IEF', 'SABTU', '08.30 - 10.30', '-', '1617/2'),
('IPAT123', 'IPAT1', 'PAT', 'JUMAT', '15.30 - 17.30', '', '1920/1'),
('KAL1', 'KAL', 'ILC', 'SENIN', '18.30 - 20.30', '-', '1617/2'),
('KAL123', 'KAL', '123', 'JUMAT', '15.30 - 17.30', 'GANTENG', '1920/1'),
('KAL2', 'KAL', 'RVS', 'SELASA', '18.30 - 20.30', '-', '1617/2'),
('KAL3', 'KAL', 'TUR', 'KAMIS', '18.30 - 20.30', '-', '1617/2'),
('KAL4', 'KAL', 'EZA', 'KAMIS', '18.30 - 20.30', '-', '1617/2'),
('KAL5', 'KAL', 'DEP', 'JUMAT', '15.30 - 17.30', '-', '1617/2'),
('KAL6', 'KAL', 'RVS', 'SABTU', '08.30 - 10.30', '-', '1617/2'),
('STD1', 'STD', 'ADR', 'JUMAT', '15.30 - 17.30', 'belom ada gan', '1617/2'),
('STD4', 'STD', 'PAT', 'RABU', '18.30 - 20.30', '-', '1617/2'),
('STD5', 'STD', 'ADR', 'SABTU', '08.30 - 10.30', '', ''),
('STD6', 'STD', 'SDI', 'SABTU', '10.30 - 12.30', '-', '1617/2');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran`
--

CREATE TABLE `lampiran` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `nim` varchar(10) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `kode_matkul` varchar(10) NOT NULL,
  `nama_matkul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`kode_matkul`, `nama_matkul`) VALUES
('FIS', 'FISIKA'),
('IPAT1', 'IPATGANTENG'),
('KAL', 'KALKULUS'),
('STD', 'STRUKTUR DATA');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id_registrasi` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kode_matkul` varchar(10) NOT NULL,
  `kode_kelas` varchar(10) NOT NULL,
  `paket` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `kode_tutor` varchar(10) NOT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `matkul1` varchar(10) DEFAULT NULL,
  `matkul2` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`kode_tutor`, `nim`, `matkul1`, `matkul2`) VALUES
('123', '1234567878', 'STD', 'KAL'),
('ADR', '1301154487', 'STD', 'STD'),
('DEP', '1301154454', 'KAL', 'KAL'),
('EZA', '1301144406', 'KAL', 'STD'),
('IEF', '1301154360', 'FIS', 'FIS'),
('ILC', '1301154528', 'KAL', 'KAL'),
('PAT', '1301154160', 'STD', 'FIS'),
('RVS', '1301154458', 'KAL', 'KAL'),
('SDI', '1301154164', 'STD', 'STD'),
('TUR', '1301154667', 'KAL', 'KAL');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nim` varchar(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_level` varchar(15) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nim`, `username`, `password`, `email`, `user_level`, `last_login`) VALUES
('1101164009', '1101164009', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1101164038', '1101164038', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1101164116', '1101164116', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1101164196', '1101164196', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1101164461', '1101164461', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1102160060', '1102160060', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1102164030', '1102164030', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1102164093', '1102164093', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1102164235', '1102164235', '1d0dca67fef675f4ccc65570e80a5b7d9ec790ea', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1102164261', '1102164261', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1234567890', 'tutor', '8cb2237d0679ca88db6464eac60da96345513964', '', 'Tutor', '2017-04-08 13:46:54'),
('1234567891', 'ahaha', '7c222fb2927d828af22f592134e8932480637c0d', 'ramaadtym@gmail.com', 'Tutor', '0000-00-00 00:00:00'),
('1301144406', '1301144406', 'da3d46f1cb8ad71ce19d2f303df15ca4fffbb944', 'ameliareza626@gmail.com', 'Tutor', '2017-04-27 20:33:44'),
('1301150000', 'farhan', '7c222fb2927d828af22f592134e8932480637c0d', 'farhan@mail.com', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301150001', 'dummy_admin', 'f9d617f1fac6ecfb0c64889d09fc53e896dae3a8', 'adm@mail.com', 'Administrator', '0000-00-00 00:00:00'),
('1301150004', '1301150004', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301150010', 'dummy', '7c222fb2927d828af22f592134e8932480637c0d', 'dummy@mail.com', 'Tutor', '2017-05-06 11:41:11'),
('1301150020', 'ramaulana', '7c222fb2927d828af22f592134e8932480637c0d', 'dummy@mail.com', 'Mahasiswa', '2017-05-06 11:36:57'),
('1301150034', 'ramaadtym', '8cb2237d0679ca88db6464eac60da96345513964', 'ramaadtym@gmail.com', 'Administrator', '2017-08-26 12:32:18'),
('1301150040', 'jijah', '8cb2237d0679ca88db6464eac60da96345513964', 'jijah@gmail.com', 'Administrator', '2017-09-17 20:26:14'),
('1301150444', 'efadilazain', '7a2502635c04636a4ce113187c8ba58b6741bea5', 'efadilazain@gmail.com', 'Administrator', '2017-03-27 22:38:43'),
('1301151234', 'dummy_tutor', '46dc6ff47ee6e770ea47f4a69c274438642fa00d', 'cietutor@mail.com', 'Tutor', '0000-00-00 00:00:00'),
('1301154160', '1301154160', '959d62c1fcaae1133bca6b95bb3f99c5de02fe14', 'faishalr97@gmail.com', 'Tutor', '2017-05-06 11:42:56'),
('1301154164', 'septiandrd', 'cd0bdc9920bfcf6e6fca8ec57ac715547929b7cc', 'septiandrd@gmail.com', 'Tutor', '2017-05-19 12:25:36'),
('1301154200', '1301154200', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301154318', 'feresyan', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'feresyan@gmail.com', 'Administrator', '2017-03-31 21:04:13'),
('1301154360', 'ariefbudhima', '4868b69967bb8bd0e87afda3c18e24b7b9186646', 'ariefbudhiman1997@gmail.com', 'Tutor', '2017-04-04 10:58:03'),
('1301154362', '1301154362', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301154365', '1301154365', 'ac32358e0aa5b8efd631d569e96e2576ff54ebda', 'moh.harisangio@gmail.com', 'Tutor', '2017-04-08 20:45:32'),
('1301154374', 'fakhrifauzan', 'dfb8125c2be2ab649f04e7fe613f879aafdf2aa8', 'fazan697@gmail.com', 'Administrator', '2017-05-19 13:59:39'),
('1301154454', 'dhevilarasati', '0ebfc403c2c053bc569332e321ce004595b7faef', 'dhevi.larasati.dl@gmail.com', 'Tutor', '2017-04-07 15:15:49'),
('1301154458', 'ridea', 'f07d74861c3699723eac8f7b4137319f30f3f66f', 'rideasiwabessy@yahoo.co.id', 'Tutor', '2017-04-04 09:46:54'),
('1301154487', 'adysti', '48ccb31f79d6cbdecbfe9659630181a49fbcf500', 'adystiadrianne@gmail.com', 'Tutor', '2017-05-12 09:21:31'),
('1301154495', '1301154495', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301154500', 'aufadhila', '086fed920435277e39ce5dd4fb3b38162301cb76', 'faradhilaaufa@gmail.com', 'Administrator', '2017-05-19 13:40:35'),
('1301154528', '1301154528', '11b6c2fc7f1130d63f02f6a5e1c1a900d088a569', 'ilmachaeroh01@gmail.com', 'Tutor', '2017-04-04 10:07:39'),
('1301154552', 'sarah', '7c222fb2927d828af22f592134e8932480637c0d', 'sarahflestari@mail.com', 'Tutor', '0000-00-00 00:00:00'),
('1301154667', '1301154667', 'c4d855fc7b43dd52fc7b507dbe7d40adfa717673', 'muhturmudzi10@gmail.com', 'Tutor', '2017-04-04 10:51:25'),
('1301160094', '1301160094', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301160380', '1301160380', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301160434', '1301160434', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301160447', '1301160447', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164006', '1301164006', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164015', '1301164015', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164021', '1301164021', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164070', '1301164070', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164082', '1301164082', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164115', '1301164115', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164119', '1301164119', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164131', '1301164131', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '2017-04-08 11:22:45'),
('1301164133', '1301164133', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164155', '1301164155', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164191', '1301164191', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164223', '1301164223', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164264', '1301164264', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164316', '1301164316', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164376', '1301164376', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164378', '1301164378', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164397', '1301164397', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164410', '1301164410', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '2017-04-05 19:22:51'),
('1301164493', '1301164493', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164526', '1301164526', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164529', '1301164529', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164546', '1301164546', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164582', '1301164582', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301164604', '1301164604', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '', 'Mahasiswa', '0000-00-00 00:00:00'),
('1301168430', '1301168430', '7c222fb2927d828af22f592134e8932480637c0d', 'rahmimn@gmail.com', 'Tutor', '2017-04-04 10:25:26'),
('1302154400', 'dummy_tutor', '46dc6ff47ee6e770ea47f4a69c274438642fa00d', 'tutor@gmail.com', 'tutor', '0000-00-00 00:00:00'),
('ram', 'rama', '8cb2237d0679ca88db6464eac60da96345513964', 'ramaadtym@gmail.com', 'Administrator', '2017-09-14 16:16:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `fk_absensi_kelas` (`kode_kelas`);

--
-- Indexes for table `detail_kelas`
--
ALTER TABLE `detail_kelas`
  ADD KEY `fk_detail_kelas` (`kode_kelas`),
  ADD KEY `fk_detail_user` (`nim`);

--
-- Indexes for table `detil_user`
--
ALTER TABLE `detil_user`
  ADD KEY `fk_nim` (`nim`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`),
  ADD KEY `fk_kelas_matkul` (`kode_matkul`),
  ADD KEY `fk_kelas_tutor` (`kode_tutor`);

--
-- Indexes for table `lampiran`
--
ALTER TABLE `lampiran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `niminiminiminm` (`nim`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`kode_matkul`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id_registrasi`),
  ADD KEY `fk_registrasi_matkul` (`kode_matkul`),
  ADD KEY `fk_registrasi_kelas` (`kode_kelas`),
  ADD KEY `fk_registrasi_nim` (`nim`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`kode_tutor`),
  ADD KEY `fk_nim_tutor` (`nim`),
  ADD KEY `fk_tutor_matkul1` (`matkul1`),
  ADD KEY `fk_tutor_matkul2` (`matkul2`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `lampiran`
--
ALTER TABLE `lampiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id_registrasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `fk_absen_kelas` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_kelas`
--
ALTER TABLE `detail_kelas`
  ADD CONSTRAINT `fk_detail_kelas` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detail_user` FOREIGN KEY (`nim`) REFERENCES `user` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detil_user`
--
ALTER TABLE `detil_user`
  ADD CONSTRAINT `fk_nim` FOREIGN KEY (`nim`) REFERENCES `user` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `fk_kelas_matkul` FOREIGN KEY (`kode_matkul`) REFERENCES `matkul` (`kode_matkul`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kelas_tutor` FOREIGN KEY (`kode_tutor`) REFERENCES `tutor` (`kode_tutor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lampiran`
--
ALTER TABLE `lampiran`
  ADD CONSTRAINT `niminiminiminm` FOREIGN KEY (`nim`) REFERENCES `user` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD CONSTRAINT `fk_registrasi_kelas` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode_kelas`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_registrasi_matkul` FOREIGN KEY (`kode_matkul`) REFERENCES `matkul` (`kode_matkul`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_registrasi_nim` FOREIGN KEY (`nim`) REFERENCES `user` (`nim`) ON DELETE CASCADE;

--
-- Constraints for table `tutor`
--
ALTER TABLE `tutor`
  ADD CONSTRAINT `fk_nim_tutor` FOREIGN KEY (`nim`) REFERENCES `user` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tutor_matkul1` FOREIGN KEY (`matkul1`) REFERENCES `matkul` (`kode_matkul`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tutor_matkul2` FOREIGN KEY (`matkul2`) REFERENCES `matkul` (`kode_matkul`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
