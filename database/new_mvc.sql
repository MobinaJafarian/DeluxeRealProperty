-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 07:31 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `address` text NOT NULL,
  `amount` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `floor` varchar(191) NOT NULL,
  `year` int(11) NOT NULL,
  `storeroom` tinyint(1) NOT NULL,
  `balcony` tinyint(1) NOT NULL,
  `area` int(11) NOT NULL,
  `room` tinyint(5) NOT NULL,
  `toilet` varchar(255) NOT NULL,
  `parking` tinyint(5) NOT NULL,
  `tag` varchar(191) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `cat_id` bigint(20) NOT NULL,
  `status` tinyint(5) NOT NULL,
  `sell_status` tinyint(4) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `description`, `address`, `amount`, `image`, `floor`, `year`, `storeroom`, `balcony`, `area`, `room`, `toilet`, `parking`, `tag`, `user_id`, `cat_id`, `status`, `sell_status`, `type`, `view`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Perfectly Located On The Most Beautiful Street In Etobicoke', '&lt;p&gt;Perfectly Located On The Most Beautiful Street In Etobicoke. Newly Constructed This Pristine Modern Home has Radiant Heated Floors Throughout, Control 4 Automation System, Natural Stones &amp;amp; Woods Used Throughout. The Pantry has Additional Fridge/Freezer, 2 Dishwashers, Elevator, Walk-Out Basement, Home Theatre, Spectacular Great Room, Master Retreat With Terrace, Wine Room, Pool Table and Serene Ravine.&lt;/p&gt;\r\n', 'Etobicoke', '$8,798,000', '/images/ads/2022/Oct/31/2022_10_31_15_56_20_13.jpg', 'wood', 2021, 1, 1, 2100, 4, '8', 1, 'Modern ', 31, 13, 0, 0, 1, 0, '0000-00-00 00:00:00', '2022-10-31 08:56:21', NULL),
