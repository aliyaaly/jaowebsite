-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2024 at 10:05 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `employId` int(11) DEFAULT NULL,
  `companyId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `description` longtext,
  `status` enum('accept','denide','proceed','cancel') NOT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `isDelete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `employId`, `companyId`, `userId`, `title`, `description`, `status`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`, `isDelete`) VALUES
(8, 27, 9, 11, 'ສົນໃຈສະໝັກຕຳແໜ່ງ IT support', NULL, 'accept', 11, 10, '2024-05-14 17:16:57', '2024-05-14 17:33:57', 0),
(9, 32, 10, 13, 'ສົນໃຈສະໝັກຕຳແໜ່ງ ແມ່ບ້ານ', NULL, 'accept', 13, 12, '2024-05-14 18:43:12', '2024-05-14 18:46:16', 0),
(10, 32, 10, 7, 'testApply', NULL, 'proceed', 7, 7, '2024-05-16 16:20:36', '2024-05-16 16:20:36', 0),
(11, 25, 9, 7, 'd', NULL, 'accept', 7, 10, '2024-05-16 16:28:39', '2024-05-16 16:47:10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `apply_attachment`
--

CREATE TABLE `apply_attachment` (
  `id` int(11) NOT NULL,
  `applyId` int(11) DEFAULT NULL,
  `companyId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `file` varchar(200) NOT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `isDelete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apply_attachment`
--

