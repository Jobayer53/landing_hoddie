-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2024 at 10:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion-99`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `profile` varchar(191) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `number` varchar(191) NOT NULL,
  `role` enum('superAdmin','businessManager','contentManager','employee') NOT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `profile`, `email`, `number`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ivana Mccarthy', NULL, 'esmailkhalifa010@gmail.com', '260', 'superAdmin', '$2y$12$LgGjX4hNvMQ25wNtoZ9XZ.kCojo1taCFbbuDbgclL.Sk780v3VUZO', '07pF60ZVnMCbDZRNLGYEsHxnoR9XW4FnsqIMXcosFZoUcq3c1SfTSX2b1rZa', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_category` varchar(191) NOT NULL,
  `banner_title` varchar(191) NOT NULL,
  `banner_description` varchar(191) NOT NULL,
  `banner_image` varchar(191) DEFAULT NULL,
  `link` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `campaign_for` varchar(191) NOT NULL,
  `campaign_name` varchar(191) NOT NULL,
  `campaign_image` varchar(191) NOT NULL,
  `target` bigint(20) NOT NULL,
  `s_price` bigint(20) NOT NULL,
  `sp_type` varchar(191) NOT NULL,
  `coupon` varchar(191) DEFAULT NULL,
  `type` enum('campaign','coupon') NOT NULL,
  `start` timestamp NOT NULL DEFAULT '2024-10-25 03:37:33',
  `end` timestamp NOT NULL DEFAULT '2024-10-25 03:37:33',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaign_products`
--

CREATE TABLE `campaign_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `code` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Black', '#000000', '2024-10-26 00:56:05', '2024-10-26 00:56:18'),
(2, 'Red', '#ff0034', '2024-10-26 00:56:39', '2024-10-26 00:56:39'),
(3, 'Grey', '#e6e6e6', '2024-10-26 00:56:49', '2024-10-26 00:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `number` varchar(191) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `number` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `url` varchar(191) NOT NULL,
  `logo` varchar(191) NOT NULL,
  `fav` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('fixed','percent') NOT NULL,
  `code` varchar(191) NOT NULL,
  `value` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `custom_links`
--

CREATE TABLE `custom_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` longtext DEFAULT NULL,
  `body` longtext DEFAULT NULL,
  `footer` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `total_qnt` bigint(20) NOT NULL DEFAULT 0,
  `qnt` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(27, '2014_10_12_000000_create_users_table', 1),
(28, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(29, '2014_10_12_100000_create_password_resets_table', 1),
(30, '2019_08_19_000000_create_failed_jobs_table', 1),
(31, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(32, '2023_11_09_130822_create_product_categories_table', 1),
(33, '2023_11_09_130850_create_products_table', 1),
(34, '2023_11_09_131052_create_banners_table', 1),
(35, '2023_11_09_170707_create_campaigns_table', 1),
(36, '2023_11_09_170758_create_campaign_products_table', 1),
(37, '2023_11_10_182013_create_admins_table', 1),
(38, '2024_01_16_141434_create_services_table', 1),
(39, '2024_01_16_141845_create_product_services_table', 1),
(40, '2024_01_27_162204_create_configs_table', 1),
(41, '2024_02_01_150457_create_shippings_table', 1),
(42, '2024_02_07_105324_create_orders_table', 1),
(43, '2024_02_07_145037_create_order_products_table', 1),
(44, '2024_02_19_052756_create_coupons_table', 1),
(45, '2024_02_26_095107_create_order_payments_table', 1),
(46, '2024_03_10_090238_create_custom_links_table', 1),
(47, '2024_03_25_142224_create_colors_table', 1),
(48, '2024_03_25_142235_create_sizes_table', 1),
(49, '2024_03_28_103341_create_inventories_table', 1),
(50, '2024_04_20_184643_create_comments_table', 1),
(51, '2024_07_03_105503_create_product_photos_table', 1),
(52, '2024_10_09_053414_create_themes_table', 1),
(53, '2024_10_26_063303_create_review_images_table', 2),
(60, '2024_10_29_080050_create_orders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `number` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `notes` longtext DEFAULT NULL,
  `color` varchar(191) NOT NULL,
  `size` varchar(191) NOT NULL,
  `quantity` int(11) NOT NULL,
  `shipping_charge` decimal(10,2) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `total_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `order_status` enum('pending','processing','shipping','return','cancel','damage','delieverd') NOT NULL,
  `payment_status` enum('processing','paid','due','cancel') NOT NULL DEFAULT 'processing',
  `notification` int(11) NOT NULL DEFAULT 1,
  `admin_message` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_payments`
--

CREATE TABLE `order_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `transaction_id` varchar(191) DEFAULT NULL,
  `payment_type` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_payments`
--

INSERT INTO `order_payments` (`id`, `order_id`, `price`, `transaction_id`, `payment_type`, `created_at`, `updated_at`) VALUES
(1, 1, 1400.00, NULL, 'Cash', '2024-10-29 03:02:28', '2024-10-29 03:02:28'),
(2, 1, 0.00, NULL, NULL, '2024-10-29 03:07:34', '2024-10-29 03:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `qnt` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `star_rating` int(11) NOT NULL,
  `review_count` int(11) NOT NULL,
  `before_price` int(11) NOT NULL,
  `after_price` int(11) NOT NULL,
  `short_description` text NOT NULL,
  `tags` varchar(191) NOT NULL,
  `in_stock` varchar(191) NOT NULL,
  `description` longtext NOT NULL,
  `additional_info` longtext DEFAULT NULL,
  `shipping_charge` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `star_rating`, `review_count`, `before_price`, `after_price`, `short_description`, `tags`, `in_stock`, `description`, `additional_info`, `shipping_charge`, `created_at`, `updated_at`) VALUES
(1, 'ক্লাসিক কমফোর্ট, ট্রেন্ডিং লুক ফিলোসোফারস স্টোন টি-শার্ট!', 80, 44, 549, 449, 'ক্লাসিক কমফোর্টের সাথে ট্রেন্ডিং লুক—ফিলোসোফারস স্টোন টি-শার্ট! এই টি-শার্টটি আধুনিক ডিজাইন এবং নরম ফ্যাব্রিকে তৈরি, যা প্রতিদিনের পরিধানের জন্য উপযুক্ত। স্টাইল এবং আরামের মিশ্রণ, আপনার আলমারিতে একদম নতুন মাত্রা যোগ করবে!', 'biker, black, bomber, leather', '99', '<h3><strong>ক্লাসিক কমফোর্ট, ট্রেন্ডিং লুক ফিলোসোফারস স্টোন টি-শার্ট!</strong></h3><p>ক্লাসিক কমফোর্ট এবং ট্রেন্ডিং লুকের অনন্য মিশ্রণ, ফিলোসোফারস স্টোন টি-শার্টটি আপনার দৈনন্দিন স্টাইলকে আরও আকর্ষণীয় করে তুলবে। এই টি-শার্টটি তৈরি করা হয়েছে উচ্চ মানের কটন ফ্যাব্রিক দিয়ে, যা নরম এবং আরামদায়ক, দীর্ঘ সময় পরলেও আপনার স্বাচ্ছন্দ্য অক্ষুণ্ণ রাখবে। ফিলোসোফারস স্টোন টি-শার্টটি তার অনন্য ডিজাইনের জন্য ট্রেন্ডসেটারদের প্রথম পছন্দ, যা আপনাকে স্টাইলিশ এবং আত্মবিশ্বাসী মনে করাবে। বিভিন্ন রঙ এবং আকারে উপলব্ধ, এটি যে কোনো পরিস্থিতিতে পরার জন্য একদম পারফেক্ট। যদি আপনি খুঁজছেন এমন কিছু যা ক্লাসিক আর কমফোর্টের সঠিক সমন্বয়, তবে ফিলোসোফারস স্টোন টি-শার্টই আপনার জন্য।</p><h3><strong>কেনো আমাদের থেকে নিবেন?</strong></h3><ul><li>দীর্ঘ ১১বছরের অভিজ্ঞতার আলোকে এ টি-শার্ট করা</li><li>লেকরা কটন কাপড় যার জিএসএম ১৭০-১৮০</li><li>আপনাকে আনকমন ভাবে উপস্থাপন করাতে।</li></ul>', '<p>Weight 1.25 kg</p><p>Dimensions 90 x 60 x 90 cm</p><p>Size XS, S, M, L, XL</p><p>Color Black, Orange, White</p><p>Storage Relaxed fit shirt-style dress with a rugged</p>', 90, '2024-10-26 00:54:04', '2024-10-26 00:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_category_id` int(11) DEFAULT NULL,
  `category_name` varchar(191) NOT NULL,
  `slugs` varchar(191) NOT NULL,
  `category_image` varchar(191) DEFAULT NULL,
  `category_icon` varchar(191) DEFAULT NULL,
  `seo_title` varchar(191) DEFAULT NULL,
  `seo_description` longtext DEFAULT NULL,
  `seo_tags` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_photos`
--

CREATE TABLE `product_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_photos`
--

INSERT INTO `product_photos` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(4, NULL, 'PRDT-IMG-671c92476f204.jpg', '2024-10-26 00:55:03', '2024-10-26 00:55:03'),
(5, NULL, 'PRDT-IMG-671c93f3ed65b.jpg', '2024-10-26 01:02:11', '2024-10-26 01:02:11'),
(6, NULL, 'PRDT-IMG-671c93fa3ee33.jpg', '2024-10-26 01:02:18', '2024-10-26 01:02:18'),
(7, NULL, 'PRDT-IMG-671c93fe32d64.jpg', '2024-10-26 01:02:22', '2024-10-26 01:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `product_services`
--

CREATE TABLE `product_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_images`
--

CREATE TABLE `review_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review_images`
--

INSERT INTO `review_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, 'PRDT-RVIMG-671c926a8fc47.jpg', '2024-10-26 00:55:38', '2024-10-26 00:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(191) DEFAULT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'XS', '2024-10-26 00:57:05', '2024-10-26 00:57:05'),
(2, 'S', '2024-10-26 00:57:09', '2024-10-26 00:57:09'),
(3, 'M', '2024-10-26 00:57:14', '2024-10-26 00:57:14'),
(4, 'L', '2024-10-26 00:57:19', '2024-10-26 00:57:19'),
(5, 'XL', '2024-10-26 00:57:25', '2024-10-26 00:57:25');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `version` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `default` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `name`, `slug`, `version`, `image`, `default`, `created_at`, `updated_at`) VALUES
(1, 'Default Theme', 'default', '1.0.0', 'thumbnail.webp', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `number` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_number_unique` (`number`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign_products`
--
ALTER TABLE `campaign_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `custom_links`
--
ALTER TABLE `custom_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_id_unique` (`order_id`);

--
-- Indexes for table `order_payments`
--
ALTER TABLE `order_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_photos`
--
ALTER TABLE `product_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_services`
--
ALTER TABLE `product_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_images`
--
ALTER TABLE `review_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_number_unique` (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campaign_products`
--
ALTER TABLE `campaign_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custom_links`
--
ALTER TABLE `custom_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_payments`
--
ALTER TABLE `order_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_photos`
--
ALTER TABLE `product_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_services`
--
ALTER TABLE `product_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_images`
--
ALTER TABLE `review_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
