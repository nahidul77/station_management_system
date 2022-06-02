
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
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) UNSIGNED NOT NULL,
  `phrase` text NOT NULL,
  `engilsh` text NOT NULL,
  `spanish` text,
  `faviicon` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `phrase`, `engilsh`, `spanish`, `faviicon`) VALUES
(374, 'addvehicletype', 'Add Vehicle Type', NULL, NULL),
(375, 'addvehicle', 'Add Vehicle ', NULL, NULL),
(376, 'addvehiclefuelrate', 'Add Vehicle Fuel Rate', NULL, NULL),
(378, 'vehicletypelist', 'Vehicle Type List', NULL, NULL),
(379, 'vehiclelist', 'Vehicle List', NULL, NULL),
(380, 'vehicle', 'Vehicle', NULL, NULL),
(381, 'driver', 'Driver', NULL, NULL),
(382, 'adddriver', 'Add Driver', '', NULL),
(383, 'driverlist', 'Driver List', NULL, NULL),
(384, 'trip', 'Trip', NULL, NULL),
(385, 'triplist', 'Trip List', NULL, NULL),
(386, 'localtriplist', 'Local Trip List', NULL, NULL),
(387, 'tripentry', 'Trip Entry', NULL, NULL),
(388, 'localtripentry', 'Local Trip Entry', NULL, NULL),
(389, 'customers', 'Customers', NULL, NULL),
(390, 'addcompany', 'Add Company', '', NULL),
(391, 'companylist', 'Customer List', NULL, NULL),
(392, 'addcompanyrent', 'Add Company Rent', '', NULL),
(393, 'companyrentlist', 'Company Rent List', NULL, NULL),
(394, 'fitness', 'Fitness', NULL, NULL),
(395, 'addvehiclefitness', 'Add Vehicle Fitness', NULL, NULL),
(396, 'fitnesslist', 'Fitness List', NULL, NULL),
(397, 'fuel', 'Fuel', NULL, NULL),
(398, 'fuelratelist', 'Fuel Rate List', NULL, NULL),
(399, 'expense', 'Expense', NULL, NULL),
(400, 'expenseentry', 'Expense Entry', NULL, NULL),
(401, 'expenselist', 'Expense List', NULL, NULL),
(402, 'expensetypelist', 'Expense Type List', NULL, NULL),
(403, 'addexpensetype', 'Add Expense Type', '', NULL),
(404, 'stationsetup', 'Station Setup', NULL, NULL),
(405, 'addstateinformation', 'Add State Information', '', NULL),
(406, 'statelist', 'State List', NULL, NULL),
(407, 'addstationinformation', 'Add Station Information', '', NULL),
(408, 'stationlist', 'Station List', NULL, NULL),
(409, 'addstationdistense', 'Add Station Distense', '', NULL),
(410, 'stationdistancelist', 'Station Distance list', NULL, NULL),
(411, 'accounting', 'Accounting', 'accuting', NULL),
(412, 'bankinformation', 'Bank Information', NULL, NULL),
(413, 'accountinformation', 'Account Information', 'demo', NULL),
(414, 'companyinformation', 'Company Information', NULL, NULL),
(415, 'invoiceinformation', 'Invoice Information', NULL, NULL),
(416, 'inflow', 'Rececipt Information', NULL, NULL),
(417, 'outflow', 'Payment Information', NULL, NULL),
(418, 'accountreports', 'Account Reports', '', NULL),
(419, 'reports', 'Reports', NULL, NULL),
(420, 'generalereports', 'Generale Reports', NULL, NULL),
(421, 'expensereports', 'Expense Reports', NULL, NULL),
(422, 'balancesheet', 'Balance Sheet', NULL, NULL),
(423, 'companybill', 'Company Bill', NULL, NULL),
(424, 'settings', 'Settings', NULL, NULL),
(425, 'languagesetting', 'Language Setting', NULL, NULL),
(426, 'softwaresetting', 'Software Setting', NULL, NULL),
(427, 'alertcenter', 'Alert Center', NULL, NULL),
(428, 'seefullalertdetails', 'See Full Alert Details', NULL, NULL),
(429, 'admin', 'Admin', NULL, NULL),
(430, 'operator', 'Operator', NULL, NULL),
(431, 'appsetting', 'App Setting', NULL, NULL),
(432, 'adduser', 'Add User', '', NULL),
(433, 'viewuser', 'View User', NULL, NULL),
(434, 'editprofile', 'Edit Profile', NULL, NULL),
(435, 'logout', 'Logout', NULL, NULL),
(436, 'weeklytripandfarerent', 'Weekly Trip And Fare-rent', NULL, NULL),
(437, 'businesschart', 'Business Chart', NULL, NULL),
(438, 'vehicletypecreate', 'Vehicle Type Create', NULL, NULL),
(439, 'yes', 'Yes', NULL, NULL),
(440, 'no', 'No', NULL, NULL),
(441, 'cancel', 'Cancel', NULL, NULL),
(442, 'save', 'Save', NULL, NULL),
(443, 'vehicleinformationcreate', 'Vehicle Information Create', NULL, NULL),
(444, 'vehicleinformationupdate', 'Vehicle Information Update', NULL, NULL),
(445, 'registrationnumber', 'Registration Number', NULL, NULL),
(446, 'chassisno', 'Chassis No', NULL, NULL),
(447, 'modelno', 'Model No', NULL, NULL),
(448, 'engineno', 'Engine No', NULL, NULL),
(449, 'vehicletype', 'Vehicle Type', NULL, NULL),
(450, 'ownershiphire', 'Owner Ship Hire', NULL, NULL),
(451, 'isactive', 'Is Active', NULL, NULL),
(452, 'fuelrateupdate', 'Fuel Rate Update', NULL, NULL),
(453, 'fuelratecreate', 'Fuel Rate Create', NULL, NULL),
(454, 'fuelperkilo', 'Fuel Per Kilo', NULL, NULL),
(455, 'fuelrate', 'Fuel Rate', NULL, NULL),
(456, 'slno', 'SL No', NULL, NULL),
(457, 'status', 'Status', NULL, NULL),
(458, 'vehicleinformation', 'Vehicle Information', NULL, NULL),
(459, 'owner', 'Owner', NULL, NULL),
(460, 'action', 'Action', '', NULL),
(461, 'print', 'Print', NULL, NULL),
(462, 'active', 'Active', '', NULL),
(463, 'inactive', 'Inactive', NULL, NULL),
(464, 'edit', 'Edit', NULL, NULL),
(465, 'delete', 'Delete', NULL, NULL),
(466, 'driverinformationupdate', 'Driver Information Update', NULL, NULL),
(467, 'adddriverinformation', 'Add Driver Information', '', NULL),
(468, 'drivername', 'Driver Name', NULL, NULL),
(469, 'mobilenumber', 'Mobile Number', NULL, NULL),
(470, 'vehicleregistrationno', 'Vehicle Registration No', NULL, NULL),
(471, 'licensenumber', 'License Number', NULL, NULL),
(472, 'licenseexpiredate', 'License Expire Date', NULL, NULL),
(473, 'fathername', 'FatherName', NULL, NULL),
(474, 'mothername', 'Mother Name', NULL, NULL),
(475, 'nid', 'NID', NULL, NULL),
(476, 'presentaddress', 'Present Address', NULL, NULL),
(477, 'permanentaddress', 'Permanent Address', NULL, NULL),
(478, 'joiningdate', 'Joining Date', NULL, NULL),
(479, 'releasedate', 'Release Date', NULL, NULL),
(480, 'referenceperson', 'Reference Person', NULL, NULL),
(481, 'cellnumber', 'Cell Number', NULL, NULL),
(482, 'driverpicture', 'Driver Picture', NULL, NULL),
(483, 'view', 'View', NULL, NULL),
(484, 'driverinformation', 'Driver Information', NULL, NULL),
(485, 'dailytripinformantion', 'Daily Trip Informantion', NULL, NULL),
(486, 'alltripinformantion', 'All Trip Informantion', NULL, NULL),
(487, 'date', 'Date', NULL, NULL),
(488, 'triplinkid', 'Trip Link Id', NULL, NULL),
(489, 'companyname', 'Company Name', NULL, NULL),
(490, 'startpoint', 'Start Point', NULL, NULL),
(491, 'endpoint', 'End Point', NULL, NULL),
(492, 'contactrent', 'Contact Rent', NULL, NULL),
(493, 'farerent', 'Fare Rent', NULL, NULL),
(494, 'profit', 'Profit', NULL, NULL),
(495, 'advance', 'Advance', NULL, NULL),
(496, 'balance', 'Balance', NULL, NULL),
(497, 'grandtotal', 'Grand Total', NULL, NULL),
(498, 'importtriplist', 'Import Trip List', NULL, NULL),
(499, 'printall', 'Print All', NULL, NULL),
(500, 'tripexpense', 'Trip Expense', NULL, NULL),
(501, 'expensename', 'Expense Name', NULL, NULL),
(502, 'quantity', 'Quantity', NULL, NULL),
(503, 'amount', 'Amount', NULL, NULL),
(504, 'total', 'Total', NULL, NULL),
(505, 'close', 'Close', NULL, NULL),
(506, 'exporttriplist', 'Export Trip List', NULL, NULL),
(507, 'localtripinformation', 'Local Trip Information', NULL, NULL),
(508, 'updatetripentry', 'Update Trip Entry', NULL, NULL),
(509, 'createtripintry', 'Add Trip Entry', NULL, NULL),
(510, 'particular', 'Particular', NULL, NULL),
(511, 'expensegroup', 'Expense Group', NULL, NULL),
(512, 'farerate', 'Fare Rate', NULL, NULL),
(513, 'ratecontactrate', 'Rate / Contact Rate', NULL, NULL),
(514, 'exportimport', 'Export Import', NULL, NULL),
(515, 'selectvehicleregistrationno', 'Select Vehicle Registration No', NULL, NULL),
(516, 'hirevehicleregno', 'Hire Vehicle Reg. No', NULL, NULL),
(517, 'export', 'Export', NULL, NULL),
(518, 'selectanoption', 'Select An Option', NULL, NULL),
(519, 'import', 'Import', NULL, NULL),
(520, 'importexport', 'Import & Export', NULL, NULL),
(521, 'contactcompany', 'Contact Company', NULL, NULL),
(522, 'otherscompany', 'Others Company', NULL, NULL),
(523, 'selectstation', 'Select Station', NULL, NULL),
(524, 'triptype', 'Trip Type', NULL, NULL),
(525, 'ownsingle', 'Own Single', NULL, NULL),
(526, 'owndouble', 'Own Double', NULL, NULL),
(527, 'hiresingle', 'Hire single', NULL, NULL),
(528, 'hiredouble', 'Hire Double', NULL, NULL),
(529, 'rentsingle', 'Rent Single', NULL, NULL),
(530, 'rentdouble', 'Rent Double', NULL, NULL),
(531, 'selectdistrict', 'Select District', NULL, NULL),
(532, 'createlocaltripentry', 'Create Local Trip Entry', NULL, NULL),
(533, 'localtrip', 'Local Trip', NULL, NULL),
(534, 'local', 'Local', NULL, NULL),
(535, 'othercompany', 'Other Company', NULL, NULL),
(536, 'tripexpens', 'Trip Expens', NULL, NULL),
(537, 'companyupdate', 'Update Company', NULL, NULL),
(538, 'companycreate', 'Add Company', NULL, NULL),
(539, 'name', 'Name', NULL, NULL),
(540, 'address', 'Address', '', NULL),
(541, 'email', 'Email', NULL, NULL),
(542, 'companyweb', 'Company Web', NULL, NULL),
(543, 'nodatafound', 'No Data Found', NULL, NULL),
(544, 'updatecompanyrent', 'Update Company Rent', NULL, NULL),
(545, 'renttype', 'Rent Type', NULL, NULL),
(546, 'rent', 'Rent', NULL, NULL),
(547, 'vatstatus', 'Vat Status', NULL, NULL),
(548, 'vat', 'Vat', NULL, NULL),
(549, 'totalrent', 'Total Rent', NULL, NULL),
(550, 'selectvehiclttype', 'Select Vehicle Type', NULL, NULL),
(551, 'selectcompanyname', 'Select Company Name', NULL, NULL),
(552, 'selectstartingpoint', 'Select Starting Point', NULL, NULL),
(553, 'selectendingpoint', 'Select Ending Point', NULL, NULL),
(554, 'vehicalfitness', 'Vehical Fitness', NULL, NULL),
(555, 'issuedate', 'Issue Date', NULL, NULL),
(556, 'expiredate', 'Expire Date', NULL, NULL),
(557, 'registration', 'Registration', NULL, NULL),
(558, 'insurance', 'Insurance', NULL, NULL),
(559, 'taxtoken', 'Tax Token', NULL, NULL),
(560, 'rootpermit', 'Root Permit', NULL, NULL),
(561, 'regissue', 'Reg Issue', NULL, NULL),
(562, 'reg_expire', 'Reg Expire', NULL, NULL),
(563, 'fitnessissue', 'Fitness Issue', NULL, NULL),
(564, 'fitnessexpire', 'Fitness Expire', NULL, NULL),
(565, 'insuranceissue', 'Insurance Issue', NULL, NULL),
(566, 'insuranceexpire', 'Insurance Expire', NULL, NULL),
(567, 'taxissue', 'Tax Issue', NULL, NULL),
(568, 'tax_expire', 'Tax Expire', NULL, NULL),
(569, 'permitissue', 'Permit Issue', NULL, NULL),
(570, 'permitexpire', 'Permit Expire', NULL, NULL),
(571, 'fuelissue', 'Fuel Issue', NULL, NULL),
(572, 'fuelexpire', 'Fuel Expire', NULL, NULL),
(573, 'fitnessinformation', 'Fitness information', NULL, NULL),
(574, 'vehiclefuelrate', 'Vehicle Fuel Rate', NULL, NULL),
(575, 'registrationno', 'Registration No', NULL, NULL),
(576, 'expensescreate', 'Expenses Create', NULL, NULL),
(577, 'expenseserial', 'Expense Serial', NULL, NULL),
(578, 'expensetype', 'Expense Type', NULL, NULL),
(579, 'expensesupdate', 'Expenses Update', NULL, NULL),
(580, 'expensecreate', 'Expense Create', NULL, NULL),
(581, 'stateinformationupdate', 'State Information Update', NULL, NULL),
(582, 'addstate', 'Add state', '', NULL),
(583, 'state', 'State', NULL, NULL),
(584, 'districtinformation', 'District Information', NULL, NULL),
(585, 'districtname', 'District Name', NULL, NULL),
(586, 'stationinformationupdate', 'Station Information Update', NULL, NULL),
(587, 'station', 'Station', NULL, NULL),
(588, 'stationname', 'Station Name', NULL, NULL),
(589, 'stationinformation', 'Station Information', NULL, NULL),
(590, 'citytocitydistenceupdate', 'CityTo City Distence Update', NULL, NULL),
(591, 'citytocitydistencecreate', 'City To City Distence Create', NULL, NULL),
(592, 'measurementscale', 'Measurement Scale', NULL, NULL),
(593, 'selectvehiclemodel', 'Select Vehicle Model', NULL, NULL),
(594, 'distence', 'Distence', NULL, NULL),
(595, 'stationtostationdistanceinformation', 'Station Distance List', NULL, NULL),
(596, 'bankname', 'Bank Name', NULL, NULL),
(597, 'branchname', 'Branch Name', NULL, NULL),
(598, 'accountnumber', 'Account Number', '', NULL),
(599, 'openingcredit', 'Opening Credit', NULL, NULL),
(600, 'addbank', 'Add Bank', '', NULL),
(601, 'sectorname', 'Sector Name', NULL, NULL),
(602, 'sectortype', 'Sector Type', NULL, NULL),
(603, 'addaccount', 'Add Account', '', NULL),
(604, 'creditaccount', 'Credit Account', NULL, NULL),
(605, 'debitaccount', 'Debit Account', NULL, NULL),
(606, 'companyaddress', 'Company Address', NULL, NULL),
(607, 'mobilenumbner', 'Mobile Numbner', NULL, NULL),
(608, 'phonenumber', 'Phone Number', NULL, NULL),
(609, 'faxnumber', 'Fax Number', NULL, NULL),
(610, 'inflowinformation', 'Rececipt Information', NULL, NULL),
(611, 'addinflow', 'Add Rececipt', '', NULL),
(612, 'receiveddate', 'Received Date', NULL, NULL),
(613, 'receivedfrom', 'Received From', NULL, NULL),
(614, 'receivedtype', 'Received Type', NULL, NULL),
(615, 'cash', 'Cash', NULL, NULL),
(616, 'cheque', 'Cheque', NULL, NULL),
(617, 'payorder', 'Payorder', NULL, NULL),
(618, 'lc', 'LC', NULL, NULL),
(619, 'description', 'Description', NULL, NULL),
(620, 'accountname', 'Account Name', '', NULL),
(621, 'depositbankname', 'Deposit Bank Name', NULL, NULL),
(622, 'payordernumber', 'Payorder Number', NULL, NULL),
(623, 'outflowinformation', 'Payment Information', NULL, NULL),
(624, 'addoutflow', 'Add Payment', '', NULL),
(625, 'paymentdate', 'Payment Date', NULL, NULL),
(626, 'paymentto', 'Payment To', NULL, NULL),
(627, 'paymenttype', 'Payment Type', NULL, NULL),
(628, 'lastonemonth', 'Last One Month', NULL, NULL),
(629, 'lastthreemonth', 'Last Three Month', NULL, NULL),
(630, 'lastsixmonth', 'Last Six Month', NULL, NULL),
(631, 'lastoneyear', 'Last One Year', NULL, NULL),
(632, 'datetodate', 'Date To Date', NULL, NULL),
(633, 'generate', 'Generate', NULL, NULL),
(634, 'report', 'Report', NULL, NULL),
(635, 'customername', 'Customer Name', NULL, NULL),
(636, 'dailyallvehicleperformance', 'Daily All Vehicle performance', NULL, NULL),
(637, 'dailysinglevehicleperformance', 'Daily Single Vehicle performance', NULL, NULL),
(638, 'allvehicleperformance', 'All Vehicle performance', NULL, NULL),
(639, 'vehiclewiseperformance', 'Vehicle wise performance', NULL, NULL),
(640, 'driverwiseperformance', 'Driver wise performance', NULL, NULL),
(641, 'companywiseperformance', 'Company wise performance', NULL, NULL),
(642, 'datetodatecompanywiseperformance', 'Date to date Company wise performance', NULL, NULL),
(643, 'datetodatedriverwiseperformance', 'Date to date Driver wise performance', NULL, NULL),
(644, 'datetodatesinglevehicleperformance', 'Date to date single vehicle performance', NULL, NULL),
(645, 'datetodateallvehicleperformance', 'Date to date all Vehicle performance', NULL, NULL),
(646, 'contact_rent', 'Rate / Contact Rate', NULL, NULL),
(647, 'due', 'Due', NULL, NULL),
(648, 'dailyexpenseallvehicle', 'Daily Expense All Vehicle', NULL, NULL),
(649, 'dailyexpensesinglevehicle', 'Daily Expense Single Vehicle', NULL, NULL),
(650, 'allvehicleexpense', 'All Vehicle Expense', NULL, NULL),
(651, 'vehiclewiseexpense', 'Vehicle wise Expense', NULL, NULL),
(652, 'datetodatesinglevehicleexpense', 'Date to date single vehicle Expense', NULL, NULL),
(653, 'datetodateallvehicleexpense', 'Date to date all Vehicle Expense', NULL, NULL),
(654, 'particularwiseexpense', 'Particular Wise Expense', NULL, NULL),
(655, 'datetodateparticularwiseexpense', 'Date to date Particular Wise Expense', NULL, NULL),
(656, 'regularexpense', 'Regular Expense', NULL, NULL),
(657, 'datetodateregularexpense', 'Date to date Regular Expense', NULL, NULL),
(658, 'maintenanceexpense', 'Maintenance Expense', NULL, NULL),
(659, 'datetodatemaintenanceexpense', 'Date to date Maintenance Expense', NULL, NULL),
(660, 'officeexpense', 'Office Expense', NULL, NULL),
(661, 'datetodateofficeexpense', 'Date to date Office Expense', NULL, NULL),
(662, 'garageexpense', 'Garage Expense', NULL, NULL),
(663, 'datetodategarageexpense', 'Date to date Garage Expense', NULL, NULL),
(664, 'othersexpense', 'Others Expense', NULL, NULL),
(665, 'datetodateothersexpense', 'Date to date others Expense', NULL, NULL),
(666, 'ownervehicleexpense', 'Owner vehicle Expense', NULL, NULL),
(667, 'hirevehicleexpense', 'Hire vehicle Expense', NULL, NULL),
(668, 'vehiclewiseparticularexpense', 'Vehicle wise Particular Expense', NULL, NULL),
(669, 'datetodatevehiclewiseparticularexpense', 'Date to date vehicle wise Particular Expense', NULL, NULL),
(670, 'regular', 'Regular', NULL, NULL),
(671, 'maintenance', 'Maintenance', NULL, NULL),
(672, 'others', 'Others', NULL, NULL),
(673, 'office', 'Office', NULL, NULL),
(674, 'garage', 'Garage', NULL, NULL),
(675, 'profit1', 'Profit 1', NULL, NULL),
(676, 'profit2', 'Profit 2', NULL, NULL),
(677, 'totalprofit', 'Total Profit', NULL, NULL),
(678, 'netbalanceprofit', 'Net Balance / Profit', NULL, NULL),
(679, 'contactrate', 'Contact Rate', NULL, NULL),
(680, 'totalexpense', 'Total Expense', NULL, NULL),
(681, 'to', 'To', NULL, NULL),
(682, 'exportimportlocal', 'Export - Import - Local', NULL, NULL),
(683, 'mobileno', 'Mobile No', NULL, NULL),
(684, 'emailaddress', 'Email Address', NULL, NULL),
(685, 'website', 'Website', NULL, NULL),
(686, 'exprtimport', 'Exprt & Import', NULL, NULL),
(687, 'pdf', 'PDF', NULL, NULL),
(688, 'addlanguagename', 'Add Language Name', '', NULL),
(689, 'language', 'Language', NULL, NULL),
(690, 'activestatus', 'Active Status', '', NULL),
(691, 'addphrase', 'Add Phrase', '', NULL),
(692, 'languagelist', 'Language List', NULL, NULL),
(693, 'phrasename', 'Phrase Name', NULL, NULL),
(694, 'phrase', 'Phrase', NULL, NULL),
(695, 'label', 'Label', NULL, NULL),
(696, 'reset', 'Reset', NULL, NULL),
(697, 'setting', 'Setting', NULL, NULL),
(698, 'ltr', 'LTR', NULL, NULL),
(699, 'rtr', 'RTR', NULL, NULL),
(700, 'selectstate', 'Select State', NULL, NULL),
(701, 'vehicleregistrationnumber', 'Vehicle Registration Number', NULL, NULL),
(702, 'tripinformantion', 'Trip Informantion', NULL, NULL),
(703, 'updatesetting', 'Update Setting', NULL, NULL),
(704, 'title', 'Title', NULL, NULL),
(705, 'footertext', 'Footer Text', NULL, NULL),
(706, 'update', 'Update', NULL, NULL),
(707, 'fullname', 'Full Name', NULL, NULL),
(708, 'username', 'Username', NULL, NULL),
(709, 'password', 'Password', NULL, NULL),
(710, 'repeatpassword', 'Repeat Password', NULL, NULL),
(711, 'usertype', 'User Type', NULL, NULL),
(712, 'selecttype', 'Select Type', NULL, NULL),
(713, 'superadmin', 'Super Admin', NULL, NULL),
(714, 'lastlogin', 'Last login', NULL, NULL),
(715, 'referencecellnumber', 'Reference Cell Number', NULL, NULL),
(716, 'expenseupdate', 'Expense Update', NULL, NULL),
(717, 'deactivate', 'Deactivate', NULL, NULL),
(718, 'vatincluded', 'Vat Included', NULL, NULL),
(719, 'vatexcluded', 'Vat Excluded', NULL, NULL),
(720, 'kilometers', 'Kilo Meters', NULL, NULL),
(721, 'miles', 'Miles', NULL, NULL),
(722, 'totaladvance', 'Total Advance', NULL, NULL),
(723, 'totalbalance', 'Total Balance', NULL, NULL),
(724, 'totalexpens', 'Total Expens', NULL, NULL),
(725, 'updatelocaltripentry', 'Update Local Trip Entry', NULL, NULL),
(726, 'tripinformation', 'Trip Information', NULL, NULL),
(727, 'oldpassword', 'Old Password', NULL, NULL),
(728, 'newpassword', 'New Password', NULL, NULL),
(729, 'logo', 'Logo', NULL, NULL),
(730, 'favicon', 'Favicon', NULL, NULL),
(731, 'addlogo', 'Add Logo', NULL, NULL),
(732, 'updatelogo', 'Update Logo', NULL, NULL),
(733, 'position', 'Position', NULL, NULL),
(735, 'managelogo', 'Manage Logo', NULL, NULL),
(736, 'stateinformation', 'State Information', NULL, NULL),
(737, 'distense', 'Distense', NULL, NULL),
(738, 'logomanage', 'Logo Manage', NULL, NULL),
(739, 'statename', 'State Name', NULL, NULL),
(740, 'updatesuccessfully', 'Update Successfully.', NULL, NULL),
(741, 'savesuccessfully', 'Save Successfully', NULL, NULL),
(742, 'only_png_jpg_jpeg_file_selected', 'Only PNG,JPG,JPEG File Selected.', NULL, NULL),
(743, 'deletesuccessfully', 'Delete Successfully', NULL, NULL),
(744, 'fillupallrequiredfields', 'Fillup all required fields', NULL, NULL),
(746, 'registrationdate', 'Registration Date', NULL, NULL),
(747, 'fitnessdate', 'Fitness Date', NULL, NULL),
(748, 'insurancedate', 'Insurance Date', NULL, NULL),
(749, 'taxtokendate', 'Tax Token Date', NULL, NULL),
(750, 'rootpermitdate', 'Root Permit Date', NULL, NULL),
(751, 'alltriplist', 'All Trip List', NULL, NULL),
(752, 'dailytriplist', 'Daily Trip List', NULL, NULL),
(753, 'payordernumber', 'Payorder Number', NULL, NULL),
(754, 'payordernumber', 'Pay Order Number', NULL, NULL),
(755, 'payordernumber', 'Payorder Number', NULL, NULL),
(756, 'moneyreceipt', 'Money Receipt', NULL, NULL),
(757, 'serialno', 'Serial No', NULL, NULL),
(759, 'voucher', 'Voucher', NULL, NULL),
(760, 'phone', 'Phone', NULL, NULL),
(761, 'fax', 'Fax', NULL, NULL),
(762, 'paymentfrom', 'Payment From', NULL, NULL),
(763, 'signatureofpaymentgiver', 'Signature of Payment Giver', NULL, NULL),
(764, 'signatureofreceipient', 'Signature of Receipient', NULL, NULL),
(765, 'credit', 'Credit', NULL, NULL),
(766, 'debit', 'Debit', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lg_setting`
--

CREATE TABLE `lg_setting` (
  `id` int(11) NOT NULL,
  `language` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lg_setting`
--

INSERT INTO `lg_setting` (`id`, `language`) VALUES
(1, 'engilsh');

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
-- Dumping data for table `vehicle_fuel_rate`
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

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lg_setting`
--
ALTER TABLE `lg_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
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
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=767;

--
-- AUTO_INCREMENT for table `lg_setting`
--
ALTER TABLE `lg_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `vehicle_fitness`
--
ALTER TABLE `vehicle_fitness`
  MODIFY `v_fitness_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
