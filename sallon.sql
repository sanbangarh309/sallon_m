-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE `appointments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `provider_id` int(15) unsigned DEFAULT NULL,
  `user_id` int(15) unsigned DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` mediumtext COLLATE utf8mb4_unicode_ci,
  `employees` text COLLATE utf8mb4_unicode_ci,
  `services` text COLLATE utf8mb4_unicode_ci,
  `appointment_date` date DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `appointments` (`id`, `provider_id`, `user_id`, `fname`, `lname`, `phone`, `note`, `employees`, `services`, `appointment_date`, `type`, `created_at`, `updated_at`) VALUES
(9,	11,	20,	'Sandeep',	'Bangarh',	'+919896747812',	'test note lorem ipsum dummy test',	'a:1:{i:0;s:1:\"5\";}',	'a:3:{i:0;s:1:\"7\";i:1;s:1:\"8\";i:2;s:2:\"10\";}',	'2019-04-30',	NULL,	'2019-04-04 13:08:30',	'2019-04-05 05:37:24'),
(10,	11,	21,	'Shikha',	'Sharma',	'+919896747818',	'test note one',	'a:1:{i:0;s:1:\"1\";}',	'a:1:{i:0;s:2:\"11\";}',	'2019-04-17',	NULL,	'2019-04-05 04:47:04',	'2019-04-05 04:47:04'),
(11,	11,	22,	'Sandeep',	'bangarh',	'7878787878',	'test note two',	'a:1:{i:0;s:1:\"2\";}',	'a:1:{i:0;s:1:\"7\";}',	'2019-04-12',	NULL,	'2019-04-05 04:47:30',	'2019-04-05 04:47:30'),
(12,	11,	23,	'Davinder',	'Verma',	'9896747812',	'test note three',	'a:1:{i:0;s:1:\"3\";}',	'a:1:{i:0;s:1:\"8\";}',	'2019-04-09',	NULL,	'2019-04-05 04:47:55',	'2019-04-05 04:47:55'),
(13,	11,	24,	'Jyoti',	'Sharma',	'6777676767',	'test note four',	'a:1:{i:0;s:1:\"4\";}',	'a:1:{i:0;s:1:\"9\";}',	'2019-04-08',	NULL,	'2019-04-05 04:48:21',	'2019-04-05 04:48:21'),
(14,	11,	25,	'Gurinder',	'Sandhu',	'9896747834',	'test note five',	'a:1:{i:0;s:1:\"5\";}',	'a:1:{i:0;s:2:\"12\";}',	'2019-04-26',	NULL,	'2019-04-05 04:48:48',	'2019-04-05 04:48:48'),
(15,	11,	26,	'new user',	'Sandhu',	'343443343434',	'new user test',	'a:1:{i:0;s:1:\"5\";}',	'a:1:{i:0;s:2:\"12\";}',	'2019-04-17',	NULL,	'2019-04-05 08:00:01',	'2019-04-05 08:00:01');

DROP TABLE IF EXISTS `attendence`;
CREATE TABLE `attendence` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `user_id` int(15) DEFAULT NULL,
  `employee_id` int(15) DEFAULT NULL,
  `provider_id` int(15) NOT NULL,
  `user_status` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'out',
  `employee_status` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'out',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


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
(3,	'Hair',	'hair',	'0',	'2019-03-28 12:27:22',	'2019-03-28 12:27:22',	NULL,	NULL),
(4,	'Pedicure',	'pedicure',	'0',	'2019-04-04 12:52:14',	'2019-04-04 12:52:14',	NULL,	NULL);

DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `provider_id` int(15) NOT NULL,
  `role_id` int(11) NOT NULL,
  `fname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_being` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_end` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssn` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hourly_rate` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` text COLLATE utf8mb4_unicode_ci,
  `contract_option` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_option_value` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tips_charges` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clean_ups` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w4_status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dependents` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicare` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_security` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fed_allowance` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_allowance` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `employees` (`id`, `provider_id`, `role_id`, `fname`, `lname`, `dob`, `job_being`, `job_end`, `ssn`, `phone`, `image`, `address`, `city`, `state`, `zipcode`, `hourly_rate`, `skills`, `contract_option`, `contract_option_value`, `tips_charges`, `clean_ups`, `other`, `w4_status`, `dependents`, `medicare`, `social_security`, `fed_allowance`, `state_allowance`, `updated_at`, `created_at`) VALUES
