-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 07:37 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tabungan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(16, 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id_detail` int(11) NOT NULL,
  `t_detail` date NOT NULL,
  `s_detail` int(11) NOT NULL,
  `p_detail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id_detail`, `t_detail`, `s_detail`, `p_detail`) VALUES
(1, '2022-02-02', 200000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `penarikan`
--

CREATE TABLE `penarikan` (
  `id_penarikan` int(11) NOT NULL,
  `tgl_penarikan` date NOT NULL,
  `jml_penarikan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penarikan`
--

INSERT INTO `penarikan` (`id_penarikan`, `tgl_penarikan`, `jml_penarikan`) VALUES
(1, '2022-02-07', 200000),
(2, '2022-03-04', 150000),
(4, '2022-01-01', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `setoran`
--

CREATE TABLE `setoran` (
  `id_setoran` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tgl_setoran` date NOT NULL,
  `jml_setoran` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setoran`
--

INSERT INTO `setoran` (`id_setoran`, `id_siswa`, `tgl_setoran`, `jml_setoran`) VALUES
(2, 9, '2022-03-03', 200000),
(5, 5, '2022-03-05', 250000);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(10) NOT NULL,
  `no_induk` int(10) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jk_siswa` varchar(50) NOT NULL,
  `tl_siswa` varchar(255) NOT NULL,
  `alamat_siswa` varchar(100) NOT NULL,
  `thn_masuk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `no_induk`, `nama_siswa`, `jk_siswa`, `tl_siswa`, `alamat_siswa`, `thn_masuk`) VALUES
(1, 4293, 'Mirza Rafa Saputra', 'Laki-Laki', '15 Maret 2012', 'Kalijurang', '2020/2021'),
(15, 4294, 'Adrian Meshakh Pradipta', 'Laki-Laki', '3 Juli 2015', 'Kalijurang Rt 01/02', '2020/2021'),
(17, 4295, 'Afifah Mutiara Zahiyah', 'Perempuan', '13 Maret 2015', 'Kalijurang Rt 04/02', '2020/2021'),
(18, 4296, 'Alma Assila Sukma', 'Perempuan', '3 Agustus 2014', 'Kalijurang Rt 01/02', '2020/2021'),
(19, 4297, 'Azzam Sidqi Al-Fahri', 'Laki-laki', '8 September 2014', 'Kalijurang Rt 04/01', '2020/2021'),
(20, 4298, 'Dwi Bintany Athaya Ghalin', 'Perempuan', '24 Maret 2015', 'Kalijurang Rt 01/02', '2020/2021'),
(21, 4299, 'Edwin Rifky Muktabar', 'Laki-laki', '4 Desember 2014', 'Kalijurang Rt 02/02', '2020/2021'),
(22, 4300, 'Erlangga Naufal Efendi', 'Laki-laki', '2015-12-03', 'Kalijurang Rt 02/06', '2020/2021'),
(23, 4301, 'Fannan Alim Khan', 'Laki-laki', '2014-08-06', 'Kalijurang Rt 01/08', '2020/2021'),
(24, 4302, 'Faurel Aulia Ramadhan', 'Laki-laki', '2014-10-07', 'Kalijurang Rt 01/02', '2020/2021'),
(25, 4303, 'Ferica Atha Ananta', 'Perempuan', '27 September 2014', 'Kalijurang Rt 04/01', '2020/2021'),
(26, 4304, 'Indah Cahya Ningsih', 'Perempuan', '22 September 2014', 'Kalijurang Rt 01/02', '2020/2021'),
(27, 4305, 'Maher Muhammad ahsabani', 'Laki-laki', '6 Juni 2015', 'Kalijurang Rt 01/02', '2020/2021'),
(28, 4306, 'Muhammad Rafa Azka Putra', 'Laki-laki', '24 April 2015', 'Kalijurang Rt 03/06', '2020/2021'),
(29, 4307, 'Muhammad Roghib Zahron Aufa', 'Laki-laki', '22 Februari 2015', 'Kalijurang Rt 03/06', '2020/2021'),
(30, 4308, 'Nada Lutfiyah Afifah', 'Perempuan', '26 mei 2015', 'Rancamaya Rt 04/01', '2020/2021'),
(31, 4309, 'Nasya Sabila ', 'Perempuan', '22 November 2013', 'Pakijangan Rt 02/06', '2020/2021'),
(32, 4310, 'Nawal Nadiron Shofinez', 'Perempuan', '15 Juni 2015', 'Dk.Glempang Rt 03/06', '2020/2021'),
(33, 4311, 'Raka Afriansyah', 'Laki-laki', '3 Oktober 2014', 'Kp.Kawaron Ilir Rt 01/08', '2020/2021'),
(34, 4312, 'Raka Putra Pratama', 'Laki-laki', '10 November 2014', 'Kalijurang Rt 02/02', '2020/2021'),
(35, 4313, 'Restu Arbiantoro', 'Perempuan', '9 Juli 2014', 'Kalijurang Rt 01/01', '2020/2021'),
(36, 4314, 'Rosella Adelia Kanza', 'Perempuan', '6 September 2014', 'Kalijurang Rt 03/01', '2020/2021'),
(37, 4315, 'Salsa Nur Ismiati', 'Perempuan', '22 September 2014', 'Kalijurang Rt 01/02', '2020/2021'),
(38, 4316, 'Shafira Putri Asyabbab', 'Perempuan', '1 Maret 2015', 'Kalijurang Rt 04/02', '2020/2021'),
(39, 4317, 'Ulfa Sefiatun Najwa', 'Perempuan', '22 Juni 2014', 'Kalijurang Rt 01/05', '2020/2021'),
(40, 4318, 'Yustin Fayi Zahra Ramadanti', 'Perempuan', '1 juli 2014', 'Kalijurang Rt 01/02', '2020/2021'),
(41, 4245, 'Abi Manyu', 'Laki-laki', '25 Desember 2011', 'Kalijurang Rt 02/02', '2019/2020'),
(42, 4246, 'Akfan Al Baihaqi', 'Laki-laki', '27 Juni 2012', 'Kalijurang Rt 04/01', '2019/2020'),
(43, 4247, 'Akhlisa Iqna Syakira', 'Perempuan', '18 Januari 2013', 'Kalijurang Rt 03/06', '2019/2020'),
(44, 4248, 'Al Isha Putri Ayuningtiasi', 'Perempuan', '31 Agustus 3013', 'Kalijurang Rt 03/01', '2019/2020'),
(45, 4249, 'Alariq Abrizam Arif', 'Laki-laki', '15 Desember 2012', 'Kalijurang', '2019/2020'),
(46, 4250, 'Alika Dianata Kayyisya', 'Perempuan', '20 Juni 2013', 'Kalijurang Rt 01/06', '2019/2020'),
(47, 4251, 'Asyifa Fadilatun Nisa', 'Perempuan', '8 Maret2012', 'Kalijurang Rt 02/02', '2019/2020'),
(48, 4252, 'Dela Asyifatu Rizko', 'Perempuan', '26 Oktober 2012', 'Kalijurang Rt 03/01', '2019/2020'),
(49, 4453, 'Eria Azsa Cantika', 'Perempuan', '22 September 2013', 'Kalijurang Rt 02/01', '2019/2020'),
(50, 4455, 'Gina Nur Alimah Wafda', 'Perempuan', '21 Agustus 2013', 'Kalijurang Rt 03/01', '2019/2020'),
(51, 4155, 'Haidar Adnan Raja', 'Laki-laki', '9 April 2012', 'Kalijurang Rt 03/01', '2019/2020'),
(52, 4256, 'Ibrahim Nadhif Fahmi', 'Laki-laki', '18 Desember 2012', 'Kalijurang Rt 02/01', '2019/2020'),
(53, 4457, 'Iqbal Al Varo Fabian', 'Laki-laki', '1 April 2013', 'Kalijurang Rt 03/01', '2019/2020'),
(54, 4458, 'M.Burhan Yusrilmakits', 'Laki-laki', '28 September 2012', 'Kalijurang Rt 01/03', '2019/2020'),
(55, 4259, 'M.Nelhamdi Julamesur', 'Laki-laki', '20 Juli 2014', 'Kalijurang Rt 01/01', '2019/2020'),
(56, 4260, 'Muhammad Iqbal ', 'Laki-laki', '25 Oktober 2012', 'Kalijurang Rt 03/01', '2019/2020'),
(57, 4261, 'Nayla Asyifa Ramadhan', 'Perempuan', '4 Agustus 2012', 'Kalijurang Rt 02/06', '2019/2020'),
(58, 4262, 'Nayla Asyifa Salsabila', 'Perempuan', '29 Oktober 2012', 'Kalijurang Rt 03/02', '2019/2020'),
(59, 4263, 'Razih Azfar Al-Muhsi', 'Laki-laki', '20 Juli 2011', 'Kalijurang Rt 01/01', '2019/2020'),
(60, 4464, 'Sabilina Julia Rahma', 'Perempuan', '8 Juli 2012', 'Kalijurang Rt 02/05', '2019/2020'),
(61, 4465, 'Tasya Ayu Lestari', 'Perempuan', '17 April 2013', 'Kalijurang Rt 02/01', '2019/2020'),
(62, 4266, 'Ummiy Selia Aflahat', 'Perempuan', '10 Juni 2013', 'Kalijurang Rt 03/06', '2019/2020'),
(63, 4267, 'Zahfa Nathania Bella', 'Perempuan', '8 Oktober 2012', 'Kalijurang Rt 04/01', '2019/2020'),
(64, 4468, 'Muhammad Azril Maulana', 'Laki-laki', '21 Maret  2012', 'Kalijurang Rt 04/02', '2019/2020'),
(65, 4243, 'Zelda Nauratu Bilqis', 'Perempuan', '6 Agustus 2012', 'Kalijurang Rt 03/06', '2019/2020'),
(66, 4244, 'Nur Lila Ramadhani', 'Perempuan', '3 Juli 2009', 'Kalijurang Rt 03/01', '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `kelas_siswa` int(5) NOT NULL,
  `setoran_siswa` int(100) NOT NULL,
  `penarikan_siswa` int(100) NOT NULL,
  `saldo_siswa` int(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama_siswa`, `kelas_siswa`, `setoran_siswa`, `penarikan_siswa`, `saldo_siswa`, `keterangan`) VALUES
