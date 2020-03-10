-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 06:24 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `fullmark` int(11) NOT NULL,
  `theory` varchar(50) NOT NULL,
  `practical` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course`, `fullmark`, `theory`, `practical`, `grade`) VALUES
(1, 'comp. english', 100, '80', '20', '1,2,3,4,5,6,7,8,9,10'),
(2, 'comp. nepali', 100, '100', '0', '1,2,3,4,5,6,7,8,9,10'),
(3, 'comp. science', 100, '80', '20', '1,2,3,4,5,6,7,9,10'),
(4, 'computer', 100, '50', '50', '7,8,9,10'),
(5, 'health', 50, '30', '20', '1,2,3'),
(6, 'health and environment education', 100, '80', '20', '4,5,6,7,8,9,10');

-- --------------------------------------------------------

--
-- Table structure for table `graph`
--

CREATE TABLE `graph` (
  `id` int(11) NOT NULL,
  `addnum` varchar(11) NOT NULL,
  `examid` int(11) NOT NULL,
  `percent` float NOT NULL,
  `pass` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `graph`
--

INSERT INTO `graph` (`id`, `addnum`, `examid`, `percent`, `pass`) VALUES
(1, 'B22', 1, 96.5, 1),
(2, 'b22', 2, 33, 0);

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `id` int(5) NOT NULL,
  `guardianname` varchar(255) NOT NULL,
  `guardiannum` varchar(20) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `fathernum` varchar(20) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `mothernum` varchar(50) NOT NULL,
  `siblingname` varchar(50) NOT NULL,
  `paddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`id`, `guardianname`, `guardiannum`, `fathername`, `fathernum`, `mothername`, `mothernum`, `siblingname`, `paddress`) VALUES
