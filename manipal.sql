-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2019 at 08:09 PM
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
('24100c737528c5980611046dcbda2f4a110f018c1c4f8409dd5a15c5330653fd04bc59059397c59f', 1, 8, NULL, '[]', 0, '2019-09-19 09:27:03', '2019-09-19 09:27:03', '2020-09-19 14:57:03'),
('6263512200fdfc1f1e0747a635930951c057c34f22ffb87d4d6d44bd98a5577faaf914ebb4013514', 1, 8, NULL, '[]', 0, '2019-09-19 05:44:22', '2019-09-19 05:44:22', '2020-09-19 11:14:22'),
('87874e0fc8ce915368454b0bcef032114e2ca58bb52b1b313a968e96f3ab1703d5d8cf64b6d321d1', 1, 8, NULL, '[]', 0, '2019-09-19 09:25:00', '2019-09-19 09:25:00', '2020-09-19 14:55:00'),
('91d27f232227b51a88b30cd48fa4115633317616939da6fb181e8c49bdffd63c9cc3e4238ba22e9d', 1, 8, NULL, '[]', 0, '2019-09-19 05:45:04', '2019-09-19 05:45:04', '2020-09-19 11:15:04'),
('b6f418d02625c3af6fbcff8da2db5bd265089b7bce084e5a95c49a8e8fa4d83a8d996464eb7458b2', 1, 8, NULL, '[]', 0, '2019-09-19 09:37:45', '2019-09-19 09:37:45', '2020-09-19 15:07:45'),
('b840428c14e314c33b281a3483fa9b012c4684947e54795be3ee6d20cbb310abe1348c9258283f1f', 1, 8, NULL, '[]', 0, '2019-09-19 05:46:03', '2019-09-19 05:46:03', '2020-09-19 11:16:03');

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

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(2, 7, '2019-09-19 05:42:00', '2019-09-19 05:42:00'),
(3, 9, '2019-09-19 05:42:11', '2019-09-19 05:42:11');

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
('3f485e61c5fac4d4e938c2f1a970d33c03e2d581f4a55633c1ede64182de7a0d3546696e6a812a26', 'b6f418d02625c3af6fbcff8da2db5bd265089b7bce084e5a95c49a8e8fa4d83a8d996464eb7458b2', 0, '2020-09-19 15:07:45'),
('5d79f28bf734d6f8ca96d2eb7969ca0642bca8692b6b018542ad527a6f241f0f8ed8f50d36a41664', '24100c737528c5980611046dcbda2f4a110f018c1c4f8409dd5a15c5330653fd04bc59059397c59f', 0, '2020-09-19 14:57:03'),
('66c4f8eed00180affa084548b66633efcb76d206d1be8a5c86ed938df6abf613ba7cb75affb69a8a', '0572294656b8e4b894e8d1fff6b771635b41e3eef12fe0d1c58262b5c4a5734093f81af46c7ccb2b', 0, '2020-09-19 15:17:13'),
('94620fd2a2060c0098600c6b5b3ff75122763281089b62d004d7746fecf1ae2f48d6d36bcb599b5e', 'b840428c14e314c33b281a3483fa9b012c4684947e54795be3ee6d20cbb310abe1348c9258283f1f', 0, '2020-09-19 11:16:04'),
('b97b5143737cea6514484927051a2c2e8f202d503c71f2025380746dcd904516fa13d2b2cc4d6bc8', '91d27f232227b51a88b30cd48fa4115633317616939da6fb181e8c49bdffd63c9cc3e4238ba22e9d', 0, '2020-09-19 11:15:04'),
('bf546b1d7bd74a4196b8f17e70882d834527efa737f18cd7b315040a8d2f2cd5bb3ea86e23604670', '6263512200fdfc1f1e0747a635930951c057c34f22ffb87d4d6d44bd98a5577faaf914ebb4013514', 0, '2020-09-19 11:14:22'),
('c93b4a27d46863398a7bc68110c52344c535afafa9fc1ebacdaf6e59b7b27e75cd15995e52792aac', '87874e0fc8ce915368454b0bcef032114e2ca58bb52b1b313a968e96f3ab1703d5d8cf64b6d321d1', 0, '2020-09-19 14:55:00');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'r', 'r@123.com', '$2y$10$8DrHXcYUK18a9YXQUylHzu.fs72PbAY1ji/8Bl2/Dn7jO9jsdpV/.', 1, NULL, '2019-09-19 05:02:06', '2019-09-19 05:02:06'),
(2, 'R', 'r@1.com', '$2y$10$9mnBb9Ly7qd0UAZDl.DfQ.JGS7ZmJ7xfN4AXnNVdcRLAc5w1SuF5K', 1, NULL, '2019-09-19 09:44:40', '2019-09-19 09:44:40'),
(3, 'a', 'a@a.com', '$2y$10$RihwmC0M37xve9uW6Mauk.tvh0HvmfJNNbprndxX6O4ZPYZti4u2q', 1, NULL, '2019-09-19 10:15:36', '2019-09-19 10:15:36'),
(5, 'a', 'a@b.com', '$2y$10$rq69i9VSkGC.jIuCUSbTwOWwQ962UFPDD.7Z.dEiVbucn10nv1vWe', 1, NULL, '2019-09-19 10:23:41', '2019-09-19 10:23:41'),
(6, 'r', 'g@g.com', '$2y$10$GmuSLfNJHOt5xqe7L1h4k.TBWDEKnM0U3UewRyghW9cJquVlQfmjW', 1, NULL, '2019-09-19 10:25:42', '2019-09-19 10:25:42'),
(8, 'r', 'g@fg.com', '$2y$10$iE4gby05i2tGKEyxeOtSVO408FYF0a3okkuo5Rex3MFeZc46tUD6.', 1, NULL, '2019-09-19 10:26:28', '2019-09-19 10:26:28'),
(9, 'h', 'h@g.com', '$2y$10$ZaulWxVB9Pm6T.cWWS0xHuizrOVjGxfaH4LS53CAbuNXKIuB.Mj0G', 1, NULL, '2019-09-19 10:27:28', '2019-09-19 10:27:28'),
(10, 'b', 'h@j.com', '$2y$10$p15XXC0HGGyEfAF5/8xsoOUrWX3movaV2aTVypQmTGoASwZ6FZtSG', 1, NULL, '2019-09-19 10:30:32', '2019-09-19 10:30:32'),
(11, 'f', 'h@m.com', '$2y$10$NnrHw9ouAxIaIKFNZt7JsuP9bKaxVJ1z/LwwS6Cctrz6diSJdgzG.', 1, NULL, '2019-09-19 10:42:45', '2019-09-19 10:42:45'),
(12, 'j', 'j@g.com', '$2y$10$q4F7GrSoopMzF7LsemNDHuJloclTEBChRV6VVlP9oKL0i6jhTOAvG', 1, NULL, '2019-09-19 10:46:27', '2019-09-19 10:46:27'),
(13, 'q', 'q@s.com', '$2y$10$QDeYHvryrhDAV0ypIpacTuHf.Gluud/RVfO4kiHAJJPPhwHVdLLRC', 1, NULL, '2019-09-19 11:16:31', '2019-09-19 11:16:31'),
(14, 'h', 'g@r.com', '$2y$10$3rYi4srpLO8ifsrboceN7ez6CBIUSqAIKsaVE6ss09EylEFwzq5ru', 1, NULL, '2019-09-19 11:21:29', '2019-09-19 11:21:29'),
(15, 'y', 'h@o.com', '$2y$10$TYlePIABAcgOTZef4WWN9uQPV0jrfE4e16fsJl2hd1/CQN3K9UhIm', 1, NULL, '2019-09-19 11:22:07', '2019-09-19 11:22:07'),
(16, 'b', 't@2.com', '$2y$10$Yqy6jBEjVy.qWzD5xGEOW.m.JhQsp7YEilAx4No528uhpmF1WMfje', 1, NULL, '2019-09-19 11:22:58', '2019-09-19 11:22:58'),
(17, 'h', 'p@e.com', '$2y$10$JLThrYbv2W18Z5LhcACqCeNTallcx54vOUbRMiSS5zcr.JhPbTTvW', 1, NULL, '2019-09-19 11:28:31', '2019-09-19 11:28:31'),
(18, 'b', 'hg@r.com', '$2y$10$6RXjWLYwLQrfLlUJJu0azu3GqS/6CVVB5iihL/q5R12hCdR/z31mO', 1, NULL, '2019-09-19 11:30:23', '2019-09-19 11:30:23'),
(20, 'b', 'jkl@f.com', '$2y$10$MA5kydJwPuoTkxojE7T2DO/bLbtIghdAr0gDoVGr9tIxF/sxNmvTO', 1, NULL, '2019-09-19 11:31:36', '2019-09-19 11:31:36'),
(21, 'h', 'iy@r.com', '$2y$10$ZoGkX7n6.ZHZgd5DoP70.uPveysFBXk2Hjfp.xKy0Qw8QnzfgNN3.', 1, NULL, '2019-09-19 11:36:04', '2019-09-19 11:36:04');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
