-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 07, 2018 at 03:55 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `roomtype` varchar(255) NOT NULL,
  `numofguest` varchar(255) NOT NULL,
  `checkindate` varchar(255) NOT NULL,
  `checkoutdate` varchar(255) NOT NULL,
  `paymenttype` varchar(255) NOT NULL,
  `creditcardno` varchar(255) NOT NULL,
  `cardholdername` varchar(255) NOT NULL,
  `expirydate` varchar(255) NOT NULL,
  `cvc` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `cust_id`, `roomtype`, `numofguest`, `checkindate`, `checkoutdate`, `paymenttype`, `creditcardno`, `cardholdername`, `expirydate`, `cvc`, `amount`, `status`) VALUES
(26, 6, 'Twin Deluxe', '1', '2018-09-11', '2018-09-14', 'cash', '', '', '', '', '297', 'Cancelled'),
(30, 9, 'Premier Deluxe', '1', '2018-09-29', '2018-09-30', 'cash', '', '', '', '', '318', 'Confirmed'),
(31, 8, 'Grand Deluxe', '2', '2018-10-17', '2018-10-18', 'creditcard', '5489325895', 'ISSAC TAN YU HAO', '02/23', '7892', '355', 'Cancelled'),
(32, 10, 'Grand Deluxe', '6', '2018-09-27', '2018-09-30', 'creditcard', '9870886545', 'MOHD FUAAD HJ RAHMAT', '04/24', '3546', '355', 'Confirmed'),
(33, 11, 'Grand Deluxe', '2', '2018-10-26', '2018-10-27', 'cash', '', '', '', '', '355', 'Cancelled'),
(34, 6, 'Premier Deluxe', '2', '2018-11-06', '2018-11-07', 'creditcard', '4782246328', 'NUR ATIQAH BINTI MOHD FUAAD', '08/22', '789', '318', 'Cancelled'),
(35, 4, 'Grand Deluxe', '1', '2018-09-13', '2018-09-15', 'cash', '', '', '', '', '355', 'Confirmed'),
(36, 12, 'Deluxe', '2', '2018-10-01', '2018-10-04', 'creditcard', '2879456879', 'RAVI SHARMA', '03/23', '488', '260', 'Confirmed'),
(37, 10, 'Deluxe', '2', '2018-09-13', '2018-09-17', 'cash', '', '', '', '', '260', 'Confirmed'),
(38, 8, 'Premier Deluxe', '2', '2018-09-09', '2018-09-11', 'creditcard', '5789456712', 'ISSAC TAN YU HAO', '12/22', '789', '318', 'Confirmed'),
(39, 16, 'Grand Deluxe', '2', '2018-09-27', '2018-09-28', 'creditcard', '4557953578', 'GAN JIA WEI', '04/22', '873', '355', 'Confirmed'),
(40, 13, 'Deluxe', '1', '2018-08-31', '2018-09-01', 'creditcard', '4888795463', 'VINO THYNY', '03/24', '861', '260', 'Check-Out'),
(41, 18, 'Premier Deluxe', '3', '2018-09-13', '2018-09-14', 'cash', '', '', '', '', '318', 'Confirmed'),
(42, 12, 'Twin Deluxe', '2', '2018-10-06', '2018-10-09', 'cash', '', '', '', '', '297', 'Pending'),
(43, 25, 'Grand Deluxe', '1', '2018-09-28', '2018-09-29', 'creditcard', '7894545896', 'JENNY TAY HUI PENG', '09/21', '972', '355', 'Confirmed'),
(44, 30, 'Grand Deluxe', '3', '2018-11-10', '2018-11-17', 'cash', '', '', '', '', '355', 'Pending'),
(45, 27, 'Twin Deluxe', '2', '2018-09-12', '2018-09-15', 'creditcard', '9779542186', 'GINO LUAH GUANG JIN', '06/22', '461', '297', 'Confirmed'),
(46, 22, 'Premier Deluxe', '2', '2018-08-08', '2018-08-09', 'cash', '', '', '', '', '318', 'Check-Out'),
(48, 19, 'Deluxe', '2', '2018-07-11', '2018-07-13', 'creditcard', '4579128797', 'CHIA MING XIU', '06/23', '3532', '260', 'Check-Out'),
(49, 11, 'Premier Deluxe', '3', '2018-12-09', '2018-12-16', 'creditcard', '5788945617', 'YEAP LEE KHIM', '06/22', '772', '318', 'Cancelled'),
(50, 8, 'Deluxe', '2', '2018-09-24', '2018-09-25', 'creditcard', '5489325895', 'ISSAC TAN YU HAO', '02/23', '7892', '260', 'Confirmed'),
(51, 23, 'Twin Deluxe', '2', '2018-09-12', '2018-09-19', 'creditcard', '4792154893', 'CHRISTINNA TAN XIN YEE', '04/25', '6671', '297', 'Confirmed'),
(52, 29, 'Deluxe', '1', '2018-09-29', '2018-10-01', 'cash', '', '', '', '', '260', 'Confirmed'),
(53, 28, 'Deluxe', '2', '2019-01-10', '2019-01-15', 'cash', '', '', '', '', '260', 'Cancelled'),
(54, 21, 'Twin Deluxe', '3', '2019-02-02', '2019-02-07', 'creditcard', '8794876978', 'LIM HON TING', '01/23', '872', '297', 'Confirmed'),
(55, 15, 'Premier Deluxe', '3', '2018-12-05', '2018-11-12', 'creditcard', '7845978846', 'NUR SYAHIRAH BT MOHD ZAMRI', '07/24', '864', '318', 'Cancelled'),
(56, 9, 'Grand Deluxe', '3', '2018-06-06', '2018-06-14', 'cash', '', '', '', '', '355', 'Check-Out'),
(57, 7, 'Deluxe', '2', '2018-03-13', '2018-03-15', 'creditcard', '244789542', 'KRISNAVENII RAJAN', '08/23', '276', '260', 'Check-Out'),
(58, 15, 'Twin Deluxe', '2', '2019-02-08', '2019-02-09', 'cash', '', '', '', '', '297', 'Pending'),
(59, 19, 'Twin Deluxe', '2', '2018-09-05', '2018-09-08', 'creditcard', '8798536585', 'CHIA MING XIU', '03/22', '579', '297', 'Check-In'),
(60, 17, 'Twin Deluxe', '2', '2018-09-06', '2018-09-11', 'cash', '', '', '', '', '297', 'Check-In'),
(61, 17, 'Premier Deluxe', '3', '2018-12-04', '2018-12-12', 'creditcard', '5794587856', 'JIVA NILA', '09/23', '478', '318', 'Pending'),
(63, 8, 'Grand Deluxe', '3', '2018-11-17', '2018-11-22', 'creditcard', '7894711578', 'ISAAC TAN YU HAO', '09/22', '349', '355', 'Cancelled'),
(64, 4, 'Grand Deluxe', '3', '2018-09-06', '2018-09-10', 'creditcard', '2178945731', 'KANG CHU NING', '05/23', '971', '355', 'Check-In'),
(65, 10, 'Deluxe', '1', '2018-09-05', '2018-09-07', 'creditcard', '9870886545', 'MOHD FUAAD HJ RAHMAT', '04/24', '3546', '260', 'Check-In'),
(66, 24, 'Deluxe', '1', '2019-01-26', '2019-01-28', 'cash', '', '', '', '', '260', 'Pending'),
(67, 6, 'Twin Deluxe', '2', '2018-09-06', '2018-09-07', 'creditcard', '2478941735', 'NUR ATIQAH MOHD FUAAD', '05/23', '870', '297', 'Check-In'),
(68, 9, 'Grand Deluxe', '4', '2019-03-14', '2019-03-16', 'cash', '', '', '', '', '355', 'Confirmed'),
(69, 4, 'Grand Deluxe', '3', '2019-03-04', '2019-03-06', 'creditcard', '2579186732', 'KANG CHU NING', '04/22', '819', '355', 'Confirmed'),
(70, 26, 'Twin Deluxe', '2', '2018-10-12', '2018-10-19', 'creditcard', '2579874157', 'THURGASHINI LACHIMANAN', '09/22', '525', '297', 'Pending'),
(71, 20, 'Grand Deluxe', '2', '2018-07-07', '2018-07-10', 'creditcard', '27998745198', 'MOHAMMAD FAZLI SYAFIQ BIN MOHD FARHAN', '06/22', '774', '355', 'Check-Out'),
(72, 22, 'Grand Deluxe', '3', '2018-09-05', '2018-09-07', 'cash', '', '', '', '', '355', 'Check-In'),
(73, 13, 'Deluxe', '1', '2018-09-10', '2018-09-11', 'cash', '', '', '', '', '260', 'Cancelled'),
(74, 4, 'Premier Deluxe', '2', '2018-11-15', '2018-11-17', 'cash', '', '', '', '', '318', 'Cancelled'),
(75, 4, 'Grand Deluxe', '2', '2018-10-17', '2018-10-19', 'creditcard', '5798146455', 'KANG CHU NING', '03/22', '798', '355', 'Cancelled'),
(76, 14, 'Twin Deluxe', '2', '2018-09-20', '2018-09-21', 'creditcard', '2579348517', 'KANG WAN KEONG', '05/22', '579', '297', 'Confirmed'),
(77, 31, 'Grand Deluxe', '4', '2018-09-06', '2018-09-13', 'cash', '', '', '', '', '355', 'Check-In'),
(78, 32, 'Deluxe', '2', '2018-06-14', '2018-06-16', 'creditcard', '2579841756', 'RAFIDAH NURHALIZA BINTI HASSAN MUHAIMIN', '07/23', '8872', '260', 'Check-Out'),
(79, 4, 'Twin Deluxe', '2', '2018-09-14', '2018-09-18', 'creditcard', '5789587452', 'KANG CHU NING', '03/22', '578', '297', 'Confirmed'),
(80, 4, 'Grand Deluxe', '3', '2019-01-28', '2019-01-30', 'cash', '', '', '', '', '355', 'Cancelled'),
(81, 4, 'Deluxe', '1', '2019-04-02', '2019-04-10', 'creditcard', '5789247815', 'KANG CHU NING', '03/23', '964', '260', 'Pending'),
(82, 33, 'Twin Deluxe', '2', '2018-09-14', '2018-09-15', 'cash', '', '', '', '', '297', 'Pending'),
(83, 4, 'Grand Deluxe', '3', '2018-09-28', '2018-09-29', 'creditcard', '8795417562', 'KANG CHU NING', '07/23', '735', '355', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `ic` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `username`, `password`, `firstname`, `lastname`, `gender`, `ic`, `phone`, `email`, `address`, `postcode`, `city`, `state`) VALUES
(4, 'chuning', '123456', 'Kang', 'Chu Ning', 'female', '980304016324', '0167383790', 'chuning0304@hotmail.com', 'No.1, Jalan Flora 3/5, Taman Pulai Flora', '81300', 'Skudai', 'Johor'),
(6, 'atiqah', 'mamaw', 'Nur Atiqah', 'Mohd Fuaad', 'female', '981018016600', '0177512203', 'nuratiqahmohdfuaad@gmail.com', 'No.25, Jalan Utama 19,Taman Mutiara Rini', '81300', 'Johor Bahru', 'Johor'),
(7, 'krisna', '12345678', 'Krisnavenii ', 'Rajan', 'female', '980421047828', '0173882651', 'krisnavenii2104@gmail.com', 'No.78, Jalan Bahagia 27, Taman Melor', '81130', 'Ulu Tiram', 'Johor'),
(8, 'isaac', '654321', 'Isaac Tan', 'Yu Hao', 'male', '980715045189', '0167078855', 'iztan@gmail.com', 'No.31, Jalan P.I 34, Taman Pulai Indah', '81300', 'Skudai', 'Johor'),
(9, 'syahmi', '00000', 'Syahmi', 'Zulklifi', 'male', '987302048473', '0176383620', 'syahmi@gmail.com', 'No.2, Jalan Pulai 67, Taman Sri Skudai', '81300', 'Skudai', 'Johor'),
(10, 'fuaadrahmat', '14041966', 'Mohd Fuaad', 'Bin Hj Rahmat', 'male', '660414014453', '0197624446', 'drfuaad@gmail.com', 'Balai Cerap UTM, Lengkok Suria, UTM ,\r\n', '81310', 'Skudai', 'Johor'),
(11, 'leekhim', '721228', 'Yeap', 'Lee Khim', 'female', '721228085208', '0127200800', 'leekhim@gmail.com', 'No.15, Jalan Flora 3/7, Taman Pulai Flora', '81300', 'Skudai', 'Johor'),
(12, 'ravi', 'ravi123', 'Ravi Sharma', 'Rangasamy', 'male', '980721067389', '0175376723', 'ravisharma@gmail.com', 'No. 23, Jalan Kilat 56, Taman Cahaya', '84500', 'Sungai Buloh', 'Selangor'),
(13, 'vino', 'vino000', 'Vino', 'Thyny', 'female', '951008046782', '0192763334', 'vino1008@gmail.com', 'No. 29, Jalan Bakti 67, Taman Mutiara Rini', '82310', 'Pekan', 'Pahang'),
(14, 'kelvin', '701213', 'Kelvin Kang', 'Wan Keong', 'male', '701213085653', '0127861316', 'elidtprec@gmail.com', 'No. 27, Jalan Perdagangan 3, Taman Universiti Ind. Park', '81300', 'Skudai', 'Johor'),
(15, 'syahirah', 'syahirah789', 'Nur Syahirah ', 'binti Mohd Zamri', 'female', '890327071562', '0194636221', 'syahirah@hotmail.com', 'Fook Yu Apartment, Lorong Binatang 3A, Jalan Ling Kun', '89743', 'Inanam', 'Sabah'),
(16, 'gan', 'gan0426', 'Gan', 'Jia Wei', 'male', '850829027463', '0132674937', 'gjw829@yahoo.com', 'No.89, Jalan Bukit Jambul, Taman Jambul', '11900', 'Bayan Lepas', 'Penang'),
(17, 'jivanila', 'jivanila999', 'Jiva ', 'Nila', 'female', '720912078396', '0126372293', 'jivanila@hotmail.com', 'No.34, Jalan Herba, Taman Anggur Perlis', '01000', 'Kangar', 'Perlis'),
(18, 'feizhi', 'tfz9898', 'Tan', 'Fei Zhi', 'female', '980908016296', '0146171899', 'feizhi98@gmail.com', 'No.33, Jalan Telok 77, Taman Tanah Putih', '25700', 'Kuantan', 'Pahang'),
(19, 'mx33', 'mingxiu33', 'Chia ', 'Ming Xiu', 'female', '980303457822', '0174562844', 'mxchia3@gmail.com', 'No.24, Jalan Melawati 12, Taman Sri Kembangan', '43300', 'Serdang ', 'Selangor'),
(20, 'fazli', 'fazli980', 'Mohammad Fazli Syafiq', 'bin Mohd Farhan', 'male', '670517068729', '0143628874', 'fazli@gmail.com', 'No.462, Jalan Merdeka, Taman Gemilang', '87029', 'Labuan', 'Labuan'),
(21, 'honting', 'honting910', 'Lim ', 'Honting', 'male', '980910017363', '01182637754', 'honting@hotmail.com', 'No. 782, Jalan Air Jernih 4, Taman Bukit Khor', '20000', 'Kuala Terengganu', 'Terengganu'),
(22, 'aimi', 'aimi0522', 'Nurul Aimi', 'binti Mohamad Zakari', 'female', '820104786174', '0192746284', 'aimi@hotmail.com', 'No.202, Jalan Rock Road, Taman Pending', '93200', 'Kuching', 'Sarawak'),
(23, 'christinna', 'christinaa', 'Christinna Tan', 'Xin Yee', 'female', '930129887462', '0196382219', 'christinna11@yahoo.com', 'No.98, Jalan Tuanku Osman, Taman Pelita', '96000', 'Sibu', 'Sarawak'),
(24, 'garthik', 'garthik', 'Garthikeyan', 'Vishnu', 'male', '980621015537', '0173280932', 'garthik@yahoo.com', 'No.35, Jalan Paroi, Taman Dato Kadir', '70000', 'Seremban', 'Negeri Sembilan'),
(25, 'huipeng', 'huipeng456', 'Jenny Tay', 'Hui Peng', 'female', '810827062788', '0194635234', 'jenny@hotmail.com', 'No.54, Jalan Utama, Taman Sungai', '05100', 'Alor Setar', 'Kedah'),
(26, 'thurga', 'thurga509', 'Thurgashini', 'Lachimanan', 'female', '970922451684', '0174537294', 'thurga@gmail.com', 'No.3, Jalan Raja Dihilir, Taman Istana', '34000', 'Taiping ', 'Perak'),
(27, 'gino', 'gino912', 'Gino Luah', 'Guang Jin', 'male', '980912015691', '0186628593', 'ginoluah@hotmail.com', 'No.71, Jalan Melaka Raya, Taman Melaka Raya', '75000', 'Melaka', 'Melaka'),
(28, 'asyiqin', 'asyiqin12', 'Norasyiqin ', 'binti Nordin', 'female', '860712057828', '0149302848', 'ayiqin@yahoo.com', 'No.99, Jalan Sri Mutiara 90, Taman Pasir Puteh', '16100', 'Kota Bharu', 'Kelantan'),
(29, 'rivaldo', 'rivaldo0514', 'Rivaldo Lee', 'Fah Loo', 'male', '990514016729', '0173265473', 'rivaldo@gmail.com', 'No.78, Jalan Sultan Ismail, Taman Ampang', '50450', 'Kuala Lumpur', 'Kuala Lumpur'),
(30, 'hema', 'hema888', 'Hemadarshini', 'Uthayakumaran', 'female', '820418045272', '0197662268', 'hema@hotmail.com', 'No.25, Jalan BPP 7/9, Taman Yasin', '40100', 'Shah Alam', 'Selangor'),
(31, 'zaidi', 'zaidi123', 'Mohd Zaidi ', 'bin Mohd Yahya Ismail', 'male', '760122058873', '0165354429', 'zaidi76@hotmail.com', 'No.33, Lorong Bukit Tengah 9/4, Taman Bukit Tengah', '14000', 'Bukit Mertajam', 'Penang'),
(32, 'rafidah', 'rafidah0987', 'Rafidah Nurhaliza ', 'binti Hassan Muhaimin', 'female', '840928047762', '0197735274', 'rafidah@gmail.com', 'No.69, Jalan Mount Austin 22, Taman Mount Austin', '81300 ', 'Johor Bahru', 'Johor'),
(33, 'ali', 'ali123', 'Mohd Ali', 'bin Abu', 'male', '870803016353', '0173526473', 'ali@gmail.com', 'No. 2, Jalan Selat 4, Taman Bukit Mewah', '81300', 'Skudai', 'Johor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
