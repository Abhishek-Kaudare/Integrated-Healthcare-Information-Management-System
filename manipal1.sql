-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 08:06 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manipal`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `hospital_id` int(11) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `awards_and_achievement`
--

CREATE TABLE `awards_and_achievement` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `award_or_achievement` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awards_and_achievement`
--

INSERT INTO `awards_and_achievement` (`id`, `doctor_id`, `award_or_achievement`) VALUES
(3, 6, 'HEHEHE'),
(4, 8, 'hasasa');

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank`
--

CREATE TABLE `blood_bank` (
  `blood_bank_id` int(11) NOT NULL,
  `blood_bank_name` varchar(255) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `license_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `lattitude` float NOT NULL,
  `longitude` float NOT NULL,
  `verified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chart_demo`
--

CREATE TABLE `chart_demo` (
  `id` int(11) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(4) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chart_demo`
--

INSERT INTO `chart_demo` (`id`, `disease`, `region`, `month`, `year`, `number`) VALUES
(1, 'Dengue', 'A', 'January', '2017', 264),
(2, 'Malaria', 'A', 'January', '2017', 334),
(3, 'Dengue', 'B', 'January', '2017', 343),
(4, 'Malaria', 'B', 'January', '2017', 182),
(5, 'Dengue', 'C', 'January', '2017', 141),
(6, 'Malaria', 'C', 'January', '2017', 218),
(7, 'Dengue', 'D', 'January', '2017', 293),
(8, 'Malaria', 'D', 'January', '2017', 163),
(9, 'Dengue', 'E', 'January', '2017', 202),
(10, 'Malaria', 'E', 'January', '2017', 142),
(11, 'Dengue', 'FN', 'January', '2017', 379),
(12, 'Malaria', 'FN', 'January', '2017', 460),
(13, 'Dengue', 'FS', 'January', '2017', 280),
(14, 'Malaria', 'FS', 'January', '2017', 135),
(15, 'Dengue', 'GN', 'January', '2017', 263),
(16, 'Malaria', 'GN', 'January', '2017', 309),
(17, 'Dengue', 'GS', 'January', '2017', 123),
(18, 'Malaria', 'GS', 'January', '2017', 275),
(19, 'Dengue', 'HE', 'January', '2017', 186),
(20, 'Malaria', 'HE', 'January', '2017', 209),
(21, 'Dengue', 'HW', 'January', '2017', 255),
(22, 'Malaria', 'HW', 'January', '2017', 225),
(23, 'Dengue', 'KE', 'January', '2017', 175),
(24, 'Malaria', 'KE', 'January', '2017', 165),
(25, 'Dengue', 'KW', 'January', '2017', 136),
(26, 'Malaria', 'KW', 'January', '2017', 198),
(27, 'Dengue', 'L', 'January', '2017', 305),
(28, 'Malaria', 'L', 'January', '2017', 477),
(29, 'Dengue', 'ME', 'January', '2017', 435),
(30, 'Malaria', 'ME', 'January', '2017', 326),
(31, 'Dengue', 'MW', 'January', '2017', 308),
(32, 'Malaria', 'MW', 'January', '2017', 456),
(33, 'Dengue', 'N', 'January', '2017', 207),
(34, 'Malaria', 'N', 'January', '2017', 115),
(35, 'Dengue', 'PN', 'January', '2017', 214),
(36, 'Malaria', 'PN', 'January', '2017', 309),
(37, 'Dengue', 'PS', 'January', '2017', 213),
(38, 'Malaria', 'PS', 'January', '2017', 301),
(39, 'Dengue', 'RN', 'January', '2017', 332),
(40, 'Malaria', 'RN', 'January', '2017', 139),
(41, 'Dengue', 'RS', 'January', '2017', 252),
(42, 'Malaria', 'RS', 'January', '2017', 127),
(43, 'Dengue', 'RC', 'January', '2017', 331),
(44, 'Malaria', 'RC', 'January', '2017', 135),
(45, 'Dengue', 'S', 'January', '2017', 269),
(46, 'Malaria', 'S', 'January', '2017', 110),
(47, 'Dengue', 'T', 'January', '2017', 331),
(48, 'Malaria', 'T', 'January', '2017', 191),
(49, 'Dengue', 'A', 'February', '2017', 62),
(50, 'Malaria', 'A', 'February', '2017', 134),
(51, 'Dengue', 'B', 'February', '2017', 144),
(52, 'Malaria', 'B', 'February', '2017', 49),
(53, 'Dengue', 'C', 'February', '2017', 36),
(54, 'Malaria', 'C', 'February', '2017', 68),
(55, 'Dengue', 'D', 'February', '2017', 32),
(56, 'Malaria', 'D', 'February', '2017', 111),
(57, 'Dengue', 'E', 'February', '2017', 124),
(58, 'Malaria', 'E', 'February', '2017', 38),
(59, 'Dengue', 'FN', 'February', '2017', 156),
(60, 'Malaria', 'FN', 'February', '2017', 192),
(61, 'Dengue', 'FS', 'February', '2017', 86),
(62, 'Malaria', 'FS', 'February', '2017', 117),
(63, 'Dengue', 'GN', 'February', '2017', 126),
(64, 'Malaria', 'GN', 'February', '2017', 43),
(65, 'Dengue', 'GS', 'February', '2017', 145),
(66, 'Malaria', 'GS', 'February', '2017', 130),
(67, 'Dengue', 'HE', 'February', '2017', 104),
(68, 'Malaria', 'HE', 'February', '2017', 58),
(69, 'Dengue', 'HW', 'February', '2017', 98),
(70, 'Malaria', 'HW', 'February', '2017', 39),
(71, 'Dengue', 'KE', 'February', '2017', 73),
(72, 'Malaria', 'KE', 'February', '2017', 62),
(73, 'Dengue', 'KW', 'February', '2017', 88),
(74, 'Malaria', 'KW', 'February', '2017', 111),
(75, 'Dengue', 'L', 'February', '2017', 215),
(76, 'Malaria', 'L', 'February', '2017', 125),
(77, 'Dengue', 'ME', 'February', '2017', 140),
(78, 'Malaria', 'ME', 'February', '2017', 144),
(79, 'Dengue', 'MW', 'February', '2017', 225),
(80, 'Malaria', 'MW', 'February', '2017', 187),
(81, 'Dengue', 'N', 'February', '2017', 119),
(82, 'Malaria', 'N', 'February', '2017', 107),
(83, 'Dengue', 'PN', 'February', '2017', 79),
(84, 'Malaria', 'PN', 'February', '2017', 46),
(85, 'Dengue', 'PS', 'February', '2017', 61),
(86, 'Malaria', 'PS', 'February', '2017', 88),
(87, 'Dengue', 'RN', 'February', '2017', 77),
(88, 'Malaria', 'RN', 'February', '2017', 113),
(89, 'Dengue', 'RS', 'February', '2017', 99),
(90, 'Malaria', 'RS', 'February', '2017', 94),
(91, 'Dengue', 'RC', 'February', '2017', 122),
(92, 'Malaria', 'RC', 'February', '2017', 134),
(93, 'Dengue', 'S', 'February', '2017', 61),
(94, 'Malaria', 'S', 'February', '2017', 125),
(95, 'Dengue', 'T', 'February', '2017', 91),
(96, 'Malaria', 'T', 'February', '2017', 80),
(97, 'Dengue', 'A', 'March', '2017', 47),
(98, 'Malaria', 'A', 'March', '2017', 148),
(99, 'Dengue', 'B', 'March', '2017', 85),
(100, 'Malaria', 'B', 'March', '2017', 113),
(101, 'Dengue', 'C', 'March', '2017', 32),
(102, 'Malaria', 'C', 'March', '2017', 82),
(103, 'Dengue', 'D', 'March', '2017', 61),
(104, 'Malaria', 'D', 'March', '2017', 146),
(105, 'Dengue', 'E', 'March', '2017', 103),
(106, 'Malaria', 'E', 'March', '2017', 38),
(107, 'Dengue', 'FN', 'March', '2017', 124),
(108, 'Malaria', 'FN', 'March', '2017', 290),
(109, 'Dengue', 'FS', 'March', '2017', 148),
(110, 'Malaria', 'FS', 'March', '2017', 33),
(111, 'Dengue', 'GN', 'March', '2017', 69),
(112, 'Malaria', 'GN', 'March', '2017', 109),
(113, 'Dengue', 'GS', 'March', '2017', 132),
(114, 'Malaria', 'GS', 'March', '2017', 106),
(115, 'Dengue', 'HE', 'March', '2017', 102),
(116, 'Malaria', 'HE', 'March', '2017', 111),
(117, 'Dengue', 'HW', 'March', '2017', 88),
(118, 'Malaria', 'HW', 'March', '2017', 131),
(119, 'Dengue', 'KE', 'March', '2017', 137),
(120, 'Malaria', 'KE', 'March', '2017', 83),
(121, 'Dengue', 'KW', 'March', '2017', 30),
(122, 'Malaria', 'KW', 'March', '2017', 131),
(123, 'Dengue', 'L', 'March', '2017', 112),
(124, 'Malaria', 'L', 'March', '2017', 155),
(125, 'Dengue', 'ME', 'March', '2017', 132),
(126, 'Malaria', 'ME', 'March', '2017', 180),
(127, 'Dengue', 'MW', 'March', '2017', 296),
(128, 'Malaria', 'MW', 'March', '2017', 126),
(129, 'Dengue', 'N', 'March', '2017', 117),
(130, 'Malaria', 'N', 'March', '2017', 31),
(131, 'Dengue', 'PN', 'March', '2017', 99),
(132, 'Malaria', 'PN', 'March', '2017', 57),
(133, 'Dengue', 'PS', 'March', '2017', 120),
(134, 'Malaria', 'PS', 'March', '2017', 143),
(135, 'Dengue', 'RN', 'March', '2017', 101),
(136, 'Malaria', 'RN', 'March', '2017', 71),
(137, 'Dengue', 'RS', 'March', '2017', 149),
(138, 'Malaria', 'RS', 'March', '2017', 39),
(139, 'Dengue', 'RC', 'March', '2017', 100),
(140, 'Malaria', 'RC', 'March', '2017', 126),
(141, 'Dengue', 'S', 'March', '2017', 137),
(142, 'Malaria', 'S', 'March', '2017', 120),
(143, 'Dengue', 'T', 'March', '2017', 99),
(144, 'Malaria', 'T', 'March', '2017', 150),
(145, 'Dengue', 'A', 'April', '2017', 30),
(146, 'Malaria', 'A', 'April', '2017', 92),
(147, 'Dengue', 'B', 'April', '2017', 110),
(148, 'Malaria', 'B', 'April', '2017', 120),
(149, 'Dengue', 'C', 'April', '2017', 65),
(150, 'Malaria', 'C', 'April', '2017', 67),
(151, 'Dengue', 'D', 'April', '2017', 36),
(152, 'Malaria', 'D', 'April', '2017', 90),
(153, 'Dengue', 'E', 'April', '2017', 87),
(154, 'Malaria', 'E', 'April', '2017', 87),
(155, 'Dengue', 'FN', 'April', '2017', 122),
(156, 'Malaria', 'FN', 'April', '2017', 163),
(157, 'Dengue', 'FS', 'April', '2017', 118),
(158, 'Malaria', 'FS', 'April', '2017', 55),
(159, 'Dengue', 'GN', 'April', '2017', 149),
(160, 'Malaria', 'GN', 'April', '2017', 140),
(161, 'Dengue', 'GS', 'April', '2017', 54),
(162, 'Malaria', 'GS', 'April', '2017', 69),
(163, 'Dengue', 'HE', 'April', '2017', 75),
(164, 'Malaria', 'HE', 'April', '2017', 140),
(165, 'Dengue', 'HW', 'April', '2017', 86),
(166, 'Malaria', 'HW', 'April', '2017', 147),
(167, 'Dengue', 'KE', 'April', '2017', 60),
(168, 'Malaria', 'KE', 'April', '2017', 122),
(169, 'Dengue', 'KW', 'April', '2017', 134),
(170, 'Malaria', 'KW', 'April', '2017', 122),
(171, 'Dengue', 'L', 'April', '2017', 295),
(172, 'Malaria', 'L', 'April', '2017', 241),
(173, 'Dengue', 'ME', 'April', '2017', 154),
(174, 'Malaria', 'ME', 'April', '2017', 283),
(175, 'Dengue', 'MW', 'April', '2017', 105),
(176, 'Malaria', 'MW', 'April', '2017', 157),
(177, 'Dengue', 'N', 'April', '2017', 121),
(178, 'Malaria', 'N', 'April', '2017', 46),
(179, 'Dengue', 'PN', 'April', '2017', 102),
(180, 'Malaria', 'PN', 'April', '2017', 93),
(181, 'Dengue', 'PS', 'April', '2017', 139),
(182, 'Malaria', 'PS', 'April', '2017', 70),
(183, 'Dengue', 'RN', 'April', '2017', 68),
(184, 'Malaria', 'RN', 'April', '2017', 99),
(185, 'Dengue', 'RS', 'April', '2017', 139),
(186, 'Malaria', 'RS', 'April', '2017', 30),
(187, 'Dengue', 'RC', 'April', '2017', 39),
(188, 'Malaria', 'RC', 'April', '2017', 74),
(189, 'Dengue', 'S', 'April', '2017', 56),
(190, 'Malaria', 'S', 'April', '2017', 63),
(191, 'Dengue', 'T', 'April', '2017', 65),
(192, 'Malaria', 'T', 'April', '2017', 139),
(193, 'Dengue', 'A', 'May', '2017', 82),
(194, 'Malaria', 'A', 'May', '2017', 100),
(195, 'Dengue', 'B', 'May', '2017', 100),
(196, 'Malaria', 'B', 'May', '2017', 96),
(197, 'Dengue', 'C', 'May', '2017', 40),
(198, 'Malaria', 'C', 'May', '2017', 108),
(199, 'Dengue', 'D', 'May', '2017', 149),
(200, 'Malaria', 'D', 'May', '2017', 72),
(201, 'Dengue', 'E', 'May', '2017', 47),
(202, 'Malaria', 'E', 'May', '2017', 76),
(203, 'Dengue', 'FN', 'May', '2017', 248),
(204, 'Malaria', 'FN', 'May', '2017', 127),
(205, 'Dengue', 'FS', 'May', '2017', 92),
(206, 'Malaria', 'FS', 'May', '2017', 132),
(207, 'Dengue', 'GN', 'May', '2017', 51),
(208, 'Malaria', 'GN', 'May', '2017', 48),
(209, 'Dengue', 'GS', 'May', '2017', 144),
(210, 'Malaria', 'GS', 'May', '2017', 93),
(211, 'Dengue', 'HE', 'May', '2017', 84),
(212, 'Malaria', 'HE', 'May', '2017', 45),
(213, 'Dengue', 'HW', 'May', '2017', 147),
(214, 'Malaria', 'HW', 'May', '2017', 133),
(215, 'Dengue', 'KE', 'May', '2017', 130),
(216, 'Malaria', 'KE', 'May', '2017', 109),
(217, 'Dengue', 'KW', 'May', '2017', 142),
(218, 'Malaria', 'KW', 'May', '2017', 120),
(219, 'Dengue', 'L', 'May', '2017', 207),
(220, 'Malaria', 'L', 'May', '2017', 217),
(221, 'Dengue', 'ME', 'May', '2017', 278),
(222, 'Malaria', 'ME', 'May', '2017', 215),
(223, 'Dengue', 'MW', 'May', '2017', 172),
(224, 'Malaria', 'MW', 'May', '2017', 264),
(225, 'Dengue', 'N', 'May', '2017', 104),
(226, 'Malaria', 'N', 'May', '2017', 59),
(227, 'Dengue', 'PN', 'May', '2017', 74),
(228, 'Malaria', 'PN', 'May', '2017', 104),
(229, 'Dengue', 'PS', 'May', '2017', 73),
(230, 'Malaria', 'PS', 'May', '2017', 102),
(231, 'Dengue', 'RN', 'May', '2017', 123),
(232, 'Malaria', 'RN', 'May', '2017', 100),
(233, 'Dengue', 'RS', 'May', '2017', 82),
(234, 'Malaria', 'RS', 'May', '2017', 41),
(235, 'Dengue', 'RC', 'May', '2017', 86),
(236, 'Malaria', 'RC', 'May', '2017', 128),
(237, 'Dengue', 'S', 'May', '2017', 136),
(238, 'Malaria', 'S', 'May', '2017', 77),
(239, 'Dengue', 'T', 'May', '2017', 51),
(240, 'Malaria', 'T', 'May', '2017', 97),
(241, 'Dengue', 'A', 'June', '2017', 807),
(242, 'Malaria', 'A', 'June', '2017', 825),
(243, 'Dengue', 'B', 'June', '2017', 646),
(244, 'Malaria', 'B', 'June', '2017', 949),
(245, 'Dengue', 'C', 'June', '2017', 577),
(246, 'Malaria', 'C', 'June', '2017', 844),
(247, 'Dengue', 'D', 'June', '2017', 717),
(248, 'Malaria', 'D', 'June', '2017', 690),
(249, 'Dengue', 'E', 'June', '2017', 763),
(250, 'Malaria', 'E', 'June', '2017', 619),
(251, 'Dengue', 'FN', 'June', '2017', 1854),
(252, 'Malaria', 'FN', 'June', '2017', 738),
(253, 'Dengue', 'FS', 'June', '2017', 832),
(254, 'Malaria', 'FS', 'June', '2017', 547),
(255, 'Dengue', 'GN', 'June', '2017', 648),
(256, 'Malaria', 'GN', 'June', '2017', 854),
(257, 'Dengue', 'GS', 'June', '2017', 809),
(258, 'Malaria', 'GS', 'June', '2017', 575),
(259, 'Dengue', 'HE', 'June', '2017', 544),
(260, 'Malaria', 'HE', 'June', '2017', 636),
(261, 'Dengue', 'HW', 'June', '2017', 938),
(262, 'Malaria', 'HW', 'June', '2017', 510),
(263, 'Dengue', 'KE', 'June', '2017', 990),
(264, 'Malaria', 'KE', 'June', '2017', 567),
(265, 'Dengue', 'KW', 'June', '2017', 564),
(266, 'Malaria', 'KW', 'June', '2017', 844),
(267, 'Dengue', 'L', 'June', '2017', 780),
(268, 'Malaria', 'L', 'June', '2017', 1747),
(269, 'Dengue', 'ME', 'June', '2017', 1211),
(270, 'Malaria', 'ME', 'June', '2017', 1251),
(271, 'Dengue', 'MW', 'June', '2017', 1281),
(272, 'Malaria', 'MW', 'June', '2017', 700),
(273, 'Dengue', 'N', 'June', '2017', 546),
(274, 'Malaria', 'N', 'June', '2017', 525),
(275, 'Dengue', 'PN', 'June', '2017', 899),
(276, 'Malaria', 'PN', 'June', '2017', 541),
(277, 'Dengue', 'PS', 'June', '2017', 602),
(278, 'Malaria', 'PS', 'June', '2017', 562),
(279, 'Dengue', 'RN', 'June', '2017', 783),
(280, 'Malaria', 'RN', 'June', '2017', 544),
(281, 'Dengue', 'RS', 'June', '2017', 808),
(282, 'Malaria', 'RS', 'June', '2017', 576),
(283, 'Dengue', 'RC', 'June', '2017', 692),
(284, 'Malaria', 'RC', 'June', '2017', 595),
(285, 'Dengue', 'S', 'June', '2017', 943),
(286, 'Malaria', 'S', 'June', '2017', 950),
(287, 'Dengue', 'T', 'June', '2017', 911),
(288, 'Malaria', 'T', 'June', '2017', 529),
(289, 'Dengue', 'A', 'July', '2017', 933),
(290, 'Malaria', 'A', 'July', '2017', 562),
(291, 'Dengue', 'B', 'July', '2017', 749),
(292, 'Malaria', 'B', 'July', '2017', 522),
(293, 'Dengue', 'C', 'July', '2017', 666),
(294, 'Malaria', 'C', 'July', '2017', 960),
(295, 'Dengue', 'D', 'July', '2017', 872),
(296, 'Malaria', 'D', 'July', '2017', 697),
(297, 'Dengue', 'E', 'July', '2017', 768),
(298, 'Malaria', 'E', 'July', '2017', 951),
(299, 'Dengue', 'FN', 'July', '2017', 879),
(300, 'Malaria', 'FN', 'July', '2017', 1402),
(301, 'Dengue', 'FS', 'July', '2017', 949),
(302, 'Malaria', 'FS', 'July', '2017', 534),
(303, 'Dengue', 'GN', 'July', '2017', 656),
(304, 'Malaria', 'GN', 'July', '2017', 572),
(305, 'Dengue', 'GS', 'July', '2017', 798),
(306, 'Malaria', 'GS', 'July', '2017', 560),
(307, 'Dengue', 'HE', 'July', '2017', 714),
(308, 'Malaria', 'HE', 'July', '2017', 596),
(309, 'Dengue', 'HW', 'July', '2017', 549),
(310, 'Malaria', 'HW', 'July', '2017', 575),
(311, 'Dengue', 'KE', 'July', '2017', 519),
(312, 'Malaria', 'KE', 'July', '2017', 750),
(313, 'Dengue', 'KW', 'July', '2017', 620),
(314, 'Malaria', 'KW', 'July', '2017', 741),
(315, 'Dengue', 'L', 'July', '2017', 834),
(316, 'Malaria', 'L', 'July', '2017', 1143),
(317, 'Dengue', 'ME', 'July', '2017', 1061),
(318, 'Malaria', 'ME', 'July', '2017', 1543),
(319, 'Dengue', 'MW', 'July', '2017', 1075),
(320, 'Malaria', 'MW', 'July', '2017', 992),
(321, 'Dengue', 'N', 'July', '2017', 899),
(322, 'Malaria', 'N', 'July', '2017', 740),
(323, 'Dengue', 'PN', 'July', '2017', 838),
(324, 'Malaria', 'PN', 'July', '2017', 701),
(325, 'Dengue', 'PS', 'July', '2017', 728),
(326, 'Malaria', 'PS', 'July', '2017', 736),
(327, 'Dengue', 'RN', 'July', '2017', 617),
(328, 'Malaria', 'RN', 'July', '2017', 742),
(329, 'Dengue', 'RS', 'July', '2017', 772),
(330, 'Malaria', 'RS', 'July', '2017', 892),
(331, 'Dengue', 'RC', 'July', '2017', 692),
(332, 'Malaria', 'RC', 'July', '2017', 515),
(333, 'Dengue', 'S', 'July', '2017', 660),
(334, 'Malaria', 'S', 'July', '2017', 647),
(335, 'Dengue', 'T', 'July', '2017', 665),
(336, 'Malaria', 'T', 'July', '2017', 993),
(337, 'Dengue', 'A', 'August', '2017', 763),
(338, 'Malaria', 'A', 'August', '2017', 851),
(339, 'Dengue', 'B', 'August', '2017', 918),
(340, 'Malaria', 'B', 'August', '2017', 755),
(341, 'Dengue', 'C', 'August', '2017', 787),
(342, 'Malaria', 'C', 'August', '2017', 761),
(343, 'Dengue', 'D', 'August', '2017', 678),
(344, 'Malaria', 'D', 'August', '2017', 715),
(345, 'Dengue', 'E', 'August', '2017', 519),
(346, 'Malaria', 'E', 'August', '2017', 946),
(347, 'Dengue', 'FN', 'August', '2017', 929),
(348, 'Malaria', 'FN', 'August', '2017', 1189),
(349, 'Dengue', 'FS', 'August', '2017', 694),
(350, 'Malaria', 'FS', 'August', '2017', 699),
(351, 'Dengue', 'GN', 'August', '2017', 583),
(352, 'Malaria', 'GN', 'August', '2017', 524),
(353, 'Dengue', 'GS', 'August', '2017', 606),
(354, 'Malaria', 'GS', 'August', '2017', 876),
(355, 'Dengue', 'HE', 'August', '2017', 530),
(356, 'Malaria', 'HE', 'August', '2017', 899),
(357, 'Dengue', 'HW', 'August', '2017', 744),
(358, 'Malaria', 'HW', 'August', '2017', 762),
(359, 'Dengue', 'KE', 'August', '2017', 625),
(360, 'Malaria', 'KE', 'August', '2017', 859),
(361, 'Dengue', 'KW', 'August', '2017', 812),
(362, 'Malaria', 'KW', 'August', '2017', 656),
(363, 'Dengue', 'L', 'August', '2017', 1112),
(364, 'Malaria', 'L', 'August', '2017', 1298),
(365, 'Dengue', 'ME', 'August', '2017', 1993),
(366, 'Malaria', 'ME', 'August', '2017', 1031),
(367, 'Dengue', 'MW', 'August', '2017', 1412),
(368, 'Malaria', 'MW', 'August', '2017', 1043),
(369, 'Dengue', 'N', 'August', '2017', 691),
(370, 'Malaria', 'N', 'August', '2017', 893),
(371, 'Dengue', 'PN', 'August', '2017', 983),
(372, 'Malaria', 'PN', 'August', '2017', 841),
(373, 'Dengue', 'PS', 'August', '2017', 703),
(374, 'Malaria', 'PS', 'August', '2017', 940),
(375, 'Dengue', 'RN', 'August', '2017', 970),
(376, 'Malaria', 'RN', 'August', '2017', 825),
(377, 'Dengue', 'RS', 'August', '2017', 715),
(378, 'Malaria', 'RS', 'August', '2017', 876),
(379, 'Dengue', 'RC', 'August', '2017', 838),
(380, 'Malaria', 'RC', 'August', '2017', 691),
(381, 'Dengue', 'S', 'August', '2017', 862),
(382, 'Malaria', 'S', 'August', '2017', 879),
(383, 'Dengue', 'T', 'August', '2017', 773),
(384, 'Malaria', 'T', 'August', '2017', 735),
(385, 'Dengue', 'A', 'September', '2017', 816),
(386, 'Malaria', 'A', 'September', '2017', 888),
(387, 'Dengue', 'B', 'September', '2017', 928),
(388, 'Malaria', 'B', 'September', '2017', 689),
(389, 'Dengue', 'C', 'September', '2017', 718),
(390, 'Malaria', 'C', 'September', '2017', 675),
(391, 'Dengue', 'D', 'September', '2017', 518),
(392, 'Malaria', 'D', 'September', '2017', 713),
(393, 'Dengue', 'E', 'September', '2017', 856),
(394, 'Malaria', 'E', 'September', '2017', 764),
(395, 'Dengue', 'FN', 'September', '2017', 2000),
(396, 'Malaria', 'FN', 'September', '2017', 1217),
(397, 'Dengue', 'FS', 'September', '2017', 517),
(398, 'Malaria', 'FS', 'September', '2017', 647),
(399, 'Dengue', 'GN', 'September', '2017', 806),
(400, 'Malaria', 'GN', 'September', '2017', 628),
(401, 'Dengue', 'GS', 'September', '2017', 808),
(402, 'Malaria', 'GS', 'September', '2017', 832),
(403, 'Dengue', 'HE', 'September', '2017', 969),
(404, 'Malaria', 'HE', 'September', '2017', 979),
(405, 'Dengue', 'HW', 'September', '2017', 643),
(406, 'Malaria', 'HW', 'September', '2017', 773),
(407, 'Dengue', 'KE', 'September', '2017', 747),
(408, 'Malaria', 'KE', 'September', '2017', 635),
(409, 'Dengue', 'KW', 'September', '2017', 544),
(410, 'Malaria', 'KW', 'September', '2017', 673),
(411, 'Dengue', 'L', 'September', '2017', 1470),
(412, 'Malaria', 'L', 'September', '2017', 1793),
(413, 'Dengue', 'ME', 'September', '2017', 1778),
(414, 'Malaria', 'ME', 'September', '2017', 747),
(415, 'Dengue', 'MW', 'September', '2017', 749),
(416, 'Malaria', 'MW', 'September', '2017', 1435),
(417, 'Dengue', 'N', 'September', '2017', 954),
(418, 'Malaria', 'N', 'September', '2017', 795),
(419, 'Dengue', 'PN', 'September', '2017', 636),
(420, 'Malaria', 'PN', 'September', '2017', 656),
(421, 'Dengue', 'PS', 'September', '2017', 716),
(422, 'Malaria', 'PS', 'September', '2017', 804),
(423, 'Dengue', 'RN', 'September', '2017', 554),
(424, 'Malaria', 'RN', 'September', '2017', 779),
(425, 'Dengue', 'RS', 'September', '2017', 561),
(426, 'Malaria', 'RS', 'September', '2017', 519),
(427, 'Dengue', 'RC', 'September', '2017', 832),
(428, 'Malaria', 'RC', 'September', '2017', 771),
(429, 'Dengue', 'S', 'September', '2017', 932),
(430, 'Malaria', 'S', 'September', '2017', 969),
(431, 'Dengue', 'T', 'September', '2017', 885),
(432, 'Malaria', 'T', 'September', '2017', 503),
(433, 'Dengue', 'A', 'October', '2017', 456),
(434, 'Malaria', 'A', 'October', '2017', 499),
(435, 'Dengue', 'B', 'October', '2017', 371),
(436, 'Malaria', 'B', 'October', '2017', 327),
(437, 'Dengue', 'C', 'October', '2017', 469),
(438, 'Malaria', 'C', 'October', '2017', 367),
(439, 'Dengue', 'D', 'October', '2017', 465),
(440, 'Malaria', 'D', 'October', '2017', 466),
(441, 'Dengue', 'E', 'October', '2017', 340),
(442, 'Malaria', 'E', 'October', '2017', 311),
(443, 'Dengue', 'FN', 'October', '2017', 877),
(444, 'Malaria', 'FN', 'October', '2017', 997),
(445, 'Dengue', 'FS', 'October', '2017', 349),
(446, 'Malaria', 'FS', 'October', '2017', 423),
(447, 'Dengue', 'GN', 'October', '2017', 327),
(448, 'Malaria', 'GN', 'October', '2017', 463),
(449, 'Dengue', 'GS', 'October', '2017', 380),
(450, 'Malaria', 'GS', 'October', '2017', 492),
(451, 'Dengue', 'HE', 'October', '2017', 417),
(452, 'Malaria', 'HE', 'October', '2017', 385),
(453, 'Dengue', 'HW', 'October', '2017', 453),
(454, 'Malaria', 'HW', 'October', '2017', 374),
(455, 'Dengue', 'KE', 'October', '2017', 423),
(456, 'Malaria', 'KE', 'October', '2017', 438),
(457, 'Dengue', 'KW', 'October', '2017', 457),
(458, 'Malaria', 'KW', 'October', '2017', 438),
(459, 'Dengue', 'L', 'October', '2017', 710),
(460, 'Malaria', 'L', 'October', '2017', 795),
(461, 'Dengue', 'ME', 'October', '2017', 520),
(462, 'Malaria', 'ME', 'October', '2017', 754),
(463, 'Dengue', 'MW', 'October', '2017', 882),
(464, 'Malaria', 'MW', 'October', '2017', 822),
(465, 'Dengue', 'N', 'October', '2017', 471),
(466, 'Malaria', 'N', 'October', '2017', 472),
(467, 'Dengue', 'PN', 'October', '2017', 464),
(468, 'Malaria', 'PN', 'October', '2017', 435),
(469, 'Dengue', 'PS', 'October', '2017', 367),
(470, 'Malaria', 'PS', 'October', '2017', 400),
(471, 'Dengue', 'RN', 'October', '2017', 436),
(472, 'Malaria', 'RN', 'October', '2017', 381),
(473, 'Dengue', 'RS', 'October', '2017', 381),
(474, 'Malaria', 'RS', 'October', '2017', 377),
(475, 'Dengue', 'RC', 'October', '2017', 347),
(476, 'Malaria', 'RC', 'October', '2017', 499),
(477, 'Dengue', 'S', 'October', '2017', 344),
(478, 'Malaria', 'S', 'October', '2017', 434),
(479, 'Dengue', 'T', 'October', '2017', 440),
(480, 'Malaria', 'T', 'October', '2017', 382),
(481, 'Dengue', 'A', 'November', '2017', 439),
(482, 'Malaria', 'A', 'November', '2017', 385),
(483, 'Dengue', 'B', 'November', '2017', 499),
(484, 'Malaria', 'B', 'November', '2017', 434),
(485, 'Dengue', 'C', 'November', '2017', 342),
(486, 'Malaria', 'C', 'November', '2017', 397),
(487, 'Dengue', 'D', 'November', '2017', 379),
(488, 'Malaria', 'D', 'November', '2017', 436),
(489, 'Dengue', 'E', 'November', '2017', 388),
(490, 'Malaria', 'E', 'November', '2017', 345),
(491, 'Dengue', 'FN', 'November', '2017', 815),
(492, 'Malaria', 'FN', 'November', '2017', 962),
(493, 'Dengue', 'FS', 'November', '2017', 422),
(494, 'Malaria', 'FS', 'November', '2017', 498),
(495, 'Dengue', 'GN', 'November', '2017', 362),
(496, 'Malaria', 'GN', 'November', '2017', 384),
(497, 'Dengue', 'GS', 'November', '2017', 439),
(498, 'Malaria', 'GS', 'November', '2017', 470),
(499, 'Dengue', 'HE', 'November', '2017', 399),
(500, 'Malaria', 'HE', 'November', '2017', 406),
(501, 'Dengue', 'HW', 'November', '2017', 323),
(502, 'Malaria', 'HW', 'November', '2017', 339),
(503, 'Dengue', 'KE', 'November', '2017', 314),
(504, 'Malaria', 'KE', 'November', '2017', 428),
(505, 'Dengue', 'KW', 'November', '2017', 472),
(506, 'Malaria', 'KW', 'November', '2017', 338),
(507, 'Dengue', 'L', 'November', '2017', 870),
(508, 'Malaria', 'L', 'November', '2017', 899),
(509, 'Dengue', 'ME', 'November', '2017', 594),
(510, 'Malaria', 'ME', 'November', '2017', 955),
(511, 'Dengue', 'MW', 'November', '2017', 843),
(512, 'Malaria', 'MW', 'November', '2017', 995),
(513, 'Dengue', 'N', 'November', '2017', 380),
(514, 'Malaria', 'N', 'November', '2017', 382),
(515, 'Dengue', 'PN', 'November', '2017', 321),
(516, 'Malaria', 'PN', 'November', '2017', 487),
(517, 'Dengue', 'PS', 'November', '2017', 421),
(518, 'Malaria', 'PS', 'November', '2017', 374),
(519, 'Dengue', 'RN', 'November', '2017', 328),
(520, 'Malaria', 'RN', 'November', '2017', 323),
(521, 'Dengue', 'RS', 'November', '2017', 446),
(522, 'Malaria', 'RS', 'November', '2017', 439),
(523, 'Dengue', 'RC', 'November', '2017', 473),
(524, 'Malaria', 'RC', 'November', '2017', 393),
(525, 'Dengue', 'S', 'November', '2017', 454),
(526, 'Malaria', 'S', 'November', '2017', 418),
(527, 'Dengue', 'T', 'November', '2017', 394),
(528, 'Malaria', 'T', 'November', '2017', 367),
(529, 'Dengue', 'A', 'December', '2017', 274),
(530, 'Malaria', 'A', 'December', '2017', 169),
(531, 'Dengue', 'B', 'December', '2017', 159),
(532, 'Malaria', 'B', 'December', '2017', 267),
(533, 'Dengue', 'C', 'December', '2017', 208),
(534, 'Malaria', 'C', 'December', '2017', 150),
(535, 'Dengue', 'D', 'December', '2017', 121),
(536, 'Malaria', 'D', 'December', '2017', 276),
(537, 'Dengue', 'E', 'December', '2017', 205),
(538, 'Malaria', 'E', 'December', '2017', 252),
(539, 'Dengue', 'FN', 'December', '2017', 312),
(540, 'Malaria', 'FN', 'December', '2017', 401),
(541, 'Dengue', 'FS', 'December', '2017', 192),
(542, 'Malaria', 'FS', 'December', '2017', 132),
(543, 'Dengue', 'GN', 'December', '2017', 178),
(544, 'Malaria', 'GN', 'December', '2017', 236),
(545, 'Dengue', 'GS', 'December', '2017', 139),
(546, 'Malaria', 'GS', 'December', '2017', 200),
(547, 'Dengue', 'HE', 'December', '2017', 336),
(548, 'Malaria', 'HE', 'December', '2017', 143),
(549, 'Dengue', 'HW', 'December', '2017', 159),
(550, 'Malaria', 'HW', 'December', '2017', 256),
(551, 'Dengue', 'KE', 'December', '2017', 342),
(552, 'Malaria', 'KE', 'December', '2017', 247),
(553, 'Dengue', 'KW', 'December', '2017', 145),
(554, 'Malaria', 'KW', 'December', '2017', 313),
(555, 'Dengue', 'L', 'December', '2017', 433),
(556, 'Malaria', 'L', 'December', '2017', 319),
(557, 'Dengue', 'ME', 'December', '2017', 499),
(558, 'Malaria', 'ME', 'December', '2017', 450),
(559, 'Dengue', 'MW', 'December', '2017', 480),
(560, 'Malaria', 'MW', 'December', '2017', 381),
(561, 'Dengue', 'N', 'December', '2017', 160),
(562, 'Malaria', 'N', 'December', '2017', 307),
(563, 'Dengue', 'PN', 'December', '2017', 224),
(564, 'Malaria', 'PN', 'December', '2017', 223),
(565, 'Dengue', 'PS', 'December', '2017', 132),
(566, 'Malaria', 'PS', 'December', '2017', 174),
(567, 'Dengue', 'RN', 'December', '2017', 201),
(568, 'Malaria', 'RN', 'December', '2017', 248),
(569, 'Dengue', 'RS', 'December', '2017', 284),
(570, 'Malaria', 'RS', 'December', '2017', 153),
(571, 'Dengue', 'RC', 'December', '2017', 106),
(572, 'Malaria', 'RC', 'December', '2017', 320),
(573, 'Dengue', 'S', 'December', '2017', 145),
(574, 'Malaria', 'S', 'December', '2017', 328),
(575, 'Dengue', 'T', 'December', '2017', 340),
(576, 'Malaria', 'T', 'December', '2017', 225),
(577, 'Dengue', 'A', 'January', '2018', 155),
(578, 'Malaria', 'A', 'January', '2018', 307),
(579, 'Dengue', 'B', 'January', '2018', 178),
(580, 'Malaria', 'B', 'January', '2018', 233),
(581, 'Dengue', 'C', 'January', '2018', 129),
(582, 'Malaria', 'C', 'January', '2018', 144),
(583, 'Dengue', 'D', 'January', '2018', 296),
(584, 'Malaria', 'D', 'January', '2018', 121),
(585, 'Dengue', 'E', 'January', '2018', 175),
(586, 'Malaria', 'E', 'January', '2018', 225),
(587, 'Dengue', 'FN', 'January', '2018', 473),
(588, 'Malaria', 'FN', 'January', '2018', 442),
(589, 'Dengue', 'FS', 'January', '2018', 166),
(590, 'Malaria', 'FS', 'January', '2018', 170),
(591, 'Dengue', 'GN', 'January', '2018', 203),
(592, 'Malaria', 'GN', 'January', '2018', 112),
(593, 'Dengue', 'GS', 'January', '2018', 188),
(594, 'Malaria', 'GS', 'January', '2018', 292),
(595, 'Dengue', 'HE', 'January', '2018', 174),
(596, 'Malaria', 'HE', 'January', '2018', 130),
(597, 'Dengue', 'HW', 'January', '2018', 115),
(598, 'Malaria', 'HW', 'January', '2018', 122),
(599, 'Dengue', 'KE', 'January', '2018', 349),
(600, 'Malaria', 'KE', 'January', '2018', 126),
(601, 'Dengue', 'KW', 'January', '2018', 302),
(602, 'Malaria', 'KW', 'January', '2018', 196),
(603, 'Dengue', 'L', 'January', '2018', 332),
(604, 'Malaria', 'L', 'January', '2018', 468),
(605, 'Dengue', 'ME', 'January', '2018', 323),
(606, 'Malaria', 'ME', 'January', '2018', 441),
(607, 'Dengue', 'MW', 'January', '2018', 316),
(608, 'Malaria', 'MW', 'January', '2018', 441),
(609, 'Dengue', 'N', 'January', '2018', 302),
(610, 'Malaria', 'N', 'January', '2018', 304),
(611, 'Dengue', 'PN', 'January', '2018', 215),
(612, 'Malaria', 'PN', 'January', '2018', 229),
(613, 'Dengue', 'PS', 'January', '2018', 169),
(614, 'Malaria', 'PS', 'January', '2018', 179),
(615, 'Dengue', 'RN', 'January', '2018', 278),
(616, 'Malaria', 'RN', 'January', '2018', 244),
(617, 'Dengue', 'RS', 'January', '2018', 186),
(618, 'Malaria', 'RS', 'January', '2018', 146),
(619, 'Dengue', 'RC', 'January', '2018', 266),
(620, 'Malaria', 'RC', 'January', '2018', 199),
(621, 'Dengue', 'S', 'January', '2018', 129),
(622, 'Malaria', 'S', 'January', '2018', 300),
(623, 'Dengue', 'T', 'January', '2018', 314),
(624, 'Malaria', 'T', 'January', '2018', 208),
(625, 'Dengue', 'A', 'February', '2018', 46),
(626, 'Malaria', 'A', 'February', '2018', 132),
(627, 'Dengue', 'B', 'February', '2018', 127),
(628, 'Malaria', 'B', 'February', '2018', 127),
(629, 'Dengue', 'C', 'February', '2018', 71),
(630, 'Malaria', 'C', 'February', '2018', 125),
(631, 'Dengue', 'D', 'February', '2018', 75),
(632, 'Malaria', 'D', 'February', '2018', 116),
(633, 'Dengue', 'E', 'February', '2018', 88),
(634, 'Malaria', 'E', 'February', '2018', 140),
(635, 'Dengue', 'FN', 'February', '2018', 133),
(636, 'Malaria', 'FN', 'February', '2018', 165),
(637, 'Dengue', 'FS', 'February', '2018', 130),
(638, 'Malaria', 'FS', 'February', '2018', 146),
(639, 'Dengue', 'GN', 'February', '2018', 84),
(640, 'Malaria', 'GN', 'February', '2018', 145),
(641, 'Dengue', 'GS', 'February', '2018', 137),
(642, 'Malaria', 'GS', 'February', '2018', 37),
(643, 'Dengue', 'HE', 'February', '2018', 32),
(644, 'Malaria', 'HE', 'February', '2018', 48),
(645, 'Dengue', 'HW', 'February', '2018', 71),
(646, 'Malaria', 'HW', 'February', '2018', 51),
(647, 'Dengue', 'KE', 'February', '2018', 107),
(648, 'Malaria', 'KE', 'February', '2018', 150),
(649, 'Dengue', 'KW', 'February', '2018', 54),
(650, 'Malaria', 'KW', 'February', '2018', 123),
(651, 'Dengue', 'L', 'February', '2018', 169),
(652, 'Malaria', 'L', 'February', '2018', 120),
(653, 'Dengue', 'ME', 'February', '2018', 231),
(654, 'Malaria', 'ME', 'February', '2018', 114),
(655, 'Dengue', 'MW', 'February', '2018', 238),
(656, 'Malaria', 'MW', 'February', '2018', 289),
(657, 'Dengue', 'N', 'February', '2018', 89),
(658, 'Malaria', 'N', 'February', '2018', 133),
(659, 'Dengue', 'PN', 'February', '2018', 112),
(660, 'Malaria', 'PN', 'February', '2018', 120),
(661, 'Dengue', 'PS', 'February', '2018', 44),
(662, 'Malaria', 'PS', 'February', '2018', 86),
(663, 'Dengue', 'RN', 'February', '2018', 86),
(664, 'Malaria', 'RN', 'February', '2018', 55),
(665, 'Dengue', 'RS', 'February', '2018', 110),
(666, 'Malaria', 'RS', 'February', '2018', 83),
(667, 'Dengue', 'RC', 'February', '2018', 55),
(668, 'Malaria', 'RC', 'February', '2018', 78),
(669, 'Dengue', 'S', 'February', '2018', 63),
(670, 'Malaria', 'S', 'February', '2018', 110),
(671, 'Dengue', 'T', 'February', '2018', 54),
(672, 'Malaria', 'T', 'February', '2018', 90),
(673, 'Dengue', 'A', 'March', '2018', 102),
(674, 'Malaria', 'A', 'March', '2018', 81),
(675, 'Dengue', 'B', 'March', '2018', 45),
(676, 'Malaria', 'B', 'March', '2018', 139),
(677, 'Dengue', 'C', 'March', '2018', 72),
(678, 'Malaria', 'C', 'March', '2018', 121),
(679, 'Dengue', 'D', 'March', '2018', 150),
(680, 'Malaria', 'D', 'March', '2018', 117),
(681, 'Dengue', 'E', 'March', '2018', 116),
(682, 'Malaria', 'E', 'March', '2018', 124),
(683, 'Dengue', 'FN', 'March', '2018', 221),
(684, 'Malaria', 'FN', 'March', '2018', 163),
(685, 'Dengue', 'FS', 'March', '2018', 65),
(686, 'Malaria', 'FS', 'March', '2018', 96),
(687, 'Dengue', 'GN', 'March', '2018', 62),
(688, 'Malaria', 'GN', 'March', '2018', 114),
(689, 'Dengue', 'GS', 'March', '2018', 137),
(690, 'Malaria', 'GS', 'March', '2018', 55),
(691, 'Dengue', 'HE', 'March', '2018', 33),
(692, 'Malaria', 'HE', 'March', '2018', 107),
(693, 'Dengue', 'HW', 'March', '2018', 137),
(694, 'Malaria', 'HW', 'March', '2018', 135),
(695, 'Dengue', 'KE', 'March', '2018', 50),
(696, 'Malaria', 'KE', 'March', '2018', 98),
(697, 'Dengue', 'KW', 'March', '2018', 85),
(698, 'Malaria', 'KW', 'March', '2018', 105),
(699, 'Dengue', 'L', 'March', '2018', 297),
(700, 'Malaria', 'L', 'March', '2018', 136),
(701, 'Dengue', 'ME', 'March', '2018', 296),
(702, 'Malaria', 'ME', 'March', '2018', 131),
(703, 'Dengue', 'MW', 'March', '2018', 193),
(704, 'Malaria', 'MW', 'March', '2018', 180),
(705, 'Dengue', 'N', 'March', '2018', 143),
(706, 'Malaria', 'N', 'March', '2018', 148),
(707, 'Dengue', 'PN', 'March', '2018', 57),
(708, 'Malaria', 'PN', 'March', '2018', 58),
(709, 'Dengue', 'PS', 'March', '2018', 56),
(710, 'Malaria', 'PS', 'March', '2018', 78),
(711, 'Dengue', 'RN', 'March', '2018', 120),
(712, 'Malaria', 'RN', 'March', '2018', 118),
(713, 'Dengue', 'RS', 'March', '2018', 108),
(714, 'Malaria', 'RS', 'March', '2018', 82),
(715, 'Dengue', 'RC', 'March', '2018', 73),
(716, 'Malaria', 'RC', 'March', '2018', 119),
(717, 'Dengue', 'S', 'March', '2018', 90),
(718, 'Malaria', 'S', 'March', '2018', 77),
(719, 'Dengue', 'T', 'March', '2018', 83),
(720, 'Malaria', 'T', 'March', '2018', 86),
(721, 'Dengue', 'A', 'April', '2018', 69),
(722, 'Malaria', 'A', 'April', '2018', 128),
(723, 'Dengue', 'B', 'April', '2018', 44),
(724, 'Malaria', 'B', 'April', '2018', 108),
(725, 'Dengue', 'C', 'April', '2018', 131),
(726, 'Malaria', 'C', 'April', '2018', 49),
(727, 'Dengue', 'D', 'April', '2018', 124),
(728, 'Malaria', 'D', 'April', '2018', 87),
(729, 'Dengue', 'E', 'April', '2018', 128),
(730, 'Malaria', 'E', 'April', '2018', 132),
(731, 'Dengue', 'FN', 'April', '2018', 181),
(732, 'Malaria', 'FN', 'April', '2018', 273),
(733, 'Dengue', 'FS', 'April', '2018', 146),
(734, 'Malaria', 'FS', 'April', '2018', 58),
(735, 'Dengue', 'GN', 'April', '2018', 133),
(736, 'Malaria', 'GN', 'April', '2018', 78),
(737, 'Dengue', 'GS', 'April', '2018', 75),
(738, 'Malaria', 'GS', 'April', '2018', 121),
(739, 'Dengue', 'HE', 'April', '2018', 46),
(740, 'Malaria', 'HE', 'April', '2018', 86),
(741, 'Dengue', 'HW', 'April', '2018', 144),
(742, 'Malaria', 'HW', 'April', '2018', 38),
(743, 'Dengue', 'KE', 'April', '2018', 123),
(744, 'Malaria', 'KE', 'April', '2018', 106),
(745, 'Dengue', 'KW', 'April', '2018', 41),
(746, 'Malaria', 'KW', 'April', '2018', 136),
(747, 'Dengue', 'L', 'April', '2018', 207),
(748, 'Malaria', 'L', 'April', '2018', 182),
(749, 'Dengue', 'ME', 'April', '2018', 242),
(750, 'Malaria', 'ME', 'April', '2018', 281),
(751, 'Dengue', 'MW', 'April', '2018', 162),
(752, 'Malaria', 'MW', 'April', '2018', 173),
(753, 'Dengue', 'N', 'April', '2018', 120),
(754, 'Malaria', 'N', 'April', '2018', 64),
(755, 'Dengue', 'PN', 'April', '2018', 73),
(756, 'Malaria', 'PN', 'April', '2018', 104),
(757, 'Dengue', 'PS', 'April', '2018', 39),
(758, 'Malaria', 'PS', 'April', '2018', 59),
(759, 'Dengue', 'RN', 'April', '2018', 36),
(760, 'Malaria', 'RN', 'April', '2018', 97),
(761, 'Dengue', 'RS', 'April', '2018', 37),
(762, 'Malaria', 'RS', 'April', '2018', 94),
(763, 'Dengue', 'RC', 'April', '2018', 94),
(764, 'Malaria', 'RC', 'April', '2018', 112),
(765, 'Dengue', 'S', 'April', '2018', 30),
(766, 'Malaria', 'S', 'April', '2018', 63),
(767, 'Dengue', 'T', 'April', '2018', 61),
(768, 'Malaria', 'T', 'April', '2018', 110),
(769, 'Dengue', 'A', 'May', '2018', 138),
(770, 'Malaria', 'A', 'May', '2018', 59),
(771, 'Dengue', 'B', 'May', '2018', 98),
(772, 'Malaria', 'B', 'May', '2018', 31),
(773, 'Dengue', 'C', 'May', '2018', 68),
(774, 'Malaria', 'C', 'May', '2018', 54),
(775, 'Dengue', 'D', 'May', '2018', 56),
(776, 'Malaria', 'D', 'May', '2018', 98),
(777, 'Dengue', 'E', 'May', '2018', 120),
(778, 'Malaria', 'E', 'May', '2018', 35),
(779, 'Dengue', 'FN', 'May', '2018', 113),
(780, 'Malaria', 'FN', 'May', '2018', 206),
(781, 'Dengue', 'FS', 'May', '2018', 116),
(782, 'Malaria', 'FS', 'May', '2018', 40),
(783, 'Dengue', 'GN', 'May', '2018', 121),
(784, 'Malaria', 'GN', 'May', '2018', 76),
(785, 'Dengue', 'GS', 'May', '2018', 42),
(786, 'Malaria', 'GS', 'May', '2018', 137),
(787, 'Dengue', 'HE', 'May', '2018', 73),
(788, 'Malaria', 'HE', 'May', '2018', 74),
(789, 'Dengue', 'HW', 'May', '2018', 44),
(790, 'Malaria', 'HW', 'May', '2018', 33),
(791, 'Dengue', 'KE', 'May', '2018', 63),
(792, 'Malaria', 'KE', 'May', '2018', 35),
(793, 'Dengue', 'KW', 'May', '2018', 66),
(794, 'Malaria', 'KW', 'May', '2018', 131),
(795, 'Dengue', 'L', 'May', '2018', 203),
(796, 'Malaria', 'L', 'May', '2018', 177),
(797, 'Dengue', 'ME', 'May', '2018', 168),
(798, 'Malaria', 'ME', 'May', '2018', 290),
(799, 'Dengue', 'MW', 'May', '2018', 234),
(800, 'Malaria', 'MW', 'May', '2018', 258),
(801, 'Dengue', 'N', 'May', '2018', 137),
(802, 'Malaria', 'N', 'May', '2018', 120),
(803, 'Dengue', 'PN', 'May', '2018', 64),
(804, 'Malaria', 'PN', 'May', '2018', 65),
(805, 'Dengue', 'PS', 'May', '2018', 39),
(806, 'Malaria', 'PS', 'May', '2018', 58),
(807, 'Dengue', 'RN', 'May', '2018', 52),
(808, 'Malaria', 'RN', 'May', '2018', 145),
(809, 'Dengue', 'RS', 'May', '2018', 93),
(810, 'Malaria', 'RS', 'May', '2018', 149),
(811, 'Dengue', 'RC', 'May', '2018', 110),
(812, 'Malaria', 'RC', 'May', '2018', 77),
(813, 'Dengue', 'S', 'May', '2018', 52),
(814, 'Malaria', 'S', 'May', '2018', 60),
(815, 'Dengue', 'T', 'May', '2018', 100),
(816, 'Malaria', 'T', 'May', '2018', 132),
(817, 'Dengue', 'A', 'June', '2018', 941),
(818, 'Malaria', 'A', 'June', '2018', 702),
(819, 'Dengue', 'B', 'June', '2018', 633),
(820, 'Malaria', 'B', 'June', '2018', 619),
(821, 'Dengue', 'C', 'June', '2018', 554),
(822, 'Malaria', 'C', 'June', '2018', 768),
(823, 'Dengue', 'D', 'June', '2018', 534),
(824, 'Malaria', 'D', 'June', '2018', 793),
(825, 'Dengue', 'E', 'June', '2018', 790),
(826, 'Malaria', 'E', 'June', '2018', 706),
(827, 'Dengue', 'FN', 'June', '2018', 1366),
(828, 'Malaria', 'FN', 'June', '2018', 1342),
(829, 'Dengue', 'FS', 'June', '2018', 501),
(830, 'Malaria', 'FS', 'June', '2018', 964),
(831, 'Dengue', 'GN', 'June', '2018', 813),
(832, 'Malaria', 'GN', 'June', '2018', 664),
(833, 'Dengue', 'GS', 'June', '2018', 874),
(834, 'Malaria', 'GS', 'June', '2018', 666),
(835, 'Dengue', 'HE', 'June', '2018', 500),
(836, 'Malaria', 'HE', 'June', '2018', 554),
(837, 'Dengue', 'HW', 'June', '2018', 677),
(838, 'Malaria', 'HW', 'June', '2018', 523),
(839, 'Dengue', 'KE', 'June', '2018', 535),
(840, 'Malaria', 'KE', 'June', '2018', 920),
(841, 'Dengue', 'KW', 'June', '2018', 806),
(842, 'Malaria', 'KW', 'June', '2018', 859),
(843, 'Dengue', 'L', 'June', '2018', 1710),
(844, 'Malaria', 'L', 'June', '2018', 754),
(845, 'Dengue', 'ME', 'June', '2018', 702),
(846, 'Malaria', 'ME', 'June', '2018', 1596),
(847, 'Dengue', 'MW', 'June', '2018', 1389),
(848, 'Malaria', 'MW', 'June', '2018', 751),
(849, 'Dengue', 'N', 'June', '2018', 732),
(850, 'Malaria', 'N', 'June', '2018', 942),
(851, 'Dengue', 'PN', 'June', '2018', 564),
(852, 'Malaria', 'PN', 'June', '2018', 968),
(853, 'Dengue', 'PS', 'June', '2018', 693),
(854, 'Malaria', 'PS', 'June', '2018', 740),
(855, 'Dengue', 'RN', 'June', '2018', 882),
(856, 'Malaria', 'RN', 'June', '2018', 829),
(857, 'Dengue', 'RS', 'June', '2018', 568),
(858, 'Malaria', 'RS', 'June', '2018', 917),
(859, 'Dengue', 'RC', 'June', '2018', 682),
(860, 'Malaria', 'RC', 'June', '2018', 706),
(861, 'Dengue', 'S', 'June', '2018', 809),
(862, 'Malaria', 'S', 'June', '2018', 563),
(863, 'Dengue', 'T', 'June', '2018', 872),
(864, 'Malaria', 'T', 'June', '2018', 821),
(865, 'Dengue', 'A', 'July', '2018', 696),
(866, 'Malaria', 'A', 'July', '2018', 959),
(867, 'Dengue', 'B', 'July', '2018', 633),
(868, 'Malaria', 'B', 'July', '2018', 719),
(869, 'Dengue', 'C', 'July', '2018', 987),
(870, 'Malaria', 'C', 'July', '2018', 937),
(871, 'Dengue', 'D', 'July', '2018', 781),
(872, 'Malaria', 'D', 'July', '2018', 727),
(873, 'Dengue', 'E', 'July', '2018', 704),
(874, 'Malaria', 'E', 'July', '2018', 747),
(875, 'Dengue', 'FN', 'July', '2018', 1716),
(876, 'Malaria', 'FN', 'July', '2018', 1952),
(877, 'Dengue', 'FS', 'July', '2018', 570),
(878, 'Malaria', 'FS', 'July', '2018', 648),
(879, 'Dengue', 'GN', 'July', '2018', 579),
(880, 'Malaria', 'GN', 'July', '2018', 818),
(881, 'Dengue', 'GS', 'July', '2018', 503),
(882, 'Malaria', 'GS', 'July', '2018', 751),
(883, 'Dengue', 'HE', 'July', '2018', 787),
(884, 'Malaria', 'HE', 'July', '2018', 949),
(885, 'Dengue', 'HW', 'July', '2018', 967),
(886, 'Malaria', 'HW', 'July', '2018', 850),
(887, 'Dengue', 'KE', 'July', '2018', 561),
(888, 'Malaria', 'KE', 'July', '2018', 537),
(889, 'Dengue', 'KW', 'July', '2018', 679),
(890, 'Malaria', 'KW', 'July', '2018', 708),
(891, 'Dengue', 'L', 'July', '2018', 729),
(892, 'Malaria', 'L', 'July', '2018', 1015),
(893, 'Dengue', 'ME', 'July', '2018', 1770),
(894, 'Malaria', 'ME', 'July', '2018', 758),
(895, 'Dengue', 'MW', 'July', '2018', 1240),
(896, 'Malaria', 'MW', 'July', '2018', 1391),
(897, 'Dengue', 'N', 'July', '2018', 830),
(898, 'Malaria', 'N', 'July', '2018', 897),
(899, 'Dengue', 'PN', 'July', '2018', 631),
(900, 'Malaria', 'PN', 'July', '2018', 926),
(901, 'Dengue', 'PS', 'July', '2018', 532),
(902, 'Malaria', 'PS', 'July', '2018', 657),
(903, 'Dengue', 'RN', 'July', '2018', 555),
(904, 'Malaria', 'RN', 'July', '2018', 545),
(905, 'Dengue', 'RS', 'July', '2018', 616),
(906, 'Malaria', 'RS', 'July', '2018', 611),
(907, 'Dengue', 'RC', 'July', '2018', 744),
(908, 'Malaria', 'RC', 'July', '2018', 899),
(909, 'Dengue', 'S', 'July', '2018', 693),
(910, 'Malaria', 'S', 'July', '2018', 650),
(911, 'Dengue', 'T', 'July', '2018', 642),
(912, 'Malaria', 'T', 'July', '2018', 684),
(913, 'Dengue', 'A', 'August', '2018', 816),
(914, 'Malaria', 'A', 'August', '2018', 781),
(915, 'Dengue', 'B', 'August', '2018', 986),
(916, 'Malaria', 'B', 'August', '2018', 661),
(917, 'Dengue', 'C', 'August', '2018', 948),
(918, 'Malaria', 'C', 'August', '2018', 557),
(919, 'Dengue', 'D', 'August', '2018', 512),
(920, 'Malaria', 'D', 'August', '2018', 514),
(921, 'Dengue', 'E', 'August', '2018', 522),
(922, 'Malaria', 'E', 'August', '2018', 849),
(923, 'Dengue', 'FN', 'August', '2018', 1080),
(924, 'Malaria', 'FN', 'August', '2018', 1530),
(925, 'Dengue', 'FS', 'August', '2018', 961),
(926, 'Malaria', 'FS', 'August', '2018', 598),
(927, 'Dengue', 'GN', 'August', '2018', 870),
(928, 'Malaria', 'GN', 'August', '2018', 502),
(929, 'Dengue', 'GS', 'August', '2018', 714),
(930, 'Malaria', 'GS', 'August', '2018', 985),
(931, 'Dengue', 'HE', 'August', '2018', 982),
(932, 'Malaria', 'HE', 'August', '2018', 711),
(933, 'Dengue', 'HW', 'August', '2018', 870),
(934, 'Malaria', 'HW', 'August', '2018', 946),
(935, 'Dengue', 'KE', 'August', '2018', 943),
(936, 'Malaria', 'KE', 'August', '2018', 767),
(937, 'Dengue', 'KW', 'August', '2018', 630),
(938, 'Malaria', 'KW', 'August', '2018', 814),
(939, 'Dengue', 'L', 'August', '2018', 701),
(940, 'Malaria', 'L', 'August', '2018', 1848),
(941, 'Dengue', 'ME', 'August', '2018', 1421),
(942, 'Malaria', 'ME', 'August', '2018', 1792),
(943, 'Dengue', 'MW', 'August', '2018', 1256),
(944, 'Malaria', 'MW', 'August', '2018', 859),
(945, 'Dengue', 'N', 'August', '2018', 643),
(946, 'Malaria', 'N', 'August', '2018', 686),
(947, 'Dengue', 'PN', 'August', '2018', 866),
(948, 'Malaria', 'PN', 'August', '2018', 939),
(949, 'Dengue', 'PS', 'August', '2018', 712),
(950, 'Malaria', 'PS', 'August', '2018', 834),
(951, 'Dengue', 'RN', 'August', '2018', 543),
(952, 'Malaria', 'RN', 'August', '2018', 859),
(953, 'Dengue', 'RS', 'August', '2018', 642),
(954, 'Malaria', 'RS', 'August', '2018', 681),
(955, 'Dengue', 'RC', 'August', '2018', 995),
(956, 'Malaria', 'RC', 'August', '2018', 562),
(957, 'Dengue', 'S', 'August', '2018', 739),
(958, 'Malaria', 'S', 'August', '2018', 543),
(959, 'Dengue', 'T', 'August', '2018', 585),
(960, 'Malaria', 'T', 'August', '2018', 629),
(961, 'Dengue', 'A', 'September', '2018', 521),
(962, 'Malaria', 'A', 'September', '2018', 766),
(963, 'Dengue', 'B', 'September', '2018', 541),
(964, 'Malaria', 'B', 'September', '2018', 986),
(965, 'Dengue', 'C', 'September', '2018', 930),
(966, 'Malaria', 'C', 'September', '2018', 577),
(967, 'Dengue', 'D', 'September', '2018', 721),
(968, 'Malaria', 'D', 'September', '2018', 949),
(969, 'Dengue', 'E', 'September', '2018', 515),
(970, 'Malaria', 'E', 'September', '2018', 838),
(971, 'Dengue', 'FN', 'September', '2018', 1344),
(972, 'Malaria', 'FN', 'September', '2018', 1364),
(973, 'Dengue', 'FS', 'September', '2018', 604),
(974, 'Malaria', 'FS', 'September', '2018', 696),
(975, 'Dengue', 'GN', 'September', '2018', 601),
(976, 'Malaria', 'GN', 'September', '2018', 630),
(977, 'Dengue', 'GS', 'September', '2018', 874),
(978, 'Malaria', 'GS', 'September', '2018', 719),
(979, 'Dengue', 'HE', 'September', '2018', 997),
(980, 'Malaria', 'HE', 'September', '2018', 774),
(981, 'Dengue', 'HW', 'September', '2018', 737),
(982, 'Malaria', 'HW', 'September', '2018', 850),
(983, 'Dengue', 'KE', 'September', '2018', 602),
(984, 'Malaria', 'KE', 'September', '2018', 970),
(985, 'Dengue', 'KW', 'September', '2018', 739),
(986, 'Malaria', 'KW', 'September', '2018', 857),
(987, 'Dengue', 'L', 'September', '2018', 1665),
(988, 'Malaria', 'L', 'September', '2018', 1505),
(989, 'Dengue', 'ME', 'September', '2018', 1601),
(990, 'Malaria', 'ME', 'September', '2018', 1169),
(991, 'Dengue', 'MW', 'September', '2018', 1399),
(992, 'Malaria', 'MW', 'September', '2018', 1449),
(993, 'Dengue', 'N', 'September', '2018', 514),
(994, 'Malaria', 'N', 'September', '2018', 839),
(995, 'Dengue', 'PN', 'September', '2018', 804),
(996, 'Malaria', 'PN', 'September', '2018', 839),
(997, 'Dengue', 'PS', 'September', '2018', 622),
(998, 'Malaria', 'PS', 'September', '2018', 885),
(999, 'Dengue', 'RN', 'September', '2018', 701),
(1000, 'Malaria', 'RN', 'September', '2018', 922),
(1001, 'Dengue', 'RS', 'September', '2018', 942),
(1002, 'Malaria', 'RS', 'September', '2018', 960),
(1003, 'Dengue', 'RC', 'September', '2018', 783),
(1004, 'Malaria', 'RC', 'September', '2018', 837),
(1005, 'Dengue', 'S', 'September', '2018', 566),
(1006, 'Malaria', 'S', 'September', '2018', 973),
(1007, 'Dengue', 'T', 'September', '2018', 543),
(1008, 'Malaria', 'T', 'September', '2018', 551),
(1009, 'Dengue', 'A', 'October', '2018', 438),
(1010, 'Malaria', 'A', 'October', '2018', 449),
(1011, 'Dengue', 'B', 'October', '2018', 459),
(1012, 'Malaria', 'B', 'October', '2018', 422),
(1013, 'Dengue', 'C', 'October', '2018', 445),
(1014, 'Malaria', 'C', 'October', '2018', 422),
(1015, 'Dengue', 'D', 'October', '2018', 323),
(1016, 'Malaria', 'D', 'October', '2018', 435),
(1017, 'Dengue', 'E', 'October', '2018', 334),
(1018, 'Malaria', 'E', 'October', '2018', 321),
(1019, 'Dengue', 'FN', 'October', '2018', 922),
(1020, 'Malaria', 'FN', 'October', '2018', 740),
(1021, 'Dengue', 'FS', 'October', '2018', 485),
(1022, 'Malaria', 'FS', 'October', '2018', 471),
(1023, 'Dengue', 'GN', 'October', '2018', 410),
(1024, 'Malaria', 'GN', 'October', '2018', 374),
(1025, 'Dengue', 'GS', 'October', '2018', 310),
(1026, 'Malaria', 'GS', 'October', '2018', 397),
(1027, 'Dengue', 'HE', 'October', '2018', 415),
(1028, 'Malaria', 'HE', 'October', '2018', 386),
(1029, 'Dengue', 'HW', 'October', '2018', 363),
(1030, 'Malaria', 'HW', 'October', '2018', 301),
(1031, 'Dengue', 'KE', 'October', '2018', 337),
(1032, 'Malaria', 'KE', 'October', '2018', 349),
(1033, 'Dengue', 'KW', 'October', '2018', 457),
(1034, 'Malaria', 'KW', 'October', '2018', 335),
(1035, 'Dengue', 'L', 'October', '2018', 923),
(1036, 'Malaria', 'L', 'October', '2018', 744),
(1037, 'Dengue', 'ME', 'October', '2018', 695),
(1038, 'Malaria', 'ME', 'October', '2018', 993),
(1039, 'Dengue', 'MW', 'October', '2018', 540),
(1040, 'Malaria', 'MW', 'October', '2018', 615),
(1041, 'Dengue', 'N', 'October', '2018', 437),
(1042, 'Malaria', 'N', 'October', '2018', 438),
(1043, 'Dengue', 'PN', 'October', '2018', 335),
(1044, 'Malaria', 'PN', 'October', '2018', 439),
(1045, 'Dengue', 'PS', 'October', '2018', 473),
(1046, 'Malaria', 'PS', 'October', '2018', 307),
(1047, 'Dengue', 'RN', 'October', '2018', 313),
(1048, 'Malaria', 'RN', 'October', '2018', 464),
(1049, 'Dengue', 'RS', 'October', '2018', 394),
(1050, 'Malaria', 'RS', 'October', '2018', 380),
(1051, 'Dengue', 'RC', 'October', '2018', 385),
(1052, 'Malaria', 'RC', 'October', '2018', 456),
(1053, 'Dengue', 'S', 'October', '2018', 461),
(1054, 'Malaria', 'S', 'October', '2018', 477),
(1055, 'Dengue', 'T', 'October', '2018', 437),
(1056, 'Malaria', 'T', 'October', '2018', 336),
(1057, 'Dengue', 'A', 'November', '2018', 380),
(1058, 'Malaria', 'A', 'November', '2018', 426),
(1059, 'Dengue', 'B', 'November', '2018', 336),
(1060, 'Malaria', 'B', 'November', '2018', 388),
(1061, 'Dengue', 'C', 'November', '2018', 329),
(1062, 'Malaria', 'C', 'November', '2018', 401),
(1063, 'Dengue', 'D', 'November', '2018', 330),
(1064, 'Malaria', 'D', 'November', '2018', 335),
(1065, 'Dengue', 'E', 'November', '2018', 362),
(1066, 'Malaria', 'E', 'November', '2018', 483),
(1067, 'Dengue', 'FN', 'November', '2018', 779),
(1068, 'Malaria', 'FN', 'November', '2018', 861),
(1069, 'Dengue', 'FS', 'November', '2018', 412),
(1070, 'Malaria', 'FS', 'November', '2018', 467),
(1071, 'Dengue', 'GN', 'November', '2018', 303),
(1072, 'Malaria', 'GN', 'November', '2018', 410),
(1073, 'Dengue', 'GS', 'November', '2018', 353),
(1074, 'Malaria', 'GS', 'November', '2018', 302),
(1075, 'Dengue', 'HE', 'November', '2018', 496),
(1076, 'Malaria', 'HE', 'November', '2018', 363),
(1077, 'Dengue', 'HW', 'November', '2018', 423),
(1078, 'Malaria', 'HW', 'November', '2018', 320),
(1079, 'Dengue', 'KE', 'November', '2018', 323),
(1080, 'Malaria', 'KE', 'November', '2018', 423),
(1081, 'Dengue', 'KW', 'November', '2018', 369),
(1082, 'Malaria', 'KW', 'November', '2018', 340),
(1083, 'Dengue', 'L', 'November', '2018', 758),
(1084, 'Malaria', 'L', 'November', '2018', 671),
(1085, 'Dengue', 'ME', 'November', '2018', 884),
(1086, 'Malaria', 'ME', 'November', '2018', 681),
(1087, 'Dengue', 'MW', 'November', '2018', 933),
(1088, 'Malaria', 'MW', 'November', '2018', 831),
(1089, 'Dengue', 'N', 'November', '2018', 402),
(1090, 'Malaria', 'N', 'November', '2018', 327),
(1091, 'Dengue', 'PN', 'November', '2018', 308),
(1092, 'Malaria', 'PN', 'November', '2018', 439),
(1093, 'Dengue', 'PS', 'November', '2018', 423),
(1094, 'Malaria', 'PS', 'November', '2018', 467),
(1095, 'Dengue', 'RN', 'November', '2018', 372),
(1096, 'Malaria', 'RN', 'November', '2018', 489),
(1097, 'Dengue', 'RS', 'November', '2018', 480),
(1098, 'Malaria', 'RS', 'November', '2018', 319),
(1099, 'Dengue', 'RC', 'November', '2018', 332),
(1100, 'Malaria', 'RC', 'November', '2018', 431),
(1101, 'Dengue', 'S', 'November', '2018', 372),
(1102, 'Malaria', 'S', 'November', '2018', 455),
(1103, 'Dengue', 'T', 'November', '2018', 357),
(1104, 'Malaria', 'T', 'November', '2018', 375),
(1105, 'Dengue', 'A', 'December', '2018', 192),
(1106, 'Malaria', 'A', 'December', '2018', 262),
(1107, 'Dengue', 'B', 'December', '2018', 319),
(1108, 'Malaria', 'B', 'December', '2018', 163),
(1109, 'Dengue', 'C', 'December', '2018', 303),
(1110, 'Malaria', 'C', 'December', '2018', 140),
(1111, 'Dengue', 'D', 'December', '2018', 226),
(1112, 'Malaria', 'D', 'December', '2018', 269),
(1113, 'Dengue', 'E', 'December', '2018', 160),
(1114, 'Malaria', 'E', 'December', '2018', 349),
(1115, 'Dengue', 'FN', 'December', '2018', 310),
(1116, 'Malaria', 'FN', 'December', '2018', 336),
(1117, 'Dengue', 'FS', 'December', '2018', 130),
(1118, 'Malaria', 'FS', 'December', '2018', 209),
(1119, 'Dengue', 'GN', 'December', '2018', 329),
(1120, 'Malaria', 'GN', 'December', '2018', 329),
(1121, 'Dengue', 'GS', 'December', '2018', 191),
(1122, 'Malaria', 'GS', 'December', '2018', 239),
(1123, 'Dengue', 'HE', 'December', '2018', 229),
(1124, 'Malaria', 'HE', 'December', '2018', 329),
(1125, 'Dengue', 'HW', 'December', '2018', 108),
(1126, 'Malaria', 'HW', 'December', '2018', 130),
(1127, 'Dengue', 'KE', 'December', '2018', 256),
(1128, 'Malaria', 'KE', 'December', '2018', 344),
(1129, 'Dengue', 'KW', 'December', '2018', 202),
(1130, 'Malaria', 'KW', 'December', '2018', 127);
INSERT INTO `chart_demo` (`id`, `disease`, `region`, `month`, `year`, `number`) VALUES
(1131, 'Dengue', 'L', 'December', '2018', 421),
(1132, 'Malaria', 'L', 'December', '2018', 426),
(1133, 'Dengue', 'ME', 'December', '2018', 386),
(1134, 'Malaria', 'ME', 'December', '2018', 497),
(1135, 'Dengue', 'MW', 'December', '2018', 364),
(1136, 'Malaria', 'MW', 'December', '2018', 359),
(1137, 'Dengue', 'N', 'December', '2018', 228),
(1138, 'Malaria', 'N', 'December', '2018', 340),
(1139, 'Dengue', 'PN', 'December', '2018', 345),
(1140, 'Malaria', 'PN', 'December', '2018', 114),
(1141, 'Dengue', 'PS', 'December', '2018', 178),
(1142, 'Malaria', 'PS', 'December', '2018', 149),
(1143, 'Dengue', 'RN', 'December', '2018', 100),
(1144, 'Malaria', 'RN', 'December', '2018', 176),
(1145, 'Dengue', 'RS', 'December', '2018', 172),
(1146, 'Malaria', 'RS', 'December', '2018', 346),
(1147, 'Dengue', 'RC', 'December', '2018', 208),
(1148, 'Malaria', 'RC', 'December', '2018', 177),
(1149, 'Dengue', 'S', 'December', '2018', 289),
(1150, 'Malaria', 'S', 'December', '2018', 282),
(1151, 'Dengue', 'T', 'December', '2018', 298),
(1152, 'Malaria', 'T', 'December', '2018', 270);

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `clinic_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `license_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `lattitude` float NOT NULL,
  `longitude` float NOT NULL,
  `verified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doc_license_no` varchar(255) NOT NULL,
  `work_exp` int(11) NOT NULL,
  `summary` varchar(10000) NOT NULL,
  `doc1` varchar(5000) NOT NULL,
  `doc2` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `user_id`, `doc_license_no`, `work_exp`, `summary`, `doc1`, `doc2`) VALUES
(6, 24, '123456', 0, 'ddd', 'priya24doc1.pdf', 'priya24doc2.pdf'),
(8, 26, '1234567', 0, 'yes', 'Athul26doc1.pdf', 'Athul26doc2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_mapped_hospital`
--

CREATE TABLE `doctor_mapped_hospital` (
  `id` int(11) NOT NULL,
  `hospital_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `timing_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dr_request`
--

CREATE TABLE `dr_request` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `hospital_id` int(11) DEFAULT NULL,
  `initiated_by` int(11) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dr_request`
--

INSERT INTO `dr_request` (`id`, `doctor_id`, `hospital_id`, `initiated_by`, `stat`) VALUES
(4, 6, 6, 0, 1),
(5, 8, 6, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `government_policies`
--

CREATE TABLE `government_policies` (
  `policy_id` int(11) NOT NULL,
  `policy_name` varchar(255) NOT NULL,
  `documents_required` text NOT NULL,
  `issue_authority` varchar(255) NOT NULL,
  `manager_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospital_id` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `hospital_name` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `verified` int(11) NOT NULL,
  `lat` varchar(500) NOT NULL,
  `longitude` varchar(500) NOT NULL,
  `doc1` varchar(5000) NOT NULL,
  `doc2` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `manager_id`, `hospital_name`, `city`, `state`, `pincode`, `created_at`, `address`, `phone`, `verified`, `lat`, `longitude`, `doc1`, `doc2`) VALUES
(6, 21, 'HMS Hospital', 'Mumbai', 'Maharashtra', '400080', '2019-10-02 16:04:37', 'Thane, near station', '22256874', 1, '', '', 'Rajpreet Singh21doc1.py', 'Rajpreet Singh21doc2.py'),
(7, 25, 'Rajpreet Singh', 'Mumbai', '', '400080', '2019-10-04 03:17:13', 'Building Number 4, Flat Number 28, B-wing, Vaishali Park, Vaishali Nagar, Mulund West,, Balrajeshwar Road', 'rajpreet24033@gmail.com', 1, '', '', 'Rajpreet Singh25doc1.pdf', 'Rajpreet Singh25doc2.pdf'),
(8, 25, 'Rajpreet Singh', 'Mumbai', '', '400080', '2019-10-06 12:30:10', 'Building Number 4, Flat Number 28, B-wing, Vaishali Park, Vaishali Nagar, Mulund West,, Balrajeshwar Road', 'rajpreet24033@gmail.com', 0, '', '', 'Rajpreet Singh25doc1.pdf', 'Rajpreet Singh25doc2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `languages` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `languages`) VALUES
(1, 'Hindi'),
(2, 'Punjabi'),
(3, 'Gujurati');

-- --------------------------------------------------------

--
-- Table structure for table `languages_dr_mapped`
--

CREATE TABLE `languages_dr_mapped` (
  `id` int(11) NOT NULL,
  `languageid` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages_dr_mapped`
--

INSERT INTO `languages_dr_mapped` (`id`, `languageid`, `doctor_id`) VALUES
(1, 1, 6),
(2, 2, 6),
(3, 1, 8),
(4, 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `medical_speciality`
--

CREATE TABLE `medical_speciality` (
  `medical_speciality_id` int(11) NOT NULL,
  `medical_speciality_name` varchar(255) NOT NULL,
  `medical_speciality_idd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_speciality`
--

INSERT INTO `medical_speciality` (`medical_speciality_id`, `medical_speciality_name`, `medical_speciality_idd`) VALUES
(1, 'MBBS', 1),
(2, 'BDA', 2);

-- --------------------------------------------------------

--
-- Table structure for table `medical_speciality_doctor_mapped`
--

CREATE TABLE `medical_speciality_doctor_mapped` (
  `id` int(11) NOT NULL,
  `medical_speciality_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `certiid` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_speciality_doctor_mapped`
--

INSERT INTO `medical_speciality_doctor_mapped` (`id`, `medical_speciality_id`, `doctor_id`, `certiid`) VALUES
(5, 1, 6, '123456'),
(7, 2, 6, '45132'),
(8, 1, 8, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` int(11) NOT NULL,
  `medicine_name` varchar(1000) DEFAULT NULL,
  `company` varchar(1000) DEFAULT NULL,
  `details` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `medicine_name`, `company`, `details`) VALUES
(1, 'Crocin', 'xyz', 'cold\r\n'),
(2, 'vicks', 'xyz', 'cold'),
(3, 'combiflam', 'xyz', 'cold');

-- --------------------------------------------------------

--
-- Table structure for table `med_map`
--

CREATE TABLE `med_map` (
  `id` int(11) NOT NULL,
  `medicine_id` int(11) DEFAULT NULL,
  `pharmacy_id` int(11) DEFAULT NULL,
  `ccount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `med_map`
--

INSERT INTO `med_map` (`id`, `medicine_id`, `pharmacy_id`, `ccount`) VALUES
(1, 1, 2, 0),
(2, 2, 2, 0),
(3, 3, 2, 299);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('0572294656b8e4b894e8d1fff6b771635b41e3eef12fe0d1c58262b5c4a5734093f81af46c7ccb2b', 2, 8, NULL, '[]', 0, '2019-09-19 09:47:13', '2019-09-19 09:47:13', '2020-09-19 15:17:13'),
('08a4fa5c6d53866501fbaf8e5e347db79718edf8d0a6217e0fb42e6551232f473514bf88defe709d', NULL, 8, NULL, '[]', 0, '2019-10-06 12:25:48', '2019-10-06 12:25:48', '2020-10-06 17:55:48'),
('0a399c4a0a9e59636dd8b9595e35028a15a12878fc1da346adade07e472adcbe3a72e03cbb5f1cf0', NULL, 8, NULL, '[]', 0, '2019-09-24 09:32:51', '2019-09-24 09:32:51', '2020-09-24 15:02:51'),
('0c048c5a6c1718d712012bf8e0e12c7c21b86786169f6684a98c1a3c1abedf05292cc5943c6bf15a', NULL, 8, NULL, '[]', 0, '2019-09-27 12:34:57', '2019-09-27 12:34:57', '2020-09-27 18:04:57'),
('0d1e46e4e01366f54f16713732098fcf9d1d5f382e941e8caea0b262c51b7d3bbbb2d7f154d04e80', NULL, 8, NULL, '[]', 0, '2019-09-27 10:43:29', '2019-09-27 10:43:29', '2020-09-27 16:13:29'),
('0d5876a643e7c94ebaa315ae0038be13431ed04e3e992c1e63ef5559cc329ea719bf3e90c9428a19', NULL, 8, NULL, '[]', 0, '2019-09-24 10:04:41', '2019-09-24 10:04:41', '2020-09-24 15:34:41'),
('187f2a763e86d52ac9c14c7c94c7291b7b5059cc3473c96fbfb178dc4a59afd24e5b481aa5387eea', NULL, 8, NULL, '[]', 0, '2019-10-03 13:34:33', '2019-10-03 13:34:33', '2020-10-03 19:04:33'),
('225b799d91c06bb146d3ef967b55c17b169db13a72cdc0b6e87a8426efcfc3ef2dd42e0443c087ae', NULL, 8, NULL, '[]', 0, '2019-09-24 09:41:59', '2019-09-24 09:41:59', '2020-09-24 15:11:59'),
('239c59c52f92f524d4fe2322273c8cce2ef6444b1a63ea68f029367e13b1054403fed585bda5d975', NULL, 8, NULL, '[]', 0, '2019-09-30 13:30:12', '2019-09-30 13:30:12', '2020-09-30 19:00:12'),
('24100c737528c5980611046dcbda2f4a110f018c1c4f8409dd5a15c5330653fd04bc59059397c59f', 1, 8, NULL, '[]', 0, '2019-09-19 09:27:03', '2019-09-19 09:27:03', '2020-09-19 14:57:03'),
('243f90d25fddc9460ad2e44de3dc9ae32b9baa5319e9d8a7cd8c752c5ca6ce8a8071533cf49e42a2', NULL, 8, NULL, '[]', 0, '2019-09-28 04:58:34', '2019-09-28 04:58:34', '2020-09-28 10:28:34'),
('25163651f8ebd4671b2ef7b1d8f93d054516c53b8c527153ce726313c676de2b81fd1109829c02d1', NULL, 8, NULL, '[]', 0, '2019-09-27 10:48:41', '2019-09-27 10:48:41', '2020-09-27 16:18:41'),
('27081b21725a7905b1860a969b4b7f1e88360d66804cae94ed80109372c68c532593a5e391faaf85', NULL, 8, NULL, '[]', 0, '2019-09-24 09:31:30', '2019-09-24 09:31:30', '2020-09-24 15:01:30'),
('27f13e4bdca30729f089c6a91ab7223a95e191563cde9a7952a0d65d5521e4331b9eaa2735ced90d', NULL, 8, NULL, '[]', 0, '2019-09-27 10:05:55', '2019-09-27 10:05:55', '2020-09-27 15:35:55'),
('2ce16cb220a3b59ca51a51635216ef140042452bdb7f5f752e2a1ee4ec68a5b344b3db7620231e94', NULL, 8, NULL, '[]', 0, '2019-10-01 08:23:33', '2019-10-01 08:23:33', '2020-10-01 13:53:33'),
('31c23fff7e677ba458cf46af8f35b770e1886fe73ca18990c55b274279480dfd30016bd67047092f', NULL, 8, NULL, '[]', 0, '2019-10-06 12:30:58', '2019-10-06 12:30:58', '2020-10-06 18:00:58'),
('328828aa92a4dedd9ba80910e28f53fbcdacc10399edadd5a8d04c62feed3a9bb838989d485d33bc', NULL, 8, NULL, '[]', 0, '2019-09-27 11:11:10', '2019-09-27 11:11:10', '2020-09-27 16:41:10'),
('32ba318d62c2eea0feafebed68bbca2d73d42aa1bf55ca0ffb8c081c131e667e47af3b8076114bb3', NULL, 8, NULL, '[]', 0, '2019-09-24 09:32:23', '2019-09-24 09:32:23', '2020-09-24 15:02:23'),
('35fce76f0aedcfabcf4140b8a4bc5dc8c67cfa2285d46f54f4bc00a0196452cbf4d1ed7062da6abc', NULL, 8, NULL, '[]', 0, '2019-09-24 12:27:32', '2019-09-24 12:27:32', '2020-09-24 17:57:32'),
('3665899882e71b84690c88d19104fba4bedc69892305f577323d4e8a2ba9de9c1ae6df26042596c3', NULL, 8, NULL, '[]', 0, '2019-09-27 11:11:19', '2019-09-27 11:11:19', '2020-09-27 16:41:19'),
('37581a107dc2168216187b9ca413b08fea7d87528f4bf8668debb72e6d76b656409f7ac882753903', NULL, 8, NULL, '[]', 0, '2019-09-24 10:35:27', '2019-09-24 10:35:27', '2020-09-24 16:05:27'),
('38aab38b943aaf8fb2839804b4cb23d7a9a7ced1221326d2cef8c857a94fdf2a1ff36502d781f602', NULL, 8, NULL, '[]', 0, '2019-10-03 08:43:18', '2019-10-03 08:43:18', '2020-10-03 14:13:18'),
('3bb29c78e67fa7fd0b4f0f449c1db2026083201476105b1e30e6270be84f6946842901e2739a2758', NULL, 8, NULL, '[]', 0, '2019-09-27 15:27:53', '2019-09-27 15:27:53', '2020-09-27 20:57:53'),
('3db1a23e8c2cedef8b68342a493980708610b95dbec8cfdb2232edce29bb3a72f00f3a7e8cd44949', NULL, 8, NULL, '[]', 0, '2019-09-24 10:24:33', '2019-09-24 10:24:33', '2020-09-24 15:54:33'),
('3dccd79624eeaf8fab3cffb476548cdb1f7dae9d87f22faa35998a702f28c1270e159a58035edd12', NULL, 8, NULL, '[]', 0, '2019-09-24 10:22:10', '2019-09-24 10:22:10', '2020-09-24 15:52:10'),
('41a62d260b4ad25652690804603684caf24aaa2a520b4f57b26c4c40c2b6124480be04aa86762ca9', NULL, 8, NULL, '[]', 0, '2019-09-24 10:31:09', '2019-09-24 10:31:09', '2020-09-24 16:01:09'),
('430d1abb2d29163eb2cced9106581fde1f12d6e074c583f504f31512c6a82edf39092ccd11cf1556', NULL, 8, NULL, '[]', 0, '2019-09-27 10:48:13', '2019-09-27 10:48:13', '2020-09-27 16:18:13'),
('45f0c7e222bb6fcb5f2f69f60adc6a5cb9b7420cd4301ba40ee287f6e3bb31205922c23ae5917fa6', NULL, 8, NULL, '[]', 0, '2019-09-24 09:35:11', '2019-09-24 09:35:11', '2020-09-24 15:05:11'),
('491c487c72b4715f40a02fb51a3809a236681dcbec213153a9da5d8c881f3cbf591c7d1dd481cf40', NULL, 8, NULL, '[]', 0, '2019-09-30 13:22:59', '2019-09-30 13:22:59', '2020-09-30 18:52:59'),
('4a98cbd9536e8cd9f02034105ab3ff7a079d47ddb8878d77b5f9d1e07cfebcf05df5ddc74c7c0de8', NULL, 8, NULL, '[]', 0, '2019-09-24 09:32:39', '2019-09-24 09:32:39', '2020-09-24 15:02:39'),
('4d179cddc4d5042cfdeaf859af3719629fcd31137dadd1ce05d0dfbf3b21eb3f7375b9397e1bc890', NULL, 8, NULL, '[]', 0, '2019-09-24 09:41:11', '2019-09-24 09:41:11', '2020-09-24 15:11:11'),
('4dc2dd6018597bb1039a345c5d12180edcd192dd214a06e53651b28de2cff469317553752ef34e83', NULL, 8, NULL, '[]', 0, '2019-10-03 21:47:37', '2019-10-03 21:47:37', '2020-10-04 03:17:37'),
('4e1b3d6c8665887adb715f371e735b830eae19541b062f02fa685dbbf22aa0456d040a90ff5220e6', NULL, 8, NULL, '[]', 0, '2019-09-27 14:48:33', '2019-09-27 14:48:33', '2020-09-27 20:18:33'),
('513682aa07e894ef61692c98ad07153ba9565f311f2df06b4bc64c8c837952f77619c66e6dd01351', NULL, 8, NULL, '[]', 0, '2019-09-28 14:34:03', '2019-09-28 14:34:03', '2020-09-28 20:04:03'),
('51b1f1254869f562ee6818ba5038f25f34a0ccd024c0dc1e302d5c3e27885bc5b0d94cac477568e2', NULL, 8, NULL, '[]', 0, '2019-09-24 09:35:39', '2019-09-24 09:35:39', '2020-09-24 15:05:39'),
('53bd911b89b449660a27db609a50dd0fa2312d69dadaa56d5573b448ca9dc8bc206c0e1b59d880d7', NULL, 8, NULL, '[]', 0, '2019-09-24 09:33:09', '2019-09-24 09:33:09', '2020-09-24 15:03:09'),
('5561ee49e3aa2ea233a610d584bee7c0c36540b2d17ca3f8f70010c5b7488e4be51c47cc891e1178', NULL, 8, NULL, '[]', 0, '2019-09-27 10:09:32', '2019-09-27 10:09:32', '2020-09-27 15:39:32'),
('584d7d867b046936f2eadc35e70b5afd47743f473bb0ca58dc0c7a2c9c0a24b82fb03b35d4a966b9', NULL, 8, NULL, '[]', 0, '2019-09-27 23:30:07', '2019-09-27 23:30:07', '2020-09-28 05:00:07'),
('588dfca47f97ad8553f8e850c2e243b3b57114183439d829dd49b3e54744fc84de4640f04a545166', NULL, 8, NULL, '[]', 0, '2019-10-03 15:42:51', '2019-10-03 15:42:51', '2020-10-03 21:12:51'),
('5b3474b8797a4cb379aa11be0061f285f9e393048b6310dae00f0dafd6170883511cb6b170991ffd', NULL, 8, NULL, '[]', 0, '2019-10-03 08:41:53', '2019-10-03 08:41:53', '2020-10-03 14:11:53'),
('5f1bcf36d528d17fb8362afb0ee9c3b33e45e41e1add32cb48435d9f120d8f0631936074ea781166', NULL, 8, NULL, '[]', 0, '2019-09-24 09:38:51', '2019-09-24 09:38:51', '2020-09-24 15:08:51'),
('61873758a176682d260a5c5923f4247ab6d9a3afb72763430a2ec1789aaffd04a994999bc5a26a4b', NULL, 8, NULL, '[]', 0, '2019-09-27 15:44:52', '2019-09-27 15:44:52', '2020-09-27 21:14:52'),
('61909d18a081cc2e817e3e619245966956d739350369c090dc06ba0e9ba29106f38b4c9e9fb0b153', NULL, 8, NULL, '[]', 0, '2019-09-27 10:05:57', '2019-09-27 10:05:57', '2020-09-27 15:35:57'),
('6263512200fdfc1f1e0747a635930951c057c34f22ffb87d4d6d44bd98a5577faaf914ebb4013514', 1, 8, NULL, '[]', 0, '2019-09-19 05:44:22', '2019-09-19 05:44:22', '2020-09-19 11:14:22'),
('66d47f3c98e2bca14eed27d09b7e15350cf15277de85148d0e3fee4712cf34ac341c16dcd0c49d27', NULL, 8, NULL, '[]', 0, '2019-09-24 09:29:28', '2019-09-24 09:29:28', '2020-09-24 14:59:28'),
('67569ba182c96c903fc98e65ea9aec792807b7306000ba9bbb30ef70c4fa4b6e44776226e5d39755', NULL, 8, NULL, '[]', 0, '2019-09-27 09:33:53', '2019-09-27 09:33:53', '2020-09-27 15:03:53'),
('69c97e5f7453c2d452aee2ba32d11281bd0d8fb0133f399216e0352777e3b330432acd3b6c8a1a72', NULL, 8, NULL, '[]', 0, '2019-09-24 09:48:42', '2019-09-24 09:48:42', '2020-09-24 15:18:42'),
('6a407da82bbd6053703e09a560fc0b6be67675b11e80bfaee3bef7b1e56d65c546bff9387fb5340a', NULL, 8, NULL, '[]', 0, '2019-09-24 09:35:05', '2019-09-24 09:35:05', '2020-09-24 15:05:05'),
('70434cbda4f10dec8f4e3511f06c924f24156ab92531749e5795ffd9064a0a077a123193ddb56f5f', NULL, 8, NULL, '[]', 0, '2019-10-03 21:44:42', '2019-10-03 21:44:42', '2020-10-04 03:14:42'),
('71d6116dd23b12a6a0a548b66775eea95df457b90d320176eedcd9340c250e477e18f1840986f49b', NULL, 8, NULL, '[]', 0, '2019-09-28 08:30:57', '2019-09-28 08:30:57', '2020-09-28 14:00:57'),
('727ee48d40de4009a47be017b92ebdddf8aca859f62b42215bd3dd62950329ba946d65e1863fa3ba', NULL, 8, NULL, '[]', 0, '2019-10-02 10:27:08', '2019-10-02 10:27:08', '2020-10-02 15:57:08'),
('7291ab35883a8ddc49ee57276831215aea202b9d965e4a150c42822a18ffb6f8383c755fcf66bf94', NULL, 8, NULL, '[]', 0, '2019-09-24 12:21:08', '2019-09-24 12:21:08', '2020-09-24 17:51:08'),
('75bdf824f8f524094fe6dbf199edc02bce00f6ef101b35527a462c1efa21504509c6e00f5dfc5b99', NULL, 8, NULL, '[]', 0, '2019-09-24 09:39:20', '2019-09-24 09:39:20', '2020-09-24 15:09:20'),
('7899c6f2fd1bb12ffffa6c648df5559029c5a90faa20ecf8fdf5e670914adae5a3936167dc15ece0', NULL, 8, NULL, '[]', 0, '2019-09-27 10:54:31', '2019-09-27 10:54:31', '2020-09-27 16:24:31'),
('790a636f71b33bbcda2ca05994d640204eb9576cb601eaf841011d23f780409878caa6a27d62cada', NULL, 8, NULL, '[]', 0, '2019-09-24 12:30:55', '2019-09-24 12:30:55', '2020-09-24 18:00:55'),
('7c92cbd426189addcb0e675bce253e6ca32c0154cd90dd2d65d1cae83573d737b5241c9e4e3e9fc7', NULL, 8, NULL, '[]', 0, '2019-09-24 09:30:23', '2019-09-24 09:30:23', '2020-09-24 15:00:23'),
('81be8d02e3f363b1670c319a08c7567af740b00e166c2f4cd4adab64950d0501dcb9f1eda711e2c0', NULL, 8, NULL, '[]', 0, '2019-10-03 03:59:00', '2019-10-03 03:59:00', '2020-10-03 09:29:00'),
('8290f50717620ceef9f9bdadc9986b917a109440cdc6996f382642f500b9580c3c727c18e152c4bb', NULL, 8, NULL, '[]', 0, '2019-09-27 15:37:37', '2019-09-27 15:37:37', '2020-09-27 21:07:37'),
('82f33d298b00d7a51c73082fc1c967bfd552aaf47ea7f8ec2f1cd689fc2e972f883f26a581181209', NULL, 8, NULL, '[]', 0, '2019-09-29 07:51:12', '2019-09-29 07:51:12', '2020-09-29 13:21:12'),
('8511b3e23007bb05473512674eeefbbf72d739ac513929a1e980421286717ef01492f20c026e2571', NULL, 8, NULL, '[]', 0, '2019-10-03 06:53:38', '2019-10-03 06:53:38', '2020-10-03 12:23:38'),
('8749bfa3f9bde77d318b48dc92c1a0fc82fcf4fbab6367819e97da04b73cbcd3892843f4c910bf0e', NULL, 8, NULL, '[]', 0, '2019-09-24 09:38:28', '2019-09-24 09:38:28', '2020-09-24 15:08:28'),
('87874e0fc8ce915368454b0bcef032114e2ca58bb52b1b313a968e96f3ab1703d5d8cf64b6d321d1', 1, 8, NULL, '[]', 0, '2019-09-19 09:25:00', '2019-09-19 09:25:00', '2020-09-19 14:55:00'),
('8c6595266904d08d41198df34b687f4e022e8144abefbde9dc4ab239ac638a23871630e3c881c4ca', NULL, 8, NULL, '[]', 0, '2019-10-02 10:34:30', '2019-10-02 10:34:30', '2020-10-02 16:04:30'),
('8e865e109093043bb5a94e609c5e3f2d14982caedd866831df543e308d27ffa0dd61aaee8e03f028', NULL, 8, NULL, '[]', 0, '2019-09-24 09:34:04', '2019-09-24 09:34:04', '2020-09-24 15:04:04'),
('8f3533e1fcb6094f095b8eeb47c6183c29cb0226328878837b84eadc9aebd699daa4c2202192df97', NULL, 8, NULL, '[]', 0, '2019-09-27 10:18:55', '2019-09-27 10:18:55', '2020-09-27 15:48:55'),
('8f3aa0701b17a7ab42744e6025b15968b288b030d49a1cecdac83d5d3bdf5f58471cbff419a970f8', NULL, 8, NULL, '[]', 0, '2019-09-27 11:13:56', '2019-09-27 11:13:56', '2020-09-27 16:43:56'),
('91429730754aff452c4671c4c6b2456a53784995d06527d6243af2816c717a5a39c7fedacb9367a3', NULL, 8, NULL, '[]', 0, '2019-09-24 09:31:13', '2019-09-24 09:31:13', '2020-09-24 15:01:13'),
('91d27f232227b51a88b30cd48fa4115633317616939da6fb181e8c49bdffd63c9cc3e4238ba22e9d', 1, 8, NULL, '[]', 0, '2019-09-19 05:45:04', '2019-09-19 05:45:04', '2020-09-19 11:15:04'),
('92c0e2c232b74c345d51b600f0bed77ae2ac681042a60c8dc04663840810c5d3509d88c7e5750c55', NULL, 8, NULL, '[]', 0, '2019-09-27 10:08:40', '2019-09-27 10:08:40', '2020-09-27 15:38:40'),
('930b6f0527724b2b84e451ba144433629d3af2f25430a4a73f1895fdfe7381bc509e4f732750df23', NULL, 8, NULL, '[]', 0, '2019-09-27 10:08:50', '2019-09-27 10:08:50', '2020-09-27 15:38:50'),
('932812e769dcc52beb84f8f286153e4b74f74f311e73bf5157d0fd99a0d9cfd15f48948a567ca1eb', NULL, 8, NULL, '[]', 0, '2019-10-03 07:13:32', '2019-10-03 07:13:32', '2020-10-03 12:43:32'),
('93e69287460d301136a7c3cccbd78e848b509cb3bf61d9d2d14273b62d89d2778e8995dcaa1da434', NULL, 8, NULL, '[]', 0, '2019-09-24 09:30:45', '2019-09-24 09:30:45', '2020-09-24 15:00:45'),
('95cd617801ef7c27c5acd5380325077af94ab270a71233216bba038f2d91d6f1c71709d9fb39372b', NULL, 8, NULL, '[]', 0, '2019-09-27 11:10:50', '2019-09-27 11:10:50', '2020-09-27 16:40:50'),
('965abc48b9c03bc40e4b301612c7d20ed82b37efb0a29ee2ac8b946e9b3fc5d97cf3e87b4e950d0a', NULL, 8, NULL, '[]', 0, '2019-09-24 09:35:49', '2019-09-24 09:35:49', '2020-09-24 15:05:49'),
('987235436932248abdcf2197f9da3211785621a84c2194a86e8a98f23d80679da9731005cab90dcf', NULL, 8, NULL, '[]', 0, '2019-10-01 13:44:32', '2019-10-01 13:44:32', '2020-10-01 19:14:32'),
('99d3591479671478ab5cac2e26f0c660b1717190347d0f6e8d857dedc4289ade3bb3758edf9a9e28', NULL, 8, NULL, '[]', 0, '2019-09-30 02:28:21', '2019-09-30 02:28:21', '2020-09-30 07:58:21'),
('9a8e088d1007b787311c7c56765c2d4d76db4f70982c35c34d3a6e1dd460ce6099707b61f9a9e87a', NULL, 8, NULL, '[]', 0, '2019-09-27 14:47:44', '2019-09-27 14:47:44', '2020-09-27 20:17:44'),
('9df92db425bc0caca4a853ded4ddb3c079a1a48e3b327ebab3051aa6c02fc21a8550699a004dc14b', NULL, 8, NULL, '[]', 0, '2019-09-24 09:47:29', '2019-09-24 09:47:29', '2020-09-24 15:17:29'),
('9e9e1f3dbc713ac127da7d76bd4c1d34b52bdef30a4b0b1658ff99807bb4c94f31d988319626fc59', NULL, 8, NULL, '[]', 0, '2019-09-27 10:57:07', '2019-09-27 10:57:07', '2020-09-27 16:27:07'),
('9f3c34596af1a268c284c8d551034d93c3f837ab6f59e6f57ed39b0a77dc61f9561f40243e4bfc4c', NULL, 8, NULL, '[]', 0, '2019-09-27 12:34:30', '2019-09-27 12:34:30', '2020-09-27 18:04:30'),
('a0d07a91b01fb8a065bd01c3194a1dd1462bd10f2ba5edd23ec872c3977406b7f5c73c0ead0e52e5', NULL, 8, NULL, '[]', 0, '2019-09-27 10:06:59', '2019-09-27 10:06:59', '2020-09-27 15:36:59'),
('a2bd9d4b097549feb4fa0993ed45721a62902aee8b89a520cd9f34fec7002e7f5b665cb5d0b231bc', NULL, 8, NULL, '[]', 0, '2019-09-28 15:12:14', '2019-09-28 15:12:14', '2020-09-28 20:42:14'),
('a3365840d6698d38ed17290b44137765692f7cc861f3c58d1bf6756f44db76be943cb62e3e98b317', NULL, 8, NULL, '[]', 0, '2019-09-27 10:57:14', '2019-09-27 10:57:14', '2020-09-27 16:27:14'),
('a39d88df72e6cdfc369dc6d57c98a304872c67915fef509980df2123269e7bf3ac337e310d65880c', NULL, 8, NULL, '[]', 0, '2019-10-03 21:49:25', '2019-10-03 21:49:25', '2020-10-04 03:19:25'),
('a5ae8e5c08ecb392e329259bc7cf7b88bbc7d42aaf09cf156ffce8cf62235ae83738b600a2138323', NULL, 8, NULL, '[]', 0, '2019-09-24 09:35:26', '2019-09-24 09:35:26', '2020-09-24 15:05:26'),
('a64c5d6189e12a66ff751fd2d9022f9bd44bff78b919c0e30a7a50e8fc6069c31f4ae6590f2edf90', NULL, 8, NULL, '[]', 0, '2019-10-03 07:18:25', '2019-10-03 07:18:25', '2020-10-03 12:48:25'),
('a75164ba91638e0a1a65df788a9fc088d7f818c54002f80e31723dc703879f5f45b3005cbeab3a47', NULL, 8, NULL, '[]', 0, '2019-09-24 10:35:54', '2019-09-24 10:35:54', '2020-09-24 16:05:54'),
('a855fd9c3e04444dec49bb40cbce77ca25637fab3d3d10a17af15cc7e448d4125b1f51f40d309bb9', NULL, 8, NULL, '[]', 0, '2019-09-24 10:35:12', '2019-09-24 10:35:12', '2020-09-24 16:05:12'),
('ae81852e8647d88ac551374ab700d0a927b8ce9032f1dfeb631c22426eb17ae5e85522b0916fe3f0', NULL, 8, NULL, '[]', 0, '2019-09-27 14:46:48', '2019-09-27 14:46:48', '2020-09-27 20:16:48'),
('b32cd66aff610e94e39ff9b519958827ab857f6134417451f9c40d48c56d082c8b426690cd0cb5c1', NULL, 8, NULL, '[]', 0, '2019-10-03 15:58:02', '2019-10-03 15:58:02', '2020-10-03 21:28:02'),
('b6f418d02625c3af6fbcff8da2db5bd265089b7bce084e5a95c49a8e8fa4d83a8d996464eb7458b2', 1, 8, NULL, '[]', 0, '2019-09-19 09:37:45', '2019-09-19 09:37:45', '2020-09-19 15:07:45'),
('b840428c14e314c33b281a3483fa9b012c4684947e54795be3ee6d20cbb310abe1348c9258283f1f', 1, 8, NULL, '[]', 0, '2019-09-19 05:46:03', '2019-09-19 05:46:03', '2020-09-19 11:16:03'),
('b97531a90e22793972af1be708efc706bba6337ba5357ed7b2c00038abf07066d284e5cd52fe738a', NULL, 8, NULL, '[]', 0, '2019-09-24 10:41:34', '2019-09-24 10:41:34', '2020-09-24 16:11:34'),
('bc1e53a9f679dffd222405287767c0ab19e2adc5b7b0924f1ea3703bdd12079d555b2ac4f4bed2c3', NULL, 8, NULL, '[]', 0, '2019-10-03 05:18:30', '2019-10-03 05:18:30', '2020-10-03 10:48:30'),
('bd3df34c06af112abda72992f70880c5151d1e80e8abbcfcc9b07f9229f74d4dfaa5278c78cfa66c', NULL, 8, NULL, '[]', 0, '2019-09-24 10:35:43', '2019-09-24 10:35:43', '2020-09-24 16:05:43'),
('bea681e6762a5bfd095aec6d6d63d34a813dc2a377b2de396e7bffacbed6961f7e8d4200848bdabf', NULL, 8, NULL, '[]', 0, '2019-09-27 23:53:28', '2019-09-27 23:53:28', '2020-09-28 05:23:28'),
('bfc78735c39547d6fc9b1cb095dbde1e588450d21d63d0aaea344b2f0f797a503f01a78d951654b0', NULL, 8, NULL, '[]', 0, '2019-09-28 15:14:53', '2019-09-28 15:14:53', '2020-09-28 20:44:53'),
('c009f22bae06400f7b1944c46c4827e8cab838e2d4a3b340172d1b5561aaa11ad49887c60d23fbd3', NULL, 8, NULL, '[]', 0, '2019-09-24 12:36:34', '2019-09-24 12:36:34', '2020-09-24 18:06:34'),
('c3fd504174e3ca76d0df70a43459c270597ece9213ada0597ceb092916fd6b5bb28e0b34b64cff59', NULL, 8, NULL, '[]', 0, '2019-10-03 15:39:24', '2019-10-03 15:39:24', '2020-10-03 21:09:24'),
('cba72e5b6abba411e9c0a107c5405dab4ffa46ff5ad3c861ae09a8cc07eb214b2f8d3fc017c6d319', NULL, 8, NULL, '[]', 0, '2019-10-03 08:05:39', '2019-10-03 08:05:39', '2020-10-03 13:35:39'),
('cecb7bc34ee3badf803fce3a02ad13e2f626c243435730fd33b156d91977873b6d6cfc56e01815f9', NULL, 8, NULL, '[]', 0, '2019-09-27 10:08:55', '2019-09-27 10:08:55', '2020-09-27 15:38:55'),
('cfce546800795a1ba50485c830e57aa27c6837f8f81ad9ac068f40a2691630d1c1ecb828bdfeb7e3', NULL, 8, NULL, '[]', 0, '2019-10-03 21:42:36', '2019-10-03 21:42:36', '2020-10-04 03:12:36'),
('d444c949ffc6fa9fc3c1ec3f369851905d224bdfb3849a39b02a73980c981955112f0696eba9e8b4', NULL, 8, NULL, '[]', 0, '2019-09-27 11:07:58', '2019-09-27 11:07:58', '2020-09-27 16:37:58'),
('d48ec45ae8e2437dd9c4c7264e1839e45e8ef5c2e87dcd41b4d55415b4120d95888a49b3861b3b9c', NULL, 8, NULL, '[]', 0, '2019-10-03 05:13:51', '2019-10-03 05:13:51', '2020-10-03 10:43:51'),
('d58a41065ab529cdee4e419d2ab465093ed55c14dce3fc811b9bdb37c095e2dd65af02a7a72875c8', NULL, 8, NULL, '[]', 0, '2019-09-24 09:47:59', '2019-09-24 09:47:59', '2020-09-24 15:17:59'),
('d611a7f5eead4cfd872a5d7216479c46363e29f34535c7861ad8dbe8ef3e2f9d8a09b42f197243fb', NULL, 8, NULL, '[]', 0, '2019-09-27 15:52:00', '2019-09-27 15:52:00', '2020-09-27 21:22:00'),
('d76cd9b50b3aac6372e419e5211b5f8b1c14b5c2e30bc68b29a4b5318080c2c8268d8d665885a374', NULL, 8, NULL, '[]', 0, '2019-09-24 09:30:52', '2019-09-24 09:30:52', '2020-09-24 15:00:52'),
('d7c961626f0638de3224121b4c20cbdd7ceaca519a2d27035923383cc101832f05c0e93fe0361d6e', NULL, 8, NULL, '[]', 0, '2019-10-03 08:06:09', '2019-10-03 08:06:09', '2020-10-03 13:36:09'),
('de3a9350129b9590c32aa229aae51e599f5fc670a9038c06720933d57e6a66f6f2a2f4c6c2c36ba2', NULL, 8, NULL, '[]', 0, '2019-09-24 09:42:25', '2019-09-24 09:42:25', '2020-09-24 15:12:25'),
('df3c05d93640bca0dae98260226b690467547d3d84d705a40a55108dd302e4f423cc97cfe94e0c51', NULL, 8, NULL, '[]', 0, '2019-09-24 10:36:00', '2019-09-24 10:36:00', '2020-09-24 16:06:00'),
('e3c3a73ed7053101d3fb031fc12b18678ddbc1ae32090c4dbd4056ebc3fcfd85de707471c6e76e7b', NULL, 8, NULL, '[]', 0, '2019-09-24 10:03:56', '2019-09-24 10:03:56', '2020-09-24 15:33:56'),
('e3cd3fabc9ec920970fa9e67e63b517712372ffe7a08eea634304f0e18ad5931ffd23f8d4ae676a4', NULL, 8, NULL, '[]', 0, '2019-09-27 10:56:58', '2019-09-27 10:56:58', '2020-09-27 16:26:58'),
('e7e13b2d5d39c1018937b2070362de9e2670a50735b4bdd8aead9ce71c452ef9c9c9addb6bd59ab7', NULL, 8, NULL, '[]', 0, '2019-09-24 09:34:35', '2019-09-24 09:34:35', '2020-09-24 15:04:35'),
('e7f3d0c500a912e1590cbdde82300e4239a2418da690fd080c3c5e0c668930c1cdbd565339b60f3e', NULL, 8, NULL, '[]', 0, '2019-09-27 10:47:56', '2019-09-27 10:47:56', '2020-09-27 16:17:56'),
('ea4874673222b31bba59aaca104a2e3a0eaf81832e1cd36eea5209c92310574aae9a130e3ac34c64', NULL, 8, NULL, '[]', 0, '2019-09-27 15:47:42', '2019-09-27 15:47:42', '2020-09-27 21:17:42'),
('eb398f7416b01007aa403aa620176e32a8bbaba58e46401c5dd44c50a3f3f8dbb0f9c395f85f8380', NULL, 8, NULL, '[]', 0, '2019-10-03 06:37:03', '2019-10-03 06:37:03', '2020-10-03 12:07:03'),
('ebcb652f0a3334a4cfec94c29924577cf7c7fc5fa3b44c3ddde71d1dce53716325c37e224ff08312', NULL, 8, NULL, '[]', 0, '2019-09-27 10:05:48', '2019-09-27 10:05:48', '2020-09-27 15:35:48'),
('ec9869e70466713cb7af92f87fb0d4f4684d948e7f07e3374e528c7f99f9a719415546e1c9315c87', NULL, 8, NULL, '[]', 0, '2019-10-03 04:29:43', '2019-10-03 04:29:43', '2020-10-03 09:59:43'),
('ef72c5ccc35cdc8a8acd86c8c220fb74f1e2e99f96cde1c6b9287ce67a97af781dc48fc3ad0d23e3', NULL, 8, NULL, '[]', 0, '2019-09-27 23:57:37', '2019-09-27 23:57:37', '2020-09-28 05:27:37'),
('f059fadfdf94524c377e16b437ade888232002a7e698c31dca1d128b1075afd961b2f632070c827c', NULL, 8, NULL, '[]', 0, '2019-09-27 09:34:39', '2019-09-27 09:34:39', '2020-09-27 15:04:39'),
('f6e63be472b75dfff2beebf7ea91905d239bf14d12c051232ee37d60b2ecfaaef740d9b9be80eed2', NULL, 8, NULL, '[]', 0, '2019-10-03 15:29:07', '2019-10-03 15:29:07', '2020-10-03 20:59:07'),
('f7cba52b8e5e397077658a8d8e6df64c606f6ca077ed8e6d827ac79a805e7afcd06df527e4465166', NULL, 8, NULL, '[]', 0, '2019-09-27 15:23:31', '2019-09-27 15:23:31', '2020-09-27 20:53:31'),
('f7d527674f9434db325ac4fd850c6fa234f9a949c894f561235c189e0075bc9a74c60a84fc155cf4', NULL, 8, NULL, '[]', 0, '2019-10-06 11:48:55', '2019-10-06 11:48:55', '2020-10-06 17:18:55'),
('fb56313ec372be2cf1e657eda9a82dd6aa63cd2b75175249d33331aac2658d38e5d10a66417c47b5', NULL, 8, NULL, '[]', 0, '2019-10-03 08:05:51', '2019-10-03 08:05:51', '2020-10-03 13:35:51'),
('ff6c2e99a88a6f345fac5be8ebf29b1e2d374514311c6d97bccd2b57b939656722b9178cd2cb4161', NULL, 8, NULL, '[]', 0, '2019-10-03 11:10:41', '2019-10-03 11:10:41', '2020-10-03 16:40:41'),
('ffb7c67edc4000977e288d0fd0780f56561b87feb3caaa3dddc76dc061d1032271a64bae1128b17d', NULL, 8, NULL, '[]', 0, '2019-10-06 12:29:49', '2019-10-06 12:29:49', '2020-10-06 17:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(7, NULL, 'Laravel Personal Access Client', 'C5SONWaknvFUTW9Q2k4FBAuqQg4vwfQkE0cKtAc8', 'http://localhost', 1, 0, 0, '2019-09-19 05:42:00', '2019-09-19 05:42:00'),
(8, NULL, 'Laravel Password Grant Client', 'zvVnTf1pT0U5dP6gnpMdeDjhc6uPMuomOuuWsC8D', 'http://localhost', 0, 1, 0, '2019-09-19 05:42:00', '2019-09-19 05:42:00'),
(9, NULL, 'Laravel Personal Access Client', 'SnphooL8MFRXl2KneZSeBelR4D0ZUp5rqbds2X0B', 'http://localhost', 1, 0, 0, '2019-09-19 05:42:10', '2019-09-19 05:42:10'),
(10, NULL, 'Laravel Password Grant Client', 'kho73JpFTEeDZPBmPDMSCQHbke7F7COkxEeN0h5B', 'http://localhost', 0, 1, 0, '2019-09-19 05:42:11', '2019-09-19 05:42:11'),
(11, 8, 'TEST', '05EmJyuFWjqkhgy000AguI9YnWUwydrodljbbPSo', 'http://localhost/auth/callback', 0, 0, 0, '2019-09-19 05:43:00', '2019-09-19 05:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`id`, `access_token_id`, `revoked`, `expires_at`) VALUES
('026775dfa6603b409a25bb0458c89d09534c1679f53f2b3907dcdf785a5fb30b641f1f5133a37429', '37581a107dc2168216187b9ca413b08fea7d87528f4bf8668debb72e6d76b656409f7ac882753903', 0, '2020-09-24 16:05:28'),
('032c49492df6da24afbcc415ceb7254e3b559a3f9a2bd53cdc387fcc1735e14f935204959c50ffc5', 'ffb7c67edc4000977e288d0fd0780f56561b87feb3caaa3dddc76dc061d1032271a64bae1128b17d', 0, '2020-10-06 17:59:49'),
('05969f8467e2ecbae57d00f7ecfe0c2341f42622a2af55ee818a4d77f50f5abbdf9eebc416f6c5a6', '187f2a763e86d52ac9c14c7c94c7291b7b5059cc3473c96fbfb178dc4a59afd24e5b481aa5387eea', 0, '2020-10-03 19:04:33'),
('06911869b68896cf09385809e32e8c5badcddbb661387bf2ea4d8e472ae94b9c472a77492faea05f', '61873758a176682d260a5c5923f4247ab6d9a3afb72763430a2ec1789aaffd04a994999bc5a26a4b', 0, '2020-09-27 21:14:52'),
('078eac38689709d76c9b38f30bb969ac8a6dcd9d508d7ee91c90571171d314d7d5dd7daefbfc8a2e', 'd444c949ffc6fa9fc3c1ec3f369851905d224bdfb3849a39b02a73980c981955112f0696eba9e8b4', 0, '2020-09-27 16:37:58'),
('0974f09e53045521a33599923c6fa26121212b36f53503bb6453b46ebbead252a030100c60a9d1c1', '27f13e4bdca30729f089c6a91ab7223a95e191563cde9a7952a0d65d5521e4331b9eaa2735ced90d', 0, '2020-09-27 15:35:55'),
('0cba6e5887291ff8ab895ada6e3444eaab97fb6027134513662fa6506175e95d6c7a127287befca9', 'd76cd9b50b3aac6372e419e5211b5f8b1c14b5c2e30bc68b29a4b5318080c2c8268d8d665885a374', 0, '2020-09-24 15:00:52'),
('144461c9b35e3367f72c11e6199d2e6fa52446df9f1f58bb3631d4612ca1229cd26a866da140e79b', 'f7cba52b8e5e397077658a8d8e6df64c606f6ca077ed8e6d827ac79a805e7afcd06df527e4465166', 0, '2020-09-27 20:53:31'),
('15919d99d50bee7f81af880936f385a36ac8206b3d4ca2ff32596fa1348896518220daac2b60116e', 'bc1e53a9f679dffd222405287767c0ab19e2adc5b7b0924f1ea3703bdd12079d555b2ac4f4bed2c3', 0, '2020-10-03 10:48:30'),
('16251585ec09c18c9cbe093c7fce9a692671e35616bea5aa36e57d206511244b565248d4276d779c', 'a75164ba91638e0a1a65df788a9fc088d7f818c54002f80e31723dc703879f5f45b3005cbeab3a47', 0, '2020-09-24 16:05:54'),
('16fbbc4103a20dfc0a541a972647b52adb6d7d8f05a333a748a18aa866326e87852e1bd0a4b2838b', 'bea681e6762a5bfd095aec6d6d63d34a813dc2a377b2de396e7bffacbed6961f7e8d4200848bdabf', 0, '2020-09-28 05:23:28'),
('17d7acb9b61b483aa45f4dbb52df081828bef845c49038022bfe6735d1b2a71660a6598b8d8bdce5', '53bd911b89b449660a27db609a50dd0fa2312d69dadaa56d5573b448ca9dc8bc206c0e1b59d880d7', 0, '2020-09-24 15:03:10'),
('188460b900aa6f5e15c59085b2852aa554b0594402aa7beb3340792425b367918a44ed8ee876c024', 'd58a41065ab529cdee4e419d2ab465093ed55c14dce3fc811b9bdb37c095e2dd65af02a7a72875c8', 0, '2020-09-24 15:17:59'),
('1b91c7288c82832bb8d2c838a1e08dec66cde5dcecb945ebb8e1e8e4f3c4c8f1e17ff97445b3401a', 'ff6c2e99a88a6f345fac5be8ebf29b1e2d374514311c6d97bccd2b57b939656722b9178cd2cb4161', 0, '2020-10-03 16:40:41'),
('1ca96ac39c09bd962521d9695c79eaca6a079de7a021345e43f668dbb07e87e49708c89616f942a1', 'ef72c5ccc35cdc8a8acd86c8c220fb74f1e2e99f96cde1c6b9287ce67a97af781dc48fc3ad0d23e3', 0, '2020-09-28 05:27:37'),
('1d430644ad0e2b3c1801fa656ac10c80bcddcf6242ecc67a2b27aae80330b174a0a7a9b91c9867d2', 'a64c5d6189e12a66ff751fd2d9022f9bd44bff78b919c0e30a7a50e8fc6069c31f4ae6590f2edf90', 0, '2020-10-03 12:48:25'),
('239dd7a98ed18e8b3e27931a5f2933a816a1ff3e88d95abd102db6e668c21dce33867d7553b40e20', 'de3a9350129b9590c32aa229aae51e599f5fc670a9038c06720933d57e6a66f6f2a2f4c6c2c36ba2', 0, '2020-09-24 15:12:26'),
('27420b30c89f332c5a657eb82a6841b954d47039cca51293dcf2ef259f2f00ddbb3f0b917ad5d454', '513682aa07e894ef61692c98ad07153ba9565f311f2df06b4bc64c8c837952f77619c66e6dd01351', 0, '2020-09-28 20:04:03'),
('2b88d04516a239a6cf576580d72911630f0654563a6ba53c1aa241c311cc00b28a5e4b106c76e3e0', 'fb56313ec372be2cf1e657eda9a82dd6aa63cd2b75175249d33331aac2658d38e5d10a66417c47b5', 0, '2020-10-03 13:35:51'),
('2e67c494ec0f348b3e2cfc3f7e1e0e02917e40893f7b47d78a5d9a41c44a803ab82e854b52e76243', '2ce16cb220a3b59ca51a51635216ef140042452bdb7f5f752e2a1ee4ec68a5b344b3db7620231e94', 0, '2020-10-01 13:53:34'),
('30863b480c32d9e2cd6ccea67cc7f80f4da4bbb5cf79b041f520a8aaac72628b793aaae7f063958b', '51b1f1254869f562ee6818ba5038f25f34a0ccd024c0dc1e302d5c3e27885bc5b0d94cac477568e2', 0, '2020-09-24 15:05:39'),
('33edb24766b902091fc3f64adba75dc2e2a82c32ba02415187b221194e36f3bf4147c1938d974c12', '0c048c5a6c1718d712012bf8e0e12c7c21b86786169f6684a98c1a3c1abedf05292cc5943c6bf15a', 0, '2020-09-27 18:04:58'),
('341c74e166efc2fe0a57ed4043c881715a486771f4eb01a141dbcd2e864f2be2172c33707984421b', '6a407da82bbd6053703e09a560fc0b6be67675b11e80bfaee3bef7b1e56d65c546bff9387fb5340a', 0, '2020-09-24 15:05:05'),
('378ef4e95ba2debbcc2c033312b067208d3c63e3bf82a3ad51251b6de0e98b6b27a831235bc194a7', 'ebcb652f0a3334a4cfec94c29924577cf7c7fc5fa3b44c3ddde71d1dce53716325c37e224ff08312', 0, '2020-09-27 15:35:48'),
('389737653bd5aa6e2a98a7b542d212296003fe785aeb87e82261de1d0c460965286d55c896b0f09c', '9a8e088d1007b787311c7c56765c2d4d76db4f70982c35c34d3a6e1dd460ce6099707b61f9a9e87a', 0, '2020-09-27 20:17:44'),
('38a6442c8fc765f64d2727755ee76f1bc2a248f070dd454433a83d572ce50ed72181959284c700c2', '35fce76f0aedcfabcf4140b8a4bc5dc8c67cfa2285d46f54f4bc00a0196452cbf4d1ed7062da6abc', 0, '2020-09-24 17:57:33'),
('3940d08eb4d0f8edf56fccd3d8c35fd6245d705f52abba9aca83955770f66595a7e359eb22ff0612', '32ba318d62c2eea0feafebed68bbca2d73d42aa1bf55ca0ffb8c081c131e667e47af3b8076114bb3', 0, '2020-09-24 15:02:23'),
('3aa07177b3419cb19fefc1ff9a0958cdcb49155173835355c41ac01b7652b9595f901085eda55c4b', '41a62d260b4ad25652690804603684caf24aaa2a520b4f57b26c4c40c2b6124480be04aa86762ca9', 0, '2020-09-24 16:01:09'),
('3e28a435696e8652b5cbff0fd8e00065e02133592c9ce2e239ab0565ab5abaaf6685ff63eb424c90', 'bd3df34c06af112abda72992f70880c5151d1e80e8abbcfcc9b07f9229f74d4dfaa5278c78cfa66c', 0, '2020-09-24 16:05:43'),
('4067efb614fa594014d5ef7d4ede06fb777013d5a4a08a7988043014ae6b552eff7ca942ab02af6a', '75bdf824f8f524094fe6dbf199edc02bce00f6ef101b35527a462c1efa21504509c6e00f5dfc5b99', 0, '2020-09-24 15:09:21'),
('41934bfbc4cf1b2a6684650d00509a42b14b147e39f6c0820c2c071870f100399fe155f058a65246', '5f1bcf36d528d17fb8362afb0ee9c3b33e45e41e1add32cb48435d9f120d8f0631936074ea781166', 0, '2020-09-24 15:08:51'),
('448c83aa1748ddff98ee36c32ea1eb6ac184a6cc681f537d679559c90939968b00d48277131e6909', '8749bfa3f9bde77d318b48dc92c1a0fc82fcf4fbab6367819e97da04b73cbcd3892843f4c910bf0e', 0, '2020-09-24 15:08:29'),
('4525fc4220594b5527e0751333040bbe11d85c08f273cc8c9b7b25cc858fef5bcaf0ac8d235aef5b', '25163651f8ebd4671b2ef7b1d8f93d054516c53b8c527153ce726313c676de2b81fd1109829c02d1', 0, '2020-09-27 16:18:41'),
('452ea145ba1fe3d3b2f5770fdea47b31b9eda203059a72c03a5fc10c8f3818203bcb7fd6a2dc2943', '584d7d867b046936f2eadc35e70b5afd47743f473bb0ca58dc0c7a2c9c0a24b82fb03b35d4a966b9', 0, '2020-09-28 05:00:08'),
('46c8084d358ef2e895df626012e2a6971b76987e0184386c89548696fafc9e6b7a21f1cefaacd7a2', '930b6f0527724b2b84e451ba144433629d3af2f25430a4a73f1895fdfe7381bc509e4f732750df23', 0, '2020-09-27 15:38:50'),
('4790ffa1146d57d8d599182ba812a5b21e1706ba31a0e3dd71a10c2e81f4f1dde51968785865002c', '0a399c4a0a9e59636dd8b9595e35028a15a12878fc1da346adade07e472adcbe3a72e03cbb5f1cf0', 0, '2020-09-24 15:02:52'),
('492fa08d6e6232048ba8397983e12a07407c181b84b7900f3346b28ca7abf1e354aaba81864e6485', 'c3fd504174e3ca76d0df70a43459c270597ece9213ada0597ceb092916fd6b5bb28e0b34b64cff59', 0, '2020-10-03 21:09:24'),
('4b1c0e7d0e5d92fd82efeb73f549d1530ca7d271940b0848b4d3f5d87b95f6509fad78205be05d55', '7c92cbd426189addcb0e675bce253e6ca32c0154cd90dd2d65d1cae83573d737b5241c9e4e3e9fc7', 0, '2020-09-24 15:00:23'),
('52e71d8b77c8b7ee1a7083971003291124d24e5603814941f2f80262b89dfd9d0e43c3173a619091', '965abc48b9c03bc40e4b301612c7d20ed82b37efb0a29ee2ac8b946e9b3fc5d97cf3e87b4e950d0a', 0, '2020-09-24 15:05:50'),
('53a37eec6f1159063b01a64230b6dbe1508c72c100ceb33970e37b04fd9d08156d72c09b7bebc7c1', '328828aa92a4dedd9ba80910e28f53fbcdacc10399edadd5a8d04c62feed3a9bb838989d485d33bc', 0, '2020-09-27 16:41:10'),
('54c21597e20706a84a9767739ee0aaf3a0c37c939191c819d67a7e3a0e64af05876966bf1c45f37b', '987235436932248abdcf2197f9da3211785621a84c2194a86e8a98f23d80679da9731005cab90dcf', 0, '2020-10-01 19:14:33'),
('57cc10f7b45daf985a398d3e2117afca36877f4cafc0f3ccf7f47c9a5626f8568be7d1375efc24ef', '4e1b3d6c8665887adb715f371e735b830eae19541b062f02fa685dbbf22aa0456d040a90ff5220e6', 0, '2020-09-27 20:18:33'),
('580d0fd52e8d70ef0de03f76f2cd2cd0be0e7bfb1874c1ce46fd48bbe2ebc7d77240e1e6f7e34c0f', 'df3c05d93640bca0dae98260226b690467547d3d84d705a40a55108dd302e4f423cc97cfe94e0c51', 0, '2020-09-24 16:06:00'),
('58a9d569a7ab9a20da22354e0f92d5c2537a138e8f910f1ba710550cc4064ee489f0b64040afe49c', 'a5ae8e5c08ecb392e329259bc7cf7b88bbc7d42aaf09cf156ffce8cf62235ae83738b600a2138323', 0, '2020-09-24 15:05:27'),
('594c4a7a0f01c1c2a953fd16ed2b2e8a3894c13a1a57cc2d2d3d02a0ffdb3af8b148b7aa1d699083', '4d179cddc4d5042cfdeaf859af3719629fcd31137dadd1ce05d0dfbf3b21eb3f7375b9397e1bc890', 0, '2020-09-24 15:11:11'),
('5a424b1122e85d3a7b5bf9d6c4c16d3a27eaad74c5a3f34f67f1a38ffb818efb6265eb454b05b40b', '38aab38b943aaf8fb2839804b4cb23d7a9a7ced1221326d2cef8c857a94fdf2a1ff36502d781f602', 0, '2020-10-03 14:13:18'),
('5bdece6ad08c739be3c94920b78276648c63a552ff5128dafec06020bcf82a130d4887e56fec0a3e', '790a636f71b33bbcda2ca05994d640204eb9576cb601eaf841011d23f780409878caa6a27d62cada', 0, '2020-09-24 18:00:55'),
('62fb95378c238aa3a47d82adf6717ea2072d1ebaed62479d4b92d9b4c0257a0153bc66a70babc815', '430d1abb2d29163eb2cced9106581fde1f12d6e074c583f504f31512c6a82edf39092ccd11cf1556', 0, '2020-09-27 16:18:13'),
('66f5033e1cc3db13c4979bc035298ece910ff1c2e65e662aef686af1cdf79e14430510bc086820c8', '95cd617801ef7c27c5acd5380325077af94ab270a71233216bba038f2d91d6f1c71709d9fb39372b', 0, '2020-09-27 16:40:51'),
('678487e650517995e06176991b99f814812a7c1e2815bc6a0fd1e4a44e27df81a3a1a73159fef1db', '3db1a23e8c2cedef8b68342a493980708610b95dbec8cfdb2232edce29bb3a72f00f3a7e8cd44949', 0, '2020-09-24 15:54:33'),
('68e6b43a880f2290447fc7f8f8a8b7650b4f0221b9c7bac6a8f94c38b7a5c9adc153b690d1683bb8', '3665899882e71b84690c88d19104fba4bedc69892305f577323d4e8a2ba9de9c1ae6df26042596c3', 0, '2020-09-27 16:41:20'),
('6952b5076633cb4927faa983d84974b8de3f784df1fcd41a5ef0f9fc4249bed128830c0bca1a5823', 'e3cd3fabc9ec920970fa9e67e63b517712372ffe7a08eea634304f0e18ad5931ffd23f8d4ae676a4', 0, '2020-09-27 16:26:59'),
('6a887bc11deab535795247f45bbdb308709486ac15cbfd22bfee668cd9134d6aaefa7b91640beddd', '61909d18a081cc2e817e3e619245966956d739350369c090dc06ba0e9ba29106f38b4c9e9fb0b153', 0, '2020-09-27 15:35:57'),
('705785db7f9b7386e843dded97237969f9e7bb7e6d642b645e2a6cfee81e9e58767483e96920000a', '9df92db425bc0caca4a853ded4ddb3c079a1a48e3b327ebab3051aa6c02fc21a8550699a004dc14b', 0, '2020-09-24 15:17:29'),
('70800c5339d29b19c05755068b7ec7c05b4552b724b3a5e3e085b80b5d367961802064c786431b11', '588dfca47f97ad8553f8e850c2e243b3b57114183439d829dd49b3e54744fc84de4640f04a545166', 0, '2020-10-03 21:12:51'),
('771ea27fdccb139504bf23acac5b06a09a2a92398dbf914b52569af82e523899e529671aa67a58f6', '71d6116dd23b12a6a0a548b66775eea95df457b90d320176eedcd9340c250e477e18f1840986f49b', 0, '2020-09-28 14:00:57'),
('79cdaebf6d9fe9bfbc9b656107b3044bb88ccd36972450b8196167645477b44e85e5e118e7f1b925', 'f059fadfdf94524c377e16b437ade888232002a7e698c31dca1d128b1075afd961b2f632070c827c', 0, '2020-09-27 15:04:40'),
('802488d0574fe98ea6a8d78993ad926f47647dd89dd2302e17ac9fe4e3078dde69a3558773ed7664', 'f7d527674f9434db325ac4fd850c6fa234f9a949c894f561235c189e0075bc9a74c60a84fc155cf4', 0, '2020-10-06 17:18:55'),
('809fb15644503690be6c0c8eb9b9ca2651f2afa66940a8fe96aa6655d3dd2752a628fa01f33a5d6b', '69c97e5f7453c2d452aee2ba32d11281bd0d8fb0133f399216e0352777e3b330432acd3b6c8a1a72', 0, '2020-09-24 15:18:42'),
('854be5fc740b42df0e762317ece420b047e709cdee8414c52fed52590e885a44f26827839b2e374f', '243f90d25fddc9460ad2e44de3dc9ae32b9baa5319e9d8a7cd8c752c5ca6ce8a8071533cf49e42a2', 0, '2020-09-28 10:28:34'),
('858003a50c64d003d98fab762890e6e98de3af83c0e93c9afae2d83d64fe3601e2cb8e617c506155', 'f6e63be472b75dfff2beebf7ea91905d239bf14d12c051232ee37d60b2ecfaaef740d9b9be80eed2', 0, '2020-10-03 20:59:07'),
('874e14e0cc3ac71de52c71a2462a3c4d3b981e709321564e93f1089267c0b4aef8148c36c007f249', 'e7f3d0c500a912e1590cbdde82300e4239a2418da690fd080c3c5e0c668930c1cdbd565339b60f3e', 0, '2020-09-27 16:17:56'),
('8a82f59b087e12801edd391e29b6a32cc52d7f863f0c3c5ebb1ac089da8cfd046b3047037d7d9179', '5b3474b8797a4cb379aa11be0061f285f9e393048b6310dae00f0dafd6170883511cb6b170991ffd', 0, '2020-10-03 14:11:53'),
('8ebe1973a84b46bd35a53eee77f1dfa8f3eb146ead08a680822e2ed7286df9862a23c6650ccd864b', '8f3aa0701b17a7ab42744e6025b15968b288b030d49a1cecdac83d5d3bdf5f58471cbff419a970f8', 0, '2020-09-27 16:43:56'),
('8ecbf1720710a4098c88c7d18db44d400bb1c8850c5dff9bbba4a75648baa375eaa9abfe78a3dbfd', '70434cbda4f10dec8f4e3511f06c924f24156ab92531749e5795ffd9064a0a077a123193ddb56f5f', 0, '2020-10-04 03:14:42'),
('92a9604768ebae1ad6484c5e821d2dfea5dded71df612a6551d0ee9941f6b71ffaae7a2e659e1fc4', 'c009f22bae06400f7b1944c46c4827e8cab838e2d4a3b340172d1b5561aaa11ad49887c60d23fbd3', 0, '2020-09-24 18:06:34'),
('98659bebceee8354d58b95b332e25305abc78ca17e5356875776c990e019785ca62a0c0352b40f6e', 'd7c961626f0638de3224121b4c20cbdd7ceaca519a2d27035923383cc101832f05c0e93fe0361d6e', 0, '2020-10-03 13:36:09'),
('98e344b4ba0198d56dde1f65220ed5760b7a644e8a9cb9da612fc904c8b67f3f18b771e102a58c1f', 'eb398f7416b01007aa403aa620176e32a8bbaba58e46401c5dd44c50a3f3f8dbb0f9c395f85f8380', 0, '2020-10-03 12:07:03'),
('99fb4715166ff1513bf1ed7164038d1d1d17275a5d9c923116bb68424ef7b7c7f2c34398bb3049b7', 'd611a7f5eead4cfd872a5d7216479c46363e29f34535c7861ad8dbe8ef3e2f9d8a09b42f197243fb', 0, '2020-09-27 21:22:01'),
('9a3299c74c88b14457f171d551c05f331060424322327e91e3c00c6681f33af5078ed6a1ad22d1ff', '8c6595266904d08d41198df34b687f4e022e8144abefbde9dc4ab239ac638a23871630e3c881c4ca', 0, '2020-10-02 16:04:31'),
('9bda9c049f76a1ba74236bb0fb6bfc490c17d7e7862098316b5f1dff9e2c25368ebda1bde607907c', 'a0d07a91b01fb8a065bd01c3194a1dd1462bd10f2ba5edd23ec872c3977406b7f5c73c0ead0e52e5', 0, '2020-09-27 15:37:00'),
('9bf204129d97d8163b89f778c7ec3e320dc2b15a0ab13d2a3eb5d734f9acac2eee4d3ff30aa3b39a', '4dc2dd6018597bb1039a345c5d12180edcd192dd214a06e53651b28de2cff469317553752ef34e83', 0, '2020-10-04 03:17:37'),
('a03247b88bc1d7df37210f3d4ce09b6081a99f32aabe50593b694393801f978af68e3dc41fc31dce', '225b799d91c06bb146d3ef967b55c17b169db13a72cdc0b6e87a8426efcfc3ef2dd42e0443c087ae', 0, '2020-09-24 15:11:59'),
('a2605bba365a14489cd2d501b89d97ca1d30dac8b21d7b5b244c5e50d65092a24639effdde966233', '91429730754aff452c4671c4c6b2456a53784995d06527d6243af2816c717a5a39c7fedacb9367a3', 0, '2020-09-24 15:01:13'),
('a36c20f8f606375813f3d47201da3eda14d474e1532dcd0d3d31dbb1aad03e8f35dfaa492d6d96e8', '99d3591479671478ab5cac2e26f0c660b1717190347d0f6e8d857dedc4289ade3bb3758edf9a9e28', 0, '2020-09-30 07:58:21'),
('a5c71cb5f83ad82e89b4f1c595d0af1a73064bdabeb894a3e09cd253db764f06ea9dbc8c91b5857d', '239c59c52f92f524d4fe2322273c8cce2ef6444b1a63ea68f029367e13b1054403fed585bda5d975', 0, '2020-09-30 19:00:12'),
('abf4917e2311757415774b811a0f219d113ad7df72c9a4bba3f33a170e05dc876840b85f90bbf82a', 'd48ec45ae8e2437dd9c4c7264e1839e45e8ef5c2e87dcd41b4d55415b4120d95888a49b3861b3b9c', 0, '2020-10-03 10:43:51'),
('b419670f6d8d9a8cf0a2c182adad2d5a5db415796f49cee9cd261f9c60a8f9881f8c0012f3e671e4', 'a2bd9d4b097549feb4fa0993ed45721a62902aee8b89a520cd9f34fec7002e7f5b665cb5d0b231bc', 0, '2020-09-28 20:42:14'),
('b449020d61ca8140af8d3ba41fe7b429925cfb790a2c0ee720cc5526fcb05600d694f918eac6515b', 'cba72e5b6abba411e9c0a107c5405dab4ffa46ff5ad3c861ae09a8cc07eb214b2f8d3fc017c6d319', 0, '2020-10-03 13:35:39'),
('b7ae43aecfc490c400d9bc5bb8c5bbc8665b1cad242d25468921c89d0e0d84f7dc4c636f9be55b70', '8511b3e23007bb05473512674eeefbbf72d739ac513929a1e980421286717ef01492f20c026e2571', 0, '2020-10-03 12:23:38'),
('b7f53f5a81d7709722fb1f190a903d441b632f67045a852a3e416612c8ae07acf3c0a16c21e4133f', 'ae81852e8647d88ac551374ab700d0a927b8ce9032f1dfeb631c22426eb17ae5e85522b0916fe3f0', 0, '2020-09-27 20:16:48'),
('b89000a85e9216020e8a135052918ee908e4ad6301d2e05578dbec71811e29eb5f5d0cd10afa6685', '7899c6f2fd1bb12ffffa6c648df5559029c5a90faa20ecf8fdf5e670914adae5a3936167dc15ece0', 0, '2020-09-27 16:24:31'),
('b98bd4b2d71f32427a9dd5e42a17f0243ff280e5b831e49c47b8c6deb2963cd4e28bc847b335e694', 'b32cd66aff610e94e39ff9b519958827ab857f6134417451f9c40d48c56d082c8b426690cd0cb5c1', 0, '2020-10-03 21:28:02'),
('bc092eaa8a019c1eef109042b72f27a4180aa8b9befe5a80246684218a056ca0081a971f3cc2ebe9', '0d5876a643e7c94ebaa315ae0038be13431ed04e3e992c1e63ef5559cc329ea719bf3e90c9428a19', 0, '2020-09-24 15:34:42'),
('bd82b3a9f7fc0a11d4a264dc34b934775fda8727c2e39a9662252fdfcb1cf2898fc990e62a320ce1', 'e7e13b2d5d39c1018937b2070362de9e2670a50735b4bdd8aead9ce71c452ef9c9c9addb6bd59ab7', 0, '2020-09-24 15:04:35'),
('be2a955d7a2008198162fade1116c9dba7c367234d7efa0ceb7fc7e608c05015b18a41539c19f354', '3bb29c78e67fa7fd0b4f0f449c1db2026083201476105b1e30e6270be84f6946842901e2739a2758', 0, '2020-09-27 20:57:54'),
('c3dd47faba80169852e9abb3232bcc4c4b6089d02398c72b9ecc5db095012d9897fe0fe9132523f1', '5561ee49e3aa2ea233a610d584bee7c0c36540b2d17ca3f8f70010c5b7488e4be51c47cc891e1178', 0, '2020-09-27 15:39:33'),
('c4c762ca4462b738ca08102ff315ce06130922646d6f3410e151fbe18747625b0055cf57ec8fca1b', 'b97531a90e22793972af1be708efc706bba6337ba5357ed7b2c00038abf07066d284e5cd52fe738a', 0, '2020-09-24 16:11:34'),
('c4ef1a031d21fb1ffda9b9db210dd9e32daa424908370251dc6558f952de09f04fbbf0259b993b98', 'a3365840d6698d38ed17290b44137765692f7cc861f3c58d1bf6756f44db76be943cb62e3e98b317', 0, '2020-09-27 16:27:14'),
('c59021961485feb4c6958110bba2fb70d379c0055bb545ecf506839cfb6e4419b70ce903fefb05df', '67569ba182c96c903fc98e65ea9aec792807b7306000ba9bbb30ef70c4fa4b6e44776226e5d39755', 0, '2020-09-27 15:03:53'),
('c7fc0989bb8031b67e9d4f3e596b01318be12c890bf2cc2be5e61e38462f7ed26f1c93127edba139', '66d47f3c98e2bca14eed27d09b7e15350cf15277de85148d0e3fee4712cf34ac341c16dcd0c49d27', 0, '2020-09-24 14:59:28'),
('c8fd8f9f15b7c993d688a5c2e0e7acb77e350582c9eeef44732fe09be009487bab6c10d384662bf9', '9e9e1f3dbc713ac127da7d76bd4c1d34b52bdef30a4b0b1658ff99807bb4c94f31d988319626fc59', 0, '2020-09-27 16:27:07'),
('c9f7c5d5f7a4bc55630e52291c2995528ca127c4fbc8d596171268aee08fe9d9a210ea11209e4a5c', 'bfc78735c39547d6fc9b1cb095dbde1e588450d21d63d0aaea344b2f0f797a503f01a78d951654b0', 0, '2020-09-28 20:44:53'),
('ca36d228c7f36c1883b8a354381bbe3951e92a59ddb9eb515ecf9244008bc40a605c3a273e7342dc', '7291ab35883a8ddc49ee57276831215aea202b9d965e4a150c42822a18ffb6f8383c755fcf66bf94', 0, '2020-09-24 17:51:09'),
('ca927e47422f1ef5f03df9e2c0ae4e0316f0dbd578993f2b2662f819f7a0e06c1ca79052d311009a', '31c23fff7e677ba458cf46af8f35b770e1886fe73ca18990c55b274279480dfd30016bd67047092f', 0, '2020-10-06 18:00:58'),
('cc398c7e06d9f2d61bfe59dd2f9a0129737448d03a5368a9871f51057107c3ed4f659df846ae3707', '08a4fa5c6d53866501fbaf8e5e347db79718edf8d0a6217e0fb42e6551232f473514bf88defe709d', 0, '2020-10-06 17:55:49'),
('cccbc4f2e093e6e9f1ed5420ab1b7973d0aaf2aaee61d2887df61fe5a021919f637725a283fccfd2', '81be8d02e3f363b1670c319a08c7567af740b00e166c2f4cd4adab64950d0501dcb9f1eda711e2c0', 0, '2020-10-03 09:29:01'),
('ce2c3ff7c48ddd19f16cdd5541cd1f43a853a7fec90eee2fe49af6c028877f3e82f21416f6d14704', '8290f50717620ceef9f9bdadc9986b917a109440cdc6996f382642f500b9580c3c727c18e152c4bb', 0, '2020-09-27 21:07:37'),
('cf1cecd8925aa1cb76da4647fad8b7b9685a329950d3d40d3f1e162f26452a1a98b8a97b1e9aa882', 'ea4874673222b31bba59aaca104a2e3a0eaf81832e1cd36eea5209c92310574aae9a130e3ac34c64', 0, '2020-09-27 21:17:42'),
('cf85b3b47690a2eeacd59b2157005bb5e890b1cc5678b3870dc6887f19d4c680bdab2104c3ecd4b9', '8e865e109093043bb5a94e609c5e3f2d14982caedd866831df543e308d27ffa0dd61aaee8e03f028', 0, '2020-09-24 15:04:04'),
('cffbcc73c47a52a21901bea085b229e5f604e27fa9f58a70edf129414df734443e95dc46112c96c2', '82f33d298b00d7a51c73082fc1c967bfd552aaf47ea7f8ec2f1cd689fc2e972f883f26a581181209', 0, '2020-09-29 13:21:12'),
('d4257da93ee864690d62b406c49d6b9b869fcf67e8d371a9e84176e3ce52dbf61f94bbaacfa5a1a9', '8f3533e1fcb6094f095b8eeb47c6183c29cb0226328878837b84eadc9aebd699daa4c2202192df97', 0, '2020-09-27 15:48:56'),
('d42d98c179713a9e3519bf9ab5e23a5c41ae561c693e5895ea386246500acfb5b6eb958c5f9d235e', 'e3c3a73ed7053101d3fb031fc12b18678ddbc1ae32090c4dbd4056ebc3fcfd85de707471c6e76e7b', 0, '2020-09-24 15:33:56'),
('d9c10ff8c07624a2d691daa50b8121fa0ea60572b02e80b5d8debb6dc4a719ff918855f38153876e', '0d1e46e4e01366f54f16713732098fcf9d1d5f382e941e8caea0b262c51b7d3bbbb2d7f154d04e80', 0, '2020-09-27 16:13:29'),
('da7fee3ca19fc01a43ff4ba85cb0fe0e7146cb63f173f9fbfd4f4591fe5c440e04f8d658b62f3a50', '92c0e2c232b74c345d51b600f0bed77ae2ac681042a60c8dc04663840810c5d3509d88c7e5750c55', 0, '2020-09-27 15:38:40'),
('dd3bf2e320e41e4ce14e56d27eafc93488ed467df5c58e37b1773e74f73152de65560a8c672a6178', 'cecb7bc34ee3badf803fce3a02ad13e2f626c243435730fd33b156d91977873b6d6cfc56e01815f9', 0, '2020-09-27 15:38:56'),
('dd723930a049bad13fbf04e583ed104c1fc6a57d31ad3c8af3d36e1804e5db5e5849d06466f6b5c0', 'cfce546800795a1ba50485c830e57aa27c6837f8f81ad9ac068f40a2691630d1c1ecb828bdfeb7e3', 0, '2020-10-04 03:12:36'),
('de310a31a128653771210b1d79a137f45e46e76c9470a252201fe61538927020d04480a7922917b2', '4a98cbd9536e8cd9f02034105ab3ff7a079d47ddb8878d77b5f9d1e07cfebcf05df5ddc74c7c0de8', 0, '2020-09-24 15:02:39'),
('e00b81d41d60b2fd67c2c97be30a440eb4616d9d06e3ffcc894fc9b329511e2e2a73ee80f12a21a9', '3dccd79624eeaf8fab3cffb476548cdb1f7dae9d87f22faa35998a702f28c1270e159a58035edd12', 0, '2020-09-24 15:52:11'),
('e01ed2eb2439a680d50132e00148ddc6eaf4f0f34666a315ed2b599d63fb10944b3cb2e2766d1bc3', '93e69287460d301136a7c3cccbd78e848b509cb3bf61d9d2d14273b62d89d2778e8995dcaa1da434', 0, '2020-09-24 15:00:45'),
('e3fa4d13d281a416f990790cfe5942f56e75e000954e7154a9058be1251d8d9c120b63413c0ec903', 'a855fd9c3e04444dec49bb40cbce77ca25637fab3d3d10a17af15cc7e448d4125b1f51f40d309bb9', 0, '2020-09-24 16:05:12'),
('e8989c7c4d085fc3d501a20958b9c032810696e1ae37e7e724ef25b7feced2e2b3886c1ad99c3f24', '491c487c72b4715f40a02fb51a3809a236681dcbec213153a9da5d8c881f3cbf591c7d1dd481cf40', 0, '2020-09-30 18:52:59'),
('eb3c935fb7bcc0fa0577c006908767698d9090e7c5c3de8c0e6e0116e8f2e33f326837c71637a98f', 'a39d88df72e6cdfc369dc6d57c98a304872c67915fef509980df2123269e7bf3ac337e310d65880c', 0, '2020-10-04 03:19:25'),
('ec4faa1857105852ec37b77f287f625cd45e0f336ef2c4843e8c6147c45f49c9c0b1f21052eed46a', 'ec9869e70466713cb7af92f87fb0d4f4684d948e7f07e3374e528c7f99f9a719415546e1c9315c87', 0, '2020-10-03 09:59:43'),
('f0f58ccb127e2396baf09bfea025efc4984419b93157142d9f9afe83ab0e2133b79087fd155dac38', '727ee48d40de4009a47be017b92ebdddf8aca859f62b42215bd3dd62950329ba946d65e1863fa3ba', 0, '2020-10-02 15:57:08'),
('f651dffe23e2ea6aa07bc29e3e3c7f62a04a32c4bb9cf255a4f0fc5632d8c16967c43cfc87f76716', '932812e769dcc52beb84f8f286153e4b74f74f311e73bf5157d0fd99a0d9cfd15f48948a567ca1eb', 0, '2020-10-03 12:43:33'),
('fa9fbbd80645217a447bc47c058457511f61d21cd8028d3a7e315b722ea673c95f17460c6ec73f00', '45f0c7e222bb6fcb5f2f69f60adc6a5cb9b7420cd4301ba40ee287f6e3bb31205922c23ae5917fa6', 0, '2020-09-24 15:05:11'),
('fbb6de8ecdc136c57f8d23ff33332f47877d6e4eeccf6893bb4a9f8c6c0c491fade2903ffb3816b8', '9f3c34596af1a268c284c8d551034d93c3f837ab6f59e6f57ed39b0a77dc61f9561f40243e4bfc4c', 0, '2020-09-27 18:04:30'),
('fd4a6ae0a8d0e0520156312940c6dd134d29f15b1714e639686cd8a1a43d506374ad12996bcbf23a', '27081b21725a7905b1860a969b4b7f1e88360d66804cae94ed80109372c68c532593a5e391faaf85', 0, '2020-09-24 15:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `pharmacy_id` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `pharmacy_name` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `verified` int(11) NOT NULL,
  `lat` varchar(500) NOT NULL,
  `longitude` varchar(500) NOT NULL,
  `doc1` varchar(5000) NOT NULL,
  `doc2` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`pharmacy_id`, `manager_id`, `pharmacy_name`, `city`, `state`, `pincode`, `created_at`, `address`, `phone`, `verified`, `lat`, `longitude`, `doc1`, `doc2`) VALUES
(1, 25, 'Rajpreet Singh', 'Mumbai', '', '400080', '2019-10-03 15:57:31', 'Building Number 4, Flat Number 28, B-wing, Vaishali Park, Vaishali Nagar, Mulund West,, Balrajeshwar Road', 'rajpreet24033@gmail.com', 0, '', '', 'Rajpreet Singh25doc1.pdf', 'Rajpreet Singh25doc2.pdf'),
(2, 28, 'Rajpreet Singh', 'Mumbai', '', '400080', '2019-10-06 18:11:33', 'Building Number 4, Flat Number 28, B-wing, Vaishali Park, Vaishali Nagar, Mulund West,, Balrajeshwar Road', 'rajpreet24033@gmail.com', 1, '', '', 'Rajpreet Singh28doc1.pdf', 'Rajpreet Singh28doc2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `research_and_publication`
--

CREATE TABLE `research_and_publication` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `research_and_publication` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research_and_publication`
--

INSERT INTO `research_and_publication` (`id`, `doctor_id`, `research_and_publication`) VALUES
(4, 6, 'IEEE'),
(5, 8, 'asdadasd');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'General User'),
(2, 'Doctor'),
(3, 'Hospital'),
(4, 'Pharmacy'),
(5, 'Blood Bank'),
(6, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `roomcount`
--

CREATE TABLE `roomcount` (
  `id` int(11) NOT NULL,
  `hospital_id` int(11) DEFAULT NULL,
  `room_type` int(11) DEFAULT NULL,
  `ccount` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `Available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomcount`
--

INSERT INTO `roomcount` (`id`, `hospital_id`, `room_type`, `ccount`, `price`, `Available`) VALUES
(1, 6, 1, 500, 0, 500),
(2, 6, 2, 500, 0, 500),
(3, 6, 3, 500, 0, 500),
(4, 6, 4, 500, 0, 500),
(5, 6, 5, 500, 0, 500),
(6, 6, 6, 500, 0, 500),
(7, 6, 7, 500, 0, 500),
(8, 6, 8, 500, 0, 500),
(9, 7, 1, 0, 0, 0),
(10, 7, 2, 0, 0, 0),
(11, 7, 3, 0, 0, 0),
(12, 7, 4, 0, 0, 0),
(13, 7, 5, 0, 0, 0),
(14, 7, 6, 0, 0, 0),
(15, 7, 7, 0, 0, 0),
(16, 7, 8, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `occupancy_status_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `type` int(11) NOT NULL,
  `patient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `id` int(11) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `typeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`id`, `type`, `typeid`) VALUES
(1, 'Nursery', 1),
(2, 'Labour & Delivery Suite', 2),
(3, 'Isolation Room', 3),
(4, 'Intensive Care Unit (ICU)', 4),
(5, 'Four-Bedded Room', 5),
(6, 'Two-Bedded Room', 6),
(7, 'Single Deluxe Room', 7),
(8, 'VIP Suite', 8);

-- --------------------------------------------------------

--
-- Table structure for table `specialization_of_hospital`
--

CREATE TABLE `specialization_of_hospital` (
  `id` int(11) NOT NULL,
  `specialization_name` varchar(500) DEFAULT NULL,
  `idd` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialization_of_hospital`
--

INSERT INTO `specialization_of_hospital` (`id`, `specialization_name`, `idd`) VALUES
(1, 'SPECT/CT', 1),
(2, 'LINAC Accelerator (Novalis Tx)', 2),
(3, 'High Dose Rate (HDR) Brachytherapy', 3),
(4, 'Digitalized X-Ray, USG, CT-Scan, MRI', 4),
(5, 'EEG (Electroencephalography)', 5),
(6, 'Motorized Thrombectomy System', 6),
(7, '3 Tesla MRI', 7),
(8, 'C-Arm Scan', 8);

-- --------------------------------------------------------

--
-- Table structure for table `specialization_of_hospital_mapped`
--

CREATE TABLE `specialization_of_hospital_mapped` (
  `id` int(11) NOT NULL,
  `hospital_id` int(11) DEFAULT NULL,
  `specialization_of_hospital_id` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialization_of_hospital_mapped`
--

INSERT INTO `specialization_of_hospital_mapped` (`id`, `hospital_id`, `specialization_of_hospital_id`, `count`) VALUES
(1, 6, 1, 5),
(2, 6, 2, 5),
(3, 6, 3, 5),
(4, 6, 4, 5),
(7, 6, 7, 5),
(13, 6, 5, 0),
(14, 6, 6, 0),
(16, 6, 8, 0),
(17, 7, 1, 0),
(18, 7, 2, 0),
(19, 7, 3, 0),
(20, 7, 4, 0),
(21, 7, 5, 0),
(22, 7, 6, 0),
(23, 7, 7, 0),
(24, 7, 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `timings`
--

CREATE TABLE `timings` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `hospital_id` int(11) DEFAULT NULL,
  `day` varchar(300) DEFAULT NULL,
  `in_time` varchar(100) NOT NULL,
  `out_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timings`
--

INSERT INTO `timings` (`id`, `doctor_id`, `hospital_id`, `day`, `in_time`, `out_time`) VALUES
(1, 6, 6, '1', '', ''),
(2, 6, 6, '2', '', ''),
(3, 6, 6, '3', '', ''),
(4, 6, 6, '4', '', ''),
(5, 6, 6, '5', '', ''),
(6, 6, 6, '6', '', ''),
(7, 6, 6, '7', '13:00', '14:30'),
(8, 8, 6, '1', '', ''),
(9, 8, 6, '2', '', ''),
(10, 8, 6, '3', '', ''),
(11, 8, 6, '4', '', ''),
(12, 8, 6, '5', '', ''),
(13, 8, 6, '6', '', ''),
(14, 8, 6, '7', '00:00', '01:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(5000) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `gmail_user` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(5000) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `auth` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `role_id`, `name`, `first_name`, `middle_name`, `last_name`, `created_at`, `address`, `phone`, `gmail_user`, `email`, `password`, `city`, `state`, `pincode`, `auth`) VALUES
(15, 1, 'Rajpreet Singh', '', '', '', '2019-09-30 18:25:57', 'mulund', '9769577063', 0, 'rajpreet24033@gmail.com', '$2y$10$eJRL15Q1RwWrB.lqmcJcr.LXf4KjNM1poQeJRIWRndhrwdx6KPmZq', '', '', '', 1),
(19, 6, 'Rajpreet', '', '', '', '2019-09-27 20:52:51', '', '', 0, 'a@a.com', '$2y$10$RNDGpnJigWUZARq4vxQwyunxhhjLYfZQDh8T3hPnAIJpWWWlcJMAa', '', '', '', 1),
(20, 1, 'Gayatri', '', '', '', '2019-10-01 19:55:57', '', '', 0, 't@t.com', '$2y$10$KjetNEU.kKgNu0Pw3H8iNurtw0d0N8SCJIljpViZ8WHKnHvUzimkO', '', '', '', 0),
(21, 3, 'Rajpreet', '', '', '', '2019-10-02 16:04:38', '', '', 0, '1@1.com', '$2y$10$2wt6Jk6KS5ZxfrBmJYFuUuxYmtdXK/v0ACf0oT5Djl.JAHFisMRqO', '', '', '', 1),
(22, 1, 'Rajpreet', '', '', '', '2019-09-27 10:09:10', '', '', 0, '1@5.com', '$2y$10$2wt6Jk6KS5ZxfrBmJYFuUuxYmtdXK/v0ACf0oT5Djl.JAHFisMRqO', '', '', '', 0),
(24, 2, 'priya', '', '', '', '2019-10-03 13:34:56', 'Building Number 4, Flat Number 28, B-wing, Vaishali Park, Vaishali Nagar, Mulund West,, Balrajeshwar Road', '9769577063', 0, 'p@p.com', '$2y$10$lRwmdMoiozisZOdlJ4tGWu4zfhpxoRcZPdQ6qdW83FvrUM2lyIKOO', 'Mumbai', '', '400080', 1),
(25, 4, 'Pharmacy', '', '', '', '2019-10-06 18:00:10', '', '', 0, 'p@pp.com', '$2y$10$TRdlf3zimcTKbmda8RQfu.DFkCkrJsoCTQX93HNecoX.ZXEWgSrG2', '', '', '', 1),
(26, 2, 'Athul', '', '', '', '2019-10-04 03:16:35', 'Building Number 4, Flat Number 28, B-wing, Vaishali Park, Vaishali Nagar, Mulund West,, Balrajeshwar Road', 'rajpreet24033@gmail.com', 0, 'a@b.com', '$2y$10$Ux9h3rXuEkeftsmBNLjMz.D74uSe/XphDYUylHL8so9akB5ymu68u', 'Mumbai', '', '400080', 1),
(27, 3, 'Athul', '', '', '', '2019-10-04 03:18:15', '', '', 0, 'a@c.com', '$2y$10$44eLiPMDxcEXUJBDDdZUNuQqeDsEHwAVRoYNuPbWMn/x3Fax3yjwG', '', '', '', 1),
(28, 4, 'Pharmacy', '', '', '', '2019-10-06 18:11:32', '', '', 0, 'p@ppp.com', '$2y$10$GbgYaHqitc/g7SrF0vZi7O5lFWlcfogHqWfpOxFxMlmD05YlSKKK6', '', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_doc_id` (`doctor_id`),
  ADD KEY `fk_user_id` (`hospital_id`);

--
-- Indexes for table `awards_and_achievement`
--
ALTER TABLE `awards_and_achievement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_doc_id_1` (`doctor_id`);

--
-- Indexes for table `blood_bank`
--
ALTER TABLE `blood_bank`
  ADD PRIMARY KEY (`blood_bank_id`),
  ADD UNIQUE KEY `license_no` (`license_no`),
  ADD UNIQUE KEY `address` (`address`),
  ADD KEY `Blood_Bank_fk0` (`manager_id`);

--
-- Indexes for table `chart_demo`
--
ALTER TABLE `chart_demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`clinic_id`),
  ADD UNIQUE KEY `license_no` (`license_no`),
  ADD KEY `Clinic_fk0` (`manager_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`),
  ADD UNIQUE KEY `doc_license_no` (`doc_license_no`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `doctor_mapped_hospital`
--
ALTER TABLE `doctor_mapped_hospital`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_d_1` (`doctor_id`),
  ADD KEY `fk_d_3` (`timing_id`),
  ADD KEY `fk_d_2` (`hospital_id`);

--
-- Indexes for table `dr_request`
--
ALTER TABLE `dr_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_doc_id_3` (`doctor_id`),
  ADD KEY `fk_hos_id_1` (`hospital_id`);

--
-- Indexes for table `government_policies`
--
ALTER TABLE `government_policies`
  ADD PRIMARY KEY (`policy_id`),
  ADD UNIQUE KEY `policy_name` (`policy_name`),
  ADD KEY `Government_Policies_fk0` (`manager_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`),
  ADD KEY `Hospital_fk0` (`manager_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages_dr_mapped`
--
ALTER TABLE `languages_dr_mapped`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_speciality`
--
ALTER TABLE `medical_speciality`
  ADD PRIMARY KEY (`medical_speciality_id`),
  ADD UNIQUE KEY `medical_speciality_name` (`medical_speciality_name`);

--
-- Indexes for table `medical_speciality_doctor_mapped`
--
ALTER TABLE `medical_speciality_doctor_mapped`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_st` (`medical_speciality_id`),
  ADD KEY `fk_d` (`doctor_id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `med_map`
--
ALTER TABLE `med_map`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_med_mapp_1` (`medicine_id`),
  ADD KEY `fk_med_mapp_2` (`pharmacy_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`pharmacy_id`),
  ADD KEY `fk_grade_id_10` (`manager_id`);

--
-- Indexes for table `research_and_publication`
--
ALTER TABLE `research_and_publication`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_doc_id_2` (`doctor_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `roomcount`
--
ALTER TABLE `roomcount`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hos_id_4` (`hospital_id`),
  ADD KEY `fk_roomtype` (`room_type`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`,`hospital_id`),
  ADD KEY `Rooms_fk0` (`hospital_id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialization_of_hospital`
--
ALTER TABLE `specialization_of_hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialization_of_hospital_mapped`
--
ALTER TABLE `specialization_of_hospital_mapped`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hos_id_3` (`hospital_id`),
  ADD KEY `fk_sepc_id` (`specialization_of_hospital_id`);

--
-- Indexes for table `timings`
--
ALTER TABLE `timings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hos_id_2` (`hospital_id`),
  ADD KEY `fk_doc_id_4` (`doctor_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `Users_fk0` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `awards_and_achievement`
--
ALTER TABLE `awards_and_achievement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blood_bank`
--
ALTER TABLE `blood_bank`
  MODIFY `blood_bank_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clinic`
--
ALTER TABLE `clinic`
  MODIFY `clinic_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctor_mapped_hospital`
--
ALTER TABLE `doctor_mapped_hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dr_request`
--
ALTER TABLE `dr_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `government_policies`
--
ALTER TABLE `government_policies`
  MODIFY `policy_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `languages_dr_mapped`
--
ALTER TABLE `languages_dr_mapped`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medical_speciality`
--
ALTER TABLE `medical_speciality`
  MODIFY `medical_speciality_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medical_speciality_doctor_mapped`
--
ALTER TABLE `medical_speciality_doctor_mapped`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `med_map`
--
ALTER TABLE `med_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `pharmacy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `research_and_publication`
--
ALTER TABLE `research_and_publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roomcount`
--
ALTER TABLE `roomcount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `specialization_of_hospital`
--
ALTER TABLE `specialization_of_hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `specialization_of_hospital_mapped`
--
ALTER TABLE `specialization_of_hospital_mapped`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `timings`
--
ALTER TABLE `timings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `fk_doc_id` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`);

--
-- Constraints for table `awards_and_achievement`
--
ALTER TABLE `awards_and_achievement`
  ADD CONSTRAINT `fk_doc_id_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`);

--
-- Constraints for table `blood_bank`
--
ALTER TABLE `blood_bank`
  ADD CONSTRAINT `Blood_Bank_fk0` FOREIGN KEY (`manager_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `clinic`
--
ALTER TABLE `clinic`
  ADD CONSTRAINT `Clinic_fk0` FOREIGN KEY (`manager_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `doctor_mapped_hospital`
--
ALTER TABLE `doctor_mapped_hospital`
  ADD CONSTRAINT `fk_d_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`),
  ADD CONSTRAINT `fk_d_2` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`),
  ADD CONSTRAINT `fk_d_3` FOREIGN KEY (`timing_id`) REFERENCES `timings` (`id`);

--
-- Constraints for table `dr_request`
--
ALTER TABLE `dr_request`
  ADD CONSTRAINT `fk_doc_id_3` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`),
  ADD CONSTRAINT `fk_hos_id_1` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`);

--
-- Constraints for table `government_policies`
--
ALTER TABLE `government_policies`
  ADD CONSTRAINT `Government_Policies_fk0` FOREIGN KEY (`manager_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `Hospital_fk0` FOREIGN KEY (`manager_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `medical_speciality_doctor_mapped`
--
ALTER TABLE `medical_speciality_doctor_mapped`
  ADD CONSTRAINT `fk_d` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`),
  ADD CONSTRAINT `fk_st` FOREIGN KEY (`medical_speciality_id`) REFERENCES `medical_speciality` (`medical_speciality_id`);

--
-- Constraints for table `med_map`
--
ALTER TABLE `med_map`
  ADD CONSTRAINT `fk_med_mapp_1` FOREIGN KEY (`medicine_id`) REFERENCES `medicines` (`id`),
  ADD CONSTRAINT `fk_med_mapp_2` FOREIGN KEY (`pharmacy_id`) REFERENCES `pharmacy` (`pharmacy_id`);

--
-- Constraints for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD CONSTRAINT `fk_grade_id_10` FOREIGN KEY (`manager_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `research_and_publication`
--
ALTER TABLE `research_and_publication`
  ADD CONSTRAINT `fk_doc_id_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`);

--
-- Constraints for table `roomcount`
--
ALTER TABLE `roomcount`
  ADD CONSTRAINT `fk_hos_id_4` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`),
  ADD CONSTRAINT `fk_roomtype` FOREIGN KEY (`room_type`) REFERENCES `room_type` (`id`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `Rooms_fk0` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`);

--
-- Constraints for table `specialization_of_hospital_mapped`
--
ALTER TABLE `specialization_of_hospital_mapped`
  ADD CONSTRAINT `fk_hos_id_3` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`),
  ADD CONSTRAINT `fk_sepc_id` FOREIGN KEY (`specialization_of_hospital_id`) REFERENCES `specialization_of_hospital` (`id`);

--
-- Constraints for table `timings`
--
ALTER TABLE `timings`
  ADD CONSTRAINT `fk_doc_id_4` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`),
  ADD CONSTRAINT `fk_hos_id_2` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `Users_fk0` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