(1, 'Nyima Lhamo Lama', '9842868786', 'Nildha Lama', '9845997590', 'Samden Lama', '9845997590', 'Phurbu Sangmo Lama', 'Lho, Nubri, Gorkha'),
(2, 'Chhimi Tsering Tamang', '9808522480', 'Nyima Wangdi Tamang', '9823198128', 'Dolma Tsering Tamang', '9823198128', '', 'Rasuwa'),
(3, 'Kancha Lama', '9861007724', 'Kancha Lama', '9861007724', 'Chhiring Dolma Lama', '9861007724', 'Kinjo Tsomo Lama', 'Sindhupalchok'),
(4, 'Kancha Lama', '9861007724', 'Kancha Lama', '9861007724', 'Chhiring Dolma Lama', '9861007724', 'Lhakpa Dolma Lama', 'Sindhupalchok'),
(5, 'Jaghat Bhadur Lama', '9808541504', 'Sonam Pemba Lama', '9840319625', 'Sunar Gurung', '9840319625', '', 'Lamjung'),
(6, 'Nyima Lhamo', '9803233404', 'Dorje Gyaltsen', '9803233404', 'Lhakpa Bhutti', '9803233404', '', 'Gorkha'),
(7, 'Tsewang Dhundup', '994640015', 'Tsewang Dhundup', '9846873017', 'Lhakpa Diki Lama', '9846873017', '', 'Gorkha'),
(8, 'Tashi Lama', '9808030991', 'Lhakpa Tsering Lama', '9899575232', 'Dolma Lama', '9899575232', '', 'Gorkha'),
(9, 'Dawa Sherpa', '9868194157', 'Dawa Sherpa', '9868194157', 'Kali Sherpa', '9868194157', '', 'Nuwakot'),
(10, 'Yangten Sherpa', '9813276829', 'Pasi Sherpa', '9818864421', 'Passang Khenddro ', '9818864421', '', 'Sindhupalchok'),
(11, 'Anita Gurung', '9803914119', 'Kumar K.C', '9860608838', 'Anita K.C', '9860608838', '', 'Manang'),
(12, 'Sukdev Nepali', '9808317412', 'Sukdev Nepali', '9808867654', 'Gahumati Nepali', '9808867654', '', 'Jetgau'),
(13, 'Tashi Lama', '9808030991', 'Mingmar Tamang', '9840433329', 'Dawa Bhuti Tamang', '9840433329', '', 'Shapruk'),
(14, 'Tsewang Dekyi', '9813796562', 'Khamsung Wangdu', '9826639760', 'Tseten Dekyi', '9826639760', '', 'Bhi, Nubri'),
(15, 'Dawa Angdi', '9803554500', 'Dawa Angdi', '9741424386', 'Guthi Lama', '9741424386', '', 'Gorkha, Tsum'),
(16, 'Choeying Dolma', '9808343979', 'Nyima Samdup Lama', '9863695524', 'Tsewang Dekyi Lama', '9863695524', '', 'Gorkha, Prok'),
(17, 'Ngadup Gyaltsen', '994640067', 'Ngadup Gyaltsen', '9746085939', 'Tsewang Bhutti', '9746085939', '', 'Gorkha, Samma'),
(18, 'Tsewang Rigzin', '9808343979', 'Tsewang Rigzin', '9860969554', 'Nyima Sangmo', '9860969554', '', 'Nubri, Prok'),
(19, 'Laxman Tamang', '9808766049', 'Mangale Tamang', '9808766049', 'Dolma Tamang', '9808766049', '', 'Sindupalchowk'),
(20, 'Karkap Sherpa', '9841886676', 'Karkap Sherpa', '9841886676', 'Sangye Omu Hyolmo', '9841886676', '', 'Nuwakot'),
(21, 'Mingmar Lama', '9803896248', 'Mingmar Lama', '9803896248', 'Sithar Tsewang Lama', '9803896248', '', 'Gorkha, Sho'),
(22, 'Karma Dawa Sherpa Hyolmo', '9843334430', 'Karma Dawa Sherpa Hyolmo', '9843334430', 'Maya Sherpa Hyolmo', '9843334430', '', 'Nuwakot'),
(23, 'Tashi Tsering ', '9808658871', 'Tashi Tsering ', '9808658871', 'Dawa Dolma ', '9808658871', '', 'Gorkha, Samto'),
(24, 'Mingmar Sherpa Hyolmo', '9849686466', 'Mingmar Sherpa Hyolmo', '9849686466', 'Chopema Sherpa Hyolmo', '9849686466', '', 'Nuwakot'),
(25, 'Nima Pemba Sherpa Hyolmo', '9841074327', 'Nima Pemba Sherpa Hyolmo', '9841074327', 'kanchi Maya Sherpa Hyolmo', '9841074327', '', 'Nuwakot'),
(26, 'Sumitra Buda  Magar', '9813751632', 'Lila Bahadur Buda', '9860783800', 'Sumitra Buda  Magar', '9860783800', '', 'Rukum'),
(27, 'Tsewang Dorje', '9818171018', 'Rigtsen Dorje', '9861148973', 'Sonam Choden', '9861148973', '', 'Gorkha, Prok'),
(28, 'Dolma Sherpa', '9841074327', 'Nima Pemba Sherpa Hyolmo', '9611036052', 'kanchi Maya Sherpa Hyolmo', '9611036052', '', 'Nuwakot'),
(29, 'Phul Maya', '9741345580', 'Dhundup Gurung', '9741518618', 'Maya Gurung', '9741518618', '', 'Bangshing'),
(30, 'Dhelu Magar  (Sherpa)', '9810191084', 'Pasang Sherpa', '9810191084', 'Dhelu Magar  (Sherpa)', '9810191084', '', 'Gorkha'),
(85, 'Ngodrup Gyaltsen', '9823801415', 'Chimik Rigzen Lama', '9803761132', 'Sangey Yangzin Lama', '9803761132', '', 'Gorkha, Prok'),
(86, 'Pema Dickey Lama', '9840513476', 'Nyima Dundup Lama', '9840513476', 'Pema Dickey Lama', '9803955289', '', 'Gorkha, Lho'),
(87, 'Yem Bahadur Gurung', '9846589662', 'Yem Bahadur Gurung', '9840238014', 'Dil Maya Gurung', '9840238014', '', 'Manang'),
(88, 'Gyurme Lama', '9803678229', 'Gyurme Lama', '9862380382', 'Chokey Lama', '9862380382', '', 'Gorkha, Nubri'),
(89, 'Tashi Samten', '994640025', 'Dawa Tenzin Lama', '9846845590', 'Lhachoe Dolma', '9846845590', '', 'Gorkha, Prok'),
(90, 'Tashi Lama', '9808030991', 'Phurbu Tamang', '9860939991', 'Passang Dolma Tamang', '9860939991', '', 'Rasuwa'),
(91, 'Tsewang Norbu Lama', '9818888646', 'Tsewang Norbu Lama', '9864650298', 'Rasal Choekyi ', '9864650298', '', 'Gorkha'),
(92, 'Rigtsen Namgyal Lama', '9808340430', 'Rigtsen Namgyal Lama', '9846845770', 'Tsering Ladon Lama', '9846845770', '', 'Gorkha'),
(93, 'Jigme Tsewang ', '9841499948', 'Chimik Rigzin Lama', '9864650036', 'Sangye Yangzom Lama', '9864650036', '', 'Gorkha'),
(94, 'Tenzin Phuntsok', '9808583676', 'Lobsang Phuntsok Lama', '9741514011', 'Choedon Lama ', '9741514011', '', 'Gorkha'),
(95, 'Karmu Lama Hyolmo', '9803165744', 'Dawa Chempel Lama', '9803871880', 'Karmu Lama', '9803871880', '', 'Hyolmo'),
(96, 'Bhim Bahadur Tamang', '9818655734', 'Bhim Bahadur Tamang', '9860839830', 'Maya Tamang', '9860839830', '', 'Nuwakot'),
(97, 'Ngudup Gyaltsen Lama', '9946400670', 'Ngudup Gyaltsen Lama', '9818854970', 'Tsewang Bhutti Lama', '9818854970', '', 'Gorkha'),
(98, 'Tsering Dolma', '9849041512', 'Wangdu Lama', '9849041512', 'Tashi Lama', '9849041512', '', 'Gorkha'),
(99, 'Pasang Gyalpo Lama', '9808174259', 'Pasang Gyalpo Lama', '9810394169', 'Maya Shamgpo Lama', '9810394169', '', 'Helambu'),
(100, 'karma Gyamtsho', '9745160599', 'karma Gyamtsho', '9745160609', 'Metok Lamo', '9745160609', '', 'Gorkha, Samma'),
(101, 'Tenzin Dorje Sherpa Hyolmo', '9808969045', 'Tenzin Dorje Sherpa Hyolmo', '9611015108', 'Lakh BuriSherpa Hyolmo', '9611015108', '', 'Nuwakot, Gaunkharka'),
(102, 'Sona Nepali', '9849995974', 'k', '9846784238', 'Sona Nepali', '9846784238', '', 'Sitapaila,KTM'),
(103, 'Phurba Jangbo Sherpa', '9803503100', 'Phurba Jangbo Sherpa', '9803503100', 'Kisang Sherpa', '9803503100', '', 'Helambu, Sindupalchowk'),
(104, 'Karjangmu Sherpa', '9849681466', 'Mingmar Sherpa ', '9611032403', 'Tso Pema Sherpa', '9611032403', '', 'Nuwakot'),
(105, 'Laxmi Bajracharya', '9808088540', 'Namgyal Sherpa', '9848810329', 'Pemba Sherpa', '9848810329', '', 'Tatopani, Sindupalchok'),
(106, 'Lal Bahadur Nath', '9843125387', 'Prem Nath Yogi', '9848932939', 'Parnata Yogi ', '9848932939', '', 'Majkot, Jajarkot'),
(107, 'Nilda Lama', '9741328659', 'Nilda Lama', '9846920880', 'Samten Lama', '9846920880', '', 'Nubri'),
(108, 'Karma Gyalpo Tamang', '9848395081', 'Urgen Tamang', '9866324505', 'Yangju Toma Tamang', '9866324505', '', 'Jumla'),
(109, 'Tenzin Norbu Lama', '9741503437', 'Tenzin Norbu Lama', '9741493901', 'Pasang Lhamo Lama', '9741493901', '', 'Nubri, Samagaun'),
(110, 'Yangzi Sherpa', '9818171604', 'Ang Tsering Sherpa', '9869063957', 'Ang Bhutti Sherpa', '9869063957', '', 'Solukhumbu'),
(111, 'Nima Doma Sherpa', '9861752621', 'Ang Tsering Sherpa', '9869063957', 'Ang Bhutti Sherpa', '9869063957', '', 'Solukhumbu'),
(112, 'Passang Dolma', '9808150596', 'Rigtsen Namgyal', '9861829621', 'Sonam Dickey', '9861829621', '', 'Gorkha'),
(113, 'Urgen Lama', '9803973906', 'Nyima Tseten Lama', '9803973906', 'Sonam Chonzom Lama', '9803973906', '', 'Gorkha'),
(114, 'Hisse lama hyolmo', '9803165744', 'Jimme Sherpa', '9803871880', 'Hisse Lama', '9803871880', '', 'Nuwakot'),
(115, 'Mentok Sangmo Lama', '9860455825', 'Chimi Dorjee Lama', '9860455825', 'Mentok Sangmo Lama', '9860455825', '', 'Gorkha'),
(116, 'Norbu Gyaltsen Lama', '9741394829', 'Norbu Gyaltsen Lama', '9746127376', 'Lhakpa Dickey Lama', '9746127376', '', 'Gorkha'),
(117, 'Lhakpa Norbu Lama', '9808364524', 'Lhakpa Norbu Lama', '9840409094', 'Tashi Sangmo', '9840409094', '', 'Gorkha'),
(118, 'Tsewang Lama', '9815178585', 'Orgen Tenzin Lama', '9863165927', 'Tsewang Sangmo Lama', '9863165927', '', 'Gorkha'),
(119, 'Tenzin Norbu Lama', '9741346476', 'Tenzin Norbu Lama', '9741346476', 'Passang Lhamo', '9741346476', '', 'Gorkha'),
(120, 'Jampa Tenthar', '9813015047', 'Tashi Lama', '9823342756', 'Sonam Dolma Lama', '9823342756', '', 'Gorkha'),
(121, 'Choeying Sangmo ', '9745001262', 'Tsering Yungdung', '9843191400', 'Tsering Sangmo', '9843191400', '', 'Gorkha'),
(122, 'Om Prasad', '9846455819', 'Ram Tamang', '9808323560', 'Kali Maya Tamang', '9808323560', '', 'Dhading'),
(123, 'Passang Gyalpo Lama', '9808174259', 'Passang Gyalpo Lama', '9810394169', 'Maya Shangpo Lama', '9810394169', '', 'Sindupalchowk'),
(124, 'Sona Nepali', '9849995974', 'C.B Khan', '9746051495', 'Sona Nepali', '9849995974', '', 'Manang'),
(125, 'Lopen Gyurme', '9741342434', 'Gyurme Lama', '9760666760', 'Tsering Khando', '9760666760', '', 'Gorkha'),
(126, 'Sonam Gyamtsho', '9841963439', 'Sonam Gyamtsho', '9841963439', 'Bhutti Lama', '9841963439', '', 'Gorkha'),
(127, 'Dawa Dolma', '9745025563', 'Sangye Dorje Lama', '9813055700', 'lp', '9813055700', '', 'Manang'),
(128, 'Dawa Phuntso Sherpa', '9803623024', 'Lhakpa Dorje Sherpa', '9808191464', 'Nymar Deckyi Sherpa', '9808191464', '', 'Nuwakot'),
(129, 'Lhakpa Dorje Sherpa', '9611036749', 'Karsang Dawa Sherpa', '9611036749', 'Bhutti Sherpa', '9611036749', '', 'Nuwakot'),
(130, 'Laxmi Bajracharya', '9808088540', 'Biuot Bajracharya', '9841247397', 'Ganga Tamang', '9841247397', '', 'Sindhupalchok'),
(131, 'Urgyen ', '9818426659', 'Nyima Dorje Lama', '9813999390', 'Lashi Angmu Lama', '9813999390', '', 'Mugu'),
(132, 'Urgyen', '9888184266', 'Karma Tsering Lama', '9888184266', 'Tsering Karma Lama', '9888184266', '', 'Mugu'),
(133, 'Sang Lhamu Sherpa', '9860646769', 'Karma Tsering Sherpa', '9860646769', 'Sang Lhamu Sherpa', '9860646769', '', 'Sindupalchowk'),
(134, 'Hishey Dolkar', '9810121997', 'Dorje Lama', '9746087276', 'Lhakpa Lama', '9746087276', '', 'Gorkha'),
(135, 'Hishey Dolkar', '9810121997', 'Dorje Lama', '9746087276', 'Lhakpa Lama', '9746087276', '', 'Gorkha'),
(136, 'Ang Doma Lama', '9860040870', 'Mingmar Lama', '9861496112', 'Ang Doma Lama', '9861496112', '', 'Sindhupalchok'),
(137, 'Passang Lama', '9823033355', 'Dorji Lama', '9823741014', 'Nari Lama', '9823741014', '', 'Dolpa'),
(138, 'Mingmar Samdup', '9813424484', 'Ngawang Lhundup Lama', '9818380214', 'Dawa Bhuti Lama', '9818380214', '', 'Gorkha'),
(139, 'Chhimi Lama', '9803324466', 'Chhimi Lama', '9741517134', 'Samden Lama', '9741517134', '', 'Gorkha'),
(141, 'Dorjee Lama ', '9840908451', 'Dorjee Lama', '9840908451', 'Tashi Cheten', '9840908451', '', 'Manang'),
(142, 'Tsering Lhadon', '9803361782', 'Kunsang Dhundup Lama', '9803361782', 'Tsering Lhadon ', '9803361782', '', 'Bihi'),
(143, 'Dawa Gyalpo Sherpa', '9803621275', 'Dawa Gyalpo Sherpa', '9864274267', 'Soni Maya Sherpa', '9864274267', '', 'Gang'),
(144, 'Lhamu Lama Hyolmo', '9841198850', 'Mingmar Lama', '9860049140', 'Dolma Lama', '9860049140', '', 'Kajay'),
(145, 'Nyima Gyaltsen', '9803615048', 'Tsewang Rigzin Lama', '9864243005', 'Woser Bhuti Lama', '9864243005', '', 'Prok'),
(146, 'Tsewang Norbu', '9808364524', 'Lhakpa Norbu', '9840409094', 'Tashi Lhamo', '9840409094', '', 'Lhi'),
(147, 'Choeying Dolma', '9808343979', 'Nima Sandup Lama', '9863695524', 'Chewang Diki Lama', '9863695524', '', 'Prok'),
(148, 'Tsewang Rigzin', '9808343979', 'Tsewang Rigzin', '9860969554', 'Nyima Sangmo', '9860969554', '', 'Prok'),
(149, 'Dawa Tenzin', '9741394736', 'Raju Lama', '9741394736', 'Tsewang Diki Lama', '9741394736', '', 'Nubri, Samagaun'),
(150, 'Tirtha Tamang', '9813370797', 'Tirtha Tamang', '9880110232', 'Sange Lahmu Tamang (Sherpa)', '9880110232', '', 'Atterkhel'),
(151, 'Tenzin Dorje', '9818191955', 'Tenzin Dorje', '9818191955', 'Nelha Sangmo', '9818191955', '', 'Bihi'),
(153, 'Nephew', '9862380072', 'Shenil Lama', '9862380072', 'Dolma Lama', '9862380072', '', 'Gorkha'),
(155, 'Nephew', '9862380072', 'Shenil Lama', '9862380072', 'Dolma Lama', '9862380072', '', 'Gorkha'),
(157, 'Phurbu Tsewang', '9808056564', 'Phurbu Gyaltsen Lama', '9860929757', 'Pasang Dolma Lama', '9860929757', '', 'Gorkha'),
(159, 'Rether Lama', '9849843506', 'Chodak Lama', '9849843506', 'Rether Lama', '9849843506', '', 'Gorkha'),
(160, 'Dechen Dolma Lama', '9803598073', 'Tsewang Gyurme', '9843882658', 'Dechen Dolma Lama', '9843882658', '', 'Gorkha'),
(161, 'Mangal Bahadur', '9846589937', 'Sadhlal Singh Nepali', '9846589937', 'Maya Bihr', '9846589937', '', 'Manang'),
(162, 'Karma Dhundup', '9860701781', 'Karma Dhundup', '9860701781', 'Yanki Gurung', '9860701781', '', 'Gorkha'),
(163, 'Tsering Phurpa Lama', '9818382265', 'Tsering Phurpa Lama', '9814137045', 'Tsewang Lama', '9814137045', '', 'Gorkha'),
(164, 'Tsering Dolma', '9741506833', 'Wangchuk Lama', '9865555156', 'Tashi Lama', '9865555156', '', 'Gorkha'),
(165, 'Hesi Dolkar Lama', '9810121997', 'Dorje Lama', '9846087276', 'Lhakpa Lama', '9846087276', '', 'Tsum'),
(166, 'Passang Lama', '9810379620', 'D eepak Buda Magar', '9810379620', 'Kamala Kumari Buda', '9810379620', '', 'Dolpa'),
(168, 'Passang Tempa Sherpa', '9849619513', 'Passang Tempa Sherpa', '9863332504', 'Pasang Lhamu Sherpa', '9863332504', '', 'Drum Thali'),
(169, 'Sabina Gurung', '9846921404', 'Nakpo Gurung', '9846921404', 'Kima Gurung', '9846921404', '', 'Gorkha'),
(171, 'Kalden Lama', '9813920398', 'Kalden Lama', '9813920398', 'Tsewang Sangmo Lama', '9813920398', '', 'Gorkha'),
(172, 'Pema Dickey Lama', '9803955289', 'Nyima Dhundup Lama', '9840513476', 'Pema Dickey Lama', '9840513476', '', 'Gorkha'),
(173, 'Sonam Gyaltsen Lama', '9803955289', 'Sonam Gyaltsen Lama', '9840513476', 'Tenzin Lama', '9840513476', '', 'Gorkha'),
(174, 'Kumar Lama', '9849621086', 'Kumar Lama', '9849843506', 'Tashi Chiten Lama', '9849843506', '', 'Manang'),
(175, 'Norbu Gyaltsen Lama', '9741318371', 'Norbu Gyaltsen Lama', '9849843506', 'Lhamo', '9849843506', '', 'Gorkha'),
(177, 'Gyephel', '9843746550', 'Wangdue Lama', '9861631813', 'Ngawang Choden Lama', '9861631813', '', 'Gorkha'),
(178, 'Lama Senka Sherpa', '9841548098', 'Lama Senka Sherpa', '9841088920', 'Yangzen Lhamu Sherpa', '9841088920', '', 'Nuwakot'),
(179, 'Tenzin Sherpa', '9841088920', 'Tenzin Sherpa', '9868194157', 'Mingmar Lhamu Sherpa', '9868194157', '', 'Nuwakot'),
(180, 'Passang Dorje', '9813464122', 'Passang Dorje', '9803361782', 'Tsewang Diki', '9803361782', '', 'Gorkha'),
(181, 'Tsewang Diki', '9813796562', 'Tsering Gurung', '9863801942', 'Pema Dickey ', '9863801942', '', 'Gorkha'),
(182, 'Chhimi Tsering Lama', '9746088262', 'Chhimi Tsering Lama', '9808023729', 'Lhamu Tsering', '9808023729', '', 'Gorkha'),
(183, 'Gyatso', '9803709590', 'Dawa Gyaltsen ', '9741489505', 'Tashi Sangmo', '9741489505', '', 'Gorkha'),
(184, 'Ngudup Lama', '9813796611', 'Ngudup Lama', '9813796611', 'Pomo Chhimi Lama', '9813796611', '', 'Gorkha'),
(185, 'Dawa Tenzin Lama', '9803353577', 'Dawa Tenzin Lama', '9843277637', 'Phurbu Lama', '9843277637', '', 'Gorkha'),
(186, 'Susmita Buda', '9813751632', 'Lila Bahadur Buda', '9805850577', 'Susmita Buda', '9805850577', '', 'Rukum'),
(187, 'Passang Dolma', '9818854970', 'Ngudup Lama', '9818854970', 'Tsewang Bhutti Lama', '9818854970', '', 'Gorkha'),
(188, 'Sonam Dorje', '9818353162', 'Sonam Dorje', '9860455825', 'Tashi Lhamu Lama', '9860455825', '', 'Gorkha'),
(190, 'Tashi Samten', '9843191400', 'Passang Dhundul Lama', '9843191400', 'Tashi Diki Lama', '9843191400', '', 'Gorkha'),
(191, 'Tseewang Norbu', '9862380072', 'Samdup', '9862380072', 'Phurbu Lama', '9862380072', '', 'Gorkha'),
(192, 'Tashi Bhutti Lama', '9741250609', 'Karma Samdup Lama', '9741250609', 'Tashi Bhutti Lama', '9741250609', '', 'Gorkha'),
(193, 'Tashi Dorje Lama', '9746037767', 'Tashi Dorje Lama', '9860819653', 'Pema Lhamo Lama', '9860819653', '', 'Gorkha'),
(194, 'Gyatso', '9803709590', 'Dawa Gyaltsen ', '9741489565', 'Tashi Sangmo', '9741489565', '', 'Gorkha'),
(195, 'Karma Choden Lama', '9813015047', 'Zampa Tender Lama', '9813015047', 'Karma Choden Lama', '9813015047', '', 'Gorkha'),
(196, 'Phuntso Lama', '9813088830', 'Renzo Lama', '9741429363', 'Tsering Bhutti Lama', '9741429363', '', 'Gorkha'),
(197, 'Pema Gyalmo Sherpa', '9813834998', 'Passang Gyalpo Sherpa', '9813834998', 'Phul Mya Sherpa', '9813834998', '', 'Nuwakot'),
(198, 'Karma Dawa Sherpa', '9843334430', 'Kar Dawa Sherpa', '9860356877', 'Maya Sherpa', '9860356877', '', 'Nuwakot'),
(199, 'Tashi Dolma', '9088030991', 'Tsering Gonbu Tamang', '9840433329', 'passang Bhutti Tamang', '', '', '9840433329'),
(200, 'Urgen Lhamo', '9841090321', 'Pemba Chirring Lama', '9741250609', 'Tsering Diki Lama', '9741250609', '', 'Gorkha'),
(201, 'Lhakpa Norbu Lama', '9741363647', 'Lhakpa Norbu Lama', '9741363647', 'Ngawang Lhamu Lama', '9741363647', '', 'Gorkha'),
(202, 'Passang Lhamu Sherpa', '9863838315', 'Pasang Temba Sherpa', '9863332504', 'Passang Lhamu Sherpa', '9863332504', '', 'Karthali'),
(203, 'Urgen Mingum Lama', '9818426659', 'Karma Tsering Lama', '9813349087', 'Tsering Lama', '9813349087', '', 'Mugu'),
(204, 'Jigme Thapa', '9849740051', 'Him Bahadur Buda', '9849740051', 'Jun Buda', '9849740051', '', 'Dolpa'),
(205, 'Karma Yangchen Lama', '9863367070', 'Gyalgen Tamang', '9869831694', 'Karma Yangchen Lama', '9863367070', '', 'Mugu'),
(206, 'Pema Tamang', '9803652163', 'Tenzin Lama', '9860501291', 'Setol Lama', '9860501291', '', 'Mugu'),
(207, 'Ghesang Tamang', '9866500292', 'Sonam Dami Lama Tamang', '9866500292', 'Pema Putik Tamang', '9866500292', '', 'Mugu'),
(208, 'sangmo Lama', '9868321847', 'Angdak Lama', '9803735513', 'Karma Angmo Lama', '9803735513', '', 'Mugu'),
(209, 'Rapten Tamang', '9849184797', 'Rapten Tamang', '9864893415', 'khado Tamang', '9864893415', '', 'Mugu'),
(210, 'Tsering Paljor Lama', '9741509986', 'Tsering Paljor Lama', '9741509986', 'Sonam Wangmo Lama', '9741509986', '', 'Gorkha'),
(211, 'Lakpa Dolma', '9841387584', 'Sonam Lama', '9862767926', 'Lakpa Dolma', '9862767926', '', 'Taplejung'),
(212, 'Rajan Khatri', '9741112103', 'Rajan Khatri', '9818699546', 'Telu Khatri', '9818699546', '', 'Dolpa'),
(213, 'Dawa Namgyal Lama', '9806277130', 'Dawa Namgyal Lama', '9806277130', 'Lhakpa Bhutti lama', '9806277130', '', 'Gorkha'),
(214, 'Tswering Wangdak Gurung', '9803998165', 'Tswering Wangdak Gurung', '9808522115', 'Sonam Bhutti Gurung', '9808522115', '', 'Gorkha'),
(215, 'Raju Lama', '9741394736', 'Raju Lama', '9741394736', 'Tsewang Diki Lama', '9741394736', '', 'Gorkha'),
(216, 'Mingyur Dorje Lama', '9803709590', 'Mingyur Dorje Lama', '9869762620', 'Bhuti Lama', '9869762620', '', 'Gorkha'),
(217, 'Gyaltsen Lama', '9846644410', 'Gyaltsen Lama', '9846644410', 'Sonam Bhuti Punel', '9846644410', '', 'Manang'),
(218, 'Ang Nyima Sherpa', '9741190409', 'Ang Nyima Sherpa', '9866558720', 'Maya Sherpa', '9866558720', '', 'Solukhumbu'),
(219, 'Samten Tharchen', '9841068110', 'Tashi Gyaltsen Lama', '9841068110', 'Diki Lama', '9841068110', '', 'Gorkha'),
(220, 'Nangpa Gyaltsen', '9808397424', 'Ngawang Gyaltsen Lama', '9860016469', 'Bhutti Lama', '9860016469', '', 'Gorkha'),
(221, 'Aape Lama', '9741421182', 'Aape Lama', '9741421182', 'Dawa Choenzom', '9741421182', '', 'Gorkha'),
(222, 'Lopen Gyaltsen', '9813708859', 'Phurpa Sherpa', '9866558720', 'Pasi Sherpa', '9866558720', '', 'Solukhumbu'),
(228, 'Ngawang Dechen', '9841258363', 'Dharmindra Adhikari', '9861002600', 'Tara Tamang', '9861002600', '', 'Jumla'),
(230, 'Psuntsok Lama', '9818945177', 'Psuntsok Lama', '9818945177', 'Sonam Tsekyi Lama', '9818945177', '', 'Gorkha'),
(231, 'Pasang Lhamu Sherpa', '9863838315', 'Pasang Temba Sherpa', '9863838315', 'Pasang Lhamu Sherpa', '9863838315', '', 'Sindhupalchok'),
(232, 'Sang Dolma Sherpa', '9808753664', 'Thilen Sherpa', '9863395984', 'Pem Sangmu Sherpa', '9863395984', '', 'Sindhupalchok'),
(233, 'Urken Minzom Tamang', '9818426659', 'Mohan Lal Roka Magar', '9813349087', 'pasang Toma Roka Magar', '9813349087', '', 'Mugu'),
(234, 'Pema Yeden', '9813284744', 'Tengyal Lama', '9868129016', 'Choeying Angmo Lama', '9868129016', '', 'Mugu'),
(235, 'Tashi Lama', '9808030991', 'Dawa Gambo Tamang', '9861573872', 'Chenga Dolma Tamang', '9861573872', '', 'Rasuwa'),
(236, 'Gambir Thapa', '9867368044', 'Gambir Thapa', '9840665056', 'Supari Thapa', '9840665056', '', 'Dolpa'),
(237, 'Tsering ', '9841797434', 'Sherap Gyamtso Tamang', '9868377935', 'Teshang Mendik Tamang', '9868377935', '', 'Mugu'),
(238, 'Tsering', '9841797434', 'Sherap Gyamtso Tamang', '9868377935', 'Teshang Mendik Tamang', '9868377935', '', 'Mugu'),
(239, 'Tsering Dolma Lama', '9869399051', 'Torchee Lama', '9869460570', 'Sangmu Lama', '9869460570', '', 'Mugu'),
(240, 'Tsering Lama', '9808487726', 'Samden Torchee Lama', '9860395132', 'Tsering Ghyalzom Lama', '9860395132', '', 'Mugu'),
(241, 'Mengzom Lama', '9843390187', 'Dorpa Tsering Lama', '9866550595', 'Pema Khando Lama', '9866550595', '', 'Mugu'),
(242, 'Tsering Norbu Tamang', '9818579272', 'Tsering Norbu Tamang', '9860395132', 'Nyima Phuti Tamang', '9860395132', '', 'Mugu'),
(243, 'Sang Dolma Sherpa', '9860583989', 'Thinlen Sherpa', '9863395984', 'Pem Sangmu Sherpa', '9863395984', '', 'Sindhupalchok'),
(244, 'Chomphel Tamang', '9868965584', 'Lhamdup Tamang', '9868965584', 'Yangzom Tamang', '9868965584', '', 'Mugu'),
(245, 'Nu Dolma Sherpa', '9840836742', 'Nima Tsering Lama', '9865705532', 'Nu Dolma Sherpa', '9865705532', '', 'Sindhupalchok'),
(246, 'Maha Sundar Devi', '9845270496', 'Birendra Mahato', '9845170708', 'Maha Sundar Devi', '9845170708', '', 'Rautahut'),
(247, 'Chautari Mahato', '9841186457', 'Hari Kishan Mahato Nuniya', '9826253213', 'Raj Kumari Devi', '9826253213', '', 'Rautahut'),
(248, 'Dhirjen Dorma Lama', '9803598073', 'Chhewang Germi Lama', '9843882658', ' Dhirjen Dorma Lama', '9843882658', '', 'Gorkha'),
(249, 'Phuntso Lama', '9813088830', 'Renzo Lama', '9741429363', 'Tsering Bhutti Lama', '9741429363', '', 'Gorkha'),
(250, 'Nyima Sangmo', '9818152419', 'Mingyur Dorje Lama', '9869762620', 'Bhuti Lama', '9869762620', '', 'Gorkha'),
(251, 'Nyima Chamu', '9813323383', 'Dawa Dorje Lama', '9813323383', 'Pema Lama', '9813323383', '', 'Gorkha'),
(252, 'Angmo Lama', '9848388895', 'Sonam Dorje Lama', '9868269806', 'Sonam Choekyi Lama ', '9868269806', '', 'Mugu'),
(253, 'Maya Gurung', '9810117045', 'Gyurmey Gurung', '9810117045', 'Maya Gurung', '9810117045', '', 'Manang'),
(254, 'Tsering Dolma', '9849041512', 'Lobsang Phuntsok Lama', '9849041512', 'Amu Choedon', '9849041512', '', 'Gorkha'),
(255, 'Dal Bahadur Gurung', '9741143210', 'Dal Bahadur Gurung', '9741143210', 'Laxmi Gurung', '9741143210', '', 'Gorkha'),
(256, 'Nata Tamang', '9818255462', 'Santa Bahadur Tamang', '9616390137', 'Sapana Tamang', '9616390137', '', 'Nuwakot'),
(257, 'Sangmu Sherpa', '9849471092', 'Pasang Temba Sherpa', '9843574668', 'Nha Bhutti Sherpa', '9843574668', '', 'Sindupalchowk'),
(258, 'Urken Minzom Tamang', '9818426659', 'Nima Dorje Lama', '9813536572', 'Lasi Angmo Lama', '9813536572', '', 'Mugu'),
(259, 'Tsering', '9841797434', 'Tsering Nurbu Tamang', '9864737685', 'Sopa Sangmu Lama', '9864737685', '', 'Mugu'),
(260, 'Sonam Youden', '9808065720', 'Dhundup Tamang', '9848342507', 'Tashi Yangzom Tamang', '9848342507', '', 'Mugu'),
(261, 'Sonam Youden', '9808065720', 'Sonam Dorje Tamang', '9868269806', 'Sonam Choekeyi Tamang', '9868269806', '', 'Mugu'),
(262, 'Lhaktu Sherpa', '9849591277', 'Phurba Sherpa', '9849591277', 'Maya Sherpa', '9849591277', '', 'Dolhakha'),
(263, 'Lhaktu Sherpa', '9849591277', 'Phurba Sherpa', '9849591277', 'Maya Sherpa', '9849591277', '', 'Dolhakha'),
(264, 'Pema Yenden', '9813284744', 'Pema Serap Tamang', '9869961649', 'Chungi Angmu', '9869961649', '', 'Mugu'),
(265, 'Pema Yenden', '9813284744', 'Karma Sonam Tamang', '9848388976', 'Pema Yangzom Tamang', '9848388976', '', 'Mugu'),
(266, 'Pema Yenden', '9813284744', 'Karma Sonam Tamang', '9848388976', 'Pema Yangzom Tamang', '9848388976', '', 'Mugu'),
(267, 'Pema Yenden', '9813284744', 'Namgyal Lama', '9868129016', 'Chugyang Angmu Tamang', '9868129016', '', 'Mugu'),
(268, 'Pema Yenden', '9813284744', 'Karma Chitup Tamang', '9840528123', 'Kangri Chum Tamang', '9840528123', '', 'Mugu'),
(269, 'Tsering Dolma Lama', '9869399051', 'Torchee Lama', '9869399051', 'Sangmu Lama', '9869399051', '', 'Mugu'),
(270, 'Choodheng Tamang', '9864979359', 'Choodheng Tamang', '9864979359', 'Karma Sangmu Tamang', '9864979359', '', 'Mugu'),
(271, 'Dawa Bhuti Sherpa', '9840404123', 'Dhundup Sherpa', '9840404123', 'Dawa Bhuti Sherpa', '9840404123', '', 'Ilam'),
(273, 'Dawa Angdi Lama', '9803554580', 'Dawa Angdi Lama', '9803554580', 'Futi Lama', '9803554580', '', 'Gorkha'),
(274, 'Ang Deckyi Sherpa ', '9841821268', 'Kunga Sherpa', '9841821268', 'Ang Deckyi Sherpa ', '9841821268', '', 'Dolakha'),
(275, 'Tashi Bhutti Lama', '9741502506', 'Karma Samdup Lama', '9741502506', 'Tashi Bhutti Lama', '9741502506', '', 'Gorkha'),
(276, 'Ape Lama', '1234567890', 'Ape Lama', '1234567890', 'Dawa Tsenzom Lama', '1234567890', '', 'Gorkha'),
(277, 'Passang Dolma', '9808150596', 'Rigtsen Namgyal', '9808150596', 'Sonam Dickey', '9808150596', '', 'Gorkha'),
(278, 'Tsering Chokyi Lama', '9808058023', 'Tenzin Namgyal Lama', '9808058023', 'Tsering Chokyi Lama', '9808058023', '', 'Manang'),
(279, 'Neyma Dorje Sherpa', '9818981698', 'Neyma Dorje Sherpa', '9818981698', 'Karmu Sherpa', '9818981698', '', 'Nuwakot'),
(280, 'Nima Tsering Tamang', '9808030991', 'Nima Tsering Tamang', '9840328613', 'Pemba Tamang', '9840328613', '', 'Rasuwa'),
(281, 'Lal Bahadur Tamang', '9741400446', 'Lal Bahadur Tamang', '9841400446', 'Sita Maya Tamang', '9841400446', '', 'Dolakha'),
(282, 'Tsering Chenzom', '9841797434', 'Lhakpa Tsering Lama', '9841797434', 'Pema Sangmu Lama', '9841797434', '', 'Mugu'),
(283, 'Tsering Chenzom', '9841797434', 'Lhakpa Tsering Lama', '9841797434', 'Pema Sangmu Tamang', '9841797434', '', 'Mugu'),
(284, 'Bhun Bahadur Buda', '9851033378', 'Bhun Bahadur Buda', '9748913089', 'Dhan Sahara Buda', '9748913089', '', 'Mugu'),
(285, 'Namgyal Sherpa', '9849795925', 'Lakpa  Tamang', '9829340769', 'Nima Dolma Tamang', '9829340769', '', 'Sindhupalchok'),
(286, 'Bhum Tsering Lama', '9862240139', 'Bhum Tsering Lama', '9848321896', 'Sonam Chonzom Lama', '9862240139', '', 'Mugu'),
(287, 'Tsering Chonzom Tamang Lama', '9860501291', 'Rin Norbu Tamang Lama', '9860501291', 'Tsering Chonzom Tamang Lama', '9860501291', '', 'Mugu'),
(288, 'Tsering Dolma Lama', '9869399905', 'Tsering Norbel Tamang', '9869399905', 'Sopa Sangmu Lama', '9869399905', '', 'Mugu'),
(291, 'Sonam Youden Tamang', '9860501291', 'Sonam Gurung Tamang', '9860501291', 'Tesang Lama', '9860501291', '', 'Mugu'),
(292, 'Pangen Tamang', '9805884524', 'Dawa Tamang', '9864979359', 'Medig Tamang', '9864979359', '', 'Mugu'),
(293, 'Pema Wngchuk Lama', '9840216081', 'Uttam Sagar Lama', '9840216081', 'Tenzin Lhamu Lama', '9840216081', '', 'Mugu'),
(294, ' Dorjee Tamang', '9868343717', 'Tashi Sangbho Lama', '9868343717', 'Lobsang Chodol Lama', '9868343717', '', 'Mugu'),
(295, 'Mengzom Lama', '9848322839', 'Konjok Gime Tamang', '9848322839', 'Sobha Sangmu Tamang', '9848322839', '', 'Mugu'),
(296, 'Mingyur Dorje Lama', '9860080621', 'Tsewang Rigzin Lama', '9864243005', 'Woser Bhuti Lama', '9864243005', '', 'Gorkha'),
(297, 'Namgyal Sherpa', '9616729019', 'Lakpa  Tamang', '9829340769', 'Nima Dolma Tamang', '9829340769', '', 'Sindhupalchok'),
(299, 'Sunrupee Buda Magar', '9813751632', 'Lila Bahadur Buda', '9813751632', 'Sumitra Buda', '9813751632', '', 'Rukum Balekhu'),
(300, 'Tsering', '9841797434', 'Tsering Norbel Tamang', '9841797434', 'Sopa Sangmu Lama', '9841797434', '', 'Mugu'),
(301, 'Pema Yenden', '9813284744', 'Pema Serap Tamang', '9813284744', 'Chungi Angmu Tamang', '9813284744', '', 'Mugu'),
(302, 'Urken Minzom', '9818426659', 'Nyima Dorje Tamang', '9818426659', 'Lasi Angmu Lama', '9818426659', '', 'Mugu'),
(303, 'Pema Gyalpo Lama', '9843714107', 'Tenzin Choegyal Lama', '9846845564', 'Nyima Sangmo Lama', '9846845564', '', 'Gorkha'),
(304, 'Tashi Lama', '9808030991', 'Thakpa Ghale', '9808030991', 'Kami Chomo Ghale', '9808030991', '', 'Rasuwa'),
(305, 'Sharmela Gurung', '9741507148', 'Nagpo Gurung', '9741507148', 'Ramil Gurung', '9741507148', '', 'Gorkha'),
(306, 'Tsapten Phuntsok Lama', '9843390187', 'Tsapten Phuntsok Lama', '9843390187', 'Dawa Sangmo Lama', '9843390187', '', 'Mugu'),
(307, 'Guru Tsering Tamang', '9841797434', 'Guru Tsering Tamang', '9841797434', 'Tamzom Putik Tamang', '9841797434', '', 'Mugu'),
(308, 'Guru Tsering Tamang', '9841797434', 'Guru Tsering Tamang', '9841797434', 'Tamzom Putik Tamang', '9841797434', '', 'Mugu'),
(309, 'Sangbo Tamang', '9748928608', 'Sangbo Tamang', '9748928608', 'Sonam Tamang', '9748928608', '', 'Mugu'),
(310, 'Hima Tsering Tamang Lama', '9867963981', 'Hima Tsering Tamang Lama', '9867963981', 'Karma Chuki Tamang Lama', '9867963981', '', 'Mugu'),
(311, 'Sinam Guru Tamang', '9869703833', 'Sinam Guru Tamang', '9869703833', 'Tesang Lama', '9860501291', '', 'Mugu'),
(312, 'Tsering Lhundup Tamang', '9860501291', 'Tsering Lhundup Tamang', '9863946770', 'Tsering Etol Tamang ', '9863946770', '', 'Mugu'),
(313, 'Tsering Lhundup Tamang', '9860501291', 'Tsering Lhundup Tamang', '9863946770', 'Tsering Etol Tamang', '9863946770', '', 'Mugu'),
(314, 'Pema Gyamjo Tamang', '9813400466', 'Thinley Tamang', '9813400466', 'Tsering Chokyi Tamang', '9813400466', '', 'Mugu'),
(318, 'Phangen Tamang', '9864979359', 'Choodheng Tamang', '9864979359', 'Karma Sangmu Tamang', '9864979359', '', 'Mugu'),
(319, 'Dawa Tamang', '9860694072', 'Pema Torchee Lama', '9867962499', 'Toma Tamang Lama', '9867962499', '', 'Mugu'),
(320, 'Tsering Sangmo Lama', '9863695524', 'Nima Sandup Lama', '9863695524', 'Tsewang Diki Lama', '9863695524', '', 'Gorkha'),
(321, 'Tsering Tamang', '9851019392', 'Kunchhang Tasi Tamang', '9868037607', 'Doma Tamang', '9868037607', '', 'Lhasa'),
(322, 'Pema Tsewang Lama', '9841747469', 'Chimi Lama', '9741517134', 'Samten Lama', '9741517134', '', 'Gorkha'),
(323, 'Man Bahadur Moktan', '9816258677', 'Prem Bahadur Moktan', '9816251024', 'Thuli Maya Gole Moktan', '9816251024', '', 'Makwanpur'),
(324, 'Rajkumari Gurung', '9861242292', 'Nurbu Gurung', '9861242292', 'Chhongi Gurung', '9861242292', '', 'Sirdibhas'),
(325, 'Chomphel Tamang', '9823052217', 'Lhundup Tamang', '9868968455', 'Yangzom Tamang', '9868968455', '', 'Mugu'),
(326, 'Tsewang Dolma', '9860078539', 'Tsewang Norbu Lama', '9861512792', 'Rasal Choekyi', '9861512792', '', 'Gorkha'),
(328, 'Gyatso Thapa', '9864958171', 'Man Bahadur Thapa', '9851027437', 'Phul Maya Thapa', '9851027437', '', 'Dolpa'),
(329, 'Malam Lama', '9848324906', 'Malam Lama', '9848324906', 'Bhisuni Lama', '9848324906', '', 'Dolpa'),
(330, 'Bam Budha', '9848324906', 'Bam Budha', '9848324906', 'Pashang Budha', '9848324906', '', 'Dolpa'),
(331, 'Dawa Tamang', '9860694972', 'Karma Tsering Tamang', '9860694972', 'Tsering Angmo Tamang', '9860694972', '', 'Mugu'),
(332, 'Pema Yonten Gyamtso Tamang', '9869068237', 'Tashi Lama', '9869068237', 'Pema Khando Lama', '9869068237', '', 'Mugu'),
(333, 'Sangmu Tamang', '9803394739', 'Karma Tamang', '9803394739', 'Sang Doma Tamang', '9803394739', '', 'Sindhupalchok'),
(334, 'Tashi Sanghbo Lama', '9868343717', 'Tashi Sanghbo Lama', '9868343717', 'Lobsang Chodol Lama', '9868343717', '', 'Mugu'),
(335, 'Dawa Tsering Tamang', '9818202689', 'Dawa Tsering Tamang', '9818202689', 'Kunjok Putik Tamang', '9818202689', '', 'Mugu'),
(336, 'Dawa Tsering Tamang', '9818202689', 'Dawa Tsering Tamang', '9818202689', 'Kunjok Putik Tamang', '9818202689', '', 'Mugu'),
(337, 'Pasangki Sherpa', '2345678901', 'Dalhakpa Sherpa', '2345678901', 'Pasangki Sherpa', '2345678901', '', 'Taplejung'),
(338, 'Tsewang Rinzin Lama', '9860080621', 'Tsewang Rinzin Lama', '9860080621', 'Wosar Bhuti Lama', '9860080621', '', 'Gorkha'),
(339, 'Wang Dolma Sherpa', '9860040870', 'Wangchuk Tamang', '9860040870', 'Bindu Tamang', '9860040870', '', 'Sindhupalchok'),
(340, 'Lakto Sherpa ', '9849591277', 'Pem Norbu Sherpa', '9849591277', 'Karsangma Sherpa', '9849591277', '', 'Dolakha'),
(341, 'Sangay Sherpa', '9841570481', 'Pema Sherpa', '9841570481', 'Somgi Sherpa', '9841570481', '', 'Dolakha'),
(342, 'Sang Doma Sherpa', '9860533989', 'Sonam Tamang', '9860533989', 'Bhindu Tamang', '9860533989', '', 'Dolakha'),
(343, 'Dawa Tamang', '9860694072', 'Sangpo Tamang', '9860694072', 'Toma Tamang Lama', '9860694072', '', 'Mugu'),
(344, 'Bhoj Man Thing Tamang', '9741309549', 'Bhoj Man Thing Tamang', '9741309549', 'Saili Tamang', '9741309549', '', 'Nuwakot'),
(345, 'Bhoj Man Thing Tamang', '9741309549', 'Bhoj Man Thing Tamang', '9741309549', 'Saili Tamang', '9741309549', '', 'Nuwakot'),
(346, 'Bhuban Lama', '9823442530', 'Bhuban Lama', '9823442530', 'Palmu Lama', '9823442530', '', 'Sindhupalchok'),
(350, 'Nar Mala Buda', '9745156285', 'Dhan Kumar Buda', '9861786623', 'Nar Mala Buda', '9861786623', '', 'Gumlibang'),
(353, 'Putani Gurung', '9840416701', 'Sacher Gurung', '9840416701', 'Putani Gurung', '9840416701', '', 'Gorkha'),
(354, 'Pemba Sherpa', '9808470974', 'Ang Babu Sherpa', '9619240255', 'Pemba Lama Sherpa', '9619240255', '', 'Sindhupalchok'),
(355, 'Norbu Lama', '9810200270', 'Tashi Lama', '9616697515', 'Sano Kanchi Lama', '9616697515', '', 'Bolongshe'),
(356, 'Man Bahadur Gole Tamang', '9816258677', 'Bir Bahadur Gole Tamang', '9816258677', 'Ram Maya Gole', '9816258677', '', 'Ngagunjal'),
(357, 'Dawa Dhundup Tamang', '9741467152', 'Nyima Wangdue Tamang', '9741467152', 'Dolma Tsering Tamang', '9741467152', '', 'Rasuwa'),
(358, 'Pema Gyalpo Lama', '9843714107', 'Phuntsok Chhogyap', '9843714107', 'Tsering Lhamo', '9843714107', '', 'Gorkha'),
(359, 'Pema Yonten Tamang', '9748948608', 'Sangbo Tamang', '9748948608', 'Sonam Tamang', '9748948608', '', 'Mugu'),
(360, 'Sang Lhamo Sherpa', '9860646769', 'Mewang Sherpa', '9860646769', 'Phur Lhamu Sherpa', '9860646769', '', 'Sindhupalchok'),
(361, 'Kalden Deckyi', '9862380399', 'Tenzin Gyaltsen Lama', '9862380399', 'Sonam Dolma Lama', '9862380399', '', 'Gorkha'),
(380, 'Jay Bahadur Tamang', '9803574315', 'Reeval Tamang', '9803574315', 'Yang Mindhu Tamang', '9803574315', '', 'Nuwakot'),
(381, 'Man Bahadur Moktan', '9816258677', 'Prem Bahadur Moktan', '9816258677', 'Thuli Maya Gole Moktan', '9816258677', '', 'Makwanpur'),
(382, 'Lhakpa Sangpo', '9860918409', 'Pasang Tamang', '9865443136', 'Yangchen Tamang', '9865443136', '', 'Rasuwa'),
(383, 'Lhakpa Sangpo', '9860918409', 'Tashi Tamang', '9860918409', 'Mingmar Tamang', '9860918409', '', 'Rasuwa'),
(384, 'Passang Sherpa', '9840455519', 'Mingmar Sherpa', '9818836309', 'Nyim Diki Sherpa', '9818836309', '', 'Khotang'),
(385, 'Phurba Jangbu Sherpa', '9803503100Helambu', 'Phurba Jangbu Sherpa', '9803503100', 'Sisang Lama (Sherpa)', '9803503100', '', 'Helambu'),
(386, 'Norbu Sherpa', '9869042739', 'Norbu Sherpa', '9861014672', 'Kersang Sherpa', '9861014672', '', 'Phulpingkahi'),
(387, 'Norbu Sherpa', '9869042739', 'Norbu Sherpa', '9861014672', 'Nyima Choedi Sherpa', '9861014672', '', 'Sindhupalchok'),
(388, 'Pema Dhundup Tamang', '9863646511', 'Tashi Chhiring Tamang', '9841861903', 'Yangjen Tamang', '9841861903', '', 'Rasuwa'),
(389, 'Jampa Wangchuk Lama', '9745160594', 'Passang Choephel Lama', '9745160594', 'Ngawang Choedon Lama', '9745160594', '', 'Gorkha'),
(390, 'Mingmar Samdup Lama', '9818380337', 'Ngawang Dorje Lama', '9741370973', 'Tsering Dolkar Lama', '9741370973', '', 'Gorkha'),
(392, 'Passang ', '9818945177', 'Dorje Lama', '9744090257', 'Sonam Sangmo Lama', '9744090257', '', 'Gorkha'),
(393, 'Passang ', '9818945177', 'Dorje Lama', '9744090257', 'Sonam Sangmo Lama', '9744090257', '', 'Gorkha'),
(394, 'Sang Dorje Tamang', '9616387467', 'Sang Dorje Tamang', '9803394739', 'Yangchen Sherpa', '9803394739', '', 'Sindhupalchok'),
(395, 'Dhal Bahadur Gurung', '9741435175', 'Dhal Bahadur Gurung', '9741435175', 'Lhamu Gurung', '9741435175', '', 'Gorkha'),
(396, 'Dhundup Gurung', '9741435175', 'Dhundup Gurung', '9741435171', 'Maya Gurung', '9741435171', '', 'Gorkha'),
(397, 'Phul Maya Gurung', '9843841402', 'Shun Bahadur Gurung', '9843841402', 'Kanya Gurung', '9843841402', '', 'Gorkha'),
(398, 'Dhal Bahadur Gurung', '9741435175', 'Dhal Bahadur Gurung', '9741435175', 'Lhamu Gurung', '9741435175', '', 'Gorkha'),
(399, 'Maya Tamang', '9813767092', 'Santa Bahadur Ghising', '9813767092', 'Manisha Tamang', '9813767092', '', 'Hetauda'),
(400, 'Ngawang Tenzin Lama', '9823343214', 'Ngawang Tenzin Lama', '9823343214', 'Yangzom Chheten Lama', '9823343214', '', '9823343214'),
(401, 'Muna Gurung', '9864691836', 'Dhan Bahadur Gurung', '9864691836', 'Sabina Gurung', '9864691836', '', 'Gorkha'),
(402, 'Nar Mala Pun Buda', '9861786623', 'Dan Kumar Buda', '9861786623', 'Nar Mala Pun Buda', '9861786623', '', 'Rukum '),
(403, 'Pangyen Mendho', '9864979349', 'Chhitup Lama ', '9869591361', 'Tsultrim Sangmo Lama', '9869591361', '', 'Mugu'),
(404, 'Tashi Lhundup Gurung', '9862909269', 'Tsering Norbu Gurung', '9860492100', 'Tsering Angmo Gurung', '9860492100', '', 'Dolpa'),
(405, 'Jira Tamang', '9803607947', 'Pralhad Tamang', '9818895927', 'Kanchhi Tamang', '9818895927', '', 'Kageshwori Manohara');

