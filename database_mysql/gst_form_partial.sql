-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2017 at 09:23 PM
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
-- Database: `GST`
--

-- --------------------------------------------------------

--
-- Table structure for table `gst_form_partial`
--

CREATE TABLE `gst_form_partial` (
  `id` int(11) NOT NULL,
  `gst_id` int(11) NOT NULL,
  `tableentry_index` int(11) NOT NULL,
  `tableentry_description` varchar(10) NOT NULL,
  `tableentry_hsncode` varchar(10) NOT NULL,
  `tableentry_quantity` int(11) NOT NULL,
  `tableentry_uom` varchar(10) NOT NULL,
  `tableentry_rate` int(11) NOT NULL,
  `tableentry_total` int(11) NOT NULL,
  `tableentry_discount` int(11) NOT NULL,
  `tableentry_taxable` int(11) NOT NULL,
  `tableentry_crate` int(11) NOT NULL,
  `tableentry_camount` int(11) NOT NULL,
  `tableentry_srate` int(11) NOT NULL,
  `tableentry_samount` int(11) NOT NULL,
  `tableentry_irate` int(11) NOT NULL,
  `tableentry_iamount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gst_form_partial`
--
ALTER TABLE `gst_form_partial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gst_form_partial`
--
ALTER TABLE `gst_form_partial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
