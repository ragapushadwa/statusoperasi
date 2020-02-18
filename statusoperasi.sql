-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 04:42 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

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
  `GAM1` varchar(10) NOT NULL,
  `GAM2` varchar(10) NOT NULL,
  `GAM3` varchar(10) NOT NULL,
  `GAM4` varchar(10) NOT NULL,
  `GAM5` varchar(10) NOT NULL,
  `GAM6` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`ID`, `Time`, `GAM1`, `GAM2`, `GAM3`, `GAM4`, `GAM5`, `GAM6`) VALUES
(70, '2019-09-11 02:28:37', '15', '16', '55', '500', '5', '234'),
(71, '2019-09-11 02:57:19', '15', '16', '55', '500', '5', '234'),
(72, '2019-09-11 02:57:37', '15', '16', '55', '500', '5', '234'),
(73, '2019-09-11 10:11:44', '15', '16', '55', '500', '5', '234'),
(74, '2019-09-11 10:11:46', '15', '16', '55', '500', '5', '234'),
(75, '2019-09-11 10:11:47', '15', '16', '55', '500', '5', '234'),
(76, '2019-09-11 10:11:47', '15', '16', '55', '500', '5', '234'),
(77, '2019-09-11 10:14:32', '1', '16', '55', '500', '5', '234'),
(78, '2019-09-11 10:20:19', '1', '16', '55', '500', '5', '234'),
(79, '2019-09-12 03:43:21', '15', '16', '55', '500', '5', '234'),
(80, '2019-09-13 00:54:16', '15', '16', '55', '500', '5', '234'),
(81, '2019-09-13 00:54:31', '23', '16', '55', '500', '5', '234'),
(82, '2019-09-16 08:52:10', '56', '23', '100', '150', '12', '150'),
(83, '2019-09-16 08:57:16', '56', '23', '100', '150', '12', '150');

-- --------------------------------------------------------

--
-- Table structure for table `statusoperasi`
--