(1, 'Mirza Rafa Saputra', 1, 0, 0, 0, ''),
(2, 'Adrian Meshakh Pradipta', 1, 0, 0, 0, ''),
(3, 'Afifah Mutiara Zahiyah', 1, 0, 0, 0, ''),
(4, 'Alma Assila Sukma', 1, 0, 0, 0, ''),
(5, 'Azzam Sidqi Al-Fahri', 1, 0, 0, 0, ''),
(6, 'Dwi Bintany Athaya Ghalin', 1, 0, 0, 0, ''),
(7, 'Edwin Rifky Muktabar', 1, 0, 0, 0, ''),
(8, 'Erlangga Naufal Efendi', 1, 0, 0, 0, ''),
(9, 'Fannan Alim Khan', 1, 0, 0, 0, ''),
(10, 'Faurel Aulia Ramadhan', 1, 0, 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `penarikan`
--
ALTER TABLE `penarikan`
  ADD PRIMARY KEY (`id_penarikan`);

--
-- Indexes for table `setoran`
--
ALTER TABLE `setoran`
  ADD PRIMARY KEY (`id_setoran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penarikan`
--
ALTER TABLE `penarikan`
  MODIFY `id_penarikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `setoran`
--
ALTER TABLE `setoran`
  MODIFY `id_setoran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
