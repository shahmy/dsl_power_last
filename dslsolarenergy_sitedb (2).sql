-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 11, 2022 at 11:29 PM
-- Server version: 10.5.17-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dslsolarenergy_sitedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_pages`
--

CREATE TABLE `about_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bg_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_pages`
--

INSERT INTO `about_pages` (`id`, `name`, `slug`, `url`, `description`, `title_bg_image`, `title_description`, `featured_image`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'about-us', '/about-us', '<p>DSL Energy, a member of Douglas &amp; Sons (Pvt) Ltd., was established with a bold mission to foster sustainable development and to create a better and cleaner energy revolution for future generations. Since our inception, we have helped our clients match their solar energy requirements with sustainable, realistic, guaranteed, and affordable energy solutions. We are focused on providing a \"one-stop-shop\" for all solar energy solutions for our clients, from understanding their primary energy requirements to providing after-sales support and services. We are a company that is continually developing to meet the ever-changing need for smart and sustainable energy solutions and has a proven track record of providing solutions that deliver real benefits and savings. We work with clients to help them significantly reduce their sky-rocketing electricity bills, secure their energy, future-proof their electricity costs, and reduce their carbon footprint. We believe the sun is one of the earth’s most valuable, yet underutilized, renewable sources. Not only can solar energy power households, hospitals, schools, organizations, businesses, and factories; it can also drive entire industries and economies.</p><p>Together with a highly qualified engineering team, DSL Energy is committed to offering exceptional services and resource-efficient industrial, commercial, and residential solar solutions to meet the ever-changing energy requirements of our clients. We have a dedicated, well-experienced, and accredited engineering and technical team along with our island wide&nbsp; dealer network that empowers DSL Energy to implement top-tier services for projects at every scale. Together with our partners, Microtek and Okaya, we are building the most energized network of customers who power their lives with sunshine.</p><p>And our fully integrated approach to solar panels, batteries, and inverters is fundamentally changing the future of energy. We leverage innovation and harness \"nature’s power\" in order to drive a sustainable energy revolution and make the environmental, social, and economic benefits of solar energy accessible and affordable for all Sri Lankans.</p>', 'vSlERCfaWH4MUI5FXPulCl0ZOyO0en-metaMDEuanBn-.jpg', NULL, 's2c29BDTiJnEqIF06pu9FodooBH3JZ-metaV2hhdHNBcHAgSW1hZ2UgMjAyMi0wOC0xNyBhdCAxMi4yOS41MyBQTS5qcGVn-.jpg', 'Founded in July 1986, Douglas & Sons (Pvt) Ltd is dedicated to being the leading automotive spare parts importer in Sri Lanka and one of the most valuable spare parts sellers for over three decades', 'DSL, DSL Power, Solar', 'DSL Energy, a member of Douglas & Sons (Pvt) Ltd., was established with a bold mission to foster sustainable development and to create a better and cleaner energy revolution for future generations.', '2022-07-12 03:44:44', '2022-08-25 17:39:03');

-- --------------------------------------------------------

--
-- Table structure for table `appliance_categories`
--

CREATE TABLE `appliance_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appliance_categories`
--

INSERT INTO `appliance_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(11, 'Fans & Coolers', '2022-08-17 23:41:34', '2022-08-17 23:41:34'),
(12, 'Lights', '2022-08-17 23:41:39', '2022-08-17 23:41:39'),
(13, 'Laptops & Computers', '2022-08-17 23:41:44', '2022-08-17 23:41:44'),
(14, 'Home Appliances', '2022-08-17 23:41:50', '2022-08-17 23:41:50'),
(15, 'TV & Other Entertainment', '2022-08-17 23:41:57', '2022-08-17 23:41:57'),
(16, 'Acs', '2022-08-17 23:42:03', '2022-08-17 23:42:03'),
(17, 'Motor', '2022-08-17 23:42:08', '2022-08-17 23:42:08'),
(18, 'Others', '2022-08-17 23:42:14', '2022-08-17 23:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `blog_pages`
--

CREATE TABLE `blog_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_bg_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_pages`
--

INSERT INTO `blog_pages` (`id`, `name`, `slug`, `url`, `title_bg_image`, `title_description`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Blog', 'blog', 'http://localhost', 'z9kXtd2IDlJTIA2HQVW1Vg7ZPQ0TrX-metaMDIuanBn-.jpg', NULL, 'Modi eos incidunt dolores ad rerum. Eveniet veniam voluptatem esse qui eum quia. Autem consectetur veritatis molestiae reiciendis est doloribus. Ab quis ad tempora ea.', 'Est doloremque minima sapiente aspernatur. Eveniet odio alias enim ipsum dolores incidunt provident. Molestias incidunt perspiciatis vero explicabo. Nemo corrupti architecto doloremque nesciunt perferendis qui.', 'Officiis similique molestiae dignissimos rerum architecto rerum fugiat nulla. Eveniet qui minus ipsa nobis aliquid. Ut voluptatum perspiciatis ut ipsum rerum.', 'Id quia reiciendis hic est. Similique ipsa quaerat ut dolor in. Facere sapiente aut magnam non neque veniam. Consectetur facere autem et sit explicabo rem.', '2022-07-12 03:44:44', '2022-08-16 21:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(10, 'Renewable Energy', '2022-08-08 03:32:00', '2022-08-08 03:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_post`
--

INSERT INTO `category_post` (`category_id`, `post_id`) VALUES
(10, 21),
(10, 22),
(10, 23);

-- --------------------------------------------------------

--
-- Table structure for table `contact_pages`
--

CREATE TABLE `contact_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_pages`
--

INSERT INTO `contact_pages` (`id`, `name`, `google_map`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Contact Us', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6320643271592!2d79.863629914773!3d6.934503394989775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259048a50489b%3A0xd8ff09332cafcb3a!2s290%2C%2025%20Sri%20Sangaraja%20Mawatha%2C%20Colombo%2001000!5e0!3m2!1sen!2slk!4v1658120766983!5m2!1sen!2slk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'dsl', 'DSL', 'DSL', '2022-07-12 03:44:44', '2022-07-15 05:23:49');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `project_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `post_id`, `project_id`, `product_id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(18, NULL, NULL, 24, 'Details Slider', NULL, 1, '2022-08-09 01:44:00', '2022-08-09 01:44:00'),
(20, NULL, NULL, 28, 'SOLAR PCU 1235/12V - G1', NULL, 1, '2022-08-09 22:04:11', '2022-08-09 22:04:11'),
(21, NULL, NULL, 32, 'SOLAR PCU 2035/24V - G1', NULL, 1, '2022-08-09 22:05:05', '2022-08-09 22:05:05'),
(22, NULL, NULL, 33, 'MPPT SOLAR PCU 2kW/36V - G1', NULL, 1, '2022-08-09 22:06:15', '2022-08-09 22:06:15'),
(23, NULL, NULL, 34, 'MPPT SOLAR PCU 3kW/48V - G1', NULL, 1, '2022-08-09 22:06:44', '2022-08-09 22:06:44'),
(24, NULL, NULL, 35, 'HI-END MPPT PCU 5KVA/48V - G1', NULL, 1, '2022-08-09 22:07:16', '2022-08-09 22:07:16'),
(25, NULL, NULL, 36, 'HI-END MPPT PCU 8070/96V - G1', NULL, 1, '2022-08-09 22:08:08', '2022-08-09 22:08:08'),
(26, NULL, NULL, 37, 'HI-END MPPT PCU 10070/120V - G1', NULL, 1, '2022-08-09 22:08:26', '2022-08-09 22:08:26'),
(27, NULL, NULL, 38, 'SOLAR PV MODULE 330W 24V - G1', NULL, 1, '2022-08-09 22:09:00', '2022-08-09 22:09:00'),
(28, NULL, NULL, 39, 'SOLAR PV MODULE 320W 24V - G1', NULL, 1, '2022-08-09 22:09:18', '2022-08-09 22:09:18'),
(29, NULL, NULL, 40, 'SOLAR PV MODULE 260W 24V - G1', NULL, 1, '2022-08-09 22:09:44', '2022-08-09 22:09:44');

-- --------------------------------------------------------

--
-- Table structure for table `home_about_sections`
--

CREATE TABLE `home_about_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_about_sections`
--

INSERT INTO `home_about_sections` (`id`, `heading`, `sub_heading`, `description`, `image`, `image_title`, `button_name`, `button_link`, `created_at`, `updated_at`) VALUES
(1, 'The Pioneers World Of Solar And Renewable Energy!', 'Complete Residential, Commercial Solar Systems', '<p class=\"paragraph\">Founded in July 1986, Douglas &amp; Sons (Pvt) Ltd is dedicated to being the leading automotive spare parts importer in Sri Lanka and one of the most valuable spare parts sellers for over three decades.</p><p>Since the inauguration of the company, Douglas &amp; Sons (Pvt) Ltd or DSL, as widely known among trade partners and customers and was working with prestigious brands, earning the trust and loyalty of the customers.</p>', 'yB5mFHIw8ip7iqsofndVLFJgEzNDx3-metaV2hhdHNBcHAgSW1hZ2UgMjAyMi0wOC0xNyBhdCAxMi4yOS41MyBQTS5qcGVn-.jpg', 'We lead the way...!', 'read more', '#', '2022-07-12 03:44:44', '2022-08-23 16:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `name`, `url`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'https://site.dslsolarenergy.com/', 'Founded in July 1986, Douglas &amp; Sons (Pvt) Ltd is dedicated to being the leading automotive spare parts importer in Sri Lanka and one of the most valuable spare parts sellers for over three decades', 'DSL Power, DSL', '<p>Founded in July 1986, Douglas &amp;amp; Sons (Pvt) Ltd is dedicated to being the leading automotive spare parts importer in Sri Lanka and one of the most valuable spare parts sellers for over three decades</p>', '2022-07-12 03:44:44', '2022-07-18 03:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `title`, `description`, `image`, `button_name`, `button_url`, `video_url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Avoid Sky-Rocketing Monthly Electricity Bills, Invest In Green Energy.', '<ul class=\"slide-list advantages-list advantages-list-white sha-slider-list\">\n                                        <li>500 + Dealers Islandwide <img src=\"https://dslsolarenergy.com/site/assets/images/lk-03.png\" class=\"dealers\"></li>\n                                        <li>4 Decades in the energy Industry in Sri Lanka</li>\n                                        <li>Asia\'s leading brand in solar energy</li>\n                                    </ul>', 'DyzZHG4HpqVX9qBxtjB3GG83eI3Cfa-metaU2xpZGVyLTAzLmpwZw==-.jpg', 'Solutions', '#', '#', 1, '2022-07-12 03:44:44', '2022-08-25 10:45:30'),
(6, 'Slash Your Rising Electricity Bills, Zero Your Electricity Bill With DSL Solar Energy.', '<ul class=\"slide-list advantages-list advantages-list-white sha-slider-list\">\n                                        <li>500 + Dealers Islandwide <img src=\"https://dslsolarenergy.com/site/assets/images/lk-03.png\" class=\"dealers\"></li>\n                                        <li>4 Decades in the energy Industry in Sri Lanka</li>\n                                        <li>Asia\'s leading brand in solar energy</li>\n                                    </ul>', 'g2VdUS4MPs7AnlgWqw4FXcRYsxFT1B-metaU2xpZGVyLTA0LmpwZw==-.jpg', 'Solutions', '#', '#', 1, '2022-07-14 23:19:10', '2022-08-25 17:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `leaderships`
--

CREATE TABLE `leaderships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_by` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaderships`
--

INSERT INTO `leaderships` (`id`, `name`, `small_description`, `detail_description`, `featured_image`, `order_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Managing Director’s message', NULL, '<p style=\"text-align: justify;\">Renewable energy will be the future-age black gold, I believe. Renewable energy, from solar to wind, is set to create a more sustainable world. With that philosophy and its effectiveness, it has become the fastest-growing energy source in the world. Recently, we have experienced how much we, Sri Lankans rely on fossil fuels and how unprepared we are for a future where fossil fuels will be scarce as the fossil fuel deposits are slowly but surely depleting for good. Hence, we, DSL, would be happy to announce the initiation of our part in boosting the renewable energy sector in Sri Lanka. DSL is partnered with Okaya Power, One of the leading brands in the green energy sector in India, and I would sincerely like to thank them for partnering with DSL. Also, I wish all the very best to our Energy Division team, tirelessly working in the energy sector to make it a real market difference.</p>\n<p style=\"text-align: left;\"><strong>Mr. Saroj Perera<br /></strong><em>Managing Director</em></p>', NULL, 0, 1, '2022-08-08 02:20:35', '2022-08-23 17:03:17'),
(2, 'Executive Director’s message', NULL, '<p style=\"text-align: justify;\">For the first time in the recent history of Sri Lanka, we have experienced how fuel shortage and the lack of conventional energy generation can hurt both the economy and people. We have experienced the stagnation of services, an almost complete halt on the cogs and wheels of economy and society, and mile-long fuel queues that gravely disturbed our day-to-day lives. If we had given more thought to renewable energy a decade ago, the current situation would have been different, hardship-wise. However, we have a greater interest in green energy now, and turning more and more into green energy will help to improve not only our lives but the economy of the country as well.<br /><br />Being an automotive aftermarkets giant in Sri Lanka, DSL always had the best interests of the country\'s economy in mind. Hence we are proud to unveil our new product portfolio in renewable energy, not just to help the economy that is in turmoil currently but also to give people a sustainable option for the energy problem.</p>\n<p style=\"text-align: justify;\"><strong>Mr. Suren Rajanathan</strong><br /><em>Executive Director</em></p>', NULL, 2, 1, '2022-08-08 02:33:30', '2022-08-17 14:25:33'),
(3, 'General Manager/Head of Operation’s message', NULL, '<p style=\"text-align: justify;\">As the energy demand is skyrocketing in recent times, the world has started working on alternative green energy sources and concepts to power up the world for the coming future.</p>\n<p style=\"text-align: justify;\">As Douglas &amp; Sons (Pvt) Ltd is leading many leading industries throughout islandwide dealer network, delivery network, modern technological know-how, reputation with international brands and unmatched customer service, we have the tools necessary to spearhead the green energy industry in Sri Lanka and, even with the reduction of fuel import and energy costs, going green will also help ease the Sri Lankan current dollar crisis as responsible private sector player.</p>\n<p style=\"text-align: justify;\">However, we are still not late to follow sustainable strategies towards a future where we can cater to and satiate most of the country\'s energy needs with renewable energy and spearhead being a dominant nation in the green energy sector. A well-planned future strategy framework on efficient and high-scale solar energy usage will provide an edge to the Sri Lankan domestic market and the economy by default, with concessionary energy costs and convenient accessibility.&nbsp;</p>\n<p style=\"text-align: justify;\"><strong>Mr.&nbsp;</strong><strong>Neranjan Jayasinghe</strong><br /><em>General Manager</em><em>/Head of Operation</em></p>', NULL, 3, 1, '2022-08-15 23:14:50', '2022-08-30 10:58:31'),
(4, 'Division Manager’s message', NULL, '<p style=\"text-align: justify;\">Technology in renewable energy has already led to many innovations in business models, products, and solutions, experts say. Believing that idea, DSL has launched its renewable energy wing with high expectations to be a hallmark of the renewable energy sector in Sri Lanka.<br /><br />Since DSL has already proven the success of its comprehensive dealer and delivery network and the well-experienced team, adopting those resources to the newly found DSL\'s renewable energy division is a strategic move to have a competitive edge in spearheading the green energy sector in Sri Lanka.<br /><br />The DSL\'s renewable energy division consists of a team with expertise and experience in the renewable energy sector and its new trends, as well as modern equipment and tools to deploy consultations, installations and after-sale maintenance of solar grid systems.<br /><br />Partnering up with Okaya Power, on of the largest manufacturing solar energy products and batteries in India, DSL is dedicated to bestowing the best possible, reliable service to its customers. DSL\'s over 3,500 dealers sales force islandwide, the dedicated delivery fleet, the value and weight of the brands, MicroTek and Okaya, coupled with the well-earned reputation of DSL spanning more than three decades, DSL will reassure the international standard service and maintenance of solar power off grid systems in Sri Lanka.</p>\n<p style=\"text-align: justify;\"><strong>Mr. Praneeth Adikari</strong><br /><em>Division Manager</em></p>', NULL, 4, 1, '2022-08-15 23:15:52', '2022-08-17 14:27:00'),
(5, 'OKAYA Vice President International Business message', NULL, '<p style=\"text-align: justify;\"><strong>Ready for the Future!</strong><br /><br />Sri Lanka stands out as one of the most potential markets for us at Okaya with respect to renewable &amp; sustainable energy. Whole economy is looking to get independent from the current dependency on the fossil fuels and we feel renewable &amp; other sustainable resources will substitute imports of petroleum &amp;&nbsp; contribute in Sri Lanka economic growth.&nbsp;<br /><br />With 4 decades of experience in manufacturing power products &amp; having global presence in 40+ countries, &amp; established in APAC, MENA, Africa &amp; the USA, we hold a green flag in product quality &amp; distribution. We carry a wide product offering which are affordable &amp; a best fit to serve this sector.&nbsp;<br /><br />We are fully geared up for building this up together with our Exclusive Partner DSL, a Battery Giant in Sri Lanka and we would like to express our appreciation towards them for taking this step forward &amp; working hard day night to build it on.&nbsp;</p>\n<p style=\"text-align: justify;\"><strong>Mr Anil Gupta</strong><br /><em>OKAYA Vice President International Business.</em></p>', NULL, 1, 1, '2022-08-15 23:17:03', '2022-08-17 14:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `load_items`
--

CREATE TABLE `load_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appliance_category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `watts` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `load_items`
--

INSERT INTO `load_items` (`id`, `appliance_category_id`, `name`, `watts`, `created_at`, `updated_at`) VALUES
(6, 11, 'Ceiling Fan', '75.00', '2022-08-17 23:42:57', '2022-08-17 23:42:57'),
(7, 11, 'Table Fan', '50.00', '2022-08-17 23:43:13', '2022-08-17 23:43:43'),
(8, 11, 'Room Cooler', '250.00', '2022-08-17 23:43:30', '2022-08-17 23:43:30'),
(9, 12, 'Tuble Light', '40.00', '2022-08-17 23:45:36', '2022-08-17 23:45:36'),
(10, 12, 'Tuble Light', '20.00', '2022-08-17 23:45:57', '2022-08-17 23:45:57'),
(11, 12, 'CFL Heavy', '30.00', '2022-08-17 23:46:16', '2022-08-17 23:46:16'),
(12, 12, 'CFL Light', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 12, 'LED Bulb', '9.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 12, 'LED Bulb', '5.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 12, 'Light Bulb(Incandescent)', '40.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 12, 'Light Bulb(Incandescent)', '60.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 12, 'Light Bulb(Incandescent)', '100.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 13, 'Laptop', '100.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 13, 'Desktop/Monitors', '200.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 13, 'Laser printer', '200.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 14, 'Juicer Mixer Grinder', '800.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 14, 'Toaster', '800.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 14, 'Refrigerator(Upto 200L)', '300.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 14, 'Refrigerator(Upto 500L)', '500.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 14, 'Microven', '1400.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 14, 'Vaccum Cleaner', '1400.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 14, 'washing Machine', '1000.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 14, 'Geyser', '2200.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 14, 'Room Heater', '2200.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 15, 'Television LED (upto 40\")', '60.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 15, 'Television CRT (upto 21\")', '100.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 15, 'Television Plasma', '250.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 15, 'Set Top Box (DTH)', '50.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 15, 'Music System', '300.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 15, 'Gaming Console', '200.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 16, 'Air Conditioner (1 Ton, 3 star)', '1200.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 16, 'Air Conditioner (1.5 Ton, 3 star)', '1700.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 16, 'Air Conditioner (2 Ton, 3 star)', '2300.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 16, 'Air Conditioner (1 Ton, Inverter)', '1100.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 16, 'Air Conditioner (1.5 Ton, Inverter)', '1600.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 16, 'Air Conditioner (2 Ton, Inverter)', '2100.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 17, 'Water Pump (0.5 HP)', '400.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 17, 'Water Pump (1 HP)', '800.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 18, 'Photo Copier', '2000.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 18, 'Office Printer/Scanner', '2000.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 18, 'Petrol Filling Machine', '1500.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 18, 'Projector', '600.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 18, 'Routers', '20.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 18, 'Surveillance System', '100.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_12_000001_create_about_pages_table', 1),
(6, '2022_07_12_000002_create_appliance_categories_table', 1),
(7, '2022_07_12_000003_create_blog_pages_table', 1),
(8, '2022_07_12_000004_create_categories_table', 1),
(9, '2022_07_12_000005_create_category_post_table', 1),
(10, '2022_07_12_000006_create_contact_pages_table', 1),
(11, '2022_07_12_000007_create_galleries_table', 1),
(12, '2022_07_12_000008_create_home_about_sections_table', 1),
(13, '2022_07_12_000009_create_home_pages_table', 1),
(14, '2022_07_12_000010_create_home_sliders_table', 1),
(15, '2022_07_12_000011_create_load_items_table', 1),
(16, '2022_07_12_000012_create_packages_table', 1),
(17, '2022_07_12_000013_create_partners_table', 1),
(18, '2022_07_12_000014_create_partner_pages_table', 1),
(19, '2022_07_12_000015_create_photos_table', 1),
(20, '2022_07_12_000016_create_posts_table', 1),
(21, '2022_07_12_000017_create_post_tag_table', 1),
(22, '2022_07_12_000018_create_products_table', 1),
(23, '2022_07_12_000019_create_product_categories_table', 1),
(24, '2022_07_12_000020_create_projects_table', 1),
(25, '2022_07_12_000021_create_tags_table', 1),
(26, '2022_07_12_000022_create_testimonials_table', 1),
(27, '2022_07_12_000023_create_videos_table', 1),
(28, '2022_07_12_009001_add_foreigns_to_category_post_table', 1),
(29, '2022_07_12_009002_add_foreigns_to_galleries_table', 1),
(30, '2022_07_12_009003_add_foreigns_to_load_items_table', 1),
(31, '2022_07_12_009004_add_foreigns_to_photos_table', 1),
(32, '2022_07_12_009005_add_foreigns_to_post_tag_table', 1),
(33, '2022_07_12_009006_add_foreigns_to_products_table', 1),
(34, '2022_07_12_009007_add_foreigns_to_videos_table', 1),
(35, '2022_07_12_083346_create_permission_tables', 1),
(36, '2022_08_08_071844_create_package_product_table', 2),
(37, '2022_08_08_073504_create_leaderships_table', 3),
(38, '2022_08_10_050829_add_order_by_to_packages', 4),
(39, '2022_08_16_043234_add_order_by_to_leaderships_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(30,2) NOT NULL,
  `title_bg_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_by` int(11) DEFAULT 0,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `slug`, `description`, `featured_image`, `price`, `title_bg_image`, `meta_title`, `meta_keyword`, `meta_description`, `order_by`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Package No 03', 'package-no-3', '<p><strong>USAGE:</strong> 600W LOAD STATUS &amp; 5:45 hrs BACK-UP TIME<br /><br /></p>\n<table style=\"border-collapse: collapse; width: 100%; height: 150px;\" border=\"0\">\n<tbody>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>INVERTER</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">MPPT SOLAR PCU 2KV/1.6KW <strong>(2 YEARS WARRANTY)</strong></span></td>\n</tr>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>SOLAR PANELS</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">260W-6 UNITS <strong>(10 YEARS PRODUCT WARRANTY)</strong>(25YEARS PERFORMANCE WARRANTY FOR 80% POWER OUT-PUT)</span></td>\n</tr>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>BATTERY</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">12V/150AH <strong>(3 YEARS WARRANTY)</strong></span></td>\n</tr>\n</tbody>\n</table>', 'DzGSnJFKdF54c0mE0kFG1UUQxwnyoC-metaMDMuanBlZw==-.jpg', '718600.00', NULL, 'package-no-3', 'package-no-3', 'package-no-3', 3, 1, '2022-07-14 23:37:44', '2022-08-18 13:41:24'),
(8, 'Package No 01', 'package-no-01', '<p><strong>USAGE:</strong>&nbsp;200W LOAD STATUS &amp; 3:00 hrs BACK-UP TIME<br /><br /></p>\n<table style=\"border-collapse: collapse; width: 100%; height: 150px;\" border=\"0\">\n<tbody>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>INVERTER</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">PCU1235/12V 935VA&nbsp;<strong>(2 YEARS WARRANTY)</strong></span></td>\n</tr>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>SOLAR PANELS</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">150W-4 UNITS&nbsp;<strong>(10 YEARS PRODUCT WARRANTY)</strong>(25YEARS PERFORMANCE WARRANTY FOR 80% POWER OUT-PUT)</span></td>\n</tr>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>BATTERY</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">12V/100AH&nbsp;<strong>(3 YEARS WARRANTY)</strong></span></td>\n</tr>\n</tbody>\n</table>', 'EmH2fDLeDZ1nbvauN8PpPkcXz8s037-metaV2hhdHNBcHAgSW1hZ2UgMjAyMi0wOC0xOCBhdCAxMS4yOS41MCBBTS5qcGVn-.jpg', '370850.00', NULL, 'Package No 01', 'Package No 01', 'Package No 01', 1, 1, '2022-08-09 22:55:41', '2022-08-18 13:09:20'),
(9, 'Package No 02', 'package-no-02', '<p><strong>USAGE:</strong>&nbsp;500W LOAD STATUS &amp; 3:30 hrs BACK-UP TIME<br /><br /></p>\n<table style=\"border-collapse: collapse; width: 100%; height: 150px;\" border=\"0\">\n<tbody>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>INVERTER</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">PCU2035/24V 1041W&nbsp;<strong>(2 YEARS WARRANTY)</strong></span></td>\n</tr>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>SOLAR PANELS</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">320W-3 UNITS&nbsp;<strong>(10 YEARS PRODUCT WARRANTY)</strong>(25YEARS PERFORMANCE WARRANTY FOR 80% POWER OUT-PUT)</span></td>\n</tr>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>BATTERY</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">12V/150AH&nbsp;<strong>(3 YEARS WARRANTY)</strong></span></td>\n</tr>\n</tbody>\n</table>', 'wG9cCrn5WtXDIWQVYBLMmnWIENwc1O-metaMDIuanBlZw==-.jpg', '455050.00', NULL, 'package-no-02', 'package-no-02', 'package-no-02', 2, 1, '2022-08-09 23:52:11', '2022-08-18 13:18:35'),
(10, 'Package No 04', 'Package No 04', '<p><strong>USAGE:</strong> 1000W LOAD STATUS &amp; 6:00 hrs BACK-UP TIME<br /><br /></p>\n<table style=\"border-collapse: collapse; width: 100%; height: 150px;\" border=\"0\">\n<tbody>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>INVERTER</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">MPPT SOLAR PCU 3KVA/2.4KW <strong>(2 YEARS WARRANTY)</strong></span></td>\n</tr>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>SOLAR PANELS</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">320W-8 UNITS <strong>(10 YEARS PRODUCT WARRANTY)</strong>(25YEARS PERFORMANCE WARRANTY FOR 80% POWER OUT-PUT)</span></td>\n</tr>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>BATTERY</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">12V/200AH <strong>(3 YEARS WARRANTY)</strong></span></td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>', 'znfXqQlwlBaxoCiUfQZroQ7f9pbTcl-metaMDQuanBlZw==-.jpg', '1198500.00', NULL, 'Package No 04', 'Package No 04', 'Package No 04', 4, 1, '2022-08-18 13:41:14', '2022-08-18 14:06:09'),
(11, 'Package No 05', 'Package No 05', '<p><strong>USAGE:</strong> 1500W LOAD STATUS &amp; 5:00 hrs BACK-UP TIME<br /><br /></p>\n<table style=\"border-collapse: collapse; width: 100%; height: 150px;\" border=\"0\">\n<tbody>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>INVERTER</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">MPPT SOLAR PCU 5KVA/4KW <strong>(2 YEARS WARRANTY)</strong></span></td>\n</tr>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>SOLAR PANELS</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">330W-12 UNITS <strong>(10 YEARS PRODUCT WARRANTY)</strong>(25YEARS PERFORMANCE WARRANTY FOR 80% POWER OUT-PUT)</span></td>\n</tr>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>BATTERY</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">12V/250AH <strong>(3 YEARS WARRANTY)</strong></span></td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>', 'daa4jpxc3db20MCJRU1rT0lbRRxReD-metaMDUuanBlZw==-.jpg', '1964500.00', NULL, 'Package No 05', 'Package No 05', 'Package No 05', 5, 1, '2022-08-18 13:45:39', '2022-08-18 14:28:35'),
(12, 'Package No 06', 'Package No 06', '<p><strong>USAGE:</strong> 2500W LOAD STATUS &amp; 6:00 hrs BACK-UP TIME<br /><br /></p>\n<table style=\"border-collapse: collapse; width: 100%; height: 150px;\" border=\"0\">\n<tbody>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>INVERTER</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">MPPT SOLAR PCU8070 96V 7.5KV/6W <strong>(2 YEARS WARRANTY)</strong></span></td>\n</tr>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>SOLAR PANELS</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">330W-18 UNITS <strong>(10 YEARS PRODUCT WARRANTY)</strong>(25YEARS PERFORMANCE WARRANTY FOR 80% POWER OUT-PUT)</span></td>\n</tr>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>BATTERY</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">12V/250AH <strong>(3 YEARS WARRANTY)</strong></span></td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>', 'UEI5Q7UXpQLapL0xvYVIRS5jnO4G2k-metaMDYuanBlZw==-.jpg', '2698500.00', NULL, 'Package No 06', 'Package No 06', 'Package No 06', 6, 1, '2022-08-18 13:50:34', '2022-08-18 14:05:50'),
(13, 'Package No 07', 'Package No 07', '<p><strong>USAGE:</strong> 3400W LOAD STATUS &amp; 5:30 hrs BACK-UP TIME<br /><br /></p>\n<table style=\"border-collapse: collapse; width: 100%; height: 150px;\" border=\"0\">\n<tbody>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>INVERTER</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">MPPT SOLAR PCU10070 120V 10KVA/8KW <strong>(2 YEARS WARRANTY)</strong></span></td>\n</tr>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>SOLAR PANELS</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">320W-24 UNITS <strong>(10 YEARS PRODUCT WARRANTY)</strong>(25YEARS PERFORMANCE WARRANTY FOR 80% POWER OUT-PUT)</span></td>\n</tr>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>BATTERY</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">12V/250AH <strong>(3 YEARS WARRANTY)</strong></span></td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>', '3Z6G5R97ZiQ4WvrXdcDO4LYuanMyub-metaMDcuanBlZw==-.jpg', '4481000.00', NULL, 'Package No 07', 'Package No 07', 'Package No 07', 7, 1, '2022-08-18 13:56:51', '2022-08-18 14:05:41'),
(14, 'Package No 08', 'Package No 08', '<p><strong>USAGE:</strong> 3500W LOAD STATUS &amp; 2:30 hrs BACK-UP TIME<br /><br /></p>\n<table style=\"border-collapse: collapse; width: 100%; height: 150px;\" border=\"0\">\n<tbody>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>INVERTER</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">PCU1435/12V 681W <strong>(2 YEARS WARRANTY)</strong></span></td>\n</tr>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>SOLAR PANELS</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">150W-4 UNITS <strong>(10 YEARS PRODUCT WARRANTY)</strong>(25YEARS PERFORMANCE WARRANTY FOR 80% POWER OUT-PUT)</span></td>\n</tr>\n<tr style=\"height: 50px;\">\n<td style=\"width: 22.7118%; height: 50px;\">\n<p><span style=\"font-size: 12pt;\"><strong>BATTERY</strong></span></p>\n</td>\n<td style=\"width: 77.2882%; height: 50px;\"><span style=\"font-size: 12pt;\">12V/150AH <strong>(3 YEARS WARRANTY)</strong></span></td>\n</tr>\n</tbody>\n</table>\n<p>&nbsp;</p>', 'UA8BNbIjXDfDilsfSiTFsn3clKgMS5-metaMDguanBlZw==-.jpg', '2946250.00', NULL, 'Package No 08', 'Package No 08', 'Package No 08', 8, 1, '2022-08-18 14:02:19', '2022-08-18 18:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `package_product`
--

CREATE TABLE `package_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_product`
--

INSERT INTO `package_product` (`id`, `package_id`, `product_id`, `created_at`, `updated_at`) VALUES
(4, 6, 26, NULL, NULL),
(7, 8, 26, NULL, NULL),
(9, 9, 32, NULL, NULL),
(10, 9, 39, NULL, NULL),
(11, 9, 27, NULL, NULL),
(12, 6, 41, NULL, NULL),
(13, 6, 24, NULL, NULL),
(14, 6, 40, NULL, NULL),
(15, 6, 27, NULL, NULL),
(16, 10, 34, NULL, NULL),
(17, 10, 39, NULL, NULL),
(18, 10, 30, NULL, NULL),
(19, 11, 35, NULL, NULL),
(20, 11, 38, NULL, NULL),
(21, 11, 31, NULL, NULL),
(22, 12, 31, NULL, NULL),
(25, 13, 37, NULL, NULL),
(26, 13, 39, NULL, NULL),
(27, 13, 31, NULL, NULL),
(32, 12, 36, NULL, NULL),
(33, 12, 38, NULL, NULL),
(34, 8, 28, NULL, NULL),
(35, 8, 42, NULL, NULL),
(36, 8, 29, NULL, NULL),
(37, 11, 44, NULL, NULL),
(38, 12, 44, NULL, NULL),
(39, 13, 44, NULL, NULL),
(40, 14, 43, NULL, NULL),
(41, 14, 42, NULL, NULL),
(42, 14, 27, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `title`, `description`, `logo`, `website`, `orderby`, `status`, `created_at`, `updated_at`) VALUES
(1, 'MICROTEK', '<p class=\"paragraph\"><strong>Technology we need, the technology we create, and the technology we live.</strong></p>\n<p style=\"text-align: justify;\"><img style=\"float: right;\" src=\"../../../storage/ytKeiGwtDpgpmRIfoWgPIAZPAVdepMG7in7mOzWz.jpg\" alt=\"\" width=\"235\" height=\"90\" />top power-consuming countries and solutions to cater for that need. Today MICROTEK has become the paramount partner in the power product market of India,&nbsp;and one of the most trusted brands in the power product market worldwide, with more than 120 million users both in households and the industrial sector across the globe.</p>\n<p style=\"text-align: justify;\">MICROTEK offers the highest quality Power Backup solutions, Solar Energy, Voltage Solutions, Wires &amp; Cables, Circuit Protection Devices (MCB, DBs), E-Vehicle Chargers, Surge &amp; Lightning Protectors &amp; Health Care range of products.</p>\n<p style=\"text-align: justify;\">With the respected name, MICROTEK has earned for solar energy equipment and parts, DSL proudly partnered up with MICROTEK to best serve the potential solar system consumers in Sri Lanka.</p>', NULL, 'https://www.microtekdirect.com/', 0, 1, '2022-07-12 03:44:44', '2022-08-23 13:23:17'),
(2, 'OKAYA', '<p class=\"paragraph\"><strong>The pioneer in the battery manufacturing industry</strong></p>\n<p style=\"text-align: justify;\"><img style=\"float: left;\" src=\"../../../storage/zOkPwMoYlSo0kzU3kd7OOysffOQUF9NTs7zZqaFq.jpg\" alt=\"\" width=\"235\" height=\"90\" />India has become a world power economically with its potential and capability, and Indian companies started to thrive in the global industrial landscape, earning trust. OKAYA is one of those prominent brand names entrusted with top-quality battery products worldwide.</p>\n<p style=\"text-align: justify;\">Manufacturing and designing all types of batteries, battery cells, power packs, storage batteries and batteries containers, batteries cover, batteries eliminators, chargeable batteries, solar power batteries and other types of batteries, OKAYA has become the champion in the battery manufacturing industry with a diversified product range and service categories. Tubular Battery- Inverter Battery and Solar Battery, SMF Battery, E-Rickshaw Battery, Lithium and EV charging solutions are OKAYA\'s expertise, and also, OKAYA is the sole manufacturer of 100% Tubular Batteries.</p>\n<p style=\"text-align: justify;\">Constantly redefining quality and excellence with a dedicated research &amp; development team, OKAYA utilizes cutting-edge technologies to introduce state-of-the-art battery products.</p>\n<p style=\"text-align: justify;\">Since DSL and OKAYA share the same philosophy on production quality and consumer trust, DSL has proudly partnered up with OKAYA to boost the Sri Lankan green energy sector with eco-friendly, reliable, and long-Lasting battery products that OKAYA offer.</p>', NULL, 'https://www.okayapower.com/', 1, 1, '2022-07-12 03:44:44', '2022-08-23 13:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `partner_pages`
--

CREATE TABLE `partner_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_bg_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner_pages`
--

INSERT INTO `partner_pages` (`id`, `name`, `slug`, `url`, `title_bg_image`, `title_description`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Partners', 'partners', '/partners', 'TouKRlsNt7N9WTvARu5g1pRBkBD1lo-metaMDUuanBn-.jpg', NULL, '<p>Douglas &amp; Sons (Pvt) Ltd has launched its green energy wing as a part of the long-term solution for Sri Lanka’s energy crisis and as a partner for a sustainable future. To become one of South Asia’s foremost solar power systems partners and raise the standards of the green energy industry in Sri Lanka, DSL has partnered up with Microtek and Okaya, the world’s top-tier solar equipment suppliers.</p>', 'Douglas & Sons (Pvt) Ltd has launched its green energy wing as a part of the long-term solution for Sri Lanka’s energy crisis and as a partner for a sustainable future', 'Douglas & Sons (Pvt) Ltd, partners', 'Douglas & Sons (Pvt) Ltd has launched its green energy wing as a part of the long-term solution for Sri Lanka’s energy crisis and as a partner for a sustainable future', '2022-07-12 03:44:45', '2022-08-17 17:21:22');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'list aboutpages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(2, 'view aboutpages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(3, 'create aboutpages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(4, 'update aboutpages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(5, 'delete aboutpages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(6, 'list appliancecategories', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(7, 'view appliancecategories', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(8, 'create appliancecategories', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(9, 'update appliancecategories', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(10, 'delete appliancecategories', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(11, 'list blogpages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(12, 'view blogpages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(13, 'create blogpages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(14, 'update blogpages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(15, 'delete blogpages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(16, 'list categories', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(17, 'view categories', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(18, 'create categories', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(19, 'update categories', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(20, 'delete categories', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(21, 'list contactpages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(22, 'view contactpages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(23, 'create contactpages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(24, 'update contactpages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(25, 'delete contactpages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(26, 'list galleries', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(27, 'view galleries', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(28, 'create galleries', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(29, 'update galleries', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(30, 'delete galleries', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(31, 'list homeaboutsections', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(32, 'view homeaboutsections', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(33, 'create homeaboutsections', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(34, 'update homeaboutsections', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(35, 'delete homeaboutsections', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(36, 'list homepages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(37, 'view homepages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(38, 'create homepages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(39, 'update homepages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(40, 'delete homepages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(41, 'list homesliders', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(42, 'view homesliders', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(43, 'create homesliders', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(44, 'update homesliders', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(45, 'delete homesliders', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(46, 'list loaditems', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(47, 'view loaditems', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(48, 'create loaditems', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(49, 'update loaditems', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(50, 'delete loaditems', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(51, 'list packages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(52, 'view packages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(53, 'create packages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(54, 'update packages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(55, 'delete packages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(56, 'list partners', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(57, 'view partners', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(58, 'create partners', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(59, 'update partners', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(60, 'delete partners', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(61, 'list partnerpages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(62, 'view partnerpages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(63, 'create partnerpages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(64, 'update partnerpages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(65, 'delete partnerpages', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(66, 'list photos', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(67, 'view photos', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(68, 'create photos', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(69, 'update photos', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(70, 'delete photos', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(71, 'list posts', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(72, 'view posts', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(73, 'create posts', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(74, 'update posts', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(75, 'delete posts', 'web', '2022-07-12 03:44:42', '2022-07-12 03:44:42'),
(76, 'list products', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(77, 'view products', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(78, 'create products', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(79, 'update products', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(80, 'delete products', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(81, 'list productcategories', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(82, 'view productcategories', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(83, 'create productcategories', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(84, 'update productcategories', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(85, 'delete productcategories', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(86, 'list projects', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(87, 'view projects', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(88, 'create projects', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(89, 'update projects', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(90, 'delete projects', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(91, 'list tags', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(92, 'view tags', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(93, 'create tags', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(94, 'update tags', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(95, 'delete tags', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(96, 'list testimonials', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(97, 'view testimonials', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(98, 'create testimonials', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(99, 'update testimonials', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(100, 'delete testimonials', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(101, 'list videos', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(102, 'view videos', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(103, 'create videos', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(104, 'update videos', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(105, 'delete videos', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(106, 'list roles', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(107, 'view roles', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(108, 'create roles', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(109, 'update roles', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(110, 'delete roles', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(111, 'list permissions', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(112, 'view permissions', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(113, 'create permissions', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(114, 'update permissions', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(115, 'delete permissions', 'web', '2022-07-12 03:44:44', '2022-07-12 03:44:44'),
(116, 'list users', 'web', '2022-07-12 03:44:44', '2022-07-12 03:44:44'),
(117, 'view users', 'web', '2022-07-12 03:44:44', '2022-07-12 03:44:44'),
(118, 'create users', 'web', '2022-07-12 03:44:44', '2022-07-12 03:44:44'),
(119, 'update users', 'web', '2022-07-12 03:44:44', '2022-07-12 03:44:44'),
(120, 'delete users', 'web', '2022-07-12 03:44:44', '2022-07-12 03:44:44');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `gallery_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(11, 18, 'PwghOtLl19nAyI3Rasf6bWlIYVwmJu-metac29sYXItcGN1LTE0MzUxMnYtMy53ZWJw-.webp', 1, '2022-08-09 01:44:41', '2022-08-09 01:44:41'),
(12, 18, 'GeDJ0EOiKtyMro9xCLSfCHxREDwZiJ-metac29sYXItcGN1LTE0MzUxMnYtNC53ZWJw-.webp', 1, '2022-08-09 01:45:28', '2022-08-09 01:45:28'),
(13, 18, 'gwNLV6lLfndTrGeo5ku6F73E2t8xO0-metac29sYXItcGN1LTE0MzUxMnYtNS53ZWJw-.webp', 1, '2022-08-09 01:45:42', '2022-08-09 01:45:42'),
(17, 20, 'Wbl2Y7VntnhUJYJczGrgPm9G8g6J6M-metac29sYXItcGN1LTEyMzUxMnYtMyAoMSkud2VicA==-.webp', 1, '2022-08-09 23:05:19', '2022-08-09 23:05:19'),
(18, 20, 'aIszsDI672PeVsW3cuJp3TpExtbOYH-metac29sYXItcGN1LTEyMzUxMnYtNC53ZWJw-.webp', 1, '2022-08-09 23:05:31', '2022-08-09 23:05:31'),
(19, 20, 'sSvxGm1RAWjdVisgzHyZiluyfthXB3-metac29sYXItcGN1LTEyMzUxMnYtNS53ZWJw-.webp', 1, '2022-08-09 23:05:41', '2022-08-09 23:05:41'),
(20, 21, 'jNIKh2C4Ih77tFg1nlcXOBqBDv69I5-metac29sYXItcGN1LTIwMzUyNHYtMy53ZWJw-.webp', 1, '2022-08-09 23:17:21', '2022-08-09 23:17:21'),
(21, 21, 'su1YrSIcNZiN7uqZTIKwIHtugdeiSe-metac29sYXItcGN1LTIwMzUyNHYtNC53ZWJw-.webp', 1, '2022-08-09 23:17:32', '2022-08-09 23:17:32'),
(23, 21, 'FWCAIk8aQzzHc1PFDNlxrcGUCaaEuc-metac29sYXItcGN1LTIwMzUyNHYtNS53ZWJw-.webp', 1, '2022-08-09 23:18:00', '2022-08-09 23:18:00'),
(24, 22, 'TivZOf3x7S54YgSxGsfroNIYHBnwwI-metabXBwdC1zb2xhci1wY3UtMmt3MzZ2LTMud2VicA==-.webp', 1, '2022-08-09 23:18:46', '2022-08-09 23:18:46'),
(25, 22, 'h2H6rMiim9qSU3XKjyCZIzzffz5SGr-metabXBwdC1zb2xhci1wY3UtMmt3MzZ2LTQud2VicA==-.webp', 1, '2022-08-09 23:19:00', '2022-08-09 23:19:00'),
(26, 22, 'WKM7llsqJgP2Cz3maZwDqGbDqQcaaB-metabXBwdC1zb2xhci1wY3UtMmt3MzZ2LTUud2VicA==-.webp', 1, '2022-08-09 23:19:29', '2022-08-09 23:19:29'),
(27, 23, 'RQWMv0j96EaNtcdDd4jGH6Ky3wUB3g-metabXBwdC1zb2xhci1wY3UtM2t3NDh2LTMud2VicA==-.webp', 1, '2022-08-09 23:20:19', '2022-08-09 23:20:19'),
(28, 23, 'JYgeiCEqRkzpn3KzsFbRnXLYE0BbXL-metabXBwdC1zb2xhci1wY3UtM2t3NDh2LTQud2VicA==-.webp', 1, '2022-08-09 23:20:29', '2022-08-09 23:20:29'),
(29, 23, 'KXo8YkJWl2eRY5SYnmFZ9Wy5yMSAOe-metabXBwdC1zb2xhci1wY3UtM2t3NDh2LTUud2VicA==-.webp', 1, '2022-08-09 23:20:38', '2022-08-09 23:20:38'),
(30, 24, 'zDhQzN5t9vlP6PPzwRac46PCtGZQue-metaaGktZW5kLW1wcHQtcGN1LTVrdmE0OHYtMS53ZWJw-.webp', 1, '2022-08-09 23:21:27', '2022-08-09 23:21:27'),
(31, 24, '7j2ylCerSxcZtbWNoNYf5YmVuz6PEd-metaaGktZW5kLW1wcHQtcGN1LTVrdmE0OHYtMi53ZWJw-.webp', 1, '2022-08-09 23:21:37', '2022-08-09 23:21:37'),
(32, 24, 'oqfK7hdeK41j1M0sijDN1xgfPTMghU-metaaGktZW5kLW1wcHQtcGN1LTVrdmE0OHYtMy53ZWJw-.webp', 1, '2022-08-09 23:21:47', '2022-08-09 23:21:47'),
(33, 25, '4BWqY7OU7uQJvA3ILhoLs1KgHF22IH-metaaGktZW5kLW1wcHQtcGN1LTgwNzA5NnYtMi53ZWJw-.webp', 1, '2022-08-09 23:23:02', '2022-08-09 23:23:02'),
(34, 25, '5CHV9iXEmt18wMyOiOjzfiJIb33eaR-metaaGktZW5kLW1wcHQtcGN1LTgwNzA5NnYtMS53ZWJw-.webp', 1, '2022-08-09 23:23:13', '2022-08-09 23:23:13'),
(35, 25, 'Ev6B4DHz2aQl4a9O1XguEkuY77Sh01-metaaGktZW5kLW1wcHQtcGN1LTgwNzA5NnYtMy53ZWJw-.webp', 1, '2022-08-09 23:23:23', '2022-08-09 23:23:23'),
(36, 26, 'vJOBKg8pkX25TTPGBdp8B8hUTpcuDD-metaaGktZW5kLW1wcHQtcGN1LTEwMDcwMTIwdi0xLndlYnA=-.webp', 1, '2022-08-09 23:26:01', '2022-08-09 23:26:01'),
(37, 26, 'g1I2LgIrHUMNA0iEUFZuJXou8Yi4r8-metaaGktZW5kLW1wcHQtcGN1LTEwMDcwMTIwdi0yLndlYnA=-.webp', 1, '2022-08-09 23:26:12', '2022-08-09 23:26:12'),
(38, 26, 'M3ZkF5sPMH1C99eagfZxZCAdgc3IdO-metaaGktZW5kLW1wcHQtcGN1LTEwMDcwMTIwdi0zLndlYnA=-.webp', 1, '2022-08-09 23:26:22', '2022-08-09 23:26:22'),
(39, 27, 'un1qf9XNSu5VWB4wgX9bBQCgxwEvpk-metac29sYXItcHYtbW9kdWxlLTMzMHctMjR2LTEud2VicA==-.webp', 1, '2022-08-09 23:27:00', '2022-08-09 23:27:00'),
(40, 27, 'tlgJSKURI710Zz3Uft8UMdSre1tlYE-metac29sYXItcHYtbW9kdWxlLTMzMHctMjR2LTIud2VicA==-.webp', 1, '2022-08-09 23:27:10', '2022-08-09 23:27:10'),
(41, 27, 'UEhMXMb51rDBccYTknozBvHwbI8kah-metac29sYXItcHYtbW9kdWxlLTMzMHctMjR2LTMud2VicA==-.webp', 1, '2022-08-09 23:27:20', '2022-08-09 23:27:20'),
(42, 28, 'BgkelseQ8uKEwAw13mAIbP29r4w8NE-metac29sYXItcHYtbW9kdWxlLTMyMHctMjR2LTMud2VicA==-.webp', 1, '2022-08-09 23:27:45', '2022-08-09 23:27:59'),
(43, 28, 'bvUJR2l98UMvIi7QKJOeFNiSEIpIDQ-metac29sYXItcHYtbW9kdWxlLTMyMHctMjR2LTQud2VicA==-.webp', 1, '2022-08-09 23:28:10', '2022-08-09 23:28:10'),
(44, 28, '19my3TEwJLpr0TpFxdNwTiC0g5jgQQ-metac29sYXItcHYtbW9kdWxlLTMyMHctMjR2LTUud2VicA==-.webp', 1, '2022-08-09 23:28:19', '2022-08-09 23:28:19'),
(45, 29, 'g5KE2uy2gg04YlMwKeDhZ3I5Gxh5cT-metac29sYXItcHYtbW9kdWxlLTI2MHctMjR2LTMud2VicA==-.webp', 1, '2022-08-09 23:28:49', '2022-08-09 23:29:00'),
(46, 29, 'lTJUUdryKHmxsCmwC9daTLzpTLoINw-metac29sYXItcHYtbW9kdWxlLTI2MHctMjR2LTQud2VicA==-.webp', 1, '2022-08-09 23:29:11', '2022-08-09 23:29:11'),
(47, 29, 'G7MMjkZZECynWl8EvF0m3tmPGgC0fL-metac29sYXItcHYtbW9kdWxlLTI2MHctMjR2LTUud2VicA==-.webp', 1, '2022-08-09 23:29:22', '2022-08-09 23:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `small_description`, `detail_description`, `featured_image`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(21, 'CHANGING THE WAY OUR NATION IS POWERED', 'changing-the-way-our-nation-is-powered', '<p>harnessing “nature’s power” to form a clean energy revolution. Here’s everything you need to know about energy renewables and how we can change the way our nation is powered.</p>', '<p style=\"text-align: justify;\">Harnessing &ldquo;nature&rsquo;s power&rdquo; to form a clean energy revolution. Here&rsquo;s everything you need to know about energy renewables and how we can change the way our nation is powered.</p>\n<h4 style=\"text-align: center;\"><strong>What Is Renewable Energy?</strong></h4>\n<p style=\"text-align: justify;\">Energy Renewables are generated from naturally replenishing sources like sunlight and wind, whereas the energy from renewable sources can transfer to mechanical movement, heating, and electricity generation. Fossil fuels, coal, oil, and gas, to the contrary, are non-renewable energy sources that are produced using resources that are limited and may eventually run out.</p>\n<p style=\"text-align: justify;\">The use of renewable energy has existed since the beginning of time. If we go back in time to our prehistoric ancestors, they used various methods of effectively harnessing energy sources that have played a central role in human development. For instance, people awoke and slept with the light, relied on the sun for warmth and energy, burned wood and dung for heat, and water power to build basic mills. Renewable resources are often seen as futuristic technology, but they are also a technology of the past. Currently, the past technology has been modernized and developed, harnessing nature&rsquo;s power to form a clean energy future, making it smarter, more secure, and better integrated.</p>\n<h4 style=\"text-align: center;\"><strong>TYPES OF RENEWABLE ENERGY SOURCES&nbsp;</strong></h4>\n<h5><strong>Solar Energy</strong></h5>\n<p style=\"text-align: justify;\">Did you know that about 173,000 terawatts of solar energy strike the Earth every second? Interesting fact is that it is more than 10,000 times the world&rsquo;s total energy needs. Clearly solar is the most abundant source of Energy on earth.&nbsp;</p>\n<figure class=\"attachment attachment--preview attachment--png\" data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;2.png&quot;,&quot;filesize&quot;:100149,&quot;height&quot;:144,&quot;href&quot;:&quot;http://127.0.0.1:8000/storage/PmzmvUejaXOm08b55XBOwH4K7feZfPWVlPX0JZpQ.png&quot;,&quot;url&quot;:&quot;http://127.0.0.1:8000/storage/PmzmvUejaXOm08b55XBOwH4K7feZfPWVlPX0JZpQ.png&quot;,&quot;width&quot;:255}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;caption&quot;:&quot;.&quot;,&quot;presentation&quot;:&quot;gallery&quot;}\"><a href=\"../../../storage/PmzmvUejaXOm08b55XBOwH4K7feZfPWVlPX0JZpQ.png\"><img style=\"float: right;\" src=\"../../../storage/PmzmvUejaXOm08b55XBOwH4K7feZfPWVlPX0JZpQ.png\" width=\"198\" height=\"112\" /></a></figure>\n<p style=\"text-align: justify;\">Solar technologies are capable of generating electricity through solar power, to produce solar thermal energy for power generation, initiate solar architecture to clean and renew solar power and produce fuels for a wide range of applications. Also Solar energy is a key solution in battling the current global warming and reducing our dependence on nonrenewable energy resources like fossil fuels, which has the greatest impact on the climate crisis. &nbsp;</p>\n<h5 style=\"text-align: justify;\">Wind Energy</h5>\n<p style=\"text-align: justify;\">Wind energy offers numerous advantages, which is why it is one of the world\'s booming energy sources. From old-fashioned windmills, the wind power industry has advanced from traditional windmills to inventing turbines as tall as skyscrapers which convert wind energy into rotation of the blades, which powers an alternator to produce electricity.&nbsp;</p>\n<p><img style=\"float: right;\" src=\"../../../storage/8dx4fU3bKqWPPoRW3vJvnUcVl1vtmuV7YBqIuTDq.png\" alt=\"\" width=\"135\" height=\"120\" /></p>\n<h4 style=\"text-align: center;\">Other Alternative Energy Sources</h4>\n<h5>Hydroelectric Power</h5>\n<p style=\"text-align: justify;\">Hydroelectric power is the largest renewable energy source for electricity in the world representing around 16% of global power production. Whereas in Sri Lanka Hydropower is well developed and modernized and will continue to play an important role in the island&rsquo;s energy grid.&nbsp;</p>\n<h5 style=\"text-align: justify;\">Biomass Energy</h5>\n<p style=\"text-align: justify;\">\"Organic material\" is the simplest definition of biomass. By extension, it indicates that it originates from anything that is or has ever been living, including animal waste, agricultural waste, garden waste, and so on. The fact that biomass is renewable and has a seemingly endless supply makes it particularly advantageous.&nbsp;</p>\n<h5>Ocean</h5>\n<p style=\"text-align: justify;\">The ocean covers 70% of the world&rsquo;s surface, and it is one of the planet&rsquo;s most abundant sources of renewable energy. Because ocean wave power can be captured and transformed into clean electricity sufficient to power the whole world.&nbsp;</p>\n<p><img style=\"float: right;\" src=\"../../../storage/KOLE0tDSUTRm7aURM6KTJWQLjY0YfyfRhFDAyoBH.png\" alt=\"\" width=\"165\" height=\"128\" /></p>\n<h5>Geothermal Energy</h5>\n<p style=\"text-align: justify;\">Did you know that the Earth\'s core is extremely heated and that this heat may produce energy? It is the heat that is generated within the Earth that is referred to as geothermal energy. It is a resource that can be gathered for human use and is accessible wherever on the surface of the Earth.&nbsp;</p>\n<h4 style=\"text-align: center;\">Why Solar Energy?</h4>\n<h5>Limitless Solar Energy - Solar Energy relies on the sun as its main source.</h5>\n<p>The sun is a magnificent renewable resource that has all the power to sow the seeds of life on earth and deliver clean, sustainable energy to all living beings. In fact studies show that more energy from the sun reaches earth in one hour than is used by the entire population of the world in one year. More importantly, the sun shines all over the world making solar power viable anywhere.</p>\n<h5><strong>Solar Energy uses simple technology and has no moving parts hence they last a long time.</strong></h5>\n<p>Solar Energy is highly reliable with a long service life of 25+ years of guaranteed electricity and it can continue producing electricity for many many years after that.&nbsp;</p>\n<h5><strong>Solar Energy is a clean renewable energy resource</strong></h5>\n<p>Solar energy is a clean, renewable energy source with no greenhouse gas emissions and low overhead expenses</p>\n<h5><strong>Avoid High Utility Expenses</strong></h5>\n<p>Solar energy may be a helpful hand in these unprecedented times where inflation is on the rise, the cost of living is growing daily, and there are regular power outages caused by the dollar crisis. You can avoid excessive utility costs by using stored solar energy.<br /><br /></p>\n<h4 style=\"text-align: center;\">Solar Energy Is The Key Solution To Power The Nation</h4>\n<p style=\"text-align: justify;\">Our nation is now dealing with a severe energy crisis, primarily on account of a lack of foreign currency to import diesel and other fossil fuels required to produce energy. We rely on thermal energy as our main source of energy generation because our hydropower-producing capability can only supply roughly 30% of our entire energy needs.&nbsp;</p>\n<p><img style=\"float: left;\" src=\"../../../storage/6JpCJBq8fmDVHj9PQ6QVt8GF69nAV7SmsFmC5GZY.png\" alt=\"\" width=\"167\" height=\"237\" /></p>\n<p style=\"text-align: justify;\">The earth obtains enough solar energy&mdash;sufficient to satisfy the entire energy needs of the world for a whole year. In contrast, Sri Lanka is in the most privileged position of being a tropical paradise with over 250 days of bright sunshine annually anywhere in the country where Solar energy would not only make electricity greener and affordable but will improve Sri Lanka&rsquo;s economic competitiveness as well.&nbsp;</p>\n<p style=\"text-align: justify;\">The renewable energy sector is evolving quickly as a result of its unprecedented growth, whereas the solar sector is experiencing significant cost reductions that are enabling technological advancement and market expansion and leading to a significant increase in the supply, integration, and distribution of solar energy across the globe.</p>', 'NWME40khzVyTuvrslIEUWzorBJK5gp-metaRVZrNlRBVVhrQUVIMUhVLmpmaWY=-.jpg', 'CHANGING THE WAY OUR NATION IS POWERED', 'transfer to mechanical movement, heating, electricity generation', '<p>CHANGING THE WAY OUR NATION IS POWERED</p>', 1, '2022-08-08 03:34:06', '2022-08-17 15:04:51'),
(22, 'ON GRID VS OFF GRID SOLAR POWER SYSTEM ', 'on-grid-vs-off-grid-solar-power-system', '<p>As the demand for solar power systems continue to escalate around the globe, The technologies behind the solar landscape are revamping at a staggering rate.&nbsp;</p>', '<p style=\"text-align: justify;\">As the demand for solar power systems continue to escalate around the globe, The technologies behind the solar landscape are revamping at a staggering rate. However, the stumbling block most people have is the lack of awareness on how to switch to solar- powered systems.</p>\n<p style=\"text-align: justify;\">Let&rsquo;s dig into On-grid and off-grid solar systems, along with all the other information that will be useful to anybody wishing to have a solar system.</p>\n<h4 style=\"text-align: center;\">What Is An On Grid &amp; Off Grid Solar System?</h4>\n<p style=\"text-align: justify;\">The main differences between the on-grid and off-grid solar system is their power access. If you install an off-grid solar power system, you will solely depend on solar energy to meet your power requirements whereas, the on-grid solar power system facilitates continuous power supply regardless of time and weather conditions.</p>\n<h5 style=\"text-align: justify;\">On-Grid Solar System</h5>\n<p style=\"text-align: justify;\">is connected to the utility grid where the full generation or excess power produced will be directly sent to the utility grid and the consumer will have access to surplus electricity that can meet the energy requirements of not just the residential sector but also the commercial and industrial sectors as well.&nbsp;</p>\n<h5 style=\"text-align: justify;\">Off Grid Solar System</h5>\n<p style=\"text-align: justify;\">The Off-Grid Solar system is not connected to the utility grid. It consists of off-grid solar panels, a charge controller, a battery, mounting structures, and an off grid solar inverter. Off-Grid power systems capture sufficient sunlight during the daytime where the electricity generated is directly sent to the batteries for storage.&nbsp;</p>\n<h5 style=\"text-align: justify;\">Electricity Access with On-Grid Solar Systems</h5>\n<p style=\"text-align: justify;\">On-Grid Solar inverters work along with the grid, this implies that any excess or shortage of electricity may be supplied to the grid through net metering.&nbsp;</p>\n<h6 style=\"text-align: left;\">How does it work?</h6>\n<p><img src=\"../../../storage/Kh9FyE5phbTZV4mAdDURluL16BIbnNfDgJUdBPpU.png\" alt=\"\" width=\"100%\" height=\"100%\" /></p>\n<h5>Electricity Access with Off-Grid Solar Systems</h5>\n<p style=\"text-align: justify;\">Off-Grid Solar power works independently where the system is not connected to any utility grid; it solely depends on batteries to store generated solar power. The off-grid systems have the complete contingency to facilitate independent and sustainable electricity generation.&nbsp;</p>\n<h6 style=\"text-align: justify;\">How does it work?</h6>\n<p><img src=\"../../../storage/G6Us5eLGqxaJfTRcJB05FMCbZlu1dzxGvMdpxtUq.png\" alt=\"\" width=\"100%\" height=\"100%\" /></p>\n<p>&nbsp;</p>\n<table style=\"border-collapse: collapse; width: 100%; height: 258px; border-color: #000000; border-style: solid;\" border=\"2\">\n<tbody>\n<tr style=\"height: 18px;\">\n<td style=\"width: 49.6946%; height: 18px; text-align: center;\"><span style=\"font-size: 12pt;\"><strong>On Grid solar system</strong></span></td>\n<td style=\"width: 49.6946%; height: 18px; text-align: center;\"><span style=\"font-size: 12pt;\"><strong>Off Grid solar system</strong></span></td>\n</tr>\n<tr style=\"height: 18px;\">\n<td style=\"width: 49.6946%; height: 18px;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../storage/7y1PRhBP50CPFZbhj85jCJn1SCgtVTqG1QAqU5zO.png\" alt=\"\" width=\"268\" height=\"268\" /></td>\n<td style=\"width: 49.6946%; height: 18px;\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../storage/TXt4Ga29a9cLiBUyqdqYNsce7Z6cKBiynuyY9Xww.png\" alt=\"\" width=\"257\" height=\"122\" /></td>\n</tr>\n<tr style=\"height: 120px;\">\n<td style=\"width: 49.6946%; height: 120px;\">\n<p>Hassle-Free Installation</p>\n<p>Installing an on-grid solar power system is quite simple since it doesn&rsquo;t require any additional components apart from the ones that produce electricity for consumption.</p>\n</td>\n<td style=\"width: 49.6946%; height: 120px;\">\n<p>Self-Reliant Operations</p>\n<p>Off-grid power is the pinnacle of self-reliance. Off-grid electricity options make it easy for homes and companies to become self-reliant.</p>\n</td>\n</tr>\n<tr style=\"height: 102px;\">\n<td style=\"width: 49.6946%; height: 102px;\">\n<p>Low Maintenance</p>\n<p>on-Grid solar power systems only need occasional periodic check-ups for maintenance and upkeep.</p>\n</td>\n<td style=\"width: 49.6946%; height: 102px;\">\n<p>No Effect During Power Outages</p>\n<p>An independently working off-grid solar setup means that you won&rsquo;t have to face the effects of power outages during grid failures, load shedding, or emergencies.</p>\n</td>\n</tr>\n</tbody>\n</table>\n<h4 style=\"text-align: center;\">&nbsp;</h4>\n<h4 style=\"text-align: center;\">Role Of Off-Grid Solar Power In Overcoming Sri Lanka&rsquo;s Energy</h4>\n<p style=\"text-align: justify;\">Sri Lanka is currently undergoing an unprecedented economic and energy crisis caused by a shortage of foreign currency and many other reasons. And the people have to endure a 3-hour daily nationwide power cut and we believe that proposing off-grid solar power systems is the best solution to overcome and achieve the country&rsquo;s energy access. Off-grid power can bring immediate benefits across the nation.</p>\n<h4 style=\"text-align: center;\">ENJOY THE FREEDOM OF HAVING THE POWER IN YOUR HANDS WITH DSL</h4>\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../../storage/cKhx5KArtCXE2GAAeolSnNPSlxY0CoXqsFJEmNkp.png\" alt=\"\" width=\"100%\" height=\"100%\" /></p>\n<p style=\"text-align: justify;\">Did you think about going off-grid solar, but didn&rsquo;t? Here are some reasons to go off-grid solar sooner than later.&nbsp;</p>\n<h5>Save On Your Monthly Utility Bills</h5>\n<p>Off-grid solar has no connection to the utility grid where you can power all your essential loads without the need of any electricity provider. You&rsquo;ll never have to give the electricity board a slice of your monthly paycheck after you Install a complete off-grid solar system.</p>\n<h5>Increase Your Home&rsquo;s value</h5>\n<p style=\"text-align: justify;\">Investing in an Off-grid electrical system can be a great investment if you ever plan to sell your property/office space. <br /><br />A deep financial crisis has left Sri Lanka struggling to pay for fuel imports for power generation, leading to frequent power cuts nationwide. Off-grid solar power plants can be the most prominent solution as it is the most effective source since Sri Lanka has ample sunlight. Off-Grid Solar Systems are completely self-reliant. Even during a power outage, you get full authority to control your power. There&rsquo;s no involvement with the electricity board that keeps track of your usage and delivers a skyrocketing bill at the end of the month. Off-grid power systems are far more beneficial for your solar energy to be consumed. Douglas &amp; Sons Energy professionals, who are passionate about a sustainable future, have the expertise and the knowledge to install stand-alone solar systems with regular monitoring, servicing, and delivery of reliable power 365 days a year. Our dependable off-grid power solutions feature world-renowned solar technology equipment with proven reliability. The off-grid and on-grid industries are in a period of rapid innovation. We work hard to stay at the forefront of technological advancement to ensure our products are always the highest quality.</p>\n<p>&nbsp;</p>', 'xyUQ8i5xdzHvcYFcPpsF8mcswf0IE9-metaMjIyMi5qcGc=-.jpg', 'ON GRID VS OFF GRID SOLAR POWER SYSTEM ', 'ongrid, ', '<p>As the demand for solar power systems continue to escalate around the globe, The technologies behind the solar landscape are revamping at a staggering rate. However, the stumbling block most people have is the lack of awareness on how to switch to solar-powered systems.</p>', 1, '2022-08-16 22:51:46', '2022-08-26 11:00:24'),
(23, 'HYBRID SOLAR SYSTEMS: AN INNOVATIVE ENERGY REVOLUTION', 'Hybrid-Solar-Systems:-An-Innovative-Energy-Revolution', '<p>With the skyrocketing electricity bills and daily power outages in Sri Lanka, it is no surprise that more residential and industrial owners are obliged to switch to solar energy where you can get surplus electricity from renewable sources</p>', '<p style=\"text-align: justify;\">With the skyrocketing electricity bills and daily power outages in Sri Lanka, it is no surprise that more residential and industrial owners are obliged to switch to solar energy where you can get surplus electricity from renewable sources. In contrast to the prevailing situation in the country, investing in a hybrid inverter setup is an ingenious move to prevent the crisis of escalating electricity costs.</p>\n<h4 style=\"text-align: center;\"><strong>What is a Hybrid Solar System?</strong></h4>\n<p style=\"text-align: justify;\">A &ldquo;Hybrid solar power system\" is a type of solar energy system that utilizes both solar energy, grid power and battery storage to power up your home or company. The battery&rsquo;s stored energy empowers the device to perform as a backup supply, which enables it to continue to deliver electricity long after the sun has set. Hybrid solar systems are grid-tied and combine the best from off-grid solar systems, but unlike the traditional grid-tied systems, Hybrid solar panels are facilitated with adaptable hybrid inverters and batteries to store energy for later use. On the contrary, during the daytime, a hybrid solar cell can accumulate energy from the sun to power your home and, at the same time, it can charge the battery backup unit so you can draw from this power at night when your hybrid solar PV system is not producing power or amidst a power outage.</p>\n<p>&nbsp;</p>\n<p><img src=\"../../storage/3qICWtEc4xMe4ou5cxWWwLd71U5vGxGFMcdE9UZV.jpg\" alt=\"\" width=\"100%\" height=\"100%\" /></p>\n<p>&nbsp;</p>\n<h4 style=\"text-align: center;\"><strong>Hybrid Solar to a clean and greener tomorrow</strong></h4>\n<p style=\"text-align: justify;\">What distinguish a hybrid solar system is the fact that you will be able to cover your power needs during long power outages, adverse weather, and overnight use. <br />If you require more power than your battery can provide, you have your backup battery filled with energy and complete access to the grid power. A hybrid solar inverter is a great way to be in control of your power supply.</p>\n<p><br /><img src=\"../../storage/cAy2ftykuhG6JiGwXfcRpC15zD7ykqa9MFuBA5qn.jpg\" alt=\"\" width=\"100%\" height=\"100%\" /></p>\n<p>Benefits Of a Hybrid Solar System &ndash; Is It Worth It?</p>\n<p><img src=\"../../storage/hhWZItxFbKJsK4a5HDND5Jdh43KQ8MXTzE6Lu1PC.jpg\" alt=\"\" width=\"100%\" height=\"100%\" /></p>\n<p>&nbsp;</p>\n<h4 style=\"text-align: center;\"><strong>Comparative Analysis: On-Grid, Off-Grid and Hybrid Solar System</strong></h4>\n<p>&nbsp;</p>\n<p><strong><img src=\"../../storage/DagHF4FHmEqwckvjuKJKBC1s7aCn8Ml2anV33qei.jpg\" alt=\"\" width=\"100%\" height=\"100%\" /></strong></p>\n<p>&nbsp;</p>\n<h4 style=\"text-align: center;\"><strong>Components Of the Hybrid Solar Power System</strong></h4>\n<p style=\"text-align: justify;\">A Hybrid solar power system integrates on-grid and off-grid components. The following components are utilized while installing the hybrid inverter at your residence or commercial building:</p>\n<ul>\n<li style=\"text-align: justify;\"><strong>Solar Panel:</strong><br />The hybrid solar setup\'s foundation is a solar panel. Without it, it is impossible to harvest and utilize strong solar radiation. Photons from solar radiation hit the solar panel, producing DC energy in the form of electricity.<br />&nbsp;</li>\n<li style=\"text-align: justify;\"><strong>DCDB (Direct Current Distribution Box):</strong><br />DCDB is a combiner box. Its main purpose is to create a single string from many solar panel strings. This box has safety features such a surge protector, fuse, and miniature circuit breaker (DC MCB).<br />&nbsp;</li>\n<li style=\"text-align: justify;\"><strong>Hybrid Solar Inverter:</strong> <br />The hybrid solar inverter is an essential component of the solar energy system it aids in converting DC energy generated by solar panels or batteries into useable AC energy. The inverter provides monitoring of the energy used, received, consumed, or stored in the battery and aids in keeping track of both the battery\'s and solar panel\'s performance.<br />&nbsp;</li>\n<li style=\"text-align: justify;\"><strong>Alternating Current Distribution Box (ACDB):</strong><br />The main purpose of the ACDB is distribution the power and safeguard the appliances. It is made up of safety features including surge protection, Residual Current Circuit Breaker (RCCB) and miniature circuit breakers (MCBs).<br />&nbsp;</li>\n<li style=\"text-align: justify;\"><strong>Batteries: </strong><br />For off-grid hybrid solar systems, batteries play a vital role because they store extra energy generated during sunny days and may be recovered at a later time during cloudy, adverse weather or at night when the Hybrid solar panel is unable to provide enough electricity. Rechargeable batteries like lithium or lead-acid batteries are suggested for renewable energy systems.</li>\n</ul>\n<p><strong><img src=\"../../storage/lUPTUwT5JmQdGuAWM9ZsZjH7cSwAruPaRzxlDM53.jpg\" alt=\"\" width=\"100%\" height=\"100%\" /></strong></p>\n<p><strong><img src=\"../../storage/LQMly8EYbx6uiZASPlevQtnczUEqike5c0wZRvuU.jpg\" alt=\"\" width=\"100%\" height=\"100%\" /></strong></p>\n<p><strong><img src=\"../../storage/Ui1h8DGj6yTZyfJPlPTkGVD3a5aMbKuyTvOEwFjJ.jpg\" alt=\"\" width=\"100%\" height=\"100%\" /></strong></p>\n<p style=\"text-align: justify;\">Douglas &amp; Sons Energy professionals, who are passionate about a sustainable future, have the expertise and the knowledge to install solar systems with regular monitoring, servicing, and delivery of reliable power 365 days a year. Investing in our Solar Power Conditioning Units are a simple way and an affordable way to control your electricity bill. DSL&rsquo;s Hybrid Solar PCU&rsquo;s are giving an exclusive offer to homeowners and corporates to power their spaces and to get control of their energy. Our passion is to help Sri Lankans become more energy independent. After a tumultuous constant power outage, electricity tariff hikes, and power plant failures, we are seeing more Sri Lankans in search for a better solution. We call this the solar revolution, and Douglas &amp; Sons are ready to provide Sri Lankans with exclusive, top hybrid inverters. Our Hybrid Solar PCU&rsquo;s have an excellent track record of reducing our customer&rsquo;s electricity bills. The flexibility of a hybrid solar energy can boost your return on investment for enterprises and households with significant electricity needs.</p>\n<p style=\"text-align: justify;\">&nbsp;</p>\n<p style=\"text-align: justify;\">&nbsp;</p>', 'aJHzFJo1AmIKOBKEZ5iqn3qmohZoW3-metaMTIzNDU2LmpwZw==-.jpg', 'HYBRID SOLAR SYSTEMS: AN INNOVATIVE ENERGY REVOLUTION', 'HYBRID SOLAR SYSTEMS: AN INNOVATIVE ENERGY REVOLUTION', '<p>HYBRID SOLAR SYSTEMS: AN INNOVATIVE ENERGY REVOLUTION</p>', 1, '2022-08-25 19:42:51', '2022-08-26 11:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_category_id`, `name`, `small_description`, `detail_description`, `featured_image`, `status`, `created_at`, `updated_at`) VALUES
(24, 26, 'MPPT SOLAR PCU 2KV/1.6KW', '<ul class=\"list-unstyled advantages-list pb30\">\n<li>Micro-Controller DSPIC Based Intelligent Control Design.</li>\n<li>Dual Charging,Mains Mode and Solar Mode.(Solar Panel upto 600W-12V model).</li>\n<li>Pure Sine Wave Regulated Output.</li>\n<li>Smart PWM Controlled multistage ATM (Automatic Trickle Mode) Charging.</li>\n<li>LCD and Graphical Display Indications (Status &amp; Fault).</li>\n<li>Smart and Faster Overload Sense and Short Circuit Protection.</li>\n<li>Auto Reset Feature.</li>\n<li>Mains Input Voltage Range Selection.</li>\n<li>PV Mode ON/OFF Selection Switch.</li>\n<li>Charging Voltage Selection Switch.</li>\n<li>Grid Charging Enable /Disable Selection.</li>\n<li>Pure Sine wave Regulated Output.</li>\n</ul>', '<table class=\"table table-striped\" style=\"list-style: none; margin: 0px 0px 1rem; padding: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0,0,0,0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0,0,0,0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0,0,0,0.075); width: 1296px; color: #212529; vertical-align: top; border-color: #dee2e6; font-family: Roboto, sans-serif; font-size: 14px; background-color: #ffffff; outline: none !important;\">\n<tbody style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; vertical-align: inherit; outline: none !important;\">\n<tr style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; --bs-table-accent-bg: var(--bs-table-striped-bg); color: var(--bs-table-striped-color); outline: none !important;\">\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: #32c36c; box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"479\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\"><span style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; outline: none !important; font-weight: bolder;\"><span style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; outline: none !important; color: #ffffff;\">Technical Info</span></span></p>\n</td>\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: #32c36c; box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"648\">&nbsp;</td>\n</tr>\n<tr style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; outline: none !important;\">\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"479\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\"><span style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; outline: none !important;\">Nominal Maximum Power (Pm)</span></p>\n</td>\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"648\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\"><span style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; outline: none !important;\">150Watts/12V</span></p>\n</td>\n</tr>\n<tr style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; --bs-table-accent-bg: var(--bs-table-striped-bg); color: var(--bs-table-striped-color); outline: none !important;\">\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"479\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\"><span style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; outline: none !important;\">Open Circuit Voltage (Voc)</span></p>\n</td>\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"648\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\"><span style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; outline: none !important;\">22.50V</span></p>\n</td>\n</tr>\n<tr style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; outline: none !important;\">\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"479\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\"><span style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; outline: none !important;\">Short Circuit Current (Isc)</span></p>\n</td>\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"648\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\"><span style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; outline: none !important;\">8.81A</span></p>\n</td>\n</tr>\n<tr style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; --bs-table-accent-bg: var(--bs-table-striped-bg); color: var(--bs-table-striped-color); outline: none !important;\">\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"479\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\"><span style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; outline: none !important;\">Voltage at Maximum Power (Vmp)</span></p>\n</td>\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"648\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\"><span style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; outline: none !important;\">17.96V</span></p>\n</td>\n</tr>\n<tr style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; outline: none !important;\">\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"479\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\"><span style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; outline: none !important;\">Current at Maximum Power (Imp)</span></p>\n</td>\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"648\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\"><span style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; outline: none !important;\">8.36A</span></p>\n</td>\n</tr>\n<tr style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; --bs-table-accent-bg: var(--bs-table-striped-bg); color: var(--bs-table-striped-color); outline: none !important;\">\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"479\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\"><span style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; outline: none !important;\">Maximum System Voltage</span></p>\n</td>\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"648\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\"><span style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; outline: none !important;\">1000V</span></p>\n</td>\n</tr>\n<tr style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; outline: none !important;\">\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: #32c36c; box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); width: 1296px;\" colspan=\"2\" valign=\"center\" width=\"479\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\"><span style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; outline: none !important;\"><span style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; outline: none !important; font-weight: bolder;\"><span style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; outline: none !important; color: #ffffff;\">General Info</span></span></span></p>\n</td>\n</tr>\n<tr style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; --bs-table-accent-bg: var(--bs-table-striped-bg); color: var(--bs-table-striped-color); outline: none !important;\">\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"606\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\">Length x Width x Thickness (LxWxT) - mm</p>\n</td>\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"522\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\">1495x665x35</p>\n</td>\n</tr>\n<tr style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; outline: none !important;\">\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"606\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\">Mounting Holes Pitch (Y) &ndash; mm</p>\n</td>\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"522\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\">980</p>\n</td>\n</tr>\n<tr style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; --bs-table-accent-bg: var(--bs-table-striped-bg); color: var(--bs-table-striped-color); outline: none !important;\">\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"606\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\">Mounting Holes Pitch (X) &ndash; mm</p>\n</td>\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"522\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\">630</p>\n</td>\n</tr>\n<tr style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; outline: none !important;\">\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"606\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\">Solar Cells per Module (Units) / Arrangement</p>\n</td>\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"522\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\">36 / (9 x 4)</p>\n</td>\n</tr>\n<tr style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; --bs-table-accent-bg: var(--bs-table-striped-bg); color: var(--bs-table-striped-color); outline: none !important;\">\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"606\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\">&nbsp;Solar Cell Type</p>\n</td>\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"522\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\">Multi Crystalline Silicon</p>\n</td>\n</tr>\n<tr style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; outline: none !important;\">\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"606\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\">Front Cover (Material / Thickness)</p>\n</td>\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"522\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\">Tempered &amp; Low Iron Glass / 3.2mm</p>\n</td>\n</tr>\n<tr style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; --bs-table-accent-bg: var(--bs-table-striped-bg); color: var(--bs-table-striped-color); outline: none !important;\">\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"606\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\">Encapsulate</p>\n</td>\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"522\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\">Ethylene Vinyl Acetate</p>\n</td>\n</tr>\n<tr style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; outline: none !important;\">\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"606\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\">Frame Material</p>\n</td>\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"522\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\">Anodized Aluminum Alloy</p>\n</td>\n</tr>\n<tr style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; --bs-table-accent-bg: var(--bs-table-striped-bg); color: var(--bs-table-striped-color); outline: none !important;\">\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"606\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\">Junction Box</p>\n</td>\n<td style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0.5rem; outline: none !important; border-color: inherit; border-style: solid; border-width: 0px 0px 1px; background-color: var(--bs-table-bg); box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);\" valign=\"center\" width=\"522\">\n<p style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; font-family: var(--global--font-body); color: var(--global--color-body); font-size: 15px; line-height: 25px; outline: none !important;\">IP67/IP68 Enclosure with Bypass Diodes</p>\n</td>\n</tr>\n</tbody>\n</table>', NULL, 1, '2022-08-08 23:08:40', '2022-08-18 13:30:34'),
(27, 28, 'Okaya Inverter Tubular Battery -OPHT18060  (150 AH)', NULL, NULL, 'cgwUen84r2dp0eocDg1151BzfeXB0d-metaMS5qcGc=-.jpg', 1, '2022-08-09 03:16:05', '2022-08-09 05:02:15'),
(28, 26, 'SOLAR PCU 1235/12V', '<ul class=\"list-unstyled advantages-list pb30\">\n<li>Micro-Controller DSPIC Based Intelligent Control Design.</li>\n<li>Dual Charging,Mains Mode and Solar Mode.(Solar Panel upto 600W-12V model).</li>\n<li>Pure Sine Wave Regulated Output.</li>\n<li>Smart PWM Controlled multistage ATM (Automatic Trickle Mode) Charging.</li>\n<li>LCD and Graphical Display Indications (Status &amp; Fault).</li>\n<li>Smart and Faster Overload Sense and Short Circuit Protection.</li>\n<li>Auto Reset Feature.</li>\n<li>Mains Input Voltage Range Selection.</li>\n<li>PV Mode ON/OFF Selection Switch.</li>\n<li>Charging Voltage Selection Switch.</li>\n<li>Grid Charging Enable /Disable Selection.</li>\n<li>Pure Sine wave Regulated Output.</li>\n</ul>', '<table class=\"table table-striped\" style=\"list-style: none; margin: 0px 0px 1rem; padding: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0,0,0,0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0,0,0,0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0,0,0,0.075); width: 1296px; color: #212529; vertical-align: top; border-color: #dee2e6; font-family: Roboto, sans-serif; font-size: 14px; background-color: #ffffff; outline: none !important;\">\r\n<tbody style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; vertical-align: inherit; outline: none !important;\">\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; background-color: #32c36c;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Model&nbsp;</span></span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; background-color: #32c36c;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">SOLAR PCU 1235/ 12V</span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Capacity (Rated Power)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">935VA / 12 V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Capacity (Maximum PV Power support)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">600 WP</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 1128.94px; background-color: #32c36c;\" colspan=\"2\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Input</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Input Voltage (Standard Range)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">100 V ~ 300 V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Input Voltage (Narrow Range)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">180V ~ 260 V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Nominal Input Battery Voltage</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">12 V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 1128.94px; background-color: #32c36c;\" colspan=\"2\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Output</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Output Frequency</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">50 Hz&nbsp;&plusmn; 0.5 Hz</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Output Waveform</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Pure Sine Wave</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 1128.94px; background-color: #32c36c;\" colspan=\"2\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Technology</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Solar Charger Type</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">PWM</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Max. Solar Panel Current &nbsp;</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">35 Amps</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Mains Re-Connect Voltage</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">11.6 V&nbsp;<span style=\"box-sizing: border-box; padding: 0px; margin: 0px; text-decoration-line: underline;\">+</span>&nbsp;0.3 V DC</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Mains Dis-Connect Voltage</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">14.4 V&nbsp;<span style=\"box-sizing: border-box; padding: 0px; margin: 0px; text-decoration-line: underline;\">+</span>&nbsp;0.3 V DC</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Solar UPS Overload</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">110%</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Solar UPS Short Circuit</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">300%</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Solar UPS Transfer Time</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; text-decoration-line: underline;\">&lt;</span>&nbsp;12 msec</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Grid Chg. Enable Mode</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Luxury Mode</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Grid Chg. Disable Mode</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Economy Mode</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, 1, '2022-08-09 06:00:57', '2022-08-09 06:00:57'),
(29, 28, 'Okaya Inverter Tubular Battery -OPHT13048 (100AH)', NULL, NULL, 'LxLvLNC4NBaeHBE9IAOIEV49a2Mli2-metaMS5qcGc=-.jpg', 1, '2022-08-09 06:27:26', '2022-08-09 06:27:26'),
(30, 28, 'Okaya Inverter Tubular Battery -OPHT23060  (200AH)', NULL, NULL, 'LdFgia0OwMV1sx1tYEyWiZp3AGdwDS-metaMS5qcGc=-.jpg', 1, '2022-08-09 06:28:21', '2022-08-09 06:28:21');
INSERT INTO `products` (`id`, `product_category_id`, `name`, `small_description`, `detail_description`, `featured_image`, `status`, `created_at`, `updated_at`) VALUES
(32, 26, 'SOLAR PCU 2035/24V', '<ul class=\"list-unstyled advantages-list pb30\">\n<li>Micro-Controller DSPIC Based Intelligent Control Design.</li>\n<li>Dual Charging,Mains Mode and Solar Mode.(Solar Panel upto 600W-12V model).</li>\n<li>Pure Sine Wave Regulated Output.</li>\n<li>Smart PWM Controlled multistage ATM (Automatic Trickle Mode) Charging.</li>\n<li>LCD and Graphical Display Indications (Status &amp; Fault).</li>\n<li>Smart and Faster Overload Sense and Short Circuit Protection.</li>\n<li>Auto Reset Feature.</li>\n<li>Mains Input Voltage Range Selection.</li>\n<li>PV Mode ON/OFF Selection Switch.</li>\n<li>Charging Voltage Selection Switch.</li>\n<li>Grid Charging Enable /Disable Selection.</li>\n<li>Pure Sine wave Regulated Output.</li>\n</ul>', '<table class=\"table table-striped\" style=\"list-style: none; margin: 0px 0px 1rem; padding: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0,0,0,0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0,0,0,0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0,0,0,0.075); width: 1296px; color: #212529; vertical-align: top; border-color: #dee2e6; font-family: Roboto, sans-serif; font-size: 14px; background-color: #ffffff; outline: none !important;\">\r\n<tbody style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; vertical-align: inherit; outline: none !important;\">\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; background-color: #32c36c;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Model&nbsp;</span></span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; background-color: #32c36c;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">SOLAR PCU&nbsp;2035/ 24V</span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Capacity (Rated Power)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">1735VA / 24V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Capacity (Maximum PV Power support)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">1200 WP</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 1128.94px; background-color: #32c36c;\" colspan=\"2\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Input</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Input Voltage (Standard Range)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">100 V ~ 300 V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Input Voltage (Narrow Range)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">180V ~ 260 V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Nominal Input Battery Voltage</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">24 V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 1128.94px; background-color: #32c36c;\" colspan=\"2\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Output</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Output Frequency</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">50 Hz&nbsp;&plusmn; 0.5 Hz</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Output Waveform</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Pure Sine Wave</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 1128.94px; background-color: #32c36c;\" colspan=\"2\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Technology</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Solar Charger Type</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">PWM</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Max. Solar Panel Current &nbsp;</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">35 Amps</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Mains Re-Connect Voltage</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">23.2 V &plusmn;0.3 V DC</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Mains Dis-Connect Voltage</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">28.8 V &plusmn; 0.3 V DC</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Solar UPS Overload</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">110%</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Solar UPS Short Circuit</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">300%</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Solar UPS Transfer Time</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; text-decoration-line: underline;\">&lt;</span>&nbsp;12 msec</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Grid Chg. Enable Mode</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Luxury Mode</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Grid Chg. Disable Mode</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Economy Mode</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, 1, '2022-08-09 06:33:05', '2022-08-09 06:33:05'),
(33, 26, 'MPPT SOLAR PCU 2kW/36V', '<ul class=\"list-unstyled advantages-list pb30\">\n<li>MPPT based State-of-the-art Latest Technology for Optimum Performance.</li>\n<li>Pure Sine wave Output to run all Sophisticated Appliances.</li>\n<li>User-Friendly LCD Display.</li>\n<li>Operates on both Solar Power as well as Grid Power.</li>\n<li>Intelligent Sharing of Grid Current with Solar in case of Solar Energy Shortfall.</li>\n<li>MPPT with Intelli Current Boost Technology.</li>\n<li>Designed to give maximum benefit from Solar Energy &amp; minimize your Electricity Bill.</li>\n<li>Priority Selection Option for Solar / Battery / Grid</li>\n<li>Peak Output Power handling capacity.</li>\n<li>Intelli Overload sense with Short Circuit Protection.</li>\n<li>Battery Deep Discharge Pickup Capability.</li>\n<li>Grid Charging Enable-Disable setting from the Front Panel to provide &ldquo;No Charging of Battery from the Grid&rdquo;.</li>\n</ul>', '<table class=\"table table-striped\" style=\"list-style: none; margin: 0px 0px 1rem; padding: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0,0,0,0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0,0,0,0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0,0,0,0.075); width: 1296px; color: #212529; vertical-align: top; border-color: #dee2e6; font-family: Roboto, sans-serif; font-size: 14px; background-color: #ffffff; outline: none !important;\">\r\n<tbody style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; vertical-align: inherit; outline: none !important;\">\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; background-color: #32c36c;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Model&nbsp;</span></span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; background-color: #32c36c;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">MPPT BASED SOLAR PCU 2&nbsp;kW&nbsp;/ 36V</span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Capacity (Rated Power)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">2 kW&nbsp;/ 36 V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Capacity (Maximum PV Power support)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">2KWp</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 1128.94px; background-color: #32c36c;\" colspan=\"2\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Input</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Input Voltage (Standard Range)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">100 V ~ 300 V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Input Voltage (Narrow Range)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">180V ~ 260 V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Nominal Input Battery Voltage</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">36 V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 1128.94px; background-color: #32c36c;\" colspan=\"2\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Output</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Output Frequency</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">50 Hz&nbsp;&plusmn; 0.5 Hz</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Output Waveform</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Pure Sine Wave</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 1128.94px; background-color: #32c36c;\" colspan=\"2\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Technology</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Solar Charger Type</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">MPPT</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Solar Panel VOC (Max)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">60V ~ 170 V DC</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Max. Panel Current</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">20 Amps</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Low Battery Indication</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">31.8&nbsp;V &plusmn;&nbsp;0.6&nbsp;V DC</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Low Battery Shut Down</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">31.5&nbsp;V &plusmn; 0.6V DC</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 1128.94px; background-color: #32c36c;\" colspan=\"2\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp;<span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Safety Protections</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Protections</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Low Battery, Low Battery Shutdown, Output Overload,&nbsp;Output&nbsp;Short Circuit with Solar.</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Operating Temp.</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">0 to 40 Degree Celsius</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Relative Humidity /Audible Noise</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">0-95% non-condensing/Less than 55dBA (at 1M)</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, 1, '2022-08-09 06:34:22', '2022-08-09 06:35:00'),
(34, 26, 'MPPT SOLAR PCU 3kW/48V', '<ul class=\"list-unstyled advantages-list pb30\">\n<li>MPPT based State-of-the-art Latest Technology for Optimum Performance.</li>\n<li>Pure Sine wave Output to run all Sophisticated Appliances.</li>\n<li>User-Friendly LCD Display.</li>\n<li>Operates on both Solar Power as well as Grid Power.</li>\n<li>Intelligent Sharing of Grid Current with Solar in case of Solar Energy Shortfall.</li>\n<li>MPPT with Intelli Current Boost Technology.</li>\n<li>Designed to give maximum benefit from Solar Energy &amp; minimize your Electricity Bill.</li>\n<li>Priority Selection Option for Solar / Battery / Grid</li>\n<li>Peak Output Power handling capacity.</li>\n<li>Intelli Overload sense with Short Circuit Protection.</li>\n<li>Battery Deep Discharge Pickup Capability.</li>\n<li>Grid Charging Enable-Disable setting from the Front Panel to provide &ldquo;No Charging of Battery from the Grid&rdquo;.</li>\n</ul>', '<table class=\"table table-striped\" style=\"list-style: none; margin: 0px 0px 1rem; padding: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0,0,0,0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0,0,0,0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0,0,0,0.075); width: 1296px; color: #212529; vertical-align: top; border-color: #dee2e6; font-family: Roboto, sans-serif; font-size: 14px; background-color: #ffffff; outline: none !important;\">\r\n<tbody style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; vertical-align: inherit; outline: none !important;\">\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; background-color: #32c36c;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Model&nbsp;</span></span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; background-color: #32c36c;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">MPPT BASED SOLAR PCU 3&nbsp;kW&nbsp;/ 48V</span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Capacity (Rated Power)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">3&nbsp;kW&nbsp;/ 48&nbsp;V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Capacity (Maximum PV Power support)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">3KWp</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 1128.94px; background-color: #32c36c;\" colspan=\"2\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Input</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Input Voltage (Standard Range)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">100 V ~ 300 V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Input Voltage (Narrow Range)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">180V ~ 260 V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Nominal Input Battery Voltage</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">48 V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 1128.94px; background-color: #32c36c;\" colspan=\"2\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Output</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Output Frequency</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">50 Hz&nbsp;&plusmn; 0.5 Hz</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Output Waveform</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Pure Sine Wave</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 1128.94px; background-color: #32c36c;\" colspan=\"2\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Technology</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Solar Charger Type</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">MPPT</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Solar Panel VOC (Max)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">60V ~ 170 V DC</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Max. Panel Current</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">30 Amps</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Low Battery Indication</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">42.4&nbsp;V &plusmn;&nbsp;0.8&nbsp;V DC</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Low Battery Shut Down</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">41.0&nbsp;V &plusmn; 0.8 V DC</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 1128.94px; background-color: #32c36c;\" colspan=\"2\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp;<span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Safety Protections</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Protections</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Low Battery, Low Battery Shutdown, Output Overload,&nbsp;Output&nbsp;Short Circuit with Solar.</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Operating Temp.</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">0 to 40 Degree Celsius</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Relative Humidity /Audible Noise</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">0-95% non-condensing/Less than 55dBA (at 1M)</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, 1, '2022-08-09 06:36:38', '2022-08-09 06:36:38');
INSERT INTO `products` (`id`, `product_category_id`, `name`, `small_description`, `detail_description`, `featured_image`, `status`, `created_at`, `updated_at`) VALUES
(35, 26, 'HI-END MPPT PCU 5KVA/48V', '<ul class=\"list-unstyled advantages-list pb30\">\n<li>High Efficiency Microtek True MPPT Solar PCU.</li>\n<li>Advanced DSP Based Technology.</li>\n<li>adaptive MPPT Logic for excellent power generation.</li>\n<li>Pure Sinewave Output. User Friendly LCD Display.</li>\n<li>State of the Art and Advanced DSP Based MPPT Technology ensures 30% More Energy Genration from Solar PV.</li>\n<li>Advanced Charge Sharing ensures Optimum Saving of Electricity.</li>\n<li>ECO Mode / Grid Mode / Main Mode Selection.</li>\n<li>Remote Monitoring (Optional Features).</li>\n</ul>', '<table class=\"table table-striped\" style=\"list-style: none; margin: 0px 0px 1rem; padding: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0,0,0,0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0,0,0,0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0,0,0,0.075); width: 1296px; color: #212529; vertical-align: top; border-color: #dee2e6; font-family: Roboto, sans-serif; font-size: 14px; background-color: #ffffff; outline: none !important;\">\r\n<tbody style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; vertical-align: inherit; outline: none !important;\">\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; background-color: #32c36c;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">&nbsp; MODEL</span></span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; background-color: #32c36c;\" valign=\"center\" width=\"auto\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">&nbsp; PCU MPPT 5KVA / 48V</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; PV Controller Topology</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; MPPT</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Rated Capacity</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 5KVA</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Battery Nominal Voltage</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 48V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 478.234px;\" rowspan=\"2\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Grid Input Voltage Range</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; NORMAL MODE: 100V~280V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; UPS MODE: 180V~260V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Maximum Solar Input Power(W)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 5000W</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Maximum Solar Input Voltage (VOC)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 190Voc</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; MPPT Oeprating Voltage Range (VMP)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 70V~160V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; No. Of Output Phase</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 1Phase</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Inverter Output Voltage at Nominal DC</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 230V+2%</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Output Frequency</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 50Hz+0.5%</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; THD</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; &lt;3%(at Linear Load)</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Switching Element (MPPT Charger)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; IGBT</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Peak Charge Controller Efficiency&nbsp;</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 98%</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Output Waveform</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Pure Sinewave</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 478.234px;\" rowspan=\"2\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Transfer Time</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; NORMAL MODE: Mains to Back-up &lt;40mSec Back-up to Mains &lt;15mSec</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; UPS MODE: Mains to Back-up &lt;12mSec Back-up to Mains &lt;10mSec</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; LCD Display Parameters&nbsp;</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px; text-align: center;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp;&nbsp;Battery voltage &amp; Current / Mains Voltage &amp; Frequency PV Power, Total Genaration &amp; Today\'s Genaration / Load Power, Load Voltage, Current &amp; Frequency (Inv. Mode Only) / Time &amp; Date Battery Charging / Discharging Status / User Setting &amp; Factory Setting.</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Protection Status Display</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px; text-align: center;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp;&nbsp;Overload, Shrot Circuit, Battery &amp; PV Reverse Polarity Battery Over/Under Voltage, Battery Current Limit, Mains Over / Under Voltage. system Over Temprature &amp; Grid/Load/PV Surge Protection (MOV).</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Clearance on All Side for Installation&nbsp;</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Recommended 1 Feet</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Operating Temperature / Realative Humidity</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 0~50&deg;C / 5%-95% (Non Condensable)</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Weight (Kgs.)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Net: 52.95Kgs / Gross: 55.55Kgs</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Dimension (LxWxH) in MM</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 448.5x275x611</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, 1, '2022-08-09 06:37:34', '2022-08-09 06:38:35'),
(36, 26, 'HI-END MPPT PCU 8070/96V', '<ul class=\"list-unstyled advantages-list pb30\">\n<li>High Efficiency Microtek Solar TRUE MPPT PCU are Based on DSP Technology.</li>\n<li>Pure DSP Sine Wave Technology.</li>\n<li>User Friendly SMart Multicolor LCD Display.</li>\n<li>State of The Art &amp; Advanced MPPT Technology Ensure 30% More Energy Genration FOrm Solar PV.</li>\n<li>Advance Real Time Clock Technology Ensure Optimum Saving of ElectronicBill.</li>\n<li>Smart LCD Displays Total Solar Energy Genration (in KWH).</li>\n<li>Provision FOr Setting Critical Parameters of Solar Thru SMart Front Panel.</li>\n<li>Smart Logic Built in Software to Maintain Battery Gravity &amp; Enhance Battery Life.</li>\n<li>Battery Types Support : Tubular, SMF &amp; Flat Plate.</li>\n<li>Remote Monitoring Thru WI-FI/LAN/GPRS (Optional Feature).</li>\n</ul>', '<table class=\"table table-striped\" style=\"list-style: none; margin: 0px 0px 1rem; padding: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0,0,0,0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0,0,0,0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0,0,0,0.075); width: 1296px; color: #212529; vertical-align: top; border-color: #dee2e6; font-family: Roboto, sans-serif; font-size: 14px; background-color: #ffffff; outline: none !important;\">\r\n<tbody style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; vertical-align: inherit; outline: none !important;\">\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; background-color: #32c36c;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">&nbsp; MODEL</span></span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; background-color: #32c36c;\" valign=\"center\" width=\"auto\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">&nbsp; PCU MPPT 8070 / 96V</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; PV Controller Topology</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; MPPT</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Rated Capacity</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 7.5KVA</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Battery Nominal Voltage</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 96V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 478.234px;\" rowspan=\"2\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Grid Input Voltage Range</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; NORMAL MODE: 100V~280V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; UPS MODE: 180V~260V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Maximum Solar Input Power(W)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 7680W</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Maximum Solar Input Voltage (VOC)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 280Voc</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; MPPT Oeprating Voltage Range (VMP)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 180V~230V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; No. Of Output Phase</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 1Phase</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Inverter Output Voltage at Nominal DC</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 230V+3%</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Output Frequency</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 50Hz+1%</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; THD</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; &lt;3%(at Linear Load)</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Maximum PV Input Current (A)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 34&nbsp;<span style=\"box-sizing: border-box; padding: 0px; margin: 0px; text-decoration-line: underline;\">+</span>&nbsp;1A ( 17A/ Channal, Total Channel-2 )</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Peak Charge Controller Efficiency&nbsp;</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 98%</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Max. Battery Charging Current From PV (A)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp;&nbsp;40 Amps:(Defualt) Settable From 5 to 50 Amps For Battery</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Max. Battery Charging Current From Grid (A)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp;&nbsp;16 Amp Default(Settable From 5Amp to 16Amp)</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Continious Output Power (W)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 6000W</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 478.234px;\" rowspan=\"2\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Transfer Time</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; NORMAL MODE: Mains to Back-up &lt;40mSec Back-up to Mains &lt;15mSec</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; UPS MODE: Mains to Back-up &lt;12mSec Back-up to Mains &lt;10mSec</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Protections</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px; text-align: center;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Battery Over-Voltage, Overcharge, PV Reverse Polarity, PV Reverse Current Flow, PV Surge, Overload, Inverter Over Temprature &amp; Load Short Circuit Protections</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Intelligent Sharing of PV Current &amp; Grid&nbsp;</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px; text-align: center;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp;&nbsp;State of the Art Inbuilt Technology ensures four Leval of Solar Saving Setting SL1, SL2, SL3 &amp; SL4 Selectable From Front Panel Meeting Requirement of all Type of Users.</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Clearance on All Side for Installation&nbsp;</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Recommended 1 Feet</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; DC Input Volt. High Cut Protection/Recover</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Available</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Most Advanced Real Time Clock Technology</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; RTC ensures Optimum Saving Of Solar Energy</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Operating Temperature / Realative Humidity</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 0~45&deg;C / 5%-95% Non Condensable</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Weight (Kgs.)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Net: 76.200 / Gross: 81.250 KG</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Dimension (LxWxH) in MM</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 484x277x775</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, 1, '2022-08-09 06:40:42', '2022-08-09 06:40:42');
INSERT INTO `products` (`id`, `product_category_id`, `name`, `small_description`, `detail_description`, `featured_image`, `status`, `created_at`, `updated_at`) VALUES
(37, 26, 'HI-END MPPT PCU 10070/120V', '<ul class=\"list-unstyled advantages-list pb30\">\n<li>High Efficiency Microtek Solar TRUE MPPT PCU are Based on DSP Technology.</li>\n<li>Pure DSP Sine Wave Technology.</li>\n<li>User Friendly SMart Multicolor LCD Display.</li>\n<li>State of The Art &amp; Advanced MPPT Technology Ensure 30% More Energy Genration FOrm Solar PV.</li>\n<li>Advance Real Time Clock Technology Ensure Optimum Saving of ElectronicBill.</li>\n<li>Smart LCD Displays Total Solar Energy Genration (in KWH).</li>\n<li>Provision FOr Setting Critical Parameters of Solar Thru SMart Front Panel.</li>\n<li>Smart Logic Built in Software to Maintain Battery Gravity &amp; Enhance Battery Life.</li>\n<li>Battery Types Support : Tubular, SMF &amp; Flat Plate.</li>\n<li>Remote Monitoring Thru WI-FI/LAN/GPRS (Optional Feature).</li>\n</ul>', '<table class=\"table table-striped\" style=\"list-style: none; margin: 0px 0px 1rem; padding: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0,0,0,0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0,0,0,0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0,0,0,0.075); width: 1296px; color: #212529; vertical-align: top; border-color: #dee2e6; font-family: Roboto, sans-serif; font-size: 14px; background-color: #ffffff; outline: none !important;\">\r\n<tbody style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; vertical-align: inherit; outline: none !important;\">\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; background-color: #32c36c;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">MODEL</span></span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; background-color: #32c36c;\" valign=\"center\" width=\"auto\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">&nbsp; PCU MPPT 10070 / 120V</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; PV Controller Topology</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; MPPT</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Rated Capacity</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 10KVA</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Battery Nominal Voltage</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 120V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 418.391px;\" rowspan=\"2\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Grid Input Voltage Range</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; NORMAL MODE: 100V~280V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; UPS MODE: 180V~260V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Maximum Solar Input Power(W)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 9250W</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Maximum Solar Input Voltage (VOC)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 350Voc</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; MPPT Oeprating Voltage Range (VMP)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 180V~280V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; No. Of Output Phase</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 1Phase</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Inverter Output Voltage at Nominal DC</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 230V+3%</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Output Frequency</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 50Hz+1%</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; THD</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; &lt;3%(at Linear Load)</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Maximum PV Input Current (A)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 34&nbsp;<span style=\"box-sizing: border-box; padding: 0px; margin: 0px; text-decoration-line: underline;\">+</span>&nbsp;1A ( 17A/ Channal, Total Channel-2 )</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Peak Charge Controller Efficiency&nbsp;</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 98%</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Max. Battery Charging Current From PV (A)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp;&nbsp;40 Amps:(Defualt) Settable From 5 to 50 Amps For Battery</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Max. Battery Charging Current From Grid (A)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp;&nbsp;16 Amp Default(Settable From 5Amp to 16Amp)</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Continious Output Power (W)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 8 000W</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 418.391px;\" rowspan=\"2\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Transfer Time</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; NORMAL MODE: Mains to Back-up &lt;40mSec Back-up to Mains &lt;15mSec</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; UPS MODE: Mains to Back-up &lt;12mSec Back-up to Mains &lt;10mSec</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Protections</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px; text-align: center;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Battery Over-Voltage, Overcharge, PV Reverse Polarity, PV Reverse Current Flow, PV Surge, Overload, Inverter Over Temprature &amp; Load Short Circuit Protections</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Intelligent Sharing of PV Current &amp; Grid&nbsp;</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px; text-align: center;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp;&nbsp;State of the Art Inbuilt Technology ensures four Leval of Solar Saving Setting SL1, SL2, SL3 &amp; SL4 Selectable From Front Panel Meeting Requirement of all Type of Users.</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Clearance on All Side for Installation&nbsp;</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Recommended 1 Feet</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; DC Input Volt. High Cut Protection/Recover</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Available</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Most Advanced Real Time Clock Technology</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; RTC ensures Optimum Saving Of Solar Energy</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Operating Temperature / Realative Humidity</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 0~45&deg;C / 5%-95% Non Condensable</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Weight (Kgs.)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Net: 78.670 / Gross: 83.500 KG</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; Dimension (LxWxH) in MM</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp; 484x277x775</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, 1, '2022-08-09 06:42:21', '2022-08-09 06:42:21'),
(38, 27, 'SOLAR PV MODULE 330W 24V', '<ul class=\"list-unstyled advantages-list pb30\">\n<li>Positive Power Tolerance Modules.</li>\n<li>Highly Classified A-Grade Solar Cells for Lesser Degradation and High Energy.</li>\n<li>Micro Crack Free Panels-100% EL Tested Before and After Lamination.</li>\n<li>High Conversion Efficiency based on Leading Innovative Photo Voltaic Technologies.</li>\n<li>PID Free Modules with Long Term Reliability.</li>\n<li>Anti-Reflective Coating Glass Available.</li>\n<li>Advance IP67/IP68 Junction Box for long-term weather endurance.</li>\n<li>RFID Tag Available.</li>\n<li>Sustain Heavy Wind and Snow Loads (2400Pa and 5400Pa).</li>\n<li>Excellent Performance in Low Light.</li>\n<li>Salt Mist, Ammonia, Blowing Sand and Hail Resistant.</li>\n<li>Ideal for Off-Grid as well as On-Grid Applications.</li>\n<li>IP67 rated MC4 Compatible Connectors.</li>\n<li>EVA Encapsulation and Anti Reflection Coating for better Module Protection.</li>\n</ul>', '<table class=\"table table-striped\" style=\"list-style: none; margin: 0px 0px 1rem; padding: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0,0,0,0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0,0,0,0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0,0,0,0.075); width: 1296px; color: #212529; vertical-align: top; border-color: #dee2e6; font-family: Roboto, sans-serif; font-size: 14px; background-color: #ffffff; outline: none !important;\">\r\n<tbody style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; vertical-align: inherit; outline: none !important;\">\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" colspan=\"2\" valign=\"center\">\r\n<table style=\"padding: 0px; margin: 0px;\" border=\"0\" cellspacing=\"0\">\r\n<tbody style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px 0px 1rem;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">Technical Info</span><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">&nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Nominal Maximum Power (Pm)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px 0px 1rem;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">330Watts/24V</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Open Circuit Voltage (Voc)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">46.00V</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Short Circuit Current (Isc)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">9.20A</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Voltage at Maximum Power (Vmp)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">37.10V</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Current at Maximum Power (Imp)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">8.90A</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Maximum System Voltage</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">1000V</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px 0px 1rem;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">&nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">General Info</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Length x Width x Thickness (LxWxT) - mm</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">1970x991x40</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Mounting Holes Pitch (Y) &ndash; mm</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">951</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Mounting Holes Pitch (X) &ndash; mm</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">978/1500</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Solar Cells per Module (Units) / Arrangement</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">72 / (12 x 6)</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp;Solar Cell Type</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Multi Crystalline Silicon</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Front Cover (Material / Thickness)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Tempered &amp; Low Iron Glass / 3.2mm</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Encapsulate</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Ethylene Vinyl Acetate</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Frame Material</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Anodized Aluminum Alloy</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Junction Box</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">IP-67, 4-Rail, 3 Diodes, 1 Mtr 4 Sq mm Wire With MC4 Connector</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, 1, '2022-08-09 06:44:41', '2022-08-09 06:44:41'),
(39, 27, 'SOLAR PV MODULE 320W 24V', '<ul class=\"list-unstyled advantages-list pb30\">\n<li>Positive Power Tolerance Modules.</li>\n<li>Highly Classified A-Grade Solar Cells for Lesser Degradation and High Energy.</li>\n<li>Micro Crack Free Panels-100% EL Tested Before and After Lamination.</li>\n<li>High Conversion Efficiency based on Leading Innovative Photo Voltaic Technologies.</li>\n<li>PID Free Modules with Long Term Reliability.</li>\n<li>Anti-Reflective Coating Glass Available.</li>\n<li>Advance IP67/IP68 Junction Box for long-term weather endurance.</li>\n<li>RFID Tag Available.</li>\n<li>Sustain Heavy Wind and Snow Loads (2400Pa and 5400Pa).</li>\n<li>Excellent Performance in Low Light.</li>\n<li>Salt Mist, Ammonia, Blowing Sand and Hail Resistant.</li>\n<li>Ideal for Off-Grid as well as On-Grid Applications.</li>\n<li>IP67 rated MC4 Compatible Connectors.</li>\n<li>EVA Encapsulation and Anti Reflection Coating for better Module Protection.</li>\n</ul>', '<table class=\"table table-striped\" style=\"list-style: none; margin: 0px 0px 1rem; padding: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0,0,0,0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0,0,0,0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0,0,0,0.075); width: 1296px; color: #212529; vertical-align: top; border-color: #dee2e6; font-family: Roboto, sans-serif; font-size: 14px; background-color: #ffffff; outline: none !important;\">\r\n<tbody style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; vertical-align: inherit; outline: none !important;\">\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" colspan=\"2\" valign=\"center\">\r\n<table style=\"padding: 0px; margin: 0px;\" border=\"0\" cellspacing=\"0\">\r\n<tbody style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px 0px 1rem;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">Technical Info</span><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">&nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Nominal Maximum Power (Pm)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px 0px 1rem;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">320Watts/24V</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Open Circuit Voltage (Voc)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">45V</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Short Circuit Current (Isc)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">9.17A</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Voltage at Maximum Power (Vmp)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">36.20V</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Current at Maximum Power (Imp)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">8.84A</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Maximum System Voltage</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">1000V</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px 0px 1rem;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">&nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">General Info</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Length x Width x Thickness (LxWxT) - mm</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">1970x9901x40</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Mounting Holes Pitch (Y) &ndash; mm</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">1100/1500</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Mounting Holes Pitch (X) &ndash; mm</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">950</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Solar Cells per Module (Units) / Arrangement</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">72 / (12 x 6)</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp;Solar Cell Type</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Multi Crystalline Silicon</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Front Cover (Material / Thickness)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Tempered &amp; Low Iron Glass / 3.2mm</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Encapsulate</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Ethylene Vinyl Acetate</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Frame Material</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Anodized Aluminum Alloy</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Junction Box</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">IP67/IP68 Enclosure with Bypass Diodes</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, 1, '2022-08-09 06:46:02', '2022-08-09 06:46:02');
INSERT INTO `products` (`id`, `product_category_id`, `name`, `small_description`, `detail_description`, `featured_image`, `status`, `created_at`, `updated_at`) VALUES
(40, 27, 'SOLAR PV MODULE 260W 24V', '<ul class=\"list-unstyled advantages-list pb30\">\n<li>Positive Power Tolerance Modules.</li>\n<li>Highly Classified A-Grade Solar Cells for Lesser Degradation and High Energy.</li>\n<li>Micro Crack Free Panels-100% EL Tested Before and After Lamination.</li>\n<li>High Conversion Efficiency based on Leading Innovative Photo Voltaic Technologies.</li>\n<li>PID Free Modules with Long Term Reliability.</li>\n<li>Anti-Reflective Coating Glass Available.</li>\n<li>Advance IP67/IP68 Junction Box for long-term weather endurance.</li>\n<li>RFID Tag Available.</li>\n<li>Sustain Heavy Wind and Snow Loads (2400Pa and 5400Pa).</li>\n<li>Excellent Performance in Low Light.</li>\n<li>Salt Mist, Ammonia, Blowing Sand and Hail Resistant.</li>\n<li>Ideal for Off-Grid as well as On-Grid Applications.</li>\n<li>IP67 rated MC4 Compatible Connectors.</li>\n<li>EVA Encapsulation and Anti Reflection Coating for better Module Protection.</li>\n</ul>', '<table class=\"table table-striped\" style=\"list-style: none; margin: 0px 0px 1rem; padding: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0,0,0,0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0,0,0,0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0,0,0,0.075); width: 1296px; color: #212529; vertical-align: top; border-color: #dee2e6; font-family: Roboto, sans-serif; font-size: 14px; background-color: #ffffff; outline: none !important;\">\r\n<tbody style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; vertical-align: inherit; outline: none !important;\">\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" colspan=\"2\" valign=\"center\">\r\n<table style=\"padding: 0px; margin: 0px;\" border=\"0\" cellspacing=\"0\">\r\n<tbody style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px 0px 1rem;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">Technical Info</span><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">&nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Nominal Maximum Power (Pm)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px 0px 1rem;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">260Watts/24V</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Open Circuit Voltage (Voc)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">37.60V</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Short Circuit Current (Isc)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">8.88A</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Voltage at Maximum Power (Vmp)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">31.00V</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Current at Maximum Power (Imp)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">8.40A</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Maximum System Voltage</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">1000V</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px 0px 1rem;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">&nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">General Info</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Length x Width x Thickness (LxWxT) - mm</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">1639x991x35/40</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Mounting Holes Pitch (Y) &ndash; mm</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">980</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Mounting Holes Pitch (X) &ndash; mm</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">951</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Solar Cells per Module (Units) / Arrangement</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">60 / (10 x 6)</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp;Solar Cell Type</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Multi Crystalline Silicon</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Front Cover (Material / Thickness)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Tempered &amp; Low Iron Glass / 3.2mm</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Encapsulate</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Ethylene Vinyl Acetate</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Frame Material</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Anodized Aluminum Alloy</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Junction Box</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">IP67/IP68 Enclosure with Bypass Diodes</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, 1, '2022-08-09 06:47:45', '2022-08-09 06:47:45'),
(42, 27, 'SOLAR PV MODULE 150W 12V', '<ul class=\"list-unstyled advantages-list pb30\">\r\n<li>Positive Power Tolerance Modules.</li>\r\n<li>Highly Classified A-Grade Solar Cells for Lesser Degradation and High Energy.</li>\r\n<li>Micro Crack Free Panels-100% EL Tested Before and After Lamination.</li>\r\n<li>High Conversion Efficiency based on Leading Innovative Photo Voltaic Technologies.</li>\r\n<li>PID Free Modules with Long Term Reliability.</li>\r\n<li>Anti-Reflective Coating Glass Available.</li>\r\n<li>Advance IP67/IP68 Junction Box for long-term weather endurance.</li>\r\n<li>RFID Tag Available.</li>\r\n<li>Sustain Heavy Wind and Snow Loads (2400Pa and 5400Pa).</li>\r\n<li>Excellent Performance in Low Light.</li>\r\n<li>Salt Mist, Ammonia, Blowing Sand and Hail Resistant.</li>\r\n<li>Ideal for Off-Grid as well as On-Grid Applications.</li>\r\n<li>IP67 rated MC4 Compatible Connectors.</li>\r\n<li>EVA Encapsulation and Anti Reflection Coating for better Module Protection.</li>\r\n</ul>\r\n<p>&nbsp;</p>', '<table class=\"table table-striped\" style=\"list-style: none; margin: 0px 0px 1rem; padding: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0,0,0,0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0,0,0,0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0,0,0,0.075); width: 1296px; color: #212529; vertical-align: top; border-color: #dee2e6; font-family: Roboto, sans-serif; font-size: 14px; background-color: #ffffff; outline: none !important;\">\r\n<tbody style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; vertical-align: inherit; outline: none !important;\">\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" colspan=\"2\" valign=\"center\">\r\n<table style=\"padding: 0px; margin: 0px; width: 100.119%; height: 148px;\" border=\"0\" cellspacing=\"0\">\r\n<tbody style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px; height: 53px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 72.1564%; height: 53px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px 0px 1rem;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">Technical Info</span><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">&nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Nominal Maximum Power (Pm)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 61.3744%; height: 53px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px 0px 1rem;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">150Watts/12V</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px; height: 19px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 72.1564%; height: 19px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Open Circuit Voltage (Voc)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 61.3744%; height: 19px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">22.50V</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px; height: 19px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 72.1564%; height: 19px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Short Circuit Current (Isc)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 61.3744%; height: 19px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">8.81A</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px; height: 19px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 72.1564%; height: 19px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Voltage at Maximum Power (Vmp)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 61.3744%; height: 19px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">17.96V</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px; height: 19px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 72.1564%; height: 19px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Current at Maximum Power (Imp)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 61.3744%; height: 19px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">8.36A</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px; height: 19px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 72.1564%; height: 19px;\" valign=\"center\" width=\"609\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Maximum System Voltage</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 61.3744%; height: 19px;\" valign=\"center\" width=\"518\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">1000V</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px 0px 1rem;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">&nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\">General Info</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Length x Width x Thickness (LxWxT) - mm</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">1495x665x35</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Mounting Holes Pitch (Y) &ndash; mm</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">980</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Mounting Holes Pitch (X) &ndash; mm</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">630</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Solar Cells per Module (Units) / Arrangement</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">36 / (9 x 4)</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">&nbsp;Solar Cell Type</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Multi Crystalline Silicon</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Front Cover (Material / Thickness)</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Tempered &amp; Low Iron Glass / 3.2mm</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Encapsulate</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Ethylene Vinyl Acetate</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Frame Material</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Anodized Aluminum Alloy</p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"606\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Junction Box</p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"522\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">IP67/IP68 Enclosure with Bypass Diodes</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, 1, '2022-08-18 14:13:10', '2022-08-18 14:13:10'),
(43, 26, 'SOLAR PCU 1435/12V', '<ul class=\"list-unstyled advantages-list pb30\">\r\n<li>Micro-Controller DSPIC Based Intelligent Control Design.</li>\r\n<li>Dual Charging,Mains Mode and Solar Mode.(Solar Panel upto 600W-12V model).</li>\r\n<li>Pure Sine Wave Regulated Output.</li>\r\n<li>Smart PWM Controlled multistage ATM (Automatic Trickle Mode) Charging.</li>\r\n<li>LCD and Graphical Display Indications (Status &amp; Fault).</li>\r\n<li>Smart and Faster Overload Sense and Short Circuit Protection.</li>\r\n<li>Auto Reset Feature.</li>\r\n<li>Mains Input Voltage Range Selection.</li>\r\n<li>PV Mode ON/OFF Selection Switch.</li>\r\n<li>Charging Voltage Selection Switch.</li>\r\n<li>Grid Charging Enable /Disable Selection.</li>\r\n<li>Pure Sine wave Regulated Output.</li>\r\n</ul>\r\n<p>&nbsp;</p>', '<table class=\"table table-striped\" style=\"list-style: none; margin: 0px 0px 1rem; padding: 0px; caption-side: bottom; --bs-table-bg: transparent; --bs-table-striped-color: #212529; --bs-table-striped-bg: rgba(0,0,0,0.05); --bs-table-active-color: #212529; --bs-table-active-bg: rgba(0,0,0,0.1); --bs-table-hover-color: #212529; --bs-table-hover-bg: rgba(0,0,0,0.075); width: 1296px; color: #212529; vertical-align: top; border-color: #dee2e6; font-family: Roboto, sans-serif; font-size: 14px; background-color: #ffffff; outline: none !important;\">\r\n<tbody style=\"box-sizing: border-box; list-style: none; margin: 0px; padding: 0px; border-style: solid; border-width: 0px; vertical-align: inherit; outline: none !important;\">\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; background-color: #32c36c;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">odel&nbsp;</span></span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; background-color: #32c36c;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">SOLAR PCU&nbsp;1435/ 12V</span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Capacity (Rated Power)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">1135VA / 12 V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Capacity (Maximum PV Power support)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">600 WP</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 1128.94px; background-color: #32c36c;\" colspan=\"2\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Input</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Input Voltage (Standard Range)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">100 V ~ 300 V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Input Voltage (Narrow Range)</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">180V ~ 260 V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Nominal Input Battery Voltage</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">12 V</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 1128.94px; background-color: #32c36c;\" colspan=\"2\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Output</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Output Frequency</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">50 Hz&nbsp;&plusmn; 0.5 Hz</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Output Waveform</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Pure Sine Wave</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px; width: 1128.94px; background-color: #32c36c;\" colspan=\"2\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; font-weight: bolder;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; color: #ffffff;\">Technology</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Solar Charger Type</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">PWM</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Max. Solar Panel Current &nbsp;</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">35 Amps</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Mains Re-Connect Voltage</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">11.6 V&nbsp;<span style=\"box-sizing: border-box; padding: 0px; margin: 0px; text-decoration-line: underline;\">+</span>&nbsp;0.3 V DC</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Mains Dis-Connect Voltage</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">14.4 V&nbsp;<span style=\"box-sizing: border-box; padding: 0px; margin: 0px; text-decoration-line: underline;\">+</span>&nbsp;0.3 V DC</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Solar UPS Overload</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">110%</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Solar UPS Short Circuit</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">300%</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Solar UPS Transfer Time</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px; text-decoration-line: underline;\">&lt;</span>&nbsp;12 msec</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Grid Chg. Enable Mode</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Luxury Mode</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"479\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Grid Chg. Disable Mode</span></p>\r\n</td>\r\n<td style=\"box-sizing: border-box; padding: 0px; margin: 0px;\" valign=\"center\" width=\"648\">\r\n<p style=\"box-sizing: border-box; padding: 0px; margin: 0px;\"><span style=\"box-sizing: border-box; padding: 0px; margin: 0px;\">Economy Mode</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, 1, '2022-08-18 14:18:15', '2022-08-22 00:40:02'),
(44, 28, 'Okaya Inverter Tubular Battery -OPHT28066 (250AH)', NULL, NULL, 't4Wy2j2uxibkT3iAmyt7bTMlgRpBPL-metaNWJjZWE1ZTItNGNhMy00NjgwLWE2ZDYtZWU3NTdmODJhOTlhLmpwZw==-.jpg', 1, '2022-08-18 17:13:45', '2022-08-18 17:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `active` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `status`, `active`, `created_at`, `updated_at`) VALUES
(26, 'Inverters', 1, 1, '2022-08-08 03:43:34', '2022-08-08 03:43:34'),
(27, 'Solar Panels', 1, 0, '2022-08-08 03:44:13', '2022-08-08 03:44:13'),
(28, 'Batteries', 1, 0, '2022-08-08 03:44:37', '2022-08-08 03:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user', 'web', '2022-07-12 03:44:43', '2022-07-12 03:44:43'),
(2, 'super-admin', 'web', '2022-07-12 03:44:44', '2022-07-12 03:44:44');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1),
(20, 2),
(21, 1),
(21, 2),
(22, 1),
(22, 2),
(23, 1),
(23, 2),
(24, 1),
(24, 2),
(25, 1),
(25, 2),
(26, 1),
(26, 2),
(27, 1),
(27, 2),
(28, 1),
(28, 2),
(29, 1),
(29, 2),
(30, 1),
(30, 2),
(31, 1),
(31, 2),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(36, 2),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(41, 1),
(41, 2),
(42, 1),
(42, 2),
(43, 1),
(43, 2),
(44, 1),
(44, 2),
(45, 1),
(45, 2),
(46, 1),
(46, 2),
(47, 1),
(47, 2),
(48, 1),
(48, 2),
(49, 1),
(49, 2),
(50, 1),
(50, 2),
(51, 1),
(51, 2),
(52, 1),
(52, 2),
(53, 1),
(53, 2),
(54, 1),
(54, 2),
(55, 1),
(55, 2),
(56, 1),
(56, 2),
(57, 1),
(57, 2),
(58, 1),
(58, 2),
(59, 1),
(59, 2),
(60, 1),
(60, 2),
(61, 1),
(61, 2),
(62, 1),
(62, 2),
(63, 1),
(63, 2),
(64, 1),
(64, 2),
(65, 1),
(65, 2),
(66, 1),
(66, 2),
(67, 1),
(67, 2),
(68, 1),
(68, 2),
(69, 1),
(69, 2),
(70, 1),
(70, 2),
(71, 1),
(71, 2),
(72, 1),
(72, 2),
(73, 1),
(73, 2),
(74, 1),
(74, 2),
(75, 1),
(75, 2),
(76, 1),
(76, 2),
(77, 1),
(77, 2),
(78, 1),
(78, 2),
(79, 1),
(79, 2),
(80, 1),
(80, 2),
(81, 1),
(81, 2),
(82, 1),
(82, 2),
(83, 1),
(83, 2),
(84, 1),
(84, 2),
(85, 1),
(85, 2),
(86, 1),
(86, 2),
(87, 1),
(87, 2),
(88, 1),
(88, 2),
(89, 1),
(89, 2),
(90, 1),
(90, 2),
(91, 1),
(91, 2),
(92, 1),
(92, 2),
(93, 1),
(93, 2),
(94, 1),
(94, 2),
(95, 1),
(95, 2),
(96, 1),
(96, 2),
(97, 1),
(97, 2),
(98, 1),
(98, 2),
(99, 1),
(99, 2),
(100, 1),
(100, 2),
(101, 1),
(101, 2),
(102, 1),
(102, 2),
(103, 1),
(103, 2),
(104, 1),
(104, 2),
(105, 1),
(105, 2),
(106, 2),
(107, 2),
(108, 2),
(109, 2),
(110, 2),
(111, 2),
(112, 2),
(113, 2),
(114, 2),
(115, 2),
(116, 2),
(117, 2),
(118, 2),
(119, 2),
(120, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `description`, `logo`, `company_name`, `created_at`, `updated_at`) VALUES
(1, 'Sami Wade', '<p>Energia has been absolutely the best to work with. Their attention to detail and customer support was amazing!! They were fantastic through the entire purchase process. Had lots of questions and they were patient. When my system arrived, it was well packed.</p>', 'xxu6TgOVv84HAsDygb878OXoblfT3d-metaMS5qcGc=-.jpg', 'promina', '2022-07-12 03:44:45', '2022-07-14 23:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@admin.com', '2022-07-12 03:44:41', '$2y$10$ZzJdc8vZFsVmmBvbKcYhDOpiPQgAtd8N3zLW7LTg5TWaF3COvvwKq', 'rSMfIdNeKo1YzlNImNbxprr0UkMhgXTpC1R3hyp8dTrVtQLhQTB3Y5KiZ8gg', '2022-07-12 03:44:42', '2022-07-14 23:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_id` bigint(20) UNSIGNED NOT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_pages`
--
ALTER TABLE `about_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appliance_categories`
--
ALTER TABLE `appliance_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_pages`
--
ALTER TABLE `blog_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD KEY `category_post_category_id_foreign` (`category_id`),
  ADD KEY `category_post_post_id_foreign` (`post_id`);

--
-- Indexes for table `contact_pages`
--
ALTER TABLE `contact_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_post_id_foreign` (`post_id`),
  ADD KEY `galleries_project_id_foreign` (`project_id`),
  ADD KEY `galleries_product_id_foreign` (`product_id`);

--
-- Indexes for table `home_about_sections`
--
ALTER TABLE `home_about_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaderships`
--
ALTER TABLE `leaderships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `load_items`
--
ALTER TABLE `load_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `load_items_appliance_category_id_foreign` (`appliance_category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_product`
--
ALTER TABLE `package_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_pages`
--
ALTER TABLE `partner_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photos_gallery_id_foreign` (`gallery_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`),
  ADD KEY `post_tag_post_id_foreign` (`post_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_product_category_id_foreign` (`product_category_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_gallery_id_foreign` (`gallery_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_pages`
--
ALTER TABLE `about_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `appliance_categories`
--
ALTER TABLE `appliance_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `blog_pages`
--
ALTER TABLE `blog_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_pages`
--
ALTER TABLE `contact_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `home_about_sections`
--
ALTER TABLE `home_about_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `leaderships`
--
ALTER TABLE `leaderships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `load_items`
--
ALTER TABLE `load_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `package_product`
--
ALTER TABLE `package_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partner_pages`
--
ALTER TABLE `partner_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_post`
--
ALTER TABLE `category_post`
  ADD CONSTRAINT `category_post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `galleries_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `galleries_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `load_items`
--
ALTER TABLE `load_items`
  ADD CONSTRAINT `load_items_appliance_category_id_foreign` FOREIGN KEY (`appliance_category_id`) REFERENCES `appliance_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_category_id_foreign` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