CREATE TABLE `statusoperasi` (
  `id` int(6) UNSIGNED NOT NULL,
  `Flux` int(20) DEFAULT NULL,
  `Daya` int(20) DEFAULT NULL,
  `Suhu` int(20) DEFAULT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statusoperasi`
--

INSERT INTO `statusoperasi` (`id`, `Flux`, `Daya`, `Suhu`, `reading_time`) VALUES
(1, 20, 35, 45, '2019-12-13 02:48:20'),
(2, 45, 546, 45, '2019-12-13 02:48:20'),
(3, 20, 35, 45, '2019-12-13 02:48:36'),
(4, 45, 546, 45, '2019-12-13 02:48:36');

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
(2, 'dsadsas', 'bgajulan', NULL, NULL, '65077dfdb94cc106bf33477ac978d485', 'Visitor', '2019-04-22 06:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `tblpegawai`
--

CREATE TABLE `tblpegawai` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(120) NOT NULL,
  `Posisi` varchar(120) NOT NULL,
  `remark` varchar(20) NOT NULL,
  `EnterDate` timestamp NULL DEFAULT current_timestamp(),
  `outtime` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpegawai`
--

INSERT INTO `tblpegawai` (`ID`, `FullName`, `Posisi`, `remark`, `EnterDate`, `outtime`) VALUES
(1, 'fsdfds', '', 'Keluar', '2019-12-31 07:05:41', '2019-12-31 07:23:54'),
(2, 'Raga', '', '', '2019-12-31 07:05:41', NULL),
(3, 'Raga', '', 'Keluar', '2020-01-03 08:37:42', '2020-01-03 08:37:45'),
(4, 'Raga', '', 'Keluar', '2020-01-06 07:51:25', '2020-01-06 07:51:30'),
(5, 'raga', '', '', '2020-01-06 07:55:39', NULL),
(6, 'raga', 'Operator', 'Keluar', '2020-01-06 07:56:31', '2020-01-06 08:08:56'),
(7, 'dfgdgsd', '', '', '2020-01-06 07:58:26', NULL),
(8, 'Raga', '', 'Keluar', '2020-01-06 07:59:57', '2020-01-06 08:08:56'),
(9, 'raga', '', 'Keluar', '2020-01-06 08:00:22', '2020-01-06 08:08:55'),
(10, 'raga', '', 'Keluar', '2020-01-06 08:04:41', '2020-01-06 08:08:55'),
(11, 'raga', 'raga', 'Keluar', '2020-01-06 08:07:53', '2020-01-06 08:08:54'),
(12, 'raga', 'raga', 'Keluar', '2020-01-06 08:08:11', '2020-01-06 08:08:53'),
(13, 'raga', 'raga', 'Keluar', '2020-01-06 08:08:47', '2020-01-06 08:08:52'),
(14, 'raga', 'raga', 'Keluar', '2020-01-06 08:10:31', '2020-01-06 08:10:37'),
(15, 'Raga', 'Operator', 'Keluar', '2020-01-08 03:55:23', '2020-01-08 03:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `tblvisitor`
--

CREATE TABLE `tblvisitor` (
  `ID` int(5) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Address` varchar(250) DEFAULT NULL,
  `Keperluan` varchar(120) DEFAULT NULL,
  `Deptartment` varchar(120) DEFAULT NULL,
  `ReasontoMeet` varchar(120) DEFAULT NULL,
  `EnterDate` timestamp NULL DEFAULT current_timestamp(),
  `remark` varchar(255) DEFAULT NULL,
  `outtime` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvisitor`
--

INSERT INTO `tblvisitor` (`ID`, `FullName`, `Email`, `MobileNumber`, `Address`, `Keperluan`, `Deptartment`, `ReasontoMeet`, `EnterDate`, `remark`, `outtime`) VALUES
(14, 'Raga', 'raga@sadasd.com', 0, 'raga', 'raga', 'raga', 'raga', '2019-09-17 02:04:51', 'Keluar', '2019-12-03 07:22:25'),
(15, 'Rga', 'raga@gmail.com', 123123, '213123123', NULL, NULL, NULL, '2019-09-17 02:10:57', 'Keluar', '2019-12-05 10:31:41'),
(16, 'Ibrahim', 'ibrahim@gmail.com', 2913219039, 'Kledokan\r\n', NULL, NULL, NULL, '2019-09-17 04:40:50', 'Keluar', '2019-12-05 11:27:10'),
(17, 'Ihsan Fajar R', 'ihsan@gmail.com', 123213213, 'kledokan\r\n', NULL, NULL, NULL, '2019-09-18 02:43:24', 'Keluar', '2019-12-06 07:41:56'),
(18, 'dfgdgsd', '`sdfsdfds@gmail.com', 0, 'sadasdas\r\n', NULL, NULL, NULL, '2019-09-26 04:42:06', 'Keluar', '2019-12-05 11:42:17'),
(19, 'raga', 'raga@gmail.com', 0, 'fdsfsad', NULL, NULL, NULL, '2019-12-03 05:56:32', 'Keluar', '2019-12-05 08:37:28'),
(20, 'raga', 'raga@fsfsadl.com', 0, 'dasdas', NULL, NULL, NULL, '2019-12-03 05:59:34', 'Selesai', '2019-12-03 06:13:35'),
(21, 'dfdsafdsa', 'fds@gmail.c9om', 0, 'asdasdsa', NULL, NULL, NULL, '2019-12-03 06:14:12', 'Keluar', '2019-12-05 11:28:09'),
(22, 'ihsan', 'fajar@gmail.com', 20, 'adadsa', NULL, NULL, NULL, '2019-12-03 06:30:06', 'Keluar', '2019-12-05 11:38:47'),
(23, 'rjhiworjqw', '`RQO3ERQO@yaqhi', 0, 'dsadas', NULL, NULL, NULL, '2019-12-03 07:02:42', 'lkpoko', '2019-12-03 07:03:01'),
(24, 'dsadsa', 'dsas@gmail', 0, 'kldsakdlsa', NULL, NULL, NULL, '2019-12-03 07:04:37', 'keluar', '2019-12-03 07:05:32'),
(25, ' cmzxcmz', 'AKEA@GMAIL.COM', 989879, 'DSADASDAS', NULL, NULL, NULL, '2019-12-03 07:08:26', 'Keluar', '2019-12-05 06:35:28'),
(26, 'rAGA', 'RAGA@GMAIL.COM', 90123021, 'ASEFAS', NULL, NULL, NULL, '2019-12-03 07:10:27', 'Keluar', '2019-12-05 11:30:45'),
(27, 'gdfsgdsf', 'hpcsttn@gmail.com', 0, 'fdsafdsafds', NULL, NULL, NULL, '2019-12-03 07:20:52', 'Keluar', '2019-12-05 05:53:50'),
(28, 'vbfdgfds', 'gfdsgdsf@gmail.com', 0, 'gfdsgdsfgfd', NULL, NULL, NULL, '2019-12-03 07:21:49', 'Keluar', '2019-12-03 07:21:58'),
(29, 'rewraw', 'sdafdsa@gmail.com', 0, 'fdsafasd', NULL, NULL, NULL, '2019-12-03 07:28:02', 'Keluar', '2019-12-03 07:28:10'),
(30, 'dsadsadsa', 'asdas@gmaiul', 0, 'dsadsa', 'dsasadsa', NULL, NULL, '2019-12-03 07:29:55', 'Keluar', '2019-12-03 07:40:03'),
(31, 'fdsfds', 'fsdfds@gmail', 0, 'asdasdsa', 'dsadsa', NULL, NULL, '2019-12-05 05:35:24', 'Keluar', '2019-12-05 05:35:37'),
(32, 'raga', 'raga@gmail', 0, 'eareaw', 'gagdsag', NULL, NULL, '2019-12-05 05:45:56', 'Keluar', '2019-12-05 05:48:18'),
(33, 'sajdhkuashda', 'sakdhaua@gaklsjd', 45612, 'edqwdaqd', 'hahahaha', NULL, NULL, '2019-12-05 06:33:52', 'Keluar', '2019-12-05 06:34:23'),
(34, 'dfgdgsddasd', 'dasd@dskjadha', 465516541, 'ashdahsdiauhsdhbada', 'dlkasdhaiusdhas', NULL, NULL, '2019-12-05 06:35:06', 'Keluar', '2019-12-05 06:35:14'),
(35, 'gaga', 'fdsafds@gmail.com', 0, 'dsadsa', 'dsadsa', NULL, NULL, '2019-12-05 08:15:17', 'Keluar', '2019-12-05 08:15:52'),
(36, 'bfdbfd', 'bfdbd@gmail', 0, 'dasdsa', 'dasdsad', NULL, NULL, '2019-12-05 08:16:30', 'Keluar', '2019-12-05 08:22:00'),
(37, 'dfgdgsd', 'hpcsttn@gmail.com', 0, 'fsdfsd', 'fsdfds', NULL, NULL, '2019-12-05 08:23:39', 'Keluar', '2019-12-05 08:29:23'),
(38, 'Raga', 'raga@gdssa', 0, 'fsdfasd', 'fadfadsf', NULL, NULL, '2019-12-06 07:34:36', 'Keluar', '2019-12-06 07:36:58'),
(39, 'gajulan', 'dsada@gmail', 0, 'dsad', 'sdadsa', NULL, NULL, '2019-12-06 07:42:28', 'Keluar', '2019-12-06 08:04:26'),
(40, 'raga', 'raga@ga', 0, 'gag', 'gagag', NULL, NULL, '2019-12-17 05:18:43', 'Keluar', '2019-12-17 05:18:48'),
(41, 'raga', 'raga@ga', 0, 'gag', 'gagag', NULL, NULL, '2019-12-17 05:28:34', 'Keluar', '2019-12-17 05:28:43'),
(42, 'fsfsd', 'fdsfsd@fds', 0, 'fdsfds', 'fdsfds', NULL, NULL, '2019-12-17 05:29:03', 'Keluar', '2019-12-17 05:29:47'),
(43, 'raga', 'raga@gag', 0, 'dsadsa', 'dsadsadsa', NULL, NULL, '2019-12-17 08:35:44', 'Keluar', '2019-12-17 08:35:48'),
(44, 'raga', 'ragaf@mail', 0, 'fsdfsd', 'fdsfds', NULL, NULL, '2019-12-17 13:58:52', 'Keluar', '2019-12-17 13:58:59'),
(45, 'raga', 'raga@asfdsa', 21321, 'aerwarwa', 'geaga', NULL, NULL, '2019-12-31 07:08:48', 'Keluar', '2019-12-31 07:08:59');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `statusoperasi`
--
ALTER TABLE `statusoperasi`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpegawai`
--
ALTER TABLE `tblpegawai`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblvisitor`
--
ALTER TABLE `tblvisitor`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
