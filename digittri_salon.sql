-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `categories` (`id`, `name`, `slug`, `icon`, `created_at`, `updated_at`, `type`, `featured`) VALUES
(1,	'Manicure',	'manicure',	'categories/March2019/szZaUAFcXDX2Sbv3anfe.jpg',	'2019-03-28 09:23:49',	'2019-03-28 09:23:49',	NULL,	NULL),
(2,	'Massage',	'massage',	'categories/March2019/xtxizRqWHiYl2FSiSYTI.jpg',	'2019-03-28 10:44:30',	'2019-03-28 10:44:30',	NULL,	NULL),
(3,	'Hair',	'hair',	'0',	'2019-03-28 12:27:22',	'2019-03-28 12:27:22',	NULL,	NULL);

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `providers`;
CREATE TABLE `providers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `services` mediumtext COLLATE utf8mb4_unicode_ci,
  `membership` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modules` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `assistants` mediumtext COLLATE utf8mb4_unicode_ci,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci,
  `latitude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_token` mediumtext COLLATE utf8mb4_unicode_ci,
  `banner` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission` decimal(15,2) DEFAULT NULL,
  `plan_price` decimal(15,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `providers` (`id`, `name`, `email`, `status`, `services`, `membership`, `modules`, `created_at`, `updated_at`, `assistants`, `avatar`, `description`, `phone`, `address`, `latitude`, `longitude`, `city_country`, `duration`, `device_token`, `banner`, `commission`, `plan_price`) VALUES
(11,	'Hair Master',	'sandeep.digittrix@gmail.com',	'1',	NULL,	NULL,	'a:7:{i:0;s:11:\"appointment\";i:1;s:13:\"point_of_sale\";i:2;s:14:\"t_email_mrktng\";i:3;s:9:\"inventory\";i:4;s:10:\"gift_cards\";i:5;s:22:\"transaction_management\";i:6;s:19:\"employee_management\";}',	'2019-03-27 06:09:27',	'2019-03-28 21:42:56',	NULL,	'providers/March2019/VTucLo1npaPAFAKnCv5U.jpg',	NULL,	'+919896747812',	'sector 7c chandigarh , india',	NULL,	NULL,	NULL,	'3_month',	NULL,	NULL,	12.00,	NULL),
(12,	'Beauty Sallon',	'sandeep.digittrix1@gmail.com',	'1',	NULL,	NULL,	'a:2:{i:0;s:13:\"point_of_sale\";i:1;s:9:\"acnt_stng\";}',	'2019-03-27 07:17:09',	'2019-03-27 07:25:34',	NULL,	'providers/March2019/Df6JfqkSkE9eXXqUeBzo.jpg',	NULL,	'+919896747812',	'sector 7 c chandigarh , india',	NULL,	NULL,	NULL,	'3_month',	NULL,	NULL,	10.00,	NULL),
(13,	'Cutting Hair',	'shikha.digittrix@gmail.com',	'1',	NULL,	NULL,	'a:5:{i:0;s:14:\"t_email_mrktng\";i:1;s:9:\"inventory\";i:2;s:12:\"reward_cards\";i:3;s:19:\"customer_management\";i:4;s:19:\"employee_management\";}',	'2019-03-27 11:55:47',	'2019-03-27 11:55:47',	NULL,	'providers/March2019/nIe1UK1EoFyQgnoANXMb.jpeg',	NULL,	'+919896747812',	'mohalla assi',	NULL,	NULL,	NULL,	'1_month',	NULL,	NULL,	12.00,	NULL),
(14,	'Hair Dry',	'sandeep.digittrix2@gmail.com',	'1',	NULL,	NULL,	'a:4:{i:0;s:19:\"customer_management\";i:1;s:19:\"employee_management\";i:2;s:13:\"salon_reports\";i:3;s:7:\"payroll\";}',	'2019-03-27 11:58:53',	'2019-03-27 11:58:53',	NULL,	'providers/March2019/KjjF3X6DiLbZ4EXO5vL1.jpg',	NULL,	'+919896747812',	'sector 17 chandigarh',	NULL,	NULL,	NULL,	'1_year',	NULL,	NULL,	12.00,	NULL),
(15,	'Arya Sallon',	'aryasallon@gmail.com',	'1',	NULL,	NULL,	'a:5:{i:0;s:13:\"truns_tracker\";i:1;s:9:\"inventory\";i:2;s:8:\"expenses\";i:3;s:18:\"clock_in_clock_out\";i:4;s:13:\"salon_reports\";}',	'2019-03-27 12:03:09',	'2019-03-28 12:58:23',	NULL,	'providers/March2019/EYuf8Vv2JXktdd5Qb0an.jpg',	NULL,	'+919896747812',	'sector 17 chaNDIGARH',	NULL,	NULL,	NULL,	'1_year',	NULL,	NULL,	5.00,	NULL),
(16,	'Chandigarh SAllon',	'chandigarhsallon@gmail.com',	'1',	NULL,	NULL,	'a:4:{i:0;s:9:\"inventory\";i:1;s:19:\"customer_management\";i:2;s:19:\"employee_management\";i:3;s:13:\"salon_reports\";}',	'2019-03-28 13:26:27',	'2019-03-28 13:26:27',	NULL,	'providers/March2019/zk3pYh64lfGjhcyfNcnR.jpg',	NULL,	'+919896747812',	'chandigarh sallon.',	NULL,	NULL,	NULL,	'3_month',	NULL,	NULL,	12.00,	NULL);

DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_hour` int(11) DEFAULT '0',
  `duration` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT '00:00',
  `assistent` tinyint(4) DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci,
  `provider_id` int(11) DEFAULT NULL,
  `expiration` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `services` (`id`, `name`, `price`, `per_hour`, `duration`, `assistent`, `description`, `category_id`, `image`, `provider_id`, `expiration`, `type`, `created_at`, `updated_at`) VALUES
