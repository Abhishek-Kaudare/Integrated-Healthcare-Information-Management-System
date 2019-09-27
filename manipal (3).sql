-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2019 at 07:26 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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
  `doctor_name` varchar(255) NOT NULL,
  `doc_license_no` varchar(255) NOT NULL,
  `medical_speciality_id` int(11) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `Degree` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `verified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical_speciality`
--

CREATE TABLE `medical_speciality` (
  `medical_speciality_id` int(11) NOT NULL,
  `medical_speciality_name` varchar(255) NOT NULL,
  `dr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('0a399c4a0a9e59636dd8b9595e35028a15a12878fc1da346adade07e472adcbe3a72e03cbb5f1cf0', NULL, 8, NULL, '[]', 0, '2019-09-24 09:32:51', '2019-09-24 09:32:51', '2020-09-24 15:02:51'),
('0d1e46e4e01366f54f16713732098fcf9d1d5f382e941e8caea0b262c51b7d3bbbb2d7f154d04e80', NULL, 8, NULL, '[]', 0, '2019-09-27 10:43:29', '2019-09-27 10:43:29', '2020-09-27 16:13:29'),
('0d5876a643e7c94ebaa315ae0038be13431ed04e3e992c1e63ef5559cc329ea719bf3e90c9428a19', NULL, 8, NULL, '[]', 0, '2019-09-24 10:04:41', '2019-09-24 10:04:41', '2020-09-24 15:34:41'),
('225b799d91c06bb146d3ef967b55c17b169db13a72cdc0b6e87a8426efcfc3ef2dd42e0443c087ae', NULL, 8, NULL, '[]', 0, '2019-09-24 09:41:59', '2019-09-24 09:41:59', '2020-09-24 15:11:59'),
('24100c737528c5980611046dcbda2f4a110f018c1c4f8409dd5a15c5330653fd04bc59059397c59f', 1, 8, NULL, '[]', 0, '2019-09-19 09:27:03', '2019-09-19 09:27:03', '2020-09-19 14:57:03'),
('25163651f8ebd4671b2ef7b1d8f93d054516c53b8c527153ce726313c676de2b81fd1109829c02d1', NULL, 8, NULL, '[]', 0, '2019-09-27 10:48:41', '2019-09-27 10:48:41', '2020-09-27 16:18:41'),
('27081b21725a7905b1860a969b4b7f1e88360d66804cae94ed80109372c68c532593a5e391faaf85', NULL, 8, NULL, '[]', 0, '2019-09-24 09:31:30', '2019-09-24 09:31:30', '2020-09-24 15:01:30'),
('27f13e4bdca30729f089c6a91ab7223a95e191563cde9a7952a0d65d5521e4331b9eaa2735ced90d', NULL, 8, NULL, '[]', 0, '2019-09-27 10:05:55', '2019-09-27 10:05:55', '2020-09-27 15:35:55'),
('328828aa92a4dedd9ba80910e28f53fbcdacc10399edadd5a8d04c62feed3a9bb838989d485d33bc', NULL, 8, NULL, '[]', 0, '2019-09-27 11:11:10', '2019-09-27 11:11:10', '2020-09-27 16:41:10'),
('32ba318d62c2eea0feafebed68bbca2d73d42aa1bf55ca0ffb8c081c131e667e47af3b8076114bb3', NULL, 8, NULL, '[]', 0, '2019-09-24 09:32:23', '2019-09-24 09:32:23', '2020-09-24 15:02:23'),
('35fce76f0aedcfabcf4140b8a4bc5dc8c67cfa2285d46f54f4bc00a0196452cbf4d1ed7062da6abc', NULL, 8, NULL, '[]', 0, '2019-09-24 12:27:32', '2019-09-24 12:27:32', '2020-09-24 17:57:32'),
('3665899882e71b84690c88d19104fba4bedc69892305f577323d4e8a2ba9de9c1ae6df26042596c3', NULL, 8, NULL, '[]', 0, '2019-09-27 11:11:19', '2019-09-27 11:11:19', '2020-09-27 16:41:19'),
('37581a107dc2168216187b9ca413b08fea7d87528f4bf8668debb72e6d76b656409f7ac882753903', NULL, 8, NULL, '[]', 0, '2019-09-24 10:35:27', '2019-09-24 10:35:27', '2020-09-24 16:05:27'),
('3db1a23e8c2cedef8b68342a493980708610b95dbec8cfdb2232edce29bb3a72f00f3a7e8cd44949', NULL, 8, NULL, '[]', 0, '2019-09-24 10:24:33', '2019-09-24 10:24:33', '2020-09-24 15:54:33'),
('3dccd79624eeaf8fab3cffb476548cdb1f7dae9d87f22faa35998a702f28c1270e159a58035edd12', NULL, 8, NULL, '[]', 0, '2019-09-24 10:22:10', '2019-09-24 10:22:10', '2020-09-24 15:52:10'),
('41a62d260b4ad25652690804603684caf24aaa2a520b4f57b26c4c40c2b6124480be04aa86762ca9', NULL, 8, NULL, '[]', 0, '2019-09-24 10:31:09', '2019-09-24 10:31:09', '2020-09-24 16:01:09'),
('430d1abb2d29163eb2cced9106581fde1f12d6e074c583f504f31512c6a82edf39092ccd11cf1556', NULL, 8, NULL, '[]', 0, '2019-09-27 10:48:13', '2019-09-27 10:48:13', '2020-09-27 16:18:13'),
('45f0c7e222bb6fcb5f2f69f60adc6a5cb9b7420cd4301ba40ee287f6e3bb31205922c23ae5917fa6', NULL, 8, NULL, '[]', 0, '2019-09-24 09:35:11', '2019-09-24 09:35:11', '2020-09-24 15:05:11'),
('4a98cbd9536e8cd9f02034105ab3ff7a079d47ddb8878d77b5f9d1e07cfebcf05df5ddc74c7c0de8', NULL, 8, NULL, '[]', 0, '2019-09-24 09:32:39', '2019-09-24 09:32:39', '2020-09-24 15:02:39'),
('4d179cddc4d5042cfdeaf859af3719629fcd31137dadd1ce05d0dfbf3b21eb3f7375b9397e1bc890', NULL, 8, NULL, '[]', 0, '2019-09-24 09:41:11', '2019-09-24 09:41:11', '2020-09-24 15:11:11'),
('51b1f1254869f562ee6818ba5038f25f34a0ccd024c0dc1e302d5c3e27885bc5b0d94cac477568e2', NULL, 8, NULL, '[]', 0, '2019-09-24 09:35:39', '2019-09-24 09:35:39', '2020-09-24 15:05:39'),
('53bd911b89b449660a27db609a50dd0fa2312d69dadaa56d5573b448ca9dc8bc206c0e1b59d880d7', NULL, 8, NULL, '[]', 0, '2019-09-24 09:33:09', '2019-09-24 09:33:09', '2020-09-24 15:03:09'),
('5561ee49e3aa2ea233a610d584bee7c0c36540b2d17ca3f8f70010c5b7488e4be51c47cc891e1178', NULL, 8, NULL, '[]', 0, '2019-09-27 10:09:32', '2019-09-27 10:09:32', '2020-09-27 15:39:32'),
('5f1bcf36d528d17fb8362afb0ee9c3b33e45e41e1add32cb48435d9f120d8f0631936074ea781166', NULL, 8, NULL, '[]', 0, '2019-09-24 09:38:51', '2019-09-24 09:38:51', '2020-09-24 15:08:51'),
('61909d18a081cc2e817e3e619245966956d739350369c090dc06ba0e9ba29106f38b4c9e9fb0b153', NULL, 8, NULL, '[]', 0, '2019-09-27 10:05:57', '2019-09-27 10:05:57', '2020-09-27 15:35:57'),
('6263512200fdfc1f1e0747a635930951c057c34f22ffb87d4d6d44bd98a5577faaf914ebb4013514', 1, 8, NULL, '[]', 0, '2019-09-19 05:44:22', '2019-09-19 05:44:22', '2020-09-19 11:14:22'),
('66d47f3c98e2bca14eed27d09b7e15350cf15277de85148d0e3fee4712cf34ac341c16dcd0c49d27', NULL, 8, NULL, '[]', 0, '2019-09-24 09:29:28', '2019-09-24 09:29:28', '2020-09-24 14:59:28'),
('67569ba182c96c903fc98e65ea9aec792807b7306000ba9bbb30ef70c4fa4b6e44776226e5d39755', NULL, 8, NULL, '[]', 0, '2019-09-27 09:33:53', '2019-09-27 09:33:53', '2020-09-27 15:03:53'),
('69c97e5f7453c2d452aee2ba32d11281bd0d8fb0133f399216e0352777e3b330432acd3b6c8a1a72', NULL, 8, NULL, '[]', 0, '2019-09-24 09:48:42', '2019-09-24 09:48:42', '2020-09-24 15:18:42'),
('6a407da82bbd6053703e09a560fc0b6be67675b11e80bfaee3bef7b1e56d65c546bff9387fb5340a', NULL, 8, NULL, '[]', 0, '2019-09-24 09:35:05', '2019-09-24 09:35:05', '2020-09-24 15:05:05'),
('7291ab35883a8ddc49ee57276831215aea202b9d965e4a150c42822a18ffb6f8383c755fcf66bf94', NULL, 8, NULL, '[]', 0, '2019-09-24 12:21:08', '2019-09-24 12:21:08', '2020-09-24 17:51:08'),
('75bdf824f8f524094fe6dbf199edc02bce00f6ef101b35527a462c1efa21504509c6e00f5dfc5b99', NULL, 8, NULL, '[]', 0, '2019-09-24 09:39:20', '2019-09-24 09:39:20', '2020-09-24 15:09:20'),
('7899c6f2fd1bb12ffffa6c648df5559029c5a90faa20ecf8fdf5e670914adae5a3936167dc15ece0', NULL, 8, NULL, '[]', 0, '2019-09-27 10:54:31', '2019-09-27 10:54:31', '2020-09-27 16:24:31'),
('790a636f71b33bbcda2ca05994d640204eb9576cb601eaf841011d23f780409878caa6a27d62cada', NULL, 8, NULL, '[]', 0, '2019-09-24 12:30:55', '2019-09-24 12:30:55', '2020-09-24 18:00:55'),
('7c92cbd426189addcb0e675bce253e6ca32c0154cd90dd2d65d1cae83573d737b5241c9e4e3e9fc7', NULL, 8, NULL, '[]', 0, '2019-09-24 09:30:23', '2019-09-24 09:30:23', '2020-09-24 15:00:23'),
('8749bfa3f9bde77d318b48dc92c1a0fc82fcf4fbab6367819e97da04b73cbcd3892843f4c910bf0e', NULL, 8, NULL, '[]', 0, '2019-09-24 09:38:28', '2019-09-24 09:38:28', '2020-09-24 15:08:28'),
('87874e0fc8ce915368454b0bcef032114e2ca58bb52b1b313a968e96f3ab1703d5d8cf64b6d321d1', 1, 8, NULL, '[]', 0, '2019-09-19 09:25:00', '2019-09-19 09:25:00', '2020-09-19 14:55:00'),
('8e865e109093043bb5a94e609c5e3f2d14982caedd866831df543e308d27ffa0dd61aaee8e03f028', NULL, 8, NULL, '[]', 0, '2019-09-24 09:34:04', '2019-09-24 09:34:04', '2020-09-24 15:04:04'),
('8f3533e1fcb6094f095b8eeb47c6183c29cb0226328878837b84eadc9aebd699daa4c2202192df97', NULL, 8, NULL, '[]', 0, '2019-09-27 10:18:55', '2019-09-27 10:18:55', '2020-09-27 15:48:55'),
('8f3aa0701b17a7ab42744e6025b15968b288b030d49a1cecdac83d5d3bdf5f58471cbff419a970f8', NULL, 8, NULL, '[]', 0, '2019-09-27 11:13:56', '2019-09-27 11:13:56', '2020-09-27 16:43:56'),
('91429730754aff452c4671c4c6b2456a53784995d06527d6243af2816c717a5a39c7fedacb9367a3', NULL, 8, NULL, '[]', 0, '2019-09-24 09:31:13', '2019-09-24 09:31:13', '2020-09-24 15:01:13'),
('91d27f232227b51a88b30cd48fa4115633317616939da6fb181e8c49bdffd63c9cc3e4238ba22e9d', 1, 8, NULL, '[]', 0, '2019-09-19 05:45:04', '2019-09-19 05:45:04', '2020-09-19 11:15:04'),
('92c0e2c232b74c345d51b600f0bed77ae2ac681042a60c8dc04663840810c5d3509d88c7e5750c55', NULL, 8, NULL, '[]', 0, '2019-09-27 10:08:40', '2019-09-27 10:08:40', '2020-09-27 15:38:40'),
('930b6f0527724b2b84e451ba144433629d3af2f25430a4a73f1895fdfe7381bc509e4f732750df23', NULL, 8, NULL, '[]', 0, '2019-09-27 10:08:50', '2019-09-27 10:08:50', '2020-09-27 15:38:50'),
('93e69287460d301136a7c3cccbd78e848b509cb3bf61d9d2d14273b62d89d2778e8995dcaa1da434', NULL, 8, NULL, '[]', 0, '2019-09-24 09:30:45', '2019-09-24 09:30:45', '2020-09-24 15:00:45'),
('95cd617801ef7c27c5acd5380325077af94ab270a71233216bba038f2d91d6f1c71709d9fb39372b', NULL, 8, NULL, '[]', 0, '2019-09-27 11:10:50', '2019-09-27 11:10:50', '2020-09-27 16:40:50'),
('965abc48b9c03bc40e4b301612c7d20ed82b37efb0a29ee2ac8b946e9b3fc5d97cf3e87b4e950d0a', NULL, 8, NULL, '[]', 0, '2019-09-24 09:35:49', '2019-09-24 09:35:49', '2020-09-24 15:05:49'),
('9df92db425bc0caca4a853ded4ddb3c079a1a48e3b327ebab3051aa6c02fc21a8550699a004dc14b', NULL, 8, NULL, '[]', 0, '2019-09-24 09:47:29', '2019-09-24 09:47:29', '2020-09-24 15:17:29'),
('9e9e1f3dbc713ac127da7d76bd4c1d34b52bdef30a4b0b1658ff99807bb4c94f31d988319626fc59', NULL, 8, NULL, '[]', 0, '2019-09-27 10:57:07', '2019-09-27 10:57:07', '2020-09-27 16:27:07'),
('a0d07a91b01fb8a065bd01c3194a1dd1462bd10f2ba5edd23ec872c3977406b7f5c73c0ead0e52e5', NULL, 8, NULL, '[]', 0, '2019-09-27 10:06:59', '2019-09-27 10:06:59', '2020-09-27 15:36:59'),
('a3365840d6698d38ed17290b44137765692f7cc861f3c58d1bf6756f44db76be943cb62e3e98b317', NULL, 8, NULL, '[]', 0, '2019-09-27 10:57:14', '2019-09-27 10:57:14', '2020-09-27 16:27:14'),
('a5ae8e5c08ecb392e329259bc7cf7b88bbc7d42aaf09cf156ffce8cf62235ae83738b600a2138323', NULL, 8, NULL, '[]', 0, '2019-09-24 09:35:26', '2019-09-24 09:35:26', '2020-09-24 15:05:26'),
('a75164ba91638e0a1a65df788a9fc088d7f818c54002f80e31723dc703879f5f45b3005cbeab3a47', NULL, 8, NULL, '[]', 0, '2019-09-24 10:35:54', '2019-09-24 10:35:54', '2020-09-24 16:05:54'),
('a855fd9c3e04444dec49bb40cbce77ca25637fab3d3d10a17af15cc7e448d4125b1f51f40d309bb9', NULL, 8, NULL, '[]', 0, '2019-09-24 10:35:12', '2019-09-24 10:35:12', '2020-09-24 16:05:12'),
('b6f418d02625c3af6fbcff8da2db5bd265089b7bce084e5a95c49a8e8fa4d83a8d996464eb7458b2', 1, 8, NULL, '[]', 0, '2019-09-19 09:37:45', '2019-09-19 09:37:45', '2020-09-19 15:07:45'),
('b840428c14e314c33b281a3483fa9b012c4684947e54795be3ee6d20cbb310abe1348c9258283f1f', 1, 8, NULL, '[]', 0, '2019-09-19 05:46:03', '2019-09-19 05:46:03', '2020-09-19 11:16:03'),
('b97531a90e22793972af1be708efc706bba6337ba5357ed7b2c00038abf07066d284e5cd52fe738a', NULL, 8, NULL, '[]', 0, '2019-09-24 10:41:34', '2019-09-24 10:41:34', '2020-09-24 16:11:34'),
('bd3df34c06af112abda72992f70880c5151d1e80e8abbcfcc9b07f9229f74d4dfaa5278c78cfa66c', NULL, 8, NULL, '[]', 0, '2019-09-24 10:35:43', '2019-09-24 10:35:43', '2020-09-24 16:05:43'),
('c009f22bae06400f7b1944c46c4827e8cab838e2d4a3b340172d1b5561aaa11ad49887c60d23fbd3', NULL, 8, NULL, '[]', 0, '2019-09-24 12:36:34', '2019-09-24 12:36:34', '2020-09-24 18:06:34'),
('cecb7bc34ee3badf803fce3a02ad13e2f626c243435730fd33b156d91977873b6d6cfc56e01815f9', NULL, 8, NULL, '[]', 0, '2019-09-27 10:08:55', '2019-09-27 10:08:55', '2020-09-27 15:38:55'),
('d444c949ffc6fa9fc3c1ec3f369851905d224bdfb3849a39b02a73980c981955112f0696eba9e8b4', NULL, 8, NULL, '[]', 0, '2019-09-27 11:07:58', '2019-09-27 11:07:58', '2020-09-27 16:37:58'),
('d58a41065ab529cdee4e419d2ab465093ed55c14dce3fc811b9bdb37c095e2dd65af02a7a72875c8', NULL, 8, NULL, '[]', 0, '2019-09-24 09:47:59', '2019-09-24 09:47:59', '2020-09-24 15:17:59'),
('d76cd9b50b3aac6372e419e5211b5f8b1c14b5c2e30bc68b29a4b5318080c2c8268d8d665885a374', NULL, 8, NULL, '[]', 0, '2019-09-24 09:30:52', '2019-09-24 09:30:52', '2020-09-24 15:00:52'),
('de3a9350129b9590c32aa229aae51e599f5fc670a9038c06720933d57e6a66f6f2a2f4c6c2c36ba2', NULL, 8, NULL, '[]', 0, '2019-09-24 09:42:25', '2019-09-24 09:42:25', '2020-09-24 15:12:25'),
('df3c05d93640bca0dae98260226b690467547d3d84d705a40a55108dd302e4f423cc97cfe94e0c51', NULL, 8, NULL, '[]', 0, '2019-09-24 10:36:00', '2019-09-24 10:36:00', '2020-09-24 16:06:00'),
('e3c3a73ed7053101d3fb031fc12b18678ddbc1ae32090c4dbd4056ebc3fcfd85de707471c6e76e7b', NULL, 8, NULL, '[]', 0, '2019-09-24 10:03:56', '2019-09-24 10:03:56', '2020-09-24 15:33:56'),
('e3cd3fabc9ec920970fa9e67e63b517712372ffe7a08eea634304f0e18ad5931ffd23f8d4ae676a4', NULL, 8, NULL, '[]', 0, '2019-09-27 10:56:58', '2019-09-27 10:56:58', '2020-09-27 16:26:58'),
('e7e13b2d5d39c1018937b2070362de9e2670a50735b4bdd8aead9ce71c452ef9c9c9addb6bd59ab7', NULL, 8, NULL, '[]', 0, '2019-09-24 09:34:35', '2019-09-24 09:34:35', '2020-09-24 15:04:35'),
('e7f3d0c500a912e1590cbdde82300e4239a2418da690fd080c3c5e0c668930c1cdbd565339b60f3e', NULL, 8, NULL, '[]', 0, '2019-09-27 10:47:56', '2019-09-27 10:47:56', '2020-09-27 16:17:56'),
('ebcb652f0a3334a4cfec94c29924577cf7c7fc5fa3b44c3ddde71d1dce53716325c37e224ff08312', NULL, 8, NULL, '[]', 0, '2019-09-27 10:05:48', '2019-09-27 10:05:48', '2020-09-27 15:35:48'),
('f059fadfdf94524c377e16b437ade888232002a7e698c31dca1d128b1075afd961b2f632070c827c', NULL, 8, NULL, '[]', 0, '2019-09-27 09:34:39', '2019-09-27 09:34:39', '2020-09-27 15:04:39');

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
('078eac38689709d76c9b38f30bb969ac8a6dcd9d508d7ee91c90571171d314d7d5dd7daefbfc8a2e', 'd444c949ffc6fa9fc3c1ec3f369851905d224bdfb3849a39b02a73980c981955112f0696eba9e8b4', 0, '2020-09-27 16:37:58'),
('0974f09e53045521a33599923c6fa26121212b36f53503bb6453b46ebbead252a030100c60a9d1c1', '27f13e4bdca30729f089c6a91ab7223a95e191563cde9a7952a0d65d5521e4331b9eaa2735ced90d', 0, '2020-09-27 15:35:55'),
('0cba6e5887291ff8ab895ada6e3444eaab97fb6027134513662fa6506175e95d6c7a127287befca9', 'd76cd9b50b3aac6372e419e5211b5f8b1c14b5c2e30bc68b29a4b5318080c2c8268d8d665885a374', 0, '2020-09-24 15:00:52'),
('16251585ec09c18c9cbe093c7fce9a692671e35616bea5aa36e57d206511244b565248d4276d779c', 'a75164ba91638e0a1a65df788a9fc088d7f818c54002f80e31723dc703879f5f45b3005cbeab3a47', 0, '2020-09-24 16:05:54'),
('17d7acb9b61b483aa45f4dbb52df081828bef845c49038022bfe6735d1b2a71660a6598b8d8bdce5', '53bd911b89b449660a27db609a50dd0fa2312d69dadaa56d5573b448ca9dc8bc206c0e1b59d880d7', 0, '2020-09-24 15:03:10'),
('188460b900aa6f5e15c59085b2852aa554b0594402aa7beb3340792425b367918a44ed8ee876c024', 'd58a41065ab529cdee4e419d2ab465093ed55c14dce3fc811b9bdb37c095e2dd65af02a7a72875c8', 0, '2020-09-24 15:17:59'),
('239dd7a98ed18e8b3e27931a5f2933a816a1ff3e88d95abd102db6e668c21dce33867d7553b40e20', 'de3a9350129b9590c32aa229aae51e599f5fc670a9038c06720933d57e6a66f6f2a2f4c6c2c36ba2', 0, '2020-09-24 15:12:26'),
('30863b480c32d9e2cd6ccea67cc7f80f4da4bbb5cf79b041f520a8aaac72628b793aaae7f063958b', '51b1f1254869f562ee6818ba5038f25f34a0ccd024c0dc1e302d5c3e27885bc5b0d94cac477568e2', 0, '2020-09-24 15:05:39'),
('341c74e166efc2fe0a57ed4043c881715a486771f4eb01a141dbcd2e864f2be2172c33707984421b', '6a407da82bbd6053703e09a560fc0b6be67675b11e80bfaee3bef7b1e56d65c546bff9387fb5340a', 0, '2020-09-24 15:05:05'),
('378ef4e95ba2debbcc2c033312b067208d3c63e3bf82a3ad51251b6de0e98b6b27a831235bc194a7', 'ebcb652f0a3334a4cfec94c29924577cf7c7fc5fa3b44c3ddde71d1dce53716325c37e224ff08312', 0, '2020-09-27 15:35:48'),
('38a6442c8fc765f64d2727755ee76f1bc2a248f070dd454433a83d572ce50ed72181959284c700c2', '35fce76f0aedcfabcf4140b8a4bc5dc8c67cfa2285d46f54f4bc00a0196452cbf4d1ed7062da6abc', 0, '2020-09-24 17:57:33'),
('3940d08eb4d0f8edf56fccd3d8c35fd6245d705f52abba9aca83955770f66595a7e359eb22ff0612', '32ba318d62c2eea0feafebed68bbca2d73d42aa1bf55ca0ffb8c081c131e667e47af3b8076114bb3', 0, '2020-09-24 15:02:23'),
('3aa07177b3419cb19fefc1ff9a0958cdcb49155173835355c41ac01b7652b9595f901085eda55c4b', '41a62d260b4ad25652690804603684caf24aaa2a520b4f57b26c4c40c2b6124480be04aa86762ca9', 0, '2020-09-24 16:01:09'),
('3e28a435696e8652b5cbff0fd8e00065e02133592c9ce2e239ab0565ab5abaaf6685ff63eb424c90', 'bd3df34c06af112abda72992f70880c5151d1e80e8abbcfcc9b07f9229f74d4dfaa5278c78cfa66c', 0, '2020-09-24 16:05:43'),
('4067efb614fa594014d5ef7d4ede06fb777013d5a4a08a7988043014ae6b552eff7ca942ab02af6a', '75bdf824f8f524094fe6dbf199edc02bce00f6ef101b35527a462c1efa21504509c6e00f5dfc5b99', 0, '2020-09-24 15:09:21'),
('41934bfbc4cf1b2a6684650d00509a42b14b147e39f6c0820c2c071870f100399fe155f058a65246', '5f1bcf36d528d17fb8362afb0ee9c3b33e45e41e1add32cb48435d9f120d8f0631936074ea781166', 0, '2020-09-24 15:08:51'),
('448c83aa1748ddff98ee36c32ea1eb6ac184a6cc681f537d679559c90939968b00d48277131e6909', '8749bfa3f9bde77d318b48dc92c1a0fc82fcf4fbab6367819e97da04b73cbcd3892843f4c910bf0e', 0, '2020-09-24 15:08:29'),
('4525fc4220594b5527e0751333040bbe11d85c08f273cc8c9b7b25cc858fef5bcaf0ac8d235aef5b', '25163651f8ebd4671b2ef7b1d8f93d054516c53b8c527153ce726313c676de2b81fd1109829c02d1', 0, '2020-09-27 16:18:41'),
('46c8084d358ef2e895df626012e2a6971b76987e0184386c89548696fafc9e6b7a21f1cefaacd7a2', '930b6f0527724b2b84e451ba144433629d3af2f25430a4a73f1895fdfe7381bc509e4f732750df23', 0, '2020-09-27 15:38:50'),
('4790ffa1146d57d8d599182ba812a5b21e1706ba31a0e3dd71a10c2e81f4f1dde51968785865002c', '0a399c4a0a9e59636dd8b9595e35028a15a12878fc1da346adade07e472adcbe3a72e03cbb5f1cf0', 0, '2020-09-24 15:02:52'),
('4b1c0e7d0e5d92fd82efeb73f549d1530ca7d271940b0848b4d3f5d87b95f6509fad78205be05d55', '7c92cbd426189addcb0e675bce253e6ca32c0154cd90dd2d65d1cae83573d737b5241c9e4e3e9fc7', 0, '2020-09-24 15:00:23'),
('52e71d8b77c8b7ee1a7083971003291124d24e5603814941f2f80262b89dfd9d0e43c3173a619091', '965abc48b9c03bc40e4b301612c7d20ed82b37efb0a29ee2ac8b946e9b3fc5d97cf3e87b4e950d0a', 0, '2020-09-24 15:05:50'),
('53a37eec6f1159063b01a64230b6dbe1508c72c100ceb33970e37b04fd9d08156d72c09b7bebc7c1', '328828aa92a4dedd9ba80910e28f53fbcdacc10399edadd5a8d04c62feed3a9bb838989d485d33bc', 0, '2020-09-27 16:41:10'),
('580d0fd52e8d70ef0de03f76f2cd2cd0be0e7bfb1874c1ce46fd48bbe2ebc7d77240e1e6f7e34c0f', 'df3c05d93640bca0dae98260226b690467547d3d84d705a40a55108dd302e4f423cc97cfe94e0c51', 0, '2020-09-24 16:06:00'),
('58a9d569a7ab9a20da22354e0f92d5c2537a138e8f910f1ba710550cc4064ee489f0b64040afe49c', 'a5ae8e5c08ecb392e329259bc7cf7b88bbc7d42aaf09cf156ffce8cf62235ae83738b600a2138323', 0, '2020-09-24 15:05:27'),
('594c4a7a0f01c1c2a953fd16ed2b2e8a3894c13a1a57cc2d2d3d02a0ffdb3af8b148b7aa1d699083', '4d179cddc4d5042cfdeaf859af3719629fcd31137dadd1ce05d0dfbf3b21eb3f7375b9397e1bc890', 0, '2020-09-24 15:11:11'),
('5bdece6ad08c739be3c94920b78276648c63a552ff5128dafec06020bcf82a130d4887e56fec0a3e', '790a636f71b33bbcda2ca05994d640204eb9576cb601eaf841011d23f780409878caa6a27d62cada', 0, '2020-09-24 18:00:55'),
('62fb95378c238aa3a47d82adf6717ea2072d1ebaed62479d4b92d9b4c0257a0153bc66a70babc815', '430d1abb2d29163eb2cced9106581fde1f12d6e074c583f504f31512c6a82edf39092ccd11cf1556', 0, '2020-09-27 16:18:13'),
('66f5033e1cc3db13c4979bc035298ece910ff1c2e65e662aef686af1cdf79e14430510bc086820c8', '95cd617801ef7c27c5acd5380325077af94ab270a71233216bba038f2d91d6f1c71709d9fb39372b', 0, '2020-09-27 16:40:51'),
('678487e650517995e06176991b99f814812a7c1e2815bc6a0fd1e4a44e27df81a3a1a73159fef1db', '3db1a23e8c2cedef8b68342a493980708610b95dbec8cfdb2232edce29bb3a72f00f3a7e8cd44949', 0, '2020-09-24 15:54:33'),
('68e6b43a880f2290447fc7f8f8a8b7650b4f0221b9c7bac6a8f94c38b7a5c9adc153b690d1683bb8', '3665899882e71b84690c88d19104fba4bedc69892305f577323d4e8a2ba9de9c1ae6df26042596c3', 0, '2020-09-27 16:41:20'),
('6952b5076633cb4927faa983d84974b8de3f784df1fcd41a5ef0f9fc4249bed128830c0bca1a5823', 'e3cd3fabc9ec920970fa9e67e63b517712372ffe7a08eea634304f0e18ad5931ffd23f8d4ae676a4', 0, '2020-09-27 16:26:59'),
('6a887bc11deab535795247f45bbdb308709486ac15cbfd22bfee668cd9134d6aaefa7b91640beddd', '61909d18a081cc2e817e3e619245966956d739350369c090dc06ba0e9ba29106f38b4c9e9fb0b153', 0, '2020-09-27 15:35:57'),
('705785db7f9b7386e843dded97237969f9e7bb7e6d642b645e2a6cfee81e9e58767483e96920000a', '9df92db425bc0caca4a853ded4ddb3c079a1a48e3b327ebab3051aa6c02fc21a8550699a004dc14b', 0, '2020-09-24 15:17:29'),
('79cdaebf6d9fe9bfbc9b656107b3044bb88ccd36972450b8196167645477b44e85e5e118e7f1b925', 'f059fadfdf94524c377e16b437ade888232002a7e698c31dca1d128b1075afd961b2f632070c827c', 0, '2020-09-27 15:04:40'),
('809fb15644503690be6c0c8eb9b9ca2651f2afa66940a8fe96aa6655d3dd2752a628fa01f33a5d6b', '69c97e5f7453c2d452aee2ba32d11281bd0d8fb0133f399216e0352777e3b330432acd3b6c8a1a72', 0, '2020-09-24 15:18:42'),
('874e14e0cc3ac71de52c71a2462a3c4d3b981e709321564e93f1089267c0b4aef8148c36c007f249', 'e7f3d0c500a912e1590cbdde82300e4239a2418da690fd080c3c5e0c668930c1cdbd565339b60f3e', 0, '2020-09-27 16:17:56'),
('8ebe1973a84b46bd35a53eee77f1dfa8f3eb146ead08a680822e2ed7286df9862a23c6650ccd864b', '8f3aa0701b17a7ab42744e6025b15968b288b030d49a1cecdac83d5d3bdf5f58471cbff419a970f8', 0, '2020-09-27 16:43:56'),
('92a9604768ebae1ad6484c5e821d2dfea5dded71df612a6551d0ee9941f6b71ffaae7a2e659e1fc4', 'c009f22bae06400f7b1944c46c4827e8cab838e2d4a3b340172d1b5561aaa11ad49887c60d23fbd3', 0, '2020-09-24 18:06:34'),
('9bda9c049f76a1ba74236bb0fb6bfc490c17d7e7862098316b5f1dff9e2c25368ebda1bde607907c', 'a0d07a91b01fb8a065bd01c3194a1dd1462bd10f2ba5edd23ec872c3977406b7f5c73c0ead0e52e5', 0, '2020-09-27 15:37:00'),
('a03247b88bc1d7df37210f3d4ce09b6081a99f32aabe50593b694393801f978af68e3dc41fc31dce', '225b799d91c06bb146d3ef967b55c17b169db13a72cdc0b6e87a8426efcfc3ef2dd42e0443c087ae', 0, '2020-09-24 15:11:59'),
('a2605bba365a14489cd2d501b89d97ca1d30dac8b21d7b5b244c5e50d65092a24639effdde966233', '91429730754aff452c4671c4c6b2456a53784995d06527d6243af2816c717a5a39c7fedacb9367a3', 0, '2020-09-24 15:01:13'),
('b89000a85e9216020e8a135052918ee908e4ad6301d2e05578dbec71811e29eb5f5d0cd10afa6685', '7899c6f2fd1bb12ffffa6c648df5559029c5a90faa20ecf8fdf5e670914adae5a3936167dc15ece0', 0, '2020-09-27 16:24:31'),
('bc092eaa8a019c1eef109042b72f27a4180aa8b9befe5a80246684218a056ca0081a971f3cc2ebe9', '0d5876a643e7c94ebaa315ae0038be13431ed04e3e992c1e63ef5559cc329ea719bf3e90c9428a19', 0, '2020-09-24 15:34:42'),
('bd82b3a9f7fc0a11d4a264dc34b934775fda8727c2e39a9662252fdfcb1cf2898fc990e62a320ce1', 'e7e13b2d5d39c1018937b2070362de9e2670a50735b4bdd8aead9ce71c452ef9c9c9addb6bd59ab7', 0, '2020-09-24 15:04:35'),
('c3dd47faba80169852e9abb3232bcc4c4b6089d02398c72b9ecc5db095012d9897fe0fe9132523f1', '5561ee49e3aa2ea233a610d584bee7c0c36540b2d17ca3f8f70010c5b7488e4be51c47cc891e1178', 0, '2020-09-27 15:39:33'),
('c4c762ca4462b738ca08102ff315ce06130922646d6f3410e151fbe18747625b0055cf57ec8fca1b', 'b97531a90e22793972af1be708efc706bba6337ba5357ed7b2c00038abf07066d284e5cd52fe738a', 0, '2020-09-24 16:11:34'),
('c4ef1a031d21fb1ffda9b9db210dd9e32daa424908370251dc6558f952de09f04fbbf0259b993b98', 'a3365840d6698d38ed17290b44137765692f7cc861f3c58d1bf6756f44db76be943cb62e3e98b317', 0, '2020-09-27 16:27:14'),
('c59021961485feb4c6958110bba2fb70d379c0055bb545ecf506839cfb6e4419b70ce903fefb05df', '67569ba182c96c903fc98e65ea9aec792807b7306000ba9bbb30ef70c4fa4b6e44776226e5d39755', 0, '2020-09-27 15:03:53'),
('c7fc0989bb8031b67e9d4f3e596b01318be12c890bf2cc2be5e61e38462f7ed26f1c93127edba139', '66d47f3c98e2bca14eed27d09b7e15350cf15277de85148d0e3fee4712cf34ac341c16dcd0c49d27', 0, '2020-09-24 14:59:28'),
('c8fd8f9f15b7c993d688a5c2e0e7acb77e350582c9eeef44732fe09be009487bab6c10d384662bf9', '9e9e1f3dbc713ac127da7d76bd4c1d34b52bdef30a4b0b1658ff99807bb4c94f31d988319626fc59', 0, '2020-09-27 16:27:07'),
('ca36d228c7f36c1883b8a354381bbe3951e92a59ddb9eb515ecf9244008bc40a605c3a273e7342dc', '7291ab35883a8ddc49ee57276831215aea202b9d965e4a150c42822a18ffb6f8383c755fcf66bf94', 0, '2020-09-24 17:51:09'),
('cf85b3b47690a2eeacd59b2157005bb5e890b1cc5678b3870dc6887f19d4c680bdab2104c3ecd4b9', '8e865e109093043bb5a94e609c5e3f2d14982caedd866831df543e308d27ffa0dd61aaee8e03f028', 0, '2020-09-24 15:04:04'),
('d4257da93ee864690d62b406c49d6b9b869fcf67e8d371a9e84176e3ce52dbf61f94bbaacfa5a1a9', '8f3533e1fcb6094f095b8eeb47c6183c29cb0226328878837b84eadc9aebd699daa4c2202192df97', 0, '2020-09-27 15:48:56'),
('d42d98c179713a9e3519bf9ab5e23a5c41ae561c693e5895ea386246500acfb5b6eb958c5f9d235e', 'e3c3a73ed7053101d3fb031fc12b18678ddbc1ae32090c4dbd4056ebc3fcfd85de707471c6e76e7b', 0, '2020-09-24 15:33:56'),
('d9c10ff8c07624a2d691daa50b8121fa0ea60572b02e80b5d8debb6dc4a719ff918855f38153876e', '0d1e46e4e01366f54f16713732098fcf9d1d5f382e941e8caea0b262c51b7d3bbbb2d7f154d04e80', 0, '2020-09-27 16:13:29'),
('da7fee3ca19fc01a43ff4ba85cb0fe0e7146cb63f173f9fbfd4f4591fe5c440e04f8d658b62f3a50', '92c0e2c232b74c345d51b600f0bed77ae2ac681042a60c8dc04663840810c5d3509d88c7e5750c55', 0, '2020-09-27 15:38:40'),
('dd3bf2e320e41e4ce14e56d27eafc93488ed467df5c58e37b1773e74f73152de65560a8c672a6178', 'cecb7bc34ee3badf803fce3a02ad13e2f626c243435730fd33b156d91977873b6d6cfc56e01815f9', 0, '2020-09-27 15:38:56'),
('de310a31a128653771210b1d79a137f45e46e76c9470a252201fe61538927020d04480a7922917b2', '4a98cbd9536e8cd9f02034105ab3ff7a079d47ddb8878d77b5f9d1e07cfebcf05df5ddc74c7c0de8', 0, '2020-09-24 15:02:39'),
('e00b81d41d60b2fd67c2c97be30a440eb4616d9d06e3ffcc894fc9b329511e2e2a73ee80f12a21a9', '3dccd79624eeaf8fab3cffb476548cdb1f7dae9d87f22faa35998a702f28c1270e159a58035edd12', 0, '2020-09-24 15:52:11'),
('e01ed2eb2439a680d50132e00148ddc6eaf4f0f34666a315ed2b599d63fb10944b3cb2e2766d1bc3', '93e69287460d301136a7c3cccbd78e848b509cb3bf61d9d2d14273b62d89d2778e8995dcaa1da434', 0, '2020-09-24 15:00:45'),
('e3fa4d13d281a416f990790cfe5942f56e75e000954e7154a9058be1251d8d9c120b63413c0ec903', 'a855fd9c3e04444dec49bb40cbce77ca25637fab3d3d10a17af15cc7e448d4125b1f51f40d309bb9', 0, '2020-09-24 16:05:12'),
('fa9fbbd80645217a447bc47c058457511f61d21cd8028d3a7e315b722ea673c95f17460c6ec73f00', '45f0c7e222bb6fcb5f2f69f60adc6a5cb9b7420cd4301ba40ee287f6e3bb31205922c23ae5917fa6', 0, '2020-09-24 15:05:11'),
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
  `pharamacy_id` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `pharmacy_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `lattitude` float NOT NULL,
  `longitude` float NOT NULL,
  `verified` float NOT NULL,
  `license_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(5, 'Blood Bank');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_no` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `occupancy_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(15, 1, 'Rajpreet Singh', '', '', '', '2019-09-27 15:07:19', '', '', 0, 'rajpreet24033@gmail.com', '$2y$10$eJRL15Q1RwWrB.lqmcJcr.LXf4KjNM1poQeJRIWRndhrwdx6KPmZq', '', '', '', 0),
(19, 1, 'Rajpreet', '', '', '', '2019-09-27 09:39:15', '', '', 0, '1@2.com', '$2y$10$RNDGpnJigWUZARq4vxQwyunxhhjLYfZQDh8T3hPnAIJpWWWlcJMAa', '', '', '', 0),
(20, 1, 'Rajpreet', '', '', '', '2019-09-27 09:44:23', '', '', 0, 't@t.com', '$2y$10$KjetNEU.kKgNu0Pw3H8iNurtw0d0N8SCJIljpViZ8WHKnHvUzimkO', '', '', '', 0),
(21, 3, 'Rajpreet', '', '', '', '2019-09-27 16:17:25', '', '', 0, '1@1.com', '$2y$10$2wt6Jk6KS5ZxfrBmJYFuUuxYmtdXK/v0ACf0oT5Djl.JAHFisMRqO', '', '', '', 0),
(22, 1, 'Rajpreet', '', '', '', '2019-09-27 10:09:10', '', '', 0, '1@5.com', '$2y$10$2wt6Jk6KS5ZxfrBmJYFuUuxYmtdXK/v0ACf0oT5Djl.JAHFisMRqO', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_bank`
--
ALTER TABLE `blood_bank`
  ADD PRIMARY KEY (`blood_bank_id`),
  ADD UNIQUE KEY `license_no` (`license_no`),
  ADD UNIQUE KEY `address` (`address`),
  ADD KEY `Blood_Bank_fk0` (`manager_id`);

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
  ADD KEY `Doctor_fk0` (`medical_speciality_id`),
  ADD KEY `user_id` (`user_id`);

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
-- Indexes for table `medical_speciality`
--
ALTER TABLE `medical_speciality`
  ADD PRIMARY KEY (`medical_speciality_id`),
  ADD UNIQUE KEY `medical_speciality_name` (`medical_speciality_name`),
  ADD KEY `Medical_Speciality_fk0` (`dr_id`);

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
  ADD PRIMARY KEY (`pharamacy_id`),
  ADD UNIQUE KEY `license_no` (`license_no`),
  ADD KEY `Pharmacy_fk0` (`manager_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_no`,`hospital_id`),
  ADD KEY `Rooms_fk0` (`hospital_id`);

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
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `government_policies`
--
ALTER TABLE `government_policies`
  MODIFY `policy_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_speciality`
--
ALTER TABLE `medical_speciality`
  MODIFY `medical_speciality_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `pharamacy_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

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
  ADD CONSTRAINT `Doctor_fk0` FOREIGN KEY (`medical_speciality_id`) REFERENCES `medical_speciality` (`medical_speciality_id`),
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

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
-- Constraints for table `medical_speciality`
--
ALTER TABLE `medical_speciality`
  ADD CONSTRAINT `Medical_Speciality_fk0` FOREIGN KEY (`dr_id`) REFERENCES `doctor` (`doctor_id`);

--
-- Constraints for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD CONSTRAINT `Pharmacy_fk0` FOREIGN KEY (`manager_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `Rooms_fk0` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `Users_fk0` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
