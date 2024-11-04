-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Nov 04, 2024 at 04:14 AM
-- Server version: 5.7.44
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furnituredb`
--
CREATE DATABASE IF NOT EXISTS `furnituredb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci;
USE `furnituredb`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `age` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `img` text COLLATE utf8mb4_persian_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `age`, `img`, `username`, `password`) VALUES
(1, 'پوریا', 'بک اند', '22', 'http://localhost:8080/thumb/images.jpg', 'pori', 'pori1234');

-- --------------------------------------------------------

--
-- Table structure for table `bottonads`
--

CREATE TABLE `bottonads` (
  `id` int(11) NOT NULL,
  `src` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `link` varchar(300) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `link` varchar(500) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `link`) VALUES
(8, 'خانه ', 'http://localhost:8080/index.php'),
(9, 'گوگل', 'https://google.com');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `src` varchar(200) COLLATE utf8mb4_persian_ci NOT NULL,
  `content` text COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `src`, `content`) VALUES
(6, 'مبل راحتی جانا', 'http://localhost:8080/thumb/khryd-mbl-rahty.jpg', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.'),
(7, 'مبل راحتی 7 نفره مدل جولی', 'http://localhost:8080/thumb/moblPost2.jpg', 'مبل راحتی 7 نفره مدل جولی کد 0555 بهترین متریال موجود در بازار اسفنج ۳۵ کیلویی چوب روسی صنوبر اسفنج بدنه ۳۰ کیلویی ۲۴ ماه ضمانت قیمت ها با پارچه ایرانی محاسبه شده و پارچه خارجی افزایش قیمت دارد'),
(8, 'مبل کلاسیک مدل سلطنت', 'http://localhost:8080/thumb/saltanat-1.jpg', 'مبل کلاسیک مدل سلطنت یکی از محصولاتی است که با طراحی کلاسیک و شکیل خود، ظاهری زیبا و البته خاص را به فضای اطراف خواهد بخشید. طراحی زیبا، خاص و اما دوست داشتنی این مبل باعث ایجاد فضایی ایده‌آل و البته کلاسیک در منزل خواهد شد.\nلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.'),
(9, 'مبل راشل', 'http://localhost:8080/thumb/%D9%85%D8%A8%D9%84-%D8%B1%D8%A7%D8%AD%D8%AA%DB%8C-7-%D9%86%D9%81%D8%B1%D9%87-%D8%B1%D8%A7%D8%B4%D9%84-3.jpg', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `src` varchar(500) COLLATE utf8mb4_persian_ci NOT NULL,
  `title` varchar(300) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `src`, `title`) VALUES
(4, 'http://localhost:8080/thumb/furniture-opus-blinds-scene-armchair-blue-chair-charming-hd-wallpaper-142944089917.jpg', 'راحتی-مبل و-اسایش');

-- --------------------------------------------------------

--
-- Table structure for table `specialpost`
--

CREATE TABLE `specialpost` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `src` varchar(200) COLLATE utf8mb4_persian_ci NOT NULL,
  `content` text COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `specialpost`
--

INSERT INTO `specialpost` (`id`, `title`, `src`, `content`) VALUES
(1, 'عنوان واقعا ویژه', 'http://localhost:8080/thumb/wpid-Furniture-Wallpaper-7-tn.jpg', 'عنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا '),
(2, 'عنوان واقعا ویژه 33', 'http://localhost:8080/thumb/post3.jpg', 'عنوان واقعا ویژه 33 عنوان واقعا ویژه 33 عنوان واقعا ویژه 33 عنوان واقعا ویژه 33 عنوان واقعا ویژه 33 عنوان واقعا ویژه 33 عنوان واقعا ویژه 33 عنوان واقعا ویژه 33 '),
(3, 'عنوان واقعا ویژه', 'http://localhost:8080/thumb/wpid-Furniture-Wallpaper-7-tn.jpg', 'عنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ویژهعنوان واقعا ');

-- --------------------------------------------------------

--
-- Table structure for table `topads`
--

CREATE TABLE `topads` (
  `id` int(11) NOT NULL,
  `src` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `link` varchar(300) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `topads`
--

INSERT INTO `topads` (`id`, `src`, `link`) VALUES
(3, 'http://localhost:8080/thumb/1%20(2).gif', 'http://youtube.com'),
(4, 'http://localhost:8080/thumb/1%20(3).gif', 'http://varzesh3.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bottonads`
--
ALTER TABLE `bottonads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialpost`
--
ALTER TABLE `specialpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topads`
--
ALTER TABLE `topads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bottonads`
--
ALTER TABLE `bottonads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `specialpost`
--
ALTER TABLE `specialpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `topads`
--
ALTER TABLE `topads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
