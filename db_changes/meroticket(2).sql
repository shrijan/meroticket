-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2012 at 05:03 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `meroticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `audit`
--

CREATE TABLE IF NOT EXISTS `audit` (
  `AuditID` int(11) NOT NULL AUTO_INCREMENT,
  `AuditType` varchar(255) DEFAULT NULL,
  `AuditInfo` varchar(255) DEFAULT NULL,
  `AuditResults` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`AuditID`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `barcode`
--

CREATE TABLE IF NOT EXISTS `barcode` (
  `ticket_barcodeid` int(11) NOT NULL AUTO_INCREMENT,
  `ticketid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `eventid` int(11) DEFAULT NULL,
  `ticketcount` int(11) DEFAULT NULL,
  `sessionid` int(11) DEFAULT NULL,
  PRIMARY KEY (`ticket_barcodeid`),
  KEY `eventid` (`eventid`),
  KEY `sessionid` (`sessionid`),
  KEY `ticketid` (`ticketid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `CustorerID` int(11) NOT NULL AUTO_INCREMENT,
  `Customer_lname` varchar(255) DEFAULT NULL,
  `Customer_fname` varchar(255) DEFAULT NULL,
  `Customer_address` varchar(255) DEFAULT NULL,
  `Customer_phone` varchar(255) DEFAULT NULL,
  `Customer_email` varchar(255) DEFAULT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `CustomerTypeID` int(11) DEFAULT NULL,
  `EncryptedPassword` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CustorerID`),
  KEY `CustomerTypeID` (`CustomerTypeID`),
  KEY `ticket_id` (`ticket_id`),
  KEY `userid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customertype`
--

