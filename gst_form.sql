-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2017 at 01:32 PM
-- Server version: 5.7.18
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digst`
--

-- --------------------------------------------------------

--
-- Table structure for table `gst_form`
--

CREATE TABLE `gst_form` (
  `id` int(11) NOT NULL,
  `company_name` varchar(25) NOT NULL,
  `address_1` varchar(50) NOT NULL,
  `address_2` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `website` varchar(15) NOT NULL,
  `gstin_no` varchar(10) NOT NULL,
  `transportation_mode` varchar(20) NOT NULL,
  `tax_payable` varchar(10) NOT NULL,
  `vehicle_no` varchar(10) NOT NULL,
  `invoice_serial_no` varchar(10) NOT NULL,
  `date_time_of_supply` varchar(30) NOT NULL,
  `invoice_date` varchar(10) NOT NULL,
  `place_of_supply` varchar(10) NOT NULL,
  `receiver_name` varchar(20) NOT NULL,
  `receiver_address` varchar(30) NOT NULL,
  `receiver_state` varchar(10) NOT NULL,
  `receiver_state_code` varchar(10) NOT NULL,
  `receiver_gstin_no` varchar(10) NOT NULL,
  `consignee_name` text NOT NULL,
  `consignee_address` varchar(30) NOT NULL,
  `consignee_state` varchar(10) NOT NULL,
  `consignee_state_code` varchar(10) NOT NULL,
  `consignee_gstin_no` varchar(10) NOT NULL,
  `s_no` int(10) NOT NULL,
  `goods_description` varchar(10) NOT NULL,
  `hsn_code_gst` varchar(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `uom` varchar(10) NOT NULL,
  `rate` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `taxable_value` int(11) NOT NULL,
  `cgst_rate` int(11) NOT NULL,
  `cgst_amount` int(11) NOT NULL,
  `sgst_rate` int(11) NOT NULL,
  `sgst_amount` int(11) NOT NULL,
  `igst_rate` int(11) NOT NULL,
  `igst_amount` int(11) NOT NULL,
  `invoice_value` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `freight_charges` int(11) NOT NULL,
  `loading_charges` int(11) NOT NULL,
  `insurance_charges` int(11) NOT NULL,
  `other_charges` int(11) NOT NULL,
  `invoice_total` int(11) NOT NULL,
  `certification` varchar(100) NOT NULL,
  `reference_number` varchar(40) NOT NULL,
  `terms_condition` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL,
  `authorised_name` varchar(30) NOT NULL,
  `authorised_designation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gst_form`
--
ALTER TABLE `gst_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gst_form`
--
ALTER TABLE `gst_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