(1,	11,	2,	'Sandeep',	'Bangarh',	'05-13-1992',	'04-17-2019',	'04-30-2019',	'232323',	'+919896747812',	'employees/April2019/13K46CaPMMqqzaqmpjfi.jpeg',	'mohall assi',	'chandigarh',	'chandigarh',	'160036',	'12',	NULL,	'commission',	'10',	'test tips usage',	'test clean up',	'other',	NULL,	'45',	'23',	'10',	'12',	'23',	'2019-04-05 11:05:11',	'2019-04-05 11:05:11'),
(2,	11,	2,	'Sandeep',	'sandhu',	'04-02-2019',	'04-12-2019',	'04-18-2019',	'3434343',	'+919896747813',	'employees/April2019/DyrbcMipnIojNA27AWdg.png',	'haveli',	'chandigarh',	'chandigarh',	'160036',	'3',	NULL,	'commission',	'10',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2019-04-05 11:03:17',	'2019-04-05 11:06:51'),
(3,	11,	2,	'Sandeep',	'lather',	'04-02-2019',	'04-12-2019',	'04-18-2019',	'3434343323',	'+919896747814',	'employees/April2019/yWgRFPaAXju6I6OrZkqr.jpg',	'haveli',	'chandigarh',	'chandigarh',	'160036',	'6',	NULL,	'by_per',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2019-04-05 11:01:54',	'2019-04-05 11:06:57'),
(4,	11,	2,	'Sandeep',	'panjeta',	'04-01-2019',	'04-13-2019',	'04-18-2019',	'3434343323',	'+919896747815',	'employees/April2019/WfPpP1mmtXFqsuijV9Rw.jpeg',	'mehra bakali',	'chandigarh',	'chandigarh',	'160036',	'10',	NULL,	'by_per',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2019-04-05 11:02:23',	'2019-04-05 11:07:02'),
(5,	11,	2,	'Sandeep',	'laller',	'04-07-2019',	'04-19-2019',	'04-30-2019',	'3434343323',	'+919896747816',	'employees/April2019/CXolLhmEzDEHqUvpgx6L.png',	'ban , ladwa',	'chandigarh',	'chandigarh',	'160036',	'10',	NULL,	'by_per',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2019-04-05 11:02:48',	'2019-04-05 11:07:07'),
(6,	11,	2,	'Sandeep',	'grewal',	'02-28-2019',	'04-18-2019',	'04-30-2019',	'3434343323',	'+919896747817',	'employees/April2019/VxZ90jx6QL8GSkSTvBVt.jpg',	'lakhnora',	'chandigarh',	'chandigarh',	'160036',	'12',	'a:1:{i:0;s:1:\"7\";}',	'by_per',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2019-04-05 11:01:16',	'2019-04-05 11:07:12'),
(8,	11,	4,	'Davinder',	'Verma',	'02-28-1962',	'04-18-2019',	'04-11-2019',	'233434',	'9896747818',	NULL,	'sco 181 , sector 7c chandigarh',	'chandigarh',	'chandigarh',	'160036',	'1',	NULL,	'by_per',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2019-04-05 12:08:38',	'2019-04-05 12:08:38'),
(11,	15,	2,	'Gurinder',	'Sandhu',	'03-04-1981',	'02-13-2019',	'04-15-2019',	'341267',	'+919896747822',	NULL,	'mehra bakali',	'chandigarh',	'chandigarh',	'136132',	'25',	'a:2:{i:0;s:1:\"7\";i:1;s:1:\"8\";}',	'overtime_rate',	'12',	'test tips usage',	'test clean up',	'other',	NULL,	'test',	'10%',	'12%',	'45',	'67',	'2019-04-04 10:16:36',	'2019-04-05 11:07:32');

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

DROP TABLE IF EXISTS `modules`;
CREATE TABLE `modules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name_db` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `relation` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `modules` (`id`, `label`, `name`, `name_db`, `model`, `relation`, `image`, `created_at`, `updated_at`) VALUES
(1,	'Appointment',	'appointment',	'appointments',	'App\\Models\\Appointment',	'',	'apponit.png',	'2018-01-18 00:34:16',	'2018-01-18 00:34:49'),
(2,	'Point of Sale',	'point_of_sale',	'point_of_sale',	'App\\Models\\PointSale',	'',	'sale.png',	'2018-01-18 00:34:16',	'2018-01-18 00:34:49'),
(3,	'Truns Tracker',	'truns_tracker',	'truns_tracker',	'App\\Models\\Trun',	'',	'tracker.png',	'2018-01-18 00:34:16',	'2018-01-18 00:34:49'),
(4,	'Text & Email marketting',	't_email_mrktng',	't_email_mrktng',	'App\\Models\\Email',	'',	'email.png',	'2018-01-18 00:34:16',	'2018-01-18 00:34:49'),
(5,	'Inventory',	'inventory',	'services',	'App\\Models\\Service',	'',	'inventory.png',	'2018-01-18 00:34:16',	'2018-01-18 00:34:49'),
(6,	'Expenses',	'expenses',	'expenses',	'App\\Models\\Expenses',	'',	'expense.png',	'2018-01-18 00:34:16',	'2018-01-18 00:34:49'),
(7,	'Gift Cards',	'gift_cards',	'gift_cards',	'App\\Models\\Gift',	'',	'gift.png',	'2018-01-18 00:34:16',	'2018-01-18 00:34:49'),
(8,	'Reward Cards',	'reward_cards',	'reward_cards',	'App\\Models\\Reward',	'',	'reward.png',	'2018-01-18 00:34:16',	'2018-01-18 00:34:49'),
(9,	'Clock in Clock out',	'clock',	'clock',	'App\\Models\\Clock',	'',	'apponit.png',	'2018-01-18 00:34:16',	'2018-01-18 00:34:49'),
(10,	'Account & Settings',	'acnt_stng',	'acnt_stng',	'App\\Models\\Account',	'',	'account.png',	'2018-01-18 00:34:16',	'2018-01-18 00:34:49'),
(11,	'Transaction Management',	'transaction_management',	'transaction_management',	'App\\Models\\Transaction',	'',	'transaction.png',	'2018-01-18 00:34:16',	'2018-01-18 00:34:49'),
(12,	'Customer Feedbacks',	'customer_feedbacks',	'customer_feedbacks',	'App\\Models\\Feedback',	'',	'customer.png',	'2018-01-18 00:34:16',	'2018-01-18 00:34:49'),
(13,	'Customer Management',	'customer_management',	'customer_management',	'App\\Models\\Appointment',	'user',	'customer.png',	'2018-01-18 00:34:16',	'2018-01-18 00:34:49'),
(14,	'Employee Management',	'employee_management',	'employee_management',	'App\\Models\\Employee',	'role',	'employes.png',	'2018-01-18 00:34:16',	'2018-01-18 00:34:49'),
(15,	'Salon Reports',	'salon_reports',	'salon_reports',	'App\\Models\\Report',	'',	'report.png',	'2018-01-18 00:34:16',	'2018-01-18 00:34:49'),
(16,	'Payroll',	'payroll',	'payroll',	'App\\Models\\Payroll',	'',	'expense.png',	'2018-01-18 00:34:16',	'2018-01-18 00:34:49');

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
(11,	'Hair Master',	'sandeep.digittrix@gmail.com',	'1',	NULL,	NULL,	'a:6:{i:0;s:11:\"appointment\";i:1;s:13:\"truns_tracker\";i:2;s:9:\"inventory\";i:3;s:5:\"clock\";i:4;s:19:\"customer_management\";i:5;s:19:\"employee_management\";}',	'2019-03-27 06:09:27',	'2019-04-05 09:49:56',	NULL,	'providers/March2019/VTucLo1npaPAFAKnCv5U.jpg',	NULL,	'+919896747812',	'sector 7c chandigarh , india',	NULL,	NULL,	NULL,	'3_month',	NULL,	NULL,	12.00,	NULL),
(12,	'Beauty Sallon',	'sandeep.digittrix1@gmail.com',	'1',	NULL,	NULL,	'a:2:{i:0;s:13:\"point_of_sale\";i:1;s:9:\"acnt_stng\";}',	'2019-03-27 07:17:09',	'2019-03-27 07:25:34',	NULL,	'providers/March2019/Df6JfqkSkE9eXXqUeBzo.jpg',	NULL,	'+919896747812',	'sector 7 c chandigarh , india',	NULL,	NULL,	NULL,	'3_month',	NULL,	NULL,	10.00,	NULL),
(13,	'Cutting Hair',	'shikha.digittrix@gmail.com',	'1',	NULL,	NULL,	'a:6:{i:0;s:11:\"appointment\";i:1;s:14:\"t_email_mrktng\";i:2;s:9:\"inventory\";i:3;s:12:\"reward_cards\";i:4;s:19:\"customer_management\";i:5;s:19:\"employee_management\";}',	'2019-03-27 11:55:47',	'2019-04-05 09:45:46',	NULL,	'providers/March2019/nIe1UK1EoFyQgnoANXMb.jpeg',	NULL,	'+919896747812',	'mohalla assi',	NULL,	NULL,	NULL,	'1_month',	NULL,	NULL,	12.00,	NULL),
(14,	'Hair Dry',	'sandeep.digittrix2@gmail.com',	'1',	NULL,	NULL,	'a:4:{i:0;s:19:\"customer_management\";i:1;s:19:\"employee_management\";i:2;s:13:\"salon_reports\";i:3;s:7:\"payroll\";}',	'2019-03-27 11:58:53',	'2019-03-27 11:58:53',	NULL,	'providers/March2019/KjjF3X6DiLbZ4EXO5vL1.jpg',	NULL,	'+919896747812',	'sector 17 chandigarh',	NULL,	NULL,	NULL,	'1_year',	NULL,	NULL,	12.00,	NULL),
(16,	'Chandigarh SAllon',	'chandigarhsallon@gmail.com',	'1',	NULL,	NULL,	'a:4:{i:0;s:9:\"inventory\";i:1;s:19:\"customer_management\";i:2;s:19:\"employee_management\";i:3;s:13:\"salon_reports\";}',	'2019-03-28 13:26:27',	'2019-03-28 13:26:27',	NULL,	'providers/March2019/zk3pYh64lfGjhcyfNcnR.jpg',	NULL,	'+919896747812',	'chandigarh sallon.',	NULL,	NULL,	NULL,	'3_month',	NULL,	NULL,	12.00,	NULL);

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `roles` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2,	'technician',	NULL,	'2018-01-18 00:34:44',	'2018-01-18 00:34:44'),
(3,	'receptionist',	NULL,	'2018-01-18 00:34:44',	'2018-01-18 00:34:44'),
(4,	'sales',	NULL,	'2018-01-18 00:34:44',	'2018-01-18 00:34:44'),
(5,	'manager',	NULL,	'2018-01-18 00:34:44',	'2018-01-18 00:34:44'),
(6,	'schedule',	NULL,	'2018-01-18 00:34:44',	'2018-01-18 00:34:44'),
(7,	'customer',	NULL,	'2018-01-18 00:34:44',	'2018-01-18 00:34:44');

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
(8,	'Hair Cut',	'25',	0,	'10',	NULL,	NULL,	3,	NULL,	11,	'a:2:{s:5:\"start\";s:10:\"03-30-2019\";s:3:\"end\";s:10:\"04-24-2019\";}',	'a:1:{i:0;s:9:\"guarantee\";}',	'2019-03-29 04:31:27',	'2019-03-29 04:31:27'),
(9,	'test service',	'45',	0,	'20',	NULL,	NULL,	3,	NULL,	15,	'a:2:{s:5:\"start\";s:10:\"04-25-2019\";s:3:\"end\";s:10:\"04-19-2019\";}',	'a:2:{i:0;s:4:\"turn\";i:1;s:9:\"guarantee\";}',	'2019-04-04 05:22:20',	'2019-04-04 05:22:20'),
(10,	'test service two',	'34',	0,	'20',	NULL,	NULL,	3,	NULL,	15,	'a:2:{s:5:\"start\";s:10:\"04-25-2019\";s:3:\"end\";s:10:\"04-19-2019\";}',	'a:1:{i:0;s:4:\"turn\";}',	'2019-04-04 05:22:34',	'2019-04-04 05:22:34'),
(11,	'Manicure test service',	'12',	0,	'10',	NULL,	NULL,	1,	NULL,	15,	'a:2:{s:5:\"start\";s:10:\"04-19-2019\";s:3:\"end\";s:10:\"04-11-2019\";}',	'a:1:{i:0;s:9:\"guarantee\";}',	'2019-04-04 07:09:26',	'2019-04-04 07:09:57'),
(12,	'Deluxe Pedicure',	'45',	0,	'40',	NULL,	NULL,	4,	NULL,	11,	'a:2:{s:5:\"start\";N;s:3:\"end\";N;}',	'a:2:{i:0;s:4:\"turn\";i:1;s:9:\"guarantee\";}',	'2019-04-04 12:52:55',	'2019-04-04 12:52:55');

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
  `user_plan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'Silver',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `role_id`, `name`, `firstname`, `lastname`, `dob`, `address`, `city`, `state`, `zipcode`, `email`, `user_plan`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	1,	'Superadmin',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'superadmin_sallon@gmail.com',	'Silver',	NULL,	'$2y$10$a.ZJ3CbfbRy.ILsj4O7lI.N0Hf3BD9eHah1A1XFPvRLB5QfM1p0A6',	'D88oIp5ZWbBTWq86V9K4bdQVtWdYUCPNFidQmz92M9zjcH593WU2DxfLBrqu',	'2019-03-20 04:53:58',	'2019-03-20 04:53:58'),
(11,	2,	'Hair Master',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'sandeep.digittrix@gmail.com',	'Silver',	NULL,	'$2y$10$1yueZtBDyi9z6dvbsFVLzemmH1ifgFFivZtagAfWtu9xOW7N9RwzO',	NULL,	'2019-03-27 06:09:27',	'2019-03-27 06:09:27'),
(12,	2,	'Beauty Sallon',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'sandeep.digittrix1@gmail.com',	'Silver',	NULL,	'$2y$10$gyz0AIccZdiMxrg85Te8T.zuP9O/FGUvEE7t1YnfhdEADk4gQeQEu',	NULL,	'2019-03-27 07:17:09',	'2019-03-27 07:17:09'),
(13,	2,	'Cutting Hair',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'shikha.digittrix@gmail.com',	'Silver',	NULL,	'$2y$10$.J52aTMoThEl0GkqfAdWK.1z5SlaWdtEufnYsBK6yEf0uJZCYtrWa',	NULL,	'2019-03-27 11:55:47',	'2019-03-27 11:55:47'),
(14,	2,	'Hair Dry',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'sandeep.digittrix2@gmail.com',	'Silver',	NULL,	'$2y$10$khsvhvlRvacIj7/2XxbqBuhkJvkePSqQ.frgOyvZHkLkWJE5x9grG',	NULL,	'2019-03-27 11:58:53',	'2019-03-27 11:58:53'),
(16,	2,	'Chandigarh SAllon',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'chandigarhsallon@gmail.com',	'Silver',	NULL,	'$2y$10$cAFqfSku8BIHxXyIj6wTp.ShiDpGvbu1P9VPoF0u9j1vShYHBQwWC',	NULL,	'2019-03-28 13:26:27',	'2019-03-28 13:26:27'),
(20,	7,	'Sandeep',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'sandeep.digittrix3@gmail.com',	'Silver',	NULL,	'$2y$10$uKd73tqiLpgceumTNURfdugTVhw4CBT9ZeUyrQROhrcWe1DekA5wa',	NULL,	'2019-04-04 13:08:30',	'2019-04-04 13:08:30'),
(21,	7,	'Shikha',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'test1@gmail.com',	'Silver',	NULL,	'$2y$10$flnRnfzbMoGaUNjTlmaXyuIghdELjiZfSb5EtJ/gk/HhzWi5eMpkO',	NULL,	'2019-04-05 04:47:04',	'2019-04-05 04:47:04'),
(22,	7,	'Sandeep',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'test2@gmail.com',	'Silver',	NULL,	'$2y$10$reO0t.8sTAepXCVPnKy2n.cay1pGqPIE0ulA68.mqBmq0vGMvutb2',	NULL,	'2019-04-05 04:47:30',	'2019-04-05 04:47:30'),
(23,	7,	'Davinder',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'test3@gmail.com',	'Silver',	NULL,	'$2y$10$qeR0el.P7LltOmLliBYVVu1tLv6fANg12BeQwIhuFhxSBWOdEZahm',	NULL,	'2019-04-05 04:47:55',	'2019-04-05 04:47:55'),
(24,	7,	'Jyoti',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'test4@gmail.com',	'Silver',	NULL,	'$2y$10$R9aku7ZE3AYXfem3h.DSo.5BAGuQC8WgD5lyN7efwchI/MjkOahYO',	NULL,	'2019-04-05 04:48:21',	'2019-04-05 04:48:21'),
(25,	7,	'Gurinder',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'test5@gmail.com',	'Silver',	NULL,	'$2y$10$pDn4nOI4C/TVLSDeFFWPROlFYvzDdn6wH0Nelkvq5SFcFEwfw6V.G',	NULL,	'2019-04-05 04:48:48',	'2019-04-05 04:48:48'),
(26,	7,	'new user',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'new_appointment@gmail.com',	'Silver',	NULL,	'$2y$10$XEj8hdZixzgB43Nsmo/zX.6k/FnmTtIP3o6mGzlyVCeIW6ei8YB92',	NULL,	'2019-04-05 08:00:01',	'2019-04-05 08:00:01');

-- 2019-04-05 12:20:48