CREATE TABLE IF NOT EXISTS `customertype` (
  `CustomerTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerTypeInfo` varchar(255) DEFAULT NULL,
  `MaxTicketAllowed` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CustomerTypeID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE IF NOT EXISTS `discount` (
  `discount_id` int(11) NOT NULL AUTO_INCREMENT,
  `discount_code` varchar(255) DEFAULT NULL,
  `discount_type` varchar(255) DEFAULT NULL,
  `discount_descp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`discount_id`),
  KEY `discount_code` (`discount_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `eventsID` int(11) NOT NULL AUTO_INCREMENT,
  `eventsTypeID` int(11) DEFAULT NULL,
  `event_titles` varchar(256) NOT NULL,
  `start_dates` varchar(255) DEFAULT NULL,
  `end__dates` varchar(255) DEFAULT NULL,
  `event_addresses` varchar(255) DEFAULT NULL,
  `event_suburbs` varchar(90) NOT NULL,
  `event_des` varchar(255) DEFAULT NULL,
  `Event_pictures` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `MaxTicketAllowed` int(11) DEFAULT NULL,
  `TicketAvailable` int(11) DEFAULT NULL,
  `event_postcodes` int(10) NOT NULL,
  PRIMARY KEY (`eventsID`),
  KEY `eventsTypeID` (`eventsTypeID`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `eventscategorys`
--

CREATE TABLE IF NOT EXISTS `eventscategorys` (
  `eventsTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `EventCategoryName` varchar(255) DEFAULT NULL,
  `EventCat_descp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`eventsTypeID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `PaymentID` int(11) NOT NULL AUTO_INCREMENT,
  `PaymentTypeID` int(11) DEFAULT NULL,
  `CustomerID` varchar(255) DEFAULT NULL,
  `PaymentDate` varchar(255) DEFAULT NULL,
  `PaymentAmount` varchar(255) DEFAULT NULL,
  `EncryptedCreditCardinfo` varchar(255) DEFAULT NULL,
  `ccvnumber` int(11) DEFAULT NULL,
  PRIMARY KEY (`PaymentID`),
  KEY `CustomerID` (`CustomerID`),
  KEY `PaymentTypeID` (`PaymentTypeID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `paymenttype`
--

CREATE TABLE IF NOT EXISTS `paymenttype` (
  `PaymentTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `PaymentType` varchar(255) DEFAULT NULL,
  `PaymentInfo` varchar(255) DEFAULT NULL,
  `AccountInfo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`PaymentTypeID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ticketcategory`
--

CREATE TABLE IF NOT EXISTS `ticketcategory` (
  `TicketTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `TickeTypeInfo` varchar(255) DEFAULT NULL,
  `NoOfSeatsAvaiable` int(11) DEFAULT NULL,
  PRIMARY KEY (`TicketTypeID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `tickets_id` int(11) NOT NULL AUTO_INCREMENT,
  `eventid` varchar(255) DEFAULT NULL,
  `ticketcatid` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `discount_id` int(11) DEFAULT NULL,
  `Ticket_barcodeid` varchar(255) DEFAULT NULL,
  `ticket_valid_date` varchar(255) DEFAULT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `seating_info(optional)` varchar(255) DEFAULT NULL,
  `ticketTypeID` int(11) DEFAULT NULL,
  `ticket_name` varchar(32) NOT NULL,
  PRIMARY KEY (`tickets_id`),
  KEY `discount_id` (`discount_id`),
  KEY `eventid` (`eventid`),
  KEY `Ticket_barcodeid` (`Ticket_barcodeid`),
  KEY `ticketcatid` (`ticketcatid`),
  KEY `ticketTypeID` (`ticketTypeID`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `transactionID` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_type` varchar(255) DEFAULT NULL,
  `transaction_info` varchar(255) DEFAULT NULL,
  `transaction_date` varchar(255) DEFAULT NULL,
  `customerid` int(11) DEFAULT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  `paymentID` int(11) DEFAULT NULL,
  PRIMARY KEY (`transactionID`),
  KEY `customerid` (`customerid`),
  KEY `ticket_id` (`ticket_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_line`
--

CREATE TABLE IF NOT EXISTS `transaction_line` (
  `trans_id` int(11) NOT NULL AUTO_INCREMENT,
  `transctionid` varchar(255) DEFAULT NULL,
  `eventid` varchar(255) DEFAULT NULL,
  `ticketprice` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `paymentID` int(11) DEFAULT NULL,
  PRIMARY KEY (`trans_id`),
  KEY `eventid` (`eventid`),
  KEY `paymentID` (`paymentID`),
  KEY `transctionid` (`transctionid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `userbankinfos`
--

CREATE TABLE IF NOT EXISTS `userbankinfos` (
  `ubankinfo_id` int(11) NOT NULL AUTO_INCREMENT,
  `bankname` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `accountNumber` varchar(255) DEFAULT NULL,
  `accountName` varchar(255) DEFAULT NULL,
  `SSN` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`ubankinfo_id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `utypeid` int(11) DEFAULT NULL,
  `u_Fname` varchar(255) DEFAULT NULL,
  `u_Lname` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Contactinfo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `valid` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uid` (`uid`),
  KEY `utypeid` (`utypeid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `utypeid`, `u_Fname`, `u_Lname`, `Address`, `Contactinfo`, `email`, `Password`, `valid`) VALUES
(55, 1, 'admin', 'admin', '20 meadow', '15103567506', 'test@hotmail.com', '7cecfd5f9fe6888390e4191ae10180c1578deec4', 0),
(54, 1, 'shrijan123', 'piya', '20 meadow', '15103567506', 'test@gmail.com', 'f0d09ad1b96c5a03fa8e1c9c3e70472004f6257f', 0),
(53, 1, 'shrijan', 'piya', '20 meadow', '15103567506', 'shrijan_piya@hotmail.com', '7cecfd5f9fe6888390e4191ae10180c1578deec4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE IF NOT EXISTS `usertype` (
  `userTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `Usertype` varchar(255) DEFAULT NULL,
  `previledge` varchar(255) DEFAULT NULL,
  `previledge_info` varchar(255) DEFAULT NULL,
  `MaxTicketAllowed` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userTypeID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
