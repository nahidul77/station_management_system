
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smsmailh_vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_account`
--

CREATE TABLE `acc_account` (
  `account_id` int(11) NOT NULL,
  `sector_name` varchar(255) NOT NULL,
  `sector_type` varchar(120) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acc_account`
--

INSERT INTO `acc_account` (`account_id`, `sector_name`, `sector_type`, `status`, `date`) VALUES
(1, 'Sector name', 'Debit (-)', 1, '2022-03-03'),
(2, 'Sector name', 'Credit (+)', 1, '2022-03-03'),
(3, 'Sector name-1', 'Credit (+)', 1, '2022-03-03'),
(4, 'Sector name-2', 'Credit (+)', 1, '2022-03-03'),
(5, 'Sector name-3', 'Credit (+)', 1, '2022-03-03'),
(6, 'Sector name-4', 'Credit (+)', 1, '2022-03-03'),
(7, 'Sector name-1', 'Debit (-)', 1, '2022-03-03'),
(8, 'Sector name-2', 'Debit (-)', 1, '2022-03-03'),
(9, 'Sector name-3', 'Debit (-)', 1, '2022-03-03'),
(10, 'Sector name-4', 'Debit (-)', 1, '2022-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `acc_bank`
--

CREATE TABLE `acc_bank` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(200) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `account_number` varchar(50) NOT NULL,
  `opening_credit` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acc_bank`
--

INSERT INTO `acc_bank` (`bank_id`, `bank_name`, `branch_name`, `account_number`, `opening_credit`, `status`, `date`) VALUES
(1, 'AB Bank', 'Kwran bazar', '6756756756767', 20000, 1, '2022-03-03'),
(2, 'City Bank', 'Framgate Branch', '765467456745', 50000, 1, '2022-03-03'),
(3, 'Dhaka Bank', 'Mohakhali Branch', '676766', 20000, 1, '2022-03-03'),
(4, 'UCB Bank', 'Panthopath Barnch', '6767546754', 50000, 1, '2022-03-03'),
(5, 'Rupali Bank', 'Gulshan-1 Branch', '67567567', 3000, 1, '2022-03-03'),
(6, 'UCB', 'Kawran bazer', '06-6757567', 50000, 1, '2022-03-07'),
(7, 'Modumoti Bank', 'Lokkipur', '5645645645444', 10000, 1, '2022-03-07'),
(8, 'Jumuna Bank ', 'Kawran bazer', '5645645645', 70000, 1, '2022-03-07'),
(9, 'AFH Bank', 'Lokkipur', '567567567567', 10000, 1, '2022-03-07'),
(10, 'Habib Bank', 'Kawran bazer', '56456456454444', 90000, 1, '2022-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `acc_company`
--

CREATE TABLE `acc_company` (
  `company_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `phone_no` varchar(30) NOT NULL,
  `fax_no` varchar(30) NOT NULL,
  `email` varchar(120) NOT NULL,
  `website` varchar(120) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acc_company`
--

INSERT INTO `acc_company` (`company_id`, `name`, `address`, `mobile_no`, `phone_no`, `fax_no`, `email`, `website`, `date`) VALUES
(5, 'PGDIT', 'framgate  ', '01710410490', '01710410490', '576456754', 'nahid@gmail.com', 'nahidul.me', '2022-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `acc_inflow`
--

CREATE TABLE `acc_inflow` (
  `inflow_id` int(11) NOT NULL,
  `received_date` date NOT NULL,
  `received_from` varchar(255) NOT NULL,
  `received_type` tinyint(1) NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `account_number` varchar(120) DEFAULT NULL,
  `pay_order_number` varchar(120) DEFAULT NULL,
  `letter_of_credit` varchar(120) DEFAULT NULL,
  `deposit_bank_id` int(11) DEFAULT NULL,
  `account_name` varchar(255) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acc_inflow`
--

INSERT INTO `acc_inflow` (`inflow_id`, `received_date`, `received_from`, `received_type`, `bank_name`, `branch_name`, `account_number`, `pay_order_number`, `letter_of_credit`, `deposit_bank_id`, `account_name`, `amount`, `description`, `status`, `date`) VALUES
(1, '2022-03-04', 'Jhon Cena', 1, '', '', '', '', '', 0, 'Sector name-1', '5000', 'Description ', 1, '2022-03-03'),
(2, '2022-03-03', 'Jhon Cena', 2, 'AB Bank', 'Kwran bazar', '6756756756767', '', '', 1, 'Sector name-1', '5000', 'Description', 1, '2022-03-03'),
(3, '2022-03-07', 'Megna', 1, '', '', '', '', '', 0, 'Sector name', '2000', 'received', 1, '2022-03-07'),
(4, '2022-03-07', 'Megna ', 2, 'City Bank', 'Kawran bazer', '564564564544', '', '', 1, 'Sector name-1', '8000', 'received', 1, '2022-03-07'),
(5, '2022-03-07', 'Megna', 4, 'City Bank', 'Lokkipur', '', '', '657657', 1, 'Sector name-2', '7777', 'received', 1, '2022-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `acc_invoice`
--

CREATE TABLE `acc_invoice` (
  `invoice_id` int(11) NOT NULL,
  `tracking_no` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_address` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `item` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `amount` float NOT NULL,
  `discount` float DEFAULT NULL,
  `vat` float DEFAULT NULL,
  `grand_total` float NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `acc_outflow`
--

CREATE TABLE `acc_outflow` (
  `outflow_id` int(11) NOT NULL,
  `payment_date` varchar(50) NOT NULL,
  `payment_to` varchar(255) NOT NULL,
  `payment_type` tinyint(1) NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `account_number` varchar(120) DEFAULT NULL,
  `pay_order_number` varchar(120) DEFAULT NULL,
  `letter_of_credit` varchar(120) DEFAULT NULL,
  `deposit_bank_id` int(11) DEFAULT NULL,
  `account_name` varchar(255) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acc_outflow`
--

INSERT INTO `acc_outflow` (`outflow_id`, `payment_date`, `payment_to`, `payment_type`, `bank_name`, `branch_name`, `account_number`, `pay_order_number`, `letter_of_credit`, `deposit_bank_id`, `account_name`, `amount`, `description`, `status`, `date`) VALUES
(1, '2022-03-04', 'Cena', 2, 'AB Bank', 'Kwran bazar', '6756756756767', '', '', 1, 'Sector name', '10000', 'Description', 1, '2022-03-03'),
(2, '2022-03-07', 'megna', 2, 'City Bank', 'framgate', '564564564544', '', '', 1, 'Sector name-3', '8888', 'Received', 1, '2022-03-07'),
(3, '2022-03-07', 'partex', 3, 'City Bank', 'Kawran bazer', '', '876545678996', '', 4, 'Sector name-1', '6666', 'Received', 1, '2022-03-07'),
(4, '2022-03-07', 'Amber', 4, 'City Bank', 'framgate', '', '', '6576575', 6, 'Sector name-4', '80000', 'Received', 1, '2022-03-07'),
(5, '2022-03-07', 'Aci', 3, 'Modumoti Bank', 'Framgate', '', '876545678', '', 3, 'Sector name-2', '9999', 'Received', 1, '2022-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `add_company`
--

CREATE TABLE `add_company` (
  `company_id` int(11) UNSIGNED NOT NULL,
  `company_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `company_address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `company_cell` varchar(100) DEFAULT NULL,
  `company_email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `company_web` varchar(100) CHARACTER SET latin1 NOT NULL,
  `posting_id` int(10) NOT NULL,
  `active` int(10) NOT NULL COMMENT '0 = inactive, 1 = active, 2 = delete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `add_company`
--

INSERT INTO `add_company` (`company_id`, `company_name`, `company_address`, `company_cell`, `company_email`, `company_web`, `posting_id`, `active`) VALUES
(1, 'Megna Group', 'Dhaka Tatola', '65-75766', 'megna@gmail.com', 'www.megna.com', 1, 1),
(2, 'Amberit Group', 'Gulsha Dhaka', '78-6767', 'ambergroup@gmail.com', 'www.amber.com', 1, 1),
(3, 'Zumuna task', 'Dhaka Uttara', '898-7897897', 'task@gmail.com', 'www.task.com', 1, 1);



-- --------------------------------------------------------

--
-- Table structure for table `add_vendor`
--

CREATE TABLE `add_vendor` (
  `vendor_id` int(11) UNSIGNED NOT NULL,
  `vendor_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `vendor_address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `vendor_cell` varchar(100) DEFAULT NULL,
  `vendor_email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `vendor_web` varchar(100) CHARACTER SET latin1 NOT NULL,
  `posting_id` int(10) NOT NULL,
  `active` int(10) NOT NULL COMMENT '0 = inactive, 1 = active, 2 = delete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `add_vendor`
--

INSERT INTO `add_vendor` (`vendor_id`, `vendor_name`, `vendor_address`, `vendor_cell`, `vendor_email`, `vendor_web`, `posting_id`, `active`) VALUES
(1, 'Trust Filling', 'Dhaka Tatola', '65-75766', 'trustff@gmail.com', 'www.trustff.com', 1, 1),
(2, 'BOF CNG', 'Gulsha Dhaka', '78-6767', 'bofcng@gmail.com', 'www.bofcng.com', 1, 1),
(3, 'Petro Bangla', 'Dhaka Uttara', '898-7897897', 'petrobangla@gmail.com', 'www.petrobangla.com', 1, 1);


-- --------------------------------------------------------

--
-- Table structure for table `driver_info`
--

CREATE TABLE `driver_info` (
  `driver_id` int(10) UNSIGNED NOT NULL,
  `driver_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `d_mobile` varchar(100) CHARACTER SET latin1 NOT NULL,
  `v_registration_no` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `d_license_no` varchar(255) CHARACTER SET latin1 NOT NULL,
  `d_father_name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `d_mother_name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `d_nid` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `d_join_date` date NOT NULL,
  `d_release_date` date NOT NULL,
  `d_emergency_contact_person` varchar(255) CHARACTER SET latin1 NOT NULL,
  `d_emergency_cell` varchar(255) CHARACTER SET latin1 NOT NULL,
  `d_picture` varchar(255) CHARACTER SET latin1 NOT NULL,
  `d_license_expire_date` date NOT NULL,
  `d_address_present` varchar(255) CHARACTER SET latin1 NOT NULL,
  `d_address_permanent` varchar(255) CHARACTER SET latin1 NOT NULL,
  `posting_id` varchar(255) CHARACTER SET latin1 NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 = inactive, 1 = active, 2 = delete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `driver_info`
--

INSERT INTO `driver_info` (`driver_id`, `driver_name`, `d_mobile`, `v_registration_no`, `d_license_no`, `d_father_name`, `d_mother_name`, `d_nid`, `d_join_date`, `d_release_date`, `d_emergency_contact_person`, `d_emergency_cell`, `d_picture`, `d_license_expire_date`, `d_address_present`, `d_address_permanent`, `posting_id`, `active`) VALUES
(1, 'Bob Dave', '(88) 528-135', '1', '56756555', 'Boulosgr', 'Boulos', 're56456456', '2022-03-01', '1970-01-01', 'smon', '(88) 65756756', 'driver.jpg', '2026-03-02', '8457 Bakonypölöske\r\nIzabella u. 27.', '8457 Bakonypölöske\r\nIzabella u. 27.', '', 1),
(2, 'Michael L. Gowans', '425-432-8861', '2', '534-26-XXXX', 'Purple', 'Purp', '129659698583888', '2022-03-02', '1970-01-01', 'Michael', '425-432-8886', 'man.png', '2026-02-18', '1715 Conifer Drive\r\nMaple Valley, WA 98038', '1715 Conifer Drive\r\nMaple Valley, WA 98038', '', 1),
(3, 'Sulaiman Fahad Kassis', '899 633 188', '3', '5645644467', 'Nassar merd', 'Lawn Care', '6567654565456', '2022-03-07', '1970-01-01', 'jhon abrnah', '8765468', 'smiling_man.jpg', '2026-03-19', 'North Amirica', 'North Amirica', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `expense_data`
--

CREATE TABLE `expense_data` (
  `transection_id` int(11) NOT NULL,
  `import_export` tinyint(2) DEFAULT NULL,
  `trip_link_id` varchar(255) DEFAULT NULL,
  `expense_group` int(11) NOT NULL,
  `expense_id` int(11) DEFAULT NULL,
  `expense_serial` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `v_id` int(11) DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `posting_id` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_data`
--

INSERT INTO `expense_data` (`transection_id`, `import_export`, `trip_link_id`, `expense_group`, `expense_id`, `expense_serial`, `date`, `v_id`, `quantity`, `amount`, `posting_id`, `active`) VALUES
(2445, 0, '0', 3, 2, '5646', '2022-03-07', 2, 2, 20, '1', 1),
(2444, 0, '0', 2, 1, '6565', '2022-03-07', 3, 2, 90, '1', 1),
(2443, 0, '0', 2, 1, '545454', '2022-03-07', 3, 2, 80, '1', 1),
(2446, 0, '0', 3, 3, '4565', '2022-03-07', 2, 2, 30, '1', 1),
(2447, 0, '0', 4, 4, '6556', '2022-03-07', 9, 4, 90, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `expense_list`
--

CREATE TABLE `expense_list` (
  `expense_id` int(10) UNSIGNED NOT NULL,
  `expense_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `expense_group` int(11) NOT NULL,
  `posting_id` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expense_list`
--

INSERT INTO `expense_list` (`expense_id`, `expense_name`, `expense_group`, `posting_id`, `active`) VALUES
(1, 'Machine Repair', 2, 1, 1),
(2, 'Comission', 3, 1, 1),
(3, 'Tips', 4, 1, 1),
(4, 'Tax', 1, 1, 1),
(5, 'Development', 1, 1, 1);


-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `logo_id` int(11) NOT NULL,
  `d_picture` text,
  `f_picture` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo_id`, `d_picture`, `f_picture`) VALUES
(10, 'logo.png', 'favicon.png');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `footer_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `title`, `address`, `footer_text`) VALUES
(1, 'Your Management System', 'dhaka', 'footer text');




-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `type` int(10) NOT NULL,
  `last_log_date` datetime NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`, `type`, `last_log_date`, `active`) VALUES
(1, 'Admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 9, '2022-03-15 12:46:51', 1);


-- --------------------------------------------------------

--
-- Table structure for table `vehicle_fuel_rate`
--

CREATE TABLE `vehicle_fuel_rate` (
  `v_fuel_id` int(10) UNSIGNED NOT NULL,
  `v_fuel_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `v_fuel_rate` varchar(255) CHARACTER SET latin1 NOT NULL,
  `v_fuel_last_update_dat` datetime NOT NULL,
  `posting_id` int(10) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle_fuel_rate`
--

INSERT INTO `vehicle_fuel_rate` (`v_fuel_id`, `v_fuel_name`, `v_fuel_rate`, `v_fuel_last_update_dat`, `posting_id`, `active`) VALUES
(1, 'Petrol', '120', '2022-03-03 04:18:51', 1, 1),
(2, 'Diesel', '100', '2022-03-03 04:16:34', 1, 1),
(3, 'CNG', '90', '2022-03-03 04:16:51', 1, 1),
(4, 'AutoGas', '80', '2022-03-07 10:56:09', 1, 1);


-- --------------------------------------------------------

--
-- Table structure for table `fuel_unit`
--

CREATE TABLE `fuel_unit` (
  `unit_id` int(10) UNSIGNED NOT NULL,
  `unit_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fuel_unit`
--

INSERT INTO `fuel_unit` (`unit_id`, `unit_name`, `active`) VALUES
(1, 'Ltr',  1),
(2, 'KG',  1),
(3, 'Meter', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_info`
--

CREATE TABLE `vehicle_info` (
  `v_id` int(10) UNSIGNED NOT NULL,
  `v_model_no` varchar(255) CHARACTER SET latin1 NOT NULL,
  `v_registration_no` varchar(255) CHARACTER SET latin1 NOT NULL,
  `v_chassis_no` varchar(255) CHARACTER SET latin1 NOT NULL,
  `v_engine_no` varchar(255) CHARACTER SET latin1 NOT NULL,
  `v_type` varchar(255) CHARACTER SET latin1 NOT NULL,
  `posting_id` int(10) NOT NULL,
  `active` int(2) NOT NULL,
  `v_owner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle_info`
--

INSERT INTO `vehicle_info` (`v_id`, `v_model_no`, `v_registration_no`, `v_chassis_no`, `v_engine_no`, `v_type`, `posting_id`, `active`, `v_owner`) VALUES
(1, '435452345', '4235234530', '25235443', '2354234544', '1', 1, 1, 0),
(2, '2352345', '23452342345', '25342345', '2542354', '2', 1, 1, 1),
(3, '90909090', '90909090', '909090', '909090', '3', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE `vehicle_type` (
  `v_type_id` int(10) UNSIGNED NOT NULL,
  `v_type` varchar(255) CHARACTER SET latin1 NOT NULL,
  `posting_id` varchar(255) CHARACTER SET latin1 NOT NULL,
  `active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`v_type_id`, `v_type`, `posting_id`, `active`) VALUES
(1, 'microbus', '1', 1),
(2, 'Truck', '1', 1),
(3, 'Car', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_setting`
--

CREATE TABLE `web_setting` (
  `id` int(11) NOT NULL,
  `values` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_setting`
--

INSERT INTO `web_setting` (`id`, `values`) VALUES
(1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc_account`
--
ALTER TABLE `acc_account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `acc_bank`
--
ALTER TABLE `acc_bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `acc_company`
--
ALTER TABLE `acc_company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `acc_inflow`
--
ALTER TABLE `acc_inflow`
  ADD PRIMARY KEY (`inflow_id`);

--
-- Indexes for table `acc_invoice`
--
ALTER TABLE `acc_invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `acc_outflow`
--
ALTER TABLE `acc_outflow`
  ADD PRIMARY KEY (`outflow_id`);

--
-- Indexes for table `add_company`
--
ALTER TABLE `add_company`
  ADD PRIMARY KEY (`company_id`);


--
-- Indexes for table `add_vendor`
--
ALTER TABLE `add_vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- Indexes for table `driver_info`
--
ALTER TABLE `driver_info`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `expense_data`
--
ALTER TABLE `expense_data`
  ADD PRIMARY KEY (`transection_id`);

--
-- Indexes for table `expense_list`
--
ALTER TABLE `expense_list`
  ADD PRIMARY KEY (`expense_id`);

ALTER TABLE `logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `vehicle_fuel_rate`
--
ALTER TABLE `vehicle_fuel_rate`
  ADD PRIMARY KEY (`v_fuel_id`);
--
-- Indexes for table `fuel_unit`
--
ALTER TABLE `fuel_unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  ADD PRIMARY KEY (`v_type_id`);

--
-- Indexes for table `web_setting`
--
ALTER TABLE `web_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc_account`
--
ALTER TABLE `acc_account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `acc_bank`
--
ALTER TABLE `acc_bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `acc_company`
--
ALTER TABLE `acc_company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `acc_inflow`
--
ALTER TABLE `acc_inflow`
  MODIFY `inflow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `acc_invoice`
--
ALTER TABLE `acc_invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `acc_outflow`
--
ALTER TABLE `acc_outflow`
  MODIFY `outflow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `add_company`
--
ALTER TABLE `add_company`
  MODIFY `company_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `add_vendor`
--
ALTER TABLE `add_vendor`
  MODIFY `vendor_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `driver_info`
--
ALTER TABLE `driver_info`
  MODIFY `driver_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `expense_data`
--
ALTER TABLE `expense_data`
  MODIFY `transection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2448;

--
-- AUTO_INCREMENT for table `expense_list`
--
ALTER TABLE `expense_list`
  MODIFY `expense_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vehicle_fuel_rate`
--
ALTER TABLE `vehicle_fuel_rate`
  MODIFY `v_fuel_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `fuel_unit`
--
ALTER TABLE `fuel_unit`
  MODIFY `unit_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  MODIFY `v_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  MODIFY `v_type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `web_setting`
--
ALTER TABLE `web_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
