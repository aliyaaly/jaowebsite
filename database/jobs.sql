-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2024 at 05:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
  `description` longtext DEFAULT NULL,
  `status` enum('accept','denide','proceed','cancel') NOT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `isDelete` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `employId`, `companyId`, `userId`, `title`, `description`, `status`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`, `isDelete`) VALUES
(8, 27, 9, 11, 'ສົນໃຈສະໝັກຕຳແໜ່ງ IT support', NULL, 'accept', 11, 10, '2024-05-14 17:16:57', '2024-05-14 17:33:57', 0),
(9, 32, 10, 13, 'ສົນໃຈສະໝັກຕຳແໜ່ງ ', NULL, 'accept', 13, 12, '2024-05-14 18:43:12', '2024-05-14 18:46:16', 0),
(10, 32, 10, 7, 'testApply', NULL, 'proceed', 7, 7, '2024-05-16 16:20:36', '2024-05-16 16:20:36', 0),
(11, 25, 9, 7, 'd', NULL, 'accept', 7, 10, '2024-05-16 16:28:39', '2024-05-16 16:47:10', 0),
(12, 29, 6, 19, 'ສົນໃຈສະໝັກຕຳແໜ່ງນີ້', NULL, 'cancel', 19, 19, '2024-07-10 15:06:31', '2024-07-30 20:27:55', 0),
(13, 29, 6, 19, 'ສົນໃຈສະໝັກຕຳແໜ່ງນີ້', NULL, 'cancel', 19, 19, '2024-07-21 16:22:54', '2024-07-21 17:00:57', 0),
(14, 34, 6, 19, 'ສົນໃຈສະໝັກຕຳແໜ່ງນີ້', NULL, 'accept', 19, 4, '2024-07-21 17:01:31', '2024-07-21 17:02:59', 0),
(15, 28, 6, 20, 'ສົນໃຈສະໝັກຕຳແໜ່ງນີ້', NULL, 'accept', 20, 4, '2024-07-21 17:03:38', '2024-07-21 20:16:14', 0),
(16, 34, 6, 20, 'ສົນໃຈສະໝັກຕຳແໜ່ງນີ້', NULL, 'proceed', 20, 20, '2024-07-21 17:04:59', '2024-07-21 17:04:59', 0),
(17, 34, 6, 21, 'ສົນໃຈສະໝັກຕຳແໜ່ງນີ້', NULL, 'denide', 21, 4, '2024-07-21 17:06:29', '2024-07-21 17:07:27', 0),
(18, 28, 6, 22, 'ສົນໃຈສະໝັກຕຳແໜ່ງນີ້', NULL, 'proceed', 22, 22, '2024-07-21 17:12:06', '2024-07-21 17:12:06', 0),
(19, 40, 13, 16, 'ສົນໃຈສະໝັກຕຳແໜ່ງນີ້', NULL, 'proceed', 16, 16, '2024-07-30 20:04:25', '2024-07-30 20:04:25', 0),
(20, 41, 16, 24, 'ສົນໃຈສະໝັກຕຳແໜ່ງນີ້', NULL, 'accept', 24, 23, '2024-07-31 14:31:29', '2024-07-31 14:32:35', 0);

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
  `isDelete` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apply_attachment`
--

INSERT INTO `apply_attachment` (`id`, `applyId`, `companyId`, `userId`, `file`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`, `isDelete`) VALUES
(4, 8, 9, 11, '2024051410165711.png', 11, 11, '2024-05-14 17:16:57', '2024-05-14 17:16:57', 0),
(5, 9, 10, 13, '202405160920367.png', 13, 13, '2024-05-14 18:43:12', '2024-05-14 18:43:12', 0),
(6, 10, 10, 7, '202405160920367.png', 7, 7, '2024-05-16 16:20:36', '2024-05-16 16:20:36', 0),
(7, 11, 9, 7, '202405160928397.jpg', 7, 7, '2024-05-16 16:28:39', '2024-05-16 16:28:39', 0),
(8, 12, 6, 19, '2024071010063119.pdf', 19, 19, '2024-07-10 15:06:31', '2024-07-10 15:06:31', 0),
(9, 13, 6, 19, '2024072111225419.pdf', 19, 19, '2024-07-21 16:22:54', '2024-07-21 16:22:54', 0),
(10, 14, 6, 19, '2024072112013119.pdf', 19, 19, '2024-07-21 17:01:31', '2024-07-21 17:01:31', 0),
(11, 15, 6, 20, '2024072112033820.pdf', 20, 20, '2024-07-21 17:03:38', '2024-07-21 17:03:38', 0),
(12, 16, 6, 20, '2024072112045920.pdf', 20, 20, '2024-07-21 17:04:59', '2024-07-21 17:04:59', 0),
(13, 17, 6, 21, '2024072112062921.pdf', 21, 21, '2024-07-21 17:06:29', '2024-07-21 17:06:29', 0),
(14, 18, 6, 22, '2024072112120622.pdf', 22, 22, '2024-07-21 17:12:06', '2024-07-21 17:12:06', 0),
(15, 19, 13, 16, '2024073015042516.pdf', 16, 16, '2024-07-30 20:04:25', '2024-07-30 20:04:25', 0),
(16, 20, 16, 24, '2024073109312924.pdf', 24, 24, '2024-07-31 14:31:29', '2024-07-31 14:31:29', 0);

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
  `isDelete` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `userId`, `name`, `logo`, `phone`, `mail`, `address`, `website`, `description`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`, `isDelete`) VALUES
