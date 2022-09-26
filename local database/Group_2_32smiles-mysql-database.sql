-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2022 at 01:27 AM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproject`
--
CREATE DATABASE IF NOT EXISTS `eproject` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `eproject`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`id`, `full_name`, `password`, `username`, `email`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'le dat', '$2y$10$OPluibvbwr5tCmobnS8upeOtV7qE/Dz51yVcifo3mJ.fMa93/0EWe', 'admin', 'Khalethanhdat@gmail.com', '012345678', 'HfJEDA8NBLIZAxRIs5t8cV2oxqoOi3dQMjutBfXM0tmj5YoxDNzjhjegjq38', '2022-04-24 06:43:23', '2022-04-26 13:08:18'),
(2, 'trung hieu', '$2y$10$Uqswwke3sVTBkS73U8FFSOOpXGgF2ArOrhWB5HsRTpMdyYTtBMBsq', 'admin2', 'trunghieu@gmail.com', '012345678', NULL, '2022-04-24 06:43:25', '2022-04-24 06:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `type`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, '1', 'Manual Toothbrush', 'Manual Toothbrush', 'toothbrush.jpg', '2022-04-22 01:02:01', '2022-04-25 17:00:59'),
(2, '1', 'toothpaste', 'toothpaste', 'tooth-paste.jpg', '2022-04-22 01:03:40', '2022-04-24 02:41:33'),
(3, '2', 'Corrective', 'Corrective', 'beauty-category.jpg', '2022-04-24 03:03:11', '2022-04-28 07:18:37'),
(4, '1', 'Electric Toothbrush', 'Electric Toothbrush', 'electric-toothbrush-category.jpg', '2022-04-25 01:18:05', '2022-04-25 01:18:05'),
(6, '1', 'Dental Floss', 'Dental Floss', 'dental-floss-category.jpg', '2022-04-26 13:58:25', '2022-04-26 13:58:25'),
(7, '2', 'Preventive', 'Preventive', 'preventive.png', '2022-04-28 07:32:58', '2022-04-28 07:32:58'),
(8, '2', 'Therapeutic', 'Therapeutic', 'therapeutic.png', '2022-04-28 07:38:44', '2022-04-28 07:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` int(11) NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `dob`, `gender`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Pham Trung Hieu', '2022-04-05', 2, 'phamhieu.ceotic@gmail.com', '0123456789', 'fffdfdfd', '2022-04-24 07:08:02', '2022-04-24 07:08:02'),
(2, 'le dat', '2022-04-14', 2, 'Khalethanhdat@gmail.com', '+84989031481', 'this is message', '2022-04-24 07:09:20', '2022-04-24 07:09:20'),
(3, 'asdasd', '2022-04-24', 1, 'Khalethanhdat@gmail.com', '+84989031481', 'asdasd', '2022-04-24 16:05:53', '2022-04-24 16:05:53'),
(4, 'asdas', '2022-04-03', 2, 'asd@asdasd', 'asdasdasd', 'asdasdas', '2022-04-27 15:39:48', '2022-04-27 15:39:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(31, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(32, '2022_04_19_030414_create_categories_table', 1),
(33, '2022_04_19_031451_create_customers_table', 1),
(34, '2022_04_19_031531_create_admin_accounts_table', 1),
(35, '2022_04_19_031635_create_products_table', 1),
(36, '2022_04_19_031703_create_services_table', 1),
(49, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(50, '2022_04_19_030414_create_categories_table', 1),
(51, '2022_04_19_031451_create_customers_table', 1),
(52, '2022_04_19_031531_create_admin_accounts_table', 1),
(53, '2022_04_19_031635_create_products_table', 1),
(54, '2022_04_19_031703_create_services_table', 1),
(55, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(56, '2022_04_19_030414_create_categories_table', 1),
(57, '2022_04_19_031451_create_customers_table', 1),
(58, '2022_04_19_031531_create_admin_accounts_table', 1),
(59, '2022_04_19_031635_create_products_table', 1),
(60, '2022_04_19_031703_create_services_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoryid` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` double(8,2) NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_of_origin` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration_date` date NOT NULL,
  `manufacturer` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categoryid`, `price`, `name`, `weight`, `description`, `brand`, `country_of_origin`, `expiration_date`, `manufacturer`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 6.25, 'solimo x10', 500.00, 'Soft bristles; angled end-tuft to easily reach back teeth and deep between teeth', 'Amazon Brand', 'US', '2025-12-22', 'Solimo Store', 'solimo-toothbursh.png', '2022-04-22 01:10:31', '2022-04-25 16:03:17'),
(2, 1, 10.68, 'Sensodyne x4', 350.00, 'Soft bristle, sensitive manual medium toothbrush that offers better cleaning with less pressure', 'SENSODYNE PRONAMEL', 'US', '2025-01-22', 'SENSODYNE PRONAMEL', 'senodyne-toothbrush.png', '2022-04-22 01:13:35', '2022-04-25 15:17:30'),
(3, 1, 14.05, 'Oral-B CrossAction Max Clean x4', 250.00, 'Angled bristles for 90% deeper reach than a regular manual toothbrush in laboratory testing', 'Oral-B', 'RU', '2025-01-23', 'Oral-B', 'tooth-brush-oral-b.png', '2022-04-23 12:45:35', '2022-04-25 15:10:49'),
(4, 2, 23.34, 'Sensodyne Repair and Protect Whitening x4', 96.38, 'Toothpaste for sensitive teeth from the number Four dentist recommended brand for sensitive teeth', 'Sensodyne', 'US', '2025-01-24', 'SENSODYNE', 'sensodyne-toothpaste.png', '2022-04-24 02:44:15', '2022-04-25 15:25:44'),
(5, 1, 4.44, 'Colgate Extra Clean Toothbrush x6', 500.00, 'Soft toothbrush features circular power bristles to help effectively clean teeth', 'Colgate', 'UK', '2025-01-25', 'Colgate', 'colgate-extra-clean.png', '2022-04-25 01:03:34', '2022-04-25 15:21:49'),
(6, 2, 170.05, 'Colgate Cavity Protection Toothpaste with Fluoride', 7.98, 'Fluoride toothpaste fights and protects against cavities for healthier teeth. clinically proven to strengthen teeth enamel and cleans teeth thoroughly', 'Colgate', 'VN', '2025-01-25', 'Colgate', 'colgate-cavity.png', '2022-04-25 01:07:33', '2022-04-25 15:27:51'),
(7, 2, 10.17, 'Colgate Whitening Toothpaste for Sensitive Teeth', 170.60, 'Specialty Whitening Toothpaste for Sensitive Teeth. Sensitive Teeth Toothpaste, Provides 24/7 Sensitivity Protection (with twice-daily brushing)', 'Colgate', 'CN', '2025-01-25', 'Colgate', 'colgate-sensitive.png', '2022-04-25 01:11:54', '2022-04-25 15:28:32'),
(8, 4, 49.99, 'Philips Sonicare 4100 Power Toothbrush', 700.00, 'Removes up to 5x more plaque vs. a manual toothbrush. Battery life up to 14 days. Pressure sensor and two intensity settings protect sensitive gums from overbrushing', 'Philips', 'RU', '2025-01-25', 'Philips', 'philips-sonicare.png', '2022-04-25 01:16:12', '2022-04-25 15:29:05'),
(9, 4, 249.94, 'Oral-B iO Series 8 Electric Toothbrush', 730.00, 'You Will Receive 1 Oral-B iO Series 8 Black Onyx electric toothbrush, 2 Oral-B iO Ultimate Clean replacement brush heads, and a premium travel case. Signals red when brushing too hard and green when brushing just right', 'Oral-B', 'US', '2025-01-25', 'Oral-B', 'oral-b-io.png', '2022-04-25 01:21:57', '2022-04-25 16:29:16'),
(10, 4, 24.97, 'Philips Sonicare 1100 Power Toothbrush', 600.00, '2 minute SmarTimer with QuadPacer ensure Dentist-recommended brushing time. Battery life up to 14 days. Slim ergonomic design makes brushing easier and more comfortable', 'Philips', 'VN', '2025-01-25', 'Philips', 'philips-sonicare-1100.png', '2022-04-25 01:27:21', '2022-04-25 15:30:56'),
(12, 6, 3.99, 'Solimo Mint Dental Flossers x90', 300.00, 'Mint flavor designed to slide easily between teeth without shredding', 'Solimo', 'US', '2025-01-26', 'Solimo Store', 'solimo-floss.png', '2022-04-26 14:06:19', '2022-04-26 14:06:19'),
(13, 6, 17.31, 'Glide Oral-B Pro-Health Deep Clean Floss, Mint x6', 400.00, 'Effectively removes tough plaque between teeth and just below the gum line. Silky smooth, shred resistant texture', 'Oral-B', 'VN', '2025-01-26', 'Oral-B', 'oral-b-floss.png', '2022-04-26 14:11:08', '2022-04-26 14:11:08'),
(14, 6, 9.74, 'Solimo Extra Comfort Mint Dental Floss, 40 M x6', 700.00, 'If you like Oral-B Glide Comfort Plus Floss, we invite you to try Solimo Extra Comfort Mint Dental Floss', 'Solimo', 'US', '2025-01-26', 'Solimo Store', 'solimo-floss-40m.png', '2022-04-26 14:14:24', '2022-04-26 14:14:24'),
(15, 6, 13.79, 'GUM EEZ-Thru Floss Threaders, 25 Count x6', 800.00, 'Easily threads floss under bridges, orthodontic appliances, implants and between connected crowns. Constructed of flexible nylon for safe and comfortable use.', 'Gum', 'RU', '2025-01-26', 'Gum', 'ezz-thru-floss.png', '2022-04-26 14:24:48', '2022-04-26 14:24:48'),
(16, 6, 14.57, 'Floss Singles Dental Floss Dispenser Box, Light Green, Mint', 700.00, 'Dental Floss individually packaged in a dispenser box which sits on top of your bathroom counter which is so easy to use', 'Floss Singles', 'UK', '2025-01-26', 'Floss Singles', 'floss-singles.png', '2022-04-26 14:27:46', '2022-04-26 14:27:46'),
(17, 4, 299.94, 'Oral-B iO Series 9 Electric Toothbrush, Rose Quartz', 600.00, 'You Will Receive 1 Oral-B iO Series 9 Rose Quartz electric toothbrush, 3 Oral-B iO Ultimate Clean replacement brush heads, and a powerful charging travel case', 'Oral-B', 'VN', '2025-01-26', 'Oral-B', 'oral-b-electric.png', '2022-04-26 14:30:15', '2022-04-26 14:30:15'),
(18, 4, 64.84, 'hum by Colgate Black Electric Toothbrush for Adults', 500.00, 'POWERFUL SONIC TOOTHBRUSH: The sleek, ergonomic Hum by Colgate black electric toothbrush is expertly designed with powerful sonic vibrations and soft bristles for the ultimate clean', 'Colgate', 'RU', '2025-01-26', 'Colgate', 'colgate-electric.png', '2022-04-26 14:32:41', '2022-04-26 14:32:41'),
(19, 2, 11.87, 'Colgate Max Fresh Whitening Toothpaste with Breath Strips x4', 900.00, 'Freshness That Lasts for Hours. Packed with Hundreds of Mini Breath Strips. Fluoride Toothpaste to Fight Cavities', 'Colgate', 'VN', '2025-02-26', 'Colgate', 'colgate-maxfresh.png', '2022-04-26 14:36:54', '2022-04-26 14:36:54'),
(20, 2, 5.99, 'Crest Pro-Health Clean Mint Toothpaste', 260.00, 'Smooth, foamy formula with a bold and invigorating flavor of cool mint. Healthier gums by fighting plaque and gingivitis', 'Crest', 'CN', '2025-01-26', 'Crest', 'crest-toothpaste.png', '2022-04-26 14:39:52', '2022-04-26 14:39:52'),
(21, 1, 11.99, 'Oral-B Charcoal Toothbrush Whitening Therapy, Soft x4', 120.00, 'Features charcoal infused bristles. Whitens teeth by removing surface stains. Power tip bristles are extra long to help clean hard to reach places', 'Oral-B', 'RU', '2025-03-26', 'Oral-B', 'oral-b-tooth-brush.png', '2022-04-26 14:43:05', '2022-04-26 14:43:05');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoryid` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_validity_period` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `categoryid`, `price`, `name`, `description`, `service_validity_period`, `image`, `created_at`, `updated_at`) VALUES
(1, 3, 400.00, 'Composite Veneers', 'Dental veneers are thin, tooth-colored shells that are attached to the front surface of teeth to improve their appearance. Made from resin-composite materials and are permanently bonded to your teeth', 1, 'veneers.png', '2022-04-24 03:08:56', '2022-04-27 03:59:46'),
(2, 3, 650.00, 'Teeth Whitening', 'Teeth whitening is one of the most popular cosmetic dentistry treatments offering a quick, non-invasive and affordable way to enhance a smile.  Universally valued by men and women alike, whitening (or bleaching) treatments are available to satisfy every budget, time frame and temperament. Whether in the form of professionally administered one-hour whitening sessions at a dental office or cosmetic spa, or home-use bleaching kits purchased at your local drugstore, solutions abound.', 1, 'teeth-whitening.png', '2022-04-28 07:12:06', '2022-04-28 07:12:06'),
(3, 3, 1800.00, 'Invisalign', 'Invisalign is a straightening dental treatment that consists of a series of clear, plastic aligners that gradually straighten your teeth. These fit snugly over your teeth and are virtually invisible.', 12, 'invisalign.png', '2022-04-28 07:24:33', '2022-04-28 07:24:33'),
(4, 7, 200.00, 'Oral Prophylaxis', 'A procedure done for the teeth cleaning. It removes tartar and plaque build-up from the surfaces of the teeth as well as those hidden in between and under the gums.', 1, 'oral-prophylaxis.png', '2022-04-28 07:45:57', '2022-04-28 07:45:57'),
(5, 7, 30.00, 'Dental Sealants', 'Sealants protect the chewing surfaces from cavities by covering them with a protective shield that blocks out germs and food', 1, 'dental-sealants.png', '2022-04-28 07:50:37', '2022-04-28 07:50:37'),
(6, 7, 50.00, 'Topical Fluoride Application', 'Topical fluorides encourage remineralization of enamel, and also inhibit bacterial metabolism, reducing the growth of plaque bacteria. Modes of topical fluoride delivery include toothpastes, gels, mouthrinses, and professionally applied fluoride therapies.', 1, 'topical-fluoride.png', '2022-04-28 07:53:15', '2022-04-28 07:53:15'),
(7, 8, 99.99, 'Dental Fillings', 'A tooth filling is a procedure wherein the damaged and decayed part of a tooth is removed and the area is filled with a replacement material to protect against further damage and to restore the tooth\'s appearance and function', 1, 'dental-fillings.png', '2022-04-28 07:56:40', '2022-04-28 07:56:40'),
(8, 8, 75.00, 'Tooth Extraction', 'A tooth extraction is a procedure to remove a tooth from the gum socket. It is usually done by a general dentist, an oral surgeon, or a periodontist.', 1, 'tooth-extraction.png', '2022-04-28 07:58:47', '2022-04-28 07:58:47'),
(9, 8, 80.00, 'Pulp Therapy', 'A pulpotomy removes the diseased pulp within the crown of the tooth. The pulp root remains healthy and unaffected.', 1, 'pulp-therapy.png', '2022-04-28 08:00:14', '2022-04-28 08:00:14'),
(10, 8, 60.00, 'TMJ Treatment', 'Stretching and massage. Your doctor, dentist or physical therapist may show you how to do exercises that stretch and strengthen your jaw muscles and how to massage the muscles yourself.', 1, 'tmj-treatment.png', '2022-04-28 08:03:28', '2022-04-28 08:03:28'),
(11, 8, 300.00, 'Dental Surgery', 'Dental Surgeon, is responsible for performing oral surgery and routine cleanings on patients. Their duties include repairing and removing teeth, diagnosing conditions and communicating with patients about how to best care for their teeth and gums.', 1, 'dental-oral-health-surgery.png', '2022-04-28 08:05:42', '2022-04-28 08:05:42'),
(12, 8, 400.00, 'Periodontal Treatment', 'Such treatment might include deep cleaning of the tooth root surfaces below the gums, medications prescribed to take by mouth or placed directly under the gums, and sometimes corrective surgery.', 1, 'periodontitis.png', '2022-04-28 08:07:45', '2022-04-28 08:07:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
