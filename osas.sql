-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2019 at 05:30 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`, `image`, `dat`) VALUES
(6, 'LPG', '1772357240lpg.png', '2019-05-01 05:48:24'),
(7, 'Water Supply', '2119152527water-suply.png', '2019-05-01 05:48:43'),
(8, 'Vegetables', '1058555730Vegetable.png', '2019-05-01 05:49:02'),
(9, 'Restaurant', '692277921Indian-Food-PNG-Pic.png', '2019-05-01 05:49:29'),
(10, 'Electricity', '1793282341Electricity.png', '2019-05-01 05:49:51'),
(11, 'Groceries ', '802076610350.png', '2019-05-01 05:50:14'),
(12, 'Plumber ', '490575174plumber.png', '2019-05-01 05:50:29'),
(13, 'Medical Services', '686364104medicine-logo-png-1.png', '2019-05-01 05:50:42'),
(14, 'LIVE FOOD COURT', '925994836download.jpg', '2019-05-01 06:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `mode` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `invice` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `pmode` varchar(255) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `name`, `email`, `mobile`, `city`, `country`, `mode`, `address`, `invice`, `status`, `pmode`, `dat`) VALUES
(1, 'Sanju Mishra', 'sanjumishra07@gmail.com', '7070095108', 'Ranchi', 'India', 'Home', 'Shahdeo nagar, hehal, Near otc ground', 'inv1892276911', 'pending', 'COD', '2018-09-22 03:03:02'),
(2, 'Mayank Kumar', 'mayank8434@gmail.com', '8434511978', 'Ranchi', 'India', 'Home', 'Sukhdev nager, Pahari Mandir,ranchi', 'inv505754243', 'pending', 'COD', '2018-09-23 13:08:37'),
(3, 'Mayank Kumar', 'mayank8434@gmail.com', '8434511978', 'Rajrappa project', 'India', 'Home', 'MDS-17/129, Hospital colony,rajrappa project', 'inv156092566', 'pending', 'COD', '2018-09-25 02:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `email`, `dat`) VALUES
(8, 'akashkumarjaiswal9889@gmail.com', '2019-04-19 06:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `email`, `mobile`, `password`, `cpassword`, `dat`) VALUES
(1, 'AKASH KUMAR JAISWAL', 'akashkumarjaiswal9889@gmail.com', '9621176062', '123', '123', '2019-04-19 05:49:36');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `name`, `title`, `des`, `image`, `dat`) VALUES
(2, 'ffaaf', 'ddaf', 'fa', '442368944prashant.JPG', '2019-04-19 06:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `weight` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `oprice` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `title`, `descr`, `image`, `dat`, `weight`, `price`, `oprice`) VALUES
(10, 'LPG', 'HP', 'Instant gas connection, quick refill and prompt service are what SUPERGAS offers. ... Provide photo identity and address proof, get a new LPG connection delivered within 24 hours. ... *12 kg cylinder price, inclusive of all taxes & duties.', '174247800lpg1.png', '2019-05-01 06:17:05', '14.6', 800, 850),
(11, 'LPG', 'Hindustan', 'Instant gas connection, quick refill and prompt service are what SUPERGAS offers. ... Provide photo identity and address proof, get a new LPG connection delivered within 24 hours. ... *12 kg cylinder price, inclusive of all taxes & duties.', '343303552lpg1.png', '2019-05-01 06:17:39', '14.6', 800, 825),
(12, 'LPG', 'Bharat', 'Instant gas connection, quick refill and prompt service are what SUPERGAS offers. ... Provide photo identity and address proof, get a new LPG connection delivered within 24 hours. ... *12 kg cylinder price, inclusive of all taxes & duties.', '1861793660lpg1.png', '2019-05-01 06:18:11', '14.6', 810, 825),
(15, 'Water Supply', 'Kent', '', '162465387water-suply1.png', '2019-05-01 06:21:11', '10', 20, 25),
(16, 'Water Supply', 'Aqua Gaurd', '', '1985979947water-suply1.png', '2019-05-01 06:21:45', '10', 15, 20),
(17, 'Water Supply', 'Filter', '', '1577616573water-suply1.png', '2019-05-01 06:22:07', '10', 10, 15),
(18, 'Vegetables', 'Potato', '', '228568518potato.jpg', '2019-05-01 06:25:46', '1 Kg', 10, 12),
(19, 'Vegetables', 'Onion', '', '1916186432Red-Onion-PNG-Clipart.png', '2019-05-01 06:28:21', '1 Kg', 18, 20),
(20, 'Vegetables', 'Tomato', '', '1422735342tomato.jpg', '2019-05-01 06:31:45', '1 Kg', 8, 10),
(21, 'Medical Services', 'DR. BATRA', 'Specialisation in Fever', '1331153966medicine-logo-png-1.png', '2019-05-01 06:43:12', '.', 1000, 1200),
(22, 'Medical Services', 'DR. P.K. JAIN', 'Specialised in Mental Diseases  ', '808576722medicine-logo-png-1.png', '2019-05-01 06:45:40', '.', 800, 1000),
(23, 'Medical Services', 'DR. KUMAR', 'BABY Doctor', '2146018573medicine-logo-png-1.png', '2019-05-01 06:47:18', '.', 500, 700),
(24, 'Plumber', 'Call A Plumber', 'Repairing of every pipes and pumps etc', '636445235plumber.png', '2019-05-01 06:48:44', '.', 250, 300),
(25, 'Electricity', 'Call a Electrician ', 'Repairing and fitting of every electricity problem', '1426235982Electricity.png', '2019-05-01 06:50:38', '.', 300, 350),
(26, 'Groceries', 'Order Any Groceries', 'Order Any Groceries By uploading List', '620323486350.png', '2019-05-01 06:52:55', '.', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tempcart`
--