(2, 'Make Your Way Into This Breathtaking Custom Built Home In Sought After Bronte West! ⠀', '&lt;p&gt;This Home Boasts Approximately 3100 Sqft Of Above Grade Living Space + 1500 Sqft In The Basement , 10 Ft Ceilings On Main, Pot Lights + Speakers Thru-Out, Dining Room Incl. Servery With Wine Fridge, Gorgeous Kitchen W/ 4&amp;#39;X8&amp;#39; Centre Island, Pantry, &amp;amp; Quartz Counters, Beautiful Glass/Metal Staircase Leading To 2nd Level with 4 Beautiful, Good-Sized Bedrooms And 3 Bathrooms with Heated Flooring. Extras: Stunning Primary Bedroom W/ 4 Pc Ensuite &amp;amp; W/In Closet. Garage Offers 2 Car Parking Spots With An Electric Car Charger. Close To All Major Amenities- Parks, Schools, Shops Etc.&lt;/p&gt;\r\n', 'Bronte West', '$3,295,000 ', '/images/ads/2022/Oct/23/2022_10_23_04_50_50_39.jpg', 'wood', 2020, 1, 0, 4600, 4, '4', 1, 'Breathtaking ', 29, 14, 0, 0, 1, 0, '0000-00-00 00:00:00', '2022-10-22 21:50:50', NULL),
(3, 'Gorgeous Modern Design With A Unique Motorized Wood Facade That Opens &amp; Closes!', '&lt;p&gt;A Triple Sided Gas Fireplace Welcomes You From The Foyer To The Living Room Featuring Floor-To-Ceiling Windows &amp;amp; Gorgeous Engineered Hardwood! An Entertainer&amp;#39;s Dream Kitchen With Quartz Counters &amp;amp; Backsplash, Custom Centre Island With Built-In Family Table With Seating For 6, Built-In Panelled Fridge &amp;amp; Dishwasher, S/S Wall Oven &amp;amp; Microwave, Gas Cooktop With Pot Filler! Grand Family Room With Floor-To-Ceiling Windows, Custom Feature Wall With Built-In Cabinetry &amp;amp; Walk-Out To Deck &amp;amp; Privacy Fenced Back Yard! The Stairway Is Another Feat Of Architectural Genius With A 27Ft Digitally Designed Custom 3D Wall Accompanied With 3 Inch Floating Stairs &amp;amp; A Massive Skylight! Breathtaking Primary Bedroom With Floor-To-Ceiling Windows, Wood Feature Wall &amp;amp; Built-In Closets! Gorgeous En-suite With A Floating Double Vanity, Curbless Glass Shower &amp;amp; Freestanding Tub!&lt;/p&gt;\r\n', 'canda', '$2,595,000', '/images/ads/2022/Oct/23/2022_10_23_00_10_58_19.jpg', 'wood', 2022, 1, 1, 1125, 5, '4', 1, 'Unique ', 29, 13, 0, 0, 0, 0, '2020-07-12 13:09:12', '2022-10-22 17:21:55', NULL),
(4, ' Transitional Build In The Heart Of #LawrencePark', '&lt;p&gt;Spanning Approx. 5,300 Square Feet Of Luxurious Living Space + 2,300 Lower Level * Grand Marble Foyer With Discretely Located Office * Exquisite Finishes * Crisstar Kitchen, Servery &amp;amp; Walk-In Pantry * Beautifully Appointed Outdoor Areas Include Pool, Hot Tub, Kitchen, &amp;amp; Deck * Extensive Built-Ins * Fabulous Mud Room W/ Dog Shower ⠀ ⠀&lt;br /&gt;\r\nLower Level: Rec Room, Bar, #WineCellar Area, Gym, Nanny Suite, 2nd Laundry ⠀ ⠀&lt;br /&gt;\r\nEXTRAS: Subzero Fridge, Freezer &amp;amp; Wine Fridge. Miele Coffee Centre, Miele D/W, Wolf Wall Oven, Wolf Cooktop With Bbq &amp;amp; Griddle, 2nd Wolf Cooktop, Wolf Wall Oven, Wolf Micro, Heated Drive, Generator, Smart Home Automation.&lt;/p&gt;\r\n', 'LawrencePark', '$7,150,000', '/images/ads/2022/Oct/23/2022_10_23_00_19_40_64.jpg', 'wood', 2021, 1, 1, 7600, 6, '8', 1, 'LawrencePark', 29, 13, 0, 0, 1, 0, '2020-07-17 13:48:18', '2022-10-22 17:19:41', NULL),
(9, 'CustomBuilt home in Toronto', '&lt;p&gt;Spectacular Custom Residence With Unsurpassed Beauty &amp;amp; Elegance! Exceptional 4 Bedroom Home Exquisitely Designed With Sophisticated &amp;amp; Luxurious Finishes, This Home Is Loaded With Extra Features/Finishes. Paneling, Skylights, Built In&amp;#39;s, Media Room, Elevator, Exercise Room, Custom Masterpiece Kitchen &amp;amp; Family Room Combination Provide Venues For Casual Gatherings, Gorgeous Master Retreat With Custom Walk In Closets &amp;amp; Spa Inspired Ensuite&lt;/p&gt;\r\n', 'Toronto', '$4,189,000 ', '/images/ads/2022/Oct/23/2022_10_23_05_30_48_35.jpg', 'wood', 2021, 0, 0, 1999, 4, '3', 1, 'Beauty &amp; Elegance', 29, 14, 0, 0, 0, 0, '2022-10-22 22:30:48', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(13, 'Modern', NULL, '2020-12-27 17:50:36', '2022-10-22 16:57:25', NULL),
(14, 'Deluxe', 13, '2020-12-27 17:51:59', '2022-10-22 16:57:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `comment` text NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `status` tinyint(5) NOT NULL DEFAULT 0,
  `approved` tinyint(5) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `comment`, `parent_id`, `status`, `approved`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 29, 1, 'useful', NULL, 0, 1, '2020-07-11 00:00:00', '2022-10-23 01:04:48', NULL),
(2, 27, 1, 'thanks', 1, 0, 1, '2020-07-13 00:00:00', '2022-10-23 01:00:09', NULL),
(3, 29, 3, 'the best', NULL, 0, 1, '2020-07-13 23:48:26', '2022-10-23 01:00:01', NULL),
(4, 27, 3, 'thank you', 3, 0, 1, '2020-07-17 15:51:51', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) NOT NULL,
  `image` varchar(191) NOT NULL,
  `advertise_id` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `advertise_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(16, '/images/gallery/2021/Feb/07/2021_02_07_18_26_50_10.png', 1, '2021-02-07 21:56:50', NULL, '2021-05-17 11:36:57'),
(17, '/images/gallery/2021/Feb/07/2021_02_07_18_26_57_36.png', 1, '2021-02-07 21:56:57', NULL, '2021-02-07 21:58:18'),
(18, '/images/gallery/2021/Feb/07/2021_02_07_18_27_25_23.png', 2, '2021-02-07 21:57:25', NULL, '2022-10-22 17:04:11'),
(19, '/images/gallery/2021/May/17/2021_05_17_07_07_05_40.jpg', 1, '2021-05-17 11:37:05', NULL, '2022-10-22 16:54:29'),
(20, '/images/gallery/2021/May/17/2021_05_17_07_07_11_74.jpg', 1, '2021-05-17 11:37:11', NULL, '2022-10-22 16:54:24'),
(21, '/images/gallery/2022/Oct/22/2022_10_22_21_55_57_79.jpg', 8, '2022-10-22 14:55:59', NULL, NULL),
(22, '/images/gallery/2022/Oct/22/2022_10_22_21_56_10_58.jpeg', 8, '2022-10-22 14:56:11', NULL, NULL),
(23, '/images/gallery/2022/Oct/22/2022_10_22_23_54_18_98.jpg', 1, '2022-10-22 16:54:18', NULL, NULL),
(24, '/images/gallery/2022/Oct/22/2022_10_22_23_54_43_12.jpg', 1, '2022-10-22 16:54:44', NULL, NULL),
(25, '/images/gallery/2022/Oct/22/2022_10_22_23_55_18_38.jpg', 1, '2022-10-22 16:55:18', NULL, NULL),
(26, '/images/gallery/2022/Oct/22/2022_10_22_23_55_30_51.jpg', 1, '2022-10-22 16:55:30', NULL, NULL),
(27, '/images/gallery/2022/Oct/22/2022_10_22_23_55_38_30.jpg', 1, '2022-10-22 16:55:39', NULL, NULL),
(28, '/images/gallery/2022/Oct/22/2022_10_22_23_56_00_49.jpg', 1, '2022-10-22 16:56:01', NULL, NULL),
(29, '/images/gallery/2022/Oct/23/2022_10_23_00_04_19_32.jpg', 2, '2022-10-22 17:04:20', NULL, '2022-10-22 21:51:02'),
(30, '/images/gallery/2022/Oct/23/2022_10_23_00_04_26_64.jpg', 2, '2022-10-22 17:04:26', NULL, '2022-10-22 21:51:07'),
(31, '/images/gallery/2022/Oct/23/2022_10_23_00_04_34_67.jpg', 2, '2022-10-22 17:04:34', NULL, '2022-10-22 21:51:10'),
(32, '/images/gallery/2022/Oct/23/2022_10_23_00_04_44_43.jpg', 2, '2022-10-22 17:04:44', NULL, '2022-10-22 21:51:16'),
(33, '/images/gallery/2022/Oct/23/2022_10_23_00_04_51_43.jpg', 2, '2022-10-22 17:04:52', NULL, '2022-10-22 21:51:14'),
(34, '/images/gallery/2022/Oct/23/2022_10_23_00_10_02_21.jpg', 3, '2022-10-22 17:10:03', NULL, NULL),
(35, '/images/gallery/2022/Oct/23/2022_10_23_00_10_11_48.jpg', 3, '2022-10-22 17:10:11', NULL, NULL),
(36, '/images/gallery/2022/Oct/23/2022_10_23_00_10_16_97.jpg', 3, '2022-10-22 17:10:16', NULL, NULL),
(37, '/images/gallery/2022/Oct/23/2022_10_23_00_10_25_20.jpg', 3, '2022-10-22 17:10:25', NULL, NULL),
(38, '/images/gallery/2022/Oct/23/2022_10_23_00_10_31_72.jpg', 3, '2022-10-22 17:10:32', NULL, NULL),
(39, '/images/gallery/2022/Oct/23/2022_10_23_00_10_40_69.jpg', 3, '2022-10-22 17:10:40', NULL, NULL),
(40, '/images/gallery/2022/Oct/23/2022_10_23_00_19_55_24.jpg', 4, '2022-10-22 17:19:56', NULL, NULL),
(41, '/images/gallery/2022/Oct/23/2022_10_23_00_20_04_81.jpg', 4, '2022-10-22 17:20:04', NULL, NULL),
(42, '/images/gallery/2022/Oct/23/2022_10_23_00_20_16_86.jpg', 4, '2022-10-22 17:20:16', NULL, NULL),
(43, '/images/gallery/2022/Oct/23/2022_10_23_00_20_26_21.jpg', 4, '2022-10-22 17:20:27', NULL, NULL),
(44, '/images/gallery/2022/Oct/23/2022_10_23_00_20_34_30.jpg', 4, '2022-10-22 17:20:34', NULL, NULL),
(45, '/images/gallery/2022/Oct/23/2022_10_23_00_20_39_13.jpg', 4, '2022-10-22 17:20:39', NULL, NULL),
(46, '/images/gallery/2022/Oct/23/2022_10_23_00_20_50_76.jpg', 4, '2022-10-22 17:20:50', NULL, NULL),
(47, '/images/gallery/2022/Oct/23/2022_10_23_04_51_28_93.jpg', 2, '2022-10-22 21:51:28', NULL, NULL),
(48, '/images/gallery/2022/Oct/23/2022_10_23_04_51_39_31.jpg', 2, '2022-10-22 21:51:39', NULL, NULL),
(49, '/images/gallery/2022/Oct/23/2022_10_23_04_51_46_55.jpg', 2, '2022-10-22 21:51:46', NULL, NULL),
(50, '/images/gallery/2022/Oct/23/2022_10_23_04_51_55_41.jpg', 2, '2022-10-22 21:51:55', NULL, NULL),
(51, '/images/gallery/2022/Oct/23/2022_10_23_04_52_05_19.jpg', 2, '2022-10-22 21:52:05', NULL, NULL),
(52, '/images/gallery/2022/Oct/23/2022_10_23_05_31_12_10.jpg', 9, '2022-10-22 22:31:12', NULL, NULL),
(53, '/images/gallery/2022/Oct/23/2022_10_23_05_31_25_53.jpg', 9, '2022-10-22 22:31:25', NULL, NULL),
(54, '/images/gallery/2022/Oct/23/2022_10_23_05_31_35_87.jpg', 9, '2022-10-22 22:31:36', NULL, NULL),
(55, '/images/gallery/2022/Oct/23/2022_10_23_05_31_43_85.jpg', 9, '2022-10-22 22:31:44', NULL, NULL),
(56, '/images/gallery/2022/Oct/23/2022_10_23_05_31_54_48.jpg', 9, '2022-10-22 22:31:54', NULL, NULL),
(57, '/images/gallery/2022/Oct/23/2022_10_23_05_32_02_98.jpg', 9, '2022-10-22 22:32:02', NULL, NULL),
(58, '/images/gallery/2022/Oct/23/2022_10_23_05_32_09_47.jpg', 9, '2022-10-22 22:32:10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) NOT NULL,
  `title` varchar(191) NOT NULL,
  `body` text NOT NULL,
  `image` text NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `published_at` datetime NOT NULL,
  `status` tinyint(5) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `image`, `user_id`, `cat_id`, `published_at`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'How would you describe a modern style house', '&lt;p&gt;How would you describe a modern style house?&lt;br /&gt;\r\nImage result for blog about modern homes&lt;br /&gt;\r\nModern home design emphasizes clean lines and geometric shapes. No more are features such as arches, ornate columns, window shutters, or any outlandish ornamentation. In place of these features that at one point spoke of luxury and wealth are simple shapes and intentional asymmetry. The opulence of the past is no more.&lt;/p&gt;\r\n', 's:52:\"/images/posts/2022/Oct/23/2022_10_23_03_52_00_88.jpg\";', 29, 13, '2022-10-19 00:00:00', 0, '2020-07-09 23:08:13', '2022-10-23 09:44:10', NULL),
(2, 'What is a modern house called', '&lt;p&gt;What is a modern house called?&lt;/p&gt;\r\n\r\n&lt;p&gt;The term &amp;ldquo;contemporary&amp;rdquo; refers to the present, and &amp;ldquo;modern&amp;rdquo; refers to a time period that has already passed (e.g., &lt;strong&gt;midcentury modern&lt;/strong&gt;). Contemporary homes today often incorporate elements from modernist styles. Many boast eco-friendly materials and design with a focus on clean lines and natural textures.&lt;/p&gt;\r\n', 's:52:\"/images/posts/2022/Oct/23/2022_10_23_03_59_57_50.jpg\";', 29, 13, '2022-08-21 00:00:00', 0, '2020-07-10 18:32:48', '2022-10-23 09:42:55', NULL),
(3, 'Six Elements of Modern House Design You Need to Know', '&lt;p&gt;What are the elements of a modern house?&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;Image result for blog about modern homes&quot; src=&quot;https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSa6u4WDi9WoRuXmX91w7WGzVYOjxHLPSe5FyTCQlkfmQ&amp;amp;s&quot; style=&quot;margin-left:-14px; width:240px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Six Elements of Modern House Design You Need to Know&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Open plan layout.&lt;/li&gt;\r\n	&lt;li&gt;Clean lines and geometric shapes.&lt;/li&gt;\r\n	&lt;li&gt;Embrace the natural light.&lt;/li&gt;\r\n	&lt;li&gt;Minimal ornament aesthetics.&lt;/li&gt;\r\n	&lt;li&gt;Light materials and furniture.&lt;/li&gt;\r\n	&lt;li&gt;Neutral colour palette.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', 's:52:\"/images/posts/2022/Oct/23/2022_10_23_04_06_44_45.jpg\";', 29, 14, '2022-08-03 00:00:00', 0, '2020-07-12 15:18:59', '2022-10-22 21:06:44', NULL),
(4, 'difference between a modern home and a contemporary home', '&lt;p&gt;What is the difference between a modern home and a contemporary home?&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;Image result&quot; src=&quot;https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScl4GvFLVq37D2CZhtuk3WQRNkfRvq-5VKQNBjiTumsQ&amp;amp;s&quot; style=&quot;margin-left:-50px; width:318px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Contemporary is, by definition, what&amp;#39;s happening in design at this very moment in time. This definition makes it more fluid and hard to pin down. Modern design, on the other hand, has a distinguishable aesthetic that emphasizes crisp lines, warm neutrals, and balance.&lt;/p&gt;\r\n', 's:52:\"/images/posts/2022/Oct/23/2022_10_23_04_47_51_92.jpg\";', 29, 13, '2022-09-30 00:00:00', 0, '2020-07-12 15:20:04', '2022-10-22 21:47:51', NULL),
(6, 'design modern', '&lt;p&gt;What makes a design modern?&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Modern design is an interior design style characterized by &lt;strong&gt;a monochromatic color palette, clean lines, minimalism, natural materials, and natural light&lt;/strong&gt;. It refers specifically to a historical aesthetic movement that took place during the early to mid-twentieth century.&lt;/p&gt;\r\n', 's:52:\"/images/posts/2022/Oct/23/2022_10_23_04_49_02_27.jpg\";', 29, 13, '2021-01-19 00:00:00', 0, '2021-01-19 13:15:37', '2022-10-22 21:50:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) NOT NULL,
  `title` varchar(191) NOT NULL,
  `url` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `amount` varchar(191) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `url`, `address`, `amount`, `body`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Make Your Way Into This Breathtaking Custom Built Home In Sought After Bronte West', 'http://localhost:8000/ads/2', 'Bronte West', '$3,295,000 ', '&lt;p&gt;This Home Boasts Approximately 3100 Sqft Of Above Grade Living Space + 1500 Sqft In The Basement , 10 Ft Ceilings On Main, Pot Lights + Speakers Thru-Out, Dining Room Incl. Servery With Wine Fridge, Gorgeous Kitchen W/ 4&amp;#39;X8&amp;#39; Centre Island, Pantry, &amp;amp; Quartz Counters, Beautiful Glass/Metal Staircase Leading To 2nd Level with 4 Beautiful, Good-Sized Bedrooms And 3 Bathrooms with Heated Flooring. Extras: Stunning Primary Bedroom W/ 4 Pc Ensuite &amp;amp; W/In Closet. Garage Offers 2 Car Parking Spots With An Electric Car Charger. Close To All Major Amenities- Parks, Schools, Shops Etc&lt;/p&gt;\r\n', '/images/slides/2022/Oct/23/2022_10_23_05_18_25_86.jpg', '2022-10-22 17:25:24', '2022-10-22 22:18:25', NULL),
(5, 'Perfectly Located On The Most Beautiful Street In Etobicoke', 'http://localhost:8000/ads/1', 'Etobicoke', '$8,798,000', '&lt;p&gt;Perfectly Located On The Most Beautiful Street In Etobicoke. Newly Constructed This Pristine Modern Home has Radiant Heated Floors Throughout, Control 4 Automation System, Natural Stones &amp;amp; Woods Used Throughout. The Pantry has Additional Fridge/Freezer, 2 Dishwashers, Elevator, Walk-Out Basement, Home Theatre, Spectacular Great Room, Master Retreat With Terrace, Wine Room, Pool Table and Serene Ravine.&lt;/p&gt;\r\n', '/images/slides/2022/Oct/23/2022_10_23_05_20_32_84.jpg', '2022-10-22 17:30:05', '2022-10-22 22:20:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `email` varchar(191) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `avatar` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `status` tinyint(5) NOT NULL DEFAULT 0,
  `is_active` tinyint(5) NOT NULL DEFAULT 0,
  `verify_token` varchar(191) DEFAULT NULL,
  `user_type` varchar(191) NOT NULL,
  `remember_token` varchar(191) DEFAULT NULL,
  `remember_token_expire` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `avatar`, `password`, `status`, `is_active`, `verify_token`, `user_type`, `remember_token`, `remember_token_expire`, `created_at`, `updated_at`, `deleted_at`) VALUES
(27, 'agent@yahoo.com', 'agent', 'Real Property', '/images/avatar/2022/Oct/23/2022_10_23_07_41_17_47.png', '$2y$10$uE1SeF1yji36.tvG8Wb/Y.BgpyQTWT5mj.t12ypvmvc/Z8yG5MICi', 0, 1, 'f001ecbe630b3dd15bc4a39d1e78646458bd936055577e904ae879a915eddd7f', 'admin', 'b607a503c1e932e49fb7bb69541b80bcf136d546da4828e5f8cb0470f81d3627', '2021-03-26 17:33:48', '2021-03-09 17:26:37', '2022-10-23 01:00:47', NULL),
(29, 'nj@ad.com', 'Mobina', 'Nj', '/images/avatar/2022/Oct/23/2022_10_23_07_40_12_76.jpg', '$2y$10$m4DgrJbrcI.mFe2NTd4F6uaPLvS1ETKJxyMM7/4GqM6qMDGQXLbdG', 1, 1, 'ea338fbc894132201f6bc1d71de516d7a6d61474174b2869ede0aee1e042528c', 'user', NULL, NULL, '2022-10-22 11:11:46', '2022-10-31 09:18:28', NULL),
(30, 'sammiller@gmail.com', 'sam', 'miller', '/images/avatar/2022/Oct/23/2022_10_23_16_47_52_30.jpg', '$2y$10$MvKQT/2nlGqfHxP0Irwwou0INqm1uTedjSrmoqQXlLQ34Xi5zVvp.', 0, 1, 'ae971f6adc66c0156d55f8281215b090ae6757f7a78ea06fb6bafd78957b9be0', 'user', NULL, NULL, '2022-10-23 09:47:53', '2022-10-31 09:19:44', NULL),
(31, 'admin@gmail.com', 'Deluxe', 'Real Property', '/images/avatar/2022/Oct/31/2022_10_31_15_45_04_28.png', '$2y$10$uxVMfObmofFeDOzxnwomReAmKyrq29fG3ubTOUdoDeW/lHIQp.BIW', 0, 1, '777fd2e11d86917f7a46405378dbcef7b8b2efe797ec324d36cfca4bc620a22c', 'admin', NULL, NULL, '2022-10-31 08:45:04', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
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
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
