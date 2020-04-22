-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 06:24 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `statusoperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `ID` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp(),
  `GAM1` decimal(4,1) DEFAULT NULL,
  `GAM2` decimal(4,1) DEFAULT NULL,
  `GAM3` decimal(4,1) DEFAULT NULL,
  `GAM4` decimal(4,1) DEFAULT NULL,
  `GAM5` decimal(4,1) DEFAULT NULL,
  `GAM6` decimal(4,1) DEFAULT NULL,
  `GAM7` decimal(4,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`ID`, `Time`, `GAM1`, `GAM2`, `GAM3`, `GAM4`, `GAM5`, `GAM6`, `GAM7`) VALUES
(1, '2020-04-13 13:37:12', '5.0', '46.0', '21.0', '23.0', '25.0', '0.0', '29.0'),
(2, '2020-04-13 13:37:14', '5.0', '24.0', '7.0', '17.0', '18.0', '15.0', '6.0'),
(3, '2020-04-13 13:50:59', '43.0', '38.0', '10.0', '1.0', '11.0', '26.0', '8.0'),
(4, '2020-04-13 13:51:00', '9.0', '46.0', '45.0', '15.0', '0.0', '48.0', '39.0'),
(5, '2020-04-13 13:51:01', '35.0', '39.0', '15.0', '9.0', '48.0', '21.0', '25.0'),
(6, '2020-04-13 13:51:03', '26.0', '35.0', '44.0', '23.0', '14.0', '19.0', '23.0'),
(7, '2020-04-13 13:51:04', '43.0', '17.0', '3.0', '33.0', '31.0', '41.0', '49.0'),
(8, '2020-04-13 13:51:05', '9.0', '47.0', '19.0', '25.0', '18.0', '25.0', '45.0'),
(9, '2020-04-13 13:51:06', '46.0', '12.0', '28.0', '18.0', '10.0', '9.0', '32.0'),
(10, '2020-04-13 13:51:07', '48.0', '32.0', '2.0', '24.0', '20.0', '45.0', '28.0'),
(11, '2020-04-13 13:51:08', '2.0', '1.0', '43.0', '11.0', '9.0', '45.0', '8.0'),
(12, '2020-04-13 13:51:09', '42.0', '35.0', '19.0', '22.0', '14.0', '12.0', '35.0'),
(13, '2020-04-13 13:51:10', '1.0', '29.0', '40.0', '47.0', '33.0', '0.0', '10.0'),
(14, '2020-04-13 13:51:11', '26.0', '45.0', '37.0', '43.0', '17.0', '24.0', '5.0'),
(15, '2020-04-13 13:51:12', '16.0', '7.0', '31.0', '29.0', '34.0', '12.0', '27.0'),
(16, '2020-04-13 13:51:13', '2.2', '22.0', '32.0', '26.0', '36.0', '19.0', '28.0'),
(18, '2020-04-21 07:54:35', '1.0', '2.0', '3.0', '4.0', '5.0', '6.0', '7.0'),
(19, '2020-04-21 07:54:35', '2.0', '4.0', '7.0', '9.0', '10.0', '11.0', '8.0'),
(20, '2020-04-21 07:56:33', '4.0', '5.0', '6.0', '7.0', '8.0', '9.0', '10.0'),
(21, '2020-04-21 07:56:33', '1.0', '2.0', '3.0', '4.0', '5.0', '7.0', '8.0');

-- --------------------------------------------------------

--
-- Table structure for table `statusoperasi`
--

CREATE TABLE `statusoperasi` (
  `id` int(6) UNSIGNED NOT NULL,
  `status` varchar(20) NOT NULL,
  `LajuAlir` int(20) DEFAULT NULL,
  `Daya` int(20) DEFAULT NULL,
  `Suhu` int(20) DEFAULT NULL,
  `Suhubahanbakar` int(20) NOT NULL,
  `LajuAlir2Tube` int(20) NOT NULL,
  `LajuAlir2Plat` int(20) NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statusoperasi`
