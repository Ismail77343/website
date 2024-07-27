-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2023 at 01:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_`
--

-- --------------------------------------------------------

--
-- Table structure for table `connect`
--

CREATE TABLE `connect` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `commint` text NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT 0,
  `date_reg` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `connect`
--

INSERT INTO `connect` (`id`, `first_name`, `last_name`, `phone`, `commint`, `read`, `date_reg`) VALUES
(4, 'ismail', 'ali', '773430035', 'تجريبي تجريبي تجريبي تجريبي\r\nتجريبي\r\nتجريبي\r\nتجريبي\r\nتجريبي\r\nتجريبي\r\nتجريبي', 0, '2023-02-23 21:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `img`) VALUES
(19, 'png'),
(20, 'png'),
(22, 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `info_web`
--

CREATE TABLE `info_web` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_web`
--

INSERT INTO `info_web` (`id`, `name`, `address`, `phone`, `about`) VALUES
(1, 'مؤسسه عبد العليم', 'اليمن-صنعاء-حده', '777211332', 'اذا كنت تبحث عن زجاج السيكوريت للبلكونات نحن نقدم لك\r\n                خدماتنا\r\n                بافضل الاسعار\r\n                من الان لا داعي للحيره، نحن نوفر لكم جميع انواع زجاج سيكوريت الملون، بالاضافه الى باب سيكوريت الجرار\r\n                فاذا كنت من محبي الاناقه والجمال نحن نمد لك يد المساعده للحصول على اجمل تصميمات الزجاج والمرايا فقط\r\n                من\r\n                خلال موقعنا او الاتصال بنا\r\n                نحن نقدم لكم افضل الخدمات من اشهر واكبر شركات زجاج سيكوريت في الرياض والمملكه العربيه السعوديه\r\n                عزيزي العميل نقدم لك افضل الخدمات الخاصه بشركات الزجاج والمرايا لجميع قطع الاثاث التي تحتاج الى زجاج\r\n                او اذا كنت ترغب في تزين وتوسيع منزلك حيث تعمل المرايات والزجاج على زياده الجمال والمساحه الواسعه\r\n                اهم مميزات مؤسسه الياسمين الالتزام بالدقه في التصميمات حيث يستلم العميل الزجاج كما يريد الالتزام\r\n                بمواعيد\r\n                التسليم وهي تعد من اهم المميزات التي يبحث عنها العملاء\r\n                وخدماتنا تشمل كافه انواع الزجاج والالمنيوم وتغطي خدماتنا منطقه الرياض بالكامل\r\n                لدينا فريق عمل متكامل يمكنك التواصل معنا في اي وقت خلال24 ساعه علي مدار اليوم');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`) VALUES
(2, 'خدمه1'),
(4, 'خدمه2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `UName` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `open` tinyint(1) NOT NULL DEFAULT 1,
  `d_login` datetime NOT NULL,
  `d_reg` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `UName`, `pass`, `open`, `d_login`, `d_reg`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '2023-02-24 10:10:00', '2023-02-23 14:59:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `connect`
--
ALTER TABLE `connect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_web`
--
ALTER TABLE `info_web`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
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
-- AUTO_INCREMENT for table `connect`
--
ALTER TABLE `connect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `info_web`
--
ALTER TABLE `info_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