(1, 2, 'aa', '', '02055667788', 'mail.com', 'aa', 'www.google.com', 'sdsdad', 1, 1, '0000-00-00 00:00:00', '2024-07-10 14:32:30', 1),
(5, 3, 'testtt', '', '0205658896566', 'aa@gmail.com', 'Addresstt', 'www.test.co.thtt', 's', 1, 1, '2024-04-11 14:59:46', '2024-07-10 14:32:43', 1),
(6, 4, 'ICT Solution', '202404220711481.png', '02055443322', 'icts@gmail.com', 'Tanmixay, Xaythany, Vientiane', 'www.ictsolution.co.la', 'ICT Solution is one of the largest wholly owned Lao companies. The Company employs over 100 supportive personnel at its headquarters and over 2,500 employees and sub-contractors throughout sites in Lao PDR', 1, 1, '2024-04-22 14:11:48', '2024-04-22 14:11:48', 0),
(8, 6, 'qq', '202404220723271.jpeg', '33', 'qq', 'qq', 'qq', 'qqqqqqqqq', 1, 1, '2024-04-22 14:23:27', '2024-07-10 14:31:34', 1),
(9, 10, 'KB KOLAO LEASING', '202405070921242.jpeg', '020 54754265', 'kbkolao.recruitment@gmail.com ', 'Kolao 02 (Alounmai Building), 7th floor, 23 Singha Road, Nongbone Village, Saysettha District, Vient', 'https://www.kbkolaoleasing.com', 'KB KOLAO Leasing Co., Ltd. Is a joint venture between KB Capital, KB Kookmin Card and KOLAO Group of Lao PDR.', 2, 1, '2024-05-07 16:21:24', '2024-07-10 14:32:55', 1),
(10, 12, 'LaoSoft', '202405141132231.png', '02022334455', 'laosoft@gmail.com', 'aaaa', 'www.test.co.th', 'des', 1, 1, '2024-05-14 18:32:23', '2024-07-10 14:33:04', 1),
(11, 14, 'TPLUS Digital Sole Co., Ltd', '202407100939081.jpeg', '2077777777', 'tplus@gmail.com', 'Tplus Tower, Saylom Road, Saylom Village, Chanthabouly District, Vientiane Capital', 'https://tplus.la/', 'TPLUS Digital Sole Co, Ltd formerly known as VimpelcomLao Co, Ltd. officially on July, 13, 2019 announced as TPLUS Digital Co, Ltd is one of the world’s largest integrated telecommunications services operators providing voice and data services through a range of traditional and broadband mobile and fixed technologies and TPLUS Digital Co, Ltd 100 % is owned by the Telecommunication Public Company\r\n\r\nTPLUS has been developed and remains an important part of VimpelCom’s board Management expansion strategy or a leading international provider of telecommunications completed its acquisition of Millicom Laos Co., Ltd (CELLULAR S.A) at Sweden and The Company started as a contract with the Government of Lao PDR on August 9, 1999. In period of 2002, the company was named Millicom Laos Co., Ltd. We have created a fundamentally constructed base to prepare the capital of financial, which has the integrity of which is to be provided for the purpose of privatization, Equipment for networking, including business plans related to trade and marketing meanwhile, there is a survey of social needs in the Laos PDR about the value of using the phone with the system GSM 900-1.800 MHZ.', 1, 1, '2024-07-10 14:39:08', '2024-07-10 14:39:08', 0),
(12, 15, 'Delivery Hero (Lao) Sole Co., Ltd. (foodpanda Laos)', '202407100942371.jpeg', '2099009988', 'foodpanda@gmail.com', 'Sidamduan, Chanthabouly District, Vientiane Capital', 'https://www.foodpanda.la/', 'foodpanda is a subsidiary of Delivery Hero, which is the world\'s #1 online food and grocery ordering platform (website and mobile app), where hungry customers can order food and grocery for home delivery from their favorite restaurants/shops, based on their location. Currently we are operating in 13 countries and territories across Asia and Europe.\r\nWe are currently the leading, on-demand food delivery company in Laos, bringing thousands of your best loved restaurants/shops online into your home or office - fast! We’re all about bringing on the smartest folks as we continue to grow with an “all hands on deck” environment and hire those who can thrive in a startup and rapid-growing culture.', 1, 1, '2024-07-10 14:42:37', '2024-07-10 14:42:37', 0),
(13, 16, 'TOYOTA LAOS CO., LTD.', '202407100945331.jpeg', '2055009988', 'toyota@gmail.com', '9th floor, Royal Square Office Building, No 20 Samsenthai Road Noong Duong Nua Village, Sikhottabong', 'https://toyota.com.la/', 'Toyota Laos Co., Ltd. is the exclusive distributor for all Toyota vehicles, genuine parts, and services in Laos. We work closely with our official dealers to satisfy the needs our customers and the community. Vision: To be the most admired and respected company in Laos. Mission: Toyota Laos strives to create high-quality mobility solutions and enrich the lives of the people in Laos. Through our commitment to ‘Quality’, ‘Safety’, ‘Customer Satisfaction’, and ‘Respect for the Environment and Community’, we aim to exceed expectations, make our customers smile, and be the most beloved company in Laos. Core values: 1. Integrity: Always be faithful to your duties, thereby contributing to the company and the overall good. 2. Continuous Improvement (Kaizen): Always be studious and creative, striving to stay ahead of the times. 3. Practicality: Always be practical and avoid frivolousness. 4. Teamwork: Always strive to build a warm, friendly, and home-like atmosphere at work. 5. Respectfulness: Always have respect for spiritual matters, and remember to be grateful.', 1, 1, '2024-07-10 14:45:33', '2024-07-10 14:45:33', 0),
(14, 17, 'AI KEN PHARMA ( Laos ) Company Limited', '202407100949511.jpeg', '2055667788', 'aiken@gmail.com', 'Kamphengmeuang Road Phonthan Village, Xaysettha District, Vientiane Capital', 'https://www.aikenpharma.com', 'Ai Ken Pharma is a first and only Japanese & Lao Pharmaceutical Company in Laos.  \r\nWe import medicine and medical device from International Companies and distribute to \r\nHospital, Pharmacies and Clinics.', 1, 1, '2024-07-10 14:49:51', '2024-07-10 14:49:51', 0),
(15, 18, 'Funderland Group', '202407100956181.jpeg', '20551122333', 'funderland@gmail.com', 'Phonxay Village , Xaysettha District, Vientiane Capital', 'https://funderlandgroup.com', 'ຟັນເດີແລນເປັນສວນສະໜຸກເພື່ອເດັກນ້ອຍແລະທຸກໆຄອບຄົວເປັນສ່ວນໜື່ງໃນການພັດທະນາເດັກນ້ອຍໃຫ້ເຕີບໃຫຍ່, ແຂງແຮງ, ສ້າງສັນ ແລະ ມີຄວາມສຸກ', 1, 1, '2024-07-10 14:56:18', '2024-07-10 14:56:18', 0),
(16, 23, 'RMA', '202407310926411.jpeg', '2099009988', 'rma@gmail.com', 'Ban Beungkhayong Tay, Unit 18, P.O. Box 6030, Thadeua Road,Sisattanak District, Vientiane Capital, L', 'rmalaos@rmagroup.net', '\r\nRMA Group is the partner of choice for leading automotive, equipment, services and food brands and employs over 8,000 people with global reach in 14 countries.\r\n\r\nIn the late 1980s the company became a provider of goods for aid & development and commercial enterprises in the infrastructure, energy, and logistics sectors, supplying governments, NGOs and private contractors. It has partnered with leading automotive and equipment OEMs as well as fleet customers and has developed retail networks and manufacturing and distribution centers of excellence.', 1, 1, '2024-07-31 14:26:41', '2024-07-31 14:26:41', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employ`
--

CREATE TABLE `employ` (
  `id` int(11) NOT NULL,
  `companyId` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `jobPositionId` int(11) DEFAULT NULL,
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
  `isDelete` tinyint(1) NOT NULL DEFAULT 0,
  `strDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `timeId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employ`
--

INSERT INTO `employ` (`id`, `companyId`, `name`, `jobPositionId`, `languageId`, `experienceId`, `salaryId`, `description`, `address`, `status`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`, `isDelete`, `strDate`, `endDate`, `timeId`) VALUES
(24, 9, 'Application Developer', 1, 3, 2, 2, ' ', 'Kolao 02 (Alounmai Building), 7th floor, 23 Singha Road, Nongbone Village, Saysettha District, Vient', 'close', 10, 1, '2024-05-14 15:52:46', '2024-07-10 15:40:38', 0, '2024-05-01', '2024-09-30', 1),
(25, 9, 'Graphic Design', 12, 3, 1, 1, ' ', 'Kolao 02 (Alounmai Building), 7th floor, 23 Singha Road, Nongbone Village, Saysettha District, Vient', 'close', 10, 1, '2024-05-14 15:53:13', '2024-07-10 15:40:42', 0, '2024-05-01', '2024-09-30', 1),
(26, 9, 'Accountant', 4, 2, 1, 1, ' ', 'Kolao 02 (Alounmai Building), 7th floor, 23 Singha Road, Nongbone Village, Saysettha District, Vient', 'close', 10, 1, '2024-05-14 15:53:46', '2024-07-10 15:40:46', 0, '2024-05-01', '2024-09-30', 1),
(27, 9, 'IT Support', 5, 1, 2, 1, ' ', 'Kolao 02 (Alounmai Building), 7th floor, 23 Singha Road, Nongbone Village, Saysettha District, Vient', 'close', 10, 1, '2024-05-14 16:01:08', '2024-07-10 15:40:49', 0, '2024-05-01', '2024-09-30', 1),
(28, 6, 'Finance', 3, 1, 1, 1, ' ', 'Tanmixay, Xaythany, Vientiane', 'open', 4, 1, '2024-05-14 16:02:16', '2024-05-14 16:06:02', 0, '2024-05-01', '2024-09-30', 1),
(29, 6, 'Backend Developer', 2, 3, 2, 2, '', 'Tanmixay, Xaythany, Vientiane', 'open', 4, 1, '2024-05-14 16:03:07', '2024-05-14 16:06:04', 0, '2024-04-04', '2024-09-30', 1),
(30, 1, 'Front-End Developer', 1, 3, 2, 2, '', 'Vientiane', 'close', 2, 1, '2024-05-14 16:05:33', '2024-07-10 15:40:10', 0, '2024-05-14', '2024-09-30', 1),
(31, 1, 'ປະຊາສຳພັນ', 9, 1, 1, 1, ' ', 'Vientiane', 'close', 2, 1, '2024-05-14 16:11:02', '2024-07-10 15:40:16', 0, '2024-05-01', '2024-09-30', 1),
(32, 10, 'ແມ່ບ້ານ', 11, 1, 1, 1, ' ', 'aaaa', 'open', 12, 16, '2024-05-14 18:36:08', '2024-07-30 19:55:27', 0, '2024-05-01', '2024-08-26', 1),
(33, 10, '', 9, 3, 2, 2, 'test', 'aaaa', 'open', 12, 16, '2024-06-30 19:30:17', '2024-07-30 19:55:31', 0, '2024-06-30', '2024-10-12', 1),
(34, 6, '', 14, 3, 3, 1, 'Toyota Laos Co., Ltd. is the exclusive distributor for all Toyota vehicles, genuine parts, and services in Laos. We work closely with our official dealers to satisfy the needs our customers and the community. Vision: To be the most admired and respected company in Laos. Mission: Toyota Laos strives to create high-quality mobility solutions and enrich the lives of the people in Laos. Through our commitment to ‘Quality’, ‘Safety’, ‘Customer Satisfaction’, and ‘Respect for the Environment and Community’, we aim to exceed expectations, make our customers smile, and be the most beloved company in Laos. Core values: 1. Integrity: Always be faithful to your duties, thereby contributing to the company and the overall good. 2. Continuous Improvement (Kaizen): Always be studious and creative, striving to stay ahead of the times. 3. Practicality: Always be practical and avoid frivolousness. 4. Teamwork: Always strive to build a warm, friendly, and home-like atmosphere at work. 5. Respectfulness: Always have respect for spiritual matters, and remember to be grateful.', 'Tanmixay, Xaythany, Vientiane', 'close', 4, 1, '2024-07-10 15:34:55', '2024-07-10 15:41:03', 0, '2024-06-26', '2024-08-01', 1),
(35, 12, '', 16, 1, 3, 1, 'Do you love food and convenience put together? Then you will definitely love foodpanda!\r\n\r\n \r\n\r\nfoodpanda brings good food into the everyday, whether delivering on our signature pink bikes or serving insights into the newest food trends and showcasing local favorite restaurants. We operate in 12 countries in Asia including Laos. Through the energy of our riders and the teams in all of our office spaces, we connect lovers of food to our brilliant partner restaurants. We\'re changing the way food delivery is viewed and experienced worldwide.\r\n\r\n \r\n\r\nWe’re all about bringing on the smartest talents as we continue to grow with an “all hands-on deck” environment and hire those who can thrive in a fast-growing company.\r\n\r\n \r\n\r\nWe are looking for: Marketing (Campaign) Associate (Permanent Full-Time) to join our growing team in Vientiane Capital, Laos.\r\n\r\n \r\n\r\nResponsibilities:\r\n\r\nDevelop strategic communications planning for promotion and dissemination of corporate and consumer marketing content;\r\nDevelop promotions planning and communications content liaising with brand team and other departments/verticals;\r\nOwnership of respective verticals marketing campaigns and end-to-end responsibilities for the verticals growth\r\nCoordinate with Regional creative team to plan and develop content ideas, copy, visual creatives for all online marketing channels, example SEM, SEO, display advertising, mobile app and CRM;\r\nIntegration of content of all digital initiatives across all brand campaigns;\r\nDeploy digital marketing campaigns and own its implementation from ideation to execution;\r\nBe able to input creative product ideas and value-added services to cater for specific targeted customers;\r\nTo be involved within the company\'s overall Marketing & Communications department including managing crisis communications, internal and external communications;\r\nMonitor digital marketing campaigns across all digital networks;\r\nOther tasks assigned by the line manager.\r\n \r\n\r\nRequirements:\r\n\r\nIdeally 2 years’ working experience in marketing, especially in digital brand / marketing / campaign management, or creative agency;\r\nGood proficiency in written and spoken English and Lao languages;\r\nAdvanced knowledge of various online marketing channels;\r\nStay abreast of latest trends and technologies in digital marketing;\r\nInnovative and constantly thinks outside the box;\r\nOutstanding communication, interpersonal and presentation skills;\r\nAbility to manage deadlines, media, and internal stakeholders with ease;\r\nAbility to demonstrate a high level of drive and initiative to motivate the team to come up with ideas in creating campaigns;\r\nAbility to write detailed and effective creative briefs;\r\nGraphic design skill;\r\nYou are driven by ideas, motivated and share a strong commitment to contribute and perform within the team.\r\n \r\n\r\nWhat we offer:\r\n\r\nDynamic and challenging working environment with a steep learning curve.\r\nCulture that empowers you to take full ownership of your work and career.\r\nGreat working atmosphere with regular company and team events.\r\nOpportunity to be part of a happy, high functioning, vibrant and smart team committed to diversity and inclusion.\r\nCompetitive package, incentives, allowances, food perks, insurance, and more.\r\nCommitment to developing you personally and professionally.\r\n \r\n\r\nJob Application:\r\n\r\nWe are an equal opportunity & inclusive workplace, we encourage and welcome candidates from every different and diverse background to apply, if you think you are a qualified and potential candidate, please submit your application to together make a difference at foodpanda!\r\n\r\n \r\n\r\nCall / WhatsApp (020 99 272 993) for more details.', 'Sidamduan, Chanthabouly District, Vientiane Capital', 'close', 15, 1, '2024-07-10 15:52:34', '2024-07-18 15:05:13', 0, '2024-07-10', '2024-07-31', 1),
(36, 12, '', 17, 3, 3, 2, 'Do you love food and convenience put together? Then you will definitely love foodpanda!\r\n\r\n \r\n\r\nfoodpanda brings good food into the everyday, whether delivering on our signature pink bikes or serving insights into the newest food trends and showcasing local favorite restaurants. We operate in 12 countries in Asia including Laos. Through the energy of our riders and the teams in all of our office spaces, we connect lovers of food to our brilliant partner restaurants. We\'re changing the way food delivery is viewed and experienced worldwide.\r\n\r\n \r\n\r\nWe’re all about bringing on the smartest talents as we continue to grow with an “all hands-on deck” environment and hire those who can thrive in a fast-growing company.\r\n\r\n \r\n\r\nWe are looking for: Marketing (Campaign) Associate (Permanent Full-Time) to join our growing team in Vientiane Capital, Laos.\r\n\r\n \r\n\r\nResponsibilities:\r\n\r\nDevelop strategic communications planning for promotion and dissemination of corporate and consumer marketing content;\r\nDevelop promotions planning and communications content liaising with brand team and other departments/verticals;\r\nOwnership of respective verticals marketing campaigns and end-to-end responsibilities for the verticals growth\r\nCoordinate with Regional creative team to plan and develop content ideas, copy, visual creatives for all online marketing channels, example SEM, SEO, display advertising, mobile app and CRM;\r\nIntegration of content of all digital initiatives across all brand campaigns;\r\nDeploy digital marketing campaigns and own its implementation from ideation to execution;\r\nBe able to input creative product ideas and value-added services to cater for specific targeted customers;\r\nTo be involved within the company\'s overall Marketing & Communications department including managing crisis communications, internal and external communications;\r\nMonitor digital marketing campaigns across all digital networks;\r\nOther tasks assigned by the line manager.\r\n \r\n\r\nRequirements:\r\n\r\nIdeally 2 years’ working experience in marketing, especially in digital brand / marketing / campaign management, or creative agency;\r\nGood proficiency in written and spoken English and Lao languages;\r\nAdvanced knowledge of various online marketing channels;\r\nStay abreast of latest trends and technologies in digital marketing;\r\nInnovative and constantly thinks outside the box;\r\nOutstanding communication, interpersonal and presentation skills;\r\nAbility to manage deadlines, media, and internal stakeholders with ease;\r\nAbility to demonstrate a high level of drive and initiative to motivate the team to come up with ideas in creating campaigns;\r\nAbility to write detailed and effective creative briefs;\r\nGraphic design skill;\r\nYou are driven by ideas, motivated and share a strong commitment to contribute and perform within the team.\r\n \r\n\r\nWhat we offer:\r\n\r\nDynamic and challenging working environment with a steep learning curve.\r\nCulture that empowers you to take full ownership of your work and career.\r\nGreat working atmosphere with regular company and team events.\r\nOpportunity to be part of a happy, high functioning, vibrant and smart team committed to diversity and inclusion.\r\nCompetitive package, incentives, allowances, food perks, insurance, and more.\r\nCommitment to developing you personally and professionally.\r\n \r\n\r\nJob Application:\r\n\r\nWe are an equal opportunity & inclusive workplace, we encourage and welcome candidates from every different and diverse background to apply, if you think you are a qualified and potential candidate, please submit your application to together make a difference at foodpanda!\r\n\r\n \r\n\r\nClick Here to Apply or call / WhatsApp (020 99 272 993) for more details.', 'Sidamduan, Chanthabouly District, Vientiane Capital', 'close', 15, 15, '2024-07-10 15:58:11', '2024-07-10 15:58:59', 0, '2024-07-10', '2024-07-31', 1),
(37, 6, '', 11, 3, 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Tanmixay, Xaythany, Vientiane', 'close', 4, 16, '2024-07-21 18:44:10', '2024-07-30 19:56:02', 0, '2024-07-21', '2024-08-10', 1),
(38, 11, '', 17, 3, 1, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Tplus Tower, Saylom Road, Saylom Village, Chanthabouly District, Vientiane Capital', 'open', 14, 16, '2024-07-30 19:47:16', '2024-07-30 19:56:09', 0, '2024-07-30', '2024-08-16', 1),
(39, 11, '', 2, 1, 1, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Tplus Tower, Saylom Road, Saylom Village, Chanthabouly District, Vientiane Capital', 'open', 14, 16, '2024-07-30 19:49:31', '2024-07-30 19:56:16', 0, '2024-07-30', '2024-08-23', 1),
(40, 13, '', 18, 1, 1, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '9th floor, Royal Square Office Building, No 20 Samsenthai Road Noong Duong Nua Village, Sikhottabong', 'open', 16, 4, '2024-07-30 19:59:01', '2024-07-30 20:39:29', 0, '2024-07-30', '2024-08-23', 1),
(41, 16, '', 19, 3, 1, 2, '\r\nRMA Group is the partner of choice for leading automotive, equipment, services and food brands and employs over 8,000 people with global reach in 14 countries.\r\n\r\nIn the late 1980s the company became a provider of goods for aid & development and commercial enterprises in the infrastructure, energy, and logistics sectors, supplying governments, NGOs and private contractors. It has partnered with leading automotive and equipment OEMs as well as fleet customers and has developed retail networks and manufacturing and distribution centers of excellence.', 'Ban Beungkhayong Tay, Unit 18, P.O. Box 6030, Thadeua Road,Sisattanak District, Vientiane Capital, L', 'close', 23, 23, '2024-07-31 14:28:24', '2024-07-31 14:29:00', 0, '2024-07-31', '2024-08-10', 1);

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
  `isDelete` tinyint(1) NOT NULL DEFAULT 0
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
(38, 32, 10, '20240514113608312.jpg', 12, 12, '2024-05-14 18:36:08', '2024-05-14 18:36:08', 0),
(39, 33, 10, '20240630123017112.jpeg', 12, 12, '2024-06-30 19:30:17', '2024-06-30 19:30:17', 0),
(40, 33, 10, '20240630123017212.jpg', 12, 12, '2024-06-30 19:30:17', '2024-06-30 19:30:17', 0),
(41, 34, 6, '2024071010345514.jpeg', 4, 4, '2024-07-10 15:34:55', '2024-07-10 15:34:55', 0),
(42, 35, 12, '20240710105234115.jpeg', 15, 15, '2024-07-10 15:52:34', '2024-07-10 15:52:34', 0),
(43, 36, 12, '20240710105811115.jpeg', 15, 15, '2024-07-10 15:58:11', '2024-07-10 15:58:11', 0),
(44, 37, 6, '2024072113441114.pdf', 4, 4, '2024-07-21 18:44:11', '2024-07-21 18:44:11', 0),
(45, 38, 11, '20240730144716114.jpg', 14, 14, '2024-07-30 19:47:16', '2024-07-30 19:47:16', 0),
(46, 39, 11, '20240730144931114.jpg', 14, 14, '2024-07-30 19:49:31', '2024-07-30 19:49:31', 0),
(47, 40, 13, '20240730145901116.webp', 16, 16, '2024-07-30 19:59:01', '2024-07-30 19:59:01', 0),
(48, 41, 16, '20240731092824123.jpg', 23, 23, '2024-07-31 14:28:24', '2024-07-31 14:28:24', 0);

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
  `isDelete` int(11) NOT NULL DEFAULT 0
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
(38, 31, 1, 6, 2, 2, '2024-05-14 16:11:02', '2024-05-14 16:11:02', 0),
(39, 32, 10, 6, 12, 12, '2024-05-14 18:36:08', '2024-05-14 18:36:08', 0),
(41, 33, 10, 5, 12, 12, '2024-06-30 19:30:17', '2024-06-30 19:30:17', 0),
(42, 33, 10, 4, 12, 12, '2024-06-30 19:30:17', '2024-06-30 19:30:17', 0),
(44, 34, 6, 8, 4, 4, '2024-07-10 15:34:55', '2024-07-10 15:34:55', 0),
(45, 34, 6, 6, 4, 4, '2024-07-10 15:34:55', '2024-07-10 15:34:55', 0),
(46, 34, 6, 8, 4, 4, '2024-07-10 15:34:55', '2024-07-10 15:34:55', 0),
(47, 35, 12, 9, 15, 15, '2024-07-10 15:52:34', '2024-07-10 15:52:34', 0),
(48, 35, 12, 9, 15, 15, '2024-07-10 15:52:34', '2024-07-10 15:52:34', 0),
(49, 36, 12, 6, 15, 15, '2024-07-10 15:58:11', '2024-07-10 15:58:11', 0),
(50, 36, 12, 6, 15, 15, '2024-07-10 15:58:11', '2024-07-10 15:58:11', 0),
(51, 37, 6, 6, 4, 4, '2024-07-21 18:44:10', '2024-07-21 18:44:10', 0),
(52, 37, 6, 6, 4, 4, '2024-07-21 18:44:10', '2024-07-21 18:44:10', 0),
(53, 38, 11, 6, 14, 14, '2024-07-30 19:47:16', '2024-07-30 19:47:16', 0),
(54, 38, 11, 6, 14, 14, '2024-07-30 19:47:16', '2024-07-30 19:47:16', 0),
(55, 38, 11, 10, 14, 14, '2024-07-30 19:47:16', '2024-07-30 19:47:16', 0),
(56, 39, 11, 2, 14, 14, '2024-07-30 19:49:31', '2024-07-30 19:49:31', 0),
(57, 39, 11, 1, 14, 14, '2024-07-30 19:49:31', '2024-07-30 19:49:31', 0),
(58, 39, 11, 2, 14, 14, '2024-07-30 19:49:31', '2024-07-30 19:49:31', 0),
(59, 40, 13, 10, 16, 16, '2024-07-30 19:59:01', '2024-07-30 19:59:01', 0),
(60, 40, 13, 6, 16, 16, '2024-07-30 19:59:01', '2024-07-30 19:59:01', 0),
(61, 40, 13, 10, 16, 16, '2024-07-30 19:59:01', '2024-07-30 19:59:01', 0),
(62, 41, 16, 6, 23, 23, '2024-07-31 14:28:24', '2024-07-31 14:28:24', 0),
(63, 41, 16, 6, 23, 23, '2024-07-31 14:28:24', '2024-07-31 14:28:24', 0);

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
(2, '2-4 years'),
(3, 'ບໍ່ມີປະສົບການ');

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
  `isDelete` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `name`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`, `isDelete`) VALUES
(1, 'IT Support', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 'Software Engineer', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(4, 'Account', 1, 1, '2024-04-01 15:59:03', '2024-04-01 15:59:03', 0),
(5, 'Finance', 1, 1, '2024-04-01 15:59:03', '2024-04-01 15:59:03', 0),
(6, 'Office', 1, 1, '2024-07-01 13:54:29', '2024-07-01 13:54:29', 0),
(7, 'Graphic Design', 1, 1, '2024-07-01 14:02:23', '2024-07-01 14:02:23', 0),
(8, 'Marketing', 4, 4, '2024-07-10 15:27:43', '2024-07-10 15:27:43', 0),
(9, 'Driver', 15, 15, '2024-07-10 15:47:47', '2024-07-10 15:47:47', 0),
(10, 'Service', 14, 14, '2024-07-30 19:43:38', '2024-07-30 19:43:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `job_position`
--

CREATE TABLE `job_position` (
  `id` int(11) NOT NULL,
  `jobId` int(11) DEFAULT NULL,
  `jobPositionLao` varchar(50) DEFAULT NULL,
  `jobPositionEn` varchar(50) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `isDelete` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_position`
--

INSERT INTO `job_position` (`id`, `jobId`, `jobPositionLao`, `jobPositionEn`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`, `isDelete`) VALUES
(1, 2, 'ພັດທະນາໂປຣແກຣມ (Frontend)', 'Frontend Developer', 1, 1, NULL, NULL, 0),
(2, 2, 'ພັດທະນາໂປຣແກຣມ (Backend)', 'Backend Developer', 1, 1, NULL, NULL, 0),
(3, 5, 'ຜູ້ຈັດການຝ່າຍການເງິນ', 'Finance Manager', 1, 1, NULL, NULL, 0),
(4, 4, 'ວິຊາການບັນຊີ', 'Accounting Officer', 1, 1, NULL, NULL, 0),
(5, 1, 'ໄອທີເນັດເວີກ', 'Infra', 1, 1, '2024-06-30 17:47:22', '2024-06-30 17:47:22', 0),
(9, 5, 'ວິຊາການການເງິນ', 'Finance Official', 1, 1, '2024-06-30 18:01:11', '2024-06-30 18:01:58', 0),
(10, 6, 'ແມ່ບ້ານ', 'Housekeeper', 1, 1, '2024-07-01 13:54:53', '2024-07-01 13:54:53', 0),
(11, 6, 'ປະຊາສຳພັນ', 'Public Relationship Officer', 1, 1, '2024-07-01 13:57:51', '2024-07-01 13:57:51', 0),
(12, 7, 'ຢູເອັກ / ຢູໄອ ', 'UX / UI', 1, 1, '2024-07-01 14:03:06', '2024-07-01 14:03:06', 0),
(13, 7, 'ກຣາບຟຣິກດີຊາຍ', 'Graphic Design', 4, 4, '2024-07-10 15:24:25', '2024-07-10 15:24:25', 0),
(14, 8, 'ພະນັກງານຂາຍ', 'Seller', 4, 4, '2024-07-10 15:29:41', '2024-07-10 15:29:41', 0),
(15, 8, 'ການຕະຫຼາດ', 'Marketing', 1, 1, '2024-07-10 15:44:31', '2024-07-10 15:44:31', 0),
(16, 9, 'ພະນັກງານຂັບລົດ', 'Driver', 15, 15, '2024-07-10 15:48:34', '2024-07-10 15:48:34', 0),
(17, 6, 'ພະນັງງານບໍລິການລູກຄ້າ', 'Call center', 15, 15, '2024-07-10 15:56:24', '2024-07-10 15:56:24', 0),
(18, 10, 'ພະນັກງານບໍລິການ', 'Customer service', 14, 14, '2024-07-30 19:45:09', '2024-07-30 19:45:09', 0),
(19, 6, 'ບໍລິຫານບຸກຄະລາກອນ', 'HR', 16, 16, '2024-07-30 20:21:01', '2024-07-30 20:21:01', 0);

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
(3, 'lao-english'),
(4, 'Thai'),
(5, 'Chinese');

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
  `isDelete` int(1) DEFAULT 0
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
(1, '50$-100$'),
(2, '100$-200$'),
(3, '200$-300$'),
(4, '300$-400$');

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
  `isDelete` tinyint(1) NOT NULL DEFAULT 0,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `survey_answer`
--

INSERT INTO `survey_answer` (`id`, `responeId`, `questionId`, `choiceId`, `createdAt`, `updatedAt`, `isDelete`, `userId`) VALUES
(1, 7, 1, 1, '2024-06-30 18:45:50', '2024-06-30 18:45:50', 0, 9),
(2, 7, 3, 10, '2024-06-30 18:45:50', '2024-06-30 18:45:50', 0, 9),
(3, 7, 4, 18, '2024-06-30 18:45:50', '2024-06-30 18:45:50', 0, 9),
(4, 7, 5, 22, '2024-06-30 18:45:50', '2024-06-30 18:45:50', 0, 9),
(5, 8, 1, 3, '2024-06-30 21:36:27', '2024-06-30 21:36:27', 0, 11),
(6, 8, 3, 14, '2024-06-30 21:36:27', '2024-06-30 21:36:27', 0, 11),
(7, 8, 4, 17, '2024-06-30 21:36:27', '2024-06-30 21:36:27', 0, 11),
(8, 8, 5, 23, '2024-06-30 21:36:27', '2024-06-30 21:36:27', 0, 11),
(9, 9, 1, 1, '2024-06-30 23:51:15', '2024-06-30 23:51:15', 0, 13),
(10, 9, 3, 15, '2024-06-30 23:51:15', '2024-06-30 23:51:15', 0, 13),
(11, 9, 4, 17, '2024-06-30 23:51:15', '2024-06-30 23:51:15', 0, 13),
(12, 9, 5, 20, '2024-06-30 23:51:15', '2024-06-30 23:51:15', 0, 13),
(13, 10, 1, 1, '2024-07-10 15:08:48', '2024-07-10 15:08:48', 0, 19),
(14, 10, 3, 9, '2024-07-10 15:08:48', '2024-07-10 15:08:48', 0, 19),
(15, 10, 4, 17, '2024-07-10 15:08:48', '2024-07-10 15:08:48', 0, 19),
(16, 10, 5, 23, '2024-07-10 15:08:48', '2024-07-10 15:08:48', 0, 19),
(17, 11, 1, 1, '2024-07-21 15:54:47', '2024-07-21 15:54:47', 0, 19),
(18, 11, 3, 12, '2024-07-21 15:54:47', '2024-07-21 15:54:47', 0, 19),
(19, 11, 4, 17, '2024-07-21 15:54:47', '2024-07-21 15:54:47', 0, 19),
(20, 11, 5, 23, '2024-07-21 15:54:47', '2024-07-21 15:54:47', 0, 19);

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
  `isDelete` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `survey_choice`
--

INSERT INTO `survey_choice` (`id`, `questionId`, `choiceText`, `defaultChoice`, `choiceOrder`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`, `isDelete`) VALUES
(1, 1, 'ເທື່ອທຳອິດ', 1, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 1, 'ເທື່ອທີ2', 1, 2, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 1, 'ຫຼາຍກ່ວາ2ຄັ້ງ', 1, 3, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(4, 2, 'ເພດ', 1, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(5, 2, 'ອາຍຸ', 1, 2, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(6, 2, 'ຊົນເຜົ່າ', 1, 3, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(7, 2, 'ລະດັບການສຶກສາສູງສຸດ', 1, 4, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(8, 2, 'ມາຈາກແຂວງ', 1, 5, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(9, 3, 'ຮັບຄຳປຶກສາກ່ຽວກັບສາຍອາຊີບ', 1, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(10, 3, 'ຮັບຄຳປຶກສາດ້ານສາຍການຮຽນ', 1, 2, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(11, 3, 'ຮັກຄຳປຶກສາ ແນະນຳ ເລື່ອງສ່ວນຕົວ', 1, 3, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(12, 3, 'ຊອກຕຳແໜ່ງງານຫວ່າງ', 1, 4, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(13, 3, 'ຂຽນປະຫວັດການເຮັດວຽກ', 1, 5, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(14, 3, 'ຝາກປະຫວັດການເຮັດວຽກ CV ໄວ້', 1, 6, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(15, 3, 'ສະໝັກເຂົ້າຮ່ວມການຝຶກອົບຮົມທັກສະດ້ານການກະກຽມສະໝັກວຽກ', 1, 7, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(16, 3, 'ອື່ນໆ', 1, 8, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(17, 4, 'ປະທັບໃຈຫຼາຍ', 1, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(18, 4, 'ປານກາງ', 1, 2, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(19, 4, 'ບໍ່ປະທັບໃຈປານໃດ', 1, 3, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(20, 5, 'ການບໍລິການຫຼ້າຊ້າ', 1, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(21, 5, 'ເນື້ອໃນຂອງການໃຫ້ຄຳແນະນຳຍັງຕ້ອງປັບປຸງຕື່ມ', 1, 2, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(22, 5, 'ຢາກໃຫ້ມີຊ່ຽວຊານມາໃຫ້ຄຳແນະນຳຫຼາຍກວ່າ', 1, 3, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(23, 5, 'ສະຖານທີ່ນ້ອຍ ແອອັດ', 1, 4, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(24, 5, 'ພະນັກງານບໍ່ສຸພາບ', 1, 5, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(25, 5, 'ອື່ນໆ', 1, 6, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

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
  `isDelete` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `survey_question`
--

INSERT INTO `survey_question` (`id`, `questionText`, `questionOrder`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`, `isDelete`) VALUES
(1, 'ທ່ານມາໃຊ້ບໍລິການ:', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 'ຂໍ້ມູນຜູ້ຕອບແບບສອບຖາມ:', 2, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 'ທ່ານໄດ້ເຂົ້າມາໃຊ້ບໍລິການໃດແດ່?', 3, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(4, 'ທ່ານປະທັບໃຈການບໍລິການຂອງເຮົາບໍ່?', 4, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(5, 'ທ່ານຄິດວ່າມີອັນໃດທີ່ຢາກໃຫ້ພວກເຮົາປັບປຸງບໍລິການໃຫ້ດີຂຶ້ນ?', 5, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `survey_respone`
--

CREATE TABLE `survey_respone` (
  `id` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `tribe` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `isDelete` tinyint(1) NOT NULL DEFAULT 0,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `survey_respone`
--

INSERT INTO `survey_respone` (`id`, `gender`, `age`, `tribe`, `education`, `address`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`, `isDelete`, `userId`) VALUES
(7, 'ຊາຍ', '18', 'ລາວລຸ່ມ', 'ປະລິນຍາຕີ', 'Vientitane', 9, 9, '2024-06-30 18:45:50', '2024-06-30 18:45:50', 0, 9),
(8, 'ຍິງ', '25', 'ລາວລຸ່ມ', 'ປະລິນຍາໂທ', 'Vientitane', 11, 11, '2024-06-30 21:36:27', '2024-06-30 21:36:27', 0, 11),
(9, 'ຊາຍ', '32', 'ມົ້ງ', 'ປະລິນຍາໂທ', 'Champasak', 13, 13, '2024-06-30 23:51:15', '2024-06-30 23:51:15', 0, 13),
(10, 'ຍິງ', '21', 'ລາວ', 'ປະລິນຍາຕີ', 'ນະຄອນຫຼວງວຽງຈັນ', 19, 19, '2024-07-10 15:08:48', '2024-07-10 15:08:48', 0, 19),
(11, 'ຍິງ', '21', 'ລາວ', 'ປະລິນຍາຕີ', 'ນະຄອນຫຼວງວຽງຈັນ', 19, 19, '2024-07-21 15:54:47', '2024-07-21 15:54:47', 0, 19);

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
  `isDelete` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `name`, `surname`, `born`, `address`, `phone`, `mail`, `createdBy`, `updatedBy`, `createdAt`, `updatedAt`, `isDelete`) VALUES
(1, 'admin', '1bc86768ce3160d4217320d7a38e6a80', 'admin', 'admin', 'dev', '1999-05-10', 'Vientiane', '02055667788', 't@gmail.com', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 'laoworld', '7094fe377b53204a8a35f64f92cb4287', 'employer', 'Lao World', 'Company', '2012-02-02', 'Vientiane', '02055667788', 't@gmail.com', 1, 1, '0000-00-00 00:00:00', '2024-06-30 17:13:20', 1),
(3, 'test', 'a5c3415a6623b65119d8406bf6f86358', 'employer', 'test', '', '2023-06-08', 'Address', '02055667788', 't@gmail.com', 1, 1, '2024-04-11 14:59:46', '2024-04-11 14:59:46', 0),
(4, 'ict', 'd557c32848e91f80225ea07fb9dc5a82', 'employer', 'ICT Solution', '', '2010-03-03', 'Tanmixay, Xaythany, Vientiane', '02055443322', 't@gmail.com', 1, 1, '2024-04-22 14:11:48', '2024-04-22 14:11:48', 0),
(6, 'qq', '0efac6446d6e90674d82f0e3e36a18bf', 'employer', 'qq', '', '2024-04-22', 'qq', '33', 'qq', 1, 1, '2024-04-22 14:23:27', '2024-04-22 14:23:27', 0),
(7, 'user', '29b16faf8432a886110961ac1565810d', 'employee', 'user', 'test', '2024-05-06', 'nrsportsradio,Thailand', '02055554444', 't@gmail.com', 3, 3, '2024-05-06 15:33:17', '2024-05-06 15:33:17', 0),
(8, 'bill', 'b094943043fc416ba1917df9a4a36d32', 'employee', 'bill', 'hakai', '2024-05-02', 'nrsportsradio,Thailand', '02077889900', 't@gmail.com', 3, 3, '2024-05-06 16:53:30', '2024-05-06 16:53:30', 0),
(9, 'dam', '81db93a7d4108858fb8b48e41a305953', 'employee', 'dam', 'sss', '1999-05-10', 'dongdok,xaythany,vientiane', '02055667788', 't@gmail.com', 3, 3, '2024-05-07 09:18:11', '2024-05-07 09:18:11', 0),
(10, 'kolao', '41c48a74f66b3cae5a886a2efaf633ab', 'employer', 'KB KOLAO LEASING', '', '2024-05-01', 'Kolao 02 (Alounmai Building), 7th floor, 23 Singha Road, Nongbone Village, Saysettha District, Vient', '020 54754265', 'kbkolao.recruitment@gmail.com ', 2, 2, '2024-05-07 16:21:24', '2024-05-07 16:21:24', 0),
(11, 'ouii', '2e324e4b69cb365d6d038e90ec638e36', 'employee', 'ouii', 'ouii', '2001-12-13', 'ban dongdok, xaythany, vientiane', '02055667788', 'ouii@gmail.com', 3, 3, '2024-05-07 21:34:33', '2024-05-07 21:34:33', 0),
(12, 'laosoft', '320d576cc0a8fabc29fa794d884ce5f6', 'employer', 'LaoSoft', '', '2019-02-14', 'aaaa', '02022334455', 'laosoft@gmail.com', 1, 1, '2024-05-14 18:32:23', '2024-05-14 18:32:23', 0),
(13, 'gino', 'fa1f659b7732ed1efc3ba0021112d27b', 'employee', 'gino', 'no', '2024-05-14', 'Address', '02055554444', 'icts@gmail.com', 3, 3, '2024-05-14 18:41:25', '2024-05-14 18:41:25', 0),
(14, 'tplus', '7d37ce2741cc1cbdcfa8cbde163bcfa8', 'employer', 'TPLUS Digital Sole Co., Ltd', '', '2010-02-10', 'Tplus Tower, Saylom Road, Saylom Village, Chanthabouly District, Vientiane Capital', '2077777777', 'tplus@gmail.com', 1, 1, '2024-07-10 14:39:08', '2024-07-10 14:39:08', 0),
(15, 'foodpanda', '2d023a84c3c4619a6891515cc605c652', 'employer', 'Delivery Hero (Lao) Sole Co., Ltd. (foodpanda Laos)', '', '2020-06-10', 'Sidamduan, Chanthabouly District, Vientiane Capital', '2099009988', 'foodpanda@gmail.com', 1, 1, '2024-07-10 14:42:37', '2024-07-10 14:42:37', 0),
(16, 'toyota', '35eaed46610d1dc032ef2ff3cc496b55', 'employer', 'TOYOTA LAOS CO., LTD.', '', '2015-02-10', '9th floor, Royal Square Office Building, No 20 Samsenthai Road Noong Duong Nua Village, Sikhottabong', '2055009988', 'toyota@gmail.com', 1, 1, '2024-07-10 14:45:33', '2024-07-10 14:45:33', 0),
(17, 'aiken', '9d8999548beba787f6101d84e49eb396', 'employer', 'AI KEN PHARMA ( Laos ) Company Limited', '', '2011-06-30', 'Kamphengmeuang Road Phonthan Village, Xaysettha District, Vientiane Capital', '2055667788', 'aiken@gmail.com', 1, 1, '2024-07-10 14:49:51', '2024-07-10 14:49:51', 0),
(18, 'funderland', 'ceaa3e292763226e9afb5af600acbb29', 'employer', 'Funderland Group', '', '2022-11-25', 'Phonxay Village , Xaysettha District, Vientiane Capital', '20551122333', 'funderland@gmail.com', 1, 1, '2024-07-10 14:56:18', '2024-07-10 14:56:18', 0),
(19, 'ouy', '7493e20ef74b47d9b196d22ad653a708', 'employee', 'ouy', 'ouy', '2001-12-13', 'ສີໄຄ, ສີໂຄດຕະບອງ, ນະຄອນຫຼວງວຽງຈັນ', '2077777777', 'numouykks@gmail.com', 3, 3, '2024-07-10 15:02:22', '2024-07-10 15:02:22', 0),
(20, 'thip', '0f0c364bba78adb1f32ffe29655c4f80', 'employee', 'thip', 'vongnalard', '2004-03-01', 'ສີໄຄ, ສີໂຄດຕະບອງ, ນະຄອນຫຼວງວຽງຈັນ', '2055009988', 'thipthip@gmail.com', 3, 3, '2024-07-21 13:45:32', '2024-07-21 13:45:32', 0),
(21, 'vard', '47d0d95f3e5357a9d3edb22c8997ec1d', 'employee', 'vard', 'sounthavong', '2002-07-10', 'ນາເລົ່າ, ນະຄອນຫຼວງວຽງຈັນ, ນະຄອນຫຼວງວຽງຈັນ ', '2099009988', 'vard@gmail.com', 3, 3, '2024-07-21 14:32:25', '2024-07-21 14:32:25', 0),
(22, 'nina', '47865973939aa610a90252376b1d9cf5', 'employee', 'nina', 'keomanyxay', '2002-02-02', 'ສີໄຄ, ສີໂຄດຕະບອງ, ນະຄອນຫຼວງວຽງຈັນ', '20551122333', 'nina@gmail.com', 3, 3, '2024-07-21 17:10:25', '2024-07-21 17:10:25', 0),
(23, 'rma', '922bd993ddd594c87dea3f7b048140a5', 'employer', 'RMA', '', '2024-07-18', 'Ban Beungkhayong Tay, Unit 18, P.O. Box 6030, Thadeua Road,Sisattanak District, Vientiane Capital, L', '2099009988', 'rma@gmail.com', 1, 1, '2024-07-31 14:26:41', '2024-07-31 14:26:41', 0),
(24, 'sylus', '2b1ce403981570bb12ab8f4122d83a14', 'employee', 'sylus', 'sylus', '2024-07-10', 'ສີໄຄ, ສີໂຄດຕະບອງ, ນະຄອນຫຼວງວຽງຈັນ', '2099009988', 'numouykks@gmail.com', 3, 3, '2024-07-31 14:30:23', '2024-07-31 14:30:23', 0);

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
,`phone` varchar(20)
,`mail` varchar(100)
,`userAddress` varchar(100)
,`job_position_id` int(11)
,`jobPositionLao` varchar(50)
,`jobPositionEn` varchar(50)
,`jobTypeId` int(11)
,`jobType` varchar(100)
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
,`jobType` varchar(100)
,`jobPositionLao` varchar(50)
,`jobPositionEn` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_jobposition`
-- (See below for the actual view)
--
CREATE TABLE `v_jobposition` (
`id` int(11)
,`jobId` int(11)
,`jobType` varchar(100)
,`jobPositionLao` varchar(50)
,`jobPositionEn` varchar(50)
,`createdBy` int(11)
,`updatedBy` int(11)
,`createdAt` datetime
,`updatedAt` datetime
,`isDelete` int(1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_survey`
-- (See below for the actual view)
--
CREATE TABLE `v_survey` (
`id` int(11)
,`responeId` int(11)
,`questionId` int(11)
,`choiceId` int(11)
,`createdAt` datetime
,`updatedAt` datetime
,`isDelete` tinyint(1)
,`questionText` varchar(200)
,`questionOrder` int(11)
,`choiceText` text
,`choiceOrder` int(11)
,`userId` int(11)
,`name` varchar(100)
,`surname` varchar(100)
,`born` date
,`address` varchar(100)
,`phone` varchar(20)
,`mail` varchar(100)
,`gender` varchar(50)
,`age` varchar(50)
,`tribe` varchar(100)
,`education` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `v_apply`
--
DROP TABLE IF EXISTS `v_apply`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_apply`  AS SELECT `a`.`id` AS `id`, `a`.`employId` AS `employId`, `a`.`companyId` AS `companyId`, `a`.`userId` AS `userId`, `a`.`title` AS `title`, `a`.`description` AS `description`, `a`.`status` AS `status`, `a`.`createdBy` AS `createdBy`, `a`.`updatedBy` AS `updatedBy`, `a`.`createdAt` AS `createdAt`, `a`.`updatedAt` AS `updatedAt`, `a`.`isDelete` AS `isDelete`, `b`.`file` AS `file`, `c`.`name` AS `employerName`, `d`.`name` AS `companyName`, `d`.`logo` AS `logo`, `e`.`name` AS `firstName`, `e`.`surname` AS `lastName`, `e`.`phone` AS `phone`, `e`.`mail` AS `mail`, `e`.`address` AS `userAddress`, `z`.`id` AS `job_position_id`, `z`.`jobPositionLao` AS `jobPositionLao`, `z`.`jobPositionEn` AS `jobPositionEn`, `y`.`id` AS `jobTypeId`, `y`.`name` AS `jobType` FROM ((((((`apply` `a` join `apply_attachment` `b` on(`a`.`id` = `b`.`applyId`)) join `employ` `c` on(`a`.`employId` = `c`.`id`)) join `job_position` `z` on(`c`.`jobPositionId` = `z`.`id`)) join `job` `y` on(`z`.`jobId` = `y`.`id`)) join `company` `d` on(`a`.`companyId` = `d`.`id`)) join `user` `e` on(`a`.`userId` = `e`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_employ`
--
DROP TABLE IF EXISTS `v_employ`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_employ`  AS SELECT `a`.`id` AS `id`, `a`.`companyId` AS `companyId`, `d`.`name` AS `companyName`, `d`.`logo` AS `companyLogo`, `a`.`name` AS `name`, `h`.`language` AS `language`, `g`.`experience` AS `experience`, `f`.`salary` AS `salary`, `a`.`description` AS `description`, `a`.`address` AS `address`, `a`.`status` AS `status`, `a`.`createdBy` AS `createdBy`, `a`.`updatedBy` AS `updatedBy`, `a`.`createdAt` AS `createdAt`, `a`.`updatedAt` AS `updatedAt`, `a`.`isDelete` AS `isDelete`, `a`.`strDate` AS `strDate`, `a`.`endDate` AS `endDate`, `b`.`image` AS `image`, `c`.`jobId` AS `jobId`, `e`.`name` AS `jobName`, `i`.`time` AS `time`, `z`.`jobType` AS `jobType`, `z`.`jobPositionLao` AS `jobPositionLao`, `z`.`jobPositionEn` AS `jobPositionEn` FROM (((((((((`employ` `a` join `employ_image` `b` on(`a`.`id` = `b`.`employId`)) join `employ_job` `c` on(`a`.`id` = `c`.`employId`)) join `company` `d` on(`a`.`companyId` = `d`.`id`)) join `job` `e` on(`c`.`jobId` = `e`.`id`)) join `salary` `f` on(`a`.`salaryId` = `f`.`id`)) join `experience` `g` on(`a`.`experienceId` = `g`.`id`)) join `language` `h` on(`a`.`languageId` = `h`.`id`)) join `time` `i` on(`a`.`timeId` = `i`.`id`)) join `v_jobposition` `z` on(`a`.`jobPositionId` = `z`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_jobposition`
--
DROP TABLE IF EXISTS `v_jobposition`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_jobposition`  AS SELECT `a`.`id` AS `id`, `a`.`jobId` AS `jobId`, `b`.`name` AS `jobType`, `a`.`jobPositionLao` AS `jobPositionLao`, `a`.`jobPositionEn` AS `jobPositionEn`, `a`.`createdBy` AS `createdBy`, `a`.`updatedBy` AS `updatedBy`, `a`.`createdAt` AS `createdAt`, `a`.`updatedAt` AS `updatedAt`, `a`.`isDelete` AS `isDelete` FROM (`job_position` `a` join `job` `b` on(`a`.`jobId` = `b`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_survey`
--
DROP TABLE IF EXISTS `v_survey`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_survey`  AS SELECT `a`.`id` AS `id`, `a`.`responeId` AS `responeId`, `a`.`questionId` AS `questionId`, `a`.`choiceId` AS `choiceId`, `a`.`createdAt` AS `createdAt`, `a`.`updatedAt` AS `updatedAt`, `a`.`isDelete` AS `isDelete`, `b`.`questionText` AS `questionText`, `b`.`questionOrder` AS `questionOrder`, `d`.`choiceText` AS `choiceText`, `d`.`choiceOrder` AS `choiceOrder`, `e`.`id` AS `userId`, `e`.`name` AS `name`, `e`.`surname` AS `surname`, `e`.`born` AS `born`, `e`.`address` AS `address`, `e`.`phone` AS `phone`, `e`.`mail` AS `mail`, `f`.`gender` AS `gender`, `f`.`age` AS `age`, `f`.`tribe` AS `tribe`, `f`.`education` AS `education` FROM ((((`survey_answer` `a` join `survey_question` `b` on(`a`.`questionId` = `b`.`id`)) join `survey_choice` `d` on(`a`.`choiceId` = `d`.`id`)) join `survey_respone` `f` on(`a`.`responeId` = `f`.`id`)) join `user` `e` on(`a`.`userId` = `e`.`id`)) ;

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
  ADD KEY `companyId` (`companyId`),
  ADD KEY `JobPositionId` (`jobPositionId`),
  ADD KEY `languageId` (`languageId`),
  ADD KEY `experienceId` (`experienceId`),
  ADD KEY `salaryId` (`salaryId`),
  ADD KEY `timeId` (`timeId`);

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
-- Indexes for table `job_position`
--
ALTER TABLE `job_position`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `apply_attachment`
--
ALTER TABLE `apply_attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employ`
--
ALTER TABLE `employ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `employ_image`
--
ALTER TABLE `employ_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `employ_job`
--
ALTER TABLE `employ_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `job_position`
--
ALTER TABLE `job_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `survey_answer`
--
ALTER TABLE `survey_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `survey_choice`
--
ALTER TABLE `survey_choice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `survey_question`
--
ALTER TABLE `survey_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `survey_respone`
--
ALTER TABLE `survey_respone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
  ADD CONSTRAINT `FK_experienceId` FOREIGN KEY (`experienceId`) REFERENCES `experience` (`id`),
  ADD CONSTRAINT `FK_languageId` FOREIGN KEY (`languageId`) REFERENCES `language` (`id`),
  ADD CONSTRAINT `FK_salaryId` FOREIGN KEY (`salaryId`) REFERENCES `salary` (`id`),
  ADD CONSTRAINT `FK_timeId` FOREIGN KEY (`timeId`) REFERENCES `time` (`id`),
  ADD CONSTRAINT `employ_FK_1` FOREIGN KEY (`companyId`) REFERENCES `company` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `employ_ibfk_1` FOREIGN KEY (`jobPositionId`) REFERENCES `job_position` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
