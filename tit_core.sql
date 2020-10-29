-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 03:47 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tit_core`
--

-- --------------------------------------------------------

--
-- Table structure for table `tit_members`
--

CREATE TABLE `tit_members` (
  `date_of_registration` timestamp NOT NULL DEFAULT current_timestamp(),
  `member_id` bigint(20) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `member_nid` varchar(16) NOT NULL,
  `member_dob` date NOT NULL,
  `member_gender` varchar(5) NOT NULL,
  `linked_msisdn` varchar(13) NOT NULL,
  `member_pin` varchar(255) NOT NULL,
  `member_status` varchar(255) NOT NULL DEFAULT 'New',
  `active_pin` varchar(3) NOT NULL DEFAULT 'No',
  `source` varchar(255) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `last_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tit_members`
--

INSERT INTO `tit_members` (`date_of_registration`, `member_id`, `member_name`, `member_nid`, `member_dob`, `member_gender`, `linked_msisdn`, `member_pin`, `member_status`, `active_pin`, `source`, `session_id`, `last_updated`) VALUES
('2020-09-25 23:29:34', 1, 'Rugambwa Bobson', '1198880200827031', '1988-03-30', 'Male', '250784525759', '8c1ee7f57bb5109f003f953fac9329dc5fce2fa6c9eb6343181bde4fb03714e1', 'Active', 'No', 'ussd', '1707245974305537', '2020-10-14 17:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `tit_member_folios`
--

CREATE TABLE `tit_member_folios` (
  `folio_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `folio_id` bigint(20) NOT NULL,
  `member_id` bigint(20) NOT NULL,
  `offer_id` bigint(20) NOT NULL,
  `subscription_value` decimal(15,4) NOT NULL,
  `last_subscription` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tit_offers`
--

CREATE TABLE `tit_offers` (
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `offer_id` bigint(20) NOT NULL,
  `offer_name` varchar(255) NOT NULL,
  `min_units` int(11) NOT NULL,
  `max_units` int(11) NOT NULL,
  `offer_unit_price` decimal(15,4) NOT NULL,
  `offer_target` decimal(15,4) NOT NULL,
  `units_offered` int(11) NOT NULL,
  `subscription_start_date` date NOT NULL,
  `units_subscribed` int(11) NOT NULL,
  `units_balance` int(11) NOT NULL,
  `amount_subscribed` decimal(15,4) NOT NULL,
  `subscription_end_date` date NOT NULL,
  `offer_status` varchar(255) NOT NULL DEFAULT 'Active',
  `last_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tit_offers`
--

INSERT INTO `tit_offers` (`date_created`, `offer_id`, `offer_name`, `min_units`, `max_units`, `offer_unit_price`, `offer_target`, `units_offered`, `subscription_start_date`, `units_subscribed`, `units_balance`, `amount_subscribed`, `subscription_end_date`, `offer_status`, `last_updated`) VALUES
('2020-09-26 00:34:10', 101, 'TIT Initial', 4, 800, '5000.0000', '4000000.0000', 800, '2020-09-26', 0, 800, '0.0000', '2020-11-26', 'Active', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tit_offer_subscriptions`
--

CREATE TABLE `tit_offer_subscriptions` (
  `subcription_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `subscription_id` bigint(20) NOT NULL,
  `member_id` bigint(20) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `units_subscribed` int(11) NOT NULL,
  `amount_subscribed` decimal(15,4) NOT NULL,
  `on_offer` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `trans_ref` bigint(20) NOT NULL,
  `subscription_status` varchar(255) NOT NULL DEFAULT 'New'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tit_offer_subscriptions`
--

INSERT INTO `tit_offer_subscriptions` (`subcription_date`, `subscription_id`, `member_id`, `offer_id`, `units_subscribed`, `amount_subscribed`, `on_offer`, `balance`, `trans_ref`, `subscription_status`) VALUES
('2020-10-14 16:43:54', 1, 1, 101, 2, '10000.0000', 0, 0, 0, 'New');

-- --------------------------------------------------------

--
-- Table structure for table `tit_payment_transactions`
--

CREATE TABLE `tit_payment_transactions` (
  `transaction_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `transaction_id` bigint(20) NOT NULL,
  `subscription_id` bigint(20) NOT NULL,
  `offer_id` bigint(20) NOT NULL,
  `member_id` bigint(20) NOT NULL,
  `linked_msisdn` varchar(255) NOT NULL,
  `transaction_amount` decimal(15,4) NOT NULL,
  `payment_ref` varchar(255) NOT NULL,
  `transaction_status` varchar(255) NOT NULL DEFAULT 'New',
  `lastupdated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tit_payment_transactions`
--

INSERT INTO `tit_payment_transactions` (`transaction_date`, `transaction_id`, `subscription_id`, `offer_id`, `member_id`, `linked_msisdn`, `transaction_amount`, `payment_ref`, `transaction_status`, `lastupdated`) VALUES
('2020-10-14 16:43:54', 1, 1, 101, 1, '250784525759', '10000.0000', '', '', '2020-10-14 16:43:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tit_members`
--
ALTER TABLE `tit_members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tit_member_folios`
--
ALTER TABLE `tit_member_folios`
  ADD PRIMARY KEY (`folio_id`);

--
-- Indexes for table `tit_offers`
--
ALTER TABLE `tit_offers`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `tit_offer_subscriptions`
--
ALTER TABLE `tit_offer_subscriptions`
  ADD PRIMARY KEY (`subscription_id`);

--
-- Indexes for table `tit_payment_transactions`
--
ALTER TABLE `tit_payment_transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tit_members`
--
ALTER TABLE `tit_members`
  MODIFY `member_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tit_member_folios`
--
ALTER TABLE `tit_member_folios`
  MODIFY `folio_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tit_offers`
--
ALTER TABLE `tit_offers`
  MODIFY `offer_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `tit_offer_subscriptions`
--
ALTER TABLE `tit_offer_subscriptions`
  MODIFY `subscription_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tit_payment_transactions`
--
ALTER TABLE `tit_payment_transactions`
  MODIFY `transaction_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
