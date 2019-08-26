-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2018 at 04:21 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal2`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_aplikasi`
--

CREATE TABLE `jawaban_aplikasi` (
  `id_jawaban` int(20) NOT NULL,
  `id_quest` int(20) NOT NULL,
  `jawaban` varchar(200) DEFAULT 'NIHIL',
  `id_user` int(20) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_kematangan`
--

CREATE TABLE `jawaban_kematangan` (
  `id_jawaban` int(20) NOT NULL,
  `id_quest` int(20) NOT NULL,
  `jawaban` varchar(200) NOT NULL,
  `id_user` int(20) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_umum`
--

CREATE TABLE `jawaban_umum` (
  `id_jawaban` int(20) NOT NULL,
  `id_quest` int(20) NOT NULL,
  `jawaban` varchar(200) NOT NULL,
  `id_user` int(20) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `j_aplikasi`
--
CREATE TABLE `j_aplikasi` (
`id_user` int(100)
,`nama` varchar(200)
,`id_quest` int(20)
,`pertanyaan` text
,`id_jawaban` int(20)
,`jawaban` varchar(200)
,`tgl_input` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `j_kematangan`
--
CREATE TABLE `j_kematangan` (
`nama` varchar(200)
,`pertanyaan` text
,`id_jawaban` int(20)
,`id_quest` int(20)
,`jawaban` varchar(200)
,`id_user` int(20)
,`tgl_input` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `j_umum`
--
CREATE TABLE `j_umum` (
`id_user` int(100)
,`nama` varchar(200)
,`id_quest` int(20)
,`pertanyaan` text
,`id_jawaban` int(20)
,`jawaban` varchar(200)
,`tgl_input` date
);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_quest` int(20) NOT NULL,
  `kategori` enum('Kuesioner Aplikasi','Pertanyaan Umum','Pertanyaan Tingkat Kematangan') NOT NULL,
  `pertanyaan` text NOT NULL,
  `kategori_urutan` enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20') NOT NULL,
  `pil1` varchar(200) DEFAULT NULL,
  `pil2` varchar(200) DEFAULT NULL,
  `pil3` varchar(200) DEFAULT NULL,
  `pil4` varchar(200) DEFAULT NULL,
  `pil5` varchar(200) DEFAULT NULL,
  `pil6` varchar(200) DEFAULT NULL,
  `sub_judul` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level_user` enum('admin','member') NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `no_hp`, `alamat`, `email`, `username`, `password`, `level_user`) VALUES
(2, 'admin', '081334343434', 'jl bromo', 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'jono', '08213333333', 'jl sawo', 'jono@yahoo.com', 'jono', '42867493d4d4874f331d288df0044baa', 'member'),
(4, 'dede', '085767676767', 'jl jeruk', 'dede@gmail.com', 'dede', 'b4be1c568a6dc02dcaf2849852bdb13e', 'member'),
(5, 'bono', '089989898999', 'jl anggrek', 'bono@gmail.com', 'bono', '83c2ffa1df5e7a6b37616b8f63e95b17', 'admin');

-- --------------------------------------------------------

--
-- Structure for view `j_aplikasi`
--
DROP TABLE IF EXISTS `j_aplikasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `j_aplikasi`  AS  select `u`.`id_user` AS `id_user`,`u`.`nama` AS `nama`,`p`.`id_quest` AS `id_quest`,`p`.`pertanyaan` AS `pertanyaan`,`j`.`id_jawaban` AS `id_jawaban`,`j`.`jawaban` AS `jawaban`,`j`.`tgl_input` AS `tgl_input` from ((`users` `u` join `jawaban_aplikasi` `j` on((`u`.`id_user` = `j`.`id_user`))) join `pertanyaan` `p` on((`j`.`id_quest` = `p`.`id_quest`))) ;

-- --------------------------------------------------------

--
-- Structure for view `j_kematangan`
--
DROP TABLE IF EXISTS `j_kematangan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `j_kematangan`  AS  select `u`.`nama` AS `nama`,`p`.`pertanyaan` AS `pertanyaan`,`j`.`id_jawaban` AS `id_jawaban`,`j`.`id_quest` AS `id_quest`,`j`.`jawaban` AS `jawaban`,`j`.`id_user` AS `id_user`,`j`.`tgl_input` AS `tgl_input` from ((`users` `u` join `jawaban_kematangan` `j` on((`u`.`id_user` = `j`.`id_user`))) join `pertanyaan` `p` on((`j`.`id_quest` = `p`.`id_quest`))) ;

-- --------------------------------------------------------

--
-- Structure for view `j_umum`
--
DROP TABLE IF EXISTS `j_umum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `j_umum`  AS  select `u`.`id_user` AS `id_user`,`u`.`nama` AS `nama`,`p`.`id_quest` AS `id_quest`,`p`.`pertanyaan` AS `pertanyaan`,`j`.`id_jawaban` AS `id_jawaban`,`j`.`jawaban` AS `jawaban`,`j`.`tgl_input` AS `tgl_input` from ((`users` `u` join `jawaban_umum` `j` on((`u`.`id_user` = `j`.`id_user`))) join `pertanyaan` `p` on((`j`.`id_quest` = `p`.`id_quest`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawaban_aplikasi`
--
ALTER TABLE `jawaban_aplikasi`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `jawaban_kematangan`
--
ALTER TABLE `jawaban_kematangan`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `jawaban_umum`
--
ALTER TABLE `jawaban_umum`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_quest`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban_aplikasi`
--
ALTER TABLE `jawaban_aplikasi`
  MODIFY `id_jawaban` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=433;
--
-- AUTO_INCREMENT for table `jawaban_kematangan`
--
ALTER TABLE `jawaban_kematangan`
  MODIFY `id_jawaban` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=517;
--
-- AUTO_INCREMENT for table `jawaban_umum`
--
ALTER TABLE `jawaban_umum`
  MODIFY `id_jawaban` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_quest` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