CREATE TABLE `tempcart` (
  `id` int(11) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `buy` int(11) NOT NULL DEFAULT '0',
  `invice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempcart`
--

INSERT INTO `tempcart` (`id`, `sid`, `pid`, `quantity`, `buy`, `invice`) VALUES
(1, 'b07f0bfbf1207f83432f4b1f69f15ac7', '31', 1, 0, 'inv476903032'),
(2, 'f7ba53a09687b57a65bd4648c12a490d', '55', 1, 0, 'inv526597702'),
(3, '05cca7f02a4dc9f2cea6478de701fc4b', '35', 1, 0, 'inv917809933'),
(4, '3693c5452637bb3acf077fb5ea95654a', '47', 1, 0, 'inv1345495286'),
(5, '13dcef232c255cdc991b7cbae3a17ac8', '17', 1, 0, 'inv623058090'),
(6, 'bbfdad03a9a9cd31de73f2b3cdb05208', '34', 2, 0, 'inv761610468'),
(7, 'bbfdad03a9a9cd31de73f2b3cdb05208', '33', 1, 0, 'inv2037819232'),
(8, '8467e9a63579c8b5acb41961487f2ad9', '34', 1, 0, 'inv549491619'),
(9, '391cd6b6c696dc9a4fcc88e9637e39f1', '36', 2, 1, 'inv1892276911'),
(10, '391cd6b6c696dc9a4fcc88e9637e39f1', '34', 3, 1, 'inv1892276911'),
(11, '391cd6b6c696dc9a4fcc88e9637e39f1', '33', 1, 1, 'inv1892276911'),
(12, '391cd6b6c696dc9a4fcc88e9637e39f1', '47', 1, 1, 'inv1892276911'),
(17, '590bbd5e42f94fc344961ebb9115717a', 'ecom542340875', 1, 0, 'inv1601416142'),
(18, 'fb21dddbb95c6ae6f1ce8fd60cbd3b8b', 'ecom1742062557', 1, 0, 'inv38045762'),
(19, 'fa3519f9dfdcde0dc4309f54b2f8d5c3', '34', 1, 0, 'inv2028037117'),
(20, 'fa3519f9dfdcde0dc4309f54b2f8d5c3', '47', 1, 0, 'inv140497113'),
(21, '465c1dc5a41a5b9995c600749829011d', '27', 1, 0, 'inv1661430458'),
(22, 'a0f41418ed87f7fdacc26408d94dcbf0', '36', 1, 0, 'inv2111062996'),
(23, 'b78bcc8bdbfc8132d17cc7c479a6efa1', '44', 1, 0, 'inv1657830437'),
(24, '391cd6b6c696dc9a4fcc88e9637e39f1', '36', 1, 0, 'inv102693995'),
(25, 'd0953be235bb25b9cf0a8ee2f92979c7', '43', 1, 0, 'inv925837414'),
(26, 'd610bf787d79684f1d3ba4d29738a029', '36', 2, 0, 'inv172808834'),
(27, 'd610bf787d79684f1d3ba4d29738a029', '34', 1, 0, 'inv120968367'),
(28, '4000fcba41688ea0bbd3ca5eede44532', 'ecom396128405', 1, 0, 'inv1719558758'),
(29, '02760e5bf3652f2fb910f68af701dfc7', '48', 1, 0, 'inv2100335852'),
(30, '41e53b0915bb52a622b7302a0006e8ac', 'ecom424836288', 1, 0, 'inv342245572'),
(35, '6a92f1be87c6ea254171d67d959f0394', '62', 1, 0, 'inv129394934'),
(36, '2cb8c5e766d7194a5305da579014f592', '35', 1, 0, 'inv995860698'),
(37, '58f1e00f96d3e1ac8254169c49d56b47', '19', 1, 0, 'inv798247263'),
(38, 'c2b6bc2a453f78dc1e36513cdf685159', '21', 1, 0, 'inv1012008183'),
(39, '026e60f32e1a2a039c32c816cf89a19f', '45', 1, 0, 'inv930418842'),
(40, 'c046dcf76ada16a5a79746fd1b194603', '61', 1, 0, 'inv958989931'),
(41, '41f1c38885f200528f18e78cf50e15d4', 'ecom893361298', 1, 0, 'inv648242987'),
(42, '4b58f66bb96fefec99575e2860b7efe1', '23', 1, 0, 'inv2068750694'),
(43, '2913da36188f259eaaaa09fd24508e50', 'ecom5637561', 1, 0, 'inv1356432044'),
(44, 'f1785064f0753a7b3be7ad0b1c0ed76c', '45', 1, 0, 'inv1859078303'),
(45, 'f1785064f0753a7b3be7ad0b1c0ed76c', '31', 1, 0, 'inv1528864427'),
(46, 'f1785064f0753a7b3be7ad0b1c0ed76c', '44', 1, 0, 'inv1535266586'),
(47, '499a7c44b375c16676dda28936c1bae9', '65', 1, 0, 'inv2013075463'),
(48, '7c2cb62771f5e17e3e28299350c7907f', 'ecom583627503', 1, 0, 'inv1546460599'),
(49, 'c8de51c8a6736dd1a0ad8b97b4a279cd', 'ecom340411483', 1, 0, 'inv2024284722'),
(50, 'd6d345286d023de50ce783d063d45007', '30', 1, 1, 'inv505754243'),
(51, 'd6d345286d023de50ce783d063d45007', '27', 1, 1, 'inv505754243'),
(52, 'bdcc7e6f4a637799f9968f1d3305e5f5', '64', 1, 0, 'inv1176603083'),
(53, 'ffb1adc0dacc9630e7bb002c42e3de06', '45', 1, 0, 'inv1917000260'),
(54, 'ee3fd8359ab43755175d20d24718a69e', '61', 1, 0, 'inv2049109629'),
(55, '6b9869db623d3d81da2d3ee6072fe9ea', '27', 1, 0, 'inv489719717'),
(56, '0dfe9d7113c8d68920b0b59fabcc3064', '46', 1, 0, 'inv962506520'),
(57, '6e2cf3bded5e6b388b9b3e85d506aba9', '55', 1, 0, 'inv42068343'),
(58, 'f1bd30319f6f25c6a13bcde76ebbede8', 'ecom200607773', 1, 0, 'inv41072817'),
(59, '8260ffceaf3a6e44d4297e92ae5c2667', '18', 1, 0, 'inv294270254'),
(60, '4725543846a420b70115c9286370ed3e', '56', 1, 0, 'inv789864231'),
(61, 'c50ccb45817458965a80017f549b7a68', '52', 1, 0, 'inv661371438'),
(62, 'e0b3c6d6ce78261f90b55833c7d293c6', 'ecom767031144', 1, 0, 'inv704829752'),
(63, '227dafe77d51f807a9fbf0bd816c427e', '45', 1, 0, 'inv1382024717'),
(64, '4a9af69392a63bf2c2425b60cc66424b', '25', 1, 0, 'inv1962424475'),
(65, 'd25be3792e7f3f8a130c35fd52435a0e', 'ecom2115942737', 1, 0, 'inv1344447644'),
(66, '4063edc3ac2832ca594cd1e9a23a53c2', '33', 1, 0, 'inv640605564'),
(67, '8960d3af78378ba048c2e3cf87dea5ad', '31', 1, 0, 'inv1882050839'),
(68, '2642750c61f0bad0e24571f30281275f', '61', 1, 0, 'inv615865789'),
(69, '0bd5940cfde0e515248f2fbdb3656c23', '62', 1, 0, 'inv2137345648'),
(70, '146e1f6cb6f99706a455d53af43092ea', '64', 1, 0, 'inv342407324'),
(71, '9e884141360dc027afe2272c986de3c0', '65', 1, 0, 'inv1053368763'),
(72, '30f61f8dcf55cba54056ff857f4a03fc', '61', 1, 0, 'inv1661727775'),
(73, '8d36b8ea01cabdb7f149a4268491e2d4', '62', 1, 0, 'inv322835799'),
(74, 'd4d4410c9f7704bb0c2f295a5063543d', '64', 1, 0, 'inv294585555'),
(75, '8246323e0a9a9ef014c4f7e7715955f9', '65', 1, 0, 'inv1518113247'),
(76, '10be8a6bf3a24f49181fce1b52a27258', '20', 1, 0, 'inv6498495'),
(77, 'bbc310f3c2ec23ebd2833f3b3545b585', '22', 1, 0, 'inv1359896946'),
(78, 'aadf8d3e0723250ff13c8427df213aa3', 'ecom1562758082', 1, 0, 'inv1998284915'),
(79, '40c13db1da542d0e5dc991f09786822e', '25', 1, 0, 'inv538318402'),
(80, '8bbf33f934dc170ebc8720922a0be6b7', '26', 1, 0, 'inv1303512685'),
(81, '796b0e7e5ec45c39f190430fa0bb328c', '25', 1, 0, 'inv1795291175'),
(82, '077490f5481dec371bb91ebb65339ae5', '26', 1, 0, 'inv286133565'),
(83, '29bac37949f7dc0a7505d227ad95bdc2', '28', 1, 0, 'inv1441426125'),
(84, 'cf20218a6eb2ac11ecd286bd6f9afb2b', '49', 1, 0, 'inv2034951850'),
(85, 'b463bb87cbd50a454e1e56ee4d8e85f3', '59', 1, 0, 'inv1657177353'),
(86, '0dddeeda140000305d9bbbc87bf547d2', '58', 1, 0, 'inv907964915'),
(87, 'd8fbad2dd03beb35f7230cd70e8c209d', '30', 1, 0, 'inv469854442'),
(88, '86daee6a922e88bc13ef1073a1efec78', '45', 1, 0, 'inv501436939'),
(89, '89a9313d4fea886f8e3010405512f735', '25', 1, 0, 'inv1627715217'),
(90, '746aa29198ec32e6208bef25276d7a23', '41', 1, 0, 'inv732226379'),
(91, '5be526d44ff88efb46a65405a93a9a9e', '45', 1, 1, 'inv156092566'),
(92, '5be526d44ff88efb46a65405a93a9a9e', '30', 1, 1, 'inv156092566'),
(93, '5be526d44ff88efb46a65405a93a9a9e', '65', 1, 1, 'inv156092566'),
(94, 'ce7e083464c68fd42d371f7676b800fe', '44', 1, 0, 'inv1079312807'),
(95, '502ecb43e3eb98741d4b9d465e565d33', 'ecom509970077', 1, 0, 'inv1940902154'),
(96, 'b6b0a5c24f19b1e0ae07de4ce4f98f84', 'ecom331915815', 1, 0, 'inv107390370'),
(97, '571b421a3fcde137220db981e90bfd37', '62', 1, 0, 'inv943074367'),
(98, '1eca43885d78516b7c3833dcab7624b8', 'ecom1809845435', 1, 0, 'inv972348328'),
(99, 'b155fbc4fb8f8687a1d0fc65a9d29c5b', 'ecom2082864659', 1, 0, 'inv392475366'),
(100, '996d29f8142c4cb18ee3b170a31cd217', '57', 1, 0, 'inv661563345'),
(101, 'fec77b86f6c136949f90614348d522f3', '42', 1, 0, 'inv874430620'),
(102, '1a6bb36f03ada3db6ea9fde45234d5cc', '28', 1, 0, 'inv1383365677'),
(103, '97328423c5ee8eaf6da094059f196c4c', '35', 1, 0, 'inv1691834468'),
(104, 'b3a7394d45c8301b23f13fafa8db1929', '26', 1, 0, 'inv1020758470'),
(105, 'e0d85b675e31612a260f380120429ed9', '54', 1, 0, 'inv876218229'),
(106, '237b9a34f1c5640d48a2377d8fea0553', '32', 1, 0, 'inv819783171'),
(107, '882d6fb363a9ba6c9e9ca4a92a90c63b', '34', 1, 0, 'inv492783974'),
(108, '2615cf7a3f789983b7d926693a0235fe', '36', 1, 0, 'inv240227917'),
(109, 'f2b6ca97f03bc384880e05f718530750', '43', 1, 0, 'inv1809541438'),
(110, '2759eb1b2be105d8da903df576a75db5', '50', 1, 0, 'inv1454816085'),
(111, '308e0a63554b726de976613bdc03c1ea', '48', 1, 0, 'inv1791837818'),
(112, 'd3a1f643bfe4dbef057a99086d8333f0', '47', 1, 0, 'inv1333344049'),
(113, 'eb8daa227adeced4a78bbd15a65a33ac', '31', 1, 0, 'inv2108898272'),
(114, 'eb8daa227adeced4a78bbd15a65a33ac', '27', 1, 0, 'inv1991282938'),
(115, '6ca74cabf5665a1ad6f57ae991236eb6', '60', 1, 0, 'inv1849392734'),
(116, '35b9d5dec95a678dd708095994719637', '35', 1, 0, 'inv353403122'),
(117, '30ecc9bcc7c7d65b3705537cd78cfc4d', '50', 1, 0, 'inv1379439413'),
(118, '30ecc9bcc7c7d65b3705537cd78cfc4d', '54', 1, 0, 'inv661781798'),
(119, '30ecc9bcc7c7d65b3705537cd78cfc4d', '55', 1, 0, 'inv1361135860'),
(120, '30ecc9bcc7c7d65b3705537cd78cfc4d', '52', 1, 0, 'inv875813618'),
(121, '30ecc9bcc7c7d65b3705537cd78cfc4d', '58', 1, 0, 'inv339706445'),
(122, '30ecc9bcc7c7d65b3705537cd78cfc4d', '59', 1, 0, 'inv1814255251'),
(123, '30ecc9bcc7c7d65b3705537cd78cfc4d', '56', 1, 0, 'inv962990878'),
(124, '30ecc9bcc7c7d65b3705537cd78cfc4d', '57', 1, 0, 'inv1718330487'),
(125, '30ecc9bcc7c7d65b3705537cd78cfc4d', '', 1, 0, 'inv298455880'),
(126, '30ecc9bcc7c7d65b3705537cd78cfc4d', '49', 1, 0, 'inv899981399'),
(127, '30ecc9bcc7c7d65b3705537cd78cfc4d', '43', 1, 0, 'inv1937409905'),
(128, '30ecc9bcc7c7d65b3705537cd78cfc4d', '44', 1, 0, 'inv1702840404'),
(129, '30ecc9bcc7c7d65b3705537cd78cfc4d', '41', 1, 0, 'inv253643737'),
(130, '30ecc9bcc7c7d65b3705537cd78cfc4d', '42', 1, 0, 'inv1651735644'),
(131, '30ecc9bcc7c7d65b3705537cd78cfc4d', '47', 1, 0, 'inv46000435'),
(132, '30ecc9bcc7c7d65b3705537cd78cfc4d', '48', 1, 0, 'inv220218596'),
(133, '30ecc9bcc7c7d65b3705537cd78cfc4d', '45', 1, 0, 'inv369112479'),
(134, '30ecc9bcc7c7d65b3705537cd78cfc4d', '46', 1, 0, 'inv1664703615'),
(135, '30ecc9bcc7c7d65b3705537cd78cfc4d', '32', 1, 0, 'inv90154731'),
(136, '30ecc9bcc7c7d65b3705537cd78cfc4d', '33', 1, 0, 'inv1761070738'),
(137, '30ecc9bcc7c7d65b3705537cd78cfc4d', '30', 1, 0, 'inv221435850'),
(138, '30ecc9bcc7c7d65b3705537cd78cfc4d', '31', 1, 0, 'inv1697759242'),
(139, '30ecc9bcc7c7d65b3705537cd78cfc4d', '36', 1, 0, 'inv990226641'),
(140, '30ecc9bcc7c7d65b3705537cd78cfc4d', '34', 1, 0, 'inv1849707247'),
(141, '30ecc9bcc7c7d65b3705537cd78cfc4d', '35', 1, 0, 'inv131790317'),
(142, '30ecc9bcc7c7d65b3705537cd78cfc4d', '27', 1, 0, 'inv1070418608'),
(143, '30ecc9bcc7c7d65b3705537cd78cfc4d', '28', 1, 0, 'inv258595959'),
(144, '30ecc9bcc7c7d65b3705537cd78cfc4d', '25', 1, 0, 'inv985983656'),
(145, '30ecc9bcc7c7d65b3705537cd78cfc4d', '26', 1, 0, 'inv1529716916'),
(146, '30ecc9bcc7c7d65b3705537cd78cfc4d', '61', 1, 0, 'inv1517691520'),
(147, '30ecc9bcc7c7d65b3705537cd78cfc4d', '62', 1, 0, 'inv1800150189'),
(148, '30ecc9bcc7c7d65b3705537cd78cfc4d', '60', 1, 0, 'inv942314362'),
(149, '30ecc9bcc7c7d65b3705537cd78cfc4d', '65', 1, 0, 'inv1840719351'),
(150, '30ecc9bcc7c7d65b3705537cd78cfc4d', '64', 1, 0, 'inv2073060316'),
(151, '3d7af6d13d1d81d8460cd579550fdb30', '61', 1, 0, 'inv248176854'),
(152, '405f067be155874379e256720aa5f3c2', '65', 1, 0, 'inv1650663149'),
(153, '4bf0fb798ef6144282f9398071ea9ada', '58', 1, 0, 'inv1514749682'),
(154, '4bf0fb798ef6144282f9398071ea9ada', '45', 1, 0, 'inv451419089'),
(155, '4bf0fb798ef6144282f9398071ea9ada', '27', 1, 0, 'inv851182178'),
(156, '4bf0fb798ef6144282f9398071ea9ada', '34', 1, 0, 'inv1022799733'),
(157, 'bfa6b3cb20795800f6e9a1313e3cbb9c', '43', 1, 0, 'inv371362769'),
(158, '69a0ec67e9f6761300d3169438f9118f', '31', 1, 0, 'inv1444031885'),
(159, 'a9f4e13016e1d11e84564e70740d1834', '26', 1, 0, 'inv733145421'),
(160, '44fb4ff55f739892137c5d86ace9b53d', '27', 1, 0, 'inv1735491939'),
(161, 'd2cfa9aa747dae521c5db09209f9ac3d', '45', 1, 0, 'inv934254030'),
(162, '201e9975262465a549509d5f6cdf5d5c', 'ecom374115915', 1, 0, 'inv1044872201'),
(163, '66d0302693ec0520e27baba9218e3b02', '26', 1, 0, 'inv1269209216'),
(164, 'c3b00d42956c437c2a2b41966af3cb57', '62', 1, 0, 'inv628106207'),
(165, '25c88b502918b81d83ac3e3036c9163f', '60', 1, 0, 'inv1960718771'),
(166, 'ada9b23ed1039bcd62a79bf7bf287eb8', '61', 1, 0, 'inv1133687509'),
(167, 'dca532b4e238c0cd9fa086fec4727409', '64', 1, 0, 'inv602086898'),
(168, 'd15b2961d5d2c1fcc95981868f23b1be', '59', 1, 0, 'inv1310557887'),
(169, 'f5ec50c91c71b4cdf35c1c2c27f2bd6d', '41', 1, 0, 'inv101166771'),
(170, '237b70478ed7539e8fa81ffc342d52d9', '64', 1, 0, 'inv1725239248'),
(171, '02afda46653ac167011724700351fc06', '45', 1, 0, 'inv275597484'),
(172, '02afda46653ac167011724700351fc06', '30', 2, 0, 'inv1656876867'),
(173, '02afda46653ac167011724700351fc06', '33', 1, 0, 'inv75897072'),
(174, '02afda46653ac167011724700351fc06', '47', 1, 0, 'inv1630424609'),
(175, '02afda46653ac167011724700351fc06', '62', 1, 0, 'inv1424669845'),
(176, '02afda46653ac167011724700351fc06', '55', 1, 0, 'inv1001708757'),
(177, '02afda46653ac167011724700351fc06', '54', 1, 0, 'inv685993653'),
(178, '02afda46653ac167011724700351fc06', '52', 1, 0, 'inv800583743'),
(179, '02afda46653ac167011724700351fc06', '58', 1, 0, 'inv172761031'),
(180, '02afda46653ac167011724700351fc06', '59', 1, 0, 'inv1809053237'),
(181, '02afda46653ac167011724700351fc06', '46', 1, 0, 'inv303442218'),
(182, '02afda46653ac167011724700351fc06', '43', 1, 0, 'inv37809446'),
(183, '02afda46653ac167011724700351fc06', '42', 1, 0, 'inv1321022195'),
(184, '02afda46653ac167011724700351fc06', '32', 1, 0, 'inv380858799'),
(185, '5090eb93fc44afb81497256d62737969', '59', 1, 0, 'inv1130674896'),
(186, 'd92cf165a8adbce01d331baee2ec78de', '52', 1, 0, 'inv1495799462'),
(187, '5ceb0493121c9e234bd060ab744e3def', '45', 1, 0, 'inv1818963513'),
(188, '5ceb0493121c9e234bd060ab744e3def', '31', 1, 0, 'inv870246544');

-- --------------------------------------------------------

--
-- Table structure for table `upd`
--

CREATE TABLE `upd` (
  `pid` varchar(255) NOT NULL,
  `invice` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `descr` varchar(1000) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cname` (`cname`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invice` (`invice`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempcart`
--
ALTER TABLE `tempcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tempcart`
--
ALTER TABLE `tempcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