(7,	'Legs Massage',	'45',	0,	'20',	NULL,	NULL,	2,	NULL,	15,	'a:2:{s:5:\"start\";s:10:\"03-28-2019\";s:3:\"end\";s:10:\"03-29-2019\";}',	'a:1:{i:0;s:9:\"guarantee\";}',	'2019-03-28 13:05:43',	'2019-03-28 13:05:43'),
(8,	'Hair Cut',	'25',	0,	'10',	NULL,	NULL,	3,	NULL,	11,	'a:2:{s:5:\"start\";s:10:\"03-30-2019\";s:3:\"end\";s:10:\"04-24-2019\";}',	'a:1:{i:0;s:9:\"guarantee\";}',	'2019-03-29 04:31:27',	'2019-03-29 04:31:27');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `role_id`, `name`, `firstname`, `lastname`, `dob`, `address`, `city`, `state`, `zipcode`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	1,	'Superadmin',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'superadmin_sallon@gmail.com',	NULL,	'$2y$10$a.ZJ3CbfbRy.ILsj4O7lI.N0Hf3BD9eHah1A1XFPvRLB5QfM1p0A6',	'eaZXh1WKAngraW9s9DVwXdA9iUeL2XdgnQxpBKlyY5vF5qWhB5vKv6mMkIyE',	'2019-03-20 04:53:58',	'2019-03-20 04:53:58'),
(11,	2,	'Hair Master',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'sandeep.digittrix@gmail.com',	NULL,	'$2y$10$1yueZtBDyi9z6dvbsFVLzemmH1ifgFFivZtagAfWtu9xOW7N9RwzO',	NULL,	'2019-03-27 06:09:27',	'2019-03-27 06:09:27'),
(12,	2,	'Beauty Sallon',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'sandeep.digittrix1@gmail.com',	NULL,	'$2y$10$gyz0AIccZdiMxrg85Te8T.zuP9O/FGUvEE7t1YnfhdEADk4gQeQEu',	NULL,	'2019-03-27 07:17:09',	'2019-03-27 07:17:09'),
(13,	2,	'Cutting Hair',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'shikha.digittrix@gmail.com',	NULL,	'$2y$10$.J52aTMoThEl0GkqfAdWK.1z5SlaWdtEufnYsBK6yEf0uJZCYtrWa',	NULL,	'2019-03-27 11:55:47',	'2019-03-27 11:55:47'),
(14,	2,	'Hair Dry',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'sandeep.digittrix2@gmail.com',	NULL,	'$2y$10$khsvhvlRvacIj7/2XxbqBuhkJvkePSqQ.frgOyvZHkLkWJE5x9grG',	NULL,	'2019-03-27 11:58:53',	'2019-03-27 11:58:53'),
(15,	2,	'Arya Sallon',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'aryasallon@gmail.com',	NULL,	'$2y$10$RHeZ7BDlP3cY8Lq3ZSOcvOwavxgixhr7w5NaNlwgV8w5gE31U9wXK',	NULL,	'2019-03-27 12:03:09',	'2019-03-27 12:03:09'),
(16,	2,	'Chandigarh SAllon',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'chandigarhsallon@gmail.com',	NULL,	'$2y$10$cAFqfSku8BIHxXyIj6wTp.ShiDpGvbu1P9VPoF0u9j1vShYHBQwWC',	NULL,	'2019-03-28 13:26:27',	'2019-03-28 13:26:27');

-- 2019-03-29 07:14:43
