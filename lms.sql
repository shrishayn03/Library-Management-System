-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 10:10 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_name` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `author_name`) VALUES
(16, 'varun'),
(18, 'deco3'),
(19, 'dec');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(1000) NOT NULL,
  `author_name` varchar(1000) NOT NULL,
  `pub_name` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `book_name`, `author_name`, `pub_name`, `price`) VALUES
(1, 'ddd', 'deco3', 'hello2', '2000'),
(2, 'mo', 'deco3', 'hello2', '2222'),
(5, 'nano', 'varun', 'hello2', '222'),
(6, 'dada', 'deco3', 'hello2', '20000'),
(7, 'ddd', 'deco3', 'hello2', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE IF NOT EXISTS `issue_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(1000) DEFAULT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `book_name` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`id`, `userid`, `name`, `address`, `email`, `book_name`) VALUES
(7, '3', 'vikas', 'gggg', 'dada@gmail.com', 'ddd');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `mem_name` varchar(1000) NOT NULL,
  `mem_Address` varchar(1000) NOT NULL,
  `mem_email` varchar(1000) NOT NULL,
  `mem_phone` varchar(1000) NOT NULL,
  PRIMARY KEY (`mem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mem_id`, `mem_name`, `mem_Address`, `mem_email`, `mem_phone`) VALUES
(1, 'dddd', 'gggg', 'd@gmail.com', '0999999'),
(2, 'dddd', 'gggg', 'd@gmail.com', '0999999'),
(3, 'vikas', 'gggg', 'dada@gmail.com', '9939492922');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE IF NOT EXISTS `publisher` (
  `pub_id` int(11) NOT NULL AUTO_INCREMENT,
  `pub_name` varchar(1000) NOT NULL,
  PRIMARY KEY (`pub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`pub_id`, `pub_name`) VALUES
(2, 'hello2');

-- --------------------------------------------------------

--
-- Table structure for table `submit`
--

CREATE TABLE IF NOT EXISTS `submit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `book_name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `submit`
--

INSERT INTO `submit` (`id`, `name`, `book_name`, `email`) VALUES
(1, 'dddd', 'moooo', 'd@gmail.com'),
(2, 'dddd', 'nano', 'd@gmail.com'),
(3, 'dddd', 'nano', 'd@gmail.com'),
(4, 'vikas', 'nano', 'dada@gmail.com'),
(5, 'vikas', 'dada', 'dada@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