INSERT INTO `apply_attachment` (`id`, `applyId`, `companyId`, `userId`, `file`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`, `isDelete`) VALUES
(4, 8, 9, 11, '2024051410165711.png', 11, 11, '2024-05-14 17:16:57', '2024-05-14 17:16:57', 0),
(5, 9, 10, 13, '2024051411431213.pdf', 13, 13, '2024-05-14 18:43:12', '2024-05-14 18:43:12', 0),
(6, 10, 10, 7, '202405160920367.png', 7, 7, '2024-05-16 16:20:36', '2024-05-16 16:20:36', 0),
(7, 11, 9, 7, '202405160928397.jpg', 7, 7, '2024-05-16 16:28:39', '2024-05-16 16:28:39', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `website` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `isDelete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `userId`, `name`, `logo`, `phone`, `mail`, `address`, `website`, `description`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`, `isDelete`) VALUES
(1, 2, 'Lao World Public Company', 'logo.jpg', '02055667788', 'mail.com', 'aa', 'www.google.com', 'sdsdad', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(5, 3, 'test', '202404110759461.png', '02056588965', 'littavanhphanalasy@gmail.com', 'Address', 'www.test.co.th', 'tesdes', 1, 1, '2024-04-11 14:59:46', '2024-04-11 14:59:46', 0),
(6, 4, 'ICT Solution', '202404220711481.png', '02055443322', 'icts@gmail.com', 'Tanmixay, Xaythany, Vientiane', 'www.ictsolution.co.la', 'ICT Solution is one of the largest wholly owned Lao companies. The Company employs over 100 supportive personnel at its headquarters and over 2,500 employees and sub-contractors throughout sites in Lao PDR', 1, 1, '2024-04-22 14:11:48', '2024-04-22 14:11:48', 0),
(8, 6, 'qq', '202404220723271.jpeg', '33', 'qq', 'qq', 'qq', 'qqqqqqqqq', 1, 1, '2024-04-22 14:23:27', '2024-04-22 14:23:27', 0),
(9, 10, 'KB KOLAO LEASING', '202405070921242.jpeg', '020 54754265', 'kbkolao.recruitment@gmail.com ', 'Kolao 02 (Alounmai Building), 7th floor, 23 Singha Road, Nongbone Village, Saysettha District, Vient', 'https://www.kbkolaoleasing.com', 'KB KOLAO Leasing Co., Ltd. Is a joint venture between KB Capital, KB Kookmin Card and KOLAO Group of Lao PDR.', 2, 2, '2024-05-07 16:21:24', '2024-05-07 16:21:24', 0),
(10, 12, 'LaoSoft', '202405141132231.png', '02022334455', 'laosoft@gmail.com', 'aaaa', 'www.test.co.th', 'des', 1, 1, '2024-05-14 18:32:23', '2024-05-14 18:32:23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employ`
--

CREATE TABLE `employ` (
  `id` int(11) NOT NULL,
  `companyId` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `languageId` int(11) NOT NULL,
  `experienceId` int(11) NOT NULL,
  `salaryId` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` enum('open','close') NOT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `isDelete` tinyint(1) NOT NULL DEFAULT '0',
  `strDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `timeId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employ`
--

INSERT INTO `employ` (`id`, `companyId`, `name`, `languageId`, `experienceId`, `salaryId`, `description`, `address`, `status`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`, `isDelete`, `strDate`, `endDate`, `timeId`) VALUES
(24, 9, 'Application Developer', 3, 2, 2, ' ', 'Kolao 02 (Alounmai Building), 7th floor, 23 Singha Road, Nongbone Village, Saysettha District, Vient', 'open', 10, 1, '2024-05-14 15:52:46', '2024-05-14 16:05:56', 0, '2024-05-01', '2024-05-31', 1),
(25, 9, 'Graphic Design', 3, 1, 1, ' ', 'Kolao 02 (Alounmai Building), 7th floor, 23 Singha Road, Nongbone Village, Saysettha District, Vient', 'open', 10, 1, '2024-05-14 15:53:13', '2024-05-14 16:05:58', 0, '2024-05-01', '2024-05-31', 1),
(26, 9, 'Accountant', 2, 1, 1, ' ', 'Kolao 02 (Alounmai Building), 7th floor, 23 Singha Road, Nongbone Village, Saysettha District, Vient', 'open', 10, 1, '2024-05-14 15:53:46', '2024-05-14 16:06:00', 0, '2024-05-01', '2024-05-30', 1),
(27, 9, 'IT Support', 1, 2, 1, ' ', 'Kolao 02 (Alounmai Building), 7th floor, 23 Singha Road, Nongbone Village, Saysettha District, Vient', 'open', 10, 1, '2024-05-14 16:01:08', '2024-05-14 16:06:08', 0, '2024-05-01', '2024-05-31', 1),
(28, 6, 'Finance', 1, 1, 1, ' ', 'Tanmixay, Xaythany, Vientiane', 'open', 4, 1, '2024-05-14 16:02:16', '2024-05-14 16:06:02', 0, '2024-05-01', '2024-05-26', 1),
(29, 6, 'Backend Developer', 3, 2, 2, '', 'Tanmixay, Xaythany, Vientiane', 'open', 4, 1, '2024-05-14 16:03:07', '2024-05-14 16:06:04', 0, '2024-04-04', '2024-05-31', 1),
(30, 1, 'Front-End Developer', 3, 2, 2, '', 'Vientiane', 'open', 2, 1, '2024-05-14 16:05:33', '2024-05-14 16:06:06', 0, '2024-05-14', '2024-05-31', 1),
(31, 1, 'ປະຊາສຳພັນ', 1, 1, 1, ' ', 'Vientiane', 'open', 2, 1, '2024-05-14 16:11:02', '2024-05-14 16:11:26', 0, '2024-05-01', '2024-05-31', 1),
(32, 10, 'ແມ່ບ້ານ', 1, 1, 1, ' ', 'aaaa', 'open', 12, 1, '2024-05-14 18:36:08', '2024-05-16 16:52:30', 0, '2024-05-01', '2024-05-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employ_image`
--

CREATE TABLE `employ_image` (
  `id` int(11) NOT NULL,
  `employId` int(11) DEFAULT NULL,
  `companyId` int(11) DEFAULT NULL,
  `image` varchar(200) NOT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `isDelete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employ_image`
--

INSERT INTO `employ_image` (`id`, `employId`, `companyId`, `image`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`, `isDelete`) VALUES
(26, 24, 9, '20240514085246110.jpg', 10, 10, '2024-05-14 15:52:46', '2024-05-14 15:52:46', 0),
(27, 25, 9, '20240514085314110.jpg', 10, 10, '2024-05-14 15:53:14', '2024-05-14 15:53:14', 0),
(28, 26, 9, '20240514085346110.jpg', 10, 10, '2024-05-14 15:53:46', '2024-05-14 15:53:46', 0),
(29, 27, 9, '20240514090108110.jpg', 10, 10, '2024-05-14 16:01:08', '2024-05-14 16:01:08', 0),
(30, 28, 6, '2024051409021614.jpg', 4, 4, '2024-05-14 16:02:16', '2024-05-14 16:02:16', 0),
(31, 29, 6, '2024051409030714.jpg', 4, 4, '2024-05-14 16:03:07', '2024-05-14 16:03:07', 0),
(32, 29, 6, '2024051409030724.jpg', 4, 4, '2024-05-14 16:03:07', '2024-05-14 16:03:07', 0),
(33, 29, 6, '2024051409030734.jpg', 4, 4, '2024-05-14 16:03:07', '2024-05-14 16:03:07', 0),
(34, 30, 1, '2024051409053312.jpg', 2, 2, '2024-05-14 16:05:33', '2024-05-14 16:05:33', 0),
(35, 31, 1, '2024051409110212.jpg', 2, 2, '2024-05-14 16:11:02', '2024-05-14 16:11:02', 0),
(36, 32, 10, '20240514113608112.jpeg', 12, 12, '2024-05-14 18:36:08', '2024-05-14 18:36:08', 0),
(37, 32, 10, '20240514113608212.jpg', 12, 12, '2024-05-14 18:36:08', '2024-05-14 18:36:08', 0),
(38, 32, 10, '20240514113608312.jpg', 12, 12, '2024-05-14 18:36:08', '2024-05-14 18:36:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employ_job`
--

CREATE TABLE `employ_job` (
  `id` int(11) NOT NULL,
  `employId` int(11) DEFAULT NULL,
  `companyId` int(11) DEFAULT NULL,
  `jobId` int(11) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `isDelete` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employ_job`
--

INSERT INTO `employ_job` (`id`, `employId`, `companyId`, `jobId`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`, `isDelete`) VALUES
(26, 24, 9, 1, 10, 10, '2024-05-14 15:52:46', '2024-05-14 15:52:46', 0),
(27, 24, 9, 2, 10, 10, '2024-05-14 15:52:46', '2024-05-14 15:52:46', 0),
(28, 25, 9, 1, 10, 10, '2024-05-14 15:53:13', '2024-05-14 15:53:13', 0),
(29, 26, 9, 4, 10, 10, '2024-05-14 15:53:46', '2024-05-14 15:53:46', 0),
(30, 26, 9, 5, 10, 10, '2024-05-14 15:53:46', '2024-05-14 15:53:46', 0),
(31, 27, 9, 1, 10, 10, '2024-05-14 16:01:08', '2024-05-14 16:01:08', 0),
(32, 28, 6, 4, 4, 4, '2024-05-14 16:02:16', '2024-05-14 16:02:16', 0),
(33, 28, 6, 5, 4, 4, '2024-05-14 16:02:16', '2024-05-14 16:02:16', 0),
(34, 29, 6, 1, 4, 4, '2024-05-14 16:03:07', '2024-05-14 16:03:07', 0),
(35, 29, 6, 2, 4, 4, '2024-05-14 16:03:07', '2024-05-14 16:03:07', 0),
(36, 30, 1, 1, 2, 2, '2024-05-14 16:05:33', '2024-05-14 16:05:33', 0),
(37, 30, 1, 2, 2, 2, '2024-05-14 16:05:33', '2024-05-14 16:05:33', 0),
(38, 31, 1, 4, 2, 2, '2024-05-14 16:11:02', '2024-05-14 16:11:02', 0),
(39, 32, 10, 4, 12, 12, '2024-05-14 18:36:08', '2024-05-14 18:36:08', 0),
(40, 32, 10, 5, 12, 12, '2024-05-14 18:36:08', '2024-05-14 18:36:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `experience` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `experience`) VALUES
(1, '1-2 years'),
(2, '2-4 years');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `isDelete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `name`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`, `isDelete`) VALUES
(1, 'IT Support', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 'Software Engineer', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 'Devss', 1, 1, '2024-04-01 15:56:57', '2024-04-01 16:02:23', 1),
(4, 'Account', 1, 1, '2024-04-01 15:59:03', '2024-04-01 15:59:03', 0),
(5, 'Finance', 1, 1, '2024-04-01 15:59:03', '2024-04-01 15:59:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `language` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `language`) VALUES
(1, 'lao'),
(2, 'english'),
(3, 'lao-english');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `isDelete` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `name`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`, `isDelete`) VALUES
(1, 'feed.png', 'feed', 1, 1, NULL, NULL, 0),
(2, 'feed2.jpg', 'feed2', 1, 1, NULL, NULL, 0),
(3, 'feed3.png', 'feed3', 1, 1, NULL, NULL, 0),
(4, '202405160820041.jpeg', 'feed4', 1, 1, '2024-05-16 15:20:04', '2024-05-16 15:20:04', 0),
(5, '202405160820211.png', 'feed5', 1, 1, '2024-05-16 15:20:21', '2024-05-16 15:20:21', 0),
(6, '202405160820431.webp', 'feed7', 1, 1, '2024-05-16 15:20:43', '2024-05-16 15:21:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `salary` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `salary`) VALUES
(1, '100$-400$'),
(2, '400$-800$');

-- --------------------------------------------------------

--
-- Table structure for table `survey_answer`
--

CREATE TABLE `survey_answer` (
  `id` int(11) NOT NULL,
  `responeId` int(11) DEFAULT NULL,
  `questionId` int(11) DEFAULT NULL,
  `choiceId` int(11) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `isDelete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `survey_choice`
--

CREATE TABLE `survey_choice` (
  `id` int(11) NOT NULL,
  `questionId` int(11) DEFAULT NULL,
  `choiceText` text NOT NULL,
  `defaultChoice` tinyint(1) NOT NULL,
  `choiceOrder` int(11) NOT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `isDelete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `survey_question`
--

CREATE TABLE `survey_question` (
  `id` int(11) NOT NULL,
  `questionText` varchar(200) NOT NULL,
  `questionOrder` int(11) NOT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `isDelete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `survey_respone`
--

CREATE TABLE `survey_respone` (
  `id` int(11) NOT NULL,
  `gender` enum('female','male','none','') NOT NULL,
  `age` int(11) NOT NULL,
  `tribe` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `isDelete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `id` int(11) NOT NULL,
  `time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`id`, `time`) VALUES
(1, 'full-time'),
(2, 'part-time');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(18) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','employer','employee') NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `born` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `isDelete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `name`, `surname`, `born`, `address`, `phone`, `mail`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`, `isDelete`) VALUES
(1, 'admin', '1bc86768ce3160d4217320d7a38e6a80', 'admin', 'lit', 'dev', '1999-05-10', 'Vientiane', '02056588965', 'lit@gmail.com', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 'laoworld', '7094fe377b53204a8a35f64f92cb4287', 'employer', 'Lao World', 'Company', '2012-02-02', 'Vientiane', '02055667788', 'laoworldpubliccompany@laoworld.com', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 'test', 'a5c3415a6623b65119d8406bf6f86358', 'employer', 'test', '', '2023-06-08', 'Address', '02056588965', 'littavanhphanalasy@gmail.com', 1, 1, '2024-04-11 14:59:46', '2024-04-11 14:59:46', 0),
(4, 'ict', 'd557c32848e91f80225ea07fb9dc5a82', 'employer', 'ICT Solution', '', '2010-03-03', 'Tanmixay, Xaythany, Vientiane', '02055443322', 'icts@gmail.com', 1, 1, '2024-04-22 14:11:48', '2024-04-22 14:11:48', 0),
(6, 'qq', '0efac6446d6e90674d82f0e3e36a18bf', 'employer', 'qq', '', '2024-04-22', 'qq', '33', 'qq', 1, 1, '2024-04-22 14:23:27', '2024-04-22 14:23:27', 0),
(7, 'user', '29b16faf8432a886110961ac1565810d', 'employee', 'user', 'test', '2024-05-06', 'nrsportsradio,Thailand', '02055554444', 'littavanhphanalasy@gmail.com', 3, 3, '2024-05-06 15:33:17', '2024-05-06 15:33:17', 0),
(8, 'bill', 'b094943043fc416ba1917df9a4a36d32', 'employee', 'bill', 'hakai', '2024-05-02', 'nrsportsradio,Thailand', '02077889900', 'littavanhphanalasy@gmail.com', 3, 3, '2024-05-06 16:53:30', '2024-05-06 16:53:30', 0),
(9, 'dam', '81db93a7d4108858fb8b48e41a305953', 'employee', 'dam', 'pnls', '1999-05-10', 'dongdok,xaythany,vientiane', '2056588965', 'littavanhphanalasy@gmail.com', 3, 3, '2024-05-07 09:18:11', '2024-05-07 09:18:11', 0),
(10, 'kolao', '41c48a74f66b3cae5a886a2efaf633ab', 'employer', 'KB KOLAO LEASING', '', '2024-05-01', 'Kolao 02 (Alounmai Building), 7th floor, 23 Singha Road, Nongbone Village, Saysettha District, Vient', '020 54754265', 'kbkolao.recruitment@gmail.com ', 2, 2, '2024-05-07 16:21:24', '2024-05-07 16:21:24', 0),
(11, 'ouii', '2e324e4b69cb365d6d038e90ec638e36', 'employee', 'ouii', 'ouii', '2001-12-13', 'ban dongdok, xaythany, vientiane', '02056588965', 'ouii@gmail.com', 3, 3, '2024-05-07 21:34:33', '2024-05-07 21:34:33', 0),
(12, 'laosoft', '320d576cc0a8fabc29fa794d884ce5f6', 'employer', 'LaoSoft', '', '2019-02-14', 'aaaa', '02022334455', 'laosoft@gmail.com', 1, 1, '2024-05-14 18:32:23', '2024-05-14 18:32:23', 0),
(13, 'gino', 'fa1f659b7732ed1efc3ba0021112d27b', 'employee', 'gino', 'no', '2024-05-14', 'Address', '02055554444', 'icts@gmail.com', 3, 3, '2024-05-14 18:41:25', '2024-05-14 18:41:25', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_apply`
-- (See below for the actual view)
--
CREATE TABLE `v_apply` (
`id` int(11)
,`employId` int(11)
,`companyId` int(11)
,`userId` int(11)
,`title` varchar(100)
,`description` longtext
,`status` enum('accept','denide','proceed','cancel')
,`createdBy` int(11)
,`updatedBy` int(11)
,`createdAt` datetime
,`updatedAt` datetime
,`isDelete` tinyint(1)
,`file` varchar(200)
,`employerName` varchar(100)
,`companyName` varchar(100)
,`logo` varchar(200)
,`firstName` varchar(100)
,`lastName` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_employ`
-- (See below for the actual view)
--
CREATE TABLE `v_employ` (
`id` int(11)
,`companyId` int(11)
,`companyName` varchar(100)
,`companyLogo` varchar(200)
,`name` varchar(100)
,`language` varchar(100)
,`experience` varchar(100)
,`salary` varchar(100)
,`description` longtext
,`address` varchar(255)
,`status` enum('open','close')
,`createdBy` int(11)
,`updatedBy` int(11)
,`createdAt` datetime
,`updatedAt` datetime
,`isDelete` tinyint(1)
,`strDate` date
,`endDate` date
,`image` varchar(200)
,`jobId` int(11)
,`jobName` varchar(100)
,`time` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `v_apply`
--
DROP TABLE IF EXISTS `v_apply`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_apply`  AS  select `a`.`id` AS `id`,`a`.`employId` AS `employId`,`a`.`companyId` AS `companyId`,`a`.`userId` AS `userId`,`a`.`title` AS `title`,`a`.`description` AS `description`,`a`.`status` AS `status`,`a`.`createdBy` AS `createdBy`,`a`.`updatedBy` AS `updatedBy`,`a`.`createdAt` AS `createdAt`,`a`.`updatedAt` AS `updatedAt`,`a`.`isDelete` AS `isDelete`,`b`.`file` AS `file`,`c`.`name` AS `employerName`,`d`.`name` AS `companyName`,`d`.`logo` AS `logo`,`e`.`name` AS `firstName`,`e`.`surname` AS `lastName` from ((((`apply` `a` join `apply_attachment` `b` on((`a`.`id` = `b`.`applyId`))) join `employ` `c` on((`a`.`employId` = `c`.`id`))) join `company` `d` on((`a`.`companyId` = `d`.`id`))) join `user` `e` on((`a`.`userId` = `e`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_employ`
--
DROP TABLE IF EXISTS `v_employ`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_employ`  AS  select `a`.`id` AS `id`,`a`.`companyId` AS `companyId`,`d`.`name` AS `companyName`,`d`.`logo` AS `companyLogo`,`a`.`name` AS `name`,`h`.`language` AS `language`,`g`.`experience` AS `experience`,`f`.`salary` AS `salary`,`a`.`description` AS `description`,`a`.`address` AS `address`,`a`.`status` AS `status`,`a`.`createdBy` AS `createdBy`,`a`.`updatedBy` AS `updatedBy`,`a`.`createdAt` AS `createdAt`,`a`.`updatedAt` AS `updatedAt`,`a`.`isDelete` AS `isDelete`,`a`.`strDate` AS `strDate`,`a`.`endDate` AS `endDate`,`b`.`image` AS `image`,`c`.`jobId` AS `jobId`,`e`.`name` AS `jobName`,`i`.`time` AS `time` from ((((((((`employ` `a` join `employ_image` `b` on((`a`.`id` = `b`.`employId`))) join `employ_job` `c` on((`a`.`id` = `c`.`employId`))) join `company` `d` on((`a`.`companyId` = `d`.`id`))) join `job` `e` on((`c`.`jobId` = `e`.`id`))) join `salary` `f` on((`a`.`salaryId` = `f`.`id`))) join `experience` `g` on((`a`.`experienceId` = `g`.`id`))) join `language` `h` on((`a`.`languageId` = `h`.`id`))) join `time` `i` on((`a`.`timeId` = `i`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apply_FK_1` (`employId`),
  ADD KEY `apply_FK_2` (`companyId`),
  ADD KEY `apply_FK_3` (`userId`);

--
-- Indexes for table `apply_attachment`
--
ALTER TABLE `apply_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applyId` (`applyId`),
  ADD KEY `companyId` (`companyId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `employ`
--
ALTER TABLE `employ`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companyId` (`companyId`);

--
-- Indexes for table `employ_image`
--
ALTER TABLE `employ_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employId` (`employId`),
  ADD KEY `companyId` (`companyId`);

--
-- Indexes for table `employ_job`
--
ALTER TABLE `employ_job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employ_job_FK_1` (`employId`),
  ADD KEY `employ_job_FK_2` (`companyId`),
  ADD KEY `employ_job_FK_3` (`jobId`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_answer`
--
ALTER TABLE `survey_answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `responeId` (`responeId`),
  ADD KEY `choiceId` (`choiceId`),
  ADD KEY `res_questionId` (`questionId`);

--
-- Indexes for table `survey_choice`
--
ALTER TABLE `survey_choice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questionId` (`questionId`);

--
-- Indexes for table `survey_question`
--
ALTER TABLE `survey_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_respone`
--
ALTER TABLE `survey_respone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `apply_attachment`
--
ALTER TABLE `apply_attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `employ`
--
ALTER TABLE `employ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `employ_image`
--
ALTER TABLE `employ_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `employ_job`
--
ALTER TABLE `employ_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `survey_answer`
--
ALTER TABLE `survey_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `survey_choice`
--
ALTER TABLE `survey_choice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `survey_question`
--
ALTER TABLE `survey_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `survey_respone`
--
ALTER TABLE `survey_respone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `apply`
--
ALTER TABLE `apply`
  ADD CONSTRAINT `apply_FK_1` FOREIGN KEY (`employId`) REFERENCES `employ` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `apply_FK_2` FOREIGN KEY (`companyId`) REFERENCES `company` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `apply_FK_3` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `apply_attachment`
--
ALTER TABLE `apply_attachment`
  ADD CONSTRAINT `apply_attachment_FK_1` FOREIGN KEY (`applyId`) REFERENCES `apply` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `apply_attachment_FK_2` FOREIGN KEY (`companyId`) REFERENCES `company` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `apply_attachment_FK_3` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_FK_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `employ`
--
ALTER TABLE `employ`
  ADD CONSTRAINT `employ_FK_1` FOREIGN KEY (`companyId`) REFERENCES `company` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `employ_image`
--
ALTER TABLE `employ_image`
  ADD CONSTRAINT `employ_image_FK_1` FOREIGN KEY (`companyId`) REFERENCES `company` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `employ_image_FK_2` FOREIGN KEY (`employId`) REFERENCES `employ` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `employ_job`
--
ALTER TABLE `employ_job`
  ADD CONSTRAINT `employ_job_FK_1` FOREIGN KEY (`employId`) REFERENCES `employ` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `employ_job_FK_2` FOREIGN KEY (`companyId`) REFERENCES `company` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `employ_job_FK_3` FOREIGN KEY (`jobId`) REFERENCES `job` (`id`);

--
-- Constraints for table `survey_answer`
--
ALTER TABLE `survey_answer`
  ADD CONSTRAINT `choiceId` FOREIGN KEY (`choiceId`) REFERENCES `survey_choice` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `res_questionId` FOREIGN KEY (`questionId`) REFERENCES `survey_question` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `responeId` FOREIGN KEY (`responeId`) REFERENCES `survey_respone` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `survey_choice`
--
ALTER TABLE `survey_choice`
  ADD CONSTRAINT `questionId` FOREIGN KEY (`questionId`) REFERENCES `survey_question` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