--

INSERT INTO `statusoperasi` (`id`, `status`, `LajuAlir`, `Daya`, `Suhu`, `Suhubahanbakar`, `LajuAlir2Tube`, `LajuAlir2Plat`, `reading_time`) VALUES
(1, 'Operasi', 137, 111, 35, 701, 820, 519, '2020-04-21 14:50:04'),
(2, 'Kritis', 137, 111, 32, 701, 820, 519, '2020-04-21 14:50:32'),
(3, 'Operasi', 137, 109, 57, 699, 819, 519, '2020-04-21 14:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(5) NOT NULL,
  `AdminName` varchar(45) DEFAULT NULL,
  `UserName` char(45) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `level` varchar(20) NOT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `level`, `AdminRegdate`) VALUES
(1, 'Raga', 'gajulan', 6285775310408, 'admin@gmail.com', '65077dfdb94cc106bf33477ac978d485', 'User', '2019-04-22 06:26:14'),
(2, 'Raga', 'bgajulan', 1234, 'raga@gmail.com', '65077dfdb94cc106bf33477ac978d485', 'Visitor', '2019-04-22 06:26:14'),
(3, 'Raga', 'gajulan123', NULL, NULL, '65077dfdb94cc106bf33477ac978d485', 'Admin', '2020-02-26 04:45:37'),
(7, 'Raga', 'gajulan', NULL, NULL, NULL, '', '2020-02-26 05:51:36'),
(12, 'STTN', 'sttn', 0, 'ragapushadwa@gmai.com', '27a30825928c537c470a6b9132c51c07', 'User', '2020-04-08 15:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `tblpegawai`
--

CREATE TABLE `tblpegawai` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(120) NOT NULL,
  `Jenis` varchar(120) NOT NULL,
  `remark` varchar(20) NOT NULL,
  `EnterDate` timestamp NULL DEFAULT current_timestamp(),
  `outtime` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpegawai`
--

INSERT INTO `tblpegawai` (`ID`, `FullName`, `Jenis`, `remark`, `EnterDate`, `outtime`) VALUES
(1, 'Raga', 'PPR', 'Keluar', '2019-12-31 07:05:41', '2020-04-21 06:19:07'),
(2, 'Raga', 'PPR', 'Keluar', '2019-12-31 07:05:41', '2020-04-21 06:18:45'),
(3, 'Raga', 'Lainnya', 'Keluar', '2020-01-03 08:37:42', '2020-04-21 06:18:52'),
(4, 'Raga', 'PPR', 'Keluar', '2020-01-06 07:51:25', '2020-04-21 06:18:56'),
(5, 'raga', 'Operator', '', '2020-01-06 07:55:39', '2020-04-21 06:19:00'),
(6, 'raga', 'Operator', 'Keluar', '2020-01-06 07:56:31', '2020-01-06 08:08:56'),
(7, 'dfgdgsd', '', '', '2020-01-06 07:58:26', NULL),
(8, 'Raga', '', 'Keluar', '2020-01-06 07:59:57', '2020-01-06 08:08:56'),
(9, 'raga', '', 'Keluar', '2020-01-06 08:00:22', '2020-01-06 08:08:55'),
(10, 'raga', '', 'Keluar', '2020-01-06 08:04:41', '2020-01-06 08:08:55'),
(11, 'raga', 'raga', 'Keluar', '2020-01-06 08:07:53', '2020-01-06 08:08:54'),
(12, 'raga', 'raga', 'Keluar', '2020-01-06 08:08:11', '2020-01-06 08:08:53'),
(13, 'raga', 'raga', 'Keluar', '2020-01-06 08:08:47', '2020-01-06 08:08:52'),
(14, 'raga', 'raga', 'Keluar', '2020-01-06 08:10:31', '2020-01-06 08:10:37'),
(15, 'Raga', 'Operator', 'Keluar', '2020-01-08 03:55:23', '2020-01-08 03:55:28'),
(16, 'Raga', '', 'Keluar', '2020-04-02 04:42:17', '2020-04-02 04:50:14'),
(17, 'Raga', 'Operator', 'Keluar', '2020-04-02 04:44:00', '2020-04-02 04:47:45'),
(18, 'Raga', 'Lainnya', '', '2020-04-04 01:42:54', NULL),
(19, 'Raga', 'Maintenance', '', '2020-04-04 01:54:23', NULL),
(20, 'Raga', 'PPR', '', '2020-04-04 02:42:28', NULL),
(21, 'Raga', 'Operator', '', '2020-04-04 02:42:40', NULL),
(22, 'Raga', 'Operator', 'Keluar', '2020-04-20 18:54:41', '2020-04-21 06:12:50'),
(23, 'Raga', 'Operator', 'Keluar', '2020-04-21 06:12:43', '2020-04-21 06:12:48'),
(24, 'Raga', 'PPR', '', '2020-04-21 07:18:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblvisitor`
--

CREATE TABLE `tblvisitor` (
  `ID` int(5) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `Jenis` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Address` varchar(250) DEFAULT NULL,
  `Keperluan` varchar(120) DEFAULT NULL,
  `EnterDate` timestamp NULL DEFAULT current_timestamp(),
  `remark` varchar(255) DEFAULT NULL,
  `outtime` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvisitor`
--

INSERT INTO `tblvisitor` (`ID`, `FullName`, `Jenis`, `MobileNumber`, `Address`, `Keperluan`, `EnterDate`, `remark`, `outtime`) VALUES
(26, 'Raga', 'Pelajar', 90123021, 'ASEFAS', NULL, '2019-12-03 07:10:27', 'Keluar', '2020-04-21 05:45:52'),
(27, 'gdfsgdsf', 'Umum', 0, 'fdsafdsafds', NULL, '2019-12-03 07:20:52', 'Keluar', '2020-02-18 07:46:38'),
(28, 'vbfdgfds', 'Umum', 0, 'gfdsgdsfgfd', NULL, '2019-12-03 07:21:49', 'Keluar', '2020-02-18 07:46:34'),
(47, 'sdfgsda', 'Mahasiswa', 321321, 'fdsafdsa', NULL, '2020-02-10 09:07:36', NULL, '2020-02-18 07:45:59'),
(58, 'Raga', 'Mahasiswa', 0, '', '', '2020-02-13 08:46:49', NULL, NULL),
(59, 'Raga', 'Mahasiswa', 0, '', '', '2020-02-13 08:47:29', NULL, NULL),
(60, 'Raga', 'Umum', 0, '', '', '2020-02-13 09:36:40', NULL, NULL),
(61, 'Raga', 'Mahasiswa', 0, '', '', '2020-02-13 09:36:44', NULL, NULL),
(62, 'Raga', 'Pelajar', 0, '', '', '2020-02-13 09:36:47', NULL, NULL),
(63, 'Rga', 'Umum', 0, '', '', '2020-02-13 09:36:51', NULL, NULL),
(64, 'Raga', 'Mahasiswa', 0, '', '', '2020-04-02 04:19:48', 'Keluar', '2020-04-02 04:19:58'),
(65, 'Raga', 'Mahasiswa', 0, '', '', '2020-04-19 04:21:17', 'Keluar', '2020-04-19 04:21:26'),
(66, 'Raga', 'Mahasiswa', 1234, 'Raga', 'Raga', '2020-04-20 18:51:49', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `statusoperasi`
--
ALTER TABLE `statusoperasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpegawai`
--
ALTER TABLE `tblpegawai`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblvisitor`
--
ALTER TABLE `tblvisitor`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `statusoperasi`
--
ALTER TABLE `statusoperasi`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblpegawai`
--
ALTER TABLE `tblpegawai`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tblvisitor`
--
ALTER TABLE `tblvisitor`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