-- --------------------------------------------------------

--
-- Table structure for table `healthstatus`
--

CREATE TABLE `healthstatus` (
  `id` int(11) NOT NULL,
  `addnum` varchar(11) NOT NULL,
  `isSick` tinyint(1) NOT NULL,
  `note` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `updatedate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `healthstatus`
--

INSERT INTO `healthstatus` (`id`, `addnum`, `isSick`, `note`, `status`, `updatedate`) VALUES
(1, 'b22', 0, 'suffering from phenomina', 1, '2020-03-11 05:41:01'),
(2, 'b22', 0, 'suffering from phenomina', 1, '2020-03-11 05:41:03'),
(3, 'b22', 0, 'suffering from phenomina', 0, '2020-03-06 04:54:41'),
(4, 'B22', 0, 'is suffering from coronavirus', 1, '2020-03-04 10:16:06'),
(5, 'B22', 0, 'suffering from cold\r\n', 1, '2020-03-11 05:41:09'),
(6, 'B22', 1, 'suffering from cold\r\n', 1, '2020-03-04 10:20:28'),
(7, 'B22', 1, 'suffering from cold\r\n', 1, '2020-03-04 10:20:42'),
(8, 'B22', 1, 'suffering from cold\r\n', 1, '2020-03-04 10:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `addnum` varchar(11) NOT NULL,
  `examid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `practical` float NOT NULL,
  `theory` float NOT NULL,
  `absent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `addnum`, `examid`, `subjectid`, `practical`, `theory`, `absent`) VALUES
(1, 'B22', 1, 1, 19, 76, 0),
(2, 'B22', 1, 2, 0, 98, 0),
(3, 'B22', 1, 4, 49, 50, 0),
(4, 'B22', 1, 6, 17, 77, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `addnum` varchar(20) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `nationality` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `currentaddress` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `grade` varchar(15) NOT NULL,
  `doj` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `pid` int(11) NOT NULL,
  `talent` varchar(50) NOT NULL,
  `specify` varchar(50) NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `addnum`, `dob`, `nationality`, `email`, `currentaddress`, `gender`, `grade`, `doj`, `image`, `pid`, `talent`, `specify`, `updatetime`) VALUES
(1, 'Pasang Lhamu Lama', 'B22', '2020-03-01', 'Nepalese', 'checking@gmail.com', 'Lho, Nubri, Gorkha', 'Female', 'Eight', '1990-12-12', 'profile_photos/photoid@1573195863.jpg', 1, 'Academics', '', '0000-00-00 00:00:00'),
(2, 'Yangzen Dolma Tamang', 'B40', '2020-03-02', 'Nepalese', '', 'Rasuwa', 'Female', 'Eight', '2020-03-02', 'profile_photos/photoid@1573196768.jpg', 2, 'Sports', 'Basketball', '0000-00-00 00:00:00'),
(3, 'Lhakpa Dolma Lama', 'B118', '28/08/2002', 'Nepalese', '', 'Sindhupalchok', 'Female', 'Eight', '18/04/2014', 'profile_photos/photoid@1573201431.jpg', 3, '', '', '2020-01-31 14:19:49'),
(4, 'Kinjo Tsomu Lama', 'B119', '12/05/2005', 'Nepalese', '', 'Sindhupalchok', 'Female', 'Eight', '18/04/2014', 'profile_photos/photoid@1573354760.jpg', 4, '', '', '2020-01-31 14:19:46'),
(5, 'Tenzin Kunphel Lama', 'B129', '11/02/2003', 'Nepalese', '', 'Lamjung', 'Male', 'Eight', '07/06/2014', 'profile_photos/photoid@1573356234.jpg', 5, '', '', '2020-01-31 14:19:44'),
(6, 'Tsering Dolma Lama', 'B134', '17/02/2004', 'Nepalese', '', 'Gorkha', 'Female', 'Eight', '18/04/2014', 'profile_photos/photoid@1573357376.jpg', 6, '', '', '2020-01-31 14:19:41'),
(7, 'Phurbu Sangmo Lama', 'B146', '24/01/2004', 'Nepalese', '', 'Gorkha', 'Female', 'Eight', '26/04/2014', 'profile_photos/photoid@1573358089.jpg', 7, '', '', '2020-01-31 14:19:38'),
(8, 'Mingmar Lhamo Lama', 'B164', '20/08/2003', 'Nepalese', '', 'Gorkha', 'Female', 'Eight', '21/04/2014', 'profile_photos/photoid@1573359777.jpg', 8, '', '', '2020-01-31 14:19:35'),
(9, 'Karmu Sherpa', 'B165', '07/11/2002', 'Nepalese', '', 'Nuwakot', 'Female', 'Eight', '18/04/2014', 'profile_photos/photoid@1573359515.jpg', 9, '', '', '2020-01-31 14:19:32'),
(10, 'Phurpa Diki sherpa', 'B227', '29/06/2004', 'Nepalese', '', 'Sindhupalchok', 'Female', 'Eight', '22/04/2017', 'profile_photos/photoid@1573361050.jpg', 10, '', '', '2020-01-31 14:19:28'),
(11, 'Barsa K.C', 'B13', '22/07/2006', 'Nepalese', '', 'Manang', 'Male', 'Seven', '18/04/2014', 'profile_photos/photoid@1573451830.jpg', 11, '', '', '2020-01-31 14:19:25'),
(12, 'Punam Nepali', 'B26', '4/10/2004', 'Nepalese', '', 'Jetgau', 'Female', 'Seven', '19/04/2014', 'profile_photos/photoid@1573615708.jpg', 12, '', '', '2020-01-31 14:19:20'),
(13, 'Passang Yangchen', 'B41', '18/9/2005', 'Nepalese', '', 'Shapruk', 'Female', 'Seven', '21/04/2014', 'profile_photos/photoid@1573718327.jpg', 13, '', '', '2020-01-31 14:19:17'),
(14, 'Tsewang Dolma', 'B53', '31/8/2000', 'Nepalese', '', 'Bhi, Nubri', 'Female', 'Seven', '18/04/2014', 'profile_photos/photoid@1573719129.jpg', 14, '', '', '2020-01-31 14:19:14'),
(15, 'Tsering Choeden', 'B54', '26/11/2003', 'Nepalese', '', 'Gorkha, Tsum', 'Female', 'Seven', '18/04/2014', 'profile_photos/photoid@1573720071.jpg', 15, '', '', '2020-01-31 14:19:12'),
(16, 'Tashi Choeden', 'B64', '30/03/2007', 'Nepalese', '', 'Nubri, Prok', 'Female', 'Seven', '18/04/2014', 'profile_photos/photoid@1573720753.jpg', 16, '', '', '2020-01-31 14:19:09'),
(17, 'Yangchen Lhamo', 'B95', '22/02/2005', 'Nepalese', '', 'Gorkha, Samma', 'Female', 'Seven', '4/10/2004', 'profile_photos/photoid@1573803355.jpg', 17, '', '', '2020-01-31 14:19:05'),
(18, 'Nyima Choedon', 'B66', '4/06/2004', 'Nepalese', '', 'Gorkha, Prok', 'Female', 'Seven', '21/04/2014', 'profile_photos/photoid@1573803932.jpg', 18, '', '', '2020-01-31 14:19:02'),
(19, 'Anil Tamang ', 'B106', '7/09/2004', 'Nepalese', '', 'Sindupalchowk', 'Male', 'Seven', '4/10/2004', 'profile_photos/photoid@1573804765.jpg', 19, '', '', '2020-01-31 14:18:59'),
(20, 'Lhanam Hyolmo', 'B122', '27/05/2001', 'Nepalese', '', 'Nuwakot', 'Male', 'Seven', '18/04/2014', 'profile_photos/photoid@1573979869.jpg', 20, '', '', '2020-01-31 14:18:55'),
(21, 'Tashi Dickey', 'B127', '28/05/2008', 'Nepalese', '', 'Gorkha, Sho', 'Female', 'Seven', '18/04/2014', 'profile_photos/photoid@1573980468.jpg', 21, '', '', '2020-01-31 14:18:51'),
(22, 'Pasang Thinley', 'B142', '23/03/2006', 'Nepalese', '', 'Nuwakot', 'Male', 'Seven', '21/04/2014', 'profile_photos/photoid@1573981187.jpg', 22, '', '', '2020-01-31 14:18:47'),
(23, 'Tashi Lhamo', 'B143', '7/08/2004', 'Nepalese', '', 'Gorkha, Samto', 'Female', 'Seven', '18/04/2014', 'profile_photos/photoid@1573981699.jpg', 23, '', '', '2020-01-31 14:18:45'),
(24, 'Ngawang Sherpa', 'B147', '26/04/2004', 'Nepalese', '', 'Nuwakot', 'Male', 'Seven', '4/10/2004', 'profile_photos/photoid@1573982229.jpg', 24, '', '', '2020-01-31 14:18:41'),
(25, 'Lhakpa Norbu Sherpa', 'B148', '15/10/2006', 'Nepalese', '', 'Nuwakot', 'Male', 'Seven', '4/10/2004', 'profile_photos/photoid@1573982841.jpg', 25, '', '', '2020-01-31 14:18:38'),
(26, 'Deepak Magar', 'B161', '14/09/2003', 'Nepalese', '', 'Rukum', 'Male', 'Seven', '4/10/2014', 'profile_photos/photoid@1573983544.jpg', 26, '', '', '2020-01-31 14:18:35'),
(27, 'Tsewang Norbu', 'B171', '28/06/2004', 'Nepalese', '', 'Gorkha, Prok', 'Male', 'Seven', '05/04/2015', 'profile_photos/photoid@1573984313.jpg', 27, '', '', '2020-01-31 14:18:31'),
(28, 'Dawa Jangmu Sherpa', 'B185', '12/05/2004', 'Nepalese', '', 'Nuwakot', 'Female', 'Seven', '15/04/2015', 'profile_photos/photoid@1573991440.jpg', 28, '', '', '2020-01-31 14:18:28'),
(29, 'Premika Gurung', 'B209', '24/05/2006', 'Nepalese', '', 'Bangshing', 'Female', 'Seven', '20/03/2017', 'profile_photos/photoid@1573998442.jpg', 29, '', '', '2020-01-31 14:18:24'),
(30, 'Tashi Sherpa', 'B218', '25/08/2004', 'Nepalese', '', 'Gorkha', 'Male', 'Seven', '12/04/2016', 'profile_photos/photoid@1573999006.jpg', 30, '', '', '2020-01-31 14:18:18'),
(85, 'Nila Dolma', 'B271', '8/10/2004', 'Nepalese', '', 'Gorkha, Prok', 'Female', 'Seven', '24/04/2017', 'profile_photos/photoid@1574063337.jpg', 85, '', '', '2020-01-31 14:22:05'),
(86, 'Samten Lhamo Lama', 'B06', '15/03/2006', 'Nepalese', '', 'Gorkha, Lho', 'Female', 'Six', '18/04/2014', 'profile_photos/photoid@1574140339.jpg', 86, '', '', '2020-01-31 14:22:05'),
(87, 'Nesha Gurung', 'B11', '30/08/2005', 'Nepalese', '', 'Manang', 'Female', 'Six', '18/04/2014', 'profile_photos/photoid@1574141202.jpg', 87, '', '', '2020-01-31 14:22:05'),
(88, 'Sonam Lama', 'B18', '27/05/2008', 'Nepalese', '', 'Gorkha, Nubri', 'Female', 'Six', '18/04/2014', 'profile_photos/photoid@1574142120.jpg', 88, '', '', '2020-01-31 14:22:05'),
(89, 'Tsewang Gombo Lama ', 'B20', '13/02/2007', 'Nepalese', '', 'Gorkha, Prok', 'Male', 'Six', '18/04/2014', 'profile_photos/photoid@1574143350.jpg', 89, '', '', '2020-01-31 14:22:05'),
(90, 'Tenzin Lhamo Tamang', 'B39', '05/05/2003', 'Nepalese', '', 'Rasuwa', 'Female', 'Six', '21/04/2014', 'profile_photos/photoid@1574154766.jpg', 90, '', '', '2020-01-31 14:22:05'),
(91, 'Tsewang Dolma Lama', 'B44', '02/05/2008', 'Nepalese', '', 'Gorkha', 'Female', 'Six', '21/04/2014', 'profile_photos/photoid@1574155245.jpg', 91, '', '', '2020-01-31 14:22:05'),
(92, 'Sonam Dolma Lama', 'B68 ', '24/02/2007', 'Nepalese', '', 'Gorkha', 'Female', 'Six', '18/04/2014', 'profile_photos/photoid@1574155765.jpg', 92, '', '', '2020-01-31 14:22:05'),
(93, 'Urgen Lhamo lama', 'B72', '28/06/2007', 'Nepalese', '', 'Gorkha', 'Female', 'Six', '21/04/2014', 'profile_photos/photoid@1574220350.jpg', 93, '', '', '2020-01-31 14:22:05'),
(94, 'Tenzin Ladon Lama', 'B79', '16/12/2006', 'Nepalese', '', 'Gorkha', 'Female', 'Six', '21/04/2014', 'profile_photos/photoid@1574220689.jpg', 94, '', '', '2020-01-31 14:22:05'),
(95, 'Urgen Dorje Lama', 'B88', '29/07/2007', 'Nepalese', '', 'Hyolmo', 'Male', 'Six', '22/04/2014', 'profile_photos/photoid@1574221111.jpg', 95, '', '', '2020-01-31 14:22:05'),
(96, 'Lhamo Mentok Tamang', 'B92', '25/10/2005', 'Nepalese', '', 'Nuwakot', 'Female', 'Six', '22/04/2014', 'profile_photos/photoid@1574221458.jpg', 96, '', '', '2020-01-31 14:22:05'),
(97, 'Pemba Tsering Lama', 'B96', '30/12/2006', 'Nepalese', '', 'Gorkha', 'Male', 'Six', '21/04/2014', 'profile_photos/photoid@1574221800.jpg', 97, '', '', '2020-01-31 14:22:05'),
(98, 'Pasang Dolma Lama', 'B107', '07/05/2002', 'Nepalese', '', 'Gorkha', 'Female', 'Six', '21/04/2014', 'profile_photos/photoid@1574222137.jpg', 98, '', '', '2020-01-31 14:22:05'),
(99, 'Pema Ngodup Lama', 'B113', '01/10/2005', 'Nepalese', '', 'Helambu', 'Male', 'Six', '18/04/2014', 'profile_photos/photoid@1574222492.jpg', 99, '', '', '2020-01-31 14:22:05'),
(100, 'Dickey Lhamo Lama ', 'B124', '25/07/2004', 'Nepalese', '', 'Gorkha', 'Female', 'Six', '25/07/2004', 'profile_photos/photoid@1574227805.jpg', 100, '', '', '2020-01-31 14:22:05'),
(101, 'Pemba Tsering Sherpa', 'B145', '24/07/2005', 'Nepalese', '', 'Nuwakot, Gaunkharka', 'Male', 'Six', '21/04/2014', 'profile_photos/photoid@1574228721.jpg', 101, '', '', '2020-01-31 14:22:05'),
(102, 'Manisha Nepali', 'B156', '24/08/2008', 'Nepalese', '', 'Sitapaila,KTM', 'Female', 'Six', '18/04/2014', 'profile_photos/photoid@1574234436.jpg', 102, '', '', '2020-01-31 14:22:05'),
(103, 'Pemba Tsering Sherpa', 'B177', '4/05/2008', 'Nepalese', '', 'Helambu, Sindupalchowk', 'Male', 'Six', '13/04/2015', 'profile_photos/photoid@1574235055.jpg', 103, '', '', '2020-01-31 14:22:05'),
(104, 'Nyima Sherpa', 'B189', '29/03/2007', 'Nepalese', '', 'Nuwakot', 'Female', 'Six', '15/04/2015', 'profile_photos/photoid@1574235540.jpg', 104, '', '', '2020-01-31 14:22:05'),
(105, 'Pema Dhundup Sherpa', 'B193', '13/05/2005', 'Nepalese', '', 'Tatopani, Sindupalchok', 'Male', 'Six', '15/05/2015', 'profile_photos/photoid@1574236210.jpg', 105, '', '', '2020-01-31 14:22:05'),
(106, 'Manisha Nath Yogi', 'B201', '27/03/2008', 'Nepalese', '', 'Majkot, Jajarkot', 'Female', 'Six', '18/04/2014', 'profile_photos/photoid@1574313257.jpg', 106, '', '', '2020-01-31 14:22:05'),
(107, 'Phurbu Sangmo Lama', 'B206', '2/04/2005', 'Nepalese', '', 'Nubri', 'Female', 'Six', '22/04/2015', 'profile_photos/photoid@1574313703.jpg', 107, '', '', '2020-01-31 14:22:05'),
(108, 'Pema Tashi Tamang', 'B223', '2/08/2015', 'Nepalese', '', 'Jumla', 'Male', 'Six', '12/04/2016', 'profile_photos/photoid@1574314159.jpg', 108, '', '', '2020-01-31 14:22:05'),
(109, 'Pasang Lhamo Lama', 'B225', '21/10/2005', 'Nepalese', '', 'Nubri, Samagaun', 'Female', 'Six', '12/04/2016', 'profile_photos/photoid@1574399577.jpg', 109, '', '', '2020-01-31 14:22:05'),
(110, 'Dolma Sherpa', 'B272', '25/10/2006', 'Nepalese', '', 'Solukhumbu', 'Female', 'Six', '25/04/2017', 'profile_photos/photoid@1574400213.jpg', 110, '', '', '2020-01-31 14:22:05'),
(111, 'Mingma Doma Sherpa', 'B383', '28/03/2008', 'Nepalese', '', 'Solukhumbu', 'Female', 'Six', '29/04/2019', 'profile_photos/photoid@1574400689.jpg', 111, '', '', '2020-01-31 14:22:05'),
(112, 'Kunchok Dolma', 'B19', '18/05/2007', 'Nepalese', '', 'Gorkha', 'Female', 'Five', '18/04/2014', 'profile_photos/photoid@1574580642.jpg', 112, '', '', '2020-01-31 14:22:05'),
(113, 'Nyima Lhamo', 'B30', '03/02/2007', 'Nepalese', '', 'Gorkha', 'Female', 'Five', '18/04/2014', 'profile_photos/photoid@1574581232.jpg', 113, '', '', '2020-01-31 14:22:05'),
(114, 'Neema Dolma Lama', 'B33', '13/07/2005', 'Nepalese', '', 'Nuwakot', 'Female', 'Five', '22/04/2014', 'profile_photos/photoid@1574653064.jpg', 114, '', '', '2020-01-31 14:22:05'),
(115, 'Tsewang Gyaltsen Lama', 'B36', '28/10/2006', 'Nepalese', '', 'Gorkha', 'Male', 'Five', '21/04/2014', 'profile_photos/photoid@1574653408.jpg', 115, '', '', '2020-01-31 14:22:05'),
(116, 'Pema Sangmo Lama', 'B46', '06/09//2007', 'Nepalese', '', 'Gorkha', 'Female', 'Five', '19/04/2014', 'profile_photos/photoid@1574653775.jpg', 116, '', '', '2020-01-31 14:22:05'),
(117, 'Tashi Lhamo', 'B48', '01/10/2005', 'Nepalese', '', 'Gorkha', 'Female', 'Five', '04/04/2014', 'profile_photos/photoid@1574654146.jpg', 117, '', '', '2020-01-31 14:22:05'),
(118, 'Choegyal Lama', 'B74', '30/03/2006', 'Nepalese', '', 'Gorkha', 'Male', 'Five', '20/04/2014', 'profile_photos/photoid@1574654496.jpg', 118, '', '', '2020-01-31 14:22:05'),
(119, 'Passang Chonzom Lama', 'B77', '09/12/2006', 'Nepalese', '', 'Gorkha', 'Female', 'Five', '24/04/2014', 'profile_photos/photoid@1574654886.jpg', 119, '', '', '2020-01-31 14:22:05'),
(120, 'Yangchen Dolkar', 'B80', '29/05/2006', 'Nepalese', '', 'Gorkha', 'Female', 'Five', '18/04/2014', 'profile_photos/photoid@1574655245.jpg', 120, '', '', '2020-01-31 14:22:05'),
(121, 'Pema Gyurme Lama', 'B82', '03/11/2007', 'Nepalese', '', 'Gorkha', 'Male', 'Five', '18/04/2014', 'profile_photos/photoid@1574656934.jpg', 121, '', '', '2020-01-31 14:22:05'),
(122, 'Laxmi Tamang ', 'B86', '31/08/2006', 'Nepalese', '', 'Dhading', 'Female', 'Five', '18/04/2014', 'profile_photos/photoid@1574659121.jpg', 122, '', '', '2020-01-31 14:22:05'),
(123, 'Mingmar Khando Lama', 'B98', '27/01/2007', 'Nepalese', '', 'Sindupalchowk', 'Female', 'Five', '18/04/2014', 'profile_photos/photoid@1574659777.jpg', 123, '', '', '2020-01-31 14:22:05'),
(124, 'Manish Nepali', 'B100', '19/02/2009', 'Nepalese', '', 'Manang', 'Male', 'Five', '19/04/2014', 'profile_photos/photoid@1574660368.jpg', 124, '', '', '2020-01-31 14:22:05'),
(125, 'Karma Tsering', 'B121', '3/02/2007', 'Nepalese', '', 'Gorkha', 'Male', 'Five', '18/04/2014', 'profile_photos/photoid@1574660855.jpg', 125, '', '', '2020-01-31 14:22:05'),
(126, 'Sangye Bhutti Lama', 'B140', '26/07/2007', 'Nepalese', '', 'Gorkha', 'Female', 'Five', '18/04/2014', 'profile_photos/photoid@1574661784.jpg', 126, '', '', '2020-01-31 14:22:05'),
(127, 'Choenzom Lama', 'B158', '11/07/2007', 'Nepalese', '', 'Manang', 'Female', 'Five', '18/04/2014', 'profile_photos/photoid@1574662428.jpg', 127, '', '', '2020-01-31 14:22:05'),
(128, 'Phurba Yangzi Sherpa', 'B186', '16/10/2005', 'Nepalese', '', 'Nuwakot', 'Female', 'Five', '15/04/2015', 'profile_photos/photoid@1574668397.jpg', 128, '', '', '2020-01-31 14:22:05'),
(129, 'Pemba Sherpa', 'B187', '28/05/2004', 'Nepalese', '', 'Nuwakot', 'Female', 'Five', '15/04/2015', 'profile_photos/photoid@1574741137.jpg', 129, '', '', '2020-01-31 14:22:05'),
(130, 'Abishek Bajracharya', 'B194', '1111111', 'Nepalese', '', 'Sindhupalchok', 'Male', 'Five', '15/04/2015', 'profile_photos/photoid@1574741734.jpg', 130, '', '', '2020-01-31 14:22:05'),
(131, 'karsang Dorje Lama', 'B231', '15/02/2006', 'Nepalese', '', 'Mugu', 'Male', 'Five', '17/04/2016', 'profile_photos/photoid@1574742151.jpg', 131, '', '', '2020-01-31 14:22:05'),
(132, 'Kasang Chuki Lama', 'B232', '26/08/2005', 'Nepalese', '', 'Mugu', 'Female', 'Five', '17/04/2016', 'profile_photos/photoid@1574742610.jpg', 132, '', '', '2020-01-31 14:22:05'),
(133, 'Passang Diki Sherpa', 'B234', '28/05/2004', 'Nepalese', '', 'Sindupalchowk', 'Female', 'Five', '24/04/2017', 'profile_photos/photoid@1574746783.jpg', 133, '', '', '2020-01-31 14:22:05'),
(134, 'Sonam Bhutti Lama', 'B240', '24/06/2006', 'Nepalese', '', 'Gorkha', 'Female', 'Five', '24/04/2017', 'profile_photos/photoid@1574825957.jpg', 134, '', '', '2020-01-31 14:22:05'),
(135, 'Sonam Bhutti Lama', 'B600', '24/06/2006', 'Nepalese', '', 'Gorkha', 'Female', 'Five', '24/04/2017', 'profile_photos/photoid@1574826310.jpg', 135, '', '', '2020-01-31 14:22:05'),
(136, 'Chin Dorje Lama', 'B275', '27/05/2007', 'Nepalese', '', 'Sindhupalchok', 'Male', 'Five', '26/04/2017', 'profile_photos/photoid@1574826716.jpg', 136, '', '', '2020-01-31 14:22:05'),
(137, 'Anisha  Lama', 'B282', '10000000', 'Nepalese', '', 'Dolpa', 'Female', 'Five', '31/03/2018', 'profile_photos/photoid@1574827298.jpg', 137, '', '', '2020-01-31 14:22:05'),
(138, 'Pema Gyaltsen Lama', 'B83', '100000', 'Nepalese', '', 'Gorkha', 'Male', 'Five', '24/04/2017', 'profile_photos/photoid@1574828008.jpg', 138, '', '', '2020-01-31 14:22:05'),
(139, 'Tsering Wangdi Lama', 'B389', '20/08/2005', 'Nepalese', '', 'Gorkha', 'Male', 'Five', '18/04/2014', 'profile_photos/photoid@1574828423.jpg', 139, '', '', '2020-01-31 14:22:05'),
(141, 'Furba Dema Lama', 'B14', '28/04/2002', 'Nepalese', '', 'Manang', 'Female', 'Four', '18/04/2014', 'profile_photos/photoid@1574831674.jpg', 141, '', '', '2020-01-31 14:22:05'),
(142, 'Kunsang Diki', 'B23', '22/07/2009', 'Nepalese', '', 'Bihi', 'Female', 'Four', '18/04/2014', 'profile_photos/photoid@1574832087.jpg', 142, '', '', '2020-01-31 14:22:05'),
(143, 'Dawa Lhakpa Sherpa', 'B32', '19/04/2006', 'Nepalese', '', 'Gang', 'Male', 'Four', '18/04/2014', 'profile_photos/photoid@1574832946.jpg', 143, '', '', '2020-01-31 14:22:05'),
(144, 'Tsering Lama', 'B34', '17/03/2009', 'Nepalese', '', 'Kajay', 'Female', 'Four', '18/04/2014', 'profile_photos/photoid@1574833594.jpg', 144, '', '', '2020-01-31 14:22:05'),
(145, 'Sonam Choedon Lama', 'B38', '01/10/2007', 'Nepalese', '', 'Prok', 'Female', 'Four', '18/04/2014', 'profile_photos/photoid@1574834210.jpg', 145, '', '', '2020-01-31 14:22:05'),
(146, 'Sangye Lhamo ', 'B47', '02/06/2007', 'Nepalese', '', 'Lhi', 'Female', 'Four', '4/04/2014', 'profile_photos/photoid@1574834691.jpg', 146, '', '', '2020-01-31 14:22:05'),
(147, 'Orken Lhamo Lama', 'B65', '11/04/2008', 'Nepalese', '', 'Prok', 'Female', 'Four', '18/04/2014', 'profile_photos/photoid@1574835147.jpg', 147, '', '', '2020-01-31 14:22:05'),
(148, 'Tashi Lhamu Lama', 'B67', '12/06/2007', 'Nepalese', '', 'Prok', 'Female', 'Four', '21/04/2014', 'profile_photos/photoid@1574835706.jpg', 148, '', '', '2020-01-31 14:22:05'),
(149, 'Tsering Yungdung Lama', 'B76', '18/05/2008', 'Nepalese', '', 'Nubri, Samagaun', 'Male', 'Four', '19/04/2014', 'profile_photos/photoid@1574918966.jpg', 149, '', '', '2020-01-31 14:22:05'),
(150, 'Pasang Dolma Tamang', 'B85', '17/04/2007', 'Nepalese', '', 'Atterkhel', 'Female', 'Four', '21/04/2014', 'profile_photos/photoid@1574919652.jpg', 150, '', '', '2020-01-31 14:22:05'),
(151, 'Tsering Bhutti Lama   ', 'B94', '19/06/2008', 'Nepalese', '', 'Bihi', 'Female', 'Four', '18/04/2014', 'profile_photos/photoid@1574921608.jpg', 151, '', '', '2020-01-31 14:22:05'),
(153, 'Lakpa Lama', 'B110', '2222222222', 'Nepalese', '', 'Gorkha', 'Female', 'Four', '18/04/2014', 'profile_photos/photoid@1574998418.jpg', 153, '', '', '2020-01-31 14:22:05'),
(155, 'Pasang Dolma Lama', 'B111', '3333333333', 'Nepalese', '', 'Gorkha', 'Female', 'Four', '18/04/2014', 'profile_photos/photoid@1574998692.jpg', 155, '', '', '2020-01-31 14:22:05'),
(157, 'Karma Diki Lama', 'B114', '44444444444', 'Nepalese', '', 'Gorkha', 'Female', 'Four', '18/04/2014', 'profile_photos/photoid@1574999154.jpg', 157, '', '', '2020-01-31 14:22:05'),
(159, 'Pasang Dolma Lama', 'B130', '555555555', 'Nepalese', '', 'Gorkha', 'Female', 'Four', '18/04/2014', 'profile_photos/photoid@1575000078.jpg', 159, '', '', '2020-01-31 14:22:05'),
(160, 'Tsering Lhamu Lama', 'B135', '27/03/2006', 'Nepalese', '', 'Gorkha', 'Female', 'Four', '18/04/2014', 'profile_photos/photoid@1575000368.jpg', 160, '', '', '2020-01-31 14:22:05'),
(161, 'Gikesh Nepali', 'B157', '23/022008', 'Nepalese', '', 'Manang', 'Male', 'Four', '18/04/2014', 'profile_photos/photoid@1575258149.jpg', 161, '', '', '2020-01-31 14:22:05'),
(162, 'Laxmi Gurung', 'B176', '27/09/2003', 'Nepalese', '', 'Gorkha', 'Female', 'Four', '15/04/2014', 'profile_photos/photoid@1575258588.jpg', 162, '', '', '2020-01-31 14:22:05'),
(163, 'Sangye Dolma Sherpa', 'B203', '19/05/2006', 'Nepalese', '', 'Gorkha', 'Female', 'Four', '20/04/2015', 'profile_photos/photoid@1575258996.jpg', 163, '', '', '2020-01-31 14:22:05'),
(164, 'Dhoedak Lama', 'B204', '17/01/2007', 'Nepalese', '', 'Gorkha', 'Male', 'Four', '20/04/2015', 'profile_photos/photoid@1575259420.jpg', 164, '', '', '2020-01-31 14:22:05'),
(165, 'Tseten Lama', 'B239', '19/06/2008', 'Nepalese', '', ' Tsum', 'Female', 'Four', '24/04/2017', 'profile_photos/photoid@1575273804.jpg', 165, '', '', '2020-01-31 14:22:05'),
(166, 'Aryan Buda Magar', 'B283', '23/06/2009', 'Nepalese', '', 'Dolpa', 'Male', 'Four', '31/03/2018', 'profile_photos/photoid@1575274822.jpg', 166, '', '', '2020-01-31 14:22:05'),
(168, 'Lazi Mendo Sherpa', 'B339', '31/08/2004', 'Nepalese', '', 'Drum Thali', 'Female', 'Four', '10/04/2018', 'profile_photos/photoid@1575275230.jpg', 168, '', '', '2020-01-31 14:22:05'),
(169, 'Dil Ba Gurung ', 'B386', '26/05/2001', 'Nepalese', '', 'Gorkha', 'Male', 'Four', '04/06/2019', 'profile_photos/photoid@1575344102.jpg', 169, '', '', '2020-01-31 14:22:05'),
(171, 'Sangye Tsering Lama', 'B04', '17/05/2007', 'Nepalese', '', 'Gorkha', 'Male', 'Three', '18/04/2014', 'profile_photos/photoid@1575345849.jpg', 171, '', '', '2020-01-31 14:22:05'),
(172, 'Sangye Wangdue Lama', 'B05', '12/05/2008', 'Nepalese', '', 'Gorkha', 'Male', 'Three', '18/04/2014', 'profile_photos/photoid@1575429106.jpg', 172, '', '', '2020-01-31 14:22:05'),
(173, 'Dolma Youden Lama', 'B07', '22/08/2005', 'Nepalese', '', 'Gorkha', 'Female', 'Three', '18/04/2014', 'profile_photos/photoid@1575429494.jpg', 173, '', '', '2020-01-31 14:22:05'),
(174, 'Samju Thinley Lama', 'B15', '29/01/2008', 'Nepalese', '', 'Manang', 'Male', 'Three', '18/04/2014', 'profile_photos/photoid@1575429897.jpg', 174, '', '', '2020-01-31 14:22:05'),
(175, 'Nyima Dolma Lama', 'B29', '77777777777777', 'Nepalese', '', 'Gorkha', 'Female', 'Three', '18/04/2014', 'profile_photos/photoid@1575430202.jpg', 175, '', '', '2020-01-31 14:22:05'),
(177, 'Tenzin Dorje Lama', 'B35', '19/05/2006', 'Nepalese', '', 'Gorkha', 'Male', 'Three', '21/04/2014', 'profile_photos/photoid@1575430578.jpg', 177, '', '', '2020-01-31 14:22:05'),
(178, 'Pemba Jangbo Sherpa', 'B37', '03/08/2006', 'Nepalese', '', 'Nuwakot', 'Female', 'Three', '18/04/2014', 'profile_photos/photoid@1575432961.jpg', 178, '', '', '2020-01-31 14:22:05'),
(179, 'Tse Passang Sherpa', 'B43', '04/03/2010', 'Nepalese', '', 'Nuwakot', 'Male', 'Three', '18/04/2014', 'profile_photos/photoid@1575433285.jpg', 179, '', '', '2020-01-31 14:22:05'),
(180, 'Passang Chokyi', 'B51', '22/04/2007', 'Nepalese', '', 'Gorkha', 'Female', 'Three', '18/04/2014', 'profile_photos/photoid@1575433720.jpg', 180, '', '', '2020-01-31 14:22:05'),
(181, 'Phurbu sangmo Lama', 'B52', '26/08/2004', 'Nepalese', '', 'Gorkha', 'Female', 'Three', '18/04/2014', 'profile_photos/photoid@1575434610.jpg', 181, '', '', '2020-01-31 14:22:05'),
(182, 'Yeshi Lhamu', 'B56', '30/05/2008', 'Nepalese', '', 'Gorkha', 'Female', 'Three', '18/04/2014', 'profile_photos/photoid@1575435080.jpg', 182, '', '', '2020-01-31 14:22:05'),
(183, 'Tashi Lhamo', 'B57', '99999999', 'Nepalese', '', 'Gorkha', 'Female', 'Three', '18/04/2014', 'profile_photos/photoid@1575435344.jpg', 183, '', '', '2020-01-31 14:22:05'),
(184, 'Rinzin Norbu Lama', 'B58', '18/01/2008', 'Nepalese', '', 'Gorkha', 'Male', 'Three', '18/04/2014', 'profile_photos/photoid@1575436097.jpg', 184, '', '', '2020-01-31 14:22:05'),
(185, 'Pemba Tsering Lama', 'B69', '20/09/2008', 'Nepalese', '', 'Gorkha', 'Male', 'Three', '18/04/2014', 'profile_photos/photoid@1575437615.jpg', 185, '', '', '2020-01-31 14:22:05'),
(186, 'Rachana Buda Magar', 'B93', '24/08/2007', 'Nepalese', '', 'Rukum', 'Female', 'Three', '18/04/2014', 'profile_photos/photoid@1575437963.jpg', 186, '', '', '2020-01-31 14:22:05'),
(187, 'Tsering Tsomo', 'B97', '23232323', 'Nepalese', '', 'Gorkha', 'Female', 'Three', '18/04/2014', 'profile_photos/photoid@1575438303.jpg', 187, '', '', '2020-01-31 14:22:05'),
(188, 'Tashi Gyaltsen Lama', 'B99', '22/05/2006', 'Nepalese', '', 'Gorkha', 'Male', 'Three', '18/04/2014', 'profile_photos/photoid@1575438561.jpg', 188, '', '', '2020-01-31 14:22:05'),
(190, 'Choegyal Dorje Lama', 'B101', '07/06/2007', 'Nepalese', '', 'Gorkha', 'Male', 'Three', '21/04/2014', 'profile_photos/photoid@1575516435.jpg', 190, '', '', '2020-01-31 14:22:05'),
(191, 'Tsewang Diki Lama', 'B128', '01/10/2006', 'Nepalese', '', 'Gorkha', 'Female', 'Three', '18/04/2014', 'profile_photos/photoid@1575517835.jpg', 191, '', '', '2020-01-31 14:22:05'),
(192, 'Sangye Tsomo Lama', 'B131', '21/02/2008', 'Nepalese', '', 'Gorkha', 'Female', 'Three', '18/04/2014', 'profile_photos/photoid@1575518311.jpg', 192, '', '', '2020-01-31 14:22:05'),
(193, 'Tenzin Sangpo Lama', 'B141', '13/11/2007', 'Nepalese', '', 'Gorkha', 'Male', 'Three', '18/04/2014', 'profile_photos/photoid@1575519180.jpg', 193, '', '', '2020-01-31 14:22:05'),
(194, 'Tsewang Diki Lama', 'B144', '   22333545                                       ', 'Nepalese', '', 'Gorkha', 'Female', 'Three', '18/04/2014', 'profile_photos/photoid@1575519502.jpg', 194, '', '', '2020-01-31 14:22:05'),
(195, 'Tenzin Dolha Lama', 'B173', '17/08/2009', 'Nepalese', '', 'Gorkha', 'Female', 'Three', '15/04/2015', 'profile_photos/photoid@1575604768.jpg', 195, '', '', '2020-01-31 14:22:05'),
(196, 'Tsering Chodon Lama', 'B174', '19/01/2008', 'Nepalese', '', 'Gorkha', 'Female', 'Three', '15/04/2015', 'profile_photos/photoid@1575605660.jpg', 196, '', '', '2020-01-31 14:22:05'),
(197, 'Nyima Tsomo Sherpa', 'B188', '04/08/2008', 'Nepalese', '', 'Nuwakot', 'Female', 'Three', '15/04/2015', 'profile_photos/photoid@1575606497.jpg', 197, '', '', '2020-01-31 14:22:05'),
(198, 'Lhakpa Tsomo Sherpa', 'B190', '07/02/2008', 'Nepalese', '', 'Nuwakot', 'Female', 'Three', '15/04/2015', 'profile_photos/photoid@1575607337.jpg', 198, '', '', '2020-01-31 14:22:05'),
(199, 'Nyima Norbu Tamang', 'B198', '19/11/2006', 'Nepalese', '', 'Thuman, Rasuwa', 'Male', 'Three', '16/04/2015', 'profile_photos/photoid@1575608004.jpg', 199, '', '', '2020-01-31 14:22:05'),
(200, 'Dorje Lhamu Lama', 'B199', '26/06/2007', 'Nepalese', '', 'Gorkha', 'Female', 'Three', '16/03/2015', 'profile_photos/photoid@1575608862.jpg', 200, '', '', '2020-01-31 14:22:05'),
(201, 'Pema Bhutti Lama', 'B202', '15/01/2007', 'Nepalese', '', 'Gorkha', 'Female', 'Three', '20/04/2015', 'profile_photos/photoid@1576034117.jpg', 201, '', '', '2020-01-31 14:22:05'),
(202, 'Phu Doma Sherpa', 'B236', '29/10/2008', 'Nepalese', '', 'Karthali', 'Female', 'Three', '24/04/2017', 'profile_photos/photoid@1576034603.jpg', 202, '', '', '2020-01-31 14:22:05'),
(203, 'Pema Yangzom Lama', 'B243', '13/02/2008', 'Nepalese', '', 'Mugu', 'Female', 'Three', '24/04/2017', 'profile_photos/photoid@1576035079.jpg', 203, '', '', '2020-01-31 14:22:05'),
(204, 'Basu Buda', 'B284', '07/04/2012', 'Nepalese', '', 'Dolpa', 'Male', 'Three', '10/04/2018', 'profile_photos/photoid@1576035719.jpg', 204, '', '', '2020-01-31 14:22:05'),
(205, 'Talghar Tamang Lama', 'B292', '18/03/2006', 'Nepalese', '', 'Mugu', 'Female', 'Three', '10/04/2018', 'profile_photos/photoid@1576036332.jpg', 205, '', '', '2020-01-31 14:22:05'),
(206, 'Pema Lhamu Lama', 'B306', '21/12/2006', 'Nepalese', '', 'Mugu', 'Female', 'Three', '10/04/2018', 'profile_photos/photoid@1576036956.jpg', 206, '', '', '2020-01-31 14:22:05'),
(207, 'Urgen Dolma Tamang', 'B313', '25/02/2007', 'Nepalese', '', 'Mugu', 'Female', 'Three', '10/04/2018', 'profile_photos/photoid@1576037607.jpg', 207, '', '', '2020-01-31 14:22:05'),
(208, 'Jamyang Angmo lama', 'B321', '24/06/2007', 'Nepalese', '', 'Mugu', 'Female', 'Three', '10/04/2018', 'profile_photos/photoid@1576037909.jpg', 208, '', '', '2020-01-31 14:22:05'),
(209, 'Ngoedup Sangmo Tamang', 'B323', '14/03/2008', 'Nepalese', '', 'Mugu', 'Female', 'Three', '10/04/2018', 'profile_photos/photoid@1576038186.jpg', 209, '', '', '2020-01-31 14:22:05'),
(210, 'Tsering Dorjee Lama', 'B347', '14/04/2006', 'Nepalese', '', 'Gorkha', 'Male', 'Three', '20/02/2019', 'profile_photos/photoid@1576038476.jpg', 210, '', '', '2020-01-31 14:22:05'),
(211, 'Jaypu Lama', 'B390', '10/11/2010', 'Nepalese', '', 'Taplejung', 'Male', 'Three', '16/04/2018', 'profile_photos/photoid@1576039147.jpg', 211, '', '', '2020-01-31 14:22:05'),
(212, 'Tulsi Khatri', 'B09', '04/07/2007                                        ', 'Nepalese', '', 'Dolpa', 'Female', 'Two', '21/04/2014', 'profile_photos/photoid@1576643597.jpg', 212, '', '', '2020-01-31 14:22:05'),
(213, 'Yangzen lama', 'B49', '25/12/2008', 'Nepalese', '', 'Gorkha', 'Female', 'Two', '22/04/2014', 'profile_photos/photoid@1576643945.jpg', 213, '', '', '2020-01-31 14:22:05'),
(214, 'Sangye Dorje Gurung', 'B70', '17/04/2012', 'Nepalese', '', 'Gorkha', 'Female', 'Two', '18/04/2014', 'profile_photos/photoid@1576644406.jpg', 214, '', '', '2020-01-31 14:22:05'),
(215, 'Yeshi Dorje Lama', 'B75', '15/07/2009', 'Nepalese', '', 'Gorkha', 'Male', 'Two', '19/04/2014', 'profile_photos/photoid@1576645995.jpg', 215, '', '', '2020-01-31 14:22:05'),
(216, 'Bhu Dorje Lama', 'B117', '12/02/2010', 'Nepalese', '', 'Gorkha', 'Male', 'Two', '18/04/2014', 'profile_photos/photoid@1576646384.jpg', 216, '', '', '2020-01-31 14:22:05'),
(217, 'Mentok Lama', 'B126', '06/06/2007', 'Nepalese', '', 'Manang', 'Female', 'Two', '24/04/2014', 'profile_photos/photoid@1576647148.jpg', 217, '', '', '2020-01-31 14:22:05'),
(218, 'Tsering Sherpa', 'B168', '27/02/2009', 'Nepalese', '', 'Solukhumbu', 'Male', 'Two', '20/04/2014', 'profile_photos/photoid@1576647921.jpg', 218, '', '', '2020-01-31 14:22:05'),
(219, 'Tenzin Rapten Lama', 'B200', '21/12/2006', 'Nepalese', '', 'Gorkha', 'Male', 'Two', '17/04/2015', 'profile_photos/photoid@1576648601.jpg', 219, '', '', '2020-01-31 14:22:05'),
(220, 'Phurba Rinzin Lama', 'B213', '07/09/2008', 'Nepalese', '', 'Gorkha', 'Male', 'Two', '12/04/2016', 'profile_photos/photoid@1576649230.jpg', 220, '', '', '2020-01-31 14:22:05'),
(221, 'Sangey Lama', 'B216', '17/03/2009', 'Nepalese', '', 'Gorkha', 'Male', 'Two', '12/04/2016', 'profile_photos/photoid@1576650019.jpg', 221, '', '', '2020-01-31 14:22:05'),
(222, 'Mingmar Tenzin Sherpa', 'B217', '16/03/2010', 'Nepalese', '', 'Solukhumbu', 'Male', 'Two', '12/04/2016', 'profile_photos/photoid@1576654055.jpg', 222, '', '', '2020-01-31 14:22:05'),
(228, 'Norsang Adhikari', 'B229', '15/08/2011', 'Nepalese', '', 'Jumla', 'Male', 'Two', '14/04/2016', 'profile_photos/photoid@1576727563.jpg', 228, '', '', '2020-01-31 14:22:05'),
(230, 'Gyatso Lama', 'B230', '25/10/2005', 'Nepalese', '', 'Gorkha', 'Male', 'Two', '30/04/2016', 'profile_photos/photoid@1576728090.jpg', 230, '', '', '2020-01-31 14:22:05'),
(231, 'Lhakpa Sherpa', 'B235', '233333333', 'Nepalese', '', 'Sindhupalchok', 'Female', 'Two', '24/04/2017', 'profile_photos/photoid@1576729200.jpg', 231, '', '', '2020-01-31 14:22:05'),
(232, 'Dorje Sherpa', 'B238', '26/09/2007', 'Nepalese', '', 'Sindhupalchok', 'Male', 'Two', '24/04/2017', 'profile_photos/photoid@1576729677.jpg', 232, '', '', '2020-01-31 14:22:05'),
(233, 'Santosh Roka Magar', 'B242', '17/01/2009', 'Nepalese', '', 'Mugu', 'Male', 'Two', '24/04/2017', 'profile_photos/photoid@1576729938.jpg', 233, '', '', '2020-01-31 14:22:05'),
(234, 'Putik Lama', 'B255', '05/10/2006', 'Nepalese', '', 'Mugu', 'Female', 'Two', '24/04/2017', 'profile_photos/photoid@1576734402.jpg', 234, '', '', '2020-01-31 14:22:05'),
(235, 'Tsering Dawa Tamang ', 'B263', '27/07/2009', 'Nepalese', '', 'Rasuwa', 'Male', 'Two', '25/04/2017', 'profile_photos/photoid@1576740382.jpg', 235, '', '', '2020-01-31 14:22:05'),
(236, 'Amrita Thapa', 'B281', '23/04/2009', 'Nepalese', '', 'Dolpa', 'Female', 'Two', '22/02/2018', 'profile_photos/photoid@1576740961.jpg', 236, '', '', '2020-01-31 14:22:05'),
(237, 'Sangey Thiley Tamang', 'B287', '28/05/2008', 'Nepalese', '', 'Mugu', 'Male', 'Two', '10/04/2018', 'profile_photos/photoid@1576741506.jpg', 237, '', '', '2020-01-31 14:22:05'),
(238, 'Pema Dorje Tamang', 'B289', '09/01/2007', 'Nepalese', '', 'Mugu', 'Male', 'Two', '10/04/2018', 'profile_photos/photoid@1576742035.jpg', 238, '', '', '2020-01-31 14:22:05'),
(239, 'Tsewang Sangmu Lama', 'B296', '27/12/2005', 'Nepalese', '', 'Mugu', 'Female', 'Two', '10/04/2018', 'profile_photos/photoid@1576832121.jpg', 239, '', '', '2020-01-31 14:22:05'),
(240, 'Pasang Putit Lama', 'B322', '19/05/2006', 'Nepalese', '', 'Mugu', 'Female', 'Two', '10/04/2018', 'profile_photos/photoid@1576832569.jpg', 240, '', '', '2020-01-31 14:22:05'),
(241, 'Nyima Sangmu Lama', 'B324', '13/04/2008', 'Nepalese', '', 'Mugu', 'Female', 'Two', '10/04/2018', 'profile_photos/photoid@1576832930.jpg', 241, '', '', '2020-01-31 14:22:05'),
(242, 'Tsering Yangzom Tamang', 'B325', '20/12/2007', 'Nepalese', '', 'Mugu', 'Female', 'Two', '10/04/2018', 'profile_photos/photoid@1576833233.jpg', 242, '', '', '2020-01-31 14:22:05'),
(243, 'Doma Sherpa', 'B338', '18/01/2010', 'Nepalese', '', 'Sindhupalchok', 'Female', 'Two', '10/04/2018', 'profile_photos/photoid@1576833554.jpg', 243, '', '', '2020-01-31 14:22:05'),
(244, 'Tsering Aangmu Tamang', 'B350', '23/05/2009', 'Nepalese', '', 'Mugu', 'Female', 'Two', '10/04/2018', 'profile_photos/photoid@1576833859.jpg', 244, '', '', '2020-01-31 14:22:05'),
(245, 'Phurba Gyalgen Lama', 'B370', '23/07/2008', 'Nepalese', '', 'Sindhupalchok', 'Male', 'Two', '10/04/2019', 'profile_photos/photoid@1576834159.jpg', 245, '', '', '2020-01-31 14:22:05'),
(246, 'Anjali Kumari', 'B387', '19/11/2008', 'Nepalese', '', 'Rautahut', 'Female', 'Two', '29/04/2016', 'profile_photos/photoid@1577244633.jpg', 246, '', '', '2020-01-31 14:22:05'),
(247, 'Rahul Kumar Mahato', 'B388', '09/04/2009', 'Nepalese', '', 'Rautahut', 'Male', 'Two', '29/04/2016', 'profile_photos/photoid@1577245558.jpg', 247, '', '', '2020-01-31 14:22:05'),
(248, 'Tashi Lhamu Lama', 'B136', '27/03/2006', 'Nepalese', '', 'Gorkha', 'Female', 'One \'A\'', '18/04/2014', 'profile_photos/photoid@1577246468.jpg', 248, '', '', '2020-01-31 14:22:05'),
(249, 'Dawa Tsering Lama', 'B175', '18/12/2010', 'Nepalese', '', 'Gorkha', 'Male', 'One \'A\'', '10/04/2018O', 'profile_photos/photoid@1577259255.jpg', 249, '', '', '2020-01-31 14:22:05'),
(250, 'Tashi Tsering Lama', 'B183', '02/11/2012', 'Nepalese', '', 'Gorkha', 'Male', 'One \'A\'', '07/08/2015', 'profile_photos/photoid@1577259751.jpg', 250, '', '', '2020-01-31 14:22:05'),
(251, 'Pema Dolma Lama', 'B191', '31/07/2010', 'Nepalese', '', 'Gorkha', 'Female', 'One \'A\'', '15/04/2015', 'profile_photos/photoid@1577260441.jpg', 251, '', '', '2020-01-31 14:22:05'),
(252, 'Pema Namgyal Lama', 'B219', '01/03/2010', 'Nepalese', '', 'Mugu', 'Male', 'One\'A\'', '12/04/2016', 'profile_photos/photoid@1577685408.jpg', 252, '', '', '2020-01-31 14:20:46'),
(253, 'Karma Sherab Gurung', 'B220', '04/10/2009', 'Nepalese', '', 'Manang', 'Male', 'One\'A\'', '12/04/2016', 'profile_photos/photoid@1577685770.jpg', 253, '', '', '2020-01-31 14:20:35'),
(254, 'Dawa Choedon Lama', 'B221', '12/02/2009', 'Nepalese', '', 'Gorkha', 'Female', 'One\'A\'', '12/04/2016', 'profile_photos/photoid@1577686123.jpg', 254, '', '', '2020-01-31 14:20:30'),
(255, 'Dhan Bahadur Gurung', 'B224', '11/05/2010', 'Nepalese', '', 'Gorkha', 'Male', 'One\'A\'', '12/04/2016', 'profile_photos/photoid@1577686503.jpg', 255, '', '', '2020-01-31 14:20:24'),
(256, 'Sohan Tamang', 'B226', '15/06/2009', 'Nepalese', '', 'Nuwakot', 'Male', 'One\'A\'', '13/04/2016', 'profile_photos/photoid@1577686882.jpg', 256, '', '', '2020-01-31 14:20:21'),
(257, 'Dawa Nurbu Sherpa', 'B237', '21/09/2009', 'Nepalese', '', 'Sindupalchowk', 'Male', 'One\'A\'', '24/04/2017', 'profile_photos/photoid@1580363333.jpg', 257, '', '', '2020-01-31 14:20:16'),
(258, 'Sangye Bhuti lama', 'B241', '16/05/2008', 'Nepalese', '', 'Mugu', 'Female', 'One\'A\'', '24/04/2017', 'profile_photos/photoid@1580364455.jpg', 258, '', '', '2020-01-31 14:20:12'),
(259, 'Pema Yangzom Tamang', 'B244', '25/12/2009', 'Nepalese', '', 'Mugu', 'Female', 'One\'A\'', '24/04/2017', 'profile_photos/photoid@1580536099.jpg', 259, '', '', '2020-03-10 05:15:48'),
(260, 'Ugen Wangchuk Tamang', 'B246', '31/07/2006', 'Nepalese', '', 'Mugu', 'Male', 'One\'A\'', '24/04/2017', 'profile_photos/photoid@1580536889.jpg', 260, '', '', '2020-03-10 05:15:48'),
(261, 'Sonam Lhamu Tamang', 'B247', '20/08/2007', 'Nepalese', '', 'Mugu', 'Female', 'One\'A\'', '24/04/2017', 'profile_photos/photoid@1580538284.jpg', 261, '', '', '2020-03-10 05:15:48'),
(262, 'Nyima Futi Sherpa', 'B248', '16/04/2009', 'Nepalese', '', 'Dolhakha', 'Female', 'One\'A\'', '24/04/2017', 'profile_photos/photoid@1580538774.jpg', 262, '', '', '2020-03-10 05:15:48'),
(263, 'Karshi Sherpa', 'B249', '06/03/2012', 'Nepalese', '', 'Dolhakha', 'Female', 'One\'A\'', '24/04/2017', 'profile_photos/photoid@1580539497.jpg', 263, '', '', '2020-03-10 05:15:48'),
(264, 'Tsering Puting Tamang', 'B251', '19/06/2009', 'Nepalese', '', 'Mugu', 'Female', 'One\'A\'', '24/04/2017', 'profile_photos/photoid@1580545325.jpg', 264, '', '', '2020-03-10 05:15:48'),
(265, 'Pema Dolma Lama', 'B253', '30/11/2007', 'Nepalese', '', 'Mugu', 'Female', 'One\'A\'', '24/04/2017', 'profile_photos/photoid@1580545669.jpg', 265, '', '', '2020-03-10 05:15:48'),
(266, 'Nyima Dorje Lama', 'B254', '18/10/2009', 'Nepalese', '', 'Mugu', 'Male', 'One\'A\'', '24/04/2017', 'profile_photos/photoid@1580546050.jpg', 266, '', '', '2020-03-10 05:15:48'),
(267, 'Kungyab Lama', 'B256', '12/01/2009', 'Nepalese', '', 'Mugu', 'Male', 'One\'A\'', '24/04/2017', 'profile_photos/photoid@1580546597.jpg', 267, '', '', '2020-03-10 05:15:48'),
(268, 'Lhenzom Dolma Lama', 'B257', '27/11/2006', 'Nepalese', '', 'Mugu', 'Female', 'One\'A\'', '24/04/2017', 'profile_photos/photoid@1580622837.jpg', 268, '', '', '2020-03-10 05:15:48'),
(269, 'Gyamzo Lama', 'B295', '02/02/2009', 'Nepalese', '', 'Mugu', 'Male', 'One\'A\'', '10/04/2018', 'profile_photos/photoid@1580623551.jpg', 269, '', '', '2020-03-10 05:15:48'),
(270, 'Nyima Thinley Tamang ', 'B311', '13/08/2009', 'Nepalese', '', 'Mugu', 'Male', 'One\'A\'', '10/04/2018', 'profile_photos/photoid@1580624106.jpg', 270, '', '', '2020-03-10 05:15:48'),
(271, 'Passang Doma Sherpa', 'B375', '18/10/2012', 'Nepalese', '', 'Ilam', 'Female', 'One\'A\'', '13/04/2019', 'profile_photos/photoid@1580624423.jpg', 271, '', '', '2020-03-10 05:15:48'),
(273, 'Karma Tsewang Lama', 'B55', '30/11/2008', 'Nepalese', '', 'Gorkha', 'Male', 'One\'B\'', '18/04/2014', 'profile_photos/photoid@1580720268.jpg', 273, '', '', '2020-03-10 05:15:48'),
(274, 'Pemba Rinzin Sherpa', 'B120', '18/01/2003', 'Nepalese', '', 'Dolakha', 'Male', 'One\'B\'', '21/04/2014', 'profile_photos/photoid@1580720606.jpg', 274, '', '', '2020-03-10 05:15:48'),
(275, 'Gyurme Gyaltsen Lama', 'B132', '26/07/2009', 'Nepalese', '', 'Gorkha', 'Male', 'One\'B\'', '18/04/2014', 'profile_photos/photoid@1580720903.jpg', 275, '', '', '2020-03-10 05:15:48'),
(276, 'Dorje Lama', 'B139', '28/09/2005', 'Nepalese', '', 'Gorkha', 'Male', 'One\'B\'', '18/04/2014', 'profile_photos/photoid@1580721278.jpg', 276, '', '', '2020-03-10 05:15:48'),
(277, 'Phurbu Sangmo Lama', 'B153', 'rdfhhihi', 'Nepalese', '', 'Gorkha', 'Female', 'One\'B\'', '18/04/2014', 'profile_photos/photoid@1580722480.jpg', 277, '', '', '2020-03-10 05:15:48'),
(278, 'Norbu Gyaltsen Lama', 'B172', '07/02/2010', 'Nepalese', '', 'Manang', 'Male', 'One\'B\'', '15/04/2015', 'profile_photos/photoid@1580786978.jpg', 278, '', '', '2020-03-10 05:15:48'),
(279, 'Dawa Norbu Sherpa', 'B259', '29/06/2009', 'Nepalese', '', 'Nuwakot', 'Male', 'One\'B\'', '24/04/2017', 'profile_photos/photoid@1580787248.jpg', 279, '', '', '2020-03-10 05:15:48'),
(280, 'Tsering Dorje Tamang', 'B264', '16/02/2009', 'Nepalese', '', 'Rasuwa', 'Male', 'One\'B\'', '25/04/2017', 'profile_photos/photoid@1580787614.jpg', 280, '', '', '2020-03-10 05:15:48'),
(281, 'Pema Sang Dorje Tamang', 'B265', '15/02/2008', 'Nepalese', '', 'Dolakha', 'Male', 'One\'B\'', '25/04/2017', 'profile_photos/photoid@1580788142.jpg', 281, '', '', '2020-03-10 05:15:48'),
(282, 'Dawa Phutik Lama', 'B269', '20/12/2010', 'Nepalese', '', 'Mugu', 'Female', 'One\'B\'', '24/04/2017', 'profile_photos/photoid@1580788603.jpg', 282, '', '', '2020-03-10 05:15:48'),
(283, 'Tsuldim Angmo Lama', 'B270', '23/02/2009', 'Nepalese', '', 'Mugu', 'Female', 'One\'B\'', '24/04/2017', 'profile_photos/photoid@1580788994.jpg', 283, '', '', '2020-03-10 05:15:48'),
(284, 'Anmin Buda', 'B273', '21/03/2008', 'Nepalese', '', 'Mugu', 'Male', 'One\'B\'', '16/04/2018', 'profile_photos/photoid@1580789884.jpg', 284, '', '', '2020-03-10 05:15:48'),
(285, 'Min Bahadur Tamang', 'B274', '23/09/2008', 'Nepalese', '', 'Sindhupalchok', 'Male', 'One\'B\'', '26/04/2017', 'profile_photos/photoid@1580790371.jpg', 285, '', '', '2020-03-10 05:15:48'),
(286, 'Yangzen Toma Lama', 'B291', '30/10/2008', 'Nepalese', '', 'Mugu', 'Female', 'One\'B\'', '10/04/2018', 'profile_photos/photoid@1580790712.jpg', 286, '', '', '2020-03-10 05:15:48'),
(287, 'Inzom Tamang Lama', 'B298', '03/03/2003', 'Nepalese', '', 'Mugu', 'Female', 'One\'B\'', '10/04/2018', 'profile_photos/photoid@1580791041.jpg', 287, '', '', '2020-03-10 05:15:48'),
(288, 'Sonam Sangmu Lama', 'B299', '02/06/2006', 'Nepalese', '', 'Mugu', 'Female', 'One\'B\'', '10/04/2018', 'profile_photos/photoid@1580791327.jpg', 288, '', '', '2020-03-10 05:15:48'),
(291, 'Toma Yangzom Lama', 'B301', '15/06/2009', 'Nepalese', '', 'Mugu', 'Female', 'One\'B\'', '10/04/2018', 'profile_photos/photoid@1580793971.jpg', 291, '', '', '2020-03-10 05:15:48'),
(292, 'Tsering Lhamu Lama', 'B307', '15/06/2009', 'Nepalese', '', 'Mugu', 'Female', 'One\'B\'', '10/04/2018', 'profile_photos/photoid@1580794748.jpg', 292, '', '', '2020-03-10 05:15:48'),
(293, 'Pema Lhamu Lama', 'B312', '04/10/2008', 'Nepalese', '', 'Mugu', 'Female', 'One\'B\'', '10/04/2018', 'profile_photos/photoid@1580795079.jpg', 293, '', '', '2020-03-10 05:15:48'),
(294, 'Pema Yangzom Sira Lama', 'B319', '14/04/2008', 'Nepalese', '', 'Mugu', 'Female', 'One\'B\'', '10/04/2018', 'profile_photos/photoid@1580795460.jpg', 294, '', '', '2020-03-10 05:15:48'),
(295, 'Karsang Namdol Tamang', 'B326', '23/01/2006', 'Nepalese', '', 'Mugu', 'Male', 'One\'B\'', '10/04/2018', 'profile_photos/photoid@1580795794.jpg', 295, '', '', '2020-03-10 05:15:48'),
(296, 'Pema Dhundup Lama', 'B331', '27/05/2010', 'Nepalese', '', 'Gorkha', 'Male', 'One\'B\'', '10/04/2018', 'profile_photos/photoid@1580796095.jpg', 296, '', '', '2020-03-10 05:15:48'),
(297, 'Da Lamu Tamang', 'B332', '29/11/2006', 'Nepalese', '', 'Sindhupalchok', 'Female', 'One\'B\'', '10/04/2018', 'profile_photos/photoid@1580796571.jpg', 297, '', '', '2020-03-10 05:15:48'),
(299, 'Sirjana Buda Magar', 'B17', '18/11/2007', 'Nepalese', '', 'Rukum Balekhu', 'Female', 'One\'B\'', '24/04/2017', 'profile_photos/photoid@1580800761.jpg', 299, '', '', '2020-03-10 05:15:48'),
(300, 'Tsering Lhamu Tamang', 'B245', '20/12/2011', 'Nepalese', '', 'Mugu', 'Female', 'U.K.G \'A\'', '24/04/2017', 'profile_photos/photoid@1580801357.jpg', 300, '', '', '2020-03-10 05:15:48'),
(301, 'Nyima Potay Tamang', 'B252', '17/04/2008', 'Nepalese', '', 'Mugu', 'Female', 'U.K.G \'A\'', '24/04/2017', 'profile_photos/photoid@1580801766.jpg', 301, '', '', '2020-03-10 05:15:48'),
(302, 'Thinley Sangmo Lama', 'B258', '19/11/2011', 'Nepalese', '', 'Mugu', 'Female', 'U.K.G \'A\'', '24/04/2017', 'profile_photos/photoid@1580802256.jpg', 302, '', '', '2020-03-10 05:15:48'),
(303, 'Tsering Dolma Lama', 'B261', '06/01/2014', 'Nepalese', '', 'Gorkha', 'Female', 'U.K.G \'A\'', '24/04/2017', 'profile_photos/photoid@1580802695.jpg', 303, '', '', '2020-03-10 05:15:48'),
(304, 'Passang  Ghale', 'B262', '25/12/2010', 'Nepalese', '', 'Rasuwa', 'Female', 'U.K.G \'A\'', '25/04/2017', 'profile_photos/photoid@1580803128.jpg', 304, '', '', '2020-03-10 05:15:48'),
(305, 'Ramil Gurung', 'B228', '29/01/2011', 'Nepalese', '', 'Gorkha', 'Male', 'U.K.G \'A\'', '13/04/2016', 'profile_photos/photoid@1580874933.jpg', 305, '', '', '2020-03-10 05:15:48'),
(306, 'Samphel Dhundup Lama', 'B285', '21/11/2010', 'Nepalese', '', 'Mugu', 'Male', 'U.K.G \'A\'', '10/04/2018', 'profile_photos/photoid@1580875325.jpg', 306, '', '', '2020-03-10 05:15:48'),
(307, 'Techen Toma Tamang', 'B288', '18/12/2011', 'Nepalese', '', 'Mugu', 'Female', 'U.K.G \'A\'', '10/04/2018', 'profile_photos/photoid@1580875563.jpg', 307, '', '', '2020-03-10 05:15:48'),
(308, 'Tsering Angmu Tamang', 'B290', '25/07/2008', 'Nepalese', '', 'Mugu', 'Female', 'U.K.G \'A\'', '10/04/2018', 'profile_photos/photoid@1580875879.jpg', 308, '', '', '2020-03-10 05:15:48'),
(309, 'Kunsang Lhamu Tamang', 'B294', '25/12/2008', 'Nepalese', '', 'Mugu', 'Female', 'U.K.G \'A\'', '10/04/2018', 'profile_photos/photoid@1580876179.jpg', 309, '', '', '2020-03-10 05:15:48'),
(310, 'Tsering Lhamu Tamang Lama', 'B297', '13/12/2011', 'Nepalese', '', 'Mugu', 'Female', 'U.K.G \'A\'', '10/04/2018', 'profile_photos/photoid@1580876632.jpg', 310, '', '', '2020-03-10 05:15:48'),
(311, 'Jyabyang Amu Lama', 'B300', '18/12/2011', 'Nepalese', '', 'Mugu', 'Female', 'U.K.G \'A\'', '10/04/2018', 'profile_photos/photoid@1580877163.jpg', 311, '', '', '2020-03-10 05:15:48'),
(312, 'Pema Dolma Lama', 'B304', '9/04/2009', 'Nepalese', '', 'Mugu', 'Female', 'U.K.G \'A\'', '10/04/2018', 'profile_photos/photoid@1580877578.jpg', 312, '', '', '2020-03-10 05:15:48'),
(313, 'Tashi Lhamu Lama', 'B305', '21/11/2011', 'Nepalese', '', 'Mugu', 'Female', 'U.K.G \'A\'', '10/04/2018', 'profile_photos/photoid@1580877907.jpg', 313, '', '', '2020-03-10 05:15:48'),
(314, 'Rinchen Dolma Tamang', 'B308', '31/07/2006', 'Nepalese', '', 'Mugu', 'Female', 'U.K.G \'A\'', '10/04/2018', 'profile_photos/photoid@1580879314.jpg', 314, '', '', '2020-03-10 05:15:48'),
(318, 'Nyima Sangmu Tamang', 'B309', '05/12/2011', 'Nepalese', '', 'Mugu', 'Female', 'U.K.G \'A\'', '10/04/2018', 'profile_photos/photoid@1580881478.jpg', 318, '', '', '2020-03-10 05:15:48'),
(319, 'Pema Tsering Lama', 'B310', '20/12/2010', 'Nepalese', '', 'Mugu', 'Male', 'U.K.G \'A\'', '10/04/2018', 'profile_photos/photoid@1580881762.jpg', 319, '', '', '2020-03-10 05:15:48'),
(320, 'Kunsang Choten Lama', 'B348', '18/12/2012', 'Nepalese', '', 'Gorkha', 'Female', 'U.K.G \'A\'', '05/05/2018', 'profile_photos/photoid@1580882059.jpg', 320, '', '', '2020-03-10 05:15:48'),
(321, 'Kunga Gyaljan Tamang', 'B349', '26/08/2009', 'Nepalese', '', 'Lhasa', 'Male', 'U.K.G \'A\'', '16/04/2018', 'profile_photos/photoid@1580882457.jpg', 321, '', '', '2020-03-10 05:15:48'),
(322, 'Lhakpa Diki Lama', 'B352', '23/03/2011', 'Nepalese', '', 'Gorkha', 'Female', 'U.K.G \'A\'', '09/04/2019', 'profile_photos/photoid@1580882905.jpg', 322, '', '', '2020-03-10 05:15:48'),
(323, 'Soniya Moktan', 'B357', '15/09/2009', 'Nepalese', '', 'Makwanpur', 'Female', 'U.K.G \'A\'', '09/04/2019', 'profile_photos/photoid@1580883323.jpg', 323, '', '', '2020-03-10 05:15:48'),
(324, 'Shanti Gurung', 'B382', '04/05/2011', 'Nepalese', '', 'Sirdibhas', 'Female', 'U.K.G \'A\'', '25/04/2019', 'profile_photos/photoid@1580883694.jpg', 324, '', '', '2020-03-10 05:15:48'),
(325, 'Passang Lhamu Tamang', 'B391', '28/04/2011', 'Nepalese', '', 'Mugu', 'Female', 'U.K.G \'A\'', '02/05/2018', 'profile_photos/photoid@1580887025.jpg', 325, '', '', '2020-03-10 05:15:48'),
(326, 'Dawa Dolma Lama', 'B276', '26/08/2010', 'Nepalese', '', 'Gorkha', 'Female', 'U.K.G \'A\'', '01/06/2017', 'profile_photos/photoid@1580887617.jpg', 326, '', '', '2020-03-10 05:15:48'),
(328, 'Lapa Tolma Thapa', 'B278', '20/08/2010', 'Nepalese', '', 'Dolpa', 'Female', 'U.K.G \'B\'', '22/02/2018', 'profile_photos/photoid@1580888467.jpg', 328, '', '', '2020-03-10 05:15:48'),
(329, 'Passang Lhamu Lama', 'B279', '26/03/2010', 'Nepalese', '', 'Dolpa', 'Female', 'U.K.G \'B\'', '22/02/2018', 'profile_photos/photoid@1580888744.jpg', 329, '', '', '2020-03-10 05:15:48'),
(330, 'Kanjo Budha', 'B280', '18/06/2010', 'Nepalese', '', 'Dolpa', 'Female', 'U.K.G \'B\'', '22/02/2018', 'profile_photos/photoid@1580889049.jpg', 330, '', '', '2020-03-10 05:15:48'),
(331, 'Tsoyang Torje Tamang', 'B314', '15/04/2008', 'Nepalese', '', 'Mugu', 'Male', 'U.K.G \'B\'', '10/04/2018', 'profile_photos/photoid@1580889303.jpg', 331, '', '', '2020-03-10 05:15:48'),
(332, 'Karma Phuntsok Lama', 'B315', '28/08/2011', 'Nepalese', '', 'Mugu', 'Male', 'U.K.G \'B\'', '10/04/2018', 'profile_photos/photoid@1581047269.jpg', 332, '', '', '2020-03-10 05:15:48'),
(333, 'Dawa Lhamu Tamang', 'B316', '04/10/2011', 'Nepalese', '', 'Sindhupalchok', 'Female', 'U.K.G \'B\'', '10/04/2018', 'profile_photos/photoid@1581047561.jpg', 333, '', '', '2020-03-10 05:15:48'),
(334, 'Yeshi Dolma Sira Lama', 'B317', '28/04/2010', 'Nepalese', '', 'Mugu', 'Female', 'U.K.G \'B\'', '10/04/2018', 'profile_photos/photoid@1581047808.jpg', 334, '', '', '2020-03-10 05:15:48'),
(335, 'Pasang Tamang', 'B318', '27/04/2008', 'Nepalese', '', 'Mugu', 'Male', 'U.K.G \'B\'', '10/04/2018', 'profile_photos/photoid@1581047977.jpg', 335, '', '', '2020-03-10 05:15:48'),
(336, 'Paljor Tsering Tamang', 'B320', '26/08/2010', 'Nepalese', '', 'Mugu', 'Male', 'U.K.G \'B\'', '10/04/2018', 'profile_photos/photoid@1581048364.jpg', 336, '', '', '2020-03-10 05:15:48'),
(337, 'Lhakpa Tsogyal Sherpa', 'B327', '26/08/2010', 'Nepalese', '', 'Taplejung', 'Male', 'U.K.G \'B\'', '10/04/2018', 'profile_photos/photoid@1581049064.jpg', 337, '', '', '2020-03-10 05:15:48'),
(338, 'Pema Gyatso Lama', 'B329', '27/05/2010', 'Nepalese', '', 'Gorkha', 'Male', 'U.K.G \'B\'', '10/04/2018', 'profile_photos/photoid@1581049266.jpg', 338, '', '', '2020-03-10 05:15:48'),
(339, 'Nyima Tamang', 'B330', '29/01/2007', 'Nepalese', '', 'Sindhupalchok', 'Male', 'U.K.G \'B\'', '10/04/2018', 'profile_photos/photoid@1581049754.jpg', 339, '', '', '2020-03-10 05:15:48'),
(340, 'Phurbi Sherpa', 'B333', '26/03/2012', 'Nepalese', '', 'Dolakha', 'Female', 'U.K.G \'B\'', '10/04/2018', 'profile_photos/photoid@1581051938.jpg', 340, '', '', '2020-03-10 05:15:48'),
(341, 'Jip Tsering Sherpa', 'B335', '27/12/2008', 'Nepalese', '', 'Dolakha', 'Male', 'U.K.G \'B\'', '10/04/2018', 'profile_photos/photoid@1581052218.jpg', 341, '', '', '2020-03-10 05:15:48'),
(342, 'Dawa Tamang ', 'B337', '26/11/2011', 'Nepalese', '', 'Sindhupalchok', 'Male', 'U.K.G \'B\'', '10/04/2018', 'profile_photos/photoid@1581052702.jpg', 342, '', '', '2020-03-10 05:15:48'),
(343, 'Pema Khando Lama', 'B340', '25/12/2007', 'Nepalese', '', 'Mugu', 'Male', 'U.K.G \'B\'', '10/04/2018', 'profile_photos/photoid@1581053003.jpg', 343, '', '', '2020-03-10 05:15:48'),
(344, 'Som Bdr. Tamang', 'B341', '30/10/2008', 'Nepalese', '', 'Nuwakot', 'Male', 'U.K.G \'B\'', '24/04/2018', 'profile_photos/photoid@1581053507.jpg', 344, '', '', '2020-03-10 05:15:48'),
(345, 'Sanja Bdr. Tamang', 'B342', '01/08/2010', 'Nepalese', '', 'Nuwakot', 'Male', 'U.K.G \'B\'', '17/04/2018', 'profile_photos/photoid@1581053914.jpg', 345, '', '', '2020-03-10 05:15:48'),
(346, 'karma Lama', 'B345', '24/05/2010', 'Nepalese', '', 'Sindhupalchok', 'Male', 'U.K.G \'B\'', '19/04/2018', 'profile_photos/photoid@1581054207.jpg', 346, '', '', '2020-03-10 05:15:48'),
(350, 'Kalpana Buda Magar', 'B351', '19/04/2010', 'Nepalese', '', 'Gumlibang', 'Male', 'U.K.G \'B\'', '15/05/2018', 'profile_photos/photoid@1581055629.jpg', 350, '', '', '2020-03-10 05:15:48');
INSERT INTO `student` (`id`, `name`, `addnum`, `dob`, `nationality`, `email`, `currentaddress`, `gender`, `grade`, `doj`, `image`, `pid`, `talent`, `specify`, `updatetime`) VALUES
(353, 'Cir Kaji Gurung', 'B346', '27/02/2008', 'Nepalese', '', 'Gorkha', 'Male', 'U.K.G \'B\'', '05/05/2018', 'profile_photos/photoid@1581056402.jpg', 353, '', '', '2020-03-10 05:15:48'),
(354, 'Urgen Wangchuk Sherpa', 'B353', '17/03/2012', 'Nepalese', '', 'Sindhupalchok', 'Male', 'U.K.G \'B\'', '09/04/2019', 'profile_photos/photoid@1581056774.jpg', 354, '', '', '2020-03-10 05:15:48'),
(355, 'Sumjo Lama', 'B355', '22/02/2011', 'Nepalese', '', 'Bolongshe', 'Male', 'U.K.G \'B\'', '09/04/2019', 'profile_photos/photoid@1581059949.jpg', 355, '', '', '2020-03-10 05:15:48'),
(356, 'Sapana Ghole ', 'B358', '22/01/2008', 'Nepalese', '', 'Ngagunjal', 'Female', 'U.K.G \'B\'', '09/04/2019', 'profile_photos/photoid@1581060557.jpg', 356, '', '', '2020-03-10 05:15:48'),
(357, 'Tsering Dawa Tamang', 'B365', '26/05/2008', 'Nepalese', '', 'Rasuwa', 'Female', ' Four', '09/04/2019', 'profile_photos/photoid@1581061055.jpg', 357, '', '', '2020-03-10 05:15:48'),
(358, 'Kunchok Dolma Lama', 'B260', '30/12/2012', 'Nepalese', '', 'Gorkha', 'Female', 'L.K.G', '24/04/2017', 'profile_photos/photoid@1581222348.jpg', 358, '', '', '2020-03-10 05:15:48'),
(359, 'Tsering Dorje Sherpa', 'B293', '23/02/2010', 'Nepalese', '', 'Mugu', 'Male', 'L.K.G', '10/04/2018', 'profile_photos/photoid@1581222710.jpg', 359, '', '', '2020-03-10 05:15:48'),
(360, 'Nima Dawa Sherpa', 'B334', '16/06/2013', 'Nepalese', '', 'Sindhupalchok', 'Male', 'L.K.G', '10/04/2018', 'profile_photos/photoid@1581223136.jpg', 360, '', '', '2020-03-10 05:15:48'),
(361, 'Lhakpa Lama', 'B344', '28/04/2013', 'Nepalese', '', 'Gorkha', 'Female', 'L.K.G', '09/04/2018', 'profile_photos/photoid@1581223487.jpg', 361, '', '', '2020-03-10 05:15:48'),
(380, 'Lokte Tamang', 'B354', '10/04/2012', 'Nepalese', '', 'Nuwakot', 'Male', 'L.K.G', '09/04/2019', 'profile_photos/photoid@1581308912.jpg', 380, '', '', '2020-03-10 05:15:48'),
(381, 'Chhenam Lama', 'B356', '04/10/2011', 'Nepalese', '', 'Makwanpur', 'Male', 'L.K.G', '09/04/2019', 'profile_photos/photoid@1581309577.jpg', 381, '', '', '2020-03-10 05:15:48'),
(382, 'Lhakpa Dhundup Tamang', 'B359', '14/03/2013', 'Nepalese', '', 'Rasuwa', 'Male', 'L.K.G', '09/04/2019', 'profile_photos/photoid@1581310042.jpg', 382, '', '', '2020-03-10 05:15:48'),
(383, 'Mingmar Diki Tamang', 'B360', '02/05/2012', 'Nepalese', '', 'Rasuwa', 'Female', 'L.K.G', '09/04/2019', 'profile_photos/photoid@1581310322.jpg', 383, '', '', '2020-03-10 05:15:48'),
(384, 'Nyim Dorje Sherpa', 'B361', '18/10/2009', 'Nepalese', '', 'Khotang', 'Male', 'L.K.G', '09/04/2019', 'profile_photos/photoid@1581310751.jpg', 384, '', '', '2020-03-10 05:15:48'),
(385, 'Phurpa Lhamu Sherpa', 'B362', '27/11/2006', 'Nepalese', '', 'Helambu', 'Female', 'L.K.G', '09/04/2019', 'profile_photos/photoid@1581315359.jpg', 385, '', '', '2020-03-10 05:15:48'),
(386, 'Nima Dolma Sherpa', 'B363', '26/08/2010', 'Nepalese', '', 'Phulpingkahi', 'Female', 'L.K.G', '09/04/2019', 'profile_photos/photoid@1581315753.jpg', 386, '', '', '2020-03-10 05:15:48'),
(387, 'Lhakpa Tsering Sherpa', 'B364', '27/11/2006', 'Nepalese', '', 'Sindhupalchok', 'Female', 'L.K.G', '09/04/2019', 'profile_photos/photoid@1581315943.jpg', 387, '', '', '2020-03-10 05:15:48'),
(388, 'Tenjin Lhakpa Sherpa', 'B366', '25/07/2013', 'Nepalese', '', 'Rasuwa', 'Male', 'L.K.G', '10/04/2019', 'profile_photos/photoid@1581319653.jpg', 388, '', '', '2020-03-10 05:15:48'),
(389, 'Yeshi Lama', 'B367', '31/12/2013', 'Nepalese', '', 'Gorkha', 'Female', 'L.K.G', '10/04/2019', 'profile_photos/photoid@1581319959.jpg', 389, '', '', '2020-03-10 05:15:48'),
(390, 'Renjin Norbu Lama', 'B368', '23/04/2011', 'Nepalese', '', 'Gorkha', 'Male', 'L.K.G', '10/04/2019', 'profile_photos/photoid@1581320253.jpg', 390, '', '', '2020-03-10 05:15:48'),
(392, 'Sangye Lhamu Lama', 'B372', '12/04/2011', 'Nepalese', '', 'Gorkha', 'Female', 'L.K.G', '10/04/2019', 'profile_photos/photoid@1581321212.jpg', 392, '', '', '2020-03-10 05:15:48'),
(393, 'Tenzin Phuntsok Lama', 'B373', '25/03/2013', 'Nepalese', '', 'Gorkha', 'Male', 'L.K.G', '10/04/2019', 'profile_photos/photoid@1581321462.jpg', 393, '', '', '2020-03-10 05:15:48'),
(394, 'Ngawang Norbu Tamang', 'B374', '09/11/2013', 'Nepalese', '', 'Sindhupalchok', 'Male', 'L.K.G', '10/04/2019', 'profile_photos/photoid@1581325366.jpg', 394, '', '', '2020-03-10 05:15:48'),
(395, 'Una Gurung ', 'B377', '27/10/2013', 'Nepalese', '', 'Gorkha', 'Female', 'L.K.G', '14/04/2019', 'profile_photos/photoid@1581326263.jpg', 395, '', '', '2020-03-10 05:15:48'),
(396, 'Aakash Gurung', 'B378', '10/02/2015', 'Nepalese', '', 'Gorkha', 'Male', 'L.K.G', '14/04/2019', 'profile_photos/photoid@1581326597.jpg', 396, '', '', '2020-03-10 05:15:48'),
(397, 'Ash Bahadur Gurung', 'B379', '20/06/2014', 'Nepalese', '', 'Gorkha', 'Male', 'L.K.G', '15/04/2019', 'profile_photos/photoid@1581326893.jpg', 397, '', '', '2020-03-10 05:15:48'),
(398, 'Ukesh Gurung', 'B376', ' 12/02/2012', 'Nepalese', '', 'Gorkha', 'Male', 'L.K.G', '14/04/2019', 'profile_photos/photoid@1581391803.jpg', 398, '', '', '2020-03-10 05:15:48'),
(399, 'Anish Ghising', 'B380', '19/10/2012', 'Nepalese', '', 'Hetauda', 'Male', 'L.K.G', '17/04/2019', 'profile_photos/photoid@1581392247.jpg', 399, '', '', '2020-03-10 05:15:48'),
(400, 'Rinjin Thokyal Lama', 'B381', '24/03/2010', 'Nepalese', '', 'Gorkha', 'Male', 'L.K.G', '23/04/2019', 'profile_photos/photoid@1581392536.jpg', 400, '', '', '2020-03-10 05:15:48'),
(401, 'Akash Gurung', 'B384', '17/02/2014', 'Nepalese', '', 'Gorkha', 'Male', 'L.K.G', '09/04/2019', 'profile_photos/photoid@1581392993.jpg', 401, '', '', '2020-03-10 05:15:48'),
(402, 'Sabina Buda Magar', 'B385', '19/05/2014', 'Nepalese', '', 'Rukum ', 'Female', 'L.K.G', '07/05/2019', 'profile_photos/photoid@1581395054.jpg', 402, '', '', '2020-03-10 05:15:48'),
(403, 'Pemba Tashi', 'B392', '27/06/2011', 'Nepalese', '', 'Mugu', 'Male', 'L.K.G', '09/04/2019', 'profile_photos/photoid@1581395580.jpg', 403, '', '', '2020-03-10 05:15:48'),
(404, 'Tsewang Khando Gurung', 'B393', '20/10/2008', 'Nepalese', '', 'Dolpa', 'Female', 'L.K.G', '10/04/2019', 'profile_photos/photoid@1581395952.jpg', 404, '', '', '2020-03-10 05:15:48'),
(405, 'Suman Tamang', 'B394', '19/02/2012', 'Nepalese', '', 'Kageshwori Manohara', 'Male', 'L.K.G', '11/04/2018', 'profile_photos/photoid@1581396431.jpg', 405, '', '', '2020-03-10 05:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `schoolname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `db_name` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `border` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `schoolname`, `username`, `password`, `email`, `contact`, `db_name`, `logo`, `border`) VALUES
(1, 'Padmai Ga-tshal Choiling School', 'admin', 'admin', 'kaphle.shrijal9@gmail.com', '9843564504', 'academics', 'schoolLogo/logoid@1580367420.png', 'border/borderid@1583051601.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graph`
--
ALTER TABLE `graph`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `healthstatus`
--
ALTER TABLE `healthstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`addnum`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `graph`
--
ALTER TABLE `graph`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guardian`
--
ALTER TABLE `guardian`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=406;

--
-- AUTO_INCREMENT for table `healthstatus`
--
ALTER TABLE `healthstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=406;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
