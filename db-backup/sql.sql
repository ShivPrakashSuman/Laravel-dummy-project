-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 03:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `image`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '1697978766_apple-iphone-12-pro.jpg', 'Apple', 'Branding According to Steve Jobs, the company\'s name was inspired by his visit to an apple farm while on a fruitarian diet. Jobs thought the name \"Apple\" was \"fun, spirited and not intimidating.\" Steve Jobs and Steve Wozniak were fans of the Beatles, but Apple Inc. had name and logo trademark issues wit', 'Yes', '2023-08-07 23:54:50', '2023-10-22 07:16:06'),
(2, '1697978933_OIP (5).jpeg', 'Hero', 'WebExplore the world of Hero MotoCorp, India\'s favorite two-wheeler manufacturer. Explore our range of stylish and powerful two-wheelers. Find your dream ride now!', 'Yes', '2023-10-22 07:18:53', '2023-10-22 07:18:53'),
(3, '1697978979_Dell_logo_2016.svg.png', 'Dell', 'WebExplore the world of Hero MotoCorp, India\'s favorite two-wheeler manufacturer.', 'Yes', '2023-10-22 07:19:39', '2023-10-22 07:19:39'),
(4, '1697979092_R (2).jpeg', 'Maserati Cars', 'Maserati car price starts at Rs 1.20 Crore for the cheapest model which is Ghibli and the price of most expensive model, which is MC20 starts at Rs 3.65 Crore. Maserati offers 4 car models in India, including 1 car in SUV category, 2 cars in Sedan category, 1 car in Coupe category.', 'Yes', '2023-10-22 07:21:32', '2023-10-22 07:21:32'),
(5, '1697979154_levis-logo-original-6.png', 'Levi\'s', 'Maserati car price starts at Rs 1.20 Crore for the cheapest model which is', 'Yes', '2023-10-22 07:22:34', '2023-10-22 07:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `image`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '1697979194_Apple-iPhone-14-Pro-iPhone-14-Pro-Max-hero-220907_Full-Bleed-Image.jpg.large.jpg', 'Mobile', 'Maserati car price starts at Rs 1.20 Crore for the cheapest model which is atey.gor', 'Yes', '2023-10-22 07:23:14', '2023-10-22 07:23:14'),
(2, '1697979264_2020-ats-rr-turbo-race-car_100716343.jpg', 'Car', 'WebMaserati offers 4 car models in India, including 1 car in SUV category, 2 cars in Sedan category, 1 car in Coupe category. Maserati Cars Price List (October 2023) in India. …', 'Yes', '2023-10-22 07:24:24', '2023-10-22 07:24:24'),
(3, '1697979360_2AD2054D-C851-48D0-8884-751E4D4CD6A4.png', 'Laptop Dell', 'AdBuy Direct From Dell. Laptops With 11th Gen Intel® Core™ Processor. Shop Now! Enjoy Outstanding Mobile Performance, Reliability & Usability of Dell Laptop.', 'Yes', '2023-10-22 07:26:00', '2023-10-22 07:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(6, '2023_07_18_123023_create_product_table', 2),
(21, '2023_07_19_113012_create_user_table', 3),
(22, '2023_07_19_114037_create_product_table', 4),
(44, '2023_07_20_045815_create_user_table', 5),
(56, '2014_10_12_000000_create_users_table', 6),
(57, '2014_10_12_100000_create_password_reset_tokens_table', 6),
(58, '2014_10_12_100000_create_password_resets_table', 6),
(59, '2019_08_19_000000_create_failed_jobs_table', 6),
(60, '2019_12_14_000001_create_personal_access_tokens_table', 6),
(61, '2023_07_19_145632_create_category_table', 6),
(62, '2023_07_20_044905_create_brand_table', 6),
(63, '2023_07_20_050127_create_product_table', 6),
(64, '2023_07_20_050402_create_order_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `primary_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `sell_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `brand_id`, `category_id`, `primary_image`, `secondary_image`, `title`, `description`, `price`, `quantity`, `sell_price`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 3, '1697979470_OIP (11).jpeg', '1697979470_OIP (10).jpeg', 'Dell 15 Laptop, Intel Core i3-1115G4', 'About this item\r\nProcessor: Intel Core i3-1115G4 Processor (up to 4.10 GHz, 6MB Cache, 2 Cores)\r\nRAM: 8 GB, 1 x 8 GB, DDR4, 3200 MHz // Storage: 512GB SSD\r\nSoftware: Pre-Loaded Windows 11 Home with Lifetime Validity | MS Office Home and Student 2021 with lifetime validity| McAfee Multi Device Security 15-month subscription\r\nDisplay: 15.6\" FHD WVA AG 120Hz 250 nits Narrow Border // Graphics: Intel UHD Graphics // Keyboard: Standard Keyboard\r\nPorts: 2 USB 3.2 Gen 1 port, 1 USB 2.0 port, 1 headset (headphone and microphone combo) port, 1 HDMI 1.4 port, HDMI 1.4 (Maximum resolution supported over HDMI is 1920x1080 @60Hz. No 4K/2K output), 1 RJ45 Ethernet port (flip-down)\r\nBattery: 3-Cell Battery, 41WHr // Power Adaptor: 65 Watt AC Adapter\r\nDimensions H x W x D( in cm): 1.69 to 2.24 X 35.8 X 23.5 // Weight- 1.66kgs', '34990', 1, '32990', 'Yes', '2023-10-22 07:27:50', '2023-10-22 07:27:50'),
(2, 1, 1, '1697979584_Realistic-iPhone-14-Pro-Mockup-Set-1-740x600.jpg', '1697979584_apple-iphone-14-pro-256gb-dual-sim-hk-specs-deep-purple-5g-17716-800x800.jpg', 'Apple iPhone 14 Pro (128 GB) - Silver', 'About this item\r\n15.54 cm (6.1-inch) Super Retina XDR display featuring Always-On and ProMotion\r\nDynamic Island, a magical new way to interact with iPhone\r\n48MP Main camera for up to 4x greater resolution\r\nCinematic mode now in 4K Dolby Vision up to 30 fps\r\nAction mode for smooth, steady, handheld videos\r\nAll-day battery life and up to 23 hours of video playback\r\nVital safety technology — Crash Detection calls for help when you can’t', '129900', 2, '119900', 'Yes', '2023-10-22 07:29:44', '2023-10-22 07:29:44'),
(3, 4, 2, '1697979688_mercedes-benz-car_800.jpg', '1697979688_20171214104402000000-6478565823826138113.png', 'TGRCM-CZ Compatible for', 'bout this item\r\n[1/32 alloy car model]: This product is made of high-quality zinc alloy material, the body is made of zinc alloy, the windshield and the interior of the car are made of environmentally friendly ABS material, and the tires are made of rubber. The size of the car: 6.69X2.36X1.77in. Weight: 0.37 lbs.', '19200000', 1, '19000000', 'Yes', '2023-10-22 07:31:28', '2023-10-22 07:31:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `pincode`, `address`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shiv suman', 'sumanshivprakash742@gmail.com', '$2y$10$kKBvuW.8GgJk6gve05IvvupVZ7gxzG1uueDrL0gx3gxv5BxmNASC6', 'null', 'null', 'null', 'null', NULL, '2023-08-07 23:44:14', '2023-08-07 23:44:14'),
(2, 'admin', 'admin7777@gmail.com', '$2y$10$AcDEaRESIxgMXgVL2bZ1vO1BmtkXFSPMQr557L.f6NUWJFe0RPrhK', '9057760469', '325001', 'kota', NULL, NULL, '2023-08-07 23:46:23', '2023-08-07 23:46:23'),
(28, 'Dev', 'dev@gmail.com', '12345678', '9876543210', '325001', 'kota', '', NULL, NULL, NULL),
(29, 'Dev', 'dev2@gmail.com', '12345678', '9876543210', '325001', 'kota', '', NULL, NULL, NULL),
(32, 'Dev', 'dev@gmail.com', '12345678', '9876543210', '325001', 'kota', '', NULL, NULL, NULL),
(33, 'Dev', 'dev2@gmail.com', '12345678', '9876543210', '325001', 'kota', '', NULL, NULL, NULL),
(34, 'Dev', 'dev3@gmail.com', '12345678', '9876543210', '325001', 'kota', '', NULL, NULL, NULL),
(35, 'Dev', 'dev4@gmail.com', '12345678', '9876543210', '325001', 'kota', '', NULL, NULL, NULL),
(36, 'nitin saini', 'nitin4444@gmail.com', '$2y$10$/Z48y5ClTKNsYuJIitp7Yut0ViCmLyuloqq.KZ3mtGRYY4ubNBV6G', '96445525555', '325001', 'Ward no-6 Kheda basti baniyani , kota', NULL, NULL, '2023-08-22 05:13:09', '2023-08-22 05:13:09'),
(37, 'SHIV KRAKASH SUMAN', 'navneet5555@gmail.com', '$2y$10$it2uLjBko5XBYJ7GiuTm0.7NNfZzUP0gaJ/bhS/QgM7Zw1VUolCmq', '9057760469', '325001', 'Ward no-6 Kheda basti baniyani , kota', NULL, NULL, '2023-08-22 05:13:44', '2023-08-22 05:13:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
